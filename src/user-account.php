<!-- head -->
<?php include "./includes/head.php" ?>
<!-- top header -->
<?php include "./components/top-header.php" ?>

<?php include "./components/toolbar.php" ?>

<section class="page-title | flex items-stretch">
    <div class="main-container flex items-center">
        <ul class="breadcrumb">
            <li>
                <a href="./">Home</a>
            </li>
            <li>My account</li>
        </ul>
    </div>
</section>

<section>
    <div class="main-container">
        <div class="lg:gap-4 p-2 lg:p-4">
            <div class="flex items-center gap-4 mb-4">
                <button class="lg:hidden block" aria-controls="user-account-sidebar" data-target="user-account-sidebar">
                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.36719 3.6178H21.6797C22.1112 3.6178 22.4609 3.26804 22.4609 2.83655V0.883423C22.4609 0.451929 22.1112 0.102173 21.6797 0.102173H1.36719C0.935693 0.102173 0.585938 0.451929 0.585938 0.883423V2.83655C0.585938 3.26804 0.935693 3.6178 1.36719 3.6178ZM1.36719 11.4303H21.6797C22.1112 11.4303 22.4609 11.0805 22.4609 10.649V8.69592C22.4609 8.26443 22.1112 7.91467 21.6797 7.91467H1.36719C0.935693 7.91467 0.585938 8.26443 0.585938 8.69592V10.649C0.585938 11.0805 0.935693 11.4303 1.36719 11.4303ZM1.36719 19.2428H21.6797C22.1112 19.2428 22.4609 18.893 22.4609 18.4615V16.5084C22.4609 16.0769 22.1112 15.7272 21.6797 15.7272H1.36719C0.935693 15.7272 0.585938 16.0769 0.585938 16.5084V18.4615C0.585938 18.893 0.935693 19.2428 1.36719 19.2428Z" fill="black" />
                    </svg>
                </button>
                <h2 class="text-xl text-theme-clr-secondary font-bold">Hi Adeleke. O</h2>
            </div>
            <div id="user-account-wrapper">
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-12 lg:col-span-3">
                        <?php include "./components/user-account-sidebar.php"; ?>
                    </div>
                    <div class="col-span-12 lg:col-span-9">
                        <div id="tab-contents" class="shadow rounded-lg overflow-hidden">
                            <div id="tab-user-profile" class="tab-content hidden">
                                <?php include "./user-profile.php"; ?>
                            </div>
                            <div id="tab-edit-profile" class="tab-content hidden">
                                <?php include "./edit-profile.php"; ?>
                            </div>
                            <div id="tab-shipping-address" class="tab-content hidden">
                                <?php include "./shipping-address.php"; ?>
                            </div>
                            <div id="tab-orders" class="tab-content hidden">
                                <?php include "./orders.php"; ?>
                            </div>
                            <div id="tab-order-details" class="tab-content hidden">
                                <?php include "./order-details.php"; ?>
                            </div>
                            <div id="tab-tracking" class="tab-content hidden">
                                <?php include "./tracking.php"; ?>
                            </div>
                            <div id="tab-tracking-status" class="tab-content hidden">
                                <?php include "./tracking-status.php"; ?>
                            </div>
                            <div id="tab-notification" class="tab-content hidden">
                                <?php include "./notification.php"; ?>
                            </div>
                            <div id="tab-change-password" class="tab-content hidden">
                                <?php include "./change-password.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<!-- footer -->
<?php include "./components/footer.php" ?>
<!-- foot -->
<?php include "./includes/foot.php" ?>