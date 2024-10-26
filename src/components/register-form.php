<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow text-theme-clr-secondary">
            <!-- Modal header -->
            <div class="relative flex flex-col items-center justify-center p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg lg:text-xl font-bold text-center">
                    Registration
                </h3>
                <p class="lg:text-lg font-bold text-center">If you already have an account, <span class="text-theme-clr-primary">Login here</span></p>

                <button type="button" class="absolute top-3 right-2 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
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
                            <label for="first_name" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">First name</label>
                            <input type="text" id="first_name" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="last_name" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Last name</label>
                            <input type="text" id="last_name" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Email address</label>
                            <input type="email" id="email" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="phone" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Phone</label>
                            <input type="tel" id="phone" class="phone | border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="country" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Country</label>
                            <select id="country" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>France</option>
                                <option>Germany</option>
                            </select>
                        </div>

                        <div class="col-span-12 lg:col-span-6">
                            <label for="state" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">State</label>
                            <select id="state" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5">
                                <option value="abj">Abuja</option>
                                <option value="ada">Adamawa</option>
                            </select>
                        </div>

                        <div class="col-span-12 lg:col-span-6">
                            <label for="lga" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">L.G.A</label>
                            <input type="text" id="lga" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="street" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Street</label>
                            <input type="text" id="street" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Password</label>
                            <div class="relative">
                                <button type="button" class="password-type-toggler | absolute right-2 top-2 opacity-40">
                                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.217 12.6836C16.217 13.4792 15.8888 14.2423 15.3047 14.8049C14.7205 15.3675 13.9283 15.6836 13.1022 15.6836C12.276 15.6836 11.4838 15.3675 10.8996 14.8049C10.3155 14.2423 9.9873 13.4792 9.9873 12.6836C9.9873 11.8879 10.3155 11.1249 10.8996 10.5623C11.4838 9.99966 12.276 9.68359 13.1022 9.68359C13.9283 9.68359 14.7205 9.99966 15.3047 10.5623C15.8888 11.1249 16.217 11.8879 16.217 12.6836Z" stroke="#94AE0A" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.71973 12.6836C4.38098 8.58659 8.26001 5.68359 13.1026 5.68359C17.9451 5.68359 21.8242 8.58659 23.4854 12.6836C21.8242 16.7806 17.9451 19.6836 13.1026 19.6836C8.26001 19.6836 4.38098 16.7806 2.71973 12.6836Z" stroke="#94AE0A" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <!--  -->
                                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4571 15.5738C9.50196 15.5738 7.11135 13.2883 6.89332 10.3916L2.80905 7.23394C2.27175 7.90751 1.77728 8.62002 1.38014 9.39871C1.29116 9.57499 1.24481 9.7697 1.24481 9.96716C1.24481 10.1646 1.29116 10.3593 1.38014 10.5356C3.49041 14.6549 7.67202 17.4427 12.4571 17.4427C13.5045 17.4427 14.5168 17.2869 15.4901 17.0338L13.4694 15.4726C13.1357 15.5369 12.7969 15.5708 12.4571 15.5738ZM24.6749 17.8359L20.3687 14.5109C21.677 13.4088 22.753 12.0575 23.5341 10.5356C23.6231 10.3593 23.6694 10.1646 23.6694 9.96716C23.6694 9.7697 23.6231 9.57499 23.5341 9.39871C21.4238 5.27941 17.2422 2.49167 12.4571 2.49167C10.4528 2.49431 8.48112 2.99895 6.722 3.95951L1.76949 0.132216C1.70488 0.0816922 1.63092 0.0444254 1.55187 0.0225546C1.47282 0.000683703 1.39022 -0.00536064 1.30883 0.00476841C1.22744 0.0148975 1.14884 0.0410005 1.07756 0.0815795C1.00628 0.122158 0.943715 0.176414 0.893455 0.241234L0.130332 1.22629C0.0295131 1.35654 -0.0156172 1.52142 0.00481288 1.68486C0.025243 1.8483 0.109571 1.997 0.23935 2.09843L23.1486 19.8021C23.2132 19.8526 23.2872 19.8899 23.3662 19.9118C23.4453 19.9336 23.5279 19.9397 23.6093 19.9296C23.6907 19.9194 23.7693 19.8933 23.8406 19.8527C23.9118 19.8122 23.9744 19.7579 24.0247 19.6931L24.7878 18.708C24.8383 18.6434 24.8756 18.5695 24.8974 18.4904C24.9193 18.4114 24.9254 18.3288 24.9152 18.2474C24.9051 18.166 24.879 18.0874 24.8384 18.0161C24.7978 17.9448 24.7436 17.8823 24.6788 17.832L24.6749 17.8359ZM17.5225 12.3071L15.9924 11.1235C16.1211 10.7513 16.1895 10.361 16.1949 9.96716C16.202 9.39044 16.074 8.82005 15.8209 8.30175C15.5679 7.78346 15.1969 7.33168 14.7377 6.98265C14.2785 6.63363 13.7439 6.39707 13.1768 6.29196C12.6097 6.18684 12.0258 6.2161 11.4721 6.37737C11.7065 6.69551 11.8333 7.08014 11.8342 7.47533C11.8289 7.60685 11.8093 7.7374 11.7758 7.86468L8.91014 5.64929C9.90523 4.81787 11.1604 4.36181 12.4571 4.36054C13.1935 4.36003 13.9228 4.5047 14.6033 4.78628C15.2837 5.06786 15.902 5.48082 16.4227 6.00154C16.9435 6.52227 17.3564 7.14054 17.638 7.821C17.9196 8.50146 18.0642 9.23075 18.0637 9.96716C18.0637 10.8082 17.8574 11.5946 17.5225 12.3071Z" fill="#94AE0A" />
                                    </svg>

                                </button>
                                <input type="password" id="password" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Confirm password</label>
                            <div class="relative">
                                <button type="button" class="password-type-toggler | absolute right-2 top-2">
                                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.217 12.6836C16.217 13.4792 15.8888 14.2423 15.3047 14.8049C14.7205 15.3675 13.9283 15.6836 13.1022 15.6836C12.276 15.6836 11.4838 15.3675 10.8996 14.8049C10.3155 14.2423 9.9873 13.4792 9.9873 12.6836C9.9873 11.8879 10.3155 11.1249 10.8996 10.5623C11.4838 9.99966 12.276 9.68359 13.1022 9.68359C13.9283 9.68359 14.7205 9.99966 15.3047 10.5623C15.8888 11.1249 16.217 11.8879 16.217 12.6836Z" stroke="#94AE0A" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.71973 12.6836C4.38098 8.58659 8.26001 5.68359 13.1026 5.68359C17.9451 5.68359 21.8242 8.58659 23.4854 12.6836C21.8242 16.7806 17.9451 19.6836 13.1026 19.6836C8.26001 19.6836 4.38098 16.7806 2.71973 12.6836Z" stroke="#94AE0A" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <!--  -->
                                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4571 15.5738C9.50196 15.5738 7.11135 13.2883 6.89332 10.3916L2.80905 7.23394C2.27175 7.90751 1.77728 8.62002 1.38014 9.39871C1.29116 9.57499 1.24481 9.7697 1.24481 9.96716C1.24481 10.1646 1.29116 10.3593 1.38014 10.5356C3.49041 14.6549 7.67202 17.4427 12.4571 17.4427C13.5045 17.4427 14.5168 17.2869 15.4901 17.0338L13.4694 15.4726C13.1357 15.5369 12.7969 15.5708 12.4571 15.5738ZM24.6749 17.8359L20.3687 14.5109C21.677 13.4088 22.753 12.0575 23.5341 10.5356C23.6231 10.3593 23.6694 10.1646 23.6694 9.96716C23.6694 9.7697 23.6231 9.57499 23.5341 9.39871C21.4238 5.27941 17.2422 2.49167 12.4571 2.49167C10.4528 2.49431 8.48112 2.99895 6.722 3.95951L1.76949 0.132216C1.70488 0.0816922 1.63092 0.0444254 1.55187 0.0225546C1.47282 0.000683703 1.39022 -0.00536064 1.30883 0.00476841C1.22744 0.0148975 1.14884 0.0410005 1.07756 0.0815795C1.00628 0.122158 0.943715 0.176414 0.893455 0.241234L0.130332 1.22629C0.0295131 1.35654 -0.0156172 1.52142 0.00481288 1.68486C0.025243 1.8483 0.109571 1.997 0.23935 2.09843L23.1486 19.8021C23.2132 19.8526 23.2872 19.8899 23.3662 19.9118C23.4453 19.9336 23.5279 19.9397 23.6093 19.9296C23.6907 19.9194 23.7693 19.8933 23.8406 19.8527C23.9118 19.8122 23.9744 19.7579 24.0247 19.6931L24.7878 18.708C24.8383 18.6434 24.8756 18.5695 24.8974 18.4904C24.9193 18.4114 24.9254 18.3288 24.9152 18.2474C24.9051 18.166 24.879 18.0874 24.8384 18.0161C24.7978 17.9448 24.7436 17.8823 24.6788 17.832L24.6749 17.8359ZM17.5225 12.3071L15.9924 11.1235C16.1211 10.7513 16.1895 10.361 16.1949 9.96716C16.202 9.39044 16.074 8.82005 15.8209 8.30175C15.5679 7.78346 15.1969 7.33168 14.7377 6.98265C14.2785 6.63363 13.7439 6.39707 13.1768 6.29196C12.6097 6.18684 12.0258 6.2161 11.4721 6.37737C11.7065 6.69551 11.8333 7.08014 11.8342 7.47533C11.8289 7.60685 11.8093 7.7374 11.7758 7.86468L8.91014 5.64929C9.90523 4.81787 11.1604 4.36181 12.4571 4.36054C13.1935 4.36003 13.9228 4.5047 14.6033 4.78628C15.2837 5.06786 15.902 5.48082 16.4227 6.00154C16.9435 6.52227 17.3564 7.14054 17.638 7.821C17.9196 8.50146 18.0642 9.23075 18.0637 9.96716C18.0637 10.8082 17.8574 11.5946 17.5225 12.3071Z" fill="#94AE0A" />
                                    </svg>

                                </button>
                                <input type="password" id="confirm_password" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5" required />
                            </div>
                        </div>

                        <div class="col-span-12">
                            <button type="submit" class="bg-theme-clr-primary focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full px-5 py-2.5 text-center font-semibold">Register</button>
                            <small class="block text-center mt-4">By signing up you accept our <a href="#" class="text-theme-clr-secondary font-semibold">terms and conditions </a> & <a href="#" class="text-theme-clr-secondary font-semibold">privacy policy</a></small>
                        </div>




                    </div>


                    <!-- <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Your email</label>
                <input type="email" id="email" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-theme-clr-primary/10 dark:focus:border-theme-clr-primary/10" placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-theme-clr-secondary/10 dark:text-white">Your password</label>
                <input type="password" id="password" class="border border-gray-300 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-theme-clr-primary/10 dark:focus:border-theme-clr-primary/10" required />
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-theme-clr-secondary/10 dark:text-gray-300">Remember me</label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->


                </form>
            </div>
            <!-- Modal footer -->
            <!-- <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div> -->
        </div>
    </div>
</div>


<!--  -->