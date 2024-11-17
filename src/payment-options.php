<!-- head -->
<?php include "./includes/head.php" ?>

<div class="min-h-screen flex flex-col items-center justify-center text-black">

    <div class="block w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm">

        <div class="p-6">
            <h1 class="mb-6">
                <span class="sr-only">Amazon Lagos</span>
                <img src="./assets/images/brand-logo-black.png" alt="" class="w-40 mx-auto">
            </h1>

            <p class="text-center">Total Amount to Pay <br>
                <span class="text-2xl font-bold">NGN60,000.00</span>
            </p>
        </div>
        <div class="bg-black text-white p-6">
            <p>Choose payment method</p>
        </div>

        <div class="py-6">
            <ul>
                <li class="border-b">
                    <a href="#" class="after-angle-bracket-primary hover:bg-gray-200 h-16 text-[#5B5B5B] py-4 px-6">
                        <span class="flex items-center gap-6"><span class="block text-lg font-bold">Pay with</span> <img src="./assets/images/brand-quickteller-seeklogo.png" alt="pay with quickteller" class="w-36"></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="after-angle-bracket-primary hover:bg-gray-200 h-16 text-[#5B5B5B] py-4 px-6">
                        <span class="flex items-center gap-6"><span class="block text-lg font-bold">Pay with</span> <img src="./assets/images/brand-stripe.png" alt="pay with stripe" class="w-16"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>

<!-- foot -->
<?php include "./includes/foot.php" ?>