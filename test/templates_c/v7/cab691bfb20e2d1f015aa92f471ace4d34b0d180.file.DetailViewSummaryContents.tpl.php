<?php /* Smarty version Smarty-3.1.7, created on 2024-02-09 10:12:01
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176321311165c5fa710c2868-91239199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab691bfb20e2d1f015aa92f471ace4d34b0d180' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl',
      1 => 1702109322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176321311165c5fa710c2868-91239199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_65c5fa710c522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65c5fa710c522')) {function content_65c5fa710c522($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>