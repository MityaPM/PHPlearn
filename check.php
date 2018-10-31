<?php
$title = "Cтраничка запроса";
require "header.php";

//print_r($_POST);

//echo "<br>" .  $_GET ["name"];

if ($_POST["name"] == ""){
    echo "Input your name . <a href='/site/page.php'>Исправить</a>";
} else{
    header("Location: index.php");
}

?>