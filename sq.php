<?php
require_once("includes/init.php");
$hadith = Hadithet::get_random();

if (isset($_GET['nr'])) {
  $hadith = Hadithet::find_by_nr($_GET['nr']);
}

$fileList = glob('images/*');
$random = array_rand($fileList)

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <script src="js/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous"></script>
  <script scr="js/FileSaver.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Agency - SB Admin Pro</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="csslity.min.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <script data-search-pseudo-elements defer src="js/all.min.js" crossorigin="anonymous"></script>
  <script src="js/feather.min.js" crossorigin="anonymous"></script>
  <link href="font/stylesheet.css" rel="stylesheet">
  <style>
    body {
      background-repeat: repeat-y;
      width: 100vw;
    }

    .blur {
      background-color: rgba(0, 0, 0, 0.8);
      -webkit-backdrop-filter: blur(6px);
      backdrop-filter: blur(6px);
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
      opacity: 0.8;
    }

    .transmetuesiM {

      font-size: 16px;
      color: white;
      font-weight: 200;
      opacity: 0.8;

    }

    .hadith {
      font-size: 24px;
      color: white;
      font-weight: 400;
      opacity: 0.9;
    }

    .hadithM {
      font-size: 20px;
      color: white;
      font-weight: 400;
      opacity: 0.9;
    }



    .shkalla {
      font-size: 20px;
      color: white;
      font-weight: 300;
      opacity: 0.8;
      float: right;
      padding-right: 20px;
    }

    .shkallaM {
      font-size: 16px;
      color: white;
      font-weight: 200;
      opacity: 0.8;

    }

    .libra {
      font-size: 20px;
      color: white;
      font-weight: 300;
      opacity: 0.8;
      float: left;

    }

    .libraM {
      font-size: 16px;
      color: white;
      font-weight: 200;
      opacity: 0.8;
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

  <script>
    function copy() {
      var $temp = $("<input>");
      $("body").append($temp);

      var hadith = document.getElementById('transmetuesi').innerHTML;
      hadith += "  ";
      hadith += document.getElementById('hadith').innerHTML + document.getElementById('shkalla').innerHTML;
      hadith += "  ";
      hadith += document.getElementById('libra').innerHTML;

      $temp.val(hadith).select();
      document.execCommand("copy");
      $temp.remove();
      alert("Hadith copied to clipboard!")
    }
  </script>
  <div class="screenshot mobileHide p-1" style="z-index: 1234; font-size: 30px; position: fixed; bottom: 10px; left: 10px;">
    <button class="btn m-0 py-3" type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();' style="width:60px;font-size: 20px; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 20px 20px 0px 0;">
      <i class="fa fa-camera"></i>
    </button>
    <br>
    <button class="btn m-0 py-3" type='button' id='but_copy' onclick="copy()" value='Copy' style="width: 60px; margin-top: -2px!important;font-size: 20px; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 0 0 20px 20px;">
      <i class="fa fa-clipboard"></i>
    </button>


  </div>
  <div id="layoutDefault" style="width: 100%;
            height: 100%;">
    <div id="layoutDefault_content" style="width: 100%; height: 100%;">

      <div id="main" class="page-header my-0 py-0 bg-img-cover" style='background-image: url("<?php echo $fileList[$random] ?>"); width: 100%; height: 100% !important; background-repeat: repeat-y !important;'>
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

                        <p href="#" id="transmetuesi" class="transmetuesi"><?php echo narr_format($hadith->Transmetimi) ?></p>
                        <p href="#" id="hadith" class="hadith"><?php echo narr_format($hadith->Hadithi) ?></p>
                        <div>
                          <p href="#" id="shkalla" class="shkalla">[Sahih]</p>
                          <p href="#" id="libra" class="libra"><?php echo $hadith->NrHadithi ?>, <?php echo $hadith->get_chapter()->NrKapitulli ?>, <?php echo $hadith->get_book()->Libri ?></p>
                        </div>
                      </p>

                    </div>

                    <div class="mobileShow">
                      <p class="page-header-title py-5 my-5 mobileShow">

                        <p href="#" class="transmetuesiM"><?php echo narr_format($hadith->Transmetimi) ?></p>
                        <p href="#" class="hadithM"><?php echo narr_format($hadith->Hadithi) ?> </p>

                        <p href="#" class="libraM"><?php echo $hadith->NrHadithi ?>, <?php echo $hadith->get_chapter()->NrKapitulli ?>, <?php echo $hadith->get_book()->Libri ?></p>
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
  <script src="js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script> -->

  <script>
    AOS.init({
      disable: 'mobile',
      duration: 600,
      once: true
    });
  </script>




  <script type='text/javascript'>
    var node = document.getElementById('layoutDefault');
    var scale = 3;
    function screenshot() {
      domtoimage.toPng(node, {
          quality: 5,
          height: node.offsetHeight * scale,
          width: node.offsetWidth * scale,
          style: {
          transform: "scale(" + scale + ")",
          transformOrigin: "top left",
          width: node.offsetWidth + "px",
          height: node.offsetHeight + "px"}
        })
        .then(function(dataUrl) {
          var link = document.createElement('a');
          link.download = 'onehadith.png';
          link.href = dataUrl;
          link.click();
        });
    }
  </script>



</body>

</html>