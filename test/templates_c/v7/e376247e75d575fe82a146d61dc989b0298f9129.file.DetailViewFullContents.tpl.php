<?php /* Smarty version Smarty-3.1.7, created on 2022-08-20 17:53:56
         compiled from "C:\xampp\htdocs\beml\includes\runtime/../../layouts/v7\modules\FailedParts\DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181165574962ee7bb017bfd7-68938000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e376247e75d575fe82a146d61dc989b0298f9129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\beml\\includes\\runtime/../../layouts/v7\\modules\\FailedParts\\DetailViewFullContents.tpl',
      1 => 1661018032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181165574962ee7bb017bfd7-68938000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_62ee7bb01adf4',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ee7bb01adf4')) {function content_62ee7bb01adf4($_smarty_tpl) {?><form id="detailView" method="POST">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LineItemsDetail.tpl','FailedParts'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</form>
<?php }} ?>