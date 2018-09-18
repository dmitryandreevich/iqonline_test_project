$(document).ready(function () {
    $( "#datepicker" ).datepicker();


    $("#slider-amountOfDeposit").slider({
        orientation: "horizontal",
        range: "min",
        min: 1000,
        max: 3000000,
        value: 10000,
        slide: function () {
            $("#input-amountOfDeposit").val($(this).slider("value"));
        }
    });

    $("#slider-amountOfDeposit_replenish").slider({
        orientation: "horizontal",
        range: "min",
        min: 1000,
        max: 3000000,
        value: 10000,
        slide: function () {
            $("#input-amountOfDeposit_replenish").val($(this).slider("value"));
        }
    });

    $("#input-amountOfDeposit").bind('input', function () {
        $("#slider-amountOfDeposit").slider('value', $(this).val());
    });

    $("#input-amountOfDeposit_replenish").bind('input', function () {
        $("#slider-amountOfDeposit_replenish").slider('value', $(this).val());
    });

    $("#calculate").on('click', function () {
       let summn = $('#input-amountOfDeposit').val();
       let month = $('#datepicker').datepicker('getDate').getMonth() + 1;
       let year = $('#datepicker').datepicker('getDate').getYear() + 1900;
       let refill = $('input[name="refill"]:checked').val();
       let amountReplenish = $('#input-amountOfDeposit_replenish').val();

       if(summn >= 1000 && summn <= 3000000) {
           if (refill == 'true' && amountReplenish >= 1000 && amountReplenish <= 3000000) {
               $.post('/app/calc.php', {
                   summn: summn,
                   month: month,
                   year: year,
                   refill: refill,
                   amountReplenish: amountReplenish
               }, function (response) {
                   if (response === 'error')
                       $('#result').text('Ошибка!');
                   else
                       $('#result').text(response + ' руб.');

               });
           } else
               $('#result').text(response + ' руб.');
       }else
           $('#result').text(response + ' руб.');
    });
});
