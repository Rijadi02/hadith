<link href="assets/css/styles.css" rel="stylesheet" />

<?php
require_once 'includes/init.php';

if (isset($_POST['type'])) {
    $email = htmlspecialchars($_POST['email']);
    $type = htmlspecialchars($_POST['type']);
    if (!EmailList::email_exists($email)) {
        $email_object = new EmailList();
        $email_object->email = $email;
        $email_object->type = $type;
        $email_object->save();
        message('Email registred!');
    } else {
        message('Email already exists!', 'danger');
    }
}
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>




<div id="layoutDefault" style="width: 100%;
            height: 100%;">
    <div id="layoutDefault_content" style="width: 100%; height: 100%;">

        <header class="page-header overlay my-0 py-0 bg-img-cover " style='min-height: 100vh;background-image: url("assets/img/bg.jpg"); width: 100%; min-height: 100% !important; background-repeat: repeat-y !important;'>
            <div class="page-header-content fade-in" style="min-height: 100vh;display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;">
                <div style="z-index: 100;" class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <div data-aos="fade-up">
                                <div class="row pt-5">





                                    <div class="col-lg-12">
                                        
                                        <p class="page-header-text w-100 text-white"><b>Don't forget to keep us in your duas</b></p>
                                        <p class="page-header-text">We also have an extension for showing prayer times and a random hadith for each new tab.
                                            <a id="ext-link"  href="https://chrome.google.com/webstore/detail/one-hadith/kjkmpppbjhcllohbcjeclghdfhbcnkfa">
                                            Download our extension 
                                            <i style="vertical-align: middle" data-feather="arrow-right" ></i>
                                            </a>
                                        </p>


                                    </div>



                                </div>




                                <p class="page-header-title mobileHide" style="padding-top: 20vh; padding-bottom: 15vh">
                                    <a href="al" class="a-title">Albanian</a> &nbsp;
                                    |
                                    &nbsp;
                                    <a href="en" class="a-title">English</a> &nbsp;
                                    |
                                    &nbsp; <a href="ar" class="a-title">Arabic</a>

                                </p>



                                <div class="mobileShow" class="h-100">
                                    <div class="py-5">
                                        <div class="pt-5 pb-4">
                                            <h1 class="page-header-title text-center">
                                                <a href="al" class="a-mobile text-center text-decoration-none">Albanian</a>
                                                <br>
                                                -
                                                <br>

                                                <a href="en" class="a-mobile text-center text-decoration-none">English</a>
                                                <br>
                                                -
                                                <br>

                                                <a href="ar" class="a-mobile text-center text-decoration-none">Arabic</a>

                                            </h1>

                                        </div>





                                    </div>

                                </div>
                                <div class="row text-center">
                            
                                            <img style="margin: 0 auto; width:48px; object-fit: contain;" class="pb-5"  src="assets/img/mi.svg"/>
                                            <!-- <p class="page-header-text">Muslimani ideal</p> -->
                            
                                    <p class="page-header-text pb-4 w-100">The hadith that are shown on this page are taken from <a href="http://www.hadithet.com">hadithet.com </a> and <a href="http://www.sunnah.com">sunnah.com </a> </p>

                                    <div class="py-sm-5 d-sm-none">&nbsp;</div>

                                    <div class="col-lg-3 py-1">
                                        <a href="https://www.youtube.com/channel/UC5kaiIEUKKHmGyQ08WITvew" class="page-header-text text-center">
                                            <i style="width: 1.5rem;height: 1.5rem; margin-bottom: .7rem;" data-feather="youtube"></i>
                                            <div class="text-center mobile-inline"> Muslimani Ideal </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 py-1">
                                        <a href="https://www.facebook.com/MuslimaniIdealM" class="page-header-text text-center">
                                            <i style="width: 1.5rem;height: 1.5rem; margin-bottom: .7rem;" data-feather="facebook"></i>
                                            <div class="text-center mobile-inline"> @MuslimaniIdealM </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 py-1">
                                        <a href="https://www.instagram.com/muslimani_ideal/" class="page-header-text text-center">
                                            <i style="width: 1.5rem;height: 1.5rem; margin-bottom: .7rem;" data-feather="instagram"></i>
                                            <div class="text-center mobile-inline"> @muslimani_ideal </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 py-1">
                                        <a href="https://t.me/muslimani_ideal" class="page-header-text text-center">
                                            <image style="margin-bottom: .92rem; width: 1.5rem" src="./assets/svg/telegram.svg" alt=""></image>
                                            <div class="text-center mobile-inline">Muslimani Ideal</div>
                                        </a>
                                    </div>
                                    <div class="py-2">&nbsp;</div>
                                </div>




                            </div>

                        </div>
                    </div>

        </header>

    </div>
</div>

<script src="assets/js/link.js"></script>
<?php require_once 'includes/templates/foot.php'; ?>
