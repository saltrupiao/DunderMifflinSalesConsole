<?php
function get_all() {
    global $db;
    $query = 'SELECT * FROM employee';
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

function select() {
    global $db;

    //COME BACK TO THIS

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

function insert($employee) {
    global $db;

    $query = 'INSERT INTO employee
                (BCH_ID,EMP_FNAME,EMP_LNAME,EMP_PHONE,EMP_DOB,EMP_COUNTRY,EMP_STATE,EMP_CITY,EMP_STREET,EMP_ZIPCODE,EMP_EMAIL,EMP_PASSWD,EMP_CLEARANCE,EMP_LASTMODIFIED) 
              VALUES 
                (:bchID,:empFname,:empLname,:empPhone,:empDOB,:empCountry,:empState,:empCity,:empStreet,:empZipcode,:empEmail,:empPwd,:empClearance,:empLstmod)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':bchID', $employee->getBchID());
        $statement->bindValue(':empFname', $employee->getEmpFname());
        $statement->bindValue(':empLname', $employee->getEmpLname());
        $statement->bindValue(':empPhone', $employee->getEmpPhone());
        $statement->bindValue(':empDOB', $employee->getEmpDOB());
        $statement->bindValue(':empCountry', $employee->getEmpCountry());
        $statement->bindValue(':empState', $employee->getEmpState());
        $statement->bindValue(':empCity', $employee->getEmpCity());
        $statement->bindValue(':empStreet', $employee->getEmpStreet());
        $statement->bindValue(':empZipcode', $employee->getEmpZipcode());
        $statement->bindValue(':empEmail', $employee->getEmpEmail());
        $statement->bindValue(':empPwd', $employee->getEmpPwd());
        $statement->bindValue(':empClearance', $employee->getEmpClearance());
        $statement->bindValue(':empLstmod', $employee->getEmpLstmod());
        $statement->execute();
        $statement->closeCursor();

        // Get the last employee ID that was inserted
        $emp_id = $db->lastInsertId();
        return $emp_id;
    } catch (PDOException $e) {
        exit;
    }

}

function insertAgent($agent) {
    global $db;

    $query = 'INSERT INTO AGENT (AGT_EMP_ID) VALUES (:agtEmpID)';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':agtEmpID', $agent->getAgtEmpID());
        $statement->execute();
        $statement->closeCursor();

        $agt_emp_id = $db->lastInsertId();
        return $agt_emp_id;
    }
    catch (PDOException $e) {
        exit;
    }
}

function insertAdmin($admin) {
    global $db;

    $query = 'INSERT INTO ADMIN (ADM_EMP_ID) VALUES (:admEmpID)';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':admEmpID', $admin->getAdmEmpID());
        $statement->execute();
        $statement->closeCursor();
        $adm_emp_id = $db->lastInsertId();
        return $adm_emp_id;
    }
    catch (PDOException $e) {
        exit;
    }
}


function update($employee) {
    global $db;
    $query = 'UPDATE employee
              SET EMP_FNAME = :empFname,
                  EMP_LNAME = :empLname,
                  EMP_PHONE = :empPhone,
                  EMP_DOB = :empDOB,
                  EMP_COUNTRY = :empCountry,
                  EMP_STATE = :empState,
                  EMP_CITY = :empCity,
                  EMP_STREET = :empStreet,
                  EMP_ZIPCODE = :empZipcode,
                  EMP_EMAIL = :empEmail,
                  EMP_PASSWD = :empPwd,
                  EMP_LASTMODIFIED = :empLstmod
              WHERE EMP_ID = :empID AND BCH_ID = :bchID'; //Leaving out Clearance and Branch ID for editing - reducing complexity
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':empID', $employee->getEmpID());
        $statement->bindValue(':bchID', $employee->getBchID());
        $statement->bindValue(':empFname', $employee->getEmpFname());
        $statement->bindValue(':empLname', $employee->getEmpLname());
        $statement->bindValue(':empPhone', $employee->getEmpPhone());
        $statement->bindValue(':empDOB', $employee->getEmpDOB());
        $statement->bindValue(':empCountry', $employee->getEmpCountry());
        $statement->bindValue(':empState', $employee->getEmpState());
        $statement->bindValue(':empCity', $employee->getEmpCity());
        $statement->bindValue(':empStreet', $employee->getEmpStreet());
        $statement->bindValue(':empZipcode', $employee->getEmpZipcode());
        $statement->bindValue(':empEmail', $employee->getEmpEmail());
        $statement->bindValue(':empPwd', $employee->getEmpPwd());
        $statement->bindValue(':empLstmod', $employee->getEmpLstmod());
        $row_count = $statement->execute();
        $statement->closeCursor();

        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function deleteAgent($empID) {
    global $db;
    $query = 'DELETE FROM agent WHERE AGT_EMP_ID = :empID';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':empID', $empID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }

}

function deleteAdmin($empID) {
    global $db;
    $query = 'DELETE FROM admin WHERE ADM_EMP_ID = :empID';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':empID', $empID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }

}

function delete($empID) {
    global $db;

    $query = 'DELETE FROM employee WHERE EMP_ID = :empID';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':empID', $empID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }

}

?>