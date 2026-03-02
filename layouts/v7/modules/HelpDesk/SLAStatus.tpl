{*+***********************************************************************************
 * SLA Status Widget for HelpDesk Detail View
 * Shows response/resolution SLA progress with color-coded indicators
 ************************************************************************************}

{if $SLA_DATA && $SLA_DATA.has_sla}
<div class="sla-status-widget" style="background: #fff; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); padding: 20px; margin-bottom: 16px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 2px solid #e8eaf6; padding-bottom: 10px;">
        <h4 style="margin: 0; font-size: 14px; font-weight: 600; color: #5b6abf;">
            <i class="fa fa-clock-o" style="margin-right: 6px;"></i> SLA Tracking
        </h4>
        <span style="font-size: 11px; color: #999; background: #f5f5f5; padding: 3px 10px; border-radius: 10px;">
            {$SLA_DATA.policy_name}
        </span>
    </div>

    {* Overall SLA Status Badge *}
    <div style="margin-bottom: 16px; text-align: center;">
        {if $SLA_DATA.sla_status eq 'met'}
            <span style="display: inline-block; padding: 6px 20px; border-radius: 20px; font-size: 12px; font-weight: 700; color: #fff; background: linear-gradient(135deg, #43a047 0%, #66bb6a 100%); letter-spacing: 0.5px;">
                <i class="fa fa-check-circle" style="margin-right: 4px;"></i> SLA MET
            </span>
        {elseif $SLA_DATA.sla_status eq 'breached'}
            <span style="display: inline-block; padding: 6px 20px; border-radius: 20px; font-size: 12px; font-weight: 700; color: #fff; background: linear-gradient(135deg, #e53935 0%, #ef5350 100%); letter-spacing: 0.5px; animation: sla-pulse 2s infinite;">
                <i class="fa fa-exclamation-circle" style="margin-right: 4px;"></i> SLA BREACHED
            </span>
        {else}
            <span style="display: inline-block; padding: 6px 20px; border-radius: 20px; font-size: 12px; font-weight: 700; color: #fff; background: linear-gradient(135deg, #5b6abf 0%, #7c4dff 100%); letter-spacing: 0.5px;">
                <i class="fa fa-spinner fa-spin" style="margin-right: 4px;"></i> TRACKING
            </span>
        {/if}

        {if $SLA_DATA.current_escalation_level > 0}
            <span style="display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; color: #fff; background: #fb8c00; margin-left: 8px;">
                <i class="fa fa-arrow-up"></i> Escalation L{$SLA_DATA.current_escalation_level}
            </span>
        {/if}
    </div>

    {* Response SLA *}
    <div style="margin-bottom: 14px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
            <span style="font-size: 12px; font-weight: 600; color: #555;">
                <i class="fa fa-reply" style="color: #5b6abf; margin-right: 4px;"></i> Response SLA
            </span>
            <span style="font-size: 11px;
                {if $SLA_DATA.response_status eq 'breached'}color: #e53935; font-weight: 700;
                {elseif $SLA_DATA.response_status eq 'warning'}color: #fb8c00; font-weight: 600;
                {elseif $SLA_DATA.response_status eq 'met'}color: #43a047; font-weight: 600;
                {else}color: #777;{/if}">
                {$SLA_DATA.response_label}
            </span>
        </div>
        <div style="background: #f0f0f0; border-radius: 6px; height: 8px; overflow: hidden;">
            {assign var="resp_color" value="#5b6abf"}
            {if $SLA_DATA.response_status eq 'breached'}{assign var="resp_color" value="#e53935"}{/if}
            {if $SLA_DATA.response_status eq 'warning'}{assign var="resp_color" value="#fb8c00"}{/if}
            {if $SLA_DATA.response_status eq 'met'}{assign var="resp_color" value="#43a047"}{/if}
            <div style="height: 100%; width: {if $SLA_DATA.response_status eq 'met' || $SLA_DATA.response_status eq 'breached'}100{else}{$SLA_DATA.response_pct|default:0}{/if}%; background: {$resp_color}; border-radius: 6px; transition: width 0.5s ease;"></div>
        </div>
        <div style="font-size: 10px; color: #aaa; margin-top: 4px;">Due: {$SLA_DATA.response_due}</div>
    </div>

    {* Resolution SLA *}
    <div>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
            <span style="font-size: 12px; font-weight: 600; color: #555;">
                <i class="fa fa-check-circle" style="color: #43a047; margin-right: 4px;"></i> Resolution SLA
            </span>
            <span style="font-size: 11px;
                {if $SLA_DATA.resolution_status eq 'breached'}color: #e53935; font-weight: 700;
                {elseif $SLA_DATA.resolution_status eq 'warning'}color: #fb8c00; font-weight: 600;
                {elseif $SLA_DATA.resolution_status eq 'met'}color: #43a047; font-weight: 600;
                {else}color: #777;{/if}">
                {$SLA_DATA.resolution_label}
            </span>
        </div>
        <div style="background: #f0f0f0; border-radius: 6px; height: 8px; overflow: hidden;">
            {assign var="resol_color" value="#5b6abf"}
            {if $SLA_DATA.resolution_status eq 'breached'}{assign var="resol_color" value="#e53935"}{/if}
            {if $SLA_DATA.resolution_status eq 'warning'}{assign var="resol_color" value="#fb8c00"}{/if}
            {if $SLA_DATA.resolution_status eq 'met'}{assign var="resol_color" value="#43a047"}{/if}
            <div style="height: 100%; width: {if $SLA_DATA.resolution_status eq 'met' || $SLA_DATA.resolution_status eq 'breached'}100{else}{$SLA_DATA.resolution_pct|default:0}{/if}%; background: {$resol_color}; border-radius: 6px; transition: width 0.5s ease;"></div>
        </div>
        <div style="font-size: 10px; color: #aaa; margin-top: 4px;">Due: {$SLA_DATA.resolution_due}</div>
    </div>
</div>

<style>
@keyframes sla-pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}
</style>
{/if}
