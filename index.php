<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous"></script>
  <script scr="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Agency - SB Admin Pro</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
  <link href="font/stylesheet.css" rel="stylesheet">
  <style>
    body {
      background-repeat: repeat-y;
      width: 100vw;
    }

    .blur {
      background-color: rgba(0, 0, 0, 0.85);
      -webkit-backdrop-filter: blur(8px);
      backdrop-filter: blur(8px);
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      position: absolute;


    }

    .a-title {
      font-family: Avenir;
      font-weight: 300;
    }

    .a-title:hover {
      color: black;
      background-color: white;
      text-decoration: none;
      padding: 10px 30px;

    }

    a {
      color: white;
    }

    a:hover {
      color: white;
    }



    form {
      /* This bit sets up the horizontal layout */
      display: flex;
      flex-direction: row;

      /* This bit draws the box around it */
      border: 1px solid grey;

      /* I've used padding so you can see the edges of the elements. */
      padding: 2px;
    }

    input {
      /* Tell the input to use all the available space */
      flex-grow: 2;
      /* And hide the input's outline, so the form looks like the outline */
      border: none;
    }

    input:focus {
      /* removing the input focus blue box. Put this on the form if you like. */
      outline: none;
    }

    button {
      /* Just a little styling to make it pretty */
      border: 1px solid blue;
      background: blue;
      color: white;
    }

    .WRAPPER {
      background-color: white;
      height: 575px;
      width: 975px;
      background-image: url(exit-gate/exit-gate-bg.png);
      top: auto;
      margin: -8px;
    }

    #email {
      background-color: rgba(0, 0, 0, 0);
      color: white;
      border: none;
      outline: none;
      height: 30px;
      transition: height 1s;
      -webkit-transition: height 1s;
    }

    #email:focus {

      font-size: 16px;
    }

    #button-transparent {
      background-color: Transparent;
      background-repeat: no-repeat;
      border: none;
      cursor: pointer;
      overflow: hidden;
      outline: none;
    }





    .mobileShow {
      display: none;
    }

    /* Smartphone Portrait and Landscape */
    @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
      .mobileShow {
        display: inline;
      }
    }

    .mobileHide {
      display: block;
    }

    /* Smartphone Portrait and Landscape */
    @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
      .mobileHide {
        display: none;
      }
    }

    /* header{
                    background-repeat: repeat-y !important;
                }
                #turn {
                    display: none;
                    z-index: 100;
                    position: fixed;
                    }

                    @media (orientation: landscape) {
                    #turn {
                        display:block;
                    }
                    } */
    .transmetuesi {
      font-size: 20px;
      color: white;
      font-weight: 300;
      opacity: 0.9;
    }

    .transmetuesiM {

      font-size: 16px;
      color: white;
      font-weight: 200;
      opacity: 0.9;

    }

    .hadith {
      font-size: 24px;
      color: white;
      font-weight: 400;
    }

    .hadithM {
      font-size: 20px;
      color: white;
      font-weight: 400;
    }



    .shkalla {
      font-size: 20px;
      color: white;
      font-weight: 300;
      opacity: 0.9;
      float: right;
      padding-right: 20px;
    }

    .shkallaM {
      font-size: 16px;
      color: white;
      font-weight: 200;
      opacity: 0.9;

    }

    .libra {
      font-size: 20px;
      color: white;
      font-weight: 300;
      opacity: 0.9;
      float: left;

    }

    .libraM {
      font-size: 16px;
      color: white;
      font-weight: 200;
      opacity: 0.9;
    }

    .center-hadith {
      margin: auto;
    }

    .my-container {
      padding-right: 12% !important;
      padding-left: 12% !important;
    }
  </style>
 
</head>

