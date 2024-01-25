const addBtn = document.querySelector('.add-btn');
const clearBtn = document.querySelector('.clear-btn');

const foodName = document.querySelector('.foodName');
const calories = document.querySelector('.calories');
const protein = document.querySelector('.protein');
const image = document.querySelector('.image');
const carbs = document.querySelector('.carbs');
const fat = document.querySelector('.fat');
const serving = document.querySelector('.serving');
const dropdownBtn = document.querySelector('.dropDownBtn');


const foodNameRe = /^[A-Za-z ]+([A-Za-z]+){0,4}$/;
const caloriesRe = /^[0-9]{1,3}$/;
const proteinRe = /^[0-9]{0,3}?\.?\d+g$/;
const imageRe = /[^\s]+(.*?).(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/;
const servingRe = /^per?[s -][0-9]{1,4}(g|ml)$/;

const clearError = (item) => {
  setTimeout(() => {
    item.style.visibility = 'hidden';
  }, 3000);
}

addBtn.addEventListener('click', e => {

  if(!foodNameRe.test(foodName.value)){
    e.preventDefault();
    document.querySelector('.foodNameError').style.visibility = 'visible';
    clearError(document.querySelector('.foodNameError'));
  }
  if(!servingRe.test(serving.value)){
    e.preventDefault();
    document.querySelector('.servingError').style.visibility = 'visible';
    clearError(document.querySelector('.servingError'));
  }
  if(!caloriesRe.test(calories.value)){
    e.preventDefault();
    document.querySelector('.caloriesError').style.visibility = 'visible';
    clearError(document.querySelector('.caloriesError'));
  }
  if(!proteinRe.test(protein.value)){
    e.preventDefault();
    document.querySelector('.proteinError').style.visibility = 'visible';
    clearError(document.querySelector('.proteinError'));
  }
  if(!proteinRe.test(fat.value)){
    e.preventDefault();
    document.querySelector('.fatError').style.visibility = 'visible';
    clearError(document.querySelector('.fatError'));
  }
  if(!proteinRe.test(carbs.value)){
    e.preventDefault();
    document.querySelector('.carbsError').style.visibility = 'visible';
    clearError(document.querySelector('.carbsError'));
  }
  if(!imageRe.test(image.value)){
    e.preventDefault();
    document.querySelector('.imageError').style.visibility = 'visible';
    clearError(document.querySelector('.imageError'));
  }
  if(dropdownBtn.value == 'Select Category'){
    e.preventDefault();
    document.querySelector('.dropdownError').style.visibility = 'visible';
    clearError(document.querySelector('.dropdownError'));
  }
})


//==============================
//======DROPDOWN CONTENT========
//==============================
const options = document.querySelectorAll('.dropdownItem');

options.forEach(option => {
  option.addEventListener('click', e => {
    e.preventDefault();
    dropdownBtn.value = option.innerHTML;
    option.innerHTML == 'Gain Weight' ? document.querySelector('.add-form').action = '../registers/registerGainWeight.php' : document.querySelector('.add-form').action = '../registers/registerLooseWeight.php';
  })

});

dropdownBtn.addEventListener('click' , e => {
  e.preventDefault();
  document.getElementById("myDropdown").classList.toggle("showDropdown");
});



document.body.addEventListener('click', e => {
  if(!e.target.matches('.dropDownBtn')){
    if(document.querySelector('.dropdown-content').classList.contains('showDropdown')){
      document.querySelector('.dropdown-content').classList.remove('showDropdown');
    }
  }
});