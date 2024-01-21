<?php
  require_once('userModel.php');
  $dhenat=new User();
  $all=$dhenat->getUsers();

  foreach($all as $user){
    echo $user;
  }
  $myUser = 'ramiz';
  $myPass = '123456';
  $myEmail = 'asd@gmail.com';

  if(isset($_POST['submit'])){
    $userName = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    if($userName == $myUser and $pass == $myPass and $email == $myEmail){
      setcookie('username', $userName, time()+3600);
      setcookie('password', $pass, time()+3600);
      setcookie('email', $email, time()+3600);
      header('Location:http://localhost/UBT--/index.php');

      setcookie('username',' ', time()+3500);
      setcookie('password', ' ', time()+3500);
      setcookie('email', ' ', time()+3500);
    } else{
      header('Location:http://localhost/UBT--/errorPage.php');
    }
  }
?>
