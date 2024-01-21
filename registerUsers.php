<?php
require_once('userModel.php');
  if (isset($_POST['register'])){
    $user= new User();
    $user->setUsername($_POST['registerUsername']);
    $user->setPassword($_POST['registerPassword']);
    $user->setEmail($_POST['registerEmail']);
    $user->setRole("User");
    $user->insertToDB();

    header('Location:http://localhost/Ubt--/login.php');
  }

?>