<?php
class Admin {
    
    private $admID;
    
    function __construct($admID) {
        $this->admID = $admID;
    }
    
    function getAdmID() {
        return $this->admID;
    }

    function setAdmID($admID) {
        $this->admID = $admID;
    }

}
?>

