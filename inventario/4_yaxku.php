
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Yaxku | FincasGlamlot </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/a18b0c2e94.js"></script>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css"> 

<script>
function abrir_lote(id){
    $('.modal-body').load('lote4.php?id='+id,function(){
        $('#myModal').modal({show:true});
    });
}
</script>
<!--
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->
</head>
<body  style="background-image:url('img/pasto.png');" >
<style>
  .container{
    max-width: 3140px;
  }
</style>
<!--<div class="container" align="center">
 <h4 style="color:#fff">Seleccione su FincaGlamlot<br> para realizar su cotización:</h4>
  

Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
-->

<!-- Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  

</div>
-->
<div class="row" style="margin-top: -45px;">
<div class="col-md-12" >

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0px" y="0px"  viewBox="0 0 1600 1500" xml:space="preserve" class="production mapa">
<style>
#items &gt; * {transition: fill 0.2s, fill-opacity 0.2s, stroke 0.2s, stroke-opacity 0.2s;cursor: pointer;}

/**/ 
    
#items &gt; #Lote-1{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-1:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-1.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-2{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-2:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-2.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-3{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-3:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-3.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-4{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-4:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-4.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-5{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-5:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-5.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-6{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-6:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-6.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-7{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-7:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-7.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-8{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-8:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-8.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-9{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-9:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-9.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-10{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-10:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-10.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-11{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-11:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-11.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-12{fill:#EFAC14;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-12:hover{fill:#EFAC14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-12.active{fill:#EFAC14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-13{fill:#EFAC14;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-13:hover{fill:#EFAC14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-13.active{fill:#EFAC14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-14{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-14:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-14.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-15{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-15:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-15.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-16{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-16:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-16.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-17{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-17:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-17.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-18{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-18:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-18.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-19{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-19:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-19.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-20{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-20:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-20.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-21{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-21:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-21.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-22{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-22:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-22.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-23{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-23:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-23.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-24{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-24:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-24.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-25{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-25:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-25.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-26{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-26:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-26.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-27{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-27:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-27.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-28{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-28:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-28.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-29{fill:#ff0000;fill-opacity:0.83;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-29:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-29.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-30{fill:#ff0000;fill-opacity:0.83;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-30:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-30.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-31{fill:#ff0000;fill-opacity:0.73;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-31:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-31.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-32{fill:#ff0000;fill-opacity:0.83;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-32:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-32.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-33{fill:#ff0000;fill-opacity:0.83;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-33:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-33.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-34{fill:#ff0000;fill-opacity:0.83;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-34:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-34.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-35{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-35:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-35.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-36{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-36:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-36.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-37{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-37:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-37.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-38{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-38:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-38.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-39{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-39:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-39.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #Lote-40{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #Lote-40:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #Lote-40.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

</style>


<image overflow="visible" width="1600" height="1500" xlink:href="images/Yaxku-mapa-nuevo.png">
</image><g id="items" class="">

