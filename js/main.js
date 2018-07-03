$(document).ready(function(){
  let heightBackGround = $('.body-layout');
  heightBackGround.css({"height":$(document).height()});

  $('.projects-item').each(function(){
    let that = $(this);
    $(that).mouseover(function(){
      $(that).children().children().animate({"opacity": "1"},1500);
      console.log($(that).children().children());
    });
    $(that).mouseout(function(){
      console.log("out");
      $(that).children().children().animate({"opacity": "0"},1500);


    });

    $(that).on('click', function(){
      let numOfPr = $(that).data("project");
      //console.log($(".description-project[data-prnum='"+$(that).data("project")+"']"));
      // console.log(that);
      $(".description-project[data-prnum='"+$(that).data("project")+"']").removeClass('hide');
      $(".description-project[data-prnum='"+$(that).data("project")+"']").fadeIn('slow', function(){

        $(".description-project[data-prnum='"+$(that).data("project")+"']").css({"position":"absolute", "width":"100%", "height":"800px","border":"3px solid #05426d","display":"flex","padding":"50px"})
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

});
