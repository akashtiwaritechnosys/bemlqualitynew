<?php /* Smarty version Smarty-3.1.7, created on 2023-12-05 07:23:19
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceOrders/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159855102636dfd73a21ae5-60077676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf83e891f5e4df08d509e50dc4cbf47170473ef2' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceOrders/ModuleSummaryView.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159855102636dfd73a21ae5-60077676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_636dfd73a239c',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636dfd73a239c')) {function content_636dfd73a239c($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>