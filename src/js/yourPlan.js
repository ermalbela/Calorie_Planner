const addBtn = document.querySelector('.add-btn');
const clearBtn = document.querySelector('.clear-btn');

const foodName = document.querySelector('.foodName');
const calories = document.querySelector('.calories');
const protein = document.querySelector('.protein');
const image = document.querySelector('.image');
const carbs = document.querySelector('.carbs');
const fat = document.querySelector('.fat');
const serving = document.querySelector('.serving');

const foodNameRe = /^[A-Za-z]{1,15}?[ -]?[A-Za-z]{1,15}?[ -]?[A-Za-z]{1,15}$/;
const caloriesRe = /^[0-9]{1,3}$/;
const proteinRe = /^[0-9]{0,3}?\.?\d+g$/;
const imageRe = /[^\s]+(.*?).(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/;
const servingRe = /^per?[s -][0-9]{1,4}g$/;

const clearInputs = (item) => {
  setTimeout(() => {
    item.style.visibility = 'hidden';
  }, 3000);
}

addBtn.addEventListener('click', e => {

  if(!foodNameRe.test(foodName.value)){
    e.preventDefault();
    document.querySelector('.foodNameError').style.visibility = 'visible';
    clearInputs(document.querySelector('.foodNameError'));
  }
  if(!servingRe.test(serving.value)){
    e.preventDefault();
    document.querySelector('.servingError').style.visibility = 'visible';
    clearInputs(document.querySelector('.servingError'));
  }
  if(!caloriesRe.test(calories.value)){
    e.preventDefault();
    document.querySelector('.caloriesError').style.visibility = 'visible';
    clearInputs(document.querySelector('.caloriesError'));
  }
  if(!proteinRe.test(protein.value)){
    e.preventDefault();
    document.querySelector('.proteinError').style.visibility = 'visible';
    clearInputs(document.querySelector('.proteinError'));
  }
  if(!proteinRe.test(fat.value)){
    e.preventDefault();
    document.querySelector('.fatError').style.visibility = 'visible';
    clearInputs(document.querySelector('.fatError'));
  }
  if(!proteinRe.test(carbs.value)){
    e.preventDefault();
    document.querySelector('.carbsError').style.visibility = 'visible';
    clearInputs(document.querySelector('.carbsError'));
  }
  if(!imageRe.test(image.value)){
    e.preventDefault();
    document.querySelector('.imageError').style.visibility = 'visible';
    clearInputs(document.querySelector('.imageError'));
  }
})