<?php

 //   $time = time();
    //$time = date_default_timezone_set("PRC");
//var_dump(date("Y-m-d H:i:s",time()));
 //   echo $time;
    $time = time();


    $content = $_POST['content'];
    $username = '1234';

    $db = new PDO("mysql:host=localhost;dbname=class","root","root");

    $result = $db->prepare("INSERT into message (username,msg,time) value(?,?,?)");
    $result->execute([$username,$content,$time]);