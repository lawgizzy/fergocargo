<?php
session_start();
include 'includes/Connect.php';
include 'includes/ErrorReporting.php';
if(isset($_SESSION['id'])) {
    header('location:trackingdetails.php?action=info&success=1');
 //echo '<script> window.location = "home.php?action=defaultpage&success=1";  </script>';
}
if(isset($_GET['errorToken'])){
$errormsg = "<p style='color:#cb2027;'>Your login credentials have expired.<br /> Please login again to access.</p>";	
unset($_GET['errorToken']);
}
global $errormsg;
if(isset($_POST['track'])){
     $orderno = trim($_POST['orderno']);
      if(!empty($orderno)){
          $query = "SELECT * FROM  tracking_details WHERE tracking_no ='$orderno' LIMIT 1";
          $query_data = mysqli_query($_SESSION['connect'],$query);
          if($query_data){
          $query_row = mysqli_fetch_array($query_data);
                 $_SESSION['id'] = $query_row['id'];
                 $_SESSION['fname'] = $query_row['fname'];
                 $_SESSION['lname'] = $query_row['lname'];
                 $_SESSION['email'] = $query_row['email'];
                 $_SESSION['trackingno'] = $query_row['tracking_no'];
                   
                 if($_SESSION['id']!=""){
                   //header('location:home.php');
               echo '<script> window.location = "trackingdetails.php?action=info&success=1";  </script>';
                 }
          else{
             $errormsg = "<p style='color:#cb2027;'>No record found.</p>"; 
           
           }
          }
          else{
              $errormsg = "<p style='color:#cb2027;'>Network error. Try again.</p>";    
          }
      }
              
      else {
           $errormsg = "<p style='color:#cb2027;'>Field is required. Try again.</p>"; 
      }  
}
 
?>


<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fergo Cargo</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->	
    <link rel="stylesheet" href="css/icons.css" type="text/css" /><!-- Font Awesome -->
    <link rel="stylesheet" href="css/select2.min.css" type="text/css" /><!-- Select2 -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" /><!-- Scroll Bar -->
    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->		
    <link rel="stylesheet" href="css/colors/color.css" type="text/css" /><!-- Color -->

