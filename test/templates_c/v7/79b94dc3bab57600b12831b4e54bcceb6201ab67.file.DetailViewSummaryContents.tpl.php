<?php /* Smarty version Smarty-3.1.7, created on 2025-04-24 12:27:23
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1726299357680a2e2bcd9832-80025728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b94dc3bab57600b12831b4e54bcceb6201ab67' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewSummaryContents.tpl',
      1 => 1733391286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1726299357680a2e2bcd9832-80025728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_680a2e2bcdcde',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680a2e2bcdcde')) {function content_680a2e2bcdcde($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>