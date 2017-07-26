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
    <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css"><!-- Layer Slider -->

</head>
<body itemscope="">
    <div class="theme-layout">
        <header class="fancy-header scrollup stick">
            <div class="top-sec">
                <div class="top-bar">
                    <div class="container">
                        <!--<span class="cargo-time"><i class="fa fa-clock-o"></i>Working Time : 08:00AM - 9:00PM</span>-->
                        <span class="cargo-time" style="font-size: x-large;"><marquee scrollamount="5">FERGO CARGO FREIGHT </marquee></span>
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
                                <!--<p>Syria's Office</p>-->
                            </li>
                            <li>
                                <img src="images/resource/sms.png" alt="" />
                                <span>support@fergocargo.com</span>
                                <p>NOTE: This is the only legitimate company email.</p>
                            </li>
                            <li>
                                <!--<a href="#" title="" itemprop="url" class="theme-btn popup2">REQUEST A RATE</a>-->
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="menu-curve">
                    <ul>
                        <li><a itemprop="url" href="index.php" title="">HOME</a></li>
                        <li><a itemprop="url" href="about.html" title="">ABOUT US</a></li>
                        <li><a itemprop="url" href="services.html" title="">SERVICES</a></li>
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
                        <span class="cargo-time" style="font-size: large;">FERGO CARGO FREIGHT </span>
                        <!--<span class="cargo-time">Opening Time :<i>08:00AM - 9:00PM</i></span>-->
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
                                    <!--<p>Syria's Office</p>-->
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
        </div><!--Responsive header-->

      
        <div class="main-slider overlape">
            <div id="full-slider-wrapper">
                <div id="layerslider" style="width:100%; height:696px; ">

                    <div class="ls-slide" data-ls="transition2d:35; timeshift:-1000; slidedelay: 7000;">
                        <img itemprop="image" src="images/resource/slide1.jpg" class="ls-bg" alt="Slide background" />

                        <div class="ls-slide" style="font-family:raleway; font-weight:700; font-size:16px; text-transform:uppercase; line-height:28px; color:#ffffff; top:214px; left:100px;" data-ls="offsetxout:right; offsetxin:left; durationin:700; delayin:110; easingin:easeOutElastic; fadein:false; easingout:easeInBack; fadeout:false;">We Offer Transport</div>

                        <div class="ls-slide" style="font-family:raleway; color:#ffffff; font-weight:700; font-size:16px; text-transform:uppercase; line-height:28px; top:240px; left:100px;" data-ls="offsetxout:right; offsetxin:left; durationin:700; delayin:110; easingin:easeOutElastic; fadein:false; easingout:easeInBack; fadeout:false;"><span style="color:#ebe814;">Quick &amp; Powerful</span> Solution</div>

                        <div class="ls-slide" style="font-family:roboto; font-size:150px; color:#ffffff; font-weight:900; top:275px; left:100px;" data-ls="offsetxout:left; offsetxin:right; durationin:900; delayin:1000; easingin:easeOutExpo; fadein:false; easingout:easeInBack; fadeout:false;">CAR<span style="color:#ebe814;">G</span></div>

                        <div class="ls-slide" style="font-family:roboto; font-size:250px; color:#ebe814; font-weight:900; top:180px; left:500px;" data-ls="offsetyout:top; offsetyin:bottom; durationin:1000; delayin:1000; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">O</div>

                        <div class="ls-slide" style="line-height:28px; font-family:lato; font-size:15px; color:#ffffff; top:445px; left:100px;" data-ls="offsetxout:left; offsetxin:right; durationin:1300; delayin:1200; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"></div>

                        <!--<a href="" itemprop="url" title="" class="ls-slide slide-icon" style="padding:16px 45px; background:#ffb400; color:#ffffff; font-size:12px; top:539px; left:100px;" data-ls="offsetxout:left; offsetyin:bottom; durationin:1500; delayin:1300; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">ORDER NOW</a>-->

                        <img src="images/resource/slide-model.png" alt="" itemprop="image" class="ls-slide" style="top:0; left:540px;" data-ls="offsetyout:top; offsetyin:bottom; durationin:2000; delayin:1500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;" />
                    </div><!-- Slide 1 -->

                    <div class="ls-slide" data-ls="transition2d:40; timeshift:-1000; slidedelay: 6000;">

                        <img itemprop="image" src="images/resource/slide2.jpg" class="ls-bg" alt="Slide background" />

                        <img src="images/resource/logo7.png" alt="" itemprop="image" class="ls-slide" style="top:200px; left:50%;" data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;" />

                        <h4 class="ls-slide text-color" style="top:324px; left:50%; font-family:raleway; font-size:60px; line-height:55px; font-weight:900; text-transform:uppercase;" data-ls="offsetxout:left; rotatexin:90deg; durationin:900; delayin:300; easingin:easeOutBack; fadein:true; easingout:easeInBack; fadeout:false;">Cargo Freight</h4>

                        <span class="ls-slide" style="top:390px; left:50%; font-family:roboto; color:#ffffff; border-radius:3px; padding:12px 40px; background:rgba(31,66,93,.81); font-size:20px; font-weight:200;" data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Logistics &amp; Transportation</span>

                        <div class="ls-slide" style="top:467px; left:50%; line-height:28px; font-family:lato; font-size:15px; color:#ffffff; text-align:center;" data-ls="offsetxout:left; offsetxin:right; durationin:1500; delayin:700; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"></div>
                    </div><!-- Slide 2 -->

                    <div class="ls-slide" data-ls="transition2d:30; timeshift:-1000; slidedelay: 6000;">
                        <img itemprop="image" src="images/resource/slide3.jpg" class="ls-bg" alt="Slide background" />

                        <div class="ls-slide" style="top:223px; left:0;font-family:roboto; font-size:22px; color:#ffffff; text-shadow: -2px 4px 18px rgba(0, 0, 0, 0.15);" data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Making Transportation</div>

                        <h3 class="ls-slide text-color" style="top:260px; left:0; line-height:70px; font-family:raleway; font-weight:900; font-size:70px; text-transform:uppercase; text-shadow: -2px 4px 18px rgba(0, 0, 0, 0.15);" data-ls="offsetyout:top; rotatexin:90deg; durationin:900; delayin:300; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Fast &amp; Safe</h3>

                        <strong class="ls-slide" style="top:345px; left:0; letter-spacing:3px; font-family:raleway; color:#ffffff; text-transform:uppercase; border-radius:3px; padding:14px 25px; background:#1f425d; font-size:13px;" data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Fast &amp; Secure Delivery</strong>

                        <div class="ls-slide" style="top:425px; left:0;line-height:28px; font-family:lato; font-size:15px; color:#ffffff;" data-ls="offsetxout:left; offsetxin:right; durationin:1500; delayin:700; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"></div>

                       <!-- <a href="" itemprop="url" title="" class="ls-slide slide-btn slide-icon" style="top:515px; left:0; text-transform:uppercase; padding:16px 40px; color:#ffb400; border:2px solid #ffb400; font-family:raleway; font-size:13px; font-weight:700;" data-ls="offsetxout:left; offsetyin:bottom; durationin:1700; delayin:1000; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"></a>-->
                    </div><!-- Slide 3 -->
                </div>
            </div>
        </div><!-- Main Slider -->


        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-margin">
                            <div class="row merge">
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="images/resource/service1.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="images/resource/icon1.png" alt="" /></i>
                                            
                                            <h3>Door To Door</h3>
                                            <h5>SHIPPING</h5>
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="images/resource/service2.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="images/resource/icon2.png" alt="" /></i>
                                           
                                            <h3>Ground</h3>
                                            <h5>SHIPPING</h5>
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="images/resource/service3.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="images/resource/icon3.png" alt="" /></i>
                                        
                                            <h3>Worldwide</h3>
                                            <h5>DELIVERY</h5>
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                                <div class="col-md-3">
                                    <div class="fancy-service">
                                        <img src="images/resource/service4.jpg" alt="" />
                                        <div class="service-detail">
                                            <i><img itemprop="image" src="images/resource/icon4.png" alt="" /></i>
                                            
                                            <h3>Cargo Air</h3>
                                            <h5>SHIPPING</h5>
                                            
                                        </div>
                                    </div><!-- Fancy Services -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="about-shipment">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="safe-affordable-cargo">
                                        <div class="title2">
                                            <strong>SAFE &amp; AFFORDABLE CARGO</strong>
                                            <h2>ABOUT US</h2>
                                        </div>
                                        <p itemprop="description">Fergo Cargo Freight is an Independent Provider of Cargo Security Solutions For The Transportation Industry.
