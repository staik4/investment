$(document).ready(function(){
  let headerOffset = $('#header').offset().top;
  let header = $('#header');
  let navigationBar = $('.navv');
  let logoTip = $('.logo-tip');
  let binScroll = false;

  $("a[href^='#']").click(function(e){
    e.preventDefault();
		let top = $(this).attr('href');
    $('html, body').stop().animate({scrollTop: $(top).offset().top-130}, 1400);
    $("li").parent().children().removeClass('active-li');
    $(this).parent().addClass('active-li');
		// console.log('kus');
	});

  $(window).scroll(function(){
    let scrollTopp = $(document).scrollTop();
    // console.log(scrollTopp, headerOffset);
    if (scrollTopp >= headerOffset) {
      // console.log('kuku');
      if (binScroll == false){
        header.css({"position":"fixed","top":"0"});
        navigationBar.removeClass('col-xl-8').addClass('col-xl-7');
        logoTip.removeClass('hide');
        binScroll = true;
      }
    } else {
      if (binScroll == true){
        header.css({"position":"absolute","top":""});
        navigationBar.removeClass('col-xl-7').addClass('col-xl-8');
        logoTip.addClass('hide');
        binScroll = false;
      }
    }
  });

});
