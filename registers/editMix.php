<?php
  require_once('../models/mixModel.php');
  $mix= new Mix();
  $myId = $_POST['id'];
  $data = $mix->getByID($myId);

  if (isset($_POST['edit-btn'])){
    if($myId == $mix->getId()){
      $mix->setTitle($_POST['mixName']);
      $mix->setIngredients($_POST['ingredients']);
      $mix->setDescription($_POST['description']);
      $mix->setStars($_POST['stars']);
      $mix->editMix();
      header('Location:http://localhost/UBTDocs/pages/suggestedMixes.php');
    }
  }
?>
