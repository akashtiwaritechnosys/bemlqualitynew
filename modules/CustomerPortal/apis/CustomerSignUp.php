<?php
include_once 'vtlib/Vtiger/Module.php';
include_once "include/utils/VtlibUtils.php";
include_once "include/utils/CommonUtils.php";
include_once "includes/Loader.php";
include_once 'includes/runtime/BaseModel.php';
include_once "includes/http/Request.php";
include_once "include/Webservices/Utils.php";
include_once "includes/runtime/EntryPoint.php";
vimport('includes.runtime.EntryPoint');
class CustomerPortal_CustomerSignUp extends CustomerPortal_API_Abstract {

	function process(CustomerPortal_API_Request $request) {
		$response = new CustomerPortal_API_Response();
		$responseObject = [];
		$id = $request->get('uid');
		$otp = $request->get('otp');
		$status = Vtiger_ShortURL_Helper::handleForgotPasswordMobile(vtlib_purify($id));
		if ($status == true) {
			$shortURLModel = Vtiger_ShortURL_Helper::getInstance($id);
			$otpFromDataBase = $shortURLModel->handler_data['otp'];
			if ($otp == $otpFromDataBase) {
				$sentTime = $shortURLModel->handler_data['time'];
				$now = strtotime("Now");
				if ($now >  $sentTime) {
					$response->setError(100, "OTP is Expired");
					$shortURLModel->delete();
					return $response;
				} else {
					$activeFields = CustomerPortal_Utils::getActiveFields('Contacts', true);
					$focus = CRMEntity::getInstance('Contacts');
					$activeFieldKeys = array_keys($activeFields);
					foreach ($activeFieldKeys as $activeFieldKey) {
						if ($activeFieldKey == 'assigned_user_id') {
							$focus->column_fields['assigned_user_id'] = $this->getAssignedPerson($shortURLModel->handler_data['nearest_office'], $shortURLModel->handler_data);
						} else {
							$focus->column_fields[$activeFieldKey] = $shortURLModel->handler_data[$activeFieldKey];
						}
					}
					if (!empty($shortURLModel->handler_data['nearest_office'])) {
						$focus->column_fields['assigned_user_id'] = $this->getAssignedPerson($shortURLModel->handler_data['nearest_office'], $shortURLModel->handler_data);
					} else {
						$response->setError(100, "Mandatory Field nearest_office is missing");
						return $response;
					}
					$focus->save("Contacts");
					$responseObject['mobile'] = $focus->column_fields['mobile'];
					$responseObject['usercreatedid'] =  $focus->id;
					$responseObject['useruniqeid'] =  $focus->id;;
					$date = new DateTime();
					$responseObject['timestamp'] = $date->getTimestamp();
					$responseObject['message'] = "Thank you for your valuable registration" .
						"Verification pending from BEML" .
						"After succesful verification, you will be communicated through SMS/Email";
					$shortURLModel->delete();
					$response->setResult($responseObject);
					return $response;
				}
			} else {
				$response->setError(100, "OTP Is Invalid");
				return $response;
			}
		} else {
			$response->setError(100, "UID Is Invalid");
			return $response;
		}
	}

	function getAssignedPerson($roleName, $data) {
		$realRole = explode(" - ", $roleName);
		include_once('include/utils/IgClassUtils.php');

		$userid = $this->getParentRoleUserId($data);
		if (!empty($userid)) {
			return $userid;
		}

		$allDOACTAndSER = IgClassUtils::getAllDistrctACTAndServCen();
		if (strpos($realRole[0], 'Service Centre') !== false) {
			$scVar = explode("-", $realRole[0]);
			$realRole[0] = $scVar[1];
		} else if (in_array($realRole[0], $allDOACTAndSER)) {
			$realRole[0] = IgClassUtils::IGGetRelventRegionalOfficeBasedOnLocation($realRole[0]);
		}
		$region = trim($realRole[0]);
		global $adb;
		$roleName = $region . ' - REGIONAL SERVICE MANAGER';
		$sql = "SELECT * FROM `vtiger_role` 
		INNER JOIN `vtiger_user2role` ON `vtiger_user2role`.`roleid` = `vtiger_role`.`roleid` 
		where rolename = ?";
		$result = $adb->pquery($sql, array($roleName));
		$dataRow = $adb->fetchByAssoc($result, 0);
		if (empty($dataRow['userid'])) {
			return 1;
		} else {
			return $dataRow['userid'];
		}
	}

