<?php
require('../model/databaseConnect.php');
require('../model/profileQueries.php');
require('../model/Employee.php');
require('../model/Admin.php');
require('../model/Agent.php');

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
    case 'login':
        // get row
        $email = filter_input(INPUT_POST, 'email');
        $pwd = filter_input(INPUT_POST, 'pwd');
        $result = login($email, $pwd);
        
        if ($result == NULL) {
            $message = "Incorrect email $email or password $pwd";
            include('../view/error_page.php');
        } 
        else {    
            $message = 'Login successful!';
            include('../view/profile.php');
        }
        break;
    case 'selectall':
        // get all rows
        $result = get_all();
        $message = '';

        // display results
        include('../view/profile.php');
        break;
    case 'insert':
        // insert one new row

        $empID = NULL;
        $bchID = filter_input(INPUT_POST, 'bchID');
        $empFname = filter_input(INPUT_POST, 'empFname');
        $empLname = filter_input(INPUT_POST, 'empLname');
        $empPhone = filter_input(INPUT_POST, 'empPhone');
        $empDOB = filter_input(INPUT_POST, 'empDOB');
        $empCountry = filter_input(INPUT_POST, 'empCountry');
        $empState = filter_input(INPUT_POST, 'empState');
        $empCity = filter_input(INPUT_POST, 'empCity');
        $empStreet = filter_input(INPUT_POST, 'empStreet');
        $empZipcode = filter_input(INPUT_POST, 'empZipcode');
        $empEmail = filter_input(INPUT_POST, 'empEmail');
        $empPwd = filter_input(INPUT_POST, 'empPwd');
        $empClearance = filter_input(INPUT_POST, 'empClearance');
        $empLstMod = date("Y-m-d");

        $profile = new Employee($empID, $bchID, $empFname, $empLname, $empPhone, $empDOB, $empCountry, $empState, $empCity, $empStreet, $empZipcode, $empEmail, $empPwd, $empClearance, $empLstMod);

        $rows = insert($profile);

        switch ($empClearance) {
            case 0:
                $agtID = NULL;
                $agtEmpID = $rows;
                $agent = new Agent($agtID, $agtEmpID);
                $result = insertAgent($agent);
                break;

            case 1:
                $admID = NULL;
                $admEmpID = $rows;
                $admin = new Admin($admID, $admEmpID);
                $result = insertAdmin($admin);
        }

        /* Old IF statement - above switch case used instead
        if ($empClearance = 0) {
            $agtID = NULL;
            $agtEmpID = $rows;
            $agent = new Agent($agtID, $agtEmpID);
            $result = insertAgent($agent);
        }
        else{
            $admID = NULL;
            $admEmpID = $rows;
            $admin = new Admin($admID, $admEmpID);
            $result = insertAdmin($admin);
        }

        */


        if ($rows == NULL){
            $message = 'Row not inserted';
        }
        else {
            $result = get_all();
            $message = 'Row inserted';
        }
        // display results
        include('../view/profile.php');
        break;

    case 'select':
        $empID = filter_input(INPUT_POST, 'empID');
        $bchID = filter_input(INPUT_POST, 'bchID');
        $empFname = filter_input(INPUT_POST, 'empFname');
        $empLname = filter_input(INPUT_POST, 'empLname'); //narrowed down to these four to reduce complexity - can add later

        //$empArray = ($empID, $bchID, $empFname, $empLname);


        if ($empID != NULL) {
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

        if ($empFname != NULL) {
            $useEmpFname = 1;
        }
        else {
            $useEmpFname = 0;
        }

        if ($empLname != NULL) {
            $useEmpLname = 1;
        }
        else {
            $useEmpLname = 0;
        }
        break;




    case 'delete':
        // delete selected row
        $empID = filter_input(INPUT_POST, 'empID');
        $empClearance = filter_input(INPUT_POST, 'empClearance');

        switch ($empClearance) {
            case 0:
                deleteAgent($empID);
                break;

            case 1:
                deleteAdmin($empID);
                break;
        }

        $rows = delete($empID);

        if ($rows == NULL){
            $message = 'Row not deleted';
        }
        else {
            $result = get_all();
            $message = 'Row deleted';
        }
        // display profile list
        include('../view/profile.php');
        break;

    case 'update':
        // update selected row
        $empID = filter_input(INPUT_POST, 'empID');
        $bchID = filter_input(INPUT_POST, 'bchID');
        $empFname = filter_input(INPUT_POST, 'empFname');
        $empLname = filter_input(INPUT_POST, 'empLname');
        $empPhone = filter_input(INPUT_POST, 'empPhone');
        $empDOB = filter_input(INPUT_POST, 'empDOB');
        $empCountry = filter_input(INPUT_POST, 'empCountry');
        $empState = filter_input(INPUT_POST, 'empState');
        $empCity = filter_input(INPUT_POST, 'empCity');
        $empStreet = filter_input(INPUT_POST, 'empStreet');
        $empZipcode = filter_input(INPUT_POST, 'empZipcode');
        $empEmail = filter_input(INPUT_POST, 'empEmail');
        $empPwd = filter_input(INPUT_POST, 'empPwd');
        $empLstMod = date("Y-m-d");

        $employee = new Employee($empID, $bchID, $empFname, $empLname, $empPhone, $empDOB, $empCountry, $empState, $empCity, $empStreet, $empZipcode, $empEmail, $empPwd, $empClearance, $empLstMod);

        $rows = update($employee);

        if ($rows == NULL){
            $message = 'Row not updated';
        }
        else {
            $result = get_all();
            $message = 'Row updated';
        }
        // display results
        include('../view/profile.php');
        break;
}
?>