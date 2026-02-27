<?php /* Smarty version Smarty-3.1.7, created on 2023-11-24 09:46:55
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceReports/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121731890963496473e5b1f6-67565184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81329b8f532ba922f89ce8cb75c31ccb3ba3c712' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ServiceReports/ModuleSummaryView.tpl',
      1 => 1699267087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121731890963496473e5b1f6-67565184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63496473e5ec2',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63496473e5ec2')) {function content_63496473e5ec2($_smarty_tpl) {?><div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>