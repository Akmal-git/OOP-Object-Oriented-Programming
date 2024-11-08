<!-- 
PHP - Kirish modifikatorlari
Xususiyatlar va usullarda kirish o'zgartirish moslamalari bo'lishi mumkin, 
ular qayerdan foydalanish mumkinligini nazorat qiladi.

Uchta kirish modifikatori mavjud:

public- mulk yoki usulga hamma joydan kirish mumkin. Bu standart
protected- xususiyat yoki usulga sinf ichida va shu sinfdan olingan 
sinflar orqali kirish mumkin
private- xususiyat yoki usulga FAQAT sinf ichida kirish mumkin 
-->

<?php
class Fruit
{
  public $name;
  protected $color;
  private $weight;

  public function __construct($name, $color, $weight)
  {
    $this->$name = $name;
    $this->$color = $color;
    $this->$weight = $weight;
  }
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>