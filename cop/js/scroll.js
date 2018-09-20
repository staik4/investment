$(document).ready(function(){
  let headerOffset = $('#header').offset().top;
  let header = $('#header');
  let navigationBar = $('.navv');
  let logoTip = $('.logo-tip');
  let binScroll = false;
  let arrowTop = $('.arrow-top');

  $("a[href^='#']").click(function(e){
    e.preventDefault();
		let top = $(this).attr('href');
    $('html, body').stop().animate({scrollTop: $(top).offset().top-130}, 1400);
    $("li").parent().children().removeClass('active-li');
    $(this).parent().addClass('active-li');
		// console.log('kus');
	});

  $('.arrow-top').click(function(){
    $('html, body').stop().animate({scrollTop: 0}, 1000);
  })

  $(window).scroll(function(){
    let scrollTopp = $(document).scrollTop();
    // console.log(scrollTopp, headerOffset);
    if (scrollTopp >= headerOffset) {
      arrowTop.removeClass('hide');
      // console.log('kuku');
      if (binScroll == false){
        header.css({"position":"fixed","top":"0"});
        navigationBar.removeClass('col-xl-8').addClass('col-xl-7');
        logoTip.removeClass('hide');
        $('burger').css({"top":"25px"})
        binScroll = true;

        function get_name_browser(){
          // получаем данные userAgent
          var ua = navigator.userAgent;
          // с помощью регулярок проверяем наличие текста,
          // соответствующие тому или иному браузеру
          if (ua.search(/Chrome/) > 0) return 'Google Chrome';
          if (ua.search(/Firefox/) > 0) return 'Firefox';
          if (ua.search(/Opera/) > 0) return 'Opera';
          if (ua.search(/Safari/) > 0) return 'Safari';
          if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
          // условий может быть и больше.
          // сейчас сделаны проверки только
          // для популярных браузеров
          return 'Не определен';
        }
        var browser = get_name_browser();
        if(browser == 'Safari') {
          $('.ul-nav .li-nav a').css({"font-size":"18px"});
          console.log('safari');
        }

      }

    } else {

      if (binScroll == true){
        $('burger').css({"top":"10px"});
        header.css({"position":"absolute","top":""});
        navigationBar.removeClass('col-xl-7').addClass('col-xl-8');
        logoTip.addClass('hide');
        binScroll = false;
        arrowTop.addClass('hide');

      }
    }
  });

});


// document.onwheel = function(e) {
//    // console.log(e.deltaY);
//    if(e.deltaY < 0) {
//      console.log(window.scrollY, document.querySelector('').offsetTop);
//    }
// };
