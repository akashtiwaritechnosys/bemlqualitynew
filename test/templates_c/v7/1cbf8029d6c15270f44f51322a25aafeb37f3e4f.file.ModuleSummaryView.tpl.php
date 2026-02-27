<?php /* Smarty version Smarty-3.1.7, created on 2023-12-28 12:31:35
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1004467101658d6aa7c633e3-55707360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cbf8029d6c15270f44f51322a25aafeb37f3e4f' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/ModuleSummaryView.tpl',
      1 => 1702109324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1004467101658d6aa7c633e3-55707360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_658d6aa7c64af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_658d6aa7c64af')) {function content_658d6aa7c64af($_smarty_tpl) {?><div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>