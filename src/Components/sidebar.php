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

  $username = ($_COOKIE['username'] ? $_COOKIE['username'] : 'Unknown User');
  $role = ($_COOKIE['role'] ? $_COOKIE['role'] : 'User');

  echo '
  <div class="main-sidebar">
    <div class="user-wrapper">
      <img src="../src/images/user.jpeg" alt="user" class="user-profile">
      <h4>' . $username . '</h4>
      <h5 style=' . 'color:' . ($role == 'Admin' ? '#8d8713' : '#11443a') . '>' . $role. '</h5>
    </div>
    <div class="bar-item-wrapper custom-scrollbar">
      <li>
        <a href="index.php" class="bar-item' . ($filename == "index.php" ? " active" : '') . '"><img src="../src/images/home.png" class="icon-wrapper" alt="Edit Icon">Main Page</a>
      </li>
      <li>
        <a href="yourPlan.php" class="bar-item' . ($filename == "yourPlan.php" ? " active" : '') . '"><img src="../src/images/edit-icon.png" class="icon-wrapper" alt="Edit Icon">Make Your Own  Plan</a>
      </li>
      <li>
        <a href="suggestedMixes.php" class="bar-item' . ($filename == "suggestedMixes.php" ? " active" : '') . '"><img src="../src/images/thumbs-up.png" class="icon-wrapper" alt="Thumb Up">Suggested Mixes</a>
      </li>
      <li>
        <a href="addMixes.php" class="bar-item' . ($filename == "addMixes.php" ? " active" : '') . '"><img src="../src/images/add-mix.png" class="icon-wrapper" alt="Thumb Up">Add Mixes</a>
      </li>
    </div>
</div>';

?>