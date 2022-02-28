<?php
class Car
{
    public $color;
    public $weight;
    private $year;
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getYear()
    {
        return $this->year;
    }
}

$myCar = new Car();
$myCar->setYear(2020);
$myCar->color = "Blue";

echo $myCar->getYear();

//echo $myCar->color;
