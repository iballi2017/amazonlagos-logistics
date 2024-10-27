<!-- head -->
<?php include __DIR__ . "/includes/head.php" ?>
<!-- top header -->
<?php include __DIR__ . "/components/top-header.php" ?>

<?php include __DIR__ . "/components/user-account-toolbar.php" ?>

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

        <div class="grid grid-cols-12 gap-4 p-4">
            <div class="col-span-12 lg:col-span-3">
            <?php include __DIR__ . "./components/user-account-sidebar.php"; ?>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <div class="">
                    <div id="tab-contents" class="shadow rounded-lg overflow-hidden">
                        <div id="tab-user-profile" class="tab-content hidden">
                            <?php include __DIR__ . "./user-profile.php"; ?>
                        </div>
                        <div id="tab-edit-profile" class="tab-content hidden">
                            <?php include __DIR__ . "./edit-profile.php"; ?>
                        </div>
                        <div id="tab-shipping-address" class="tab-content hidden">
                            <?php include __DIR__ . "./shipping-address.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<!-- footer -->
<?php include __DIR__ . "/components/footer.php" ?>
<!-- foot -->
<?php include __DIR__ . "/includes/foot.php" ?>