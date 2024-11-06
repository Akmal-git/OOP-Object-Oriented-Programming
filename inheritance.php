<!-- 
 Inheritance - Meros
 
OOPda meros = Sinf boshqa sinfdan kelib chiqqanda.
Bolalar sinfi barcha umumiy va himoyalangan xususiyatlar va usullarni ota-sinfdan 
meros qilib oladi. Bundan tashqari, u o'z xususiyatlari va usullariga ega bo'lishi mumkin.

Meroslangan sinf kalit so'z yordamida aniqlanadi extends 
Kalit final so'z sinf merosini oldini olish yoki usulni bekor 
qilishni oldini olish uchun ishlatilishi mumkin.

PHP - Meroslangan usullarni bekor qilish
Bolalar sinfidagi usullarni (xuddi shu nomdan foydalaning) qayta belgilash orqali meros qilib olingan usullarni bekor qilish mumkin.

Quyidagi misolga qarang. Bolalar sinfidagi (Strawberry) __construct() va intro() usullari ota-sinfdagi (Fruit) __construct() va intro() usullarini bekor qiladi
-->

<?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}


class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>