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
            <canvas id="pipelineChart_{$WIDGET->getId()}"></canvas>
        </div>
        
        <script type="text/javascript">
            jQuery(function() {ldelim}
                var data = {ldelim}{rdelim};
                data.labels = [];
                data.datasets = [];
                
                data.datasets.push({ldelim}
                    label: '{vtranslate("Amount", $MODULE_NAME)}',
                    data: [],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                {rdelim});
                
                {foreach from=$DATA item=ITEM}
                    data.labels.push('{$ITEM.stage}');
                    data.datasets[0].data.push({$ITEM.raw_total});
                {/foreach}
                
                var ctx = document.getElementById('pipelineChart_{$WIDGET->getId()}').getContext('2d');
                new Chart(ctx, {ldelim}
                    type: 'bar',
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
                        {rdelim},
                        legend: {ldelim}
                            display: false
                        {rdelim}
                    {rdelim}
                {rdelim});
            {rdelim});
        </script>
        
        <div class="table-responsive" style="margin-top: 20px;">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>{vtranslate('Sales Stage', $MODULE_NAME)}</th>
                        <th>{vtranslate('Count', $MODULE_NAME)}</th>
                        <th>{vtranslate('Total Amount', $MODULE_NAME)}</th>
                        <th>{vtranslate('Avg Amount', $MODULE_NAME)}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$DATA item=ITEM}
                        <tr>
                            <td>{$ITEM.stage}</td>
                            <td>{$ITEM.count}</td>
                            <td>{$USER_CURRENCY_SYMBOL}{$ITEM.total_amount}</td>
                            <td>{$USER_CURRENCY_SYMBOL}{$ITEM.avg_amount}</td>
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
