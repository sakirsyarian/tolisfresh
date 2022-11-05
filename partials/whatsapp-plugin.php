<style>
    /* CSS Multiple Whatsapp Chat */
    #whatsapp-chat {
        position: fixed;
        background: #fff;
        width: 350px;
        border-radius: 10px;
        box-shadow: 0 1px 15px rgba(32, 33, 36, .28);
        bottom: 90px;
        left: 30px;
        overflow: hidden;
        z-index: 99;
        animation-name: showchat;
        animation-duration: 1s;
        transform: scale(1);
    }

    a.blantershow-chat {
        background: linear-gradient(to right top, #2cde7c, #057839);
        color: #fff;
        position: fixed;
        z-index: 98;
        bottom: 25px;
        left: 20px;
        font-size: 15px;
        padding: 10px 20px;
        border-radius: 30px;
        box-shadow: 0 1px 15px rgba(32, 33, 36, .28);
    }

    a.blantershow-chat i {
        transform: scale(1.2);
        margin: 0 10px 0 0;
    }

    .header-chat {
        background: linear-gradient(45deg, #797f8c 0%, #373d46 100%);
        color: #fff;
        padding: 10px 15px;
    }

    .header-chat h3 {
        color: #373d46;
    }

    .header-chat p {
        font-size: 13px;
        color: #373d46;
    }

    .info-avatar {
        position: relative;
    }

    .info-avatar img {
        border-radius: 100%;
        width: 45px;
        float: left;
        margin: 7px 10px 0 0;
    }

    .info-avatar:before {
        content: '\f232';
        z-index: 1;
        font-family: "Font Awesome 5 Brands";
        background: #28a745;
        color: #fff;
        padding: 0.8px 10px;
        border-radius: 100%;
        position: absolute;
        top: 30px;
        left: 30px;
        width: 30px;
        height: 30px;
    }

    a.informasi {
        padding: 5px 10px;
        display: block;
        overflow: hidden;
        animation-name: showhide;
        animation-duration: 2.5s;
    }

    a.informasi:hover {
        background: #f1f1f1;
    }

    .info-chat span {
        display: block;
    }

    .info-chat {
        margin-left: 70px;
    }

    #get-label,
    span.chat-label {
        font-size: 12px;
        color: #3f424b;
        line-height: 1.2;
    }

    #get-nama,
    span.chat-nama {
        margin: 5px 0 0;
        font-size: 15px;
        font-weight: 700;
        color: #222;
    }

    #get-label,
    #get-nama {
        color: #fff;
    }

    span.my-number {
        display: none;
    }

    .blanter-msg {
        color: #444;
        padding: 20px;
        font-size: 12.5px;
        text-align: center;
        border-top: 1px solid #ddd;
    }

    textarea#chat-input {
        border: none;
        width: 100%;
        height: 20px;
        outline: none;
        resize: none;
    }

    a#send-it {
        color: #555;
        width: 40px;
        margin: -5px 0 0 5px;
        font-weight: 700;
        padding: 8px;
        background: #eee;
        border-radius: 10px;
    }

    .first-msg {
        background: #f5f5f5;
        padding: 30px;
        text-align: center;
    }

    .first-msg span {
        background: #e2e2e2;
        color: #333;
        font-size: 14.2px;
        line-height: 1.7;
        border-radius: 10px;
        padding: 15px 20px;
        display: inline-block;
    }

    .start-chat .blanter-msg {
        display: flex;
    }

    #get-number {
        display: none;
    }

    a.close-chat {
        position: absolute;
        top: 0;
        right: 0;
        color: #373d46;
        background: #fff;
        height: 40px;
        width: 40px;
        border-radius: 0 0 0 8px;
        padding: 5px 11px;
        font-size: 3em;
    }

    @keyframes showhide {
        from {
            transform: scale(.5);
            opacity: 0;
        }
    }

    @keyframes showchat {
        from {
            transform: scale(0);
            opacity: 0;
        }
    }

    @media screen and (max-width:480px) {
        #whatsapp-chat {
            width: auto;
            left: 5%;
            right: 5%;
            font-size: 80%
        }
    }

    .hide {
        display: none;
        animation-name: showhide;
        animation-duration: 1.5s;
        transform: scale(1);
        opacity: 1;
    }

    .show {
        display: block;
        animation-name: showhide;
        animation-duration: 1.5s;
        transform: scale(1);
        opacity: 1;
    }

    .online-status {
        position: absolute;
        display: inline;
        margin-top: -12px;
        font-size: 12px;
    }
</style>

