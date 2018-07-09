function animateIn() {
  let toAnimate = document.querySelectorAll('.to-animate')

  document.addEventListener('scroll', () => {
    for (let i = 0; i < toAnimate.length; i++) {
      let rect = toAnimate[i].getBoundingClientRect()
      let windowHeight = window.innerHeight
      if (rect.top < windowHeight*0.9) {
        toAnimate[i].classList.add('animate')
      }
    }
  })
}

animateIn()
