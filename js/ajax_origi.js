function creaXMLHttpRequest(){
    var aVersions = ["MSXML2.XMLHttp.5.0","MSXML2.XMLHttp.4.0","MSXML2.XMLHttp.3.0","MSXML2.XMLHttp","Microsoft.XMLHttp"];
    if (window.XMLHttpRequest){
    // para IE7, Mozilla, Safari, etc: que usen el objeto nativo
       	return new XMLHttpRequest();
	}else if (window.ActiveXObject){
	// de lo contrario utilizar el control ActiveX para IE5.x y IE6.x
	for (var i = 0; i < aVersions.length; i++) {
		try {
       		var oXmlHttp = new ActiveXObject(aVersions[i]);
      		return oXmlHttp;
       	}catch (error) {
       //no necesitamos hacer nada especial
                     }
       	}
    }
}


/*---------------------------------------------------------------*/
/*function showmediv(mostrar,ocultar,texto){
	document.getElementById(mostrar).style.display="block";
	document.getElementById(ocultar).style.display="none";
	document.getElementById(texto).style.display="block";

}
function showmedi(mostrar,ocultar,texto){
	document.getElementById(mostrar).style.display="block";
	document.getElementById(ocultar).style.display="none";
	document.getElementById(texto).style.display="none";

}
*/





function contacto_home(){ 
	var name_h =document.getElementById("name_h").value;
	var email_h=document.getElementById("email_h").value; 
	var phone_h =document.getElementById("phone_h").value;
	var howMeet_h =document.getElementById("howMeet_h").value;
	var lang= "es";
	if(name_h==""){
		alert("Ingrese su Nombre completo");
		document.getElementById("name_h").focus();
		return false;
	}
	if(phone_h==""){
		alert("Ingrese su Telefono o numero de Celular");
		document.getElementById("phone_h").focus();
		return false;
	}
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","files/send_contacto_home.php");
		document.getElementById("contacto_inicio").innerHTML="<img src='images/ajax-loader.gif' />";
		abrir.onreadystatechange= function(){
			if(abrir.readyState==4){
				document.getElementById("contacto_inicio").innerHTML=abrir.responseText;
			}
		}
		abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		abrir.send("name_h="+name_h+"&email_h="+email_h+"&phone_h="+phone_h+"&howMeet_h="+howMeet_h+"&lang="+lang);
}

function contacto_home2(){ 
	var name_h =document.getElementById("name_reg").value;
	var email_h=document.getElementById("email_reg").value; 
	var phone_h =document.getElementById("phone_reg").value;
	var howMeet_h =document.getElementById("message_reg").value;
	var lang= "es";
	if(name_h==""){
		alert("Ingrese su Nombre completo");
		document.getElementById("name_reg").focus();
		return false;
	}
	if(phone_h==""){
		alert("Ingrese su Telefono o numero de Celular");
		document.getElementById("phone_reg").focus();
		return false;
	}
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","files/send_contacto_home2.php");
		document.getElementById("coment_form").innerHTML="<img src='images/ajax-loader.gif' />";
		abrir.onreadystatechange= function(){
			if(abrir.readyState==4){
				document.getElementById("coment_form").innerHTML=abrir.responseText;
			}
		}
		abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		abrir.send("name_h="+name_h+"&email_h="+email_h+"&phone_h="+phone_h+"&howMeet_h="+howMeet_h+"&lang="+lang);
}

function contacto_desarrollo(){ 
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value; 
	var phone =document.getElementById("phone").value;
	var desarrollo =document.getElementById("nombre_desarrollo").value; 
	var lang= "es";
	if(name==""){
		alert("Ingrese su Nombre completo");
		document.getElementById("name").focus();
		return false;
	}
	if(phone==""){
		alert("Ingrese su Telefono o numero de Celular");
		document.getElementById("phone").focus();
		return false;
	}
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","files/send_contacto_desa.php");
		document.getElementById("contacto_desa").innerHTML="<img src='images/ajax-loader.gif' />";
		abrir.onreadystatechange= function(){
			if(abrir.readyState==4){
				document.getElementById("contacto_desa").innerHTML=abrir.responseText;
			}
		}
		abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		abrir.send("name="+name+"&email="+email+"&phone="+phone+"&desarrollo="+desarrollo+"&lang="+lang);
}
function contacto(){ 
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value; 
	var phone =document.getElementById("phone").value;
	var subject =document.getElementById("subject").value; 
	var message =document.getElementById("message").value;
	var lang= "es";
	if(name==""){
		alert("Ingrese su Nombre completo");
		document.getElementById("name").focus();
		return false;
	}
	if(phone==""){
		alert("Ingrese su Telefono o numero de Celular");
		document.getElementById("phone").focus();
		return false;
	}
	if(message==""){
		alert("Ingrese su Mensaje");
		document.getElementById("message").focus();
		return false;
	}
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","files/send_contacto.php");
		document.getElementById("contacto-form").innerHTML="<img src='images/ajax-loader.gif' />";
		abrir.onreadystatechange= function(){
			if(abrir.readyState==4){
				document.getElementById("contacto-form").innerHTML=abrir.responseText;
			}
		} 
		abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		abrir.send("name="+name+"&email="+email+"&phone="+phone+"&subject="+subject+"&message="+message+"&lang="+lang);
	}

function validar_tc_es(idres,tc_resort,db){
	formulario = document.getElementById("tc_all_es");
	var resort_fee=document.getElementById("resort_fee").value;
	var adicional=document.getElementById("adicional").value;
	
	for(var i=0; i<formulario.elements.length; i++) {
	  var elemento = formulario.elements[i];
	  if(elemento.type == "checkbox") {
		if(!elemento.checked) {
			alert("Leer correctamente todos los terminos y condiciones.");
		  return false;
		}
	  }
	}
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","tc_acept_es.php");
	document.getElementById("terminos").innerHTML="<img src='../img/ajax.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("terminos").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("idres="+idres+"&tc_resort="+tc_resort+"&db="+db+"&resort_fee="+resort_fee+"&adicional="+adicional); //+"&idres="+idres
	//alert("idres="+idres+"&idres="+idres);
}

