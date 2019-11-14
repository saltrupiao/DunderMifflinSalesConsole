<?php
class Address {
    
    private $adrID, $adrState, $adrCity, $adrStreet, $adrZipcode;
    
    function __construct($adrID, $adrState, $adrCity, $adrStreet, $adrZipcode) {
        $this->adrID = $adrID;
        $this->adrState = $adrState;
        $this->adrCity = $adrCity;
        $this->adrStreet = $adrStreet;
        $this->adrZipcode = $adrZipcode;
    }
    
    function getAdrID() {
        return $this->adrID;
    }

    function getAdrState() {
        return $this->adrState;
    }

    function getAdrCity() {
        return $this->adrCity;
    }

    function getAdrStreet() {
        return $this->adrStreet;
    }

    function getAdrZipcode() {
        return $this->adrZipcode;
    }

    function setAdrID($adrID) {
        $this->adrID = $adrID;
    }

    function setAdrState($adrState) {
        $this->adrState = $adrState;
    }

    function setAdrCity($adrCity) {
        $this->adrCity = $adrCity;
    }

    function setAdrStreet($adrStreet) {
        $this->adrStreet = $adrStreet;
    }

    function setAdrZipcode($adrZipcode) {
        $this->adrZipcode = $adrZipcode;
    }

}
?>
