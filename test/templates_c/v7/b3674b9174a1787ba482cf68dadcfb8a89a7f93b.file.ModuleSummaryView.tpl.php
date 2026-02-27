<?php /* Smarty version Smarty-3.1.7, created on 2025-04-14 10:30:49
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/DiscussionBlog/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206978535367fce3d960e204-09127459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3674b9174a1787ba482cf68dadcfb8a89a7f93b' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/DiscussionBlog/ModuleSummaryView.tpl',
      1 => 1733391283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206978535367fce3d960e204-09127459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_67fce3d96483b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67fce3d96483b')) {function content_67fce3d96483b($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>