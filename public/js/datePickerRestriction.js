//Restricting the date picker so that you are unable to choose a date before today
$(document).ready(function () {
    $('#portDueDate').attr('min', new Date().toISOString().split('T')[0])
    $('#warehouseDueDate').attr('min', new Date().toISOString().split('T')[0])
});
