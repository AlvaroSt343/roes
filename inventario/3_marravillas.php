<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/a18b0c2e94.js"></script>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css"> 

<script>
function abrir_lote(id){
    $('.modal-body').load('lote3.php?id='+id,function(){
        $('#myModal').modal({show:true});
    });
}

</script>
 <script type="text/javascript">
    /*function alerta() {
      alertify.alert("Gracias <br /><b>Notice</b>:  Undefined index: nombre in <b>/var/www/vhosts/maravillasdelmayab.mx/httpdocs/croquis.php</b> on line <b>51</b><br /> <strong></strong>, tu mensaje ha sido enviado.").setHeader("<em>Maravillas del Mayab</em> ");
    }*/
</script>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Maravillas del Mayab - ROES & CO</title>
    <link rel="stylesheet" href="marravillas/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="marravillas/font-awesome.min.css">
    <link rel="stylesheet" href="marravillas/Navigation-Clean.css">
    <link rel="stylesheet" href="marravillas/modal.css">
    <link rel="stylesheet" href="marravillas/alertify.min.css" />
    <link rel="stylesheet" href="marravillas/default.min.css" />
    <script src="marravillas/alertify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
      text-align: left;
    }
    th {
      text-align: right;
    }
    .boton {
      text-decoration: none;
      text-align: center;
      padding: 10px;
      background-color:#C8E37A;
      color:#000000;
    }
    a:link, a:visited, .noed {
      text-decoration: none;
      color: #000;
    }
    </style>
