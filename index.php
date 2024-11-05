<?php

class Car
{
    // property, attribute
    public $model;
    public $year;

    // method
    function drive()
    {
        return "Mashina haydash";
    }

    function getfuel()
    {
        return "zaparafka qilish";
    }

    function setModel($model)
    {
        $this->model = $model;
    }
};

$bmw = new Car;
$bmw->setModel("BMW M5");
echo $bmw->model;