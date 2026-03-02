<?php /* Smarty version Smarty-3.1.7, created on 2026-03-02 07:48:12
         compiled from "C:\wamp64\www\bemlqualitynew\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\DashBoardTabContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206544493169a540bc26c2f3-75945016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80fd7917098907046b6673076c3e1fc1d9557813' => 
    array (
      0 => 'C:\\wamp64\\www\\bemlqualitynew\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\DashBoardTabContents.tpl',
      1 => 1771592478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206544493169a540bc26c2f3-75945016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'MODULE' => 0,
    'CardDetails' => 0,
    'LeadCardDetails' => 0,
    'RevnueChange' => 0,
    'CardDetailsRevenue' => 0,
    'CardDetailsFollowers' => 0,
    'TABID' => 0,
    'WIDGETS' => 0,
    'WIDGET' => 0,
    'WIDGETDOMID' => 0,
    'COLUMNS' => 0,
    'ROW' => 0,
    'ROWCOUNT' => 0,
    'COLCOUNT' => 0,
    'CHARTWIDGETDOMID' => 0,
    'WIDGETID' => 0,
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_69a540bc6b15f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69a540bc6b15f')) {function content_69a540bc6b15f($_smarty_tpl) {?>

<div class='dashBoardTabContainer'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('DASHBOARDHEADER_TITLE'=>vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0);?>
<br><div class="dashboardBanner"></div><div class="highlight-card-container"><div class="row"><!-- Bookings --><div class="col-sx-6 col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box primary-color"><img src="layouts/v7/skins/images/ticket.svg" alt="ticket" /></div><div class="highlight-card-content"><div><p class="highlight-title">Sales Orders</p></div><div><h3 class="highlight-value"><?php echo $_smarty_tpl->tpl_vars['CardDetails']->value[0];?>
</h3></div></div></div><hr><div class="card-footer"><div class="status"><span><?php if ($_smarty_tpl->tpl_vars['CardDetails']->value[1]=='New'){?>New<?php }elseif($_smarty_tpl->tpl_vars['CardDetails']->value[1]>0){?>+<?php echo $_smarty_tpl->tpl_vars['CardDetails']->value[1];?>
%<?php }elseif($_smarty_tpl->tpl_vars['CardDetails']->value[1]<0){?><?php echo $_smarty_tpl->tpl_vars['CardDetails']->value[1];?>
%<?php }else{ ?>0%<?php }?></span> than last week</div></div></div></div><!-- Today's Users --><div class="col-sx-6 col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box dark-blue-color"><img src="layouts/v7/skins/images/benefits.svg" alt="ticket" /></div><div class="highlight-card-content"><div><p class="highlight-title">Today's Leads</p></div><div><h3 class="highlight-value"><?php echo $_smarty_tpl->tpl_vars['LeadCardDetails']->value[0];?>
</h3></div></div></div><hr><div class="card-footer"><div class="status"><span><?php if ($_smarty_tpl->tpl_vars['LeadCardDetails']->value[1]=='New'){?>New<?php }elseif($_smarty_tpl->tpl_vars['LeadCardDetails']->value[1]>0){?>+<?php echo $_smarty_tpl->tpl_vars['LeadCardDetails']->value[1];?>
%<?php }elseif($_smarty_tpl->tpl_vars['LeadCardDetails']->value[1]<0){?><?php echo $_smarty_tpl->tpl_vars['LeadCardDetails']->value[1];?>
%<?php }else{ ?>0%<?php }?></span> than last month</div></div></div></div><!-- Revenue --><div class="col-sx-6 col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box green-color"><img src="layouts/v7/skins/images/revenue.svg" alt="ticket" /></div><div class="highlight-card-content"><div><p class="highlight-title">Revenue</p></div><div><h3 class="highlight-value"><?php echo $_smarty_tpl->tpl_vars['RevnueChange']->value[0];?>
</h3></div></div></div><hr><div class="card-footer"><div class="status"><span><?php if ($_smarty_tpl->tpl_vars['CardDetailsRevenue']->value[1]=='New'){?>New<?php }elseif($_smarty_tpl->tpl_vars['CardDetailsRevenue']->value[1]>0){?>+<?php echo $_smarty_tpl->tpl_vars['CardDetailsRevenue']->value[1];?>
%<?php }elseif($_smarty_tpl->tpl_vars['CardDetailsRevenue']->value[1]<0){?><?php echo $_smarty_tpl->tpl_vars['CardDetailsRevenue']->value[1];?>
%<?php }else{ ?>0%<?php }?></span> than yesterday</div></div></div></div><!-- Followers --><div class="col-sx-6 col-sm-6 col-md-4 col-lg-3"><div class="highlight-card"><div class="highlight-card-header"><div class="icon-box pink-color"><img src="layouts/v7/skins/images/add-user.svg" alt="followers" /></div><div class="highlight-card-content"><div><p class="highlight-title">Invoice </p></div><div><h3 class="highlight-value"><?php echo $_smarty_tpl->tpl_vars['CardDetailsFollowers']->value[0];?>
</h3></div></div></div><hr><div class="card-footer"><div class="status"><span><?php if ($_smarty_tpl->tpl_vars['CardDetailsFollowers']->value[1]=='New'){?>New<?php }elseif($_smarty_tpl->tpl_vars['CardDetailsFollowers']->value[1]>0){?>+<?php echo $_smarty_tpl->tpl_vars['CardDetailsFollowers']->value[1];?>
%<?php }elseif($_smarty_tpl->tpl_vars['CardDetailsFollowers']->value[1]<0){?><?php echo $_smarty_tpl->tpl_vars['CardDetailsFollowers']->value[1];?>
%<?php }else{ ?>0%<?php }?></span> than yesterday</div></div></div></div></div><div class="dashBoardTabContents clearfix"><div class="gridster_<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><?php $_smarty_tpl->tpl_vars["ROWCOUNT"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["COLCOUNT"] = new Smarty_variable(0, null, 0);?><ul class="test"><?php $_smarty_tpl->tpl_vars['COLUMNS'] = new Smarty_variable(2, null, 0);?><?php $_smarty_tpl->tpl_vars['ROW'] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['WIDGETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->key => $_smarty_tpl->tpl_vars['WIDGET']->value){
$_smarty_tpl->tpl_vars['WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='MiniList'){?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable(($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='Notebook'){?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable(($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['WIDGETDOMID']->value){?><li id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value==0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']!=0){?><?php $_smarty_tpl->tpl_vars['ROWCOUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['ROW']->value+1, null, 0);?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
" <?php }else{ ?>data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROW']->value);?>
" <?php }?><?php $_smarty_tpl->tpl_vars['COLCOUNT'] = new Smarty_variable(($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value)+1, null, 0);?>data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
" data-sizex="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeX();?>
"data-sizey="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeY();?>
" <?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('position')==''){?> data-position="false" <?php }?>class="dashboardWidget dashboardWidget_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
"data-mode="open" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"></li><?php }else{ ?><?php $_smarty_tpl->tpl_vars['CHARTWIDGETDOMID'] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value->get('reportid'), null, 0);?><?php $_smarty_tpl->tpl_vars['WIDGETID'] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value->get('id'), null, 0);?><li id="<?php echo $_smarty_tpl->tpl_vars['CHARTWIDGETDOMID']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['WIDGETID']->value;?>
"<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value==0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']!=0){?><?php $_smarty_tpl->tpl_vars['ROWCOUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['ROW']->value+1, null, 0);?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
" <?php }else{ ?>data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROW']->value);?>
" <?php }?><?php $_smarty_tpl->tpl_vars['COLCOUNT'] = new Smarty_variable(($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value)+1, null, 0);?>data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
" data-sizex="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeX();?>
"data-sizey="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeY();?>
" <?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('position')==''){?> data-position="false" <?php }?>class="dashboardWidget dashboardWidget_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
"data-mode="open" data-name="ChartReportWidget"></li><?php }?><?php } ?></ul><input type="hidden" id=row value="<?php echo $_smarty_tpl->tpl_vars['ROWCOUNT']->value;?>
" /><input type="hidden" id=col value="<?php echo $_smarty_tpl->tpl_vars['COLCOUNT']->value;?>
" /><input type="hidden" id="userDateFormat" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('date_format');?>
" /></div></div></div><?php }} ?>