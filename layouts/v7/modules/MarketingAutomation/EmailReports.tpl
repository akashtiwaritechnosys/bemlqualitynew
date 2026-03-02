{*+**********************************************************************************
 * Email Campaign Reports Template for MarketingAutomation Module
 ************************************************************************************}
{strip}
<style>
.email-reports-container {
    padding: 20px;
    background: #f8f9fa;
}

.reports-header {
    margin-bottom: 30px;
}

.reports-header h3 {
    color: #2c3e50;
    font-weight: 600;
    margin: 0 0 5px 0;
    font-size: 24px;
}

.reports-header p {
    color: #7f8c8d;
    margin: 0;
}

/* Engagement Rate Cards */
.engagement-cards {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
}

.engagement-card {
    flex: 1;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    padding: 25px;
    color: white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.engagement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.engagement-card.success {
    background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
}

.engagement-card.warning {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}

.engagement-card.info {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
}

.engagement-card-icon {
    font-size: 36px;
    opacity: 0.3;
    position: absolute;
    right: 20px;
    top: 20px;
}

.engagement-card-label {
    font-size: 13px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    opacity: 0.9;
    margin-bottom: 8px;
}

.engagement-card-value {
    font-size: 36px;
    font-weight: 700;
    margin: 0;
    line-height: 1;
}

/* Statistics Cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.stat-card {
    background: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-left: 4px solid #667eea;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.12);
}

.stat-card.success { border-left-color: #38ef7d; }
.stat-card.warning { border-left-color: #f5576c; }
.stat-card.info { border-left-color: #00f2fe; }
.stat-card.sent { border-left-color: #667eea; }
.stat-card.bounced { border-left-color: #e74c3c; }
.stat-card.unsubscribed { border-left-color: #95a5a6; }

.stat-card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
}

.stat-card-title {
    font-size: 14px;
    color: #7f8c8d;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.stat-card-icon {
    font-size: 24px;
    opacity: 0.6;
}

.stat-card-value {
    font-size: 32px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 8px;
}

.stat-card-description {
    font-size: 12px;
    color: #95a5a6;
    line-height: 1.4;
}

/* Chart Sections */
.chart-section {
    background: white;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}

.chart-section h5 {
    font-size: 18px;
    font-weight: 600;
    color: #2c3e50;
    margin: 0 0 20px 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.chart-section h5 i {
    color: #667eea;
}

canvas {
    max-height: 300px !important;
}
</style>

<div class="email-reports-container">
    <div class="reports-header">
        <h3><i class="fa fa-chart-line"></i> Email Campaign Reports</h3>
        <p>Comprehensive analytics for your email marketing campaigns</p>
    </div>
    
    {* Engagement Rate Cards *}
    <div class="engagement-cards">
        <div class="engagement-card success">
            <i class="fa fa-envelope-open engagement-card-icon"></i>
            <div class="engagement-card-label">Open Rate</div>
            <div class="engagement-card-value">
                {if $STATS.sent > 0}
                    {math equation="(opened / sent) * 100" opened=$STATS.opened sent=$STATS.sent assign=openRate}
                    {$openRate|number_format:1}%
                {else}
                    0%
                {/if}
            </div>
        </div>
        
        <div class="engagement-card warning">
            <i class="fa fa-mouse-pointer engagement-card-icon"></i>
            <div class="engagement-card-label">Click Rate</div>
            <div class="engagement-card-value">
                {if $STATS.sent > 0}
                    {math equation="(clicked / sent) * 100" clicked=$STATS.clicked sent=$STATS.sent assign=clickRate}
                    {$clickRate|number_format:1}%
                {else}
                    0%
                {/if}
            </div>
        </div>
        
        <div class="engagement-card info">
            <i class="fa fa-reply engagement-card-icon"></i>
            <div class="engagement-card-label">Reply Rate</div>
            <div class="engagement-card-value">
                {if $STATS.sent > 0}
                    {math equation="(replied / sent) * 100" replied=$STATS.replied sent=$STATS.sent assign=replyRate}
                    {$replyRate|number_format:1}%
                {else}
                    0%
                {/if}
            </div>
        </div>
    </div>

    {* Detailed Statistics Grid *}
    <div class="stats-grid">
        <div class="stat-card success">
            <div class="stat-card-header">
                <span class="stat-card-title">Opened</span>
                <i class="fa fa-envelope-open stat-card-icon"></i>
            </div>
            <div class="stat-card-value">{$STATS.opened}</div>
            <div class="stat-card-description">Recipients who opened your emails</div>
        </div>
        
        <div class="stat-card warning">
            <div class="stat-card-header">
                <span class="stat-card-title">Clicked</span>
                <i class="fa fa-mouse-pointer stat-card-icon"></i>
            </div>
            <div class="stat-card-value">{$STATS.clicked}</div>
            <div class="stat-card-description">Recipients who clicked on links</div>
        </div>
        
        <div class="stat-card info">
            <div class="stat-card-header">
                <span class="stat-card-title">Replied</span>
                <i class="fa fa-reply stat-card-icon"></i>
            </div>
            <div class="stat-card-value">{$STATS.replied}</div>
            <div class="stat-card-description">Recipients who replied to emails</div>
        </div>
        
        <div class="stat-card sent">
            <div class="stat-card-header">
                <span class="stat-card-title">Sent</span>
                <i class="fa fa-paper-plane stat-card-icon"></i>
            </div>
            <div class="stat-card-value">{$STATS.sent}</div>
            <div class="stat-card-description">Total emails sent successfully</div>
        </div>
        
        <div class="stat-card bounced">
            <div class="stat-card-header">
                <span class="stat-card-title">Bounced</span>
                <i class="fa fa-exclamation-triangle stat-card-icon"></i>
            </div>
            <div class="stat-card-value">{$STATS.bounced}</div>
            <div class="stat-card-description">Emails that failed to deliver</div>
        </div>
        
        <div class="stat-card unsubscribed">
            <div class="stat-card-header">
                <span class="stat-card-title">Unsubscribed</span>
                <i class="fa fa-user-times stat-card-icon"></i>
            </div>
            <div class="stat-card-value">{$STATS.unsubscribed}</div>
            <div class="stat-card-description">Recipients who unsubscribed</div>
        </div>
    </div>

    {* Email Metrics Per Weekday Chart *}
    <div class="chart-section">
        <h5><i class="fa fa-calendar"></i> Email Metrics Per Weekday</h5>
        <canvas id="weekdayChart"></canvas>
    </div>

    {* Email Metrics Per Hour Chart *}
    <div class="chart-section">
        <h5><i class="fa fa-clock"></i> Email Metrics Per Hour</h5>
        <canvas id="hourlyChart"></canvas>
    </div>
</div>

{* Include Chart.js from CDN *}
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
            backgroundColor: 'rgba(102, 126, 234, 0.8)',
            borderColor: 'rgba(102, 126, 234, 1)',
            borderWidth: 2,
            borderRadius: 6
        },
        {
            label: 'Opened',
            data: weekdays.map(day => statsByWeekday[day].opened),
            backgroundColor: 'rgba(56, 239, 125, 0.8)',
            borderColor: 'rgba(56, 239, 125, 1)',
            borderWidth: 2,
            borderRadius: 6
        },
        {
            label: 'Clicked',
            data: weekdays.map(day => statsByWeekday[day].clicked),
            backgroundColor: 'rgba(245, 87, 108, 0.8)',
            borderColor: 'rgba(245, 87, 108, 1)',
            borderWidth: 2,
            borderRadius: 6
        },
        {
            label: 'Replied',
            data: weekdays.map(day => statsByWeekday[day].replied),
            backgroundColor: 'rgba(0, 242, 254, 0.8)',
            borderColor: 'rgba(0, 242, 254, 1)',
            borderWidth: 2,
            borderRadius: 6
        }
    ]
};

