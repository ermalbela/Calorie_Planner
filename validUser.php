<?php
  require_once('./models/userModel.php');
  $user=new User();
  $data=$user->getUsers();


  if(isset($_POST['submit'])){
    $userName = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    foreach($data as $user){
      if($userName == $user['username'] and $pass == $user['password'] and $email == $user['email']){
        setcookie('username', $userName, time()+3600, '/');
        setcookie('email', $email, time()+3600, '/');
        setcookie('role', $user['role'], time()+3600, '/');
        header('Location:http://localhost/UBTDocs/pages/index.php');
      }
    }
  }
?>
