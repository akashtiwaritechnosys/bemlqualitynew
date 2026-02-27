<?php

include_once('include/utils/GeneralUtils.php');

class Mobile_WS_GetLeadsLifeCycle extends Mobile_WS_Controller {
    
	
	function process(Mobile_API_Request $request) {
        	global $adb;
        	$response = new Mobile_API_Response();
        	$responseObject = [];

		$dateRange       = trim($request->get('dateRange'));
		$fromDate        = trim($request->get('fromDate'));
		$toDate          = trim($request->get('toDate'));
		$ticketType      = trim($request->get('ticketType'));
		$equipmentModel  = trim($request->get('equipmentModel'));
		$warrantyStatus  = trim($request->get('warrantyStatus'));
		
		$datePattern = '/^\d{4}-\d{2}-\d{2}$/';

		if (!empty($fromDate) && !preg_match($datePattern, $fromDate)) {
			throw new Exception("Invalid fromDate format. Use YYYY-MM-DD.");
		}

		if (!empty($toDate) && !preg_match($datePattern, $toDate)) {
			throw new Exception("Invalid toDate format. Use YYYY-MM-DD.");
		}

		// Optional: validate logical order
		if (!empty($fromDate) && !empty($toDate) && strtotime($fromDate) > strtotime($toDate)) {
			throw new Exception("fromDate cannot be later than toDate.");
		}
		
		$conditions = [];
		$params = [];
		$typeCategory = '';
		$joinWarranty = false;

		// Handle WHERE conditions and params in correct order
	
		if ($dateRange != 'Custom') {
			$arr = $this->getDateRange($dateRange);
			$fromDate = $arr['start'];
			$toDate = $arr['end'];
		}

		$ticketType = $request->get('ticketType');
		if (empty($ticketType)) {
			$ticketType = [];
		} else {
			$ticketType = explode("#", $ticketType);
		}

		$equipmentModel = $request->get('equipmentModel');
		if (empty($equipmentModel)) {
			$equipmentModel = [];
		} else {
			$equipmentModel = explode("#", $equipmentModel);
		}

		$warrantyStatus = $request->get('warrantyStatus');
		if (empty($warrantyStatus)) {
			$warrantyStatus = [];
		} else {
			$warrantyStatus = explode("#", $warrantyStatus);
		}

		
		if (!empty($dateRange)) {
			foreach ($dateRange as $range) {
				$conditions[] = "a.ticket_date >= DATE_SUB(CURDATE(), INTERVAL $range)";
			}
		}

		if (empty($ticketType)) {
			if (!empty($fromDate) && !empty($toDate)) {
				$conditions[] = "a.ticket_date BETWEEN ? AND ?";
				$params[] = $fromDate;
				$params[] = $toDate;
			}
		}

		

		if (!empty($ticketType) && !empty($equipmentModel) && !empty($warrantyStatus)) {
			$sql = "SELECT 
				a.ticket_type,
				a.sr_equip_model,
				b.sr_war_status,
				COUNT(a.ticketid) AS no_of_tickets,
				AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
				AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
				SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
				SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
				SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
			FROM vtiger_troubletickets AS a
			LEFT JOIN vtiger_servicereports AS b ON a.ticketid = b.ticket_id
			INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
			WHERE e.deleted = 0
			  AND a.ticket_type IN (" . generateQuestionMarks($ticketType) . ")
			  AND a.sr_equip_model IN (" . generateQuestionMarks($equipmentModel) . ")
			  AND b.sr_war_status IN (" . generateQuestionMarks($warrantyStatus) . ")";

			$params = array_merge($ticketType, $equipmentModel, $warrantyStatus);

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY a.ticket_type, a.sr_equip_model, b.sr_war_status
			  ORDER BY a.ticket_type, a.sr_equip_model, b.sr_war_status";

			$result = $adb->pquery($sql, $params);
			$grouped = [];

			while ($row = $adb->fetch_array($result)) {
				$ticket = $row['ticket_type'];
				$model = $row['sr_equip_model'];
				$status = $row['sr_war_status'];

				$grouped[$ticket][$model][$status][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg'      => $row['time_insec_to_resp_avg'],
					'repair_avg'    => $row['time_insec_to_repair_avg'],
					'open'          => $row['open_tickets'],
					'inprogress'    => $row['inprogress_tickets'],
					'closed'        => $row['closed_tickets'],
				];
			}			
			
		} else if (empty($ticketType) && empty($equipmentModel) && empty($warrantyStatus)) {
			$sql = "SELECT 
				IFNULL(NULLIF(a.ticket_type, ''), 'NA') AS ticket_type,
				IFNULL(NULLIF(a.sr_equip_model, ''), 'NA') AS sr_equip_model,
				IFNULL(NULLIF(b.sr_war_status, ''), 'NA') AS sr_war_status,
				COUNT(a.ticketid) AS no_of_tickets,
				AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
				AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
				SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
				SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
				SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
			FROM vtiger_troubletickets AS a
			LEFT JOIN vtiger_servicereports AS b ON a.ticketid = b.ticket_id
			INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
			WHERE e.deleted = 0";

			$params = [];

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY a.ticket_type, a.sr_equip_model, b.sr_war_status
			  ORDER BY a.ticket_type, a.sr_equip_model, b.sr_war_status";

			$result = $adb->pquery($sql, $params);
			$grouped = [];

			while ($row = $adb->fetch_array($result)) {
				$ticket  = $row['ticket_type'];
				$model   = $row['sr_equip_model'];
				$status  = $row['sr_war_status'];

				$grouped[$ticket][$model][$status][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg'      => $row['time_insec_to_resp_avg'],
					'repair_avg'    => $row['time_insec_to_repair_avg'],
					'open'          => $row['open_tickets'],
					'inprogress'    => $row['inprogress_tickets'],
					'closed'        => $row['closed_tickets'],
				];
			}
			
		} else if (!empty($equipmentModel) && !empty($warrantyStatus)) {
			$sql = "SELECT 
				a.sr_equip_model,
				b.sr_war_status,
				COUNT(a.ticketid) AS no_of_tickets,
				AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
				AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
				SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
				SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
				SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
			FROM vtiger_troubletickets AS a
			LEFT JOIN vtiger_servicereports AS b ON a.ticketid = b.ticket_id
			INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
			WHERE a.sr_equip_model IN (" . generateQuestionMarks($equipmentModel) . ")
			AND b.sr_war_status IN (" . generateQuestionMarks($warrantyStatus) . ")
			AND e.deleted = 0";

			$params = array_merge($equipmentModel, $warrantyStatus);

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY a.sr_equip_model, b.sr_war_status
			  ORDER BY a.sr_equip_model, b.sr_war_status";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$model = $row['sr_equip_model'];
				$warranty = $row['sr_war_status'];
				$grouped[$model][$warranty][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg'      => $row['time_insec_to_resp_avg'],
					'repair_avg'    => $row['time_insec_to_repair_avg'],
					'open'          => $row['open_tickets'],
					'inprogress'    => $row['inprogress_tickets'],
					'closed'        => $row['closed_tickets'],
				];
			}
			
		} else if (!empty($ticketType) && !empty($equipmentModel)) {

			$sql = "SELECT 
				a.ticket_type,
				a.sr_equip_model,
				COUNT(a.ticketid) AS no_of_tickets,
				AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
				AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
				SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
				SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
				SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
			FROM vtiger_troubletickets AS a
			INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
			WHERE e.deleted = 0
			AND a.ticket_type IN (" . generateQuestionMarks($ticketType) . ")
			AND a.sr_equip_model IN (" . generateQuestionMarks($equipmentModel) . ")";

			$params = [];
			foreach ($ticketType as $val) {
				$params[] = $val;
			}
			foreach ($equipmentModel as $val) {
				$params[] = $val;
			}

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY a.ticket_type, a.sr_equip_model ORDER BY a.ticket_type, a.sr_equip_model";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$ticketTypeVer = $row['ticket_type'];
				$model = $row['sr_equip_model'];
				$grouped[$ticketTypeVer][$model][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg' => $row['time_insec_to_resp_avg'],
					'repair_avg' => $row['time_insec_to_repair_avg'],
					'open' => $row['open_tickets'],
					'inprogress' => $row['inprogress_tickets'],
					'closed' => $row['closed_tickets'],
				];
			}
			
		} else if (!empty($ticketType) && !empty($warrantyStatus)) {
			$sql = "SELECT 
						a.ticket_type,
						b.sr_war_status,
						COUNT(a.ticketid) AS no_of_tickets,
						AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
						AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
						SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
						SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
						SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
					FROM vtiger_troubletickets AS a
					LEFT JOIN vtiger_servicereports AS b ON a.ticketid = b.ticket_id
					INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
					WHERE a.ticket_type IN (" . generateQuestionMarks($ticketType) . ")
					AND b.sr_war_status IN (" . generateQuestionMarks($warrantyStatus) . ")
					AND e.deleted = 0";

			$params = [];
			foreach ($ticketType as $val) {
				$params[] = $val;
			}
			foreach ($warrantyStatus as $val) {
				$params[] = $val;
			}

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY a.ticket_type, b.sr_war_status
					ORDER BY a.ticket_type, b.sr_war_status";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$ticketTypeVer = $row['ticket_type'] ?: 'Unknown';
				$warranty = $row['sr_war_status'] ?: 'Unknown';
				$grouped[$ticketTypeVer][$warranty][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg' => $row['time_insec_to_resp_avg'],
					'repair_avg' => $row['time_insec_to_repair_avg'],
					'open' => $row['open_tickets'],
					'inprogress' => $row['inprogress_tickets'],
					'closed' => $row['closed_tickets'],
				];
			}
			
		} else if (!empty($ticketType) && empty($equipmentModel) && empty($warrantyStatus)) {
			
			$sql = "SELECT 
					a.ticket_type,
					COUNT(a.ticketid) AS no_of_tickets,
					AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
					AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
					SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
					SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
					SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
					FROM vtiger_troubletickets AS a
					INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
					WHERE a.ticket_type IN (" . generateQuestionMarks($ticketType) . ")
					AND e.deleted = 0";

			$params = $ticketType;

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY a.ticket_type ORDER BY a.ticket_type";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$ticketTypeVer = $row['ticket_type'] ?: 'Unknown';
				$grouped[$ticketTypeVer][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg' => $row['time_insec_to_resp_avg'],
					'repair_avg' => $row['time_insec_to_repair_avg'],
					'open' => $row['open_tickets'],
					'inprogress' => $row['inprogress_tickets'],
					'closed' => $row['closed_tickets'],
				];
			}
			
		} else if (!empty($equipmentModel) && empty($ticketType) && empty($warrantyStatus)) {
			$sql = "SELECT 
						a.sr_equip_model,
						COUNT(a.ticketid) AS no_of_tickets,
						AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
						AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
						SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
						SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
						SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
					FROM vtiger_troubletickets AS a
					INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
					WHERE a.sr_equip_model IN (" . generateQuestionMarks($equipmentModel) . ")
					AND e.deleted = 0";

			$params = $equipmentModel;

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY a.sr_equip_model ORDER BY a.sr_equip_model";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$model = $row['sr_equip_model'];
				$grouped[$model][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg' => $row['time_insec_to_resp_avg'],
					'repair_avg' => $row['time_insec_to_repair_avg'],
					'open' => $row['open_tickets'],
					'inprogress' => $row['inprogress_tickets'],
					'closed' => $row['closed_tickets'],
				];
			}
			
		} else if (!empty($warrantyStatus) && empty($ticketType) && empty($equipmentModel)) {
			$sql = "SELECT 
				b.sr_war_status,
				COUNT(a.ticketid) AS no_of_tickets,
				AVG(a.time_insec_to_resp) AS time_insec_to_resp_avg,
				AVG(a.time_insec_to_repair) AS time_insec_to_repair_avg,
				SUM(CASE WHEN a.status IN ('Open', 'Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
				SUM(CASE WHEN a.status = 'In Progress' THEN 1 ELSE 0 END) AS inprogress_tickets,
				SUM(CASE WHEN a.status IN ('Closed', 'Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
				FROM vtiger_troubletickets AS a
				LEFT JOIN vtiger_servicereports AS b ON a.ticketid = b.ticket_id
				INNER JOIN vtiger_crmentity AS e ON e.crmid = a.ticketid
				WHERE b.sr_war_status IN (" . generateQuestionMarks($warrantyStatus) . ")
				AND e.deleted = 0";

			$params = $warrantyStatus;

			if (!empty($fromDate) && !empty($toDate)) {
				$sql .= " AND e.createdtime BETWEEN ? AND ?";
				$params[] = $fromDate . " 00:00:00";
				$params[] = $toDate . " 23:59:59";
			}

			$sql .= " GROUP BY b.sr_war_status ORDER BY b.sr_war_status";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$warranty = $row['sr_war_status'];

				$grouped[$warranty][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg' => $row['time_insec_to_resp_avg'],
					'repair_avg' => $row['time_insec_to_repair_avg'],
					'open' => $row['open_tickets'],
					'inprogress' => $row['inprogress_tickets'],
					'closed' => $row['closed_tickets'],
				];
			}			
			
		}		
		 
        	$responseObject['resultData'] = $grouped;
        	$response->setResult($responseObject);		

		return $response;		
	}   


	function getDateRange($option) {
		switch ($option) {
			case 'l MONTH':
				$startDate = date('Y-m-01', strtotime('first day of last month'));
				$endDate   = date('Y-m-t', strtotime('last month'));
				break;

			case '3 MONTH':
				$startDate = date('Y-m-01', strtotime('first day of -3 months'));
				$endDate   = date('Y-m-t', strtotime('last month'));
				break;

			case '6 MONTH':
				$startDate = date('Y-m-01', strtotime('first day of -6 months'));
				$endDate   = date('Y-m-t', strtotime('last month'));
				break;

			case '1 YEAR':
				$thisyearNumnber = intval(date('Y'));
				$lastYear = $thisyearNumnber - 1;
				$startDate = date($lastYear . '-01-01');
				$endDate   = date($lastYear . '-12-31');
				break;

			default:
				$startDate = null;
				$endDate = null;
		}

		return [
			'start' => $startDate,
			'end'   => $endDate
		];
	}

    
    
}