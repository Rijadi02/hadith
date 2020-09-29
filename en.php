<link href="css/bootstrap.min.css" rel="stylesheet" />
<?php
require_once("includes/init.php");
?>



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

<!-- <div class="screenshot mobileHide p-1" style="z-index: 1234; font-size: 30px; position: fixed; bottom: 10px; left: 10px;">
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
  </form> -->

<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>

<i class="gg-shield"> </i>

<div id="layoutDefault" style="width: 100%;
            min-height: 100%;">
  <div id="layoutDefault_content" style="width: 100%; min-height: 100%;">

    <div id="main" class="page-header overlay my-0 py-0 bg-img-cover" style='background-image: url("<?php echo $img ?>"); width: 100%; min-height: 100% !important;'>
      <div class="page-header-content fade-up" style="min-height: 100vh;">
        <div style="z-index: 100;" class="my-container">
          <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
              <div class="text-center-mobile">

                <p href="/" class="transmetuesiM pb-1 pt-5 text-center"><a href="." class="text-decoration-none"> onehadith.org </a></p>

                <div id="pParent-1" class="w-100 text-center">

                  <button class="btn py-1 mobileHide" type='button' id='dummy_hide' value='Take screenshot' style="display:none;font-size: 20px; border: none">
                    &nbsp;
                  </button>

                  <div id="pHide-1">
                    <button class="btn py-2 " type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();' style="font-size: 20px; border: none">
                      <i class="fa text-button fa-camera"></i>
                    </button>
                    |
                    <button class="btn py-2 " type='button' id='but_copy' onclick="copy()" value='Copy' style="font-size: 20px; border: none;">
                      <i class="fa text-button fa-clipboard"></i>
                    </button>
                  </div>

                </div>


                <div class="center-hadith" id="center-hadith" style="min-height: 82vh;display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;">
                 


                    <div class="mobileHide pb-5">

                      <p class="page-header-title pb-4">

                        <div id="hadith" class="hadith"><?php echo hadith_split($hadith->text_en, "transmetuesi") ?></div>
                        <div>
                          <div id="shkalla" class="shkalla"><?php echo $hadith->grade_en ?></div>
                          <div id="libra" class="libra">
                            <?php echo $hadith->hadith_no ?>, <?php echo numberToRoman($hadith->chapter_no) ?>, <?php echo $hadith->get_book()->book_en ?>
                          </div>
                        </div>
                      </p>

                    </div>

                    <div class="mobileShow">
                      <p class="page-header-title py-5 my-5 mobileShow">

                        <div class="hadithM"><?php echo hadith_split($hadith->text_en, "transmetuesiM") ?></div>

                        <div class="libraM">
                          <?php echo $hadith->hadith_no ?>, <?php echo numberToRoman($hadith->chapter_no) ?>, <?php echo $hadith->get_book()->book_en ?></div>
                        <div class="shkallaM mb-5"><?php echo $hadith->grade_en ?></div>

                      </p>
                    </div>


                    <div id="pParent-2">
                      <div id="pHide-2" class="mobileHide pb-4" style="position: absolute; bottom:0%; transform: translate(-50%,0)">
                        <form method="POST" action="" class="screenshot border-0  pt-3">
                          <button class="btn m-0" type='submit' id='but_back' name="back" value='Back' style="width: 60px; font-size: 20px;">
                            <i class="fa text-button fa-chevron-left"></i>
                          </button>
                          <span style="padding: 5px 0 0 0;">|</span>
                          <button class="btn" type='submit' id='but_res' name="res" value='Reset' style="width: 60px; font-size: 20px">
                            <i class="fa text-button fa-redo-alt"></i>
                          </button>
                          <span style="padding: 5px 0 0 0;">|</span>
                          <button class="btn m-0" type='submit' id='but_next' name="next" value='Next' style="width: 60px; font-size:20px">
                            <i class="fa text-button fa-chevron-right"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                    <div id="pParent-3">
                      <div id="pHide-3" class="mobileShow">
                        <form method="POST" action="" class="screenshot border-0  pt-3">
                          <button class="btn m-0" type='submit' id='but_back' name="back" value='Back' style="width: 60px; font-size: 20px;">
                            <i class="fa text-button fa-chevron-left"></i>
                          </button>
                          <span style="padding: 5px 0 0 0;">|</span>
                          <button class="btn" type='submit' id='but_res' name="res" value='Reset' style="width: 60px; font-size: 20px">
                            <i class="fa text-button fa-redo-alt"></i>
                          </button>
                          <span style="padding: 5px 0 0 0;">|</span>
                          <button class="btn m-0" type='submit' id='but_next' name="next" value='Next' style="width: 60px; font-size:20px">
                            <i class="fa text-button fa-chevron-right"></i>
                          </button>
                        </form>
                      </div>
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

  <div style="display: none;" id="pParent">
  </div>


  <script type='text/javascript' defer>
    function screenshot(center = false) {

      var node = document.getElementById('layoutDefault');
      var scale = 2;

      var photoHideNumber = 3;
      var photoParent = document.getElementById("pParent");

      for (var i = 1; i <= photoHideNumber; i++) {
        var photo = document.getElementById("pHide-" + i.toString());
        photoParent.appendChild(photo)
      }
      document.getElementById("dummy_hide").style.display = "block";

      // if (center) {
      //   var ch = document.getElementById("center-hadith");

      //   ch.style.minHeight = "88vh"
      // }

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
          link.download = 'onehadith<?php echo $hadith->id ?>.png';
          link.href = dataUrl;
          link.click();

          document.getElementById("dummy_hide").style.display = "none";

          for (var i = 1; i <= photoHideNumber; i++) {
            var photo = document.getElementById("pHide-" + i.toString());
            document.getElementById("pParent-" + i.toString()).appendChild(photo);
          }

          // if (center) {
          //   ch.style.minHeight = "84vh"
          // }
        });
    }
  </script>


  <?php require_once("includes/foot.php") ?>