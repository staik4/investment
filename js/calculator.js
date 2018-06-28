$(document).ready(function(){
  let years = {
    "2":"1",
    "3":"2",
    "4":"3",
    "5":"4",
    "6":"5",
    "7":"6",
    "10":"7",
    "15":"8 ",
  };



  let valueOfInsvest =3000000;
  let valuePerYear = 817974;

  $('#calculate').click(function(){
    let manyOfInvest = $('.volume-of-invest :selected').val();
    let nameOfProjecs = $('.select-projects :selected').val();
    let yearsOfInvest = $('.per-year-invest :selected').val();
    $(".volume-of-invest option[value='clear']").removeAttr("selected");
    $(".select-projects option[value='clear']").removeAttr("selected");
    $(".per-year-invest option[value='clear']").removeAttr("selected");

    let mon = parseInt(manyOfInvest.slice(0, 1))/3;
    // console.log("mon", mon)

    //console.log(yearsOfInvest, nameOfProjecs, manyOfInvest, yearsOfInvest*manyOfInvest);
    // let div = "<div class='row-table d-flex flex-row justify-content-around' style='width: 100%'><div class='table-head col-xl-4'>"+nameOfProjecs+"</div><div class='year col-xl-1'></div></div>";
    let mainResult = "<div class='row-table d-flex flex-row justify-content-around' style='width: 100%; border-top: 0'><div style='border-top: 0' class='table-head col-xl-4'>"+nameOfProjecs+"</div>";
    console.log(years[yearsOfInvest]);
    let div = "";
    for (key in years) {
      if (parseInt(key) <= parseInt(yearsOfInvest)) {
        console.log("min",key, yearsOfInvest);
        let sumPerYear = key * valuePerYear* mon;
        div = div + "<div style='border-top: 0' class='year col-xl-1'>"+sumPerYear+"</div>";
      }else {
        console.log('max', key, yearsOfInvest);
        div = div +  "<div style='border-top: 0' class='year col-xl-1'>—</div>"
      }
    }
    // console.log(mainResult + div + '</div>');



    $('.table-calc').append(mainResult + div + '</div>');
    setTimeout(function(){
      $('.row-table').animate({opacity:1},1500);
      $('.row-table-main').animate({opacity:1},1500);
      setTimeout(function(){
        $('.row-table-main').css({"display":"flex"});

      },1200)
    },1000);

    $('.cop-table').animate({opacity: 0},1000);
  });

  $('#clear-form').click(function(){
    console.log($(".volume-of-invest option[value='clear']"));
    $(".volume-of-invest option[value='clear']").attr("selected", "selected");
    $(".select-projects option[value='clear']").attr("selected", "selected");
    $(".per-year-invest option[value='clear']").attr("selected", "selected");

    $('.row-table').remove();
    $('.row-table-main').css({"opacity":"0"});
    $('.cop-table').animate({opacity: 1},1000);
  });



});
