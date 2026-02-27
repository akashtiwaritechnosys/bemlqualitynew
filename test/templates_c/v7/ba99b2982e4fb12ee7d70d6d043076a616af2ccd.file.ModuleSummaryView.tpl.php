<?php /* Smarty version Smarty-3.1.7, created on 2024-01-02 04:31:33
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/DiscussionBlog/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269000230659391a53c8744-51366027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba99b2982e4fb12ee7d70d6d043076a616af2ccd' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/DiscussionBlog/ModuleSummaryView.tpl',
      1 => 1702109322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269000230659391a53c8744-51366027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_659391a53f1ee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_659391a53f1ee')) {function content_659391a53f1ee($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>