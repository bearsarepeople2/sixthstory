function router() {
  let arrow = document.querySelector('.arrow')
  let menuItems = document.querySelectorAll('.menu__item')

  for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener('click', () => {
      toBlock(menuItems[i].dataset.toBlock)
      document.querySelector('.menu').classList.toggle('menu--active')
      document.querySelector('.nav__burger').classList.toggle('nav__burger--active')
    })
  }

  arrow.addEventListener('click', () => {
    toBlock('.who-we-are')
  })

  function toBlock(q) {
    let ele = document.querySelector(q)
    let rect = ele.getBoundingClientRect()
    let isSmoothScrollSupported = 'scrollBehavior' in document.documentElement.style

    if (isSmoothScrollSupported) {
      window.scrollBy({
        top: rect.top,
        behavior: 'smooth'
      })
    } else {
      window.scrollBy(0, rect.top)
    }
  }

}

router()
