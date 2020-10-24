<link href="assets/css/styles.css" rel="stylesheet" />

<?php
require_once("includes/init.php");

if (isset($_POST['type'])) {
    $email = htmlspecialchars($_POST['email']);
    $type = htmlspecialchars($_POST['type']);
    if (!EmailList::email_exists($email)) {
        $email_object = new EmailList();
        $email_object->email = $email;
        $email_object->type = $type;
        $email_object->save();
        message("Email registred!");
    }
    else
    {
        message("Email already exists!", "danger");
    } 
}
?>
<script>

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
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
                        <div class="col-xl-8 col-lg-10 text-center">
                            <div data-aos="fade-up">
                                <div class="row pt-5">


                                    <script>
                                        function showModal() {
                                            document.getElementById("modal-type").style.display = "block";
                                            document.getElementById("email").value = document.getElementById("emailold").value;
                                        }

                                        function submitType(type) {
                                            console.log(document.getElementById("email").value);
                                            document.getElementById("type").value = type;
                                            document.getElementById("formType").submit();
                                        }
                                    </script>

                                    <div id="modal-type" class="message" onclick="message(this)" style="display:none">
                                        <div class="message-text text-center text-<?php echo $msg_type; ?>">
                                            <button class="btn" style="font-size: 1rem; color:white; opacity:0.7" href=".">
                                                < Back</button> <br>
                                                    <button class="btn" onclick="submitType('al')" style="font-size: 2rem;color:white;">Albanian</button>
                                                    <br>
                                                    <button class="btn" onclick="submitType('en')" style="font-size: 2rem;color:white;">English</button>
                                                    <br>
                                                    <button class="btn" onclick="submitType('ar')" style="font-size: 2rem;color:white;">Arabic</button>
                                        </div>
                                        <form id="formType" action="" method="POST" style="display:none">
                                            <input id="type" type="text" hidden name="type">
                                            <input id="email" type="text" hidden name="email">
                                        </form>
                                    </div>

                                    <!-- <div class="col-lg-12 mobileShow">
                                        <p class="page-header-text">If you want to get a hadeeth per day in you email, put your email down there!</p>
                                        <div id="WRAPPER">
                                            <form class="border-0" onsubmit="showModal()" action="javascript:void(0)" method="POST" style="display: inline;">
                                                <div class="term">
                                                    <input type="email" required id="emailold" placeholder="Email here!" style="width:80%;border-bottom: 1px solid white;background-color:transparent">
                                                    <button id="button-transparent" type="submit" name="submit-email" style="border-bottom: 1px solid white"><i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> -->


                                    <div class="col-lg-12">

                                        <p class="page-header-text">If you want to get a hadeeth per day in you email, put your email down there!</p>
                                        <div id="WRAPPER">
                                            <form class="border-0" onsubmit="showModal()" action="javascript:void(0)" method="POST" style="display: inline;">
                                                <div class="term">
                                                    <input type="email" class="email-input" required id="emailold" placeholder="Email here!">
                                                    <button id="button-transparent" type="submit" name="submit-email" style="border-bottom: 1px solid white"><i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>



                                </div>




                                <p class="page-header-title mobileHide" style="padding: 20vh 0;">
                                    <a href="al" class="a-title">Albanian</a> &nbsp;
                                    |
                                    &nbsp;
                                    <a href="en" class="a-title">English</a> &nbsp;
                                    |
                                    &nbsp; <a href="ar" class="a-title">Arabic</a>

                                </p>



                                <div class="mobileShow" class="h-100">
                                    <div class="py-5">
                                        <div class="py-5">
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
                                <div class="row pb-5">
                                    <p class="page-header-text">The ahadeeth that are shown on this page are taken from <a href="http://www.buhariu.com">bukhariu.com </a> and <a href="http://www.sunnah.com">sunnah.com </a> </p>
                                    <div class="py-2 d-sm-none">&nbsp;</div>

                                    <div class="col-lg-4 ">
                                        <a href="#" class="page-header-text">@onehadeeth.org<i class="fab fa-instagram " style="width:50px;"></i></a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="page-header-text">@onehadeeth.org<i class="fab fa-facebook" style="width:50px;"></i></a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="page-header-text"> One Hadeeth Org <i class="fab fa-twitter" style="width:50px;"></i></a>
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

        </header>

    </div>
</div>


<?php require_once("includes/templates/foot.php") ?>