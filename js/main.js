const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOne = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "./img/sprite.svg#logo-svg";
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "./img/sprite.svg#logo-light";
};

const openMenu = (event) => {
  // функция открывания меню
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
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOne() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".swiper", {
  speed: 400,
  autoHeigh: true,
  slidesPerView: 1,
  navigation: {
    prevEl: ".slider-button-prev",
    nextEl: ".slider-button-next",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
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
