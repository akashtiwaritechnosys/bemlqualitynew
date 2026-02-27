<?php /* Smarty version Smarty-3.1.7, created on 2024-01-21 17:36:22
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/exports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175151246765ad5616778733-34024832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2d58d9a3e6acb668a9d1d1e0d5d4f6b0d136c10' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/exports.tpl',
      1 => 1702109323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175151246765ad5616778733-34024832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_65ad561677ac8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65ad561677ac8')) {function content_65ad561677ac8($_smarty_tpl) {?><div class="row"><div class="col-lg-1"><button type="button" class="btn btn-primary"><a href="index.php?module=Leads&view=CustomReportList">Back</a></button></div><div align="center" class="col-lg-9"><h3><?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
</h3></div><div class="col-lg-1"><button onclick="ExportToExcel('xlsx')" type="button" class="btn btn-primary" id="">Export as XLSX</button></div><div class="col-lg-1"><button type="button" class="btn btn-primary pdfgen" id="">Export as PDF</button></div><?php }} ?>