//B swiper
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 5000,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});
//E swiper

//Video playe "plyr.js"
const player = new Plyr('#player');

const myDatePicker = document.getElementById('date_flatpickr');

if (myDatePicker) {
    flatpickr(myDatePicker, {
        enableTime: false,
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        maxDate: new Date(),
        // dateFormat: "Y-m-d H:i",
        // time_24hr: true
    });
}


//ajax
$('#search-navbar').on('keyup', function () {
    var value = $(this).val();
    var url_route = $(this).data('url');

    $.ajax({
        url: url_route,
        type: 'GET',
        data: { 'name': value },
        success: function (data) {
            $('#search-results').html(data);
        },
    })
})



