function creaXMLHttpRequest(){var aVersions=["MSXML2.XMLHttp.5.0","MSXML2.XMLHttp.4.0","MSXML2.XMLHttp.3.0","MSXML2.XMLHttp","Microsoft.XMLHttp"];if(window.XMLHttpRequest){return new XMLHttpRequest();}else if(window.ActiveXObject){for(var i=0;i<aVersions.length;i++){try{var oXmlHttp=new ActiveXObject(aVersions[i]);return oXmlHttp;}catch(error){}}}}function scroll_to(clicked_link,nav_height){var element_class=clicked_link.attr('href').replace('#','.');var scroll_to=0;if(element_class!='.top-content'){element_class+='-container';scroll_to=$(element_class).offset().top-nav_height;}if($(window).scrollTop()!=scroll_to){$('html, body').stop().animate({scrollTop:scroll_to},1000);}}jQuery(document).ready(function(){$('a.scroll-link').on('click',function(e){e.preventDefault();scroll_to($(this),0);});$('.top-content').backstretch("assets/img/backgrounds/1.jpg");$('.top-content2').backstretch("assets/img/backgrounds/2.jpg");$('.testimonials-container').backstretch("assets/img/backgrounds/2.jpg");$('.call-to-action-container').backstretch("assets/img/backgrounds/1.jpg");$('.about-us-container').backstretch("assets/img/backgrounds/2.jpg");$('a[data-toggle="tab"]').on('shown.bs.tab',function(){$('.testimonials-container').backstretch("resize");});new WOW().init();$('.launch-modal').on('click',function(e){e.preventDefault();$('#'+$(this).data('modal-id')).modal();});});jQuery(window).load(function(){$(".modal-body img, .testimonial-image img").attr("style","width: auto !important; height: auto !important;");});
function 
datos_contacto(){var dear=document.getElementById("dear").value;var firstname=document.getElementById("firstname").value;var phone=document.getElementById("phone").value;var email=document.getElementById("email").value;var campaign=document.getElementById("campaign").value;var datos_notas=document.getElementById("datos_notas").value;if(firstname==""){alert("First name...");document.getElementById("firstname").focus();return false;}if(phone==""){alert("Enter your phone...");document.getElementById("phone").focus();return false;}if(email==""){alert("Email...");document.getElementById("email").focus();return false;}var enviar=new creaXMLHttpRequest();enviar.open("POST","class/index_contacto.php");document.getElementById("infcontacto").innerHTML="<img src='class/ajax-loader.gif' width='40'/>";enviar.onreadystatechange=function(){if(enviar.readyState==4){document.getElementById("infcontacto").innerHTML=enviar.responseText;}}
enviar.setRequestHeader("Content-Type","application/x-www-form-urlencoded");enviar.send("firstname="+firstname+"&phone="+phone+"&email="+email+"&dear="+dear+"&campaign="+campaign+"&datos_notas="+datos_notas); /*window.location.href='http://mexico.myvacations4life.com/thankyou.php';*/ redireccionar();} 
function redireccionar(){ setTimeout("location.href='http://mexico.myvacations4life.com/thankyou.php'", 2000);}



function save_certificado(){
	var folio=document.getElementById("folio").value;
	var hotel=document.getElementById("hotel").value;
	var name=document.getElementById("name").value;
	var coment=document.getElementById("coment").value;
	var edad=document.getElementById("edad").value;
	var domicilio=document.getElementById("domicilio").value;
	var email=document.getElementById("email").value;
	var lada=document.getElementById("lada").value;
	var telefono=document.getElementById("telefono").value;
	var pais=document.getElementById("pais").value; 
	if(name==""){
		alert("Ingrese su Nombre...");
		document.getElementById("name").focus();
		return false;
	}

	if(email==""){
		alert("Ingrese su Email...");
		document.getElementById("email").focus();
		return false;
	}

	if(lada==""){
		alert("Ingrese su Teléfono...");
		document.getElementById("lada").focus();
		return false;
	}

	if(telefono==""){
		alert("Ingrese su Teléfono...");
		document.getElementById("telefono").focus();
		return false;
	}

	if(coment==""){
		alert("Ingrese un Comentario...");
		document.getElementById("coment").focus();
		return false;
	}



	var enviar=new creaXMLHttpRequest();
	enviar.open("POST","class/index_contacto.php");
	document.getElementById("dinamico").innerHTML="<img src='class/loading4.gif' width='60'/>";
	enviar.onreadystatechange=function(){
		if(enviar.readyState==4){
			document.getElementById("dinamico").innerHTML=enviar.responseText;
		}
	}
	enviar.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	enviar.send("name="+name+"&hotel="+hotel+"&coment="+coment+"&edad="+edad+"&domicilio="+domicilio+"&email="+email+"&telefono="+telefono+"&pais="+pais+"&lada="+lada+"&folio="+folio); 
	
}

 