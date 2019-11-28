<?php
function get_all() {
    global $db;
    $query = 'SELECT * FROM paper';
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

function insert($paper) {
    global $db;

    $query = 'INSERT INTO paper
                (VEN_ID,PPR_TYPE,PPR_SIZE,PPR_COLOR,PPR_WEIGHT,
                PPR_IMG,PPR_QOH,PPR_PRICE,PPR_LASTMODIFIED) 
              VALUES 
                (:venID,:pprType,:pprSize,:pprColor,:pprWeight,:pprImg,
                :pprQOH,:pprPrice,:pprLstMod)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':venID', $paper->getVenID());
        $statement->bindValue(':pprType', $paper->getPprType());
        $statement->bindValue(':pprSize', $paper->getPprSize());
        $statement->bindValue(':pprColor', $paper->getPprColor());
        $statement->bindValue(':pprWeight', $paper->getPprWeight());
        $statement->bindValue(':pprImg', $paper->getPprImg());
        $statement->bindValue(':pprQOH', $paper->getPprQOH());
        $statement->bindValue(':pprPrice', $paper->getPprPrice());
        $statement->bindValue(':pprLstMod', $paper->getPprLstMod());
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was inserted
        $ppr_code = $db->lastInsertId();
        return $ppr_code;
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
              WHERE PPR_CODE = :pprCode AND VEN_ID = :venID';
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

function delete($pprCode, $venID) {
    global $db;
    $query = 'DELETE FROM paper WHERE PPR_CODE = :pprCode AND VEN_ID = :venID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pprCode', $pprCode);
        $statement->bindValue(':venID', $venID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

?>