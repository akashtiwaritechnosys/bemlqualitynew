{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is: vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
<div style="padding: 15px;">
    {if php7_count($DATA) gt 0}
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 35%">{vtranslate('LBL_LEAD_NAME', $MODULE_NAME)}</th>
                    <th style="width: 30%">{vtranslate('Company', $MODULE_NAME)}</th>
                    <th style="width: 15%">{vtranslate('Status', $MODULE_NAME)}</th>
                    <th style="width: 15%; text-align: center">{vtranslate('Score', $MODULE_NAME)}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$DATA item=LEAD key=INDEX}
                    <tr>
                        <td>{$INDEX + 1}</td>
                        <td>
                            <a href="index.php?module=Leads&view=Detail&record={$LEAD.leadid}">
                                {$LEAD.name}
                            </a>
                        </td>
                        <td>{$LEAD.company}</td>
                        <td>{vtranslate($LEAD.status, $MODULE_NAME)}</td>
                        <td style="text-align: center">
                            {assign var=SCORE value=$LEAD.score}
                            {if $SCORE >= 80}
                                <span class="badge" style="background-color: #28a745; color: white; font-size: 13px; padding: 5px 10px;">{$SCORE}</span>
                            {elseif $SCORE >= 60}
                                <span class="badge" style="background-color: #17a2b8; color: white; font-size: 13px; padding: 5px 10px;">{$SCORE}</span>
                            {elseif $SCORE >= 40}
                                <span class="badge" style="background-color: #ffc107; color: #333; font-size: 13px; padding: 5px 10px;">{$SCORE}</span>
                            {else}
                                <span class="badge" style="background-color: #dc3545; color: white; font-size: 13px; padding: 5px 10px;">{$SCORE}</span>
                            {/if}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <div class="alert alert-info" style="margin: 20px;">
            <i class="fa fa-info-circle"></i> {vtranslate('LBL_NO_DATA_AVAILABLE', $MODULE_NAME)}
        </div>
    {/if}
</div>
