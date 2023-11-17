const idk = document.querySelector('.idk');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');









registerLink.addEventListener('click', ()=> {
    idk.classList.add('active');
});


loginLink.addEventListener('click', ()=> {
    idk.classList.remove('active');
});


