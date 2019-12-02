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

    case 'viewOrder':
        $viewInvNum = filter_input(INPUT_POST, 'viewInvNum');

        $result = view_order($viewInvNum);

        /*
        if ($results == NULL) {
            $message = 'Could not fetch view - no line items';
        }
        */

        //$results = view_order($viewInvNum);

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

            $pprCode = $_POST['pprCode'];
            $lneUnits = $_POST['lneUnits'];
            $countPprCode = count($pprCode);
            $countLneUnits = count($lneUnits);


            for ($i=0; $i<count($pprCode) && $i<count($lneUnits); $i++) {
                $code = $pprCode[$i];
                $units = $lneUnits[$i];
                $pprPrice = get_prod_price($code);
                $pprPriceIn = $pprPrice[0];

                $pprPriceFmt = number_format($pprPriceIn, 2);
                $unitsIn = number_format($units);
                $lnePrice = $unitsIn * $pprPriceFmt;
                $newLine = new Line($lstInvNum, $code, $unitsIn, $lnePrice);
                $rowsLine = insert_line($newLine);
            }
        }

        if ($rowsLine == NULL){
            $message = 'Row and LINE not inserted';
        }
        else {
            $result = get_all();
            $message = "Row inserted, $countPprCode, $countLneUnits";
        }

        // display results
        include('../view/orders.php');
        break;

    case 'delete':
        // delete selected row
        $invNum = filter_input(INPUT_POST, 'invNum');
        $rowsLine = delete_line($invNum);
        if ($rowsLine == NULL) {
            $message = 'Rows not deleted';
        }
        else {
            $rowsInvoice = delete_invoice($invNum);
        }

        if ($rowsInvoice == NULL){
            $message = 'Row not deleted';
        }
        else {
            $result = get_all();
            $message = 'Row deleted';
        }

        // display orders list
        include('../view/orders.php');
        break;

    case 'update':
        // update selected row

        $invNum = filter_input(INPUT_POST, 'invNum');
        $invAgtID = filter_input(INPUT_POST, 'invAgtID');
        $invCliID = filter_input(INPUT_POST, 'invCliID');
        $invTitle = filter_input(INPUT_POST, 'invTitle');
        $invTotal = filter_input(INPUT_POST, 'invTotal');
        $invDate = date("Y-m-d");
        $invStatus = filter_input(INPUT_POST, 'invStatus');

        $order = new Invoice($invNum, $invAgtID, $invCliID, $invTitle, $invTotal, $invDate, $invStatus);

        $lstInvNum = update_order($order);

        if ($lstInvNum == NULL){
            $message = 'Row not inserted';
            $result = get_all();
            break;
        }
        else {

            $pprCode = $_POST['pprCode'];
            $lneUnits = $_POST['lneUnits'];
            $countPprCode = count($pprCode);
            $countLneUnits = count($lneUnits);


            for ($i=0; $i<count($pprCode) && $i<count($lneUnits); $i++) {
                $code = $pprCode[$i];
                $units = $lneUnits[$i];
                $pprPrice = get_prod_price($code);
                $pprPriceIn = $pprPrice[0];

                $pprPriceFmt = number_format($pprPriceIn, 2);
                $unitsIn = number_format($units);
                $lnePrice = $unitsIn * $pprPriceFmt;
                $newLine = new Line($invNum, $code, $unitsIn, $lnePrice);
                $rowsLine = update_line($newLine);
            }
        }

        if ($rowsLine == NULL){
            $message = 'Row and LINE not updated';
        }
        else {
            $result = get_all();
            $message = "Row updated, $invNum, $code, $unitsIn";
        }

        // display results
        include('../view/orders.php');
        break;
}
?>