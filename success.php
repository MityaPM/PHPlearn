<?php
 header("Content-Type: text/html; charset=utf-8");
 session_start();

 if($_GET["send"] == 1)
 echo "Вы успешно отправилии сообщение на email:".$_SESSION["to"];

?>