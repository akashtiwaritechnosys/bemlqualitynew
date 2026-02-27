<?php /* Smarty version Smarty-3.1.7, created on 2023-12-05 12:10:25
         compiled from "/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Equipment/LineItemsDetailShortDam1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99449578363b42bd1899031-26475120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08eafce8e56a219682583cd9e34b8d9ee636bd24' => 
    array (
      0 => '/var/www/html/bemlquality/includes/runtime/../../layouts/v7/modules/Equipment/LineItemsDetailShortDam1.tpl',
      1 => 1699267086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99449578363b42bd1899031-26475120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63b42bd18bc34',
  'variables' => 
  array (
    'RELATED_PRODUCTS_OTHER1' => 0,
    'COL_SPAN1' => 0,
    'MODULE_NAME' => 0,
    'RECORD' => 0,
    'LINEITEM_FIELDS' => 0,
    'TAX_REGION_MODEL' => 0,
    'REGION_LABEL' => 0,
    'LINEITEM_CUSTOM_FIELDS_OTHER1' => 0,
    'LINEITEM_CUSTOM_FIELD' => 0,
    'MODULE' => 0,
    'fieldName' => 0,
    'LINE_ITEM_DETAIL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b42bd18bc34')) {function content_63b42bd18bc34($_smarty_tpl) {?><input type="hidden" class="isCustomFieldExists" value="false">
<?php $_smarty_tpl->tpl_vars['FINAL_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS_OTHER1']->value[1]['final_details'], null, 0);?>
<div class="details block">
    <div class="lineItemTableDiv">
        <table class="table table-bordered lineItemsTable" style = "margin-top:15px">
            <thead>
            <th colspan="<?php echo $_smarty_tpl->tpl_vars['COL_SPAN1']->value;?>
" class="lineItemBlockHeader">
                <?php $_smarty_tpl->tpl_vars['REGION_LABEL'] = new Smarty_variable(vtranslate('daadcp_lineblock',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('region_id')&&$_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['region_id']&&$_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['region_id']->isViewable()){?>
                    <?php $_smarty_tpl->tpl_vars['TAX_REGION_MODEL'] = new Smarty_variable(Inventory_TaxRegion_Model::getRegionModel($_smarty_tpl->tpl_vars['RECORD']->value->get('region_id')), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value){?>
                        <?php ob_start();?><?php echo vtranslate($_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['region_id']->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['REGION_LABEL'] = new Smarty_variable($_tmp1." : ".($_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName()), null, 0);?>
                    <?php }?>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['REGION_LABEL']->value;?>

            </th>
            </thead>
            <tbody>
                <tr>
                    <?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDS_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key;
?>
                        <td data-td="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldname'];?>
">
                            <strong><?php echo vtranslate($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>
                        </td>
                    <?php } ?>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_PRODUCTS_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key => $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value){
$_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key;
?>
                    <tr>
                        <?php  $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDS_OTHER1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key => $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value){
$_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELDKEY']->value = $_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->key;
?>
		                    <?php $_smarty_tpl->tpl_vars["fieldName"] = new Smarty_variable($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['fieldname'], null, 0);?>
                            <td data-td="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
">
                                <?php if ($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='5'){?>
                                    <?php echo Vtiger_Functions::currentUserDisplayDate($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value[($_smarty_tpl->tpl_vars['fieldName']->value).($_smarty_tpl->tpl_vars['INDEX']->value)]);?>

                                <?php }elseif($_smarty_tpl->tpl_vars['LINEITEM_CUSTOM_FIELD']->value['uitype']=='56'){?>
                                    <?php if ($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value[($_smarty_tpl->tpl_vars['fieldName']->value).($_smarty_tpl->tpl_vars['INDEX']->value)]==1){?> Yes <?php }else{ ?> No <?php }?>
                                <?php }else{ ?>
                                    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value[($_smarty_tpl->tpl_vars['fieldName']->value).($_smarty_tpl->tpl_vars['INDEX']->value)];?>

                                <?php }?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>