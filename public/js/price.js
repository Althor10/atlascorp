$(document).ready(function () {
    $('#pricePer').hide();

    $('#roomType').on('change',function () {
       // alert('!!!');
        var roomType = $('#roomType').val();
        var value =$('#pricePer').val();
        $('#pricePerDay').val(roomType);
        $('#pricePer').show();

    });

    $('#bookDate2').on('change',function () {
        var date11 = $('#bookDate').val();
        var date21 = $('#bookDate2').val();

        function parseDate(input) {
            var parts = input.match(/(\d+)/g);
            // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
            return new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
        }

        date1 = parseDate(date11);
        date2 = parseDate(date21);

        function datum( date1, date2 ) {
            //Get 1 day in milliseconds
            var one_day=1000*60*60*24;

            // Convert both dates to milliseconds
            var date1_ms = date1.getTime();
            var date2_ms = date2.getTime();

            // Calculate the difference in milliseconds
            var difference_ms = date2_ms - date1_ms;

            // Convert back to days and return
            return Math.round(difference_ms/one_day);
        }

        var dani = datum(date1,date2);
        console.log(datum);

        var ppD = $('#pricePerDay').val();
        console.log(ppD);
        var fullPrice = dani*ppD;
        $('#fullPriceFake').val(fullPrice);
        $('#fullPrice').val(fullPrice);
        console.log(fullPrice);

    })

})

