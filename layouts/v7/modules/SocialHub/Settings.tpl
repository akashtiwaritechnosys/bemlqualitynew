{* Settings Template for SocialHub *}
<div class="editViewContainer">
    <form name="SocialHubSettings" action="index.php" method="post" class="form-horizontal">
        <input type="hidden" name="module" value="SocialHub">
        <input type="hidden" name="action" value="SaveSettings">

        <div class="contentHeader row-fluid">
            <h3 class="span8 textOverflowEllipsis">{vtranslate('SocialHub Settings', $MODULE)}</h3>
        </div>
        <div class="clearfix"></div>
        <hr>

        {if $ERROR_MESSAGE}
            <div class="alert alert-error">
                <button class="close" data-dismiss="alert">×</button>
                {$ERROR_MESSAGE}
            </div>
        {/if}
        {if $STATUS_MESSAGE}
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert">×</button>
                {$STATUS_MESSAGE} {if $CONNECTED_PAGE} (Page: {$CONNECTED_PAGE}) {/if}
            </div>
        {/if}

        <div class="block">
            <div class="head">
                <h4>{vtranslate('Facebook Configuration', $MODULE)}</h4>
            </div>
            
            <div class="blockData">
                <br>
                
                {* Main Connection Area *}
                <div class="form-group">
                    <label class="col-lg-3 control-label fieldLabel" style="font-size: 14px; padding-top: 8px;">{vtranslate('Facebook Connection', $MODULE)}</label>
                    <div class="col-lg-6 fieldValue">
                        {if $SETTINGS.fb_page_id}
                            <div class="alert alert-success" style="margin-bottom: 0;">
                                <i class="fa fa-check-circle"></i> <strong>Connected</strong> 
                                <span class="muted" style="margin-left: 10px;">(Page ID: {$SETTINGS.fb_page_id})</span>
                                <div class="pull-right">
                                    <a href="index.php?module=SocialHub&action=VisualizeAuth" class="btn btn-mini btn-primary">Switch Page</a>
                                </div>
                            </div>
                        {else}
                            <button type="button" class="btn btn-primary btn-large" style="width: 100%;" onclick="validateAppId(event);">
                                <i class="fa fa-facebook-square"></i> Connect with Facebook
                            </button>
                            <div class="help-block">
                                <small>Click to authorize your Facebook Page to auto-publish posts.</small>
                            </div>
                        {/if}
                    </div>
                </div>

                <hr>

                {* Advanced App Settings Toggle *}
                <div class="row-fluid">
                   <div class="col-lg-offset-3 col-lg-6">
                       <a href="javascript:void(0);" onclick="jQuery('#app-settings').toggle();" style="color: #666; font-size: 12px;">
                           <i class="fa fa-cog"></i> Configure App ID & Secret (Advanced)
                       </a>
                   </div>
                </div>
                <br>

                {* Hidden App Settings *}
                <div id="app-settings" {if !$ERROR_MESSAGE}style="display:none;"{/if}>
                    <div class="alert alert-info">
                        <small>These credentials identify your CRM to Facebook. You must create an App in the <a href="https://developers.facebook.com/apps" target="_blank">Facebook Developers Console</a>.</small>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label fieldLabel">{vtranslate('Facebook App ID', $MODULE)}</label>
                        <div class="col-lg-6 fieldValue">
                            <input type="text" name="fb_app_id" id="fb_app_id" value="{$SETTINGS.fb_app_id}" class="inputElement" placeholder="E.g. 1234567890" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label fieldLabel">{vtranslate('Facebook App Secret', $MODULE)}</label>
                        <div class="col-lg-6 fieldValue">
                            <input type="text" name="fb_app_secret" value="{$SETTINGS.fb_app_secret}" class="inputElement" />
                        </div>
                    </div>
                    
                    <div class="row-fluid">
                        <div class="col-lg-offset-3 col-lg-6">
                            <button class="btn btn-success" type="submit"><strong>{vtranslate('LBL_SAVE_APP_SETTINGS', $MODULE)}</strong></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {* Removed footer buttons as save is now inside the advanced block *}
        <div class="clearfix"></div>
    </form>
</div>

<script type="text/javascript">
    function validateAppId(e) {
        var appInput = document.getElementById('fb_app_id');
        var appId = appInput ? appInput.value : '';
        var savedAppId = '{$SETTINGS.fb_app_id}'; // Value from DB
        
        // Basic validation
        if (!appId || appId.trim() === '') {
            if(e) e.preventDefault();
            jQuery('#app-settings').show();
             jQuery('html, body').animate({
                scrollTop: jQuery("#app-settings").offset().top - 100
            }, 500);
            
            jQuery('#fb_app_id').focus().css('border-color', 'red');
            alert('Please configure your Facebook App ID first.');
            return false;
        }
        
        // Check if user changed the ID but didn't save
        if (appId !== savedAppId) {
             if(e) e.preventDefault();
             alert('You have changed the App ID. Please click "Save App Settings" before connecting.');
             // Highlight save button
             jQuery('button[type="submit"]').addClass('btn-danger');
             return false;
        }
        
        // Validation passed, open Popup
        if(e) e.preventDefault();
        var url = "index.php?module=SocialHub&action=VisualizeAuth";
        var w = 600;
        var h = 600;
        var left = (screen.width/2)-(w/2);
        var top = (screen.height/2)-(h/2);
        
        var popup = window.open(url, 'fb_oauth', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
        
        if (popup) {
            popup.focus();
        }
        
        return false;
    }
</script>
