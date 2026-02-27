<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:26:18
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125515336963051bca354632-52001886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f38c74835cb6f6bb750922f086769a46bf7986' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewSummaryContents.tpl',
      1 => 1661275393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125515336963051bca354632-52001886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051bca35577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051bca35577')) {function content_63051bca35577($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>