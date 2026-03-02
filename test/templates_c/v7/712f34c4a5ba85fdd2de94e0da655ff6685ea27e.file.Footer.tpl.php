<?php /* Smarty version Smarty-3.1.7, created on 2026-03-02 09:26:00
         compiled from "C:\wamp64\www\bemlqualitynew\includes\runtime/../../layouts/v7\modules\Vtiger\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152543689469a166909e4323-25048108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '712f34c4a5ba85fdd2de94e0da655ff6685ea27e' => 
    array (
      0 => 'C:\\wamp64\\www\\bemlqualitynew\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1772443545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152543689469a166909e4323-25048108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_69a16690c1d42',
  'variables' => 
  array (
    'MODULE' => 0,
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69a16690c1d42')) {function content_69a16690c1d42($_smarty_tpl) {?>

<footer class="app-footer">
    <div style="display: flex; height: 25px">
		<?php if ($_smarty_tpl->tpl_vars['MODULE']->value!='Home'){?>
			<div style="width: 42px;background-color:#2C3B49"></div>
		<?php }else{ ?>
			<div></div>
		<?php }?>
	</div>
</footer>
</div>
<div id='overlayPage'>
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <script src="<?php echo vresource_url('layouts/v7/feather.min.js');?>
"></script>
	<script>
        feather.replace()
    </script>
</body>

</html><?php }} ?>