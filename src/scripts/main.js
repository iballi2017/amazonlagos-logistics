import Toggle  from "./Toggle.js";

document.addEventListener("DOMContentLoaded", () => {
    const Init = () => {
        handle_toggle();
    }

    const handle_toggle = () => {
        const controls = document.querySelectorAll("[aria-controls]");
        for (let i = 0; i < controls.length; i++) {
            const element = controls[i];
            const attr = element.getAttribute("aria-controls");
            const target = document.querySelector(`#${attr}`);

            new Toggle(element, target, 'click', 'show').toggle();
        }
    }

    Init();
})