<?php
  include_once '../src/Components/header.php';
  include_once '../src/Components/sidebar.php';
?>
  
  <div class="main-content">
    <h3 class="main-content-header">Main Page</h3>
    <div class="main-content-title">
      <h2>Our Foods</h2>
    </div>
    <div class="main-content-body">
      <div class="foods">
        <h2 class="foods-title">Gain Weight</h2>
        <div class="good-foods-wrapper">
          <?php
            require_once('../models/foodModel.php');
            $food = new Food();
            $data = $food->getGainWeight();

            if(count($data) != 0){
              foreach($data as $food){
                echo '<div class="good-foods-content">
                        <div class="good-foods-img" style="background-image: url('. '../src/images/gain-weight/' . $food['image'] . ')">' .
                          '<h3 class="food-name">' . $food['Title'] .' <a class="action-btn-wrapper" href="../registers/deleteGainWeight.php?id=' . $food["ID"] . '">
                            <button class="action-btn">X</button>
                          </a></h3>' .
                          '<h4 class="food-text">Added By: ' . $food['addedBy'] .'</h4>' .
                          '<h3 class="food-text">' . $food['Serving'] .'</h3>' .
                          '<h4 class="food-text">Protein: ' . $food['Protein'] .'</h4>' .
                          '<h4 class="food-text">Calorie: ' . $food['Calorie'] .'</h4>' .
                          '<h4 class="food-text">Fat: ' . $food['Fat'] .'</h4>' .
                          '<h4 class="food-text">Carbs: ' . $food['Carbs'] .'</h4>' .
                        '</div>
                      </div>';
              }
            }
          ?>
        </div>
      </div>
      <div class="foods">
        <h2 class="foods-title">Loose Weight</h2>
        <div class="good-foods-wrapper">
          <?php
              require_once('../models/foodModel.php');
              $food = new Food();
              $data = $food->getLooseWeight();

              if(count($data) != 0){
                foreach($data as $food){
                  echo '<div class="good-foods-content">
                          <div class="good-foods-img" style="background-image: url('. '../src/images/loose-weight/' . $food['Image'] . ')">' .
                            '<h3 class="food-name">' . $food['Title'] .' <a class="action-btn-wrapper" href="../registers/deleteLooseWeight.php?id=' . $food["ID"] . '">
                              <button class="action-btn">X</button>
                            </a></h3>' .
                            '<h4 class="food-text">Added By: ' . $food['addedBy'] .'</h4>' .
                            '<h3 class="food-text">' . $food['Serving'] .'</h3>' .
                            '<h4 class="food-text">Protein: ' . $food['Protein'] .'</h4>' .
                            '<h4 class="food-text">Calorie: ' . $food['Calorie'] .'</h4>' .
                            '<h4 class="food-text">Fat: ' . $food['Fat'] .'</h4>' .
                            '<h4 class="food-text">Carbs: ' . $food['Carbs'] .'</h4>' .
                          '</div>
                        </div>';
                }
              }
            ?>
        </div>
      </div>
    </div>
  </div>

  <?php
    include_once '../src/Components/footer.php';
  ?>

  <script>
    document.querySelector('.toggle').addEventListener('click', () => {
      if(document.querySelector('.main-sidebar').classList.contains('closed-sidebar')){
        document.querySelectorAll('.good-foods-wrapper').forEach(item => {
          item.style.justifyContent = 'space-between';
        })
      } else{
        document.querySelectorAll('.good-foods-wrapper').forEach(item => {
          item.style.justifyContent = 'space-evenly';
        })
      }
    })
    
  </script>
  <script src="../src/js/main.js"></script>
</body>
</html>