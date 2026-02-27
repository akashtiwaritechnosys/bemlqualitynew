<?php /* Smarty version Smarty-3.1.7, created on 2022-09-02 18:26:23
         compiled from "C:\xampp\htdocs\beml\includes\runtime/../../layouts/v7\modules\ServiceReports\DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185688113163124acf9c9020-85068787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19b8202161da71f2f21eec246baa86cfd8eb481f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\beml\\includes\\runtime/../../layouts/v7\\modules\\ServiceReports\\DetailViewFullContents.tpl',
      1 => 1662054618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185688113163124acf9c9020-85068787',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63124acfa4a9f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63124acfa4a9f')) {function content_63124acfa4a9f($_smarty_tpl) {?><form id="detailView" method="POST">
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