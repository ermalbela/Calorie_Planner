<?php
  require_once('../models/foodModel.php');
  $food = new Food();


  if(isset($_GET['id'])){ 
    $myID=$_GET['id'];
    $food->deleteLooseWeight($myID);
  }
?>