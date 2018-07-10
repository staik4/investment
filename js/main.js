$(document).ready(function(){
  $('.description-project').addClass('hide');
  let heightBackGround = $('.body-layout');
  console.log($(document).height());
  heightBackGround.css({"height":$(document).height()});


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
      let numOfPr = $(that).data("project");
      let descHeight = $(window).height() -200;
      $('.description-project').css({"height":descHeight});
      //console.log($(".description-project[data-prnum='"+$(that).data("project")+"']"));
      // console.log(that);
      $('.img-gen-plan').removeClass('hide');
      $('.description-project').children().removeClass('hide');
      $(".description-project[data-prnum='"+$(that).data("project")+"']").removeClass('hide');
      $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeIn('slow', function(){

        $(".description-project[data-prnum='"+$(that).data("project")+"']").css({"position":"absolute", "width":"100%","border":"3px solid #05426d","display":"flex","padding":"50px","z-index":"1000"})
        $(".description-project[data-prnum='"+$(that).data("project")+"'] span").fadeIn('slow');
        $(".description-project[data-prnum='"+$(that).data("project")+"'] span").css({"font-size":"16px"});

        $(".description-project[data-prnum='"+$(that).data("project")+"'] .gen-plan .img-gen-plan").css({"display":"block"});

        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-close-desc").css({"display":"block"});
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-presentation").css({"display":"block"});
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-close-desc").on('click',function(){
          $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeOut('slow', function(){
            $(this).addClass('hide');
            $('.description-project').children().addClass('hide');
            $('.img-gen-plan').addClass('hide');
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

});
