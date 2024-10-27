<!-- main header -->
<header>
    <nav class="bg-theme-clr-secondary text-white">
        <div class="main-container py-6 lg:py-0">
            <div class="relative flex items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" data-target="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-end sm:items-stretch sm:justify-start">
                    <a href="./">
                        <div class="flex flex-shrink-0 items-center | font-bold text-2xl">
                            <img class="w-32"
                                src="./assets/images/brand-logo.svg"
                                alt="Your Company">
                            <span class="sr-only">AmazonLagos</span>
                        </div>
                    </a>
                </div>
                <div class="hidden sm:flex absolute inset-y-0 right-0 items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <div class="flex items-center space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="./" class="link | rounded-md px-3 xl:px-6 py-8 block h-full text-xs font-medium uppercase"
                            aria-current="page">Home</a>
                        <a href="#"
                            class="link | rounded-md px-3 xl:px-6 py-8 block h-full text-xs font-medium uppercase">About Us</a>
                        <a href="#"
                            class="link | rounded-md px-3 xl:px-6 py-8 block h-full text-xs font-medium uppercase">Services</a>
                        <a href="#"
                            class="link | rounded-md px-3 xl:px-6 py-8 block h-full text-xs font-medium uppercase">Contact Us</a>
                        <a href="#"
                            class="link | rounded-md px-3 xl:px-6 py-3 block h-full text-xs font-bold uppercase text-on-theme-clr-primary">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                    aria-current="page">Dashboard</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
            </div>
        </div>
    </nav>

</header>