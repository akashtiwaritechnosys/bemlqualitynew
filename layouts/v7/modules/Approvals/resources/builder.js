/* Enhanced Approval Builder JS Engine */
var nodes = [];
var connections = [];
var tempConnection = null;
var draggingNode = null;
var dragOffset = { x: 0, y: 0 };
var nextId = 1000;

document.addEventListener('DOMContentLoaded', function () {
    initBuilder();
});

function initBuilder() {
    console.log("Initializing Enhanced Approval Builder...");

    // Load Graph
    if (GRAPH_DATA && GRAPH_DATA.length > 0) {
        GRAPH_DATA.forEach(n => {
            addNodeToCanvas(n);
            if (n.parent_id) {
                connections.push({ from: n.parent_id, to: n.id });
            }
        });
        renderConnections();
    }

    // Canvas Events
    var canvas = document.getElementById('canvas');
    canvas.addEventListener('mousemove', function (e) {
        if (draggingNode) {
            var rect = canvas.getBoundingClientRect();
            var x = e.clientX - rect.left - dragOffset.x + canvas.scrollLeft;
            var y = e.clientY - rect.top - dragOffset.y + canvas.scrollTop;

            draggingNode.x = x;
            draggingNode.y = y;
            updateNodePosition(draggingNode);
            renderConnections();
        }
        if (tempConnection) {
            renderConnections(e);
        }
    });

    canvas.addEventListener('mouseup', function (e) {
        draggingNode = null;
        if (tempConnection) {
            tempConnection = null;
            renderConnections();
        }
    });
}

function allowDrop(ev) { ev.preventDefault(); }

function drop(ev) {
    ev.preventDefault();
    var type = ev.dataTransfer.getData("type");
    if (!type) return;

    var rect = document.getElementById('canvas').getBoundingClientRect();
    var x = ev.clientX - rect.left + document.getElementById('canvas').scrollLeft;
    var y = ev.clientY - rect.top + document.getElementById('canvas').scrollTop;

    var newNode = {
        id: nextId++,
        type: type,
        data: getDefaultData(type),
        x: x,
        y: y
    };
    addNodeToCanvas(newNode);
}

function getDefaultData(type) {
    if (type == 'start') return { label: 'Start' };
    if (type == 'condition') return { field: '', operator: '=', value: '' };
    if (type == 'approval_stage') return { name: 'Stage 1', approver_type: 'user', approver_id: '' };
    if (type == 'send_email') return { subject: 'New Email', body: '', templateId: '' };
    if (type == 'wait') return { delay: 0, unit: 'minutes' };
    if (type == 'field_update') return { field: '', value: '' };
    if (type == 'webhook') return { url: '', method: 'POST' };
    if (type == 'end') return { label: 'End' };
    return {};
}

// Drag from Sidebar
document.querySelectorAll('.ap-node-tool').forEach(t => {
    t.addEventListener('dragstart', ev => {
        ev.dataTransfer.setData("type", ev.target.getAttribute('data-type'));
    });
});

function addNodeToCanvas(node) {
    nodes.push(node);

    var div = document.createElement('div');
    div.className = 'ap-node';
    div.id = 'node-' + node.id;
    div.style.left = node.x + 'px';
    div.style.top = node.y + 'px';

    var icon = 'fa-cog';
    var color = '#555';
    if (node.type == 'start') { icon = 'fa-play-circle'; color = '#28a745'; }
    if (node.type == 'condition') { icon = 'fa-code-fork'; color = '#6f42c1'; }
    if (node.type == 'approval_stage') { icon = 'fa-check-square-o'; color = '#007bff'; }
    if (node.type == 'send_email') { icon = 'fa-envelope'; color = '#007bff'; }
    if (node.type == 'wait') { icon = 'fa-clock-o'; color = '#ffc107'; }
    if (node.type == 'field_update') { icon = 'fa-pencil'; color = '#17a2b8'; }
    if (node.type == 'webhook') { icon = 'fa-exchange'; color = '#6610f2'; }
    if (node.type == 'end') { icon = 'fa-stop-circle'; color = '#dc3545'; }

    div.innerHTML = `
        <div class="ap-node-header" onmousedown="startDrag(event, ${node.id})">
            <span><i class="fa ${icon}" style="color:${color}"></i> ${node.type.replace('_', ' ')}</span>
            <i class="fa fa-times text-muted" onclick="deleteNode(${node.id})"></i>
        </div>
        <div class="ap-node-body" onclick="editNode(${node.id})">
            ${getNodeSummary(node)}
        </div>
        ${node.type !== 'start' ? `<div class="ap-port in" onmouseup="finishConnect(${node.id})"></div>` : ''}
        ${node.type !== 'end' ? `<div class="ap-port out" onmousedown="startConnect(event, ${node.id})"></div>` : ''}
    `;

    document.getElementById('canvas').appendChild(div);
    node.domId = div.id;
}

