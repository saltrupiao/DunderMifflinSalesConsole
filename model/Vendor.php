<?php
class Vendor {

    private $venID, $venName, $venPOC, $venPhone, $venEmail, $venCountry, $venState, $venCity, $venStreet, $venZipcode, $venLstMod;

    function __construct($venID, $venName, $venPOC, $venPhone, $venEmail, $venCountry, $venState, $venCity, $venStreet, $venZipcode, $venLstMod) {
        $this->venID = $venID;
        $this->venName = $venName;
        $this->venPOC = $venPOC;
        $this->venPhone = $venPhone;
        $this->venEmail = $venEmail;
        $this->venCountry = $venCountry;
        $this->venState = $venState;
        $this->venCity = $venCity;
        $this->venStreet = $venStreet;
        $this->venZipcode = $venZipcode;
        $this->venLstMod = $venLstMod;
    }

    function getVenID() {
        return $this->venID;
    }

    function getVenName() {
        return $this->venName;
    }

    function getVenPOC() {
        return $this->venPOC;
    }

    function getVenPhone() {
        return $this->venPhone;
    }

    function getVenEmail() {
        return $this->venEmail;
    }

    function getVenCountry() {
        return $this->venCountry;
    }

    function getVenState() {
        return $this->venState;
    }

    function getVenCity() {
        return $this->venCity;
    }

    function getVenStreet() {
        return $this->venStreet;
    }

    function getVenZipcode() {
        return $this->venZipcode;
    }

    function getVenLstMod() {
        return $this->venLstMod;
    }

    function setVenID($venID) {
        $this->venID = $venID;
    }

    function setVenName($venName) {
        $this->venName = $venName;
    }

    function setVenPOC($venPOC) {
        $this->venPOC = $venPOC;
    }

    function setVenPhone($venPhone) {
        $this->venPhone = $venPhone;
    }

    function setVenEmail($venEmail) {
        $this->venEmail = $venEmail;
    }

    function setVenCountry($venCountry) {
        $this->venCountry = $venCountry;
    }

    function setVenState($venState) {
        $this->venState = $venState;
    }

    function setVenCity($venCity) {
        $this->venCity = $venCity;
    }

    function setVenStreet($venStreet) {
        $this->venStreet = $venStreet;
    }

    function setVenZipcode($venZipcode) {
        $this->venZipcode = $venZipcode;
    }

    function setVenLstMod($venLstMod) {
        $this->venLstMod = $venLstMod;
    }

}
?>

