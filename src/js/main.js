const sun = document.querySelector('.sun');
const moon = document.querySelector('.moon');

sun.addEventListener('click', () => {
  sun.style.display = 'none';
  moon.style.display = 'block';
  document.body.className = 'light-only';
})

moon.addEventListener('click', () => {
  moon.style.display = 'none';
  sun.style.display = 'block';
  document.body.className = 'dark-only';
})