<?php
class Admin {
    
    private $admID, $admEmpID;
    
    function __construct($admID, $admEmpID) {
        $this->admID = $admID;
        $this->admEmpID = $admEmpID;
    }
    
    function getAdmID() {
        return $this->admID;
    }

    function getAdmEmpID() {
        return $this->admEmpID;
    }

    function setAdmID($admID) {
        $this->admID = $admID;
    }

    function setAdmEmpID($admEmpID) {
        $this->admEmpID = $admEmpID;
    }
}
?>

