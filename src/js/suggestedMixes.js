const editBtn = document.querySelector('.edit-btn');

const mixName = document.querySelector('.mixName');
const ingredients = document.querySelector('.ingredientsVal');
const description = document.querySelector('.description');
const stars = document.querySelector('.stars');



const mixNameRe = /^[A-Za-z ]+([A-Za-z]+){0,4}$/;
const ingredientsRe = /^[a-zA-Z0-9._\/ -]+(?:,[a-zA-Z0-9._\/ -]+){0,7}$/;
const descriptionRe = /^[a-zA-Z0-9!-.,_\s]{1,400}$/;

const clearError = (item) => {
  setTimeout(() => {
    item.style.visibility = 'hidden';
  }, 3000);
}

editBtn.addEventListener('click', e => {
  if(!mixNameRe.test(mixName.value)){
    e.preventDefault();
    document.querySelector('.mixNameError').style.visibility = 'visible';
    clearError(document.querySelector('.mixNameError'));
  }
  if(!ingredientsRe.test(ingredients.value)){
    e.preventDefault();
    document.querySelector('.ingredientsError').style.visibility = 'visible';
    clearError(document.querySelector('.ingredientsError'));
  }
  if(!descriptionRe.test(description.value)){
    e.preventDefault();
    document.querySelector('.descriptionError').style.visibility = 'visible';
    clearError(document.querySelector('.descriptionError'));
  }
  if(stars.value > 5 || stars.value < 0 || !stars.value){
    e.preventDefault();
    document.querySelector('.starsError').style.visibility = 'visible';
    clearError(document.querySelector('.starsError'));
  }
});