function validar_tc_en(idres,tc_resort,db){
	var resort_fee=document.getElementById("resort_fee").value;
	var adicional=document.getElementById("adicional").value;
	formulario = document.getElementById("tc_all_en");
	for(var i=0; i<formulario.elements.length; i++) {
	  var elemento = formulario.elements[i];
	  if(elemento.type == "checkbox") {
		if(!elemento.checked) {
			alert("Read all the terms and conditions and select all.");
		  return false;
		}
	  }
	}
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","tc_acept_en.php");
	document.getElementById("terminos").innerHTML="<img src='../img/ajax.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("terminos").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("idres="+idres+"&tc_resort="+tc_resort+"&db="+db+"&resort_fee="+resort_fee+"&adicional="+adicional); //+"&idres="+idres
	//alert("idres="+idres+"&idres="+idres);
}
			
			function seleccionar_checkbox(activar){
				var los_cboxes = document.getElementsByName('list_asign');
				if(activar==1){		
					for (var i = 0; i <los_cboxes.length; i++){
						if(los_cboxes[i].type == "checkbox"){
							los_cboxes[i].checked=true;
						}
					}
					alert("Seleccionaron todas las casillas");
				}
				if(activar==0){
					for (var i = 0; i <los_cboxes.length; i++){
						if(los_cboxes[i].type == "checkbox"){
							los_cboxes[i].checked=false;
						}	
					}
					alert("Desactivaron todas las casillas");
				}
			}

			function comenzar_asign(id_oper,db){
				var nombre_eje=document.getElementById("ejecutivo").value;
				if(nombre_eje==""){
					alert("Seleccione un ejecutivo para realiza la asignacion");
					document.getElementById("ejecutivo").focus();
					return false;
					
				}
				var n=0, cuales="";
				var numcheckbox = document.getElementsByName("list_asign");
				for (var i = 0; i < numcheckbox.length; i++){
					if(numcheckbox[i].checked == true){
						cuales += numcheckbox[i].value + ' ';
					n++;
					}
				} // fin loop
				//alert("Valores: "+cuales);
				//alert("Operador: "+nombre_eje);
				var even=new creaXMLHttpRequest();
				even.open("POST","assign_save.php");
				document.getElementById("infover").innerHTML="<img src='src/img/ajax.gif'/>";
				//even.open("POST","1100_save.php");
				//document.getElementById("contenidos").innerHTML="<img src='../img/ajax.gif'/>";
				even.onreadystatechange = function (){
					if (even.readyState==4){
						document.getElementById("infover").innerHTML=even.responseText;
					}
				}
				even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				even.send("id_oper="+id_oper+"&cuales="+cuales+"&nombre_eje="+nombre_eje+"&db="+db);
				
			}	

function report_resxmes(id_oper){
	var anio=document.getElementById("anio").value;
	var mes= document.getElementById("mes").value;
	var hotel= document.getElementById("hotel").value;
	var agencia=document.getElementById("agencia").value;
	var tipo=document.getElementById("tipo").value;
	var empresa=document.getElementById("empresa").value;
	
	//var st=document.getElementById("status").value;
	
	if((hotel=="")&&(agencia=="")&&(mes=="")){
		alert("Seleccione un Hotel, Agencia o Mes para seguir");
		document.getElementById("hotel").focus();
		return false;
	}

	window.open("src/files/1251_rep_reserva.php?hot="+hotel+"&age="+agencia+"&mes="+mes+"&anio="+anio+"&tip="+tipo+"&emp="+empresa, "_blank", "width=750,height=450,resizable=yes,scrollbars=yes,status=no,toolbar=no,menubar=no");
}
function report_resxrangfecha(id_oper){
	var anio=document.getElementById("anio2").value;
	var fe_ini= document.getElementById("fe_ini").value;
	var fe_fin= document.getElementById("fe_fin").value;
	var hotel= document.getElementById("hotel2").value;
	var agencia=document.getElementById("agencia2").value;
	var tipo=document.getElementById("tipo2").value;
	var empresa=document.getElementById("empresa2").value;
	//var st=document.getElementById("status").value;
	if((fe_ini=="") || (fe_fin=="") ){
		alert("Seleccione el Rando de Fechas para su reporte");
		document.getElementById("fe_ini").focus();
		return false;
	} 
	window.open("src/files/1252_rep_reserva.php?hot="+hotel+"&age="+agencia+"&ini="+fe_ini+"&fin="+fe_fin+"&anio="+anio+"&tip="+tipo+"&emp="+empresa, "_blank", "width=750,height=450,resizable=yes,scrollbars=yes,status=no,toolbar=no,menubar=no");
}


function report_resxanio(id_oper){
	var anio=document.getElementById("anio3").value; 
	var hotel= document.getElementById("hotel3").value;
	var agencia=document.getElementById("agencia3").value;
	var tipo=document.getElementById("tipo3").value;
	var empresa=document.getElementById("empresa3").value;
	//var st=document.getElementById("status").value;
	if((anio=="")   ){
		alert("Seleccione el Año para su reporte");
		document.getElementById("anio").focus();
		return false;
	} 
	window.open("src/files/1253_rep_reserva.php?hot="+hotel+"&age="+agencia+"&anio="+anio+"&tip="+tipo+"&emp="+empresa, "_blank", "width=750,height=450,resizable=yes,scrollbars=yes,status=no,toolbar=no,menubar=no");
}


