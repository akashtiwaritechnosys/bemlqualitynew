{* Payment Details Template *}
<link rel="stylesheet" href="layouts/v7/modules/Settings/PaymentDetails/resources/PaymentDetails.css" type="text/css">

<div class="payment-details-container">
    <div class="payment-details-header">
        <h1 class="payment-details-title">Payment Details</h1>
    </div>
    
    {if isset($API_ERROR)}
        <div class="alert alert-danger">
            <strong>Error:</strong> {$API_ERROR}
        </div>
    {/if}
    
    <div class="payment-filters">
        <select id="statusFilter" class="filter-select">
            <option value="all">All Status</option>
            <option value="completed">Completed</option>
            <option value="failed">Failed</option>
            <option value="pending">Pending</option>
        </select>
        
        <select id="sortFilter" class="filter-select">
            <option value="newest">Newest First</option>
            <option value="oldest">Oldest First</option>
        </select>
    </div>
    
    <div id="paymentCardsContainer" class="payment-cards-container">
        {if isset($PAYMENT_RECORDS) && !empty($PAYMENT_RECORDS)}
            {foreach from=$PAYMENT_RECORDS item=payment}
                <div class="payment-card" data-transaction-id="{$payment.transaction_id}" data-status="{$payment.status}">
                    <div class="payment-card-header">
                        <div class="payment-date">
                            {if $payment.payment_date}
                                {$payment.payment_date}
                            {elseif $payment.created_time}
                                {$payment.created_time|substr:0:10}
                            {else}
                                N/A
                            {/if}
                        </div>
                        <div class="payment-status status-{$payment.status}">
                            {$payment.status_label}
                        </div>
                    </div>
                    
                    <div class="payment-card-body">
                        <div class="plan-details">
                            <div class="plan-name">
                                {if $payment.plan_details}
                                    {$payment.plan_details}
                                {else}
                                    Enterprise Plan
                                {/if}
                            </div>
                            <div class="plan-description">
                                {if $payment.transaction_type}
                                    {$payment.transaction_type}
                                {else}
                                    Subscription Payment
                                {/if}
                            </div>
                        </div>
                        
                        <div class="payment-meta">
                            <div class="meta-item">
                                <span class="meta-label">Order ID</span>
                                <span class="meta-value">
                                    {if $payment.order_id}
                                        {$payment.order_id}
                                    {else}
                                        N/A
                                    {/if}
                                </span>
                            </div>
                            
                            {if $payment.status == 'failed'}
                            <div class="meta-item">
                                <span class="meta-label">Transaction ID</span>
                                <span class="meta-value">{$payment.transaction_id}</span>
                            </div>
                            {/if}
                        </div>
                        
                        <div class="payment-amount">
                            {$payment.formatted_amount}
                        </div>
                        
                        <div class="payment-method">
                            via {$payment.payment_method}
                            {if $payment.status == 'failed' && $payment.error_message}
                                <div class="error-message" style="font-size: 12px; color: #d93025; margin-top: 5px;">
                                    Reason: {$payment.error_message}
                                </div>
                            {/if}
                        </div>
                    </div>
                    
                    <div class="payment-card-footer">
                        {if $payment.status == 'completed' && $payment.can_download_invoice}
                        <button class="btn-download" onclick="paymentDetails.downloadInvoice('{$payment.invoice_download_url}')">
                            <i class="fa fa-download"></i> Download Invoice
                        </button>
                        {/if}
                        
                        {if $payment.status == 'failed'}
                        <button class="btn-retry" onclick="paymentDetails.retryPayment('{$payment.transaction_id}')">
                            <i class="fa fa-refresh"></i> Retry Payment
                        </button>
                        {/if}
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="no-payments">
                <div class="no-payments-icon">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="no-payments-title">No Payment History</div>
                <div class="no-payments-description">
                    {if isset($API_ERROR)}
                        Unable to load payment details. Please try again later.
                    {else}
                        You haven't made any payments yet. Your payment history will appear here.
                    {/if}
                </div>
            </div>
        {/if}
    </div>
</div>

<script src="layouts/v7/modules/Settings/PaymentDetails/resources/PaymentDetails.js"></script>