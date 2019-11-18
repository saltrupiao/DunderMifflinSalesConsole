<?php
require('../model/databaseConnect.php');
require('../model/branchesQueries.php');
require('../model/Branch.php');

/*********************************************
 * Get request from user
 **********************************************/

$action = strtolower(filter_input(INPUT_POST, 'action'));
if ($action == NULL) {
    $action = strtolower(filter_input(INPUT_GET, 'action'));
    if ($action == NULL) {
        $action = 'selectall';
    }
}

/**********************************************
 * Build and execute requested query
 **********************************************/
switch ($action) {
    case 'selectall':
        // get all rows
        $result = get_all();
        $message = '';

        // display results
        include('../view/branches.php');
        break;
    case 'insert':
        // insert one new row

        $bchID = NULL;
        $bchName = filter_input(INPUT_POST, 'bchName');
        $bchPOC = filter_input(INPUT_POST, 'bchPOC');
        $bchPhone = filter_input(INPUT_POST, 'bchPhone');
        $bchCountry = filter_input(INPUT_POST, 'bchCountry');
        $bchState = filter_input(INPUT_POST, 'bchState');
        $bchCity = filter_input(INPUT_POST, 'bchCity');
        $bchStreet = filter_input(INPUT_POST, 'bchStreet');
        $bchZipcode = filter_input(INPUT_POST, 'bchZipcode');
        $bchLstMod = date("Y-m-d");
        $branch = new Branch($bchID,$bchName,$bchPOC,$bchPhone,$bchCountry,$bchState,$bchCity,$bchStreet,$bchZipcode,$bchLstMod);

        $rows = insert($branch);

        if ($rows == NULL){
            $message = 'Row not inserted';
        }
        else {
            $result = get_all();
            $message = 'Row inserted';
        }
        // display results
        include('../view/branches.php');
        break;
    case 'delete':
        // delete selected row
        $bchID = filter_input(INPUT_POST, 'bchID');
        $rows = delete($bchID);

        if ($rows == NULL){
            $message = 'Row not deleted';
        }
        else {
            $result = get_all();
            $message = 'Row deleted';
        }
        // display branch list
        include('../view/branches.php');
        break;
    case 'update':
        // update selected row
        $bchID = filter_input(INPUT_POST, 'bchID');
        $bchName = filter_input(INPUT_POST, 'bchName');
        $bchPOC = filter_input(INPUT_POST, 'bchPOC');
        $bchPhone = filter_input(INPUT_POST, 'bchPhone');
        $bchCountry = filter_input(INPUT_POST, 'bchCountry');
        $bchState = filter_input(INPUT_POST, 'bchState');
        $bchCity = filter_input(INPUT_POST, 'bchCity');
        $bchStreet = filter_input(INPUT_POST, 'bchStreet');
        $bchZipcode = filter_input(INPUT_POST, 'bchZipcode');
        $bchLstMod = date("Y-m-d");
        $branch = new Branch($bchID,$bchName,$bchPOC,$bchPhone,$bchCountry,$bchState,$bchCity,$bchStreet,$bchZipcode,$bchLstMod);

        $rows = update($branch);

        if ($rows == NULL){
            $message = 'Row not updated';
        }
        else {
            $result = get_all();
            $message = 'Row updated';
        }
        // display results
        include('../view/branches.php');
        break;
}
?>