function buscar_reserva_vlo(){ //id_oper,db
				var search=document.getElementById("search").value;
				var id_oper=document.getElementById("id_oper").value;
				var sel_status=document.getElementById("sel_status").value;
				/*
				if(search==""){
					alert("Ingrese Booking / Nombre / Telefono / E-mail / Hotel");
					document.getElementById("search").focus();
					return false;
				}*/
				var even=new creaXMLHttpRequest();
				even.open("POST","src/files/buscar_resvlo.php");
				document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
				//even.open("POST","1100_save.php");
				//document.getElementById("contenidos").innerHTML="<img src='../img/ajax.gif'/>";
				even.onreadystatechange = function (){
					if (even.readyState==4){
						document.getElementById("dinamico").innerHTML=even.responseText;
					}
				}
				even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				even.send("id_oper="+id_oper+"&search="+search+"&sel_status="+sel_status);
				//"id_oper="+id_oper+"&db="+db
}
function buscar_reserva_mt(){ //id_oper,db
	var search=document.getElementById("search").value;
	var id_oper=document.getElementById("id_oper").value;
	var sel_status=document.getElementById("sel_status").value;
				var even=new creaXMLHttpRequest();
				even.open("POST","src/files/buscar_resmt.php");
				document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
				//even.open("POST","1100_save.php");
				//document.getElementById("contenidos").innerHTML="<img src='../img/ajax.gif'/>";
				even.onreadystatechange = function (){
					if (even.readyState==4){
						document.getElementById("dinamico").innerHTML=even.responseText;
					}
				}
				even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				even.send("id_oper="+id_oper+"&search="+search+"&sel_status="+sel_status);
				//"id_oper="+id_oper+"&db="+db
}
 

function buscar_lead_mt(){ //id_oper,db
	var search=document.getElementById("search").value;
	var id_oper=document.getElementById("id_oper").value;
				if(search==""){
					alert("Ingrese Promocion / Nombre / Telefono / E-mail ");
					document.getElementById("search").focus();
					return false;
				}
				var even=new creaXMLHttpRequest();
				even.open("POST","src/files/buscar_lead.php");
				document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
				//even.open("POST","1100_save.php");
				//document.getElementById("contenidos").innerHTML="<img src='../img/ajax.gif'/>";
				even.onreadystatechange = function (){
					if (even.readyState==4){
						document.getElementById("dinamico").innerHTML=even.responseText;
					}
				}
				even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				even.send("id_oper="+id_oper+"&search="+search);
				//"id_oper="+id_oper+"&db="+db
}

function save_prospecto(){
	var id_oper=document.getElementById("id_ejec").value;
	var id_lead=document.getElementById("id_lead").value;
	var prom=document.getElementById("prom").value;
	var dest=document.getElementById("dest").value;
	var orig=document.getElementById("orig").value;
	var name=document.getElementById("name").value;
	var edad=document.getElementById("edad").value;
	var ocup1=document.getElementById("ocup1").value;
	var her_name=document.getElementById("her_name").value;
	var edad2=document.getElementById("edad2").value;
	var ocup2=document.getElementById("ocup2").value;

	var adulto=document.getElementById("adulto").value;
	var menor=document.getElementById("menor").value;
	var ecivil=document.getElementById("ecivil").value;
	var tarje1=document.getElementById("tarje1").value;
	var ingr=document.getElementById("ingr").value;
	var tele=document.getElementById("tele").value;
	var emai=document.getElementById("emai").value;
	var pais=document.getElementById("pais").value;
	var stat=document.getElementById("stat").value;
	var base=document.getElementById("base").value;
	var nota=document.getElementById("nota").value;

	var hotel=document.getElementById("hotel").value;
	var vigen=document.getElementById("vigen").value;
	var regal=document.getElementById("regal").value;
	var noch=document.getElementById("noch").value;
	var habi=document.getElementById("habi").value;
	var transpor=document.getElementById("transpor").value;
	var cali=document.getElementById("cali").value;
	var costo=document.getElementById("costo").value;
	var pago=document.getElementById("pago").value;
	var cfee=document.getElementById("cfee").value;

	var atarj=document.getElementById("atarj").value;
	var titular=document.getElementById("titular").value;
	var ntar=document.getElementById("ntar").value;
	var mven=document.getElementById("mven").value;
	var aven=document.getElementById("aven").value;
	var code=document.getElementById("code").value;
	var oper=document.getElementById("oper").value;
	var cerr=document.getElementById("cerr").value;

	if (atarj=="") { alert("Ingrese los datos de la Tarjeta"); document.getElementById("atarj").focus(); return false; }
	if (ntar=="") { alert("Ingrese los datos de la Tarjeta"); document.getElementById("ntar").focus(); return false; }

	if (mven=="") { alert("Ingrese los datos de Expiracion"); document.getElementById("mven").focus(); return false; }
	if (aven=="") { alert("Ingrese los datos de Expiracion"); document.getElementById("aven").focus(); return false; }
	if (code=="") { alert("Ingrese los datos de Expiracion"); document.getElementById("code").focus(); return false; }
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/save_prospecto.php");
	document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='30' />";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("dinamico").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_lead="+id_lead+"&id_oper="+id_oper+"&prom="+prom+"&dest="+dest+"&orig="+orig+"&name="+name+"&edad="+edad+"&ocup1="+ocup1+"&her_name="+her_name+"&edad2="+edad2
		+"&ocup2="+ocup2+"&adulto="+adulto+"&menor="+menor+"&ecivil="+ecivil+"&tarje1="+tarje1+"&ingr="+ingr+"&tele="+tele+"&emai="+emai+"&pais="+pais+"&stat="+stat
		+"&base="+base+"&nota="+nota+"&hotel="+hotel+"&vigen="+vigen+"&regal="+regal+"&noch="+noch+"&habi="+habi+"&transpor="+transpor+"&cali="+cali+"&costo="+costo
		+"&pago="+pago+"&cfee="+cfee+"&atarj="+atarj+"&titular="+titular+"&ntar="+ntar+"&mven="+mven+"&aven="+aven+"&code="+code+"&oper="+oper+"&cerr="+cerr);
}

