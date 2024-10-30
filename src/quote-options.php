<!-- head -->
<?php include "./includes/head.php" ?>
<!-- top header -->
<?php include "./components/top-header.php" ?>

<?php include "./components/toolbar.php" ?>

<main class="min-h-[400px] flex flex-col justify-center items-center">
    <div class="main-container text-center text-theme-clr-secondary py-8">
        <h1 class="text-xl lg:text-3xl font-extrabold leading-loose">Get a quote</h1>
        <p class="text-lg lg:text-xl leading-loose mb-8">Select which service to use</p>

        <div class="grid grid-cols-2 gap-4">

            <div class="col-span-2 lg:col-span-1 flex items-center justify-center flex-col gap-y-4 p-6 bg-white rounded-lg shadow">
                <img src="./assets/images/jumbo-pack-buy-ship.png" alt="">
                <h5 class="mb-2 text-2xl font-bold tracking-tight">Jumbo Pack: Buy & Ship</h5>
                <a href="" class="bg-theme-clr-primary hover:bg-theme-clr-secondary hover:text-white py-2.5 px-8 rounded-md">Select</a>
            </div>

            <div class="col-span-2 lg:col-span-1 flex items-center justify-center flex-col gap-y-4 p-6 bg-white rounded-lg shadow">
                <img src="./assets/images/jumbo-pack-buy-ship.png" alt="">
                <h5 class="mb-2 text-2xl font-bold tracking-tight">Ship only</h5>
                <a href="" class="bg-theme-clr-primary hover:bg-theme-clr-secondary hover:text-white py-2.5 px-8 rounded-md">Select</a>
            </div>

        </div>
    </div>
</main>


<!-- footer -->
<?php include "./components/footer.php" ?>
<!-- foot -->
<?php include "./includes/foot.php" ?>