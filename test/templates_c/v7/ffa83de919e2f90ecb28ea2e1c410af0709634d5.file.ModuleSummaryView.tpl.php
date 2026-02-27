<?php /* Smarty version Smarty-3.1.7, created on 2025-01-17 05:47:44
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1763428946789ef00630307-94823012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffa83de919e2f90ecb28ea2e1c410af0709634d5' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/FailedParts/ModuleSummaryView.tpl',
      1 => 1733391284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1763428946789ef00630307-94823012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6789ef0063672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6789ef0063672')) {function content_6789ef0063672($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>