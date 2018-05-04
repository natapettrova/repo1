<?php
echo "Задача 1 <br>";

$name = "Друг";

function guest($guest = "Гость"){
    echo $guest."<br>";
}

guest();
guest($name);

echo"<br><br> Задача 2 <br>";

$str = "Москва Антверпен Хельсинки";
$arr = explode(" ",$str);
$res = sort($arr,SORT_STRING);

print_r($arr);
print_r($res);

echo"<br><br> Задача 3 <br>";

$str = "strIng for tests";
$move = 1;
function convert($s,$move){
    
    switch ($move){
        case 1: 
            return strtoupper($s);
        case 2: 
            return strtolower($s);
        case 3: 
            return ucfirst($s);
        default:
            "неверное действие";
    }
    
}

echo convert($str,1)."<br>";
echo convert($str,2)."<br>";
echo convert($str,3)."<br>";

echo"<br><br> Задача 4 <br>";

$str = "<h1>Hello, world!</h1>";
echo strip_tags($str);

echo"<br><br> Задача 5 <br>";

$arr = [1,2,"привет", true];
 echo implode($arr);

echo"<br><br> Задача 6 <br>";

$date = "30-11-2017";

$arr = explode("-",$date);
$rev_arr = array_reverse ($arr);
echo implode(".",$rev_arr);

echo"<br><br> Задача 7 <br>";

$text = "/php/";
echo trim($text,"/");

echo"<br><br> Задача 8 <br>";

$text = "Просто строка.";
if (substr($text, -1)==".") {
    echo rtrim($text,"."); 
} else {
    echo $text ;
}
//(substr($text, -1)==".")?echo rtrim($text) : echo $text;