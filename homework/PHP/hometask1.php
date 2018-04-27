<?php
echo "Задание2 ";
$login = "Наталья";
echo "Вы вощли под именем $login";
unset($login);
echo "$login";

echo"<br><br>";
echo "Задание3 ";
$a = 8;
$b = 4;

echo $a*$a+$b*$b;

echo"<br><br>";
echo "Задание4 ";
$s = 50;
$t = 2;
$v = round($s/$t,0);
echo" Путь $s км   пройден за $t часа(в) со скоростью $v км/ч";

echo"<br><br>";
echo "Задание5 ";

const P = 3.14;
echo P;
//P = 3.15;

echo"<br><br>";
echo "Задание8 ";

$n = 5.43;
echo round($n,0);

echo"<br><br>";
echo "Задание9 ";
$num = 345;
$a = $num %10; 
$b = ($num - $a)%100/10;
$c = (int)($num/100);
 echo $a+$b+$c;


