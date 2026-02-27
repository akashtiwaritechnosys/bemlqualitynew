<?php /* Smarty version Smarty-3.1.19, created on 2024-12-11 12:35:07
         compiled from "/var/www/html/bemlqualitynew/customerportal/layouts/default/templates/HelpDesk/partials/IndexContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:610414929675939a34b5e25-46000660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22fb4f5d2c0673a7b670e198a3ba3276d2dc3440' => 
    array (
      0 => '/var/www/html/bemlqualitynew/customerportal/layouts/default/templates/HelpDesk/partials/IndexContentBefore.tpl',
      1 => 1733391411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '610414929675939a34b5e25-46000660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_675939a34bb499_98022049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675939a34bb499_98022049')) {function content_675939a34bb499_98022049($_smarty_tpl) {?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="row portal-controls-row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 top_space">
            <div class="btn-group addbtnContainer" ng-if="isCreatable">
                <button type="button" translate= "Add {{igModuleTransLatedLabel}}" class="btn btn-soft-primary" ng-click="create()"></button>
                <button style="width : 100px" ng-click="ClearSearch(header.name)" class="btn btn-soft-primary" id="Clear">Clear Filter</button>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 top_space helpdesk_mobile">
            <div class="row" ng-if="activateStatus">
                <div class="col-xs-12 selectric_mob">
                    <hp-selectric items="ticketStatus" ng-model="searchQ.ticketstatus"></hp-selectric>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 text-center">
            &nbsp; Total {{ptitle}} : {{totalRecords}}
        </div>
        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 pagination-holder top_space">
            <div class="pull-right">
                <div class="text-center">
                    <pagination
                            total-items="totalPages" max-size="3" ng-model="currentPage" ng-change="pageChanged(currentPage)" boundary-links="true">
                    </pagination>
                </div>
            </div>
        </div>
    </div>
    <input name="visited" type="hidden" ng-init="beforeRefresh='0'" ng-model="beforeRefresh">

<?php }} ?>
