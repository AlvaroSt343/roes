<?PHP
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: ".gmdate ("D, d M Y H:i:s", time() + 60*60*24*30)." GMT");
header("Keep-Alive: on, timeout=50, max=100"); 
//date_default_timezone_set("America/Cancun")
require_once("../files/config.sys.php");
?>
<!DOCTYPE html>
<html >

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario - ROES & CO</title>

    <meta name="description" content="Somos un grupo de inversionistas y asesores especialistas en inversiones en materia inmobiliaria en México, quienes brindamos opciones seguras, viables y confiables de inversión">

    <META NAME="KEYWORDS" CONTENT="inversiones con plusvalía, invertir en tierras, inversiones mexico ">

    <META NAME="REPLY-TO" CONTENT="info@myvacations4life.com">
    <LINK REV="made" href="mailto:info@myvacations4life.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="http://www.myvacations4life.com/images/logo/v4l.jpg">
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
    <script type="text/javascript" src="js/ajax_origi.js"></script>

       <!-- Add site Favicon -->
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<meta name="msapplication-TileImage" content="../images/favicon.png" />

    </head>



    <body>

         <div class="container">
            <div class="col-md-4">
            	<div style="margin-top:20px"></div>
            	<img src="../images/logo.png" width="48%" alt="T2I">
                <div style="margin-top:10px"></div>
            </div>
            <div class="col-md-4">
            	<div style="margin-top:30px"></div>
            	<center><h3>INVERSIONES CON PLUSVALÍA</h3></center>
                <div style="margin-top:10px"></div>
            </div>             
        </div>

        <!--class="top-content" -Top content -->
         
        <div style="background-image: url('assets/img/backgrounds/1.jpg'); background-repeat: no-repeat;">

            <div class="container" >
                <br/>
                <div class="row" >
                    <div class="col-md-10"> 
                        <div class="col-md-4 text wow fadeInUp">
                            <div class="top-buttons fadeInDown">
                                <h4>COTIZACIÓN: 1</h4>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="top-buttons fadeInDown">
                                <p>FECHA: <input type="text" id="fecha" value="<?php echo date("d-m-Y");?>" class="form-control">
                                    TELÉFONO: <input type="text" id="tel" class="form-control"> 
                                    NOMBRE ASESOR: <input type="text" id="asesor" class="form-control">  
                                    OFICINA: <input type="text" id="oficina" class="form-control"> 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 text wow fadeInUp">
                            <div class="top-buttons fadeInDown">
                                INVERSIONISTA: <input type="text" id="inversionista" class="form-control">
                                EMAIL: <input type="text" id="email" class="form-control">
                                DESARROLLO: <input type="text" id="desarrollo" value="AACTUN-HA" class="form-control"> 
                                
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-sm-4 text wow fadeInUp">
                        <div class="top-buttons fadeInDown">
                            <center><img src="assets/img/backgrounds/logo.png" width="40%" alt="Logo"></center>
                        </div>
                    </div>
                    -->
                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>INVERSION</h4></center>
                    </div>
                    <div class="col-md-10 text wow fadeInUp">
                        <div class="col-md-6">
                            <label>NÚMERO DE LOTE:</label>
                            <input type="text" id="nlote" onkeyup="ver_lote()"  class="form-control1">
                            
                            <div id="lote_div">
                                <label>METROS CUADRADOS DEL LOTE:</label>
                                <input type="text" id="m2_lote" size="13" class="form-control1"><br>
                            
                                <label>VALOR DEL LOTE: $</label>
                                <input type="text" id="val_lote" onblur="ver_lote()" class="form-control1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>ETAPA:</label>
                            <input type="text" id="etapa" class="form-control1">
                            <label>PRECIO DEL METRO CUADRADO: $</label>
                            <input type="text" id="precio_m2" value="990.00" class="form-control1">
                        </div>
                    </div>
                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>PROMOCIÓN</h4></center>
                    </div>
                    <div class="col-md-10 text wow fadeInUp">
                        <div class="col-md-6"> 
                            <label>TIPO DE PROMOCIÓN:</label>
                            <!--<input type="text" id="tipo_promo" class="form-control1">-->
                            <select  id="tipo_promo">
                                <option>DESCUENTO %</option>
                            </select><br>
                            <label>VALOR DEL DESCUENTO: </label>
                            <!--<input type="text" id="valor_descuento" class="form-control1"> -->
                            <select id="valor_descuento" onchange="ver_lote_promo()">
                                <option value="">Seleccione</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option> 
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                                <option value="35">35%</option>
                                <option value="40">40%</option>
                                <option value="45">45%</option>
                                <option value="50">50%</option>
                            </select> <br />
                            
                            
                        </div>
                        <div class="col-md-6">
                            <label>PRECIO METRO CUADRADO CON PROMOCIÓN: $</label>
                            <input type="text" id="precio_m2_promo" onkeyup="ver_lote_promo()" class="form-control1">  <br>
                            <div id="lote_div_promo">
                                <label>VALOR DE LOTE CON PROMOCIÓN: $</label>
                                <input type="text" id="val_lote_promo" class="form-control1">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>ENGANCHE</h4></center>
                    </div>


                    <div id="lote_div_porcen">
                    <div class="col-md-10 text wow fadeInUp">
                        <div id="lote_div_porcen2">
                        <div class="col-md-6"> 
                            <label>PORCENTAJE DE ENGANCHE:</label>
                            <select id="porce_enganche" onchange="ver_porcentaje2()">
                                <option value="">Seleccione</option>
                                <!--<option value="20">20%</option> -->
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                                <option value="35">35%</option>
                                <option value="40">40%</option>
                                <option value="45">45%</option>
                                <option value="50">50%</option>
                            </select> <br />
                            <label>SALDO DEL LOTE:</label>
                            <input type="text" id="saldo_lote" class="form-control1">
                            <input type="hidden" id="saldo_lote2"  class="form-control1">
                        </div> 
                        <div class="col-md-6">
                            <label>MONTO DE ENGANCHE:</label>
                            <input type="text" id="monto_enganche" class="form-control1"> 
                            <input type="hidden" id="monto_enganche2"  class="form-control1">
                            <br>
                            <label>SALDO A MESES SIN INTERESES</label>
                            <select id="mes_interes" onchange="ver_saldomeses()">
                                <option value="">Seleccione</option>
                                <option value="6">6 MESES</option>
                                <option value="12">12 MESES</option>
                                <option value="18">18 MESES</option>
                                <option value="24">24 MESES</option>
                                <option value="30">30 MESES</option>
                                <option value="36">36 MESES</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-10 text wow fadeInUp" >
                        <center>&nbsp;</center>
                    </div>
                    <div class="col-md-10 text wow fadeInUp" style="background-color: #001E47;">
                        <center><h4 style="color:#FFFFFF;">SALDO A MESES SIN INTERESES</h4></center>
                    </div>
                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <div id="desglose_msi">
                            <div class="col-md-6"> 
                                <h4 align="center">MENSUALIDADES</h4>
                            </div>
                            <div class="col-md-6">
                                <h4 align="center">MONTO MENSUAL</h4>
                                <input type="hidden" id="monto_mes">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 text wow fadeInUp">
                        <!--
                        <div class="col-md-6"> 
                            <center>
                                <label>6 MESES</label><br>
                                <label>12 MESES</label><br>
                                <label>18 MESES</label><br>
                                <label>24 MESES</label><br>
                                <label>30 MESES</label><br>
                                <label>36 MESES</label><br>
                            </center>
                        </div>
                        <div class="col-md-6">
                             <center>
                                <label>$--</label><br>
                                <label>$--</label><br>
                                <label>$--</label><br>
                                <label>$--</label><br>
                                <label>$--</label><br>
                                <label>$--</label><br>
                                
                            </center>
                        </div>
                        -->
                        <input type="hidden" id="val_mes6"  >
                        <input type="hidden" id="val_mes12"  >
                        <input type="hidden" id="val_mes18"  >
                        <input type="hidden" id="val_mes24" >
                        <input type="hidden" id="val_mes30" >
                        <input type="hidden" id="val_mes36" >
                    </div>
                    </div>
                    

                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>FORMAS DE PAGO</h4></center>
                    </div>
                    <div class="col-md-10 text wow fadeInUp">
                        <div class="col-md-6"> 
                            <label>FORMAS DE PAGOS:</label> 
                            <select  id="tipo_pago" onchange="inversion_inicial()">
                                <option value=""></option>
                                <option>TODAS LOS METODOS DE PAGO</option>
                                <option>TARJETA DE CREDITO</option> 
                                <option>TARJETA DE DEBITO</option> 
                                <option>TRANSFERENCIA</option>
                                <option>DESPOSITO EN VENTANILLA</option>
                                <option>PAGO EN LINEA</option>
                                <!-- [1:12 pm., 4/2/2022] Yessica: Tarjeta d e crédito, tarjeta d débito, transferencia, depósito en ventanilla, pago en línea 
                                    [1:13 p.m., 4/2/2022] Yessica: Por ahora -->
                            </select><br>
                             
                        </div>
                    </div>


                    <div class="col-md-10 text wow fadeInUp" style="background-color: rgb(185, 185, 185, 0.5);">
                        <center><h4>MONTO DE INVERSION INICIAL</h4></center>
                    </div>
                    <div class="col-md-10 text wow fadeInUp">
                        <div class="col-md-8"> 
                            <label>COSTO ADMINISTRATIVO: $</label>
                            <input type="text" id="costo_admin" value="5499.00" onkeyup="inversion_inicial()" class="form-control1"><br>
                            
                            <label>ENGANCHE: $</label>
                            <input type="text" id="costo_enganche2" class="form-control1" onfocus="inversion_inicial()"><br>
                            <input type="hidden" id="costo_enganche" class="form-control1">
                            <label>TOTAL  A PAGAR: $</label>
                            <input type="text" id="total_pago2" class="form-control1" onfocus="inversion_inicial()">
                            <input type="hidden" id="total_pago" class="form-control1">
                            <p>La disponibilidad de los lotes se actualiza constantemente por lo que es importante  apartarlo mediante el costo administrativo.</p>
                            
                        </div>
                        <div class="col-md-4">
                                                        
                        </div>
                    </div>




                    <div class="col-md-10 text wow fadeInUp" id="cotiza_form" style="background-color:#001E47;">
                        <center>
                            <button id="dinamico" type="button"  onClick="save_cotizacion()" class="btn btn-link-1 fadeInDown"><span> GUARDAR COTIZACIÓN </span></button>   
                        </center>
                    </div>
 
                </div>



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