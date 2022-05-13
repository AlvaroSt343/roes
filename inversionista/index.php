<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            $param_password = $password; //
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    //mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    mysqli_stmt_bind_result($stmt, $id, $username, $password);
                    
                    if(mysqli_stmt_fetch($stmt)){
                        //if(password_verify($password, $hashed_password)){
                        if($password==$param_password){
                        
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Iniciar sesión Inversionista - ROES & CO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
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
        <!--
        <header class="fixed transparent">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand light" href="index.html">
                        <img src="images/logo_light.svg" height="32" alt="Logo">
                    </a>
                    <a class="navbar-brand dark nodisplay" href="index.html">
                        <img src="images/logo.svg" height="32" alt="Logo">
                    </a>
                </div>

            </div>
        </header>
    -->
         <!-- ========== REVOLUTION SLIDER ========== -->
         <!--
         <div class="rev_slider_wrapper fullscreen-container">
            <div id="fullscreen_hero_video" class="rev_slider fullscreenbanner gradient_slider" style="display:none">
                <ul>

                    <li data-transition="fade"> 
                        <img src="images/slider/video_fullscreen.jpg" 
                             alt="Image" 
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" 
                             data-bgparallax="3" 
                             class="rev-slidebg" 
                             data-no-retina> 
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
                             style="z-index: 99; color: #fff; font-weight: 900;">HOTEL ZANTE
                        </div> 
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
                        </a>  

                    </li>
                </ul>
            </div>
        </div>
        -->
     
        <section class="white_bg" id="rooms">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-6 col-sm-6 widget">
                        <div class="main_title mt_wave mt_blue a_center">
                        <h2 align="center">
                            <img src="img/logo-home.png" alt="Logo" width="200px" >
                        </h2>
                        <br />
                        <h2 align="center">ACCESO A INVERSIONISTAS</h2>
                        <h3 align="center">Inversiones con Plusvalía</h3>
                    </div>
                    </div>
                     
                    <div class="col-md-5 col-sm-6 widget">

                            <h2>Iniciar Sesión</h2>
                            <p>Por favor, complete sus credenciales para iniciar sesión.</p>
                            <?php 
                            if(!empty($login_err)){
                                echo '<div class="alert alert-danger">' . $login_err . '</div>';
                            }    ?>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-group">
                                    <label>Usuario:</label>
                                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                </div>    
                                <div class="form-group">
                                    <label>Contraseña:</label>
                                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                                <!--
                                <p>¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>.</p> -->
                            </form>

                    </div>

                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="https://inversionesconplusvalia.com/">SITIO WEB</a>  
                </div>
            </div>
        </section>
 



        <!-- ========== FOOTER ========== -->
        <!--
        <footer>
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 widget">
                            <div class="about">
                                <a href="index.html"><img class="logo" src="images/logo.svg" height="32" alt="Logo"></a>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                            </div>
                        </div>
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
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Contact Us</h5>
                            <address>
								<ul class="address_details">
									<li><i class="glyphicon glyphicon-map-marker"></i> 25, Navagio Zakynthos, Greece</li>
									<li><i class="glyphicon glyphicon-phone-alt"></i> Phone: 800 123 3456 </li>
									<li><i class="fa fa-fax"></i> Fax: 800 123 3456</li>
									<li><i class="fa fa-envelope"></i> Email: <a href="mailto:info@site.com">contact@site.com</a></li>
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
                                 Copyright 2017 <a href="index.html">Hotel Zante</a> All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social_media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
    </div>
    -->
    
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