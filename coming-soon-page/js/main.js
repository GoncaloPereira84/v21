window.addEventListener("load", function () {
    var today = new Date();
    var startDate = new Date('11/30/2020 23:59:00'); //1 Dez 2020
    var endDate = new Date('01/20/2021 00:00:00'); //15 Jan 2021
    // var seconds = (endDate.getTime() - startDate.getTime()) / 1000;
    var mills = (endDate.getTime() - startDate.getTime());

    var totalMills = mills;
    var minorMills = (today.getTime() - startDate.getTime());

    var resultado = Number(100) * Number(minorMills) / Number(totalMills);
    // console.log(resultado);

    // $("#blue").stop().css("width", resultado + '%').animate({
    //     width: '100%'
    // }, {
    //     duration: minorMills,
    //     progress: function(promise, progress, ms) {
    //         progress = resultado;
    //         $('#percentage').text(Math.round(progress) + '%');
    //     }
    // });

    $("#blue").stop().css("width", '85%').animate({
        width: '100%'
    }, {
        duration: minorMills,
        progress: function(promise, progress, ms) {
            progress = resultado;
            $('#percentage').text('85%');
        }
    });

    $('#email-register .btn').click(function () {
        var data = {
            email: $('input').val()
        }
        $.ajax({
            url: "https://www.v21.pt/ajax/notification.php",
            type: "POST",
            data: data,
            dataType: "json",
            success: function (response) {
                $("span.error").text(response.result);
            }
        });
    })

    
});