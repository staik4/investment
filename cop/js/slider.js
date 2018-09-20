$(document).ready(function(){
  let wrapper = $('.wrapper');
  let slideWidth = $('.visible-part').width();
  let numberSlides = $('.slide-item').length;
  // console.log(numberSlides);
  // wrapper.css({"width":slideWidth*numberSlides});
  // $('.slide-item').css({"width":slideWidth});
  setTimeout(function(){
    $(".slide-item[data-slide='"+'1'+"'] .slogan").css({'opacity':1});
  },1700);
  let StopSlider = false;
  let numslide = false;
  $('.owl-carousel').owlCarousel({
      loop:true,
      autoplay:true,
      items: 1,
      autoplayTimeout:5500,
      autoplayHoverPause:true,
      smartSpeed:1700
  }).on("change.owl.carousel", function (event) {
    // if (event.item.index >1) {
      let prevSlide = event.item.index - 1;
      if (event.item.index  == 3){
        numslide =  true;
      };

      // console.log(numslide);
        // console.log(prevSlide, event.item.index);
        if(numslide == true) {
          if (event.item.index == 4) {
            let nextSlide = 1;
            // $('.owl-item.cloned').children(".slide-item[data-slide='"+event.item.index+"']").append($(".slide-item[data-slide='"+nextSlide+"']").children().clone());
            // $(".slide-item[data-slide='"+event.item.index+"']").append($(".slide-item[data-slide='"+nextSlide+"']").children().clone());
            //
            // $(".slide-item[data-slide='"+event.item.index+"']").children().remove()
            $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
            $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeInn');
            $(".slide-item[data-slide='"+event.item.index+"'] .slogan").addClass('fadeInn');
            // $(".slogan_"+"1").empty();
            setTimeout(function(){
              $(".slide-item[data-slide='"+event.item.index+"'] .slogan").css({'opacity':1});

            },1500);
          }else {
            // console.log('nih ne rabotaet');
            let nextSlide = event.item.index + 1;
            // $('.owl-item.cloned').children(".slide-item[data-slide='"+event.item.index+"']").append($(".slide-item[data-slide='"+nextSlide+"']").children().clone())
            // $(".slide-item[data-slide='"+event.item.index+"']").append($(".slide-item[data-slide='"+nextSlide+"']").children().clone());
            $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
            $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeInn');
            $(".slide-item[data-slide='"+event.item.index+"'] .slogan").addClass('fadeInn');
            // $(".slogan_"+nextSlide).empty();
            setTimeout(function(){
              $(".slide-item[data-slide='"+event.item.index+"'] .slogan").css({'opacity':1});

            },1500);
          }
        }else {
          // let nextSlide = event.item.index + 1;
          // $(".slide-item[data-slide='"+event.item.index+"']").append($(".slide-item[data-slide='"+nextSlide+"']").children().clone());
          // $(".slide-item[data-slide='"+nextSlide+"'] .slogan").empty();
          $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
          $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeInn');
          $(".slide-item[data-slide='"+event.item.index+"'] .slogan").addClass('fadeInn');
          setTimeout(function(){
            $(".slide-item[data-slide='"+event.item.index+"'] .slogan").css({'opacity':1});
          },1500);
        }

    // } else if(event.item.index == 1) {
    //     let prevSlide = 4;
    //     console.log(prevSlide, event.item.index);
    //     $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
    //     $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeInn');
    //     $(".slide-item[data-slide='"+event.item.index+"'] .slogan").addClass('fadeInn');
    //     setTimeout(function(){
    //       $(".slide-item[data-slide='"+event.item.index+"'] .slogan").css({'opacity':1});
    //     },2000);
    // }



  });

  // let numSlide, setSec, nextSlide, nSlider;
  // numSlide = setSec = nextSlide  = 0;
  // nSlider = 0;

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

//   setTimeout(function(){
//     $(".slide-item[data-slide='"+'0'+"'] .slogan").css({'opacity':1});
//   },1700);
//   $(window).focus(function() {
//     StopSlider = false;
//     console.log(StopSlider);
//   });
//   $(window).blur(function() {
//     StopSlider = true;
//     console.log(StopSlider);
//   });
//
//   if (!StopSlider) {
//     setTimeout(function runSlide(){
//       console.log(StopSlider);
//       if (numSlide >= 3){
//         // console.log("numSlide",numSlide, "nSlider",nSlider);
//         wrapper.append(wrapper.children().first().clone());
//         wrapper.children().first().remove();
//         wrapper.css({"margin-left":"-" + mLeftSlider + "px"});
//         // console.log(slideWidth*2);
//         setTimeout(function(){
//           // console.log("numSlide",numSlide, "nSlider",nSlider);
//           wrapper.animate({"margin-left":'-='+slideWidth}, 2000);
//           console.log('hui1');
//
//           $('.visible-part').data('slider', nSlider);
//           nextSlide = $('.visible-part').data('slider');
//           prevSlide = $('.visible-part').data('slider')-1;
//           console.log("numSlide",numSlide,"nSlider",nSlider,'prevSlide',prevSlide,"nextSlide", nextSlide);
//           if (prevSlide == -1){
//             $(".slide-item[data-slide='3'] .slogan").css({'opacity':0});
//             $(".slide-item[data-slide='3'] .slogan").removeClass('fadeIn');
//             $(".slide-item[data-slide='"+nextSlide+"'] .slogan").addClass('fadeInn');
//           } else {
//             $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
//             $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeInn');
//             $(".slide-item[data-slide='"+nextSlide+"'] .slogan").addClass('fadeInn');
//           }
//           if (nSlider==3) {
//             // console.log("numSlide",numSlide, "nSlider",nSlider);
//             nSlider = 0;
//           } else {
//             nSlider += 1;
//           }
//
//           setTimeout(function(){
//             $(".slide-item[data-slide='"+nextSlide+"'] .slogan").css({'opacity':1});
//           },3500);
//           setTimeout(runSlide, 6000);
//         },3000);
//       } else {
//         wrapper.animate({"margin-left":'-='+slideWidth}, 2000);
//         console.log('hui');
//         numSlide +=1;
//         $('.visible-part').data('slider', numSlide);
//         nSlide = $('.visible-part').data('slider');
//         prevSlide = $('.visible-part').data('slider') - 1;
//         $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
//         $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeInn');
//         $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeInn');
//         setTimeout(function(){
//           $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
//         },3500);
//         setTimeout(runSlide, 6000);
//       }
//   },6000);
// } else {
//   console.log(StopSlider);
//   // clearTimeout();
//   $.noop;
// }

  // if (!StopSlider) {
  //   runSlide();
  // } else {
  //   $.noop;
  // }
// let mLeftSlider = slideWidth;
// let mLeft = 0;
// let subPixel = 1;
//   if (!StopSlider) {
//     console.log(true);
//     setTimeout(function runSlide(){
//       console.log(mLeftSlider, subPixel*5);
//         wrapper.css({"transform":"translate3d("+"-" + mLeftSlider + "px , 0, 0)", "animation-duration":"3s"});
//       runSlide();
//
//     },2000);
//   }else {
//     $.noop;
//   }
});
