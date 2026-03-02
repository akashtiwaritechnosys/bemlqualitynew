{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is: vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{strip}
    {assign var="FIELD_INFO" value=$FIELD_MODEL->getFieldInfo()}
    {assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
    {assign var="FIELD_VALUE_LIST" value=explode(' |##| ',$FIELD_MODEL->get('fieldvalue'))}
    {assign var=PICKLIST_VALUES value=$FIELD_INFO['picklistvalues']}
    {if !empty($FIELD_INFO['editablepicklistvalues'])}
        {assign var=PICKLIST_VALUES value=$FIELD_INFO['editablepicklistvalues']}
    {/if}

    <div class="multiCheckboxContainer">
        <input type="hidden" name="{$FIELD_MODEL->getFieldName()}" value="" data-fieldtype="multicheckbox" />
        {foreach item=PICKLIST_VALUE key=PICKLIST_NAME from=$PICKLIST_VALUES name=checkboxLoop}
            <div class="checkbox" style="margin-top: 5px; margin-bottom: 5px;">
                <label>
                    <input type="checkbox" name="{$FIELD_MODEL->getFieldName()}[]"
                        value="{Vtiger_Util_Helper::toSafeHTML($PICKLIST_NAME)}" data-fieldtype="multicheckbox"
                        {if in_array(Vtiger_Util_Helper::toSafeHTML($PICKLIST_NAME), $FIELD_VALUE_LIST)} checked {/if}
                        {if $FIELD_INFO["mandatory"] eq true && $smarty.foreach.checkboxLoop.first} data-rule-required="true"
                            {/if} {if php7_count($FIELD_INFO['validator'])}
                        data-specific-rules='{ZEND_JSON::encode($FIELD_INFO["validator"])}' {/if} />
                    &nbsp;{vtranslate($PICKLIST_VALUE, $MODULE)}
                </label>
            </div>
        {/foreach}
    </div>
{/strip}