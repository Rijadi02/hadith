<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - SB Admin Pro</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    <link href="font/stylesheet.css" rel="stylesheet">
    <style>
        body {
            background-repeat: repeat-y;
        }

        .blur {
            background-color: rgba(0, 0, 0, 0.8);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            width: 100%;
            height: 100%;
            position: fixed;


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

        /* 
                Camera and Clipboard
                <div class="screenshot mobileHide" style="z-index: 1234; position: fixed; bottom: 10px; left: 10px;">
                <i class="fa fa-camera"></i> | <i class="fa fa-clipboard"></i>
                </div>
 */
    </style>


</head>

<body>
    <div id="layoutDefault" style="width: 100%;
            height: 100%;">
        <div id="layoutDefault_content" style="width: 100%; height: 100%;">

            <header class="page-header my-0 py-0 bg-img-cover " style='min-height: 100vh;background-image: url("https://i.pinimg.com/originals/5e/65/20/5e6520289b44e11a9e74363c18ce3ee1.jpg"); width: 100%; height: 100% !important; background-repeat: repeat-y !important;'>
                <div class="blur"></div>
                <div class="page-header-content" style="min-height: 100vh;display: flex;
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
                                                <div class="term">
                                                    <input name="email" type="text" id="email" placeholder="Email here!" style=" border-bottom: 1px solid white">
                                                    <button id="button-transparent" style=" border-bottom: 1px solid white"><i class="fa fa-arrow-right"></i></button>

                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                   

                                    <p class="page-header-title mobileHide" style="padding: 20vh 0;">
                                        <a href="#" class="a-title">Albanian</a> &nbsp;
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            disable: 'mobile',
            duration: 600,
            once: true
        });
    </script>
</body>

</html>