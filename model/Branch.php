<?php
class Branch {
    
    private $bchID, $bchName, $bchPOC, $bchPhone;
    
    function __construct($bchID, $bchName, $bchPOC, $bchPhone) {
        $this->bchID = $bchID;
        $this->bchName = $bchName;
        $this->bchPOC = $bchPOC;
        $this->bchPhone = $bchPhone;
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

}
?>

