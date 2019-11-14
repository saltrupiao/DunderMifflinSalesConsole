<?php
class Invoice {
    
    private $invNumber, $invDate, $invName;
    
    function __construct($invNumber, $invDate, $invName) {
        $this->invNumber = $invNumber;
        $this->invDate = $invDate;
        $this->invName = $invName;
    }
    
    function getInvNumber() {
        return $this->invNumber;
    }

    function getInvDate() {
        return $this->invDate;
    }

    function getInvName() {
        return $this->invName;
    }

    function setInvNumber($invNumber) {
        $this->invNumber = $invNumber;
    }

    function setInvDate($invDate) {
        $this->invDate = $invDate;
    }

    function setInvName($invName) {
        $this->invName = $invName;
    }

}
?>