Our mission is to provide innovative , first rate ,comprehensive and competitive solutions to ensure the safety and security of our client's cargo and aircraft. We are focused on delivering quality services that comes with commitment and experience.</p>
                                        <div class="services1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="simple-services1">
                                                        <div class="service-box1">
                                                            <img src="images/resource/77.png" alt="" />
                                                            <h5 class="counter">2257</h5>
                                                            <span>ROAD</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="simple-services1">
                                                        <div class="service-box1">
                                                            <img src="images/resource/88.png" alt="" />
                                                            <h5 class="counter">6919</h5>
                                                            <span>SEA</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<a class="theme-btn dark" href="about.html" title=""><i class="fa fa-paper-plane"></i>  about unload</a>-->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-shipment-thumb">
                                        <img src="images/resource/about-shipment-thumb.png" alt="" itemprop="image" />
                                    </div>
                                </div>
                            </div>
                        </div><!-- About Shipment -->
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="what-make-us-different">
                            <div class="top-margin">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="post-style2">
                                            <span><img src="images/resource/post-thumb2-1.jpg" alt="" itemprop="image" /></span>
                                            <div class="post-info2">
                                                <i><img src="images/resource/101.png" alt="" itemprop="image"></i>
                                                <h4><a href="#" title="" itemprop="url">Reports &amp; Visibility</a></h4>
                                                <!--<span>Professionally productize</span>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="post-style2">
                                            <span><img src="images/resource/post-thumb2-2.jpg" alt="" itemprop="image" /></span>
                                            <div class="post-info2">
                                                <i><img src="images/resource/102.png" alt="" itemprop="image"></i>
                                                <h4><a href="#" title="" itemprop="url">Packages Storage</a></h4>
                                                <!--<span>Professionally productize</span>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="post-style2">
                                            <span><img src="images/resource/post-thumb2-3.jpg" alt="" itemprop="image" /></span>
                                            <div class="post-info2">
                                                <i><img src="images/resource/103.png" alt="" itemprop="image"></i>
                                                <h4><a href="#" title="" itemprop="url">Company Contract</a></h4>
                                                <!--<span>Professionally productize</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- What Make Us Different -->
                    </div>
                </div>
            </div>
        </section>		


        <section class="block no-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <span>WHAT WE PROVIDE FOR CLIENTS</span>
                        <h2>COMPANY PROJECTS</h2>
                    </div>

                    <div class="company-projects">
                        <div class="company-projects-list" id="company-projects-list">
                            <ul>
                                <li>
                                    <div class="company-project">
                                        <img src="images/resource/company-project1.jpg" alt="" itemprop="image" />
                                        <div class="project-detail">
                                            <span><i>Road (Train)</i></span>
                                            <h4><a href="" title="" itemprop="url">We have got the logistics in place to deliver your cargo by train.</a></h4>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="company-project">
                                        <img src="images/resource/company-project2.jpg" alt="" itemprop="image" />
                                        <div class="project-detail">
                                            <span><i>Air</i></span>
                                            <h4><a href="" title="" itemprop="url">Fast and safe delivery via Air Transportation.</a></h4>
                                        </div>
                                    </div>
                                </li>

                                <li class="start">
                                    <div class="company-project">
                                        <img src="images/resource/company-project3.jpg" alt="" itemprop="image" />
                                        <div class="project-detail">
                                            <span><i>Sea</i></span>
                                            <h4><a href="" title="" itemprop="url">Experienced Delivery by sea.</a></h4>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="company-project start">
                                        <img src="images/resource/company-project4.jpg" alt="" itemprop="image" />
                                        <div class="project-detail">
                                            <span><i>Road</i></span>
                                            <h4><a href="" title="" itemprop="url">Whatever you need to move, we have got the vehicle to do it.</a></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>						
                        </div><!-- Company Projects List -->
                    </div><!-- Company Projects -->
                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-sec">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="dark-title">
                                        <!--<span><i class="fa fa-steam"></i>Please Fill All Inquiry</span>-->
                                        <h3>CARGO EVENTS</h3>
                                    </div>									
                                    <div class="blog-post-carousel" id="blog-post-carousel">
                                        <div class="blog-post">
                                            <div class="post-thumb">
                                                <img src="images/resource/post-thumb.jpg" alt="" />
                                                <span><i class="fa fa-map-marker"></i></span>
                                                <div id="google_map" class="google-map">
                                                </div><!-- Google Map -->
                                            </div>
                                            <div class="post-info">
                                                <ul class="avatar">
                                                    <li>
                                                        <span><img src="images/resource/avatar.png" alt="" /></span>
                                                        <a href="" title="">Jessica Beans</a>
                                                    </li>
                                                    <li>
                                                        <div class="date2">
                                                            <i class="fa fa-calendar-o"></i>
                                                            <span>Monday -</span> <a href="date.html" title="">12 Sep</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3><a href="#" title="">My Experience</a></h3>
                                                <p>Fergo cargo is the best. When i almost lost hope in my last delivery, Fergo cargo proved me wrong.</p>
                                                <div class="location">
                                                    <p><i class="fa fa-map-marker"></i> 27th St, Brooklyn, Washington #1198</p>
                                                </div>
                                            </div>
                                        </div><!-- Blog Post -->

                                        <div class="blog-post">
                                            <div class="post-thumb">
                                                <img src="images/resource/post-thumb2.jpg" alt="" />
                                                <span><i class="fa fa-map-marker"></i></span>
                                                <div id="google_map2" class="google-map">
                                                </div><!-- Google Map -->
                                            </div>
                                            <div class="post-info">
                                                <ul class="avatar">
                                                    <li>
                                                        <span><img src="images/resource/review3.jpg" alt="" /></span>
                                                        <a href="" title="">Jessica Beans</a>
                                                    </li>
                                                    <li>
                                                        <div class="date2">
                                                            <i class="fa fa-calendar-o"></i>
                                                            <span>Friday -</span> <a href="" title="">15 July</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3><a href="#" title=""> Excellent Delivery</a></h3>
                                                <p>I am just so satisfied with the speed of delivery. Your item at your doorstep.</p>
                                                <div class="location">
                                                    <p><i class="fa fa-map-marker"></i> 27th St, Brooklyn, Washington #1198</p>
                                                </div>
                                            </div>
                                        </div><!-- Blog Post -->

                                       
                                    </div><!-- Blog Post Carousel -->
                                </div>
                                <div class="col-md-4">
                                    <div class="shipment-visibility blackish">
                                        <span><i class="fa fa-stumbleupon"></i></span>
                                        <h4>Shipment Visibility</h4>
                                        <p>Enter the cargo number you would like to track.</p>
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                            <?php echo $errormsg; ?> 
                                            <label>
                                                <i class="fa fa-stumbleupon"></i>
                                                <input type="text" placeholder="Order Number" name="orderno" required />
                                            </label>
                                            <div class="col-md-12">
                                                        <button name="track" id="quote-btn" title="" itemprop="url" type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Track Now</button>
                                                    </div>
                                            <!--<a title="" href="#" class="theme-btn" data-toggle="modal" data-target="#submission-message"><i class="fa fa-paper-plane"></i>Proceed Now</a>-->
                                        </form>
                                    </div><!-- Shipment Visibility -->
                                </div>
                            </div>
                        </div><!-- Blog Sec -->
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

    </div>


