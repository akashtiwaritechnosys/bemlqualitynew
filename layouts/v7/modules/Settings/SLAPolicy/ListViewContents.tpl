{*+***********************************************************************************
 * SLA Policy List View Template
 ************************************************************************************}

<div class="sla-policy-container" style="padding: 20px;">
    <div class="sla-policy-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3 style="margin: 0; font-size: 20px; font-weight: 600; color: #333;">
            <i class="fa fa-clock-o" style="margin-right: 8px; color: #5b6abf;"></i>
            SLA Policies
        </h3>
        <a href="{Settings_SLAPolicy_Module_Model::getCreateViewUrl()}" class="btn btn-primary" style="background: linear-gradient(135deg, #5b6abf 0%, #7c4dff 100%); border: none; padding: 8px 20px; border-radius: 6px; font-weight: 500;">
            <i class="fa fa-plus" style="margin-right: 6px;"></i> New SLA Policy
        </a>
    </div>

    <div class="sla-policy-info" style="background: linear-gradient(135deg, #e8eaf6 0%, #f3e5f5 100%); border-radius: 8px; padding: 14px 18px; margin-bottom: 20px; border-left: 4px solid #5b6abf;">
        <i class="fa fa-info-circle" style="color: #5b6abf; margin-right: 8px;"></i>
        <span style="color: #555; font-size: 13px;">SLA policies automatically track response and resolution times for support tickets based on their priority level. Escalation rules trigger when SLA thresholds are exceeded.</span>
    </div>

    {if $POLICIES && php7_count($POLICIES) > 0}
    <div class="table-responsive">
        <table class="table table-hover" style="background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
            <thead>
                <tr style="background: linear-gradient(135deg, #5b6abf 0%, #7c4dff 100%); color: #fff;">
                    <th style="padding: 14px 18px; font-weight: 500; border: none;">Policy Name</th>
                    <th style="padding: 14px 18px; font-weight: 500; border: none;">Priority</th>
                    <th style="padding: 14px 18px; font-weight: 500; border: none; text-align: center;">Response Time</th>
                    <th style="padding: 14px 18px; font-weight: 500; border: none; text-align: center;">Resolution Time</th>
                    <th style="padding: 14px 18px; font-weight: 500; border: none; text-align: center;">Business Hours</th>
                    <th style="padding: 14px 18px; font-weight: 500; border: none; text-align: center;">Status</th>
                    <th style="padding: 14px 18px; font-weight: 500; border: none; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$POLICIES item=POLICY}
                <tr style="transition: background 0.2s ease;" onmouseover="this.style.background='#f8f9fe'" onmouseout="this.style.background='#fff'">
                    <td style="padding: 14px 18px; font-weight: 600; color: #333; border-bottom: 1px solid #f0f0f0;">
                        <i class="fa fa-shield" style="color: #5b6abf; margin-right: 8px;"></i>
                        {$POLICY->get('name')}
                    </td>
                    <td style="padding: 14px 18px; border-bottom: 1px solid #f0f0f0;">
                        {assign var="pcolor" value="#999"}
                        {if $POLICY->get('priority') eq 'Urgent'}{assign var="pcolor" value="#e53935"}{/if}
                        {if $POLICY->get('priority') eq 'High'}{assign var="pcolor" value="#fb8c00"}{/if}
                        {if $POLICY->get('priority') eq 'Normal'}{assign var="pcolor" value="#43a047"}{/if}
                        {if $POLICY->get('priority') eq 'Low'}{assign var="pcolor" value="#78909c"}{/if}
                        <span style="display: inline-block; padding: 4px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; color: #fff; background: {$pcolor};">
                            {$POLICY->get('priority')}
                        </span>
                    </td>
                    <td style="padding: 14px 18px; text-align: center; border-bottom: 1px solid #f0f0f0; font-weight: 500;">
                        <i class="fa fa-reply" style="color: #5b6abf; margin-right: 4px;"></i>
                        {$POLICY->get('response_hours')} hrs
                    </td>
                    <td style="padding: 14px 18px; text-align: center; border-bottom: 1px solid #f0f0f0; font-weight: 500;">
                        <i class="fa fa-check-circle" style="color: #43a047; margin-right: 4px;"></i>
                        {$POLICY->get('resolution_hours')} hrs
                    </td>
                    <td style="padding: 14px 18px; text-align: center; border-bottom: 1px solid #f0f0f0;">
                        {if $POLICY->get('business_hours_only')}
                            <span style="color: #43a047; font-weight: 500;"><i class="fa fa-check"></i> Yes</span>
                        {else}
                            <span style="color: #999;">24×7</span>
                        {/if}
                    </td>
                    <td style="padding: 14px 18px; text-align: center; border-bottom: 1px solid #f0f0f0;">
                        {if $POLICY->get('active')}
                            <span style="display: inline-block; padding: 4px 14px; border-radius: 20px; font-size: 12px; background: #e8f5e9; color: #2e7d32; font-weight: 600;">Active</span>
                        {else}
                            <span style="display: inline-block; padding: 4px 14px; border-radius: 20px; font-size: 12px; background: #fafafa; color: #999; font-weight: 600;">Inactive</span>
                        {/if}
                    </td>
                    <td style="padding: 14px 18px; text-align: center; border-bottom: 1px solid #f0f0f0;">
                        <a href="{$POLICY->getEditViewUrl()}" class="btn btn-sm" style="color: #5b6abf; margin-right: 4px;" title="Edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{$POLICY->getDeleteUrl()}" class="btn btn-sm" style="color: #e53935;" title="Delete" onclick="return confirm('Are you sure you want to delete this SLA policy? Associated escalation rules and tracking data will also be removed.');">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    {else}
    <div style="text-align: center; padding: 60px 20px; background: #fff; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
        <i class="fa fa-clock-o" style="font-size: 48px; color: #ccc; margin-bottom: 16px; display: block;"></i>
        <h4 style="color: #999; font-weight: 500;">No SLA Policies Configured</h4>
        <p style="color: #bbb; margin-bottom: 20px;">Create your first SLA policy to start tracking response and resolution times.</p>
        <a href="{Settings_SLAPolicy_Module_Model::getCreateViewUrl()}" class="btn btn-primary" style="background: linear-gradient(135deg, #5b6abf 0%, #7c4dff 100%); border: none; padding: 10px 28px; border-radius: 6px;">
            <i class="fa fa-plus" style="margin-right: 6px;"></i> Create SLA Policy
        </a>
    </div>
    {/if}
</div>
