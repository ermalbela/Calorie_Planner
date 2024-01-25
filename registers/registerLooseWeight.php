<?php
require_once('../models/foodModel.php');
  if (isset($_POST['addFood'])){
    $food= new Food();
    $food->setTitle($_POST['foodName']);
    $food->setServing($_POST['serving']);
    $food->setCalories($_POST['calories']);
    $food->setProtein($_POST['protein']);
    $food->setFat($_POST['fat']);
    $food->setCarbs($_POST['carbs']);
    $food->setImage($_POST['image']);
    $food->setAddedBy($_COOKIE['username']);

    if($_POST['foodName'] !== '' and $_POST['serving'] !== '' and $_POST['calories'] !== '' and $_POST['protein'] !== '' and $_POST['fat'] !== '' and $_POST['carbs'] !== '' and $_POST['image'] !== ''){
      $food->addLooseWeight();
      header('Location:http://localhost/UbtDocs/pages/yourPlan.php');
    }
  }

?>