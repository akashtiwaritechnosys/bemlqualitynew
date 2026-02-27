<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:18:24
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ImageDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:417396711630519f03aa017-58899472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76ec98a9ab96b04a7d0733367a3685c05af8255c' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ImageDetailView.tpl',
      1 => 1661276134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417396711630519f03aa017-58899472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'IMAGE_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_630519f03ac6b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_630519f03ac6b')) {function content_630519f03ac6b($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD']->value->getImageDetails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ITER']->value = $_smarty_tpl->tpl_vars['IMAGE_INFO']->key;
?>
	<?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'])){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'];?>
" width="150" height="80">
	<?php }?>
<?php } ?><?php }} ?>