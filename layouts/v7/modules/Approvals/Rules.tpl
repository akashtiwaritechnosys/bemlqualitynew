{* Rules.tpl *}
<div class="main-container clearfix">
    <div class="contents-div">
        <div class="container-fluid">
            <div class="row-fluid">
                 <div class="span12">
            <h3 class="module-title pull-left">Approval Rules</h3>
            <div class="pull-right">
                <button class="btn btn-success" onclick="window.location.href='index.php?module=Approvals&view=Builder'">
                    <i class="fa fa-sitemap"></i> Visual Builder
                </button>
                <button class="btn btn-primary" onclick="showAddRuleModal()">Add Approval Rule</button>
            </div>
            <div class="clearfix"></div>
            <hr>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Rule Name</th>
                        <th>Target Module</th>
                        <th>Approver / Stages</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$RULES item=RULE}
                    <tr>
                        <td>{$RULE.name}</td>
                        <td>{$RULE.target_module}</td>
                        <td>
                            <!-- Minimal Logic to show stages count if possible, else just ID -->
                            {$RULE.approver_id} (or Stages)
                        </td>
                        <td>
                            <button class="btn btn-danger btn-mini" onclick="deleteRule({$RULE.approval_rule_id})">Delete</button>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
    </div>
</div>
</div>

<!-- Add Rule Modal -->
<div id="addRuleModal" class="modal hide fade" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Add Approval Rule</h3>
    </div>
    <div class="modal-body">
        <form id="approvalRuleForm" class="form-horizontal">
            <div class="control-group">
                <label class="control-label">Rule Name</label>
                <div class="controls">
                    <input type="text" name="name" class="input-large">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Target Module</label>
                <div class="controls">
                    <select name="target_module" class="input-medium">
                        {foreach from=$MODULES key=MOD_NAME item=MOD_LABEL}
                            <option value="{$MOD_NAME}">{$MOD_LABEL}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Approval Stages (Sequential)</label>
                <div class="controls">
                    <table class="table table-bordered table-condensed" id="stagesTable">
                        <thead>
                            <tr>
                                <th>Stage Order</th>
                                <th>Type</th>
                                <th>Approver</th>
                                <th><button type="button" class="btn btn-mini btn-success" onclick="addStageRow()">+</button></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Rows will be added dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Conditions</label>
                <div class="controls">
                    <table class="table table-bordered table-condensed" id="conditionsTable">
                        <thead>
                            <tr>
                                <th>Field</th>
                                <th>Op</th>
                                <th>Value</th>
                                <th>Join</th>
                                <th><button type="button" class="btn btn-mini btn-success" onclick="addConditionRow()">+</button></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

             <div class="control-group">
                <label class="control-label">On Approve Action</label>
                <div class="controls">
                    <input type="text" name="on_approve_action" placeholder="field=value" class="input-large">
                    <br><label class="checkbox inline">
                        <input type="checkbox" name="notify_requester" value="1" checked> Notify Requester (Owner) on Decision
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">On Reject Action</label>
                <div class="controls">
                    <input type="text" name="on_reject_action" placeholder="field=value" class="input-large">
                </div>
            </div>
             <div class="control-group">
                <label class="control-label">Validation</label>
                 <div class="controls">
                    <label class="checkbox inline">
                        <input type="checkbox" name="notify_approver" value="1" checked> Notify Approver on Creation
                    </label>
                 </div>
            </div>

        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" onclick="saveRule()">Save</button>
    </div>
</div>

<script type="text/javascript">
// Cache for module fields
var moduleFieldsCache = {};

function showAddRuleModal() {
    jQuery('#addRuleModal').modal('show');
    jQuery('#conditionsTable tbody').empty();
    jQuery('#stagesTable tbody').empty();
    
    // Load fields for initially selected module
    loadModuleFields(function() {
        addConditionRow();
    });
    addStageRow(); 
}

jQuery('[name="target_module"]').on('change', function() {
    jQuery('#conditionsTable tbody').empty();
    loadModuleFields(function() {
        addConditionRow();
    });
});

function loadModuleFields(callback) {
    var module = jQuery('[name="target_module"]').val();
    
    if(moduleFieldsCache[module]) {
        if(callback) callback();
        return;
    }
    
    var params = {
        'module': 'Approvals',
        'action': 'GetFields',
        'source_module': module
    };
    
    AppConnector.request(params).then(function(data) {
        if(data.success) {
            moduleFieldsCache[module] = data.result;
            if(callback) callback();
        }
    });
}

