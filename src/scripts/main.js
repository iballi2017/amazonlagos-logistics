import Toggle from "./Toggle.js";

document.addEventListener("DOMContentLoaded", () => {
    const Init = () => {
        handle_dialog();
        handle_toggle();
        handle_intersection_effects();


    }

    const handle_dialog = () => {
        // const show_modal_btn = document.querySelector(".show-modal-btn");
        // const dialog = document.querySelector("dialog");
        // show_modal_btn.addEventListener("click", () => {
        //     dialog.showModal()
        // });
        const show_modal_btns = document.querySelectorAll(".modal-control");
        for (let i = 0; i < show_modal_btns.length; i++) {
            const btn = show_modal_btns[i];
            console.log("btn: ", btn)
            const attr = btn.getAttribute("aria-dialog-controls");
            const target = document.querySelector(`#${attr}`);
            console.log("target: ", target)
            btn.addEventListener("click", () => {
                target.showModal()
            });

        }
    }

    const handle_toggle = () => {
        const controls = document.querySelectorAll("[aria-controls]");
        for (let i = 0; i < controls.length; i++) {
            const element = controls[i];
            console.warn({ element });
            if (!element.hasAttributes("data-dropdown-toggle")) return;
            const attr = element.getAttribute("aria-controls");
            const target = document.querySelector(`#${attr}`);

            new Toggle(element, target, 'click', 'hidden').toggle();
        }
    }



    function handle_intersection_effects() {
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

    Init();
})