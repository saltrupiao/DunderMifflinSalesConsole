<?php
class Agent {
    
    private $agtID, $agtEmpID;
    
    function __construct($agtID, $agtEmpID) {
        $this->agtID = $agtID;
        $this->agtEmpID = $agtEmpID;
    }
    
    function getAgtID() {
        return $this->agtID;
    }

    function getAgtEmpID() {
        return $this->agtEmpID;
    }

    function setAgtID($agtID) {
        $this->agtID = $agtID;
    }

    function setAgtEmpID($agtEmpID) {
        $this->agtEmpID = $agtEmpID;
    }

}
?>

