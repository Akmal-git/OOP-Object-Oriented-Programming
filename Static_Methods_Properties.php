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
        $this->run();
        self::add(); //Sinf statik va statik bo'lmagan usullarga ega bo'lishi mumkin. 
        //Statik usulga self kalit so'z va ikki nuqta (::) yordamida bitta sinfdagi usuldan kirish mumkin
        return "Hello leaf";
    }

    public function run()
    {
        return "I`m runing";
    }

    public static function add()  // static -> o'zgrmas
    {
        return "create add text";
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