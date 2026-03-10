// Scroll to Top
window.onscroll = function() {
  const dropshipping_shop_button = document.querySelector('.scroll-top-box');
  if (dropshipping_shop_button) {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      dropshipping_shop_button.style.display = "block";
    } else {
      dropshipping_shop_button.style.display = "none";
    }
  }
};

const scrollTopLink = document.querySelector('.scroll-top-box a');
if (scrollTopLink) {
  scrollTopLink.onclick = function(event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
}

// slider
jQuery(document).ready(function() {
  jQuery('.main-banner-sec .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 1 
    },
    1025: { 
      items: 1
    },
    1200: { 
      items: 1
    }
  },
    autoplay: false,
  });
});

// latest blog
jQuery(document).ready(function() {
  jQuery('.blog-sec .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 2 
    },
    1025: { 
      items: 3
    },
    1200: { 
      items: 3
    }
  },
    autoplay: false,
  });
});