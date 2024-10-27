import { handle_intersection_effects } from "./intersection-effects.js";
import { handle_dialog } from "./modal-dialog.js";
import Toggle from "./Toggle.js";

document.addEventListener("DOMContentLoaded", () => {
    const Init = () => {
        handle_dialog();
        handle_toggle();
        handle_intersection_effects();
        activeSidenavLink();


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


    }



    function activeSidenavLink() {

        // Get URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab') || 'user-profile';
        console.log({tab})

        // Hide all tab contents and remove active classes from all tab links
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.tab-link').forEach(el => el.classList.remove('bg-theme-clr-primary'));

        // Show the active tab content and add active class to the corresponding tab link
        document.querySelector(`#tab-${tab}`)?.classList.remove('hidden');
        document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`)?.classList.add('bg-theme-clr-primary');
    }



    const handle_toggle = () => {
        const controls = document.querySelectorAll("[aria-controls]");
        for (let i = 0; i < controls.length; i++) {
            const element = controls[i];
            if (!element.hasAttributes("data-dropdown-toggle")) return;
            const attr = element.getAttribute("aria-controls");
            const target = document.querySelector(`#${attr}`);

            new Toggle(element, target, 'click', 'hidden').toggle();
        }
    }


    Init();
})