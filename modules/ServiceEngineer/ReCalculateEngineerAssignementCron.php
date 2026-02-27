<?php
require_once('include/utils/GeneralUtils.php');
function ReCalculateEngineerAssignementCron() {
	global $adb;
	$employeeList = thisgetAllApprovedEngineersList();
	foreach ($employeeList as $empKey => $empVal) {
		$relatedRecordIdList = thisgetAllRelatedList($empVal);
		foreach ($relatedRecordIdList as $relatedRecordId) {
			$anotherRelations = getAllAssociatedEquipmentsBasedSELInkedInEmployeeFunc($relatedRecordId);
			foreach ($anotherRelations as $anotherRelation) {
				$checkpresence = $adb->pquery("SELECT crmid FROM vtiger_crmentityrel WHERE
					crmid = ? AND module = ? AND relcrmid = ? AND relmodule = ?", array($empVal, 'ServiceEngineer', $anotherRelation, 'Equipment'));
				if ($checkpresence && $adb->num_rows($checkpresence))
					continue;
				$adb->pquery("INSERT INTO vtiger_crmentityrel(crmid, module, relcrmid, relmodule) VALUES(?,?,?,?)", array($empVal, 'ServiceEngineer', $anotherRelation, 'Equipment'));
			}
		}
	}
}

function thisgetAllRelatedList($empId) {
	global $adb;
	$sql = "SELECT crmid,relcrmid FROM vtiger_crmentityrel WHERE
				crmid = ? AND module = 'ServiceEngineer'  
				AND relmodule = 'FunctionalLocations'";
	$result = $adb->pquery($sql, array($empId));
	$recordIds = [];
	while ($row = $adb->fetch_array($result)) {
		array_push($recordIds, $row['relcrmid']);
	}
	return $recordIds;
}

function thisgetAllApprovedEngineersList() {
	global $adb;
	$sql = "SELECT serviceengineerid FROM `vtiger_serviceengineer`
		INNER JOIN vtiger_crmentity 
		on vtiger_crmentity.crmid = vtiger_serviceengineer.serviceengineerid
		WHERE vtiger_serviceengineer.approval_status = 'Accepted' 
		and vtiger_crmentity.deleted = 0";
	$result = $adb->pquery($sql, array());
	$recordIds = [];
	while ($row = $adb->fetch_array($result)) {
		array_push($recordIds, $row['serviceengineerid']);
	}
	return $recordIds;
}
