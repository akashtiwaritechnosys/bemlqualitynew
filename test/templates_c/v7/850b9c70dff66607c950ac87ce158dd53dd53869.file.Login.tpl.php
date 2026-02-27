<?php /* Smarty version Smarty-3.1.7, created on 2022-08-24 05:17:49
         compiled from "/var/www/html/beml/layouts/v7/modules/Mobile/simple/Users/Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18594984396305b47d1ba464-57289463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850b9c70dff66607c950ac87ce158dd53dd53869' => 
    array (
      0 => '/var/www/html/beml/layouts/v7/modules/Mobile/simple/Users/Login.tpl',
      1 => 1661276758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18594984396305b47d1ba464-57289463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_scripts' => 0,
    'TEMPLATE_WEBPATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6305b47d1c25f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6305b47d1c25f')) {function content_6305b47d1c25f($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["_scripts"] = new Smarty_variable(explode(',','Users/Users.js'), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('scripts'=>$_smarty_tpl->tpl_vars['_scripts']->value), 0);?>



    <section ng-controller="UsersLoginController" layout="column" id="page">
        <md-content class="login-background">
            <div class="logo-container">
            
            <img src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/images/vtiger_logo.svg" alt="Vtiger Logo"/>
            
            </div>
            <form name="loginForm" ng-submit="login()" class="login-form" ng-validate>
                <md-input-container  md-no-float class="md-hue-1">
                    <label for="username" >User name</label>
                    <input type="text" autoFilled="true" id="user-name" name="username" ng-model="auth.username" ng-required="true">
                    <div class="form-errors" ng-message="required" ng-show="loginForm.username.$invalid && loginForm.username.$touched">User Name required!</div>
                </md-input-container>
                <md-input-container class="md-hue-1">
                    <label for="password">Password</label>
                    <input type="password" autoFilled="true" id="password" name="password" ng-model="auth.password" ng-required="true">
                    <div class="form-errors" ng-message="required" ng-show="loginForm.password.$invalid && loginForm.password.$touched">Password required!</div>
                </md-input-container>
                <!--div ng-messages="loginForm.username.$error" class="form-errors"-->
                    
                    
                <!--/div-->
                <md-input-container>
                    <md-button class="md-raised" type="submit" value="Login">
                        Login
                    </md-button>
                </md-input-container>

                <a href="#" class="md-primary md-hue-1">Forgot password</a>
            </form>
        </md-content>
    </section>
	

<?php echo $_smarty_tpl->getSubTemplate ("../Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>