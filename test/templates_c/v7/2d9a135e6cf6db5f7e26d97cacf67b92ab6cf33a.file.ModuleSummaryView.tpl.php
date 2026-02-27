<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:20:18
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceReports/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122864898663051a62ec1e34-08419491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d9a135e6cf6db5f7e26d97cacf67b92ab6cf33a' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceReports/ModuleSummaryView.tpl',
      1 => 1661275392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122864898663051a62ec1e34-08419491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051a62ec30c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051a62ec30c')) {function content_63051a62ec30c($_smarty_tpl) {?><div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>