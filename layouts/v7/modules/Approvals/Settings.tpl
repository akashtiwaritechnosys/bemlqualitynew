{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
{strip}
<div class="container-fluid">
    <div class="widget_header row-fluid">
        <div class="span8"><h3>{vtranslate('Approval Rules', $MODULE)}</h3></div>
        <div class="span4"><button class="btn btn-success pull-right" onclick="showAddRuleModal()">Add Approval Rule</button></div>
    </div>
    <hr>
    
    <div class="contents">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Rule Name</th>
                    <th>Target Module</th>
                    <th>Approver</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {foreach item=RULE from=$RULES}
                <tr>
                    <td>{$RULE.name}</td>
                    <td>{$RULE.target_module}</td>
                    <td>
                        {assign var=APPROVER value=Users_Record_Model::getInstanceById($RULE.approver_id, 'Users')}
                        {$APPROVER->get('first_name')} {$APPROVER->get('last_name')}
                    </td>
                    <td>
                        <button class="btn btn-danger btn-small" onclick="deleteRule({$RULE.approval_rule_id})">Delete</button>
                    </td>
                </tr>
                {/foreach}
                {if empty($rules)}
                <tr><td colspan="4" style="text-align:center;">No approval rules found.</td></tr>
                {/if}
            </tbody>
        </table>
    </div>
    
    <!-- Add Rule Modal -->
    <div id="addRuleModal" class="modal hide fade" tabindex="-1">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Add Approval Rule</h3>
        </div>
        <div class="modal-body">
            <form id="approvalRuleForm" class="form-horizontal">
                <div class="control-group">
                    <label class="control-label">Name</label>
                    <div class="controls">
                        <input type="text" name="name" required class="input-large">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Target Module</label>
                    <div class="controls">
                        <select name="target_module" required>
                            {foreach key=MODNAME item=MODLABEL from=$TARGET_MODULES}
                            <option value="{$MODNAME}">{$MODLABEL}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                 <div class="control-group">
                    <label class="control-label">Conditions (Field > Value)</label>
                    <div class="controls">
                         <input type="text" name="condition_field" placeholder="Field (e.g., amount)" class="input-medium">
                         <select name="condition_op" class="input-small">
                            <option value=">">&gt;</option>
                            <option value="<">&lt;</option>
                            <option value="=">=</option>
                         </select>
                         <input type="text" name="condition_value" placeholder="Value" class="input-small">
                         <span class="help-inline">Simple condition for MVP</span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Approver</label>
                    <div class="controls">
                        <select name="approver_id" required>
                            {foreach item=USER from=$USERS}
                            <option value="{$USER->getId()}">{$USER->get('first_name')} {$USER->get('last_name')}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" onclick="saveRule()">Save</button>
        </div>
    </div>
</div>

<script>
function showAddRuleModal() {
    jQuery('#addRuleModal').modal('show');
}

function saveRule() {
    var form = jQuery('#approvalRuleForm');
    var params = {
        'module': 'Approvals',
        'action': 'SaveRule',
        'name': form.find('[name="name"]').val(),
        'target_module': form.find('[name="target_module"]').val(),
        'approver_id': form.find('[name="approver_id"]').val(),
        'condition_field': form.find('[name="condition_field"]').val(),
        'condition_op': form.find('[name="condition_op"]').val(),
        'condition_value': form.find('[name="condition_value"]').val()
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
{/strip}
