const header = document.querySelector('.header')
const sticky = 600

window.addEventListener('scroll', function () {
  if (window.pageYOffset > sticky) {
    header.classList.add('header--sticky')
  } else {
    header.classList.remove('header--sticky')
  }
})

const scrollToTop = document.getElementById('scrollUp')

scrollToTop.addEventListener('click', function () {
  window.scrollTo({ top: 0, behavior: 'smooth' })
})
