<h2 class="p-4 text-lg font-bold bg-theme-clr-light-100 text-theme-clr-secondary">Change Password</h2>

<div class="relative overflow-x-auto text-theme-clr-secondary">
    <div class="p-4">
        <form action="">
            <div class="grid grid-cols-2 gap-2 lg:gap-4">
                <div class="col-span-2 lg:col-span-1">
                    <label for="password_changePasswordField" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Old Password</label>
                    <div class="relative">
                        <button type="button" class="password-type-toggler | absolute right-2 top-2 opacity-40">
                            <img src="./assets/icons/icon-eye.svg" alt="show">
                            <span class="sr-only">Toggle</span>
                            <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                        </button>
                        <input type="password" id="password_changePasswordField" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <label for="new_password" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">New Password</label>
                    <div class="relative">
                        <button type="button" class="password-type-toggler | absolute right-2 top-2 opacity-40">
                            <img src="./assets/icons/icon-eye.svg" alt="show">
                            <span class="sr-only">Toggle</span>
                            <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                        </button>
                        <input type="password" id="new_password" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <label for="confirm_password_changePasswordField" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Confirm New Password</label>
                    <div class="relative">
                        <button type="button" class="password-type-toggler | absolute right-2 top-2 opacity-40">
                            <img src="./assets/icons/icon-eye.svg" alt="show">
                            <span class="sr-only">Toggle</span>
                            <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                        </button>
                        <input type="password" id="confirm_password_changePasswordField" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                </div>
                <div class="col-span-2">

                </div>
            </div>
        </form>
    </div>
</div>