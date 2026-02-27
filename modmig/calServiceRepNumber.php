<?php
chdir(dirname(_FILE_) . '/../');
include_once 'config.php';
include_once 'include/Webservices/Relation.php';
include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';
global $current_user;
$current_user = Users::getActiveAdminUser();
$webUI = new Vtiger_WebUI();
global $adb;
$msql = "SELECT * FROM vtiger_servicereports
inner join vtiger_crmentity 
on vtiger_crmentity.crmid = vtiger_servicereports.servicereportsid
where setype ='ServiceReports' and deleted = 0";
$res = $adb->pquery($msql, array());
$_REQUEST['action'] = 'SaveAjax';
global $doingMig;
$doingMig = true;
while ($row = $adb->fetchByAssoc($res)) {
        $crmId = $row['crmid'];
        $reportId = $row['creditnote_no'];
        preg_match('/\d+/', $reportId, $matches);
        if (!empty($matches[0])) {
                $adb->pquery(
                        'UPDATE vtiger_servicereports SET creditnote_no = ? WHERE servicereportsid=?',
                        array($matches[0], $crmId)
                );
        }
}
