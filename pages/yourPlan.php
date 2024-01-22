<?php
  include_once '../src/Components/header.php';
  include_once '../src/Components/sidebar.php';
?>

  <div class="main-content">
    <h3 class="main-content-header">Make Your Own Plan!</h3>
    <div class="main-content-title">
      <h2>Your Plan</h2>
    </div>
    <div class="main-content-body">
      <form class="add-form" method='POST' action='../registers/registerFoods.php'>
        <div class="form-title">
          <h2>Add Foods To Your Plan</h2>
        </div>
        <div class="form-body">
          <div class="input-container">
            <label>Food Name</label>
            <input type="text" class="add-form-input foodName" placeholder="Food name..." name='foodName'>
            <p class="invalid foodNameError">Please Enter a valid food name! ex. (Berries)</p>
          </div>
          <div class="input-container">
            <label>Serving</label>
            <input type="text" class="add-form-input serving" placeholder="Serving..." name='serving'>
            <p class="invalid servingError">Please Enter a valid Serving! ex. (per 100g)</p>
          </div>
          <div class="input-container">
            <label>Protein</label>
            <input type="text" class="add-form-input protein" placeholder="Protein..." name='protein'>
            <p class="invalid proteinError">Please Enter a valid Protein! ex. (3.2g)</p>
          </div>
          <div class="input-container">
            <label>Calories</label>
            <input type="number" class="add-form-input calories"placeholder="Calories.." name='calories'>
            <p class="invalid caloriesError">Please Enter a valid Calorie! ex. (300)</p>
          </div>
          <div class="input-container">
            <label>Fat</label>
            <input type="text" class="add-form-input fat" placeholder="Fat..." name='fat'>
            <p class="invalid fatError">Please Enter a valid Fat! ex. (0.1g)</p>
          </div>
          <div class="input-container">
            <label>Carbs</label>
            <input type="text" class="add-form-input carbs" placeholder="Carbs..." name='carbs'>
            <p class="invalid carbsError">Please Enter a valid Carb! ex. (20g)</p>
          </div>
          <div class="input-container">
            <label>Image</label>
            <input type="text" class="add-form-input image" placeholder="Image..." name='image'>
            <p class="invalid imageError">Please Enter a valid Image! ex. (Berries.jpg)</p>
          </div>
          <div class="button-container">
            <button class="add-btn" type='submit' name='addFood'>Add Food</button>
            <button class="clear-btn">Clear Fields</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="../src/js/yourPlan.js"></script>
  <script src="../src/js/main.js"></script>
</body>
</html>