<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new PDO("mysql:host=localhost;dbname=class","root","root");

    $result = $db->prepare("SELECT password from user_info where username=:username");
    $result->bindParam(":username",$username);
    $result->execute();
    $confirm = $result->fetch();
//var_dump($confirm);
//echo $confirm['password'];
//    foreach ($confirm as $key=>$value)
    if($confirm['password']==$password)
        //    echo "success";
          echo "<script>alert('success');parent.location.href='./remark.html'</script>";
    else
      //      echo "fails";
   echo "<script>alert('fails');history.back()</script>";

//echo $confirm;