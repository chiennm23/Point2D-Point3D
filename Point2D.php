<?php


class Point2D
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y){
        $this->x= $x;
        $this->y= $y;
    }

    public function getXY(){
        return $this->getXY();
    }
    public function toString(){
        return "Point2D: " . " Toa do x,y: " . $this->x. ", " . $this->y;
    }
}
