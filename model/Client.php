<?php
class Client {
    
    private $cliID, $cliAgtID, $cliFname, $cliLname, $cliPhone, $cliEmail, $cliCountry, $cliState, $cliCity, $cliStreet, $cliZipcode;
    
    function __construct($cliID, $cliAgtID, $cliFname, $cliLname, $cliPhone, $cliEmail, $cliCountry, $cliState, $cliCity, $cliStreet, $cliZipcode) {
        $this->cliID = $cliID;
        $this->cliAgtID = $cliAgtID;
        $this->cliFname = $cliFname;
        $this->cliLname = $cliLname;
        $this->cliPhone = $cliPhone;
        $this->cliEmail = $cliEmail;
        $this->cliCountry = $cliCountry;
        $this->cliState = $cliState;
        $this->cliCity = $cliCity;
        $this->cliStreet = $cliStreet;
        $this->cliZipcode = $cliZipcode;
    }
    
    function getCliID() {
        return $this->cliID;
    }

    function getCliAgtID() {
        return $this->cliAgtID;
    }

    function getCliFname() {
        return $this->cliFname;
    }

    function getCliLname() {
        return $this->cliLname;
    }

    function getCliPhone() {
        return $this->cliPhone;
    }

    function getCliEmail() {
        return $this->cliEmail;
    }

    function getCliCountry() {
        return $this->cliCountry;
    }

    function getCliState() {
        return $this->cliState;
    }

    function getCliCity() {
        return $this->cliCity;
    }

    function getCliStreet() {
        return $this->cliStreet;
    }

    function getCliZipcode() {
        return $this->cliZipcode;
    }

    function setCliID($cliID) {
        $this->cliID = $cliID;
    }

    function setAgtID($cliAgtID) {
        $this->cliAgtID = $cliAgtID;
    }

    function setCliFname($cliFname) {
        $this->cliFname = $cliFname;
    }

    function setCliLname($cliLname) {
        $this->cliLname = $cliLname;
    }

    function setCliPhone($cliPhone) {
        $this->cliPhone = $cliPhone;
    }

    function setCliEmail($cliEmail) {
        $this->cliEmail = $cliEmail;
    }

    function setCliCountry($cliCountry) {
        $this->cliCountry = $cliCountry;
    }

    function setCliState($cliState) {
        $this->cliState = $cliState;
    }

    function setCliCity($cliCity) {
        $this->cliCity = $cliCity;
    }

    function setCliStreet($cliStreet) {
        $this->cliStreet = $cliStreet;
    }

    function setCliZip($cliZipcode) {
        $this->cliZipcode = $cliZipcode;
    }

}
?>

