{strip}
    <script>
        $(document).ready(function() {
            jQuery('.app-menu').removeClass('hide');
            var toggleAppMenu = function(type) {
                var appMenu = jQuery('.app-menu');
                var appNav = jQuery('.app-nav');
                appMenu.appendTo('#page');
                appMenu.css({
                    'top': appNav.offset().top + appNav.height(),
                    'left': 0
                });
                if (typeof type === 'undefined') {
                    type = appMenu.is(':hidden') ? 'show' : 'hide';
                }
                if (type == 'show') {
                    appMenu.show(200, function() {});
                } else {
                    appMenu.hide(200, function() {});
                }
            };

            jQuery('.app-trigger, .app-icon, .app-navigator').on('click', function(e) {
                e.stopPropagation();
                toggleAppMenu();
            });

            jQuery('html').on('click', function() {

            });
            jQuery(document).keyup(function(e) {
                if (e.keyCode == 27) {
                    if (!jQuery('.app-menu').is(':hidden')) {
                        toggleAppMenu('hide');
                    }
                }
            });
            jQuery('.app-modules-dropdown-container').hover(function(e) {
                var dropdownContainer = jQuery(e.currentTarget);
                jQuery('.dropdown').removeClass('open');
                if (dropdownContainer.length) {
                    if (dropdownContainer.hasClass('dropdown-compact')) {
                        dropdownContainer.find('.app-modules-dropdown').css('top', dropdownContainer
                            .position().top - 8);
                    } else {
                        dropdownContainer.find('.app-modules-dropdown').css('top', '');
                    }
                    dropdownContainer.addClass('open').find('.app-item').addClass('active-app-item');
                }
            }, function(e) {
                var dropdownContainer = jQuery(e.currentTarget);
                dropdownContainer.find('.app-item').removeClass('active-app-item');
                setTimeout(function() {
                    if (dropdownContainer.find('.app-modules-dropdown').length && !dropdownContainer
                        .find('.app-modules-dropdown').is(':hover') && !dropdownContainer.is(
                            ':hover')) {
                        dropdownContainer.removeClass('open');
                    }
                }, 500);

            });
            jQuery('.app-item').on('click', function() {
                var url = jQuery(this).data('defaultUrl');
                if (url) {
                    window.location.href = url;
                }
            });

            jQuery(window).resize(function() {
                jQuery(".app-modules-dropdown").mCustomScrollbar("destroy");
                app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not(
                    '.dropdown-modules-compact'), {
                    setHeight: $(window).height(),
                    autoExpandScrollbar: true
                });
                jQuery('.dropdown-modules-compact').each(function() {
                    var element = jQuery(this);
                    var heightPer = parseFloat(element.data('height'));
                    app.helper.showVerticalScroll(element, {
                        setHeight: $(window).height() * heightPer - 3,
                        autoExpandScrollbar: true,
                        scrollbarPosition: 'outside'
                    });
                });
            });

            app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {
                setHeight: $(window).height(),
                autoExpandScrollbar: true,
                scrollbarPosition: 'outside'
            });
            jQuery('.dropdown-modules-compact').each(function() {
                var element = jQuery(this);
                var heightPer = parseFloat(element.data('height'));
                app.helper.showVerticalScroll(element, {
                    setHeight: $(window).height() * heightPer - 3,
                    autoExpandScrollbar: true,
                    scrollbarPosition: 'outside'
                });
            });
        });
    </script>
    <div style="padding-top: 30px">
        <style>
            .from-date {
                display: flex;
                flex-direction: column;
                width: 15%;
                margin-top: 5px;
            }

            .date-custom {
                display: flex;
                gap: 20px;
                margin-bottom: 20px;
            }

            .date-input {
                border-radius: 20px;
                padding: 5px 15px;
            }

            .dropdown-select {
                border-radius: 6px;
                padding: 5px 15px;
                margin-bottom: 20px;
            }

            .buttons-form {
                display: flex;
                gap: 20px;
                margin-top: 20px;
            }

            .btn-form {
                padding: 10px 20px;
                border-radius: 6px;
                background-color: #007bff;
                color: white;
                border: none;
                cursor: pointer;
            }

            .label-date {
                padding-left: 15px;
            }

            .date-range {
                margin-bottom: 20px;
            }

            .date-option {
                margin-bottom: 5px;
            }

            .ticket-form {
                align-items: center;
            }

            .ticket-type-form label {
                display: inline-block;
                width: 140px;
            }

            .ticket-type-form select {
                width: 200px;
            }

            .choice-date {
                display: flex;
                gap: 20px;
            }

            .choice-date label {
                font-size: 16px;
            }

            /* input[type=checkbox]:checked::after,
            .checkbox input[type=checkbox]:checked::after,
            .checkbox-inline input[type=checkbox]:checked::after {
                top: -2px;
                left: -3px;
            }

            input[type=radio],
            .radio input[type=radio],
            .radio-inline input[type=radio],
            input[type=checkbox],
            .checkbox input[type=checkbox],
            .checkbox-inline input[type=checkbox] {
                width: 20px;
                height: 20px;
            } */

            table {
                border-collapse: collapse;
                width: 95%;
                margin-top: 20px;
                margin-left: 20px;
                margin-bottom: 50px;
            }

            th,
            td {
                border: 1px solid #ccc;
                text-align: center;
                padding: 10px;
            }

            th {
                background-color: #f2f2f2;
            }

            .NoBackGround {
                background-color: #ffffff;
            }
        </style>
        {include file="exports.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
    </div>
    <div class="container"
        style="margin-top:20px; background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <div class="form-group">
            <label class="control-label">Date Range:</label><br>
            <label class="radio-inline">
                <input type="radio" name="dateRange" value="l MONTH" id="lastMonth"
                    {if $dateRange eq "l MONTH"}checked{/if}> Last Month
            </label>
            <label class="radio-inline">
                <input type="radio" name="dateRange" value="3 MONTH" id="last3Month"
                    {if $dateRange eq "3 MONTH"}checked{/if}> Last 3 Months
            </label>
            <label class="radio-inline">
                <input type="radio" name="dateRange" value="6 MONTH" id="last6Month"
                    {if $dateRange eq "6 MONTH"}checked{/if}> Last 6 Months
            </label>
            <label class="radio-inline">
                <input type="radio" name="dateRange" value="1 YEAR" id="lastYear" {if $dateRange eq "1 YEAR"}checked{/if}>
                Last 1 Year
            </label>
            <label class="radio-inline">
                <input type="radio" name="dateRange" value="Custom" id="customRange"
                    {if $dateRange eq "Custom"}checked{/if}> Custom
            </label>
        </div>
        <div id="customDateRange" style="{if $dateRange neq 'Custom'} display:none; {/if}">
            <label>Select Custom Date</label>
            <div class="date-custom">
                <div class="form-group from-date">
                    <label for="fromDate">From:</label>
                    <input class="form-control" value="{$fromDate}" type="date" id="fromDate" name="fromDate">
                </div>
                <div class="form-group from-date">
                    <label for="toDate">To:</label>
                    <input class="form-control" value="{$toDate}" type="date" id="toDate" name="toDate">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="ticketType" class="control-label">Ticket Type:</label>
                <select class="form-control select2" multiple id="ticketType" name="ticketType">
                    {foreach from=$ticketTypRow item=data}
                        <option value="{$data.sr_ticket_type}"
                            {if in_array(Vtiger_Util_Helper::toSafeHTML($data.sr_ticket_type), $ticketType)} selected {/if}>
                            {$data.sr_ticket_type}
                        </option>
                    {/foreach}
                </select>
            </div>
            <!-- Equipment Equipment Model -->
            <div class="form-group col-sm-4">
                <label for="equipmentModel" class="control-label">Equipment Equipment Model:</label>
                <select class="form-control select2" multiple id="equipmentModel" name="equipmentModel[]">
                    {foreach from=$eqipDataRow item=data}
                        <option value="{$data.sr_equip_model}"
                            {if in_array(Vtiger_Util_Helper::toSafeHTML($data.sr_equip_model), $equipmentModel)} selected {/if}>
                            {$data.sr_equip_model}
                        </option>
                    {/foreach}
                </select>
            </div>
            <!-- Warranty Warranty Status -->
            <div class="form-group col-sm-4">
                <label for="warrantyStatus" class="control-label">Warranty Warranty Status:</label>
                <select class="form-control select2" multiple id="warrantyStatus" name="warrantyStatus">
                    {foreach from=$warDataRow item=data}
                        <option value="{$data.sr_war_status}"
                            {if in_array(Vtiger_Util_Helper::toSafeHTML($data.sr_war_status), $warrantyStatus)} selected {/if}>
                            {$data.sr_war_status}
                        </option>
                    {/foreach}
                </select>
            </div>
        </div>

        <!-- Buttons -->
        <div class="form-group text-right">
            <button type="button" id="loadresults" class="btn btn-primary">View</button>&nbsp;
            <button type="button" class="btn btn-default" id="clearForm">Clear</button>&nbsp;
        </div>
    </div>
    </br>
    <div id="data_table">
        <div style="border: 1px solid #ccc; padding: 20px; margin: 20px; background-color: #f9f9f9; font-family: Arial; border-radius: 8px;">
            <h5 style="margin-top: 0; color: #333;">Report Filters Summary</h5>
            <table style="margin-bottom: 0px;">
                <tbody>
                {if $ticketType neq ''}
                    <tr><td colspan="12"><strong>Ticket Type :</strong> {implode(", ", $ticketType)}</td></<tr>
                {/if}
                {if $equipmentModel neq ''}
                    <tr><td colspan="12"><strong>Equipment Model:</strong> {implode(", ", $equipmentModel)}</td></<tr>
                {/if}
                {if $warrantyStatus neq ''}
                    <tr><td colspan="12"><strong>Warranty Status:</strong> {implode(", ", $warrantyStatus)}</td></<tr>
                {/if}
                {if $fromDate neq '' && $toDate neq ''}
                    <tr><td colspan="12"><strong>Date Range:</strong> {Vtiger_Functions::currentUserDisplayDate($fromDate)} to {Vtiger_Functions::currentUserDisplayDate($toDate)} ({$dateRange})</td></tr>
                {/if}
                <tbody>
            </table>
        </div>

        {if $ticketType|php7_count > 0 and $equipmentModel|php7_count > 0 and $warrantyStatus|php7_count > 0}
            <table class="tNoBackGround able table-bordered">
                <tbody>
                    <tr>
                        <th><b>Ticket Type</b></th>
                        <th><b>Equipment Model</b></th>
                        <th><b>Warranty Status</b></th>
                        <th><b>Total No of Tickets</b></th>
                        <th><b>No. of Open Tickets</b></th>
                        <th><b>No. of In-Progress Tickets</b></th>
                        <th><b>No. of Closed Tickets</b></th>
                        <th><b>Avg Response Time</b></th>
                        <th><b>MTTR</b></th>
                    </tr>
                    {foreach from=$GROUPED_DATA key=ticket_type item=models}
                        {assign var=deptRowspan value=0}
                        {foreach from=$models item=statuses}
                            {foreach from=$statuses item=rows}
                                {assign var=deptRowspan value=$deptRowspan+php7_count($rows)}
                            {/foreach}
                        {/foreach}
                        {assign var=firstDept value=true}
                        {foreach from=$models key=model item=statuses}
                            {assign var=teamRowspan value=0}
                            {foreach from=$statuses item=rows}
                                {assign var=teamRowspan value=$teamRowspan+php7_count($rows)}
                            {/foreach}
                            {assign var=firstTeam value=true}
                            {foreach from=$statuses key=status item=records}
                                {assign var=firstStatus value=true}
                                {foreach from=$records item=record}
                                    <tr>
                                        {if $firstDept}
                                            <td class="NoBackGround" rowspan="{$deptRowspan}">{$ticket_type}</td>
                                            {assign var=firstDept value=false}
                                        {/if}
                                        {if $firstTeam}
                                            <td class="NoBackGround" rowspan="{$teamRowspan}">{$model}</td>
                                            {assign var=firstTeam value=false}
                                        {/if}
                                        {if $firstStatus}
                                            <td class="NoBackGround" rowspan="{php7_count($records)}">{$status|default:"-"}</td>
                                            {assign var=firstStatus value=false}
                                        {/if}
                                        <td class="NoBackGround">{$record.no_of_tickets}</td>
                                        <td class="NoBackGround">{$record.open}</td>
                                        <td class="NoBackGround">{$record.inprogress}</td>
                                        <td class="NoBackGround">{$record.closed}</td>
                                        <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($record.resp_avg)}</td>
                                        <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($record.repair_avg)}</td>

                                    </tr>
                                {/foreach}
                            {/foreach}
                        {/foreach}
                    {/foreach}
                </tbody>
            </table>
        {/if}

        {if $ticketType|php7_count == 0 and $equipmentModel|php7_count == 0 and $warrantyStatus|php7_count == 0}
            <table  class="tNoBackGround able table-bordered">
                <tbody>
                    <tr>
                        <th>Ticket Type</th>
                        <th>Equipment Model</th>
                        <th>Warranty Status</th>
                        <th>Total No of Tickets</th>
                        <th>No. of Open Tickets</th>
                        <th>No. of In-Progress Tickets</th>
                        <th>No. of Closed Tickets</th>
                        <th>Avg Response Time</th>
                        <th>MTTR</th>
                    </tr>
                    {foreach from=$GROUPED_DATA key=ticket_type item=models}
                        {assign var=deptRowspan value=0}
                        {foreach from=$models item=statuses}
                            {foreach from=$statuses item=rows}
                                {assign var=deptRowspan value=$deptRowspan+php7_count($rows)}
                            {/foreach}
                        {/foreach}
                        {assign var=firstDept value=true}
                        {foreach from=$models key=model item=statuses}
                            {assign var=teamRowspan value=0}
                            {foreach from=$statuses item=rows}
                                {assign var=teamRowspan value=$teamRowspan+php7_count($rows)}
                            {/foreach}
                            {assign var=firstTeam value=true}
                            {foreach from=$statuses key=status item=records}
                                {assign var=firstStatus value=true}
                                {foreach from=$records item=record}
                                    <tr>
                                        {if $firstDept}
                                            <td class="NoBackGround" rowspan="{$deptRowspan}">{$ticket_type}</td>
                                            {assign var=firstDept value=false}
                                        {/if}
                                        {if $firstTeam}
                                            <td class="NoBackGround" rowspan="{$teamRowspan}">{$model}</td>
                                            {assign var=firstTeam value=false}
                                        {/if}
                                        {if $firstStatus}
                                            <td class="NoBackGround" rowspan="{php7_count($records)}">{$status|default:"-"}</td>
                                            {assign var=firstStatus value=false}
                                        {/if}
                                        <td class="NoBackGround">{$record.no_of_tickets}</td>
                                        <td class="NoBackGround">{$record.open}</td>
                                        <td class="NoBackGround">{$record.inprogress}</td>
                                        <td class="NoBackGround">{$record.closed}</td>
                                        <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($record.resp_avg)}</td>
                                        <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($record.repair_avg)}</td>

                                    </tr>
                                {/foreach}
                            {/foreach}
                        {/foreach}
                    {/foreach}
                </tbody>
            </table>
        {/if}

        {if $ticketType|php7_count == 0 and $equipmentModel|php7_count > 0 and $warrantyStatus|php7_count > 0}
            <table>
                <tr>
                    <th>Equipment Model</th>
                    <th>Warranty Warranty Status</th>
                    <th>Total No of Tickets</th>
                    <th>No. of Open Tickets</th>
                    <th>No. of In-Progress Tickets</th>
                    <th>No. of Closed Tickets</th>
                    <th>Avg Response Time</th>
                    <th>MTTR</th>

                </tr>
                {foreach from=$GROUPED_DATA key=model item=warranties}
                    {assign var=modelRowspan value=0}
                    {foreach from=$warranties item=entries}
                        {assign var=modelRowspan value=$modelRowspan+php7_count($entries)}
                    {/foreach}
                    {assign var=firstModelPrinted value=false}
                    {foreach from=$warranties key=warranty item=entries}
                        {assign var=warrantyRowspan value=php7_count($entries)}
                        {assign var=firstWarrantyPrinted value=false}
                        {foreach from=$entries item=entry}
                            <tr>
                                {if !$firstModelPrinted}
                                    <td class="NoBackGround" rowspan="{$modelRowspan}">{$model}</td>
                                    {assign var=firstModelPrinted value=true}
                                {/if}
                                {if !$firstWarrantyPrinted}
                                    <td class="NoBackGround" rowspan="{$warrantyRowspan}">{$warranty}</td>
                                    {assign var=firstWarrantyPrinted value=true}
                                {/if}
                                <td class="NoBackGround">{$entry.no_of_tickets}</td>
                                <td class="NoBackGround">{$entry.open}</td>
                                <td class="NoBackGround">{$entry.inprogress}</td>
                                <td class="NoBackGround">{$entry.closed}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($entry.resp_avg)}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($entry.repair_avg)}</td>

                            </tr>
                        {/foreach}
                    {/foreach}
                {/foreach}
            </table>
        {/if}

        {if $ticketType|php7_count > 0 and $equipmentModel|php7_count > 0 and $warrantyStatus|php7_count == 0}
            <table>
                <tbody>
                    <tr>
                        <th><b>Ticket Type</b></th>
                        <th>Equipment Model</th>
                        <th>Total No of Tickets</th>
                        <th>No. of Open Tickets</th>
                        <th>No. of In-Progress Tickets</th>
                        <th>No. of Closed Tickets</th>
                        <th>Avg Response Time</th>
                        <th>MTTR</th>
                    </tr>
                    {foreach from=$GROUPED_DATA key=ticketType item=models}
                        {assign var=typeRowCount value=0}
                        {foreach from=$models item=rows}
                            {assign var=typeRowCount value=$typeRowCount+php7_count($rows)}
                        {/foreach}
                        {assign var=firstTypeRowPrinted value=false}
                        {foreach from=$models key=model item=records}
                            {assign var=modelRowCount value=php7_count($records)}
                            {assign var=firstModelRowPrinted value=false}
                            {foreach from=$records item=row}
                                <tr>
                                    {if !$firstTypeRowPrinted}
                                        <td class="NoBackGround" rowspan="{$typeRowCount}">{$ticketType}</td>
                                        {assign var=firstTypeRowPrinted value=true}
                                    {/if}

                                    {if !$firstModelRowPrinted}
                                        <td class="NoBackGround" rowspan="{$modelRowCount}">{$model|default:'-'}</td>
                                        {assign var=firstModelRowPrinted value=true}
                                    {/if}
                                    <td class="NoBackGround">{$row.no_of_tickets}</td>
                                    <td class="NoBackGround">{$row.open}</td>
                                    <td class="NoBackGround">{$row.inprogress}</td>
                                    <td class="NoBackGround">{$row.closed}</td>
                                    <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.resp_avg|round:0)}</td>
                                    <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.repair_avg|round:0)}
                                    </td>

                                </tr>
                            {/foreach}
                        {/foreach}
                    {/foreach}
                </tbody>
            </table>
        {/if}

        {if $ticketType|php7_count > 0 and $equipmentModel|php7_count == 0 and $warrantyStatus|php7_count > 0}
            <table  class="NoBackGround" border="1">
                <tbody>
                    <tr>
                        <th>Ticket Type</th>
                        <th>Warranty Warranty Status</th>
                        <th>Total No of Tickets</th>
                        <th>No. of Open Tickets</th>
                        <th>No. of In-Progress Tickets</th>
                        <th>No. of Closed Tickets</th>
                        <th>Avg Response Time</th>
                        <th>MTTR</th>

                    </tr>
                    {foreach from=$GROUPED_DATA key=ticketType item=statusGroup}
                        {assign var=typeRowCount value=0}
                        {foreach from=$statusGroup item=records}
                            {assign var=typeRowCount value=$typeRowCount + php7_count($records)}
                        {/foreach}
                        {assign var=firstTypeRowPrinted value=false}

                        {foreach from=$statusGroup key=warrantyStatus item=records}
                            {assign var=statusRowCount value=php7_count($records)}
                            {assign var=firstStatusRowPrinted value=false}

                            {foreach from=$records item=row}
                                <tr>
                                    {if !$firstTypeRowPrinted}
                                        <td class="NoBackGround" rowspan="{$typeRowCount}">{$ticketType|escape}</td>
                                        {assign var=firstTypeRowPrinted value=true}
                                    {/if}

                                    {if !$firstStatusRowPrinted}
                                        <td class="NoBackGround" rowspan="{$statusRowCount}">{$warrantyStatus|default:'-'|escape}</td>
                                        {assign var=firstStatusRowPrinted value=true}
                                    {/if}
                                    <td class="NoBackGround">{$row.no_of_tickets}</td>
                                    <td class="NoBackGround">{$row.open}</td>
                                    <td class="NoBackGround">{$row.inprogress}</td>
                                    <td class="NoBackGround">{$row.closed}</td>
                                    <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.resp_avg)}</td>
                                    <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.repair_avg)}</td>
                                </tr>
                            {/foreach}
                        {/foreach}
                    {/foreach}
                </tbody>
            </table>
        {/if}

        {if $ticketType|php7_count > 0 and $equipmentModel|php7_count == 0 and $warrantyStatus|php7_count == 0}
            <table class="tNoBackGround able table-bordered" class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Ticket Type</th>
                        <th>Total No of Tickets</th>
                        <th>No. of Open Tickets</th>
                        <th>No. of In-Progress Tickets</th>
                        <th>No. of Closed Tickets</th>
                        <th>Avg Response Time</th>
                        <th>MTTR</th>
                    </tr>
                    {foreach from=$GROUPED_DATA key=ticketType item=records}
                        {foreach from=$records item=row name=recordloop}
                            <tr>
                                {if $smarty.foreach.recordloop.first}
                                    <td class="NoBackGround" rowspan="{php7_count($records)}">{$ticketType|default:'-'}</td>
                                {/if}
                                <td class="NoBackGround">{$row.no_of_tickets}</td>
                                <td class="NoBackGround">{$row.open}</td>
                                <td class="NoBackGround">{$row.inprogress}</td>
                                <td class="NoBackGround">{$row.closed}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.resp_avg|round:0)}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.repair_avg|round:0)}
                                </td>

                            </tr>
                        {/foreach}
                    {/foreach}
                </tbody>
            </table>
        {/if}

        {if $ticketType|php7_count == 0 and $equipmentModel|php7_count > 0 and $warrantyStatus|php7_count == 0}
            <table  class="tNoBackGround able table-bordered" class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Equipment Model</th>
                        <th>Total No of Tickets</th>
                        <th>No. of Open Tickets</th>
                        <th>No. of In-Progress Tickets</th>
                        <th>No. of Closed Tickets</th>
                        <th>Avg Response Time</th>
                        <th>MTTR</th>
                    </tr>
                    {foreach from=$GROUPED_DATA key=model item=records}
                        {foreach from=$records item=row name=recordloop}
                            <tr>
                                {if $smarty.foreach.recordloop.first}
                                    <td class="NoBackGround" rowspan="{php7_count($records)}">{$model|default:'-'}</td>
                                {/if}
                                <td class="NoBackGround">{$row.no_of_tickets}</td>
                                <td class="NoBackGround">{$row.open}</td>
                                <td class="NoBackGround">{$row.inprogress}</td>
                                <td class="NoBackGround">{$row.closed}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.resp_avg|round:0)}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.repair_avg|round:0)}
                                </td>
                            </tr>
                        {/foreach}
                    {/foreach}
                </tbody>
            </table>
        {/if}

        {if $warrantyStatus|php7_count > 0 and $ticketType|php7_count == 0 and $equipmentModel|php7_count == 0}
            <table  class="tNoBackGround able table-bordered" class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Warranty Warranty Status</th>
                        <th>Total No of Tickets</th>
                        <th>No. of Open Tickets</th>
                        <th>No. of In-Progress Tickets</th>
                        <th>No. of Closed Tickets</th>
                        <th>Avg Response Time</th>
                        <th>MTTR</th>
                    </tr>
                    {foreach from=$GROUPED_DATA key=warranty item=records}
                        {assign var=rowspanCount value=php7_count($records)}
                        {assign var=firstRowPrinted value=false}
                        {foreach from=$records item=row}
                            <tr>
                                {if !$firstRowPrinted}
                                    <td class="NoBackGround" rowspan="{$rowspanCount}">{$warranty|default:'-'}</td>
                                    {assign var=firstRowPrinted value=true}
                                {/if}
                                <td class="NoBackGround">{$row.no_of_tickets}</td>
                                <td class="NoBackGround">{$row.open}</td>
                                <td class="NoBackGround">{$row.inprogress}</td>
                                <td class="NoBackGround">{$row.closed}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.resp_avg|round:0)}</td>
                                <td class="NoBackGround">{Vtiger_Functions::displayTimeSecondsReadbleFormat($row.repair_avg|round:0)}
                                </td>
                            </tr>
                        {/foreach}
                    {/foreach}
                </tbody>
            </table>
        {/if}
    </div>
    {include file="foot.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
{/strip}