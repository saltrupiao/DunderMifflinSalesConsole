<?php
function get_all() {
    global $db;
    $query = 'SELECT * FROM invoice';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        exit;
    }
}

function get_prod_price($pprCode) {
    global $db;
    $query = 'SELECT PPR_PRICE FROM paper WHERE PPR_CODE = :pprCode';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pprCode', $pprCode);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        exit;
    }
}

function get_inv_total($invNum) {
    global $db;
    $query = 'SELECT SUM(LNE_PRICE) FROM line WHERE INV_NUMBER = :invNum';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':invNum', $invNum);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        exit;
    }
}

//function get_by_productID($productID) {
//    global $db;
//    $query = 'SELECT *
//              FROM product
//              WHERE ProductID = :productID';
//    try {
//        $statement = $db->prepare($query);
//        $statement->bindValue(':productID', $productID);
//        $statement->execute();
//        $result = $statement->fetch();
//        $statement->closeCursor();
//        return $result;
//    } catch (PDOException $e) {
//        exit;
//    }
//}

function view_order($viewInvNum) {
    global $db;
    $query = 'SELECT * FROM line WHERE INV_NUMBER = :viewInvNum';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':viewInvNum', $viewInvNum);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        exit;
    }
}


function insert_order($order) {
    global $db;

    $query = 'INSERT INTO invoice
                (INV_AGT_ID,CLI_ID,INV_TITLE,INV_TOTAL,INV_DATE,INV_STATUS) 
              VALUES 
                (:invAgtID,:invCliID,:invTitle,:invTotal,:invDate,:invStatus)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':invAgtID', $order->getInvAgtID());
        $statement->bindValue(':invCliID', $order->getInvCliID());
        $statement->bindValue(':invTitle', $order->getInvTitle());
        $statement->bindValue(':invTotal', $order->getInvTotal());
        $statement->bindValue(':invDate', $order->getInvDate());
        $statement->bindValue(':invStatus', $order->getInvStatus());
        $statement->execute();
        $statement->closeCursor();

        // Get the last invoice number that was inserted
        $inv_num = $db->lastInsertId();
        return $inv_num;
    } catch (PDOException $e) {
        exit;
    }
}

function insert_line($newLine) {
    global $db;

    $query = 'INSERT INTO line
                (INV_NUMBER,PPR_CODE,LNE_UNITS,LNE_PRICE) 
              VALUES 
                (:invNum,:pprCode,:lneUnits,:lnePrice)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':invNum', $newLine->getLneInvNum());
        $statement->bindValue(':pprCode', $newLine->getLnePprCode());
        $statement->bindValue(':lneUnits', $newLine->getLneUnits());
        $statement->bindValue(':lnePrice', $newLine->getLnePrice());
        $statement->execute();
        $statement->closeCursor();

        // Get the last invoice number that was inserted
        $inv_num = $db->lastInsertId();
        return $inv_num;
    } catch (PDOException $e) {
        exit;
    }
}

function update_order($order) {
    global $db;
    $query = 'UPDATE invoice
              SET INV_NUM = :invNum,
                  INV_AGT_ID = :invAgtID,
                  CLI_ID = :invCliID,
                  INV_TITLE = :invTitle,
                  INV_TOTAL = :invTotal,
                  INV_DATE = :invDate,
                  INV_STATUS = :invStatus
              WHERE INV_NUM = :invNum';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':invNum', $order->getInvNum());
        $statement->bindValue(':invAgtID', $order->getInvAgtID());
        $statement->bindValue(':invCliID', $order->getInvCliID());
        $statement->bindValue(':invTitle', $order->getInvTitle());
        $statement->bindValue(':invTotal', $order->getInvTotal());
        $statement->bindValue(':invDate', $order->getInvDate());
        $statement->bindValue(':invStatus', $order->getInvStatus());
        $row_count = $statement->execute();
        $statement->closeCursor();

        $inv_num = $db->lastInsertID();
        return $inv_num;
    } catch (PDOException $e) {
        exit;
    }
}

function update_line($newLine) {
    global $db;

    $query = 'UPDATE line
              SET INV_NUMBER = :invNum,
                  PPR_CODE = :pprCode,
                  LNE_UNITS = :lneUnits,
                  LNE_PRICE = :lnePrice
              WHERE INV_NUMBER = :invNum AND PPR_CODE = :pprCode';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':invNum', $newLine->getLneInvNum());
        $statement->bindValue(':pprCode', $newLine->getLnePprCode());
        $statement->bindValue(':lneUnits', $newLine->getLneUnits());
        $statement->bindValue(':lnePrice', $newLine->getLnePrice());
        $statement->execute();
        $statement->closeCursor();

        // Get the last invoice number that was inserted
        $inv_num = $db->lastInsertId();
        return $inv_num;
    } catch (PDOException $e) {
        exit;
    }
}

function delete_invoice($invNum) {
    global $db;
    $query = 'DELETE FROM invoice WHERE INV_NUM = :invNum';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':invNum', $invNum);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function delete_line($invNum) {
    global $db;
    $query = 'DELETE FROM line WHERE INV_NUMBER = :invNum';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':invNum', $invNum);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

?>