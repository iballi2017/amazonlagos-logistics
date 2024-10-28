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

        // Go to the previous item
        $('.hero-carousel').next().click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            heroCrousel.trigger('prev.owl.carousel', [300]);
        })
        // Go to the previous item
        $('.hero-carousel').next().next().click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            heroCrousel.trigger('next.owl.carousel');
        })

    }


    Init();

})