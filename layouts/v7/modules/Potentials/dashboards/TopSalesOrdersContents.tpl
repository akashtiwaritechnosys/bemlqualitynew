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
                    <th style="width: 35%">{vtranslate('Subject', 'SalesOrder')}</th>
                    <th style="width: 25%">{vtranslate('Customer', 'SalesOrder')}</th>
                    <th style="width: 20%; text-align: right">{vtranslate('Total', 'SalesOrder')}</th>
                    <th style="width: 15%">{vtranslate('Status', 'SalesOrder')}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$DATA item=ORDER key=INDEX}
                    <tr>
                        <td>{$INDEX + 1}</td>
                        <td>
                            <a href="index.php?module=SalesOrder&view=Detail&record={$ORDER.salesorderid}">
                                {$ORDER.subject}
                            </a>
                        </td>
                        <td>{$ORDER.customer}</td>
                        <td style="text-align: right; font-weight: bold">
                            {$USER_CURRENCY_SYMBOL}{$ORDER.total}
                        </td>
                        <td>
                            {assign var=STATUS value=$ORDER.status}
                            {if $STATUS eq 'Approved'}
                                <span class="badge" style="background-color: #28a745; color: white;">{vtranslate($STATUS, 'SalesOrder')}</span>
                            {elseif $STATUS eq 'Created' || $STATUS eq 'Pending'}
                                <span class="badge" style="background-color: #ffc107; color: #333;">{vtranslate($STATUS, 'SalesOrder')}</span>
                            {else}
                                <span class="badge" style="background-color: #6c757d; color: white;">{vtranslate($STATUS, 'SalesOrder')}</span>
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
