<?php /* Smarty version Smarty-3.1.7, created on 2024-02-09 10:19:33
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/CILsubsidiarywise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131077676565c5fc35e05553-07184160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9945f56edcfa4bdd6e5c91296ad2695834867a7' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/CILsubsidiarywise.tpl',
      1 => 1702109323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131077676565c5fc35e05553-07184160',
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
    'KEY_FIELD' => 0,
    'NAME_FIELD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_65c5fc35e1cdd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65c5fc35e1cdd')) {function content_65c5fc35e1cdd($_smarty_tpl) {?><script>$( document ).ready(function() {jQuery('.app-menu').removeClass('hide');var toggleAppMenu = function(type) {var appMenu = jQuery('.app-menu');var appNav = jQuery('.app-nav');appMenu.appendTo('#page');appMenu.css({'top' : appNav.offset().top + appNav.height(),'left' : 0});if(typeof type === 'undefined') {type = appMenu.is(':hidden') ? 'show' : 'hide';}if(type == 'show') {appMenu.show(200, function() {});} else {appMenu.hide(200, function() {});}};jQuery('.app-trigger, .app-icon, .app-navigator').on('click',function(e){e.stopPropagation();toggleAppMenu();});jQuery('html').on('click', function() {});jQuery(document).keyup(function (e) {if (e.keyCode == 27) {if(!jQuery('.app-menu').is(':hidden')) {toggleAppMenu('hide');}}});jQuery('.app-modules-dropdown-container').hover(function(e) {var dropdownContainer = jQuery(e.currentTarget);jQuery('.dropdown').removeClass('open');if(dropdownContainer.length) {if(dropdownContainer.hasClass('dropdown-compact')) {dropdownContainer.find('.app-modules-dropdown').css('top', dropdownContainer.position().top - 8);} else {dropdownContainer.find('.app-modules-dropdown').css('top', '');}dropdownContainer.addClass('open').find('.app-item').addClass('active-app-item');}}, function(e) {var dropdownContainer = jQuery(e.currentTarget);dropdownContainer.find('.app-item').removeClass('active-app-item');setTimeout(function() {if(dropdownContainer.find('.app-modules-dropdown').length && !dropdownContainer.find('.app-modules-dropdown').is(':hover') && !dropdownContainer.is(':hover')) {dropdownContainer.removeClass('open');}}, 500);});jQuery('.app-item').on('click', function() {var url = jQuery(this).data('defaultUrl');if(url) {window.location.href = url;}});jQuery(window).resize(function() {jQuery(".app-modules-dropdown").mCustomScrollbar("destroy");app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height()*heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true,scrollbarPosition: 'outside'});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height()*heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});</script><div style="padding: 40px"><style>table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td,th {border: 1px solid #dddddd;text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #ffffff;}.NoBackGround {background-color: #ffffff;}</style><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("exports.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
</div><table id="data_table"><tr><th class="NoBackGround" rowspan="1">CIL SUBSIDIERIES</th><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PickListValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><th rowspan="1" class="NoBackGround" class="NoBackGround"><b><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE1']->value;?>
</b></th><?php } ?><th class="NoBackGround" colspan="1"> <b> Grand Total </b> </th></tr><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResultArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FIELD']->value = $_smarty_tpl->tpl_vars['NAME_FIELD']->key;
?><tr><th class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['KEY_FIELD']->value;?>
</th><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['NAME_FIELD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><?php if ($_smarty_tpl->tpl_vars['INNER_VALUE1']->value=='0'){?><th rowspan="1" class="NoBackGround" class="NoBackGround"></th><?php }else{ ?><th rowspan="1" class="NoBackGround" class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE1']->value;?>
</th><?php }?><?php } ?></tr><?php } ?></table></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("foot.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<?php }} ?>