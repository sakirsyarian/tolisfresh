<!DOCTYPE html>
<html lang="id">

<head>
    <!-- style -->
    <?php include("partials/meta.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Tolis Fresh - Supplier Bahan Baku Makanan</title>
    <!-- style -->
    <?php include("partials/stylesheet.php"); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M36Z6LK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="">
        <!-- navigation -->
        <?php include("partials/navbar.php"); ?>
    </header>

    <!-- contact -->
    <main class="px-5 sm:px-24 py-8 md:py-16 bg-white">

        <section class="flex flex-col md:flex-row gap-8 md:gap-14">
            <div class="w-full h-full">
                <h2 class="mb-3 text-3xl font-bold tracking-tight text-gray-700">Kontak</h2>
                <p class="text-gray-700">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui form ini!
                </p>

                <div class="mt-5">
                    <p class="text-lg text-gray-700">Email</p>
                    <p class="text-gray-600">info@tolisfresh.com</p>
                    <p class="text-gray-600">admin@tolisfresh.com</p>
                </div>

                <div class="mt-5">
                    <p class="text-lg text-gray-700">Telepon</p>
                    <p class="text-gray-600">081519178070</p>
                </div>

                <div class="mt-5">
                    <p class="text-lg text-gray-700">Alamat</p>
                    <p class="text-gray-600">Bintaro, Tangerang Selatan. 15224</p>
                </div>
            </div>

            <form class="w-full h-full">
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="wa_name" id="wa_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                    <label for="wa_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="email" name="wa_email" id="wa_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                        <label for="wa_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="tel" name="wa_number" id="wa_number" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                        <label for="wa_number" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telepon</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="wa_name_shop" id="wa_name_shop" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                        <label for="wa_name_shop" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                            Toko</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="wa_address" id="wa_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                        <label for="wa_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat
                            Toko</label>
                    </div>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="wa_message" id="wa_message" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                    <label for="wa_message" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pesan</label>
                </div>
                <button type="submit" class="send_form text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Kirim</button>
                <div id="text-info" class="mt-4 text-gray-500"></div>
            </form>
        </section>

    </main>

    <!-- footer -->
    <?php include("partials/footer.php"); ?>
    <!-- script -->
    <?php include("partials/script.php"); ?>
</body>

</html>