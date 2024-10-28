export const handle_dialog = () => {
    const close_login_open_register_form_btn = document.getElementById("close-login-open-register-form-btn");
    const close_register_open_login_form_btn = document.getElementById("close-register-open-login-form-btn");
    const open_login_form_btn = document.getElementById("open-login-form-btn");
    const open_register_form_btn = document.getElementById("open-register-form-btn");
    const loginTargetEl = document.querySelector("#login-modal");
    const registerTargetEl = document.querySelector("#register-modal");
    const options = {
        backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
        closable: true,
        backdrop: 'static',
        onHide: () => {
            // console.log("Modal closed login");
        },
        onShow: () => {
            // console.log('modal is shown login');
        },
    }
    
    const loginModal = loginTargetEl && new Modal(loginTargetEl, options);
    const registerModal = registerTargetEl && new Modal(registerTargetEl, options);

    close_login_open_register_form_btn?.addEventListener("click", () => {
        loginModal && loginModal.hide()
        registerModal && registerModal.show()
    })

    close_register_open_login_form_btn?.addEventListener("click", () => {
        registerModal && registerModal.hide()
        loginModal && loginModal.show()
    })
    open_login_form_btn?.addEventListener("click", () => {
        loginModal && loginModal.show()
    })
    open_register_form_btn?.addEventListener("click", () => {
        registerModal && registerModal.show()
    })

}
