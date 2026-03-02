<div class="container-fluid">
  <div class="widget_header row" style="padding-left: 2rem; padding-top: 2rem">
    <div class="col-md-8 py-4">
      <h4>Account Management</h4>
    </div>
  </div>

  <div class="contents-modern">
    {if isset($API_RECORD) && $API_RECORD.cf_873 == 'Active'}
      <div class="card-modern">
        <div class="status-section">
          <div class="status-icon bg-blue">
            <i class="fa fa-user"></i>
          </div>
          <div>
            <div class="status-label">
              <h5>Account Status</h5>
            </div>
            <div class="status-value subs-status">
              {if $API_RECORD.cf_875 == 'Active'}
                <p>
                  Trial Period
                </p>
              {elseif $API_RECORD.cf_875 == 'Paid'}
                {if $SUBS_DAYS_REMAINING >= 0 }
                  <p>
                    Subscription Active
                  </p>
                {else}
                  <p class="danger">
                    Subscription Expired
                  </p>
                {/if}
              {else}
                {$API_RECORD.cf_875}
              {/if}
            </div>

          </div>
        </div>

        {if $API_RECORD.cf_875 == 'Active'} 
          {if isset($DAYS_REMAINING)} {if
            $DAYS_REMAINING > 7}
            <div class="alert-modern days-7">
              <div class="icon"><i class="fa fa-info-circle"></i></div>
              <div>
                <div>
                  <strong>{$DAYS_REMAINING}</strong> day{if $DAYS_REMAINING > 1}s{/if}
                  left in trial
                </div>
                <div class="progress-container">
                  <div class="progress-bar-modern">
                    <div class="progress-fill-modern" style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {elseif $DAYS_REMAINING > 3}
            <div class="alert-modern days-4">
              <div class="icon"><i class="fa fa-info-circle"></i></div>
              <div>
                <div>
                  <strong>{$DAYS_REMAINING}</strong> day{if $DAYS_REMAINING > 1}s{/if}
                  left in trial
                </div>
                <div class="progress-container">
                  <div class="progress-bar-modern">
                    <div class="progress-fill-modern" style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {elseif $DAYS_REMAINING > 1}
            <div class="alert-modern days-2">
              <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
              <div>
                <div>
                  <strong>{$DAYS_REMAINING}</strong> day{if $DAYS_REMAINING > 1}s{/if}
                  left in trial
                </div>
                <div class="progress-container">
                  <div class="progress-bar-modern">
                    <div class="progress-fill-modern" style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {elseif $DAYS_REMAINING == 1}
            <div class="alert-modern days-2">
              <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
              <div>
                <div><strong>1</strong> day left in trial</div>
                <div class="progress-container">
                  <div class="progress-bar-modern">
                    <div class="progress-fill-modern" style="width: {min(100, 100 - ($DAYS_REMAINING/$DAYS_DIFF)*100)}%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {elseif $DAYS_REMAINING == 0}
            <div class="alert-modern warning">
              <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
              <div>
                <div><strong>Trial expires today!</strong></div>
                <small>Upgrade now to continue using all features</small>
              </div>
            </div>
          {else}
            <div class="alert-modern danger">
              <div class="icon"><i class="fa fa-times-circle"></i></div>
              <div>
                <div>
                  <strong>Trial expired {$DAYS_REMAINING * -1} day{if $DAYS_REMAINING <
                  -1}s{/if} ago.</strong>
              </div>
              <small>Subscribe now to restore access</small>
            </div>
          </div>
        {/if} 
      {/if}

      <div class="action-buttons">
        {if $DAYS_REMAINING <= 0}
          <a href="index.php?module=PricingPlans&parent=Settings&view=List"> <button class="btn-modern danger"
              id="subscribe-btn">
              <i class="fa fa-rocket"></i> Subscribe Now
            </button></a>
        {elseif $DAYS_REMAINING == 0}
          <a href="index.php?module=PricingPlans&parent=Settings&view=List"></a><button class="btn-modern warning"
            id="subscribe-btn">
            <i class="fa fa-bolt"></i> Upgrade Immediately
          </button></a>
        {else}
          <a href="index.php?module=PricingPlans&parent=Settings&view=List"> <button class="btn btn-modern primary"
              id="subscribe-btn">
              <i class="fa fa-arrow-up"></i> Upgrade Now
            </button></a>
        {/if}
        <a href="index.php?module=PricingPlans&parent=Settings&view=List"> <button class="btn btn-modern outline">
            <i class="fa fa-info"></i> View Plans
          </button></a>
      </div>

      {elseif $API_RECORD.cf_875 == 'Paid'}
      {if isset($SUBS_DAYS_REMAINING)}
        {if $SUBS_DAYS_REMAINING > 14}
          <div class="alert-modern info">

            <div class="icon"><i class="fa fa-star"></i></div>
            <div>
              <!-- <div><strong>Subscription:</strong> {$API_RECORD.sub_status}</div> -->
              <div><strong>Subscription Plan:</strong> {$API_RECORD.subscription_id}</div>
              <div><strong>Number Of Users:</strong> {$API_RECORD.no_of_users}
                {if $API_RECORD.no_of_users == 1}User{else}Users{/if}</div>
              <div><strong>Expiry Date:</strong> {$API_RECORD.sub_expiry_date}</div>
              <!-- <small
                  >Thank you for subscribing! Enjoy full access to all
                  features.</small
                > -->
            </div>
          </div>
        {else if $SUBS_DAYS_REMAINING > 3}
          <div class="alert-modern days-4">
            <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
            <div>
              <p>
                <strong>{$SUBS_DAYS_REMAINING}</strong> day{if $SUBS_DAYS_REMAINING > 1}s{/if}
                left in your subscription. Please renew it to enjoy CRM benefits without interruption.
              </p>
              <div><strong>Subscription Plan:</strong> {$API_RECORD.subscription_id}</div>
              <div><strong>Number Of Users:</strong> {$API_RECORD.no_of_users}
                {if $API_RECORD.no_of_users == 1}User{else}Users{/if}</div>
              <div><strong>Expiry Date:</strong> {$API_RECORD.sub_expiry_date}</div>
              <!-- <small
                  >Thank you for subscribing! Enjoy full access to all
                  features.</small
                > -->
            </div>
          </div>
        {else if $SUBS_DAYS_REMAINING > 0}
          <div class="alert-modern danger">
            <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
            <div>
              <p>
                <strong>{$SUBS_DAYS_REMAINING}</strong> day{if $SUBS_DAYS_REMAINING > 1}s{/if}
                left in your subscription. Please renew it to enjoy CRM benefits without interruption.
              </p>
              <div><strong>Subscription Plan:</strong> {$API_RECORD.subscription_id}</div>
              <div><strong>Number Of Users:</strong> {$API_RECORD.no_of_users}
                {if $API_RECORD.no_of_users == 1}User{else}Users{/if}</div>
              <div><strong>Expiry Date:</strong> {$API_RECORD.sub_expiry_date}</div>
              <!-- <small
                  >Thank you for subscribing! Enjoy full access to all
                  features.</small
                > -->
            </div>
          </div>
        {else if $SUBS_DAYS_REMAINING == 0}
          <div class="alert-modern danger">
            <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
            <div>
              <p>
                Plan expiring today. Please renew it immediatly to enjoy CRM benefits without interruption.
              </p>
              <div><strong>Subscription Plan:</strong> {$API_RECORD.subscription_id}</div>
              <div><strong>Number Of Users:</strong> {$API_RECORD.no_of_users}
                {if $API_RECORD.no_of_users == 1}User{else}Users{/if}</div>
              <div><strong>Expiry Date:</strong> {$API_RECORD.sub_expiry_date}</div>
              <!-- <small
                  >Thank you for subscribing! Enjoy full access to all
                  features.</small
                > -->
            </div>
          </div>
        {else}
          <div class="alert-modern danger">
            <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
            <div>
              <p>
                <strong>Plan expired. Please renew it to restart the subscription.</strong>
              </p>
              <div><strong>Expired on:</strong> {$API_RECORD.sub_expiry_date}</div>
            </div>
          </div>
        {/if}
        <div class="action-buttons">

          {if $SUBS_DAYS_REMAINING > 14}
            <a href="index.php?module=PricingPlans&parent=Settings&view=List"><button class="btn-modern primary">
                <i class="fa fa-tasks"></i> Manage Subscription
              </button></a>
            <a href="index.php?module=PaymentDetails&parent=Settings&view=List"><button class="btn-modern outline">
                <i class="fa fa-credit-card"></i> Payment Details
              </button></a>
          {else if $SUBS_DAYS_REMAINING >= 0}
            <a href="index.php?module=PricingPlans&parent=Settings&view=List"> <button class="btn btn-modern primary"
                id="subscribe-btn">
                <i class="fa fa-arrow-up"></i> Renew Now
              </button></a>
            <a href="index.php?module=PricingPlans&parent=Settings&view=List"> <button class="btn btn-modern outline">
                <i class="fa fa-info"></i> View Plans
              </button></a>
          {else}
            <a href="index.php?module=PricingPlans&parent=Settings&view=List"> <button class="btn btn-modern danger"
                id="subscribe-btn">
                <i class="fa fa-arrow-up"></i> Renew Now
              </button></a>
            <a href="index.php?module=PricingPlans&parent=Settings&view=List"> <button class="btn btn-modern outline">
                <i class="fa fa-info"></i> View Plans
              </button></a>
          {/if}
        </div>
      {/if}
      {/if}
    </div>
    {/if}
  </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

</script>