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
                          '<h3 class="food-name">' . $food['Title'] .'</h3>' .
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

          <!-- <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url('../src/images/gain-weight/sweet-potatoes.jpg');">
                <h3 class="food-name">Sweet Potatoes</h3>
                <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 2.2g</h4>
              <h4 class="food-text">Calorie: 87</h4>
              <h4 class="food-text">Fat: 0.1g </h4>
              <h4 class="food-text">Carbs: 20g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/macademia-nuts.jpg)">
              <h3 class="food-name">Macademia Nuts</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 8g</h4>
              <h4 class="food-text">Calorie: 718</h4>
              <h4 class="food-text">Fat: 76.4g </h4>
              <h4 class="food-text">Carbs: 14g </h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/mackarel.jpg);"> 
              <h3 class="food-name">Mackarel</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 19g</h4>
              <h4 class="food-text">Calorie: 305</h4>
              <h4 class="food-text">Fat: 14g</h4>
              <h4 class="food-text">Carbs: 0g</h4>
            </div>
            </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/whole-wheat-pasta.jpg);">
              <h3 class="food-name">Whole Wheat Pasta</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 10g</h4>
              <h4 class="food-text">Calorie: 300</h4>
              <h4 class="food-text">Fat: 2.68g</h4>
              <h4 class="food-text">Carbs: 69.64g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/brown-rice.jpg);">
              <h3 class="food-name">Brown Rice</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 10g</h4>
              <h4 class="food-text">Calorie: 300</h4>
              <h4 class="food-text">Fat: 0.96g</h4>
              <h4 class="food-text">Carbs: 23g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/chickpeas.jpg);">
              <h3 class="food-name">Chickpeas</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 20g</h4>
              <h4 class="food-text">Calorie: 300</h4>
              <h4 class="food-text">Fat: 2.6g</h4>
              <h4 class="food-text">Carbs: 61g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/oats.jpg);">
              <h3 class="food-name">Oats</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 13.15g</h4>
              <h4 class="food-text">Calorie: 389</h4>
              <h4 class="food-text">Fat: 6.52g</h4>
              <h4 class="food-text">Carbs: 67.70g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/peanut-butter.jpg);">
              <h3 class="food-name">Peanut Butter</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 25g</h4>
              <h4 class="food-text">Calorie: 588</h4>
              <h4 class="food-text">Fat: 50g</h4>
              <h4 class="food-text">Carbs: 20g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/steak.jpg);">
              <h3 class="food-name">Steak</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 25g</h4>
              <h4 class="food-text">Calorie: 271</h4>
              <h4 class="food-text">Fat: 19g</h4>
              <h4 class="food-text">Carbs: 0g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/gain-weight/whole-wheat-bread.jpg);">
              <h3 class="food-name">Whole Wheat Bread</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 13g</h4>
              <h4 class="food-text">Calorie: 247</h4>
              <h4 class="food-text">Fat: 3.5g</h4>
              <h4 class="food-text">Carbs: 41g</h4>
            </div>
          </div> -->
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
                            '<h3 class="food-name">' . $food['Title'] .'</h3>' .
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
          <!-- <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/berries.jpg);">
              <h3 class="food-name">Berries</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 0.7g</h4>
              <h4 class="food-text">Calorie: 57</h4>
              <h4 class="food-text">Fat: 0.3g</h4>
              <h4 class="food-text">Carbs: 14g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/chilli-pepper.jpg);">
              <h3 class="food-name">Chilli Pepper</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 1.9g</h4>
              <h4 class="food-text">Calorie: 40</h4>
              <h4 class="food-text">Fat: 0.32g</h4>
              <h4 class="food-text">Carbs: 9g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/low-fat-milk.jpg);">
              <h3 class="food-name">Low Fat Milk (per 100ml)</h3>
              <h4 class="food-text">Protein: 3.37g</h4>
              <h4 class="food-text">Calorie: 42</h4>
              <h4 class="food-text">Fat: 0.97g</h4>
              <h4 class="food-text">Carbs: 4.99g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/broccoli.jpg);">
              <h3 class="food-name">Broccoli</h3>   
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 2.53g</h4>
              <h4 class="food-text">Calorie: 35</h4>
              <h4 class="food-text">Fat: 0.39g</h4>
              <h4 class="food-text">Carbs: 7g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/green-peas.jpg);">
              <h3 class="food-name">Green Peas</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 5.15g</h4>
              <h4 class="food-text">Calorie: 78</h4>
              <h4 class="food-text">Fat: 0.27g</h4>
              <h4 class="food-text">Carbs: 14.26g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img"  style="background-image: url(../src/images/loose-weight/almonds.jpg);">
              <h3 class="food-name">Almonds</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 21.94g</h4>
              <h4 class="food-text">Calorie: 581</h4>
              <h4 class="food-text">Fat: 50.62g</h4>
              <h4 class="food-text">Carbs: 19.94g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/water.jpg);">
              <h3 class="food-name">Lemon Water (per 100ml)</h3>
              <h4 class="food-text">Protein: 0.04g</h4>
              <h4 class="food-text">Calorie: 3</h4>
              <h4 class="food-text">Fat: 0g</h4>
              <h4 class="food-text">Carbs: 1.06g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/shrimps.png);">
              <h3 class="food-name">Shrimps</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 20.31g</h4>
              <h4 class="food-text">Calorie: 106</h4>
              <h4 class="food-text">Fat: 1.73g</h4>
              <h4 class="food-text">Carbs: 0.91g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/avocado.jpg);">
              <h3 class="food-name">Avocado</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 1.78g</h4>
              <h4 class="food-text">Calorie: 160</h4>
              <h4 class="food-text">Fat: 22.7g</h4>
              <h4 class="food-text">Carbs: 0.08g</h4>
            </div>
          </div>
          <div class="good-foods-content">
            <div class="good-foods-img" style="background-image: url(../src/images/loose-weight/soup.png);">
              <h3 class="food-name">Soup</h3>
              <h3 class="food-text">(per 100g)</h3>
              <h4 class="food-text">Protein: 10g</h4>
              <h4 class="food-text">Calorie: 32</h4>
              <h4 class="food-text">Fat: 3.46g</h4>
              <h4 class="food-text">Carbs: 9.35g</h4>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>

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