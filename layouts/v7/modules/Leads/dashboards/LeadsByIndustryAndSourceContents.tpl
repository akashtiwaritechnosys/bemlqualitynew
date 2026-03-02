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
{strip}
    {if php7_count($DATA.matrix) gt 0 }
        <style>
            .heatmap-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
                font-size: 11px;
            }
            .heatmap-table th, .heatmap-table td {
                border: 1px solid #ddd;
                padding: 4px;
                text-align: center;
            }
            .heatmap-table th {
                background-color: #f5f5f5;
                font-weight: bold;
                color: #555;
            }
            .heatmap-table .heatmap-cell {
                transition: background-color 0.3s;
                cursor: default;
                color: #000;
            }
            .heatmap-table .heatmap-cell:hover {
                border: 1px solid #333;
            }
            /* Heatmap Color Scale */
            .heatmap-0 { background-color: #ffffff; color: #ccc; }
            .heatmap-low { background-color: #e3f2fd; }   /* Light Blue */
            .heatmap-med { background-color: #90caf9; }   /* Medium Blue */
            .heatmap-high { background-color: #42a5f5; color: white; }  /* Blue */
            .heatmap-max { background-color: #1e88e5; color: white; font-weight: bold; }   /* Dark Blue */
        </style>

        <div class="row" style="margin:0px 10px; overflow-x: auto;">
            <div class="col-lg-12">
            
                <div class="widgetChartContainer" style="height:auto; min-width:300px; margin: 0 auto">
                    <table class="heatmap-table">
                        <thead>
                            <tr>
                                <th style="text-align: left; min-width: 100px;">Source \ Status</th>
                                {foreach from=$DATA.cols item=COL_HEADER}
                                    <th>{$COL_HEADER}</th>
                                {/foreach}
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$DATA.rows item=ROW_HEADER}
                                <tr>
                                    <td style="text-align: left; font-weight: bold; background-color: #fafafa;">{$ROW_HEADER}</td>
                                    {foreach from=$DATA.cols item=COL_HEADER}
                                        {assign var=COUNT value=$DATA.matrix.$ROW_HEADER.$COL_HEADER}
                                        
                                        {* Dynamic class based on count *}
                                        {assign var=CLASS value="heatmap-0"}
                                        {if $COUNT gt 0}
                                            {if $COUNT lt 5}
                                                {assign var=CLASS value="heatmap-low"}
                                            {elseif $COUNT lt 15}
                                                {assign var=CLASS value="heatmap-med"}
                                            {elseif $COUNT lt 30}
                                                {assign var=CLASS value="heatmap-high"}
                                            {else}
                                                {assign var=CLASS value="heatmap-max"}
                                            {/if}
                                        {/if}

                                        <td class="heatmap-cell {$CLASS}" title="{$ROW_HEADER} - {$COL_HEADER}: {$COUNT}">
                                            {$COUNT}
                                        </td>
                                    {/foreach}
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
    {else}
        <span class="noDataMsg">
            {vtranslate('LBL_NO')} {vtranslate($MODULE_NAME, $MODULE_NAME)} {vtranslate('LBL_MATCHED_THIS_CRITERIA')}
        </span>
    {/if}
{/strip}
