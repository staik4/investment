<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INSVESTMENT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/chartist/dist/chartist.min.css">
    <script type="text/javascript"></script>
  </head>
  <body>
    <!-- <div class="arrow-top hide"><img src="img/arrow-up.svg" alt=""></div> -->
    <div class="body-layout"></div>


    <div class="container" id="logo">
      <div class="row d-flex justify-content-center">
        <div class="logo d-flex flex-column" style="padding: 20px 0 20px 0">
          <img src="img/luchshee-mesto-logo.svg" alt="Лучшее место" style="width: 500px;">
          <span style="color:#06426c; font-weight: bold; font-size: 14px; text-align:center; margin-left: 35px;">c 2011 года<br></span>
          <span style="margin-left:30px; font-weight: bold; color:#06426c; font-size: 48px; text-align:center;display:block; margin-top: 10px; font-family: BebasNeueRegular">ИНВЕСТИЦИИ </span>
        </div>
      </div>
    </div>

    <section id="header">
      <div class="container">
        <div class="row">
          <div class="nav navigation-header d-flex align-items-center justify-conten-around" style="width: 100%">
            <div class="logo-tip col-xl-1 hide">
              <div class="logo-img">
                <img src="img/logotip-white.svg" alt="Лучшее место">
              </div>
            </div>
            <div class="navv col-xl-8">
              <ul class="ul-nav d-flex justify-content-between">
                <li class="li-nav" style="margin-left: 30px;"><a href="#unique-offer">Условия инвестирования</a></li>
                <li class="li-nav"><a href="#projects">Проекты</a></li>
                <li class="li-nav"><a href="#projects-payback">Доходность</a></li>
                <li class="li-nav"><a href="#feedback">Контакты</a></li>
              </ul>
            </div>
            <div class="col-xl-4 head-contacts">
              <div class="tel d-flex justify-content-center"><img src="img/telephone.svg" alt="phone" style="width: 22px; height: 22px; margin: 0 10px 0 0; cursor: pointer"><span style="font-size: 22px; font-weight: bold; font-family:BebasNeueRegular; letter-spacing: 2px;">+7(495)-369-3235</span></div>
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
              <form class="form-request-form" action="">
                <span>ПОЛУЧИТЬ ПРЕЗЕНТАЦИЮ</span>
                <input placeholder="Введите Ваше имя" class="" type="text" name="name" value="">
                <input placeholder="Введите Ваш email" class="" type="email" name="email" value="">
                <input placeholder="Введите Ваш телефон" class="" type="tel" name="tel" value="">
                <input class="btn-first-form" type="submit" name="" value="ОТПРАВИТЬ" disabled="true">
              </form>
            </div>
            <div class="slider-annimation wrapper d-flex">
              <div class="slogan_0 slide-item d-flex align-items-center" data-slide="0">
                <div class="fadeIn slogan bestmesto-slogan">
                  <div class="layout-slogan"></div>
                  <span>ЛУЧШЕЕ МЕСТО <br>ДЛЯ ВАШИХ ИНВЕСТИЦИЙ</span>
                </div>
              </div>
              <div class="slogan_1 slide-item d-flex align-items-center" data-slide="1">
                <div class="slogan">
                  <div class="layout-slogan"></div>
                  <span>Слоган_1</span>
                </div>
              </div>
              <div class="slogan_2 slide-item d-flex align-items-center" data-slide="2">
                <div class="slogan">
                  <div class="layout-slogan"></div>
                  <span>Слоган_2</span>
                </div>
              </div>
              <div class="slogan_3 slide-item d-flex align-items-center" data-slide="3">
                <div class="slogan">
                  <div class="layout-slogan"></div>
                  <span>Слоган_3</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="unique-offer">
      <div class="container">
        <div class="row">
          <div class="unique-offer d-flex flex-column">
            <div class="unique-title">
              <span>УСЛОВИЯ ИНВЕСТИРОВАНИЯ</span>
            </div>
            <div class="investment-conditions">
              1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita debitis illo facilis nobis, cupiditate saepe, corporis numquam dolores. Soluta autem consequuntur, adipisci, sunt odit vel voluptate nostrum id temporibus tempora!<br>
              2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita debitis illo facilis nobis, cupiditate saepe, corporis numquam dolores. Soluta autem consequuntur, adipisci, sunt odit vel voluptate nostrum id temporibus tempora!<br>
              3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita debitis illo facilis nobis, cupiditate saepe, corporis numquam dolores. Soluta autem consequuntur, adipisci, sunt odit vel voluptate nostrum id temporibus tempora!<br>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="projects">
      <div class="container">
        <div class="row">
          <div class="projecs-title col-xl-12">
            <span>ПРОЕКТЫ ЛУЧШЕГО МЕСТА</span>
          </div>
        </div>
        <div class="row d-flex justify-content-center" style="position:relative">
          <div class="description-project d-flex flex-column" data-prnum="1">
            <div class="item-desc-projects desc-prijects-description">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <div id="desc-holhouse" class="text-desc">
                <div id="" class="content-desc-pr">
                  <p class="text-justify">Загородный комплекс <strong>«Платов»</strong> — это 33 гектара земли. Одно из самых чистых мест Подмосковья находится всего в полутора часах от МКАД.</p>
                  <p class="text-justify">Прозрачный воздух, нетронутая природа, охраняемые места миграции диких животных, прекрасная экология, чистейшее Можайское водохранилище <strong><i>(40 километров длиной!)</i></strong>
                      - вот далеко не полный перечень достоинств месторасположения комплекса «Платов». Место, где рождалась славная история России - Бородинское поле, монастыри Можайска
                      - само окружение комплекса уже делает это место уникальным!</p>
                  <div class="d-flex justify-content-between">
                    <div class="img-desc-houholi col-xl-6">
                      <div>
                        <img src="img/desc/houholi.jpg" alt="" class="img-thumbnail">
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <p class="text-justify"><strong>«Платов»</strong> - лучшее место и для спокойного семейного отдыха с детьми, и для активного отдыха, а также для проведения корпоративных мероприятий.
                        Сосновый бор, чистейший воздух, развитая инфраструктура и высочайший уровень сервиса - сюда непременно захочется вернуться!</p>
                        <p style="line-height: 1.6; font-size: 18px">Создаваемая инфраструктура:
                          <ul class="">
                            <li class="">внешнее ограждение по периметру;</li>
                            <li class="">дороги с твердым покрытием (щебень);</li>
                            <li class="">детские площадки;</li>
                            <li class="">КПП на въезде;</li>
                            <li class="">площадка для стоянки гостевых автомобилей;</li>
                          </ul>
                    </div>
                  </div>

                  <p class="text-justify" style="font-weight: bold">Загородный комплекс «Платов» на берегу Можайского моря — это идеальное место для семейного отдыха вдали от города с его ежедневными проблемами, пробками, шумом и пылью. Другая среда на доступном расстоянии от Москвы.
                  Комплекс «Платов» — это высочайший уровень сервиса для отдыхающих.</p>
                </div>
              </div>
            </div>
            <div class="item-desc-projects advan">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <div id="text-advan-houholi" class="content-desc-pr">
                  <p class="text-justify">В раздел «Преимущества» Дом отдыха:</p>
                  <ul>
                    <li>великолепная природа;</li>
                    <li>экологическая чистота;</li>
                    <li>отличная транспортная доступность;</li>
                    <li>развитая инфраструктура;</li>
                    <li>берег Можайского водохранилища;</li>
                    <li>возможность круглогодичного проживания;</li>
                    <li>интерактивные развлечения для проживающих;</li>
                    <li>система «все включено»;</li>
                    <li>круглосуточная охрана территории комплекса;</li>
                    <li>1,5 часа езды от МКАД;</li>
                    <li>магистральный газ;</li>
                    <li>демократичные цены.</li>
                  </ul>

                  <p class="text-justify">Инвестировать в комплекс на начальном этапе со скидкой 50% — значит совершить выгодное вложение в недвижимость и инфраструктуру отдыха,
                                          что через три-четыре года принесет вам достойную прибыль!</p>
              </div>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/houHolGenPlan.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div>
            <button class="btn-close-desc">Close</button>
            <!-- <button class="hide" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button> -->
          </div><!--description-project-one-->

          <div class="description-project d-flex flex-column" data-prnum="2">
            <div id="desc-levashovo" class="content-desc-pr">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <span><p>Дачный посёлок Левашово — это 29,2 гектара земли, на которой начинается строительство загородных домов.
                153 участка в одном из уникальных уголков Московской области — в Можайском районе, в 400 метрах от Можайского моря.
                В Левашово на Можайском водохранилище вы сможете дышать чистейшим воздухом - здесь удалось сохранить девственную природу, чистый водоем и прекрасную экологию.
                Сам поселок отделен от береговой линии искусственным лесопарком, в котором можно гулять в любое время года.</p></span>
              <div class="d-flex flex-wrap">
                <div class="col-xl-6">
                  <img src="img/desc/levash-desc.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-xl-6 desc-lev-part2 d-flex align-items-center">
                  <div>
                    <p>Создаваемая инфраструктура:</p>
                    <ul>
                      <li>внешнее ограждение по периметру;</li>
                      <li>дороги с твердым покрытием (щебень);</li>
                      <li>детские площадки;</li>
                      <li>КПП на въезде;</li>
                      <li>площадка для стоянки гостевых автомобилей </li>
                    </ul>
                  </div>
                </div>
              </div>
              <br><br>
              <p>Дачный поселок вблизи Можайского моря — это идеальное место для тихого семейного отдыха, вдали от шумного мегаполиса с его ежедневной сутолокой, пробками, шумом и пылью.
                 Левашово — это доступное и качественное загородное жилье в одном из лучших мест Подмосковья.</p>
            </div>
            <div id="adv-levashovo" class="content-desc-pr">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <ul>
                <li>великолепная природа;</li>
                <li>экологическая чистота;</li>
                <li>отличная транспортная доступность;</li>
                <li>развитая инфраструктура;</li>
                <li>близость водоема;</li>
                <li>возможность круглогодичного проживания;</li>
                <li>круглосуточная охрана территории поселка;</li>
                <li>1,5 часа езды от МКАД;</li>
                <li>оптимальное расположение дачи для жителей западного административного округа Москвы;</li>
                <li>демократичные цены.</li>
              </ul>
              <p>Инвестировать в  Левашово на начальном этапе со скидкой 50% — значит совершить выгодное вложение в недвижимость,
                 которая со временем будет только расти в цене, ведь Можайское направление является одним из самых популярных и быстро развивающихся в Подмосковье.</p>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/levashGenPlan.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <button class="btn-close-desc">Close</button>
            <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div>
          </div><!--description-project-two-->



          <div class="description-project  d-flex flex-column" data-prnum="3">
            <div id="desc-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <span>
                <p>Проект «Остров» — это на самом деле остров на Волге!
                  Многие первым делом подумают, что это очень далеко, а это всего в 130 км от МКАД! В получасе езды от г.Дубна Москвской области. Кстати, в городе, в районе Особой экономической зоны «Дубна», строится новый мостовой переход, что сделает ваш Остров еще ближе.
                  42 гектара земли, береговая линия длиной 5500м (да-да, Пять с половиной километров периметр Острова!), ширина Волги 600 метров, белоснежные круизные теплоходы… Класс!
                </p>
              </span>
              <div class="d-flex flex-wrap">
                <div class="col-xl-6">
                  <img src="img/desc/island-desc.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-xl-6 desc-lev-part2 d-flex align-items-center">
                  <div>
                    <p>Создаваемая инфраструктура:</p>
                    <ul>
                      <li>внешнее ограждение по периметру - ах, да, этого не нужно - Остров же!;</li>
                      <li>дороги с твердым покрытием (щебень);</li>
                      <li>детские площадки;</li>
                      <li>КПП на въезде;</li>
                      <li>площадка для стоянки гостевых автомобилей </li>
                      <li>причальная инфраструктура;</li>
                      <li>прогулочная зона на протяжении всего берега;</li>
                      <li>рекреационные зоны на территории с площадками для барбекю;</li>
                      <li>пляжи.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <br><br>
              <p>  Всего 100 участков на 22-х гектарах земли, остальное - природа, общественные зоны, пляжи, причалы.
                В 8-ми километрах - город Кимры, районный центр с развитой городской инфраструкторой.
                Идеальный подъезд по Дмитровскому шоссе.</p>
            </div>
            <div id="adv-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <ul>
                <li>великолепная природа;</li>
                <li>экологическая чистота;</li>
                <li>отличная транспортная доступность;</li>
                <li>развитая инфраструктура;</li>
                <li>близость водоема;</li>
                <li>возможность круглогодичного проживания;</li>
                <li>круглосуточная охрана территории поселка;</li>
                <li>2 часа езды от МКАД;</li>
                <li>со всех сторон - Волга!</li>
                <li>Большая Волга!</li>
              </ul>
              <p>Инвестировать в  Остров на начальном этапе — значит совершить выгодное вложение в недвижимость,
                 которая со временем будет только расти в цене, ведь все больше людей хотят найти свое место для уединения. Что может быть лучше чем остров, вокруг которго течет река Волга?!!!</p>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/islandGenPlan-1.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <button class="btn-close-desc">Close</button>
            <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div>
          </div><!--description-project-three-->


          <div class="description-project d-flex flex-column" data-prnum="4">
            <div id="desc-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <span>
                <p>Устроить сплав по извилистой реке, насладиться великолепными пейзажами во время лесной прогулки, отправиться на тихую охоту или охоту на уток, удить рыбу на утренней зорьке, собирать ягоды, купаться и загорать на обустроенном пляже всей семьей. Санаторий, курорт, думаете вы. Настоящий отдых ближе, чем вам кажется. Ярким и насыщенным каждый ваш день сделает коттеджный поселок Сергово.
                  В 100 километрах от МКАД, на берегу чистейшей реки Искона, в окружении густого и красивого леса, вдали от городской суеты раскинулся строящийся КП «Сергово».Это поистине идеальный уголок Подмосковья для комфортной и легкой загородной жизни.
                </p>
              </span>
              <div class="d-flex flex-wrap">
                <div class="col-xl-6">
                  <img src="img/desc/serg-desc.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-xl-6 desc-lev-part2 d-flex align-items-center">
                  <div>
                    <p>Создаваемая инфраструктура:</p>
                    <ul>
                      <li>внешнее ограждение по периметру;</li>
                      <li>дороги с твердым покрытием;</li>
                      <li>детские площадки;</li>
                      <li>КПП на въезде;</li>
                      <li>площадка для стоянки гостевых автомобилей </li>
                      <li>причальная инфраструктура;</li>
                      <li>газоснабжение поселка;</li>
                      <li>уличное освещение.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <br><br>
              <p>Земельные участки и загородные дома на берегу реки Искона станут тихим и уютным местом отдыха для всей семьи.
                 140 участков в излучине красивейшей реки - уникальное предложение!</p>
            </div>
            <div id="adv-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <ul>
                <li>магистральное газоснабжение;</li>
                <li>электроснабжение 15 КВт;</li>
                <li>внутрипоселковые дороги с твердым покрытием на территории поселка;</li>
                <li>круглосуточная охрана территории;</li>
                <li>круглосуточная охрана территории;</li>
                <li>рекреационная зона на берегу Исконы;</li>
                <li>круглосуточная охрана территории поселка;</li>
                <li>транспортная доступность;</li>
                <li>не более двух часов езды от Москвы.</li>
              </ul>
              <p>Инвестировать в  Остров на начальном этапе — значит совершить выгодное вложение в недвижимость,
                 которая со временем будет только расти в цене, ведь все больше людей хотят найти свое место для уединения. Что может быть лучше чем остров, вокруг которго течет река Волга?!!!</p>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/houHolGenPlan.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <button class="btn-close-desc">Close</button>
            <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div>
          </div><!--description-project-four-->

          <div id="holiday-house" class="col-xl-6 projects-item" data-project="1">
            <div class="title-projects">
              <span class="title-mane-projects">ДОМ ОТДЫХА<br>28%</span><br>
              <!-- <span class="proz">18%</span> -->
            </div>

          </div>
          <div id="levashovo" class="col-xl-6 projects-item" data-project="2">
            <div class="title-projects">
              <span class="title-mane-projects">ЛЕВАШОВО<br>18%</span><br>
              <!-- <span class="proz">24%</span> -->
            </div>

          </div>
          <div id="island" class="col-xl-6 projects-item" data-project="3">
            <div class="title-projects">
              <span class="title-mane-projects">ОСТРОВ<br>32%</span><br>
              <!-- <span class="proz">20%</span> -->
            </div>

          </div>
          <div id="troiza" class="col-xl-6 projects-item" data-project="4">
            <div class="title-projects" >
              <span class="title-mane-projects">СЕРГОВО<br>38%</span><br>
              <!-- <span class="proz">28%</span> -->
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

        <!-- <div class="row">
          <div class="calculator">
            <div class="start-button">
              <button type="button" name="button">Калькулятор</button>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <!-- <section id="projects-payback">
      <div class="container">
        <div class="row">
          <div class="projecs-title col-xl-12">
            <span>РАССЧИТАЙТЕ СВОЮ ПРИБЫЛЬ!</span>
          </div>
        </div>
        <div class="row">
          <div class="calculator col-xl-4">
            <div class="calc-design d-flex flex-column justify-content-around align-items-center">
              <span>КАЛЬКУЛЯТОР ДОХОДНОСТИ</span>
              <select class="volume-of-invest" name="">
                <option value = "clear">Выберите сумму инвестиций</option>
                <option value="3000000">3 000 000</option>
                <option value="6000000">6 000 000</option>
                <option value="9000000">9 000 000</option>
                <option value="12000000">12 000 000</option>
              </select>
              <select class="select-projects" name="">
                <option value = "clear">Выберите проект</option>
                <option value="ДОМ ОТДЫХА">ДОМ ОТДЫХА</option>
                <option value="ЛЕВАШОВО">ЛЕВАШОВО</option>
                <option value="ОСТРОВ">ОСТРОВ</option>
                <option value="ТРОИЦА">ТРОИЦА</option>
              </select>
              <select class="per-year-invest" name="">
                <option value ="clear">Выберите срок для расчета</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="10">10</option>
                <option value="15">15</option>
              </select>
              <button data-charts = "0" id="calculate" type="button" name="button">Расчитать доход</button>
              <button id="clear-form" type="button" name="button">Очистить расчеты</button>
            </div>
          </div>
          <div class="arrow col-xl-1 d-flex align-items-center">
            <div class="img-arrow " style="width:100%;">
              <img src="img/arrow-button.svg" alt="" style="width:100%;">
            </div>
          </div>
          <div class="calculator-graph col-xl-7 d-flex justify-content-center">
            <div class="graph">
              <div class="chartist"></div>
            </div>
          </div>
          <div class="table-calc col-xl-12">
            <div class="row-table-main" style="width: 100%">
              <div class="table-head col-xl-4">
                ПРОЕКТ/ПЕРИОД
              </div>
              <div class="year col-xl-1">2</div>
              <div class="year col-xl-1">3</div>
              <div class="year col-xl-1">4</div>
              <div class="year col-xl-1">5</div>
              <div class="year col-xl-1">6</div>
              <div class="year col-xl-1">7</div>
              <div class="year col-xl-1">10</div>
              <div class="year col-xl-1">15</div>
            </div>
          </div>
        <div class="cop-table" style="width: 100%; position:relative;">
          <div class="table-calc-cop">
            <div class="table-cop-layout col-xl-12"><span>ПРИМЕР</span></div>
            <div class="row-table-main-cop" style="width: 100%; opacity: 1; display: flex;">
              <div class="table-head col-xl-4">ПРОЕКТ/ПЕРИОД</div>
              <div class="year col-xl-1">2</div>
              <div class="year col-xl-1">3</div>
              <div class="year col-xl-1">4</div>
              <div class="year col-xl-1">5</div>
              <div class="year col-xl-1">6</div>
              <div class="year col-xl-1">7</div>
              <div class="year col-xl-1">10</div>
              <div class="year col-xl-1">15</div>
            </div>

            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ДОМ ОТДЫХА</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">1635948</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">2453922</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
            </div>
            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ДОМ ОТДЫХА</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">1635948</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">2453922</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">3271896</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
            </div>
            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ДОМ ОТДЫХА</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">1635948</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">2453922</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">3271896</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">4089870</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">4907844</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">5725818</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
            </div>
            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ОСТРОВ</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">4907844</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">7361766</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">9815688</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">12269610</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">14723532</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">17177454</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">24539220</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">36808830</div>
            </div>
            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ОСТРОВ</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">4907844</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">7361766</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">9815688</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">12269610</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
            </div>
            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ДОМ ОТДЫХА</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">4907844</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">7361766</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">9815688</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">12269610</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">14723532</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">17177454</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
            </div>
            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ЛЕВАШОВО</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">4907844</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">7361766</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
            </div>
            <div class="row-table-cop d-flex flex-row justify-content-around" style="width: 100%; border-top: 0px; opacity: 1;">
              <div style="border-top: 0; font-size: 14px;" class="table-head col-xl-4">ТРОИЦА</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">4907844</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">7361766</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">9815688</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">12269610</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">14723532</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">17177454</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
              <div style="border-top: 0; font-size: 14px;" class="year col-xl-1">—</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section> -->
    <section id="feedback">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="form">
            <form class="d-flex flex-column feedback-form" action="">
              <span>Отправьте заявку, чтобы счтать участником программы</span>
              <input placeholder="Введите Ваше имя" class="feedback-item" type="text" name="name" value="">
              <input placeholder="Введите Ваш email" class="feedback-item" type="email" name="email" value="">
              <input placeholder="Введите Ваш телефон" class="feedback-item" type="tel" name="tel" value="">
              <button class="feedback-item" type="submit" name="submit" value="" disabled="true">ОТПРАВИТЬ ЗАЯВКУ</button>
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
    <script src="js/calculator.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/chartist/dist/chartist.min.js"></script>
  </body>
</html>
