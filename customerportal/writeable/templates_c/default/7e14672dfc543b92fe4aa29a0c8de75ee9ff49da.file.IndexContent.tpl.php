<?php /* Smarty version Smarty-3.1.19, created on 2024-11-29 15:07:04
         compiled from "/var/www/html/customerportal/layouts/default/templates/Portal/partials/IndexContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111854454667498b40cfb8f1-84728218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e14672dfc543b92fe4aa29a0c8de75ee9ff49da' => 
    array (
      0 => '/var/www/html/customerportal/layouts/default/templates/Portal/partials/IndexContent.tpl',
      1 => 1702109409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111854454667498b40cfb8f1-84728218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67498b40cfdc06_32763760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67498b40cfdc06_32763760')) {function content_67498b40cfdc06_32763760($_smarty_tpl) {?>


    <div class="row side_space">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="cp-table-container" ng-hide="!pageInitialized || records.length">
                <div class="alert alert-warning" style="margin: 2px 0;" ng-show="pageInitialized">
                    {{'No records found.'|translate}}
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="cp-table-container " ng-show="records">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="panel panel-transparent">
                    <div class="panel-table-body">
                        <div class="table-responsive">
                            <div class="dataTables_wrapper form-inline no-footer">
                                <table class="table table-hover table-condensed table-detailed dataTable no-footer" id="detailedTable" role="grid">
                                    <thead>
                                    <thead>
                                    <tr class="listViewHeaders">
                                        <th rowspan="1" colspan="1">
                                            <button class="btn btn-success" style="width : 100px;color: white" ng-click="applySearch()" id="SerachButton">Search</button><br>
                                        </th>
                                        <th ng-repeat="header in headers|limitTo:10" rowspan="1" colspan="1">
                                            <span  ng-if="header.name=='id'">
                                                <button class="btn btn-success" style="width : 100px;color: white" ng-click="applySearch()" id="SerachButton">Search</button><br>
                                            </span>
                                            <span ng-if="header.name!='id'">
                                                <a href="javascript:void(0);"  class="listViewHeaderValues" ng-click="setSortOrder(header.name)" data-nextsortorderval="ASC" data-columnname="{{header.name}}">{{header.label}}&nbsp;</a>
                                                <span class="text-primary" ng-class="{'glyphicon glyphicon-chevron-down':header.name==OrderBy && !reverse,'glyphicon glyphicon-chevron-up':header.name==OrderBy && reverse}"></span><br>
                                                <input  type="text" style="color: black; border-radius: 2px; border: 1px solid #ccc;" ng-model="dataOfSearchFields[header.name]" id="listEle{{header.name}}" name="listEle{{header.name}}">
                                            </span>
                                        </th>
                                        <th ng-if="module == 'Documents'" rowspan="1" colspan="1">
                                            <a ng-if="module == 'Documents'" href="javascript:void(0);" translate="Actions" class="listViewHeaderValues" ng-click="sortOrder(Subject)" data-nextsortorderval="ASC" data-columnname="{{header.name}}">Actions</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    </thead>
                                    <tbody>
                                    <tr class="listViewEntries" ng-repeat="record in records" total-items="totalPages" current-page="currentPage">
                                        <td>
                                        </td>    
                                        <td ng-repeat="header in headers|limitTo:10" class="v-align-middle medium" nowrap = " " ng-click="ChangeLocation(record) ">
                                            <span ng-if="header.name!='id'">    
                                                <ng-switch on="record[header].type">
                                                    <a ng-href="index.php?module={{module}}&view=Detail&id={{record.id}} "></a>
                                                    <span title="{{record[header.name]}}" *ngSwitchCase="'reference'">{{record[header.name+'_idofreference']|limitTo:25}}{{record[header.name].length > 25 ? '...' :''}}</span>
                                                    <span title="{{record[header.name]}}" ng-switch-default>{{record[header.name]|limitTo:25}}{{record[header.name].length > 25 ? '...' :''}}</span>
                                                </ng-switch>
                                            </span>
                                        </td>
                                        <td ng-if="module=='Documents'">
                                            <button ng-if=" module='Documents' && record.Type!=='' && record.documentExists " ng-click="downloadFile(record.id) "class="btn btn-soft-primary ">{{'Download'|translate}}</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php }} ?>
