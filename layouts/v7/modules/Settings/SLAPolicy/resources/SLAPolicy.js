/*+***********************************************************************************
 * SLA Policy Settings JavaScript
 ************************************************************************************/

jQuery(document).ready(function($) {
    'use strict';

    // Add escalation rule button handler
    $('#btn-add-escalation-rule').on('click', function() {
        var template = document.getElementById('escalation-rule-template');
        if (template) {
            var clone = template.content.cloneNode(true);
            $('#escalation-rules-container').append(clone);
        }
    });

    // Form validation
    $('#sla-policy-form').on('submit', function(e) {
        var name = $('input[name="name"]').val().trim();
        var priority = $('select[name="priority"]').val();
        var responseHours = parseFloat($('input[name="response_hours"]').val());
        var resolutionHours = parseFloat($('input[name="resolution_hours"]').val());

        if (!name) {
            alert('Please enter a policy name.');
            e.preventDefault();
            return false;
        }
        if (!priority) {
            alert('Please select a priority level.');
            e.preventDefault();
            return false;
        }
        if (isNaN(responseHours) || responseHours <= 0) {
            alert('Please enter a valid response time.');
            e.preventDefault();
            return false;
        }
        if (isNaN(resolutionHours) || resolutionHours <= 0) {
            alert('Please enter a valid resolution time.');
            e.preventDefault();
            return false;
        }
        if (responseHours > resolutionHours) {
            alert('Response time should be less than or equal to resolution time.');
            e.preventDefault();
            return false;
        }

        return true;
    });

    // Delete confirmation
    $('a[href*="action=Delete"]').on('click', function(e) {
        if (!confirm('Are you sure you want to delete this SLA policy? All associated escalation rules and tracking data will be removed.')) {
            e.preventDefault();
            return false;
        }
    });

    // Toggle action target visibility based on action type
    $(document).on('change', 'select[name="action_type[]"]', function() {
        var targetSelect = $(this).closest('.escalation-rule-row').find('select[name="target_user_id[]"]');
        if ($(this).val() === 'increase_priority') {
            targetSelect.prop('disabled', true).val('');
        } else {
            targetSelect.prop('disabled', false);
        }
    });

    // Initialize existing rules
    $('select[name="action_type[]"]').trigger('change');
});