	public function getParentRoleUserId($data) {
		// $parentRole = $this->getParentRole($roleName);
		// only for service engineeres
		$office = $data['nearest_office'];

		$RegionalOffice = [
			"Hyderabad - Telangana",
			"Neyveli - Tamilnadu",
			"Sambalpur - Odhisa",
			"Dhanbad - Jharkhand",
			"Singrauli - Madhya Pradesh",
			"Kolkata - West Bengal",
			"Mumbai - Maharashtra",
		];

		$DistrictOffice = [
			"Kothagudem - Telangana",
			"Bacheli - Chhattisgarh",
			"Leh - Jammu & Kashmir",
			"Chandrapur - Maharashtra",
			"Bhubaneshwar - Odhisa",
			"Bilaspur - Chhattisgarh",
			"Ranchi - Jharkhand",
			"Bhopal - Madhya Pradesh",
			"Maihar - Madhya Pradesh",
			"Ramagundam - Telangana",
			"Asansol - West Bengal",
			"Chennai - Tamilnadu",
			"Jammu - Jammu & Kashmir",
		];

		$ActivityCentre = [
			"Pune - Maharashtra",
			"Panjim - Goa",
			"Nagpur - Maharashtra",
			"Udaipur - Rajasthan",
			"Ahmedabad - Gujarat",
			"Itanagar - Arunachal Pradesh",
			"Guwahati - Assam",
			"Silapathar - Assam",
			"Vishakapatnam - Andhra Pradesh",
			"Hospet - Karnataka",
			"Kochi - Kerala",
		];

		$ServiceCentre = [
			"Service Centre-Bilaspur - Chhattisgarh",
			"Service Centre-Kolkata - West Bengal",
			"Service Centre-Singrauli - Madhya Pradesh",
			"Service Centre-Hyderabad - Telangana",
			"Service Centre-New Delhi"
		];

		$CorporateOther = [
			"Bengaluru - Karnataka",
			"New Delhi",
		];

		$detectedOffice = '';
		if (in_array($office, $RegionalOffice)) {
			$officeParts = explode(" - ", $office);
			$detectedOffice = $officeParts[0] . " - REGIONAL SERVICE MANAGER";
		} elseif (in_array($office, $DistrictOffice)) {
			$officeParts = explode(" - ", $office);
			$detectedOffice = $officeParts[0] . " - DISTRICT MANAGER";
		} elseif (in_array($office, $ActivityCentre)) {
			$officeParts = explode(" - ", $office);
			$detectedOffice = $officeParts[0] . " - ACTIVITY CENTRE IN-CHARGE";
		} elseif (in_array($office, $ServiceCentre)) {
			$officeParts = explode(" - ", $office);
			$detectedOffice = $officeParts[0] . " - SERVICE CENTRE IN-CHARGE";
		} elseif (in_array($office, $CorporateOther)) {
			$officeParts = explode(" - ", $office);
			$detectedOffice = $officeParts[0] . " - CORPORATE SERVICE MANAGER";
		} else {
			// fallback if not matched anywhere
			$detectedOffice = $office . " - SERVICE MANAGER";
		}

		$userId = $this->getUserIdOfRole($detectedOffice);
		if (empty($userId) || $userId == 1) {
			$userid = $this->checkForOtherUserWhoHasAuthority($detectedOffice);
			return $userid;
		} else {
			return $userId;
		}
	}

