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
    <title>Inventario Aactun-Ha by ROES & CO</title>

    <meta name="description" content="Somos un grupo de inversionistas y asesores especialistas en inversiones en materia inmobiliaria en México, quienes brindamos opciones seguras, viables y confiables de inversión">
    <META NAME="KEYWORDS" CONTENT="inversiones con plusvalía, invertir en tierras, inversiones mexico ">
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
<script>
function abrir_lote(id){
    $('.modal-body').load('lote.php?id='+id,function(){
        $('#myModal').modal({show:true});
    });
}

</script>
<style type="text/css">
            .cuadro_a { 
                 background: #428bca;
                 /*cursor:pointer; */
            }

            .cuadro_div { 
                 /*color: #000000;
                 background: #428bca;*/
                 /* color: #197C77;*/
                 color:  rgb(25, 124, 119, 0.5);
                 font-size: 4px;
            }

            .cuadro_div:hover {
              background:#197C77;
            }
        </style>
</head>
<body>
<!--
         <div class="container">
            <div class="col-md-4">
            	<div style="margin-top:20px"></div>
            	<img src="../images/logo.png" width="48%" alt="T2I">
                <div style="margin-top:10px"></div>
            </div>
            <div class="col-md-4">
            	<div style="margin-top:30px"></div>
            	<center><h3>INVENTARIO AÁCTUN-HA</h3></center>
                <div style="margin-top:10px"></div>
            </div>             
        </div>
    -->
        <!--<div style="background-image: url('assets/img/backgrounds/1.jpg'); background-repeat: no-repeat;">-->
        <div style="background-color: #2E2E2E";>
            <div class="container">
                <br/>
                <div class="row"  style="position: relative;" >
                     <img src="images/AACTUNHA-Masterplan.png">

                    <!-- COLUMNA 1 IZQUIERDA-->

                    <!--<div style="position: absolute; left:71px; top:209px; width:68px; height:60px;"> CUADRO 49 </div>-->
    
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('49','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:17.8%; width:6%; height:5%;"> 49 </div></a> 
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('50','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:23.2%; width:6%; height:4.9%;" >50 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('51','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:28.5%; width:6%; height:4.9%;" >51 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('52','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:33.9%; width:6%; height:5.1%;" >52</div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('53','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:39.3%; width:6%; height:5%;" >53 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('54','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:44.9%; width:6%; height:4.7%;" >54 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('55','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:50.1%; width:6%; height:4.8%;" >55 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('56','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:55.4%; width:6%; height:4.8%;" >56 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('57','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:60.8%; width:6%; height:4.8%;" >57 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('58','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:66.2%; width:6%; height:4.8%;" >58 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('59','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:71.5%; width:6%; height:4.8%;" >59 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('60','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:76.8%; width:6%; height:4.8%;" >60 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('61','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:82.2%; width:6%; height:4.8%;" >61 </div></a>
                    <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('62','modal-terms','lote.php');">
                        <div class="cuadro_div" style="position: absolute; left:6%; top:87.5%; width:6%; height:5.1%;" >62 </div></a>


                    <!-- COLUMNA 2 IZQUIERDA-->

                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('34','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:17.8%; width:7.8%; height:3.9%; " >34 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('35','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:22.3%; width:7.8%; height:4.6%; " >35 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('36','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:27.7%; width:7.8%; height:4.6%; " >36 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('37','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:32.8%; width:7.8%; height:4.7%; " >37 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('38','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:38.3%; width:7.8%; height:4.6%; " >38 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('39','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:43.4%; width:7.8%; height:4.7%; " >39 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('40','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:48.7%; width:7.8%; height:4.7%; " >40 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('41','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:54.1%; width:7.8%; height:4.7%; " >41 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('42','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:59.6%; width:7.8%; height:4.6%; " >42 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('43','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:64.8%; width:7.8%; height:4.6%; " >43 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('44','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:70.3%; width:7.8%; height:4.6%; " >44 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('45','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.3%; top:75.7%; width:7.8%; height:4.8%; " >45 </div></a>


                     <!-- PARTE 3 HORIZONTAL ARRIBA -->
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('33','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:24.8%; top:17.8%; width:6.2%; height:6.6%; " >33 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('32','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:31.7%; top:17.8%; width:6.2%; height:6.6%; " >32 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('31','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:38.7%; top:17.8%; width:6.2%; height:6.6%; " >31 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('30','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:45.6%; top:17.8%; width:6.2%; height:6.6%;  background-color: rgb(250, 114, 0, 0.5); ">30</div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('29','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:52.5%; top:17.8%; width:6.2%; height:6.6%;" > 29</div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('28','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:59.5%; top:17.8%; width:6.2%; height:6.6%; " >28</div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('27','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:66.4%; top:17.8%; width:6.2%; height:6.6%; " >27</div></a>

                    <!-- COLUMNA 3 DERECHO -->
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('15','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:17.8%; width:7.5%; height:3.8%; ">15 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('16','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:22.3%; width:7.5%; height:4.6%; ">16 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('17','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:27.5%; width:7.5%; height:4.7%; ">17 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('18','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:32.8%; width:7.5%; height:4.7%; ">18 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('19','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:38.3%; width:7.5%; height:4.6%; ">19 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('20','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:43.7%; width:7.5%; height:4.6%; ">20 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('21','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:48.9%; width:7.5%; height:4.6%; ">21 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('22','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:54.1%; width:7.5%; height:4.7%; ">22 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('23','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:59.6%; width:7.5%; height:4.6%; ">23 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('24','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:64.9%; width:7.5%; height:4.7%; ">24 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('25','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:70.3%; width:7.5%; height:4.7%; ">25 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('26','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:75.8%; width:7.5%; height:4.9%; ">26 </div></a>


                    <!-- COLUMNA 4 DERECHO -->
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('1','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:17.8%; width:8.8%; height:5%; ">01 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('2','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:23.5%; width:8.8%; height:4.8%; ">02 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('3','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:28.8%; width:8.8%; height:4.8%; ">03 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('4','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:34.1%; width:8.8%; height:4.8%; ">04 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('5','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:39.6%; width:8.8%; height:4.8%; ">05 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('6','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:44.8%; width:8.8%; height:4.8%; ">06 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('7','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:50.1%; width:8.8%; height:4.8%; ">07 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('8','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:55.6%; width:8.8%; height:4.8%; ">08 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('9','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:60.8%; width:8.8%; height:4.8%; ">09 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('10','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:66.1%; width:8.8%; height:4.8%; ">10 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('11','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:71.4%; width:8.8%; height:4.8%; ">11 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('12','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:76.8%; width:8.8%; height:4.8%; ">12 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('13','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:82.1%; width:8.8%; height:4.8%; ">13 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('14','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:84.7%; top:87.6%; width:8.8%; height:4.8%; ">14 </div></a>


                    <!-- PARTE 5 HORIZONTAL ABAJO -->
                <!--
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('71','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:16.9%; top:84.9%; width:7.1%; height:7.5%; " >71 </div></a> -->
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('70','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:24.7%; top:84.9%; width:6.6%; height:7.5%; background-color: rgb(250, 114, 0, 0.5); " >70 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('69','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:31.5%; top:84.9%; width:6.5%; height:7.5%;background-color: rgb(250, 114, 0, 0.5); " >69</div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('68','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:38.7%; top:84.9%; width:6.5%; height:7.5%; " >68 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('67','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:45.5%; top:84.9%; width:6.5%; height:7.5%; " >67 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('66','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:52.3%; top:84.9%; width:6.5%; height:7.5%; " >66 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('65','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:59.3%; top:84.9%; width:6.5%; height:7.5%; " >65 </div></a>
                <a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('64','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:66.3%; top:84.9%; width:6.5%; height:7.5%; " >64 </div></a>
                <!--<a href="#" class="launch-modal" data-modal-id="modal-terms" onclick="abrir_lote('63','modal-terms','lote.php');">
                    <div class="cuadro_div" style="position: absolute; left:73.3%; top:84.9%; width:6.7%; height:7.5%; background-color: red; " >63 </div></a> -->


                </div>

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
                        <h2 class="modal-title" id="modal-terms-label">A'ACTUN-HA</h2>
                    </div>

                    <div class="modal-body">
                        <div id="infcontacto" class="col-sm-12 r-form-1-box wow fadeInLeft">
                                                       

                             

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