<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INSVESTMENT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section id="header">
      <div class="container">
        <div class="row">
          <div class="nav navigation-header d-flex align-items-center" style="width: 100%">
            <div class="logo col-xl-2">
              <div class="logo-img">
                <img src="img/luchshee-mesto-logo.svg" alt="Лучшее место">
              </div>
            </div>
            <div class="col-xl-7">
              <ul class="ul-nav d-flex justify-content-between">
                <li class="li-nav active-li"><a href="#">Главная</a></li>
                <li class="li-nav"><a href="#">Проекты</a></li>
                <li class="li-nav"><a href="#">Доходность</a></li>
                <!-- <li class="li-nav"><a href="#">Связаться с нами</a></li> -->
                <li class="li-nav"><a href="#">Контакты</a></li>
              </ul>
            </div>
            <div class="col-xl-3 head-contacts">
              <div class="tel"><span>+7(495)-369-3235</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="slider visible-part d-flex align-items-center" data-slider="0">
            <div class="form-request">
              <form class="form-request-form form-control" action="">
                <input placeholder="Введите Ваше имя" class="form-control" type="text" name="name" value="">
                <input placeholder="Введите Ваш email" class="form-control" type="email" name="email" value="">
                <input placeholder="Введите Ваш телефон" class="form-control" type="tel" name="tel" value="">
                <input class="btn btn-primary" type="submit" name="" value="УСПЕЙТЕ ВЗЯТЬ ТАЛОН" disabled="true">
              </form>
            </div>
            <div class="wrapper d-flex">
              <div class="slide-item d-flex align-items-center" data-slide="0">
                <div class="fadeIn slogan"><span>Слоган_0</span></div>
              </div>
              <div class="slide-item d-flex align-items-center" data-slide="1">
                <div class="slogan"><span>Слоган_1</span></div>
              </div>
              <div class="slide-item d-flex align-items-center" data-slide="2">
                <div class="slogan"><span>Слоган_2</span></div>
              </div>
              <div class="slide-item d-flex align-items-center" data-slide="3">
                <div class="slogan"><span>Слоган_3</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="projects">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="description-project" data-prnum="1">
            <span>1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>

            <button>Close</button>
          </div>
          <div class="description-project" data-prnum="2">
            <span>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laborum ea cum eligendi nam eveniet officiis maxime voluptatibus, minus alias!</span>
            <button>Close</button>
          </div>
          <div class="description-project" data-prnum="3">
            <span>3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate quia nostrum iure laboriosam ipsa, nulla dignissimos consectetur illo magni!</span>
            <button>Close</button>
          </div>
          <div class="description-project" data-prnum="4">
            <span>4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati minima, inventore pariatur error aspernatur officia asperiores esse. Vero, perferendis, suscipit!</span>
            <button>Close</button>
          </div>

          <div class="col-xl-6 projects-item" data-project="1">
            <div class="title-projects">
              <span>ДОМ ОТДЫХА</span>
            </div>
          </div>
          <div class="col-xl-6 projects-item" data-project="2">
            <div class="title-projects">
              <span>ЛЕВАШОВО</span>
            </div>
          </div>
          <div class="col-xl-6 projects-item" data-project="3">
            <div class="title-projects">
              <span>ОСТРОВ</span>
            </div>
          </div>
          <div class="col-xl-6 projects-item" data-project="4">
            <div class="title-projects" >
              <span>ТРОИЦА</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="projects-payback">
      <div class="container">
        <div class="row">
          <div class="menu-payback d-flex justify-content-between" style="width:100%">
            <div data-menupayback="holidayhome" class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3 active-memu-payback-item">
              <span>ДОМ ОТДЫХА</span>
            </div>
            <div data-menupayback="levashovo" class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3">
              <span>ЛЕВАШОВО</span>
            </div>
            <div data-menupayback="island" class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3">
              <span>ОСТРОВ</span>
            </div>
            <div data-menupayback="troiza" class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3">
              <span>ТРОИЦА</span>
            </div>
          </div>
          <div class="proj-payback d-flex justify-content-center align-items-center">
            <div class="projects-payback-item active-projects-payback-item" data-prpayback="holidayhome">
              <span>HOLIDAYHOME</span>
            </div>
            <div class="projects-payback-item" data-prpayback="levashovo">
              <span>LEVASHOVO</span>
            </div>
            <div class="projects-payback-item" data-prpayback="island">
              <span>ISLAND</span>
            </div>
            <div class="projects-payback-item" data-prpayback="troiza">
              <span>TROIZA</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="calculator">
            <div class="start-button">
              <button type="button" name="button">Калькулятор</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="feedback">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="form">
            <form class="form-control d-flex flex-column" action="">
              <input placeholder="Введите Ваше имя" class="form-control feedback-item" type="text" name="name" value="">
              <input placeholder="Введите Ваш email" class="form-control feedback-item" type="email" name="email" value="">
              <input placeholder="Введите Ваш телефон" class="form-control feedback-item" type="tel" name="tel" value="">
              <input class="btn btn-primary feedback-item" type="submit" name="submit" value="ОТПРАВИТЬ ЗАЯВКУ" disabled="true">
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="contacts">
      <div class="container">
        <div class="row">
          <div class="maps" style="width: 100%">
            <div class="contacts">
              <div class="layout-contacts"></div>
              <div class="content-contacts">
                <span class="content-contacts-item Adress">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, labore!</span>
                <span class="content-contacts-item name-organization">ЛУЧШЕЕ МЕСТО</span>
                <span class="content-contacts-item email">info@bestmesto.ru</span>
                <span class="content-contacts-item lel-phone">+7(495)-999-5533</span>
              </div>
            </div>
            <div class="location" style="height: 460px;">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab2367ca38be169733757e4326500fcd1702a20e0c7696aff48c2f5ad8963bdeb&amp;source=constructor" width="100%" height="460" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="soc-media">
            <div class="facebook">
              <div class="icon-soc-media">
                <img src="img/icon/facebook.png" alt="">
              </div>
            </div>
            <div class="telegram">
              <div class="icon-soc-media">
                <img src="img/icon/telegram.jpg" alt="">
              </div>
            </div>
            <div class="vk">
              <div class="icon-soc-media">
                <img src="img/icon/vk.jpg" alt="">
              </div>
            </div>
            <div class="ok">
              <div class="icon-soc-media">
                <img src="img/icon/vk.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
