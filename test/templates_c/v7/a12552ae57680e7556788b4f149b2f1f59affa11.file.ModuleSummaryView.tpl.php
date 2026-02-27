<?php /* Smarty version Smarty-3.1.7, created on 2023-12-05 07:36:21
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ReturnSaleOrders/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209522478639aa99f6e6b15-40074802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12552ae57680e7556788b4f149b2f1f59affa11' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ReturnSaleOrders/ModuleSummaryView.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209522478639aa99f6e6b15-40074802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_639aa99f6e7db',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_639aa99f6e7db')) {function content_639aa99f6e7db($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>