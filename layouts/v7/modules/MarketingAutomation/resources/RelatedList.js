/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Vtiger_RelatedList_Js("MarketingAutomation_RelatedList_Js",{

},{
	selectedRecordIds : false,
	excludedRecordIds : false,

	loadRelatedList : function(params) {
		var aDeferred = jQuery.Deferred();
		var self = this;
		self._super(params).then(function(data) {
			self.registerEvents();
			aDeferred.resolve(data);
		});
		return aDeferred.promise();
	},

	changeCustomFilterElementView : function() {
		var self = this;
		var filterSelectElement = self.relatedContentContainer.find('#recordsFilter');
		if(filterSelectElement.length > 0){
			vtUtils.showSelect2ElementView(filterSelectElement);
		}
	},

	registerChangeCustomFilterEvent : function() {
		var self = this;
		var filterSelectElement = this.relatedContentContainer.find('#recordsFilter');
		filterSelectElement.change(function(e){
			var element = jQuery(e.currentTarget);
			if (jQuery('.bootbox-confirm .in').length == 0) {
				var message = app.vtranslate('JS_APPENDED_TO_EXISTING_LIST',self.relatedModulename)+'<br><br>'+app.vtranslate('JS_WISH_TO_PROCEED');
				app.helper.showConfirmationBox({'message':message}).then(function(e){
					var cvId = element.find('option:selected').data('id');
					var params = {
						'sourceRecord' : self.parentRecordId,
						'relatedModule' :self.relatedModulename,
						'viewId' : cvId,
						'module' : app.getModuleName(),
						'action': "RelationAjax",
						'mode' : 'addRelationsFromRelatedModuleViewId'
					};
					app.helper.showProgress();
					app.request.post({"data" : params}).then(
						function(responseData) {
							app.helper.hideProgress();
							if(responseData != null && responseData.result != null && responseData.result[0] === false){
								app.helper.showErrorNotification({"message": app.vtranslate('JS_NO_RECORDS_RELATED_TO_THIS_FILTER')});
							} else {
								self.loadRelatedList().then(function() {
									self.triggerRelationAdditionalActions();
								});
							}
						},
						function(textStatus, errorThrown){
							app.helper.hideProgress();
						}
					);
				});
			}
		});
	},

	registerCheckboxClickEvent : function() {
		var self = this;
		self.relatedContentContainer.off('click','.listViewEntriesCheckBox').on('click','.listViewEntriesCheckBox',function(e) {
			var element = jQuery(e.currentTarget);
			var recordId = element.val();
			var selectedIds = self.readSelectedIds(false);
			var excludedIds = self.reladExcludedIds(false);
			if(element.is(":checked")) {
				if(selectedIds != "all") {
					selectedIds.push(recordId);
				} else {
					excludedIds.splice($.inArray(recordId, excludedIds), 1);
				}
				element.closest('tr').addClass('listviewhovercolor');
				self.registerPostSelectionRelatedListActions();
			} else {
				if(selectedIds != "all") {
					selectedIds.splice($.inArray(recordId, selectedIds), 1);
				} else {
					excludedIds.push(recordId);
				}
				element.closest('tr').removeClass('listviewhovercolor');
				self.registerPostSelectionRelatedListActions();
			}
			self.writeSelectedIds(selectedIds);
			self.writeExcludedIds(excludedIds);
			self.selectMainCheck();
		});
	},

	registerMainCheckboxClickEvent : function() {
		var self = this;
		self.relatedContentContainer.off('click', '#listViewEntriesMainCheckBox').on('click', '#listViewEntriesMainCheckBox', function (e) {
			var element = jQuery(e.currentTarget);
			if(element.is(":checked")) {
				var selectedIds = self.readSelectedIds(false);
				var excludedIds = self.reladExcludedIds(false);
				self.relatedContentContainer.find('.listViewEntriesCheckBox').each(function(i, ele){
					var recordId = jQuery(ele).val();
					if(selectedIds != "all") {
						selectedIds.push(recordId);
					} else {
						excludedIds.splice($.inArray(recordId, excludedIds), 1);
					}
					jQuery(ele).prop('checked', true).closest('tr').addClass('listviewhovercolor');;
				});
				self.writeSelectedIds(selectedIds);
				self.writeExcludedIds(excludedIds);
				self.getRecordsCount().then(function(count){
					self.relatedContentContainer.find('#totalRecordsCount').text(count);
					self.relatedContentContainer.find('#selectAllMsgDiv').closest('div.messageContainer').removeClass('hide');
				});
				self.registerPostSelectionRelatedListActions();
			} else {
				var selectedIds = self.readSelectedIds(false);
				var excludedIds = self.reladExcludedIds(false);
				self.relatedContentContainer.find('.listViewEntriesCheckBox').each(function(i, ele){
					var recordId = jQuery(ele).val();
					if(selectedIds != "all") {
						selectedIds.splice($.inArray(recordId, selectedIds), 1);
					} else {
						excludedIds.push(recordId);
					}
					jQuery(ele).prop('checked', false).closest('tr').removeClass('listviewhovercolor');;
				});
				self.writeSelectedIds(selectedIds);
				self.writeExcludedIds(excludedIds);
				self.relatedContentContainer.find('#selectAllMsgDiv').closest('div.messageContainer').addClass('hide');
				self.registerPostSelectionRelatedListActions();
			}
		});
	},

	writeSelectedIds : function(selectedIds) {
		var self = this;
		var element = self.relatedContentContainer.find('#selectedIds');
		element.data('selected-ids', selectedIds);
		self.selectedRecordIds = selectedIds;
	},

	writeExcludedIds : function(excludedIds) {
		var self = this;
		var element = self.relatedContentContainer.find('#excludedIds');
		element.data('excluded-ids', excludedIds);
		self.excludedRecordIds = excludedIds;
	},

	readSelectedIds : function(decode) {
		var self = this;
		var element = self.relatedContentContainer.find('#selectedIds');
		var selectedIds = element.data('selected-ids');
		if(selectedIds == "") {
			selectedIds = new Array();
			self.writeSelectedIds(selectedIds);
		}
		if(decode && typeof selectedIds == "object") {
			selectedIds = JSON.stringify(selectedIds);
		}
		return selectedIds;
	},

	reladExcludedIds : function(decode) {
		var self = this;
		var element = self.relatedContentContainer.find('#excludedIds');
		var excludedIds = element.data('excluded-ids');
		if(excludedIds == "") {
			excludedIds = new Array();
			self.writeExcludedIds(excludedIds);
		}
		if(decode && typeof excludedIds == "object") {
			excludedIds = JSON.stringify(excludedIds);
		}
		return excludedIds;
	},

	registerPostSelectionRelatedListActions : function(){
		// Override if needed for specific actions after selection
	},

	selectMainCheck: function () {
		var self = this;
		var relatedListContainer = self.relatedContentContainer;
		var mainCheckBox = relatedListContainer.find('#listViewEntriesMainCheckBox');
		if (relatedListContainer.find('.listViewEntriesCheckBox').not(":checked").length == 0) {
			mainCheckBox.prop("checked", true);
		} else {
			mainCheckBox.prop("checked", false);
		}
	},

	getRecordsCount : function() {
		var aDeferred = jQuery.Deferred();
		var self = this;
		var recordCountEle = self.relatedContentContainer.find('#recordsCount');
		var recordsCount = recordCountEle.val();
		if(recordsCount != "") {
			aDeferred.resolve(recordsCount);
		} else {
			var params = {
				'module' : app.getModuleName(),
				'action' : 'DetailAjax',
				'mode' : 'getRecordsCount',
				'relatedModule' : self.relatedModulename,
				'record' : self.parentRecordId,
				'tab_label' : self.relatedContentContainer.find('#tab_label').val()
			};
			app.helper.showProgress();
			app.request.post({"data" : params}).then(function(error, responseData) {
				app.helper.hideProgress();
				var count = responseData.count;
				recordCountEle.val(count);
				aDeferred.resolve(count);
			});
		}
		return aDeferred.promise();
	},

	registerSelectAllClickEvent : function() {
		var self = this;
		var selectAllContainer = self.relatedContentContainer.find('#selectAllMsgDiv');
		selectAllContainer.click(function(){
			self.relatedContentContainer.find('.listViewEntriesCheckBox').each(function(i, ele){
				jQuery(ele).attr('checked', true);
			});
			self.relatedContentContainer.find('#listViewEntriesMainCheckBox').attr('checked', true);
			self.writeSelectedIds("all");
			selectAllContainer.closest('div.messageContainer').addClass('hide');
			self.relatedContentContainer.find('#deSelectAllMsgDiv').closest('div.messageContainer').removeClass('hide');
		});
	},

	registerDeselectAllClickEvent : function() {
		var self = this;
		var deselectAllContainer = self.relatedContentContainer.find('#deSelectAllMsgDiv');
		deselectAllContainer.click(function(){
			self.relatedContentContainer.find('.listViewEntriesCheckBox').each(function(i, ele){
				jQuery(ele).attr('checked', false);
			});
			self.relatedContentContainer.find('#listViewEntriesMainCheckBox').attr('checked', false);
			self.writeSelectedIds('');
			self.writeExcludedIds('');
			deselectAllContainer.closest('div.messageContainer').addClass('hide');
		});
	},

	postLoadRelatedListViewRecords : function(){
		var thisInstance = this;
		app.event.off('Vtiger.RelatedList.PostLoad.Event');
		app.event.on('Vtiger.RelatedList.PostLoad.Event', function(e) {
			var listParams = {
				"selected" : thisInstance.selectedRecordIds,
				"excluded" : thisInstance.excludedRecordIds
			};
			thisInstance.markSelectedIdsCheckboxes(listParams);
		});
	},

	markSelectedIdsCheckboxes: function (params) {
		var self = this;
		var selectedIds = params.selected;
		var excludedIds = params.excluded;
		var relatedListContainer = self.relatedContentContainer;
		relatedListContainer.find('#selectedIds').data('selected-ids', selectedIds);
		relatedListContainer.find('#excludedIds').data('excluded-ids', excludedIds);
		if ((selectedIds == '' && excludedIds == '')) {
			return;
		}
		relatedListContainer.find('.listViewEntriesCheckBox').each(function (i, ele) {
			var currentRow = jQuery(ele).closest('tr');
			var recordId = currentRow.data('id').toString();
			if (jQuery.inArray(recordId, excludedIds) == '-1' && (jQuery.inArray(recordId, selectedIds) != '-1' || selectedIds == 'all')) {
				jQuery(ele).prop('checked', true);
				currentRow.addClass('listviewhovercolor');
			}
		});
		self.selectMainCheck();
	},

	deleteRelation : function(relatedIdList, customParams) {
		var aDeferred = jQuery.Deferred();
		var thisInstance = this;
		var params = {};
		params['mode'] = "deleteRelation";
		params['module'] = this.parentModuleName;
		params['action'] = 'RelationAjax';

		var selectedTabElement = this.getSelectedTabElement();
		var relationId = selectedTabElement.data('relationId');
		params['related_module'] = this.relatedModulename;
		params['relationId'] = relationId;
		params['src_record'] = this.parentRecordId;
		params['related_record_list'] = JSON.stringify(relatedIdList);
		
		if(typeof customParams != 'undefined') {
			params = jQuery.extend(params, customParams);
		}
		
		app.helper.showProgress();
		app.request.post({"data":params}).then(
			function(err, responseData){
				thisInstance.updateRelatedRecordsCount(relationId, relatedIdList, false);
				app.helper.hideProgress();
				aDeferred.resolve(responseData);
			},
			function(textStatus, errorThrown){
				app.helper.hideProgress();
				aDeferred.reject(textStatus, errorThrown);
			}
		);
		return aDeferred.promise();
	},

	registerEvents : function() {
		this.changeCustomFilterElementView();
		this.registerChangeCustomFilterEvent();
		this.registerCheckboxClickEvent();
		this.registerMainCheckboxClickEvent();
		this.registerSelectAllClickEvent();
		this.registerDeselectAllClickEvent();
		this.postLoadRelatedListViewRecords();
	},

	init : function(parentId, parentModule, selectedRelatedTabElement, relatedModuleName) {
		this._super(parentId, parentModule, selectedRelatedTabElement, relatedModuleName);
		this.registerEvents();
	}
});

