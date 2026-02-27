<?php
function InsertStatsChangeEventSR($entityData) {
    global $adb;
    $recordInfo = $entityData->{'data'};
    // $id = $recordInfo['id'];
    // $id = explode('x', $id);
    // $id = $id[1];

    $id = $recordInfo['ticket_id'];
    $id = explode('x', $id);
    $id = $id[1];

    global $log;
    $log->debug("*****SR ID Is ---- ***********" . json_encode($id) . "********");

    $status = 'In Progress';
    changeStatus($id, $status);
}
