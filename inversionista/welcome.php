<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Inversionista - ROES & CO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== --> 
	<link rel="icon" href="images/favicon.png">

    <!-- ========== STYLESHEETS ========== --> 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/famfamfam-flags.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <!-- ========== ICON FONTS ========== -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        
        <!-- ========== HEADER ========== -->
        <header class="fixed transparent">
            <div class="container">
                <div class="navbar-header"> 
                    <!--
                    <a class="navbar-brand light" href="./">
                        <img src="img/logo-home.png" width="100px" alt="Logo">
                    </a>
                    <a class="navbar-brand dark nodisplay" href="./">
                        <img src="img/logo-home.png" width="100px" alt="Logo">
                    </a> -->
                    <a href="logout.php" class="button btn_yellow"><i class="fa fa-user"></i>CERRAR SESIÓN</a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!--
                        <li class="mobile_menu_title" style="display:none;">MENU</li>
                        
                        <li class="dropdown simple_menu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version 1</a></li>
                                <li><a href="index2.html">Home Version 2</a></li>
                                <li><a href="index3.html">Home Version 3</a></li>
                                <li><a href="index4.html">Home Version 4</a></li>
                                <li><a href="boxed.html">Boxed Layout</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown mega_menu mega_menu_fullwidth"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">PAGES <b class="caret"></b></a>
                            <ul class="dropdown-menu"> 
                                <li>
                                    <div class="mega_menu_inner">
                                        <div class="row"> 
                                            <ul class="col-md-3">
                                                <li class="list_title">MORE PAGES</li> 
                                                <li><a href="loading.html">Loading Page </a></li>
                                                <li><a href="loading2.html">Loading Page 2</a></li>
                                                <li><a href="loading3.html">Loading Page 3</a></li>
                                                <li><a href="full-width.html">Full Width Page</a></li>
                                                <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                                                <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                                                <li><a href="our-staff.html">Our Staff</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        -->
                        <li class="menu_button">
                            <!--<a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a> -->                         </li>
                    </ul>
                </nav>
            </div>
        </header>
             
         <!-- ========== REVOLUTION SLIDER ========== -->
         <div class="rev_slider_wrapper fullscreen-container">
            <div id="fullscreen_hero_video" class="rev_slider fullscreenbanner gradient_slider" style="display:none">
                <ul>

                    <li data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider/video_fullscreen.jpg" 
                             alt="Image" 
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" 
                             data-bgparallax="3" 
                             class="rev-slidebg" 
                             data-no-retina>
                        <!-- VIDEO -->
                        <div class="rs-background-video-layer" 
                            data-forcerewind="on" 
                            data-volume="mute" 
                            data-videomp4="videos/hero_video.mp4"
                            data-videoattributes="title=0&amp;byline=0&amp;portrait=0&amp;api=1" 
                            data-videowidth="100%" 
                            data-videoheight="100%" 
                            data-videocontrols="none" 
                            data-videostartat="00:00" 
                            data-videoendat="" 
                            data-videoloop="loop" 
                            data-forceCover="1" 
                            data-aspectratio="4:3" 
                            data-autoplay="true" 
                            data-autoplayonlyfirsttime="false" 
                            data-nextslideatend="true">
                        </div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption gradient_overlay" 
                             data-x="['center','center','center','center']" 
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" 
                             data-voffset="['0','0','0','0']" 
                             data-width="full" 
                             data-height="full" 
                             data-whitespace="nowrap" 
                             data-transform_idle="o:1;" 
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:500;s:500;" 
                             data-start="0" 
                             data-basealign="slide"
                             data-responsive_offset="off" 
                             data-responsive="off" 
                             style="z-index: 7;border-color:rgba(0, 0, 0, 0);">
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="middle" 
                             data-voffset="" 
                             data-fontsize="['100','90','70','60']" 
                             data-lineheight="['100','90','70','60']"
                             data-whitespace="nowrap"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 99; color: #fff; font-weight: 900;">ROES & CO
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="['center','center','center','center']" 
                             data-hoffset="['-300','-270','-200','-160']" 
                             data-y="middle" 
                             data-voffset="['-12','-15','-24','-28']"
                             data-fontsize="['11','10','7','6']" 
                             data-lineheight="['11','10','7','6']"
                             data-whitespace="nowrap"
                             data-width="100"
                             data-height="100"
                             data-responsive_offset="on" 
                             data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"x:[40%];z:0;rX:0deg;rY:0;rZ:-90;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;rZ:-90","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 11; color: #fff; font-weight: 900; ">WELCOME TO
                        </div>
                        <!-- LAYER NR. 4 -->
                        <!--
                        <a class="tp-caption button btn_yellow" 
                          href="booking-form.html"
                          data-x="center" 
                          data-hoffset=""
                          data-y="middle"
                          data-voffset="120"
                          data-fontsize="14"
                          data-responsive_offset="on" 
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11; "><i class="fa fa-calendar"></i>BOOK A ROOM NOW
                        </a> --> 

                    </li>
                </ul>
            </div>
        </div>
 
        <!-- ========== ROOMS ========== -->
        <section class="white_bg" id="rooms">
            <div class="container">
                <div align="center"> 
                    <h1 class="my-5">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenido al sitio. </h1>
                    <p>
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                        <!-- <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a> -->
                    </p>
                </div>
                <div class="main_title mt_wave mt_blue a_center">
                    <h2>NUESTRAS HERRAMIENTAS FAVORITAS</h2>
                </div>
                    <p class="main_description a_center">Abre los links o descargue los archivos para una mejora eficiencia en el trabajo</p>
                <div class="row">
                    
                    <div class="col-md-3">
                        <article class="room">
                            <figure>
                                <div class="price">Drive <span>/ PPT</span></div>
                                <a class="hover_effect h_blue h_link" href="https://docs.google.com/presentation/d/1p-DuSQm_6tLIIwjnwSxDxhvdBwFUzkQd/edit?usp=sharing&ouid=100340698724854695696&rtpof=true&sd=true" target="_blank">
                                    <img src="img/PresentacionRoes.png" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="https://docs.google.com/presentation/d/1p-DuSQm_6tLIIwjnwSxDxhvdBwFUzkQd/edit?usp=sharing&ouid=100340698724854695696&rtpof=true&sd=true" target="_blank">PRESENTACIÓN</a></h4>
                                    <span class="f_right"><a href="https://docs.google.com/presentation/d/1p-DuSQm_6tLIIwjnwSxDxhvdBwFUzkQd/edit?usp=sharing&ouid=100340698724854695696&rtpof=true&sd=true" target="_blank" class="button btn_sm btn_blue">VER POWER POINT</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-3">
                        <article class="room">
                            <figure>
                                <div class="price">Drive <span>/ PDF</span></div>
                                <a class="hover_effect h_blue h_link" href="https://bit.ly/Portafolio202204" target="_blank">
                                    <img src="img/PotafolioRoes.png" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="https://bit.ly/Portafolio202204" target="_blank">PORTAFOLIO DE INVERSIONES</a></h4>
                                    <span class="f_right"><a href="https://bit.ly/Portafolio202204" target="_blank" class="button btn_sm btn_blue">VER DOCUMENTO</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3">
                        <article class="room">
                            <figure>
                                <div class="price">Web <span>/ Link </span></div>
                                <a class="hover_effect h_blue h_link" href="https://inversionesconplusvalia.com/cotizador/" target="_blank" >
                                    <img src="img/CotizadorWeb.png" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="https://inversionesconplusvalia.com/cotizador/"  target="_blank" >COTIZADOR WEB</a></h4>
                                    <span class="f_right"><a href="https://inversionesconplusvalia.com/cotizador/"  target="_blank" class="button btn_sm btn_blue">VER LINK</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3">
                        <article class="room">
                            <figure>
                                <div class="price">Web <span>/ Link</span></div>
                                <a class="hover_effect h_blue h_link" href="https://inversionesconplusvalia.com/calculadora-financiera/" target="_blank">
                                    <img src="img/CalculadoraFinan.png" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="https://inversionesconplusvalia.com/calculadora-financiera/" target="_blank">CALCULADORA FINANCIERA</a></h4>
                                    <span class="f_right"><a href="https://inversionesconplusvalia.com/calculadora-financiera/" target="_blank" class="button btn_sm btn_blue">VER LINK</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-md-3">
                        <article class="room">
                            <figure>
                                <div class="price">Drive <span>/ Excel </span></div>
                                <a class="hover_effect h_blue h_link" href="https://docs.google.com/spreadsheets/d/1Guo-WDIHnYFpXJwi1eGnAtzl2eRGmNdW/edit?usp=sharing&ouid=100340698724854695696&rtpof=true&sd=true"  target="_blank">
                                    <img src="img/SimuladorWeb.png" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="https://docs.google.com/spreadsheets/d/1Guo-WDIHnYFpXJwi1eGnAtzl2eRGmNdW/edit?usp=sharing&ouid=100340698724854695696&rtpof=true&sd=true" target="_blank">SIMULADOR</a></h4>
                                    <span class="f_right"><a href="https://docs.google.com/spreadsheets/d/1Guo-WDIHnYFpXJwi1eGnAtzl2eRGmNdW/edit?usp=sharing&ouid=100340698724854695696&rtpof=true&sd=true"  target="_blank" class="button btn_sm btn_blue">VER LINK</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!--
                    <div class="col-md-2">
                        <article class="room">
                            <figure>
                                <div class="price">Web <span>/ Link </span></div>
                                <a class="hover_effect h_blue h_link" href="https://inversionesconplusvalia.com/cotizador/">
                                    <img src="images/rooms/double-room.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4><a href="room.html">SIMULADOR </a></h4>
                                    <span class="f_right"><a href="https://inversionesconplusvalia.com/cotizador/" class="button btn_sm btn_blue">VER LINK</a></span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    -->

    
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="https://inversionesconplusvalia.com/" target="_blank">LINK AL SITIO WEB OFICIAL</a>
                </div>
            </div>
        </section>
 
        <!-- ========== VIDEO ========== -->
        <!--
        <section id="video">
            <div class="inner gradient_overlay">
                <div class="container">
                    <div class="video_popup">
                        <a class="popup-vimeo" href="videos/hero_video.mp4"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- ========== CONTACT ========== -->
        <!--
        <section class="white_bg" id="contact">
            <div class="container">
                <div class="main_title mt_wave mt_blue a_center">
                    <h2 class="c_title">LOCATION - CONTACT US</h2>
                </div> 
                    <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div id="map-canvas"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="contact-items">
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                        <h6>Navagio Zakynthos</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                        <h6>1-888-123-4567</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="contact-item">
                                        <i class="fa fa-envelope"></i>
                                        <h6>contact@site.com</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" name="contact-form">
                            <div id="contact-result"></div>
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Your Name" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                            </div>
                            <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 widget">
                            <div class="about">
                                <a href="./"><img class="logo" src="img/logo-home.png" width="90" alt="Logo"></a>
                                <p>Somos un grupo de inversionistas quienes brindamos opciones seguras, viables y confiables de inversión. Proponiendo condiciones favorables que puedan amoldarse a sus intereses, objetivos y necesidades comerciales y/o patrimoniales, llevando estas oportunidades desde el sur de la república al mundo.</p>
                            </div>
                        </div>
                        <!--
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Latest News</h5>
                            <ul class="blog_posts">
                                <li><a href="blog-post.html">Live your myth in Greece</a> <small>AUGUST 13, 2017</small></li>
                                <li><a href="blog-post.html">Hotel Zante in pictures</a> <small>AUGUST 16, 2017</small></li>
                                <li><a href="blog-post.html">Hotel Zante family party</a> <small>SEPTEMBER 15, 2017</small></li>
                            </ul>
                        </div>
                    
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Useful Links</h5>
                            <ul class="useful_links">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Location</a></li>
                            </ul>
                        </div>-->
                        <div class="col-md-6 col-sm-6 widget">
                            <h5>Contacto</h5>
                            <address>
								<ul class="address_details">
									<li><i class="glyphicon glyphicon-map-marker"></i> Torres del bosque 2da. etapa. Edificio 16 depto. 102.</li>
									<li><i class="fa fa-phone"></i> Tel: +52 998 229 2880</li>
									<!--<li><i class="fa fa-fax"></i> Fax: 800 123 3456</li> -->
									<li><i class="fa fa-envelope"></i> Email: <a href="mailto:inversiones@inversionesconplusvalia.com.mx">inversiones@inversionesconplusvalia.com.mx</a></li>
                                    <li><i class="fa fa-star"></i> Sitio Web <a href="https://inversionesconplusvalia.com" target="_blank">inversionesconplusvalia.com</a></li>
								</ul>
							</address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights">
                                 Copyright 2022 <a href="#">ROES & CO.</a> All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social_media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="https://www.facebook.com/inversionesconplusvalia" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="https://www.twitter.com/t2iconplusvalia/" target="_blank"><i class="fa fa-twitter"></i></a>
                                <!--
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest"></i></a> -->
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="https://www.linkedin.com/company/inversionesconplusvalia" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="https://www.instagram.com/inversionesconplusvalia/" title="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
    </div>
    
    <!-- ========== BACK TO TOP ========== -->
    <div id="back_to_top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    
    <!-- ========== NOTIFICATION ========== -->
    <div id="notification"></div>

    <!-- ========== JAVASCRIPT ========== -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery.smoothState.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/morphext.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.thumbs.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jPushMenu.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/countUp.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    
</body>
</html>