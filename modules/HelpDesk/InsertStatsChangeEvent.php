<?php
function InsertStatsChangeEvent($entityData) {
    global $adb;
    $recordInfo = $entityData->{'data'};
    $id = $recordInfo['id'];
    $id = explode('x', $id);
    $id = $id[1];
    global $log;
    $log->debug("*****ID Is ---- ***********" . json_encode($id) . "********");
    $status = $recordInfo['ticketstatus'];
    if (empty($status)) {
        $status = 'Open';
    }
    changeStatus($id, $status);
}
