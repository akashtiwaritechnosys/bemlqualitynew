<?php /* Smarty version Smarty-3.1.7, created on 2022-10-06 11:54:33
         compiled from "/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceEngineer/ShowRejectionREasonForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1246858198633ec1f9a2eef6-48097472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f4065e27100f61619c8ccdf0dedf5718135e354' => 
    array (
      0 => '/var/www/html/beml/includes/runtime/../../layouts/v7/modules/ServiceEngineer/ShowRejectionREasonForm.tpl',
      1 => 1665056729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1246858198633ec1f9a2eef6-48097472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_633ec1f9a36f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633ec1f9a36f5')) {function content_633ec1f9a36f5($_smarty_tpl) {?>
<div class="modal-dialog modelContainer"><?php ob_start();?><?php echo vtranslate('Enter Rejection Reason');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_tmp1), 0);?>
<div class="modal-content"><form id="AddRejectionReason" name="AddRejectionReason"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="action" value="ApproveOrReject"/><input type="hidden" name="apStatus" value="Rejected"/><div class="modal-body clearfix"><div class="col-lg-5"><label class="control-label pull-right marginTop5px"><?php echo vtranslate('Rejection Reason',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-6"><textarea type="text" name="rejectionReason" data-rule-required="true" class="inputElement"/></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>
<?php }} ?>