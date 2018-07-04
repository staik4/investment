$(document).ready(function(){
  let wrapper = $('.wrapper');
  let slideWidth = $('.visible-part').width();
  let numberSlides = $('.slide-item').length;
  // console.log(numberSlides);
  wrapper.css({"width":slideWidth*numberSlides});
  $('.slide-item').css({"width":slideWidth});

  let StopSlider = false;

  let numSlide, setSec, nextSlide, nSlider;
  numSlide = setSec = nextSlide  = 0;
  nSlider = 0;
  let mLeftSlider = slideWidth*2;
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
        // console.log("numSlide",numSlide, "nSlider",nSlider);
        wrapper.append(wrapper.children().first().clone());
        wrapper.children().first().remove();
        wrapper.css({"margin-left":"-" + mLeftSlider + "px"});
        // console.log(slideWidth*2);
        setTimeout(function(){
          // console.log("numSlide",numSlide, "nSlider",nSlider);
          wrapper.animate({"margin-left":'-='+slideWidth}, 2000);

          $('.visible-part').data('slider', nSlider);
          nextSlide = $('.visible-part').data('slider');
          prevSlide = $('.visible-part').data('slider')-1;
          console.log("nSlider",nSlider,'prevSlide',prevSlide,"nextSlide", nextSlide);
          if (prevSlide == -1){
            $(".slide-item[data-slide='3'] .slogan").css({'opacity':0});
            $(".slide-item[data-slide='3'] .slogan").removeClass('fadeIn');
            $(".slide-item[data-slide='"+nextSlide+"'] .slogan").addClass('fadeIn');
          } else {
            $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
            $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeIn');
            $(".slide-item[data-slide='"+nextSlide+"'] .slogan").addClass('fadeIn');
          }
          if (nSlider==3) {
            // console.log("numSlide",numSlide, "nSlider",nSlider);
            nSlider = 0;
          } else {
            nSlider += 1;
          }

          setTimeout(function(){
            $(".slide-item[data-slide='"+nextSlide+"'] .slogan").css({'opacity':1});
          },3500);
          setTimeout(runSlide, 6000);
        },3000);
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
