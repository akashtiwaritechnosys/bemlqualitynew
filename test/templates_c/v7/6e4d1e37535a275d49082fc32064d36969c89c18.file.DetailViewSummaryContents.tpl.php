<?php /* Smarty version Smarty-3.1.7, created on 2022-08-12 06:35:57
         compiled from "C:\xampp\htdocs\beml\includes\runtime/../../layouts/v7\modules\StockTransferOrders\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8796784062f5f4cdc18c75-80550276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e4d1e37535a275d49082fc32064d36969c89c18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\beml\\includes\\runtime/../../layouts/v7\\modules\\StockTransferOrders\\DetailViewSummaryContents.tpl',
      1 => 1651513275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8796784062f5f4cdc18c75-80550276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_62f5f4cdc313c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62f5f4cdc313c')) {function content_62f5f4cdc313c($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>