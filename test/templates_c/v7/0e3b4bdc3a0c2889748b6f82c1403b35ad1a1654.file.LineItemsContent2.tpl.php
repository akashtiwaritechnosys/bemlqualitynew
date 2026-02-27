<?php /* Smarty version Smarty-3.1.7, created on 2024-12-09 11:40:20
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Equipment/partials/LineItemsContent2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18141540876756d724580513-04646112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3b4bdc3a0c2889748b6f82c1403b35ad1a1654' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Equipment/partials/LineItemsContent2.tpl',
      1 => 1733391376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18141540876756d724580513-04646112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row_no' => 0,
    'entityIdentifier' => 0,
    'data' => 0,
    'RELATED_PRODUCTS_OTHER1' => 0,
    'hdnProductId' => 0,
    'productId' => 0,
    'LINEITEM_CUSTOM_FIELDNAMES_OTHER1' => 0,
    'LINEITEM_CUSTOM_FIELDNAME' => 0,
    'MODULE' => 0,
    'purchaseCost' => 0,
    'qty' => 0,
    'RECORD_CURRENCY_RATE' => 0,
    'CURRENCIES' => 0,
    'currency_details' => 0,
    'USER_MODEL' => 0,
    'LINEITEM_CUSTOM_FIELDS_OTHER1' => 0,
    'tabletdhiderVal' => 0,
    'LINEITEM_CUSTOM_FIELD' => 0,
    'fieldName' => 0,
    '($_smarty_tpl->tpl_vars[\'fieldName\']->value)' => 0,
    'dateFormat' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
    'picklistValuesConfigured' => 0,
    'PICKLIST_FIELD_ITEM' => 0,
    'PICKLIST_FIELDKEY' => 0,
    'PICKLIST_NAME' => 0,
    'PICKLIST_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6756d7245ceba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6756d7245ceba')) {function content_6756d7245ceba($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["deleted"] = new Smarty_variable(("deleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(("productImage").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["purchaseCost"] = new Smarty_variable(("purchaseCost").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["margin"] = new Smarty_variable(("margin").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["hdnProductId_other"] = new Smarty_variable(("hdnProductId_other").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productName_other"] = new Smarty_variable(("productName_other").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["comment"] = new Smarty_variable(("comment").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productDescription"] = new Smarty_variable(("productDescription").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qtyInStock"] = new Smarty_variable(("qtyInStock").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qty_other"] = new Smarty_variable(("qty_other").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["listPrice"] = new Smarty_variable(("listPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productTotal"] = new Smarty_variable(("productTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subproduct_ids"] = new Smarty_variable(("subproduct_ids").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subprod_names"] = new Smarty_variable(("subprod_names").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subprod_qty_list"] = new Smarty_variable(("subprod_qty_list").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityIdentifier"] = new Smarty_variable(("entityType").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityType"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['entityIdentifier']->value], null, 0);?><?php $_smarty_tpl->tpl_vars["discount_type"] = new Smarty_variable(("discount_type").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_percent"] = new Smarty_variable(("discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_percent"] = new Smarty_variable(("checked_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_percent"] = new Smarty_variable(("style_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_amount"] = new Smarty_variable(("discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_amount"] = new Smarty_variable(("checked_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_amount"] = new Smarty_variable(("style_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_zero"] = new Smarty_variable(("checked_discount_zero").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discountTotal"] = new Smarty_variable(("discountTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["totalAfterDiscount"] = new Smarty_variable(("totalAfterDiscount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["taxTotal"] = new Smarty_variable(("taxTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["netPrice"] = new Smarty_variable(("netPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["picklistValuesConfigured"] = new Smarty_variable(("picklistValuesConfigured").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["FINAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS_OTHER1']->value[1]['final_details'], null, 0);?><?php $_smarty_tpl->tpl_vars["productDeleted"] = new Smarty_variable(("productDeleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productId"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value], null, 0);?><?php $_smarty_tpl->tpl_vars["listPriceValues"] = new Smarty_variable(Products_Record_Model::getListPriceValues($_smarty_tpl->tpl_vars['productId']->value), null, 0);?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAMES_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars[$_tmp1] = new Smarty_variable(($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php } ?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='PurchaseOrder'){?><?php $_smarty_tpl->tpl_vars["listPriceValues"] = new Smarty_variable(array(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD_CURRENCY_RATE']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value]){?><?php echo (((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value])/((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value]*$_tmp2));?><?php }else{ ?><?php echo "0";?><?php }?><?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["purchaseCost"] = new Smarty_variable($_tmp3, null, 0);?><?php  $_smarty_tpl->tpl_vars['currency_details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency_details']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency_details']->key => $_smarty_tpl->tpl_vars['currency_details']->value){
$_smarty_tpl->tpl_vars['currency_details']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('listPriceValues', null, 0);
$_smarty_tpl->tpl_vars['listPriceValues']->value[$_smarty_tpl->tpl_vars['currency_details']->value['currency_id']] = $_smarty_tpl->tpl_vars['currency_details']->value['conversionrate']*$_smarty_tpl->tpl_vars['purchaseCost']->value;?><?php } ?><?php }?><input type="hidden" id="fildNamesOfCustFieldsOther1" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAMES_OTHER1']->value);?>
><?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDS_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key;
?><td <?php if ($_smarty_tpl->tpl_vars['tabletdhiderVal']->value==true){?> class="tabletdhider" <?php }?> data-td="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldname'];?>
"><?php $_smarty_tpl->tpl_vars["fieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='5'){?><div class="input-group inputElement" style="margin-bottom: 3px"><input  id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" type="text" class="dateField form-control" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="date" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo Vtiger_Functions::currentUserDisplayDate($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>  data-rule-date="true" /><span class="input-group-addon"><i class="fa fa-calendar "></i></span></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='21'||$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='2'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><textarea readonly style="pointer-events: none;background-color:#eeeeee" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" class=""><?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
</textarea></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='9'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><div class="input-group inputElement"><input type="text" data-rule-required="true" data-rule-positive=true class="form-control" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"step="any" value="<?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
"max="100"/><span class="input-group-addon">%</span></div></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='7'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><input readonly style="pointer-events: none;background-color:#eeeeee" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" value="<?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
" class="qty inputElement" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" style="min-width: 100px;"></input></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='16'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><?php if ($_smarty_tpl->tpl_vars['fieldName']->value=='masn_manu'){?><select data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield <?php if ($_smarty_tpl->tpl_vars['fieldName']->value=='masn_aggrregate'){?> disabledpicklistValue <?php }?> lineitempicklistfield" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-rownum="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-fieldtype="picklist"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['picklistValuesConfigured']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key => $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value){
$_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key;
?><option <?php if (trim(decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]))==$_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value){?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value;?>
</option><?php } ?></select><?php }else{ ?><select data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield <?php if ($_smarty_tpl->tpl_vars['fieldName']->value=='masn_aggrregate'){?> disabledpicklistValue <?php }?> lineitempicklistfield" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-rownum="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-fieldtype="picklist"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['picklistValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key => $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value){
$_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key;
?><option <?php if (trim(decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]))==$_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value){?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
</option><?php } ?></select><?php }?></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='999'){?><div id="paymentContainer" style="margin : 0px;min-width: 100px" name="paymentContainer" class="paymentOptions"><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['picklistValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><div id="payCC" class="floatBlock"><label> <input data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-rule-required="true" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"  type="radio" value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
"  <?php if (trim(decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]))==$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value){?> checked="checked" <?php }?>>&nbsp <?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</label></div><?php } ?></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='56'){?><input class="inputElement" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" style="width:15px;height:15px;" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="checkbox" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]==true){?> checked <?php }?><?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required = "true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>/><?php }?></td><?php } ?><?php }} ?>