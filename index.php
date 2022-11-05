<!-- Connection database -->
<?php require "admin/config/db.php"; ?>

<!-- Config Env -->
<?php require "admin/config/env.php"; ?>

<!-- Calling data from database -->
<?php
$stmt = $conn->prepare("SELECT * FROM clients");
$stmt->execute();
$clients = $stmt->fetchAll();

// Making variabel number
$number = 1;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <!-- style -->
    <?php include("partials/meta.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tolis Fresh - Supplier Bahan Baku Makanan</title>
    <!-- style -->
    <?php include("partials/stylesheet.php"); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M36Z6LK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- navigation -->
    <header class="">
        <?php include("partials/navbar.php"); ?>

        <!-- banner -->
        <div id="default-carousel" class="relative" data-carousel="static">
            <h1 class="hidden">Penuhi Kebutuhan Bisnis Anda Bersama Toko Sembako Tolis Fresh</h1>
            <!-- Carousel wrapper -->
            <div class="relative h-52 overflow-hidden md:h-screen">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="">
                    <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="assets/img/1.jpg" class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="banner Toko Sembako">
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
                    <img src="assets/img/2.jpg" class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="banner Toko Sembako">
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
                    <img src="assets/img/3.jpg" class="absolute block w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="banner Toko Sembako">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </header>

    <!-- benefit -->
    <section class="px-5 sm:px-24 py-10 md:py-20">

        <div class="flex flex-col md:flex-row gap-16 justify-center">
            <div class="flex flex-col items-center bg-white rounded-3xl shadow-md md:flex-row w-full px-5 py-3">
                <img class="object-cover rounded-t-lg h-auto w-16 md:rounded-none md:rounded-l-lg" src="assets/img/benefit/product.png" alt="icon Toko Sembako">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-600">+1000 Pilihan Produk</h5>
                    <p class="mb-3 font-normal text-gray-700">Kami menyediakan berbagai kebutuhan bisnis Anda. Mulai dari sayuran, buah, daging segar dan sembako</p>
                </div>
            </div>
            <div class="flex flex-col items-center bg-white rounded-3xl shadow-md md:flex-row w-full px-5 py-3">
                <img class="object-cover rounded-t-lg h-auto w-16 md:rounded-none md:rounded-l-lg" src="assets/img/benefit/free.png" alt="icon Toko Sembako">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-600">Gratis Pengiriman</h5>
                    <p class="mb-3 font-normal text-gray-700">Kami pastikan pengiriman ketempat Anda bebas ongkir alias gratis dan juga tersedia setiap hari</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-16 mt-8 justify-center">
            <div class="flex flex-col items-center bg-white rounded-3xl shadow-md md:flex-row w-full px-5 py-3">
                <img class="object-cover rounded-t-lg h-auto w-16 md:rounded-none md:rounded-l-lg" src="assets/img/benefit/fresh.png" alt="icon Toko Sembako">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-600">Fresh Berkualitas</h5>
                    <p class="mb-3 font-normal text-gray-700">Kami pastikan produk yang terkirim dalam kondisi terbaik karena telah melewati berbagai pengecekan</p>
                </div>
            </div>
            <div class="flex flex-col items-center bg-white rounded-3xl shadow-md md:flex-row w-full px-5 py-3">
                <img class="object-cover rounded-t-lg h-auto w-16 md:rounded-none md:rounded-l-lg" src="assets/img/benefit/clock.png" alt="icon Toko Sembako">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-600">Pengiriman Cepat & Aman</h5>
                    <p class="mb-3 font-normal text-gray-700">Kami dapat mengirimkan pesanan Anda dengan cepat dan aman. Karena kami mempunyai armada pengiriman</p>
                </div>
            </div>
        </div>

    </section>

    <!-- about -->
    <section class="px-5 sm:px-24 py-10 md:py-20 bg-[#cfe8a9]">
        <div class="flex flex-col md:flex-row gap-10 md:gap-20 leaf rounded-lg p-5 justify-center">
            <div class="p-5 w-full md:w-3/6">
                <h5 class="mb-8 text-3xl font-bold tracking-tight text-gray-700">Tolis Fresh</h5>
                <p class="mb-3 font-normal text-gray-700">Tolis Fresh merupakan supplier terpercaya penyedia aneka jenis
                    sayuran, buah-buahan, sembako dan daging ayam berkualitas.
                </p>
                <p class="mb-3 font-normal text-gray-700"> Kami telah memasok ke beberapa sektor publik dan non publik,
                    seperti Badan Usaha Milik Negara (BUMN & BUMD) dan
                    beberapa industri HOREKA (hotel, kafe, restorant) se-JABODETABEK.
                </p>
                <p class="mb-3 font-normal text-gray-700">Tolis Fresh selalu berkomitmen untuk terus menjaga kepercayaan
                    konsumen, menjalin hubungan yang baik dengan seluruh mitra
                    dan memberikan kualitas barang terbaik.</p>
            </div>
            <img class="w-full md:w-2/6" src="assets/img/about.png" alt="about Toko Sembako">
        </div>
    </section>

    <!-- category -->
    <section class="px-5 sm:px-24 py-10 md:py-20">
        <h2 class="mb-10 text-3xl md:text-4xl font-bold tracking-tight text-center mx-auto text-green-700 w-full md:w-3/5 border-b-4 border-green-800 pb-5">Kategori Produk</h2>

        <div class="flex flex-col md:flex-row gap-8 md:gap-14 items-center">
            <div class="w-full h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg w-full h-full object-cover object-center bg-center bg-cover" src="assets/img/category/ayam-tolis.png" alt="category Toko Sembako">
                    <div class="p-4">
                        <h5 class="text-lg tracking-tight text-gray-900 dark:text-white">Aneka Ayam</h5>
                    </div>
                </a>
            </div>
            <div class="w-full h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg w-full h-full object-cover object-center bg-center bg-cover" src="assets/img/category/buah-tolis.png" alt="category Toko Sembako">
                    <div class="p-4">
                        <h5 class="text-lg tracking-tight text-gray-900 dark:text-white">Aneka Buah</h5>
                    </div>
                </a>
            </div>
            <div class="w-full h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg w-full h-full object-cover object-center bg-center bg-cover" src="assets/img/category/sembako-tolis.png" alt="category Toko Sembako">
                    <div class="p-4">
                        <h5 class="text-lg tracking-tight text-gray-900 dark:text-white">Aneka Sembako</h5>
                    </div>
                </a>
            </div>
            <div class="w-full h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg w-full h-full object-cover object-center bg-center bg-cover" src="assets/img/category/sayuran-tolis.png" alt="category Toko Sembako">
                    <div class="p-4">
                        <h5 class="text-lg tracking-tight text-gray-900 dark:text-white">Aneka Sayur</h5>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- cara memesan -->
    <section class="px-5 sm:px-24 py-10 md:py-20 background">
        <h2 class="mb-10 text-3xl md:text-4xl font-bold tracking-tight text-center text-gray-700">Bagaimana Cara Memesan?</h2>

        <div class="flex flex-col md:flex-row gap-8 md:gap-14 items-center">
            <div class="h-full rounded-lg">
                <img class="rounded-t-lg" src="assets/img/order/1-1.jpg" alt="order Toko Sembako">
                <p class="mt-5 text-gray-500">* Purchase order dikirimkan h-1 melalui whatsapp kami</p>
                <span class="mt-5 text-gray-500">* Tidak ada batas waktu pemesanan (24jam)</span>
            </div>
            <div class="h-full rounded-lg">
                <img class="rounded-t-lg" src="assets/img/order/2-2.jpg" alt="order Toko Sembako">
                <p class="mt-5 text-gray-500">* Pengiriman dilakukan h+1 setelah pemesanan.</p>
                <span class="mt-5 text-gray-500">* Free ongkir, minimum pembelian 1 juta</span>
            </div>
            <div class="h-full rounded-lg">
                <img class="rounded-t-lg" src="assets/img/order/3.jpg" alt="order Toko Sembako">
                <p class="mt-5 text-gray-500">* Pembayaran dapat dilakukan dalam tempo minimal 1 minggu dan maksimal 1 bulan setelah tukar faktur</p>
            </div>
        </div>

        <div class="container text-center">
            <p class="mt-10 text-gray-600">Pesan dan nikmati berbagai keuntungannya!</p>
            <a href="order" class="mt-5 inline-block focus:outline-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-semibold rounded-lg text-lg px-5 py-2.5">
                Pesan Sekarang!
            </a>
        </div>

    </section>

    <!-- sektor industri -->
    <section class="px-5 sm:px-24 py-10 md:py-20">
        <h2 class="mb-10 text-3xl md:text-4xl font-bold tracking-tight text-center text-green-700 mx-auto w-full md:w-3/5 border-b-4 border-green-800 pb-5">
            Melayani Berbagai Sektor Industri
        </h2>

        <!-- atas -->
        <div class="flex flex-col md:flex-row gap-8 md:gap-14 justify-center items-center">
            <div class="bg-white rounded-lg shadow-md w-full md:w-72">
                <img class="rounded-t-lg" src="assets/img/industry/restaurant.png" alt="industri Toko Sembako">
                <div class="p-3">
                    <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Restaurant</h5>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md w-full md:w-72">
                <img class="rounded-t-lg" src="assets/img/industry/hotel.png" alt="industri Toko Sembako">
                <div class="p-3">
                    <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Hotel</h5>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md w-full md:w-72">
                <img class="rounded-t-lg" src="assets/img/industry/hospital.png" alt="industri Toko Sembako">
                <div class="p-3">
                    <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Rumah Sakit</h5>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md w-full md:w-72">
                <img class="rounded-t-lg" src="assets/img/industry/cafe.png" alt="industri Toko Sembako">
                <div class="p-3">
                    <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Cafe</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- mitra -->
    <section class="px-5 sm:px-24 py-10 md:py-20 bg-[#cfe8a9]">
        <h2 class="mb-10 text-3xl md:text-4xl font-bold tracking-tight text-center text-green-700">Mitra Tolis Fresh</h2>

        <!-- atas -->
        <div class="flex gap-2 md:gap-4 overflow-x-scroll pb-5 h-60 md:h-52">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/diamond.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/rose.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/unilever.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/gulaku.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/sania.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/abc.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/ajinomoto.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/delmonte.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/fortune.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/sovia.png" alt="industri Toko Sembako">
            <img class="rounded-lg md:w-52 bg-white" src="assets/img/partner/maestro.png" alt="industri Toko Sembako">
        </div>
    </section>

    <!-- client -->
    <section class="px-5 sm:px-24 py-10 md:py-20">
        <h2 class="mb-10 text-3xl md:text-4xl font-bold tracking-tight text-center text-gray-700">Client Tolis Fresh</h2>
        <div class="overflow-x-scroll">

            <div class="w-screen">
                <div class="grid grid-rows-2 grid-flow-col gap-2 md:gap-4 pb-5 w-[2400px]">
                    <?php foreach ($clients as $client) : ?>
                        <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="upload/clients/<?= $client['client_image'] ?>" alt="client Toko Sembako">
                    <?php endforeach; ?>
                </div>
            </div>
            
        </div>
    </section>

    <!-- footer -->
    <?php include("partials/footer.php"); ?>
    <!-- script -->
    <?php include("partials/script.php"); ?>
</body>

</html>