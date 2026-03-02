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
                    <canvas id="leadScoreChart_{$WIDGET->getId()}"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>{vtranslate('Score Range', 'Leads')}</th>
                            <th>{vtranslate('Count', 'Leads')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$DATA item=ITEM}
                            <tr>
                                <td><a href="{$ITEM.links}" target="_blank">{$ITEM[1]}</a></td>
                                <td>{$ITEM[0]}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        
        <script type="text/javascript">
            jQuery(function() {ldelim}
                if (typeof Chart === 'undefined') {ldelim}
                    console.error('LeadScoreDistribution: Chart.js library is not loaded!');
                    var canvasId = 'leadScoreChart_{$WIDGET->getId()}';
                    var canvas = document.getElementById(canvasId);
                    if (canvas) {ldelim}
                        var ctx = canvas.getContext('2d');
                        ctx.font = "14px Arial";
                        ctx.fillText("Chart.js missing", 10, 50);
                    {rdelim}
                    return;
                {rdelim}

                var canvasId = 'leadScoreChart_{$WIDGET->getId()}';
                var canvas = document.getElementById(canvasId);
                if (!canvas) {ldelim}
                    console.error('LeadScoreDistribution: Canvas element not found with ID: ' + canvasId);
                    return;
                {rdelim}

                var data = {ldelim}{rdelim};
                data.labels = [];
                data.datasets = [];
                
                var colors = [
                    'rgba(40, 167, 69, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(23, 162, 184, 0.7)',
                    'rgba(108, 117, 125, 0.7)'
                ];
                
                data.datasets.push({ldelim}
                    data: [],
                    backgroundColor: colors
                {rdelim});
                
                {foreach from=$DATA item=ITEM}
                    data.labels.push('{$ITEM[1]}');
                    data.datasets[0].data.push({$ITEM[0]});
                {/foreach}
                
                var ctx = canvas.getContext('2d');
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
