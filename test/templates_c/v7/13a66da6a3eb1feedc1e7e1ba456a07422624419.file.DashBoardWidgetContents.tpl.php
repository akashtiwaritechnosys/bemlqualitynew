<?php /* Smarty version Smarty-3.1.7, created on 2026-03-02 09:26:06
         compiled from "C:\wamp64\www\bemlqualitynew\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48504800669a1673538feb9-54444375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a66da6a3eb1feedc1e7e1ba456a07422624419' => 
    array (
      0 => 'C:\\wamp64\\www\\bemlqualitynew\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\DashBoardWidgetContents.tpl',
      1 => 1772443545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48504800669a1673538feb9-54444375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_69a167353e00e',
  'variables' => 
  array (
    'DATA' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69a167353e00e')) {function content_69a167353e00e($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input class="yAxisFieldType" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" /><div class="row" style="margin:0px 10px;"><div class="col-lg-11 chartContainer_wrap"><div class="widgetChartContainer" name='chartcontent' style="height:220px;min-width:300px; margin: 0 auto"></div><br></div><div class="col-lg-1"></div></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }?><?php }} ?>