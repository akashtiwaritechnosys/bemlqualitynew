<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:28:13
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194431580363051c3d5d8099-93822578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '470276bdf0473dbb154179cfffe759cd66dc6726' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl',
      1 => 1661275345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194431580363051c3d5d8099-93822578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051c3d5d927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051c3d5d927')) {function content_63051c3d5d927($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>