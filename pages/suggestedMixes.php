<?php
  include_once '../src/Components/header.php';
  include_once '../src/Components/sidebar.php';
?>

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
                <img src="../src/images/mixes/blueberry.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Berry Protein Smoothie</h3>
                <div class='review-title-right'>
                  <button class="ingredients" onclick="openModal('Berry Protein Smoothie', ['1/2 cup -- Almond Milk', '1/2 cup -- Blueberries', '1/2 cup -- Ice', '1/2 -- Banana', '2 tablespoon -- Superfood Essentials Vanilla Plant-Based Protein', '1 tablespoon -- Pea Protein Powder'])">Ingredients</button>
                  <button class='action-btn'>
                    <img src="../src/images/edit-mixes.png" alt="edit" class='action-mixes'>
                  </button>
                  <button class='action-btn'>
                    <img src="../src/images/delete-mixes.png" alt="delete" class='action-mixes'>
                  </button>
                </div>
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
                <img src="../src/images/mixes/spinach.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Spinach Protein Smoothie</h3>
                <div class="review-title-right">
                  <button class="ingredients" onclick="openModal('Spinach Protein Smoothie', ['2 cup -- Spinach', '1/2 -- Banana', '1 1/2 cup -- Almond Milk', '1/2 cup -- Greek Yogurt', '1 tablespoon -- Peanut Butter', '1 tablespoon -- Pea Protein Powder'])">Ingredients</button>
                  <button class='action-btn'>
                    <img src="../src/images/edit-mixes.png" alt="edit" class='action-mixes'>
                  </button>
                  <button class='action-btn'>
                    <img src="../src/images/delete-mixes.png" alt="delete" class='action-mixes'>
                  </button>
                </div>
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
                <img src="../src/images/mixes/power-booster.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Power Booster Smoothie</h3>
                <div class="review-title-right">
                  <button class="ingredients" onclick="openModal('Power Booster Smoothie', ['1 -- Medium banana', '1/2 cup -- Fresh or frozen raspberries', '1 -- T flax seed', '2 scoops -- Vanilla whey protein powder', '1/4 cup -- Unsweetened vanilla almond milk', '1 cup -- Cold water'])">Ingredients</button>
                  <button class='action-btn'>
                    <img src="../src/images/edit-mixes.png" alt="edit" class='action-mixes'>
                  </button>
                  <button class='action-btn'>
                    <img src="../src/images/delete-mixes.png" alt="delete" class='action-mixes'>
                  </button>
                </div> 
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
                <img src="../src/images/mixes/choco-banana.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Choco And Banana Smoothie</h3>
                <div class="review-title-right">
                  <button class="ingredients" onclick="openModal('Choco And Banana Smoothie', ['1-2 cups -- Crushed ice', '1/2 cup -- Unsweetened vanilla almond milk', '1/2 -- Banana', '1 scoop -- Chocolate protein powder and greens powder', 'Garnish with chocolate, fruit or nuts optional', '1 cup -- Spinach, kale or power green mixture'])">Ingredients</button>
                  <button class='action-btn'>
                    <img src="../src/images/edit-mixes.png" alt="edit" class='action-mixes'>
                  </button>
                  <button class='action-btn'>
                    <img src="../src/images/delete-mixes.png" alt="delete" class='action-mixes'>
                  </button>
                </div>
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
                <img src="../src/images/mixes/strawberry-banana.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Strawberry And Banana Protein Mix</h3>
                <div class="review-title-right">
                  <button class="ingredients" onclick="openModal('Strawberry And Banana Protein Mix', ['1 cup -- Power Greens', '1/2 cup -- Strawberries', '1/2 -- Banana, frozen', '1/4 cup -- Oats, rolled, gluten-free', '1/2 cup -- Ice', '1 1/2 cup -- Cashew Milk, unsweetened'])">Ingredients</button>
                  <button class='action-btn'>
                    <img src="../src/images/edit-mixes.png" alt="edit" class='action-mixes'>
                  </button>
                  <button class='action-btn'>
                    <img src="../src/images/delete-mixes.png" alt="delete" class='action-mixes'>
                  </button>
                </div>
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
                <img src="../src/images/mixes/peanut-butter.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>Peanut Butter And Banana Smoothie</h3>
                <div class="review-title-right">
                  <button class="ingredients" onclick="openModal('Peanut Butter And Banana Smoothie', ['2 -- Frozen bananas', '4-6 Tablespoons -- Peanut butter', '2 cups -- Milk', 'Sweetener of choice to taste', '1 scoop -- Protein powder', '1/3 cup -- Quick oats or rolled oats'])">Ingredients</button>
                  <button class='action-btn'>
                    <img src="../src/images/edit-mixes.png" alt="edit" class='action-mixes'>
                  </button>
                  <button class='action-btn'>
                    <img src="../src/images/delete-mixes.png" alt="delete" class='action-mixes'>
                  </button>
                </div>
              </div>
              <div class="review-content">
                <p>I always seem to be hungry again less than an hour after eating a high carb breakfast without much protein.This easy peanut butter banana smoothie recipe includes a balance of protein, carbs, and healthy fats to help with fullness.</p>
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
                <img src="../src/images/mixes/kale-blueberry.jpg" alt="" class="mixes-image">
              </div>
            </div>
            <div class="best-mixes-review">
              <div class="review-title">
                <h3>High Protein Blueberry Kale Smoothie</h3>
                <div class="review-title-right">
                  <button class="ingredients" onclick="openModal('High Protein Blueberry Kale Smoothie', ['1/2 cup -- Chopped kale', '1/2 cup -- Blueberries fresh or frozen', '1/2 -- Banana', '1/2 cup -- Plain low fat yogurt', '1 scoop -- Protein powder', '1 Tablespoon flax seed meal'])">Ingredients</button>
                  <button class='action-btn'>
                    <img src="../src/images/edit-mixes.png" alt="edit" class='action-mixes'>
                  </button>
                  <button class='action-btn'>
                    <img src="../src/images/delete-mixes.png" alt="delete" class='action-mixes'>
                  </button>
                </div>
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

  <script src='../src/js/main.js'></script>
  <script>
    const modal = document.getElementById("myModal");

    function openModal(title, ingredients) {
        modal.style.display = "block";

        let html = `<h2>${title}</h2>`;
        for (let i = 1; i < ingredients.length; i++) {
            html += `<p>${ingredients[i]}</p>`;
        }

        document.querySelector('.modal-body').innerHTML = html;

        // document.querySelector('.modal-body').innerHTML = `
        //     <h2>${title}</h2>
            
        //     <p>${ingredients[0]}</p>
        //     <p>${ingredients[1]}</p>
        //     <p>${ingredients[2]}</p>
        //     <p>${ingredients[4]}</p>
        //     <p>${ingredients[5]}</p>
        // `;
    }
  
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>