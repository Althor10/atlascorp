function timeConverterTommorow(UNIX_timestamp){
    var a = new Date(Date.now() + 86400000);
    var year = a.getFullYear().toString();
    var month = a.getMonth() + 1;
    var monthStr = month.toString();
    if(monthStr.length === 1){
        monthStr = "0" + monthStr;
    }
    var date = a.getDate().toString();
    if(date.length === 1){
        date = "0" + date;
    }
    var time = year + '-' + monthStr + '-' + date ;
    return time;
}
function timeConverterMonth(UNIX_timestamp) {
    var a = new Date(Date.now() + 2592000000);
    var year = a.getFullYear();
    var month = a.getMonth() + 1;
    var monthStr = month.toString();
    if(monthStr.length === 1){
        monthStr = "0" + monthStr;
    }
    var date = a.getDate().toString();
    if(date.length === 1){
        date = "0" + date;
    }
    var time = year + '-' + monthStr + '-' + date ;
    return time;
}
var date = $('#bookDate');
var date2 = $('#bookDate2');
date.attr('min',timeConverterTommorow(0));
date.attr('max',timeConverterMonth(0));

date2.attr('min',timeConverterTommorow(0));
date2.attr('max',timeConverterMonth(0));

