<?php
// AKA PRODUCT
class Paper {

    private $pprCode, $venID, $pprType, $pprSize, $pprColor, $pprWeight, $pprImg, $pprQOH, $pprPrice, $pprLstMod;

    public function __construct($pprCode, $venID, $pprType, $pprSize, $pprColor, $pprWeight, $pprImg, $pprQOH, $pprPrice, $pprLstMod)
    {
        $this->pprCode = $pprCode;
        $this->venID = $venID;
        $this->pprType = $pprType;
        $this->pprSize = $pprSize;
        $this->pprColor = $pprColor;
        $this->pprWeight = $pprWeight;
        $this->pprImg = $pprImg;
        $this->pprQOH = $pprQOH;
        $this->pprPrice = $pprPrice;
        $this->pprLstMod = $pprLstMod;
    }

    public function getPprCode()
    {
        return $this->pprCode;
    }


    public function setPprCode($pprCode)
    {
        $this->pprCode = $pprCode;
    }


    public function getVenID()
    {
        return $this->venID;
    }


    public function setVenID($venID)
    {
        $this->venID = $venID;
    }


    public function getPprType()
    {
        return $this->pprType;
    }


    public function setPprType($pprType)
    {
        $this->pprType = $pprType;
    }


    public function getPprSize()
    {
        return $this->pprSize;
    }


    public function setPprSize($pprSize)
    {
        $this->pprSize = $pprSize;
    }


    public function getPprColor()
    {
        return $this->pprColor;
    }


    public function setPprColor($pprColor)
    {
        $this->pprColor = $pprColor;
    }


    public function getPprWeight()
    {
        return $this->pprWeight;
    }


    public function setPprWeight($pprWeight)
    {
        $this->pprWeight = $pprWeight;
    }


    public function getPprImg()
    {
        return $this->pprImg;
    }


    public function setPprImg($pprImg)
    {
        $this->pprImg = $pprImg;
    }


    public function getPprQOH()
    {
        return $this->pprQOH;
    }


    public function setPprQOH($pprQOH)
    {
        $this->pprQOH = $pprQOH;
    }


    public function getPprPrice()
    {
        return $this->pprPrice;
    }


    public function setPprPrice($pprPrice)
    {
        $this->pprPrice = $pprPrice;
    }


    public function getPprLstMod()
    {
        return $this->pprLstMod;
    }

    public function setPprLstMod($pprLstMod)
    {
        $this->pprLstMod = $pprLstMod;
    }

}
?>
