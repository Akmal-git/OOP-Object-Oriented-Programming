<!-- 
Statik usullarni to'g'ridan-to'g'ri chaqirish mumkin - avval sinfning namunasini yaratmasdan.
Statik usullar quyidagi kalit so'z bilan e'lon qilinadi static :
-->

<?php
class ClassName
{
    public static function staticMethod()
    {
        echo "Hello World!";
    }
}
?>

<?php


class Dog
{
    public $name;
    public static $weight;

    public function leaf()
    {
        echo "Hello leaf";
    }

    public static function add()
    {
        echo "create add text";
    }
};

$tree = new Dog();
$tree->name = "daraxtkar";
echo $tree->leaf();

echo "<br>";

$text = new Dog();
$text->name = "matin yaratish";
echo $text->add();

?>