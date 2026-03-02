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
<div style="padding: 20px;">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-4">
            <div style="background-color:#f8f9fa; border-left: 4px solid #007bff; padding: 15px; border-radius: 4px;">
                <h4 style="margin: 0 0 5px 0; color: #007bff;">{$DATA.total_leads}</h4>
                <small>{vtranslate('Total Leads', $MODULE_NAME)}</small>
            </div>
        </div>
        <div class="col-md-4">
            <div style="background-color:#f8f9fa; border-left: 4px solid #28a745; padding: 15px; border-radius: 4px;">
                <h4 style="margin: 0 0 5px 0; color: #28a745;">{$DATA.converted_leads}</h4>
                <small>{vtranslate('Converted', $MODULE_NAME)}</small>
            </div>
        </div>
        <div class="col-md-4">
            <div style="background-color:#f8f9fa; border-left: 4px solid #17a2b8; padding: 15px; border-radius: 4px;">
                <h4 style="margin: 0 0 5px 0; color: #17a2b8;">{$DATA.conversion_rate}%</h4>
                <small>{vtranslate('Conversion Rate', $MODULE_NAME)}</small>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px;">
        <h5 style="margin-bottom: 15px; color: #333; font-weight: 600;">{vtranslate('Lead Funnel', $MODULE_NAME)}</h5>
        <div class="row">
            <div class="col-md-3">
                <div style="background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; padding: 15px; text-align: center; border-radius: 4px;">
                    <h3 style="margin: 0; font-weight: bold;">{$DATA.cold}</h3>
                    <small>{vtranslate('Cold', $MODULE_NAME)}</small>
                </div>
            </div>
            <div class="col-md-3">
                <div style="background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%); color: #333; padding: 15px; text-align: center; border-radius: 4px;">
                    <h3 style="margin: 0; font-weight: bold;">{$DATA.warm}</h3>
                    <small>{vtranslate('Warm', $MODULE_NAME)}</small>
                </div>
            </div>
            <div class="col-md-3">
                <div style="background: linear-gradient(135deg, #ff9800 0%, #e68900 100%); color: white; padding: 15px; text-align: center; border-radius: 4px;">
                    <h3 style="margin: 0; font-weight: bold;">{$DATA.hot}</h3>
                    <small>{vtranslate('Hot', $MODULE_NAME)}</small>
                </div>
            </div>
            <div class="col-md-3">
                <div style="background: linear-gradient(135deg, #f44336 0%, #d32f2f 100%); color: white; padding: 15px; text-align: center; border-radius: 4px;">
                    <h3 style="margin: 0; font-weight: bold;">{$DATA.very_hot}</h3>
                    <small>{vtranslate('Very Hot', $MODULE_NAME)}</small>
                </div>
            </div>
        </div>
    </div>
</div>
