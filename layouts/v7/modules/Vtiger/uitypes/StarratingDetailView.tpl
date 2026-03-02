{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}

{strip}
    {assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
    <div class="starrating-detail" style="font-size: 16px;">
        {for $i=1 to 5}
            <i class="fa fa-star" style="color: {if $FIELD_VALUE >= $i}#f39c12{else}#e0e0e0{/if};"></i>
        {/for}
        <span class="value" data-field-type="{$FIELD_MODEL->getFieldDataType()}"
            style="display:none;">{$FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue'))}</span>
    </div>
{/strip}