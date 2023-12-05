const container = document.querySelector('.container');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const loginCard = document.querySelector('.login');
const registerCard = document.querySelector('.register');

//Validation variables\\
const email = document.querySelector('.email');
const username = document.querySelector('.username');
const password = document.querySelector('.password');
const usernameErr = document.querySelector('.usernameError');
const emailErr = document.querySelector('.emailError');
const passwordErr = document.querySelector('.passwordError');

const registerEmail = document.querySelector('.register-email');
const registerUsername = document.querySelector('.register-username');
const registerPassword = document.querySelector('.register-password');
const registerEmailErr = document.querySelector('.register-emailError');
const registerUsernameErr = document.querySelector('.register-usernameError');
const registerPasswordErr = document.querySelector('.register-passwordError');

const emailRe = /^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9])+.[a-z]{2,4}$/;
const usernameRe = /^[a-zA-Z0-9]+?\s?[a-zA-Z0-9]+$/;
const passwordRe = /^[a-zA-Z0-9!@#$%^&*]{6,26}$/;

const regexTest = item => {
  item.style.visibility = 'visible';
  setTimeout(() => {
    item.style.visibility = 'hidden';
  }, 3000);
}

container.addEventListener('click', e => {
  e.preventDefault();

  if(e.target == registerLink){
    loginCard.style.display = 'none';
    registerCard.style.display = 'block';
  }
  
  if(e.target == loginLink){
    loginCard.style.display = 'block';
    registerCard.style.display = 'none';
  }
  
  if(e.target.classList.contains('loginBtn')){
    if(!usernameRe.test(username.value)){
      regexTest(usernameErr);
    }
    if(!passwordRe.test(password.value)){
      regexTest(passwordErr);
    }
    if(!emailRe.test(email.value)){
      regexTest(emailErr);
    }
  }

  if(e.target.classList.contains('registerBtn')){
    if(!usernameRe.test(registerUsername.value)){
      regexTest(registerUsernameErr);
    }
    if(!passwordRe.test(registerPassword.value)){
      regexTest(registerPasswordErr);
    }
    if(!emailRe.test(registerEmail.value)){
      regexTest(registerEmailErr);
    }
  }
});
