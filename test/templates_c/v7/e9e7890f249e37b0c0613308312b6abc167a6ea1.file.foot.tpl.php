<?php /* Smarty version Smarty-3.1.7, created on 2025-07-25 09:02:26
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Leads/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:410859146825978fd256e6-11273856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e7890f249e37b0c0613308312b6abc167a6ea1' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Leads/foot.tpl',
      1 => 1753434052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410859146825978fd256e6-11273856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6825978fd2717',
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6825978fd2717')) {function content_6825978fd2717($_smarty_tpl) {?><script type="text/javascript" src="libraries/assets/xlsx.full.min.js"></script>
<script src="libraries/assets/jquery.min.js"></script>
<script src="libraries/assets/html2canvas.min.js"></script>
<script src="libraries/assets/jspdf.umd.min.js"></script>

<script>
  $(document).ready(function() {
    $('#clearForm').on('click', function() {
      // Clear radio buttons
      $('input[type=radio][name=dateRange]').prop('checked', false);

      // Clear date inputs
      $('#fromDate, #toDate').val('');

      // Reset selects
      $('#ticketType').val('');
      $('#warrantyStatus').val('');

      // Reset equipmentModel multi-select (with Select2)
      if ($('#equipmentModel').hasClass('select2')) {
        $('#equipmentModel').val(null).trigger('change');
      } else {
        $('#equipmentModel').val('');
      }

      if ($('#ticketType').hasClass('select2')) {
        $('#ticketType').val(null).trigger('change');
      } else {
        $('#ticketType').val('');
      }

      if ($('#warrantyStatus').hasClass('select2')) {
        $('#warrantyStatus').val(null).trigger('change');
      } else {
        $('#warrantyStatus').val('');
      }
      window.location.replace("index.php?module=Leads&view=LifeCycle");
    });

    $('#selectAllModels').on('click', function() {
      let allValues = $('#equipmentModel option').map(function() {
        return $(this).val();
      }).get();
      $('#equipmentModel').val(allValues).trigger('change');
    });
  });

  function ExportToExcel(type, fn, dl) {
    var elt = document.getElementById('data_table');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
    return dl ?
      XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
      XLSX.writeFile(wb, fn || ('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.' + (type || 'xlsx')));
  }
  // $('.pdfgen').click(function() {
  //   var pdf = new jsPDF('p', 'pt', 'a4');
  //   var table = document.getElementById('data_table');
  //   pdf.autoTable({
  //     html: table,
  //     startY: 20,
  //     styles: { fillColor: false },
  //     theme: 'grid',
  //     didDrawCell: function(data) {
  //       var cellStyles = data.cell.styles;
  //       pdf.setDrawColor(0);
  //       pdf.setLineWidth(0.5);
  //       pdf.rect(data.cell.x, data.cell.y, data.cell.width, data.cell.height);
  //     },
  //   });
  //   pdf.save('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.pdf');
  // });

  $(document).ready(function() {
    $('input[name="dateRange"]').on('change', function() {
      if ($(this).val() === 'Custom') {
        $('#customDateRange').slideDown();
      } else {
        $('#customDateRange').slideUp();
        $('#fromDate').val('');
        $('#toDate').val('');
      }
    });

    function validateDateRange() {
      const fromDate = $('#fromDate').val();
      const toDate = $('#toDate').val();
      if (fromDate && toDate && new Date(toDate) < new Date(fromDate)) {
        alert('End date cannot be earlier than Start date.');
        $('#toDate').val('');
      }
    }
    $('#fromDate, #toDate').on('change', validateDateRange);
  });

  async function generatePDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({
      orientation: 'portrait',
      unit: 'pt',
      format: 'a4'
    });
    const element = document.getElementById("data_table");
    await doc.html(element, {
      callback: function(doc) {
        doc.save('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.pdf');
      },
      margin: [5, 5, 5, 5],
      x: 10,
      y: 10,
      html2canvas: {
        scale: 0.4,
        useCORS: true
      }
    });
  }

  $('#loadresults').click(function() {
    let allSelectedModel = $('#equipmentModel').val();
    let length = 0;
    if (allSelectedModel && allSelectedModel.length) {
      length = allSelectedModel.length;
    }
    let concatenatedstring = "";
    for (i = 0; i < length; i++) {
      if (i == 0) {
        concatenatedstring = allSelectedModel[i];
      } else {
        concatenatedstring = concatenatedstring + "#" + allSelectedModel[i];
      }
    }
    let ticketType = $('#ticketType').val();
    let lengthTT = 0;
    if (ticketType && ticketType.length) {
      lengthTT = ticketType.length;
    }
    let ticketTypewar = "";
    for (i = 0; i < lengthTT; i++) {
      if (i == 0) {
        ticketTypewar = ticketType[i];
      } else {
        ticketTypewar = ticketTypewar + "#" + ticketType[i];
      }
    }

    let warrantyStatus = $('#warrantyStatus').val();

    let lengthwar = 0;
    if (warrantyStatus && warrantyStatus.length) {
      lengthwar = warrantyStatus.length;
    }
    let concatenatedstringWar = "";
    for (i = 0; i < lengthwar; i++) {
      if (i == 0) {
        concatenatedstringWar = warrantyStatus[i];
      } else {
        concatenatedstringWar = concatenatedstringWar + "#" + warrantyStatus[i];
      }
    }

    let fromDate = $('#fromDate').val();
    let toDate = $('#toDate').val();
    let dateRange = $('input[name="dateRange"]:checked').val();
    window.location.replace("index.php?module=Leads&view=LifeCycle&equipmentModel=" +
      encodeURIComponent(concatenatedstring) +
      "&ticketType=" + encodeURIComponent(ticketTypewar) + "&warrantyStatus=" + encodeURIComponent(
        concatenatedstringWar) +
      "&fromDate=" + fromDate + "&toDate=" + toDate +
      "&dateRange=" + dateRange
    );
  });
</script><?php }} ?>