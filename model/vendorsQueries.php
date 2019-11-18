<?php
function get_all() {
    global $db;
    $query = 'SELECT * FROM vendor';
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

function insert($vendor) {
    global $db;

    $query = 'INSERT INTO vendor
                (VEN_NAME,VEN_POC,VEN_PHONE,VEN_EMAIL,VEN_COUNTRY,VEN_STATE,
                VEN_CITY,VEN_STREET,VEN_ZIPCODE,VEN_LASTMODIFIED) 
              VALUES 
                (:venName,:venPOC,:venPhone,:venEmail,:venCountry,:venState,
                :venCity,:venStreet,:venZipcode,:venLstMod)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':venName', $vendor->getVenName());
        $statement->bindValue(':venPOC', $vendor->getVenPOC());
        $statement->bindValue(':venPhone', $vendor->getVenPhone());
        $statement->bindValue(':venEmail', $vendor->getVenEmail());
        $statement->bindValue(':venCountry', $vendor->getVenCountry());
        $statement->bindValue(':venState', $vendor->getVenState());
        $statement->bindValue(':venCity', $vendor->getVenCity());
        $statement->bindValue(':venStreet', $vendor->getVenStreet());
        $statement->bindValue(':venZipcode', $vendor->getVenZipcode());
        $statement->bindValue(':venLstMod', $vendor->getVenLstMod());
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was inserted
        $ven_id = $db->lastInsertId();
        return $ven_id;
    } catch (PDOException $e) {
        exit;
    }
}

function update($vendor) {
    global $db;
    $query = 'UPDATE vendor
              SET VEN_NAME = :venName,
                  VEN_POC = :venPOC,
                  VEN_PHONE = :venPhone,
                  VEN_EMAIL = :venEmail,
                  VEN_COUNTRY = :venCountry,
                  VEN_STATE = :venState,
                  VEN_CITY = :venCity,
                  VEN_STREET = :venStreet,
                  VEN_ZIPCODE = :venZipcode,
                  VEN_LASTMODIFIED = :venLstMod
              WHERE VEN_ID = :venID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':venID', $vendor->getVenID());
        $statement->bindValue(':venName', $vendor->getVenName());
        $statement->bindValue(':venPOC', $vendor->getVenPOC());
        $statement->bindValue(':venPhone', $vendor->getVenPhone());
        $statement->bindValue(':venEmail', $vendor->getVenEmail());
        $statement->bindValue(':venCountry', $vendor->getVenCountry());
        $statement->bindValue(':venState', $vendor->getVenState());
        $statement->bindValue(':venCity', $vendor->getVenCity());
        $statement->bindValue(':venStreet', $vendor->getVenStreet());
        $statement->bindValue(':venZipcode', $vendor->getVenZipcode());
        $statement->bindValue(':venLstMod', $vendor->getVenLstMod());
        $row_count = $statement->execute();
        $statement->closeCursor();

        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function delete($venID) {
    global $db;
    $query = 'DELETE FROM vendor WHERE VEN_ID = :venID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':venID', $venID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

?>