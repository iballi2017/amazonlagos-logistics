export function handle_intersection_effects() {
    /* Page Content Intersection Observer */
    const faders = document.querySelectorAll(".fade-in");
    const sliders = document.querySelectorAll(".slide-in");
    const fromBottoms = document.querySelectorAll(".from-bottom");

    const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -100px 0px",
    };
    const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
        entries.forEach((entry) => {
            let dataDelay = entry.target.getAttribute("data-delay");

            if (!entry.isIntersecting) return;
            if (dataDelay) {
                setTimeout(() => {
                    entry.target.classList.add("appear");
                    appearOnScroll.unobserve(entry.target);
                }, parseInt(dataDelay));
            } else {
                entry.target.classList.add("appear");
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);

    faders.forEach((fader) => {
        appearOnScroll.observe(fader);
    });

    sliders.forEach((slider) => {
        appearOnScroll.observe(slider);
    });

    fromBottoms.forEach((slider) => {
        appearOnScroll.observe(slider);
    });

}
