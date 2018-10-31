<?php
//$x = 5;
//if (isset($x)){
//    echo "Переменная существует<br>";}
//else{ echo "Переменная не существует<br>";}

//unset($x);
    
//if (isset($x)){
//    echo "Переменная существует";}
//else{ echo "Переменная не существует";
  //  echo "<br>";}

//$x = "5";
//echo "Is Numeric - " . is_numeric($x) . "<br>";
//echo "Is integer - " . is_integer($x) . "<br>";
//echo "Is double - " . is_double($x) . "<br>";
//echo mt_rand(). "<br>"; 
//echo min(-1, 20, -290, 6, 78, 98) . "<br>";
//echo max (-1, 20, -290, 6, 78, 98);

$string = "Example";

echo strlen($string) . "<br>";
echo strpos($string, "le") . "<br>";

if(strpos($string, "E") === false){
    echo "E haven't fond";
} else echo "Lol" . "<br>";

echo substr($string, 3, 1);
echo str_replace("mple", "abc", $string) . "<br>";

$mess = "<b>HAHA BOLD</b>";

echo htmlspecialchars($mess);
echo "<br>";

$array = array(12, 17, 5, 23, 56);

echo count($array) . "<br>";
sort($array);
print_r($array). "<br>";
rsort($array);
print_r($array). "<br>";

//asort(); - ассоциативные массивы;
//arsort(); - ассоциативные массивы; запоминают ключи
//ksort(); - сортировка по ключам;
//krsort(); - сортировка по ключам обратная;
echo "<br>";
shuffle($array);
print_r ($array);

in_array(10, $array);
echo "<br>";

$arr_1 = array (1, 2, 3, 4);
$arr_2 = array (5, 6, 7, 8);


$arr_3 = array_merge($arr_1, $arr_2);
print_r($arr_3);

echo "<br>";
$arr_5 = array (1, 2, 3, 4, 5, 6, 7, 8);
$arr_sliced = array_slice($arr_5, 3, 4);
print_r($arr_sliced);

echo "<br>";

echo date("Y-m-d");

?>