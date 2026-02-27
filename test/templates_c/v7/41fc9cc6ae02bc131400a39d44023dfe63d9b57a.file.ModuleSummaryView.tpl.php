<?php /* Smarty version Smarty-3.1.7, created on 2024-02-09 10:12:01
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21670578865c5fa710b1346-53183078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41fc9cc6ae02bc131400a39d44023dfe63d9b57a' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl',
      1 => 1702109322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21670578865c5fa710b1346-53183078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_65c5fa710b6af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65c5fa710b6af')) {function content_65c5fa710b6af($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>