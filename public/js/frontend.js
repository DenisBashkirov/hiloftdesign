$(document).ready(function () {

    var popStylesSwiper = new Swiper('.pop-styles-swiper', {
        spaceBetween: 8,
        watchOverflow: true,
        pagination: {
            el: '.pop-styles-swiper-pagination',
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


    var teamPeopleSwiper = new Swiper('.team-people-swiper', {
        spaceBetween: 8,
        watchOverflow: true,
        pagination: {
            el: '.team-people-swiper-pagination',
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
                watchOverflow: false,
                spaceBetween: 8
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 5,
                spaceBetween: 8
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 5,
                spaceBetween: 0
            }
        }
    });


    var portfolioItemsSwiper = new Swiper('.portfolio-items-swiper', {
        spaceBetween: 8,
        watchOverflow: true,
        pagination: {
            el: '.portfolio-items-swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                centeredSlides: true,
                centeredSlidesBounds: true
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                watchOverflow: false,
                spaceBetween: 8
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true,
                spaceBetween: 8
            }
        }
    });

    if($(window).width() >= 1200) {
        portfolioItemsSwiper.destroy();
        console.log('destroy');
        console.log($(window).width());
    }

});
