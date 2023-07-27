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

let currentModal; // текущее модальное окно
let modalDialog; // белое диалоговое окно
let alertModal = document.querySelector("#modal-alert"); // окно с благодарностью
const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатель модальных окон
modalButtons.forEach((button) => {
  /* клик по модальному окну */
  button.addEventListener("click", (event) => {
    event.preventDefault();
    /* определяем текущее открытое окно */
    currentModal = document.querySelector(button.dataset.target);
    /* открываем текущее окно */
    currentModal.classList.toggle("is-open");
    /* назначаем диалоговое окно */
    modalDialog = currentModal.querySelector(".modal-dialog");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("click", (event) => {
      /* если пустая область */
      if (!event.composedPath().includes(modalDialog)) {
        /* закрываем окно */
        currentModal.classList.remove("is-open");
      }
    });
  });
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); // Собираем формы
forms.forEach((form) => {
  // Перебираем все формы
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name = username]", [
      {
        rule: "minLength",
        value: 3,
        errorMessage: "Введите более 3-х символов",
      },
      {
        rule: "maxLength",
        value: 30,
        errorMessage: "Слишком много символов",
      },
      {
        rule: "required",
        errorMessage: "Введите имя",
      },
    ])
    .addField("[name = userphone]", [
      {
        rule: "required",
        errorMessage: "Введите номер телефона",
      },
      {
        rule: "maxLength",
        value: 20,
        errorMessage: "Слишком много символов",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // определяем форму
      const formData = new FormData(thisForm); // данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            currentModal.classList.remove("is-open");
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");

            /* отслеживаем клик по окну и пустым областям */
            currentModal.addEventListener("click", (event) => {
              /* если пустая область */
              if (!event.composedPath().includes(modalDialog)) {
                /* закрываем окно */
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert(response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
