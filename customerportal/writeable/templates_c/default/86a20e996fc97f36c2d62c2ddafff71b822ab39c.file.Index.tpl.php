<?php /* Smarty version Smarty-3.1.19, created on 2023-03-25 17:53:16
         compiled from "/var/www/html/bemlquality/customerportal/layouts/default/templates/Faq/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2124358911640199ff002106-90671603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a20e996fc97f36c2d62c2ddafff71b822ab39c' => 
    array (
      0 => '/var/www/html/bemlquality/customerportal/layouts/default/templates/Faq/Index.tpl',
      1 => 1678966268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2124358911640199ff002106-90671603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_640199ff03af46_60718059',
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640199ff03af46_60718059')) {function content_640199ff03af46_60718059($_smarty_tpl) {?>

<div class="container-fluid"  ng-controller="<?php echo portal_componentjs_class($_smarty_tpl->tpl_vars['MODULE']->value,'IndexView_Component');?>
">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php echo $_smarty_tpl->getSubTemplate (portal_template_resolve($_smarty_tpl->tpl_vars['MODULE']->value,"partials/IndexContent.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div>
<?php }} ?>