<div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
        <div class='head-home'>
            <h4 style="padding-bottom: 0; color: #fff;">Konsultasi GRATIS</h4>
            <p class="text-white">Yuk! Chat dengan Pakar Web & SEO terbaik kami.</p>
        </div>
        <div class='get-new hide'>
            <div id='get-label'></div>
            <div id='get-nama'></div>
        </div>
    </div>

    <div class='home-chat'>
        <!-- Info Contact Start -->
        <a class="conversion-ads-tracking informasi" href='https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber; ?>&text=Hallo%20Admin%20Nana%2C%20saya%20mau%20tanya%20tentang%20jasa%20iklan%20<?php echo $adPlatform; ?>.%20(sumber%3A%20https://jasawebsite.top<?php echo $adSource ?>)' target="_blank" title='Chat Whatsapp'>
            <div class='info-avatar'><img src='https://jasawebsite.top/images/cs-1.png' />
            </div>
            <div class='info-chat'>
                <span class='chat-nama'>Nana</span>
                <span class="online-status"><img src="https://jasawebsite.top/images/green-dot.png" style="width: 10px; margin-top: -1px;">&nbsp;Online&nbsp;&nbsp;<i>Dibalas ±3 menit</i></span>
                <span class='chat-label mt-3 mb-2'><u>Spesialis</u>: Web Landing Page, Company Profile, Toko Online</span>
            </div><span class='my-number'>081398803251</span>
        </a>
        <!-- Info Contact End -->
        <!-- Info Contact Start -->
        <a class="conversion-ads-tracking informasi" href='https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber; ?>&text=Hallo%20Admin%20Kevin%2C%20saya%20mau%20tanya%20tentang%20jasa%20iklan%20<?php echo $adPlatform; ?>.%20(sumber%3A%20https://jasawebsite.top<?php echo $adSource ?>)' target="_blank" title='Chat Whatsapp' style="background: #797f8c3b;">
            <div class='info-avatar'><img src='https://jasawebsite.top/images/cs-2.png' />
            </div>
            <div class='info-chat'>
                <span class='chat-nama'>Kevin</span>
                <span class="online-status"><img src="https://jasawebsite.top/images/green-dot.png" style="width: 10px; margin-top: -1px;">&nbsp;Online&nbsp;&nbsp;<i>Dibalas ±3 menit</i></span>
                <span class='chat-label mt-3 mb-2'><u>Spesialis</u>: Web-App (Custom)</span>
            </div><span class='my-number'>6281398803251</span>
        </a>
        <!-- Info Contact End -->
        <!-- Info Contact Start -->
        <a class="conversion-ads-tracking informasi" href='https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber; ?>&text=Hallo%20Admin%20Lusi%2C%20saya%20mau%20tanya%20tentang%20jasa%20iklan%20<?php echo $adPlatform; ?>.%20(sumber%3A%20https://jasawebsite.top<?php echo $adSource ?>)' target="_blank" title='Chat Whatsapp'>
            <div class='info-avatar'><img src='https://jasawebsite.top/images/cs-3.png' />
            </div>
            <div class='info-chat'>
                <span class='chat-nama'>Lusi</span>
                <span class="online-status"><img src="https://jasawebsite.top/images/green-dot.png" style="width: 10px; margin-top: -1px;">&nbsp;Online&nbsp;&nbsp;<i>Dibalas ±3 menit</i></span>
                <span class='chat-label mt-3 mb-2'><u>Spesialis</u>: SEO #1 Google</span>
            </div><span class='my-number'>6281398803251</span>
        </a>
        <!-- Info Contact End -->
        <div class='blanter-msg'>Ingin custom paket?
            <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber; ?>&text=Hallo%20Admin%2C%20saya%20mau%20tanya%20tentang%20jasa%20iklan%20<?php echo $adPlatform; ?>.%20(sumber%3A%20https://jasaiklanonline.top<?php echo $adSource ?>)" class="conversion-ads-tracking" title="<?php echo $keywordBg; ?>">
                <u class="text-danger">Klik disini!</u>
            </a>
        </div>
    </div>

    <!-- <div class='start-chat hide'>
        <div class='first-msg'><span>Halo! Apa yang bisa kami bantu?</span></div>
        <div class='blanter-msg'><textarea id='chat-input' placeholder='Tulis pesan' maxlength='120' row='1'></textarea>
            <a href='#' id='send-it'>Kirim</a>
        </div>
    </div> -->

    <div id='get-number'></div><a class='close-chat' href='#'>×</a>

</div>

<a class='blantershow-chat' href='#' title='Show Chat'><i class='fab fa-whatsapp'></i>WhatsApp</a>

<!-- whatsapp -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).on("click", ".blantershow-chat, .consult-chat-btn", function() {
        $("#whatsapp-chat").addClass("show").removeClass("hide");
        event.preventDefault();
    });

    $(document).on("click", ".close-chat", function() {
        $("#whatsapp-chat").addClass("hide").removeClass("show");
        event.preventDefault();
    });
</script>