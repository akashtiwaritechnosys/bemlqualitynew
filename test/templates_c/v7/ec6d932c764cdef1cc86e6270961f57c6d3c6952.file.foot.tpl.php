<?php /* Smarty version Smarty-3.1.7, created on 2024-01-21 17:36:22
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138356917965ad561677bca8-59793637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec6d932c764cdef1cc86e6270961f57c6d3c6952' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Leads/foot.tpl',
      1 => 1702109323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138356917965ad561677bca8-59793637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_65ad561677e32',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65ad561677e32')) {function content_65ad561677e32($_smarty_tpl) {?><script type="text/javascript" src="libraries/assets/xlsx.full.min.js"></script>
<script src="libraries/assets/jquery.min.js"></script>
<script src="libraries/assets/jspdf.min.js"></script>
<script src="libraries/assets/jspdf.plugin.autotable.min.js"></script>

<script>
  function ExportToExcel(type, fn, dl) {
    var elt = document.getElementById('data_table');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
    return dl ?
      XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
      XLSX.writeFile(wb, fn || ('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.' + (type || 'xlsx')));
  }
  $('.pdfgen').click(function() {
    var pdf = new jsPDF('p', 'pt', 'a4');
    var table = document.getElementById('data_table');
    pdf.autoTable({
      html: table,
      startY: 20,
      styles: { fillColor: false },
      theme: 'grid',
      didDrawCell: function(data) {
        var cellStyles = data.cell.styles;
        pdf.setDrawColor(0);
        pdf.setLineWidth(0.5);
        pdf.rect(data.cell.x, data.cell.y, data.cell.width, data.cell.height);
      },
    });
    pdf.save('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.pdf');
  });
</script><?php }} ?>