<?php
require('../model/databaseConnect.php');
require('../model/databaseQueries.php');
require('../model/Employee.php');

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
        include('../view/results.php');
        break;
    case 'insert':
        // insert one new row

        $productID = filter_input(INPUT_POST, 'productID');
        $productCode = filter_input(INPUT_POST, 'productCode');
        $productDescription = filter_input(INPUT_POST, 'productDescription');   
        $productPrice = filter_input(INPUT_POST, 'productPrice');
        $product = new Product($productID,$productCode,$productDescription,$productPrice);

        $rows = insert($product);
        
        if ($rows == 0){
             $message = 'Row not inserted';
        } 
        else {
             $result = get_all();
             $message = 'Row inserted';
        }
        // display results
        include('../view/results.php');
        break;
    case 'delete':
        // delete selected row
        $productID = filter_input(INPUT_POST, 'productID');
        $rows = delete($productID);
        
        if ($rows == 0){
             $message = 'Row not deleted';
        } 
        else {
             $result = get_all();
             $message = 'Row deleted';
        }
        // display product list
        include('../view/results.php');
        break;
    case 'update':
        // update selected row
        $productID = filter_input(INPUT_POST, 'productID');
        $productCode = filter_input(INPUT_POST, 'productCode');
        $productDescription = filter_input(INPUT_POST, 'productDescription');   
        $productPrice = filter_input(INPUT_POST, 'productPrice');
        $product = new Product($productID,$productCode,$productDescription,$productPrice); 
        
        $rows = update($product);
        
        if ($rows == 0){
             $message = 'Row not updated';
        } 
        else {
             $result = get_all();
             $message = 'Row updated';
        }
        // display results
        include('../view/results.php');
        break;
}
?>