<body>
  <div class="screenshot mobileHide p-1" style="z-index: 1234; font-size: 30px; position: fixed; bottom: 10px; left: 10px;">
    <button class="btn m-0 py-3" type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();' style="width:60px;font-size: 20px; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 20px 20px 0px 0;">
      <i class="fa fa-camera"></i>
    </button>
    <br>
    <button class="btn m-0 py-3" onclick="copy()" style="width: 60px; margin-top: -2px!important;font-size: 20px; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 0 0 20px 20px;">
      <i class="fa fa-clipboard"></i>
    </button>


  </div>
  <div id="layoutDefault" style="width: 100%;
            height: 100%;">
    <div id="layoutDefault_content" style="width: 100%; height: 100%;">

      <div id="main" class="page-header my-0 py-0 bg-img-cover " style='background-image: url("images/2.jpg"); width: 100%; height: 100% !important; background-repeat: repeat-y !important;'>
        <div class="blur"></div>
        <div class="page-header-content" style="min-height: 100vh;">
          <div style="z-index: 100;" class="my-container">
            <div class="row justify-content-center">
              <div class="col-xl-12 col-lg-12">
                <div data-aos="fade-up">

                  <p href="#" class="transmetuesiM pb-5 pt-5 text-center">onehadith.org</p>
    
                  

                  <div class="center-hadith" style="min-height: 80vh;display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;">
                    <div class="mobileHide">

                      <p class="page-header-title">

                        <p href="#" class="transmetuesi">Ebu Hurejra r.a. tregon:</p>
                        <p href="#" class="hadith">Të Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai
                          u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).Të
                          Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).Të
                          Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).Të
                          Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).
                          Messenger of Allah ("sallallahu 'alaihi wa sallam") said, "You will soon conquer a land where
                          people deal with Qirat."And according to another version: Messenger of Allah ("sallallahu
                          'alaihi wa sallam") said, "You will soon conquer Egypt where Al-Qirat is frequently mentioned.
                          So when you conquer it, treat its inhabitants well. For there lies upon you the responsibility
                          because of blood ties or relationship (with them)"</p>
                        <div>
                          <p href="#" class="shkalla">[Sahih]</p>
                          <p href="#" class="libra">329, XLI, The book of the really good manners</p>
                        </div>
                      </p>

                    </div>

                    <div class="mobileShow">
                      <p class="page-header-title py-5 my-5 mobileShow">

                        <p href="#" class="transmetuesiM">Ebu Hurejra r.a. tregon:</p>
                        <p href="#" class="hadithM">Të Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai
                          u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).Të
                          Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).Të
                          Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).Të
                          Dërguarin e Allahut a.s. e pyetën: 'Cila është vepra më e mirë?' Ai u
                          përgjigj: 'Besimi në Allahun dhe në të Dërguarin e Tij (Muhamedin a.s.).' E pyetën prapë: 'Po
                          pastaj çfarë (vepre vjen)?' Ai u përgjigj: 'Lufta për çështjen e Allahut.' Folësi pyeti prapë:
                          'Po
                          pastaj çfarë?' Ai u përgjigj: 'Haxhi (i kryer në rregull dhe) i pranuar (nga Allahu).
                          Messenger of Allah ("sallallahu 'alaihi wa sallam") said, "You will soon conquer a land where
                          people deal with Qirat."And according to another version: Messenger of Allah ("sallallahu
                          'alaihi wa sallam") said, "You will soon conquer Egypt where Al-Qirat is frequently mentioned.
                          So when you conquer it, treat its inhabitants well. For there lies upon you the responsibility
                          because of blood ties or relationship (with them)"</p>

                        <p href="#" class="libraM">329, XLI, The book of the really good manners</p>
                        <p href="#" class="shkallaM">[Sahih]</p>


                      </p>
                    </div>

                    <div class="py-5"></div>


                  </div>








                </div>



              </div>


              <!-- <form class="" style="padding: 0px; width: 40%; bottom:10px ; right: -15%; ; z-index: 1; position: absolute; border: none;">
                                        <div style="position: relative; width: 60%;">
                                            <input type="text" class="form-control" style="border-radius: 20px;">
                                            <button class="btn btn-primary" style="border-radius: 20px; position: absolute; top: 0; right: 0;">hello</button>
                                        </div>
                                    </form> -->

            </div>

          </div>
        </div>

      </div>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      disable: 'mobile',
      duration: 600,
      once: true
    });
  </script>
  <!-- 
<script type='text/javascript'>
        function screenshot() {
            html2canvas(document.body, { background: '#fff' }).then(function (canvas) {

                // Get base64URL
                var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');
                console.log(base64URL);

                var a = document.createElement("a"); //Create <a>
                a.href = base64URL; //Image Base64 Goes here
                a.download = "hadith.png"; //File name Here
                a.click(); //Downloaded file
                // AJAX request

            });
        }
    </script> -->

    <script type='text/javascript'>
    var node = document.getElementById('layoutDefault');

    function screenshot() {
      domtoimage.toJpeg(node, { quality: 1 })
    .then(function (dataUrl) {
        var link = document.createElement('a');
        link.download = 'onehadith.jpg';
        link.href = dataUrl;
        link.click();
    });}
  </script>


  <script>
    function copy() {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val("hello").select();
      document.execCommand("copy");
      $temp.remove();
      alert("Hadith copied to clipboard!")
    }
  </script>
</body>

</html>