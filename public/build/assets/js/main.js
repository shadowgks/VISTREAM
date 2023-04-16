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

//B ajax
//B search
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
//E search

//B Watchlist
//B stor
$('.btn_watchlist').on('click', function (e) {
    e.preventDefault();
    var media_slug = $(this).data('media');
    var route = $(this).data('route');

    $.ajax({
        url: route,
        method: 'POST',
        data: {
            media: media_slug
        },
        success: function (data) {
            console.log(data);
        }
    })
})
//E stor

//B count
function count() {
    $.ajax({
        method: "GET",
        url: "/watchlist/count",
        success: function (data) {
            $('.watchlist_count ').html(data.count);
        }
    });
}
count();
//E count

//E watchlist
//E ajax


