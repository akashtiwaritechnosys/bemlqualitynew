<?php /* Smarty version Smarty-3.1.19, created on 2023-06-13 13:23:19
         compiled from "/var/www/html/bemlquality/customerportal/layouts/default/templates/HelpDesk/partials/IndexContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100392607463ef279f0fe818-72153695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f22f3a6d20a3587ea81e4485bbcefe9809fd27' => 
    array (
      0 => '/var/www/html/bemlquality/customerportal/layouts/default/templates/HelpDesk/partials/IndexContentBefore.tpl',
      1 => 1686642588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100392607463ef279f0fe818-72153695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63ef279f100e10_92734586',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63ef279f100e10_92734586')) {function content_63ef279f100e10_92734586($_smarty_tpl) {?>
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
