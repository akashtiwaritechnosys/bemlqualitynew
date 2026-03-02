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
    {assign var="RAW_VALUE" value=$FIELD_MODEL->get('fieldvalue')}
    {if !empty($RAW_VALUE)}
        {assign var="VALUES" value=explode(' |##| ', $RAW_VALUE)}
        <ul class="list-unstyled">
            {foreach item=VALUE from=$VALUES}
                <li><i class="fa fa-check-square-o"></i>&nbsp;{vtranslate($VALUE, $MODULE)}</li>
            {/foreach}
        </ul>
    {/if}
{/strip}