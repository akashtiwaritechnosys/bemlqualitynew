{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}

<div class="pivot-report-container" style="min-height: 400px; padding: 10px;">
    {if $REPORT_DATA}
        <div id="pivot_table_{$WIDGET_ID}" class="custom-pivot-table" style="overflow: auto;"></div>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                var widgetId = "{$WIDGET_ID}";
                var reportData = {$REPORT_DATA};

                // Unnest if necessary (legacy fix)
                if (reportData.length === 1 && Array.isArray(reportData[0])) {
                    reportData = reportData[0];
                }

                console.log("Custom Pivot Init. Rows:", reportData.length);

                if (!reportData || reportData.length === 0) {
                    jQuery("#pivot_table_" + widgetId).html(
                        "<div class='alert alert-warning'>No data available</div>");
                    return;
                }

                // Identify Fields
                var firstRow = reportData[0];
                var keys = Object.keys(firstRow);
                if (keys.length < 1) {
                    jQuery("#pivot_table_" + widgetId).html(
                        "<div class='alert alert-danger'>Invalid data format</div>");
                    return;
                }

                // Config: Row Field = keys[0], Col Field = keys[1] (if exists)
                var rowField = keys[0];
                var colField = (keys.length > 1) ? keys[1] : null;

                console.log("Pivot Config:", rowField, "vs", colField);

                // Pivot Logic
                var rowLabels = {}; // Set of unique row labels
                var colLabels = {}; // Set of unique col labels
                var matrix = {}; // Map: rowLabel -> colLabel -> count

                reportData.forEach(function(row) {
                    var rVal = row[rowField] || "(Empty)";
                    var cVal = colField ? (row[colField] || "(Empty)") : "Count";

                    // Sanitize for HTML display
                    rVal = stripHtml(String(rVal));
                    cVal = stripHtml(String(cVal));

                    rowLabels[rVal] = true;
                    colLabels[cVal] = true;

                    if (!matrix[rVal]) matrix[rVal] = {};
                    if (!matrix[rVal][cVal]) matrix[rVal][cVal] = 0;
                    matrix[rVal][cVal]++;
                });

                var sortedRowLabels = Object.keys(rowLabels).sort();
                var sortedColLabels = Object.keys(colLabels).sort();

                // Build Table HTML
                var html = '<table class="table table-bordered table-striped" style="width:100%">';

                // Header Row
                html += '<thead><tr>';
                html += '<th style="background:#f5f5f5; font-weight:bold;">' + rowField + ' / ' + (colField ||
                    'Count') + '</th>';
                sortedColLabels.forEach(function(cLab) {
                    html += '<th style="background:#f5f5f5; font-weight:bold;">' + cLab + '</th>';
                });
                html += '<th style="background:#f5f5f5; font-weight:bold;">Total</th>'; // Row Total
                html += '</tr></thead>';

                // Body
                html += '<tbody>';
                var colTotals = {};
                sortedColLabels.forEach(function(c) { colTotals[c] = 0; });
                var grandTotal = 0;

                sortedRowLabels.forEach(function(rLab) {
                    html += '<tr>';
                    html += '<td style="font-weight:bold;">' + rLab + '</td>';

                    var rowTotal = 0;
                    sortedColLabels.forEach(function(cLab) {
                        var val = (matrix[rLab] && matrix[rLab][cLab]) ? matrix[rLab][cLab] : 0;
                        html += '<td style="text-align:center;">' + (val || '-') + '</td>';

                        rowTotal += val;
                        colTotals[cLab] += val;
                        grandTotal += val;
                    });
                    html += '<td style="background:#f9f9f9; font-weight:bold; text-align:center;">' +
                        rowTotal + '</td>';
                    html += '</tr>';
                });

                // Footer (Col Totals)
                html += '<tr style="background:#f5f5f5; font-weight:bold;">';
                html += '<td>Total</td>';
                sortedColLabels.forEach(function(cLab) {
                    html += '<td style="text-align:center;">' + colTotals[cLab] + '</td>';
                });
                html += '<td style="text-align:center;">' + grandTotal + '</td>';
                html += '</tr>';

                html += '</tbody></table>';

                // Helper to strip HTML tags from data
                function stripHtml(html) {
                    var tmp = document.createElement("DIV");
                    tmp.innerHTML = html;
                    return tmp.textContent || tmp.innerText || "";
                }

                // Render
                jQuery("#pivot_table_" + widgetId).html(html);
            });
        </script>

    {else}
        <div class="noDataMsg">
            {if $ALL_REPORTS}
                <div style="text-align: center; padding: 20px;">
                    <label>{vtranslate('LBL_SELECT_REPORT', $MODULE)}</label>
                    <select id="report_select_{$WIDGET_ID}" class="select2" style="width: 200px;">
                        <option value="">{vtranslate('LBL_SELECT', $MODULE)}</option>
                        {foreach from=$ALL_REPORTS key=ID item=NAME}
                            <option value="{$ID}">{$NAME}</option>
                        {/foreach}
                    </select>
                    <br><br>
                    <button class="btn btn-success" onclick="savePivotReport_{$WIDGET_ID}()">
                        {vtranslate('LBL_SAVE', $MODULE)}
                    </button>
                </div>
                <script type="text/javascript">
                    function savePivotReport_{$WIDGET_ID}() {
                    var widgetId = "{$WIDGET_ID}";
                    var reportId = jQuery("#report_select_" + widgetId).val();
                    if (!reportId) {
                        alert("Please select a report");
                        return;
                    }

                    var params = {
                        module: 'Reports',
                        action: 'SavePivotWidget',
                        record: widgetId,
                        reportid: reportId
                    };

                    AppConnector.request(params).then(
                        function(data) {
                            if (data.success) {
                                location.reload();
                            }
                        },
                        function(error) {
                            console.error(error);
                        }
                    );
                    }
                </script>
            {else}
                {vtranslate('LBL_NO_DATA_AVAILABLE', $MODULE)}
            {/if}
        </div>
    {/if}
</div>