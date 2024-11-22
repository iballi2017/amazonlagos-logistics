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
            <li>Legal</li>
        </ul>
    </div>
</section>


<section class="info-tabs | py-10 lg:py-20">
    <div class="main-container max-w-5xl text-theme-clr-secondary" id="terms-and-conditions-wrapper">

        <ul id="tabs-nav" class="nav-list | max-w-4xl text-sm gap-x-4 lg:gap-x-8 bg-[#F8F8F8] rounded-l-full rounded-r-full px-6 py-4 uppercase">
            <li>
                <a href="?tab=terms-and-conditons">terms and conditions</a>
            </li>
            <li>
                <a href="?tab=our-prohibited-items">Prohibited Items in accord to us customs</a>
            </li>
            <li>
                <a href="?tab=customs-prohibited-items">Prohibited Items List in accord to Nigeria customs</a>
            </li>
        </ul>

        <div class="my-10"></div>

        <div>
            <div id="tab-contents" class="overflow-hidden">
                <div id="tab-terms-and-conditons" class="tab-content hidden">
                    <?php include "./components/terms-and-conditons-content.php"; ?>
                </div>
                <div id="tab-our-prohibited-items" class="tab-content hidden">
                    <?php include "./components/our-prohibited-items.php"; ?>
                </div>
                <div id="tab-customs-prohibited-items" class="tab-content hidden">
                    <?php include "./components/customs-prohibited-items.php"; ?>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- footer -->
<?php include "./components/footer.php" ?>
<!-- foot -->
<?php include "./includes/foot.php" ?>