<div class="page-loader show">
    <?php include "./components/page-loader.php"; ?>
</div>


<!-- jquery-3.7.1.js -->
<!-- <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");
    input && window.intlTelInput(input, {
        loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
    });
</script>
<!-- JavaScript for intlTelInput -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
<script src="./scripts/custom-phone.js"></script>

<!-- OwlCarousel local -->
<!-- <script src="./libs/owlcarousel/js/owl.carousel.min.js"></script> -->
<!-- owlCarousel js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

<!-- custom scripts -->
<script src="./scripts/main.jquery.js"></script>
<script src="./scripts/main.js" type="module"></script>
</body>

</html>