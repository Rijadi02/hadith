<?php
require_once("includes/init.php");
$hadith = Hadithet::get_random();

if (isset($_GET['nr'])) {
  $hadith = Hadithet::find_by_nr($_GET['nr']);
}

if (isset($_POST['back']) or isset($_POST['next'])) {
  if (isset($_POST['next'])) {

    $hadith = Hadithet::find_by_id(page_next());
  }
  if (isset($_POST['back'])) {

    $hadith = Hadithet::find_by_id(page_back());
  }
} else {
  page_start($hadith->id);
}


// $_SESSION['i'] = -1;
// $_SESSION['page'] = [];


$fileList = glob('images/*');
$random = array_rand($fileList);

// print_r( $_SESSION['page']);
// echo "<br>";
// echo $_SESSION['page'][$_SESSION['i']];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <script src="js/dom-to-image.min.js"></script>
  <script scr="js/FileSaver.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Agency - SB Admin Pro</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- <link href="css/styles.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="css/font-awsome.min.css">
  <!-- <link rel="stylesheet" href="css/lity.min.css" />
  <link rel="stylesheet" href="css/aos.css" /> -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <script data-search-pseudo-elements defer src="js/all.min.js"></script>
  <!-- <script src="js/feather.min.js"></script> -->
  <link href="font/stylesheet.css" rel="stylesheet">
  <link href="css/mystyle.css" rel="stylesheet">


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
    <button class="btn m-0 py-3" type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();' style="width:60px;font-size: 20px; padding-bottom: 10px!important; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 50px 50px 0px 0;">
      <i class="fa text-button fa-camera"></i>
    </button>
    <br>
    <button class="btn m-0 py-3" type='button' id='but_copy' onclick="copy()" value='Copy' style="margin-top:9px!important; width: 60px; font-size: 20px; padding-top: 10px!important; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 0 0 50px 50px;">
      <i class="fa text-button fa-clipboard"></i>
    </button>
  </div>


  <form method="POST" action="" class="screenshot border-0 mobileHide p-1" style="z-index: 1234; font-size: 30px; position: fixed; top: 10px; left: 10px;">
    <button class="btn m-0 " type='submit' id='but_back' name="back" value='Back' style="width: 60px; font-size: 20px; padding-bottom: 12px!important; padding-top: 12px!important; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 50px 0 0 50px ">
      <i class="fa text-button fa-chevron-left"></i>
    </button>

    <button class="btn" type='submit' id='but_res' name="res" value='Reset' style="margin:0 0px;width: 60px; padding-bottom: 12px!important; padding-top: 12px!important; font-size: 20px; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 0">
      <i class="fa text-button fa-redo-alt"></i>
    </button>

    <button class="btn m-0" type='submit' id='but_next' name="next" value='Next' style="width: 60px; padding-bottom: 12px!important; padding-top: 12px!important; font-size: 20px; border: 2px solid rgba(255, 255, 255, 0.2);border-radius: 0  50px 50px 0">
      <i class="fa text-button fa-chevron-right"></i>
    </button>
  </form>




  <div id="layoutDefault" style="width: 100%;
            height: 100%;">
    <div id="layoutDefault_content" style="width: 100%; height: 100%;">

      <div id="main" class="page-header overlay my-0 py-0 bg-img-cover" style='background-image: url("<?php echo $fileList[$random] ?>"); width: 100%; height: 100% !important;'>
        <div class="blur"></div>
        <div class="page-header-content" style="min-height: 100vh;">
          <div style="z-index: 100;" class="my-container">
            <div class="row justify-content-center">
              <div class="col-xl-12 col-lg-12">
                <div class="text-center-mobile">

                  <p href="#" class="transmetuesiM pb-1 pt-5 text-center">onehadith.org</p>
                  <div class="mobileShow">
                  <div id="photoParent1">

                    <div class="photoHide1 mobileShow">
                      <button class="btn py-2 mobileShow" type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot(true);' style="font-size: 20px; border: none">
                        <i class="fa text-button fa-camera"></i>
                      </button>
                      |
                      <button class="btn py-2 mobileShow" type='button' id='but_copy' onclick="copy()" value='Copy' style="font-size: 20px; border: none;">
                        <i class="fa text-button fa-clipboard"></i>
                      </button>
                    </div>

                  </div>
                </div>

                  <div class="center-hadith" id="center-hadith" style="min-height: 84vh;display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;">
                    <div class="mobileHide">

                      <p class="page-header-title">

                        <p href="#" id="transmetuesi" class="transmetuesi"><?php echo narr_format($hadith->Transmetimi) ?></p>
                        <p href="#" id="hadith" class="hadith"><?php echo narr_format($hadith->Hadithi) ?></p>
                        <div>
                          <p href="#" id="shkalla" class="shkalla">[Sahih]</p>
                          <p href="#" id="libra" class="libra"> <?php echo $hadith->get_chapter()->NrKapitulli ?>, <?php echo $hadith->get_book()->Libri ?></p>
                        </div>
                      </p>

                    </div>

                    <div class="mobileShow">
                      <p class="page-header-title py-5 my-5 mobileShow">

                        <p href="#" class="transmetuesiM mt-4"><?php echo narr_format($hadith->Transmetimi) ?></p>
                        <p href="#" class="hadithM"><?php echo narr_format($hadith->Hadithi) ?> </p>

                        <p href="#" class="libraM"><?php echo $hadith->NrHadithi ?>, <?php echo $hadith->get_chapter()->NrKapitulli ?>, <?php echo $hadith->get_book()->Libri ?></p>
                        <p href="#" class="shkallaM mb-5">[Sahih]</p>

                        <div id="photoParent2">
                          <div class="photoHide2">
                            <form method="POST" action="" class="screenshot border-0 mobileShow pt-3">
                              <button class="btn m-0" type='submit' id='but_back' name="back" value='Back' style="width: 60px; font-size: 20px;">
                                <i class="fa text-button fa-chevron-left"></i>
                              </button>
                              |
                              <button class="btn" type='submit' id='but_res' name="res" value='Reset' style="width: 60px; font-size: 20px">
                                <i class="fa text-button fa-redo-alt"></i>
                              </button>
                              |
                              <button class="btn m-0" type='submit' id='but_next' name="next" value='Next' style="width: 60px; font-size:20px">
                                <i class="fa text-button fa-chevron-right"></i>
                              </button>
                            </form>
                          </div>
                        </div>

                      </p>
                    </div>

                    <div class="py-3"></div>


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

  <div id="photoParent">
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- <script src="js/scripts.js"></script> -->

  <!-- <script src="js/aos.js"></script>
  <script>
    AOS.init({
      disable: 'mobile',
      duration: 600,
      once: true
    });
  </script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script> -->






  <script type='text/javascript' defer>

    function screenshot(center = false) {

      var node = document.getElementById('layoutDefault');
      var scale = 2;
    
      var photoHide1 = document.getElementsByClassName("photoHide1");
      var photoHide2 = document.getElementsByClassName("photoHide2");

      var photoParent = document.getElementById("photoParent");

      var photoParent1 = document.getElementById("photoParent1");
      var photoParent2 = document.getElementById("photoParent2");

      for (var i = 0; i < photoHide1.length; i++) {
        photoParent.appendChild(photoHide1[i])
      }

      for (var i = 0; i < photoHide2.length; i++) {
        photoParent.appendChild(photoHide2[i])
      }

      if (center) {
        var ch = document.getElementById("center-hadith");

        ch.style.minHeight = "88vh"
      }

      domtoimage.toPng(node, {
          quality: 5,
          height: node.offsetHeight * scale,
          width: node.offsetWidth * scale,
          style: {
            transform: "scale(" + scale + ")",
            transformOrigin: "top left",
            width: node.offsetWidth + "px",
            height: node.offsetHeight + "px"
          }
        })
        .then(function(dataUrl) {
          var link = document.createElement('a');
          link.download = 'onehadith.png';
          link.href = dataUrl;
          link.click();

          
          for (var i = 0; i < photoHide2.length; i++) {
            photoParent2.appendChild(photoHide2[i])
          }

          for (var i = 0; i < photoHide1.length; i++) {
            photoParent1.appendChild(photoHide1[i])
          }



          if (center) {
            ch.style.minHeight = "84vh"
          }
        });
    }
  </script>



</body>

</html>