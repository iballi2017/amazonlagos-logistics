<!-- Main modal -->
<div id="login-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow text-theme-clr-secondary">
            <!-- Modal header -->
            <div class="relative flex flex-col items-center justify-center p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg lg:text-xl font-bold text-center">
                    Registration
                </h3>
                <p class="lg:text-lg font-bold text-center">If you already have an account, <span class="text-theme-clr-primary">Login here</span></p>

                <button type="button" class="absolute top-3 right-2 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="login-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="">
                    <div class="grid grid-cols-12 gap-2 lg:gap-4">
                        <div class="col-span-12 lg:col-span-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Email address</label>
                            <input type="email" id="email" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Password</label>
                            <div class="relative">
                                <button type="button" class="password-type-toggler | absolute right-2 top-2 opacity-40">
                                    <img src="./assets/icons/icon-eye.svg" alt="show">
                                    <span class="sr-only">Toggle</span>
                                    <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                                </button>
                                <input type="password" id="password" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                            </div>
                        </div>

                        <div class="col-span-12">
                            <button type="submit" class="bg-theme-clr-primary focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full px-5 py-2.5 text-center font-semibold">Register</button>
                            <small class="block text-center mt-4">By signing up you accept our <a href="#" class="text-theme-clr-secondary font-semibold">terms and conditions </a> & <a href="#" class="text-theme-clr-secondary font-semibold">privacy policy</a></small>
                        </div>




                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!--  -->