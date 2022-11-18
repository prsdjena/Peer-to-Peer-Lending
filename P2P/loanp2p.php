<?php
session_start();
include('config.php');
include('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lending</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="favicon.ico" rel="shortcut icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
   
    <link rel="stylesheet" type="text/css" href="css/mainSU.css">
    <link rel="stylesheet" type="text/css" href="css/utilSU.css">
     <link href="css/style.css" rel="stylesheet">
     <style>
        .wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
        </style>
</head>

<body>
    <div id="preloader"></div>

    <?php include('header.php'); ?>
    <!-- #header -->

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-color:#1a1a1a;">
                <!-- <p style="padding: 5px;font-size: 16px;color: white"></p> -->
            </div >

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form" method="post" action="borrowp2p.php">
                    <span class="login100-form-title p-b-59">
                       Fill The Form For Borroweing
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Title is required">
                        <span class="label-input100">Loan Reason </span>
                        <input class="input100" type="text" name="title" placeholder="...">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Description is required">
                        <span class="label-input100">Description</span>
                        <input class="input100" type="text" name="descrip" placeholder="Description...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Amount is required">
                        <span class="label-input100">Amount Needed</span>
                        <input class="input100" type="text" name="amt" placeholder="in Indian Currency">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Time is required">
                        <span class="label-input100">For How many months</span>
                        <select class="input100" name="time">
                            <option>Select</option>
                            <option value="12">12 Month</option>
                            <option value="24">24 Month</option>
                            <option value="36">36 Month</option>
                            <option value="48">48 Month</option>
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    I agree to the
                                    <a href="#" class="txt2 hov1">
                                        Terms of User
                                    </a>
                                </span>
                            </label>
                        </div>


                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Submit form
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <?php include('footer.php'); ?>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>

    <script src="contactform/contactform.js"></script>


</body>

</html>
