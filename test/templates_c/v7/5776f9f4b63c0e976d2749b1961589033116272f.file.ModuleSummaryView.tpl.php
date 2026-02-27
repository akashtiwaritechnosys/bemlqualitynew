<?php /* Smarty version Smarty-3.1.7, created on 2023-11-30 05:41:26
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146252563636268a55712f7-45307118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5776f9f4b63c0e976d2749b1961589033116272f' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146252563636268a55712f7-45307118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_636268a557296',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636268a557296')) {function content_636268a557296($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>