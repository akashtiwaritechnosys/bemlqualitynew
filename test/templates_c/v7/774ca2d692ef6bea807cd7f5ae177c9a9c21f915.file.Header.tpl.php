<?php /* Smarty version Smarty-3.1.7, created on 2022-08-24 05:17:49
         compiled from "/var/www/html/beml/layouts/v7/modules/Mobile/simple/Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8804458236305b47d1c3c98-75936718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '774ca2d692ef6bea807cd7f5ae177c9a9c21f915' => 
    array (
      0 => '/var/www/html/beml/layouts/v7/modules/Mobile/simple/Header.tpl',
      1 => 1661276054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8804458236305b47d1c3c98-75936718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TEMPLATE_WEBPATH' => 0,
    '_styles' => 0,
    '_style' => 0,
    '_scripts' => 0,
    '_script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6305b47d1cfd4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6305b47d1cfd4')) {function content_6305b47d1cfd4($_smarty_tpl) {?>

<!doctype html>
<html ng-app="mobileapp">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Vtiger</title>
		<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 
		<link rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material.min.css">
		<!--link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic"-->

		
		<?php if ($_smarty_tpl->tpl_vars['_styles']->value){?>
			<?php  $_smarty_tpl->tpl_vars['_style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_styles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_style']->key => $_smarty_tpl->tpl_vars['_style']->value){
$_smarty_tpl->tpl_vars['_style']->_loop = true;
?>
				<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_style']->value;?>
">
			<?php } ?>
		<?php }?>
		
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-icons/css/materialdesignicons.min.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-datepicker/angular-datepicker.min.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/Vtiger-icons/style.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/css/application.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/css/style.css">
		
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material-datetimepicker/css/material-datetimepicker.min.css">

		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/jquery/date.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/jquery/jquery2.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-touch.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-animate.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-aria.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-touch.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/jquery/purl.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-datepicker/angular-datepicker.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-datepicker/angular-clockpicker.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/Vtiger/js/application.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/Vtiger/js/Vtiger.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/Vtiger/js/Utils.js"></script>

		
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/moment/moment.min.js"></script>
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/moment/moment-timezone.min.js"></script>
		
		<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material-datetimepicker/js/angular-material-datetimepicker.js"></script>

		
		<?php if ($_smarty_tpl->tpl_vars['_scripts']->value){?>
			<?php  $_smarty_tpl->tpl_vars['_script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_script']->key => $_smarty_tpl->tpl_vars['_script']->value){
$_smarty_tpl->tpl_vars['_script']->_loop = true;
?>
				<script type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_script']->value;?>
"></script>
			<?php } ?>
		<?php }?>
		

	</head>
	
		<body ng-controller="VtigerBodyController" ng-init="init();" ng-cloak md-theme="{{dynamicTheme}}" md-theme-watch>
	
<?php }} ?>