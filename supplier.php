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
                <h2 class="mb-3 text-3xl font-bold tracking-tight text-gray-700">Daftar Supplier</h2>
                <p class="text-gray-700">Supplier terbaik sayuran, buah, sembako yang berkualitas hanya ada di Tolis Fresh!
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
                    <input type="text" name="wa_name_supplier" id="wa_name_supplier" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                    <label for="wa_name_supplier" class="px-2 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="wa_message_customer" id="wa_message_customer" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                    <label for="wa_message_customer" class="px-2 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pesan</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="email" name="wa_email_supplier" id="wa_email_supplier" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                        <label for="wa_email_supplier" class="px-2 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="tel" name="wa_number_supplier" id="wa_number_supplier" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                        <label for="wa_number_supplier" class="px-2 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telepon/ WhatsApp</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="wa_mitra" id="wa_mitra" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                        <label for="wa_mitra" class="px-2 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Mitra</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="wa_supplier" class="sr-only">Jenis Supplier</label>
                        <select name="wa_supplier" id="wa_supplier" class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" required="">
                            <option class="p-3" selected="" disabled>Jenis Supplier</option>
                            <option class="p-3" value="Aneka Ayam">Aneka Ayam</option>
                            <option class="p-3" value="Aneka Buah">Aneka Buah</option>
                            <option class="p-3" value="Aneka Sayur">Aneka Sayur</option>
                            <option class="p-3" value="Aneka Sembako">Aneka Sembako</option>
                            <option class="p-3" value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="wa_address_supplier" id="wa_address_supplier" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                    <label for="wa_address_supplier" class="px-2 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat
                        Mitra</label>
                </div>
                <div class="relative z-0 mb-6 w-full group hidden" id="supplier-hidden">
                    <input type="text" name="wa_supplier_hidden" id="wa_supplier_hidden" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required="">
                    <label for="wa_supplier_hidden" id="label-hidden" class="px-2 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Supplier Lainnya</label>
                </div>
                <button type="submit" class="send_form_supplier text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Daftar Supplier</button>
                <div id="text-info" class="mt-4 text-gray-500"></div>
            </form>
        </section>

    </main>

    <!-- customer -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        // supplier
        $('#wa_supplier').change(function() {
            if ($(this).val() === "Lainnya") {
                $("#supplier-hidden").removeClass("hidden")
            } else {
                $("#supplier-hidden").addClass("hidden")
                let selectElemen = document.querySelector("#wa_supplier_hidden")
                selectElemen.value = $(this).val()
            }
        });

        // whatsapp
        $(document).on('click', '.send_form_supplier', function(e) {
            e.preventDefault();
            var input_blanter = document.getElementById('wa_name_supplier');

            /* Whatsapp Settings */
            var walink = 'https://web.whatsapp.com/send',
                phone = '6281519178070',
                walink2 = 'Halo Admin, Saya mau daftar jadi supplier Tolis Fresh, berikut informasi kami: ',
                text_yes = 'Terkirim.',
                text_no = 'Isi semua Formulir lalu klik Send.';

            /* Smartphone Support */
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var walink = 'whatsapp://send';
            }

            if ("" != input_blanter.value) {

                /* Call Input Form */
                var input_name = $("#wa_name_supplier").val(),
                    input_message = $("#wa_message_customer").val(),
                    input_email = $("#wa_email_supplier").val(),
                    input_number = $("#wa_number_supplier").val(),
                    input_mitra = $("#wa_mitra").val(),
                    input_supplier = $("#wa_supplier_hidden").val(),
                    input_address = $("#wa_address_supplier").val();

                /* Final Whatsapp URL */
                var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
                    'Nama: ' + input_name + '%0A' +
                    'Pesan: ' + input_message + '%0A' +
                    'Email : ' + input_email + '%0A' +
                    'WhatsApp : ' + input_number + '%0A' +
                    'Nama Mitra : ' + input_mitra + '%0A' +
                    'Jenis Supplier : ' + input_supplier + '%0A' +
                    'Alamat Mitra : ' + input_address + '%0A';

                /* Whatsapp Window Open */
                window.open(blanter_whatsapp, '_blank');
                document.getElementById("text-info").innerHTML = '<span class="yes">' + text_yes + '</span>';
            } else {
                document.getElementById("text-info").innerHTML = '<span class="no">' + text_no + '</span>';
            }
        });
    </script>

    <!-- footer -->
    <?php include("partials/footer.php"); ?>
    <!-- script -->
    <?php include("partials/script.php"); ?>
</body>

</html>