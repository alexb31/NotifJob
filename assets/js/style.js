jQuery(document).ready(function($) {

    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd'
    });

    $('.timepicker').timepicker({
        timeFormat: 'HH:mm',
        interval: 30,
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });

});