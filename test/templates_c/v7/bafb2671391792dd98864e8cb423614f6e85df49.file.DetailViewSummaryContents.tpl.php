<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:20:18
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151790781063051a62ec9b03-38844186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bafb2671391792dd98864e8cb423614f6e85df49' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewSummaryContents.tpl',
      1 => 1661275391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151790781063051a62ec9b03-38844186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051a62ecaa0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051a62ecaa0')) {function content_63051a62ecaa0($_smarty_tpl) {?><form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>