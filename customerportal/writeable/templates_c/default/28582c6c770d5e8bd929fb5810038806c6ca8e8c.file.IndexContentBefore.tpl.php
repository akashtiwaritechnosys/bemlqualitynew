<?php /* Smarty version Smarty-3.1.19, created on 2024-12-11 12:35:04
         compiled from "/var/www/html/bemlqualitynew/customerportal/layouts/default/templates/Portal/partials/IndexContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:753803656675939a0ea3a25-33495945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28582c6c770d5e8bd929fb5810038806c6ca8e8c' => 
    array (
      0 => '/var/www/html/bemlqualitynew/customerportal/layouts/default/templates/Portal/partials/IndexContentBefore.tpl',
      1 => 1733391411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753803656675939a0ea3a25-33495945',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_675939a0ea62a1_31046522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675939a0ea62a1_31046522')) {function content_675939a0ea62a1_31046522($_smarty_tpl) {?>


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
