$(document).ready(function(){
  let valueOfInsvest =3000000;
  let valuePerYear = 817974;
  $('#calculate').click(function(){
    let manyOfInvest = $('.volume-of-invest :selected').val();
    let nameOfProjecs = $('.select-projects :selected').val();
    let yearsOfInvest = $('.per-year-invest :selected').val();
    console.log(yearsOfInvest, nameOfProjecs, manyOfInvest);
  });

});
