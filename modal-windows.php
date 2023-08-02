<div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="modal-close-icon" height="24px" width="24px">
            <use href="./img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group input-group-modal">
              <input
                id="modal-user-name"
                type="text"
                class="input input-modal"
                placeholder=" "
                name = "username"
              />
              <label
                class="input-group-label"
                for="modal-user-name"
                class="user-name"
                >Имя</label
              >
            </div>
            <div class="input-group input-group-modal">
              <input
                id="modal-user-phone"
                type="tel"
                class="input input-modal phone-mask"
                placeholder=" "
                name = "userphone"
              />
              <label
                class="input-group-label"
                for="modal-user-phone"
                class="user-name"
                >Номер телефона</label
              >
            </div>
          </div>
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="modal-notify">
              <div class="notify-icon">
                <svg height="14px" width="14px">
                  <use href="./img/sprite.svg#shield"></use>
                </svg>
              </div>
              <p class="notify-text modal-footer-text">
                Обращаясь к нам вы получаете не только профессиональную
                работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>


    
    <div class="modal-success" id="modal-alert">
      <div class="modal-dialog">
        <a href="" class="modal-close" data-toggle="modal" data-target="#modal-alert">
          <svg class="modal-close-icon" height="24px" width="24px" data-target="#modal-alert">
            <use href="./img/sprite.svg#close"></use>
          </svg>
        </a>
      <div class="modal-img">

        <picture>
          <source type="image/webp" srcset="img/modal-success.webp" class="modal-success-img">
          <source type="image/png" srcset="img/modal-success.png" class="modal-success-img">
          <img src="img/modal-success.png" alt="success" class="modal-success-img">
        </picture>
        
      </div>
      <h2 class="modal-title">Спасибо за заявку!</h2>
      <p class="modal-text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
      <div class="modal-form-footer">
            <a href="/index.php" class="modal-link-success">
            <button type="submit" class="button modal-form-button">
              Вернуться на главную
            </button>
            </a>
            <div class="modal-notify">
              <div class="notify-icon">
                <svg height="14px" width="14px">
                  <use href="./img/sprite.svg#shield"></use>
                </svg>
              </div>
              <p class="notify-text modal-footer-text">
                Обращаясь к нам вы получаете не только профессиональную
                работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
      </div>
      <!-- /.madal-dialog -->
    </div>