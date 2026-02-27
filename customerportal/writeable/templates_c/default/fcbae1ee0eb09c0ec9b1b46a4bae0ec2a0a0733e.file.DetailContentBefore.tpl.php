<?php /* Smarty version Smarty-3.1.19, created on 2024-11-29 16:54:04
         compiled from "/var/www/html/customerportal/layouts/default/templates/Portal/partials/DetailContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9979997086749a454f0e3e1-14839430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcbae1ee0eb09c0ec9b1b46a4bae0ec2a0a0733e' => 
    array (
      0 => '/var/www/html/customerportal/layouts/default/templates/Portal/partials/DetailContentBefore.tpl',
      1 => 1702109409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9979997086749a454f0e3e1-14839430',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6749a454f11ae6_80560112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6749a454f11ae6_80560112')) {function content_6749a454f11ae6_80560112($_smarty_tpl) {?>


    <div class="col-lg-12 col-md-12 col-sm-7 col-xs-7 detail-header detail-header-row">
      <h3 class="fsmall">
        <detail-navigator>
          <span>
            <a ng-click="navigateBack(module)" style="font-size:small;">{{ptitle}}
            </a>
            </span>
        </detail-navigator>{{record[header]}}
        <button ng-if="isEditable" class="btn btn-soft-primary attach-files-ticket" ng-click="editRecord(module,id)">{{'Edit'|translate}} {{ptitle}}</button>
      </h3>
    </div>
</div>

<hr class="hrHeader">
<div class="container-fluid">

<?php }} ?>
