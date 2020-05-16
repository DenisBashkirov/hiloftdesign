$(document).ready(function () {

    let breakpoints = {
        xs: 0,
        sm: 375,
        md: 768,
        lg: 1020,
        xl: 1200
    };

    let mobile_xs = window.matchMedia('(max-width: ' + (breakpoints.sm - 1) + 'px)').matches;
    let mobile_sm = window.matchMedia('(min-width: ' + (breakpoints.sm) + 'px) and (max-width: ' + (breakpoints.md - 1) + 'px)').matches;
    let tablet_md = window.matchMedia('(min-width: ' + (breakpoints.md) + 'px) and (max-width: ' + (breakpoints.lg - 1) + 'px)').matches;
    let tablet_lg = window.matchMedia('(min-width: ' + (breakpoints.lg) + 'px) and (max-width: ' + (breakpoints.xl - 1) + 'px)').matches;
    let desktop = window.matchMedia('(min-width: ' + (breakpoints.xl) + 'px)').matches;


    let $headerDropdown = $('.js-header-nav-dropdown');
    if(desktop) {
        $headerDropdown.on('mouseenter', function () {
            let $dropdownMenu = $(this).find('.header-nav-dropdown-wrapper');
            $dropdownMenu.fadeIn('fast');
        });
        $headerDropdown.on('mouseleave', function () {
            let $dropdownMenu = $(this).find('.header-nav-dropdown-wrapper');
            $dropdownMenu.fadeOut('fast');
        });
    } else {
        let $dropdownMenu = '.header-nav-dropdown-wrapper';
        $headerDropdown.on('click', function () {
            let $dropdownMenu = $(this).find('.header-nav-dropdown-wrapper');
            $dropdownMenu.slideToggle('fast');
        });
    }



    var $hamburger = $('.js-hamburger');
    var $mobileMenu = $('.js-mobile_nav');
    $hamburger.on('click', function () {
        $hamburger.toggleClass('is-active');
        $mobileMenu.fadeToggle();
    });


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
            1020: {
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true,
                spaceBetween: 8
            }
        }
    });

    if(desktop && portfolioItemsSwiper.$wrapperEl !== undefined) {
        portfolioItemsSwiper.destroy();
    }



    /*
    eshlFeaturesSwiper
     */
    var eshlFeaturesSwiper = new Swiper('.eshl-features-swiper', {
        spaceBetween: 16,
        watchOverflow: true,
        pagination: {
            el: '.eshl-features-swiper-pagination',
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
                spaceBetween: 0,
                watchOverflow: false,
                centeredSlides: false,
                noSwiping: false
            },
            // when window width is >= 992px
            1020: {
                init: false,
                noSwiping: true,
                noSwipingClass: 'swiper-wrapper',
                spaceBetween: 0,
            },
            // when window width is >= 1200px
            1200: {
                init: false,
                noSwiping: true,
                noSwipingClass: 'swiper-wrapper',
                spaceBetween: 0,
            }

        }
    });



    /*
    pricing-cards-swiper
     */
    let pricingCardsSwiper = new Swiper('.pricing-cards-swiper', {
        spaceBetween: 30,
        watchOverflow: true,
        pagination: {
            el: '',
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
                initialSlide: 1,
                spaceBetween: 15,
            },
            375: {
                slidesPerView: 'auto',
                centeredSlides: true,
                initialSlide: 1,
                spaceBetween: 30,
            },
            1020: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 30,
                noSwiping: true,
                noSwipingClass: 'swiper-wrapper',
            }
        }
    });


    /*
    special-offers-swiper
     */
    let spericalOffersSwiper = new Swiper('.special-offers-swiper', {
        spaceBetween: 30,
        watchOverflow: true,
        pagination: {
            el: '',
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
                spaceBetween: 15,
            },
            375: {
                slidesPerView: 'auto',
                centeredSlides: true,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true,
                spaceBetween: 30,
                slidesOffsetBefore: 30,
                slidesOffsetAfter: 30
            },
            1020: {
                slidesPerView: 3,
                centeredSlides: false,
                spaceBetween: 30,
                slidesOffsetBefore: 30,
                slidesOffsetAfter: 30
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
                noSwiping: true,
                noSwipingClass: 'swiper-wrapper',
            }
        }
    });


    /*
    FANCYBOX
     */
    $('[data-fancybox="portfolio"]').fancybox({
        toolbar : false,
        keyboard: false,
        infobar: false,
        arrows: false,
        touch: false,
        clickOutside: "close",
        mobile: {
            clickOutside: "close",
        }
    });

});
