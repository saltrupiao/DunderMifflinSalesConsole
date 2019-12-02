<?php
class Line {
    
    private $lneInvNum, $lnePprCode, $lneUnits, $lnePrice;
    
    function __construct($lneInvNum, $lnePprCode, $lneUnits, $lnePrice) {
        $this->lneInvNum = $lneInvNum;
        $this->lnePprCode = $lnePprCode;
        $this->lneUnits = $lneUnits;
        $this->lnePrice = $lnePrice;
    }

    function getLneInvNum() {
        return $this->lneInvNum;
    }

    function getLnePprCode() {
        return $this->lnePprCode;
    }

    function getLneUnits() {
        return $this->lneUnits;
    }

    function getLnePrice() {
        return $this->lnePrice;
    }

    function setLneInvNum($lneInvNum) {
        $this->lneInvNum = $lneInvNum;
    }

    function setLnePprCode($lnePprCode) {
        $this->lnePprCode = $lnePprCode;
    }

    function setLneUnits($lneUnits) {
        $this->lneUnits = $lneUnits;
    }

    function setLnePrice($lnePrice) {
        $this->lnePrice = $lnePrice;
    }


}
?>