</head>
<body>
      <section id="lotes" class="showcase" style="padding-bottom: 30px;background: linear-gradient(-100deg, rgb(148,149,89), rgba(180,191,177,0.59));">
        <div class="container-fluid p-0" style="background: rgba(8,157,163,0);">
            <div class="row g-0">
                <div class="col text-white order-lg-2 showcase-img" style="padding: 50px;padding-bottom: 0px;">
                    <!--<h1 class="text-center" style="background: rgba(8,157,163,0);margin-bottom: 0px;padding-top: 21px;padding-bottom: 0px;color: rgb(48,78,66);">Disponibilidad</h1> -->
                    <!-- <img class="img-fluid" src="images/MapaInterLato.svg" style="border-radius: 27px;color: rgb(48,78,66);" width="100%"> -->
                    <object class="img-fluid" id="svg-object" data="images/MapaInterLato.svg" type="image/svg+xml" style="border-radius: 27px;color: rgb(48,78,66);" width="100%" height="100%"></object>
                </div>
            </div>
        </div>
    </section>
    <script>
        var a = document.getElementById("svg-object");
        a.addEventListener("load",function(){
            var svgDoc = a.contentDocument;
            svgDoc.getElementById("002").className.baseVal = "st56";
svgDoc.getElementById("002").removeAttribute("onclick");
svgDoc.getElementById("004").className.baseVal = "st56";
svgDoc.getElementById("004").removeAttribute("onclick");
svgDoc.getElementById("011").className.baseVal = "st56";
svgDoc.getElementById("011").removeAttribute("onclick");
svgDoc.getElementById("025").className.baseVal = "st56";
svgDoc.getElementById("025").removeAttribute("onclick");
svgDoc.getElementById("032").className.baseVal = "st56";
svgDoc.getElementById("032").removeAttribute("onclick");
/*svgDoc.getElementById("045").className.baseVal = "st56";
svgDoc.getElementById("045").removeAttribute("onclick");
svgDoc.getElementById("047").className.baseVal = "st56";
svgDoc.getElementById("047").removeAttribute("onclick");*/
svgDoc.getElementById("065").className.baseVal = "st56";
svgDoc.getElementById("065").removeAttribute("onclick");
svgDoc.getElementById("066").className.baseVal = "st56";
svgDoc.getElementById("066").removeAttribute("onclick");
svgDoc.getElementById("067").className.baseVal = "st56";
svgDoc.getElementById("067").removeAttribute("onclick");
svgDoc.getElementById("070").className.baseVal = "st56";
svgDoc.getElementById("070").removeAttribute("onclick");
svgDoc.getElementById("071").className.baseVal = "st56";
svgDoc.getElementById("071").removeAttribute("onclick");
svgDoc.getElementById("072").className.baseVal = "st56";
svgDoc.getElementById("072").removeAttribute("onclick");
svgDoc.getElementById("073").className.baseVal = "st56";
svgDoc.getElementById("073").removeAttribute("onclick");
svgDoc.getElementById("074").className.baseVal = "st56";
svgDoc.getElementById("074").removeAttribute("onclick");
svgDoc.getElementById("075").className.baseVal = "st56";
svgDoc.getElementById("075").removeAttribute("onclick");
svgDoc.getElementById("076").className.baseVal = "st56";
svgDoc.getElementById("076").removeAttribute("onclick");
svgDoc.getElementById("077").className.baseVal = "st56";
svgDoc.getElementById("077").removeAttribute("onclick");
/* svgDoc.getElementById("078").className.baseVal = "st56";
svgDoc.getElementById("078").removeAttribute("onclick"); */
svgDoc.getElementById("083").className.baseVal = "st56";
svgDoc.getElementById("083").removeAttribute("onclick");
svgDoc.getElementById("085").className.baseVal = "st56";
svgDoc.getElementById("085").removeAttribute("onclick");
svgDoc.getElementById("087").className.baseVal = "st55";
svgDoc.getElementById("087").removeAttribute("onclick");
svgDoc.getElementById("088").className.baseVal = "st55";
svgDoc.getElementById("088").removeAttribute("onclick");
svgDoc.getElementById("092").className.baseVal = "st56";
svgDoc.getElementById("092").removeAttribute("onclick");
svgDoc.getElementById("093").className.baseVal = "st56";
svgDoc.getElementById("093").removeAttribute("onclick");
svgDoc.getElementById("094").className.baseVal = "st56";
svgDoc.getElementById("094").removeAttribute("onclick");
svgDoc.getElementById("095").className.baseVal = "st56";
svgDoc.getElementById("095").removeAttribute("onclick");
svgDoc.getElementById("097").className.baseVal = "st56";
svgDoc.getElementById("097").removeAttribute("onclick");
svgDoc.getElementById("099").className.baseVal = "st56";
svgDoc.getElementById("099").removeAttribute("onclick");
svgDoc.getElementById("100").className.baseVal = "st56";
svgDoc.getElementById("100").removeAttribute("onclick");
svgDoc.getElementById("104").className.baseVal = "st56";
svgDoc.getElementById("104").removeAttribute("onclick");
svgDoc.getElementById("107").className.baseVal = "st56";
svgDoc.getElementById("107").removeAttribute("onclick");
svgDoc.getElementById("118").className.baseVal = "st56";
svgDoc.getElementById("118").removeAttribute("onclick");
svgDoc.getElementById("120").className.baseVal = "st56";
svgDoc.getElementById("120").removeAttribute("onclick");
svgDoc.getElementById("121").className.baseVal = "st56";
svgDoc.getElementById("121").removeAttribute("onclick");
svgDoc.getElementById("122").className.baseVal = "st56";
svgDoc.getElementById("122").removeAttribute("onclick");
svgDoc.getElementById("123").className.baseVal = "st56";
svgDoc.getElementById("123").removeAttribute("onclick");
svgDoc.getElementById("128").className.baseVal = "st56";
svgDoc.getElementById("128").removeAttribute("onclick");
/*svgDoc.getElementById("129").className.baseVal = "st56";
svgDoc.getElementById("129").removeAttribute("onclick");*/
svgDoc.getElementById("133").className.baseVal = "st56";
svgDoc.getElementById("133").removeAttribute("onclick");
svgDoc.getElementById("136").className.baseVal = "st56";
svgDoc.getElementById("136").removeAttribute("onclick");
svgDoc.getElementById("137").className.baseVal = "st56";
svgDoc.getElementById("137").removeAttribute("onclick");
/* svgDoc.getElementById("138").className.baseVal = "st56";
svgDoc.getElementById("138").removeAttribute("onclick");*/
svgDoc.getElementById("151").className.baseVal = "st56";
svgDoc.getElementById("151").removeAttribute("onclick");
        }, false);
    </script>
    <div  class="overlay1">
     <div class="modal">
     <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close-btn">x</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-
           dismiss="modal">Close</button>
        </div>
      </div>
     </div>
    </div>
    <script src="marravillas/bootstrap.min.js"></script>
    <script src="marravillas/stylish-portfolio.js"></script>
<script>
  /*
  function getData(voID)
  {    
      // console.log(voID);
      $.ajax({
        method: "POST",
        url: "/php/getData.php",
        data: { text: voID }
      })
        .done(function( response ) {
          // alert(response);
          // alertify.alert('<a href="javascript:showConfirm();">'+ response + '</a>');
          alertify.alert(response).setHeader('<em>Maravillas del Mayab</em> ');
        });
        
  }*/
  function getData(voID)
  {    
      //console.log(voID);
      $.ajax({
        method: "POST",
        url: "lote3.php",
        data: { id: voID }
      })
        .done(function( response ) {
          // alert(response);
          // alertify.alert('<a href="javascript:showConfirm();">'+ response + '</a>');
          alertify.alert(response).setHeader('<em>Maravillas del Mayab</em> ');
        }); 
  }
</script>
</body>
</html>