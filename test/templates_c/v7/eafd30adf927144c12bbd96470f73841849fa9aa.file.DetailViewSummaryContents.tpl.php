<?php /* Smarty version Smarty-3.1.7, created on 2023-12-05 07:23:19
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceOrders/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:519088753636dfd73a341b2-29347683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eafd30adf927144c12bbd96470f73841849fa9aa' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceOrders/DetailViewSummaryContents.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519088753636dfd73a341b2-29347683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_636dfd73a36d9',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636dfd73a36d9')) {function content_636dfd73a36d9($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>