function addConditionRow() {
    var module = jQuery('[name="target_module"]').val();
    var fields = moduleFieldsCache[module] || {};
    
    var fieldOptions = '';
    jQuery.each(fields, function(name, label) {
        fieldOptions += '<option value="'+name+'">'+label+'</option>';
    });

    var row = '<tr>' +
        '<td><select name="cond_field[]" class="input-medium">' + fieldOptions + '</select></td>' +
        '<td><select name="cond_op[]" class="input-small">' +
            '<option value="is">is</option>' + // Standard Vtiger operators usually differ, keeping simple for now
            '<option value="contains">contains</option>' +
            '<option value="does not contain">does not contain</option>' +
            '<option value="starts with">starts with</option>' +
            '<option value="ends with">ends with</option>' +
            '<option value="is empty">is empty</option>' + 
            '<option value="is not empty">is not empty</option>' + 
            '<option value="=">=</option>' +
            '<option value="!=">!=</option>' + 
            '<option value=">">&gt;</option>' +
            '<option value="<">&lt;</option>' +
        '</select></td>' +
        '<td><input type="text" name="cond_value[]" class="input-small" placeholder="Value"></td>' +
        '<td><select name="cond_glue[]" class="input-mini">' +
            '<option value="AND">AND</option>' + 
            '<option value="OR">OR</option>' + 
        '</select></td>' +
        '<td><button type="button" class="btn btn-mini btn-danger" onclick="removeConditionRow(this)">-</button></td>' +
    '</tr>';
    jQuery('#conditionsTable tbody').append(row);
    
    // Initialize select2 if available
    if(typeof jQuery.fn.select2 !== 'undefined') {
        jQuery('#conditionsTable tbody tr:last select').select2();
    }
}

function removeConditionRow(btn) {
    jQuery(btn).closest('tr').remove();
}

function toggleApproverSelect(select) {
    var type = jQuery(select).val();
    var row = jQuery(select).closest('tr');
    if (type == 'group') {
        row.find('.user-select').hide();
        row.find('.group-select').show();
    } else {
        row.find('.group-select').hide();
        row.find('.user-select').show();
    }
}

function removeStageRow(btn) {
    jQuery(btn).closest('tr').remove();
}

function addStageRow() {
    var stageCount = jQuery('#stagesTable tbody tr').length + 1;
    var row = '<tr>' +
        '<td>Stage ' + stageCount + '</td>' +
        '<td><select name="stage_type[]" class="input-small" onchange="toggleApproverSelect(this)">' +
            '<option value="user">User</option>' +
            '<option value="group">Group</option>' + 
        '</select></td>' +
        '<td>' +
            '<select name="stage_approver_user[]" class="input-medium user-select" style="display:inline-block;">' +
                '{foreach from=$USERS key=USER_ID item=USER_NAME}' +
                    '<option value="{$USER_ID}">{$USER_NAME}</option>' +
                '{/foreach}' +
            '</select>' +
            '<select name="stage_approver_group[]" class="input-medium group-select" style="display:none;">' +
                 '{foreach from=$GROUPS key=GROUP_ID item=GROUP_NAME}' +
                    '<option value="{$GROUP_ID}">{$GROUP_NAME}</option>' +
                '{/foreach}' +
            '</select>' +
        '</td>' +
        '<td><button type="button" class="btn btn-mini btn-danger" onclick="removeStageRow(this)">-</button></td>' +
    '</tr>';
    jQuery('#stagesTable tbody').append(row);
}

function saveRule() {
    var form = jQuery('#approvalRuleForm');
    
    // Collect conditions
    var conditions = [];
    form.find('#conditionsTable tbody tr').each(function() {
        var row = jQuery(this);
        var field = row.find('[name="cond_field[]"]').val();
        if(field) {
            conditions.push({
                'field': field,
                'op': row.find('[name="cond_op[]"]').val(),
                'value': row.find('[name="cond_value[]"]').val(),
                'glue': row.find('[name="cond_glue[]"]').val()
            });
        }
    });

    // Collect Stages
    var stages = [];
    form.find('#stagesTable tbody tr').each(function(index) {
        var row = jQuery(this);
        var type = row.find('[name="stage_type[]"]').val();
        var approverId = (type == 'group') ? row.find('[name="stage_approver_group[]"]').val() : row.find('[name="stage_approver_user[]"]').val();
        
        stages.push({
            'stage_number': index + 1,
            'approver_type': type,
            'approver_id': approverId
        });
    });

    var params = {
        'module': 'Approvals',
        'action': 'SaveRule',
        'name': form.find('[name="name"]').val(),
        'target_module': form.find('[name="target_module"]').val(),
        'conditions_json': JSON.stringify(conditions),
        'stages_json': JSON.stringify(stages),
        'on_approve_action': form.find('[name="on_approve_action"]').val(),
        'on_reject_action': form.find('[name="on_reject_action"]').val(),
        'notify_approver': form.find('[name="notify_approver"]').is(':checked') ? 1 : 0,
        'notify_requester': form.find('[name="notify_requester"]').is(':checked') ? 1 : 0
    };
    
    AppConnector.request(params).then(function(data) {
        if(data.success) {
            location.reload();
        } else {
            alert('Error saving rule');
        }
    });
}

function deleteRule(id) {
    if(confirm('Are you sure?')) {
        var params = {
            'module': 'Approvals',
            'action': 'SaveRule',
            'mode': 'delete',
            'record': id
        };
        AppConnector.request(params).then(function(data) {
            location.reload();
        });
    }
}
</script>
