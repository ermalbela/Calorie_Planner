const addBtn = document.querySelector('.add-btn');
const clearBtn = document.querySelector('.clear-btn');

const foodName = document.querySelector('.foodName');
const calories = document.querySelector('.calories');
const protein = document.querySelector('.protein');
const image = document.querySelector('.image');

const foodNameRe = /^[A-Za-z]{2,15}$/;
const caloriesRe = /^[0-9]{1,3}$/;

const clearInputs = (item) => {
  setTimeout(() => {
    item.style.visibility = 'hidden';
  }, 3000);
}

addBtn.addEventListener('click', e => {
  e.preventDefault();

  if(!foodNameRe.test(foodName.value)){
    document.querySelector('.foodNameError').style.visibility = 'visible';
    clearInputs(document.querySelector('.foodNameError'));
  } 
  if(!caloriesRe.test(calories.value)){
    document.querySelector('.caloriesError').style.visibility = 'visible';
    clearInputs(document.querySelector('.caloriesError'));
  }

})