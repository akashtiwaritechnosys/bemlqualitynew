<div class="container-fluid">
    <div class="widget_header row-fluid">
        <h3>Twilio Integration Settings</h3>
    </div>
    <hr>
    <div class="clearfix"></div>
    <form name="TwilioSettings" action="index.php" method="POST" class="form-horizontal">
        <input type="hidden" name="module" value="TwilioIntegration" />
        <input type="hidden" name="action" value="Save" />
        
        <div class="control-group">
            <label class="control-label">Account SID</label>
            <div class="controls">
                <input type="text" name="account_sid" class="input-large" value="{$SETTINGS.account_sid}">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Auth Token</label>
            <div class="controls">
                <input type="password" name="auth_token" class="input-large" value="{$SETTINGS.auth_token}">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">From Number</label>
            <div class="controls">
                <input type="text" name="from_number" class="input-large" value="{$SETTINGS.from_number}">
            </div>
        </div>
        
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
</div>