function getNodeSummary(node) {
    if (node.type == 'start') return 'On Creation/Edit';
    if (node.type == 'condition') {
        if (node.data.field) return `${node.data.field} ${node.data.operator} ${node.data.value}`;
        return 'Configure Condition';
    }
    if (node.type == 'approval_stage') {
        var name = node.data.name || 'Stage';
        return `${name}<br><small>${node.data.approver_type}</small>`;
    }
    if (node.type == 'send_email') return node.data.subject || 'No Subject';
    if (node.type == 'wait') return (node.data.delay || 0) + ' ' + (node.data.unit || 'minutes');
    if (node.type == 'field_update') return node.data.field ? `Update ${node.data.field}` : 'Configure Field';
    if (node.type == 'webhook') return node.data.url || 'Configure URL';
    if (node.type == 'end') return 'Workflow End';
    return '...';
}

function updateNodePosition(node) {
    var el = document.getElementById(node.domId);
    el.style.left = node.x + 'px';
    el.style.top = node.y + 'px';
}

function startDrag(e, id) {
    var node = nodes.find(n => n.id == id);
    if (node) {
        draggingNode = node;
        var rect = document.getElementById('canvas').getBoundingClientRect();
        var elRect = document.getElementById(node.domId).getBoundingClientRect();
        dragOffset.x = e.clientX - elRect.left;
        dragOffset.y = e.clientY - elRect.top;
        e.stopPropagation();
    }
}

function startConnect(e, id) {
    var node = nodes.find(n => n.id == id);
    tempConnection = {
        from: id,
        startX: node.x + 100,
        startY: node.y + 70
    };
    e.stopPropagation();
}

function finishConnect(id) {
    if (tempConnection && tempConnection.from != id) {
        // Prevent duplicates
        var exists = connections.find(c => c.from == tempConnection.from && c.to == id);
        if (!exists) {
            connections.push({ from: tempConnection.from, to: id });
            renderConnections();
        }
    }
    tempConnection = null;
}

function renderConnections(mouseEvent) {
    var svg = document.getElementById('ap-connections');
    svg.innerHTML = '';

    connections.forEach(c => {
        var n1 = nodes.find(n => n.id == c.from);
        var n2 = nodes.find(n => n.id == c.to);
        if (n1 && n2) drawLine(svg, n1.x + 100, n1.y + 70, n2.x + 100, n2.y - 6, false);
    });

    if (tempConnection && mouseEvent) {
        var rect = document.getElementById('canvas').getBoundingClientRect();
        var mx = mouseEvent.clientX - rect.left + document.getElementById('canvas').scrollLeft;
        var my = mouseEvent.clientY - rect.top + document.getElementById('canvas').scrollTop;
        drawLine(svg, tempConnection.startX, tempConnection.startY, mx, my, true);
    }
}

function drawLine(svg, x1, y1, x2, y2, dashed) {
    var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
    var d = `M ${x1} ${y1} C ${x1} ${y1 + 50}, ${x2} ${y2 - 50}, ${x2} ${y2}`;
    path.setAttribute("d", d);
    path.setAttribute("class", "connection");
    if (dashed) path.style.strokeDasharray = "5,5";
    svg.appendChild(path);
}

function deleteNode(id) {
    nodes = nodes.filter(n => n.id != id);
    connections = connections.filter(c => c.from != id && c.to != id);
    var el = document.getElementById('node-' + id);
    if (el) el.remove();
    renderConnections();
    document.getElementById('property-panel').innerHTML = '<h4>Properties</h4><p class="text-muted">Select a node...</p>';
}

