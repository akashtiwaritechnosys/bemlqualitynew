<?php /* Smarty version Smarty-3.1.7, created on 2023-11-06 06:17:29
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/CILsubsidiarywise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8734069846524daf9e073f2-18921072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7956317dcbc108a1d322f43869303cc5e3f7fb' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/CILsubsidiarywise.tpl',
      1 => 1698924404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8734069846524daf9e073f2-18921072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6524daf9e117a',
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
    'PickListValues' => 0,
    'INNER_VALUE1' => 0,
    'ResultArray' => 0,
    'KEY_FIELD' => 0,
    'NAME_FIELD' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6524daf9e117a')) {function content_6524daf9e117a($_smarty_tpl) {?><script>$( document ).ready(function() {jQuery('.app-menu').removeClass('hide');var toggleAppMenu = function(type) {var appMenu = jQuery('.app-menu');var appNav = jQuery('.app-nav');appMenu.appendTo('#page');appMenu.css({'top' : appNav.offset().top + appNav.height(),'left' : 0});if(typeof type === 'undefined') {type = appMenu.is(':hidden') ? 'show' : 'hide';}if(type == 'show') {appMenu.show(200, function() {});} else {appMenu.hide(200, function() {});}};jQuery('.app-trigger, .app-icon, .app-navigator').on('click',function(e){e.stopPropagation();toggleAppMenu();});jQuery('html').on('click', function() {});jQuery(document).keyup(function (e) {if (e.keyCode == 27) {if(!jQuery('.app-menu').is(':hidden')) {toggleAppMenu('hide');}}});jQuery('.app-modules-dropdown-container').hover(function(e) {var dropdownContainer = jQuery(e.currentTarget);jQuery('.dropdown').removeClass('open');if(dropdownContainer.length) {if(dropdownContainer.hasClass('dropdown-compact')) {dropdownContainer.find('.app-modules-dropdown').css('top', dropdownContainer.position().top - 8);} else {dropdownContainer.find('.app-modules-dropdown').css('top', '');}dropdownContainer.addClass('open').find('.app-item').addClass('active-app-item');}}, function(e) {var dropdownContainer = jQuery(e.currentTarget);dropdownContainer.find('.app-item').removeClass('active-app-item');setTimeout(function() {if(dropdownContainer.find('.app-modules-dropdown').length && !dropdownContainer.find('.app-modules-dropdown').is(':hover') && !dropdownContainer.is(':hover')) {dropdownContainer.removeClass('open');}}, 500);});jQuery('.app-item').on('click', function() {var url = jQuery(this).data('defaultUrl');if(url) {window.location.href = url;}});jQuery(window).resize(function() {jQuery(".app-modules-dropdown").mCustomScrollbar("destroy");app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height()*heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true,scrollbarPosition: 'outside'});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height()*heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});</script><div style="padding: 40px"><style>table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td,th {border: 1px solid #dddddd;text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #ffffff;}.NoBackGround {background-color: #ffffff;}</style><div class="row"><div class="col-lg-1"><button type="button" class="btn btn-primary"><a href="index.php?module=Leads&view=CustomReportList">Back</a></button></div><div align="center" class="col-lg-9"><h3><?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
</h3></div><div class="col-lg-1"><button onclick="ExportToExcel('xlsx')" type="button" class="btn btn-primary" id="">Export as XLSX</button></div><div class="col-lg-1"><button type="button" class="btn btn-primary pdfgen" id="">Export as PDF</button></div></div><table id="data_table"><tr><th class="NoBackGround" rowspan="1">CIL SUBSIDIERIES</th><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PickListValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><th rowspan="1" class="NoBackGround" class="NoBackGround"><b><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE1']->value;?>
</b></th><?php } ?><th class="NoBackGround" colspan="1"> <b> Grand Total </b> </th></tr><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResultArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FIELD']->value = $_smarty_tpl->tpl_vars['NAME_FIELD']->key;
?><tr><th class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['KEY_FIELD']->value;?>
</th><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['NAME_FIELD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><?php if ($_smarty_tpl->tpl_vars['INNER_VALUE1']->value=='0'){?><th rowspan="1" class="NoBackGround" class="NoBackGround"></th><?php }else{ ?><th rowspan="1" class="NoBackGround" class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE1']->value;?>
</th><?php }?><?php } ?></tr><?php } ?></table></div><script type="text/javascript" src="libraries/assets/xlsx.full.min.js"></script><script src="libraries/assets/jquery.min.js"></script><script src="libraries/assets/jspdf.min.js"></script><script src="libraries/assets/jspdf.plugin.autotable.min.js"></script><script>function ExportToExcel(type, fn, dl) {var elt = document.getElementById('data_table');var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });return dl ?XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :XLSX.writeFile(wb, fn || ('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.' + (type || 'xlsx')));}$('.pdfgen').click(function () {var pdf = new jsPDF('p', 'pt', 'a4');var table = document.getElementById('data_table');pdf.autoTable({html: table,startY: 20,styles: { fillColor: false },theme: 'grid',didDrawCell: function (data) {var cellStyles = data.cell.styles;pdf.setDrawColor(0);pdf.setLineWidth(0.5);pdf.rect(data.cell.x, data.cell.y, data.cell.width, data.cell.height);},});pdf.save('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.pdf');});</script><?php }} ?>