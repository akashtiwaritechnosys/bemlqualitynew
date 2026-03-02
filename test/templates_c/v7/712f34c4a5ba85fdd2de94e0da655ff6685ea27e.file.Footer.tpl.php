<?php /* Smarty version Smarty-3.1.7, created on 2026-03-02 07:48:15
         compiled from "C:\wamp64\www\bemlqualitynew\includes\runtime/../../layouts/v7\modules\Vtiger\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142602267969a540bf682ab4-47899847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '712f34c4a5ba85fdd2de94e0da655ff6685ea27e' => 
    array (
      0 => 'C:\\wamp64\\www\\bemlqualitynew\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1764246736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142602267969a540bf682ab4-47899847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
    'MAX_LISTFIELDS_SELECTION_SIZE' => 0,
    'PRIVACY_POLICY_ACCEPTED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_69a540bf6b644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69a540bf6b644')) {function content_69a540bf6b644($_smarty_tpl) {?>


</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div id="maxListFieldsSelectionSize" class="hide noprint"><?php echo $_smarty_tpl->tpl_vars['MAX_LISTFIELDS_SELECTION_SIZE']->value;?>
</div>
<div class="modal myModal fade"></div>
<!-- Privacy Policy Modal -->
<div class="modal fade" id="privacyPolicyModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Privacy Policy</h5>
			</div>
			<div class="modal-body">
				<p>Please read and accept our Privacy Policy before continuing.</p>
				<p><a href="https://green-lobster-463551.hostingersite.com/privacy-policy" target="_blank">View full
						policy</a></p>
			</div>
			<div class="modal-footer">
				<button id="acceptPolicyBtn" class="btn btn-success">I Accept</button>
			</div>
		</div>
	</div>
</div>
<input type="hidden" name="privacypolicy" id="privacypolicy" value="<?php echo $_smarty_tpl->tpl_vars['PRIVACY_POLICY_ACCEPTED']->value;?>
"/>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html>
<?php }} ?>