<?php
include_once 'Point2D.php';
include_once 'Point3D.php';

$point2D = new Point2D(2,3);
$point3D = new Point3D(1,2,3);
$point2D->setXY(3,4);
$point3D->setXYZ(4,5,6);
echo $point2D->toString()  .'<br>';
echo $point3D->toString();