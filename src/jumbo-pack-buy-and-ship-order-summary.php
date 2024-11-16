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

<div class="my-4"></div>

<div class="main-container">
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

    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">


        <form action="">
            <div class="grid grid-cols-12 gap-2 lg:gap-4">
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