<?php /* Smarty version Smarty-3.1.7, created on 2022-09-07 12:09:21
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187432146863051a64975a24-19967362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526acb1a02624d399dde012b48b1e40c04d66d33' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceReports/DetailViewFullContents.tpl',
      1 => 1662540878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187432146863051a64975a24-19967362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63051a6497804',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
    'SERVICEREPORTTYPE' => 0,
    'EXTRALINEITEMREQUIREDTYPES' => 0,
    'REPORTTYPE' => 0,
    'EXTRALINEITEMREQUIREDSUBTYPES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63051a6497804')) {function content_63051a6497804($_smarty_tpl) {?><form id="detailView" method="POST">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

    <?php if (in_array($_smarty_tpl->tpl_vars['SERVICEREPORTTYPE']->value,$_smarty_tpl->tpl_vars['EXTRALINEITEMREQUIREDTYPES']->value)){?>
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LineItemsDetailShortDam.tpl",'ServiceReports'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <?php if (in_array($_smarty_tpl->tpl_vars['REPORTTYPE']->value,$_smarty_tpl->tpl_vars['EXTRALINEITEMREQUIREDSUBTYPES']->value)){?>
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LineItemsDetailShortDam.tpl",'ServiceReports'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LineItemsDetail.tpl','ServiceReports'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</form>
<?php }} ?>