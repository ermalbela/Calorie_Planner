<?php
  include_once '../src/Components/header.php';
  include_once '../src/Components/sidebar.php';
?>

  <div class="main-content">
    <h3 class="main-content-header">Add Mixes Page!</h3>
    <div class="main-content-title">
      <h2>Add Mix</h2>
    </div>
    <div class="main-content-body">
      <form class="add-form" method='POST' action='../registers/registerMixes.php'>
        <div class="form-title">
          <h2>Add Mixes To Your Plan</h2>
        </div>
        <div class="form-body">
          <div class="input-container">
            <label>Mix Name</label>
            <input type="text" class="add-form-input mixName" placeholder="Mix name..." name='mixName'>
            <p class="invalid mixNameError">Please Enter a valid mix name! ex. (Berries Mix)</p>
          </div>
          <div class="input-container">
            <label>Ingredients</label>
            <input type="text" class="add-form-input ingredients" placeholder="ingredients..." name='ingredients'>
            <p class="invalid ingredientsError">Please Enter valid ingredients! ex. (1 Banana, 1/2 cup of coffe, 1 apple)</p>
          </div>
          <div class="input-container">
            <label>Description</label>
            <input type="text" class="add-form-input description" placeholder="description..." name='description'>
            <p class="invalid descriptionError">Please Enter a valid Description!</p>
          </div>
          <div class="input-container">
            <label>Review Stars</label>
            <input type="number" class="add-form-input stars" placeholder="stars..." name='stars'>
            <p class="invalid starsError">Please Enter valid stars number! ex. (4)</p>
          </div>
          <div class="input-container">
            <label>Image</label>
            <input type="text" class="add-form-input image" placeholder="Image..." name='image'>
            <p class="invalid imageError">Please Enter a valid Image! ex. (Berries.jpg)</p>
          </div>
          <div class="button-container">
            <button class="add-btn" type='submit' name='addMix'>Add Mix</button>
            <button class="clear-btn">Clear Fields</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  
  <?php
    include_once '../src/Components/footer.php';
  ?>

  <script src="../src/js/addMixes.js"></script>
  <script src="../src/js/main.js"></script>
</body>
</html>