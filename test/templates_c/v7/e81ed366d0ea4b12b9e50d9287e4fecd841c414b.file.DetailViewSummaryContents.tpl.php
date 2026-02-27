<?php /* Smarty version Smarty-3.1.7, created on 2023-12-28 12:31:35
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1004061851658d6aa7c77ef1-43910872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81ed366d0ea4b12b9e50d9287e4fecd841c414b' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewSummaryContents.tpl',
      1 => 1702109324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1004061851658d6aa7c77ef1-43910872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_658d6aa7c7919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_658d6aa7c7919')) {function content_658d6aa7c7919($_smarty_tpl) {?><form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>