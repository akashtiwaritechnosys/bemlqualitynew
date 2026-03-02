<?php /* Smarty version Smarty-3.1.7, created on 2026-03-02 09:25:57
         compiled from "C:\wamp64\www\bemlqualitynew\includes\runtime/../../layouts/v7\modules\Vtiger\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126700689469a1672d93bca6-24554716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2eb0ef8e784c6d9aa8293c1ca3a20408b5ce6a' => 
    array (
      0 => 'C:\\wamp64\\www\\bemlqualitynew\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\partials\\SidebarHeader.tpl',
      1 => 1772443545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126700689469a1672d93bca6-24554716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_69a1672d99840',
  'variables' => 
  array (
    'MODULE' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'APP_IMAGE_MAP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69a1672d99840')) {function content_69a1672d99840($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>

<div style="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'){?> display: none <?php }?> " class="col-sm-1 col-xs-2 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<div class="row" title="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?> <?php echo vtranslate('LBL_DASHBOARD');?>
 <?php }else{ ?><?php echo vtranslate("LBL_".($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value));?>
<?php }?>">
		<span class="app-indicator-icon fa <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?>fa-dashboard<?php }?>"><i data-feather='<?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value];?>
'></i> </span>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>