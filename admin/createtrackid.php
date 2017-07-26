<?php
session_start();
include '../includes/Connect.php';
include '../includes/ErrorReporting.php';
//if(!isset($_SESSION['id'])) header ('location:index.php?errorToken=thoiehjebfj9897hghtr566556&link=ioyh86ghfjfj78rtrjr89rt9');
if(!isset($_SESSION['id'])) echo '<script> window.location = "index.php?errorToken=thoiehjebfj9897hghtr566556&link=ioyh86ghfjfj78rtrjr89rt9";  </script>';
$errormsg="";
if(isset($_POST['submitCredentials'])){
     $fname = $_POST['fname']; 
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $trackid = $_POST['trackid'];
     $month = $_POST['month'];
     $day = $_POST['day'];
     $year = $_POST['year'];
     $time = $_POST['time'];
     $location = $_POST['location'];
     $status = $_POST['status'];
     
      if(!empty($fname) && !empty($lname) && !empty($email) && !empty($trackid) && !empty($month) && !empty($day) && !empty($year) && !empty($time) && !empty($location) && !empty($status)){
          $query = "INSERT INTO tracking_details (id,fname,lname,email,tracking_no,month,day,year,time,location,status,date_reg) VALUES (null,'$fname','$lname','$email','$trackid','$month','$day','$year','$time','$location','$status',now())";
          if(mysqli_query($_SESSION['connect'],$query)){
           $errormsg = "<p class=\"success\">Tracking info for Client have been successfully registered.</p>"; 
          }
          else {
              $errormsg = "<p class=\"error\">Network error occurred.</p>"; 
                //$errormsg = mysqli_error($_SESSION['connect']);  
          }
      }
      else {
          $errormsg = "<p class=\"error\">Please all fields are required. Try again.</p>";  
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
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->	
    <link rel="stylesheet" href="../css/icons.css" type="text/css" /><!-- Font Awesome -->
    <link rel="stylesheet" href="../css/select2.min.css" type="text/css" /><!-- Select2 -->
    <link rel="stylesheet" href="../css/perfect-scrollbar.css" /><!-- Scroll Bar -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="../css/responsive.css" type="text/css" /><!-- Responsive -->		
    <link rel="stylesheet" href="../css/colors/color.css" type="text/css" /><!-- Color -->

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
         <?php include '../includes/header.php'  ?>
                        </div>
                       
                    </div>
                </div>
            </div><!-- Top Sec -->
            <div class="logo-menu-sec">
                <div class="logo-menu">
                    <div class="logo">
                        <a itemprop="url" href="" title=""><img itemprop="image" src="../images/resource/logo6.png" alt="" /></a>
                    </div>
                    <div class="quick-contact">
                        <ul>
                            <li>
                                <img src="../images/resource/phone.png" alt="" />
                                <span>+17025182209</span>
                                <!--<p>London's Office</p>-->
                            </li>
                            <li>
                                <img src=",./images/resource/sms.png" alt="" />
                                <span>support@fergocargo.com</span>
                                <p>NOTE: This is the only legitimate company email.</p>
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </div>
       
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
                       <li><a itemprop="url" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                        </div>
                    </div>
                </div><!-- Responsive Top Bar -->
                <div class="responsive-quick-contact">
                    <div class="container">
                        <div class="quick-contact">
                            <ul>
                                <li>
                                    <img src="../images/resource/phone.png" alt="" />
                                    <span>+17025182209</span>
                                    <!--<p>London's Office</p>-->
                                </li>
                                <li>
                                    <img src="../images/resource/sms.png" alt="" />
                                    <span>support@fergocargo.com</span>
                                    <p>NOTE: This is the only legitimate company email.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Quick Contact -->
            </div>
             <div class="responsive-nav">
   <?php include '../includes/responsiveheader.php'; ?>
            </div>
        </div>
        </div><!--Responsive header-->

        <!--<div class="page-top blackish overlape">
            <div class="parallax" data-velocity="-.1" style="background: url(images/parallax4.jpg) repeat scroll 0 0"></div>
            <div class="container">
                <div class="page-title">
                    <h3>Feedback</h3>
                </div>--><!-- Page Title -->
            <!--</div>
        </div>--><!-- Page Top -->

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
                                            <h3>QUICK LINKS</h3>
                                        </div>
                                        <div class="contact-detail">
                                     <?php include '../includes/adminnavlinks.php'; ?>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="get-quote-form contact-info-form">
                                        <div class="heading2">
                                            <span> </span>
                                        </div>
                                        <div class="contactform">
                                            <h4><i class="fa fa-truck"></i> Assign Tracking ID to Client</h4><br>
                                            <div id="formresult"><?php echo $errormsg; ?></div>
                                                            <form id="contactform" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="First Name of Client" name="fname" class="text-field input-style" required />
                                                    </div>
                                                    <div class="col-md-4">
                                                      <input type="text" placeholder="Last Name" name="lname" class="text-field input-style" required />  
                                                    </div>
                                                   <div class="col-md-5">
                                                      <input type="email" placeholder="Email" name="email" class="text-field input-style" required />  
                                                    </div> 
                                                    <div class="col-md-5">
                                                      <input type="text" placeholder="Tracking Number" name="trackid" class="text-field input-style" required />  
                                                    </div>
                                                    
                                                      <div class="col-md-4">
                                                            <select name="month" class="text-field input-style">
                                                            <option value="">Month</option>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>
                                                        </select>
                                                    </div>
                                                           <div class="col-md-4">
                                                            <select name="day" class="text-field input-style">
                                                            <option value="">Day</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <select name="year" class="text-field input-style">
                                                            <option value="">Year</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2033">2033</option>
                                                            <option value="2034">2034</option>
                                                            <option value="2035">2035</option>
                                                            <option value="2026">2036</option>
                                                            <option value="2037">2037</option>
                                                            <option value="2038">2038</option>
                                                            <option value="2039">2039</option>
                                                            <option value="2040">2040</option>
                                                        </select>
                                                    </div>
                                                      <div class="col-md-5">
                                                      <input type="text" placeholder="Enter the Time in this format(E.g 12:30am, 1:50pm" name="time" class="text-field input-style" required />  
                                                    </div> 
                                                     <div class="col-md-5">
                                                      <input type="text" placeholder="Enter the Location (E.g New York, United States)" name="location" class="text-field input-style" required />  
                                                    </div>
                                                       <div class="col-md-8">
                                                      <input type="text" placeholder="Specify the status of product(E.g Departed,Arrived at Facility, Inbound out of Custom)" name="status" class="text-field input-style" required />  
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button id="quote-btn" name="submitCredentials" title="" itemprop="url" type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Create</button>
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
                <div class="parallax dark" data-velocity="-.2" style="background: rgba(0, 0, 0, 0) url(../images/parallax2.jpg) no-repeat 50% 0;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8 column">
                                    <div class="widget">
                                        <div class="about-widget">
                                            <div class="logo">
                                                <a itemprop="url" href="" title=""><img itemprop="image" src="../images/resource/logo6.png" alt="" /></a>
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

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 column">
                            <span>&copy; 2016 <a itemprop="url" title="" href="">Fergo Cargo Freight.</a>  All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank"></div>
        </footer>   


    <!-- Script -->
    <script type="text/javascript" src="../js/modernizr-2.0.6.js"></script><!-- Modernizr -->
    <script type="text/javascript" src="../js/jquery-2.2.2.js"></script><!-- jQuery -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script><!-- Scroll To Top -->
    <script type="text/javascript" src="../js/jquery.scrolly.js"></script><!-- Scrolly -->
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="../js/icheck.js"></script><!-- iCheck -->
    <!--<script type="text/javascript" src="../js/jquery.jigowatt.js"></script>--><!-- Contact Us -->
    <script type="text/javascript" src="../js/select2.full.js"></script><!-- Select2 -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script><!-- Google Map -->
    <script type="text/javascript" src="../js/perfect-scrollbar.js"></script><!-- Scroll Bar -->
    <script type="text/javascript" src="../js/perfect-scrollbar.jquery.js"></script><!-- Scroll Bar -->
    <script src='../../www.google.com/recaptcha/api.js'></script>
    <script src="../js/script.js"></script>
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

