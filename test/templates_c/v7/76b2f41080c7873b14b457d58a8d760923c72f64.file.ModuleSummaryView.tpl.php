<?php /* Smarty version Smarty-3.1.7, created on 2022-09-03 10:47:27
         compiled from "C:\xampp\htdocs\beml\includes\runtime/../../layouts/v7\modules\FailedParts\ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190640938631330bf6f7166-85242632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b2f41080c7873b14b457d58a8d760923c72f64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\beml\\includes\\runtime/../../layouts/v7\\modules\\FailedParts\\ModuleSummaryView.tpl',
      1 => 1659869832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190640938631330bf6f7166-85242632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_631330bf71438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_631330bf71438')) {function content_631330bf71438($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>