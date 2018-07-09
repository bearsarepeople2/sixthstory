function slider() {
  let boxesContainer = document.querySelector('.what-we-do__boxes')
  let boxes = document.querySelectorAll('.what-we-do__box')
  let slidesContainer = document.querySelector('.what-we-do__slides')
  let slides = document.querySelectorAll('.what-we-do__slide')
  let arrowsContainer = document.querySelectorAll('.what-we-do__slide__nav')
  let close = document.querySelectorAll('.what-we-do__slide__close i')

  for (let i = 0; i < boxes.length; i++) {

    boxes[i].addEventListener('click', function() {
      boxesContainer.classList.add('what-we-do__boxes--hidden')
      slidesContainer.classList.add('what-we-do__slides--active')
      slides[i].classList.add('what-we-do__slide--active')

      let rect = slidesContainer.getBoundingClientRect()
      let isSmoothScrollSupported = 'scrollBehavior' in document.documentElement.style

      if (isSmoothScrollSupported) {
        window.scrollBy({
          top: rect.top,
          behavior: 'smooth'
        })
      } else {
        window.scrollBy(0, rect.top)
      }

    })

    close[i].addEventListener('click', function() {
      boxesContainer.classList.remove('what-we-do__boxes--hidden')
      slidesContainer.classList.remove('what-we-do__slides--active')
      slides[i].classList.remove('what-we-do__slide--active')
    })

    let arrows = arrowsContainer[i].querySelectorAll('i')

    arrows[0].addEventListener('click', function() {
      slides[i].classList.remove('what-we-do__slide--active')
      slides[i - 1].classList.add('what-we-do__slide--active')
    })
    arrows[1].addEventListener('click', function() {
      slides[i].classList.remove('what-we-do__slide--active')
      slides[i + 1].classList.add('what-we-do__slide--active')
    })

  }
}

slider()
