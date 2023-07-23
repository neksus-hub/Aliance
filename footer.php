<section class="cta">
      <div class="bg-grey section-cta">
        <img src="./img/cta.png" alt="call to action" class="cta-img" />
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="post" class="cta-form">
            <h2 class="section-title form-title">Хотите сотрудничать?</h2>
            <p class="form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="user-name"
                  type="text"
                  class="input"
                  placeholder=" "
                  name="username"
                />
                <label
                  class="input-group-label"
                  for="user-name"
                  class="user-name"
                  >Имя</label
                >
              </div>
              <div class="input-group">
                <input
                  id="user-phone"
                  type="tel"
                  class="input"
                  placeholder=" "
                  name="userphone"
                />
                <label
                  class="input-group-label"
                  for="user-phone"
                  class="user-name"
                  >Номер телефона</label
                >
              </div>
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <div class="notify-icon">
                  <svg height="14px" width="14px">
                    <use href="./img/sprite.svg#shield"></use>
                  </svg>
                </div>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="footer-top-wrapper">
          <div class="footer-top">
            <svg class="logo-svg logo-footer" width="140px" height="44px">
              <use href="./img/sprite.svg#logo-dark"></use>
            </svg>
            <a href="tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
            <div class="footer-info">
              <svg class="footer-info-icon" height="20px" width="20px">
                <use href="./img/second-sprite.svg#mark"></use>
              </svg>
              <address class="footer-info-adress">
                г. Мосвка, Холодильный пер. 4к1с8
              </address>
            </div>
            <!-- /.footer-info -->
            <div class="footer-info">
              <svg class="footer-info-icon" height="20px" width="20px">
                <use href="./img/second-sprite.svg#mail"></use>
              </svg>
              <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-mail"
                >a.dragunov@tdaliance.ru</a
              >
            </div>
            <div class="footer-social">
              <a href="#" class="footer-social-link">
                <svg class="footer-info-icon" height="20px" width="20px">
                  <use href="./img/second-sprite.svg#vk"></use>
                </svg>
              </a>
              <a href="#" class="footer-social-link">
                <svg class="footer-info-icon" height="20px" width="20px">
                  <use href="./img/second-sprite.svg#inst"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- /.footer-top-wrapper -->
      </div>
      <hr color="#ebebf0" class="footer-seporator footer-seporator-first" />
      <div class="container">
        <div class="footer-bottom">
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-colum-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->

          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper footer-menu-wrapper-marks">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper footer-menu-wrapper-third">
            <ul class="footer-menu-list footer-menu-list-third">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
      </div>
      <hr color="#ebebf0" class="footer-seporator footer-seporator-second"></hr>
      <div class="container">
        <!-- /.footer-wrapper -->
        <div class="footer-wrapper footer-wrapper-legal">
          <div class="legal">
            <div class="legal-text">
              <p class="copyright">
                &#169; <?php echo date('d.m.y')?> «Aliance Production». Все права защищены.
              </p>
            </div>
            <div class="legal-link">
              <a href="#" class="footer-policy">Политики конфиденциальности</a>
            </div>
          </div>
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg class="made-in-icon" height="11px" width="52px">
              <use href="./img/sprite.svg#RUSO"></use>
            </svg>
          </div>
        </div>
        <!-- /.footer-wrapper -->
      </div>
    </footer>