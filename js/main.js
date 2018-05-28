$(document).ready(function(){
  let height = $('.navigation-header').height();
  //console.log(height);
  $('#banner').css({"padding-top":height+50});

  let wrapper = $('.wrapper');
  let slideWidth = $('.slider').width();
  let slideHeight = $('.slider').height();
  wrapper.css({"width":$('.slide-item').length*slideWidth});
  $('.slide-item').css({"width":slideWidth})
  let numSlide = 0;
  let setSec = 0;
  let nSlide = 0;
  setTimeout(function(){
    $(".slide-item[data-slide='"+'0'+"'] .slogan").css({'opacity':1});
  },1700);
  setTimeout(function runSlide(){
    if($('.visible-part').data('slider') == 3) {
      setTimeout(function(){
        numSlide = 0;
        $('.visible-part').data('slider', numSlide);
        nSlide = $('.visible-part').data('slider');
        wrapper.animate({"margin-left":'0'}, 1500);
        clearTimeout();
        setTimeout(runSlide, 5000);

        $(".slide-item[data-slide='"+"3"+"'] .slogan").css({'opacity':0});
        $(".slide-item[data-slide='"+'3'+"'] .slogan").removeClass('fadeIn');
        $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
        setTimeout(function(){
          $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
        },1700);

        console.log('nSlide',nSlide);
      },5000);
    } else {
      wrapper.animate({"margin-left":'-='+slideWidth}, 1500);
      numSlide +=1;
      $('.visible-part').data('slider', numSlide);
      nSlide = $('.visible-part').data('slider');
      prevSlide = $('.visible-part').data('slider') - 1;
      setTimeout(runSlide, 5000);
      $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
      $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeIn');
      $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
      setTimeout(function(){
        $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
      },1700);
      console.log('nSlide', nSlide);
    }
  },5000);

  $('.projects-item').each(function(){
    $(this).mouseover(function(){
      //console.log('MOUSEOVER');
      $(this).css({"border":"2px solid #05426d"});
    });
    $(this).mouseout(function(){
      //console.log('MOUSEOUT');
      $(this).css({"border":"1px dashed #05426d"});
    });

    $(this).on('click', function(){
      let that  = $(this);
      let numOfPr = $(that).data("project");
      console.log($(".description-project[data-prnum='"+$(that).data("project")+"']"));
      $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeIn('slow', function(){
        $(".description-project[data-prnum='"+$(that).data("project")+"']").css({"position":"absolute", "width":"70%", "height":"800px","border":"3px solid #05426d","background-color":"#fff","display":"flex","padding":"50px"})
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > span").fadeIn('slow');
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > span").css({"font-size":"16px"});

        $(".description-project[data-prnum='"+$(that).data("project")+"'] > button").on('click',function(){
          $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeOut('slow', function(){
            $(this).css({"display":"none"});
          });
        });
      });
    });
  });

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
});
