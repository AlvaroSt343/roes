<?PHP 
require_once("files/config.sys.php");
$seo= $_GET['info'];
$sql_consulta= mysqli_query($con, "SElECT * FROM web_desarrollo WHERE nombre_seo='".$seo."'  ");
$seo_opti= mysqli_fetch_array($sql_consulta);

$nombre= $seo_opti['nombre'];
$baner_slide1= $seo_opti['baner_slide1_1900x1000'];
$baner_slide2= $seo_opti['baner_slide2_1900x1000'];
$baner_slide3= $seo_opti['baner_slide3_1900x1000'];
$n_descripcion= $seo_opti['n_descripcion'];
$n_imagen_750x700= $seo_opti['n_imagen_750x700'];
$video_youtube= $seo_opti['video_youtube'];
$ubicacion= $seo_opti['ubicacion'];
$u_descripcion= $seo_opti['u_descripcion'];
$u_imagen1200x= $seo_opti['u_imagen1200x'];
$lotes= $seo_opti['lotes'];
$link_lotes= $seo_opti['link_lotes'];
$amenidades= $seo_opti['amenidades'];
$a_imagen700x700= $seo_opti['a_imagen700x700'];
$costos= $seo_opti['costos'];
$c_descripcion= $seo_opti['c_descripcion'];
$fondo_amenid_1900= $seo_opti['fondo_amenid_1900'];

$mas_desc1= $seo_opti['mas_desc1'];

//``, `mas_img1_750x700`, `mas_desc2`, `mas_img2_750x700`

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title><?php echo $nombre;?> - Desarrollo ROES & CO</title>
<meta name="description" content="Somos un grupo de inversionistas y asesores especialistas en inversiones en materia inmobiliaria en México, quienes brindamos opciones seguras, viables y confiables de inversión"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="canonical" href="Replace_with_your_PAGE_URL" />

<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="ROES & CO - Somos un grupo de inversionistas y asesores especialistas en inversiones en materia inmobiliaria en México, quienes brindamos opciones seguras, viables y confiables de inversión" />
<meta property="og:url" content="PAGE_URL" />
<meta property="og:site_name" content="SITE_NAME" />
<!-- For the og:image content, replace the # with a link of an image -->
<meta property="og:image" content="#" />
<meta property="og:description" content="Somos un grupo de inversionistas y asesores especialistas en inversiones en materia inmobiliaria en México, quienes brindamos opciones seguras, viables y confiables de inversión" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!--
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
-->

<!-- Add site Favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<meta name="msapplication-TileImage" content="images/favicon.png" />

