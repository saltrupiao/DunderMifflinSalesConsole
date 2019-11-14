<?php
class Client {
    
    private $cliID, $cliFname, $cliLname, $cliPhone, $cliEmail;
    
    function __construct($cliID, $cliFname, $cliLname, $cliPhone, $cliEmail) {
        $this->cliID = $cliID;
        $this->cliFname = $cliFname;
        $this->cliLname = $cliLname;
        $this->cliPhone = $cliPhone;
        $this->cliEmail = $cliEmail;
    }
    
    function getCliID() {
        return $this->cliID;
    }

    function getCliFname() {
        return $this->cliFname;
    }

    function getCliLname() {
        return $this->cliLname;
    }

    function getCliPhone() {
        return $this->cliPhone;
    }

    function getCliEmail() {
        return $this->cliEmail;
    }

    function setCliID($cliID) {
        $this->cliID = $cliID;
    }

    function setCliFname($cliFname) {
        $this->cliFname = $cliFname;
    }

    function setCliLname($cliLname) {
        $this->cliLname = $cliLname;
    }

    function setCliPhone($cliPhone) {
        $this->cliPhone = $cliPhone;
    }

    function setCliEmail($cliEmail) {
        $this->cliEmail = $cliEmail;
    }

}
?>

