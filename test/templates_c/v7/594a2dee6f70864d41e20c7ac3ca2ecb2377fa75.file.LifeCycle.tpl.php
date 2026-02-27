<?php /* Smarty version Smarty-3.1.7, created on 2025-07-25 09:02:26
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Leads/LifeCycle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16716515606825978fcfcfc6-38894511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '594a2dee6f70864d41e20c7ac3ca2ecb2377fa75' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Leads/LifeCycle.tpl',
      1 => 1753434052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16716515606825978fcfcfc6-38894511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6825978fd1596',
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'dateRange' => 0,
    'fromDate' => 0,
    'toDate' => 0,
    'ticketTypRow' => 0,
    'data' => 0,
    'ticketType' => 0,
    'eqipDataRow' => 0,
    'equipmentModel' => 0,
    'warDataRow' => 0,
    'warrantyStatus' => 0,
    'GROUPED_DATA' => 0,
    'models' => 0,
    'statuses' => 0,
    'deptRowspan' => 0,
    'rows' => 0,
    'teamRowspan' => 0,
    'records' => 0,
    'firstDept' => 0,
    'ticket_type' => 0,
    'firstTeam' => 0,
    'model' => 0,
    'firstStatus' => 0,
    'status' => 0,
    'record' => 0,
    'warranties' => 0,
    'modelRowspan' => 0,
    'entries' => 0,
    'firstModelPrinted' => 0,
    'firstWarrantyPrinted' => 0,
    'warrantyRowspan' => 0,
    'warranty' => 0,
    'entry' => 0,
    'typeRowCount' => 0,
    'firstTypeRowPrinted' => 0,
    'firstModelRowPrinted' => 0,
    'modelRowCount' => 0,
    'row' => 0,
    'statusGroup' => 0,
    'firstStatusRowPrinted' => 0,
    'statusRowCount' => 0,
    'firstRowPrinted' => 0,
    'rowspanCount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6825978fd1596')) {function content_6825978fd1596($_smarty_tpl) {?><script>$(document).ready(function() {jQuery('.app-menu').removeClass('hide');var toggleAppMenu = function(type) {var appMenu = jQuery('.app-menu');var appNav = jQuery('.app-nav');appMenu.appendTo('#page');appMenu.css({'top': appNav.offset().top + appNav.height(),'left': 0});if (typeof type === 'undefined') {type = appMenu.is(':hidden') ? 'show' : 'hide';}if (type == 'show') {appMenu.show(200, function() {});} else {appMenu.hide(200, function() {});}};jQuery('.app-trigger, .app-icon, .app-navigator').on('click', function(e) {e.stopPropagation();toggleAppMenu();});jQuery('html').on('click', function() {});jQuery(document).keyup(function(e) {if (e.keyCode == 27) {if (!jQuery('.app-menu').is(':hidden')) {toggleAppMenu('hide');}}});jQuery('.app-modules-dropdown-container').hover(function(e) {var dropdownContainer = jQuery(e.currentTarget);jQuery('.dropdown').removeClass('open');if (dropdownContainer.length) {if (dropdownContainer.hasClass('dropdown-compact')) {dropdownContainer.find('.app-modules-dropdown').css('top', dropdownContainer.position().top - 8);} else {dropdownContainer.find('.app-modules-dropdown').css('top', '');}dropdownContainer.addClass('open').find('.app-item').addClass('active-app-item');}}, function(e) {var dropdownContainer = jQuery(e.currentTarget);dropdownContainer.find('.app-item').removeClass('active-app-item');setTimeout(function() {if (dropdownContainer.find('.app-modules-dropdown').length && !dropdownContainer.find('.app-modules-dropdown').is(':hover') && !dropdownContainer.is(':hover')) {dropdownContainer.removeClass('open');}}, 500);});jQuery('.app-item').on('click', function() {var url = jQuery(this).data('defaultUrl');if (url) {window.location.href = url;}});jQuery(window).resize(function() {jQuery(".app-modules-dropdown").mCustomScrollbar("destroy");app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height() * heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});app.helper.showVerticalScroll(jQuery(".app-modules-dropdown").not('.dropdown-modules-compact'), {setHeight: $(window).height(),autoExpandScrollbar: true,scrollbarPosition: 'outside'});jQuery('.dropdown-modules-compact').each(function() {var element = jQuery(this);var heightPer = parseFloat(element.data('height'));app.helper.showVerticalScroll(element, {setHeight: $(window).height() * heightPer - 3,autoExpandScrollbar: true,scrollbarPosition: 'outside'});});});</script><div style="padding-top: 30px"><style>.from-date {display: flex;flex-direction: column;width: 15%;margin-top: 5px;}.date-custom {display: flex;gap: 20px;margin-bottom: 20px;}.date-input {border-radius: 20px;padding: 5px 15px;}.dropdown-select {border-radius: 6px;padding: 5px 15px;margin-bottom: 20px;}.buttons-form {display: flex;gap: 20px;margin-top: 20px;}.btn-form {padding: 10px 20px;border-radius: 6px;background-color: #007bff;color: white;border: none;cursor: pointer;}.label-date {padding-left: 15px;}.date-range {margin-bottom: 20px;}.date-option {margin-bottom: 5px;}.ticket-form {align-items: center;}.ticket-type-form label {display: inline-block;width: 140px;}.ticket-type-form select {width: 200px;}.choice-date {display: flex;gap: 20px;}.choice-date label {font-size: 16px;}/* input[type=checkbox]:checked::after,.checkbox input[type=checkbox]:checked::after,.checkbox-inline input[type=checkbox]:checked::after {top: -2px;left: -3px;}input[type=radio],.radio input[type=radio],.radio-inline input[type=radio],input[type=checkbox],.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox] {width: 20px;height: 20px;} */table {border-collapse: collapse;width: 95%;margin-top: 20px;margin-left: 20px;margin-bottom: 50px;}th,td {border: 1px solid #ccc;text-align: center;padding: 10px;}th {background-color: #f2f2f2;}.NoBackGround {background-color: #ffffff;}</style><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("exports.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
</div><div class="container"style="margin-top:20px; background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);"><div class="form-group"><label class="control-label">Date Range:</label><br><label class="radio-inline"><input type="radio" name="dateRange" value="l MONTH" id="lastMonth"<?php if ($_smarty_tpl->tpl_vars['dateRange']->value=="l MONTH"){?>checked<?php }?>> Last Month</label><label class="radio-inline"><input type="radio" name="dateRange" value="3 MONTH" id="last3Month"<?php if ($_smarty_tpl->tpl_vars['dateRange']->value=="3 MONTH"){?>checked<?php }?>> Last 3 Months</label><label class="radio-inline"><input type="radio" name="dateRange" value="6 MONTH" id="last6Month"<?php if ($_smarty_tpl->tpl_vars['dateRange']->value=="6 MONTH"){?>checked<?php }?>> Last 6 Months</label><label class="radio-inline"><input type="radio" name="dateRange" value="1 YEAR" id="lastYear" <?php if ($_smarty_tpl->tpl_vars['dateRange']->value=="1 YEAR"){?>checked<?php }?>>Last 1 Year</label><label class="radio-inline"><input type="radio" name="dateRange" value="Custom" id="customRange"<?php if ($_smarty_tpl->tpl_vars['dateRange']->value=="Custom"){?>checked<?php }?>> Custom</label></div><div id="customDateRange" style="<?php if ($_smarty_tpl->tpl_vars['dateRange']->value!='Custom'){?> display:none; <?php }?>"><label>Select Custom Date</label><div class="date-custom"><div class="form-group from-date"><label for="fromDate">From:</label><input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['fromDate']->value;?>
" type="date" id="fromDate" name="fromDate"></div><div class="form-group from-date"><label for="toDate">To:</label><input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['toDate']->value;?>
" type="date" id="toDate" name="toDate"></div></div></div><div class="row"><div class="form-group col-sm-4"><label for="ticketType" class="control-label">Ticket Type:</label><select class="form-control select2" multiple id="ticketType" name="ticketType"><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ticketTypRow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sr_ticket_type'];?>
"<?php if (in_array(Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['data']->value['sr_ticket_type']),$_smarty_tpl->tpl_vars['ticketType']->value)){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['sr_ticket_type'];?>
</option><?php } ?></select></div><!-- Equipment Equipment Model --><div class="form-group col-sm-4"><label for="equipmentModel" class="control-label">Equipment Equipment Model:</label><select class="form-control select2" multiple id="equipmentModel" name="equipmentModel[]"><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eqipDataRow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sr_equip_model'];?>
"<?php if (in_array(Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['data']->value['sr_equip_model']),$_smarty_tpl->tpl_vars['equipmentModel']->value)){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['sr_equip_model'];?>
</option><?php } ?></select></div><!-- Warranty Warranty Status --><div class="form-group col-sm-4"><label for="warrantyStatus" class="control-label">Warranty Warranty Status:</label><select class="form-control select2" multiple id="warrantyStatus" name="warrantyStatus"><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warDataRow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sr_war_status'];?>
"<?php if (in_array(Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['data']->value['sr_war_status']),$_smarty_tpl->tpl_vars['warrantyStatus']->value)){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['sr_war_status'];?>
</option><?php } ?></select></div></div><!-- Buttons --><div class="form-group text-right"><button type="button" id="loadresults" class="btn btn-primary">View</button>&nbsp;<button type="button" class="btn btn-default" id="clearForm">Clear</button>&nbsp;</div></div></br><div id="data_table"><div style="border: 1px solid #ccc; padding: 20px; margin: 20px; background-color: #f9f9f9; font-family: Arial; border-radius: 8px;"><h5 style="margin-top: 0; color: #333;">Report Filters Summary</h5><table style="margin-bottom: 0px;"><tbody><?php if ($_smarty_tpl->tpl_vars['ticketType']->value!=''){?><tr><td colspan="12"><strong>Ticket Type :</strong> <?php echo implode(", ",$_smarty_tpl->tpl_vars['ticketType']->value);?>
</td></<tr><?php }?><?php if ($_smarty_tpl->tpl_vars['equipmentModel']->value!=''){?><tr><td colspan="12"><strong>Equipment Model:</strong> <?php echo implode(", ",$_smarty_tpl->tpl_vars['equipmentModel']->value);?>
</td></<tr><?php }?><?php if ($_smarty_tpl->tpl_vars['warrantyStatus']->value!=''){?><tr><td colspan="12"><strong>Warranty Status:</strong> <?php echo implode(", ",$_smarty_tpl->tpl_vars['warrantyStatus']->value);?>
</td></<tr><?php }?><?php if ($_smarty_tpl->tpl_vars['fromDate']->value!=''&&$_smarty_tpl->tpl_vars['toDate']->value!=''){?><tr><td colspan="12"><strong>Date Range:</strong> <?php echo Vtiger_Functions::currentUserDisplayDate($_smarty_tpl->tpl_vars['fromDate']->value);?>
 to <?php echo Vtiger_Functions::currentUserDisplayDate($_smarty_tpl->tpl_vars['toDate']->value);?>
 (<?php echo $_smarty_tpl->tpl_vars['dateRange']->value;?>
)</td></tr><?php }?><tbody></table></div><?php if (count($_smarty_tpl->tpl_vars['ticketType']->value)>0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)>0&&count($_smarty_tpl->tpl_vars['warrantyStatus']->value)>0){?><table class="tNoBackGround able table-bordered"><tbody><tr><th><b>Ticket Type</b></th><th><b>Equipment Model</b></th><th><b>Warranty Status</b></th><th><b>Total No of Tickets</b></th><th><b>No. of Open Tickets</b></th><th><b>No. of In-Progress Tickets</b></th><th><b>No. of Closed Tickets</b></th><th><b>Avg Response Time</b></th><th><b>MTTR</b></th></tr><?php  $_smarty_tpl->tpl_vars['models'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['models']->_loop = false;
 $_smarty_tpl->tpl_vars['ticket_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['models']->key => $_smarty_tpl->tpl_vars['models']->value){
$_smarty_tpl->tpl_vars['models']->_loop = true;
 $_smarty_tpl->tpl_vars['ticket_type']->value = $_smarty_tpl->tpl_vars['models']->key;
?><?php $_smarty_tpl->tpl_vars['deptRowspan'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['statuses'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statuses']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statuses']->key => $_smarty_tpl->tpl_vars['statuses']->value){
$_smarty_tpl->tpl_vars['statuses']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['deptRowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['deptRowspan']->value+count($_smarty_tpl->tpl_vars['rows']->value), null, 0);?><?php } ?><?php } ?><?php $_smarty_tpl->tpl_vars['firstDept'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['statuses'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statuses']->_loop = false;
 $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statuses']->key => $_smarty_tpl->tpl_vars['statuses']->value){
$_smarty_tpl->tpl_vars['statuses']->_loop = true;
 $_smarty_tpl->tpl_vars['model']->value = $_smarty_tpl->tpl_vars['statuses']->key;
?><?php $_smarty_tpl->tpl_vars['teamRowspan'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['teamRowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['teamRowspan']->value+count($_smarty_tpl->tpl_vars['rows']->value), null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars['firstTeam'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['records']->key;
?><?php $_smarty_tpl->tpl_vars['firstStatus'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?><tr><?php if ($_smarty_tpl->tpl_vars['firstDept']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['deptRowspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ticket_type']->value;?>
</td><?php $_smarty_tpl->tpl_vars['firstDept'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['firstTeam']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['teamRowspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</td><?php $_smarty_tpl->tpl_vars['firstTeam'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['firstStatus']->value){?><td class="NoBackGround" rowspan="<?php echo count($_smarty_tpl->tpl_vars['records']->value);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['status']->value)===null||$tmp==='' ? "-" : $tmp);?>
</td><?php $_smarty_tpl->tpl_vars['firstStatus'] = new Smarty_variable(false, null, 0);?><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['record']->value['resp_avg']);?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['record']->value['repair_avg']);?>
</td></tr><?php } ?><?php } ?><?php } ?><?php } ?></tbody></table><?php }?><?php if (count($_smarty_tpl->tpl_vars['ticketType']->value)==0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)==0&&count($_smarty_tpl->tpl_vars['warrantyStatus']->value)==0){?><table  class="tNoBackGround able table-bordered"><tbody><tr><th>Ticket Type</th><th>Equipment Model</th><th>Warranty Status</th><th>Total No of Tickets</th><th>No. of Open Tickets</th><th>No. of In-Progress Tickets</th><th>No. of Closed Tickets</th><th>Avg Response Time</th><th>MTTR</th></tr><?php  $_smarty_tpl->tpl_vars['models'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['models']->_loop = false;
 $_smarty_tpl->tpl_vars['ticket_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['models']->key => $_smarty_tpl->tpl_vars['models']->value){
$_smarty_tpl->tpl_vars['models']->_loop = true;
 $_smarty_tpl->tpl_vars['ticket_type']->value = $_smarty_tpl->tpl_vars['models']->key;
?><?php $_smarty_tpl->tpl_vars['deptRowspan'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['statuses'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statuses']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statuses']->key => $_smarty_tpl->tpl_vars['statuses']->value){
$_smarty_tpl->tpl_vars['statuses']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['deptRowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['deptRowspan']->value+count($_smarty_tpl->tpl_vars['rows']->value), null, 0);?><?php } ?><?php } ?><?php $_smarty_tpl->tpl_vars['firstDept'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['statuses'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statuses']->_loop = false;
 $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statuses']->key => $_smarty_tpl->tpl_vars['statuses']->value){
$_smarty_tpl->tpl_vars['statuses']->_loop = true;
 $_smarty_tpl->tpl_vars['model']->value = $_smarty_tpl->tpl_vars['statuses']->key;
?><?php $_smarty_tpl->tpl_vars['teamRowspan'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['teamRowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['teamRowspan']->value+count($_smarty_tpl->tpl_vars['rows']->value), null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars['firstTeam'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['records']->key;
?><?php $_smarty_tpl->tpl_vars['firstStatus'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?><tr><?php if ($_smarty_tpl->tpl_vars['firstDept']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['deptRowspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ticket_type']->value;?>
</td><?php $_smarty_tpl->tpl_vars['firstDept'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['firstTeam']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['teamRowspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</td><?php $_smarty_tpl->tpl_vars['firstTeam'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['firstStatus']->value){?><td class="NoBackGround" rowspan="<?php echo count($_smarty_tpl->tpl_vars['records']->value);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['status']->value)===null||$tmp==='' ? "-" : $tmp);?>
</td><?php $_smarty_tpl->tpl_vars['firstStatus'] = new Smarty_variable(false, null, 0);?><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['record']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['record']->value['resp_avg']);?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['record']->value['repair_avg']);?>
</td></tr><?php } ?><?php } ?><?php } ?><?php } ?></tbody></table><?php }?><?php if (count($_smarty_tpl->tpl_vars['ticketType']->value)==0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)>0&&count($_smarty_tpl->tpl_vars['warrantyStatus']->value)>0){?><table><tr><th>Equipment Model</th><th>Warranty Warranty Status</th><th>Total No of Tickets</th><th>No. of Open Tickets</th><th>No. of In-Progress Tickets</th><th>No. of Closed Tickets</th><th>Avg Response Time</th><th>MTTR</th></tr><?php  $_smarty_tpl->tpl_vars['warranties'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warranties']->_loop = false;
 $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warranties']->key => $_smarty_tpl->tpl_vars['warranties']->value){
$_smarty_tpl->tpl_vars['warranties']->_loop = true;
 $_smarty_tpl->tpl_vars['model']->value = $_smarty_tpl->tpl_vars['warranties']->key;
?><?php $_smarty_tpl->tpl_vars['modelRowspan'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warranties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value){
$_smarty_tpl->tpl_vars['entries']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['modelRowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['modelRowspan']->value+count($_smarty_tpl->tpl_vars['entries']->value), null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars['firstModelPrinted'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_smarty_tpl->tpl_vars['warranty'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['warranties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value){
$_smarty_tpl->tpl_vars['entries']->_loop = true;
 $_smarty_tpl->tpl_vars['warranty']->value = $_smarty_tpl->tpl_vars['entries']->key;
?><?php $_smarty_tpl->tpl_vars['warrantyRowspan'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['entries']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['firstWarrantyPrinted'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?><tr><?php if (!$_smarty_tpl->tpl_vars['firstModelPrinted']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['modelRowspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</td><?php $_smarty_tpl->tpl_vars['firstModelPrinted'] = new Smarty_variable(true, null, 0);?><?php }?><?php if (!$_smarty_tpl->tpl_vars['firstWarrantyPrinted']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['warrantyRowspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['warranty']->value;?>
</td><?php $_smarty_tpl->tpl_vars['firstWarrantyPrinted'] = new Smarty_variable(true, null, 0);?><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['entry']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['entry']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['entry']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['entry']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['entry']->value['resp_avg']);?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['entry']->value['repair_avg']);?>
</td></tr><?php } ?><?php } ?><?php } ?></table><?php }?><?php if (count($_smarty_tpl->tpl_vars['ticketType']->value)>0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)>0&&count($_smarty_tpl->tpl_vars['warrantyStatus']->value)==0){?><table><tbody><tr><th><b>Ticket Type</b></th><th>Equipment Model</th><th>Total No of Tickets</th><th>No. of Open Tickets</th><th>No. of In-Progress Tickets</th><th>No. of Closed Tickets</th><th>Avg Response Time</th><th>MTTR</th></tr><?php  $_smarty_tpl->tpl_vars['models'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['models']->_loop = false;
 $_smarty_tpl->tpl_vars['ticketType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['models']->key => $_smarty_tpl->tpl_vars['models']->value){
$_smarty_tpl->tpl_vars['models']->_loop = true;
 $_smarty_tpl->tpl_vars['ticketType']->value = $_smarty_tpl->tpl_vars['models']->key;
?><?php $_smarty_tpl->tpl_vars['typeRowCount'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['typeRowCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['typeRowCount']->value+count($_smarty_tpl->tpl_vars['rows']->value), null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars['firstTypeRowPrinted'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
 $_smarty_tpl->tpl_vars['model']->value = $_smarty_tpl->tpl_vars['records']->key;
?><?php $_smarty_tpl->tpl_vars['modelRowCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['records']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['firstModelRowPrinted'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><tr><?php if (!$_smarty_tpl->tpl_vars['firstTypeRowPrinted']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['typeRowCount']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ticketType']->value;?>
</td><?php $_smarty_tpl->tpl_vars['firstTypeRowPrinted'] = new Smarty_variable(true, null, 0);?><?php }?><?php if (!$_smarty_tpl->tpl_vars['firstModelRowPrinted']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['modelRowCount']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['model']->value)===null||$tmp==='' ? '-' : $tmp);?>
</td><?php $_smarty_tpl->tpl_vars['firstModelRowPrinted'] = new Smarty_variable(true, null, 0);?><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['resp_avg'],0));?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['repair_avg'],0));?>
</td></tr><?php } ?><?php } ?><?php } ?></tbody></table><?php }?><?php if (count($_smarty_tpl->tpl_vars['ticketType']->value)>0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)==0&&count($_smarty_tpl->tpl_vars['warrantyStatus']->value)>0){?><table  class="NoBackGround" border="1"><tbody><tr><th>Ticket Type</th><th>Warranty Warranty Status</th><th>Total No of Tickets</th><th>No. of Open Tickets</th><th>No. of In-Progress Tickets</th><th>No. of Closed Tickets</th><th>Avg Response Time</th><th>MTTR</th></tr><?php  $_smarty_tpl->tpl_vars['statusGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statusGroup']->_loop = false;
 $_smarty_tpl->tpl_vars['ticketType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statusGroup']->key => $_smarty_tpl->tpl_vars['statusGroup']->value){
$_smarty_tpl->tpl_vars['statusGroup']->_loop = true;
 $_smarty_tpl->tpl_vars['ticketType']->value = $_smarty_tpl->tpl_vars['statusGroup']->key;
?><?php $_smarty_tpl->tpl_vars['typeRowCount'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statusGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['typeRowCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['typeRowCount']->value+count($_smarty_tpl->tpl_vars['records']->value), null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars['firstTypeRowPrinted'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_smarty_tpl->tpl_vars['warrantyStatus'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statusGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
 $_smarty_tpl->tpl_vars['warrantyStatus']->value = $_smarty_tpl->tpl_vars['records']->key;
?><?php $_smarty_tpl->tpl_vars['statusRowCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['records']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['firstStatusRowPrinted'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><tr><?php if (!$_smarty_tpl->tpl_vars['firstTypeRowPrinted']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['typeRowCount']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ticketType']->value, ENT_QUOTES, 'UTF-8', true);?>
</td><?php $_smarty_tpl->tpl_vars['firstTypeRowPrinted'] = new Smarty_variable(true, null, 0);?><?php }?><?php if (!$_smarty_tpl->tpl_vars['firstStatusRowPrinted']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['statusRowCount']->value;?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['warrantyStatus']->value)===null||$tmp==='' ? '-' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</td><?php $_smarty_tpl->tpl_vars['firstStatusRowPrinted'] = new Smarty_variable(true, null, 0);?><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['row']->value['resp_avg']);?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat($_smarty_tpl->tpl_vars['row']->value['repair_avg']);?>
</td></tr><?php } ?><?php } ?><?php } ?></tbody></table><?php }?><?php if (count($_smarty_tpl->tpl_vars['ticketType']->value)>0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)==0&&count($_smarty_tpl->tpl_vars['warrantyStatus']->value)==0){?><table class="tNoBackGround able table-bordered" class="table table-bordered"><tbody><tr><th>Ticket Type</th><th>Total No of Tickets</th><th>No. of Open Tickets</th><th>No. of In-Progress Tickets</th><th>No. of Closed Tickets</th><th>Avg Response Time</th><th>MTTR</th></tr><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_smarty_tpl->tpl_vars['ticketType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
 $_smarty_tpl->tpl_vars['ticketType']->value = $_smarty_tpl->tpl_vars['records']->key;
?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->index++;
 $_smarty_tpl->tpl_vars['row']->first = $_smarty_tpl->tpl_vars['row']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recordloop']['first'] = $_smarty_tpl->tpl_vars['row']->first;
?><tr><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recordloop']['first']){?><td class="NoBackGround" rowspan="<?php echo count($_smarty_tpl->tpl_vars['records']->value);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ticketType']->value)===null||$tmp==='' ? '-' : $tmp);?>
</td><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['resp_avg'],0));?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['repair_avg'],0));?>
</td></tr><?php } ?><?php } ?></tbody></table><?php }?><?php if (count($_smarty_tpl->tpl_vars['ticketType']->value)==0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)>0&&count($_smarty_tpl->tpl_vars['warrantyStatus']->value)==0){?><table  class="tNoBackGround able table-bordered" class="table table-bordered"><tbody><tr><th>Equipment Model</th><th>Total No of Tickets</th><th>No. of Open Tickets</th><th>No. of In-Progress Tickets</th><th>No. of Closed Tickets</th><th>Avg Response Time</th><th>MTTR</th></tr><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
 $_smarty_tpl->tpl_vars['model']->value = $_smarty_tpl->tpl_vars['records']->key;
?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->index++;
 $_smarty_tpl->tpl_vars['row']->first = $_smarty_tpl->tpl_vars['row']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recordloop']['first'] = $_smarty_tpl->tpl_vars['row']->first;
?><tr><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recordloop']['first']){?><td class="NoBackGround" rowspan="<?php echo count($_smarty_tpl->tpl_vars['records']->value);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['model']->value)===null||$tmp==='' ? '-' : $tmp);?>
</td><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['resp_avg'],0));?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['repair_avg'],0));?>
</td></tr><?php } ?><?php } ?></tbody></table><?php }?><?php if (count($_smarty_tpl->tpl_vars['warrantyStatus']->value)>0&&count($_smarty_tpl->tpl_vars['ticketType']->value)==0&&count($_smarty_tpl->tpl_vars['equipmentModel']->value)==0){?><table  class="tNoBackGround able table-bordered" class="table table-bordered"><tbody><tr><th>Warranty Warranty Status</th><th>Total No of Tickets</th><th>No. of Open Tickets</th><th>No. of In-Progress Tickets</th><th>No. of Closed Tickets</th><th>Avg Response Time</th><th>MTTR</th></tr><?php  $_smarty_tpl->tpl_vars['records'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['records']->_loop = false;
 $_smarty_tpl->tpl_vars['warranty'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPED_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['records']->key => $_smarty_tpl->tpl_vars['records']->value){
$_smarty_tpl->tpl_vars['records']->_loop = true;
 $_smarty_tpl->tpl_vars['warranty']->value = $_smarty_tpl->tpl_vars['records']->key;
?><?php $_smarty_tpl->tpl_vars['rowspanCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['records']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['firstRowPrinted'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><tr><?php if (!$_smarty_tpl->tpl_vars['firstRowPrinted']->value){?><td class="NoBackGround" rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspanCount']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['warranty']->value)===null||$tmp==='' ? '-' : $tmp);?>
</td><?php $_smarty_tpl->tpl_vars['firstRowPrinted'] = new Smarty_variable(true, null, 0);?><?php }?><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['no_of_tickets'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['open'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['inprogress'];?>
</td><td class="NoBackGround"><?php echo $_smarty_tpl->tpl_vars['row']->value['closed'];?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['resp_avg'],0));?>
</td><td class="NoBackGround"><?php echo Vtiger_Functions::displayTimeSecondsReadbleFormat(round($_smarty_tpl->tpl_vars['row']->value['repair_avg'],0));?>
</td></tr><?php } ?><?php } ?></tbody></table><?php }?></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("foot.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<?php }} ?>