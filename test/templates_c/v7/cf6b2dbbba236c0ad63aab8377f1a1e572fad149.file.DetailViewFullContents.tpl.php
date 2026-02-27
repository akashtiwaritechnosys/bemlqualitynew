<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:26:20
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84073070063051bcc60e8c5-89095427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf6b2dbbba236c0ad63aab8377f1a1e572fad149' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/StockTransferOrders/DetailViewFullContents.tpl',
      1 => 1661275393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84073070063051bcc60e8c5-89095427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051bcc6131c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051bcc6131c')) {function content_63051bcc6131c($_smarty_tpl) {?><form id="detailView" method="POST">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LineItemsDetail.tpl','StockTransferOrders'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</form>
<?php }} ?>