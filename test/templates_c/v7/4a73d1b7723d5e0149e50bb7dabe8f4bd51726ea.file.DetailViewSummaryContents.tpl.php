<?php /* Smarty version Smarty-3.1.7, created on 2023-11-30 05:41:26
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1180108363636268a5578ca1-50252535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a73d1b7723d5e0149e50bb7dabe8f4bd51726ea' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewSummaryContents.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1180108363636268a5578ca1-50252535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_636268a557a50',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636268a557a50')) {function content_636268a557a50($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>