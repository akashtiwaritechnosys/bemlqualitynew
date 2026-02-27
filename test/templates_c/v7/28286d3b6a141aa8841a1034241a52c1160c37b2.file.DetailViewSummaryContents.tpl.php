<?php /* Smarty version Smarty-3.1.7, created on 2025-01-21 10:09:31
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/ServiceOrders/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203021198678f725b134647-19285017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28286d3b6a141aa8841a1034241a52c1160c37b2' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/ServiceOrders/DetailViewSummaryContents.tpl',
      1 => 1733391285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1203021198678f725b134647-19285017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_678f725b13753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_678f725b13753')) {function content_678f725b13753($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>