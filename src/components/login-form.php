<!-- Main modal -->
<div id="login-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white shadow text-theme-clr-secondary">
            <!-- Modal header -->
            <div class="relative flex flex-col items-center justify-center p-4 md:pt-8">
                <h3 class="text-lg lg:text-xl font-bold text-center">
                    Welcome back,
                </h3>
                <p class="lg:text-lg font-bold text-center">Don't have an account, <button id="close-login-open-register-form-btn" class="text-theme-clr-primary">Create new account</button></p>

                <button type="button" class="absolute top-5 right-5 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="login-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>



            <!-- Modal body -->
            <div class="p-4 md:p-8 space-y-8">
                <!-- <button type="submit" class="flex gap-4 items-center justify-center bg-white border border-theme-clr-light-800 focus:ring-1 focus:outline-none focus:ring-theme-clr-primary rounded-lg text-sm w-full px-5 py-3 text-center font-semibold"> -->
                <button type="submit" class="flex gap-4 items-center justify-center bg-white border border-theme-clr-light-800 focus:ring-1 focus:outline-none focus:ring-theme-clr-primary rounded-lg text-sm w-full px-5 py-3 text-center font-semibold">

                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.76215 15.7122L4.85712 19.0908L1.54928 19.1607C0.560726 17.3272 0 15.2294 0 13.0001C0 10.8443 0.524265 8.81147 1.45356 7.02148H1.45427L4.39918 7.56139L5.68922 10.4886C5.41922 11.2758 5.27206 12.1208 5.27206 13.0001C5.27216 13.9543 5.44502 14.8687 5.76215 15.7122Z" fill="#FBBB00" />
                        <path d="M25.7732 10.5723C25.9225 11.3587 26.0003 12.1708 26.0003 13.0008C26.0003 13.9315 25.9025 14.8394 25.7161 15.7151C25.0832 18.6951 23.4296 21.2973 21.1389 23.1387L21.1382 23.138L17.429 22.9487L16.904 19.6715C18.424 18.7801 19.6118 17.3851 20.2376 15.7151H13.2861V10.5723H20.339H25.7732Z" fill="#518EF8" />
                        <path d="M21.1374 23.1379L21.1381 23.1386C18.9103 24.9293 16.0802 26.0007 12.9995 26.0007C8.04882 26.0007 3.74456 23.2336 1.54883 19.1614L5.76169 15.7129C6.85953 18.6429 9.68596 20.7286 12.9995 20.7286C14.4238 20.7286 15.7581 20.3436 16.9031 19.6714L21.1374 23.1379Z" fill="#28B446" />
                        <path d="M21.2984 2.99284L17.087 6.44068C15.902 5.69999 14.5012 5.27211 13.0005 5.27211C9.61195 5.27211 6.73266 7.45352 5.68981 10.4886L1.45481 7.02142H1.4541C3.61769 2.85 7.97624 0 13.0005 0C16.1548 0 19.047 1.12359 21.2984 2.99284Z" fill="#F14336" />
                    </svg>
                    <span>
                        Login with Google
                    </span>
                </button>

                <div class="flex gap-4 items-center justify-between">
                    <hr class="w-full border-t border-black/30">
                    <p>OR</p>
                    <hr class="w-full border-t border-black/30">
                </div>

                <form action="" autocomplete="off">
                    <div class="grid grid-cols-12 gap-2 lg:gap-4">
                        <div class="col-span-12">
                            <label for="login_email" class="mb-2 font-medium text-theme-clr-secondary flex items-center justify-between cursor-pointer">
                                <span>Email address</span>

                                <a href="./forgot-password.php" class="text-sm text-[#518EF8]"><i>Forgot password</i></a>
                            </label>
                            <input autocomplete="new-email" type="email" id="login_email" class="border border-theme-clr-light-800 text-theme-clr-secondary rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full px-2.5 py-3" required />
                        </div>
                        <div class="col-span-12">
                            <label for="login_password" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Password</label>
                            <input autocomplete="new-password" type="password" id="login_password" class="border border-theme-clr-light-800 text-theme-clr-secondary rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full px-2.5 py-3" required />
                        </div>
                        <div class="col-span-12">

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-theme-clr-light-800 rounded bg-gray-50 focus:ring-3 focus:ring-theme-clr-primary checked:bg-theme-clr-primary" required />
                                </div>
                                <label for="terms" class="ms-2 font-medium cursor-pointer">Keep me login</label>
                            </div>


                        </div>


                        <div class="col-span-12">
                            <button type="submit" class="bg-theme-clr-primary focus:ring-4 focus:outline-none focus:ring-theme-clr-primary rounded-lg w-full px-5 py-3 text-center font-semibold">
                                Login
                            </button>
                        </div>




                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!--  -->