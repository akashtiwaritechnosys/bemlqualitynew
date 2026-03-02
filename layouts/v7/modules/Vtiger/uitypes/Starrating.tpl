{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}

{strip}
    {assign var="FIELD_INFO" value=$FIELD_MODEL->getFieldInfo()}
    {assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
    {if (!$FIELD_NAME)}
        {assign var="FIELD_NAME" value=$FIELD_MODEL->getFieldName()}
    {/if}
    {assign var="FIELD_VALUE" value=$FIELD_MODEL->get('fieldvalue')}
    <div class="starrating-container inputElement" id="{$FIELD_NAME}_wrapper" style="font-size: 20px; padding: 5px 0;">
        <input type="hidden" name="{$FIELD_NAME}" id="{$FIELD_NAME}_hidden" value="{$FIELD_VALUE}"
            {if $FIELD_INFO["mandatory"] eq true} data-rule-required="true" {/if} />
        {for $i=1 to 5}
            <i class="fa fa-star star-btn" data-value="{$i}"
                style="cursor: pointer; margin-right: 4px; color: {if $FIELD_VALUE >= $i}#f39c12{else}#e0e0e0{/if};"></i>
        {/for}
    </div>
    <script type="text/javascript">
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function() {
                // Use event delegation to handle dynamically loaded content or duplicate IDs
                var containerClass = '.starrating-container';

                jQuery('body').off('click', containerClass + ' .star-btn');
                jQuery('body').off('mouseover', containerClass + ' .star-btn');
                jQuery('body').off('mouseout', containerClass);

                jQuery('body').on('click', containerClass + ' .star-btn', function() {
                    var val = jQuery(this).data('value');
                    var wrapper = jQuery(this).closest(containerClass);
                    var hiddenInput = wrapper.find('input[type="hidden"]');
                    var stars = wrapper.find('.star-btn');

                    hiddenInput.val(val).trigger('change');

                    stars.each(function() {
                        if (jQuery(this).data('value') <= val) {
                            jQuery(this).css('color', '#f39c12');
                        } else {
                            jQuery(this).css('color', '#e0e0e0');
                        }
                    });
                });

                jQuery('body').on('mouseover', containerClass + ' .star-btn', function() {
                    var val = jQuery(this).data('value');
                    var wrapper = jQuery(this).closest(containerClass);
                    var stars = wrapper.find('.star-btn');

                    stars.each(function() {
                        if (jQuery(this).data('value') <= val) {
                            jQuery(this).css('color', '#f39c12');
                        } else {
                            jQuery(this).css('color', '#e0e0e0');
                        }
                    });
                });

                jQuery('body').on('mouseout', containerClass, function() {
                    var wrapper = jQuery(this);
                    var hiddenInput = wrapper.find('input[type="hidden"]');
                    var val = hiddenInput.val() || 0;
                    var stars = wrapper.find('.star-btn');

                    stars.each(function() {
                        if (jQuery(this).data('value') <= val) {
                            jQuery(this).css('color', '#f39c12');
                        } else {
                            jQuery(this).css('color', '#e0e0e0');
                        }
                    });
                });
            });
        }
    </script>
{/strip}