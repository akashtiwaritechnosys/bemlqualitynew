<?php /* Smarty version Smarty-3.1.7, created on 2023-10-17 11:56:32
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/DiscussionBlog/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:682443320640ed0431a1c64-91295461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ffffb711d62ed58fafc4dcb89d0475951afd504' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/DiscussionBlog/ModuleSummaryView.tpl',
      1 => 1683545716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '682443320640ed0431a1c64-91295461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640ed0431a747',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640ed0431a747')) {function content_640ed0431a747($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>