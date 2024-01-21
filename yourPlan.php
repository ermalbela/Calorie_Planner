<?php
  include_once './src/Components/header.php'
?>
    <div class="right-header">
      <li class="right-header-icon-wrapper">
        <img src="src/images/maximize.png" alt="" class="right-header-icon maximize">
      </li>
      <li class="right-header-icon-wrapper">
        <img src="./src/images/light-to-dark.png" alt="moon" class="moon right-header-icon">
        <img src="./src/images/dark-to-light.png" alt="sun"  class="sun right-header-icon">
        <img src="./src/images/sun.png" alt="light" class="mix right-header-icon">
      </li>
      <li class="sidebar-none-links">
        <a href="index.php">Main Page</a>
      </li>
      <li class="sidebar-none-links">
        <a href="#">Your Plan</a>
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
  </div>
  <?php
    include_once './src/Components/sidebar.php';
  ?>

  <div class="main-content">
    <h3 class="main-content-header">Make Your Own Plan!</h3>
    <div class="main-content-title">
      <h2>Your Plan</h2>
    </div>
    <div class="main-content-body">
      <div class="add-form">
        <div class="form-title">
          <h2>Add Foods To Your Plan</h2>
        </div>
        <div class="form-body">
          <div class="input-container">
            <label>Food Name</label>
            <input type="text" class="add-form-input foodName" placeholder="Food name..">
            <p class="invalid foodNameError">Please Enter a valid food name!</p>
          </div>
          <div class="input-container">
            <label>Calories</label>
            <input type="number" class="add-form-input calories"placeholder="Calories..">
            <p class="invalid caloriesError">Please Enter a valid Calorie!</p>
          </div>
          <div class="input-container">
            <label>Protein</label>
            <input type="text" class="add-form-input protein" placeholder="Protein...">
            <p class="invalid proteinError">Please Enter a valid Protein!</p>
          </div>
          <div class="input-container">
            <label>Image</label>
            <input type="text" class="add-form-input image" placeholder="Image...">
            <p class="invalid imageError">Please Enter a valid Image!</p>
          </div>
          <div class="button-container">
            <button class="add-btn">Add Food</button>
            <button class="clear-btn">Clear Fields</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./src/js/yourPlan.js"></script>
  <script src="./src/js/main.js"></script>
</body>
</php>