const header = document.querySelector('.header')
const sticky = 600

window.addEventListener('scroll', function () {
  if (window.pageYOffset > sticky) {
    header.classList.add('header--sticky')
  } else {
    header.classList.remove('header--sticky')
  }
})
