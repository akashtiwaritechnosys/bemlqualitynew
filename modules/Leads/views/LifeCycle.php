<?php

class Leads_LifeCycle_View extends Vtiger_Index_View {

	function __construct() {
		parent::__construct();
	}

	public function requiresPermission(Vtiger_Request $request) {
		return true;
	}

	public function getOverlayHeaderScripts(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$jsFileNames = array(
			"modules.$moduleName.resources.Edit",
		);
		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		return $jsScriptInstances;
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

	function process(Vtiger_Request $request) {
		global $adb;
		$viewer = $this->getViewer($request);
		$moduleName = $request->getModule();

		$dateRange = $request->get('dateRange');

		$fromDate = $request->get('fromDate');
		$toDate = $request->get('toDate');

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

		$conditions = [];
		$params = [];
		$typeCategory = '';

		if (!empty($dateRange)) {
			$arr = $this->getDateRange($dateRange);
			$fromDate = $arr['start'];
			$toDate = $arr['end'];
		}

		if (empty($ticketType)) {
			if (!empty($fromDate) && !empty($toDate)) {
				$conditions[] = "a.ticket_date BETWEEN ? AND ?";
				$params[] = $fromDate;
				$params[] = $toDate;
			}
		}

		// if (!empty($ticketType)) {
		// 	$sql = "SELECT 
		// 		COUNT(a.ticketid) AS no_of_tickets,
		// 		SUM(CASE WHEN a.status = 'Open' THEN 1 ELSE 0 END) AS open_tickets,
		// 		SUM(CASE WHEN a.status = 'Closed' THEN 1 ELSE 0 END) AS closed_tickets,
		// 		a.sr_equip_model
		// 		FROM vtiger_troubletickets AS a
		// 		INNER JOIN vtiger_servicereports as b ON a.ticketid=b.ticket_id
		// 		WHERE a.ticket_type = ?";

		// 	$params[] = $ticketType;

		// 	if (!empty($warrantyStatus)) {
		// 		$sql .= " AND b.sr_war_status = ?";
		// 		$params[] = $warrantyStatus;
		// 	}

		// 	if (!empty($fromDate) && !empty($toDate)) {
		// 		$conditions[] = "a.ticket_date BETWEEN ? AND ?";
		// 		$params[] = $fromDate;
		// 		$params[] = $toDate;
		// 	}
		// 	if (!empty($conditions)) {
		// 		$sql .= " AND (" . implode(' AND ', $conditions) . ")";
		// 	}

		// 	if (!empty($equipmentModel)) {
		// 		$sql .= " AND sr_equip_model in(" . generateQuestionMarks($equipmentModel) . ") GROUP BY a.sr_equip_model";
		// 		foreach ($equipmentModel as $eqmodel) {
		// 			array_push($params, $eqmodel);
		// 		}
		// 	}
		// 	$typeCategory = "TicketType";
		// } elseif (!empty($equipmentModel)) {
		// 	$sql = "SELECT 
		// 			count(a.ticketid) as no_of_tickets,
		// 			SUM(CASE WHEN a.status = 'Open' THEN 1 ELSE 0 END) AS open_tickets,
		// 			SUM(CASE WHEN a.status = 'Closed' THEN 1 ELSE 0 END) AS closed_tickets,
		// 			a.sr_equip_model
		// 			FROM vtiger_troubletickets AS a
		// 			WHERE a.sr_equip_model in(". generateQuestionMarks($equipmentModel) .")";

		// 	foreach ($equipmentModel as $eqmodel) {
		// 		array_push($params, $eqmodel);
		// 	}
		// 	// $params[] = $equipmentModel;

		// 	if (!empty($conditions)) {
		// 		$sql .= " AND (" . implode(' AND ', $conditions) . ")";
		// 	}

		// 	if (!empty($warrantyStatus)) {
		// 		$sql .= " AND b.sr_war_status = ?";
		// 		$params[] = $warrantyStatus;
		// 	}

		// 	$sql .= " GROUP BY a.sr_equip_model";
		// 	$typeCategory = "EquipmentModel";
		// } elseif (!empty($warrantyStatus)) {

		// 	$sql = "SELECT 
		// 			count(a.ticketid) as no_of_tickets,
		// 			SUM(CASE WHEN a.status = 'Open' THEN 1 ELSE 0 END) AS open_tickets,
		// 			SUM(CASE WHEN a.status = 'Closed' THEN 1 ELSE 0 END) AS closed_tickets,
		// 			b.sr_war_status
		// 			FROM vtiger_troubletickets AS a 
		// 			JOIN vtiger_servicereports as b ON a.ticketid=b.ticket_id
		// 			WHERE b.sr_war_status = ?";

		// 	$params[] = $warrantyStatus;

		// 	if (!empty($conditions)) {
		// 		$sql .= " AND (" . implode(' AND ', $conditions) . ")";
		// 	}

		// 	$sql .= " GROUP BY b.sr_war_status";

		// 	$typeCategory = "WarrantyStatus";
		// } else {
		// 	$sql = "SELECT 
		// 		count(a.ticketid) as no_of_tickets, AVG(time_insec_to_resp) AS time_insec_to_resp_avg,
		// 		AVG(time_insec_to_repair) AS time_insec_to_repair_avg,a.sr_equip_model,
		// 		SUM(CASE WHEN a.status IN('Open','Engineer Assigned') THEN 1 ELSE 0 END) AS open_tickets,
		// 		SUM(CASE WHEN a.status IN('In Progress') THEN 1 ELSE 0 END) AS inprogress_tickets,
		// 		SUM(CASE WHEN a.status IN('Closed','Closed : Recommissioning Is Pending', 'Closed after Re-commissioning') THEN 1 ELSE 0 END) AS closed_tickets
		// 		FROM vtiger_troubletickets AS a GROUP BY a.sr_equip_model";

		// 	foreach ($equipmentModel as $eqmodel) {
		// 		array_push($params, $eqmodel);
		// 	}
		// 	if (!empty($conditions)) {
		// 		$sql .= " Where (" . implode(' AND ', $conditions) . ")";
		// 	}
		// 	if (!empty($warrantyStatus)) {
		// 		$sql .= " AND b.sr_war_status = ?";
		// 		$params[] = $warrantyStatus;
		// 	}
		// 	$sql .= " ";
		// 	$conditions = [];
		// 	if (!empty($fromDate) && !empty($toDate)) {
		// 		$conditions[] = "a.ticket_date BETWEEN ? AND ?";
		// 		$params[] = $fromDate;
		// 		$params[] = $toDate;
		// 	}
		// 	if (!empty($dateRange)) {
		// 		foreach ($dateRange as $range) {
		// 			$conditions[] = "a.ticket_date >= DATE_SUB(CURDATE(), INTERVAL $range)";
		// 		}
		// 	}
		// 	if (!empty($conditions)) {
		// 		$sql .= " AND (" . implode(' AND ', $conditions) . ")";
		// 	}
		// 	$typeCategory = "EquipmentModel";
		// }


		// $sqlResult2 = $adb->pquery($sql, $params);
		// $num_rows = $adb->num_rows($sqlResult2);

		// $resultData = [];
		// if ($num_rows > 0) {
		// 	for ($i = 0; $i < $num_rows; $i++) {
		// 		$row = $adb->fetchByAssoc($sqlResult2, $i);
		// 		$resultData[] = $row;
		// 	}
		// }

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
			$viewer->assign('GROUPED_DATA', $grouped);
		} else if (empty($ticketType) && empty($equipmentModel) && empty($warrantyStatus)) {
			$sql = "SELECT 
				IFNULL(NULLIF(a.ticket_type, ''), 'NA') AS ticket_type_new,
				IFNULL(NULLIF(a.sr_equip_model, ''), 'NA') AS sr_equip_model_new,
				IFNULL(NULLIF(b.sr_war_status, ''), 'NA') AS sr_war_status_new,
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

			$sql .= " GROUP BY ticket_type_new, sr_equip_model_new, sr_war_status_new
			  ORDER BY ticket_type_new, sr_equip_model_new, sr_war_status_new";

			$result = $adb->pquery($sql, $params);
			$grouped = [];

			while ($row = $adb->fetch_array($result)) {
				$ticket  = $row['ticket_type_new'];
				$model   = $row['sr_equip_model_new'];
				$status  = $row['sr_war_status_new'];

				$grouped[$ticket][$model][$status][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg'      => $row['time_insec_to_resp_avg'],
					'repair_avg'    => $row['time_insec_to_repair_avg'],
					'open'          => $row['open_tickets'],
					'inprogress'    => $row['inprogress_tickets'],
					'closed'        => $row['closed_tickets'],
				];
			}
			$viewer->assign('GROUPED_DATA', $grouped);
		} else if (!empty($equipmentModel) && !empty($warrantyStatus)) {
			$sql = "SELECT 
				a.sr_equip_model,
				IFNULL(NULLIF(b.sr_war_status, ''), '-') AS sr_war_status_new,
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

			$sql .= " GROUP BY a.sr_equip_model, sr_war_status_new
			  ORDER BY a.sr_equip_model, sr_war_status_new";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$model = $row['sr_equip_model'];
				$warranty = $row['sr_war_status_new'];
				$grouped[$model][$warranty][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg'      => $row['time_insec_to_resp_avg'],
					'repair_avg'    => $row['time_insec_to_repair_avg'],
					'open'          => $row['open_tickets'],
					'inprogress'    => $row['inprogress_tickets'],
					'closed'        => $row['closed_tickets'],
				];
			}
			$viewer->assign('GROUPED_DATA', $grouped);
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
			$viewer->assign('GROUPED_DATA', $grouped);
		} else if (!empty($ticketType) && !empty($warrantyStatus)) {
			$sql = "SELECT 
						a.ticket_type,
						IFNULL(NULLIF(b.sr_war_status, ''), '-') AS sr_war_status_new,
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

			$sql .= " GROUP BY a.ticket_type, sr_war_status_new
					ORDER BY a.ticket_type, sr_war_status_new";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$ticketTypeVer = $row['ticket_type'] ?: 'Unknown';
				$warranty = $row['sr_war_status_new'] ?: 'Unknown';
				$grouped[$ticketTypeVer][$warranty][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg' => $row['time_insec_to_resp_avg'],
					'repair_avg' => $row['time_insec_to_repair_avg'],
					'open' => $row['open_tickets'],
					'inprogress' => $row['inprogress_tickets'],
					'closed' => $row['closed_tickets'],
				];
			}
			$viewer->assign('GROUPED_DATA', $grouped);
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
			$viewer->assign('GROUPED_DATA', $grouped);
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
			$viewer->assign('GROUPED_DATA', $grouped);
		} else if (!empty($warrantyStatus) && empty($ticketType) && empty($equipmentModel)) {
			$sql = "SELECT 
				IFNULL(NULLIF(b.sr_war_status, ''), '-') AS sr_war_status_new,
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

			$sql .= " GROUP BY sr_war_status_new ORDER BY sr_war_status_new";

			$grouped = [];
			$result = $adb->pquery($sql, $params);
			while ($row = $adb->fetch_array($result)) {
				$warranty = $row['sr_war_status_new'];

				$grouped[$warranty][] = [
					'no_of_tickets' => $row['no_of_tickets'],
					'resp_avg' => $row['time_insec_to_resp_avg'],
					'repair_avg' => $row['time_insec_to_repair_avg'],
					'open' => $row['open_tickets'],
					'inprogress' => $row['inprogress_tickets'],
					'closed' => $row['closed_tickets'],
				];
			}
			$viewer->assign('GROUPED_DATA', $grouped);
		}

		$viewer->assign('typeCategory', $typeCategory);
		$viewer->assign('equipmentModel', $equipmentModel);
		$viewer->assign('dateRange', $dateRange);
		$viewer->assign('ticketType', $ticketType);
		$viewer->assign('warrantyStatus', $warrantyStatus);
		$viewer->assign('fromDate', $fromDate);
		$viewer->assign('toDate', $toDate);
		echo $this->showModuleDetailView($request);
	}

	function showModuleDetailView(Vtiger_Request $request) {

		$moduleName = $request->getModule();

		$pickListValues = getAllPickListValues('region_code');
		$pickListValuesRowColSub = getAllPickListValues('eq_division');
		unset($pickListValues['Aggregate Warranty']);
		$viewer = $this->getViewer($request);
		$viewer->assign('MODULE', $moduleName);
		$viewer->assign('REPORT_LABEL', 'Life Cycle');
		$ColumnColIg = '(plant_name ; (MaintenancePlant) region_code)';
		$rowColIg = 'equip_model';
		global $adb;


		$sql = "SELECT sr_ticket_typeid,sr_ticket_type FROM `vtiger_sr_ticket_type`";
		$sqlResult = $adb->pquery($sql, array());
		$num_rows = $adb->num_rows($sqlResult);
		$ticketTypRow = [];

		if ($num_rows > 0) {
			for ($i = 0; $i < $num_rows; $i++) {
				$row = $adb->fetchByAssoc($sqlResult, $i);
				if (!empty($row['sr_ticket_type'])) {
					$ticketTypRow[] = $row;
				}
			}
		}


		$sqlEquip = "SELECT sr_equip_modelid,sr_equip_model FROM `vtiger_sr_equip_model`";
		$sqlResult2 = $adb->pquery($sqlEquip, array());
		$num_rows = $adb->num_rows($sqlResult2);
		$eqipDataRow = [];

		if ($num_rows > 0) {
			for ($i = 0; $i < $num_rows; $i++) {
				$row = $adb->fetchByAssoc($sqlResult2, $i);
				if (!empty($row['sr_equip_model']) && $row['sr_equip_model'] !== '----') {
					$eqipDataRow[] = $row;
				}
			}
		}


		$sqlWar = "SELECT sr_war_statusid,sr_war_status FROM `vtiger_sr_war_status`";
		$sqlResult3 = $adb->pquery($sqlWar, array());
		$num_rows = $adb->num_rows($sqlResult3);
		$warDataRow = [];

		if ($num_rows > 0) {
			for ($i = 0; $i < $num_rows; $i++) {
				$row = $adb->fetchByAssoc($sqlResult3, $i);
				/*if (!empty($row['sr_war_status'])) {
					$warDataRow[] = $row;
				}*/
				if (!empty($row['sr_war_status']) && $row['sr_war_status'] !== 'Outside Warranty') {
            				$warDataRow[] = $row;
        			}
			}
		}


		$viewer->assign('ticketTypRow', $ticketTypRow);
		$viewer->assign('eqipDataRow', $eqipDataRow);
		$viewer->assign('warDataRow', $warDataRow);

		return $viewer->view('LifeCycle.tpl', $moduleName, true);
	}
}
