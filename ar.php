<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<?php require_once 'includes/init.php'; ?>

<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>



  <div id="body" class="df">
    <div id="main" class="w-100 page-header overlay my-0 py-0 bg-img-cover df"  style='background-image: url("<?php echo $img; ?>")'>
      <div class="page-header-content fade-up df">
        <div style="z-index: 100;" class="my-container df">
          <div class="areas">


          <div class="top-area">

            <p href="/" class="logo pb-1 pt-5 text-center"><a href="." class="text-decoration-none"> onehadith.org </a></p>

            <div class="w-100 text-center remove">

              <button class="btn py-2 " type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();' style="font-size: 20px; border: none">
                <i data-feather="camera" class="text-button"></i>
              </button>
              <span class="text-button_light">|</span>
              <button class="btn py-2 " type='button' id='but_copy' onclick="copy_link('ar')" value='Copy' style="font-size: 20px; border: none;">
                <i data-feather="share-2" class="text-button"></i>
              </button>
              <span class="text-button_light">|</span>
              <button class="btn py-2 " type='button' id='but_copy' onclick="copy()" value='Copy' style="font-size: 20px; border: none;">
                <i data-feather="clipboard" class="text-button"></i>
              </button>

            </div>

          </div>



          <div class="center-area" style="font-family: Kitab !important;">
            <p class="page-header-title pb-4 w-100">

            <div id="hadith" class="hadith hadith-ar"><?php echo ar_hadith_split(
                                                        $hadith->text_ar,
                                                        'narrator'
                                                      ); ?></div>
            <div>
              <div id="grade" class="grade">(<?php echo $hadith->get_collection()->collection_ar; ?>, <?php echo $hadith->hadith_no; ?>)</div>
              <!-- <div id="book" class="book">
                <?php echo $hadith->book_str('ar'); ?>
                </div> -->
            </div>
            </p>
          </div>

          <div class="bottom-area">
            <form method="POST" action="" class="screenshot border-0 remove pt-3">
              <button class="btn m-0" type='submit' id='but_back' name="back" value='Back' style="width: 60px; font-size: 20px;">
                <i data-feather="arrow-left-circle" class="text-button_bold"></i>
              </button>
              <!-- <span style="padding: 5px 0 0 0;" class="text-button_light">|</span>
              <button class="btn" type='submit' id='but_res' name="next" value='Reset' style="width: 60px; font-size: 20px">
                 <i data-feather="repeat" class="text-button_bold"></i>
              </button> -->
              <span style="padding: 7px 0 0 0;" class="text-button_light">|</span>
              <a class="btn" href="." style="width: 60px; font-size: 20px">
                <i data-feather="home" class="text-button_bold"></i>
              </a>
              <span style="padding: 7px 0 0 0;" class="text-button_light">|</span>
              <button class="btn m-0" type='submit' id='but_next' name="next" value='Next' style="width: 60px; font-size:20px">
                <i data-feather="arrow-right-circle" class="text-button_bold"></i>
              </button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<?php require_once 'includes/templates/foot.php'; ?>