<section class="cta">
      <div class="bg-grey section-cta">
        <picture class="cta-img">
          <source type="image/webp" srcset="img/cta.webp" class="cta-img">
          <source type="image/png" srcset="img/cta.png" class="cta-img">
          <img src="img/cta.png" alt="founder" class="cta-img">
        </picture>
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
                  required
                  maxlength = "50"
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
                  class="input phone-mask"
                  placeholder=" "
                  name="userphone"
                  required
                  maxlength="30"
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
              <button type="submit" class="button cta-form-button" >
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
