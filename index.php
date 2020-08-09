<link href="css/styles.css" rel="stylesheet" />
<?php
require_once("includes/init.php");

if (isset($_POST['submit-email'])) {
    $email = htmlspecialchars($_POST['email']);
    if (!EmailList::email_exists($email)) {
        $email_object = new EmailList();
        $email_object->email = $email;
        $email_object->save();
        message("Email registred!");
    }
    else
    {
        message("Email already exists!", "danger");
    }
}
?>




<div id="layoutDefault" style="width: 100%;
            height: 100%;">
    <div id="layoutDefault_content" style="width: 100%; height: 100%;">

        <header class="page-header overlay my-0 py-0 bg-img-cover " style='min-height: 100vh;background-image: url("https://i.pinimg.com/originals/5e/65/20/5e6520289b44e11a9e74363c18ce3ee1.jpg"); width: 100%; min-height: 100% !important; background-repeat: repeat-y !important;'>
            <div class="page-header-content fade-in" style="min-height: 100vh;display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;">
                <div style="z-index: 100;" class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 text-center">
                            <div data-aos="fade-up">
                                <div class="row pt-5">

                                    <div class="col-lg-12">
                                        <p class="page-header-text">If you want to get a hadeeth per day in you email, put your email down there!</p>
                                        <div id="WRAPPER">
                                            <form class="border-0" action="" method="POST" style="display: inline;">
                                                <div class="term">
                                                    <input name="email" type="text" id="email" placeholder="Email here!" style=" border-bottom: 1px solid white">
                                                    <button id="button-transparent" type="submit" name="submit-email" style=" border-bottom: 1px solid white"><i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>



                                </div>




                                <p class="page-header-title mobileHide" style="padding: 20vh 0;">
                                    <a href="sq" class="a-title">Albanian</a> &nbsp;
                                    |
                                    &nbsp;
                                    <a href="#" class="a-title">English</a> &nbsp;
                                    |
                                    &nbsp; <a href="#" class="a-title">Arabic</a>

                                </p>



                                <div class="mobileShow" class="h-100">
                                    <div class="py-5">
                                        <div class="py-5">
                                            <h1 class="page-header-title  text-center ">
                                                <a href="#" class="a-title text-decoration-none" style="padding: 15px 40px !important;
                                                    border: 2px solid #fff;
                                                    border-radius: 100px;">Albanian</a>
                                                <br>
                                                <br>

                                                <a href="#" class="a-title text-decoration-none" style="padding: 15px 40px !important;
                                                    border: 2px solid #fff;
                                                    border-radius: 100px;">English</a>
                                                <br>
                                                <br>

                                                <a href="#" class="a-title text-decoration-none" style="width: 300px;padding: 15px 40px !important;
                                                    border: 2px solid #fff;
                                                    border-radius: 100px;">Arabic</a>

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


<?php require_once("includes/foot.php") ?>

