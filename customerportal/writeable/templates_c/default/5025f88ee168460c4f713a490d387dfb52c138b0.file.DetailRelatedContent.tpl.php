<?php /* Smarty version Smarty-3.1.19, created on 2024-11-29 16:54:04
         compiled from "/var/www/html/customerportal/layouts/default/templates/Portal/partials/DetailRelatedContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19241117766749a454f15d45-37704051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5025f88ee168460c4f713a490d387dfb52c138b0' => 
    array (
      0 => '/var/www/html/customerportal/layouts/default/templates/Portal/partials/DetailRelatedContent.tpl',
      1 => 1702109409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19241117766749a454f15d45-37704051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6749a454f19862_18517010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6749a454f19862_18517010')) {function content_6749a454f19862_18517010($_smarty_tpl) {?>

<div ng-if="splitContentView" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rightEditContent rightedit_tabs">
    
        <ul tabset class="rightedit_ul">
            <tab ng-repeat="relatedModule in relatedModules" select="selectedTab(relatedModule.name)" ng-if="relatedModule.value" heading={{relatedModule.name}} active="tab.active" disabled="tab.disabled">
                <tab-heading><strong translate="{{relatedModule.uiLabel}}">{{relatedModule.uiLabel}}</strong><tab-heading>
						</ul>
                    
                    <br>
                    <div class="tab-content">
                        <div ng-show="selection==='ModComments'">
                            <?php echo $_smarty_tpl->getSubTemplate ("Portal/partials/CommentContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                        <div ng-hide="selection!=='History'"> 
                            <?php echo $_smarty_tpl->getSubTemplate ("Portal/partials/UpdatesContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                        <div ng-hide="selection!=='ProjectTask'"> 
                            <?php echo $_smarty_tpl->getSubTemplate ("Project/partials/ProjectTaskContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                        <div ng-hide="selection!=='ProjectMilestone'"> 
                            <?php echo $_smarty_tpl->getSubTemplate ("Project/partials/ProjectMilestoneContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                        <div ng-hide="selection!=='Documents'"> 
                            <?php echo $_smarty_tpl->getSubTemplate ("Documents/partials/RelatedDocumentsContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                        <div ng-hide="selection!=='Equipment'"> 
                            <p>Euipment Listing Goes Here</p>
                        </div>
                    </div>
                    </div>
<?php }} ?>
