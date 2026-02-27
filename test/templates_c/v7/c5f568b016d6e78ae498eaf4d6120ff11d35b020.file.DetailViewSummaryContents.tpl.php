<?php /* Smarty version Smarty-3.1.7, created on 2023-12-05 07:29:21
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/RecommissioningReports/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6949325776357e424e0f7f5-84557993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f568b016d6e78ae498eaf4d6120ff11d35b020' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/RecommissioningReports/DetailViewSummaryContents.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6949325776357e424e0f7f5-84557993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6357e424e129b',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6357e424e129b')) {function content_6357e424e129b($_smarty_tpl) {?><form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>