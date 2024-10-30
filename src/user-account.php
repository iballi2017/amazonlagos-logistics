<!-- head -->
<?php include "./includes/head.php" ?>
<!-- top header -->
<?php include "./components/top-header.php" ?>

<?php include "./components/user-account-toolbar.php" ?>

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

        <div class="grid grid-cols-12 gap-2 lg:gap-4 p-2 lg:p-4">
            <div class="col-span-12 lg:col-span-3">
            <?php include "./components/user-account-sidebar.php"; ?>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <div class="">
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
                        <div id="tab-tracking" class="tab-content hidden">
                            <?php include "./tracking.php"; ?>
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

</section>



<!-- footer -->
<?php include "./components/footer.php" ?>
<!-- foot -->
<?php include "./includes/foot.php" ?>