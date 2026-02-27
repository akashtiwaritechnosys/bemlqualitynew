<?php /* Smarty version Smarty-3.1.7, created on 2023-11-30 05:54:34
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ReturnSaleOrders/partials/LineItemsContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1706946470639c546940cb34-62239763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c0def417c3148884305b4d051b7b48fb180b11a' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/ReturnSaleOrders/partials/LineItemsContent.tpl',
      1 => 1699267091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1706946470639c546940cb34-62239763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_639c546947672',
  'variables' => 
  array (
    'row_no' => 0,
    'entityIdentifier' => 0,
    'data' => 0,
    'RELATED_PRODUCTS' => 0,
    'hdnProductId' => 0,
    'LINEITEM_CUSTOM_FIELDNAMES' => 0,
    'LINEITEM_CUSTOM_FIELDNAME' => 0,
    'SUB_LINEITEM_CUSTOM_FIELDNAMES' => 0,
    'SUB2_LINEITEM_CUSTOM_FIELDNAMES' => 0,
    'productId' => 0,
    'MODULE' => 0,
    'purchaseCost' => 0,
    'qty' => 0,
    'RECORD_CURRENCY_RATE' => 0,
    'CURRENCIES' => 0,
    'currency_details' => 0,
    'IS_SERV_MANAGER' => 0,
    'cust_role' => 0,
    'office' => 0,
    'IMAGE_EDITABLE' => 0,
    'image' => 0,
    'PRODUCT_EDITABLE' => 0,
    'tax_row_no' => 0,
    'productName' => 0,
    'productDeleted' => 0,
    'igLineItemId' => 0,
    'entityType' => 0,
    'subproduct_ids' => 0,
    'subprod_names' => 0,
    'subprod_qty_list' => 0,
    'QUANTITY_EDITABLE' => 0,
    'PURCHASE_COST_EDITABLE' => 0,
    'MARGIN_EDITABLE' => 0,
    'margin' => 0,
    'COMMENT_EDITABLE' => 0,
    'comment' => 0,
    'RSO_CREATABLE_QTY' => 0,
    'USER_MODEL' => 0,
    'LINEITEM_CUSTOM_FIELDS' => 0,
    'LINEITEM_CUSTOM_FIELD' => 0,
    'SUB_LINEITEM_CUSTOM_FIELDS' => 0,
    'SUB_LINEITEM_CUSTOM_FIELD' => 0,
    'subfieldLabel' => 0,
    'SUB2_LINEITEM_CUSTOM_FIELDS' => 0,
    'SUB2_LINEITEM_CUSTOM_FIELD' => 0,
    'sub2fieldLabel' => 0,
    'fieldName' => 0,
    '($_smarty_tpl->tpl_vars[\'fieldName\']->value)' => 0,
    'dateFormat' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
    'PICKLIST_FIELDKEY' => 0,
    'dependentDopDownValuesOfActiontaken' => 0,
    'dependentDopDownValuesOfActionFRR' => 0,
    'dependentDopDownValuesOfActionFRN' => 0,
    'typeOfLineItem' => 0,
    'vendor_name' => 0,
    'vendor_name_Label' => 0,
    'FIELD_VALUE' => 0,
    'FIELD_NAME' => 0,
    'MODULE_NAME' => 0,
    'REFERENCE_LIST' => 0,
    'QUICKCREATE_RESTRICTED_MODULES' => 0,
    'FIELD_MODEL' => 0,
    'subfieldName' => 0,
    '($_smarty_tpl->tpl_vars[\'subfieldName\']->value)' => 0,
    'sub2fieldName' => 0,
    '($_smarty_tpl->tpl_vars[\'sub2fieldName\']->value)' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_639c546947672')) {function content_639c546947672($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["deleted"] = new Smarty_variable(("deleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(("productImage").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["purchaseCost"] = new Smarty_variable(("purchaseCost").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["margin"] = new Smarty_variable(("margin").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["hdnProductId"] = new Smarty_variable(("hdnProductId").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productName"] = new Smarty_variable(("productName").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["comment"] = new Smarty_variable(("comment").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productDescription"] = new Smarty_variable(("productDescription").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qtyInStock"] = new Smarty_variable(("qtyInStock").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable(("qty").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["igLineItemId"] = new Smarty_variable(("igLineItemId").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["sr_action_one"] = new Smarty_variable(("sr_action_one").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["sr_action_two"] = new Smarty_variable(("sr_action_two").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["sr_replace_action"] = new Smarty_variable(("sr_replace_action").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["listPrice"] = new Smarty_variable(("listPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productTotal"] = new Smarty_variable(("productTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subproduct_ids"] = new Smarty_variable(("subproduct_ids").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subprod_names"] = new Smarty_variable(("subprod_names").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subprod_qty_list"] = new Smarty_variable(("subprod_qty_list").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityIdentifier"] = new Smarty_variable(("entityType").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityType"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['entityIdentifier']->value], null, 0);?><?php $_smarty_tpl->tpl_vars["discount_type"] = new Smarty_variable(("discount_type").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_percent"] = new Smarty_variable(("discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_percent"] = new Smarty_variable(("checked_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_percent"] = new Smarty_variable(("style_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_amount"] = new Smarty_variable(("discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_amount"] = new Smarty_variable(("checked_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_amount"] = new Smarty_variable(("style_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_zero"] = new Smarty_variable(("checked_discount_zero").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discountTotal"] = new Smarty_variable(("discountTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["totalAfterDiscount"] = new Smarty_variable(("totalAfterDiscount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["taxTotal"] = new Smarty_variable(("taxTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["netPrice"] = new Smarty_variable(("netPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["vendor_name_Label"] = new Smarty_variable(("vendor_name_Label").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["FINAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value[1]['final_details'], null, 0);?><?php $_smarty_tpl->tpl_vars["productDeleted"] = new Smarty_variable(("productDeleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productId"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value], null, 0);?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAMES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars[$_tmp1] = new Smarty_variable(($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php } ?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDNAMES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars[$_tmp2] = new Smarty_variable(($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php } ?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDNAMES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value;?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars[$_tmp3] = new Smarty_variable(($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars["listPriceValues"] = new Smarty_variable(Products_Record_Model::getListPriceValues($_smarty_tpl->tpl_vars['productId']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='PurchaseOrder'){?><?php $_smarty_tpl->tpl_vars["listPriceValues"] = new Smarty_variable(array(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD_CURRENCY_RATE']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value]){?><?php echo (((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value])/((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value]*$_tmp4));?><?php }else{ ?><?php echo "0";?><?php }?><?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["purchaseCost"] = new Smarty_variable($_tmp5, null, 0);?><?php  $_smarty_tpl->tpl_vars['currency_details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency_details']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency_details']->key => $_smarty_tpl->tpl_vars['currency_details']->value){
$_smarty_tpl->tpl_vars['currency_details']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('listPriceValues', null, 0);
$_smarty_tpl->tpl_vars['listPriceValues']->value[$_smarty_tpl->tpl_vars['currency_details']->value['currency_id']] = $_smarty_tpl->tpl_vars['currency_details']->value['conversionrate']*$_smarty_tpl->tpl_vars['purchaseCost']->value;?><?php } ?><?php }?><td style="text-align:center;"><i class="fa fa-trash deleteRow cursorPointer" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;<a><img src="<?php echo vimage_path('drag.png');?>
" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></a><input type="hidden" class="rowNumber" value="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" /></br></br><input type="hidden" id="IS_SERV_MANAGER" class="IS_SERV_MANAGER" value="<?php echo $_smarty_tpl->tpl_vars['IS_SERV_MANAGER']->value;?>
" /><input type="hidden" id="cust_role" class="cust_role" value="<?php echo $_smarty_tpl->tpl_vars['cust_role']->value;?>
" /><input type="hidden" id="office" class="office" value="<?php echo $_smarty_tpl->tpl_vars['office']->value;?>
" /><?php if ($_smarty_tpl->tpl_vars['IS_SERV_MANAGER']->value==true){?><button class="duplicate">Duplicate</button><?php }?></td><?php if ($_smarty_tpl->tpl_vars['IMAGE_EDITABLE']->value){?><td class='lineItemImage' style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['image']->value]){?>	<img src='<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['image']->value];?>
' height="42" width="42"> <?php }?></td><?php }?><?php if ($_smarty_tpl->tpl_vars['PRODUCT_EDITABLE']->value){?><td><!-- Product Re-Ordering Feature Code Addition Starts --><input type="hidden" name="hidtax_row_no<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" id="hidtax_row_no<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax_row_no']->value;?>
"/><!-- Product Re-Ordering Feature Code Addition ends --><div class="itemNameDiv form-inline"><div class="row"><div class="col-lg-10"><div class="input-group" style="width:100%"><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value];?>
" class="productName form-control <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?> autoComplete <?php }?> " placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-rule-required=true <?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value])){?> readonly="readonly" <?php }?>><?php if (!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value]){?><?php }?><input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['igLineItemId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['igLineItemId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['igLineItemId']->value];?>
"/><input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['hdnProductId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['hdnProductId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value];?>
" class="selectedModuleId"/><input type="hidden" id="lineItemType<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="lineItemType<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['entityType']->value;?>
" class="lineItemType"/></div></div></div></div><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['subproduct_ids']->value];?>
" id="<?php echo $_smarty_tpl->tpl_vars['subproduct_ids']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['subproduct_ids']->value;?>
" class="subProductIds" /><div id="<?php echo $_smarty_tpl->tpl_vars['subprod_names']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['subprod_names']->value;?>
" class="subInformation"><span class="subProductsContainer"><?php  $_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['SUB_PRODUCT_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['subprod_qty_list']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->key => $_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->value){
$_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['SUB_PRODUCT_ID']->value = $_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->key;
?><?php } ?></span></div><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value]){?><div class="row-fluid deletedItem redColor"><?php if (empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value])){?><?php echo vtranslate('LBL_THIS_LINE_ITEM_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_THIS_LINE_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_THIS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['entityType']->value;?>
 <?php echo vtranslate('LBL_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_OR_REPLACE_THIS_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div><?php }?></td><?php }?><td><input readonly style="background-color:#eeeeee!important" id="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" type="text" class="qty smallInputBox inputElement"data-rule-required=true data-rule-positive=true data-rule-greater_than_zero=true value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value])){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value];?>
<?php }else{ ?>1<?php }?>"<?php if ($_smarty_tpl->tpl_vars['QUANTITY_EDITABLE']->value==false){?> readonly=readonly <?php }?> /><?php if ($_smarty_tpl->tpl_vars['PURCHASE_COST_EDITABLE']->value==false&&$_smarty_tpl->tpl_vars['MODULE']->value!='PurchaseOrder'){?><input id="<?php echo $_smarty_tpl->tpl_vars['purchaseCost']->value;?>
" type="hidden" value="<?php if (((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value])){?><?php echo ((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value])/((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value]);?>
<?php }else{ ?>0<?php }?>" /><span style="display:none" class="purchaseCost">0</span><input name="<?php echo $_smarty_tpl->tpl_vars['purchaseCost']->value;?>
" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value];?>
<?php }else{ ?>0<?php }?>" /><?php }?><?php if ($_smarty_tpl->tpl_vars['MARGIN_EDITABLE']->value==false){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['margin']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value];?>
<?php }else{ ?>0<?php }?>"></span><span class="margin pull-right" style="display:none"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value];?>
<?php }else{ ?>0<?php }?></span><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['COMMENT_EDITABLE']->value){?><div><textarea readonly style="background-color:#eeeeee!important" id="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" class="lineItemCommentBox"><?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comment']->value]);?>
</textarea></div><?php }?></td><input type="hidden" id="RSO_CREATABLE_QTY" value=<?php echo $_smarty_tpl->tpl_vars['RSO_CREATABLE_QTY']->value;?>
><input type="hidden" id="fildNamesOfCustFields" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAMES']->value);?>
><input type="hidden" id="fildNamesOfCustFieldsSub1" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDNAMES']->value);?>
><input type="hidden" id="fildNamesOfCustFieldsSub2" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDNAMES']->value);?>
><?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key;
?><td a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
"><?php $_smarty_tpl->tpl_vars["fieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel']=='Present Status'){?><?php  $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->key;
?><?php $_smarty_tpl->tpl_vars["subfieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php $_smarty_tpl->tpl_vars["subfieldLabel"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->value['fieldlabel'], null, 0);?><table><tr><td><label style="white-space: nowrap;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['subfieldLabel']->value;?>
</label></td></tr></table><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel']=='Action Taken by DSM'){?><?php  $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->key;
?><?php $_smarty_tpl->tpl_vars["sub2fieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php $_smarty_tpl->tpl_vars["sub2fieldLabel"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->value['fieldlabel'], null, 0);?><table><tr><td><label style="white-space: nowrap;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['sub2fieldLabel']->value;?>
</label></td></tr></table><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='5'){?><div <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?> class="input-group inputElement" style="margin-bottom: 3px"><input <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly <?php }?> id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" type="text" class="dateField form-control" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="date" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo Vtiger_Functions::IGcurrentUserDisplayDate($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>  data-rule-date="true" /><span class="input-group-addon"><i class="fa fa-calendar "></i></span></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='21'||$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='2'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?> ><textarea <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly style="pointer-events: none;background-color:#eeeeee" <?php }?> id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" class=""><?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
</textarea></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='7'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><input id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
"type="number"<?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly style="pointer-events: none;background-color:#eeeeee;min-width: 100px;" <?php }else{ ?> style="min-width: 100px;"<?php }?><?php if ($_smarty_tpl->tpl_vars['fieldName']->value=='sto_qty'){?>class="inputElement <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value];?>
"<?php }else{ ?>class="inputElement <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['fieldName']->value=='sto_no'){?> data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value["validator"]);?>
' <?php }?>data-rule-positive=true /></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='16'){?><?php if ($_smarty_tpl->tpl_vars['fieldName']->value!='action_taken_by_sm'&&$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel']!='Present Status'&&$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel']!='Action Taken by DSM'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><select <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly style="pointer-events: none;background-color:#eeeeee;min-width: 100px;" <?php }?>data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
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
</option><?php } ?></select></div><?php }elseif($_smarty_tpl->tpl_vars['fieldName']->value=='action_taken_by_sm'){?><?php ob_start();?><?php echo Vtiger_Functions::getDropDownValuesOfDependentField($_smarty_tpl->tpl_vars['data']->value[('validated_part_no').($_smarty_tpl->tpl_vars['row_no']->value)]);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["dependentDopDownValuesOfActiontaken"] = new Smarty_variable($_tmp6, null, 0);?><?php if ($_smarty_tpl->tpl_vars['dependentDopDownValuesOfActiontaken']->value=='FRR'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><select <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly style="pointer-events: none;background-color:#eeeeee;min-width: 100px;" <?php }?>data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-fieldtype="picklist"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dependentDopDownValuesOfActionFRR']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key => $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value){
$_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key;
?><option <?php if (trim(decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]))==$_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value){?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
</option><?php } ?></select></div><?php }elseif($_smarty_tpl->tpl_vars['dependentDopDownValuesOfActiontaken']->value=='FRN'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><select <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly style="pointer-events: none;background-color:#eeeeee;min-width: 100px;" <?php }?>data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-fieldtype="picklist"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dependentDopDownValuesOfActionFRN']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key => $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value){
$_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key;
?><option <?php if (trim(decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]))==$_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value){?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
</option><?php } ?></select></div><?php }elseif($_smarty_tpl->tpl_vars['typeOfLineItem']->value=='FRR'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><select <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly style="pointer-events: none;background-color:#eeeeee;min-width: 100px;" <?php }?>data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-fieldtype="picklist"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dependentDopDownValuesOfActionFRR']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key => $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value){
$_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key;
?><option <?php if (trim(decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]))==$_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value){?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
</option><?php } ?></select></div><?php }elseif($_smarty_tpl->tpl_vars['typeOfLineItem']->value=='FRN'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><select <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['editable']==0){?> readonly style="pointer-events: none;background-color:#eeeeee;min-width: 100px;" <?php }?>data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
"class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield <?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-extraname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-fieldtype="picklist"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dependentDopDownValuesOfActionFRN']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key => $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->value){
$_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ITEM']->key;
?><option <?php if (trim(decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]))==$_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value){?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELDKEY']->value;?>
</option><?php } ?></select></div><?php }?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='56'){?><input class="inputElement" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" style="width:15px;height:15px;" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="checkbox" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]==true){?> checked <?php }?><?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required = "true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>/><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='10'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><div class="referencefield-wrapper"><input name="popupReferenceModule" type="hidden" value="Vendors"/><div class="input-group"><input name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" type="hidden" value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['vendor_name']->value])){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['vendor_name']->value];?>
<?php }?>" class="sourceField" data-displayvalue='' /><input id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
_display" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="reference" type="text"class="marginLeftZero autoComplete2 inputElement" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['vendor_name']->value])){?> readonly value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['vendor_name_Label']->value];?>
" <?php }?>placeholder="Type to Search..."/><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['vendor_name_Label']->value], null, 0);?><a href="#" class="clearReferenceSelection <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==0){?>hide<?php }?>"> x </a><span class="input-group-addon relatedPopup cursorPointer" title="<?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fa fa-search"></i></span><?php if ((($_REQUEST['view']=='Edit')||($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Webforms'))&&!in_array($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0],$_smarty_tpl->tpl_vars['QUICKCREATE_RESTRICTED_MODULES']->value)){?><span class="input-group-addon createReferenceRecord cursorPointer clearfix" title="<?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_create" class="fa fa-plus"></i></span><?php }?></div></div></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='69'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><input type="file" class="inputElement <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'||$_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'||$_smarty_tpl->tpl_vars['MODULE']->value=='ServiceReports'){?>multi max-6<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')&&$_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> ignore-validation <?php }?>"name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
[]"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
" <?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?> /></div><?php }?></td><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel']=='Present Status'&&count($_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDS']->value)>0){?><td a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
"><?php  $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->key;
?><?php $_smarty_tpl->tpl_vars["subfieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php $_smarty_tpl->tpl_vars["subfieldLabel"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB_LINEITEM_CUSTOM_FIELD']->value['fieldlabel'], null, 0);?><table><tr><td><div id="<?php echo $_smarty_tpl->tpl_vars['subfieldName']->value;?>
DivCla"><input id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['subfieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['subfieldName']->value)]->value;?>
" <?php ob_start();?><?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['subfieldName']->value)]->value]);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7){?>value="<?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['subfieldName']->value)]->value]);?>
"<?php }else{ ?>value=0<?php }?> data-extraname="<?php echo $_smarty_tpl->tpl_vars['subfieldName']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['subfieldName']->value;?>
 b_qty smallInputBox inputElement" style="margin-top:3px;" type="text" data-rule-positive="true"></div></td></tr></table><?php } ?></td><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel']=='Action Taken by DSM'&&count($_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDS']->value)>0){?><td a="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'];?>
"><?php  $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->key;
?><?php $_smarty_tpl->tpl_vars["sub2fieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php $_smarty_tpl->tpl_vars["sub2fieldLabel"] = new Smarty_variable($_smarty_tpl->tpl_vars['SUB2_LINEITEM_CUSTOM_FIELD']->value['fieldlabel'], null, 0);?><table><tr><td><div id="<?php echo $_smarty_tpl->tpl_vars['sub2fieldName']->value;?>
DivCla"><input id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['sub2fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['sub2fieldName']->value)]->value;?>
" <?php ob_start();?><?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['sub2fieldName']->value)]->value]);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8){?>value="<?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['sub2fieldName']->value)]->value]);?>
"<?php }else{ ?>value=0<?php }?>  data-extraname="<?php echo $_smarty_tpl->tpl_vars['sub2fieldName']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['sub2fieldName']->value;?>
 a_qty smallInputBox inputElement" style="margin-top:3px;" type="text" data-rule-positive="true"></div></td></tr></table><?php } ?></td><?php }?><?php } ?><?php }} ?>