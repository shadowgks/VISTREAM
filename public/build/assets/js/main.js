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

// const date_actor = document.getElementById('date_flatpickr_actor');
// const date_media = document.getElementById('date_flatpickr_media');
// if (date_actor) {
//     flatpickr(date_actor, {
//         enableTime: false,
//         altInput: true,
//         altFormat: "F j, Y",
//         dateFormat: "Y-m-d",
//         maxDate: new Date(),
//     });
// }
// if()
// flatpickr(date_media, {
//     enableTime: false,
//     altInput: true,
//     altFormat: "F j, Y",
//     dateFormat: "Y-m-d",
//     maxDate: new Date(),
// });
//B data flapickr
$(".date_flatpickr").flatpickr({
    enableTime: false,
    // altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    maxDate: new Date(),
});
//E data flapickr

//ajax
$('.search-navbar').on('keyup', function () {
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



