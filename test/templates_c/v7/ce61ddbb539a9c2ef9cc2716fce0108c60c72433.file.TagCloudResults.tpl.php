<?php /* Smarty version Smarty-3.1.7, created on 2024-01-09 10:23:24
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/TagCloudResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1240841555659d1e9cb27e81-10870455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce61ddbb539a9c2ef9cc2716fce0108c60c72433' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/TagCloudResults.tpl',
      1 => 1702109324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1240841555659d1e9cb27e81-10870455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'TAG_NAME' => 0,
    'TAGGED_RECORDS' => 0,
    'MODULE_NAME' => 0,
    'TAGGED_RECORD_MODELS' => 0,
    'TAGGED_RECORD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_659d1e9cb34ef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_659d1e9cb34ef')) {function content_659d1e9cb34ef($_smarty_tpl) {?>


-->*}
<div id="TagCloudResults" class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><div class="row"><h3 class="col-lg-8"><?php echo vtranslate('LBL_RESULT_FOR_THE_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['TAG_NAME']->value;?>
</h3><?php if ($_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value){?><select id="tagSearchModulesList" class="select2 col-lg-3" style="color:#000"><option value="all"><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key => $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value){
$_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key;
?><option value="tagSearch_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select><?php }?></div></div><div class="modal-body tabbable"><?php if ($_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value){?><?php  $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key => $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value){
$_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key;
?><div name="tagSearchModuleResults" id="tagSearch_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><h5><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value);?>
)</h5><?php  $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->key => $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->value){
$_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->_loop = true;
?><div><a href="<?php echo $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->value->getName();?>
</a></div><?php } ?><br></div><?php } ?><?php }else{ ?><div class="alert alert-block"><strong><?php echo vtranslate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
.</strong></div><?php }?></div></div></div>	
<?php }} ?>