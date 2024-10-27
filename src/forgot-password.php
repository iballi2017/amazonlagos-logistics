<!-- head -->
<?php include "./includes/head.php" ?>
<!-- top header -->
<?php include "./components/top-header.php" ?>

<?php include "./components/toolbar.php" ?>

<main class="min-h-96 flex items-stretch justify-stretch">
    <div class="main-container text-theme-clr-secondary min-h-40 lg:min-h-96 flex flex-col items-center justify-center py-12">
        <h1 class="text-2xl font-extrabold uppercase">Forgot Password</h1>
        <p class="text-xl font-semibold text-center max-w-xl mb-8">Please enter the email address you registered with. We will send you a link</p>
        <form action="" class="w-full max-w-xl">
            <div class="grid grid-cols-12 gap-2 items-end">
                <div class="col-span-9">
                    <label for="fp_email" class="mb-3 cursor-pointer">
                        Email address
                    </label>
                    <input autocomplete="off" type="email" id="fp_email" class="h-[50px] border border-theme-clr-light-800 text-theme-clr-secondary rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full px-2.5 py-3" required />
                </div>
                <div class="col-span-3">
                    <button type="submit" class="h-[50px] bg-theme-clr-primary focus:ring-4 focus:outline-none focus:ring-theme-clr-primary rounded-lg w-full px-5 py-3 text-center font-semibold">
                        Send Link
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>



<!-- footer -->
<?php include "./components/footer.php" ?>
<!-- foot -->
<?php include "./includes/foot.php" ?>