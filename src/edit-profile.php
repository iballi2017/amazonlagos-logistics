<h2 class="p-4 text-lg font-bold bg-theme-clr-light-100 text-theme-clr-secondary">Edit Profile</h2>
<div class="p-4">
    <div class="relative overflow-x-auto">

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

                <div class="col-span-6">
                    <button type="submit" class="bg-theme-clr-primary text-theme-clr-secondary focus:ring-4 focus:outline-none focus:ring-theme-clr-primary rounded-lg px-8 py-2.5 text-sm text-center font-semibold">
                        Save
                    </button>
                </div>
                <div class="col-span-6 text-right">
                    <button type="button" class="text-red-500 hover:text-red-600 py-2.5 text-sm text-center font-semibold">
                        Delete Account
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<dialog id="dialog" open>
    <form method="dialog">
        <button type="submit">Close</button>
    </form>
</dialog>