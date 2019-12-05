<?php
function get_all() {
    global $db;
    $query = 'SELECT * FROM branch';
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

function insert($branch) {
    global $db;

    $query = 'INSERT INTO branch
                (BCH_NAME,BCH_POC,BCH_PHONE,BCH_COUNTRY,BCH_STATE,
                BCH_CITY,BCH_STREET,BCH_ZIPCODE,BCH_LASTMODIFIED) 
              VALUES 
                (:bchName,:bchPOC,:bchPhone,:bchCountry,:bchState,
                :bchCity,:bchStreet,:bchZipcode,:bchLstMod)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':bchName', $branch->getBchName());
        $statement->bindValue(':bchPOC', $branch->getBchPOC());
        $statement->bindValue(':bchPhone', $branch->getBchPhone());
        $statement->bindValue(':bchCountry', $branch->getBchCountry());
        $statement->bindValue(':bchState', $branch->getBchState());
        $statement->bindValue(':bchCity', $branch->getBchCity());
        $statement->bindValue(':bchStreet', $branch->getBchStreet());
        $statement->bindValue(':bchZipcode', $branch->getBchZipcode());
        $statement->bindValue(':bchLstMod', $branch->getBchLstMod());
        $statement->execute();
        $statement->closeCursor();

        // Get the last Branch ID that was inserted
        $bch_id = $db->lastInsertId();
        return $bch_id;
    } catch (PDOException $e) {
        exit;
    }
}

function update($branch) {
    global $db;
    $query = 'UPDATE branch
              SET BCH_NAME = :bchName,
                  BCH_POC = :bchPOC,
                  BCH_PHONE = :bchPhone,
                  BCH_COUNTRY = :bchCountry,
                  BCH_STATE = :bchState,
                  BCH_CITY = :bchCity,
                  BCH_STREET = :bchStreet,
                  BCH_ZIPCODE = :bchZipcode,
                  BCH_LASTMODIFIED = :bchLstMod
              WHERE BCH_ID = :bchID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':bchID', $branch->getBchID());
        $statement->bindValue(':bchName', $branch->getBchName());
        $statement->bindValue(':bchPOC', $branch->getBchPOC());
        $statement->bindValue(':bchPhone', $branch->getBchPhone());
        $statement->bindValue(':bchCountry', $branch->getBchCountry());
        $statement->bindValue(':bchState', $branch->getBchState());
        $statement->bindValue(':bchCity', $branch->getBchCity());
        $statement->bindValue(':bchStreet', $branch->getBchStreet());
        $statement->bindValue(':bchZipcode', $branch->getBchZipcode());
        $statement->bindValue(':bchLstMod', $branch->getBchLstMod());
        $row_count = $statement->execute();
        $statement->closeCursor();

        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function delete($bchID) {
    global $db;
    $query = 'DELETE FROM branch WHERE BCH_ID = :bchID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':bchID', $bchID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

?>