//view_oper_list
function view_oper_list(){

	var list_oper=document.getElementById("list_oper").value;
	var statu=document.getElementById("statu").value;
	var promo=document.getElementById("promo").value;
	var id_oper=document.getElementById("id_oper").value;

	if ((list_oper=="") && (statu=="") && (promo=="")) { 
		alert("Seleccione Una opcion para filtrar lista...");
		return false;
	}

	//var abrir=new creaXMLHttpRequest();
	//abrir.open("POST","src/files/buscar_lead_oper.php");
	$("#dinamico").load("src/files/buscar_lead_oper.php?id_oper="+id_oper,{list_oper:list_oper, statu:statu, promo:promo});
	//$("#dinamico").load("src/files/buscar_lead_oper.php?id_oper="+id_oper+"&list_oper="+list_oper+"&statu="+statu+"&promo="+promo);
	document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' /";
	
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("dinamico").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&list_oper="+list_oper+"&statu="+statu+"&promo="+promo);
	
}
function view_oper_list_omni(){
	var list_oper=document.getElementById("list_oper").value;
	var statu=document.getElementById("statu").value;
	var id_oper=document.getElementById("id_oper").value;
	if (list_oper!="") { 
		document.getElementById('statu').disabled = false;
	}else{
		document.getElementById('statu').disabled = true;
		document.getElementById("statu").value="";
	}
	
	if (statu!="") {
		
		var abrir=new creaXMLHttpRequest();
		abrir.open("POST","src/files/buscar_lead_oper_omni.php");

		document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' /";
		abrir.onreadystatechange= function(){
			if(abrir.readyState==4){
				document.getElementById("dinamico").innerHTML=abrir.responseText;
			}
		}
		abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		abrir.send("id_oper="+id_oper+"&list_oper="+list_oper+"&statu="+statu);
	}
}
function opt_lead_asig(){
	var id_oper=document.getElementById("id_oper").value;
	
	var zona=document.getElementById("zona").value;
	var orig=document.getElementById("orig").value;
	var pais=document.getElementById("pais").value
	var mes=document.getElementById("mes").value;
	var anio=document.getElementById("anio").value;
	var promo=document.getElementById("promo").value;
	var snasig=document.getElementById("snasig").value;
	var statu=document.getElementById("statu").value;
	var empre=document.getElementById("empre").value;
				 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/lead_cont_asig.php");
	document.getElementById("cont_asig").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&zona="+zona+"&mes="+mes+"&anio="+anio+"&promo="+promo+"&orig="+orig+"&pais="+pais+"&snasig="+snasig+"&statu="+statu+"&empre="+empre);
				//"id_oper="+id_oper+"&db="+db
}
function opt_lead_asig2(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;
	var tpromo=document.getElementById("tpromo").value;
	var torig=document.getElementById("torig").value;
	var tpais=document.getElementById("tpais").value;
	var tstat=document.getElementById("tstat").value;

	var tzona=document.getElementById("tzona").value;
	var tmes=document.getElementById("tmes").value;
	var tanio=document.getElementById("tanio").value;
	
	if(toper==""){
		alert("Seleccione Usuario De: ");
		document.getElementById("toper").focus();
		return false;
	}			 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/lead_contope_asig.php");
	document.getElementById("cont_asig_ope").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig_ope").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper+"&tpromo="+tpromo+"&torig="+torig+"&tpais="+tpais+"&tstat="+tstat+"&tzona="+tzona+"&tmes="+tmes+"&tanio="+tanio);
				//"id_oper="+id_oper+"&db="+db
}

 
function activa_options(){
	ver_opt_campa();
	ver_opt_basel();
	ver_opt_pais();
	ver_opt_stat();
}
function ver_opt_campa(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transfer_campa.php");
	document.getElementById("campa").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("campa").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
}
function ver_opt_basel(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transfer_base.php");
	document.getElementById("baselead").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("baselead").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
}
function ver_opt_pais(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transfer_pais.php");
	document.getElementById("verpais").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("verpais").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
}
function ver_opt_stat(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transfer_status.php");
	document.getElementById("verstatus").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("verstatus").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
	//alert("id_oper="+id_oper+"&toper="+toper);
}

function assign_process(){
	var id_oper=document.getElementById("id_oper").value;

	var zona=document.getElementById("zona").value;
	var mes=document.getElementById("mes").value;
	var anio=document.getElementById("anio").value;
	var promo=document.getElementById("promo").value;
	var orig=document.getElementById("orig").value;
	var pais=document.getElementById("pais").value;

	var oper=document.getElementById("oper").value;
	var canti=document.getElementById("canti").value; 

	var snasig=document.getElementById("snasig").value;
	var statu=document.getElementById("statu").value;

	var empre=document.getElementById("empre").value;
	if(oper==""){
		alert("Seleccione Usuario: ");
		document.getElementById("oper").focus();
		return false;
	}
	if(canti==""){
		alert("Ingrese la cantidad a Asignar: ");
		document.getElementById("canti").focus();
		return false;
	}
				 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/assign_all.php");
	document.getElementById("cont_asig").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&zona="+zona+"&anio="+anio+"&mes="+mes+"&promo="+promo+"&orig="+orig+"&pais="+pais+"&oper="+oper+"&canti="+canti+"&snasig="+snasig+"&statu="+statu+"&empre="+empre); 
}

