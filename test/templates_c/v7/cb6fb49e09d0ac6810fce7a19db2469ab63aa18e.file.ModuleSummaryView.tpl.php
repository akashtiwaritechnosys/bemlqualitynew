<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:28:13
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9965434263051c3d5ce6f4-88709373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6fb49e09d0ac6810fce7a19db2469ab63aa18e' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl',
      1 => 1661275345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9965434263051c3d5ce6f4-88709373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051c3d5d034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051c3d5d034')) {function content_63051c3d5d034($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>