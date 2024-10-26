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
                            <input type="text" id="first_name" class="border border-gray-300 text-theme-clr-secondary/10 text-sm rounded-lg focus:ring-theme-clr-primary/10 focus:border-theme-clr-primary/10 block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="last_name" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Last name</label>
                            <input type="text" id="last_name" class="border border-gray-300 text-theme-clr-secondary/10 text-sm rounded-lg focus:ring-theme-clr-primary/10 focus:border-theme-clr-primary/10 block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Email address</label>
                            <input type="email" id="email" class="border border-gray-300 text-theme-clr-secondary/10 text-sm rounded-lg focus:ring-theme-clr-primary/10 focus:border-theme-clr-primary/10 block w-full p-2.5" required />
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="phone" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Phone</label>
                            <input type="tel" id="phone" class="phone | border border-gray-300 text-theme-clr-secondary/10 text-sm rounded-lg focus:ring-theme-clr-primary/10 focus:border-theme-clr-primary/10 block w-full p-2.5" required />
                        </div>
                    </div>


                    <!-- <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-theme-clr-secondary dark:text-white">Your email</label>
                <input type="email" id="email" class="border border-gray-300 text-theme-clr-secondary/10 text-sm rounded-lg focus:ring-theme-clr-primary/10 focus:border-theme-clr-primary/10 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-theme-clr-primary/10 dark:focus:border-theme-clr-primary/10" placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-theme-clr-secondary/10 dark:text-white">Your password</label>
                <input type="password" id="password" class="border border-gray-300 text-theme-clr-secondary/10 text-sm rounded-lg focus:ring-theme-clr-primary/10 focus:border-theme-clr-primary/10 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-theme-clr-primary/10 dark:focus:border-theme-clr-primary/10" required />
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