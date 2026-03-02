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
        <div style="height: 300px;">
            <canvas id="revenueChart_{$WIDGET->getId()}"></canvas>
        </div>
        
        <script type="text/javascript">
            jQuery(function() {
                var data = {ldelim}{rdelim};
                data.labels = [];
                data.datasets = [];
                
                data.datasets.push({ldelim}
                    label: '{vtranslate("Revenue", $MODULE_NAME)}',
                    data: [],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    fill: true
                {rdelim});
                
                {foreach from=$DATA item=ITEM}
                    data.labels.push('{$ITEM.month}');
                    data.datasets[0].data.push({$ITEM.raw_revenue});
                {/foreach}
                
                var ctx = document.getElementById('revenueChart_{$WIDGET->getId()}').getContext('2d');
                new Chart(ctx, {ldelim}
                    type: 'line',
                    data: data,
                    options: {ldelim}
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {ldelim}
                            yAxes: [{ldelim}
                                ticks: {ldelim}
                                    beginAtZero: true,
                                    callback: function(value) {ldelim}
                                        return '{$USER_CURRENCY_SYMBOL}' + value.toLocaleString();
                                    {rdelim}
                                {rdelim}
                            {rdelim}]
                        {rdelim}
                    {rdelim}
                {rdelim});
            {rdelim});
        </script>
        
        <div class="table-responsive" style="margin-top: 20px;">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>{vtranslate('Month', $MODULE_NAME)}</th>
                        <th>{vtranslate('Revenue', $MODULE_NAME)}</th>
                        <th>{vtranslate('Invoices', $MODULE_NAME)}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$DATA item=ITEM}
                        <tr>
                            <td>{$ITEM.month}</td>
                            <td>{$USER_CURRENCY_SYMBOL}{$ITEM.revenue}</td>  
                            <td>{$ITEM.invoice_count}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    {else}
        <div class="alert alert-info" style="margin: 20px;">
            <i class="fa fa-info-circle"></i> {vtranslate('LBL_NO_DATA_AVAILABLE', $MODULE_NAME)}
        </div>
    {/if}
</div>
