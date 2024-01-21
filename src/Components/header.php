<?php
<<<<<<< HEAD
  $filename = basename($_SERVER['PHP_SELF']);    
  global $name;

  if($filename == "index.php"){
    $name = "index.css";
  } elseif($filename == "login.php"){
    $name = "login.css";
  } elseif($filename == "yourPlan.php"){
    $name = "your-plan.css";
  } else{
    $name = "suggestedMixes.css";
  }


echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie Planner</title>
    <link rel="shortcut icon" href="./src/images/logo-light-1.png" type="image/x-icon">
    <link rel="stylesheet" href="./src/css/'. $name .'">
    <link rel="stylesheet" href="./src/css/main.css">
  </head>
  <body>
    <div class="main-nav">
      <div class="left-header">
        <div class="logo-wrapper">
          <a href="index.html">
            <img src="./src/images/logo-light-1.png" alt="logo" class="logo">
          </a>
        </div>
        <div class="toggle-wrapper">
          <img src="./src/images/left-arrow.png" alt="arrow" class="toggle">
        </div>
      </div>';
=======
  $filename = $_SERVER['PHP_SELF'];
  global $name;

  if($filename == 'index.php'){
    $name = 'index.css';
  } elseif($filename == 'login.php'){
    $name = 'login.css';
  } elseif($filename == 'yourPlan.php'){
    $name = ' yourPlan.css';
  }

  // switch($filename){
  //   case 'index.php':
  //     $name: 'index.css';
  //   case 'login.php':
  //     $name: 'login.css';
  //   case 'suggestedMixes.php':
  //     $name: 'suggestedMixes.css';
  //   case 'yourPlan.php':
  //     $name: 'yourPlan.php';
  // }

echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calorie Planner</title>
  <link rel="shortcut icon" href="./src/images/logo-light-1.png" type="image/x-icon">
  <link rel="stylesheet" href="./src/css/'. $name .'">
  <link rel="stylesheet" href="./src/css/main.css">
</head>
<body>
  <div class="main-nav">
    <div class="left-header">
      <div class="logo-wrapper">
        <a href="index.html">
          <img src="./src/images/logo-light-1.png" alt="logo" class="logo">
        </a>
      </div>
      <div class="toggle-wrapper">
        <img src="./src/images/left-arrow.png" alt="arrow" class="toggle">
      </div>
    </div>'
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
?>