function editNode(id) {
    var node = nodes.find(n => n.id == id);
    if (!node) return;

    var panel = $('#property-panel');
    panel.html(`<h4>${node.type.replace('_', ' ')} Properties</h4>`);

    function escapeHtml(text) {
        if (!text) return '';
        return text.replace(/[&<>"']/g, function (m) {
            switch (m) {
                case '&': return '&amp;';
                case '<': return '&lt;';
                case '>': return '&gt;';
                case '"': return '&quot;';
                case "'": return '&#039;';
            }
        });
    }

    if (node.type == 'condition') {
        panel.append(`
            <div class="control-group">
                <label>Field</label>
                <input type="text" id="prop_field" class="input-large" value="${escapeHtml(node.data.field)}" oninput="updateProp(${id}, 'field', this.value)">
            </div>
            <div class="control-group">
                <label>Operator</label>
                <select id="prop_op" class="input-large" onchange="updateProp(${id}, 'operator', this.value)">
                    <option value="=" ${node.data.operator == '=' ? 'selected' : ''}>=</option>
                    <option value="!=" ${node.data.operator == '!=' ? 'selected' : ''}>!=</option>
                    <option value=">" ${node.data.operator == '>' ? 'selected' : ''}>&gt;</option>
                    <option value="<" ${node.data.operator == '<' ? 'selected' : ''}>&lt;</option>
                    <option value=">=" ${node.data.operator == '>=' ? 'selected' : ''}>&gt;=</option>
                    <option value="<=" ${node.data.operator == '<=' ? 'selected' : ''}>&lt;=</option>
                </select>
            </div>
            <div class="control-group">
                <label>Value</label>
                <input type="text" id="prop_val" class="input-large" value="${escapeHtml(node.data.value)}" oninput="updateProp(${id}, 'value', this.value)">
            </div>
        `);
    } else if (node.type == 'approval_stage') {
        var approverOptions = '';
        if (typeof USERS_LIST !== 'undefined') {
            for (var userId in USERS_LIST) {
                approverOptions += `<option value="${userId}" ${node.data.approver_id == userId ? 'selected' : ''}>${escapeHtml(USERS_LIST[userId])}</option>`;
            }
        }

        panel.append(`
            <div class="control-group">
                <label>Stage Name</label>
                <input type="text" id="prop_name" class="input-large" value="${escapeHtml(node.data.name)}" oninput="updateProp(${id}, 'name', this.value)">
            </div>
            <div class="control-group">
                <label>Approver Type</label>
                <select id="prop_atype" class="input-large" onchange="updateProp(${id}, 'approver_type', this.value)">
                    <option value="user" ${node.data.approver_type == 'user' ? 'selected' : ''}>User</option>
                    <option value="group" ${node.data.approver_type == 'group' ? 'selected' : ''}>Group</option>
                </select>
            </div>
            <div class="control-group">
                <label>Approver</label>
                <select id="prop_aid" class="input-large" onchange="updateProp(${id}, 'approver_id', this.value)">
                    <option value="">Select...</option>
                    ${approverOptions}
                </select>
            </div>
        `);
    } else if (node.type == 'send_email') {
        var subject = node.data.subject || '';
        var body = node.data.body || '';
        var templateId = node.data.templateId || '';

        var html = `
            <div class="control-group">
                <label>Subject</label>
                <input type="text" id="node-subject" class="input-large" value="${escapeHtml(subject)}">
            </div>
            <div class="control-group">
                <label>Body</label>
                <textarea id="node-content" class="input-large" rows="8">${escapeHtml(body)}</textarea>
            </div>
            <div class="control-group" style="margin-top:15px; border-top:1px solid #eee; padding-top:10px;">
                <label>Load from Template (Optional)</label>
                <select id="node-template" class="input-large">
                    <option value="">Select Template...</option>`;

        if (typeof EMAIL_TEMPLATES_DATA !== 'undefined' && Array.isArray(EMAIL_TEMPLATES_DATA)) {
            EMAIL_TEMPLATES_DATA.forEach(function (tpl) {
                html += `<option value="${escapeHtml(tpl.id)}" ${templateId == tpl.id ? 'selected' : ''}>${escapeHtml(tpl.name)}</option>`;
            });
        }
        html += `</select></div>`;

        panel.append(html);

        // Auto-save on input change
        $('#node-subject, #node-content').on('input', function () {
            node.data.subject = $('#node-subject').val();
            node.data.body = $('#node-content').val();
            node.data.templateId = $('#node-template').val();
            document.querySelector('#node-' + node.id + ' .ap-node-body').innerText = node.data.subject || 'No Subject';
        });

        // Template selection
        $('#node-template').change(function () {
            var selectedTemplateId = $(this).val();
            if (selectedTemplateId && typeof EMAIL_TEMPLATES_DATA !== 'undefined') {
                var tpl = EMAIL_TEMPLATES_DATA.find(t => t.id == selectedTemplateId);
                if (tpl) {
                    $('#node-subject').val(tpl.subject);
                    $('#node-content').val(tpl.body);
                    node.data.subject = tpl.subject;
                    node.data.body = tpl.body;
                    node.data.templateId = selectedTemplateId;
                    document.querySelector('#node-' + node.id + ' .ap-node-body').innerText = tpl.subject;
                }
            }
        });
    } else if (node.type == 'wait') {
        panel.append(`
            <div class="control-group">
                <label>Delay</label>
                <input type="number" id="prop_delay" class="input-large" value="${node.data.delay || 0}" oninput="updateProp(${id}, 'delay', this.value)">
            </div>
            <div class="control-group">
                <label>Unit</label>
                <select id="prop_unit" class="input-large" onchange="updateProp(${id}, 'unit', this.value)">
                    <option value="minutes" ${node.data.unit == 'minutes' ? 'selected' : ''}>Minutes</option>
                    <option value="hours" ${node.data.unit == 'hours' ? 'selected' : ''}>Hours</option>
                    <option value="days" ${node.data.unit == 'days' ? 'selected' : ''}>Days</option>
                </select>
            </div>
        `);
    } else if (node.type == 'field_update') {
        panel.append(`
            <div class="control-group">
                <label>Field Name</label>
                <input type="text" id="prop_field" class="input-large" value="${escapeHtml(node.data.field)}" oninput="updateProp(${id}, 'field', this.value)">
            </div>
            <div class="control-group">
                <label>New Value</label>
                <input type="text" id="prop_value" class="input-large" value="${escapeHtml(node.data.value)}" oninput="updateProp(${id}, 'value', this.value)">
            </div>
        `);
    } else if (node.type == 'webhook') {
        panel.append(`
            <div class="control-group">
                <label>Webhook URL</label>
                <input type="text" id="prop_url" class="input-large" value="${escapeHtml(node.data.url)}" oninput="updateProp(${id}, 'url', this.value)">
            </div>
            <div class="control-group">
                <label>Method</label>
                <select id="prop_method" class="input-large" onchange="updateProp(${id}, 'method', this.value)">
                    <option value="POST" ${node.data.method == 'POST' ? 'selected' : ''}>POST</option>
                    <option value="GET" ${node.data.method == 'GET' ? 'selected' : ''}>GET</option>
                    <option value="PUT" ${node.data.method == 'PUT' ? 'selected' : ''}>PUT</option>
                </select>
            </div>
        `);
    }
}

