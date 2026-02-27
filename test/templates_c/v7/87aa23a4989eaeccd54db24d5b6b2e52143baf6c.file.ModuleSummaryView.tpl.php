<?php /* Smarty version Smarty-3.1.7, created on 2022-09-08 09:17:45
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceOrders/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9095357826319b339902f12-09311231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87aa23a4989eaeccd54db24d5b6b2e52143baf6c' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceOrders/ModuleSummaryView.tpl',
      1 => 1661275390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9095357826319b339902f12-09311231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6319b33992fb8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6319b33992fb8')) {function content_6319b33992fb8($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>