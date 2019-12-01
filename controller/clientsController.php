<?php
require('../model/databaseConnect.php');
require('../model/clientsQueries.php');
require('../model/Client.php');

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
    case 'insert':
        // insert one new row

        $cliID = NULL;
        $cliAgtID = filter_input(INPUT_POST, 'cliAgtID');
        $cliFname = filter_input(INPUT_POST, 'cliFname');
        $cliLname = filter_input(INPUT_POST, 'cliLname');
        $cliPhone = filter_input(INPUT_POST, 'cliPhone');
        $cliEmail = filter_input(INPUT_POST, 'cliEmail');
        $cliCountry = filter_input(INPUT_POST, 'cliCountry');
        $cliState = filter_input(INPUT_POST, 'cliState');
        $cliCity = filter_input(INPUT_POST, 'cliCity');
        $cliStreet = filter_input(INPUT_POST, 'cliStreet');
        $cliZipcode = filter_input(INPUT_POST, 'cliZipcode');

        $client = new Client($cliID, $cliAgtID, $cliFname, $cliLname, $cliPhone, $cliEmail, $cliCountry, $cliState, $cliCity, $cliStreet, $cliZipcode);

        $rows = insert($client);

        if ($rows == NULL){
            $message = 'Row not inserted';
        }
        else {
            $result = get_all();
            $message = 'Row inserted';
        }
        // display results
        include('../view/clients.php');
        break;

    case 'selectall':
        // get all rows
        $result = get_all();
        $message = '';

        // display results
        include('../view/clients.php');
        break;

    case 'select':
        //narrowed down to these four to reduce complexity - can add later
        $cliID = filter_input(INPUT_POST, 'cliID');
        $bchID = filter_input(INPUT_POST, 'cliAgtID');
        $cliFname = filter_input(INPUT_POST, 'cliFname');
        $cliLname = filter_input(INPUT_POST, 'cliLname');

        //$cliArray = ($cliID, $bchID, $cliFname, $cliLname);


        if ($cliID != NULL) {
            $useEmpID = 1;
        }
        else {
            $useEmpID = 0;
        }

        if ($bchID != NULL) {
            $useBchID = 1;
        }
        else {
            $useBchID = 0;
        }

        if ($cliFname != NULL) {
            $useEmpFname = 1;
        }
        else {
            $useEmpFname = 0;
        }

        if ($cliLname != NULL) {
            $useEmpLname = 1;
        }
        else {
            $useEmpLname = 0;
        }
        break;

    case 'delete':
        // delete selected row
        $cliID = filter_input(INPUT_POST, 'cliID');

        $rows = delete($cliID);

        if ($rows == NULL){
            $message = 'Row not deleted';
        }
        else {
            $result = get_all();
            $message = 'Row deleted';
        }
        // display profile list
        include('../view/clients.php');
        break;

    case 'update':
        // update selected row
        $cliID = filter_input(INPUT_POST, 'cliID');
        $cliAgtID = filter_input(INPUT_POST, 'cliAgtID');
        $cliFname = filter_input(INPUT_POST, 'cliFname');
        $cliLname = filter_input(INPUT_POST, 'cliLname');
        $cliPhone = filter_input(INPUT_POST, 'cliPhone');
        $cliEmail = filter_input(INPUT_POST, 'cliEmail');
        $cliCountry = filter_input(INPUT_POST, 'cliCountry');
        $cliState = filter_input(INPUT_POST, 'cliState');
        $cliCity = filter_input(INPUT_POST, 'cliCity');
        $cliStreet = filter_input(INPUT_POST, 'cliStreet');
        $cliZipcode = filter_input(INPUT_POST, 'cliZipcode');

        $client = new Client($cliID, $cliAgtID, $cliFname, $cliLname, $cliPhone, $cliEmail, $cliCountry, $cliState, $cliCity, $cliStreet, $cliZipcode);

        $rows = update($client);

        if ($rows == NULL){
            $message = 'Row not updated';
        }
        else {
            $result = get_all();
            $message = 'Row updated';
        }
        // display results
        include('../view/clients.php');
        break;
}
?>