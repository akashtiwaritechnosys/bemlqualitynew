<?php /* Smarty version Smarty-3.1.7, created on 2026-03-02 07:47:34
         compiled from "C:\wamp64\www\bemlqualitynew\includes\runtime/../../layouts/v7\modules\Vtiger\Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36295725269a540968005b4-34678876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2126d9e7b0ff8246f31ab2b7dafbbf96ede6e00a' => 
    array (
      0 => 'C:\\wamp64\\www\\bemlqualitynew\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Header.tpl',
      1 => 1772437225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36295725269a540968005b4-34678876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGETITLE' => 0,
    'QUALIFIED_MODULE' => 0,
    'INVENTORY_MODULES' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'V7_THEME_PATH' => 0,
    'STYLES' => 0,
    'cssModel' => 0,
    'MODULE' => 0,
    'VIEW' => 0,
    'PARENT_MODULE' => 0,
    'NOTIFIER_URL' => 0,
    'EXTENSION_MODULE' => 0,
    'EXTENSION_VIEW' => 0,
    'CURRENT_USER_MODEL' => 0,
    'USER_CURRENCY_SYMBOL' => 0,
    'LANGUAGE' => 0,
    'LoGGED_IN' => 0,
    'API_RECORD' => 0,
    'SUBS_DAYS_REMAINING' => 0,
    'DAYS_REMAINING' => 0,
    'DAYS_DIFF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_69a54096d0848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69a54096d0848')) {function content_69a54096d0848($_smarty_tpl) {?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo vtranslate($_smarty_tpl->tpl_vars['PAGETITLE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</title>
    <link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("libraries/bootstrap-legacy/css/bootstrap-responsive.min.css");?>
'> 
    <link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/todc/css/bootstrap.min.css");?>
'>
    <link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/todc/css/docs.min.css");?>
'>
    <link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/todc/css/todc-bootstrap.min.css");?>
'>
    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("layouts/v7/lib/font-awesome/css/font-awesome.min.css");?>
'>
    <link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/jquery/select2/select2.css");?>
'>
    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("layouts/v7/lib/select2-bootstrap/select2-bootstrap.css");?>
'>
    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css");?>
'>
    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("layouts/v7/lib/jquery/jquery-ui-1.12.0.custom/jquery-ui.css");?>
'>
    <link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/vt-icons/style.css");?>
'>
    <link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/animate/animate.min.css");?>
'>
    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css");?>
'>
    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css");?>
'>
    <link type='text/css' rel='stylesheet'
        href='<?php echo vresource_url("layouts/v7/lib/jquery/daterangepicker/daterangepicker.css");?>
'>

    <link rel="stylesheet" type="text/css" href="<?php echo vresource_url('layouts/v7/resources/root.css');?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo vresource_url('layouts/v7/resources/customcrm.css');?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo vresource_url('layouts/v7/resources/commoncrm.css');?>
" />
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



    <input type="hidden" id="inventoryModules" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value);?>
>
    <?php if (isset($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value)){?>
        <?php $_smarty_tpl->tpl_vars['V7_THEME_PATH'] = new Smarty_variable(Vtiger_Theme::getv7AppStylePath($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value), null, 0);?>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value)){?>
        <?php if (strpos($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value,".less")!==false){?>
            <link type="text/css" rel="stylesheet/less" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" />
        <?php }else{ ?>
            <link type="text/css" rel="stylesheet" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" />
        <?php }?>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['cssModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STYLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssModel']->key => $_smarty_tpl->tpl_vars['cssModel']->value){
$_smarty_tpl->tpl_vars['cssModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cssModel']->key;
?>
        <link type="text/css" rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['cssModel']->value->getHref());?>
"
            media="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getMedia();?>
" />
    <?php } ?>

    
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
    <script src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery.min.js');?>
"></script>
    <script src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery-migrate-1.4.1.js');?>
"></script>
    <script src="<?php echo vresource_url('layouts/v7/resources/commonscript.js');?>
"></script>
    <script type="text/javascript">
        
        var _META = {
            'module': "<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
",
            'view': "<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
",
            'parent': "<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
",
            'notifier': "<?php echo $_smarty_tpl->tpl_vars['NOTIFIER_URL']->value;?>
",
            'app': "<?php if (isset($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value)){?><?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
<?php }?>"
        };

        <?php if ($_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value){?>
            var _EXTENSIONMETA = { 'module': "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value;?>
", view: "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_VIEW']->value;?>
"};
        <?php }?>
        var _USERMETA;
        <?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value){?>
            _USERMETA =  { 'id' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('id');?>
", 'menustatus' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide');?>
", 
            'currency' : "<?php echo decode_html($_smarty_tpl->tpl_vars['USER_CURRENCY_SYMBOL']->value);?>
", 'currencySymbolPlacement' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_symbol_placement');?>
",
            'currencyGroupingPattern' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_pattern');?>
", 'truncateTrailingZeros' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('truncate_trailing_zeros');?>
",'userlabel':"<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('userlabel')), ENT_QUOTES, 'UTF-8', true);?>
",};
        <?php }?>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
</head>
<?php $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL'] = new Smarty_variable(Users_Record_Model::getCurrentUserModel(), null, 0);?>

<body data-skinpath="<?php echo Vtiger_Theme::getBaseThemePath();?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
"
    data-user-decimalseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_decimal_separator');?>
"
    data-user-dateformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('date_format');?>
"
    data-user-groupingseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_separator');?>
"
    data-user-numberofdecimals="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('no_of_currency_decimals');?>
"
    data-user-hourformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('hour_format');?>
"
    data-user-calendar-reminder-interval="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getCurrentUserActivityReminderInSeconds();?>
">
    <input type="hidden" id="start_day" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('dayoftheweek');?>
" />
    <div id="page">


        
        <?php if ($_smarty_tpl->tpl_vars['LoGGED_IN']->value=='true'){?>
            <?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
        <!-- Sidebar/Menu Area -->
        
        
        
        

        <!-- Begin Main Content Area -->
        <div class="notification">
            
            <?php if ($_smarty_tpl->tpl_vars['API_RECORD']->value['cf_875']=='Paid'){?>
                <?php if (isset($_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value)&&$_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value<=14){?>
                    <div class="notification-link">

                        <?php if ($_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value>7&&$_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value<=14){?>
                            <div class="trial-status days-7">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">

                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text"><span>Subscription expiring in <?php echo $_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value;?>
 days</span></div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        <?php }elseif($_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value>3&&$_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value<=7){?>
                            <div class="trial-status days-4">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expiring in <?php echo $_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value;?>
 days</div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        <?php }elseif($_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value>1&&$_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value<=3){?>
                            <div class="trial-status days-2">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expiring in <?php echo $_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value;?>
 days</div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        <?php }elseif($_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value==1){?>
                            <div class="trial-status days-1">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Subscription expiring in <?php echo $_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value;?>
 day</div>

                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        <?php }elseif($_smarty_tpl->tpl_vars['SUBS_DAYS_REMAINING']->value==0){?>
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
                        <?php }else{ ?>
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
                        <?php }?>

                    </div>
                <?php }?>
            <?php }?>
            
            
            <?php if ($_smarty_tpl->tpl_vars['API_RECORD']->value['cf_875']=='Active'){?>
                <?php if (isset($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value)){?>
                    <div class="notification-link">

                        <?php if ($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value>7){?>
                            <div class="trial-status days-7">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">

                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text"><span>Trial Version - <?php echo $_smarty_tpl->tpl_vars['DAYS_REMAINING']->value;?>
 days left</span></div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: <?php echo min(100,100-($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value/$_smarty_tpl->tpl_vars['DAYS_DIFF']->value)*100);?>
%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        <?php }elseif($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value>3){?>
                            <div class="trial-status days-4">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Trial Version - <?php echo $_smarty_tpl->tpl_vars['DAYS_REMAINING']->value;?>
 days left</div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: <?php echo min(100,100-($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value/$_smarty_tpl->tpl_vars['DAYS_DIFF']->value)*100);?>
%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>


                        <?php }elseif($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value>1){?>
                            <div class="trial-status days-2">
                                <a href="index.php?module=MyAccount&parent=Settings&view=List">
                                    <div class="icon">
                                        <svg class="clock-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline class="clock-hand" points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="trial-text">Trial Version - <?php echo $_smarty_tpl->tpl_vars['DAYS_REMAINING']->value;?>
 days left</div>
                                    <div class="trial-progress">
                                        <div class="trial-progress-fill"
                                            style="width: <?php echo min(100,100-($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value/$_smarty_tpl->tpl_vars['DAYS_DIFF']->value)*100);?>
%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        <?php }elseif($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value==1){?>
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
                                            style="width: <?php echo min(100,100-($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value/$_smarty_tpl->tpl_vars['DAYS_DIFF']->value)*100);?>
%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        <?php }elseif($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value==0){?>
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
                                            style="width: <?php echo min(100,100-($_smarty_tpl->tpl_vars['DAYS_REMAINING']->value/$_smarty_tpl->tpl_vars['DAYS_DIFF']->value)*100);?>
%"></div>
                                    </div>
                                </a>
                                <div class="close-notific">X</div>
                            </div>
                        <?php }else{ ?>
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
                        <?php }?>

                    </div>
                <?php }?>
            <?php }?>
            
        </div>

        <div class="main-dashboard-content dashboard-content-full">
            <div class="header-wrapper" style="width: 100%;">
                
            </div>
            <div id="pjaxContainer" class="hide noprint"></div>
            <div id="messageBar" class="hide"></div>
            <?php if ($_smarty_tpl->tpl_vars['VIEW']->value!='Login'){?>
                <?php echo $_smarty_tpl->getSubTemplate ("layouts/v7/modules/Chatbot/Chatbot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div id="crm-chatbot-icon">🤖</div>
            <?php }?>


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
</body><?php }} ?>