$(document).ready(function () {

    var mySwiper = new Swiper('.pop-styles-swiper', {
        spaceBetween: 8,
        watchOverflow: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                centeredSlides: false,
                watchOverflow: false
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 5,
                spaceBetween: 0
            }
        }
    });


    var mySwiper = new Swiper('.team-people-swiper', {
        spaceBetween: 8,
        watchOverflow: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                centeredSlides: false,
                watchOverflow: false
            },
            // when window width is >= 1024px
            1024: {
                slidesPerView: 5,
                spaceBetween: 8
            }
            // when window width is >= 1200px
            1200: {
                slidesPerView: 5,
                spaceBetween: 0
            }
        }
    });

});
