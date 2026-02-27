<?php /* Smarty version Smarty-3.1.7, created on 2022-08-23 18:27:39
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166026857463051c1b543a34-98237094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '303cda18484d312e923c2e33e6537429ef86af00' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/FailedParts/DetailViewFullContents.tpl',
      1 => 1661275344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166026857463051c1b543a34-98237094',
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
  'unifunc' => 'content_63051c1b54558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051c1b54558')) {function content_63051c1b54558($_smarty_tpl) {?><form id="detailView" method="POST">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LineItemsDetail.tpl','FailedParts'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</form>
<?php }} ?>