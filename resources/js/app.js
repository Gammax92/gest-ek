import flatpickr from "flatpickr";
require('./bootstrap');

// custom select2
$('#kt_datatable_search_status').select2();
$('#kt_datatable_search_type').select2();



//CART
let datepickers = document.querySelectorAll('.datepicker');

datepickers.forEach((el, i) => {
    flatpickr(el, {
        inline: false,
        enableTime: true,
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        // minDate: "today",
        enableTime: false,
    });
});


// TODO: fix select2
$('.select2').select2();
