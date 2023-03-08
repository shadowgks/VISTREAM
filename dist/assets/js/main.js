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
//E

//B jquery slides
var cont = 0;
function loopSlider() {
    var xx = setInterval(function () {
        switch (cont) {
            case 0: {
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
                cont = 1;
                break;
            }
            case 1:
                {
                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-purple-800");
                    $("#sButton1").addClass("bg-purple-800");
                    cont = 0;
                    break;
                }
        }
    }, 8000);
}

function reinitLoop(time) {
    clearInterval(xx);
    setTimeout(loopSlider(), time);
}

function sliderButton1() {
    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont = 0

}

function sliderButton2() {
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont = 1

}

$(window).ready(function () {
    $("#slider-2").hide();
    $("#sButton1").addClass("bg-purple-800");
    loopSlider();
});
//E jquery slides

//B swiper
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});
//E swiper