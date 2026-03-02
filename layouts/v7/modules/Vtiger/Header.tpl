{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
{* strip removed *}
<!DOCTYPE html>
<html>

<head>
    <title>{vtranslate($PAGETITLE, $QUALIFIED_MODULE)}</title>
    <link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link type='text/css' rel='stylesheet'
        href='{vresource_url("libraries/bootstrap-legacy/css/bootstrap-responsive.min.css")}'> {* .row-fluid... *}
    <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/todc/css/bootstrap.min.css")}'>
    <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/todc/css/docs.min.css")}'>
    <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/todc/css/todc-bootstrap.min.css")}'>
    <link type='text/css' rel='stylesheet'
        href='{vresource_url("layouts/v7/lib/font-awesome/css/font-awesome.min.css")}'>
    <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/jquery/select2/select2.css")}'>
    <link type='text/css' rel='stylesheet'
        href='{vresource_url("layouts/v7/lib/select2-bootstrap/select2-bootstrap.css")}'>
    <link type='text/css' rel='stylesheet'
        href='{vresource_url("libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css")}'>
    <link type='text/css' rel='stylesheet'
        href='{vresource_url("layouts/v7/lib/jquery/jquery-ui-1.12.0.custom/jquery-ui.css")}'>
    <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/vt-icons/style.css")}'>
    <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/animate/animate.min.css")}'>
    <link type='text/css' rel='stylesheet'
        href='{vresource_url("layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css")}'>
    <link type='text/css' rel='stylesheet'
        href='{vresource_url("layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css")}'>
    <link type='text/css' rel='stylesheet'
        href='{vresource_url("layouts/v7/lib/jquery/daterangepicker/daterangepicker.css")}'>

    <link rel="stylesheet" type="text/css" href="{vresource_url('layouts/v7/resources/root.css')}" />
    <link rel="stylesheet" type="text/css" href="{vresource_url('layouts/v7/resources/customcrm.css')}" />
    <link rel="stylesheet" type="text/css" href="{vresource_url('layouts/v7/resources/commoncrm.css')}" />
    <link rel="stylesheet" type="text/css" href="layouts/v7/resources/root.css" />
    <link rel="stylesheet" type="text/css" href="layouts/v7/resources/customcrm.css" />
    <link rel="stylesheet" type="text/css" href="layouts/v7/resources/commoncrm.css" />
    <link rel="stylesheet" href="layouts/v7/modules/Chatbot/resources/crmchatbot.css">
    <link rel="stylesheet" type="text/css" href="layouts/v7/skins/vtiger/custom_quickcreate_icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"
        integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <input type="hidden" id="inventoryModules" value={ZEND_JSON::encode($INVENTORY_MODULES)}>
    {if isset($SELECTED_MENU_CATEGORY)}
        {assign var=V7_THEME_PATH value=Vtiger_Theme::getv7AppStylePath($SELECTED_MENU_CATEGORY)}
    {/if}
    {if !empty($V7_THEME_PATH)}
        {if strpos($V7_THEME_PATH,".less")!== false}
            <link type="text/css" rel="stylesheet/less" href="{vresource_url($V7_THEME_PATH)}" media="screen" />
        {else}
            <link type="text/css" rel="stylesheet" href="{vresource_url($V7_THEME_PATH)}" media="screen" />
        {/if}
    {/if}

    {foreach key=index item=cssModel from=$STYLES}
        <link type="text/css" rel="{$cssModel->getRel()}" href="{vresource_url($cssModel->getHref())}"
            media="{$cssModel->getMedia()}" />
    {/foreach}

    {* For making pages - print friendly *}
    <style type="text/css">
        @media print {
            .noprint {
                display: none;
            }
        }
    </style>
    <script type="text/javascript">
        var __pageCreationTime = (new Date()).getTime();
    </script>
    <script src="{vresource_url('layouts/v7/lib/jquery/jquery.min.js')}"></script>
    <script src="{vresource_url('layouts/v7/lib/jquery/jquery-migrate-1.4.1.js')}"></script>
    <script src="{vresource_url('layouts/v7/resources/commonscript.js')}"></script>
    <script type="text/javascript">
        {*var _META = { 'module': "{$MODULE}", view: "{$VIEW}", 'parent': "{$PARENT_MODULE}", 'notifier':"{$NOTIFIER_URL}", 'app':"{if isset($SELECTED_MENU_CATEGORY)} {$SELECTED_MENU_CATEGORY}{/if}" };*}
        var _META = {
            'module': "{$MODULE}",
            'view': "{$VIEW}",
            'parent': "{$PARENT_MODULE}",
            'notifier': "{$NOTIFIER_URL}",
            'app': "{if isset($SELECTED_MENU_CATEGORY)}{$SELECTED_MENU_CATEGORY}{/if}"
        };

        {if $EXTENSION_MODULE}
            var _EXTENSIONMETA = { 'module': "{$EXTENSION_MODULE}", view: "{$EXTENSION_VIEW}"};
        {/if}
        var _USERMETA;
        {if $CURRENT_USER_MODEL}
            _USERMETA =  { 'id' : "{$CURRENT_USER_MODEL->get('id')}", 'menustatus' : "{$CURRENT_USER_MODEL->get('leftpanelhide')}", 
            'currency' : "{decode_html($USER_CURRENCY_SYMBOL)}", 'currencySymbolPlacement' : "{$CURRENT_USER_MODEL->get('currency_symbol_placement')}",
            'currencyGroupingPattern' : "{$CURRENT_USER_MODEL->get('currency_grouping_pattern')}", 'truncateTrailingZeros' : "{$CURRENT_USER_MODEL->get('truncate_trailing_zeros')}",'userlabel':"{($CURRENT_USER_MODEL->get('userlabel'))|escape:html}",};
        {/if}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
</head>
{assign var=CURRENT_USER_MODEL value=Users_Record_Model::getCurrentUserModel()}

<body data-skinpath="{Vtiger_Theme::getBaseThemePath()}" data-language="{$LANGUAGE}"
    data-user-decimalseparator="{$CURRENT_USER_MODEL->get('currency_decimal_separator')}"
    data-user-dateformat="{$CURRENT_USER_MODEL->get('date_format')}"
    data-user-groupingseparator="{$CURRENT_USER_MODEL->get('currency_grouping_separator')}"
    data-user-numberofdecimals="{$CURRENT_USER_MODEL->get('no_of_currency_decimals')}"
    data-user-hourformat="{$CURRENT_USER_MODEL->get('hour_format')}"
    data-user-calendar-reminder-interval="{$CURRENT_USER_MODEL->getCurrentUserActivityReminderInSeconds()}">
    <input type="hidden" id="start_day" value="{$CURRENT_USER_MODEL->get('dayoftheweek')}" />
    <div id="page">


        {* <div class="main-wrapper" style="display: flex;"> *}
        {if $LoGGED_IN eq 'true'}
            {include file="modules/Vtiger/partials/SidebarHeader.tpl"}
        {/if}
        <!-- Sidebar/Menu Area -->
        {* <div id="sidebarmenu" class="sidebar-menu sidebar-dash"> *}
        {* {include file="modules/Vtiger/partials/SidebarAppMenu.tpl"}     *}
        {* <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8 app-navigator-container">
                        <div class="row">
                            <div class="logo-container col-lg-9 " style="margin: 10px;">
                                <div class="row">
                                    <a href="index.php" class="company-logo">
                                        <img src="{$COMPANY_LOGO->get('imagepath')}" alt="{$COMPANY_LOGO->get('alt')}" />
                                    </a>
                                </div>
                            </div>
                            <div id="toggle-container" class="col-sm-1 col-xs-1 cursorPointer">
                                <div class="row">
                                    <span id="toggle-action" class="fa-thin fa-circle"></span>
                                </div>
                            </div>

                        </div>
                    </div> *}
        {* </div> *}

        <!-- Begin Main Content Area -->
        <div class="notification">
            {* Subscription remaining days start *}
            {if $API_RECORD.cf_875 == 'Paid'}
                {if isset($SUBS_DAYS_REMAINING) && $SUBS_DAYS_REMAINING <= 14}
                    <div class="notification-link">

                        {if $SUBS_DAYS_REMAINING > 7 && $SUBS_DAYS_REMAINING <= 14}
                            <div class="trial-status days-7">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">

                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text"><span>Subscription expiring in {$SUBS_DAYS_REMAINING} days</span></div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        {elseif $SUBS_DAYS_REMAINING > 3 && $SUBS_DAYS_REMAINING <= 7}
                            <div class="trial-status days-4">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expiring in {$SUBS_DAYS_REMAINING} days</div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        {elseif $SUBS_DAYS_REMAINING > 1 && $SUBS_DAYS_REMAINING <= 3}
                            <div class="trial-status days-2">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expiring in {$SUBS_DAYS_REMAINING} days</div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {elseif $SUBS_DAYS_REMAINING == 1}
                            <div class="trial-status days-1">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expiring in {$SUBS_DAYS_REMAINING} day</div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {elseif $SUBS_DAYS_REMAINING == 0}
                            <div class="trial-status days-0">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expires today</div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {else}
                            <div class="trial-status expired">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expired</div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {/if}

                    </div>
                {/if}
            {/if}
            {* Subscription remaining days end *}
            {* Trial expiry start *}
            {if $API_RECORD.cf_875 == 'Active'}
                {if isset($DAYS_REMAINING)}
                    <div class="notification-link">

                        {if $DAYS_REMAINING > 7}
                            <div class="trial-status days-7">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">

                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text"><span>Trial Version - {$DAYS_REMAINING} days left</span></div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        {elseif $DAYS_REMAINING > 3}
                            <div class="trial-status days-4">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Trial Version - {$DAYS_REMAINING} days left</div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        {elseif $DAYS_REMAINING > 1}
                            <div class="trial-status days-2">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Trial Version - {$DAYS_REMAINING} days left</div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {elseif $DAYS_REMAINING == 1}
                            <div class="trial-status days-1">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Trial Version - 1 day left!</div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {elseif $DAYS_REMAINING == 0}
                            <div class="trial-status days-0">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Trial Version - Expires today!</div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {else}
                            <div class="trial-status expired">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Trial version expired</div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill" style="width: 100%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        {/if}

                    </div>
                {/if}
            {/if}
            {* Trial expiry end *}
        </div>

        <div class="main-dashboard-content dashboard-content-full">
            <div class="header-wrapper" style="width: 100%;">
                {* {include file="partials/HeaderTop.tpl"}  *}
            </div>
            <div id="pjaxContainer" class="hide noprint"></div>
            <div id="messageBar" class="hide"></div>
            {if $VIEW neq 'Login'}
                {include file="layouts/v7/modules/Chatbot/Chatbot.tpl"}
                <div id="crm-chatbot-icon">🤖</div>
            {/if}


            <script>
                document.addEventListener("DOMContentLoaded", function() {

                    jQuery('.chat-shell').hide();

                    jQuery('#crm-chatbot-icon').on('click', function() {
                        jQuery('.chat-shell').toggle();
                    });

                    const input = document.getElementById("chatInput");
                    const sendBtn = document.getElementById("sendBtn");
                    const chatBody = document.getElementById("chatBody");

                    if (!input || !sendBtn || !chatBody) {
                        console.warn("Chatbot DOM not found");
                        return;
                    }


                    function appendUserMessage(text) {
                        const div = document.createElement("div");
                        div.className = "bubble msg-user";
                        div.innerText = text;
                        chatBody.appendChild(div);
                        chatBody.scrollTop = chatBody.scrollHeight;
                    }

                    function appendBotMessage(message) {
                        var container = document.getElementById('chatbotMessages');
                        var msgDiv = document.createElement('div');
                        msgDiv.className = 'bot-message';
                        msgDiv.innerHTML = message; // must be innerHTML
                        chatBody.appendChild(msgDiv);
                    }


                    function appendLoading() {
                        const div = document.createElement("div");
                        div.className = "bubble msg-bot loading";
                        div.id = "botLoading";
                        div.innerText = "Typing...";
                        chatBody.appendChild(div);
                        chatBody.scrollTop = chatBody.scrollHeight;
                    }

                    function removeLoading() {
                        const loader = document.getElementById("botLoading");
                        if (loader) loader.remove();
                    }

                    function playBotAudio(base64Audio) {
                        var audio = new Audio('data:audio/mp3;base64,' + base64Audio);
                        audio.play().catch(function(err) {
                            console.warn('Audio play failed', err);
                        });
                    }



                    /* ===========================
   🎤 Voice Input (Speech to Text)
   =========================== */

                    let recognition;
                    let isListening = false;

                    if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {

                        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
                        recognition = new SpeechRecognition();

                        recognition.lang = 'en-US'; // change if needed
                        recognition.continuous = false;
                        recognition.interimResults = false;

                        recognition.onstart = function() {
                            isListening = true;
                            jQuery('#micBtn').addClass('listening');
                        };

                        recognition.onend = function() {
                            isListening = false;
                            jQuery('#micBtn').removeClass('listening');
                        };

                        recognition.onerror = function(event) {
                            console.error('Speech recognition error:', event.error);
                            jQuery('#micBtn').removeClass('listening');
                        };

                        recognition.onresult = function(event) {
                            const transcript = event.results[0][0].transcript.trim();
                            input.value = transcript;

                            // Auto send after speech
                            sendMessage();
                        };

                        jQuery('#micBtn').on('click', function() {
                            if (isListening) {
                                recognition.stop();
                            } else {
                                recognition.start();
                            }
                        });

                    } else {
                        console.warn('Speech recognition not supported in this browser');
                        jQuery('#micBtn').hide();
                    }


                    function sendMessage() {
                        const message = input.value.trim();
                        if (!message) return;

                        appendUserMessage(message);
                        input.value = "";

                        appendLoading();

                        const params = new URLSearchParams({
                            module: "Chatbot",
                            action: "Ask",
                            mode: "ajax",
                            question: message
                        });

                        fetch("index.php?" + params.toString())
                            .then(res => res.json())
                            .then(data => {
                                removeLoading();
                                if (!data.success) {
                                    appendBotMessage("Something went wrong.");
                                    return;
                                }

                                /* 1️⃣ Show main text */
                                console.log(data.result);
                                if (data.result.text) {
                                    appendBotMessage(data.result.text);
                                }

                                /* 2️⃣ Show leads */
                                if (data.result.leads && data.result.leads.length > 0) {

                                    for (var i = 0; i < data.result.leads.length; i++) {
                                        var lead = data.result.leads[i];

                                        var name = ((lead.firstname || '') + ' ' + (lead.lastname || ''))
                                            .trim();

                                        appendBotMessage(
                                            '<div class="chatbot-lead-card">' +
                                            '<b>Lead ' + (i + 1) + ': ' + name + '</b><br>' +
                                            '📞 Mobile: ' + (lead.mobile || '-') + '<br>' +
                                            '📌 Status: ' + lead.lead_status + '<br>' +
                                            '⚡ Priority: ' + lead.priority + '<br>' +
                                            '👤 Assigned: ' + lead.assigned_to + '<br>' +
                                            '🕒 Created: ' + lead.created_time +
                                            '</div>'
                                        );
                                    }
                                }


                                /* 3️⃣ Play audio response */
                                if (data.result.audio) {
                                    playBotAudio(data.result.audio);
                                }
                            });

                    }

                    sendBtn.addEventListener("click", sendMessage);

                    input.addEventListener("keypress", function(e) {
                        if (e.key === "Enter") {
                            sendMessage();
                        }
                    });

                });
            </script>
</body>