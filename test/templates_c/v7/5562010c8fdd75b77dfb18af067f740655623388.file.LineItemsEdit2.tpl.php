<?php /* Smarty version Smarty-3.1.7, created on 2025-01-10 07:48:43
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/ServiceReports/partials/LineItemsEdit2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5753437746780d0db935485-45892161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5562010c8fdd75b77dfb18af067f740655623388' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/ServiceReports/partials/LineItemsEdit2.tpl',
      1 => 1733391377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5753437746780d0db935485-45892161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LINEITEM_CUSTOM_FIELDS_OTHER1' => 0,
    'LINEITEM_CUSTOM_FIELD' => 0,
    'fieldNameStyle' => 0,
    'RECORD_STRUCTURE' => 0,
    'LINEITEM_FIELDS' => 0,
    'IMAGE_EDITABLE' => 0,
    'COL_SPAN1' => 0,
    'PRODUCT_EDITABLE' => 0,
    'QUANTITY_EDITABLE' => 0,
    'SERVICEREPORTTYPE' => 0,
    'REPORTTYPE' => 0,
    'PURCHASE_COST_EDITABLE' => 0,
    'COL_SPAN2' => 0,
    'LIST_PRICE_EDITABLE' => 0,
    'MARGIN_EDITABLE' => 0,
    'COL_SPAN3' => 0,
    'RELATED_PRODUCTS_OTHER1' => 0,
    'TAX_TYPE' => 0,
    'USER_MODEL' => 0,
    'row_no' => 0,
    'LINEITEM_CUSTOM_OTHER_PICK_FIELDS' => 0,
    'LINE_ITEM_BLOCK_LABEL' => 0,
    'BLOCK_FIELDS' => 0,
    'ITEMBLOCKNAMEANOTHER' => 0,
    'MODULE' => 0,
    'QUANTITY_VIEWABLE' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6780d0db9b72e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6780d0db9b72e')) {function content_6780d0db9b72e($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDS_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars["fieldNameStyle"] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='16'){?><style>#s2id_<?php echo $_smarty_tpl->tpl_vars['fieldNameStyle']->value;?>
0 {display : none;}</style><?php }?><?php } ?><?php $_smarty_tpl->tpl_vars['LINEITEM_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ITEM_DETAILS'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['image']){?><?php $_smarty_tpl->tpl_vars['IMAGE_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['image']->isEditable(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['IMAGE_EDITABLE']->value){?><?php $_smarty_tpl->tpl_vars['COL_SPAN1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN1']->value)+1, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['productid']){?><?php $_smarty_tpl->tpl_vars['PRODUCT_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['productid']->isEditable(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['PRODUCT_EDITABLE']->value){?><?php $_smarty_tpl->tpl_vars['COL_SPAN1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN1']->value)+1, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['quantity']){?><?php $_smarty_tpl->tpl_vars['QUANTITY_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['quantity']->isEditable(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['QUANTITY_EDITABLE']->value){?><?php $_smarty_tpl->tpl_vars['COL_SPAN1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN1']->value)+1, null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['QUANTITY_VIEWABLE'] = new Smarty_variable(true, null, 0);?><?php if ($_smarty_tpl->tpl_vars['SERVICEREPORTTYPE']->value=='PRE-DELIVERY'||$_smarty_tpl->tpl_vars['SERVICEREPORTTYPE']->value=='ERECTION AND COMMISSIONING'){?><?php $_smarty_tpl->tpl_vars['PRODUCT_EDITABLE'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['COL_SPAN1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN1']->value)-1, null, 0);?><?php $_smarty_tpl->tpl_vars['QUANTITY_VIEWABLE'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['COL_SPAN1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN1']->value)-1, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['REPORTTYPE']->value=='WARRANTY CLAIM FOR SUB ASSEMBLY / OTHER SPARE PARTS'){?><?php $_smarty_tpl->tpl_vars['QUANTITY_VIEWABLE'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['COL_SPAN1'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN1']->value)-1, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['purchase_cost']){?><?php $_smarty_tpl->tpl_vars['PURCHASE_COST_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['purchase_cost']->isEditable(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['PURCHASE_COST_EDITABLE']->value){?><?php $_smarty_tpl->tpl_vars['COL_SPAN2'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN2']->value)+1, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['listprice']){?><?php $_smarty_tpl->tpl_vars['LIST_PRICE_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['listprice']->isEditable(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['LIST_PRICE_EDITABLE']->value){?><?php $_smarty_tpl->tpl_vars['COL_SPAN2'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN2']->value)+1, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['margin']){?><?php $_smarty_tpl->tpl_vars['MARGIN_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['margin']->isEditable(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MARGIN_EDITABLE']->value){?><?php $_smarty_tpl->tpl_vars['COL_SPAN3'] = new Smarty_variable(($_smarty_tpl->tpl_vars['COL_SPAN3']->value)+1, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['comment']){?><?php $_smarty_tpl->tpl_vars['COMMENT_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['comment']->isEditable(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['discount_amount']){?><?php $_smarty_tpl->tpl_vars['ITEM_DISCOUNT_AMOUNT_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['discount_amount']->isEditable(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['discount_percent']){?><?php $_smarty_tpl->tpl_vars['ITEM_DISCOUNT_PERCENT_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['discount_percent']->isEditable(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['hdnS_H_Percent']){?><?php $_smarty_tpl->tpl_vars['SH_PERCENT_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['hdnS_H_Percent']->isEditable(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['hdnDiscountAmount']){?><?php $_smarty_tpl->tpl_vars['DISCOUNT_AMOUNT_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['hdnDiscountAmount']->isEditable(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['hdnDiscountPercent']){?><?php $_smarty_tpl->tpl_vars['DISCOUNT_PERCENT_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['hdnDiscountPercent']->isEditable(), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars["FINAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS_OTHER1']->value[1]['final_details'], null, 0);?><?php $_smarty_tpl->tpl_vars["IS_INDIVIDUAL_TAX_TYPE"] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars["IS_GROUP_TAX_TYPE"] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['TAX_TYPE']->value=='individual'){?><?php $_smarty_tpl->tpl_vars["IS_GROUP_TAX_TYPE"] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars["IS_INDIVIDUAL_TAX_TYPE"] = new Smarty_variable(true, null, 0);?><?php }?><input type="hidden" class="numberOfCurrencyDecimal" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('no_of_currency_decimals');?>
" /><input type="hidden" name="totalProductCount2" id="totalProductCount2" value="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" /><input type="hidden" name="subtotal" id="subtotal" value="" /><input type="hidden" name="total" id="total" value="" /><input type="hidden" disabled="disabled" id="fildNamesOfCustPickFieldsInfoOther" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_OTHER_PICK_FIELDS']->value);?>
><table id="lastPeriodialTable" class="table table-bordered fieldBlockContainer hide"><tbody></tbody></table><div name='editContent'><?php $_smarty_tpl->tpl_vars['LINE_ITEM_BLOCK_LABEL'] = new Smarty_variable("LBL_ITEM_DETAILS", null, 0);?><?php $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value[$_smarty_tpl->tpl_vars['LINE_ITEM_BLOCK_LABEL']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['ITEMBLOCKNAMEANOTHER'] = new Smarty_variable('Major_Aggregates_Sl_No', null, 0);?><?php if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)>0){?><div class='fieldBlockContainer' id="ShortagefieldBlockContainer" ><div class="row"><div class="col-sm-6"><h4 class='fieldBlockHeader' style="margin-top:5px;"><?php echo vtranslate($_smarty_tpl->tpl_vars['ITEMBLOCKNAMEANOTHER']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></div></div><div class="lineitemTableContainer"><table class="table table-bordered" id="lineItemTab2"><tr><?php if ($_smarty_tpl->tpl_vars['IMAGE_EDITABLE']->value){?><td><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['image']->get('label');?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate($_tmp1,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><?php if ($_smarty_tpl->tpl_vars['PRODUCT_EDITABLE']->value){?><td><span class="redColor">*</span><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['productid']->get('label');?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp2,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><?php if ($_smarty_tpl->tpl_vars['PRODUCT_EDITABLE']->value){?><td><strong><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><?php if ($_smarty_tpl->tpl_vars['QUANTITY_VIEWABLE']->value){?><td><strong><?php echo vtranslate('LBL_QTY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDS_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key;
?><td><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php } ?></tr><tr id="anorow2" class="hide lineItemCloneCopy" data-row-num="0"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsContent2.tpl",'ServiceReports'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('row_no'=>0,'data'=>array(),'IGNORE_UI_REGISTRATION'=>true), 0);?>
</tr><?php if (count($_smarty_tpl->tpl_vars['RELATED_PRODUCTS_OTHER1']->value)>0){?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['row_no'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_PRODUCTS_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['row_no']->value = $_smarty_tpl->tpl_vars['data']->key;
?><tr id="row<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" data-row-num="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="lineItemRow" <?php if ($_smarty_tpl->tpl_vars['data']->value["entityType".($_smarty_tpl->tpl_vars['row_no']->value)]=='Products'){?>data-quantity-in-stock=<?php echo $_smarty_tpl->tpl_vars['data']->value["qtyInStock".($_smarty_tpl->tpl_vars['row_no']->value)];?>
<?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsContent2.tpl",'ServiceReports'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('row_no'=>$_smarty_tpl->tpl_vars['row_no']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value), 0);?>
</tr><?php } ?><?php }?></table></div></div><?php }?></div><?php }} ?>