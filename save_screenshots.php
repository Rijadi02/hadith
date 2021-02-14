<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<?php

require_once("includes/init_head.php");
require_once "includes/templates/head.php";


$id = isset($_SESSION['save_id']) ? $_SESSION['save_id'] : 1 ;
 
$hadith = Hadiths::find_by_id($id);
$_SESSION['save_id'] = $id + 1;
if(!isset($hadith->text_al))
{
  redirect("save_screenshots");
}

$fileList = glob('assets/img/backgrounds/*');
$random = array_rand($fileList);
$img = $fileList[$random];
?>


<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>


<div id="body">
  <div id="main" class="w-100 page-header overlay my-0 py-0 bg-img-cover" style='background-image: url("<?php echo $img ?>")'>
    <div class="page-header-content fade-up">
      <div style="z-index: 100;" class="my-container">
        <div class="areas">



          <div class="top-area">

            <p href="/" class="logo pb-1 pt-5 text-center"><a href="." class="text-decoration-none"> onehadith.org </a></p>

            <div class="w-100 text-center remove">

              <button class="btn py-2 " type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();' style="font-size: 20px; border: none">
                <i data-feather="camera" class="text-button"></i>
              </button>
              <span class="text-button_light">|</span>
              <button class="btn py-2 " type='button' id='but_copy' onclick="copy()" value='Copy' style="font-size: 20px; border: none;">
                <i data-feather="share-2" class="text-button"></i>
              </button>
              <span class="text-button_light">|</span>
              <button class="btn py-2 " type='button' id='but_copy' onclick="copy()" value='Copy' style="font-size: 20px; border: none;">
                <i data-feather="clipboard" class="text-button"></i>
              </button>



            </div>

          </div>

 

          <div class="center-area">
           

              <div id="hadith" class="hadith"><?php echo al_hadith_split($hadith->text_al, "narrator") ?></div>
              <div>
                <div id="grade" class="grade">(<?php echo $hadith->grade_al ?>, <?php echo $hadith->hadith_no ?>)</div>
                <!-- <div id="book" class="book">
                  <?php echo $hadith->book_str("al") ?>
                </div> -->
              </div>
           
          </div>

          <div class="bottom-area">
            <form method="POST" action="" class="screenshot border-0 remove pt-3">
              <button class="btn m-0" type='submit' id='but_back' name="back" value='Back' style="width: 60px; font-size: 20px;">
                <i data-feather="chevron-left" class="text-button_bold"></i>
              </button>
              <!-- <span style="padding: 5px 0 0 0;" class="text-button_light">|</span>
              <button class="btn" type='submit' id='but_res' name="next" value='Reset' style="width: 60px; font-size: 20px">
                 <i data-feather="repeat" class="text-button_bold"></i>
              </button> -->
              <span style="padding: 5px 0 0 0;" class="text-button_light">|</span>
              <button class="btn m-0" type='submit' id='but_next' name="next" value='Next' style="width: 60px; font-size:20px">
                <i data-feather="chevron-right" class="text-button_bold"></i>
              </button>
            </form>
          </div>






        </div>
      </div>
    </div>
  </div>
</div>

<script>
function save_screenshot(){
    var node = document.getElementById('body');
    var html = node.innerHTML;

    console.log(document.getElementsByClassName("remove"));
    var removes = document.getElementsByClassName("remove");

    while (removes.length > 0) {
      removes[0].remove();
    }

    console.log(document.getElementsByClassName("remove"));

    var scale = 0.5;

    domtoimage.toPng(node, {
        quality: 500,
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
        $.ajax({
          url: "save",
          type: "POST",
          data: {data:dataUrl,
          collection:"<?php echo $hadith->collection; ?>",
          hadith:"<?php echo $hadith->hadith_no; ?>",
          folder:"al"},
          success:function(result)
          {
            console.log(result);
            window.location.replace("save_screenshots");
          }
        });
      });
    }

    setTimeout(save_screenshot, 1500);
</script>

<?php require_once("includes/templates/foot.php") ?>