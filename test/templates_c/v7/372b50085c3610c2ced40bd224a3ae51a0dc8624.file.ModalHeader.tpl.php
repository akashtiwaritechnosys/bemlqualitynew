<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:18:21
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:766515508630519edc9c5e6-04322790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372b50085c3610c2ced40bd224a3ae51a0dc8624' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl',
      1 => 1661275406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766515508630519edc9c5e6-04322790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_630519edc9d09',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_630519edc9d09')) {function content_630519edc9d09($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h4></div></div>    <?php }} ?>