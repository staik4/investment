<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INSVESTMENT</title>
    <!-- asd -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/chartist/dist/chartist.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="js\OwlCarousel\dist\assets\owl.carousel.min.css">
  </head>
  <body>
    <div class="arrow-top hide"><img src="img/arrow-up.svg" alt=""></div>
    <div class="body-layout"></div>
    <div class="layout-mod-web"></div>
    <div class="mod-web">
      <div class="">

        <div class="real-mod-web">
          <div class="close-btn-mod-web">
            <div class="btn-close"></div>
          </div>
          <div class="form-popup">
            <form class="d-flex flex-column feedback-form-popup" action="">
              <span>Напишите нам, если Вы уже выбрали интересующий Вас проект для инвестирования или если у Вас появились вопросы!</span>
              <input placeholder="Ваше имя" class="feedback-item" type="text" name="name" value="">
              <input placeholder="Ваш email" class="feedback-item" type="email" name="email" value="">
              <span class="choose-pr">Уже выбрали проект?</span>
              <select class="choose-projects" name="proojects-name" style="opacity: 0; display: none">
                <option value="Выберите проект" selected>Выберите проект</option>
                <option value="Дом отдыха">Дом отдыха</option>
                <option value="Левашово">Левашово</option>
                <option value="Остров">Остров</option>
                <option value="Сергово">Сергово</option>
              </select>
              <select class="inv-amount" name="inv-amount">
                <option value="none" selected>Сумма инвестиций</option>
                <option value="150000">260 000 рублей</option>
                <option value="300000">520 000 рублей</option>
                <option value="450000">780 000 рублей</option>
                <option value="600000">1 040 000 рублей</option>
                <option value="750000">1 300 000 рублей</option>
                <option value="900000">1 560 000 рублей</option>
                <option value="1050000">1 820 000 рублей</option>
                <!-- <option value="1200000">1200000</option>
                <option value="1350000">1350000</option>
                <option value="1500000">1500000</option> -->
                <option value="more">Более 2 000 000 рублей</option>
              </select>
              <input placeholder="Ваш телефон" class="feedback-item" type="tel" name="tel" value="">
              <textarea placeholder="введите сообщение" class="feedback" name="name" rows="8" cols="15"></textarea>
              <button class="feedback-item" type="submit" name="submit" value="" disabled="true">ОТПРАВИТЬ</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container" id="logo">
      <div class="row d-flex justify-content-center">
        <div class="logo d-flex flex-column" style="padding: 20px 0 20px 0">
          <img src="img/luchshee-mesto-logo.svg" alt="Лучшее место" style="width: 500px;">
          <span style="color:#06426c; font-weight: bold; font-size: 14px; text-align:center; margin-left: 35px;">c 2010 года<br></span>
          <!-- <span style="margin-left:30px; font-weight: bold; color:#06426c; font-size: 48px; text-align:center;display:block; margin-top: 10px; font-family: BebasNeueRegular">ИНВЕСТИЦИИ </span> -->
        </div>
      </div>
    </div>

    <section id="header">
      <div class="container">
        <div class="row">
          <div class="nav navigation-header d-flex align-items-center justify-conten-around" style="width: 100%">
            <div class="burger"><img src="img/menu-button.svg" alt=""></div>
            <div class="logo-tip col-xl-1 col-md-2 col-2 hide">
              <div class="logo-img">
                <img src="img/logotip-white.svg" alt="Лучшее место">
              </div>
            </div>
            <div class="navv col-xl-8 col-12">
              <ul class="ul-nav">
                <!-- <li class="li-nav" style="margin-left: 30px"><a href="#inv">лучшее место</a></li> -->
                <li class="li-nav"><a style="margin-left: 30px" href="#inv">Условия инвестирования</a></li>
                <li class="li-nav"><a href="#projects">Проекты</a></li>
                <!-- <li class="li-nav"><a href="#projects-payback">Доходность</a></li> -->
                <li class="li-nav"><a href="#feedback">Контакты</a></li>
                <li class="li-nav"><a href="#adv-of-us">Преимущества</a></li>
                <li class="li-nav"><a href="#about-us">О НАС</a></li>
              </ul>

            </div>
            <div class="col-xl-4 head-contacts">
              <div class="tel d-flex justify-content-center"><img src="img/telephone.svg" alt="phone" style="width: 22px; height: 22px; margin: 0 10px 0 0; cursor: pointer"><span style="font-size: 22px; font-weight: bold; font-family:BebasNeueRegular; letter-spacing: 2px;">+7(495)-369-3235</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <div class="btn-form-request-fix">
        <div class="pulse">
           <button class="animate-pulse" type="button" name="button">Напишите нам</button>
      </div>
    </div>
    <div class="form-reques-fix">
      <form class="form-request-form" action="">
        <span>ПОЛУЧИТЬ ПРЕЗЕНТАЦИЮ</span>
        <input placeholder="Ваше имя" class="" type="text" name="name" value="">
        <input placeholder="Ваш e-mail" class="" type="email" name="email" value="">
        <input placeholder="Ваш телефон" class="" type="tel" name="tel" value="">
        <input class="btn-first-form" type="submit" name="" value="ОТПРАВИТЬ" disabled="true">
      </form>
    </div>
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="slider visible-part d-flex align-items-center" data-slider="0">
            <!-- <div class="form-request">
              <form class="form-request-form" action="">
                <span>ПОЛУЧИТЬ ПРЕЗЕНТАЦИЮ</span>
                <input placeholder="Ваше имя" class="" type="text" name="name" value="">
                <input placeholder="Ваш e-mail" class="" type="email" name="email" value="">
                <input placeholder="Ваш телефон" class="" type="tel" name="tel" value="">
                <input class="btn-first-form" type="submit" name="" value="ОТПРАВИТЬ" disabled="true">
              </form>
            </div> -->
            <div class="owl-carousel slider-annimation wrapper d-flex">
              <div class=" item slogan_1 slide-item d-flex align-items-center" data-slide="1">
                <div class="fadeInn slogan bestmesto-slogan" style="top: 20px; left: 30px; width: 280px;">
                  <div class="layout-slogan"></div>
                  <span style="color:black;">ЛУЧШЕЕ МЕСТО<br>ДЛЯ ИНВЕСТИЦИЙ<br>=<br>ВЫСОКАЯ ДОХОДНОСТЬ<br>+<br>ВЫСОКАЯ НАДЕЖНОСТЬ!</span>
                </div>
              </div>
              <div class=" item slogan_2 slide-item d-flex align-items-center" data-slide="2">
                <!-- <div class="slogan bestmesto-slogan">
                  <div class="layout-slogan"></div>
                  <span>ЛУЧШЕЕ МЕСТО<br>ДЛЯ ИНВЕСТИЦИЙ = <br>ВЫСОКАЯ ДОХОДНОСТЬ + <br>ВЫСОКАЯ НАДЕЖНОСТЬ!</span>
                </div> -->
                <div class="slogan bestmesto-slogan">
                  <div class="layout-slogan"></div>
                  <span>Ваши вложения, обеспеченные вашей собственностью, обеспечивающей вам стабильных доход!</span>
                </div>
              </div>
              <div class=" item slogan_3 slide-item d-flex align-items-center" data-slide="3">
                <div class="slogan bestmesto-slogan">
                  <div class="layout-slogan"></div>
                  <span>Ваши вложения =<br>
                        Ваша собственность =<br>
                        Ваш доход до 40% годовых!
                  </span>
                </div>
              </div>
              <div class=" item slogan_4 slide-item d-flex align-items-center" data-slide="4">
                <!-- <div class="slogan bestmesto-slogan">
                  <div class="layout-slogan"></div>
                  <span>Уникальная возможность инвестиций в недвижимость.
                  </span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="inv">
      <div class="container">
        <div class="row d-flex flex-wrap inv">
          <div class="col-xl-12 title-desc-investment"><span>Инвестиции в лучшие земельные участки, расположенные у воды в самых красивых местах Подмосковья!</span></div>
          <!-- <div class="col-xl-6 text-inv">
            <span>Инвестиции – одна из основ современной экономики. Без них она просто рухнет.
              Множество вариантов инвестирования, предлагаемых рынком, в первую очередь различаются по надежности и уровню
              доходности вложений. Наиболее надежными считаются инвестиции в золото, государственные облигации,
              банковские депозиты и недвижимость.</span>
          </div>
          <div class="col-xl-6">
            <img class="img-thumbnail" src="img/invest/inv-1.jpg" alt="" style="width: 100%">
          </div>
          <div class="col-xl-6">
            <img class="img-thumbnail" src="img/invest/inv-2.jpg" alt="" style="width: 100%">
          </div>
          <div class="col-xl-6 text-inv">
            <span>Естественно, что надежные инвестиции почти всегда отличаются низким уровнем доходности,
              который порой не превышает инфляцию. Также необходимо понимать, что вложения в государственные
              облигации и депозиты, застрахованные государством, не обладают абсолютной надежностью, не имеют прозрачного
              и очевидного обеспечения и всегда существует риск дефолта.</span>
          </div>
          <div class="col-xl-6 text-inv">
            <span>Инвестиции в недвижимость условно можно разделить на две основные группы. <br>Покупка готовой недвижимости для сдачи в аренду приносит относительно небольшой, но надежный доход, а приобретение жилья или коммерческой недвижимости на начальной стадии строительства, как правило, обладает существенно более высоким уровнем доходности при возрастающих рисках. Инвестируя в землю, стоимость которой должна значительно вырасти в течение нескольких лет, можно объединить преимущества каждой из этих групп. </span>
          </div>
          <div class="col-xl-6">
            <img class="img-thumbnail" src="img/invest/levashovo-min.jpg" alt="" style="width: 100%">
          </div> -->
        </div>
      </div>
    </section>

    <section id="unique-offer">
      <div class="container">
        <div class="row">
          <div class="unique-offer d-flex flex-column">
            <div class="unique-title">
              <span style="color: #007282">ЧТО МЫ ПРЕДЛАГАЕМ</span>
            </div>
            <div class="investment-conditions">
              <p class="text-justify hidden animation-fafeTop">Компания «Лучшее Место» предлагает различные варианты инвестирования в недвижимость Подмосковья (уникальные участки в Можайском районе, на берегах рек и Можайского водохранилища, а также на границе Московской области, на берегу р.Волга) с доходностью до 40% годовых.<p>

              <p class="text-justify hidden animation-fafeTop">Вы приобретаете лот из нескольких земельных участков (или участок в этом лоте) с дисконтом 50% от розничной цены. Мы строим дороги в поселке, устанавливаем ТП и подводим электричество, строим ограждение периметра, входную группу и помещение охраны, оборудуем места для отдыха и прогулок. После этого мы продаем Вашу землю конечным покупателям.</p>
              <p class="text-justify hidden animation-fafeTop">
                Стоимость приобретенного Вами участка после создания инфраструктуры вырастет как минимум в два раза. Максимальный срок реализации земельных участков составляет, в среднем, три года. Таким образом, Ваши вложения, обеспеченные Вашей собственностью, принесут Вам, как минимум, 33% годовых.
              </p>
              <p class="text-justify hidden animation-fafeTop">
                Ускоренной продаже участков после постройки инфраструктуры будет способствовать отсутствие дополнительных платежей при продаже участков (отсутствие взносов в ДНП или других скрытых платежей).
                Минимальный размер инвестиций – 260 000 рублей. Для инвестиционного предложения предназначено не более, чем 20% участков в каждом проекте.
              </p>
              <p class="text-center hidden animation-fafeTop">Особый тип инвестиционного лота -  апартаменты в уникальном историко-архитектурном  многофункциональном комплексе «Платов», расположенном на берегу Можайского водохранилища.  <strong>Инвестиционное предложение ограничено по объему и срокам.</strong> </p>
              <p class="text-center hidden animation-fafeTop" style="width: 100%; font-size: 26px">
                <strong style="font-size: 26px">Мы предлагаем два способа инвестирования:</strong>
              </p>
              <ul>
                <div class="col-xl-12 d-flex flex-wrap">
                  <div class="col-xl-6 d-flex flex-column animation-fadeinleft" style="padding-right:7px;">
                    <div class="item-desc-cond-inv">
                      <li>ПРИОБРЕТЕНИЕ ИНВЕСТИЦИОННОГО ЛОТА</li>
                      <p class="text-justify">
	                       Инвестиционный лот представляет собой пакет из 5 участков, выкупаемых одним инвестором. С инвестором заключается договор купли-продажи земельных участков по цене со скидкой в размере 50% от их минимальной рыночной стоимости (при наличии построенной инфраструктуры).
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-6 d-flex flex-column animation-fadeinright" style="padding-left:7px;">
                    <div class="item-desc-cond-inv">
                      <li>УЧАСТИЕ В ИНВЕСТИЦИОННОМ ПУЛЕ</li>
                      <p class="text-justify">Предложение для инвесторов, предполагающих вложить средства одного или нескольких участков инвестиционного лота. Желающие участвовать в пуле оставляют заявку с указанием суммы инвестиций, и компания подбирает партнеров для совместных инвестиций до целого лота. После формирования пула с каждым со-инвестором заключается договор купли-продажи земельного участка по цене доли со скидкой в размере 50% от ее рыночной стоимости при наличии построенной инфраструктуры.</p>
                    </div>
                  </div>
                  <div class="col-xl-12 footer-cond-inv hidden animation-fadeinUp" >
                    <div class="item-desc-cond-inv">
                      <span><p style="text-indent: 0;">Инвестор может реализовать свой участок (участки) в любой момент, по самостоятельно определяемой цене.</p></span>
                      <span><p style="text-indent: 0;">Компания оказывает содействие инвесторам по реализации их участков покупателям в приоритетном порядке.</p></span>
                    </div>
                  </div>

                  <div class="additional-description-cond-invest hidden animation-fadeinUp">
                    <p class="text-justify">«Лучшее Место» выступает девелопером проектов коттеджных поселков и берет на себя решение всех задач – от первоначального оформления земли, проведения исследований рынка и разработки концепции поселков до запуска рекламы и реализации земельных участков под дачное строительство покупателям.</p>
                    <p class="text-center" style="font-weight:bold; width: 100%; font-size: 26px">Лучшее место для инвестиций: уникальное сочетание надежности и высокой доходности!</p>
                    <span>
                      <h2 class="text-center">Сравним наше предложение с альтернативными вариантами инвестиций:</h2>
                      <ul>
                        <li>Банковский депозит – позволяет сохранить деньги, но обеспечивает минимальную доходность (5-8%), не всегда покрывающую реальную инфляцию.</li>
                        <li>Покупка квартиры для сдачи в аренду – требует высоких стартовых вложений, а доход сопоставим с уровнем реальной инфляции, которая составляет 8%-10%.</li>
                        <li>Вложения в активы в виде драгоценных металлов, камней или антиквариат – связаны зачастую со сложной процедурой их приобретения и дальнейшей реализации, а также во многом зависят от текущей рыночной конъюнктуры. </li>
                        <p class="text-justify" style="">Как мы видим, инвестиции, которые принято считать надежными, не приносят высокого дохода и, как правило, способны лишь сохранить средства.</p>
                        <p class="text-justify" style="">На рынке существует множество предложений, обещающих высокую доходность, но всегда это связано с высоким риском (например, покупка акций, игра на курсах валют, криптовалюты и т. д.). В большинстве случаев такие инвестиции не имеют никакого реального обеспечения, а значит Вы в любой момент можете лишиться всех вложенных средств.</p>
                        <p class="text-justify" style="">Лучшее место для инвестиций - там, где обеспечивается высокий доход в сочетании с безопасностью вложений.</p>
                      </ul>
                    </span>
                  </div>
                </div>
              </ul>

            </div>
          </div>
          <!-- <div class="row" style="width: 100%">
            <div class="unique-offer-projects d-flex flex-row" style="width: 100%">
              <div class="item-uniq-projects col-xl-3 col-md-6 col-12" data-opened="false">
                <div class="title-uniq-item d-flex justify-content-center">
                  <span>ДОМ ОТДЫХА</span>
                </div>
                <div class="desc-uniq-item show-uniq-text">
                  <span class="text-center">
                    Стоимость апартамента - от ХХХХХХ рублей.<br>
                    Срок окупаемости - ХХХХХХ лет.<br>
                    Доходность - ХХХХХ %.<br>
                    Ежегодная капитализация.
                  </span>
                </div>
                <div class="arrow-un-item">
                  <img src="img/icon/sort-down.svg" alt="arrow-btn">
                </div>
                <div class="desc-hidden-uniq text-center">
                  <span>
                    Объекты инвестиций - апартаменты в загородном отеле с развитой инфраструктурой, расположенном в уникальном по красоте месте Можайского района, недалеко от Бородинского поля.
                    Многофункциональный комплекс «Платов» - это инновационный высокодоходный инвестиционный продукт, где объекты недвижимости будут принадлежать своим инвесторам.
                    Мы предлагаем инвестирование в строительство комплекса отдыха, который будет на вас работать после завершения строительства и обеспечивать ваш доход на уровне, кратно большем, чем банковский вклад или покупка жилья для последующей сдачи в аренду.
                    Влияние инфляции на ваш доход будет минимальным, а капитализация будет расти ежегодно!
                  <span>
                </div>
              </div>
              <div class="item-uniq-projects col-xl-3 col-md-6 col-12" data-opened="false">
                <div class="title-uniq-item d-flex justify-content-center">
                  <span>ЛЕВАШОВО</span>
                </div>
                <div class="desc-uniq-item show-uniq-text">
                  <span class="text-center">
                    Всего в инвестиционной программе - 40 участков.<br>
                    Восемь пулов по 5 участков.<br>
                    Инвестиционная стоимость одного пула - <b>ХХХХХХХ</b> рублей, что соответсвует скидке в размере 50% от рыночной цены участка.
                  </span>
                </div>
                <div class="arrow-un-item">
                  <img src="img/icon/sort-down.svg" alt="arrow-btn">
                </div>
                <div class="desc-hidden-uniq text-center">
                  <span>
                      Полученные от инвесторов средства направляются исключительно на создание инфраструктуры поселка - дорог,
                      освещения, охраны периметра поселка, энергоснабжения, обустройство общественных зон и прогулочных,
                      детских площадок, стоянок, организацию работы технических служб в поселке. Работы выполняются в срок 2-3 года.
                      После завершения работ рыночная стоимость участков, принадлежащих инвесторам, возрастает, как минимум, на 100%,
                      что соответствует доходу инвестора в размере 33% годовых.
                  </span>
                </div>
              </div>
              <div class="item-uniq-projects col-xl-3 col-md-6 col-12" data-opened="false">
                <div class="title-uniq-item d-flex justify-content-center">
                  <span>ОСТРОВ</span>
                </div>
                <div class="desc-uniq-item show-uniq-text">
                  <span class="text-center">
                    Всего в инвестиционной программе - <b>ХХХХХ</b> участков.
                    Инвестиционная стоимость одного одного участка - <b>200.000</b> рублей за <b>1 сотку земли</b>, что соответсвует скидке в размере <b>50%</b> от рыночной цены участка.
                  </span>
                </div>
                <div class="arrow-un-item">
                  <img src="img/icon/sort-down.svg" alt="arrow-btn">
                </div>
                <div class="desc-hidden-uniq text-center">
                  <span>
                    Полученные от инвесторов средства направляются исключительно на создание инфраструктуры поселка -
                    дорог, освещения, охраны периметра поселка, энергоснабжения, обустройство общественных зон и прогулочных,
                    детских площадок, стоянок, организацию работы технических служб в поселке. Работы выполняются в срок 2-3 года. После
                    завершения работ рыночная стоимость участков, принадлежащих инвесторам, возрастает, как минимум, на 100%, что соответствует
                    доходу инвестора в размере 33% годовых.
                  </span>
                </div>
              </div>
              <div class="item-uniq-projects col-xl-3 col-md-6 col-12" data-opened="false">
                <div class="title-uniq-item d-flex justify-content-center">
                  <span>СЕРГОВО</span>
                </div>
                <div class="desc-uniq-item show-uniq-text">
                  <span class="text-center">
                    Всего в инвестиционной программе - <b>ХХХХХ</b> участков.<br>
                    Восемь пулов по <b>ХХХХ</b> участков.<br>
                    Инвестиционная стоимость одного пула - <b>ХХХХХХХ</b> рублей, что соответсвует скидке в размере 50% от рыночной цены участка.
                  </span>
                </div>
                <div class="arrow-un-item">
                  <img src="img/icon/sort-down.svg" alt="arrow-btn">
                </div>
                <div class="desc-hidden-uniq text-center">
                  <span>
                    Полученные от инвесторов средства направляются исключительно на создание
                    инфраструктуры поселка - дорог, освещения, охраны периметра поселка, энергоснабжения,
                    обустройство общественных зон и прогулочных, детских площадок, стоянок, организацию работы
                    технических служб в поселке. Работы выполняются в срок 2-3 года. После завершения работ рыночная стоимость участков,
                    принадлежащих инвесторам, возрастает, как минимум, на 100%, что соответствует доходу инвестора в размере 33% годовых.
                  </span>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>



    <section id="projects">
      <div class="container">
        <div class="row">
          <div class="projecs-title col-xl-12 hidden animation-fafeTop">
            <span>ИНВЕСТИЦИОННЫЕ ПРОЕКТЫ ЛУЧШЕГО МЕСТА</span>
          </div>
        </div>
        <div id="project-content" class="row d-flex justify-content-center" style="position:relative">
          <div class="close-btn">
            <img src="img/cancel.svg" alt="" style="width: 30px; height: 30px;">
          </div>
          <div class="description-project d-flex flex-column" data-prnum="1" style="position:relative">
            <div class="item-desc-projects desc-prijects-description">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <div id="desc-holhouse" class="text-desc">
                <div id="" class="content-desc-pr">
                  <p class="text-justify">Загородный комплекс <b>«Платов»</b> включает 33 гектара земли в одном из самых чистых районов Подмосковья, всего в полутора часах от МКАД.</p>
                  <p class="text-justify">Здесь удалось сохранить нетронутую природу и охраняемые места миграции диких животных. Отличная экология, прозрачный воздух, благодаря близости соснового бора, и чистейшее Можайское водохранилище, протянувшееся на <b><em>40 километров!</em></b>Эти места прочно связаны со славной историей России. Бородинское поле и монастыри Можайска, расположенные неподалеку от комплекса, делают его действительно уникальным!</p>
                    <p class="text-justify">«Платов» будет представлять собой многофункциональный комплекс, состоящий из больших корпусов (всего около 250 номеров) и коттеджей. Концепция адаптируется в соответствии с историей Бородинского поля. Инфраструктура будет включать в себя открытый и закрытый бассейны, спа-центр, и другие виды развлечений .  Комплекс предложит отдыхающим высокий уровень сервиса, в том числе питание по системе «все включено».  Все это позволит обеспечить заполнение комплекса и будет приносить прибыль для инвестора в размере <b>25%-30% годовых.</b></p>
                  <div class="d-flex justify-content-between">
                    <div class="img-desc-houholi col-xl-6">
                      <div>
                        <img src="img/desc/houseHiliday-new-min.jpg" alt="" class="img-thumbnail">
                      </div>
                    </div>
                    <div class="col-xl-6 d-flex align-items-center">
                      <span style="display:block"><p class="text-justify"><b>«Платов»</b> станет прекрасным местом для спокойного семейного времяпрепровождения с детьми или активного отдыха с друзьями, а также для проведения корпоративных мероприятий.</p></span>
                      <!-- <p style="line-height: 1.6; font-size: 18px">Создаваемая инфраструктура:
                        <ul class="">
                          <li class="">внешнее ограждение по периметру;</li>
                          <li class="">дороги с твердым покрытием (щебень);</li>
                          <li class="">детские площадки;</li>
                          <li class="">КПП на въезде;</li>
                          <li class="">площадка для стоянки гостевых автомобилей.</li>
                        </ul>
                      </p> -->
                    </div>
                  </div>
                  <p></p>
                  <p class="text-justify">Мы предлагаем инвесторам приобретение номеров (апартаментов) на начальной стадии реализации проекта. После завершения строительства инвестор будет получать доход от сдачи номеров под управлением комплекса.</p>
                  <p class="text-justify" style="font-weight: bold">Загородный комплекс «Платов» на берегу Можайского моря – это идеальное место для отдыха вдали от города с его суетой, пробками, шумом и пылью. Совершенно другая среда для всех категорий отдыхающих на доступном расстоянии от Москвы.</p>
                </div>
              </div>
            </div>
            <div class="item-desc-projects advan">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <div id="text-advan-houholi" class="content-desc-pr">
                  <ul>
                    <li>великолепная природа;</li>
                    <li>экологическая чистота;</li>
                    <li>развитая инфраструктура;</li>
                    <li>берег Можайского водохранилища;</li>
                    <li>возможность круглогодичного проживания;</li>
                    <li>интерактивные развлечения;</li>
                    <li>система «все включено».</li>
                    <!-- <li>круглосуточная охрана территории комплекса;</li>
                    <li>магистральный газ.</li> -->
                  </ul>

                  <p class="text-justify">Загородный комплекс «Платов» – удачный вариант для инвестиций в недвижимость и
                    инфраструктуру, предназначенную для отдыха с отличными перспективами, высоким уровнем надежности и доходности вложений!</p>
              </div>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/house-holi-gen-plan-new.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <!-- <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div> -->
            <!-- <button class="btn-close-desc">Close</button> -->
            <!-- <button class="hide" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button> -->
          </div><!--description-project-one-->

          <div class="description-project d-flex flex-column" data-prnum="2">
            <div id="desc-levashovo" class="content-desc-pr">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <span><p>Дачный поселок «Левашово» – это 29,2 гектара земли, на которой
                уже началось строительство загородных домов. Находится в Можайском районе, в уникальном месте – в первую очередь
                благодаря Можайскому морю, расположенному всего в 400 метрах от Левашово. Жители поселка смогут наслаждаться девственной
                 природой, дышать чистейшим воздухом и по достоинству оценить прекрасную экологию. Поселок отделен от береговой линии
                 искусственным лесопарком, в котором можно гулять в любое время года.</p></span>
              <div class="d-flex flex-wrap">
                <div class="col-xl-6">
                  <img src="img/desc/levash-desc-new-min.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-xl-6 desc-lev-part2 d-flex align-items-center">
                  <div>
                    <p>Создаваемая инфраструктура:</p>
                    <ul>
                      <li>внешнее ограждение по периметру;</li>
                      <li>дороги с твердым покрытием (щебень);</li>
                      <li>детские площадки;</li>
                      <li>КПП на въезде;</li>
                      <li>площадка для стоянки гостевых автомобилей.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <br><br>
              <p>Дачный поселок вблизи Можайского моря – идеальное место для тихого семейного отдыха вдали от
                шумного мегаполиса с его ежедневной суетой, пробками и пылью.
                Левашово – доступное и качественное загородное жилье в одном из лучших районов Подмосковья.</p>
            </div>
            <div id="adv-levashovo" class="content-desc-pr">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <ul>
                <li>великолепная природа;</li>
                <li>экологически чистое место;</li>
                <li>близость Можайского моря;</li>
                <li>развитая инфраструктура;</li>
                <li>близость водоема;</li>
                <li>возможность круглогодичного проживания;</li>
                <li>круглосуточная охрана территории поселка;</li>
                <li>демократичные цены.</li>
              </ul>
              <p>Земля в Левашово – отличный вариант инвестиций в недвижимость, стоимость
                которой в ближайшие годы должна удвоиться благодаря инфраструктуре.
                Также стоит учитывать, что Можайское направление – одно из самых популярных в Подмосковье,
                поэтому стоимость недвижимости здесь растет быстрее, чем в целом по региону.</p>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/levashovo-new.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <button class="btn-close-desc">Close</button>
            <!-- <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div> -->
          </div><!--description-project-two-->



          <div class="description-project  d-flex flex-column" data-prnum="3">
            <div id="desc-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <span>
                <p>Проект «Остров» – это действительно остров на Большой Волге, причем всего в 130 км от МКАД! Это место находится в получасе езды от г. Дубна Московской области, но уже сейчас в районе Особой экономической зоны «Дубна» строится новый мостовой переход, который сделает «Остров» еще ближе. 42 гектара земли с естественным ограждением – береговой линией, растянувшейся на 5,5 км, представляющей собой идеальное место для прогулок. Ширина Волги в этом месте составляет 600 метров, а мимо «Острова» скользят белоснежные круизные теплоходы!
                </p>
              </span>
              <div class="d-flex flex-wrap">
                <div class="col-xl-6">
                  <img src="img/desc/island-desc-new-min.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-xl-6 desc-lev-part2 d-flex align-items-center">
                  <div>
                    <p>Создаваемая инфраструктура:</p>
                    <ul>
                      <!-- <li><span style="text-decoration: line-through;">внешнее ограждение по периметру</span> - ах, да, этого не нужно - Остров же!;</li> -->
                      <li>дороги с твердым покрытием (щебень);</li>
                      <li>детские площадки;</li>
                      <li>КПП на въезде;</li>
                      <li>площадка для стоянки гостевых автомобилей;</li>
                      <li>причальная инфраструктура;</li>
                      <li>прогулочная зона на протяжении всего берега;</li>
                      <li>рекреационные зоны на территории с площадками для барбекю;</li>
                      <li>пляжи.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <br><br>
              <p>Проект включает 100 участков, расположенных на 22 га земли. Остальную территорию (около 20 га) будут занимать общественные зоны и пляжи. В 8 километрах от «Острова» находится город Кимры – районный центр с развитой городской инфраструктурой. Оптимальный маршрут из Москвы проходит по Дмитровскому шоссе.</p>
            </div>
            <div id="adv-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <ul>
                <li>великолепная природа;</li>
                <li>экологическая чистота;</li>
                <li>развитая инфраструктура;</li>
                <li>возможность круглогодичного проживания;</li>
                <li>круглосуточная охрана территории поселка;</li>
                <li>со всех сторон - Волга!</li>
              </ul>
              <p>Инвестиции в проект «Остров» на начальном этапе – отличное вложение в недвижимость, которое всего в течение нескольких лет принесет высокий доход.</p>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/islandGenPlan-1min.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <button class="btn-close-desc">Close</button>
            <!-- <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div> -->
          </div><!--description-project-three-->


          <div class="description-project d-flex flex-column" data-prnum="4">
            <div id="desc-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ОПИСАНИЕ</span>
              </div>
              <span>
                <p>
                  Коттеджный поселок «Сергово» расположен в 100 километрах от МКАД, на берегу чистейшей реки Искона. Этот поистине идеальный уголок Подмосковья, окруженный густым лесом, будет обладать всем необходимым для комфортной и легкой загородной жизни. Жители поселка смогут сплавляться по извилистой реке, наслаждаться великолепными пейзажами во время лесной прогулки, охотиться, рыбачить, собирать ягоды, купаться и загорать на обустроенном пляже всей семьей.
                </p>
              </span>
              <div class="d-flex flex-wrap">
                <div class="col-xl-6">
                  <img src="img/desc/serg-desc-new-min.jpg" alt="" class="img-thumbnail">
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
              <p>Коттеджный поселок на берегу реки Искона будет тихим и уютным местом отдыха для всей семьи. 140 участков в излучине красивейшей реки станут уникальным предложением и существенно вырастут в цене после проведения всех коммуникаций.</p>
            </div>
            <div id="adv-island" class="content-desc-pr">
              <div class="title-desc">
                <span>ПРЕИМУЩЕСТВА ПРОЕКТА</span>
              </div>
              <ul>
                <li>магистральное газоснабжение;</li>
                <li>электроснабжение 15 КВт на участок;</li>
                <li>внутрипоселковые дороги с твердым покрытием на территории поселка;</li>
                <li>круглосуточная охрана территории;</li>
                <li>рекреационная зона на берегу Исконы.</li>
              </ul>
            </div>
            <div class="item-desc-projects gen-plan">
              <div class="title-desc">
                <span>ГЕНЕРАЛЬНЫЙ ПЛАН</span>
              </div>
              <div class="hide img-gen-plan d-flex justify-content-center">
                <div style="width: 50%">
                  <img src="img/gen-plan/houHolGenPlan-min.jpg" class="img-thumbnail" alt="" style="width: 100%">
                </div>
              </div>
            </div>
            <button class="btn-close-desc">Close</button>
            <!-- <div class="hide d-flex justify-content-center"><button class="btn-presentation" type="button" name="button">ПОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ</button></div> -->
          </div><!--description-project-four-->

          <div id="holiday-house" class="col-xl-6 projects-item hidden animation-fadeinleft" data-project="1">
            <div class="title-projects">
              <span class="title-mane-projects">ДОМ ОТДЫХА<br>28%</span><br>
              <!-- <span class="proz">18%</span> -->
            </div>

          </div>
          <div id="levashovo" class="col-xl-6 projects-item hidden animation-fadeinright" data-project="2">
            <div class="title-projects">
              <span class="title-mane-projects">ЛЕВАШОВО<br>32%</span><br>
              <!-- <span class="proz">24%</span> -->
            </div>

          </div>
          <div id="island" class="col-xl-6 projects-item hidden animation-fadeinleft" data-project="3">
            <div class="title-projects">
              <span class="title-mane-projects">ОСТРОВ<br>32%</span><br>
              <!-- <span class="proz">20%</span> -->
            </div>

          </div>
          <div id="troiza" class="col-xl-6 projects-item hidden animation-fadeinright" data-project="4">
            <div class="title-projects" >
              <span class="title-mane-projects">СЕРГОВО<br>32%</span><br>
              <!-- <span class="proz">28%</span> -->
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- <section id="projects-payback">
      <div class="container">
        <div class="row">
          <div class="title-yield">ДОХОДНОСТЬ</div>
        </div>
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
              <span>СЕРГОВО</span>
            </div>
          </div>
          <div class="proj-payback d-flex justify-content-center align-items-center">
            <div class="projects-payback-item active-projects-payback-item" data-prpayback="holidayhome">
              <span>HOLIDAYHOME</span>
            </div>
            <div class="projects-payback-item" data-prpayback="levashovo">
              <div id="lev-chart" class="">
                <span class="mus">руб. за сотку</span>
                <img src="img/chart.png" alt="">
                <span class="year">лет, период</span>
              </div>

            </div>
            <div class="projects-payback-item" data-prpayback="island">
              <span>ISLAND</span>
            </div>
            <div class="projects-payback-item" data-prpayback="troiza">
              <span>SERGOVO</span>
            </div>
          </div>
        </div>

        <!-- <div class="row">
          <div class="calculator">
            <div class="start-button">
              <button type="button" name="button">Калькулятор</button>
            </div>
          </div>
        </div>
      </div>
    </section> -->
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
          <div class="form hidden animation-bounceInDown">

            <form class="d-flex flex-column feedback-form" action="">
              <span>Напишите нам, если Вы уже выбрали интересующий Вас проект для инвестирования или если у Вас появились вопросы</span>
              <div class="inp-feedback-form d-flex align-items-around justify-content-center flex-wrap ">
                <div class="col-xl-6 d-flex flex-column align-items-center justify-content-between">
                  <input placeholder="Ваше имя" class="feedback-item" type="text" name="name" value="">
                  <input placeholder="Ваш email" class="feedback-item" type="email" name="email" value="">
                  <input placeholder="Ваш телефон" class="feedback-item" type="tel" name="tel" value="" style="margin-bottom: 0;">
                </div>
                <div class="col-xl-6 d-flex justify-content-center">
                  <textarea placeholder="Введите текст" name="name" rows="8" cols="13"></textarea>
                </div>
              </div>
              <div id="form-select" class="d-flex flex-wrap" style="width: 100%">
                <div class="col-xl-6 d-flex flex-column align-items-center justify-content-between">
                  <select class="choose-projects-bot" name="proojects-name">
                    <option value="Выберите проект" selected>Выберите проект</option>
                    <option value="Дом отдыха">Дом отдыха</option>
                    <option value="Левашово">Левашово</option>
                    <option value="Остров">Остров</option>
                    <option value="Сергово">Сергово</option>
                  </select>
                </div>
                <div class="col-xl-6 d-flex flex-column align-items-center justify-content-between">
                  <select class="inv-amount-bot" name="inv-amount">
                    <option value="none" selected>Сумма инвестиций</option>
                    <option value="150000">260 000 рублей</option>
                    <option value="300000">520 000 рублей</option>
                    <option value="450000">780 000 рублей</option>
                    <option value="600000">1 040 000 рублей</option>
                    <option value="750000">1 300 000 рублей</option>
                    <option value="900000">1 560 000 рублей</option>
                    <option value="1050000">1 820 000 рублей</option>
                    <!-- <option value="1200000">1200000</option>
                    <option value="1350000">1350000</option>
                    <option value="1500000">1500000</option> -->
                    <option value="more">Более 2 000 000 рублей</option>
                  </select>
                </div>
              </div>
                <button class="feedback-item" type="submit" name="submit" value="" disabled="true">ОТПРАВИТЬ</button>

            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="adv-of-us">
      <div class="container">
        <div class="row">
          <div class="adv-of-us hidden animation-fadeinUp">
            <h1>Ключевые преимущества нашего предложения:</h1>
            <div class="col-12">
              <ul>
                <li><strong>Реальное обеспечение инвестиций</strong> – Вы приобретаете участок земли (апартамент), который сразу оформляется в Вашу собственность.</li>
                <li><strong>Защита от инфляции</strong> – в отличие от бумажных денег, предложение земли ограничено и, как правило, земля только растет в цене.</li>
                <li><strong>Высокая доходность</strong> – создание инфраструктуры в поселках значительно повысит стоимость Вашей земли.</li>
                <li><strong>Надежный партнер</strong> – компания «Лучшее место» работает с 2010 года, обладает значительным реальным опытом и имеет успешно реализованные проекты коттеджных поселков.</li>
              </ul>
              <p class="text-justify">Инвестируя в землю, предназначенную для строительства коттеджных поселков, Вы получите высокий доход с минимальными рисками. В настоящее время необходимым условием продажи земельных участков является наличие развитой инфраструктуры: дорог, освещения, охраны периметра поселка, достаточной присоединенной электрической мощности, общественных зон, магазинов, детских площадок, стоянок и технических служб в поселке. Просто красивой природы и удобного подъезда к участку в текущих рыночных условиях уже недостаточно.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about-us">
      <div class="container">
        <div class="row">
          <div class="title-about-us col-xl-12">
            <span>О НАС</span>
          </div>
          <div class="text-about-us col-xl-12 animation-fadeinleft">
            <span style="width:100%; text-align: center;">Компания <strong>«Лучшее Место»</strong> основана в 2010 году и осуществляет комплексное управление земельными активами. Среди реализуемых проектов - коттеджные поселки в уникальных местах Подмосковья. Они расположены на берегах рек, Можайского моря, а также реки Волга.</span>
          </div>
          <!-- <div class="col-xl-7 animation-fadeinright delay-1s">
            <div class="" style="width: 100%"> -->
              <!-- <img class="img-thumbnail" src="img/aboutus/about-us.jpg" alt="" style="width:100%"> -->
            <!-- </div> -->

          <!-- </div> -->

          <div class="col-xl-7 d-flex justify-content-around align-items-center" style="margin-top: 30px;">
            <div class="">
              <img class="img-thumbnail hidden animation-fadeinleft" src="img/partner/logo-sb.png" alt="logo-sb.png" style="width:160px">
            </div>
            <div class="">
              <img class="img-thumbnail hidden animation-fadeinleft delay-2s" src="img/partner/logo-miel.png" alt="" style="width:160px">
            </div>
            <!-- <div class="">
              <img class="img-thumbnail" src="img/partner/logo-miel.png" alt="" style="width:160px">
            </div> -->
          </div>
          <div class="col-xl-5 text-partnet-about-us animation-fadeinright delay-3s" style="margin-top: 30px;"><span>Среди партнеров «Лучшего Места» – ведущие финансовые и риелторские компании, включая ОАО «Сбербанк России», агентство недвижимости «Миэль» и другие.</span></div>
          <div class="col-xl-5 text-land animation-fadeinleft delay-4s">
            <span>Собственный земельный банк компании «Лучшее Место» составляет 184 га земли для ИЖС и дачного строительства, включая 6 коттеджных поселков: Лукоморье, Семиречье, Левашово, Речной, Царские берега и Сергово. Степень готовности коммуникаций в этих поселках – от 30 до 100 %, степень реализации участков – от 15 до 90 %. Общий объем реализации на данный момент – свыше 68 га.</span>
          </div>
          <div class="col-xl-7" style="margin-top: 30px;">
            <img class="img-thumbnail animation-fadeinright delay-5s" src="img/aboutus/land.jpg" alt="" style="width: 100%;">
          </div>

          <div class="col-xl-12 end-about-us animation-bounceInDown delay-6s">
            <span>
              Штат компании составляют квалифицированные сотрудники, обладающие значительным опытом в девелопменте, включая строительство, маркетинг и продажи. Благодаря долгосрочным партнерским отношениям с производителями оборудования и стройматериалов, а также наличию собственной строительной техники компания реализует поставленные задачи в установленные сроки в рамках стратегии и запланированного бюджета. <a class="a-mod-web" href="">Оставьте заявку</a> на получение дополнительной информации о наших проектах и условиях инвестирования прямо сейчас! Количество инвестиционных лотов ограничено!
            </span>
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
              <div class="content-contacts d-flex flex-wrap">
                <span class="content-contacts-item adress-organization">Адрес: Россия г. Москва, ул. Алабяна, д. 12, корп. 3</span>
                <div class="d-flex flex-column justify-contetn-around">
                  <span class="content-contacts-item name-organization">ООО "ЛУЧШЕЕ МЕСТО"</span>
                  <span class="content-contacts-item email-organization">info@bestmesto.ru</span>
                </div>

                <span class="content-contacts-item lel-phone">+7(495)-999-5533</span>
              </div>
            </div>
            <div class="location" style="height: 426px;">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab2367ca38be169733757e4326500fcd1702a20e0c7696aff48c2f5ad8963bdeb&amp;source=constructor" width="100%" height="426" frameborder="0"></iframe>
              <!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab2367ca38be169733757e4326500fcd1702a20e0c7696aff48c2f5ad8963bdeb&amp;source=constructor" width="100%" height="460" frameborder="0"></iframe> -->
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <!-- <div class="soc-media">
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
          </div> -->
          <div class="footer-slogan"><span>Лучшее место для Ваших инвестиций!</span></div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/calculator.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/chartist/dist/chartist.min.js"></script>
    <script src="js/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script src="js/jquery.viewportchecker.js"></script>
  </body>
</html>
