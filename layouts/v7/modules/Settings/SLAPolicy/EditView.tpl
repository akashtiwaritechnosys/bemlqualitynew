{*+***********************************************************************************
 * SLA Policy Edit View Template
 ************************************************************************************}

<div class="sla-policy-edit-container" style="padding: 20px; max-width: 900px;">
    <div style="margin-bottom: 24px;">
        <a href="{Settings_SLAPolicy_Module_Model::getDefaultUrl()}" style="color: #5b6abf; text-decoration: none; font-size: 13px;">
            <i class="fa fa-arrow-left" style="margin-right: 6px;"></i> Back to SLA Policies
        </a>
    </div>

    <h3 style="margin: 0 0 24px 0; font-size: 20px; font-weight: 600; color: #333;">
        <i class="fa fa-shield" style="margin-right: 8px; color: #5b6abf;"></i>
        {if $RECORD_ID}Edit SLA Policy{else}New SLA Policy{/if}
    </h3>

    <form method="POST" action="index.php" id="sla-policy-form">
        <input type="hidden" name="module" value="SLAPolicy" />
        <input type="hidden" name="parent" value="Settings" />
        <input type="hidden" name="action" value="Save" />
        {if $RECORD_ID}
        <input type="hidden" name="record" value="{$RECORD_ID}" />
        {/if}

        {* --- Policy Details --- *}
        <div style="background: #fff; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); padding: 28px; margin-bottom: 24px;">
            <h4 style="margin: 0 0 20px 0; font-size: 15px; font-weight: 600; color: #5b6abf; border-bottom: 2px solid #e8eaf6; padding-bottom: 10px;">
                <i class="fa fa-cog" style="margin-right: 6px;"></i> Policy Details
            </h4>

            <div class="row" style="margin-bottom: 16px;">
                <div class="col-md-6">
                    <label style="font-weight: 500; color: #555; margin-bottom: 6px; display: block;">Policy Name <span style="color: #e53935;">*</span></label>
                    <input type="text" name="name" class="form-control" required
                        value="{if $RECORD_MODEL}{$RECORD_MODEL->get('name')}{/if}"
                        style="border-radius: 6px; border: 1px solid #ddd; padding: 10px 14px;"
                        placeholder="e.g. Urgent Priority SLA" />
                </div>
                <div class="col-md-6">
                    <label style="font-weight: 500; color: #555; margin-bottom: 6px; display: block;">Priority <span style="color: #e53935;">*</span></label>
                    <select name="priority" class="form-control" required style="border-radius: 6px; border: 1px solid #ddd; padding: 10px 14px;">
                        <option value="">-- Select Priority --</option>
                        {foreach from=$PRIORITIES item=P}
                        <option value="{$P}" {if $RECORD_MODEL && $RECORD_MODEL->get('priority') eq $P}selected{/if}>{$P}</option>
                        {/foreach}
                    </select>
                </div>
            </div>

            <div class="row" style="margin-bottom: 16px;">
                <div class="col-md-4">
                    <label style="font-weight: 500; color: #555; margin-bottom: 6px; display: block;">
                        <i class="fa fa-reply" style="color: #5b6abf; margin-right: 4px;"></i> Response Time (Hours) <span style="color: #e53935;">*</span>
                    </label>
                    <input type="number" name="response_hours" class="form-control" required min="0.25" step="0.25"
                        value="{if $RECORD_MODEL}{$RECORD_MODEL->get('response_hours')}{else}1{/if}"
                        style="border-radius: 6px; border: 1px solid #ddd; padding: 10px 14px;" />
                    <small style="color: #999; margin-top: 4px; display: block;">Max time for first response</small>
                </div>
                <div class="col-md-4">
                    <label style="font-weight: 500; color: #555; margin-bottom: 6px; display: block;">
                        <i class="fa fa-check-circle" style="color: #43a047; margin-right: 4px;"></i> Resolution Time (Hours) <span style="color: #e53935;">*</span>
                    </label>
                    <input type="number" name="resolution_hours" class="form-control" required min="0.5" step="0.5"
                        value="{if $RECORD_MODEL}{$RECORD_MODEL->get('resolution_hours')}{else}4{/if}"
                        style="border-radius: 6px; border: 1px solid #ddd; padding: 10px 14px;" />
                    <small style="color: #999; margin-top: 4px; display: block;">Max time to fully resolve</small>
                </div>
                <div class="col-md-4">
                    <label style="font-weight: 500; color: #555; margin-bottom: 6px; display: block;">Business Hours Only</label>
                    <div style="padding-top: 8px;">
                        <label class="switch" style="position: relative; display: inline-block; width: 48px; height: 26px; margin-right: 10px;">
                            <input type="checkbox" name="business_hours_only" value="1"
                                {if $RECORD_MODEL && $RECORD_MODEL->get('business_hours_only')}checked{/if}
                                style="opacity: 0; width: 0; height: 0;" />
                            <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; border-radius: 26px; transition: 0.3s;"></span>
                        </label>
                        <span style="color: #777; font-size: 13px;">Count only business hours (9 AM – 6 PM, Mon–Fri)</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label style="font-weight: 500; color: #555; margin-bottom: 6px; display: block;">Status</label>
                    <div style="padding-top: 8px;">
                        <label style="cursor: pointer; margin-right: 20px;">
                            <input type="radio" name="active" value="1"
                                {if !$RECORD_MODEL || $RECORD_MODEL->get('active')}checked{/if} />
                            <span style="color: #2e7d32; font-weight: 500; margin-left: 4px;">Active</span>
                        </label>
                        <label style="cursor: pointer;">
                            <input type="radio" name="active" value="0"
                                {if $RECORD_MODEL && !$RECORD_MODEL->get('active')}checked{/if} />
                            <span style="color: #999; font-weight: 500; margin-left: 4px;">Inactive</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        {* --- Escalation Rules --- *}
        <div style="background: #fff; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); padding: 28px; margin-bottom: 24px;">
            <h4 style="margin: 0 0 20px 0; font-size: 15px; font-weight: 600; color: #e53935; border-bottom: 2px solid #ffebee; padding-bottom: 10px;">
                <i class="fa fa-exclamation-triangle" style="margin-right: 6px;"></i> Escalation Rules
            </h4>
            <p style="color: #999; font-size: 13px; margin-bottom: 16px;">Define what happens when SLA thresholds are exceeded. Rules trigger in order of escalation level.</p>

            <div id="escalation-rules-container">
                {if $ESCALATION_RULES && php7_count($ESCALATION_RULES) > 0}
                    {foreach from=$ESCALATION_RULES item=RULE name=rules}
                    <div class="escalation-rule-row" style="background: #fafafa; border-radius: 8px; padding: 16px; margin-bottom: 12px; border: 1px solid #eee; position: relative;">
                        <button type="button" class="btn-remove-rule" onclick="this.parentElement.remove();" style="position: absolute; top: 8px; right: 8px; background: none; border: none; color: #e53935; cursor: pointer; font-size: 16px;">
                            <i class="fa fa-times"></i>
                        </button>
                        <div class="row">
                            <div class="col-md-2">
                                <label style="font-size: 12px; color: #777;">Level</label>
                                <select name="escalation_level[]" class="form-control" style="border-radius: 6px;">
                                    <option value="1" {if $RULE.escalation_level eq 1}selected{/if}>Level 1</option>
                                    <option value="2" {if $RULE.escalation_level eq 2}selected{/if}>Level 2</option>
                                    <option value="3" {if $RULE.escalation_level eq 3}selected{/if}>Level 3</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label style="font-size: 12px; color: #777;">Threshold %</label>
                                <input type="number" name="threshold_percent[]" class="form-control" min="1" max="200" step="5"
                                    value="{$RULE.threshold_percent}" style="border-radius: 6px;" />
                            </div>
                            <div class="col-md-2">
                                <label style="font-size: 12px; color: #777;">Applies To</label>
                                <select name="applies_to[]" class="form-control" style="border-radius: 6px;">
                                    <option value="response" {if $RULE.applies_to eq 'response'}selected{/if}>Response</option>
                                    <option value="resolution" {if $RULE.applies_to eq 'resolution'}selected{/if}>Resolution</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label style="font-size: 12px; color: #777;">Action</label>
                                <select name="action_type[]" class="form-control" style="border-radius: 6px;">
                                    {foreach from=$ACTION_TYPES key=AKEY item=ALABEL}
                                    <option value="{$AKEY}" {if $RULE.action_type eq $AKEY}selected{/if}>{$ALABEL}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label style="font-size: 12px; color: #777;">Target User</label>
                                <select name="target_user_id[]" class="form-control" style="border-radius: 6px;">
                                    <option value="">-- None --</option>
                                    {foreach from=$USERS item=USER}
                                    <option value="{$USER.id}" {if $RULE.target_user_id eq $USER.id}selected{/if}>{$USER.name}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                {/if}
            </div>

            <button type="button" id="btn-add-escalation-rule" class="btn btn-sm" style="background: #fff; border: 2px dashed #5b6abf; color: #5b6abf; padding: 8px 20px; border-radius: 6px; font-weight: 500; margin-top: 4px;">
                <i class="fa fa-plus" style="margin-right: 6px;"></i> Add Escalation Rule
            </button>
        </div>

        {* --- Submit --- *}
        <div style="display: flex; gap: 12px;">
            <button type="submit" class="btn btn-primary" style="background: linear-gradient(135deg, #5b6abf 0%, #7c4dff 100%); border: none; padding: 10px 32px; border-radius: 6px; font-weight: 500; font-size: 14px;">
                <i class="fa fa-save" style="margin-right: 6px;"></i> Save Policy
            </button>
            <a href="{Settings_SLAPolicy_Module_Model::getDefaultUrl()}" class="btn btn-default" style="padding: 10px 24px; border-radius: 6px;">
                Cancel
            </a>
        </div>
    </form>
