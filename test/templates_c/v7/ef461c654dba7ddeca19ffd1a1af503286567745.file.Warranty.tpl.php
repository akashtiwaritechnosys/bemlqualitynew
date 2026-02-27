<?php /* Smarty version Smarty-3.1.7, created on 2023-11-06 06:15:10
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/Warranty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18437910346532848bd51843-90712971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef461c654dba7ddeca19ffd1a1af503286567745' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/Warranty.tpl',
      1 => 1698924404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18437910346532848bd51843-90712971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6532848bd6849',
  'variables' => 
  array (
    'REPORT_LABEL' => 0,
    'PickListValues' => 0,
    'INNER_VALUE1' => 0,
    'ResultArray' => 0,
    'NAME_FIELD1' => 0,
    'KEY_FIELD' => 0,
    'INNER_KEY' => 0,
    'INNER_VALUE' => 0,
    'INNER_VALUE2' => 0,
    'ColumnColIg' => 0,
    'INNER_KEY2' => 0,
    'rowColIg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6532848bd6849')) {function content_6532848bd6849($_smarty_tpl) {?><script>$( document ).ready(function() {jQuery('.app-menu').removeClass('hide');var toggleAppMenu = function(type) {var appMenu = jQuery('.app-menu');var appNav = jQuery('.app-nav');appMenu.appendTo('#page');appMenu.css({'top' : appNav.offset().top + appNav.height(),'left' : 0});if(typeof type === 'undefined') {type = appMenu.is(':hidden') ? 'show' : 'hide';}if(type == 'show') {appMenu.show(200, function() {});} else {appMenu.hide(200, function() {});}};jQuery('.app-trigger, .app-icon, .app-navigator').on('click',function(e){e.stopPropagation();toggleAppMenu();});jQuery('html').on('click', function() {});jQuery(document).keyup(function (e) {if (e.keyCode == 27) {if(!jQuery('.app-menu').is(':hidden')) {toggleAppMenu('hide');}}});jQuery('.app-modules-dropdown-container').hover(function(e) {var dropdownContainer = jQuery(e.currentTarget);jQuery('.dropdown').removeClass('open');if(dropdownContainer.length) {if(dropdownContainer.hasClass('dropdown-compact')) {dropdownContainer.find('.app-modules-dropdown').css('top', dropdownContainer.position().top - 8);} else {dropdownContainer.find('.app-modules-dropdown').css('top', '');}dropdownContainer.addClass('open').find('.app-item').addClass('active-app-item');}}, function(e) {var dropdownContainer = jQuery(e.currentTarget);dropdownContainer.find('.app-item').removeClass('active-app-item');setTimeout(function() {if(dropdownContainer.find('.app-modules-dropdown').length && !dropdownContainer.find('.app-modules-dropdown').is(':hover') && !dropdownContainer.is(':hover')) {dropdownContainer.removeClass('open');}}, 500);});jQuery('.app-item').on('click', function() {var url = jQuery(this).data('defaultUrl');if(url) {window.location.href = url;}});jQuery(window).resize(function() {jQuery(".app-modules-dropdown").mCustomScrollbar("destroy");app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height()*heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true,scrollbarPosition: 'outside'});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height()*heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});</script><div style="padding: 40px"><style>table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td,th {border: 1px solid #dddddd;text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #ffffff;}.NoBackGround {background-color: #ffffff;}</style><div class="row"><div class="col-lg-1"><button type="button" class="btn btn-primary"><a href="index.php?module=Leads&view=CustomReportList">Back</a></button></div><div align="center" class="col-lg-9"><h3><?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
</h3></div><div class="col-lg-1"><button onclick="ExportToExcel('xlsx')" type="button" class="btn btn-primary" id="">Export as XLSX</button></div><div class="col-lg-1"><button type="button" class="btn btn-primary pdfgen" id="">Export as PDF</button></div></div><table id="data_table"><tr><th class="NoBackGround" rowspan="1">Model</th><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PickListValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><th rowspan="1" class="NoBackGround" class="NoBackGround"><b><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE1']->value;?>
</b></th><?php } ?><th class="NoBackGround" colspan="1"> <b> Grand Total </b> </th></tr><?php  $_smarty_tpl->tpl_vars['NAME_FIELD1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD1']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResultArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD1']->key => $_smarty_tpl->tpl_vars['NAME_FIELD1']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD1']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FIELD']->value = $_smarty_tpl->tpl_vars['NAME_FIELD1']->key;
?><?php  $_smarty_tpl->tpl_vars['INNER_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['NAME_FIELD1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['INNER_VALUE']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE']->key => $_smarty_tpl->tpl_vars['INNER_VALUE']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY']->value = $_smarty_tpl->tpl_vars['INNER_VALUE']->key;
 $_smarty_tpl->tpl_vars['INNER_VALUE']->index++;
 $_smarty_tpl->tpl_vars['INNER_VALUE']->first = $_smarty_tpl->tpl_vars['INNER_VALUE']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['INNER_VALUE']->first;
?><tr><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['first']){?><th colspan="<?php echo count($_smarty_tpl->tpl_vars['PickListValues']->value)+2;?>
" style="font-weight: 900" class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['KEY_FIELD']->value;?>
</th><?php }?></tr><tr><th class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['INNER_KEY']->value;?>
</th><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['INNER_VALUE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><?php  $_smarty_tpl->tpl_vars['INNER_VALUE2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE2']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['INNER_VALUE1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE2']->key => $_smarty_tpl->tpl_vars['INNER_VALUE2']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE2']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY2']->value = $_smarty_tpl->tpl_vars['INNER_VALUE2']->key;
?><?php if ($_smarty_tpl->tpl_vars['INNER_VALUE2']->value=='0'){?><th rowspan="1" class="NoBackGround" class="NoBackGround"></th><?php }else{ ?><th rowspan="1" class="NoBackGround" class="NoBackGround"><a target="_blank"href='index.php?module=Equipment&view=List&app=INVENTORY&search_params=[[["<?php echo $_smarty_tpl->tpl_vars['ColumnColIg']->value;?>
","e","<?php echo $_smarty_tpl->tpl_vars['INNER_KEY2']->value;?>
"],["<?php echo $_smarty_tpl->tpl_vars['rowColIg']->value;?>
","e","<?php echo $_smarty_tpl->tpl_vars['INNER_KEY']->value;?>
"],["equip_category","e","S"],["eq_run_war_st","e","Under Warranty"]]]'><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE2']->value;?>
</a></th><?php }?><?php } ?><?php } ?></tr><?php } ?><?php } ?></table></div><script type="text/javascript" src="libraries/assets/xlsx.full.min.js"></script><script src="libraries/assets/jquery.min.js"></script><script src="libraries/assets/jspdf.min.js"></script><script src="libraries/assets/jspdf.plugin.autotable.min.js"></script><script>function ExportToExcel(type, fn, dl) {var elt = document.getElementById('data_table');var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });return dl ?XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :XLSX.writeFile(wb, fn || ('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.' + (type || 'xlsx')));}$('.pdfgen').click(function () {var pdf = new jsPDF('p', 'pt', 'a4');var table = document.getElementById('data_table');pdf.autoTable({html: table,startY: 20,styles: { fillColor: false },theme: 'grid',didDrawCell: function (data) {var cellStyles = data.cell.styles;pdf.setDrawColor(0);pdf.setLineWidth(0.5);pdf.rect(data.cell.x, data.cell.y, data.cell.width, data.cell.height);},});pdf.save('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.pdf');});</script><?php }} ?>