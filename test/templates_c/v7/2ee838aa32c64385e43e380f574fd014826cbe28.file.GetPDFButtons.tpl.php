<?php /* Smarty version Smarty-3.1.7, created on 2023-12-28 12:31:36
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/PDFMaker/GetPDFButtons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2049294978658d6aa83ebb36-08825259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ee838aa32c64385e43e380f574fd014826cbe28' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/PDFMaker/GetPDFButtons.tpl',
      1 => 1702109323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2049294978658d6aa83ebb36-08825259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ENABLE_PDFMAKER' => 0,
    'IG_TEMPS' => 0,
    'PICKLIST_FIELD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_658d6aa83f31d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_658d6aa83f31d')) {function content_658d6aa83f31d($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['ENABLE_PDFMAKER']->value=='true'){?>
    
     <div class="col-sm-4 pull-right" id="PDFMakerContentDiv">
        <div class="row clearfix">
            <div class=" col-lg-4 col-md-4 col-sm-4 pull-right">
                <select class="select2 inputElement" id="igtemp" name="pickListField">
                    <option></option>
                    <?php  $_smarty_tpl->tpl_vars['PICKLIST_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['IG_TEMPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->key => $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value){
$_smarty_tpl->tpl_vars['PICKLIST_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value[0];?>
" <?php if ('index'==0){?> selected <?php }?>>
                           <?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value[1];?>

                        </option>
                    <?php } ?>
                </select>
            </div>
                <div class="col-sm-6 padding0px pull-right">
                    <div class="btn-group pull-right">
                        <button class="btn btn-default selectPDFTemplates"><?php echo vtranslate('LBL_EXPORT_TO_PDF','PDFMaker');?>
</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split PDFMoreAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo vtranslate('LBL_MORE','PDFMaker');?>
&nbsp;&nbsp;<span class="caret"></span></button>
                        </button>
                            <ul class="dropdown-menu">
                                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("GetPDFActions.tpl",'PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php }?><?php }} ?>