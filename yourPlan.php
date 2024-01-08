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
        <a href="index.html">Main Page</a>
      </li>
      <li class="sidebar-none-links">
        <a href="#">Your Plan</a>
      </li>
      <li class="sidebar-none-links">
        <a href="suggestedMixes.html">Suggested Mixes</a>
      </li>
      <li>
        <a href="login.html">
          <button class="login-btn">Log Out</button>
        </a>
      </li>
    </div>
  </div>
  <div class="main-sidebar">
    <div class="user-wrapper">
      <img src="./src/images/user.jpeg" alt="user" class="user-profile">
      <h4>Unknown User</h4>
    </div>
    <div class="bar-item-wrapper custom-scrollbar">
      <li><a href="index.html" class="bar-item"><img src="./src/images/home.png" class="icon-wrapper" alt="Edit Icon">Main Page</a></li>
      <li><a href="#" class="bar-item active"><img src="./src/images/edit-icon.png" class="icon-wrapper" alt="Edit Icon">Make Your Own  Plan</a></li>
      <li><a href="suggestedMixes.html" class="bar-item"><img src="./src/images/thumbs-up.png" class="icon-wrapper" alt="Thumb Up">Suggested Mixes</a></li>
    </div>
  </div>

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
</html>