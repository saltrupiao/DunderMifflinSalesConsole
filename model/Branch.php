<?php
class Branch {

    private $bchID, $bchName, $bchPOC, $bchPhone, $bchCountry, $bchState, $bchCity, $bchStreet, $bchZipcode, $bchLstMod;

    function __construct($bchID, $bchName, $bchPOC, $bchPhone, $bchCountry, $bchState, $bchCity, $bchStreet, $bchZipcode, $bchLstMod) {
        $this->bchID = $bchID;
        $this->bchName = $bchName;
        $this->bchPOC = $bchPOC;
        $this->bchPhone = $bchPhone;
        $this->bchCountry = $bchCountry;
        $this->bchState = $bchState;
        $this->bchCity = $bchCity;
        $this->bchStreet = $bchStreet;
        $this->bchZipcode = $bchZipcode;
        $this->bchLstMod = $bchLstMod;

    }

    function getBchID() {
        return $this->bchID;
    }

    function getBchName() {
        return $this->bchName;
    }

    function getBchPOC() {
        return $this->bchPOC;
    }

    function getBchPhone() {
        return $this->bchPhone;
    }

    function getBchCountry() {
        return $this->bchPhone;
    }

    function getBchState() {
        return $this->bchState;
    }

    function getBchCity() {
        return $this->bchCity;
    }

    function getBchStreet() {
        return $this->bchStreet;
    }

    function getBchZipcode() {
        return $this->bchZipcode;
    }

    function getBchLstMod() {
        return $this->bchLstMod;
    }

    function setBchID($bchID) {
        $this->bchID = $bchID;
    }

    function setBchName($bchName) {
        $this->bchName = $bchName;
    }

    function setBchPOC($bchPOC) {
        $this->bchPOC = $bchPOC;
    }

    function setBchPhone($bchPhone) {
        $this->bchPhone = $bchPhone;
    }

    function setBchCountry($bchCountry) {
        $this->bchCountry = $bchCountry;
    }

    function setBchState($bchState) {
        $this->bchState = $bchState;
    }

    function setBchCity($bchCity) {
        $this->bchCity = $bchCity;
    }

    function setBchStreet($bchStreet) {
        $this->bchStreet = $bchStreet;
    }

    function setBchZipcode($bchZipcode) {
        $this->bchZipcode = $bchZipcode;
    }

    function setBchLstMod($bchLstMod) {
        $this->bchLstMod = $bchLstMod;
    }

}
?>

