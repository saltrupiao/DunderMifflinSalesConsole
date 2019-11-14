<?php
class Agent {
    
    private $agtID;
    
    function __construct($agtID) {
        $this->agtID = $agtID;
    }
    
    function getAgtID() {
        return $this->agtID;
    }

    function setAgtID($agtID) {
        $this->agtID = $agtID;
    }

}
?>

