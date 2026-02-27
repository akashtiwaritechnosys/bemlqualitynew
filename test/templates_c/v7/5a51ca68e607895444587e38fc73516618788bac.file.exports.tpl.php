<?php /* Smarty version Smarty-3.1.7, created on 2023-11-06 12:07:55
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/exports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18158150526548d71b178da5-19001892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a51ca68e607895444587e38fc73516618788bac' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/exports.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18158150526548d71b178da5-19001892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6548d71b17a44',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6548d71b17a44')) {function content_6548d71b17a44($_smarty_tpl) {?><div class="row"><div class="col-lg-1"><button type="button" class="btn btn-primary"><a href="index.php?module=Leads&view=CustomReportList">Back</a></button></div><div align="center" class="col-lg-9"><h3><?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
</h3></div><div class="col-lg-1"><button onclick="ExportToExcel('xlsx')" type="button" class="btn btn-primary" id="">Export as XLSX</button></div><div class="col-lg-1"><button type="button" class="btn btn-primary pdfgen" id="">Export as PDF</button></div><?php }} ?>