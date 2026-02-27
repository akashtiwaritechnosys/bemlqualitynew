<?php /* Smarty version Smarty-3.1.7, created on 2023-11-24 09:46:55
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118223125763496473edc748-09994192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7d9eeb7a6eb9191ed35ed75fe5c9073f281f785' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewSummaryContents.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118223125763496473edc748-09994192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63496473edda8',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63496473edda8')) {function content_63496473edda8($_smarty_tpl) {?><form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>