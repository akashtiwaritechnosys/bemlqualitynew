<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:26:18
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/StockTransferOrders/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170666041763051bca345356-31760559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922fbf7b76e96aae82d7d9e846dd7124bfa37cd1' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/StockTransferOrders/ModuleSummaryView.tpl',
      1 => 1661275393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170666041763051bca345356-31760559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051bca3466a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051bca3466a')) {function content_63051bca3466a($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>