const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");
const mMenuLine = document.querySelector(".mobile-menu-line");

const lightModeOne = (event) => {
  navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeigth = (height) => {
  navbar.style.height = height;
};

const openMenu = (event) => {
  // функция открытия меню
  menu.classList.add("is-open"); // вешает класс is-open
  document.body.style.overflow = "hidden"; // запрещаем прокрутку сайта под меню
  mMenuToggle.classList.add("close-menu");
  lightModeOne();
};

const closeMenu = (event) => {
  // функция закрытия меню
  menu.classList.remove("is-open"); // Убирает класс is-open
  document.body.style.overflow = ""; // разрешаем прокрутку сайта под меню
  mMenuToggle.classList.remove("close-menu");
  if (isFront) {
    navbar.classList.remove("navbar-light");
  }
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeigth("6.7rem") : changeNavHeigth("6.7rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOne() : lightModeOff();
  }
});

window.addEventListener("scroll", () => {
  this.crollY > 1
    ? mMenuLine.classList.add("mobile-menu-dark")
    : mMenuLine.classList.remove("mobile-menu-dark");
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".swiper", {
  speed: 400,
  autoHeigh: true,
  slidesPerView: 1,
  loop: false,
  navigation: {
    prevEl: ".slider-button-prev",
    nextEl: ".slider-button-next",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 1,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperSteps = new Swiper(".swiper-steps", {
  speed: 400,
  autoHeigh: true,
  slidesPerView: 1,
  loop: false,
  navigation: {
    prevEl: ".slider-button-steps-prev",
    nextEl: ".slider-button-steps-next",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
    },
  },
});

const swiperBlog = new Swiper(".swiper-blog", {
  speed: 400,
  autoHeigh: true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    prevEl: ".slider-button-blog-prev",
    nextEl: ".slider-button-blog-next",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 1,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 2,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 2,
    },
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");
document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});
