<?php /* Smarty version Smarty-3.1.7, created on 2025-01-27 06:31:55
         compiled from "/var/www/html/bemlqualitynew/layouts/v7/modules/Mobile/simple/Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9278640966797285bec06e2-50836764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '965fe71b37bd2ce7c72f833b24fe791b6e7dc528' => 
    array (
      0 => '/var/www/html/bemlqualitynew/layouts/v7/modules/Mobile/simple/Header.tpl',
      1 => 1733391376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9278640966797285bec06e2-50836764',
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
  'unifunc' => 'content_6797285bed0ca',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6797285bed0ca')) {function content_6797285bed0ca($_smarty_tpl) {?>

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