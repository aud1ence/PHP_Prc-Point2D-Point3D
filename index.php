<?php
use src\Point2D;
use src\Point3D;

include_once "vendor/autoload.php";
$point2d = new Point2D(12, 32);
echo $point2d->toString();

//$point2d->setXY(21, 23);
//var_dump($point2d->getXY());

$point3d = new Point3D(1,2,3);
echo $point3d->__toString();
//$point3d->setXY(55,55);
//var_dump($point3d->getXYZ());
//$point3d->setX(10);
////echo $point3d->__toString();
////var_dump();
$point3d->setXY(44,55);
$point3d->setXYZ(88);
echo "<br>";
echo $point3d->__toString();
echo "<br>";
var_dump($point3d->getXYZ());

