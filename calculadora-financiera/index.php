<?PHP
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: ".gmdate ("D, d M Y H:i:s", time() + 60*60*24*30)." GMT");
header("Keep-Alive: on, timeout=50, max=100"); 
//date_default_timezone_set("America/Cancun")
require_once("../files/config.sys.php");

//$lote= $_GET['lote'];
//$ndesarrollo= $_GET['desarrollo'];

?>
<!DOCTYPE html>
<html >

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora - ROES & CO</title>

    <meta name="description" content="Somos un grupo de inversionistas y asesores especialistas en inversiones en materia inmobiliaria en México, quienes brindamos opciones seguras, viables y confiables de inversión">

    <META NAME="KEYWORDS" CONTENT="inversiones con plusvalía, invertir en tierras, inversiones mexico ">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <META NAME="Resource-type" CONTENT="Document">
    <META NAME="Revisit-after" CONTENT="3 days">
    <META NAME="robots" content="ALL">
    <!-- CSS -->
    <!-- librerías js -->
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/a18b0c2e94.js"></script>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <style>
            body{font-family:'Foundry', sans-serif;font-size:15px;font-weight:400; color:#001E47; line-height:15px;}
        </style>
        <!--Script valida-->
	 <script src="../script/jquery.js"></script>
    <script src="../script/jquery.validate.js"></script>   
    <script type="text/javascript" src="js/ajax_cf.js"></script>

       <!-- Add site Favicon -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="../images/favicon.png" />
    <style type="text/css">
        body{
            font-size: 16px;
        }
    </style>
    </head>

    <body>

         <div class="container">
            <div class="col-md-3">
            	<div style="margin-top:20px"></div>
            	<img src="../images/logo.png" width="48%" alt="T2I">
                <div style="margin-top:10px"></div>
            </div>
            <div class="col-md-6">
            	<div style="margin-top:30px"></div>
            	<center><h3>INVERSIONES CON PLUSVALÍA</h3></center>
                <center><h4>CALCULA EL FUTURO DE TUS FINANZAS</h4></center>
                <div style="margin-top:10px"></div>
            </div>             
        </div>
        
        <!--class="top-content" -Top content -->
         
        <!--<div style="background-image: url('assets/img/backgrounds/1.jpg'); background-repeat: no-repeat;"> -->
        <div style="background-color: #cecaca ;" >
            <div class="container" >
                <br/>
                <div class="row" >
                    <div class="col-md-12"><h4 align="center">¿Cuánto dinero necesitas para retirarte y vivir de tus inversiones?</h4></div>
                    <div class="col-md-12"><br /></div>
                    <div class="col-md-12"> 
                        <div class="col-md-4 text wow fadeInUp">
                            <div class="top-buttons fadeInDown">
                                <p style="font-size: 18px;">
                                Es muy importante tener un plan financiero personal como parte de tu proyecto de vida. <br /><br />Nosotros te asesoramos para:<br /><br /><br /><br />

                                1. Definir tus metas financieras.<br /><br /><br />

                                2. Conocer tu situación financiera actual.<br /><br /><br />

                                3. Hacer un plan de gastos.<br /><br /><br />

                                4. Salir de deudas, en caso de que las tengas.<br /><br /><br />

                                5. Decidir cómo vas a invertir el dinero que ahorras para tus metas.<br /><br /><br />

                                6. Proteger lo que tienes.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-6 wow fadeInUp">
                                <div class="top-buttons fadeInDown">
                                    <p align="center">¿Con cuánto dinero cuentas en este momento?<br />
                                    ¿Con cuánto comenzará tu inversión? </p>
                                    <label>Depósito Inicial:</label>
                                    <input type="text" id="dep_inicial" value="<?php ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 text wow fadeInUp">
                                <div class="top-buttons fadeInDown">
                                    <p align="center">¿Cuánto puedes aportar a tu inversión anualmente?<br />
                                    ¡Multiplica tu pago mensual por 12!</p>
                                    <label>Aportación Anual:</label>
                                    <input type="text" id="aportar_anual" value="<?php ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 text wow fadeInUp">
                                <div class="top-buttons fadeInDown">
                                    <br />
                                    <br />
                                    <p align="center">¿Por cuántos años vas a realizar la inversión?<br />¿Cuál es tu panorama de inversión?</p>
                                    <label>Número de Años de Inversión:</label>
                                    <!--<input type="text" id="fecha" value="<?php ?>" class="form-control"> -->
                                    <select id="anio_inversion" class="form-control">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 text wow fadeInUp">
                                <div class="top-buttons fadeInDown">
                                    <br />
                                    <p align="center">Motivado por la inflación...<br />¿En qué porcentaje aumentarás anualmente tu aportación?</p>
                                    <label>Incremento % Anual a la Aportación:</label>
                                    <input type="text" id="increm_anual" value="<?php ?>" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-6 wow fadeInUp">
                                <div class="top-buttons fadeInDown">
                                    <br />
                                    <p align="center">Banca, Fondos de retiro, etc. (Cetes) 5% a 7% anual, inversión en Bolsa de Valores, Forex, etc. (renta variable) 10-20% anual.</p>
                                    <label>Rendimiento % Anual Promedio Esperado:</label>
                                    <input type="text" id="rendim_anual" value="<?php ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12"><br /></div>
                            <div class="col-md-10 text wow fadeInUp" id="cotiza_form" style="background-color:#001E47;">
                                <center>
                                    <button type="button"  onClick="view_consultar()" class="btn btn-link-1 fadeInDown"><span> CONSULTAR </span></button>   
                                </center>
                            </div>
                            
                        </div>
                        <div class="col-md-12" id="dinamico"><br />

                        </div>

                    </div>
                    <!--
                    <div class="col-sm-4 text wow fadeInUp">
                        <div class="top-buttons fadeInDown">
                            <center><img src="assets/img/backgrounds/logo.png" width="40%" alt="Logo"></center>
                        </div>
                    </div>
                    
                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>INVERSION</h4></center>
                    </div>
                   

                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>PROMOCIÓN</h4></center>
                    </div>

                    <div class="col-md-10 text wow fadeInUp">
                        
                    </div>
                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>ENGANCHE</h4></center>
                    </div>
                    -->

                     
                     
           
                      
                    
 
                </div>

                
  
                <!--
                <div class="row">                
                    <div class="col-sm-12 text wow fadeInUp">
                  
                        <div class="top-buttons fadeInDown">
                            <a class="btn scroll-link" href="#features"><img src="assets/img/devices/bases.png" width="72" alt="Continue"></a>
                        </div>

                    </div>
                </div>
                -->
            </div>

        </div>

       

    
        

        <!-- Footer -->
        
        <footer>
            <div class="container">
                <div class="row">
                    <!--
                    <div class="col-sm-4 footer-copyright fadeInLeft">
                        &copy; <a href="http://time2invest.com.mx/" target="_blank">TIME2INVEST</a> 2022
                    </div>
                    <div class="col-sm-4 footer-menu fadeInLeft">
                        <a href="http://www.bbb.org/mexico/business-reviews/travel-agencies-and-bureaus/my-vacations-4-life-in-cancun-qr-1746?bluerefx=1" target="_blank" ><img src="assets/img/BBBlogo.png" width="120" alt="Logo BBB"></a> &nbsp; &nbsp;
                        <a href="http://myvacations4life.com/files/SECTUR.pdf" target="_blank" ><img src="assets/img/SECTUR_logo.png" width="150" alt="Logo SECTUR"></a>
                    </div>
                    <div class="col-sm-4 footer-menu fadeInLeft">
                        <ul>
                            <li><h3>Redes Sociales: 
                                <a href="https://www.facebook.com/inversionesconplusvalia" target="_blank"><i class="fa fa-facebook"></i></a>  &nbsp;

                                <a href="https://instagram.com/inversionesconplusvalia" target="_blank"><i class="fa fa-instagram"></i></a></h3>
                            </li>
                        </ul>
                    </div>
                     -->
                </div>
            </div>
        </footer>
       



        <!-- MODAL: Terms and Conditions -->

        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms-label" aria-hidden="true">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">

                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                        </button>

                        <h2 class="modal-title" id="modal-terms-label">Send Inquiry</h2>

                    </div>

                    <div class="modal-body">

                    <div id="infcontacto" class="col-sm-12 r-form-1-box wow fadeInLeft">

                    

                        <div class="r-form-1-top">

                            <div class="r-form-1">

                                <h3>Receive The List of Participant Hotels</h3>

                                <p style="font-size:16px; color:#FFF">Plus Detailed Information On The Package Deal</p>

                            </div>

                            <!--

                            <div class="r-form-1-top-right">

                                <i class="fa fa-pencil"></i>

                            </div>

                            -->

                        </div>

                       

                        <div class="r-form-1-bottom">

                            <form role="form" >

                                <div class="form-group">

                                    <select id="dear" class="r-form-1-first-name form-control">

                                        <option>Mr.</option>

                                        <option>Ms.</option>

                                        <option>Mrs.</option>

                                    </select>

                                    

                                    <label class="sr-only" for="r-form-1-first-name">Your Name</label>

                                    <input type="text" id="firstname" placeholder="Your name..." class="r-form-1-first-name form-control">

                                </div>

                                <div class="form-group">

                                    <label class="sr-only" for="r-form-1-last-name">Phone</label>

                                    <input type="text" id="phone" name="r-form-1-last-name" placeholder="Phone..." class="r-form-1-last-name form-control" >

                                </div>

                                <div class="form-group">

                               <!-- <textarea class="input-message" placeholder="Comment*" rows="7" id="message"></textarea> -->

                                    <label class="sr-only" for="r-form-1-email">Email</label>

                                    <input type="text" id="email" name="r-form-1-email" placeholder="Email..." class="r-form-1-email form-control" >

                                </div>

                                <!--

                                <div class="form-group">

                                    <label class="sr-only" for="r-form-1-about-yourself">Message</label>

                                    <textarea type="text" id="message" name="r-form-1-about-yourself" placeholder="Message..." class="r-form-1-about-yourself form-control" ></textarea>

                                </div>

                                -->

                                <button type="button" class="btn" onClick="datos_contacto()"> Send </button>

                                <input type="hidden" id="campaign" value="<?PHP echo $utm_campaign; ?>" >

                                <input type="hidden" id="datos_notas" value="<?PHP echo $datos_notas; ?>" >



                            </form>

                        </div>

                    </div>

                    </div>


                    <div class="modal-footer">

                        <!--<button type="button" class="btn" data-dismiss="modal">I Read it &amp; I Agree</button>-->

                    </div>        

                </div>

            </div>

        </div>

         <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script async src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!--<script src="assets/js/bootstrap-tooltip.js"></script> -->
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>
</html>