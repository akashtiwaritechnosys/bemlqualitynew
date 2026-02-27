<?php /* Smarty version Smarty-3.1.7, created on 2024-01-02 04:31:33
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/DiscussionBlog/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:663704459659391a53f5f88-78673848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9c589174e1448728a16dfb9aab46adf77a15290' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/DiscussionBlog/DetailViewSummaryContents.tpl',
      1 => 1702109322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '663704459659391a53f5f88-78673848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_659391a53f728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_659391a53f728')) {function content_659391a53f728($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>