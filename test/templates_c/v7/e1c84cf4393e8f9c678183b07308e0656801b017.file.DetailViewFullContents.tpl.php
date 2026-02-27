<?php /* Smarty version Smarty-3.1.7, created on 2024-12-19 12:08:23
         compiled from "/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/RecommissioningReports/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196695779767640cb7584735-79459804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c84cf4393e8f9c678183b07308e0656801b017' => 
    array (
      0 => '/var/www/html/bemlqualitynew/includes/runtime/../../layouts/v7/modules/RecommissioningReports/DetailViewFullContents.tpl',
      1 => 1733391285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196695779767640cb7584735-79459804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_67640cb758a74',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67640cb758a74')) {function content_67640cb758a74($_smarty_tpl) {?><form id="detailView" method="POST">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>

    
</form>
<?php }} ?>