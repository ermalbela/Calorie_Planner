<?php
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

  if (!isset($_COOKIE['username'])) {
    header('Location:http://localhost/UBTDocs/pages/errorPage.php');
    exit();
  }

echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie Planner</title>
    <link rel="shortcut icon" href="../src/images/logo-light-1.png" type="image/x-icon">
    <link rel="stylesheet" href="../src/css/'. $name .'">
    <link rel="stylesheet" href="../src/css/main.css">' .
      ($filename == "suggestedMixes.php" ? '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />' : '')
    . '
  </head>
  <body>
    <div class="main-nav">
      <div class="left-header">
        <div class="logo-wrapper">
          <a href="index.html">
            <img src="../src/images/logo-light-1.png" alt="logo" class="logo">
          </a>
        </div>
        <div class="toggle-wrapper">
          <img src="../src/images/left-arrow.png" alt="arrow" class="toggle">
        </div>
      </div>
      <div class="right-header">
      <li class="right-header-icon-wrapper">
        <img src="../src/images/maximize.png" alt="" class="right-header-icon maximize">
      </li>
      <li class="right-header-icon-wrapper">
        <img src="../src/images/light-to-dark.png" alt="moon" class="moon right-header-icon">
        <img src="../src/images/dark-to-light.png" alt="sun"  class="sun right-header-icon">
        <img src="../src/images/sun.png" alt="light" class="mix right-header-icon">
      </li>
      <li class="sidebar-none-links">
        <a href="index.php">Main Page</a>
      </li>
      <li class="sidebar-none-links">
        <a href="yourPlan.php">Your Plan</a>
      </li>
      <li class="sidebar-none-links">
        <a href="suggestedMixes.php">Suggested Mixes</a>
      </li>
      <li>
        <a href="login.php">
          <button class="login-btn">Log Out</button>
        </a>
      </li>
    </div>
  </div>';
?>