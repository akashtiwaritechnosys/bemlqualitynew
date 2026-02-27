<?php /* Smarty version Smarty-3.1.7, created on 2024-11-29 10:36:24
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/partials/LineItemsContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16277883636576f5cf5aaa61-16498303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98eb1b59c010e0bda8836ebfa66099568d573d42' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/ServiceReports/partials/LineItemsContent.tpl',
      1 => 1715174692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16277883636576f5cf5aaa61-16498303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6576f5cf6034e',
  'variables' => 
  array (
    'row_no' => 0,
    'entityIdentifier' => 0,
    'data' => 0,
    'RELATED_PRODUCTS' => 0,
    'hdnProductId' => 0,
    'LINEITEM_CUSTOM_FIELDNAMES' => 0,
    'LINEITEM_CUSTOM_FIELDNAME' => 0,
    'productId' => 0,
    'MODULE' => 0,
    'purchaseCost' => 0,
    'qty' => 0,
    'RECORD_CURRENCY_RATE' => 0,
    'CURRENCIES' => 0,
    'currency_details' => 0,
    'IMAGE_EDITABLE' => 0,
    'image' => 0,
    'PRODUCT_EDITABLE' => 0,
    'tax_row_no' => 0,
    'productName' => 0,
    'productDeleted' => 0,
    'entityType' => 0,
    'PRODUCT_ACTIVE' => 0,
    'SERVICE_ACTIVE' => 0,
    'subproduct_ids' => 0,
    'subprod_names' => 0,
    'subprod_qty_list' => 0,
    'SUB_PRODUCT_INFO' => 0,
    'SUB_PRODUCT_ID' => 0,
    'COMMENT_EDITABLE' => 0,
    'comment' => 0,
    'REPORTTYPE' => 0,
    'PURCHASE_COST_EDITABLE' => 0,
    'MARGIN_EDITABLE' => 0,
    'margin' => 0,
    'USER_MODEL' => 0,
    'LINEITEM_CUSTOM_FIELDS' => 0,
    'LINEITEM_CUSTOM_FIELD' => 0,
    'fieldName' => 0,
    '($_smarty_tpl->tpl_vars[\'fieldName\']->value)' => 0,
    'dateFormat' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
    'PICKLIST_FIELDKEY' => 0,
    'line_vendor_id' => 0,
    'FIELD_VALUE' => 0,
    'FIELD_NAME' => 0,
    'MODULE_NAME' => 0,
    'REFERENCE_LIST' => 0,
    'QUICKCREATE_RESTRICTED_MODULES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6576f5cf6034e')) {function content_6576f5cf6034e($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["deleted"] = new Smarty_variable(("deleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(("productImage").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["purchaseCost"] = new Smarty_variable(("purchaseCost").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["margin"] = new Smarty_variable(("margin").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["hdnProductId"] = new Smarty_variable(("hdnProductId").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productName"] = new Smarty_variable(("productName").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["comment"] = new Smarty_variable(("comment").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productDescription"] = new Smarty_variable(("productDescription").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qtyInStock"] = new Smarty_variable(("qtyInStock").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable(("qty").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["listPrice"] = new Smarty_variable(("listPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productTotal"] = new Smarty_variable(("productTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subproduct_ids"] = new Smarty_variable(("subproduct_ids").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subprod_names"] = new Smarty_variable(("subprod_names").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subprod_qty_list"] = new Smarty_variable(("subprod_qty_list").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityIdentifier"] = new Smarty_variable(("entityType").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityType"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['entityIdentifier']->value], null, 0);?><?php $_smarty_tpl->tpl_vars["discount_type"] = new Smarty_variable(("discount_type").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_percent"] = new Smarty_variable(("discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_percent"] = new Smarty_variable(("checked_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_percent"] = new Smarty_variable(("style_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_amount"] = new Smarty_variable(("discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_amount"] = new Smarty_variable(("checked_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_amount"] = new Smarty_variable(("style_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_zero"] = new Smarty_variable(("checked_discount_zero").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discountTotal"] = new Smarty_variable(("discountTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["totalAfterDiscount"] = new Smarty_variable(("totalAfterDiscount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["taxTotal"] = new Smarty_variable(("taxTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["netPrice"] = new Smarty_variable(("netPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["FINAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value[1]['final_details'], null, 0);?><?php $_smarty_tpl->tpl_vars["productDeleted"] = new Smarty_variable(("productDeleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productId"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value], null, 0);?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAMES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars[$_tmp1] = new Smarty_variable(($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDNAME']->value).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars["listPriceValues"] = new Smarty_variable(Products_Record_Model::getListPriceValues($_smarty_tpl->tpl_vars['productId']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='PurchaseOrder'){?><?php $_smarty_tpl->tpl_vars["listPriceValues"] = new Smarty_variable(array(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD_CURRENCY_RATE']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value]){?><?php echo (((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value])/((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value]*$_tmp2));?><?php }else{ ?><?php echo "0";?><?php }?><?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["purchaseCost"] = new Smarty_variable($_tmp3, null, 0);?><?php  $_smarty_tpl->tpl_vars['currency_details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency_details']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency_details']->key => $_smarty_tpl->tpl_vars['currency_details']->value){
$_smarty_tpl->tpl_vars['currency_details']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('listPriceValues', null, 0);
$_smarty_tpl->tpl_vars['listPriceValues']->value[$_smarty_tpl->tpl_vars['currency_details']->value['currency_id']] = $_smarty_tpl->tpl_vars['currency_details']->value['conversionrate']*$_smarty_tpl->tpl_vars['purchaseCost']->value;?><?php } ?><?php }?><td style="text-align:center;"><i class="fa fa-trash deleteRow cursorPointer" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;<a><img src="<?php echo vimage_path('drag.png');?>
" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></a><input type="hidden" class="rowNumber" value="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" /></td><?php if ($_smarty_tpl->tpl_vars['IMAGE_EDITABLE']->value){?><td class='lineItemImage' style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['image']->value]){?>	<img src='<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['image']->value];?>
' height="42" width="42"> <?php }?></td><?php }?><?php if ($_smarty_tpl->tpl_vars['PRODUCT_EDITABLE']->value){?><td><!-- Product Re-Ordering Feature Code Addition Starts --><input type="hidden" name="hidtax_row_no<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" id="hidtax_row_no<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax_row_no']->value;?>
"/><!-- Product Re-Ordering Feature Code Addition ends --><div class="itemNameDiv form-inline"><div class="row"><div class="col-lg-10"><div class="input-group" style="width:100%"><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value];?>
" class="productName form-control <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?> autoComplete <?php }?> " placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value])){?> disabled="disabled" <?php }?>><?php if (!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value]){?><span class="input-group-addon cursorPointer clearLineItem" title="<?php echo vtranslate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-times-circle"></i></span><?php }?><input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['hdnProductId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['hdnProductId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value];?>
" class="selectedModuleId"/><input type="hidden" id="lineItemType<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="lineItemType<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['entityType']->value;?>
" class="lineItemType"/><div class="col-lg-2"><?php if ($_smarty_tpl->tpl_vars['row_no']->value==0){?><span class="lineItemPopup cursorPointer" data-popup="ServicesPopup" title="<?php echo vtranslate('Services',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Services" data-field-name="serviceid"><?php echo Vtiger_Module_Model::getModuleIconPath('Services');?>
</span><span class="lineItemPopup cursorPointer" data-popup="ProductsPopup" title="<?php echo vtranslate('Products',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Products" data-field-name="productid"><?php echo Vtiger_Module_Model::getModuleIconPath('Products');?>
</span><?php }elseif($_smarty_tpl->tpl_vars['entityType']->value==''&&$_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value=='true'){?><span class="lineItemPopup cursorPointer" data-popup="ProductsPopup" title="<?php echo vtranslate('Products',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Products" data-field-name="productid"><?php echo Vtiger_Module_Model::getModuleIconPath('Products');?>
</span><?php }elseif($_smarty_tpl->tpl_vars['entityType']->value==''&&$_smarty_tpl->tpl_vars['SERVICE_ACTIVE']->value=='true'){?><span class="lineItemPopup cursorPointer" data-popup="ServicesPopup" title="<?php echo vtranslate('Services',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Services" data-field-name="serviceid"><?php echo Vtiger_Module_Model::getModuleIconPath('Services');?>
</span><?php }else{ ?><?php if (($_smarty_tpl->tpl_vars['entityType']->value=='Services')&&(!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value])){?><span class="lineItemPopup cursorPointer" data-popup="ServicesPopup" title="<?php echo vtranslate('Services',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Services" data-field-name="serviceid"><?php echo Vtiger_Module_Model::getModuleIconPath('Services');?>
</span><?php }elseif((!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value])){?><span class="lineItemPopup cursorPointer" data-popup="ProductsPopup" title="<?php echo vtranslate('Products',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Products" data-field-name="productid"><?php echo Vtiger_Module_Model::getModuleIconPath('Products');?>
</span><?php }?><?php }?></div></div></div></div></div><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['subproduct_ids']->value];?>
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
?><em> - <?php echo $_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->value['qty'];?>
)<?php if ($_smarty_tpl->tpl_vars['SUB_PRODUCT_INFO']->value['qty']>getProductQtyInStock($_smarty_tpl->tpl_vars['SUB_PRODUCT_ID']->value)){?>&nbsp;-&nbsp;<span class="redColor"><?php echo vtranslate('LBL_STOCK_NOT_ENOUGH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><?php }?></em><br><?php } ?></span></div><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value]){?><div class="row-fluid deletedItem redColor"><?php if (empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value])){?><?php echo vtranslate('Manualy Added Part Number',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_THIS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['entityType']->value;?>
 <?php echo vtranslate('Manualy Added Part Number',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['COMMENT_EDITABLE']->value){?><div><textarea readonly style="pointer-events: none;background-color:#eeeeee" id="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" class="lineItemCommentBox"><?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comment']->value]);?>
</textarea></div><?php }?></td><?php }?><?php if ($_smarty_tpl->tpl_vars['REPORTTYPE']->value!='INSPECTION OF REJECTED SPARES'){?><td><input id="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" type="text" class="qty smallInputBox inputElement"data-rule-required=true data-rule-positive=true data-rule-greater_than_zero=true value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value])){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value];?>
<?php }else{ ?>1<?php }?>"/><?php if ($_smarty_tpl->tpl_vars['PURCHASE_COST_EDITABLE']->value==false&&$_smarty_tpl->tpl_vars['MODULE']->value!='PurchaseOrder'){?><input id="<?php echo $_smarty_tpl->tpl_vars['purchaseCost']->value;?>
" type="hidden" value="<?php if (((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value])){?><?php echo ((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value])/((float)$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value]);?>
<?php }else{ ?>0<?php }?>" /><span style="display:none" class="purchaseCost">0</span><input name="<?php echo $_smarty_tpl->tpl_vars['purchaseCost']->value;?>
" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['purchaseCost']->value];?>
<?php }else{ ?>0<?php }?>" /><?php }?><?php if ($_smarty_tpl->tpl_vars['MARGIN_EDITABLE']->value==false){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['margin']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value];?>
<?php }else{ ?>0<?php }?>"></span><span class="margin pull-right" style="display:none"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['margin']->value];?>
<?php }else{ ?>0<?php }?></span><?php }?></td><?php }?><?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key;
?><td><?php $_smarty_tpl->tpl_vars["fieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='5'){?><div class="input-group inputElement" style="margin-bottom: 3px"><input  id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" type="text" class="dateField form-control" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="date" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo Vtiger_Functions::currentUserDisplayDate($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>  data-rule-date="true" /><span class="input-group-addon"><i data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" class="fa fa-calendar"></i></span></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='21'||$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='2'){?><div><textarea id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" class=""><?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
</textarea></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='7'){?><div><input id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" value="<?php echo decode_html($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]);?>
" class="qty inputElement" style="min-width: 100px;" type="number" data-rule-required=true data-rule-positive=true data-rule-greater_than_zero=true /></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='16'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><select data-rule-required=true style="min-width: 150px;" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" class="select2-container <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?>select2<?php }?> inputElement picklistfield" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
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
</option><?php } ?></select></div><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='56'){?><input class="inputElement" id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" style="width:15px;height:15px;" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="checkbox" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value]==true){?> checked <?php }?><?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required = "true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>/><?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='10'){?><div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
DivCla" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['hideInitialDisplay']=='true'){?> class="hide" <?php }?>><div class="referencefield-wrapper"><input name="popupReferenceModule" type="hidden" value="Vendors"/><div class="input-group"><input name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" type="hidden" value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['line_vendor_id']->value])){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['line_vendor_id']->value];?>
<?php }?>" class="sourceField" data-displayvalue='' /><input id="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
_display" data-fieldname="<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['fieldName']->value)]->value;?>
" data-fieldtype="reference" type="text"class="marginLeftZero autoComplete2 inputElement"value=""placeholder="Type to Search..."/><a href="#" class="clearReferenceSelection <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==0){?>hide<?php }?>"> x </a><span class="input-group-addon relatedPopup cursorPointer" title="<?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fa fa-search"></i></span><?php if ((($_REQUEST['view']=='Edit')||($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Webforms'))&&!in_array($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0],$_smarty_tpl->tpl_vars['QUICKCREATE_RESTRICTED_MODULES']->value)){?><span class="input-group-addon createReferenceRecord cursorPointer clearfix" title="<?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_create" class="fa fa-plus"></i></span><?php }?></div></div></div><?php }?></td><?php } ?><?php }} ?>