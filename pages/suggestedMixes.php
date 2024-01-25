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
          <div class="modal-body"></div>
        </div>
      </div>
      <div id="editModal" class="edit-modal">
        <div class="edit-modal-content">
          <div class="edit-modal-body">
            <form class="edit-form" method='POST' action='../registers/editMix.php'>
              <div class="form-title">
                <h2>Edit Mix</h2>
              </div>
              <div class="form-body">
                <div class="input-container">
                  <input type="number" style="visibility: hidden; position: fixed;" name="id" class="id">
                  <label>Mix Name</label>
                  <input type="text" class="edit-form-input mixName" placeholder="Mix name..." name='mixName'>
                  <p class="invalid mixNameError">Please Enter a valid mix name! ex. (Berries Mix)</p>
                </div>
                <div class="input-container">
                  <label>Ingredients</label>
                  <input type="text" class="edit-form-input ingredientsVal" placeholder="ingredients..." name='ingredients'>
                  <p class="invalid ingredientsError">Please Enter valid ingredients! ex. (1 Banana, 1/2 cup of coffe, 1 apple)</p>
                </div>
                <div class="input-container">
                  <label>Description</label>
                  <input type="text" class="edit-form-input description" placeholder="description..." name='description'>
                  <p class="invalid descriptionError">Please Enter a valid Description!</p>
                </div>
                <div class="input-container">
                  <label>Review Stars</label>
                  <input type="number" class="edit-form-input stars" placeholder="stars..." name='stars'>
                  <p class="invalid starsError">Please Enter valid stars number! ex. (4)</p>
                </div>
                <div class="button-container">
                  <button class="edit-btn" type='submit' name='edit-btn'>Edit Mix</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="best-mixes-wrapper">
        <h2 class="best-mixes-title">Our Mixes</h2>
        <div class="best-mixes">
          <?php
              require_once('../models/mixModel.php');
              $mix = new Mix();
              $data = $mix->getMixes();

              if(count($data) != 0){
                foreach($data as $mix){
                  $starHtml = '';
                  for ($i = 0; $i < $mix['Stars']; $i++) {
                      $starHtml .= '<li><i class="fa fa-star"></i></li>';
                  }
                  for ($i = $mix['Stars']; $i < 5; $i++) {
                      $starHtml .= '<li><i class="far fa-star"></i></li>';
                  }
                  
                  echo '
                    <div class="best-mixes-parent" id="' . $mix['ID'] . '">
                      <div class="best-mixes-content">
                        <div class="mixes-image-container">
                          <img src="../src/images/mixes/' . $mix['Image'] . '" alt="mixes-image" class="mixes-image">
                        </div>
                      </div>
                      <div class="best-mixes-review">
                        <div class="review-title">
                          <div>
                            <h3>'. $mix['Title'] .'</h3>
                            <h4>Added By: '. $mix['addedBy']. '</h3>
                          </div>  
                            '. '
                          <div class="review-title-right">
                            <input type="number" style="visibility: hidden; position: fixed;" name="id" class="id" value="' . $mix['ID'] . '">
                            <button class="ingredients" onclick="openModal(`'. strval($mix['Title']) . "` , `" . strval($mix['Ingredients']) .'`)">Ingredients</button>' .
                            ($_COOKIE['role'] == 'Admin' ?                             
                            '<button class="action-btn" onclick="openEditModal(' . $mix['ID'] . ', `' . $mix['Title'] . '`, `' . $mix['Ingredients'] . '`, `' . $mix['Description'] . '`, ' . $mix['Stars'] . ')">
                              <img src="../src/images/edit-mixes.png" alt="edit" class="action-mixes">
                            </button>
                            <a class="action-btn-wrapper" href="../registers/deleteMix.php?id=' . $mix["ID"] . '">
                              <button class="action-btn" name="delete-btn"> 
                                <img src="../src/images/delete-mixes.png" alt="delete" class="action-mixes">
                              </button>
                            </a>' : '') .
                            '    
                          </div>
                        </div>
                        <div class="review-content">
                          <p>' . $mix['Description'] . '</p>
                        </div>
                        <div class="bot-content">
                          <div class="date-added">
                            <span>' . $mix['DateAdded'] . '</span>
                          </div>
                          <ul class="review-stars">
                            ' . $starHtml . '
                          </ul>
                        </div>
                      </div>
                    </div>  
                  ';
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

  <script src='../src/js/suggestedMixes.js'></script>
  <script src='../src/js/main.js'></script>
  <script>
    const modal = document.getElementById("myModal");
    const editModal = document.querySelector('#editModal');
    const mixNameVal = document.querySelector('.mixName');
    const ingredientsVal = document.querySelector('.ingredientsVal');
    const descriptionVal = document.querySelector('.description');
    const starsVal = document.querySelector('.stars');
    const idVal = document.querySelector('.id');

    function openModal(title, ingredients) {
        modal.style.display = "block";
        const ingredientsArr = ingredients.split(',');
        
        let output = `<h2>${title}</h2>`;
        for (let i = 0; i < ingredientsArr.length; i++) {
            output += `<p>${ingredientsArr[i]}</p>`;
        }
        document.querySelector('.modal-body').innerHTML = output;
    }
    
    function openEditModal(id, title, ingredients, description, stars) {
      editModal.style.display = 'block';
      console.log(id, title, ingredients, description, stars);
      idVal.value = id;
      mixNameVal.value = title;
      ingredientsVal.value = ingredients;
      descriptionVal.value = description;
      starsVal.value = stars;
    }


    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
      if(event.target == editModal){
        editModal.style.display = 'none';
      }
    }
  </script>
</body>
</html>