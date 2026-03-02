{* Enhanced Approval Workflow Builder - Integrated *}

<link rel="stylesheet" href="layouts/v7/modules/Approvals/resources/builder.css">

<script src="resources/Connector.js"></script>

<div class="" style="height: calc(100vh - 110px); background: #f7f7f7; display: flex; flex-direction: column; margin-top: 55px;">
    
    <!-- Toolbar -->
    <div style="background:#fff; padding:10px 20px; border-bottom:1px solid #ddd; box-shadow:0 1px 3px rgba(0,0,0,0.05); flex-shrink: 0;">
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap: wrap; gap: 10px;">
            <div>
                <h3 style="margin:0; display:inline-block; color:#333; font-size: 18px;">
                    <i class="fa fa-sitemap" style="margin-right:8px; color:#007bff;"></i>
                    Approval Workflow Builder
                </h3>
            </div>
            <div style="display:flex; gap:10px; align-items:center; flex-wrap: wrap;">
                <div style="margin-right:15px;">
                    <label style="display:inline-block; margin-right:5px; font-weight:600; font-size: 13px;">Rule Name:</label>
                    <input type="text" id="rule_name" class="inputElement" style="width:200px; padding:4px 8px;" value="{$RULE_NAME}" placeholder="Enter Rule Name">
                </div>
                <div style="margin-right:15px;">
                    <label style="display:inline-block; margin-right:5px; font-weight:600; font-size: 13px;">Module:</label>
                    <select id="target_module" class="select2" style="width:150px;" {if $MODE eq 'edit'}disabled{/if}>
                        <option value="">Select...</option>
                        {foreach from=$ENTITY_MODULES key=NAME item=LABEL}
                            <option value="{$NAME}" {if $TARGET_MODULE eq $NAME}selected{/if}>{$LABEL}</option>
                        {/foreach}
                    </select>
                </div>
                <button class="btn btn-success" onclick="saveApprovalGraph()">
                    <i class="fa fa-save"></i> Save Workflow
                </button>
                <a href="index.php?module=Approvals&view=Rules" class="btn btn-default">
                    Cancel
                </a>
            </div>
        </div>
    </div>

    <!-- Builder Container -->
    <div id="builder-container" style="flex-grow: 1; position: relative; overflow: hidden; height: 100%;">
        <!-- Sidebar Tools -->
        <div id="sidebar">
            <h5>Workflow Nodes</h5>
            <p class="text-muted" style="font-size:11px;">Drag to canvas</p>
            
            <div class="ap-node-tool" draggable="true" data-type="start">
                <i class="fa fa-play-circle" style="color:#28a745"></i> Start
            </div>
            <div class="ap-node-tool" draggable="true" data-type="condition">
                <i class="fa fa-code-fork" style="color:#6f42c1"></i> Condition
            </div>
            <div class="ap-node-tool" draggable="true" data-type="approval_stage">
                <i class="fa fa-check-square-o" style="color:#007bff"></i> Approval Stage
            </div>
            
            <hr style="margin:10px 0;">
            <p class="text-muted" style="font-size:11px;"><strong>Actions</strong></p>
            
            <div class="ap-node-tool" draggable="true" data-type="send_email">
                <i class="fa fa-envelope" style="color:#007bff"></i> Send Email
            </div>
            <div class="ap-node-tool" draggable="true" data-type="field_update">
                <i class="fa fa-pencil" style="color:#17a2b8"></i> Field Update
            </div>
            <div class="ap-node-tool" draggable="true" data-type="webhook">
                <i class="fa fa-exchange" style="color:#6610f2"></i> Webhook
            </div>
            <div class="ap-node-tool" draggable="true" data-type="wait">
                <i class="fa fa-clock-o" style="color:#ffc107"></i> Wait
            </div>
            <div class="ap-node-tool" draggable="true" data-type="end">
                <i class="fa fa-stop-circle" style="color:#dc3545"></i> End
            </div>
        </div>

        <!-- Canvas -->
        <div id="canvas" ondrop="drop(event)" ondragover="allowDrop(event)">
            <svg id="ap-connections"></svg>
        </div>

        <!-- Property Panel -->
        <div id="property-panel">
            <h4>Properties</h4>
            <p class="text-muted">Select a node to edit properties.</p>
        </div>
    </div>
</div>

<script src="layouts/v7/modules/Approvals/resources/builder.js"></script>
<script>
var GRAPH_DATA = {$GRAPH_DATA|default:'[]'};
var RECORD_ID = '{$RECORD_ID}';
var USERS_LIST = {json_encode($USERS)};
var GROUPS_LIST = {json_encode($GROUPS)};
var EMAIL_TEMPLATES_DATA = {$EMAIL_TEMPLATES|default:'[]'};
</script>
