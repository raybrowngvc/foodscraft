<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us - Foods Crafts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Normalize CSS --> 
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Main CSS -->         
    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Animate CSS --> 
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href="css/font/flaticon.css">

    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">

    <!-- Main Menu CSS -->      
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />

    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="css/jquery.datetimepicker.css">

    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="css/switch-style.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Modernizr Js -->
    <script src="js/modernizr-2.8.3.min.js"></script>

</head>
<body>


    <!-- Add your site or application content here -->
    <div class="wrapper">
        <!-- Header Area Start Here -->
        <?php
        include "header.php";
        ?>
        <!-- Header Area End Here -->

        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="padding-top:200px;">
            <div class="container">
                <div class="pagination-area">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="index.php">Home </a> /</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>  
        </div> 
        <!-- Inner Page Banner Area End Here -->
        <!-- Contact Us Page Area Start Here -->
        <div class="contact-us-page-area section-space-bottom">
            <div class="google-map-area">                               

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-us-left">   
                            <h2 class="title-bar-medium-left inner-sub-title">information</h2>    
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p>+49 033 2161 6359</p>   
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p>Landhausstraße 95, Nauen, Brandenburg, Germany</p> 
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    <p>info@foodscrafts.com</p>   
                                </li>

                            </ul>
                        </div>  
                    </div>  
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="contact-us-right"> 
                            <h2 class="title-bar-medium-left inner-sub-title">Send Us A Message</h2>    
                            <div class="contact-form"> 
                                <form class="form-contact contact_form" action="mail.php" method="post" >
                                    <div class="row">

                                        <div class="col-sm-6 mb-4">
                                            <div class="form-group">
                                                <input class="form-control valid" name="name"  type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="form-group">
                                                <input class="form-control valid" name="email" type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-6 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" name="phone" type="text" placeholder="Enter Phone No.">
                                            </div>
                                        </div>
                                        <div class="col-6 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Enter Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-0 col-12">
                                        <button class="find_btn btn" id="js-contact-btn" name="submit" type="submit">Send message</button> 
                                        <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Page Area End Here -->


        <!-- Footer Area Start Here -->
        <?php
        include "footer.php";
        ?>
        <!-- Footer Area End Here -->
    </div>


    <!-- jquery-->  
    <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

    <!-- Plugins js -->
    <script src="js/plugins.js" type="text/javascript"></script>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!-- WOW JS -->     
    <script src="js/wow.min.js"></script>

    <!-- Nivo slider js -->     
    <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="vendor/slider/home.js" type="text/javascript"></script>

    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>

    <!-- Srollup js -->
    <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>

    <!-- jquery.counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>

    <!-- Switch js -->
    <script src="js/switch-style.js" type="text/javascript"></script>

    <!-- Date Time Picker Js -->
    <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>

    <!-- Validator js -->
    <script src="js/validator.min.js" type="text/javascript"></script>

    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>

</body>


</html>
