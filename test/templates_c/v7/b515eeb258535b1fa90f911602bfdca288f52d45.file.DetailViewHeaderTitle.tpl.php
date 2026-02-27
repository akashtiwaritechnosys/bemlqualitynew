<?php /* Smarty version Smarty-3.1.7, created on 2023-12-11 10:18:54
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11114395896576e20eb30ff7-10133658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b515eeb258535b1fa90f911602bfdca288f52d45' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewHeaderTitle.tpl',
      1 => 1702109323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11114395896576e20eb30ff7-10133658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6576e20eb695b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6576e20eb695b')) {function content_6576e20eb695b($_smarty_tpl) {?>
<div class="col-sm-5 col-lg-5 col-md-5"><div class="record-header clearfix"><div class="recordImage bghelpdesk app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><div class="name"><span><strong><?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>
</strong></span></div></div><div class="recordBasicInfo"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderFieldsView.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div><?php }} ?>