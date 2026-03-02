var paymentDetails = {
    
    init: function() {
        this.bindEvents();
        this.applyFilters();
    },
    
    bindEvents: function() {
        // Status filter
        $('#statusFilter').on('change', function() {
            paymentDetails.applyFilters();
        });
        
        // Sort filter
        $('#sortFilter').on('change', function() {
            paymentDetails.applyFilters();
        });
    },
    
    applyFilters: function() {
        var statusFilter = $('#statusFilter').val();
        var sortFilter = $('#sortFilter').val();
        
        $('.payment-card').each(function() {
            var cardStatus = $(this).data('status');
            var showCard = (statusFilter === 'all' || cardStatus === statusFilter);
            $(this).toggle(showCard);
        });
        
        this.sortPayments(sortFilter);
    },
    
    sortPayments: function(sortType) {
        var container = $('#paymentCardsContainer');
        var cards = container.find('.payment-card').get();
        
        cards.sort(function(a, b) {
            var dateA = new Date($(a).find('.payment-date').text());
            var dateB = new Date($(b).find('.payment-date').text());
            
            if (sortType === 'newest') {
                return dateB - dateA;
            } else {
                return dateA - dateB;
            }
        });
        
        $.each(cards, function(idx, card) {
            container.append(card);
        });
    },
    
    downloadInvoice: function(invoiceUrl) {
        if (invoiceUrl) {
            window.open(invoiceUrl, '_blank');
        } else {
            alert('Invoice download link is not available.');
        }
    },
    
    retryPayment: function(transactionId) {
        if (confirm('Do you want to retry this payment?')) {
            // Implement retry payment logic
            console.log('Retrying payment for transaction:', transactionId);
            // You might want to redirect to payment page or call an API
            alert('Redirecting to payment page...');
        }
    },
    
    refreshPayments: function() {
        // Implement refresh logic to reload payments from server
        location.reload();
    }
};

// Initialize when document is ready
$(document).ready(function() {
    paymentDetails.init();
});