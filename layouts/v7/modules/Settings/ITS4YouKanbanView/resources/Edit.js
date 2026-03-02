/*********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

Settings_Vtiger_List_Js("Settings_ITS4YouKanbanView_Edit_Js", {}, {
    getContainer() {
        return $('.kanbanEditContainer');
    },
    registerModuleChangeEvent: function () {
        const self = this;

        self.getContainer().on('change', '#pickListModules', function (e) {
            let selectedModule = jQuery(e.currentTarget).val();

            if (selectedModule.length <= 0) {
                app.helper.showErrorNotification({message: app.vtranslate('JS_PLEASE_SELECT_MODULE')});
                return;
            }

            self.loadCustomViewDetailsForModule(selectedModule);
            self.loadPicklistDetailsForModule(selectedModule);
        });
    },
    loadCustomViewDetailsForModule(selectedModule) {
        let params = {
            module: app.getModuleName(),
            parent: app.getParentModuleName(),
            source_module: selectedModule,
            view: 'IndexAjax',
            mode: 'getCustomViewDetailsForModule'
        };

        app.helper.showProgress();
        app.request.post({data: params}).then(function (error, data) {
            app.helper.hideProgress();

            jQuery('#moduleCustomViewContainer').html(data);
            vtUtils.showSelect2ElementView(jQuery('#moduleCustomView'));
        });
    },
    loadPicklistDetailsForModule(selectedModule) {
        let params = {
            module: app.getModuleName(),
            parent: app.getParentModuleName(),
            source_module: selectedModule,
            view: 'IndexAjax',
            mode: 'getPickListDetailsForModule'
        };

        app.helper.showProgress();
        app.request.post({data: params}).then(function (error, data) {
            app.helper.hideProgress();

            jQuery('#modulePickListContainer').html(data);
            vtUtils.showSelect2ElementView(jQuery('#modulePickList'));
            jQuery('#modulePickList').trigger('change');
        });
    },
    loadPickListValueForModule() {
        let params = {
            module: app.getModuleName(),
            parent: app.getParentModuleName(),
            source_module: jQuery('#pickListModules').val(),
            view: 'IndexAjax',
            mode: 'getPickListValueForField',
            pickListFieldId: jQuery('#modulePickList').val(),
            customViewId: jQuery('#moduleCustomView').val(),
        };

        app.helper.showProgress();
        app.request.post({data: params}).then(function (error, data) {
            jQuery('#modulePickListValuesContainer').html(data);
            vtUtils.showSelect2ElementView(jQuery('#role2picklist'));
            app.helper.hideProgress();
        });
    },
    registerModuleCustomViewChangeEvent() {
        const self = this;

        self.getContainer().on('change', '#moduleCustomView', function() {
            self.loadPickListValueForModule();
        });
    },
    registerModulePickListChangeEvent: function () {
        const self = this;

        self.getContainer().on('change', '#modulePickList', function (e) {
            self.loadPickListValueForModule();
        });
    },
    saveEnabledPicklistValues: function () {
        this.getContainer().on('click', '#saveOrder', function (e) {
            let pickListValues = jQuery('#role2picklist option');
            let selectedValues = jQuery('#role2picklist').val();

            let enabledValues = [];
            jQuery.each(pickListValues, function () {
                let currentValue = jQuery(this);
                if (selectedValues && jQuery.inArray(currentValue.val(), selectedValues) > -1) {
                    enabledValues.push(currentValue.data('id'));
                }
            });

            app.helper.showProgress();

            let params = {
                module: app.getModuleName(),
                parent: app.getParentModuleName(),
                action: 'SaveAjax',
                mode: 'savePicklistValues',
                enabled_values: enabledValues,
                picklistName: jQuery('#modulePickList').val(),
                selectedModule: jQuery('#pickListModules').val(),
                customView: jQuery('#moduleCustomView').val(),
            };

            app.request.post({data: params}).then(function (error, data) {
                app.helper.hideProgress();
                if (error === null) {
                    app.helper.showSuccessNotification({message: app.vtranslate('JS_KANBAN_SETTINGS_SAVED_SUCCESSFULLY')});
                } else {
                    app.helper.showErrorNotification({message: app.vtranslate('JS_KANBAN_SETTINGS_NOT_SAVED')});
                }
            });
        });
    },
    registerBackClickEvent: function () {
        this.getContainer().on('click', '#backLink', function (e) {
            window.location.href = jQuery(e.currentTarget).data('backurl');
        });
    },
    registerEvents: function () {
        this.registerModuleChangeEvent();
        this.registerModulePickListChangeEvent();
        this.registerModuleCustomViewChangeEvent()
        this.registerBackClickEvent();
        this.saveEnabledPicklistValues();

        jQuery('#pickListModules').trigger('change');
    }
});
