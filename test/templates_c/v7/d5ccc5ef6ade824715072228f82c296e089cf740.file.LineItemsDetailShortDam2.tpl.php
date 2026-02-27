<?php /* Smarty version Smarty-3.1.7, created on 2024-12-09 11:38:35
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Equipment/LineItemsDetailShortDam2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18137588556756d6bb83c468-38816953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5ccc5ef6ade824715072228f82c296e089cf740' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Equipment/LineItemsDetailShortDam2.tpl',
      1 => 1733391283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18137588556756d6bb83c468-38816953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_PRODUCTS_OTHER1' => 0,
    'COL_SPAN1' => 0,
    'AllAggregatesInfo' => 0,
    'LINE_ITEM_DETAIL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6756d6bb8434b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6756d6bb8434b')) {function content_6756d6bb8434b($_smarty_tpl) {?><input type="hidden" class="isCustomFieldExists" value="false">
<?php $_smarty_tpl->tpl_vars['FINAL_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS_OTHER1']->value[1]['final_details'], null, 0);?>
<div class="details block">
    <div class="lineItemTableDiv">
        <table class="table table-bordered lineItemsTable" style = "margin-top:15px">
            <thead>
                <th colspan="<?php echo $_smarty_tpl->tpl_vars['COL_SPAN1']->value;?>
" class="lineItemBlockHeader">
                    Aggregate Name
                </th>
                <th colspan="<?php echo $_smarty_tpl->tpl_vars['COL_SPAN1']->value;?>
" class="lineItemBlockHeader">
                    Aggregate Equipment Serial Number
                </th>
                <th colspan="<?php echo $_smarty_tpl->tpl_vars['COL_SPAN1']->value;?>
" class="lineItemBlockHeader">
                    Aggregate Warranty Details
                </th>
                <th colspan="<?php echo $_smarty_tpl->tpl_vars['COL_SPAN1']->value;?>
" class="lineItemBlockHeader">
                    Serial Number
                </th>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AllAggregatesInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key => $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value){
$_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key;
?>
                    <tr>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value['aggregateLabel'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
 
                        </td>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value['aggregateInfo']['equipment_sl_no'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>

                        </td>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value['aggregateInfo']['equip_war_terms'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
 
                        </td>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value['aggregateInfo']['equip_ag_serial_no'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_tmp4;?>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>