const sun = document.querySelector('.sun');
const moon = document.querySelector('.moon');

if(localStorage.getItem('body-theme') == "light-only"){
  document.body.className = 'light-only';
  sun.style.display = 'none';
  moon.style.display = 'block';
} else{
  document.body.className = 'dark-only';
  moon.style.display = 'none';
  sun.style.display = 'block';
}

sun.addEventListener('click', () => {
  sun.style.display = 'none';
  moon.style.display = 'block';
  document.body.className = 'light-only';
  localStorage.setItem('body-theme', "light-only");
})

moon.addEventListener('click', () => {
  moon.style.display = 'none';
  sun.style.display = 'block';
  document.body.className = 'dark-only';
  localStorage.setItem('body-theme', "dark-only");
})