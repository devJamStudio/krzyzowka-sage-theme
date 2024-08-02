document.addEventListener('DOMContentLoaded', function () {

  var swiper = new Swiper('#portfolioSlider', {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  if (swiper) {
    console.log('Swiper initialized successfully');
  } else {
    console.log('Failed to initialize Swiper');
  }
});
