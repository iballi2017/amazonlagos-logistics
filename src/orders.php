<h2 class="p-4 text-lg font-bold bg-theme-clr-light-100 text-theme-clr-secondary">Orders</h2>
<div class="p-4">
    <div class="relative overflow-x-auto">

        <div class="flex items-center justify-between gap-2 lg:gap-4">
            <div>

                <div class="flex items-center gap-2">
                    <label for="filter" class="block font-medium text-sm text-theme-clr-secondary cursor-pointer">Filter</label>
                    <select id="filter" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-2">
                        <option>All</option>
                        <option>-----</option>
                        <option>Lorem ipsum dolor sit.</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="flex items-center gap-2">
                    <label for="sort" class="block font-medium text-sm text-theme-clr-secondary cursor-pointer">Sort</label>
                    <select id="sort" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-2">
                        <option>All</option>
                        <option>-----</option>
                        <option>Lorem ipsum dolor sit.</option>
                    </select>
                </div>
            </div>
        </div>

        <hr class="border-t-theme-clr-light-100 my-4">



        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <tbody>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="max-w-[10px] px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Jumbo Pack: Buy and Ship
                        </td>
                        <td class="px-6 py-4">


                            <span class="bg-pink-100 text-pink-800 text-xs font-medium me-2 px-3 py-1.5 rounded">
                                Pending
                            </span>

                        </td>
                        <td class="px-6 py-4">
                            On 15-03-2023
                        </td>
                        <td class="px-6 py-4">
                            <a href="?tab=order-details">
                                <span class="text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">See details</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Ship only
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-3 py-1.5 rounded">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            On 15-03-2023
                        </td>
                        <td class="px-6 py-4">

                            <a href="#">
                                <span class="text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">See details</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Ship only
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-3 py-1.5 rounded">
                                Cancelled
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            On 15-03-2023
                        </td>
                        <td class="px-6 py-4">
                            <a href="#">
                                <span class="text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">See details</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>