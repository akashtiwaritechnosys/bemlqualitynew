<?php /* Smarty version Smarty-3.1.7, created on 2023-10-17 11:56:32
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/DiscussionBlog/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1537147665640ed0431c3b05-09740651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bedb0d6942d34f623afcd3c50399a9fcbe6130eb' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/DiscussionBlog/DetailViewSummaryContents.tpl',
      1 => 1683545716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1537147665640ed0431c3b05-09740651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640ed0431c535',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640ed0431c535')) {function content_640ed0431c535($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>