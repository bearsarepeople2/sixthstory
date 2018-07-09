function navMenu() {
  let menu = document.querySelector('.menu')
  let burger = document.querySelector('.nav__burger')

  burger.addEventListener('click', () => {
    menu.classList.toggle('menu--active')
    burger.classList.toggle('nav__burger--active')
  })
}

navMenu()