// Prepare hourly chart data
var hours = [];
var sentData = [];
var openedData = [];
var clickedData = [];
var repliedData = [];

for (var i = 0; i < 24; i++) {
    hours.push(i + ':00');
    sentData.push(statsByHour[i].sent);
    openedData.push(statsByHour[i].opened);
    clickedData.push(statsByHour[i].clicked);
    repliedData.push(statsByHour[i].replied);
}

var hourlyData = {
    labels: hours,
    datasets: [
        {
            label: 'Sent',
            data: sentData,
            backgroundColor: 'rgba(102, 126, 234, 0.2)',
            borderColor: 'rgba(102, 126, 234, 1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            pointHoverRadius: 6
        },
        {
            label: 'Opened',
            data: openedData,
            backgroundColor: 'rgba(56, 239, 125, 0.2)',
            borderColor: 'rgba(56, 239, 125, 1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            pointHoverRadius: 6
        },
        {
            label: 'Clicked',
            data: clickedData,
            backgroundColor: 'rgba(245, 87, 108, 0.2)',
            borderColor: 'rgba(245, 87, 108, 1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            pointHoverRadius: 6
        },
        {
            label: 'Replied',
            data: repliedData,
            backgroundColor: 'rgba(0, 242, 254, 0.2)',
            borderColor: 'rgba(0, 242, 254, 1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            pointHoverRadius: 6
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
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'top',
                labels: {
                    padding: 15,
                    font: {
                        size: 12,
                        weight: '500'
                    }
                }
            },
            tooltip: {
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                padding: 12,
                cornerRadius: 8,
                titleFont: {
                    size: 14
                },
                bodyFont: {
                    size: 13
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1
                },
                grid: {
                    color: 'rgba(0, 0, 0, 0.05)'
                }
            },
            x: {
                grid: {
                    display: false
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
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'top',
                labels: {
                    padding: 15,
                    font: {
                        size: 12,
                        weight: '500'
                    }
                }
            },
            tooltip: {
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                padding: 12,
                cornerRadius: 8,
                titleFont: {
                    size: 14
                },
                bodyFont: {
                    size: 13
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1
                },
                grid: {
                    color: 'rgba(0, 0, 0, 0.05)'
                }
            },
            x: {
                grid: {
                    display: false
                }
            }
        }
    }
});
</script>
{/strip}

