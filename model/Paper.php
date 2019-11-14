<?php
// AKA PRODUCT
class Paper {
    
    private $pprCode, $pprType, $pprSize, $pprColor, $pprWeight, $pprImg, $pprQOH, $pprPrice;
    
    function __construct($pprCode, $pprType, $pprSize, $pprColor, $pprWeight, $pprImg, $pprQOH, $pprPrice) {
        $this->pprCode = $pprCode;
        $this->pprType = $pprType;
        $this->pprSize = $pprSize;
        $this->pprColor = $pprColor;
        $this->pprWeight = $pprWeight;
        $this->pprImg = $pprImg;
        $this->pprQOH = $pprQOH;
        $this->pprPrice = $pprPrice;
    }
    
    function getPprCode() {
        return $this->pprCode;
    }

    function getPprType() {
        return $this->pprType;
    }

    function getPprSize() {
        return $this->pprSize;
    }

    function getPprColor() {
        return $this->pprColor;
    }

    function getPprWeight() {
        return $this->pprWeight;
    }

    function getPprImg() {
        return $this->pprImg;
    }

    function getPprQOH() {
        return $this->pprQOH;
    }

    function getPprPrice() {
        return $this->pprPrice;
    }

    function setPprCode($pprCode) {
        $this->pprCode = $pprCode;
    }

    function setPprType($pprType) {
        $this->pprType = $pprType;
    }

    function setPprSize($pprSize) {
        $this->pprSize = $pprSize;
    }

    function setPprColor($pprColor) {
        $this->pprColor = $pprColor;
    }

    function setPprWeight($pprWeight) {
        $this->pprWeight = $pprWeight;
    }

    function setPprImg($pprImg) {
        $this->pprImg = $pprImg;
    }

    function setPprQOH($pprQOH) {
        $this->pprQOH = $pprQOH;
    }

    function setPprPrice($pprPrice) {
        $this->pprPrice = $pprPrice;
    }

}
?>
