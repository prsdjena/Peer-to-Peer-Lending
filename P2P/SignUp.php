<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
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

 <!--    <link rel="stylesheet" type="text/css" href="css/mainSU.css">
    <link rel="stylesheet" type="text/css" href="css/utilSU.css"> -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet"  >
</head>

<body>


    <?php include('header.php') ?>
    <!-- #header -->
        <div class= "cover">
             <div class="container-form">
                <h2>Registration</h2>
                <span> <span style="color: red;">*</span>All Fields are required </span>
                <form  class = "form" method="post" action= register.php>

                    <label>Full name: </label> <input type="text" name="name" placeholder="Your name" required>

                    <label>DOB: </label><input type="date" name="dob" required>
                    <label>Mobile No: </label><input type="number" name="contact" placeholder="3857192343" required>
                    <label>Email id: </label><input type="email" name="email" placeholder="example@exampl.com" required>
                    <label>Password: </label><input type="password" name="pass" placeholder="***********" required>
                    <label>Re-type Password: </label><input type="text" name="repass" placeholder="password"required>

                    <label>Monthly Income: </label><input type="text" name="income" placeholder="Rs. 000" required>


                    <label>PanCard No: </label><input type="text" name="pan" placeholder="BXWPJ8435J" required><br>
                    <input type="checkbox" name="" required><label> &nbsp;&nbsp; I accept&nbsp;<a href="https://www.bajajfinserv.in/insights/personal-loan-terms-conditions">Terms & Conditons</a></label>

                    <div class= "form-bottom">
                        <button class = "btn1">Sign up </button>  
                        <a href="login.php" class="btn2">Sign in   <i class="fa fa-long-arrow-right m-l-5"></i> </a>
                    </div>



                </form>

        </div>       
        </div>
       




<!-- 
   
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('img/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <div style="margin-bottom: 10px;">
                    <p> <span style="color: red;">*</span>All Fields are required</p>
                </div>
                        
                <form class="login100-form validate-form" method="post" action="register.php">

                    <span class="login100-form-title p-b-59">
                        Registration
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Full Name</span>
                        <input class="input100" type="text" name="name" placeholder="Name...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="DOB is required">
                        <span class="label-input100">D.O.B</span>
                        <input class="input100" type="date" name="dob" placeholder="20/03/2001">
                       
                    </div>




                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Email addess...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Contact is required">
                        <span class="label-input100">Contact</span>
                        <input class="input100" type="text" name="contact" placeholder="Mobile no....">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                        <span class="label-input100">Repeat Password</span>
                        <input class="input100" type="password" name="repass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="PanCard No is required">
                        <span class="label-input100">Pan Card No.</span>
                        <input class="input100" type="text" name="pan" placeholder="BXWPJ8435J">
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

           
                               <button class = "signup">Sign Up</button>
                      
                     

                        <a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Sign in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    <div id="prasad">agahiah</div> -->

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

  
    <!-- #footer -->
 <?php include('footer.php'); ?>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Required JavaScript Libraries-->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

    <script src="js/custom.js"></script>

    <script src="contactform/contactform.js"></script> 

</body>

</html>