function assign_process_ope(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;
	var tpromo=document.getElementById("tpromo").value;
	var torig=document.getElementById("torig").value;
	var tpais=document.getElementById("tpais").value;
	var tstat=document.getElementById("tstat").value;

	var tcant=document.getElementById("tcant").value;
	var newope=document.getElementById("newope").value;

	var tzona=document.getElementById("tzona").value;
	var tmes=document.getElementById("tmes").value;
	var tanio=document.getElementById("tanio").value;

	if(toper==""){
		alert("Seleccione Usuario anterior: ");
		document.getElementById("toper").focus();
		return false;
	}
	if(newope==""){
		alert("Seleccione el nuevo Usuario: ");
		document.getElementById("newope").focus();
		return false;
	}
	if(tcant==""){
		alert("Ingrese la cantidad a Asignar: ");
		document.getElementById("tcant").focus();
		return false;
	}
				 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/assign_all_ope.php");
	document.getElementById("cont_asig_ope").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig_ope").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper+"&tzona="+tzona+"&tmes="+tmes+"&tanio="+tanio+"&tpromo="+tpromo+"&torig="+torig+"&tpais="+tpais+"&tstat="+tstat+"&tcant="+tcant+"&newope="+newope); 
}

//OMNI LEAD
function buscar_lead_omni(){ //id_oper,db
	var search=document.getElementById("search").value;
	var id_oper=document.getElementById("id_oper").value;
				if(search==""){
					alert("Ingrese Promocion / Nombre / Telefono / E-mail ");
					document.getElementById("search").focus();
					return false;
				}
				var even=new creaXMLHttpRequest();
				even.open("POST","src/files/buscar_leadomni.php");
				document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
				//even.open("POST","1100_save.php");
				//document.getElementById("contenidos").innerHTML="<img src='../img/ajax.gif'/>";
				even.onreadystatechange = function (){
					if (even.readyState==4){
						document.getElementById("dinamico").innerHTML=even.responseText;
					}
				}
				even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				even.send("id_oper="+id_oper+"&search="+search);
				//"id_oper="+id_oper+"&db="+db
}

function opt_zona(){
	var zona=document.getElementById("zona").value; 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/zona_opt.php");
	document.getElementById("ver_zonapais").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("ver_zonapais").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("zona="+zona);
}

function opt_lead_asigomni(){
	var id_oper=document.getElementById("id_oper").value;
	var promo=document.getElementById("promo").value;
	var orig=document.getElementById("orig").value;
	var pais=document.getElementById("pais").value;

	var snasig=document.getElementById("snasig").value;
	var statu=document.getElementById("statu").value;
	var empre=document.getElementById("empre").value;
				 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/lead_cont_asigomni.php");
	document.getElementById("cont_asig").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&promo="+promo+"&orig="+orig+"&pais="+pais+"&snasig="+snasig+"&statu="+statu+"&empre="+empre);
				//"id_oper="+id_oper+"&db="+db
}
function opt_lead_asigomni2(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;
	var tpromo=document.getElementById("tpromo").value;
	var torig=document.getElementById("torig").value;
	var tpais=document.getElementById("tpais").value;
	var tstat=document.getElementById("tstat").value;
	
	if(toper==""){
		alert("Seleccione Usuario De: ");
		document.getElementById("toper").focus();
		return false;
	}			 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/lead_contope_asigomni.php");
	document.getElementById("cont_asig_ope").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig_ope").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper+"&tpromo="+tpromo+"&torig="+torig+"&tpais="+tpais+"&tstat="+tstat);
				//"id_oper="+id_oper+"&db="+db
}
function activa_optionsomni(){
	ver_optomni_campa();
	ver_optomni_basel();
	ver_optomni_pais();
	ver_optomni_stat();
}
function ver_optomni_campa(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transomni_campa.php");
	document.getElementById("campa").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("campa").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
}
function ver_optomni_basel(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transomni_base.php");
	document.getElementById("baselead").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("baselead").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
}
function ver_optomni_pais(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transomni_pais.php");
	document.getElementById("verpais").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("verpais").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
}
function ver_optomni_stat(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;

	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/transomni_status.php");
	document.getElementById("verstatus").innerHTML="<img src='src/images/ajax-loader-yellow.gif' width='50'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("verstatus").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper);
	//alert("id_oper="+id_oper+"&toper="+toper);
}

function assign_process_omni(){
	var id_oper=document.getElementById("id_oper").value;
	var promo=document.getElementById("promo").value;
	var orig=document.getElementById("orig").value;
	var pais=document.getElementById("pais").value;

	var oper=document.getElementById("oper").value;
	var canti=document.getElementById("canti").value; 

	var snasig=document.getElementById("snasig").value;
	var statu=document.getElementById("statu").value;

	var empre=document.getElementById("empre").value;
	if(oper==""){
		alert("Seleccione Usuario: ");
		document.getElementById("oper").focus();
		return false;
	}
	if(canti==""){
		alert("Ingrese la cantidad a Asignar: ");
		document.getElementById("canti").focus();
		return false;
	}
				 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/asig_omni_all.php");
	document.getElementById("cont_asig").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&promo="+promo+"&orig="+orig+"&pais="+pais+"&oper="+oper+"&canti="+canti+"&snasig="+snasig+"&statu="+statu+"&empre="+empre); 
}

