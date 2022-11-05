<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo -->
    <?php include("partials/url-tolis.php"); ?>
    <!-- style -->
    <?php include("partials/stylesheet.php"); ?>
</head>

<body>
    <header class="">
        <!-- navigation -->
        <?php include("partials/navbar.php"); ?>
        <!-- banner -->
        <div class="relative">
            <div class="absolute top-20 md:top-44 w-full text-center">
                <?php if (strpos($_SERVER['REQUEST_URI'], "toko-sembako-terdekat-toko-sembako-murah-toko-sembako-grosir") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Sembako Terdekat
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "grosir-sembako-terdekat-toko-sembako-murah-agen-sembako-terdekat") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Grosir Sembako Terdekat
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "agen-sembako-terdekat-toko-sembako-murah-toko-grosir-sembako") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Agen Sembako Terdekat
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-sembako-murah-toko-sembako-terdekat-agen-sembako-murah") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Sembako Murah
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "agen-sembako-murah-toko-sembako-murah-toko-grosir-sembako") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Agen Sembako Murah
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-sembako-grosir-agen-sembako-terdekat-toko-sembako-modern") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Sembako Grosir
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "distributor-sembako-terdekat-toko-sembako-murah-agen-sembako-terdekat") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Distributor Sembako Terdekat
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "distributor-sembako-tangerang-toko-sembako-murah-grosir-sembako-terdekat") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Distributor Sembako Tangerang
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "grosir-sembako-murah-toko-sembako-murah-agen-sembako-terdekat") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Grosir Sembako Murah
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-sembako-modern-toko-sembako-murah-toko-sembako-terdekat") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Sembako Modern
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-sayur-terdekat-toko-sembako-murah-toko-buah-segar") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Sayur Terdekat
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-buah-segar-toko-sembako-murah-toko-grosir-sembako") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Buah Segar
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-buah-buahan-toko-sembako-murah-toko-sayur-modern") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Buah-Buahan
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-buah-dan-sayuran-toko-sembako-murah-toko-buah-online") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Buah dan Sayuran
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-grosir-sembako-terdekat-toko-sembako-murah-agen-buah-segar") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Grosir Sembako
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-grosir-sembako-toko-sembako-murah-toko-sembako-terdekat") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Grosir Sembako
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-buah-online-toko-sembako-murah-toko-grosir-sembako") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Buah Online
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "toko-sayur-modern-toko-sembako-murah-toko-buah-segar") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Toko Sayur Modern
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "grosir-sembako-online-toko-sembako-murah-grosir-sembako-terdekat") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Grosir Sembako Online
                    </h1>
                <?php } elseif (strpos($_SERVER['REQUEST_URI'], "supplier-sembako-toko-sembako-murah-distributor-sembako-tangerang") !== false) { ?>
                    <h1 class="mb-2 text-2xl md:text-4xl font-bold tracking-tight text-white md:text-white">
                        Supplier Sembako
                    </h1>
                <?php } ?>

                <p class="mb-3 text-base md:text-xl font-normal text-white md:text-white">Pilihan Terbaik untuk Supplier Bahan Baku Makanan</p>
            </div>
            <img class="w-full object-cover" src="assets/img/banner.png" alt="banner">
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
            <div class="h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg" src="assets/img/category/ayam-tolis.png" alt="category Toko Sembako">
                    <div class="p-4">
                        <h5 class="text-lg tracking-tight text-gray-900 dark:text-white">Aneka Ayam</h5>
                    </div>
                </a>
            </div>
            <div class="h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg" src="assets/img/category/buah-tolis.png" alt="category Toko Sembako">
                    <div class="p-4">
                        <h5 class="text-lg tracking-tight text-gray-900 dark:text-white">Aneka Buah</h5>
                    </div>
                </a>
            </div>
            <div class="h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg" src="assets/img/category/sembako-tolis.png" alt="category Toko Sembako">
                    <div class="p-4">
                        <h5 class="text-lg tracking-tight text-gray-900 dark:text-white">Aneka Sembako</h5>
                    </div>
                </a>
            </div>
            <div class="h-full bg-white rounded-lg shadow-md">
                <a href="product">
                    <img class="rounded-t-lg" src="assets/img/category/sayuran-tolis.png" alt="category Toko Sembako">
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
            <div class="h-full bg-white rounded-lg">
                <img class="rounded-t-lg" src="assets/img/order/1.jpg" alt="order Toko Sembako">
            </div>
            <div class="h-full bg-white rounded-lg">
                <img class="rounded-t-lg" src="assets/img/order/2.jpg" alt="order Toko Sembako">
            </div>
            <div class="h-full bg-white rounded-lg">
                <img class="rounded-t-lg" src="assets/img/order/3.jpg" alt="order Toko Sembako">
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
        <h2 class="mb-10 text-3xl md:text-4xl font-bold tracking-tight text-center text-green-700 mx-auto w-full md:w-3/5 border-b-4 border-green-800 pb-5">Melayani Berbagai
            Sektor Industri</h2>

        <!-- atas -->
        <div class="flex flex-col md:flex-row gap-8 md:gap-14 justify-center items-center">
            <div class="bg-white rounded-lg shadow-md w-full md:w-72">
                <div>
                    <img class="rounded-t-lg" src="assets/img/industry/restaurant.png" alt="industri Toko Sembako">
                </div>
                <div class="p-3">
                    <div>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Restaurant</h5>
                    </div>
                </div>
            </div>

            <div class="max-w-sm bg-white rounded-lg shadow-md w-full md:w-72">
                <div>
                    <img class="rounded-t-lg" src="assets/img/industry/hotel.png" alt="industri Toko Sembako">
                </div>
                <div class="p-3">
                    <div>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Hotel</h5>
                    </div>
                </div>
            </div>

            <div class="max-w-sm bg-white rounded-lg shadow-md w-full md:w-72">
                <div>
                    <img class="rounded-t-lg" src="assets/img/industry/hospital.png" alt="industri Toko Sembako">
                </div>
                <div class="p-3">
                    <div>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Rumah Sakit</h5>
                    </div>
                </div>
            </div>

            <div class="max-w-sm bg-white rounded-lg shadow-md w-full md:w-72">
                <div>
                    <img class="rounded-t-lg" src="assets/img/industry/cafe.png" alt="industri Toko Sembako">
                </div>
                <div class="p-3">
                    <div>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">Cafe</h5>
                    </div>
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
            <div class="flex gap-2 md:gap-4 pb-5 h-60">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/pertamina.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/golf.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/eatlah.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/teraskita.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/pomelotel.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/patra.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/rosy.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/balairung.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/western.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/episode.png" alt="client Toko Sembako">
            </div>
            <div class="flex flex-row md:flex-row gap-2 md:gap-4 mt-2 md:mt-5 pb-5 h-60">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/golden.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/omni.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/radjak.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/bloc.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/premiere.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/novotel.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/sarwono.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/ambhara.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/annora.png" alt="client Toko Sembako">
                <img class="rounded-t-lg border-2 border-[#cfe8a9]" src="assets/img/clients/asyana.png" alt="client Toko Sembako">
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include("partials/footer.php"); ?>
    <!-- script -->
    <?php include("partials/script.php"); ?>
</body>

</html>