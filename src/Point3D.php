<?php

namespace src;
//use src\Point2D;


class Point3D extends Point2D
{
    protected float $z;

    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }

    /**
     * @param float $z
     */
    public function setZ(float $z): void
    {
        $this->z = $z;
    }
    public function __call(string $method, array $arguments)
    {
        if ($method == "setXYZ") {
//            $this->x = parent::getX();
//            $this->y = parent::getY();
            $this->z = $arguments[0];
        } elseif ($method == "getXYZ") {
            $arr = [$this->x,$this->y,$this->z];
            return $arr;
        }
    }
//    public function setXYZ($x,float $y,float $z)
//    {
//        $this->x = $x;
//        $this->y = $y;
//        $this->z = $z;
//    }
//
//    public function getXYZ(): array
//    {
//        return $arr = [
//            $this->x,
//            $this->y,
//            $this->z
//        ];
//    }

    public function __toString(): string
    {
        return "Index of X: {$this->x} <br> Index of Y: {$this->y} <br> Index of Z: {$this->z} ";
    }


}