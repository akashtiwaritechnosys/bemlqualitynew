<?php /* Smarty version Smarty-3.1.7, created on 2023-12-05 07:36:21
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ReturnSaleOrders/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1571263009639aa99f6edfe4-95547142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f4031f20400dd65c24dcdb9472c8bf8fa5833a5' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ReturnSaleOrders/DetailViewSummaryContents.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1571263009639aa99f6edfe4-95547142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_639aa99f6ef41',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_639aa99f6ef41')) {function content_639aa99f6ef41($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>