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
        <div class="row">
            <div class="col-md-6">
                <div style="height: 250px;">
                    <canvas id="invoiceStatusChart_{$WIDGET->getId()}"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>{vtranslate('Status', 'Invoice')}</th>
                            <th>{vtranslate('Count', 'Invoice')}</th>
                            <th>{vtranslate('Amount', 'Invoice')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$DATA item=ITEM}
                            <tr>
                                <td>{$ITEM.status}</td>
                                <td>{$ITEM.count}</td>
                                <td>{$USER_CURRENCY_SYMBOL}{$ITEM.total_amount}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        
        <script type="text/javascript">
            jQuery(function() {ldelim}
                var data = {ldelim}{rdelim};
                data.labels = [];
                data.datasets = [];
                
                var colors = [
                    'rgba(40, 167, 69, 0.7)',   // Green for paid
                    'rgba(255, 193, 7, 0.7)',   // Yellow for pending
                    'rgba(220, 53, 69, 0.7)',   // Red for overdue
                    'rgba(23, 162, 184, 0.7)',  // Blue
                    'rgba(108, 117, 125, 0.7)'  // Gray
                ];
                
                data.datasets.push({ldelim}
                    data: [],
                    backgroundColor: colors
                {rdelim});
                
                {foreach from=$DATA item=ITEM}
                    data.labels.push('{$ITEM.status}');
                    data.datasets[0].data.push({$ITEM.count});
                {/foreach}
                
                var ctx = document.getElementById('invoiceStatusChart_{$WIDGET->getId()}').getContext('2d');
                new Chart(ctx, {ldelim}
                    type: 'pie',
                    data: data,
                    options: {ldelim}
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {ldelim}
                            position: 'bottom'
                        {rdelim}
                    {rdelim}
                {rdelim});
            {rdelim});
        </script>
    {else}
        <div class="alert alert-info" style="margin: 20px;">
            <i class="fa fa-info-circle"></i> {vtranslate('LBL_NO_DATA_AVAILABLE', $MODULE_NAME)}
        </div>
    {/if}
</div>
