<!-- head -->
<?php include "./includes/head.php" ?>
<!-- top header -->
<?php include "./components/top-header.php" ?>

<?php include "./components/toolbar.php" ?>


<section class="py-10 lg:py-20">
    <div class="main-container max-w-3xl grid grid-cols-12 gap-4">
        <div class="col-span-12 text-center">
            <h2 class="inline-block bg-theme-clr-secondary text-on-theme-clr-secondary rounded-r-full rounded-l-full
            font-semibold px-4 py-1.5 uppercase mb-4 text-sm lg:text-base fade-in" data-delay="600">For Further Inquires:</h2>

        </div>
        <div class="col-span-12 lg:col-span-4 flex place-content-center fade-in" data-delay="600">
            <div class="w-full text-center p-6 border border-gray-200 bg-white rounded-lg shadow-sm">
                <div class="w-20 mx-auto flex items-center justify-center mb-4">
                    <img src="./assets/icons/icon-amzl-phone.svg" alt="">
                </div>
                <h5 class="mb-2 text-lg text-center font-bold tracking-tight text-on-theme-clr-primary">Call center number</h5>
                <p class="font-normal text-theme-clr-secondary">+234 7084069904</p>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-4 flex place-content-center fade-in" data-delay="600">
            <div class="w-full text-center p-6 border border-gray-200 bg-white rounded-lg shadow-sm">
                <div class="w-20 mx-auto flex items-center justify-center mb-4">
                    <img src="./assets/icons/icon-amzl-location.svg" alt="">
                </div>
                <h5 class="mb-2 text-lg text-center font-bold tracking-tight text-on-theme-clr-primary">Call center number</h5>
                <p class="font-normal text-theme-clr-secondary">148, Ikorodu road, shomolu</p>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-4 flex place-content-center fade-in" data-delay="600">
            <div class="w-full text-center p-6 border border-gray-200 bg-white rounded-lg shadow-sm">
                <div class="w-20 mx-auto flex items-center justify-center mb-4">
                    <img src="./assets/icons/icon-amzl-email.svg" alt="">
                </div>
                <h5 class="mb-2 text-lg text-center font-bold tracking-tight text-on-theme-clr-primary">Call center number</h5>
                <p class="font-normal text-theme-clr-secondary">Info@amazonlagos.com</p>
            </div>
        </div>
    </div>
</section>

<section class="py-10 lg:py-20 bg-theme-clr-secondary">
    <div class="main-container max-w-3xl">
        <h3 class="text-center text-xl lg:text-3xl font-extrabold text-white capitalize">Get in touch with us today</h3>
        <p class="text-center text-lg lg:text-xl font-bold text-white mb-8 lg:mb-10">Amazonlagos will help you to solve your problem</p>

        <form action="" class="text-[#A8AF87]">
            <div class="grid grid-cols-12 gap-2 lg:gap-6">
                <div class="col-span-12 lg:col-span-6">
                    <label for="full_name" class="block mb-2 font-medium cursor-pointer">Full name</label>
                    <input type="text" id="full_name" class="border border-theme-clr-light-800 text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <label for="email" class="block mb-2 font-medium cursor-pointer">Email address</label>
                    <input type="email" id="email" class="border border-theme-clr-light-800 text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>
                <div class="col-span-12">
                    <label for="message" class="block mb-2 font-medium cursor-pointer">Message</label>
                    <textarea id="message" rows="4" class="border border-theme-clr-light-800 text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3"></textarea>
                </div>
                <div class="col-span-12">
                    <button type="submit" class="max-w-sm flex items-center justify-center mx-auto text-center text-on-theme-clr-primary font-bold bg-theme-clr-primary/80 hover:bg-theme-clr-primary focus:ring-2 focus:outline-none focus:ring-theme-clr-primary rounded-lg w-full px-5 py-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- footer -->
<?php include "./components/footer.php" ?>
<!-- foot -->
<?php include "./includes/foot.php" ?>