<?php /* Smarty version Smarty-3.1.7, created on 2023-11-06 11:57:59
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/StatusUnderContractEquipmentDetailed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:768351005653a54a7ddf004-31040319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de11d7c95c6a90c2bfdcbfc170ce0b39ec321277' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Leads/StatusUnderContractEquipmentDetailed.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '768351005653a54a7ddf004-31040319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_653a54a7e17ed',
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'headers' => 0,
    'INNER_VALUE1' => 0,
    'ResultArray' => 0,
    'NAME_FIELD1' => 0,
    'INNER_VALUE' => 0,
    'ResultArrayRemm' => 0,
    'REPORT_LABEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_653a54a7e17ed')) {function content_653a54a7e17ed($_smarty_tpl) {?><div style="padding: 40px"><style>table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td,th {border: 1px solid #dddddd;text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #ffffff;}.NoBackGround {background-color: #ffffff;}</style><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("exports.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<table id="data_table"><tr><?php  $_smarty_tpl->tpl_vars['INNER_VALUE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE1']->key => $_smarty_tpl->tpl_vars['INNER_VALUE1']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE1']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY1']->value = $_smarty_tpl->tpl_vars['INNER_VALUE1']->key;
?><th rowspan="1" class="NoBackGround" class="NoBackGround"><b style="font-weight: 900"><?php echo vtranslate($_smarty_tpl->tpl_vars['INNER_VALUE1']->value,'Leads');?>
</b></th><?php } ?></tr><?php  $_smarty_tpl->tpl_vars['NAME_FIELD1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD1']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResultArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD1']->key => $_smarty_tpl->tpl_vars['NAME_FIELD1']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD1']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FIELD']->value = $_smarty_tpl->tpl_vars['NAME_FIELD1']->key;
?><tr><?php  $_smarty_tpl->tpl_vars['INNER_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['NAME_FIELD1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE']->key => $_smarty_tpl->tpl_vars['INNER_VALUE']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY']->value = $_smarty_tpl->tpl_vars['INNER_VALUE']->key;
?><?php if ($_smarty_tpl->tpl_vars['INNER_VALUE']->value=='0'){?><th rowspan="1" class="NoBackGround" class="NoBackGround"></th><?php }else{ ?><th rowspan="1" class="NoBackGround" class="NoBackGround"><a><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE']->value;?>
</a></th><?php }?><?php } ?></tr><?php } ?><tr><th class="NoBackGround" colspan="<?php echo (count($_smarty_tpl->tpl_vars['headers']->value));?>
"><b style="font-weight: 900">RECOMMISSIONING DETAILS</b></th></tr><?php  $_smarty_tpl->tpl_vars['NAME_FIELD1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD1']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResultArrayRemm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD1']->key => $_smarty_tpl->tpl_vars['NAME_FIELD1']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD1']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FIELD']->value = $_smarty_tpl->tpl_vars['NAME_FIELD1']->key;
?><tr><?php  $_smarty_tpl->tpl_vars['INNER_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['INNER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['NAME_FIELD1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['INNER_VALUE']->key => $_smarty_tpl->tpl_vars['INNER_VALUE']->value){
$_smarty_tpl->tpl_vars['INNER_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['INNER_KEY']->value = $_smarty_tpl->tpl_vars['INNER_VALUE']->key;
?><?php if ($_smarty_tpl->tpl_vars['INNER_VALUE']->value=='0'){?><th rowspan="1" class="NoBackGround" class="NoBackGround"></th><?php }else{ ?><th rowspan="1" class="NoBackGround" class="NoBackGround"><a><?php echo $_smarty_tpl->tpl_vars['INNER_VALUE']->value;?>
</a></th><?php }?><?php } ?></tr><?php } ?></table></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("foot.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<script type="text/javascript" src="libraries/assets/xlsx.full.min.js"></script><script>function ExportToExcel(type, fn, dl) {var elt = document.getElementById('data_table');var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });return dl ?XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :XLSX.writeFile(wb, fn || ('<?php echo $_smarty_tpl->tpl_vars['REPORT_LABEL']->value;?>
.' + (type || 'xlsx')));}</script><?php }} ?>