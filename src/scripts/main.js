import Toggle from "./Toggle.js";

document.addEventListener("DOMContentLoaded", () => {
    const Init = () => {
        handle_dialog();
        handle_toggle();
        handle_intersection_effects();


        const password_type_togglers = document.querySelectorAll(".password-type-toggler");
        for (let i = 0; i < password_type_togglers.length; i++) {
            const toggler = password_type_togglers[i];
            toggler.addEventListener("click", () => {
                const password_input = toggler.nextElementSibling;
                password_input.type === "password" ?
                    (password_input.type = "text", toggler.firstElementChild.classList.add('hidden'), toggler.lastElementChild.classList.remove('hidden')) :
                    (password_input.type = "password", toggler.firstElementChild.classList.remove('hidden'), toggler.lastElementChild.classList.add('hidden'));
                console.log({ firstChild: toggler.firstElementChild })
                console.log({ lastChild: toggler.lastElementChild })
            });
        }


        /** */

        const close_login_open_register_form_btn = document.getElementById("close-login-open-register-form-btn");
        const close_register_open_login_form_btn = document.getElementById("close-register-open-login-form-btn");
        const open_login_form_btn = document.getElementById("open-login-form-btn");
        const open_register_form_btn = document.getElementById("open-register-form-btn");
        const loginTargetEl = document.querySelector("#login-modal");
        const registerTargetEl = document.querySelector("#register-modal");
        const options = {
            // backdrop: 'dynamic',
            backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
            closable: true,
            backdrop: 'dynamic', // allows closing on backdrop click
            onHide: () => { console.log("Modal closed login"); },
            onShow: () => {
                console.log('modal is shown login');
            },
        }
        const options2 = {
            // backdrop: 'dynamic',
            backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
            closable: true,
            backdrop: 'dynamic', // allows closing on backdrop click
            onHide: () => { console.log("Modal closed register"); },
            onShow: () => {
                console.log('modal is shown register');
            },
        }
        const loginModal = new Modal(loginTargetEl, options);
        const registerModal = new Modal(registerTargetEl, options2);

        close_login_open_register_form_btn.addEventListener("click", () => {
            // console.log("hello", modal);
            loginModal && loginModal.hide()
            registerModal && registerModal.show()
        })

        close_register_open_login_form_btn.addEventListener("click", () => {
            registerModal && registerModal.hide()
            loginModal && loginModal.show()
        })
        open_login_form_btn.addEventListener("click", () => {
            loginModal && loginModal.show()
        })
        open_register_form_btn.addEventListener("click", () => {
            registerModal && registerModal.show()
        })

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