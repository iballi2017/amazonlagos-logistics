<!-- Main modal -->
<div id="register-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white shadow text-theme-clr-secondary">
            <!-- Modal header -->
            <div class="relative flex flex-col items-center justify-center p-4 md:pt-8 dark:border-gray-600">
                <h3 class="text-lg lg:text-xl font-bold text-center">
                    Registration
                </h3>
                <p class="lg:text-lg font-bold text-center">If you already have an account, <button id="close-register-open-login-form-btn" class="text-theme-clr-primary">Login here</>
                </p>

                <button type="button" class="absolute top-5 right-5 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="register-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>



            <!-- Modal body -->
            <div class="p-4 md:p-8 space-y-4">


                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                </div>
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
                </div>
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
                </div>


                <form action="">
                    <div class="grid grid-cols-12 gap-2 lg:gap-4">
                        <div class="col-span-12">
                            <label for="username-error" class="block mb-2 font-medium text-red-700 dark:text-red-500 cursor-pointer">Your name (error sample field!)</label>
                            <input type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Bonnie Green">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>

                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="first_name" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">First name</label>
                            <input type="text" id="first_name" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="last_name" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Last name</label>
                            <input type="text" id="last_name" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="email" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Email address</label>
                            <input type="email" id="email" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="phone" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Phone</label>
                            <input type="tel" id="phone" class="phone | border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="country" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Country</label>
                            <select id="country" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>France</option>
                                <option>Germany</option>
                            </select>
                        </div>

                        <div class="col-span-12 lg:col-span-6">
                            <label for="state" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">State</label>
                            <select id="state" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3">
                                <option value="abj">Abuja</option>
                                <option value="ada">Adamawa</option>
                            </select>
                        </div>

                        <div class="col-span-12 lg:col-span-6">
                            <label for="lga" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">L.G.A</label>
                            <input type="text" id="lga" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="street" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Street</label>
                            <input type="text" id="street" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="password" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Password</label>
                            <div class="relative">
                                <button type="button" class="password-type-toggler | absolute right-2 top-2 opacity-40">
                                    <img src="./assets/icons/icon-eye.svg" alt="show">
                                    <span class="sr-only">Toggle</span>
                                    <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                                </button>
                                <input type="password" id="password" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="confirm_password" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Confirm password</label>
                            <div class="relative">
                                <button type="button" class="password-type-toggler | absolute right-2 top-2 opacity-40">
                                    <img src="./assets/icons/icon-eye.svg" alt="show">
                                    <span class="sr-only">Toggle</span>
                                    <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                                </button>
                                <input type="password" id="confirm_password" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                            </div>
                        </div>

                        <div class="col-span-12">
                            <button type="submit" class="bg-theme-clr-primary focus:ring-2 focus:outline-none focus:ring-theme-clr-primary rounded-lg w-full px-5 py-3 text-center font-semibold">Register</button>
                            <small class="block text-center mt-4">By signing up you accept our <a href="#" class="text-theme-clr-secondary font-semibold">terms and conditions </a> & <a href="#" class="text-theme-clr-secondary font-semibold">privacy policy</a></small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--  -->