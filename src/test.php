<?php


class Product
{

    private string $name;

    private int $SKU = 86759;

    private float $price;

    public function getname()
    {
        return $this->name;
    }

    public function setname($name)
    {
        $this->name = $name;
    }


    public function getSKU()
    {
        return $this->SKU;
    }

    public function setSKU($SKU)
    {
        $this->SKU = $SKU;
    }


    public function getprice()
    {
        return $this->price;
    }

    public function setprice($price)
    {
        $this->price = $price;
    }

}

class Laptop extends Product
{

    private float $weight = 4.5;
    private string $matrix;
    private int $power = 40;

    public function getweight()
    {
        return $this->weight;
    }

    public function setweight($weight)
    {
        $this->weight = $weight;
    }


    public function getmatrix()
    {
        return $this->matrix;
    }

    public function setmatrix($matrix)
    {
        $this->matrix = $matrix;
    }


    public function getpower()
    {
        return $this->power;
    }

    public function setpower($power)
    {
        $this->power = $power;
    }

}

class Monitor extends Product
{

    private string $class;
    private float $responseTime = 0.3;
    private float $size = 24.3;

    public function getclass()
    {
        return $this->class;
    }

    public function setclass($class)
    {
        $this->class = $class;
    }


    public function getresponseTime()
    {
        return $this->responseTime;
    }

    public function setresponseTime($responseTime)
    {
        $this->responseTime = $responseTime;
    }


    public function getsize()
    {
        return $this->size;
    }

    public function setsize($size)
    {
        $this->size = $size;
    }

}

class Printer extends Product
{

    private string $techType = 'matrix';
    private string $colorType = 'EPSON 103 INK';
    private string $mobility;

    public function gettechType()
    {
        return $this->techType;
    }

    public function settechType($techType)
    {
        $this->techType = $techType;
    }


    public function getcolorType()
    {
        return $this->colorType;
    }

    public function setcolorType($colorType)
    {
        $this->colorType = $colorType;
    }


    public function getmobility()
    {
        return $this->mobility;
    }

    public function setmobility($mobility)
    {
        $this->mobility = $mobility;
    }

}


?>