<polygon id="Lote-1" onclick="abrir_lote('1','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms"  data-whatever="1" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 1 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.49 mts. <br>Superficie:<br/>280.38m2</strong></p>" points="391.94,1076.48 549.63,1074.69 549.18,1151.74 390.60,1149.95" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-2" onclick="abrir_lote('2','modal-terms','lote4.php');"  data-toggle="modal" data-target="#modal-terms" data-whatever="2" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 2 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.49 mts. <br>Superficie:<br/>280.36m2</strong></p>" points="389.70,1004.36 549.63,1003.02 550.52,1074.24 391.94,1076.04" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-3" onclick="abrir_lote('3','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="3" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 3 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.49 mts. <br>Superficie:<br/>280.34m2</strong></p>" points="391.75,934.26 549.44,934.71 549.89,1002.80 389.51,1004.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-4" onclick="abrir_lote('4','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="4" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 4 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.49 mts. <br>Superficie:<br/>280.33m2</strong></p>" points="389.75,864.81 550.12,864.81 550.57,934.68 391.99,933.79" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-5" onclick="abrir_lote('5','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="5" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 5 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.48 mts. <br>Superficie:<br/>280.31m2</strong></p>" points="390.72,795.54 551.09,794.64 549.30,864.52 389.82,864.07" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-6" onclick="abrir_lote('6','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="6" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 6 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.48 mts. <br>Superficie:<br/>280.29m2</strong></p>" points="390.27,725.65 549.75,726.10 549.75,793.30 389.82,795.98" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-7" onclick="abrir_lote('7','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="7" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 7 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.48 mts. <br>Superficie:<br/>280.27m2</strong></p>" points="389.38,656.00 549.82,654.44 550.86,725.28 389.38,725.28" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-8" onclick="abrir_lote('8','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="8" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 8 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.48 mts. <br>Superficie:<br/>280.25m2</strong></p>" points="389.90,585.16 549.30,584.11 549.82,653.92 390.94,656.52" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-9" onclick="abrir_lote('9','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="9" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 9 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.48 mts. <br>Superficie:<br/>280.24m2</strong></p>" points="389.38,516.39 549.82,516.92 549.82,584.11 389.38,585.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-10" onclick="abrir_lote('10','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="10" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 10 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>13.17 x 25.48 mts. <br>Superficie:<br/>317.80m2</strong></p>" points="388.72,515.94 390.28,410.19 510.09,408.63 509.57,420.09 513.22,433.63 517.39,448.22 525.72,461.24 534.06,469.06 541.87,476.87 550.72,482.60 550.72,516.98" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-11" onclick="abrir_lote('11','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="11" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 11 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>13.17 x 25.51 mts. <br>Superficie:<br/>318.35m2</strong></p>" points="629.54,515.69 787.95,516.82 787.38,409.51 668.71,408.94 667.58,426.54 663.60,441.87 656.79,453.23 647.14,465.15 634.08,476.51 629.54,479.35" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-12" onclick="abrir_lote('12','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="12" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 12 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.51 mts. <br>Superficie:<br/>280.59m2</strong></p>" points="630.11,584.96 787.95,584.95 787.38,515.69 630.10,515.69" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-13" onclick="abrir_lote('13','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="13" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 13 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.50 mts. <br>Superficie:<br/>280.57m2</strong></p>" points="628.97,654.23 788.52,655.93 787.38,584.96 628.40,585.53" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-14" onclick="abrir_lote('14','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="14" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 14 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.50 mts. <br>Superficie:<br/>280.54m2</strong></p>" points="629.89,725.13 629.40,655.31 788.09,655.31 788.10,725.62" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-15" onclick="abrir_lote('15','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="15" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 15 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.50 mts. <br>Superficie:<br/>280.51m2</strong></p>" points="629.40,794.96 788.58,795.45 787.12,725.13 630.87,725.62" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-16" onclick="abrir_lote('16','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="16" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 16 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.50 mts. <br>Superficie:<br/>280.49m2</strong></p>" points="629.22,864.75 788.89,863.77 787.42,795.41 630.19,795.41" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-17" onclick="abrir_lote('17','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="17" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 17 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.50 mts. <br>Superficie:<br/>280.46m2</strong></p>" points="630.19,935.06 788.89,934.08 788.40,862.79 630.19,864.26" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-18" onclick="abrir_lote('18','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="18" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 18 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.50 mts. <br>Superficie:<br/>280.43m2</strong></p>" points="628.96,1003.56 629.44,935.20 788.62,933.25 789.11,1004.05" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-19" onclick="abrir_lote('19','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="19" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 19 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.49 mts. <br>Superficie:<br/>280.41m2</strong></p>" points="630.91,1073.87 629.44,1003.56 786.67,1003.56 786.67,1074.36" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-20" onclick="abrir_lote('20','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="20" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 20 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 25.49 mts. <br>Superficie:<br/>280.38m2</strong></p>" points="630.42,1146.14 629.93,1074.36 788.62,1073.87 788.62,1145.65" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-21" onclick="abrir_lote('21','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="21" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 21 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="789.31,1146.86 787.60,1074.18 946.02,1074.75 944.31,1146.29" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-22" onclick="abrir_lote('22','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="22" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 22 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="787.60,1003.21 944.88,1002.64 943.74,1074.19 787.60,1074.75" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-23" onclick="abrir_lote('23','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="23" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 23 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="787.60,934.50 945.45,935.64 944.88,1003.21 787.60,1002.64" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-24" onclick="abrir_lote('24','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="24" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 24 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="788.63,863.99 945.37,865.46 944.88,936.26 789.12,934.31" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-25" onclick="abrir_lote('25','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="25" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 25 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="787.65,795.63 944.39,796.12 945.86,864.97 788.63,864.97" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-26" onclick="abrir_lote('26','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="26" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 26 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="787.92,724.33 944.66,724.33 945.15,795.62 788.41,796.60" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-27" onclick="abrir_lote('27','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="27" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 27 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="788.90,655.97 945.64,656.95 944.17,724.33 787.92,725.31" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-28" onclick="abrir_lote('28','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="28" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 28 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="788.40,584.96 945.62,583.98 943.67,655.77 787.91,654.79" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-29" onclick="abrir_lote('29','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="29" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 29 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.46m2</strong></p>" points="788.40,516.60 945.14,515.14 945.62,584.96 788.89,585.45" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-30" onclick="abrir_lote('30','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="30" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 30 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>12.96 x 24.86 mts. <br>Superficie:<br/>365.07m2</strong></p>" points="786.89,409.92 906.13,408.56 908.17,421.50 909.53,436.49 914.98,451.48 923.84,461.70 936.11,474.65 945.64,479.42 944.96,513.48 788.93,516.89" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-31" onclick="abrir_lote('31','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="31" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 31 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>12.97 x 24.86 mts. <br>Superficie:<br/>365.05m2</strong></p>" points="1024.46,481.18 1036.38,473.79 1050.58,459.03 1058.53,443.13 1063.64,427.23 1065.34,410.20 1181.74,407.93 1183.44,515.81 1026.16,516.38" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-32" onclick="abrir_lote('32','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="32" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 32 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1024.46,584.51 1025.03,516.38 1182.87,515.24 1182.87,586.22" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-33" onclick="abrir_lote('33','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="33" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 33 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1024.58,656.72 1026.04,584.46 1182.29,584.95 1181.32,654.77" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-34" onclick="abrir_lote('34','modal-terms','lote4.php');" data-toggle="modal1" data-target="#modal-terms" data-whatever="34" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 34 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1024.44,725.21 1024.93,656.85 1183.62,654.90 1182.64,724.23" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-35" onclick="abrir_lote('35','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="35" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 35 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1023.95,795.52 1025.41,725.70 1183.13,724.72 1182.15,796.01" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-36" onclick="abrir_lote('36','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="36" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 36 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1025.02,864.11 1024.53,795.26 1182.74,795.26 1181.76,864.11" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-37" onclick="abrir_lote('37','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="37" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 37 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1025.53,934.45 1024.06,863.65 1181.78,864.14 1183.24,933.96" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-38" onclick="abrir_lote('38','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="38" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 38 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1025.48,1003.37 1024.50,933.06 1183.19,933.55 1184.17,1004.84" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-39" onclick="abrir_lote('39','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="39" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 39 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1024.99,1073.69 1024.99,1003.38 1182.70,1002.88 1183.19,1073.69" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="Lote-40" onclick="abrir_lote('40','modal-terms','lote4.php');" data-toggle="modal" data-target="#modal-terms" data-whatever="40" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Finca- 40 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>11 x 24.86 mts. <br>Superficie:<br/>273.44m2</strong></p>" points="1023.59,1143.76 1025.05,1073.45 1183.74,1072.96 1181.30,1144.74" transform="translate(0,0) scale(1,1)"></polygon>

</g> 


</div>

<!--<div class="col-md-6">

<img src="img/lotes.png" style="width:100%; height:auto"/>
</div>-->


</div>

<!--</div>

<script>$(function () {
 $('[data-toggle="popover"]').popover();
  $('[data-toggle2="tooltip"]').tooltip({html:true});
 
})</script>
<script>$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
  //modal.find('.modal-body input').val(recipient)
  modal.find('.modal-body #titulocasa').text(recipient)
  modal.find('.modal-body #txtnumerocasa').val(recipient)
})</script>
-->


<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms-label" aria-hidden="true">
    <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h2 class="modal-title" id="modal-terms-label">LOTES DE INVERSIÓN</h2>
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