function assign_process_opeomni(){
	var id_oper=document.getElementById("id_oper").value;
	var toper=document.getElementById("toper").value;
	var tpromo=document.getElementById("tpromo").value;
	var torig=document.getElementById("torig").value;
	var tpais=document.getElementById("tpais").value;
	var tstat=document.getElementById("tstat").value;

	var tcant=document.getElementById("tcant").value;
	var newope=document.getElementById("newope").value;

	if(toper==""){
		alert("Seleccione Usuario anterior: ");
		document.getElementById("toper").focus();
		return false;
	}
	if(newope==""){
		alert("Seleccione el nuevo Usuario: ");
		document.getElementById("newope").focus();
		return false;
	}
	if(tcant==""){
		alert("Ingrese la cantidad a Asignar: ");
		document.getElementById("tcant").focus();
		return false;
	}
				 
	var even=new creaXMLHttpRequest();
	even.open("POST","src/files/asig_omni_all_ope.php");
	document.getElementById("cont_asig_ope").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	even.onreadystatechange = function (){
		if (even.readyState==4){
			document.getElementById("cont_asig_ope").innerHTML=even.responseText;
		}
	}
	even.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	even.send("id_oper="+id_oper+"&toper="+toper+"&tpromo="+tpromo+"&torig="+torig+"&tpais="+tpais+"&tstat="+tstat+"&tcant="+tcant+"&newope="+newope); 
}


function asign_exhibit(id_oper){
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/exhibit_asign_all.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper);  
	//alert("idres="+idres+"&id="+id);
}
function asign_exhibit_save(id_oper,id){
	//var filas=document.getElementById("filas").value;
	var n=0, cuales_checked="";
	var cantidad_chkb = document.getElementsByName("siglas"+id);
	for (var i = 0; i < cantidad_chkb.length; i++){
		if(cantidad_chkb[i].checked == true){
			cuales_checked += cantidad_chkb[i].value + ', ';
		n++;
		}
	} 
	var sen=new creaXMLHttpRequest();
	sen.open("POST","src/files/exhibit_asign_save.php");
	document.getElementById("page-content").innerHTML="<img src='src/img/ajax.gif' width='30' />";
	 sen.onreadystatechange = function (){
		if (sen.readyState==4){
		document.getElementById("page-content").innerHTML=sen.responseText;						
		}
	}
	sen.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	sen.send("id_oper="+id_oper+"&id="+id+"&cuales_checked="+cuales_checked);	
}



function del_usr(id_oper, id){	
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/adm/user_del.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&id="+id);  
	//alert("idres="+idres+"&idres="+idres);
}

function new_tc(id_oper){
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/terminos_new.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper);  
	//alert("idres="+idres+"&idres="+idres);
}
function new_tc_save(id_oper){
	var name=document.getElementById("name").value;
	var hotel=document.getElementById("hotel").value;
	var lang=document.getElementById("lang").value; 
	var acti=document.getElementById("acti");
	
	if(name==""){
		alert("Ingrese el texto");
		document.getElementById("name").focus();
		return false;
	}
	if(hotel==""){
		alert("Ingrese un opcion");
		document.getElementById("hotel").focus();
		return false;
	}
	
	if(acti.checked){ var val_chk1 = "on"; }else{ var val_chk1 = "off";	}

	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/terminos_new_save.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&name="+name+"&hotel="+hotel+"&lang="+lang+"&acti="+val_chk1);
}
function mod_tc(id_oper, id){
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/terminos_mod.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&id="+id);  
	//alert("idres="+idres+"&idres="+idres);
}
function mod_tc_save(id_oper,id){
	var name=document.getElementById("name").value;
	var hotel=document.getElementById("hotel").value;
	var lang=document.getElementById("lang").value; 
	var acti=document.getElementById("acti");
	
	if(name==""){
		alert("Ingrese el texto");
		document.getElementById("name").focus();
		return false;
	}
	if(hotel==""){
		alert("Ingrese un opcion");
		document.getElementById("hotel").focus();
		return false;
	}
	
	if(acti.checked){ var val_chk1 = "on"; }else{ var val_chk1 = "off";	}

	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/terminos_mod_save.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&id="+id+"&name="+name+"&hotel="+hotel+"&lang="+lang+"&acti="+val_chk1);
}
function ver_exhibit(id_oper, id){
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/exhibit_edit.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&id="+id);  
	//alert("idres="+idres+"&idres="+idres);
}
function mod_datos_exhibit(id_oper, id){

	var direc=document.getElementById("direc").value;
	var noche=document.getElementById("noche").value;
	var tour=document.getElementById("tour").value;
	var trans=document.getElementById("trans").value;
	var cutoof=document.getElementById("cutoof").value;
	var resfee54=document.getElementById("resfee54").value;
	var resfee65=document.getElementById("resfee65").value;
	var mexico=document.getElementById("mexico").value;
	var mx_estado=document.getElementById("mx_estado").value;
	var mx_edociv=document.getElementById("mx_edociv").value;
	var mx_edad=document.getElementById("mx_edad").value;
	var mx_tarjeta=document.getElementById("mx_tarjeta").value;
	var mx_ingreso=document.getElementById("mx_ingreso").value;
	var mx_chkin=document.getElementById("mx_chkin").value;
	var latam=document.getElementById("latam").value;
	var la_estado=document.getElementById("la_estado").value;
	var la_edociv=document.getElementById("la_edociv").value;
	var la_edad=document.getElementById("la_edad").value;
	var la_tarjeta=document.getElementById("la_tarjeta").value;
	var la_ingreso=document.getElementById("la_ingreso").value;
	var la_chkin=document.getElementById("la_chkin").value;
	var usa_can=document.getElementById("usa_can").value;
	var us_estado=document.getElementById("us_estado").value;
	var us_edociv=document.getElementById("us_edociv").value;
	var us_edad=document.getElementById("us_edad").value;
	var us_tarjeta=document.getElementById("us_tarjeta").value;
	var us_ingreso=document.getElementById("us_ingreso").value;
	var us_chkin=document.getElementById("us_chkin").value;
	var baja_text=document.getElementById("baja_text").value;
	var baja_adulto=document.getElementById("baja_adulto").value;
	var baja_menor=document.getElementById("baja_menor").value;
	var baja_hab22=document.getElementById("baja_hab22").value;
	var alta_text=document.getElementById("alta_text").value;
	var alta_adulto=document.getElementById("alta_adulto").value;
	var alta_menor=document.getElementById("alta_menor").value;
	var alta_hab22=document.getElementById("alta_hab22").value;
	var ocupmax=document.getElementById("ocupmax").value;
	var cambcxl=document.getElementById("cambcxl").value;
	var noshow=document.getElementById("noshow").value; 
	

	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/exhibit_edit_save.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&id="+id+"&direc="+direc+"&noche="+noche+"&tour="+tour+"&trans="+trans+"&cutoof="+cutoof+"&resfee54="+resfee54+"&resfee65="+resfee65+"&mexico="+mexico
	+"&mx_estado="+mx_estado+"&mx_edociv="+mx_edociv+"&mx_edad="+mx_edad+"&mx_tarjeta="+mx_tarjeta+"&mx_ingreso="+mx_ingreso+"&mx_chkin="+mx_chkin
	+"&latam="+latam+"&la_estado="+la_estado+"&la_edociv="+la_edociv+"&la_edad="+la_edad 
	+"&la_tarjeta="+la_tarjeta+"&la_ingreso="+la_ingreso+"&la_chkin="+la_chkin+"&usa_can="+usa_can+"&us_estado="+us_estado
	+"&us_edociv="+us_edociv+"&us_edad="+us_edad+"&us_tarjeta="+us_tarjeta+"&us_ingreso="+us_ingreso+"&us_chkin="+us_chkin
	+"&baja_text="+baja_text+"&baja_adulto="+baja_adulto+"&baja_menor="+baja_menor+"&baja_hab22="+baja_hab22+"&alta_text="+alta_text+"&alta_adulto="+alta_adulto
	+"&alta_menor="+alta_menor+"&alta_hab22="+alta_hab22+"&ocupmax="+ocupmax+"&cambcxl="+cambcxl+"&noshow="+noshow);  
	//alert("idres="+idres+"&idres="+idres);
}
//ver_tc_list
function ver_tc_list(id_oper, id){
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/tc_edit.php");
	document.getElementById("page-content").innerHTML="<img src='src/images/ajax-loader-yellow.gif'/>";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("page-content").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_oper="+id_oper+"&id="+id);  
	//alert("idres="+idres+"&idres="+idres);
}
			
