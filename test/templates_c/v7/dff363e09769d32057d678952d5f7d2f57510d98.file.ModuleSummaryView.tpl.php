<?php /* Smarty version Smarty-3.1.7, created on 2025-04-24 12:27:23
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/StockTransferOrders/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179383680a2e2bcbe206-89886548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dff363e09769d32057d678952d5f7d2f57510d98' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/StockTransferOrders/ModuleSummaryView.tpl',
      1 => 1733391286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179383680a2e2bcbe206-89886548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_680a2e2bcc642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680a2e2bcc642')) {function content_680a2e2bcc642($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>