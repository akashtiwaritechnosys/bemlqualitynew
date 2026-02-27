<?php /* Smarty version Smarty-3.1.19, created on 2024-11-29 16:54:04
         compiled from "/var/www/html/customerportal/layouts/default/templates/Portal/partials/DetailContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8008457326749a454f12c87-96622741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '835ec944e070b97c062ed9dd2997a9879091f3bb' => 
    array (
      0 => '/var/www/html/customerportal/layouts/default/templates/Portal/partials/DetailContent.tpl',
      1 => 1702109409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8008457326749a454f12c87-96622741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6749a454f14ed8_56895729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6749a454f14ed8_56895729')) {function content_6749a454f14ed8_56895729($_smarty_tpl) {?>
    <div ng-class="{'col-lg-5 col-md-5 col-sm-12 col-xs-12 leftEditContent':splitContentView, 'col-lg-12 col-md-12 col-sm-12 col-xs-12 leftEditContent nosplit':!splitContentView}">
        <div class="container-fluid">
            <div class="row">
                <div class="row detailRow" ng-repeat="(blockname, blockInfo) in moduleFieldGroups">
                    <h4><b>{{blockInfo.blocklabel}}</b></h4>
                    <div class="row detailRow" ng-repeat="(fieldname, fieldInfo) in blockInfo.fields">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <label class="fieldLabel" style="word-break: break-word !important;" translate="{{fieldInfo.label}}"> {{fieldInfo.label}} </label>
                        </div>
                        <div ng-if="fieldInfo.uitype != '69'" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <span style="white-space: pre-line;" class="value detail-break">{{fieldInfo.fieldValue}}</span>
                        </div>
                        <div ng-if="fieldInfo.uitype == '69'" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div ng-repeat="(image, imageName) in fieldInfo.fieldValue">
                                <a href="{{imageName.urlpath}}"> {{imageName.attach_name}} </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row detailRow" ng-if="module == 'Documents'">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <label ng-if="module=='Documents'" class="fieldLabel" translate="Attachments">Attachments</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" ng-if="documentExists">
                        <button class="btn btn-soft-primary" ng-click="downloadFile(module,id,parentId)" title="Download {{record[header]}}">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }} ?>