<!-- Structured Data  -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Replace_with_your_site_title",
  "url": "Replace_with_your_site_URL"
}
</script>
<script src="js/ajax_origi.js"></script>
<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '483352429901430');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=483352429901430&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<?php include("files/chat.php");  ?>

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Main Header-->
    <header class="main-header">
    	
		<!-- Header Top -->
        <div class="header-top">
            <?php include ("files/menu_top_es.php"); ?>
        </div>
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	
                	<?php include ("files/menu_es.php"); ?>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="./"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	

	<!-- Banner Section -->
    <div class="banner-section">
		<div class="main-slider-carousel owl-carousel owl-theme">
            
			<div class="slide" data-bg-image="images/main-slider/<?=$baner_slide1;?>">
				<div class="auto-container w-100">
					<div class="row clearfix">
						
						<div class="content-column col-lg-8 col-md-12 col-sm-12">
							<div class="inner-column">
								<!--<h1 style="color: #FFFFFF;">DESARROLLO</h1>
								<h1><span><?=$nombre;?></span></h1>
								
								
								<div class="btn-box">
									<a href="tel:800-866-0909" class="theme-btn btn-style-one"><span class="txt">Llama Yá! 800-866-0909</span></a>
								</div>
								--> 
								
							</div>
						</div>
						
						
					</div>
						
				</div>
			</div>
			<?PHP 
			if ($baner_slide2!="") {
				echo '
			<div class="slide" data-bg-image="images/main-slider/'.$baner_slide2.'">
				<div class="auto-container w-100">
					<div class="row clearfix">
						
						<div class="content-column col-lg-7 col-md-12 col-sm-12">
							<!--
							<div class="inner-column">
								<div class="title">consulte company</div>
								<h1>Clever <span>Investing</span> Make Your Money Grow</h1>
								<div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional base clickthroughs.</div>
								<div class="btn-box">
									<a href="about.html" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
								</div>
							</div> -->
						</div>
						
					</div>
						
				</div>
			</div>';
			}
			
			?> 
			<?PHP 
			if ($baner_slide3!="") {
				echo '
			<div class="slide" data-bg-image="images/main-slider/'.$baner_slide3.'"">
				<div class="auto-container w-100">
					<div class="row clearfix">
						
						<div class="content-column col-lg-7 col-md-12 col-sm-12">
							<!--<div class="inner-column">
								<div class="title">consulte company</div>
								<h1>Clever <span>Investing</span> Make Your Money Grow</h1>
								<div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional base clickthroughs.</div>
								<div class="btn-box">
									<a href="about.html" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
								</div>
							</div>
							-->
						</div>
						
					</div>
						
				</div>
			</div>';
			}
			
			?> 
		
		</div>
		
	</div>
	<!-- End Banner Section -->


	<!-- About Section -->
	<div class="about-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title"> 
								<h2><span><?=$nombre;?></span></h2>
								<!--<h2>INVIERTE EN TU PATRIMONIO FAMILIAR</h2>-->							
							</div>
							<div class="text">
								<?=$n_descripcion;?>
								<!--<h5>Ubicado en una de las zonas con mayor plusvalía en el país, A'actun-Ha es una de las mejores opciones para disfrutar y asegurar tu patrimonio a tan solo 25 minutos de Mérida</h5>-->
							</div>
						</div>
					</div>
					<!-- Image Column -->
					<div class="image-column col-lg-6">
						<div class="about-image">
							<div class="about-inner-image">
								<img src="images/desarrollo/<?=$n_imagen_750x700;?>" alt="about <?=$nombre;?>">
							</div>
						</div>
					</div>

				</div>
			</div>


			<?PHP 
			if ($video_youtube!="") {
				echo '<iframe width="100%" height="550" src="https://www.youtube-nocookie.com/embed/'.$video_youtube.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
			}
			?>
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-12 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title"> 
								<h2><span>UBICACIÓN</span> </h2>
							</div>
							<?php if ($ubicacion!="") {
								echo '<h5>'.$ubicacion.'</h5>';
							}
							?>
							

							<div class="text">
								<?=$u_descripcion;?>
								<!--
								<h5>El Fraccionamiento se ubica en la calle 19 del Pueblo de Tetiz, a 250 metros de la calle 12 y a un kilometro de la Iglesia y del centro del Pueblo Tetiz se ubica a solo 25 minutos de la Ciudad MÉRIDA por la carretera nueva MÉRIDA CELESTÚN, también puedes llegar al fraccionamiento por el kilometro 24 3 carretera MÉRIDA CELESTÚN, el fraccionamiento se encuentra a 350 metros de la carretera, a tan solo 30 minutos de las HERMOSAS PLAYAS de CELESTÚN y a 20 minutos de las BELLAS PLAYAS DE SISAL</h5>-->
							</div>
							
						</div>
					</div>
					<!-- Image Column -->
					<div class="image-column col-lg-12">
						<div class="about-image">
							<div class="about-inner-image">
								<img src="images/desarrollo/<?=$u_imagen1200x;?>" alt="<?=$u_imagen1200x;?>">
							</div>
						</div>
					</div> 

				</div>
			</div>

			<?PHP 
			if ($mas_desc1!="") {
				echo '
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<div class="content-column col-lg-12 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							
							<div class="text">
								'.$mas_desc1.'
							</div>
							
						</div>
					</div>
				</div>
			</div>';
			}
			?>
			


			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-12 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title"> 
								<h2><span>LOTES DISPONIBLES</span> </h2>
							</div>
							<div class="text">
								<h5><?=$lotes;?></h5>
								<!--
								<h5>Lotes perfectamente delimitados con mojoneras, medidas y superficie. Con cédulas y planos catastrales. Mantenimiento de calles e iluminación. Seguridad 24 hrs. Servicio de recolección De basura. Cableado subterráneo. Servicio de agua.</h5> -->
							</div>
						</div>
					</div>
					<!-- Image Column -->
					<!--
						<div class="image-column col-lg-12">
							<div class="about-image">
								<div class="about-inner-image">
									<img src="images/desarrollo/actun_lotes.jpg" alt="about">
								</div>
							</div>
						</div>
					-->
				</div>
			</div>


			<div class="col-md-12">
				<!--<iframe src="inventario/1.php" width="100%" height="1000" name="ventana"></iframe> -->
				<iframe <?=$link_lotes;?> ></iframe>

			</div>
			<?PHP 
			if ($fondo_amenid_1900!="") {
				echo '<div class="col-md-12">
				<img src="images/desarrollo/'.$fondo_amenid_1900.'" width="100%" height="beneficios">
			</div>';				 
			}
			?> 
			

			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title"> 
								<h2><span>AMENIDADES</span> </h2>
							</div>
							<div class="text">
								<?=$amenidades;?>
								<!--
								<h5>*Gimnasio al aire libre <br>
									*Ciclopista<br>
									*Asadores<br>
									*Areas verdes.<br>
									*Cenote privado y albercas<br>
									*Asoleaderos<br>
									*Casona hacienda para fiestas, banquetes y eventos sociales.<br>
									* Mantenimiento de calles y banquetas.<br>
									* Caseta, Acceso Y Vigilancia las 24 horas todo el año.</h5> -->
							</div>
							
						</div>
					</div>
					<!-- Image Column --> 
					<div class="image-column col-lg-6">
						<div class="about-image">
							<div class="about-inner-image">
								<img src="images/desarrollo/<?=$a_imagen700x700;?>" alt="AMENIDADES">
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-12 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title"> 
								<h2><span>Costos y Financiamientos</span> </h2>
							</div>
							<div class="text">
								<!--
								<h5>PROMOCIÓN POR PREVENTA APÁRTALO CON $8,500 pesos 12 y 20 meses sin intereses pagos Mensuales ó COMO MEJOR TE CONVENGA.<br><br> -->
									<?=$costos;?>
									<?=$c_descripcion;?>
								<!--
									* Lotes de 375 m2 , 15m. de frente por 25m. de fondo.<br>
									* Lotes de 440 m2 , 20m. de frente por 22m. de fondo.<br>
									* Lotes de 500 m2 , 20m. de frente por 25m. de fondo.<br></h5>
								<h4>*Apártalo con mayor % de enganche así tus mensualidades serán mas bajas.</h4> 
								<h5>“A’ACTUN HA’ le GARANTIZA que cumple con los registros y la Documentación ante el Registro Público de la Propiedad INSEJUPY dando certeza a su compra. <br><br>
									1.- Escritura Pública, le garantiza su compra.<br>
									2.- Cédula Catastral del fraccionamiento ante el INSEJUPY.<br>
									3.- Plano Catastral, especifica medidas, superficie y ubicación.<br>
									4.- Contrato de Compra Venta.
								</h5>

								<h6>Atención personalizada, para solucionar cada una de sus dudas y las facilidades para que adquiera el Lote de s u agrado, que se adapte a las necesidades de su familia y a un plan a la medida de sus posibilidades de pago Podemos agendar una cita para darle la información que necesite y visitar el lote de su preferencia</h6>
							-->
							</div>
						</div>
					</div> 
					


					<div class="col-md-12" id="contacto_desa"> 
						<h3 style="color:#001E47 ;">¿Necesitas más información?</h3>
						<h4>¡No dudes en contactarnos!</h4>

										<input type="hidden" id="nombre_desarrollo" value="<?php echo $nombre;?>">									 
										<div class="row" >
                                            <div class="form-group col-6 pb-2 col-md-3">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" >
                                            </div>
                                            <div class="form-group col-6 pb-2 col-md-2">
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefóno" >
                                            </div>
                                            <div class="form-group col-12 pb-2 col-md-3">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" >
                                            </div>
                                             
                                            <div class="form-group col-12 pb-2 col-md-2">
                                                <button onclick="contacto_desarrollo()" class="btn btn-primary" style="width: 100%;border-radius:1rem;">Enviar</button>
                                            </div>
                                        </div>
                                    
						</div>
						<br>
			
					</div>


				</div>
			</div>
		</div>
	</div>
	<!-- End About Section -->

	

  
	<!-- Sponsors Section -->
	<!--
	<div class="sponsors-section">
		<div class="auto-container">
			
			<div class="carousel-outer"> 
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                </ul>
            </div>
			
		</div>
	</div>
	-->
	<!--End Sponsors Section-->

	
	
	<!-- Main Footer -->
    <?php include ("files/footer_es.php");?>
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
	<button class="close-search"><span class="icofont-arrow-up"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>