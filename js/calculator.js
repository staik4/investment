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
  let series = [[
  ],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]];
  let valueOfInsvest =3000000;
  let valuePerYear = 817974;
  let numberOfcharts = $('#calculate').data('charts');
  // console.log(numberOfcharts);

  $('#calculate').click(function(){
    let manyOfInvest = $('.volume-of-invest :selected').val();
    let nameOfProjecs = $('.select-projects :selected').val();
    let yearsOfInvest = $('.per-year-invest :selected').val();
    $(".volume-of-invest option[value='clear']").removeAttr("selected");
    $(".select-projects option[value='clear']").removeAttr("selected");
    $(".per-year-invest option[value='clear']").removeAttr("selected");
    console.log("numberOfcharts", numberOfcharts);
    $('#calculate').attr('data-charts', numberOfcharts);
    let mon;
    if(manyOfInvest.length > 7){
      mon = parseInt(manyOfInvest.slice(0, 2))/3;
    } else {
      mon = parseInt(manyOfInvest.slice(0, 1))/3;
    }

    let data = {};
    let options;
    let labels = [];
    let mainResult = "<div class='row-table d-flex flex-row justify-content-around' style='width: 100%; border-top: 0'><div style='border-top: 0' class='table-head col-xl-4'>"+nameOfProjecs+"</div>";
    // console.log(years[yearsOfInvest]);
    let div = "";
    for (key in years) {
      if (parseInt(key) <= parseInt(yearsOfInvest)) {
        // console.log("min",key, yearsOfInvest);
        let sumPerYear = key * valuePerYear* mon;

        sumPerYear = String(sumPerYear);
        // num = num.slice(0, -4);
        if(sumPerYear.length <= 7) {
          num = parseInt(String(sumPerYear).slice(0,2));
          num = parseFloat(num/10);
          console.log('num',sumPerYear.length, num, num/10);
        } else {
          num = parseInt(String(sumPerYear).slice(0,3));
          num = parseFloat(num/10);
          console.log('num',sumPerYear.length, num, num/10);
        }
        div = div + "<div style='border-top: 0' class='year col-xl-1'>"+sumPerYear+"</div>";
        series[numberOfcharts].push({x:key, y: num});
        // labels.push(key);
        console.log(series, num);
      }else {
        // console.log('max', key, yearsOfInvest);
        div = div +  "<div style='border-top: 0' class='year col-xl-1'>—</div>"
      }
    }
    // console.log(mainResult + div + '</div>');
    // date = {
    //   labels,
    //   series
    // };
    // console.log(series, labels);
    // options = {
    //   axisX: {
    //     type: Chartist.AutoScaleAxis,
    //     onlyInteger: true
    //   },
    //   // Y-Axis specific configuration
    //   axisY: {
    //     // Lets offset the chart a bit from the labels
    //     // The label interpolation function enables you to modify the values
    //     // used for the labels on each axis. Here we are converting the
    //     // values into million pound.
    //     labelInterpolationFnc: function(value) {
    //       return  console.log('value', value);;
    //     }
    //   }
    // };
    new Chartist.Line('.chartist', {
      series
    }, {
      axisX: {
        type: Chartist.AutoScaleAxis,
        onlyInteger: true
      },
      axisY: {
        type: Chartist.AutoScaleAxis,
        onlyInteger: true
      }
    });
    numberOfcharts +=1;
    // new Chartist.Line('.chartist',data, options);
    $('.table-calc').append(mainResult + div + '</div>');
    setTimeout(function(){
      $('.row-table').animate({opacity:1},1500);
      $('.row-table-main').animate({opacity:1},1500);
      setTimeout(function(){
        $('.row-table-main').css({"display":"flex"});

      },1200)
    },1000);

    $('.cop-table').animate({opacity: 0},1000, function(){
      $(this).addClass('hide');
    });
  });

  $('#clear-form').click(function(){
    console.log($(".volume-of-invest option[value='clear']"));
    $(".volume-of-invest option[value='clear']").attr("selected", "selected");
    $(".select-projects option[value='clear']").attr("selected", "selected");
    $(".per-year-invest option[value='clear']").attr("selected", "selected");

    $('.row-table').remove();
    $('.row-table-main').css({"opacity":"0"});
    $('.cop-table').animate({opacity: 1},1000, function(){
      $(this).removeClass('hide');
    });
  });



});
