<!-- head -->
<?php include __DIR__ . "/includes/head.php" ?>
<!-- top header -->
<?php include __DIR__ . "/components/top-header.php" ?>

<?php include __DIR__ . "/components/header.php" ?>

<main class="min-h-96 flex items-stretch justify-stretch">
    <div class="main-container text-theme-clr-secondary min-h-40 lg:min-h-96 flex flex-col items-center justify-center p-12">
        <h1 class="text-2xl font-extrabold uppercase">Reset Password</h1>
        <p class="text-xl font-semibold text-center max-w-xl mb-8">Kindly input a new password different from the old</p>
        <form action="" class="w-full max-w-[400px]">
            <div class="grid grid-cols-12 gap-6 items-end">
                <div class="col-span-12">
                    <label for="rs_password" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Password</label>
                    <div class="relative">
                        <button type="button" class="password-type-toggler | absolute right-2 top-[15px] opacity-40">
                            <img src="./assets/icons/icon-eye.svg" alt="show">
                            <span class="sr-only">Toggle</span>
                            <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                        </button>
                        <input type="password" id="rs_password" class="h-[50px] border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                </div>
                <div class="col-span-12">
                    <label for="confirm_rs_password" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Confirm password</label>
                    <div class="relative">
                        <button type="button" class="password-type-toggler | absolute right-2 top-[15px] opacity-40">
                            <img src="./assets/icons/icon-eye.svg" alt="show">
                            <span class="sr-only">Toggle</span>
                            <img src="./assets/icons/icon-eye-off.svg" alt="hide" class="hidden">
                        </button>
                        <input type="password" id="confirm_rs_password" class="h-[50px] border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                    </div>
                </div>

                <div class="col-span-12">
                    <button type="submit" class="h-[50px] bg-theme-clr-primary focus:ring-2 focus:outline-none focus:ring-theme-clr-primary rounded-lg w-full px-5 py-3 text-center font-semibold">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</main>



<!-- footer -->
<?php include __DIR__ . "/components/footer.php" ?>
<!-- foot -->
<?php include __DIR__ . "/includes/foot.php" ?>