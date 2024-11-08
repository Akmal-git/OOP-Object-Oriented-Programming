<!-- 
Interfeyslar sinf qanday usullarni amalga oshirishi kerakligini belgilash imkonini beradi.

Interfeyslar turli xil sinflardan bir xil tarzda foydalanishni osonlashtiradi. 
Bir yoki bir nechta sinflar bir xil interfeysdan foydalansa, u "polimorfizm" deb ataladi.

Interfeyslar quyidagi kalit so'z bilan e'lon qilinadi interface: 

Interfeys mavhum sinflarga o'xshaydi. Interfeyslar va mavhum sinflar o'rtasidagi farq:
1.Interfeyslar xossalarga ega bo'lolmaydi, mavhum sinflar esa
2.Barcha interfeys usullari ommaviy bo'lishi kerak, mavhum sinf usullari esa ochiq yoki himoyalangan
3.Interfeysdagi barcha usullar mavhum, shuning uchun ularni kodda amalga oshirib bo'lmaydi va mavhum kalit so'z kerak emas.
4.Sinflar bir vaqtning o'zida boshqa sinfdan meros qilib olingan holda interfeysni amalga oshirishi mumkin
-->



<?php
interface InterfaceName
{
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3(): string;
}
?>



<!-- Interfeysni amalga oshirish uchun sinf implementskalit so'zdan foydalanishi kerak. -->
<?php
interface Animall
{
    public function makeSound();
}

class Catt implements Animall
{
    public function makeSound()
    {
        echo "Meow";
    }
}

$animal = new Catt();
$animal->makeSound();
?>



<!-- 
Mushuk, it va sichqonchaning barchasi Hayvon interfeysini amalga oshiradigan sinflardir, 
ya'ni ularning barchasi ushbu makeSound()usul yordamida ovoz chiqarishga qodir. 
Shu sababli, biz barcha hayvonlarni aylanib o'tishimiz va ularning har biri qanday hayvon ekanligini bilmasak ham, ularga ovoz chiqarishni aytishimiz mumkin.

Interfeys sinflarga usulni qanday amalga oshirish kerakligini aytmaganligi sababli, 
har bir hayvon o'ziga xos tarzda ovoz chiqarishi mumkin
-->
<?php
// Interface definition
interface Animal
{
    public function makeSound();
}

// Class definitions
class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
}
?>