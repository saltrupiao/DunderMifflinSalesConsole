<?php
class Employee {
    
    private $empID, $bchID, $empFname, $empLname, $empPhone, $empDOB, $empCountry, $empState, $empCity, $empStreet, $empZipcode, $empEmail, $empPwd, $empClearance, $empLstmod;
    
    function __construct($empID, $bchID, $empFname, $empLname, $empPhone, $empDOB, $empCountry, $empState, $empCity, $empStreet, $empZipcode, $empEmail, $empPwd, $empClearance, $empLstmod) {
        $this->empID = $empID;
        $this->bchID = $bchID;
        $this->empFname = $empFname;
        $this->empLname = $empLname;
        $this->empPhone = $empPhone;
        $this->empDOB = $empDOB;
        $this->empCountry = $empCountry;
        $this->empState = $empState;
        $this->empCity = $empCity;
        $this->empStreet = $empStreet;
        $this->empZipcode = $empZipcode;
        $this->empEmail = $empEmail;
        $this->empPwd = $empPwd;
        $this->empClearance = $empClearance;
        $this->empLstmod = $empLstmod;
    }

    function getEmpID() {
        return $this->empID;
    }

    function getBchID() {
        return $this->bchID;
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

    function getEmpDOB() {
        return $this->empDOB;
    }

    function getEmpCountry() {
        return $this->empCountry;
    }

    function getEmpState() {
        return $this->empState;
    }

    function getEmpCity() {
        return $this->empCity;
    }

    function getEmpStreet() {
        return $this->empStreet;
    }

    function getEmpZipcode() {
        return $this->empZipcode;
    }

    function getEmpEmail() {
        return $this->empEmail;
    }

    function getEmpPwd() {
        return $this->empPwd;
    }

    function getEmpClearance() {
        return $this->empClearance;
    }

    function getEmpLstmod() {
        return $this->empLstmod;
    }

    function setEmpID($empID) {
        $this->empID = $empID;
    }

    function setBchID($bchID) {
        $this->bchID = $bchID;
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

    function setEmpDOB($empDOB) {
        $this->empDOB = $empDOB;
    }

    function setEmpCountry($empCountry) {
        $this->empCountry = $empCountry;
    }

    function setEmpState($empState) {
        $this->empState = $empState;
    }

    function setEmpCity($empCity) {
        $this->empCity = $empCity;
    }

    function setEmpStreet($empStreet) {
        $this->empStreet = $empStreet;
    }

    function setEmpEmail($empEmail) {
        $this->empEmail = $empEmail;
    }

    function setEmpPwd($empPwd) {
        $this->empPwd = $empPwd;
    }

    function setEmpClearance($empClearance) {
        $this->empClearance = $empClearance;
    }

    function setEmpLstmod($empLstmod) {
        $this->empLstmod = $empLstmod;
    }

}
?>