"use strict";

window.addEventListener("load", function () {
  var today = new Date();
  var startDate = new Date('11/30/2020 23:59:00'); //1 Dez 2020

  var endDate = new Date('01/02/2021 00:00:00'); //2 Jan 2021
  // var seconds = (endDate.getTime() - startDate.getTime()) / 1000;

  var mills = endDate.getTime() - startDate.getTime();
  var totalMills = mills;
  var minorMills = today.getTime() - startDate.getTime();
  var resultado = Number(100) * Number(minorMills) / Number(totalMills); // console.log(resultado);

  $("#blue").stop().css("width", resultado + '%').animate({
    width: '100%'
  }, {
    duration: minorMills,
    progress: function progress(promise, _progress, ms) {
      _progress = resultado;
      $('#percentage').text(Math.round(_progress) + '%');
    }
  });
  $('#email-register .btn').click(function () {
    var data = {
      email: $('input').val()
    };
    $.ajax({
      url: "https://beta.v21.pt/ajax/notification.php",
      type: "POST",
      data: data,
      dataType: "json",
      success: function success(response) {
        $("span.error").text(response.result);
      }
    });
  });
});