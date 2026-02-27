<?php /* Smarty version Smarty-3.1.19, created on 2023-06-12 19:58:40
         compiled from "C:\xampp\htdocs\bemlquality\customerportal\layouts\default\templates\Portal\partials\IndexContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772139456454c635f24db5-84778669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '895fd3505129cd97800050b81a211b9472205d44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bemlquality\\customerportal\\layouts\\default\\templates\\Portal\\partials\\IndexContentBefore.tpl',
      1 => 1686592699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772139456454c635f24db5-84778669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6454c636004681_25870957',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6454c636004681_25870957')) {function content_6454c636004681_25870957($_smarty_tpl) {?>


    <div class="navigation-controls-row">
        <div ng-if="checkRecordsVisibility(filterPermissions)" class="panel-title col-md-12 module-title">{{ptitle}}
        </div>
    </div>
    <div class="row portal-controls-row">
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-4 top_space">
            <button class="btn btn-danger" style="width : 100px" ng-click="ClearSearch(header.name)" id="Clear">Clear Filter</button>
            <div class="addbtnContainer" ng-if="isCreatable">
                <button class="btn btn-soft-primary" ng-click="createRecord(module)">New {{ptitle}}</button>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 top_space">
            <button class="btn btn-soft-primary" ng-if="exportEnabled" ng-csv="exportRecords(module)" csv-header="csvHeaders" add-bom="true" filename="{{filename}}.csv">{{'Export'|translate}}&nbsp;{{ptitle}}</button>
        </div>
        <div class="col-lg-2 col-md-5 col-sm-4 col-xs-4 text-center">
            &nbsp; Total {{ptitle}} : {{totalRecords}}
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 top_space pagination-holder">
            <div class="pull-right">
                <div class="text-center">
                    <pagination
                            total-items="totalPages" max-size="3" ng-model="currentPage" ng-change="pageChanged(currentPage)" boundary-links="true">
                    </pagination>
                </div>
            </div>
        </div>
    </div>

<?php }} ?>
