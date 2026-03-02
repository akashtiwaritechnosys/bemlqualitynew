/*********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

Vtiger_Index_Js("ITS4YouKanbanView_ITS4YouKanbanView_Js", {}, {
    draggable: '.entries.ui-draggable',
    getDraggable: function () {
        return jQuery(this.draggable);
    },
    getModuleName: function () {
        return "ITS4YouKanbanView";
    },
    clearExistingCustomScroll: function () {
        var blocksList = jQuery(".contentsBlock");
        blocksList.each(function (index, blockElement) {
            var blockElement = jQuery(blockElement);
            var scrollableElement = blockElement.find('.scrollable');
            scrollableElement.mCustomScrollbar('destroy');
        });
    },
    registerTaskDragEvent: function () {
        const self = this;
        var container = jQuery('#taskManagementContainer');
        container.find(self.draggable).draggable({
            appendTo: ".data-body", revert: "invalid", helper: 'clone', cursor: 'move',
            drag: function (e, ui) {
                ui.helper.css({
                    'width': '15%',
                    'background-color': 'white',
                    'height': 'auto'
                });
            }
        });
    },
    registerTaskDropEvent: function () {
        var thisInstance = this;
        var container = jQuery('#taskManagementContainer');
        container.find(".ui-droppable").droppable({
            'accept': thisInstance.draggable,
            drop: function (event, ui) {
                var currentBlock = jQuery(this);
                var picklistValueName = currentBlock.find('.content').data("picklist_value_name");

                var colors = JSON.parse(jQuery('input[name="colors"]').val());

                var draggedElement = jQuery(ui.draggable);
                var draggedElementTask = draggedElement.find(".task");
                var draggedElementPriority = draggedElementTask.data("picklist_value_name");

                var draggedElementHeaderSpan = $(draggedElement).closest('div.content').siblings('div.header').find('.title').find('span');
                var draggedElementCountOfItems = draggedElementHeaderSpan.data('coi');
                var newDraggedElementCountOfItems = draggedElementCountOfItems - 1;
                draggedElementHeaderSpan.html(newDraggedElementCountOfItems);
                draggedElementHeaderSpan.data("coi", newDraggedElementCountOfItems);

                var currentBlockHeaderSpan = currentBlock.find('.title').find('span');
                var oldCountOfItemsInCurrentBlock = currentBlockHeaderSpan.data('coi');
                var newCountOfItemsInCurrentBlock = oldCountOfItemsInCurrentBlock + 1;
                currentBlockHeaderSpan.data('coi', newCountOfItemsInCurrentBlock);
                currentBlockHeaderSpan.html(newCountOfItemsInCurrentBlock);

                var color = colors[picklistValueName];

                if (draggedElementPriority !== picklistValueName) {
                    var draggedElementrecordID = draggedElementTask.data("recordid");
                    var fieldNameValueMap = {
                        "task_picklist_value_name": picklistValueName,
                    };
                    app.helper.showProgress();
                    thisInstance.saveFieldValue(draggedElementrecordID, fieldNameValueMap).then(function (data) {
                        app.helper.hideProgress();
                        draggedElementTask.attr("data-picklist_value_name", picklistValueName).data('picklist_value_name', picklistValueName);
                        draggedElementTask.css({ "border-left": "4px solid " + color });
                        currentBlock.find("." + picklistValueName.replace(/[\ \.]/g, '-').toLowerCase() + "-entries").prepend(draggedElement);

                        thisInstance.updateRecordContent(draggedElementrecordID);

                        thisInstance.clearExistingCustomScroll();
                    });
                }
            }
        });
    },
    saveFieldValue: function (recordId, fieldNameValueMap) {
        var aDeferred = jQuery.Deferred();

        var data = {};
        if (typeof fieldNameValueMap != 'undefined') {
            data = fieldNameValueMap;
        }

        data['record'] = recordId;
        data['module'] = this.getModuleName();
        data['source_module'] = jQuery('#source_module_name').val();
        data['action'] = 'SaveAjax';

        app.request.post({ data: data }).then(function (error, responseData) {
            if (error === null) {
                app.helper.showSuccessNotification({ "message": app.vtranslate('JS_RECORD_MOVED_SUCCESSFULLY') });
                aDeferred.resolve(responseData);
            } else {
                app.helper.showErrorNotification({ "message": error });
            }
        });

        return aDeferred.promise();
    },
    updateRecordContent: function (recordId) {
        var aDeferred = jQuery.Deferred();

        var data = {};
        data['record'] = recordId;
        data['module'] = this.getModuleName();
        data['source_module'] = jQuery('#source_module_name').val();
        data['view'] = 'AjaxRecordContent';

        app.request.post({ data: data }).then(function (error, responseData) {
            if (error === null) {
                var recordDetail = jQuery('#kanbanRecordContent_' + recordId);
                recordDetail.empty();
                recordDetail.html(responseData);
                aDeferred.resolve(responseData);
            } else {
                app.helper.showErrorNotification({ "message": error });
            }
        });

        return aDeferred.promise();
    },
    registerQuickPreview: function () {
        var thisInstance = this;
        var container = jQuery('#taskManagementContainer');

        container.on('click', '#quickPreview', function (e) {
            e.preventDefault();
            var element = jQuery(e.currentTarget);
            var recordId = element.data('id');
            var vtigerInstance = Vtiger_Index_Js.getInstance();
            var sourceModuleName = jQuery('#source_module_name').val();
            vtigerInstance.showQuickPreviewForId(recordId, sourceModuleName);
        });
    },
    registerChangeCustomViewEvent: function () {
        var thisInstance = this;
        var sourceModuleName = jQuery('#source_module_name').val();
        var moduleName = app.getModuleName();

        jQuery('#moduleFilters').change(function () {
            var viewId = jQuery(this).val();
            var content = jQuery('.datacontent');

            app.helper.showProgress();
            var params = {
                'module': moduleName,
                'view': 'List',
                'sourceModule': sourceModuleName,
                'viewname': viewId
            };

            app.request.post({ data: params }).then(function (error, response) {
                if (error === null) {
                    content.empty();
                    content.html(response);
                    app.helper.hideProgress();
                    thisInstance.registerListEvents();
                    thisInstance.registerQuickPreview();
                }
            });
        });
    },
    registerEntriesScroll: function () {
        const params = {
            autoHideScrollbar: false
        },
            recordHeight = this.getDraggable().height();

        if (recordHeight) {
            params.setHeight = (recordHeight + 15) * 20;
        }

        app.helper.showVerticalScroll(jQuery('.scrollable'), params);
    },
    registerMenuColor: function () {
        jQuery('.modules-menu ul li.active a').css({
            'border-color': jQuery('.app-indicator-icon-container').css('background-color'),
        });
    },
    registerChangeAssignedUsers: function () {
        const thisInstance = this,
            sourceModuleName = jQuery('#source_module_name').val(),
            viewId = jQuery('#custom_view_id').val(),
            moduleName = app.getModuleName();

        jQuery('#assignedUserFilter').change(function () {
            app.helper.showProgress();

            const content = jQuery('.datacontent'),
                params = {
                    'module': moduleName,
                    'view': 'List',
                    'sourceModule': sourceModuleName,
                    'viewname': viewId,
                    'usersFilter': jQuery(this).val(),
                };

            app.request.post({ data: params }).then(function (error, data) {
                app.helper.hideProgress();

                if (error === null) {
                    content.empty();
                    content.html(data);
                    thisInstance.registerListEvents();
                    thisInstance.registerQuickPreview();
                }
            });
        });
    },
    registerTaskSortableEvent: function () {
        jQuery('.dataEntries').sortable({
            connectWith: '.dataEntries',
            placeholder: 'storable-placeholder',
            cursor: 'grabbing',
        });
    },
    isReadOnly: function () {
        return '1' === jQuery('#readonly').val();
    },
    registerListEvents: function () {
        // if (!this.isReadOnly()) {
        this.registerTaskSortableEvent();
        this.registerTaskDropEvent();
        // }
    },
    registerEvents: function () {
        this.registerListEvents();
        this.registerQuickPreview();
        this.registerChangeCustomViewEvent();
        this.registerChangeAssignedUsers();
    }
});

jQuery(document).ready(function () {
    var instance = new ITS4YouKanbanView_ITS4YouKanbanView_Js();
    instance.registerEvents();
});
