    <style>
      .custom-social-proof {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 9999999999999 !important;
      }

      .custom-social-proof .custom-notification {
        width: 260px;
        border: 0;
        text-align: left;
        z-index: 99999;
        box-sizing: border-box;
        font-weight: 400;
        border-radius: 6px;
        box-shadow: 2px 2px 10px 2px rgba(11, 10, 10, 0.2);
        background-color: #fff;
        position: relative;
        cursor: pointer;
      }

      .custom-social-proof .custom-notification .custom-notification-container {
        display: flex !important;
        align-items: center;
        height: 80px;
      }

      .custom-social-proof .custom-notification .custom-notification-container .custom-notification-content-wrapper {
        margin: 0;
        height: 100%;
        color: gray;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 0 6px 6px 0;
        flex: 1;
        display: flex !important;
        flex-direction: column;
        justify-content: center;
      }

      .custom-social-proof .custom-notification .custom-notification-container .custom-notification-content-wrapper .custom-notification-content {
        margin: 0 !important;
        padding: 0 !important;
        font-size: 14px;
        line-height: 16px;
      }

      .custom-social-proof .custom-notification .custom-notification-container .custom-notification-content-wrapper .custom-notification-content small {
        margin-top: 3px !important;
        display: block !important;
        font-size: 12px !important;
        opacity: 0.8;
      }

      .custom-social-proof .custom-notification .custom-close {
        position: absolute;
        top: 8px;
        right: 8px;
        height: 12px;
        width: 12px;
        cursor: pointer;
        transition: 0.2s ease-in-out;
        transform: rotate(45deg);
        opacity: 0;
      }

      .custom-social-proof .custom-notification .custom-close::before {
        content: "";
        display: block;
        width: 100%;
        height: 2px;
        background-color: gray;
        position: absolute;
        left: 0;
        top: 5px;
      }

      .custom-social-proof .custom-notification .custom-close::after {
        content: "";
        display: block;
        height: 100%;
        width: 2px;
        background-color: gray;
        position: absolute;
        left: 5px;
        top: 0;
      }

      .custom-social-proof .custom-notification:hover .custom-close {
        opacity: 1;
      }

      .poweredby {
        font-weight: 600;
        text-decoration: none;
        margin-left: 3px;
        color: red;
      }

      @media (max-width:580px) {
        .custom-social-proof {
          top: 10px !important;
        }

        .custom-social-proof .custom-notification {
          width: 210px !important;
        }

        .custom-social-proof .custom-notification .custom-notification-container .custom-notification-content-wrapper {
          padding-left: 10px !important;
          padding-right: 10px !important;
        }

        .custom-social-proof .custom-notification .custom-notification-container {
          height: 65px;
        }

        .custom-social-proof .custom-notification .custom-close {
          transition: 0.2s ease-in-out !important;
          transform: rotate(90deg) !important;
        }

        .custom-social-proof .custom-notification .custom-notification-container .custom-notification-content-wrapper .custom-notification-content {
          font-size: 12px !important;
        }
      }
    </style>
    <section class="custom-social-proof" style="display: none;">
      <div class="custom-notification">
        <div class="custom-notification-container">
          <div class="custom-notification-content-wrapper">
            <p class="custom-notification-content">
              <span id="someone">R***i</span> dari <span id="country">Jakarta</span> memesan<br><span id="product" style="font-weight: 900;">Sania 18 Liter BIB</span>
              <small>

                <span id="time">3</span> jam lalu &nbsp;
                <i class="fa fa-check-circle"></i> Status: <span id="statusOrder" class="poweredby">Diproses</span>
              </small>
            </p>
          </div>
        </div>
        <div class="custom-close"></div>
      </div>
    </section>

    <!--Fake Recent Sales Notification-->
    <script>
      var r_text = new Array();
      r_text[0] = "Tangerang";
      r_text[1] = "Jakarta";
      r_text[2] = "Depok";
      r_text[3] = "Bogor";
      r_text[4] = "Bandung";
      r_text[5] = "Bekasi";
      r_text[6] = "Semarang";
      r_text[7] = "Surabaya";

      var r_name = new Array();
      r_name[0] = "B**i";
      r_name[1] = "S***a";
      r_name[2] = "D***i";
      r_name[3] = "H****a";
      r_name[5] = "R**o";
      r_name[4] = "F***y";
      r_name[6] = "K**i";
      r_name[7] = "V***a";
      r_name[8] = "Y**a";
      r_name[9] = "Z***e";
      r_name[10] = "C***i";
      r_name[11] = "O***y";
      r_name[12] = "M**a";
      r_name[13] = "W***a";
      r_name[14] = "L***a";
      r_name[15] = "U***a";
      r_name[16] = "P**i";
      r_name[17] = "T***a";
      r_name[18] = "D***a";
      r_name[19] = "N**a";
      r_name[20] = "G***t";


      var r_product = new Array();
      r_product[0] = "Minyak Rosebrand 18l";
      r_product[1] = "Susu Diamond UHT";
      r_product[2] = "Gulaku Premium 5kg";
      r_product[3] = "Sania 18l BIB";
      r_product[4] = "Diamond Mayonnaise 4kg";
      r_product[5] = "Ayam Fillet Dada";

      var r_status = new Array();
      r_status[0] = "Diproses";
      r_status[1] = "Dijadwalkan";
      r_status[2] = "On-Progress";

      var timesRun = 0;
      var interval = setInterval(function() {
        timesRun += 1;
        if (timesRun === 7) {
          clearInterval(interval);
          return;
        }
        $(".custom-social-proof").stop().slideToggle('slow');
      }, 5000);

      $(".custom-close").click(function() {
        $(".custom-social-proof").stop().slideToggle('slow');
      });

      setInterval(function() {
        var myNumber = Math.floor(15 * Math.random());
        $("#someone").text(r_name[myNumber]);
        $('#country').text(r_text[myNumber]);
        $('#statusOrder').text(r_status[myNumber]);

        $('#product').text(r_product[Math.floor(15 * Math.random())]);
        var timeVal = Math.floor(15 * Math.random());

        $('#time').text(timeVal);


        //console.log(timeVal); 
      }, 10600);
    </script>