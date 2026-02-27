<?php /* Smarty version Smarty-3.1.7, created on 2023-12-06 12:01:15
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/StockTransferOrders/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:767750442637775b7d53b14-68823437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77cc6002e7e3f90f104760adde3e9872329f6ddb' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/StockTransferOrders/ModuleSummaryView.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '767750442637775b7d53b14-68823437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_637775b7d57d8',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_637775b7d57d8')) {function content_637775b7d57d8($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>