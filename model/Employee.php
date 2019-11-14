<?php
class Employee {
    
    private $empID, $empFname, $empLname, $empPhone, $empEmail, $empPwd, $empDOB, $empClearance;
    
    function __construct($empID, $empFname, $empLname, $empPhone, $empEmail, $empPwd, $empDOB, $empClearance) {
        $this->empID = $empID;
        $this->empFname = $empFname;
        $this->empLname = $empLname;
        $this->empPhone = $empPhone;
        $this->empEmail = $empEmail;
        $this->empPwd = $empPwd;
        $this->empDOB = $empDOB;
        $this->empClearance = $empClearance;
    }

    function getEmpID() {
        return $this->empID;
    }

    function getEmpFname() {
        return $this->empFname;
    }

    function getEmpLname() {
        return $this->empLname;
    }

    function getEmpPhone() {
        return $this->empPhone;
    }

    function getEmpEmail() {
        return $this->empEmail;
    }

    function getEmpPwd() {
        return $this->empPwd;
    }

    function getEmpDOB() {
        return $this->empDOB;
    }

    function getEmpClearance() {
        return $this->empClearance;
    }

    function setEmpID($empID) {
        $this->empID = $empID;
    }

    function setEmpFname($empFname) {
        $this->empFname = $empFname;
    }

    function setEmpLname($empLname) {
        $this->empLname = $empLname;
    }

    function setEmpPhone($empPhone) {
        $this->empPhone = $empPhone;
    }

    function setEmpEmail($empEmail) {
        $this->empEmail = $empEmail;
    }

    function setEmpPwd($empPwd) {
        $this->empPwd = $empPwd;
    }

    function setEmpDOB($empDOB) {
        $this->empDOB = $empDOB;
    }

    function setEmpClearance($empClearance) {
        $this->empClearance = $empClearance;
    }

}
?>