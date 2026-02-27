<?php /* Smarty version Smarty-3.1.7, created on 2023-12-28 12:31:37
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1935653602658d6aa9e04689-52906572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45fc3e46c2fdfbb1c10a60cee2bfbd799819f05e' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewFullContents.tpl',
      1 => 1702109324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1935653602658d6aa9e04689-52906572',
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
  'unifunc' => 'content_658d6aa9e0695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_658d6aa9e0695')) {function content_658d6aa9e0695($_smarty_tpl) {?><form id="detailView" method="POST">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

</form>
<?php }} ?>