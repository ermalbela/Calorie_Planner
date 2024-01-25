const addBtn = document.querySelector('.add-btn');
const clearBtn = document.querySelector('.clear-btn');

const mixName = document.querySelector('.mixName');
const ingredients = document.querySelector('.ingredients');
const description = document.querySelector('.description');
const stars = document.querySelector('.stars');
const image = document.querySelector('.image');



const mixNameRe = /^[A-Za-z ]+([A-Za-z]+){0,4}$/;
const ingredientsRe = /^[a-zA-Z0-9._\/ -]+(?:,[a-zA-Z0-9._\/ -]+){0,7}$/;
const imageRe = /[^\s]+(.*?).(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/;
const descriptionRe = /^[a-zA-Z0-9!-.,_\s]{1,400}$/;

const clearError = (item) => {
  setTimeout(() => {
    item.style.visibility = 'hidden';
  }, 3000);
}

addBtn.addEventListener('click', e => {

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
  if(!imageRe.test(image.value)){
    e.preventDefault();
    document.querySelector('.imageError').style.visibility = 'visible';
    clearError(document.querySelector('.imageError'));
  }
  if(stars.value > 5 || stars.value < 0 || !stars.value){
    e.preventDefault();
    document.querySelector('.starsError').style.visibility = 'visible';
    clearError(document.querySelector('.starsError'));
  }
});