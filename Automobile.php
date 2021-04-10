<?php
class Automobile
{
    # Properties
    public $LicencePlate;
    public $Brand;
    public $Model;
    public $ModelYear;
    public $Color;
    # Methods
    function __construct($lp, $brand, $model, $modelyear, $color)
    {
        $this->LicencePlate = $lp;
        $this->Brand = $brand;
        $this->Model = $model;
        $this->ModelYear = $modelyear;
        $this->Color = $color;
    }
    function __toString()
    {
        return $this->LicensePlate . " Car: " . $this->Brand . " " . $this->Model . " Year: " . $this->ModelYear . " Color: " . $this->Color;
    }
}
