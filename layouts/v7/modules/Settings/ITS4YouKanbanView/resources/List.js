/*********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

Settings_Vtiger_List_Js("Settings_ITS4YouKanbanView_List_Js", {}, {
    removeKanbanSettingsForModule: function () {
        var thisInstance = this;
        jQuery('.deleteKanbanViewSettings').on('click', function (e) {
            e.stopPropagation();
            app.helper.showConfirmationBox({message: app.vtranslate('LBL_DELETE_CONFIRMATION')}).then(function () {
                var tabId = jQuery(e.currentTarget).closest('tr').data('tabid');
                var fieldId = jQuery(e.currentTarget).closest('tr').data('fieldid');

                app.helper.showProgress();
                var params = {
                    module: app.getModuleName(),
                    parent: app.getParentModuleName(),
                    action: "DeleteAjax",
                    mode: "deleteKanbanSettings",
                    tabid: tabId,
                    fieldid: fieldId
                };

                app.request.post({data: params}).then(function (error, response) {
                    app.helper.hideProgress();
                    if (error === null) {
                        app.helper.showSuccessNotification({message: app.vtranslate('JS_KANBAN_SETTINGS_REMOVED_SUCCESSFULLY')});
                        thisInstance.updateIndexContentAfterSettingsRemoval();
                    } else {
                        app.helper.showErrorNotification({message: app.vtranslate(error.message)});
                    }
                });
            });
        });
    },
    editKanbanViewSettingsClickAction: function () {
        jQuery('.editKanbanViewSettings').on('click', function (e) {
            var editUrl = jQuery(e.currentTarget).closest('tr').data('editurl');

            window.location.href = editUrl;
        });
    },
    rowClickEvent: function () {
        jQuery('.listViewEntries').on('click', function (e) {
            var editUrl = jQuery(e.currentTarget).data('editurl');

            window.location.href = editUrl;
        });
    },
    updateIndexContentAfterSettingsRemoval: function () {
        var aDeferred = jQuery.Deferred();

        var thisInstance = this;
        var viewParams = {
            module: app.getModuleName(),
            parent: app.getParentModuleName(),
            view: "List",
        };
        app.helper.showProgress();
        app.request.post({data: viewParams}).then(function (error, response) {
            app.helper.hideProgress();
            if (error === null) {
                jQuery('#indexViewContent').empty().html(response);
                thisInstance.addKanbanViewSettingsClickAction();
                thisInstance.editKanbanViewSettingsClickAction();
                thisInstance.rowClickEvent();
                aDeferred.resolve(response);
            }
        });

        return aDeferred.promise();
    },
    addKanbanViewSettingsClickAction: function () {
        jQuery('.addKanbanSettings ').on('click', function (element) {
            var listViewUrl = jQuery(element.currentTarget).data('url');
            window.location.href = listViewUrl;
        });
    },
    registerEvents: function () {
        this.removeKanbanSettingsForModule();
        this.addKanbanViewSettingsClickAction();
        this.editKanbanViewSettingsClickAction();
        this.rowClickEvent();
    }
});
