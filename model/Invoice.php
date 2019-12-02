<?php
class Invoice {
    
    private $invNum, $invAgtID, $invCliID, $invTitle, $invTotal, $invDate, $invStatus;

    function __construct($invNum, $invAgtID, $invCliID, $invTitle, $invTotal, $invDate, $invStatus) {
        $this->invNum = $invNum;
        $this->invAgtID = $invAgtID;
        $this->invCliID = $invCliID;
        $this->invTitle = $invTitle;
        $this->invTotal = $invTotal;
        $this->invDate = $invDate;
        $this->invStatus = $invStatus;
    }

    function getInvNum() {
        return $this->invNum;
    }

    function getInvAgtID() {
        return $this->invAgtID;
    }

    function getInvCliID() {
        return $this->invCliID;
    }

    function getInvTitle() {
        return $this->invTitle;
    }

    function getInvTotal() {
        return $this->invTotal;
    }

    function getInvDate() {
        return $this->invDate;
    }

    function getInvStatus() {
        return $this->invStatus;
    }

    function setInvNum($invNum) {
        $this->invNum = $invNum;
    }

    function setInvAgtID($invAgtID) {
        $this->invAgtID = $invAgtID;
    }

    function setInvCliID($invCliID) {
        $this->invCliID = $invCliID;
    }

    function setInvTitle($invTitle) {
        $this->invTitle = $invTitle;
    }

    function setInvTotal($invTotal) {
        $this->invTotal = $invTotal;
    }

    function setInvDate($invDate) {
        $this->invDate = $invDate;
    }

    function setInvStatus($invStatus) {
        $this->invStatus = $invStatus;
    }


}
?>

