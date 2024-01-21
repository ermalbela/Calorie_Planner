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
<<<<<<< HEAD
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
=======
        <a href="index.html">Main Page</a>
      </li>
      <li class="sidebar-none-links">
        <a href="yourPlan.html">Your Plan</a>
      </li>
      <li class="sidebar-none-links">
        <a href="suggestedMixes.html">Suggested Mixes</a>
      </li>
      <li>
        <a href="login.html">
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
          <button class="login-btn">Log Out</button>
        </a>
      </li>
    </div>
  </div>
<<<<<<< HEAD
  <?php
    include_once './src/Components/sidebar.php';
  ?>
=======
  <div class="main-sidebar">
    <div class="user-wrapper">
      <img src="./src/images/user.jpeg" alt="user" class="user-profile">
      <h4>Unknown User</h4>
    </div>
    <div class="bar-item-wrapper custom-scrollbar">
      <li>
        <a href="index.html" class="bar-item"><img src="./src/images/home.png" class="icon-wrapper" alt="Edit Icon">Main Page</a>
      </li>
      <li>
        <a href="yourPlan.html" class="bar-item"><img src="./src/images/edit-icon.png" class="icon-wrapper" alt="Edit Icon">Make Your Own  Plan</a>
      </li>
      <li>
        <a href="#" class="bar-item active"><img src="./src/images/thumbs-up.png" class="icon-wrapper" alt="Thumb Up">Suggested Mixes</a>
      </li>
    </div>
  </div>
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4

  <div class="main-content">
    <h3 class="main-content-header">Suggested Mixes</h3>
    <div class="main-content-title">
      <h2>Best Rated Mixes</h2>
    </div>
    <div class="main-content-body">
      <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="modal-body">
          </div>
        </div>
      </div>
      <div class="best-mixes-wrapper">
        <h2 class="best-mixes-title">Our Mixes</h2>
        <div class="best-mixes">
          <div class="best-mixes-parent">
            <div class="best-mixes-content">
              <div class="mixes-image-container">
                <img src="./src/images/mixes/blueberry.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Berry Protein Smoothie</h3>
                <button class="ingredients" onclick="openModal('Berry Protein Smoothie', '1/2 cup -- Almond Milk', '1/2 cup -- Blueberries', '1/2 cup -- Ice', '1/2 -- Banana', '2 tablespoon -- Superfood Essentials Vanilla Plant-Based Protein', '1 tablespoon -- Pea Protein Powder')">Ingredients</button>
              </div>
              <div class="review-content">
                <p>When you're looking for a healthy breakfast on the go, "Berry Protein Smoothie" protein-packed berry smoothie makes for a convenient, satisfying option.</p>                  
              </div>
              <div class="bot-content">
                <div class="date-added">
                  <span>Jan 21, 2023</span>
                </div>
                <ul class="review-stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="best-mixes-parent">
            <div class="best-mixes-content">
              <div class="mixes-image-container">
                <img src="./src/images/mixes/spinach.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Spinach Protein Smoothie</h3>
                <button class="ingredients" onclick="openModal('Spinach Protein Smoothie', '2 cup -- Spinach', '1/2 -- Banana', '1 1/2 cup -- Almond Milk', '1/2 cup -- Greek Yogurt', '1 tablespoon -- Peanut Butter', '1 tablespoon -- Pea Protein Powder')">Ingredients</button>
              </div>
              <div class="review-content">
                <p>Fuel your body for a morning workout or a busy day with this powerful Protein Breakfast Smoothie! Not only is this delightfully sweet smoothie packed with protein, but it's also a great source of calcium and vitamin K to support strong, healthy bones.</p>                  
              </div>
              <div class="bot-content">
                <div class="date-added">
                  <span>Jan 21, 2023</span>
                </div>
                <ul class="review-stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="best-mixes-parent">
            <div class="best-mixes-content">
              <div class="mixes-image-container">
                <img src="./src/images/mixes/power-booster.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Power Booster Smoothie</h3>
                <button class="ingredients" onclick="openModal('Power Booster Smoothie', '1 -- Medium banana', '1/2 cup -- Fresh or frozen raspberries', '1 -- T flax seed', '2 scoops -- Vanilla whey protein powder', '1/4 cup -- Unsweetened vanilla almond milk', '1 cup -- Cold water')">Ingredients</button>
              </div>
              <div class="review-content">
                <p>This smoothie is a great one to use if you need to have a full meal on the go, or to use as a post-workout protein shake.  It has just enough carbs and healthy fats for a balanced meal or to support muscle recovery. If you are dieting, try it as a meal replacement. The protein will help keep you feeling full.</p>                  
              </div>
              <div class="bot-content">
                <div class="date-added">
                  <span>Jan 21, 2023</span>
                </div>
                <ul class="review-stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="best-mixes-parent">
            <div class="best-mixes-content">
              <div class="mixes-image-container">
                <img src="./src/images/mixes/choco-banana.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Choco And Banana Smoothie</h3>
                <button class="ingredients" onclick="openModal('Choco And Banana Smoothie', '1-2 cups -- Crushed ice', '1/2 cup -- Unsweetened vanilla almond milk', '1/2 -- Banana', '1 scoop -- Chocolate protein powder and greens powder', 'Garnish with chocolate, fruit or nuts optional', '1 cup -- Spinach, kale or power green mixture')">Ingredients</button>
              </div>
              <div class="review-content">
                <p>A healthy chocolate and banana protein shake recipe that is so delicious. No one will ever guess how clean and healthy it is.
                  It's a fun recipe to fool your not-so-healthy-food-loving kids or partner.</p>                  
              </div>
              <div class="bot-content">
                <div class="date-added">
                  <span>Jan 21, 2023</span>
                </div>
                <ul class="review-stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="best-mixes-parent">
            <div class="best-mixes-content">
              <div class="mixes-image-container">
                <img src="./src/images/mixes/strawberry-banana.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Strawberry And Banana Protein Mix</h3>
                <button class="ingredients" onclick="openModal('Strawberry And Banana Protein Mix', '1 cup -- Power Greens', '1/2 cup -- Strawberries', '1/2 -- Banana, frozen', '1/4 cup -- Oats, rolled, gluten-free', '1/2 cup -- Ice', '1 1/2 cup -- Cashew Milk, unsweetened')">Ingredients</button>
              </div>
              <div class="review-content">
                <p>A healthy chocolate and banana protein shake recipe that is so delicious. No one will ever guess how clean and healthy it is.
                  It's a fun recipe to fool your not-so-healthy-food-loving kids or partner.</p>                  
              </div>
              <div class="bot-content">
                <div class="date-added">
                  <span>Jan 21, 2023</span>
                </div>
                <ul class="review-stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="best-mixes-parent">
            <div class="best-mixes-content">
              <div class="mixes-image-container">
                <img src="./src/images/mixes/peanut-butter.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Peanut Butter And Banana Smoothie</h3>
                <button class="ingredients" onclick="openModal('Peanut Butter And Banana Smoothie', '2 -- Frozen bananas', '4-6 Tablespoons -- Peanut butter', '2 cups -- Milk', 'Sweetener of choice to taste', '1 scoop -- Protein powder', '1/3 cup -- Quick oats or rolled oats')">Ingredients</button>
              </div>
              <div class="review-content">
                <p>While many people love the convenience of overnight oatmeal, toast with jam, or a bowl of cold cereal for breakfast, I always seem to be hungry again less than an hour after eating a high carb breakfast without much protein.Unlike many other quick breakfast options, this easy peanut butter banana smoothie recipe includes a balance of protein, carbs, and healthy fats to help with fullness.</p>                  
              </div>
              <div class="bot-content">
                <div class="date-added">
                  <span>Jan 21, 2023</span>
                </div>
                <ul class="review-stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="best-mixes-parent">
            <div class="best-mixes-content">
              <div class="mixes-image-container">
                <img src="./src/images/mixes/kale-blueberry.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>High Protein Blueberry Kale Smoothie</h3>
                <button class="ingredients" onclick="openModal('High Protein Blueberry Kale Smoothie', '1/2 cup -- Chopped kale', '1/2 cup -- Blueberries fresh or frozen', '1/2 -- Banana', '1/2 cup -- Plain low fat yogurt', '1 scoop -- Protein powder', '1 Tablespoon flax seed meal')">Ingredients</button>
              </div>
              <div class="review-content">
                <p>A healthy chocolate and banana protein shake recipe that is so delicious. No one will ever guess how clean and healthy it is.
                  It's a fun recipe to fool your not-so-healthy-food-loving kids or partner.</p>                  
              </div>
              <div class="bot-content">
                <div class="date-added">
                  <span>Jan 21, 2023</span>
                </div>
                <ul class="review-stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./src/js/main.js"></script>
  <script>
    const modal = document.getElementById("myModal");

    function openModal(title, ingredient1, ingredient2, ingredient3, ingredient4, ingredient5, ingredient6){
      modal.style.display = "block";
<<<<<<< HEAD
      document.querySelector('.modal-body').innerphp = `
=======
      document.querySelector('.modal-body').innerHTML = `
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
        <h2>${title}</h2>  
        <p>${ingredient1}</p>
        <p>${ingredient2}</p>
        <p>${ingredient4}</p>
        <p>${ingredient5}</p>
        <p>${ingredient6}</p>
      `
    }
  
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
<<<<<<< HEAD
</php>
=======
</html>
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
