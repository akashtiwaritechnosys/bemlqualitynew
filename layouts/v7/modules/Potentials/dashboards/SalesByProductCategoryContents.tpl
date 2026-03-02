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
            <canvas id="categoryChart_{$WIDGET->getId()}"></canvas>
        </div>
        
        <script type="text/javascript">
            jQuery(function() {ldelim}
                var data = {ldelim}{rdelim};
                data.labels = [];
                data.datasets = [];
                
                var colors = [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                    'rgba(255, 159, 64, 0.7)'
                ];
                
                data.datasets.push({ldelim}
                    data: [],
                    backgroundColor: colors
                {rdelim});
                
                {foreach from=$DATA item=ITEM}
                    data.labels.push('{$ITEM.category}');
                    data.datasets[0].data.push({$ITEM.raw_total});
                {/foreach}
                
                var ctx = document.getElementById('categoryChart_{$WIDGET->getId()}').getContext('2d');
                new Chart(ctx, {ldelim}
                    type: 'doughnut',
                    data: data,
                    options: {ldelim}
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {ldelim}
                            position: 'right'
                        {rdelim}
                    {rdelim}
                {rdelim});
            {rdelim});
        </script>
        
        <div class="table-responsive" style="margin-top: 20px;">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>{vtranslate('Category', 'Products')}</th>
                        <th>{vtranslate('Total Sales', 'SalesOrder')}</th>
                        <th>{vtranslate('Orders', 'SalesOrder')}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$DATA item=ITEM}
                        <tr>
                            <td>{$ITEM.category}</td>
                            <td>{$USER_CURRENCY_SYMBOL}{$ITEM.total_sales}</td>
                            <td>{$ITEM.order_count}</td>
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
