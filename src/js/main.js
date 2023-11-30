const sun = document.querySelector('.sun');
const moon = document.querySelector('.moon');
const mix_theme = document.querySelector('.mix');
const arrow = document.querySelector('.toggle');

if(localStorage.getItem('body-theme') == "light-only"){
  document.body.className = 'light-only';
  sun.style.display = 'none';
  moon.style.display = 'block';
  mix_theme.style.display = 'none';
} else if(localStorage.getItem('body-theme') == "dark-only"){
  document.body.className = 'dark-only';
  moon.style.display = 'none';
  sun.style.display = 'block';
  mix_theme.style.display = 'none';
} else{
  document.body.className = "mix";
  moon.style.display = 'none';
  sun.style.display = 'none';
  mix_theme.style.display = 'block';
}

sun.addEventListener('click', () => {
  sun.style.display = 'none';
  moon.style.display = 'none';
  mix_theme.style.display = 'block';
  document.body.className = 'mix';
  localStorage.setItem('body-theme', "mix");
})

moon.addEventListener('click', () => {
  moon.style.display = 'none';
  sun.style.display = 'block';
  mix_theme.display = 'none';
  document.body.className = 'dark-only';
  localStorage.setItem('body-theme', "dark-only");
})

mix_theme.addEventListener('click', () => {
  moon.style.display = 'block';
  sun.style.display = 'none';
  mix_theme.style.display = 'none';
  document.body.className = 'light-only';
  localStorage.setItem('body-theme', "light-only" );
})

document.querySelector('.toggle-wrapper').addEventListener('click', e => {
  if(e.target.className == 'toggle'){
    document.querySelector('.main-sidebar').classList.add('closed-sidebar');
    arrow.classList.add('closed-icon');
    document.querySelector('.main-content').style.margin = '90px 7px 0px';
  } else if(e.target.classList.contains('closed-icon')){
    document.querySelector('.main-sidebar').classList.remove('closed-sidebar');
    arrow.classList.remove('closed-icon');
    document.querySelector('.main-content').style.margin = '100px 7px 0px 290px';
  }
})