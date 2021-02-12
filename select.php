<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<?php
require_once("includes/init.php");
error_reporting(0);

function grade_join($array)
{
    $my_array = [];
    foreach ($array as $i) {
        array_push($my_array, $i->grade);
    }
    return join(", ", $my_array);
}

$collection = "bukhari";
$collection1 = 1;



if (isset($_POST['accept'])) {

    $request = json_decode($_SESSION['request']);
    $al_request = json_decode($_SESSION['al_request']);

    // echo "<script>console.log('$al_request')</script>";

    if ($_POST['accept'] == "true") {



        // print_r($request);

        $selected = new Selected();
        $selected->collection = $collection;
        $selected->hadith_no = $request->hadithNumber;
        $selected->selected = 1;

        $selected->save();

        $hadith = new Hadiths();
        $hadith->collection = $collection;
        $hadith->hadith_no = $request->hadithNumber;
        $hadith->chapter_no = $request->hadith[0]->chapterNumber;
        $hadith->book_no = $request->bookNumber;
        $hadith->text_en = $request->hadith[0]->body;
        $hadith->text_ar = $al_request[0]->ar->text;
        $hadith->text_al = $al_request[0]->translations->sq->text;
        $hadith->grade_en = grade_join($request->hadith[0]->grades);
        $hadith->grade_al = grade_join($request->hadith[0]->grades);
        $hadith->grade_ar = grade_join($request->hadith[1]->grades);

        $hadith->save();
    } else {
        $selected = new Selected();
        $selected->collection = $collection;
        $selected->hadith_no = $request->hadithNumber;
        $selected->selected = 0;

        $selected->save();
    }

    // redirect("./select");
}

try {
    $last = Selected::find_last($collection)->hadith_no + 1;
} catch (Exception $e) {
    $last = 1;
}

$json_request = sunnah_hadith_request($collection, $last);
$request = json_decode($json_request);

if (isset($request->error)) {
    if ($request->error->code == 404) {
        $selected = new Selected();
        $selected->collection = $collection;
        $selected->hadith_no = $last;
        $selected->selected = 0;
        print_r($selected);
        $selected->save();
        redirect("./select");
    }
}

$json_al_request = hadithet_hadith_request($collection1, $last);
$al_request = json_decode($json_al_request);

$_SESSION['request'] = $json_request;
$_SESSION['al_request'] = $json_al_request;

$book = Books::find_by_no($collection, $request->bookNumber);


?>



<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>



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

                                    <button class="btn py-2 mobileHide" type='button' id='dummy_hide' value='Take screenshot' style="display:none;font-size: 20px; border: none">
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


                                <div class="center-hadith" id="center-hadith" style="min-height: 80vh;display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;">
                                    <div class="mobileHide pb-5">

                                        <p class="page-header-title pb-4">

                                        <div id="hadith" class="hadith"><?php echo al_hadith_split($al_request[0]->translations->sq->text, "narrator") ?></div>
                                        <div>
                                            <div id="grade" class="grade"><?php echo grade_join($request->hadith[0]->grades) ?></div>
                                            <div id="book" class="book"><?php echo $request->hadithNumber ?>, <?php echo  $request->hadith[0]->chapterNumber ?>, <?php echo $book->book_en ?></div>
                                        </div>
                                        </p>

                                    </div>

                                    <div class="mobileShow">
                                        <p class="page-header-title py-5 my-5 mobileShow">

                                        <div id="hadith" class="hadith"><?php echo al_hadith_split($al_request[0]->translations->sq->text, "narrator") ?></div>
                                        <div>
                                            <div id="grade" class="grade"><?php echo grade_join($request->hadith[0]->grades) ?></div>
                                            <div id="book" class="book"><?php echo $request->hadithNumber ?>, <?php echo  $request->hadith[0]->chapterNumber ?>, <?php echo $book->book_en ?></div>
                                        </div>

                                        </p>
                                    </div>

                                    <div id="pParent-2">
                                        <div id="pHide-2" class="mobileHide pb-4" style="position: absolute; bottom:0%; transform: translate(-50%,0)">

                                            <a class="btn m-0" href="?accept=true&id=<?php echo $last ?>" style="width: 60px; font-size: 20px;">
                                                <i class="fa text-button fa-check"></i>
                                            </a>
                                            <span style="padding: 5px 0 0 0;">|</span>
                                            <a class="btn m-0" href="?accept=false&id=<?php echo $last ?>" style="width: 60px; font-size: 20px;">
                                                <i class="fa text-button fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="pParent-3">
                                        <div id="pHide-3" class="mobileShow">


                                            <a class="btn m-0" id="link" href="?accept=true&id=<?php echo $last ?>" style="width: 60px; font-size: 20px;">
                                                <i class="fa text-button fa-check"></i>
                                            </a>
                                            <!-- <script>
                                            function clickTheLink() {
                                                    var a = document.getElementById('link');
                                                    a.click();
                                                }
                                                clickTheLink();
                                             </script> -->

                                            <span style="padding: 5px 0 0 0;">|</span>
                                            <a class="btn m-0" href="?accept=false&id=<?php echo $last ?>" style="width: 60px; font-size: 20px;">
                                                <i class="fa text-button fa-times"></i>
                                            </a>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="py-3"></div>


                                </div>


                            </div>



                        </div>



                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<div style="display: none;" id="pParent">
</div>




<?php require_once("includes/templates/foot.php") ?>