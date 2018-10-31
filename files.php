<?php

//$file = fopen("a.txt", "a+t");
//fwrite($file, "Example\nText\nNext");
//fclose($file);

//$file = fopen("a.txt", "r+t");
//
//while(!feof($file)){
// echo fread($file, 1). "<br>";
//}
//
//fseek($file, 0);
//echo fread($file, 1);
//
//fclose($file);
//
//echo "<hr><br>";
//
//file_put_contents("c.txt", "TEST test Test");
//echo file_get_contents("c.txt"). "<br>";
//echo file_exists("a.txt")."<br>";
//echo filesize("c.txt");
//
//rename("c.txt", "b.txt");
//unlink("b.txt");

//header("Location: http://google.com");
//exit;

//$message = "пустое сообщение";
//$to = "fackthelaw@yandex.ru";
//$subject = "Тема сообщение";
//
//mail($to, $subject, $message);


session_start();
$num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
$num++;
$_SESSION["num"] = $num;
echo "пользователь обновил страницу $num раз";

session_destroy();

?>