<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500&family=Noto+Sans:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <script>
      /*! modernizr 3.6.0 (Custom Build) | MIT *
      * https://modernizr.com/download/?-webp-setclasses !*/
      !function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
    </script>

    <title>Aliance Production</title>
  </head>
  <body class="front-page">
    <!-- /.mobile-menu -->
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="/about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>

          <!-- /.mobile-submenu -->
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="autohim.php" class="mobile-submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
          <!-- /.mobile-submenu -->
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
          <!-- /.mobile-submenu -->
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
          <!-- /.mobile-submenu -->
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <!-- /.mobile-submenu -->
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="mobile-info-icon" height="24px" width="24px">
          <use href="./img/second-sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-adress">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="mobile-info-icon" height="24px" width="24px">
          <use href="./img/second-sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-mail"
          >a.dragunov@tdaliance.ru</a
        >
      </div>
      <div class="networks">
        <a href="#" class="vk">
          <svg class="mobile-info-icon" height="24px" width="24px">
            <use href="./img/second-sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="inst">
          <svg class="mobile-info-icon" height="24px" width="24px">
            <use href="./img/second-sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.mobile-info -->
    </div>
    <!-- /.mobile-menu -->

    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light" width="140px" height="44px">
          <use href="./img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark" width="140px" height="44px">
          <use href="./img/sprite.svg#logo-dark"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="/about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>

      <div class="header-phone">
        <svg class="phone-icon">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <button class="header-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" height="1.5rem" width="1.5rem">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
      <!-- /.header-button buttone -->
      <!-- /.header-phone -->
    </nav>
    <!-- /.navbar -->

    <header class="header header-img">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-content-title">
            <?php echo "Комплексное обеспечение товарами и расходными материалами бизнеса"; ?>
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="button header-button-contant" data-toggle="modal" data-target="#feedback-modal">
            Подробнее о компании
          </button>
        </div>

        <?php include_once('./templates-parts/features-slider.php');?>

        <!-- /.container -->
      </div>
      <!-- /.container -->
    </header>
    <!-- /.header -->

    <?php include_once('./templates-parts/steps-slider.php');?>

    <?php $cards_title = "Контрактное производство"; include_once('./templates-parts/cards-block.php')?>

    <?php $trademarks_title = "Собственные марки"; include_once('./templates-parts/trademarks-block.php')?>

    <section class="section section-founder">


      <picture>
        <source type="image/webp" srcset="img/founder.webp" class="founder-photo">
        <source type="image/png" srcset="img/founder.png" class="founder-photo">
        <img src="img/founder.png" alt="founder" class="founder-photo">
      </picture>



      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-contant">
            <div class="seporator"></div>
            <h2 class="section-title founder-title">
              отношение к делу и к клиентам
            </h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно.
              Повседневная практика показывает, что укрепление и развитие
              внутренней структуры говорит о возможностях соответствующих
              условий активизации. Внезапно, независимые государства, которые
              представляют собой яркий пример континентально-европейского типа
              политической культуры, будут подвергнуты целой серии независимых
              исследований. С учётом сложившейся международной обстановки,
              синтетическое тестирование выявляет срочную потребность системы
              массового участия.
            </p>
            <p class="founder-text">
              А ещё действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени предоставлены
              сами себе. Не следует, однако, забывать, что выбранный нами
              инновационный путь в значительной степени обусловливает важность
              дальнейших направлений развития.
            </p>
            <a href="#" class="button-link button-link-founder"
              >О нашей миссии</a
            >
          </div>
          <!-- /.fonder-contant -->
        </div>
        <!-- /.founder-content-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.founder -->

    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title clients-title">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-list">
              <li class="clients-item">
                <svg height="29" width="29" class="clients-list-item">
                  <use href="./img/sprite.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#car-clear"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#cosmetic"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#car"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#shirt"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#brics"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-item">
                <svg height="30" width="30" class="clients-list-item">
                  <use href="./img/sprite.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-content -->
          <ul class="clients-logo-list">
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
            <li class="clients-logo-item clients-logo-item-last">
              <a href="#" class="client">
              <picture class="clients-logo">
                <source type="image/webp" srcset="img/colorless.webp" class="clients-logo" >
                <source type="image/png" srcset="img/colorless.png" class="clients-logo" >
                <img src="img/colorless.png" alt="client" class="clients-logo">
              </picture>
              <picture class="clients-logo-color">
                <source type="image/webp" srcset="img/client.webp" class="clients-logo-color" >
                <source type="image/png" srcset="img/client.png" class="clients-logo-color" >
                <img src="img/client.png" alt="client" class="clients-logo-color">
              </picture>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.clients-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section clients-->

    <section class="section section-blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title blog-title">
          Блог экспертов в области производства
        </h2>
        <!-- Slider main container -->
        <div class="swiper swiper-blog">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide card-blog">

            
            <picture class="blog-card-image">
                <source type="image/webp" srcset="img/blog-card-first.webp" class="blog-card-image" class="blog-card-image" class="blog-card-image">
                <source type="image/png" srcset="img/blog-card-first.png" class="blog-card-image" class="blog-card-image" class="blog-card-image">
                <img src="img/blog-card-first.png" alt="blog-card" class="blog-card-image" class="blog-card-image" class="blog-card-image">
            </picture>

            
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide card-blog">
            <picture class="blog-card-image">
                <source type="image/webp" srcset="img/blog-card-second.webp" class="blog-card-image" class="blog-card-image">
                <source type="image/png" srcset="img/blog-card-second.png" class="blog-card-image" class="blog-card-image">
                <img src="img/blog-card-second.png" alt="blog-card" class="blog-card-image" class="blog-card-image">
            </picture>
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="#" class="swiper-slide card-blog">
            <picture class="blog-card-image">
                <source type="image/webp" srcset="img/blog-card-second.webp" class="blog-card-image">
                <source type="image/png" srcset="img/blog-card-second.png" class="blog-card-image">
                <img src="img/blog-card-second.png" alt="blog-card" class="blog-card-image">
            </picture>
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
          </div>

          <div class="blog-slider-footer">
            <a href="./blog.php" class="button-link button-link-blog">Весь блог</a>
            <!-- Переключатели -->
            <div class="slider-buttons-blog primary-buttons-wrapper">
              <div class="slider-button-blog-prev primary-button-prev">
                <svg height="24px" width="24px">
                  <use href="./img/arrow-sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="slider-button-blog-next primary-button-next">
                <svg height="24px" width="24px">
                  <use href="./img/arrow-sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- /.slider-buttons -->
          </div>
          <!-- /.blog-slider-footer -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section -->
    <?php include_once('./templates-parts/cta-section.php');?>
    <?php include_once('footer.php');?>

    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="modal-close-icon" height="24px" width="24px">
            <use href="./img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <form action="handler.php" class="modal-form" method="POST">
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
          <img src="./img/modal-success.png" alt="success" class="modal-success-img">
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
      <!-- /.madal-dialog -->
 


    <script src="js/swiper-bundle-steps.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
