
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
// const player = new Plyr('#player');

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
    var heart = $(this);
    var page_watchlist_load = $('.load_div');
    console.log(page_watchlist_load);

    $.ajax({
        url: route,
        method: 'POST',
        data: {
            media: media_slug
        },

        success: function (data) {
            if(data == 'stored'){
                heart.removeClass('text-white');
                heart.addClass('text-red-500');
            }else{
                heart.removeClass('text-red-500');
                heart.addClass('text-white');
                $('.load_div').load(location.href + ' .load_div');
            }

            console.log(data);
        }
    })
    count();
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


