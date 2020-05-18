<?php
include_once 'Point2D.php';

class Point3D extends Point2D
{
    protected $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ(){
        return $this->z;
    }

    public function setZ($z){
        $this->z =$z;
    }

    public function setXYZ ($x, $y, $z){
        $this->x =$x;
        $this->y =$y;
        $this->z =$z;
    }

    public  function getXYZ(){
        return $this->getXYZ();
    }

    public function toString(){
        return "Point3D co 3 toa do " . $this->getX() .', '. $this->getY() . ', '. $this->getZ();
    }
}