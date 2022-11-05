<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- load more -->
<script>
    function loadmore() {
        $(".filmblock").slice(0, 15).fadeIn() // select the first ten				
        $("#loadMore").click(function(e) { // click event for load more
            e.preventDefault()
            $(".filmblock:hidden").slice(0, 5).slideDown() // select next 10 hidden divs and show them
            if ($(".filmblock:hidden").length == 0) { // check if any hidden divs still exist
                $("#loadMore").fadeOut('fast')
            }
        })
    }
    loadmore()
</script>

<!-- contact -->
<script>
    $(document).on('click', '.send_form', function(e) {
        e.preventDefault();
        var input_blanter = document.getElementById('wa_name');

        /* Whatsapp Settings */
        var walink = 'https://web.whatsapp.com/send',
            phone = '6281519178070',
            walink2 = 'Halo Admin, Berikut pesan saya: ',
            text_yes = 'Terkirim.',
            text_no = 'Isi semua Formulir lalu klik Send.';

        /* Smartphone Support */
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var walink = 'whatsapp://send';
        }

        if ("" != input_blanter.value) {

            /* Call Input Form */
            var input_name1 = $("#wa_name").val(),
                input_email1 = $("#wa_email").val(),
                input_number1 = $("#wa_number").val(),
                input_nama_shop = $("#wa_name_shop").val(),
                input_address = $("#wa_address").val(),
                input_message = $("#wa_message").val();

            /* Final Whatsapp URL */
            var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
                'Name : ' + input_name1 + '%0A' +
                'Email : ' + input_email1 + '%0A' +
                'Telepon : ' + input_number1 + '%0A' +
                'Nama Toko : ' + input_nama_shop + '%0A' +
                'Alamat Toko : ' + input_address + '%0A' +
                'Pesan : ' + input_message + '%0A';

            /* Whatsapp Window Open */
            window.open(blanter_whatsapp, '_blank');
            document.getElementById("text-info").innerHTML = '<span class="yes">' + text_yes + '</span>';
        } else {
            document.getElementById("text-info").innerHTML = '<span class="no">' + text_no + '</span>';
        }
    });
</script>

<!-- analytics -->
<script data-host="https://analytics.websiteori.com/public" data-dnt="false" src="https://analytics.websiteori.com/js/script.js" id="ZwSg9rf6GA" async defer></script>

<!-- Plugin JS file -->
<script src="assets/plugin/components/moment/moment.min.js"></script>
<script src="assets/plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
<script src="assets/plugin/whatsapp-chat-support.js"></script>
<script>
    $('#example_1').whatsappChatSupport();
</script>