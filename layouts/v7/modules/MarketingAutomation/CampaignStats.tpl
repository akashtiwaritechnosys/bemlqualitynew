<div class="row-fluid">
    <div class="span12">
        <h5>{vtranslate('Campaign Statistics', $MODULE_NAME)}</h5>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>{vtranslate('LBL_METRIC', $MODULE_NAME)}</th>
                    <th>{vtranslate('LBL_COUNT', $MODULE_NAME)}</th>
                </tr>
            </thead>
            <tbody>
                {foreach key=METRIC item=COUNT from=$STATS}
                <tr>
                    <td class="text-capitalize">{$METRIC}</td>
                    <td><span class="badge {if $METRIC eq 'sent'}badge-info{elseif $METRIC eq 'opened'}badge-success{elseif $METRIC eq 'clicked'}badge-warning{else}badge-inverse{/if}">{$COUNT}</span></td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>

{* Email metrics per weekday chart *}
<div class="row-fluid" style="margin-top: 20px;">
    <div class="span12">
        <h5>{vtranslate('Email Metrics Per Weekday', $MODULE_NAME)}</h5>
        <canvas id="weekdayChart" width="400" height="200"></canvas>
    </div>
</div>

{* Email metrics per hour chart *}
<div class="row-fluid" style="margin-top: 20px;">
    <div class="span12">
        <h5>{vtranslate('Email Metrics Per Hour', $MODULE_NAME)}</h5>
        <canvas id="hourlyChart" width="400" height="150"></canvas>
    </div>
</div>

{* Chart.js from CDN *}
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

<script type="text/javascript">
// Convert PHP data to JavaScript
var statsByWeekday = {json_encode($STATS_BY_WEEKDAY)};
var statsByHour = {json_encode($STATS_BY_HOUR)};

// Prepare weekday chart data
var weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
var weekdayData = {
    labels: weekdays,
    datasets: [
        {
            label: 'Sent',
            data: weekdays.map(day => statsByWeekday[day].sent),
            backgroundColor: 'rgba(91, 192, 222, 0.6)',
            borderColor: 'rgba(91, 192, 222, 1)',
            borderWidth: 1
        },
        {
            label: 'Opened',
            data: weekdays.map(day => statsByWeekday[day].opened),
            backgroundColor: 'rgba(92, 184, 92, 0.6)',
            borderColor: 'rgba(92, 184, 92, 1)',
            borderWidth: 1
        },
        {
            label: 'Clicked',
            data: weekdays.map(day => statsByWeekday[day].clicked),
            backgroundColor: 'rgba(240, 173, 78, 0.6)',
            borderColor: 'rgba(240, 173, 78, 1)',
            borderWidth: 1
        }
    ]
};

// Prepare hourly chart data
var hours = [];
var sentData = [];
var openedData = [];
var clickedData = [];

for (var i = 0; i < 24; i++) {
    hours.push(i + ':00');
    sentData.push(statsByHour[i].sent);
    openedData.push(statsByHour[i].opened);
    clickedData.push(statsByHour[i].clicked);
}

var hourlyData = {
    labels: hours,
    datasets: [
        {
            label: 'Sent',
            data: sentData,
            backgroundColor: 'rgba(91, 192, 222, 0.2)',
            borderColor: 'rgba(91, 192, 222, 1)',
            borderWidth: 2,
            fill: true
        },
        {
            label: 'Opened',
            data: openedData,
            backgroundColor: 'rgba(92, 184, 92, 0.2)',
            borderColor: 'rgba(92, 184, 92, 1)',
            borderWidth: 2,
            fill: true
        },
        {
            label: 'Clicked',
            data: clickedData,
            backgroundColor: 'rgba(240, 173, 78, 0.2)',
            borderColor: 'rgba(240, 173, 78, 1)',
            borderWidth: 2,
            fill: true
        }
    ]
};

// Render weekday chart (bar chart)
var weekdayCtx = document.getElementById('weekdayChart').getContext('2d');
var weekdayChart = new Chart(weekdayCtx, {
    type: 'bar',
    data: weekdayData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1
                }
            }
        }
    }
});

// Render hourly chart (line chart with fill)
var hourlyCtx = document.getElementById('hourlyChart').getContext('2d');
var hourlyChart = new Chart(hourlyCtx, {
    type: 'line',
    data: hourlyData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1
                }
            }
        }
    }
});
</script>