</div>

{* Template for new escalation rule row (hidden, cloned by JS) *}
<template id="escalation-rule-template">
    <div class="escalation-rule-row" style="background: #fafafa; border-radius: 8px; padding: 16px; margin-bottom: 12px; border: 1px solid #eee; position: relative;">
        <button type="button" class="btn-remove-rule" onclick="this.parentElement.remove();" style="position: absolute; top: 8px; right: 8px; background: none; border: none; color: #e53935; cursor: pointer; font-size: 16px;">
            <i class="fa fa-times"></i>
        </button>
        <div class="row">
            <div class="col-md-2">
                <label style="font-size: 12px; color: #777;">Level</label>
                <select name="escalation_level[]" class="form-control" style="border-radius: 6px;">
                    <option value="1">Level 1</option>
                    <option value="2">Level 2</option>
                    <option value="3">Level 3</option>
                </select>
            </div>
            <div class="col-md-2">
                <label style="font-size: 12px; color: #777;">Threshold %</label>
                <input type="number" name="threshold_percent[]" class="form-control" min="1" max="200" step="5" value="80" style="border-radius: 6px;" />
            </div>
            <div class="col-md-2">
                <label style="font-size: 12px; color: #777;">Applies To</label>
                <select name="applies_to[]" class="form-control" style="border-radius: 6px;">
                    <option value="response">Response</option>
                    <option value="resolution">Resolution</option>
                </select>
            </div>
            <div class="col-md-3">
                <label style="font-size: 12px; color: #777;">Action</label>
                <select name="action_type[]" class="form-control" style="border-radius: 6px;">
                    {foreach from=$ACTION_TYPES key=AKEY item=ALABEL}
                    <option value="{$AKEY}">{$ALABEL}</option>
                    {/foreach}
                </select>
            </div>
            <div class="col-md-3">
                <label style="font-size: 12px; color: #777;">Target User</label>
                <select name="target_user_id[]" class="form-control" style="border-radius: 6px;">
                    <option value="">-- None --</option>
                    {foreach from=$USERS item=USER}
                    <option value="{$USER.id}">{$USER.name}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
</template>
