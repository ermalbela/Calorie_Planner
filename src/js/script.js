const container = document.querySelector('.container');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const loginCard = document.querySelector('.login');
const registerCard = document.querySelector('.register');

container.addEventListener('click', e => {
  if(e.target == registerLink){
    loginCard.style.display = 'none';
    registerCard.style.display = 'block';
  }
  
  if(e.target == loginLink){
    loginCard.style.display = 'block';
    registerCard.style.display = 'none';
  }
})