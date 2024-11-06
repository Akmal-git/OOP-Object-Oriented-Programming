<!-- 
Konstruktor ob'ektni yaratishda ob'ekt xususiyatlarini ishga tushirishga imkon beradi.

Agar siz funktsiya yaratsangiz __construct(), sinfdan ob'ekt yaratganingizda PHP 
avtomatik ravishda ushbu funktsiyani chaqiradi.

E'tibor bering, konstruksiya funktsiyasi ikkita pastki chiziq (__) bilan boshlanadi! 
-->

<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit("Apple red");
echo $apple->get_name();
?>

