/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Vtiger_Widget_Js(
    "Vtiger_NewBusinessVsExistingBusiness_Widget_Js",
    {},
    {
        generateData: function () {
            var container = this.getContainer();
            var jData = container.find(".widgetData").val();
            var data = [];
            if (jData) {
                try {
                    data = JSON.parse(jData);
                } catch (e) {
                    console.error("Error parsing widget data", e);
                    data = [];
                }
            }

            var chartData = [];
            var labels = [];

            if (data && data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    var row = data[i];
                    var label = row[0];
                    if (!label) {
                        label = "Unknown";
                    }
                    labels.push(label);
                    chartData.push(parseFloat(row[1]));
                }
            }

            // Log raw data for debugging
            console.log("NewBusinessVsExistingBusiness Raw Data:", data);

            return {
                series: chartData,
                labels: labels,
                formattedData: data
            };
        },

        generateLinks: function () {
            var container = this.getContainer();
            var jData = container.find(".widgetData").val();
            var data = [];
            if (jData) {
                try {
                    data = JSON.parse(jData);
                } catch (e) {
                    data = [];
                }
            }
            var links = [];
            if (data && data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    links.push(data[i]['links']);
                }
            }
            return links;
        },

        loadChart: function () {
            var dataObj = this.generateData();
            var series = dataObj.series;
            var labels = dataObj.labels;
            var links = this.generateLinks();
            var container = this.getContainer();
            var widgetContent = container.find('.dashboardWidgetContent');

            console.log("Loading Chart for Widget", container.attr('id'), "Series:", series);

            if (series.length === 0) {
                widgetContent.html('<div style="text-align:center;padding:20px;">No Data Available</div>');
                return;
            }

            if (typeof ApexCharts === 'undefined') {
                console.error("ApexCharts is undefined. Chart cannot be rendered.");
                widgetContent.html('<div style="text-align:center;padding:20px;color:red;">Error: Chart library missing.</div>');
                return;
            }

            // Ensure unique ID for the chart container
            var chartId = 'chart_' + container.attr('id');
            var chartContainer = widgetContent.find('.widgetChartContainer');
            if (chartContainer.length === 0) {
                widgetContent.html('<div class="widgetChartContainer" id="' + chartId + '" style="min-height: 250px;"></div>');
                chartContainer = widgetContent.find('#' + chartId);
            } else {
                chartContainer.attr('id', chartId);
                chartContainer.empty(); // Clear previous chart if any
            }

            // Semi-circle donut configuration
            var options = {
                series: series,
                labels: labels,
                chart: {
                    type: 'donut',
                    height: 300,
                    events: {
                        dataPointSelection: function (event, chartContext, config) {
                            if (links[config.dataPointIndex]) {
                                window.open(links[config.dataPointIndex], "_blank");
                            }
                        }
                    }
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 90,
                        offsetY: 10,
                        donut: {
                            size: '70%',
                            labels: {
                                show: true,
                                name: {
                                    show: true,
                                    offsetY: -30
                                },
                                value: {
                                    show: true,
                                    fontSize: '24px',
                                    fontWeight: 600,
                                    offsetY: -20,
                                    formatter: function (val) {
                                        return val;
                                    }
                                },
                                total: {
                                    show: true,
                                    showAlways: true,
                                    label: 'Total',
                                    fontSize: '18px',
                                    fontWeight: 600,
                                    color: '#373d3f',
                                    formatter: function (w) {
                                        var totalVal = w.globals.seriesTotals.reduce((a, b) => {
                                            return a + b
                                        }, 0);
                                        // Attempt to shorten
                                        if (totalVal >= 1000000) {
                                            return '$' + (totalVal / 1000000).toFixed(2) + 'M';
                                        } else if (totalVal >= 1000) {
                                            return '$' + (totalVal / 1000).toFixed(2) + 'K';
                                        }
                                        return '$' + totalVal.toFixed(2);
                                    }
                                }
                            }
                        }
                    }
                },
                grid: {
                    padding: {
                        bottom: -80
                    }
                },
                legend: {
                    position: 'bottom'
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val, opts) {
                        // Show percentage
                        return val.toFixed(1) + "%";
                    }
                },
                colors: ['#4DB6AC', '#4fc3f7', '#FEB019', '#FF4560'] // Example teal and blue-ish colors
            };

            try {
                var chart = new ApexCharts(document.querySelector("#" + chartId), options);
                chart.render();
            } catch (e) {
                console.error("ApexCharts Render Error:", e);
                widgetContent.html('<div style="text-align:center;padding:20px;color:red;">Error rendering chart.</div>');
            }
        },

        postLoadWidget: function () {
            this._super();
            if (!this.isEmptyData()) {
                this.loadChart();
            }
        }
    }
);
