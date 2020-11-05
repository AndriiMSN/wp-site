// SWIPER GENERAL BLOCK

var mySwiper = new Swiper(".general .swiper-container", {
  // Optional parameters
  // direction: 'vertical',
  loop: false,
  speed: 600,

  // If we need pagination
  pagination: {
    el: ".general .swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".general .swiper-button-next",
    prevEl: ".general .swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".general .swiper-scrollbar",
  },
});

// SWIPER PORTFOLIO BLOCK

var mySwiper = new Swiper(".portfolio .swiper-container", {
  // Optional parameters
  // direction: 'vertical',
  loop: true,
  speed: 600,

  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    575: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      spaceBetween: 20,
    },
    1099: {
      slidesPerView: 4,
      slidesPerGroup: 1,
      spaceBetween: 20,
    },
  },

  // If we need pagination
  pagination: {
    el: ".portfolio .swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".portfolio .swiper-button-next",
    prevEl: ".portfolio .swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".portfolio .swiper-scrollbar",
  },
});

/* DELETE, TEMPORARY CODE */
document.querySelectorAll("a").forEach((el) => {
  el.addEventListener("click", (e) => {
    e.preventDefault();
    return false;
  });
});

// BURGER MOBILE BUTTON

document
  .querySelector("header .header-menu-but")
  .addEventListener("click", () => {
    document.querySelector("header .header-nav-mob ").classList.toggle("show");
  });

// IF HAVE SUBMENU TOGGLE SHOW AND ADD ARROW

document.querySelectorAll(".header-nav-mob nav ul li").forEach((el) => {
  if (el.childNodes.length > 2) {
    el.childNodes[1].classList.add("arrow");

    el.childNodes[1].addEventListener("click", () => {
      el.childNodes[3].classList.toggle("show");
    });
  }
});
