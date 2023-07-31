<div class="container">
  <!-- Основной блок слайдера -->
  <div class="swiper <?= $features_slider_margin?>">
          <!-- обертка -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item <?= $header_features_border_dark?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text_dark;?>">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_border_dark?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#sertificate"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text_dark;?>">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_border_dark?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text_dark;?>">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_border_dark?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#transportation"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text_dark;?>">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_border_dark?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#efficiency"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text_dark;?>">Оперативное производство</p>
            </li>
          </ul>
                  <!-- Переключатели -->
        <div class="slider-buttons">
          <div class="slider-button-prev <?= $slider_button_blue;?>">
            <svg height="24px" width="36px">
              <use href="./img/arrow-sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next <?= $slider_button_blue;?>">
            <svg height="24px" width="36px">
              <use href="./img/arrow-sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
        <!-- /.slider-buttons -->


  </div>
</div>