function updateProp(id, key, value) {
    var node = nodes.find(n => n.id == id);
    if (node) {
        node.data[key] = value;
        document.querySelector(`#node-${id} .ap-node-body`).innerHTML = getNodeSummary(node);
    }
}

function saveApprovalGraph() {
    var status = document.getElementById('save-status'); // If we add a status element
    // Or just use Vtiger helper
    var progressIndicatorElement = jQuery.progressIndicator({
        'position': 'html',
        'blockInfo': {
            'enabled': true
        }
    });

    var payload = {
        name: document.getElementById('rule_name').value,
        module: document.getElementById('target_module').value,
        graph: JSON.stringify(nodes.map(n => {
            var parents = connections.filter(c => c.to == n.id).map(c => c.from);
            return {
                id: n.id,
                type: n.type,
                data: n.data,
                x: n.x, y: n.y,
                parent_id: parents.length ? parents[0] : null
            };
        }))
    };

    if (!payload.name) {
        alert('Please enter a Rule Name');
        progressIndicatorElement.progressIndicator({ 'mode': 'hide' });
        return;
    }

    var params = {
        module: 'Approvals',
        action: 'SaveRule',
        record: RECORD_ID,
        name: payload.name,
        target_module: payload.module,
        graph_layout: payload.graph,
        conditions_json: '[]',
        stages_json: '[]'
    };

    jQuery.post('index.php', params).done(function (response) {
        progressIndicatorElement.progressIndicator({ 'mode': 'hide' });
        var data = response.result;
        if (data && data.success) {
            var params = {
                title: 'Saved',
                text: 'Rule saved successfully',
                type: 'success'
            };
            Vtiger_Helper_Js.showPnotify(params);

            // Reload to update IDs if new
            if (!RECORD_ID || RECORD_ID != data.record_id) {
                setTimeout(function () {
                    window.location.href = 'index.php?module=Approvals&view=Builder&record=' + data.record_id;
                }, 1000);
            }
        } else {
            progressIndicatorElement.progressIndicator({ 'mode': 'hide' });
            var message = data && data.error ? data.error : 'Unknown error';
            var params = {
                title: 'Error',
                text: 'Save failed: ' + message,
                type: 'error'
            };
            Vtiger_Helper_Js.showPnotify(params);
        }
    }).fail(function (error) {
        progressIndicatorElement.progressIndicator({ 'mode': 'hide' });
        alert('Error: ' + error.statusText);
    });
}
