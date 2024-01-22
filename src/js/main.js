const sun = document.querySelector('.sun');
const moon = document.querySelector('.moon');
const mix_theme = document.querySelector('.mix');
const arrow = document.querySelector('.toggle');
const maximize = document.querySelector('.maximize');
const logo = document.querySelector('.logo');

if(localStorage.getItem('body-theme') == "light-only"){
  document.body.className = 'light-only';
  sun.style.display = 'none';
  moon.style.display = 'block';
  mix_theme.style.display = 'none';
  logo.setAttribute('src', '../src/images/logo-light-1.png');
} else if(localStorage.getItem('body-theme') == "dark-only"){
  document.body.className = 'dark-only';
  moon.style.display = 'none';
  sun.style.display = 'block';
  mix_theme.style.display = 'none';
  logo.setAttribute('src', '../src/images/logo-dark-1.png');
} else{
  document.body.className = "mix";
  moon.style.display = 'none';
  sun.style.display = 'none';
  mix_theme.style.display = 'block';
  logo.setAttribute('src', '../src/images/logo-dark-1.png');
}

sun.addEventListener('click', () => {
  sun.style.display = 'none';
  moon.style.display = 'none';
  mix_theme.style.display = 'block';
  document.body.className = 'mix';
  localStorage.setItem('body-theme', "mix");
  logo.setAttribute('src', '../src/images/logo-dark-1.png');
});

moon.addEventListener('click', () => {
  moon.style.display = 'none';
  sun.style.display = 'block';
  mix_theme.display = 'none';
  document.body.className = 'dark-only';
  localStorage.setItem('body-theme', "dark-only");
  logo.setAttribute('src', '../src/images/logo-dark-1.png');
});

mix_theme.addEventListener('click', () => {
  moon.style.display = 'block';
  sun.style.display = 'none';
  mix_theme.style.display = 'none';
  document.body.className = 'light-only';
  localStorage.setItem('body-theme', "light-only" );
  logo.setAttribute('src', '../src/images/logo-light-1.png');
});

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
});

maximize.addEventListener('click', () => {
  if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {
        document.documentElement.requestFullScreen();
    } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullScreen) {
        document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.cancelFullScreen) {
        document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
    }
  }
});