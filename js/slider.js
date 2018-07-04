$(document).ready(function(){
  let wrapper = $('.wrapper');
  let slideWidth = $('.visible-part').width();
  let numberSlides = $('.slide-item').length;
  // console.log(numberSlides);
  wrapper.css({"width":slideWidth*numberSlides});
  $('.slide-item').css({"width":slideWidth});

  let StopSlider = false;

  let numSlide = 0;
  let setSec = 0;
  let nSlide = 0;
  // setTimeout(function(){
  //   $(".slide-item[data-slide='"+'0'+"'] .slogan").css({'opacity':1});
  // },1700);
  // setTimeout(function runSlide(){
  //   $(window).focus(function() {sliderStop = false;});
  //   $(window).blur(function() {sliderStop = true;});
  //   if (!StopSlider) {
  //     if($('.visible-part').data('slider') == 3) {
  //       setTimeout(function(){
  //         numSlide = 0;
  //         $('.visible-part').data('slider', numSlide);
  //         nSlide = $('.visible-part').data('slider');
  //         $(".slide-item[data-slide='"+"3"+"'] .slogan").css({'opacity':0});
  //         $(".slide-item[data-slide='"+'3'+"'] .slogan").removeClass('fadeIn');
  //         $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
  //         setTimeout(function(){
  //           $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
  //         },3500);
  //         wrapper.animate({"margin-left":'0'}, 2000);
  //         clearTimeout();
  //         setTimeout(runSlide, 6000);
  //         // console.log('nSlide',nSlide);
  //       },6000);
  //     } else {
  //       wrapper.animate({"margin-left":'-='+slideWidth}, 2000);
  //       numSlide +=1;
  //       $('.visible-part').data('slider', numSlide);
  //       nSlide = $('.visible-part').data('slider');
  //       prevSlide = $('.visible-part').data('slider') - 1;
  //       $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
  //       $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeIn');
  //       $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
  //       setTimeout(function(){
  //         $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
  //       },3500);
  //       setTimeout(runSlide, 6000);
  //       // console.log('nSlide', nSlide);
  //     }
  //   } else {
  //     $.noop;
  //   }
  // },6000);

  setTimeout(function(){
    $(".slide-item[data-slide='"+'0'+"'] .slogan").css({'opacity':1});
  },1700);
  setTimeout(function runSlide(){
    $(window).focus(function() {sliderStop = false;});
    $(window).blur(function() {sliderStop = true;});
    if (!StopSlider) {
      if (numSlide >= 3){
        numSlide =0;
        // wrapper.append(wrapper.children().first().clone());
        wrapper.css({"margin-left":"0"});
        wrapper.animate({"margin-left":'-='+slideWidth}, 2000);
        // wrapper.children().first().remove();

        $('.visible-part').data('slider', numSlide);
        nSlide = $('.visible-part').data('slider');
        prevSlide = $('.visible-part').data('slider') - 1;
        $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
        $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeIn');
        $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
        setTimeout(function(){
          $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
        },3500);
        setTimeout(runSlide, 6000);
      } else {
        wrapper.animate({"margin-left":'-='+slideWidth}, 2000);
        numSlide +=1;
        $('.visible-part').data('slider', numSlide);
        nSlide = $('.visible-part').data('slider');
        prevSlide = $('.visible-part').data('slider') - 1;
        $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
        $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeIn');
        $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
        setTimeout(function(){
          $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
        },3500);
        setTimeout(runSlide, 6000);
      }
    } else {
      $.noop;
    }
  },6000);
});
