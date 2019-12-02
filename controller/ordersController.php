<?php
require('../model/databaseConnect.php');
require('../model/ordersQueries.php');
require('../model/Invoice.php');
require('../model/Line.php');


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
        include('../view/orders.php');
        break;
    case 'insert':
        // insert one new row
        
        $invNum = NULL;
        $invAgtID = filter_input(INPUT_POST, 'invAgtID');
        $invCliID = filter_input(INPUT_POST, 'invCliID');
        $invTitle = filter_input(INPUT_POST, 'invTitle');
        $invTotal = NULL;
        $invDate = date("Y-m-d");
        $invStatus = 1;
      
        $order = new Invoice($invNum, $invAgtID, $invCliID, $invTitle, $invTotal, $invDate, $invStatus);

        $lstInvNum = insert_order($order);

        if ($lstInvNum == NULL){
            $message = 'Row not inserted';
            $result = get_all();
            break;
        }
        else {      
            $pprCode = filter_input($_POST['pprCode']);
            $lneUnits = filter_input($_POST['lneUnits']);

            foreach ($pprCode as $paper) {
                $code = $paper['pprCode'];
                foreach ($lneUnits as $line) {
                    $units = $line['lneUnits'];
                }

                //Get product price
                $pprPrice = get_prod_price($code);
                $lnePrice = $units * $pprPrice;
                $newLine = new Line($lstInvNum, $code, $units, $lnePrice);
                $rowsLine = insert_line($newLine);
            }
        }
        
        if ($rowsLine == NULL){
            $message = 'Row not inserted';
        }
        else {
            $result = get_all();
            $message = 'Row inserted';
        }

        // display results
        include('../view/orders.php');
        break;
    case 'delete':
        // delete selected row
        $pprCode = filter_input(INPUT_POST, 'pprCode');
        $venID = filter_input(INPUT_POST, 'venID');
        $rows = delete($pprCode, $venID);

        if ($rows == NULL){
            $message = 'Row not deleted';
        }
        else {
            $result = get_all();
            $message = 'Row deleted';
        }
        // display vendor list
        include('../view/products.php');
        break;
    case 'update':
        // update selected row
        $pprCode = filter_input(INPUT_POST, 'pprCode');
        $venID = filter_input(INPUT_POST, 'venID');
        $pprType = filter_input(INPUT_POST, 'pprType');
        $pprSize = filter_input(INPUT_POST, 'pprSize');
        $pprColor = filter_input(INPUT_POST, 'pprColor');
        $pprWeight = filter_input(INPUT_POST, 'pprWeight');
        $pprImg = filter_input(INPUT_POST, 'pprImg');
        $pprQOH = filter_input(INPUT_POST, 'pprQOH');
        $pprPrice = filter_input(INPUT_POST, 'pprPrice');
        $pprLstMod = date("Y-m-d");
        $paper = new Paper($pprCode, $venID, $pprType, $pprSize, $pprColor, $pprWeight, $pprImg, $pprQOH, $pprPrice, $pprLstMod);

        $rows = update($paper);

        if ($rows == NULL){
            $message = 'Row not updated';
        }
        else {
            $result = get_all();
            $message = 'Row updated';
        }
        // display results
        include('../view/products.php');
        break;
}
?>