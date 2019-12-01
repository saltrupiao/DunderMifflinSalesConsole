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

function insert_order($order) {
    global $db;

    $query = 'INSERT INTO invoice
                (INV_AGT_ID,CLI_ID,INV_TITLE,INV_TOTAL,INV_DATE,INV_STATUS) 
              VALUES 
                (:agtID,:cliID,:invTitle,:invTotal,:invDate,:invStatus)';
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
                (INV_NUM,PPR_CODE,LNE_UNITS,LNE_PRICE) 
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

function update($paper) {
    global $db;
    $query = 'UPDATE paper
              SET VEN_ID = :venID,
                  PPR_TYPE = :pprType,
                  PPR_SIZE = :pprSize,
                  PPR_COLOR = :pprColor,
                  PPR_WEIGHT = :pprWeight,
                  PPR_IMG = :pprImg,
                  PPR_QOH = :pprQOH,
                  PPR_PRICE = :pprPrice,
                  PPR_LASTMODIFIED = :pprLstMod
              WHERE PPR_CODE = :pprCode';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pprCode', $paper->getPprCode());
        $statement->bindValue(':venID', $paper->getVenID());
        $statement->bindValue(':pprType', $paper->getPprType());
        $statement->bindValue(':pprSize', $paper->getPprSize());
        $statement->bindValue(':pprColor', $paper->getPprColor());
        $statement->bindValue(':pprWeight', $paper->getPprWeight());
        $statement->bindValue(':pprImg', $paper->getPprImg());
        $statement->bindValue(':pprQOH', $paper->getPprQOH());
        $statement->bindValue(':pprPrice', $paper->getPprPrice());
        $statement->bindValue(':pprLstMod', $paper->getPprLstMod());
        $row_count = $statement->execute();
        $statement->closeCursor();

        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function delete($pprCode) {
    global $db;
    $query = 'DELETE FROM paper WHERE PPR_CODE = :pprCode';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pprCode', $pprCode);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

?>