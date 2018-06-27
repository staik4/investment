$(document).ready(function() {

  console.log(window.focus())

  console.log("pageYOffset", window.pageYOffset);

  function header(){
    let header = $('#header');
    let logo = $('#logo');
    let logotip = $('.logo-img');

    header.css({'top':''});
    logotip.css({"display":"none","width":"50px","height":"50px"});
    $('.navigation-header').css({"padding":"25px 0 25px 0"});
    $('.logo-tip').removeClass('col-xl-1');
    $('.navv').addClass('col-xl-8');
    $('.navv').removeClass('col-xl-7');
    $("#logo").css({"display":"block"});
  };//function for design navigation bar depending on situation

  if (window.pageYOffset >= 100) {
    let header = $('#header');
    let logo = $('#logo');
    let logotip = $('.logo-img');

    header.css({'top':'0'});
    logotip.css({"display":"block","width":"50px","height":"50px"});
    $('.navigation-header').css({"padding":"15px 0 15px 0"});
    $('.logo-tip').addClass('col-xl-1');
    $('.navv').removeClass('col-xl-8');
    $('.navv').addClass('col-xl-7');
    // console.log('kus');
  }//reload page -- out nav bar on top

  function animateArrow(){
    $(".arrow-top").animate({bottom: "115px"}, 700, function(){
        $(".arrow-top").animate({bottom: "100px"}, 700, function(){
          animateArrow();
          console.log('ani');
        });

    });
  }//animate arrow

    $(".arrow-top").mouseover(function(){
      console.log('kuku');
      animateArrow();
    });//start animate arrow

    $(".arrow-top").click(function(){
      $('html, body').stop().animate({scrollTop:"0"},1500, function(){
        header()
        $(".arrow-top").addClass('hide');
      });

    });//click arrow top



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
        wrapper.animate({"margin-left":'0'}, 2500);
        clearTimeout();
        setTimeout(runSlide, 6000);

        $(".slide-item[data-slide='"+"3"+"'] .slogan").css({'opacity':0});
        $(".slide-item[data-slide='"+'3'+"'] .slogan").removeClass('fadeIn');
        $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
        setTimeout(function(){
          $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
        },3500);

        // console.log('nSlide',nSlide);
      },6000);
    } else {
      wrapper.animate({"margin-left":'-='+slideWidth}, 2500);
      numSlide +=1;
      $('.visible-part').data('slider', numSlide);
      nSlide = $('.visible-part').data('slider');
      prevSlide = $('.visible-part').data('slider') - 1;
      setTimeout(runSlide, 6000);
      $(".slide-item[data-slide='"+prevSlide+"'] .slogan").css({'opacity':0});
      $(".slide-item[data-slide='"+prevSlide+"'] .slogan").removeClass('fadeIn');
      $(".slide-item[data-slide='"+nSlide+"'] .slogan").addClass('fadeIn');
      setTimeout(function(){
        $(".slide-item[data-slide='"+nSlide+"'] .slogan").css({'opacity':1});
      },3500);
      console.log('nSlide', nSlide);
    }
  },6000);

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
      //console.log($(".description-project[data-prnum='"+$(that).data("project")+"']"));
      // console.log(that);
      $(".description-project[data-prnum='"+$(that).data("project")+"']").removeClass('hide');
      $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeIn('slow', function(){

        $(".description-project[data-prnum='"+$(that).data("project")+"']").css({"position":"absolute", "width":"100%", "height":"800px","border":"3px solid #05426d","background-color":"#fff","display":"flex","padding":"50px"})
        $(".description-project[data-prnum='"+$(that).data("project")+"'] span").fadeIn('slow');
        $(".description-project[data-prnum='"+$(that).data("project")+"'] span").css({"font-size":"16px"});

        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-close-desc").css({"display":"block"});
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-presentation").css({"display":"block"});
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-close-desc").on('click',function(){
          $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeOut('slow', function(){
            $(this).addClass('hide');
            // console.log('hrem',$(this));
          });
        });
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
  let htmlHeight = $('body').height();
  $('.body-layout').css({'height':htmlHeight});
  //console.log('html',);

  $("a[href^='#']").click(function(){
		let top = $(this).attr('href');
        $('html, body').stop().animate({scrollTop: $(top).offset().top}, 1000);
        let header = $('#header');
        let logo = $('#logo');
        let logotip = $('.logo-img');

        header.css({'top':'0'});
        logotip.css({"display":"block","width":"50px","height":"50px"});
        $('.navigation-header').css({"padding":"15px 0 15px 0"});
        $('.logo-tip').addClass('col-xl-1');
        $('.navv').removeClass('col-xl-8');
        $('.navv').addClass('col-xl-7');
				// console.log('kus');
	});
});
//console.log(window);



