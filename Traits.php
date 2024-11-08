<!-- 
PHP faqat bitta merosni qo'llab-quvvatlaydi: bolalar sinfi faqat bitta ota-onadan meros bo'lishi mumkin.

Xo'sh, agar sinf bir nechta xatti-harakatlarni meros qilib olishi kerak bo'lsa-chi? 
OOP xususiyatlari bu muammoni hal qiladi.

Xususiyatlar bir nechta sinflarda ishlatilishi mumkin bo'lgan usullarni e'lon qilish uchun 
ishlatiladi. Xususiyatlar bir nechta sinflarda ishlatilishi mumkin bo'lgan usullar va 
mavhum usullarga ega bo'lishi mumkin va usullar har qanday kirish modifikatoriga ega 
bo'lishi mumkin (ommaviy, xususiy yoki himoyalangan).

Belgilar kalit so'z bilan e'lon qilinadi trait : 
-->

<?php
trait TraitName
{
    // some code...
}
?>


<!-- Sinfdagi xususiyatdan foydalanish uchun use quyidagi kalit so'zdan foydalaning: -->
<?php
class MyClass
{
    use TraitName;
}
?>
<?php
trait message3
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }
}

class Welcome1
{
    use message3;
}

$obj = new Welcome1();
$obj->msg1();
?>


<!-- 
Bu erda biz ikkita xususiyatni e'lon qilamiz: xabar1 va xabar2. 
Keyin ikkita sinf yaratamiz: Welcome va Welcome2. Birinchi sinf (Xush kelibsiz) 
xabar1 xususiyatidan, ikkinchi sinf (Xush kelibsiz2) xabar1 va xabar2 belgilaridan 
foydalanadi (bir nechta belgilar vergul bilan ajratiladi)
-->
<?php
trait message1
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }
}

trait message2
{
    public function msg2()
    {
        echo "OOP reduces code duplication!";
    }
}

class Welcome
{
    use message1;
}

class Welcome2
{
    use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>