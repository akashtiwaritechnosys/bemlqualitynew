<?php /* Smarty version Smarty-3.1.7, created on 2025-01-17 05:47:44
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5146529446789ef0063dba9-99820891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '411198a39f935474266c82c232d815d80d95afc1' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl',
      1 => 1733391284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5146529446789ef0063dba9-99820891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6789ef0064088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6789ef0064088')) {function content_6789ef0064088($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>