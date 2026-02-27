<?php /* Smarty version Smarty-3.1.7, created on 2025-07-25 09:02:26
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Leads/exports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19365180286825978fd1a138-24839781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c72b1c97de4e2658287b04442c5e97fdb6a4073' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Leads/exports.tpl',
      1 => 1753434052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19365180286825978fd1a138-24839781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6825978fd1cf9',
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6825978fd1cf9')) {function content_6825978fd1cf9($_smarty_tpl) {?><div class="row" style="margin: 15px 0;"><!-- Back Button --><div class="col-md-2"><a href="index.php?module=Leads&view=CustomReportList" class="btn btn-default btn-block"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></div><!-- Report Heading --><div class="col-md-8 text-center"><h3 class="text-primary" style="margin-top: 5px;"><?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
</h3></div><!-- Export Buttons --><div class="col-md-2 text-right"><button onclick="ExportToExcel('xlsx')" type="button" class="btn btn-success" title="Export to Excel"><span class="glyphicon glyphicon-download-alt"></span> XLSX</button><button onclick="generatePDF()" type="button" class="btn btn-danger pdfgen" title="Export to PDF" style="margin-left: 5px;"><span class="glyphicon glyphicon-file"></span> PDF</button></div></div><?php }} ?>