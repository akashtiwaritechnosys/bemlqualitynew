<?php /* Smarty version Smarty-3.1.7, created on 2023-12-06 12:01:15
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090198134637775b7d685a1-26187569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c82e97be30d24704879ae9f85c1b5348b87fd964' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewSummaryContents.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090198134637775b7d685a1-26187569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_637775b7d6b0a',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_637775b7d6b0a')) {function content_637775b7d6b0a($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>