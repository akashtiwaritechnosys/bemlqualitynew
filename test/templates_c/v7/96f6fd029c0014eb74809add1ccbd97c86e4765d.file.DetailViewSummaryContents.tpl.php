<?php /* Smarty version Smarty-3.1.7, created on 2022-09-08 09:17:45
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceOrders/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12909055066319b339936282-22506502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f6fd029c0014eb74809add1ccbd97c86e4765d' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceOrders/DetailViewSummaryContents.tpl',
      1 => 1661275390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12909055066319b339936282-22506502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6319b339938b2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6319b339938b2')) {function content_6319b339938b2($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>