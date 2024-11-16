<!-- head -->
<?php include "./includes/head.php" ?>

<header class="text-center py-8">
    <h1>
        <span class="sr-only">Amazon Lagos</span>
        <img src="./assets/images/brand-logo-black.png" alt="" class="w-40 mx-auto">
    </h1>
</header>
<p class="p-2 py-4 text-white text-center font-bold bg-[#F13636]">
    Note: Additional charges may apply if the actual weight exceeds the estimated weight."
</p>

<div class="main-container my-4">
    <!-- <h2 class="p-4 text-lg font-bold bg-theme-clr-light-800 text-theme-clr-secondary">ORDER SUMMARY</h2> -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-left rtl:text-right text-theme-clr-secondary">
            <thead class="bg-theme-clr-light-800 uppercase">
                <tr>
                    <th scope="col" colspan="2" class="px-4 py-3 rounded-t-lg">
                        ORDER SUMMARY
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="px-4 pb-2 pt-4 font-medium whitespace-nowrap">
                        Service Type
                    </th>
                    <td class="px-4 pb-2 pt-4 text-right font-bold">
                        Jumbo Pack: Buy & Ship
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-4 py-2 font-medium whitespace-nowrap">
                        Amount of Product
                    </th>
                    <td class="px-4 py-2 text-right font-bold">
                        1
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-4 py-2 font-medium whitespace-nowrap">
                        Shipping Address
                    </th>
                    <td class="px-4 py-2 text-right font-bold">
                        13 ojota str, Iroko, Lagos
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-4 py-2 font-medium whitespace-nowrap">
                        Estimated Delivery Time:
                    </th>
                    <td class="px-4 py-2 text-right font-bold">
                        1st Jun 2024 - 7th Jun 2024
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-4 py-2 font-medium whitespace-nowrap">
                        Total Product Price:
                    </th>
                    <td class="px-4 py-2 text-right font-bold">
                        #30,000
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-4 py-2 font-medium whitespace-nowrap">
                        Local Shipping fee:
                    </th>
                    <td class="px-4 py-2 text-right font-bold">
                        #10,000
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-4 py-2 font-medium whitespace-nowrap">
                        International Shipping Fee
                    </th>
                    <td class="px-4 py-2 text-right font-bold">
                        #10,000
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-4 pt-2 pb-4 font-medium whitespace-nowrap">
                        Service charge:
                    </th>
                    <td class="px-4 pt-2 pb-4 text-right font-bold">
                        #10,000
                    </td>
                </tr>
            </tbody>
            <tfoot class="bg-theme-clr-secondary text-white">
                <tr class="font-semibold">
                    <th scope="row" class="px-4 py-3 text-base rounded-bl-lg">
                        Total Amount in Naira:
                    </th>
                    <td class="px-6 py-3 text-right rounded-br-lg">
                        #40,000
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="my-8"></div>

    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm text-theme-clr-secondary">
        <h2 class="text-2xl text-center font-bold my-6">Ship only</h2>

        <hr class="mb-6">
        <form action="">

            <fieldset class="mb-6">
                <legend class="text-lg font-semibold mb-4">Recipient Information</legend>


                <div class="grid grid-cols-12 gap-2 lg:gap-4">
                    <div class="col-span-12 lg:col-span-4">
                        <label for="full_name" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Full Name</label>
                        <input type="text" id="full_name" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <label for="email" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Email Address</label>
                        <input type="text" id="email" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <label for="phone" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Phone Number</label>
                        <input type="tel" id="phone" class="phone | border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                </div>

            </fieldset>

            <fieldset class="mb-6">
                <legend class="text-lg font-semibold mb-4">Shipping Address</legend>


                <div class="grid grid-cols-12 gap-2 lg:gap-4">
                    <div class="col-span-12 lg:col-span-2">
                        <label for="country" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Country</label>
                        <select id="country" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                        </select>
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <label for="state" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">State</label>
                        <select id="state" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3">
                            <option value="abj">Abuja</option>
                            <option value="ada">Adamawa</option>
                        </select>
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <label for="lga" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">L.G.A</label>
                        <input type="text" id="lga" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>

                    <div class="col-span-12 lg:col-span-6">
                        <label for="street" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Street</label>
                        <input type="text" id="street" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                </div>

            </fieldset>

            <div class="p-4 border rounded-lg mb-6">
                <fieldset>
                    <div class="flex items-center justify-between">
                        <legend class="text-lg font-semibold mb-4">Product Information</legend>
                        <!-- <button>Add</button> -->
                        <button type="button" class="py-2.5 px-8 text-sm font-semibold text-theme-clr-secondary-200 focus:outline-none bg-theme-clr-primary/10 rounded-lg border border-theme-clr-secondary-200 hover:bg-gray-100 hover:text-theme-clr-secondary focus:z-10 focus:ring-4 focus:ring-theme-clr-secondary">Add</button>
                    </div>
                    <div class="flex flex-col items-center justify-center p-2 my-6 text-sm text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="sr-only">Info</span>
                        <div>
                            NB: rate is 1$ - #1770
                        </div>
                    </div>

                    <ul class="flex flex-col gap-y-4">
                        <li class="border p-2 lg:p-4 rounded-lg flex items-end justify-between gap-4">
                            <div class="grid grid-cols-12 gap-2 lg:gap-4 w-full">
                                <div class="col-span-12 lg:col-span-2">
                                    <label for="store" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Store</label>
                                    <select id="store" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3">
                                        <option>Amazon</option>
                                        <option>Aliexpress</option>
                                        <option>--------</option>
                                    </select>
                                </div>
                                <div class="col-span-12 lg:col-span-2">
                                    <label for="tracking_id" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Tracking ID</label>
                                    <input type="text" id="tracking_id" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                                </div>
                                <div class="col-span-12 lg:col-span-2">
                                    <label for="order_number" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Order Number</label>
                                    <input type="text" id="order_number" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <label for="product_description" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Product Description</label>
                                    <input type="tel" id="product_description" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                                </div>
                                <div class="col-span-12 lg:col-span-2">
                                    <label for="package_weight" class="whitespace-nowrap block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Package Weight <small>(Kg or Ibs)</small></label>
                                    <input type="text" id="package_weight" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                                </div>
                            </div>
                            <button type="button" class="text-[#E8E8E8] hover:text-red-500 focus:text-red-500 w-4 lg:w-12 flex items-center justify-end">
                                <span class="sr-only">
                                    Delete
                                </span>
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 18C2.45 18 1.97933 17.8043 1.588 17.413C1.19667 17.0217 1.00067 16.5507 1 16V3H0V1H5V0H11V1H16V3H15V16C15 16.55 14.8043 17.021 14.413 17.413C14.0217 17.805 13.5507 18.0007 13 18H3ZM13 3H3V16H13V3ZM5 14H7V5H5V14ZM9 14H11V5H9V14Z" fill="currentColor" />
                                </svg>

                            </button>
                        </li>
                        <!--  -->

                    </ul>
                </fieldset>
            </div>



            <div class="col-span-12">
                <button type="submit" class="bg-theme-clr-primary/80 hover:bg-theme-clr-primary focus:ring-2 focus:outline-none focus:ring-theme-clr-primary rounded-lg w-full px-5 py-3 text-center font-semibold">Proceed to Payment #40,000</button>
            </div>

        </form>

    </div>

    <button type="button" class="back-btn | font-bold text-lg text-theme-clr-primary my-6">Go back</button>


</div>


<!-- footer -->
<?php include "./components/footer.php" ?>
<!-- foot -->
<?php include "./includes/foot.php" ?>