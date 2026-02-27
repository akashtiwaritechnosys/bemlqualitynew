<?php /* Smarty version Smarty-3.1.7, created on 2023-11-06 12:07:55
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19975301366548d71b17c504-43065396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46d72d9247101ec01647e86a316a1f73d3cc9e7' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/foot.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19975301366548d71b17c504-43065396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6548d71b17e07',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6548d71b17e07')) {function content_6548d71b17e07($_smarty_tpl) {?><script type="text/javascript" src="libraries/assets/xlsx.full.min.js"></script>
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