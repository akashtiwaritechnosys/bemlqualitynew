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
                    <th style="width: 25%">{vtranslate('Lead Source', $MODULE_NAME)}</th>
                    <th style="width: 15%; text-align: center">{vtranslate('Total Leads', $MODULE_NAME)}</th>
                    <th style="width: 15%; text-align: center">{vtranslate('Converted', $MODULE_NAME)}</th>
                    <th style="width: 20%; text-align: center">{vtranslate('Conversion Rate', $MODULE_NAME)}</th>
                    <th style="width: 15%; text-align: center">{vtranslate('Avg Score', $MODULE_NAME)}</th>
                    <th style="width: 10%; text-align: center">{vtranslate('Quality', $MODULE_NAME)}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$DATA item=SOURCE_DATA}
                    <tr>
                        <td><strong>{$SOURCE_DATA.source}</strong></td>
                        <td style="text-align: center">{$SOURCE_DATA.total_count}</td>
                        <td style="text-align: center">{$SOURCE_DATA.converted_count}</td>
                        <td style="text-align: center">
                            {assign var=CONV_RATE value=$SOURCE_DATA.conversion_rate}
                            {if $CONV_RATE >= 20}
                                <span class="badge" style="background-color: #28a745; color: white;">{$CONV_RATE}%</span>
                            {elseif $CONV_RATE >= 10}
                                <span class="badge" style="background-color: #17a2b8; color: white;">{$CONV_RATE}%</span>
                            {elseif $CONV_RATE >= 5}
                                <span class="badge" style="background-color: #ffc107; color: #333;">{$CONV_RATE}%</span>
                            {else}
                                <span class="badge" style="background-color: #dc3545; color: white;">{$CONV_RATE}%</span>
                            {/if}
                        </td>
                        <td style="text-align: center">
                            <strong>{$SOURCE_DATA.avg_score}</strong>
                        </td>
                        <td style="text-align: center">
                            {assign var=AVG_SCORE value=$SOURCE_DATA.avg_score}
                            {if $AVG_SCORE >= 70}
                                <i class="fa fa-star" style="color: #28a745;" title="Excellent"></i>
                                <i class="fa fa-star" style="color: #28a745;"></i>
                                <i class="fa fa-star" style="color: #28a745;"></i>
                            {elseif $AVG_SCORE >= 50}
                                <i class="fa fa-star" style="color: #ffc107;" title="Good"></i>
                                <i class="fa fa-star" style="color: #ffc107;"></i>
                            {elseif $AVG_SCORE >= 30}
                                <i class="fa fa-star" style="color: #ff9800;" title="Fair"></i>
                            {else}
                                <i class="fa fa-star-o" style="color: #ccc;" title="Poor"></i>
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