</head>
<body itemscope="">
    <div class="theme-layout">
        <header class="fancy-header">
            <div class="top-sec">
                <div class="top-bar">
                    <div class="container">
                        <!--<span class="cargo-time"><i class="fa fa-clock-o"></i>Working Time : 08:00AM - 9:00PM</span>-->
                         <span class="cargo-time" style="font-size: x-large;">FERGO CARGO FREIGHT </span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div><!-- Top Sec -->
            <div class="logo-menu-sec">
                <div class="logo-menu">
                    <div class="logo">
                        <a itemprop="url" href="index.php" title=""><img itemprop="image" src="images/resource/logo6.png" alt="" /></a>
                    </div>
                    <div class="quick-contact">
                        <ul>
                            <li>
                                <img src="images/resource/phone.png" alt="" />
                                <span>+17025182209</span>
                                <!--<p>London's Office</p>-->
                            </li>
                            <li>
                                <img src="images/resource/sms.png" alt="" />
                                <span>support@fergocargo.com</span>
                                <p>NOTE: This is the only legitimate company email.</p>
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </div>
               <nav class="menu-curve">
                    <ul>
                        <li><a itemprop="url" href="index.php" title="">HOME</a></li>
                        <li><a itemprop="url" href="about.html" title="">ABOUT US</a></li>
                        <li><a itemprop="url" href="services.html" title="">SERVICES</a><li>
                        <li><a itemprop="url" href="project.html" title="">FEATURED PROJECTS</a></li>
                        <li><a itemprop="url" href="trackorder.php" title="">TRACK AND MONITOR</a></li>
                        <li><a itemprop="url" href="contact.php" title="">CONTACT</a></li>
                    </ul>
                </nav>
            </div><!-- Logo Menu Sec -->
        </header>

        <div class="responsive-header">
            <span class="top-sec-btn"><i class="fa fa-angle-double-down"></i></span>
            <div class="responsive-top-sec">
                <div class="responsive-top-bar top-bar">
                    <div class="container">
                        <!--<span class="cargo-time">Opening Time :<i>08:00AM - 9:00PM</i></span>-->
                        <span class="cargo-time" style="font-size: large;">FERGO CARGO FREIGHT </span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Top Bar -->
                <div class="responsive-quick-contact">
                    <div class="container">
                        <div class="quick-contact">
                            <ul>
                                <li>
                                    <img src="images/resource/phone.png" alt="" />
                                    <span>+17025182209</span>
                                    <!--<p>London's Office</p>-->
                                </li>
                                <li>
                                    <img src="images/resource/sms.png" alt="" />
                                    <span>support@fergocargo.com</span>
                                    <p>NOTE: This is the only legitimate company email.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Quick Contact -->
            </div>
             <div class="responsive-nav">
                <div class="container">
                    <div class="responsive-logo">
                        <div class="logo">
                            <a itemprop="url" href="index.php" title=""><img itemprop="image" src="images/resource/logo6.png" alt="" /></a>
                        </div>
                    </div>
                    <span class="responsive-btn"><i class="fa fa-list"></i></span>
                    <div class="responsive-menu">
                        <span class="close-btn"><i class="fa fa-close"></i></span>
                        <ul class="responsive-popup-btns">
                            
                        </ul>
                        <ul>
                            <li><a itemprop="url" href="index.php" title="">HOME</a></li>
                            <li><a itemprop="url" href="about.html" title="">ABOUT US</a></li>
                            <li><a itemprop="url" href="services.html" title="">SERVICES</a></li>
                            <li><a itemprop="url" href="project.html" title="">FEATURED PROJECTS</a></li>
                            <li><a itemprop="url" href="trackorder.php" title="">TRACK AND MONITOR</a></li>
                            <li><a itemprop="url" href="contact.php" title="">CONTACT</a></li>
                        </ul>
                    </div><!-- Responsive Menu -->
                </div>
            </div>
        </div>
        </div><!--Responsive header-->

        <div class="page-top blackish overlape">
            <div class="parallax" data-velocity="-.1" style="background: url(images/parallax4.jpg) repeat scroll 0 0"></div>
            <div class="container">
                <div class="page-title">
                    <h3>TRACK CARGO</h3>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->

        <!--<section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <div class="map">
                            <div id="map-canvas"></div>
                        </div>--<<!-- Google Map -->
                    <!--</div>
                </div>
            </div>
        </section>--><!-- Google Map Section -->


        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="region-contact-info team-detail-info">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                            <h3>CONTACT</h3>
                                        </div>
                                        <div class="contact-detail">
                                            <span class="contact">
                                                <i class="fa fa-mobile"></i>
                                                <strong>Office Phone No</strong>
                                                <span>+17025182209</span>
                                            </span>
                                            <span class="contact">
                                                <i class="fa fa-envelope"></i>
                                                <strong>Email Address</strong>
                                                <span>support@fergocargo.com</span>
                                            </span>
                                             
                                            <span class="contact">
                                                <strong>Agents: </strong><br>
                                                <strong>Mr Charles Dan</strong>
                                                <span>charlesdan2delivery@gmail.com </span>
                                                <span>+18189373399 </span>
                                            </span>
                                             <span class="contact">   
                                                <strong>Mr Ray Fletcher</strong>
                                                <span>rayfletcher2delivery@gmail.com</span>
                                                <span>+16237386611</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="get-quote-form contact-info-form">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                        <h2>Shipment Visibility</h2>
                                        </div>
                                        <p>Enter the cargo number you would like to track.</p>
                                        <div class="contactform">
                                            <div id="formresult"></div>
                                            <form id="contactform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                                <div class="row">
                                                     <?php echo $errormsg; ?>
                                                    <div class="col-md-6">
                                                        <input type="text" name="orderno" placeholder="Order Number" class="text-field input-style" id="name" required />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button id="quote-btn" name="track" title="" itemprop="url" type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Track Now</button>
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	


            <footer>
            <section class="block">
                <div class="parallax dark" data-velocity="-.2" style="background: rgba(0, 0, 0, 0) url(images/parallax2.jpg) no-repeat 50% 0;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 column">
                                    <div class="widget">
                                        <div class="about-widget">
                                            <div class="logo">
                                                <a itemprop="url" href="index.php" title=""><img itemprop="image" src="images/resource/logo6.png" alt="" /></a>
                                            </div>
                                            <p itemprop="description">Your fast and reliable delivery service.</p>
                                            <ul class="social-btn">
                                                <li><a href="#" title="" itemprop="url"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fa fa-facebook"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 column">
                                    <Div class="row">
                                        <div class="col-md-6 column">
                                            <div class="widget">
                                                <div class="heading2">
                                                    <span>Fast And Safe</span>
                                                    <h3>USEFUL LINKS</h3>
                                                </div>
                                                <div class="links-widget">
                                                    <ul>
                                                        <li><a itemprop="url" href="index.php" title="">Home</a></li>
                                                        <li><a itemprop="url" href="about.html" title="">About Us</a></li>
                                                         <li><a itemprop="url" href="services.html" title="">Services</a></li>
                                                          <li><a itemprop="url" href="project.html" title="">Featured Projects</a></li>
                                                          <li><a itemprop="url" href="trackorder.php" title="">Track and Monitor</a></li>
                                                          <li><a itemprop="url" href="contact.php" title="">Contact</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- Widget -->
                                        </div>
                                        <div class="col-md-6 column">
                                            <div class="widget">
                                                <div class="heading2">
                                                    <span>Fast And Safe</span>
                                                    <h3>SHIPPING SERVICES</h3>
                                                </div>
                                                <div class="links-widget">
                                                    <ul>
                                                        <li><a itemprop="url" href="" title="">Ground Transport</a></li>
                                                        <li><a itemprop="url" href="" title="">Cargo</a></li>
                                                        <li><a itemprop="url" href="" title="">Warehousing</a></li>
                                                        <li><a itemprop="url" href="" title="">Logistic Service</a></li>
                                                        <li><a itemprop="url" href="" title="">Trucking Service</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 column">
                                    <div class="widget blue1">
                                        <div class="heading2">
                                            <span>FAST AND SAFE</span>
                                            <h3>NEWSLETTER SUBSCRIBE</h3>
                                        </div>
                                        <div class="subscription-form">

                                            <form>
                                                <input type="text" placeholder="Enter Your Email Address" />
                                                <a title="" href="#" class="theme-btn" data-toggle="modal" data-target="#submission-message"><i class="fa fa-paper-plane"></i>SUBMIT NOW</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 column">
                            <span>&copy; 2016 <a itemprop="url" title="" href="index.php">Fergo Cargo Freight.</a>  All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank"></div>
        </footer>   


    <!-- Script -->
    <script type="text/javascript" src="js/modernizr-2.0.6.js"></script><!-- Modernizr -->
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script><!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script><!-- Scroll To Top -->
    <script type="text/javascript" src="js/jquery.scrolly.js"></script><!-- Scrolly -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="js/icheck.js"></script><!-- iCheck -->
    <!--<script type="text/javascript" src="js/jquery.jigowatt.js"></script>--><!-- Contact Us -->
    <script type="text/javascript" src="js/select2.full.js"></script><!-- Select2 -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script><!-- Google Map -->
    <script type="text/javascript" src="js/perfect-scrollbar.js"></script><!-- Scroll Bar -->
    <script type="text/javascript" src="js/perfect-scrollbar.jquery.js"></script><!-- Scroll Bar -->
    <script src='../../www.google.com/recaptcha/api.js'></script>
    <script src="js/script.js"></script>
    <script>
    $(document).ready(function () {
        "use strict";

            //** Map **//
            function initialize() {
                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
                var mapOptions = {
                    zoom: 14,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    center: myLatlng
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var image = 'images/icon.html';
                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image
                });

            }
            google.maps.event.addDomListener(window, 'load', initialize);

        });

    </script>
</body>

</html>