function new_header_tc(id_oper){
	var id_tc=document.getElementById("id_tc").value;
	var lang=document.getElementById("lang").value;
	var hotel=document.getElementById("hotel").value;
	var texto_header=document.getElementById("texto_header").value;
	if(texto_header==""){
		alert("Ingrese el texto");
		document.getElementById("texto_header").focus();
		return false;
	}
	var sen=new creaXMLHttpRequest();
	sen.open("POST","src/files/tc_save_header.php");
	document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' />";
	sen.onreadystatechange = function (){
		if (sen.readyState==4){
		document.getElementById("dinamico").innerHTML=sen.responseText;						
		}
	}
	sen.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	sen.send("id_oper="+id_oper+"&id_tc="+id_tc+"&texto_header="+texto_header+"&hotel="+hotel+"&lang="+lang);
	
}
function new_texto_tc(id_oper){
	var id_tc=document.getElementById("id_tc").value;
	var lang=document.getElementById("lang").value;
	var hotel=document.getElementById("hotel").value;
	var texto_tc=document.getElementById("texto_tc").value;
	if(texto_tc==""){
		alert("Ingrese el texto");
		document.getElementById("texto_tc").focus();
		return false;
	}
	var sen=new creaXMLHttpRequest();
	sen.open("POST","src/files/tc_save_texto.php");
	document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' />";
	sen.onreadystatechange = function (){
		if (sen.readyState==4){
		document.getElementById("dinamico").innerHTML=sen.responseText;						
		}
	}
	sen.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	sen.send("id_oper="+id_oper+"&id_tc="+id_tc+"&texto_tc="+texto_tc+"&hotel="+hotel+"&lang="+lang);
	
}
function new_pie_tc(id_oper){
	var id_tc=document.getElementById("id_tc").value;
	var lang=document.getElementById("lang").value;
	var hotel=document.getElementById("hotel").value;
	var footer_tc=document.getElementById("footer_tc").value;
	if(footer_tc==""){
		alert("Ingrese el texto");
		document.getElementById("footer_tc").focus();
		return false;
	}
	var sen=new creaXMLHttpRequest();
	sen.open("POST","src/files/tc_save_footer.php");
	document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' />";
	sen.onreadystatechange = function (){
		if (sen.readyState==4){
		document.getElementById("dinamico").innerHTML=sen.responseText;						
		}
	}
	sen.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	sen.send("id_oper="+id_oper+"&id_tc="+id_tc+"&footer_tc="+footer_tc+"&hotel="+hotel+"&lang="+lang);
}

