$(function () {
    function Init() {
        heroSlider();
    }

    function heroSlider() {
        var heroCrousel = $(".hero-carousel");
        heroCrousel.owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            animateOut: "fadeOut",
            animateOut: "slideOutDown",
            animateIn: "flipInX",
            animateOut: 'fadeOut',
            items: 1,
            // dotsContainer: '#custom-hero-dots',
            lazyLoad: true,
        });
    }


    Init();

})