window.addEventListener('wheel', onWheel);
window.addEventListener('scroll', scroll);

function onWheel(e) {
  e = e || window.event;
  let delta = e.deltaY || e.detail || e.wheelDelta;
  //console.log(window.pageYOffset);
  let header = document.querySelector('#header');
  let logo = document.querySelector('#logo');
  let logotip = document.querySelector('.logo-img');

  // console.log(delta, window.pageYOffset);
  if (delta < 0 && window.pageYOffset <= 90) {
    logo.style.display = 'block';
    header.style.top = '';
    logotip.style.display = 'none';
    document.querySelector('.navigation-header').style.padding = '25px 0 25px 0';
    document.querySelector('.logo-tip').classList.remove('col-xl-1');
    document.querySelector('.navv').classList.remove('col-xl-7');
    document.querySelector('.navv').classList.add('col-xl-8');
    document.querySelector('.arrow-top').classList.add('hide');
    // console.log('ne rabotaet');

    let height = document.querySelector('.navigation-header').clientHeight;
    //console.log(height);
    document.querySelector('#banner').style.padding = height + "px";

  }else if(delta > 0 && window.pageYOffset > 0){
    // console.log('rabotaet');
    header.style.top = '0';
    logo.style.display = 'none';
    let start = Date.now();
    logotip.style.display = 'block';
    logotip.style.width = '50px';
    logotip.style.height = '50px';
    document.querySelector('.navigation-header').style.padding = '15px 0 15px 0';
    document.querySelector('.logo-tip').classList.add('col-xl-1');
    document.querySelector('.navv').classList.remove('col-xl-8');
    document.querySelector('.navv').classList.add('col-xl-7');
    document.querySelector('.arrow-top').classList.remove('hide');
  }

}

function scroll() {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  let header = document.querySelector('#header');
  let logo = document.querySelector('#logo');
  let logotip = document.querySelector('.logo-img');

  // console.log(delta, window.pageYOffset);
  if (scrollTop < 100) {
    logo.style.display = 'block';
    header.style.top = '';
    logotip.style.display = 'none';
    document.querySelector('.navigation-header').style.padding = '25px 0 25px 0';
    document.querySelector('.logo-tip').classList.remove('col-xl-1');
    document.querySelector('.navv').classList.remove('col-xl-7');
    document.querySelector('.navv').classList.add('col-xl-8');
    document.querySelector('.arrow-top').classList.add('hide');
    // console.log('ne rabotaet');

    let height = document.querySelector('.navigation-header').clientHeight;
    //console.log(height);
    document.querySelector('#banner').style.padding = height + "px";

  }else {
    // console.log('rabotaet');
    header.style.top = '0';
    logo.style.display = 'none';
    let start = Date.now();
    logotip.style.display = 'block';
    logotip.style.width = '50px';
    logotip.style.height = '50px';
    document.querySelector('.navigation-header').style.padding = '15px 0 15px 0';
    document.querySelector('.logo-tip').classList.add('col-xl-1');
    document.querySelector('.navv').classList.remove('col-xl-8');
    document.querySelector('.navv').classList.add('col-xl-7');
    document.querySelector('.arrow-top').classList.remove('hide');
  }
  console.log(scrollTop);
}
