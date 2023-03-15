//B navbar menu mobile
function Menu(e) {
    const link = document.querySelector('#links-nav');
    if (e.getAttribute("class") == 'fa-solid fa-bars') {
        e.classList.remove("fa-bars");
        e.classList.add("fa-xmark");
        //links show
        link.classList.add('top-[80px]');
    } else {
        e.classList.add("fa-bars");
        e.classList.remove("fa-xmark");
        //links remove
        link.classList.remove('top-[80px]');
    }
}
//E navbar menu mobile

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