	function checkForOtherUserWhoHasAuthority($parentRole) {
		global $adb;
		$sql = "SELECT userid,parentrole FROM `vtiger_role` 
		INNER JOIN `vtiger_user2role` ON `vtiger_user2role`.`roleid` = `vtiger_role`.`roleid` 
		where rolename = ?";
		$result = $adb->pquery($sql, array($parentRole));
		$parentroleOfApprover = '';
		while ($row = $adb->fetchByAssoc($result)) {
			$parentroleOfApprover =  $row['parentrole'];
		}

		if (!empty($parentroleOfApprover)) {
			$userSql = "SELECT `vtiger_users`.id FROM `vtiger_serviceengineer` 
            INNER JOIN `vtiger_users` ON `vtiger_users`.`user_name` = `vtiger_serviceengineer`.`badge_no` 
            INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_serviceengineer.serviceengineerid
            INNER JOIN vtiger_user2role ON vtiger_user2role.userid = vtiger_users.id
            INNER JOIN vtiger_role ON vtiger_role.roleid = vtiger_user2role.roleid
            where vtiger_role.parentrole=? 
            and `vtiger_serviceengineer`.usr_verification = 'Yes' 
            and vtiger_crmentity.deleted = 0";

			$result = $adb->pquery($userSql, $parentroleOfApprover);
			$userIdsWithVeri = [];
			while ($row = $adb->fetchByAssoc($result)) {
				array_push($userIdsWithVeri, $row['id']);
			}
			if (!empty($userIdsWithVeri)) {
				return $userIdsWithVeri[0];
			} else {
				return 1;
			}
		}
		return 1;
	}

	function getUserIdOfRole($roleName) {
		global $adb;
		$sql = "SELECT userid FROM `vtiger_role` 
		INNER JOIN `vtiger_user2role` ON `vtiger_user2role`.`roleid` = `vtiger_role`.`roleid` 
		where rolename = ?";
		$result = $adb->pquery($sql, array($roleName));
		$userIds = [];
		while ($row = $adb->fetchByAssoc($result)) {
			array_push($userIds, $row['userid']);
		}
		if (empty($userIds)) {
			return 1;
		}
		$userSql = "SELECT `vtiger_users`.id FROM `vtiger_serviceengineer` 
		INNER JOIN `vtiger_users` ON `vtiger_users`.`user_name` = `vtiger_serviceengineer`.`badge_no` 
        INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_serviceengineer.serviceengineerid
		where `vtiger_users`.id  in (" . generateQuestionMarks($userIds) . ") and 
        `vtiger_serviceengineer`.usr_verification = 'Yes' and vtiger_crmentity.deleted = 0";
		$result = $adb->pquery($userSql, $userIds);
		$userIdsWithVeri = [];
		while ($row = $adb->fetchByAssoc($result)) {
			array_push($userIdsWithVeri, $row['id']);
		}
		if (empty($userIdsWithVeri)) {
			return 1;
		}
		$date = date('Y-m-d');
		$userSql = "SELECT count(*) as counte , `vtiger_crmentity`.smownerid FROM `vtiger_serviceengineer` 
		INNER JOIN `vtiger_users` ON `vtiger_users`.`user_name` = `vtiger_serviceengineer`.`badge_no` 
        INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_serviceengineer.serviceengineerid
		where `vtiger_crmentity`.smownerid  in (" . generateQuestionMarks($userIdsWithVeri) . ")
        and `vtiger_crmentity`.createdtime < concat('$date',' 23:59:59') and `vtiger_crmentity`.createdtime > concat('$date',' 00:00:00')
        and vtiger_crmentity.deleted = 0 GROUP BY smownerid ORDER BY counte ASC ";

		$result = $adb->pquery($userSql, $userIdsWithVeri);
		$dataRow = $adb->fetchByAssoc($result, 0);
		$num_rows = $adb->num_rows($result);
		if (empty($dataRow)) {
			return $userIdsWithVeri[0];
		} elseif ($num_rows != count($userIdsWithVeri)) {
			$allExt = [];
			for ($j = 0; $j < $num_rows; $j++) {
				$verId = $adb->query_result($result, $j, 'smownerid');
				array_push($allExt, $verId);
			}
			$nonExt = array_diff($userIdsWithVeri, $allExt);
			foreach ($nonExt as $nonExtId) {
				return $nonExtId;
			}
		} else {
			return $dataRow['smownerid'];
		}
	}

	function authenticatePortalUser($username, $password) {
		return true;
	}
}
