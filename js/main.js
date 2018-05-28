$(document).ready(function(){
  let height = $('.navigation-header').height();
  //console.log(height);
  $('#banner').css({"padding-top":height+50});

  let wrapper = $('.wrapper');
  let slideWidth = $('.slider').width();
  let slideHeight = $('.slider').height();
  //console.log(slideWidth,slideHeight, $('.slide-item').length);
  wrapper.css({"width":$('.slide-item').length*slideWidth});

  let numSlide = 0;
  let setSec = 0;
  setTimeout(function(){
    //$('.slide-item [data-slide='+0+']').css({'opacity':1});
    //console.log($(".slide-item [data-slide='0]"));
    //console.log($('.slide-item').data('slide'));
  },1500);

  setTimeout(function runSlide(){
    wrapper.animate({"margin-left":'-='+slideWidth}, 1500);
    numSlide +=1;
    $('.visible-part').data('slider', numSlide);
    // console.log($('.visible-part').data('slider'));
    let nSlide = $('.visible-part').data('slider');
    let prevSlide = $('.visible-part').data('slider') - 1;
    //console.log(prevSlide, nSlide);
    $('.slide-item  [data-slide='+prevSlide+']').css({'opacity':0});

    $('.slide-item  [data-slide='+nSlide+']').addClass('fadeIn');
    $('.slide-item  [data-slide='+nSlide+']').css({'opacity':1});
    if($('.visible-part').data('slider') == 3) {
      setTimeout(function(){
        wrapper.animate({"margin-left":0}, 2000);
        $('.visible-part').attr('data-slider',0);
        numSlide = 0;
        clearTimeout();
        setTimeout(runSlide, 7000);
        $('.slide-item  [data-slide='+prevSlide+']').css({'opacity':0});
        $('.slide-item  [data-slide='+nSlide+']').css({'opacity':1});
        $('.slide-item  [data-slide='+nSlide+']').addClass('fadeIn');
      },5000);
    } else {
      setTimeout(runSlide, 7000);
      $('.slide-item  [data-slide='+prevSlide+']').css({'opacity':0});
      $('.slide-item  [data-slide='+nSlide+']').css({'opacity':1});
      $('.slide-item  [data-slide='+nSlide+']').addClass('fadeIn');
    };
  },7000);


  $('.projects-item').each(function(){
    console.log($(this));
    $(this).mouseover(function(){
      console.log('MOUSEOVER');
      $(this).css({"border":"2px solid #05426d"});
    });
    $(this).mouseout(function(){
      console.log('MOUSEOUT');
      $(this).css({"border":"1px dashed #05426d"});
    });
  });
});