function mod_datos_tc(id_oper,id_tc){
	//var valores_id_cali=document.getElementById("valores_id_cali").value;
	var valores_idhead=document.getElementById("valores_idhead").value;
	var valores_idtxt=document.getElementById("valores_idtxt").value;
	var valores_idpie=document.getElementById("valores_idpie").value;
    
    arr_head = valores_idhead.split(",");
	cantidad1= arr_head.length -1;  //alert(arr_head+'/ '+cantidad1);
    var cuales_valhead= [];  
	//var aarr = valores_idhead.split(",");
	for(var i = 0; i < cantidad1; i++){
    	var txt_head = document.getElementById("txt_head" + arr_head[i]).value;
 		cuales_valhead += txt_head + "//"; //cadena.push(num);
	}

	arr_text = valores_idtxt.split(",");
	cantidad2= arr_text.length -1; //alert(arr_text+'/ '+cantidad2);
    var cuales_valtc=[];   
	//var aarr = valores_idtxt.split(",");
	for(var i = 0; i < cantidad2; i++){
    	var txt_tc = document.getElementById("txt_tc" + arr_text[i]).value;
 		cuales_valtc += txt_tc + "//";    //cadena.push(num);
	}

	arr_pie = valores_idpie.split(",");
	cantidad3= arr_pie.length -1; //alert(arr_pie+'/ '+cantidad3);
    var cuales_valpie=[];   
	//var aarr = valores_idpie.split(",");
	for(var i = 0; i < cantidad3; i++){
    	var pie_tc = document.getElementById("pie_tc" + arr_pie[i]).value;
 		cuales_valpie += pie_tc + "//";  
	}

	/*
	arr = valores_id_cali.split(",");
	cantidad= arr.length -1; //alert(arr+'/ '+cantidad);

    var cuales_val=[];  //var cuales_val = [];
	var aarr = valores_id_cali.split(",");

	for(var i = 0; i < cantidad; i++){
    	var descrip_modval = document.getElementById("descrip_calif" + arr[i]).value;
 		cuales_val += descrip_modval + "//";
    //cadena.push(num);
	}*/

	//alert(cuales_val);
	var sen=new creaXMLHttpRequest();
	sen.open("POST","src/files/save_tc_mod.php");
	document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' />";
	sen.onreadystatechange = function (){
	if (sen.readyState==4){
		document.getElementById("dinamico").innerHTML=sen.responseText;						
		}
	}
	sen.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//sen.send("&id_oper="+id_oper+"&id_ex="+id_ex+"&valores_id_cali="+valores_id_cali+"&cuales_val="+cuales_val);
	sen.send("&id_oper="+id_oper+"&id_tc="+id_tc+"&valores_idhead="+valores_idhead+"&cuales_valhead="+cuales_valhead+"&valores_idtxt="+valores_idtxt+"&cuales_valtc="+cuales_valtc+"&valores_idpie="+valores_idpie+"&cuales_valpie="+cuales_valpie);
}

function validar_tc(idres,hotel,lang){
	formulario = document.getElementById("tc_all_es");
	 	
	for(var i=0; i<formulario.elements.length; i++) {
	  var elemento = formulario.elements[i];
	  if(elemento.type == "checkbox") {
		if(!elemento.checked) {
			alert("Leer correctamente todos los terminos y condiciones. / Read all terms and conditions correctly");
		  return false;
		}
	  }
	}
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","tc_acept.php");
	document.getElementById("terminos").innerHTML="<img src='../src/images/ajax-loader-yellow.gif' /";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("terminos").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("idres="+idres+"&hotel="+hotel+"&lang="+lang); //+"&idres="+idres
	//alert("idres="+idres+"&idres="+idres);
}

function send_tc_mail(idres,hotel,lang){
	 
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","tc_send_mail.php");
	document.getElementById("terminos").innerHTML="<img src='../src/images/ajax-loader-yellow.gif' /";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("terminos").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("idres="+idres+"&hotel="+hotel+"&lang="+lang);
}

function save_notaverhotel(idnotas){ 
 
	var vnotho=document.getElementById("vnotho"+idnotas).value; //alert(vnot+" OK");
	 
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/hotel_notasave.php");
	document.getElementById("validnotas"+idnotas).innerHTML="<img src='../img/ajax.gif' width='25'/>";
	abrir.onreadystatechange=function(){
		if(abrir.readyState==4){
		document.getElementById("validnotas"+idnotas).innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("idnotas="+idnotas+"&vnotho="+vnotho);
}
function save_nothotel(idnotas){ 
	var nothotl=document.getElementById("nothotl"+idnotas).value; //alert(vnot+" OK");
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/notes_hotel.php");
	document.getElementById("validnotas"+idnotas).innerHTML="<img src='../img/ajax.gif' width='25'/>";
	abrir.onreadystatechange=function(){
		if(abrir.readyState==4){
		document.getElementById("validnotas"+idnotas).innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("idnotas="+idnotas+"&nothotl="+nothotl);
}
function save_notage(idnotas){ 
	var notage=document.getElementById("notage"+idnotas).value; //alert(vnot+" OK");
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/notes_agen.php");
	document.getElementById("validnotas"+idnotas).innerHTML="<img src='../img/ajax.gif' width='25'/>";
	abrir.onreadystatechange=function(){
		if(abrir.readyState==4){
		document.getElementById("validnotas"+idnotas).innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("idnotas="+idnotas+"&notage="+notage);
}

function send_voucher_mail(id_res,id_oper){
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","voucher_mail.php");
	document.getElementById("send_voucher").innerHTML="<img src='src/images/ajax-loader-yellow.gif' /";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("send_voucher").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_res="+id_res+"&id_oper="+id_oper);
}

//registra_resvlo
function registra_resvlo(id_res,id_oper){
	var abrir=new creaXMLHttpRequest();
	abrir.open("POST","src/files/reserva_new.php");
	document.getElementById("dinamico").innerHTML="<img src='src/images/ajax-loader-yellow.gif' /";
	abrir.onreadystatechange= function(){
		if(abrir.readyState==4){
			document.getElementById("dinamico").innerHTML=abrir.responseText;
		}
	}
	abrir.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	abrir.send("id_res="+id_res+"&id_oper="+id_oper);
	//alert("id_res="+id_res+"&id_oper="+id_oper);
}
