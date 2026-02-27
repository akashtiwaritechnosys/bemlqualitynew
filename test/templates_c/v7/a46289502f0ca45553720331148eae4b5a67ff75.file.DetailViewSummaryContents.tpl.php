<?php /* Smarty version Smarty-3.1.7, created on 2022-09-03 10:47:27
         compiled from "C:\xampp\htdocs\beml\includes\runtime/../../layouts/v7\modules\FailedParts\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:465725081631330bf9442c2-45115432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46289502f0ca45553720331148eae4b5a67ff75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\beml\\includes\\runtime/../../layouts/v7\\modules\\FailedParts\\DetailViewSummaryContents.tpl',
      1 => 1659869832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '465725081631330bf9442c2-45115432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_631330bf97729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_631330bf97729')) {function content_631330bf97729($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>