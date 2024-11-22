import { handle_intersection_effects } from "./intersection-effects.js";
import { handle_dialog } from "./modal-dialog.js";
import TabNavigation from "./tab-navigation.js";
import Toggle from "./Toggle.js";

document.addEventListener("DOMContentLoaded", () => {
    const Init = () => {
        handle_page_loader();
        handle_dialog();
        handle_toggle();
        handle_intersection_effects();
        userAccountSidebarTabs();
        termsAndConditionsTabs();
        handle_back_history();




        function handle_page_loader() {
            /**remove page loader */
            const page_loader = document.querySelector(".page-loader");
            page_loader?.classList.contains("show") ?
                page_loader.classList.remove("show") :
                null;
        }



        const password_type_togglers = document.querySelectorAll(".password-type-toggler");
        for (let i = 0; i < password_type_togglers.length; i++) {
            const toggler = password_type_togglers[i];
            toggler.addEventListener("click", () => {
                const password_input = toggler.nextElementSibling;
                password_input.type === "password" ?
                    (password_input.type = "text", toggler.firstElementChild.classList.add('hidden'), toggler.lastElementChild.classList.remove('hidden')) :
                    (password_input.type = "password", toggler.firstElementChild.classList.remove('hidden'), toggler.lastElementChild.classList.add('hidden'));
            });
        }


    }


    function termsAndConditionsTabs() {
        const attribute = {
            qualifiedName: 'aria-current',
            value: 'document'
        }
        const childrenPages = []
        const wrapper = document.querySelector('#terms-and-conditions-wrapper');
        const activeClass = null;

        const options = {
            htmlAttribute: attribute,
            defaultPage: 'terms-and-conditons',
            childrenPages: childrenPages,
        }
        const tabNavigation = new TabNavigation(wrapper, activeClass, options)
        tabNavigation.activeSidenavLink();
    }



    function userAccountSidebarTabs() {
        const activeClass = 'bg-theme-clr-primary';
        const wrapper = document.querySelector('#user-account-wrapper');
        const childrenPages = [
            {
                wrapperPage: 'user-profile',
                page: 'edit-profile'
            }, {
                wrapperPage: 'orders',
                page: 'order-details'
            }, {
                wrapperPage: 'tracking',
                page: 'tracking-status'
            },
        ];

        const options = {
            htmlAttribute: null,
            defaultPage: 'user-profile',
            childrenPages: childrenPages,
        }
        const tabNavigation = new TabNavigation(wrapper, activeClass, options)
        tabNavigation.activeSidenavLink();
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


    const handle_back_history = () => {
        const backBtns = document.querySelectorAll('.back-btn');
        for (let i = 0; i < backBtns.length; i++) {
            const element = backBtns[i];
            element.addEventListener('click', () => {
                window.history.back();
            })
        }
    }


    Init();
})