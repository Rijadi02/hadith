<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<?php
require_once("includes/init.php");
?>

<script>

function capFL(string) {
  while(string.charAt(0) == " ")
  {
    string = string.slice(1);
  }
  return string.charAt(0).toUpperCase() + string.slice(1);
}


  function copy() {
    var $temp = $("<textarea>");
    $("body").append($temp);

    var narrator = document.getElementById('narrator').textContent;
    var hadith_only = document.getElementById('hadith').textContent;
    hadith_only = hadith_only.replace(narrator,"");
    var hadith = narrator + "\r\n" + capFL(hadith_only);
    hadith += "\r\n[" + document.getElementById('grade').textContent + "]";
    

    $temp.val(hadith).select();
    document.execCommand("copy");
    $temp.remove();
    alert("Hadith copied to clipboard!")
  }
</script>


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
                <i class="fa text-button fa-camera"></i>
              </button>
              |
              <button class="btn py-2 " type='button' id='but_copy' onclick="copy()" value='Copy' style="font-size: 20px; border: none;">
                <i class="fa text-button fa-clipboard"></i>
              </button>


            </div>

          </div>



          <div class="center-area" style="font-family: Kitab !important;">
            <p class="page-header-title pb-4 w-100">

              <div id="hadith" class="hadith hadith-ar"><?php echo ar_hadith_split($hadith->text_ar, "narrator") ?></div>
              <div>
              <div id="grade" class="grade">(<?php echo $hadith->grade_ar ?>, <?php echo $hadith->hadith_no ?>)</div>
                <!-- <div id="book" class="book">
                <?php echo $hadith->book_str("ar") ?>
                </div> -->
              </div>
            </p>
          </div>

          <div class="bottom-area">
            <form method="POST" action="" class="screenshot border-0 remove pt-3">
              <button class="btn m-0" type='submit' id='but_back' name="back" value='Back' style="width: 60px; font-size: 20px;">
                <i class="fa text-button fa-chevron-left "></i>
              </button>
              <!-- <span style="padding: 5px 0 0 0;">|</span>
              <button class="btn" type='submit' id='but_res' name="res" value='Reset' style="width: 60px; font-size: 20px">
                <i class="fa text-button fa-redo-alt "></i>
              </button> -->
              <span style="padding: 5px 0 0 0;">|</span>
              <button class="btn m-0" type='submit' id='but_next' name="next" value='Next' style="width: 60px; font-size:20px">
                <i class="fa text-button fa-chevron-right "></i>
              </button>
            </form>
          </div>






        </div>
      </div>
    </div>
  </div>
</div>




<script type='text/javascript' defer>
  function screenshot() {

    var node = document.getElementById('body');
    var html = node.innerHTML;

    console.log(document.getElementsByClassName("remove"));
    var removes = document.getElementsByClassName("remove");

    while (removes.length > 0) {
      removes[0].remove();
    }

    console.log(document.getElementsByClassName("remove"));

    var scale = 2;

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
        var link = document.createElement('a');
        link.download = 'onehadith<?php echo $hadith->id ?>.png';
        link.href = dataUrl;
        link.click();
        node.innerHTML = html;
      });
  }
</script>


<?php require_once("includes/templates/foot.php") ?>