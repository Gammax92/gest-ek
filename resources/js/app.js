import flatpickr from "flatpickr";
import tippy from 'tippy.js';

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



//TYPPPYS
let tippys = document.querySelectorAll('.js--tippy');
tippys.forEach((el, i) => {
    let t = tippy(el, {
      content: el.title
    });
    t.popper.classList.add(el.dataset.tippiclass);
});
