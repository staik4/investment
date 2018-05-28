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
                <li class="li-nav"><a href="#">Окупаемость проектов</a></li>
                <li class="li-nav"><a href="#">Связаться с нами</a></li>
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
          <div class="slider visible-part" data-slider="0">
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
        <div class="row d-flex">
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
            <div class="title-projects">
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
            <div class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3">
              <span>ДОМ ОТДЫХА</span>
            </div>
            <div class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3">
              <span>ЛЕВАШОВО</span>
            </div>
            <div class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3">
              <span>ОСТРОВ</span>
            </div>
            <div class="d-flex justify-content-center align-items-center memu-payback-item col-xl-3">
              <span>ТРОИЦА</span>
            </div>
          </div>
          <div class="proj-payback">
            <div class="projects-payback-item" data-prpayback="holidayhome">

            </div>
            <div class="projects-payback-item" data-prpayback="levashovo">

            </div>
            <div class="projects-payback-item" data-prpayback="island">

            </div>
            <div class="projects-payback-item" data-prpayback="troiza">

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
              <input placeholder="Введите Ваше ФИО" class="form-control feedback-item" type="text" name="name" value="">
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
          <div class="maps">
            <div class="location">

            </div>
            <div class="contacts">

            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="soc-media">
            <div class="facebook">
              <div class="icon-soc-media"></div>
            </div>
            <div class="telegram">
              <div class="icon-soc-media"></div>
            </div>
            <div class="vk">
              <div class="icon-soc-media"></div>
            </div>
            <div class="ok">
              <div class="icon-soc-media"></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
