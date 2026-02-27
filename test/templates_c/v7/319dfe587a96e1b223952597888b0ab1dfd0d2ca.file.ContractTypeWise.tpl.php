<?php /* Smarty version Smarty-3.1.7, created on 2024-02-02 16:32:21
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/ContractTypeWise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189396415365bd1915e5ab55-21271845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319dfe587a96e1b223952597888b0ab1dfd0d2ca' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/ContractTypeWise.tpl',
      1 => 1702109323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189396415365bd1915e5ab55-21271845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'PickListValues' => 0,
    'INNER_VALUE1' => 0,
    'ResultArray' => 0,
    'NAME_FIELD' => 0,
    'KEY_FIELD' => 0,
    'INNER_VALUE' => 0,
    'INNER_KEY1' => 0,
    'INNER_VALUE2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_65bd1915eb645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65bd1915eb645')) {function content_65bd1915eb645($_smarty_tpl) {?><script>$(document).ready(function() {jQuery('.app-menu').removeClass('hide');var toggleAppMenu = function(type) {var appMenu = jQuery('.app-menu');var appNav = jQuery('.app-nav');appMenu.appendTo('#page');appMenu.css({'top': appNav.offset().top + appNav.height(),'left': 0});if (typeof type === 'undefined') {type = appMenu.is(':hidden') ? 'show' : 'hide';}if (type == 'show') {appMenu.show(200, function() {});} else {appMenu.hide(200, function() {});}};jQuery('.app-trigger, .app-icon, .app-navigator').on('click', function(e) {e.stopPropagation();toggleAppMenu();});jQuery('html').on('click', function() {});jQuery(document).keyup(function(e) {if (e.keyCode == 27) {if (!jQuery('.app-menu').is(':hidden')) {toggleAppMenu('hide');}}});jQuery('.app-modules-dropdown-container').hover(function(e) {var dropdownContainer = jQuery(e.currentTarget);jQuery('.dropdown').removeClass('open');if (dropdownContainer.length) {if (dropdownContainer.hasClass('dropdown-compact')) {dropdownContainer.find('.app-modules-dropdown').css('top', dropdownContainer.position().top - 8);} else {dropdownContainer.find('.app-modules-dropdown').css('top', '');}dropdownContainer.addClass('open').find('.app-item').addClass('active-app-item');}}, function(e) {var dropdownContainer = jQuery(e.currentTarget);dropdownContainer.find('.app-item').removeClass('active-app-item');setTimeout(function() {if (dropdownContainer.find('.app-modules-dropdown').length && !dropdownContainer.find('.app-modules-dropdown').is(':hover') && !dropdownContainer.is(':hover')) {dropdownContainer.removeClass('open');}}, 500);});jQuery('.app-item').on('click', function() {var url = jQuery(this).data('defaultUrl');if (url) {window.location.href = url;}});jQuery(window).resize(function() {jQuery(".app-modules-dropdown").mCustomScrollbar("destroy");app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height() * heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true,scrollbarPosition: 'outside'});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height() * heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});</script><div style="padding: 40px"><style>table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td,th {border: 1px solid #dddddd;text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #ffffff;}.NoBackGround {background-color: #ffffff;}</style><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("exports.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<table id="data_table"><tr><th class="NoBackGround" rowspan="1" style="font-weight: 900">Model</th><th class="NoBackGround" rowspan="1" style="font-weight: 900">Customer</th><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PickListValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><th rowspan="1" class="NoBackGround" class="NoBackGround"><b style="font-weight: 900"><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE1']->value;?>
</b></th><?php } ?><th class="NoBackGround" colspan="1"> <b style="font-weight: 900"> Grand Total </b> </th></tr><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResultArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FIELD']->value = $_smarty_tpl->tpl_vars['NAME_FIELD']->key;
?><?php  $_smarty_tpl->tpl_vars['INNER_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['NAME_FIELD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['INNER_VALUE']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE']->key => $_smarty_tpl->tpl_vars['INNER_VALUE']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY']->value = $_smarty_tpl->tpl_vars['INNER_VALUE']->key;
 $_smarty_tpl->tpl_vars['INNER_VALUE']->index++;
 $_smarty_tpl->tpl_vars['INNER_VALUE']->first = $_smarty_tpl->tpl_vars['INNER_VALUE']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['INNER_VALUE']->first;
?><tr><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['first']){?><th rowspan="<?php echo count($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
" class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['KEY_FIELD']->value;?>
</th><?php }?><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['INNER_VALUE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><?php if ($_smarty_tpl->tpl_vars['INNER_KEY1']->value=='Sub Total'||$_smarty_tpl->tpl_vars['INNER_KEY1']->value=='Grand Total'){?><th class="NoBackGround"><b style="font-weight: 900"><?php echo $_smarty_tpl->tpl_vars['INNER_KEY1']->value;?>
</b></th><?php }else{ ?><th class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['INNER_KEY1']->value;?>
</th><?php }?><?php  $_smarty_tpl->tpl_vars['INNER_VALUE2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE2']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['INNER_VALUE1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE2']->key => $_smarty_tpl->tpl_vars['INNER_VALUE2']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE2']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY2']->value = $_smarty_tpl->tpl_vars['INNER_VALUE2']->key;
?><?php if ($_smarty_tpl->tpl_vars['INNER_VALUE2']->value=='0'){?><th rowspan="1" class="NoBackGround" class="NoBackGround"></th><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['INNER_KEY1']->value=='Sub Total'||$_smarty_tpl->tpl_vars['INNER_KEY1']->value=='Grand Total'){?><th rowspan="1" style="font-weight: 900" class="NoBackGround" class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE2']->value;?>
</th><?php }else{ ?><th rowspan="1" class="NoBackGround" class="NoBackGround"><a target="_blank"href='index.php?module=Equipment&view=List&app=INVENTORY&search_params=[[["(account_id ; (Accounts) org_code)","e","<?php echo $_smarty_tpl->tpl_vars['INNER_KEY1']->value;?>
"],["eq_type_of_conrt","e","<?php echo $_smarty_tpl->tpl_vars['INNER_VALUE2']->value['Colkey'];?>
"],["eq_run_war_st","e","Contract"]]]'><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE2']->value['Count'];?>
</a></th><?php }?><?php }?><?php } ?><?php } ?></tr><?php } ?><?php } ?></table></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("foot.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<?php }} ?>