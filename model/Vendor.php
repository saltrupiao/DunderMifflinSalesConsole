<?php
class Vendor {
    
    private $venID, $venName, $venPOC, $venPhone, $venEmail;
    
    function __construct($venID, $venName, $venPOC, $venPhone, $venEmail) {
        $this->venID = $venID;
        $this->venName = $venName;
        $this->venPOC = $venPOC;
        $this->venPhone = $venPhone;
        $this->venEmail = $venEmail;
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

}
?>

