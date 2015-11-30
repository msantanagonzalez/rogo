var queryDate = document.getElementById('inputDate').value;
dateParts = queryDate.match(/(\d+)/g);
realDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);
$( '#datepicker' ).datepicker({
    dateFormat: 'yy-mm-dd',
    minDate: '-12m',
    maxDate: '+0d',
    onSelect: function(dateText, inst) {
        window.location.replace("questions/index/date:"+inst.selectedYear+"-"+inst.selectedMonth+"-"+inst.selectedDay);
    }
});
$('#datepicker').datepicker('setDate', realDate);