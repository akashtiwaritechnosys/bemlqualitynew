<?php /* Smarty version Smarty-3.1.7, created on 2025-12-10 11:26:19
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Reports/ChartReportContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1828039313693958db986da4-65454369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d5fb4ae56aed8865749bb47ed44d066e7def904' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/Reports/ChartReportContents.tpl',
      1 => 1733391285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828039313693958db986da4-65454369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHART_TYPE' => 0,
    'DATA' => 0,
    'CLICK_THROUGH' => 0,
    'report_type' => 0,
    'herderValues' => 0,
    'herderValues_value' => 0,
    'pivotReportArray' => 0,
    'pivotReport_value' => 0,
    'hraderColumn_key' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE' => 0,
    'REPORT_MODEL' => 0,
    'BASE_CURRENCY_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_693958db992a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_693958db992a2')) {function content_693958db992a2($_smarty_tpl) {?>

<input type='hidden' name='charttype' value="<?php echo $_smarty_tpl->tpl_vars['CHART_TYPE']->value;?>
" />
<input type='hidden' name='data' value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['DATA']->value);?>
' />
<input type='hidden' name='clickthrough' value="<?php echo $_smarty_tpl->tpl_vars['CLICK_THROUGH']->value;?>
" />

<br>
<div class="dashboardWidgetContent">
    <?php if ($_smarty_tpl->tpl_vars['report_type']->value=='Pivot'){?>
        <table border="1" style="width: auto;table-layout: fixed;margin-left: 35px;" class="table">
            <tr>
                <td></td>
                <?php  $_smarty_tpl->tpl_vars['herderValues_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['herderValues_value']->_loop = false;
 $_smarty_tpl->tpl_vars['herderValues_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['herderValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['herderValues_value']->key => $_smarty_tpl->tpl_vars['herderValues_value']->value){
$_smarty_tpl->tpl_vars['herderValues_value']->_loop = true;
 $_smarty_tpl->tpl_vars['herderValues_key']->value = $_smarty_tpl->tpl_vars['herderValues_value']->key;
?>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['herderValues_value']->value;?>
</b></td>
                <?php } ?>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['pivotReport_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pivotReport_value']->_loop = false;
 $_smarty_tpl->tpl_vars['pivotReport_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivotReportArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pivotReport_value']->key => $_smarty_tpl->tpl_vars['pivotReport_value']->value){
$_smarty_tpl->tpl_vars['pivotReport_value']->_loop = true;
 $_smarty_tpl->tpl_vars['pivotReport_key']->value = $_smarty_tpl->tpl_vars['pivotReport_value']->key;
?>
                <tr>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['pivotReport_value']->value['rowsColumn'];?>
</b></td>
                    <?php  $_smarty_tpl->tpl_vars['hraderColumn_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hraderColumn_value']->_loop = false;
 $_smarty_tpl->tpl_vars['hraderColumn_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pivotReport_value']->value['headerValuesArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hraderColumn_value']->key => $_smarty_tpl->tpl_vars['hraderColumn_value']->value){
$_smarty_tpl->tpl_vars['hraderColumn_value']->_loop = true;
 $_smarty_tpl->tpl_vars['hraderColumn_key']->value = $_smarty_tpl->tpl_vars['hraderColumn_value']->key;
?>
                        <?php if (array_key_exists($_smarty_tpl->tpl_vars['hraderColumn_key']->value,$_smarty_tpl->tpl_vars['pivotReport_value']->value['hraderColumn'])){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['pivotReport_value']->value['hraderColumn'][$_smarty_tpl->tpl_vars['hraderColumn_key']->value];?>
</td>
                        <?php }else{ ?>
                            <td>0</td>
                        <?php }?>
                    <?php } ?>
                <tr>
            <?php } ?>
        </table>
    <?php }else{ ?>
        <input type="hidden" class="yAxisFieldType" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" />
        <div class='border1px filterConditionContainer' style="padding:30px;">
            <div id='chartcontent' name='chartcontent' style="min-height:400px;" data-mode='Reports'></div>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['CLICK_THROUGH']->value!='true'){?>
                <div class='row-fluid alert-info'>
                    <span class='col-lg-4 offset4'> &nbsp;</span>
                    <span class='span alert-info'>
                        <i class="icon-info-sign"></i>
                        <?php echo vtranslate('LBL_CLICK_THROUGH_NOT_AVAILABLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                    </span>
                </div>
                <br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['REPORT_MODEL']->value->isInventoryModuleSelected()){?>
                <div class="alert alert-info">
                    <?php $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO'] = new Smarty_variable(Vtiger_Util_Helper::getUserCurrencyInfo(), null, 0);?>
                    <i class="icon-info-sign" style="margin-top: 1px;"></i>&nbsp;&nbsp;
                    <?php echo vtranslate('LBL_CALCULATION_CONVERSION_MESSAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_code'];?>
)
                </div>
            <?php }?>
        </div>
    <?php }?>
</div>
<br>

<?php }} ?>