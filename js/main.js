$(document).ready(function(){
  $('.description-project').addClass('hide');
  let BackGround = $('.body-layout');
  let heightBackGround = $('footer').offset().top + $('footer').outerHeight();
  console.log($('footer').offset().top);
  BackGround.css({"height":heightBackGround});


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

        $(".close-btn").css({"display":"block"});
        $(".description-project[data-prnum='"+$(that).data("project")+"'] > .btn-presentation").css({"display":"block"});
        $(".close-btn").on('click',function(){
          $(".close-btn").css({"display":"none"});
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

  $(document).mousedown(function(e){
  	let divText = $('.description-project');
    if (!$(e.target).closest(divText).length) {
      $('.description-project').children().addClass('hide');
      $('.description-project').addClass('hide');
      $('.img-gen-plan').addClass('hide');
      $(".close-btn").css({"display":"none"});
    };
  });

  let wrapperUnPr = $('.item-uniq-projects');
  let showItemUnPr = $('.title-uniq-item').outerHeight()+ $('.desc-uniq-item').outerHeight();
  console.log($('.title-uniq-item').outerHeight(), $('.desc-uniq-item').outerHeight());
  wrapperUnPr.css({"height":showItemUnPr});
  wrapperUnPr.each(function(){
    $(this).hover( function() {
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
        $('.desc-hidden-uniq').css({"display":"none"});
        $('.arrow-un-item').css({"display":"none"});
			}
		});
    $(this).click( function() {
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
});
