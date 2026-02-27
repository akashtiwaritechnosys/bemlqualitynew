<?php /* Smarty version Smarty-3.1.7, created on 2023-11-16 08:56:33
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17002785916346dd3e6b8b28-41953066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae5cb1ae479f84e1b9ae15b8fcd8cd70db68a9a7' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewHeaderTitle.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17002785916346dd3e6b8b28-41953066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6346dd3e6bd7d',
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6346dd3e6bd7d')) {function content_6346dd3e6bd7d($_smarty_tpl) {?>
<div class="col-sm-5 col-lg-5 col-md-5"><div class="record-header clearfix"><div class="recordImage bghelpdesk app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><div class="name"><span><strong><?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>
</strong></span></div></div><div class="recordBasicInfo"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderFieldsView.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div><?php }} ?>