<?php
require_once('../models/mixModel.php');
  if (isset($_POST['addMix'])){
    $mix= new Mix();
    $mix->setTitle($_POST['mixName']);
    $mix->setIngredients($_POST['ingredients']);
    $mix->setDescription($_POST['description']);
    $mix->setStars($_POST['stars']);
    $mix->setDateAdded(date("y-m-d"));
    $mix->setImage($_POST['image']);
    $mix->addMix();
    
    // if($_POST['mixName'] !== '' and $_POST['ingredients'] !== '' and $_POST['description'] !== '' and $_POST['stars'] !== '' and $_POST['image'] !== ''){
    // }
    header('Location:http://localhost/UbtDocs/pages/addMixes.php');
  }

?>