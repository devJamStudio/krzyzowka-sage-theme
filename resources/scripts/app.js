import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper/bundle';  // Ensure Swiper is imported if using a module bundler

/**
 * Application entrypoint
 */
domReady(async () => {
  var acceptance = document.querySelector('[name="accept-this-1"]')
  if (acceptance) {
    acceptance.required = true;
  }

  var navToggle = document.getElementById('nav--toggle');
  var mobileNav = document.getElementById('mobileNav');
  var currentIcon = navToggle.innerHTML;

  // SVG code for close (X) icon
  var closeIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M6 6L18 18" stroke="black" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
  <path d="M6 17.9998L18 5.99976" stroke="black" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
  </svg>`;

  if (navToggle) {
    navToggle.addEventListener('click', function() {
      // Get the current innerHTML of navToggle
      console.log(currentIcon)
      // SVG code for hamburger menu
      var hamburgerIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z"/></svg>';

      // Toggle mobileNav visibility

      // Toggle the icon
      if (mobileNav.classList.contains('hidden')) {
          navToggle.innerHTML = closeIcon;
          console.log('to')

      } else {
        navToggle.innerHTML = currentIcon;
        console.log('ta')

      }
      mobileNav.classList.toggle('hidden');
      navToggle.classList.toggle('close-btn')
    });
  }
  // Check if the current page is the home page
  if (document.body.classList.contains('home')) {
    const mainNav = document.getElementById('mainNav');
    mainNav.classList.add('frontpage--nav');

    const handleScroll = () => {
      const rect = mainNav.getBoundingClientRect();
      if (rect.top <= 16) {
        mainNav.classList.remove('frontpage--nav');
      } else {
        if (window.innerWidth < 768) {
          if (getTop(mainNav) < 330) {
            mainNav.classList.add('frontpage--nav');
          }
        } else if (window.innerWidth < 1024) {
          if (getTop(mainNav) < 496) {
            mainNav.classList.add('frontpage--nav');
          }
        } else {
          if (getTop(mainNav) < 650) {
            mainNav.classList.add('frontpage--nav');
          }
        }
      }
    };

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Call handleScroll once to set initial state
    handleScroll();

    function getTop(elem) {
      var box = elem.getBoundingClientRect();
      var body = document.body;
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop || body.scrollTop;
      var clientTop = document.documentElement.clientTop || body.clientTop || 0;
      var top = box.top + scrollTop - clientTop;
      return Math.round(top);
    }
  }
});
