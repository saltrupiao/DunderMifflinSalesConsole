<?php
require('../model/databaseConnect.php');
require('../model/vendorsQueries.php');
require('../model/Vendor.php');

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
        include('../view/vendors.php');
        break;
    case 'insert':
        // insert one new row

        $venID = NULL;
        $venName = filter_input(INPUT_POST, 'venName');
        $venPOC = filter_input(INPUT_POST, 'venPOC');
        $venPhone = filter_input(INPUT_POST, 'venPhone');
        $venEmail = filter_input(INPUT_POST, 'venEmail');
        $venCountry = filter_input(INPUT_POST, 'venCountry');
        $venState = filter_input(INPUT_POST, 'venState');
        $venCity = filter_input(INPUT_POST, 'venCity');
        $venStreet = filter_input(INPUT_POST, 'venStreet');
        $venZipcode = filter_input(INPUT_POST, 'venZipcode');
        $venLstMod = date("Y-m-d");
        $vendor = new Vendor($venID,$venName,$venPOC,$venPhone,$venEmail,$venCountry,$venState,$venCity,$venStreet,$venZipcode,$venLstMod);

        $rows = insert($vendor);

        if ($rows == NULL){
            $message = 'Row not inserted';
        }
        else {
            $result = get_all();
            $message = 'Row inserted';
        }
        // display results
        include('../view/vendors.php');
        break;
    case 'delete':
        // delete selected row
        $venID = filter_input(INPUT_POST, 'venID');
        $rows = delete($venID);

        if ($rows == NULL){
            $message = 'Row not deleted';
        }
        else {
            $result = get_all();
            $message = 'Row deleted';
        }
        // display vendor list
        include('../view/vendors.php');
        break;
    case 'update':
        // update selected row
        $venID = filter_input(INPUT_POST, 'venID');
        $venName = filter_input(INPUT_POST, 'venName');
        $venPOC = filter_input(INPUT_POST, 'venPOC');
        $venPhone = filter_input(INPUT_POST, 'venPhone');
        $venEmail = filter_input(INPUT_POST, 'venEmail');
        $venCountry = filter_input(INPUT_POST, 'venCountry');
        $venState = filter_input(INPUT_POST, 'venState');
        $venCity = filter_input(INPUT_POST, 'venCity');
        $venStreet = filter_input(INPUT_POST, 'venStreet');
        $venZipcode = filter_input(INPUT_POST, 'venZipcode');
        $venLstMod = date("Y-m-d");
        $vendor = new Vendor($venID, $venName, $venPOC, $venPhone, $venEmail, $venCountry, $venState, $venCity, $venStreet, $venZipcode, $venLstMod);

        $rows = update($vendor);

        if ($rows == NULL){
            $message = 'Row not updated';
        }

        else {
            $result = get_all();
            $message = 'Row updated';
        }
        // display results
        include('../view/vendors.php');
        break;
}
?>

