<?php
    $mysqli = new mysqli("localhost", "root", "", "mybase");
    $mysqli-> query ("SET NAMES 'utf8'");
    $ok = $mysqli->query("INSERT INTO `users` (`login`, `password`,`reg_date` ) VALUES ('mite2','".md5("123")."', '".time()."')");
    echo $ok;

    for($i=1; $i<10; $i++) {
        
    $mysqli->query("INSERT INTO `users` (`login`, `password`,`reg_date` ) VALUES ('$i','".md5("$i")."', '".time()."')");
    
    }

    $mysqli -> query("UPDATE `users` SET `reg_date` = '777' WHERE `users`.`id` = 3");
        
    $mysqli->close();
?>