$(document).ready(function(){
  $('.description-project').addClass('hide');
  // function bodylay(){
  //   // let BackGround = $('.body-layout');
  //   // let heightBackGround = $('footer').offset().top + $('footer').outerHeight();
  //   // console.log("asd",$('footer').offset().top);
  //   // BackGround.css({"height":heightBackGround});
  // };
  // bodylay();
//   let series = [[
//   {x: 0, y: 0},
//   {x:1, y: 20000},
//   {x:1.5, y: 25000},
//   {x:2, y: 30000},
//   {x:2.5, y:35000},
//   {x:3, y: 40000},
//   {x:4, y: 45000},
//   {x:5, y: 48000},
//   {x:6, y: 50000},
//   {x:7, y: 51000}
// ]];
//   new Chartist.Line('#lev-chart', {
//     series
//   }, {
//     axisX: {
//       type: Chartist.AutoScaleAxis,
//       onlyInteger: true
//     },
//     axisY: {
//       type: Chartist.AutoScaleAxis,
//       onlyInteger: true
//     }
//   });
  // function bodylayOff(){
  //   let BackGround = $('.body-layout');
  //   let heightBackGround = $('footer').offset().top + $('footer').outerHeight();
  //   console.log($('footer').offset().top);
  //   BackGround.css({"height":heightBackGround});
  // };
  // bodylay();
  let dObDescPr = {
    1:'desc-holhouses',
    2:'desc-levashovos',
    3: 'desc-islands',
    4: 'desc-sergovos'
  }
  $(".close-btn-pr").click(function(){
    $('body').css({'overflow':'auto'});
    // console.log('asd');
    // console.log($(".projects-item").scrollTop());
    // console.log('asd');
    // console.log($(".description-project[data-prnum='"+$(that).data("project")+"']").scrollTop(), $(that).data("project"),  $(".description-project[data-prnum='"+$(that).data("project")+"']"));
    $(".close-btn-pr").css({"display":"none"});
    $(".description-project[data-prnum='"+$('.projects-item').data("project")+"']").fadeOut('slow', function(){
      $(this).addClass('hide');
      $('.description-project').children().addClass('hide');
      $('.img-gen-plan').addClass('hide');
      // console.log('hrem',$(this));
    });
  });
  $('.projects-item').each(function(){
    let that = $(this);
    $(that).mouseover(function(){
      $(that).children().children().animate({"opacity": "1"},700);
      // console.log($(that).children().children());
    });
    $(that).mouseout(function(){
      // console.log("out");
      $(that).children().children().animate({"opacity": "0"},700);
    });

    $(that).on('click', function(){
      // console.log($(that).data("project"));
      let idDesc = dObDescPr[$(that).data("project")];
      $('body').css({'overflow':'hidden'});
      // console.log(scrollDesc);

      let numOfPr = $(that).data("project");
      let descHeight = $(window).height() -150;
      $('.description-project').css({"height":descHeight});
      //console.log($(".description-project[data-prnum='"+$(that).data("project")+"']"));
      // console.log(that);
      // console.log($(window).scrollTop(), that.offset().top, $('#header').height());
      let scrollTopWindow = $(window).scrollTop() + $('#header').height();
      let g = 0;
      // console.log($('#project-content').offset().top - scrollTopWindow);
      if ($('#project-content').offset().top > scrollTopWindow) {
        g = ($('#project-content').offset().top - scrollTopWindow) - 30;
        g = -g;
        // console.log(g);
        $(".description-project[data-prnum='"+$(that).data("project")+"']").css({"top":g});
        $(".close-btn-pr").css({"top":g+20});
      }else if(scrollTopWindow > $('#project-content').offset().top) {
        g = (scrollTopWindow - $('#project-content').offset().top) + 50;
        // console.log("+",g);
        $(".description-project[data-prnum='"+$(that).data("project")+"']").css({"top":g});
        $(".close-btn-pr").css({"top":g+20});
      };

      $('.img-gen-plan').removeClass('hide');
      $('.description-project').children().removeClass('hide');
      $(".description-project[data-prnum='"+$(that).data("project")+"']").removeClass('hide');
      $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeIn('slow', function(){
        $("#"+idDesc).scrollTop(0);

        $(".description-project[data-prnum='"+$(that).data("project")+"']").css({"position":"relative", "width":"100%","border":"3px solid #05426d","display":"flex","padding":"50px","z-index":"1000", "top":g});
        $(".description-project[data-prnum='"+$(that).data("project")+"'] span").fadeIn('slow');
        $(".description-project[data-prnum='"+$(that).data("project")+"'] span").css({"font-size":"16px"});

        $(".description-project[data-prnum='"+$(that).data("project")+"'] .gen-plan .img-gen-plan").css({"display":"block"});

        $(".close-btn-pr").css({"display":"block"});
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-presentation").css({"display":"block"});
      });
    });

  });//projects

  $('.memu-payback-item').each(function(){
    $(this).on('click', function(){
      $(this).parent().children().removeClass('active-memu-payback-item');
      $(this).addClass('active-memu-payback-item');
      let pr = $('.active-memu-payback-item').data('menupayback');

      $('.active-projects-payback-item').fadeOut("slow", function(){
        $(this).parent().children().removeClass('active-projects-payback-item');
        $(".projects-payback-item[data-prpayback='"+pr+"']").addClass('active-projects-payback-item');

        $(".projects-payback-item[data-prpayback='"+pr+"']").fadeIn( "slow",function(){
        });
        console.log(pr);
      });

    });
  });

  $(document).mousedown(function(e){
  	let divText = $('.description-project');
    let modWeb = $('.real-mod-web');
    if (!$(e.target).closest(divText).length) {
      $('.description-project').children().addClass('hide');
      $('.description-project').addClass('hide');
      $('.img-gen-plan').addClass('hide');
      $(".close-btn-pr").css({"display":"none"});
      $('body').css({"overflow":"auto"});
    };
    if(!$(e.target).closest(modWeb).length) {
      $('.mod-web').css({"display":"none"});
      $('.layout-mod-web').css({"display":"none"});
    }
  });

  let wrapperUnPr = $('.item-uniq-projects');
  // let showItemUnPr = $('.title-uniq-item').outerHeight()+ $('.desc-uniq-item').outerHeight();
  // console.log($('.title-uniq-item').outerHeight(), $('.desc-uniq-item').outerHeight());
  // wrapperUnPr.css({"height":showItemUnPr});
  wrapperUnPr.each(function(){
    let showItemUnPr = $(this).children('.title-uniq-item').outerHeight()+ $(this).children('.desc-uniq-item').outerHeight();
    $(this).css({"height":showItemUnPr});
    $(this).hover(function() {
      setTimeout(function(){
        bodylay();
      },1000);
      $('.desc-hidden-uniq').css({"display":"block"});
      $('.arrow-un-item').css({"display":"block"});
      console.log($(this).children('.arrow-un-item').outerHeight());
      let heiAnim = $(this).children('.arrow-un-item').outerHeight() + 5;
			if (!$(this).data('opened')) {
				$(this).animate({height: '+=' + $(this).children('.arrow-un-item').outerHeight()});
        $('.desc-hidden-uniq').css({"display":"block"});
        $('.arrow-un-item').css({"display":"block"});
			}
		}, function() {
			if (!$(this).data('opened')) {
				$(this).animate({height: '-=' + $(this).children('.arrow-un-item').outerHeight()})
        // $('.desc-hidden-uniq').css({"display":"none"});
        // $('.arrow-un-item').css({"display":"none"});
			}
		});
    $(this).click( function() {
      setTimeout(function(){
        bodylay();
      },1000);
      if (!$(this).data('opened')) {
        $(this).animate({height: '+=' + $(this).children('.desc-hidden-uniq').outerHeight()}).data('opened', true);
        $(this).children('.desc-hidden-uniq').css({"display":"block"});
      } else {
        $(this).animate({height: '-=' + $(this).children('.desc-hidden-uniq').outerHeight()},function(){
          $(this).children('.desc-hidden-uniq').css({"display":"none"});
          // $('.arrow-un-item').css({"display":"none"});
        }).data('opened', false);

      }
    });
  });

  $('.a-mod-web').click(function(e){
    e.preventDefault();
    let BackGround = $('.layout-mod-web');
    let heightBackGround = $('footer').offset().top + $('footer').outerHeight();
    let OffsetModWeb = $(window).scrollTop() + 120;
    let windowHeight = $(window).height();
    console.log(windowHeight);
    // console.log("asd",$('footer').offset().top);
    BackGround.css({"display":"block"});
    // console.log('a-click');
    $('.mod-web').css({"display":"flex"});
    $('.real-mod-web').css({"display":"flex", "top": OffsetModWeb});
    $('.close-btn-mod-web').css({"display":"flex"});
  });

  $('.close-btn-mod-web').click(function(){
    $("span.choose-pr").css({"display": "block"});
    $('.choose-projects').css({"display":"none","opacity":'0'});

    $('.mod-web').fadeOut('slow', function(){
      $('.mod-web').css({"display":"none"});
      console.log('fadeOut');
    });
    // $('.close-btn').fadeOut('slow', function(){
    //   $('.close-btn').css({"display":"none"});
    //   console.log('fadeOut-btn');
    // });

    $('.layout-mod-web').fadeOut('slow', function(){
      $('.mod-web').css({"display":"none"});
      console.log('fadeOut-btn');
    });
  });
  $('.btn-form-request-fix button').click(function(e){
    e.preventDefault();
    let BackGround = $('.layout-mod-web');
    let heightBackGround = $('footer').offset().top + $('footer').outerHeight();
    let OffsetModWeb = $(window).scrollTop() + 120;
    let windowHeight = $(window).height();
    console.log(windowHeight);
    // console.log("asd",$('footer').offset().top);
    BackGround.css({"display":"block"});
    // console.log('a-click');
    $('.mod-web').css({"display":"flex"})
    $('.real-mod-web').css({"display":"flex", "top": OffsetModWeb});
    $('.close-btn-mod-web').css({"display":"flex"})
  });

  var touch = $('.burger');
  var menu = $(".navv > ul");
  let toggle = false;
  $(touch).on('click', function(e){

    e.preventDefault();
    console.log(menu);
    // menu.css({"height": "100%"})
    if(toggle == false){
      $('.burger').animate({"top": "10px"});
      $('navv').css({"margin-top":"70px"});
      menu.slideToggle();
      toggle = true;
    } else if(toggle == true) {

      toggle = false;
      menu.slideToggle('slow',function (){
        $('.burger').css({"top": ""});
      });
    }

  });

  $('.animation-fafeTop').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
    offset: 150
	});

	$('.animation-fadeinleft').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInLeftBig', // Class to add to the elements when they are visible
    offset: 150
	});

	$('.animation-fadeinright').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInRightBig', // Class to add to the elements when they are visible
    offset: 150
	});

  $('.animation-fadeinUp').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInUpBig', // Class to add to the elements when they are visible
    offset: 150
	});

  $('.animation-bounceInDown').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated bounceInDown', // Class to add to the elements when they are visible
    offset: 150
	});

  $('span.choose-pr').click(function(){
    console.log('kuk');
    $(this).css({"display": "none"})
    $('.choose-projects').css({"display":"block"});
    $('.choose-projects').animate({opacity: 1}, 1000, function(){

    })
  });

  // common
  $('.choose-projects').change(function(){
    if ($(this).val() == 'Левашово'){
      console.log($(this).val());
      $('.inv-amount').addClass('hide');
      $('#levashovoo').removeClass('hide');
    } else if ($(this).val() == 'Дом отдыха'){
      console.log($(this).val());
      $('.inv-amount').addClass('hide');
      $('#househol').removeClass('hide');
    } else if ($(this).val() == 'Сергово'){
      console.log($(this).val());
      $('.inv-amount').addClass('hide');
      $('#segrovo').removeClass('hide');
    } else if ($(this).val() == 'Остров'){
      console.log($(this).val());
      $('.inv-amount').addClass('hide');
      $('#ostrov').removeClass('hide');
    }

  });

  $('.choose-projects-bot').change(function(){
    if ($(this).val() == 'Левашово'){
      console.log($(this).val());
      $('.inv-amount-bot').addClass('hide');
      $('#levashovoo-bot').removeClass('hide');
    } else if ($(this).val() == 'Дом отдыха'){
      console.log($(this).val());
      $('.inv-amount-bot').addClass('hide');
      $('#househol-bot').removeClass('hide');
    } else if ($(this).val() == 'Сергово'){
      console.log($(this).val());
      $('.inv-amount-bot').addClass('hide');
      $('#segrovo-bot').removeClass('hide');
    } else if ($(this).val() == 'Остров'){
      console.log($(this).val());
      $('.inv-amount-bot').addClass('hide');
      $('#ostrov-bot').removeClass('hide');
    }

  });

  console.log($('#desc-levashovo').scrollTop())
});
