<?php
echo "Задача 1 <br>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++){
        echo" $i * $j = ".$i*$j;
    }
    echo"<br>";
}

echo"<br><br> Задача 2 <br>";

$str = "*";
for($i = 1; $i<=15; $i++) {
    echo "$str <br>";
    $str = $str."*";
}

echo"<br><br> Задача 3 <br>";

$arr = ["Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"];
$key = 0;
foreach ($arr as $key => $val){
    
    if (date("N")-1 == $key){
        echo "<b>$val </b>"; 
    } else {
        echo "$val"; 
    }
   $key++;
} 


echo"<br><br> Задача 4 <br>";
$arr = [
'1'=> [
'price' => 10,
'count' => 2
],
'2'=> [
'price' => 5,
'count' => 5
],
'3'=> [
'price' => 8,
'count' => 5
],
'4'=> [
'price' => 12,
'count' => 4
],
'5'=> [
'price' => 8,
'count' => 4
],
];

$new_array = array();
$sortable_array = array();

    if (count($arr) > 0) {
        foreach ($arr as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == 'price') {
                        $sortable_array[$k] = $v2;
                       
                    }
                }
            } else {
                $sortable_array[$k] = $v;
                 
            }
        }
    asort($sortable_array);
           
    foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
           
        }
    }
print_r($new_array);

echo"<br><br> Задача 5 <br>";
//Каждому вложенному массиву добавить count - количество элементов в массиве (элементы с //одинаковым name)
//Удалить дублирующиеся элементы
$fruits = [
[
"name"=> "apple",
"color"=> "red",
],
[
"name"=> "orange",
"color"=> "orange",
],
[
"name"=> "lemon",
"color"=> "yellow",
],
[
"name"=> "apple",
"color"=> "green",
],
[
"name"=> "plum",
"color"=> "violet",
],
[
"name"=> "plum",
"color"=> "violet",
],
[
"name"=> "apple",
"color"=> "red",
],
[
"name"=> "lemon",
"color"=> "yellow",
],
[
"name"=> "banana",
"color"=> "yellow",
]
];


for ($j=0;$j<count($fruits);$j++){
    
    $q = 0;
    //echo $fruits[$j]["name"]."<br><br>";
    for ($i=0; $i<count($fruits);$i++){
        $val = $fruits[$j];
        $val2 = $fruits[$i];
        if ($val["name"] == $val2["name"]){
            //echo $val["name"]."/".$val2["name"];
            $q++;
        };
    }
    $fruits[$j]["count"] = $q;
    print_r( $fruits[$j]);
}



echo"<br><br> Задача 6 <br>";

$res = 0;

for ($i=0;$i<1000000;$i++){
    $num = sprintf("%06d",$i);
    if ($num[0]+$num[1]+$num[2]== $num[3]+$num[4]+$num[5]){
        $res++;
    }
};
echo "Счастливых билетов в рулоне $res";

echo"<br><br> Задача 7 <br>";

$arr = ["a","b","c","d","e","f","g","h","i","j"];
for ($i=0; $i<count($arr);$i++){
    echo $arr[$i];
    $arr[$i] = mb_convert_case($arr[$i],MB_CASE_UPPER);
}
print_r($arr);

 echo"<br><br> Задача 8 <br>";
$arr2 = [1,2,3,4,5,6,7,8,9,10];

$m = 1;
$s = 0;   
for ($i=0; $i<count($arr2);$i++){
    $m *=$arr2[$i];
    $s +=$arr2[$i];
}
echo " произведение чисел  $m  и сумма чисел $s<br>";

for ($i=0; $i<5;$i++){
  
    echo "{$arr2[$i]} , {$arr2[9-$i]} <br>" ;
    
}

echo"<br><br> Задача 9 <br>";

$arr3 = [];
for ($i=0; $i<count($arr);$i++){
    
    $arr3[$arr[$i]] = $arr2[$i];
    
}
print_r($arr3);

echo"<br><br> Задача 10 <br>";

$mas = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];
echo $mas;


echo"<br><br> Задача 11 <br>";

$arr = ['<p>Some</p>', '<p>info</p>'];

foreach ($arr as $val){
  
   $val = strip_tags($val);
    
}