<!-- Script -->
<script type="text/javascript" src="js/modernizr-2.0.6.js"></script><!-- Modernizr -->
<script type="text/javascript" src="js/jquery-2.2.2.js"></script><!-- jQuery -->
<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="js/scrolltopcontrol.js"></script><!-- Scroll To Top -->
<script type="text/javascript" src="js/scroll-up-bar.js"></script><!-- Scroll Up Bar -->
<script type="text/javascript" src="js/jquery.scrolly.js"></script><!-- Scrolly -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="js/icheck.js"></script><!-- iCheck -->
<script type="text/javascript" src="js/select2.full.js"></script><!-- Select2 -->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
<script type="text/javascript" src="js/waypoints.js"></script><!-- Waypoints -->
<script type="text/javascript" src="js/perfect-scrollbar.js"></script><!-- Scroll Bar -->
<script type="text/javascript" src="js/perfect-scrollbar.jquery.js"></script><!-- Scroll Bar -->

<!-- External libraries: jQuery & GreenSock -->
<script src="layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/script.js"></script>
<script>
    $(document).ready(function () {
        "use strict";

        $('.scrollup').scrollupbar();

        //** Counter Up **//
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        //** Slider  **//
        $("#layerslider").layerSlider({
            responsive: true,
            responsiveUnder: 1170,
            layersContainer: 1170,
            skin: 'v5',
            hoverPrevNext: true,
            navPrevNext: true,
            navStartStop: false,
            navButtons: false,
            skinsPath: 'layerslider/skins/'
        });

        //** Company Projects **//
        $("#company-projects-list").addClass("loaded");

        var l = $("#company-projects-list > ul li").length;
        for (var i = 0; i <= l; i++) {
            var room_list = $("#company-projects-list > ul li").eq(i);
            var room_img_height = $(room_list).find(".company-project > img").innerHeight();
            $(room_list).css({
                "height": room_img_height
            });
            $(room_list).find(".company-project > img").css({
                "width": "100%"
            });
        }

        $("#company-projects-list > ul li.start").addClass("active");
        $("#company-projects-list > ul li").on("mouseenter", function () {
            $("#company-projects-list > ul li").removeClass("active");
            $(this).addClass("active");
        });

        //** Blog Post Carousel **//	
        $("#blog-post-carousel").owlCarousel({
            autoplay: false,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 10,
            items: 1,
            singleItem: true,
        });

        // Post // 
        $(".post-thumb > span").on("click", function () {
            $(this).parent("div").toggleClass("slide-down");
            return false;
        });
    });

    function initialize() {
        var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
        var mapOptions = {
            zoom: 14,
            disableDefaultUI: true,
            scrollwheel: false,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('google_map'), mapOptions);

        var image = 'images/icon.html';
        var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize2() {
        var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
        var mapOptions = {
            zoom: 14,
            disableDefaultUI: true,
            scrollwheel: false,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('google_map2'), mapOptions);

        var image = 'images/icon.html';
        var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize2);

    function initialize3() {
        var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
        var mapOptions = {
            zoom: 14,
            disableDefaultUI: true,
            scrollwheel: false,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('google_map3'), mapOptions);

        var image = 'images/icon.html';
        var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize3);

</script>
</body>

</html>