<?php
class Line {
    
    private $lneUnits, $lnePrice;
    
    function __construct($lneUnits, $lnePrice) {
        $this->lneUnits = $lneUnits;
        $this->lnePrice = $lnePrice;
    }
    
    function getLneUnits() {
        return $this->lneUnits;
    }

    function getLnePrice() {
        return $this->lnePrice;
    }

    function setLneUnits($lneUnits) {
        $this->lneUnits = $lneUnits;
    }

    function setLnePrice($lnePrice) {
        $this->lnePrice = $lnePrice;
    }

}
?>

