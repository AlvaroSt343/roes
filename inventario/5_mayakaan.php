
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Maya Kaan | Lotes de Inversión </title>

<!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css"> 

<script>
function abrir_lote(id){
    $('.modal-body').load('lote5.php?id='+id,function(){
        $('#myModal').modal({show:true});
    });
}
</script>

</head>
<body style="background-color:#fff" >

<div class="container">

  
 

<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
-->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotizador MayaKaan:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form action="" method="post" class="contact-form">
                    <div class="row">
                    <div class="form-group col-md-12 col-sm-12">
                    <label>El numero de lote a cotizar es: <strong><span id="titulocasa" ></span></strong></label>

                    <input type="hidden" class="form-control" id="txtnumerocasa" name="txtnumerocasa">
                               </div>
                      <div class="form-group col-md-12 col-sm-12">
                        <input class="form-control" placeholder="Tu Nombre*" required="" type="text" name="name">
                      </div>
                      <div class="form-group col-md-12 col-sm-12">
                        <input class="form-control" placeholder="Tu Correo Electrónico*" required="" type="email" name="email">
                      </div>
                    
                      <div class="form-group col-md-12 col-sm-12">
                      <select id="estado" name="estado" title="Estado" class="form-control" required>
                        <option value="">--Seleccione su Estado donde vive--</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                          <option value="Baja California">Baja California</option>
                          <option value="Baja California Sur">Baja California Sur</option>
                          <option value="Campeche">Campeche</option>
                          <option value="Chiapas">Chiapas</option>
                          <option value="Chihuahua">Chihuahua</option>
                          <option value="CDMX">Ciudad de México</option>
                          <option value="Coahuila">Coahuila</option>
                          <option value="Colima">Colima</option>
                          <option value="Durango">Durango</option>
                          <option value="Estado de México">Estado de México</option>
                          <option value="Guanajuato">Guanajuato</option>
                          <option value="Guerrero">Guerrero</option>
                          <option value="Hidalgo">Hidalgo</option>
                          <option value="Jalisco">Jalisco</option>
                          <option value="Michoacán">Michoacán</option>
                          <option value="Morelos">Morelos</option>
                          <option value="Nayarit">Nayarit</option>
                          <option value="Nuevo León">Nuevo León</option>
                          <option value="Oaxaca">Oaxaca</option>
                          <option value="Puebla">Puebla</option>
                          <option value="Querétaro">Querétaro</option>
                          <option value="Quintana Roo">Quintana Roo</option>
                          <option value="San Luis Potosí">San Luis Potosí</option>
                          <option value="Sinaloa">Sinaloa</option>
                          <option value="Sonora">Sonora</option>
                          <option value="Tabasco">Tabasco</option>
                          <option value="Tamaulipas">Tamaulipas</option>
                          <option value="Tlaxcala">Tlaxcala</option>
                          <option value="Veracruz">Veracruz</option>
                          <option value="Yucatán">Yucatán</option>
                          <option value="Zacatecas">Zacatecas</option>
                      </select>                    
                      </div>
                     
                      <div class="form-group col-md-12 col-sm-12">
                      <select id="fuente" name="fuente" title="fuente" class="form-control" required>
                        <option value="">--Cómo se enteró de este desarrollo--</option>
                        <option value="Facebook">Facebook</option>
                          <option value="Instagram">Instagram</option>
                          <option value="Google">Google</option>
                          <option value="Publicidad Impresa">Publicidad Impresa</option>
                          <option value="Agente Inmobiliario">Agente Inmobiliario</option>
                          <option value="Otro">Otro</option>


                         
                      </select>
                      </div>
                      <div class="form-group col-md-12 col-sm-12">No Celular (10 Dígitos)
                        <input class="form-control" placeholder="Tu Número de Celular*" required="" type="text" name="phone">
                      </div>
                     
                      <div class="form-group col-md-12 col-sm-12">
                        <textarea placeholder="Tu mensaje*" class="form-control" rows="8" required="" name="message"></textarea>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="action-submit text-center">
                        <input class="form-control" required="" type="hidden" name="iddesarrollo" value="2">
                        <input class="form-control" required="" type="hidden" name="agente" value="Desarrollos Masaryk">

                          <input class="btn" value="Enviar Mensaje" type="submit">
                        </div>
                      </div>
                    </div>
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="row" style="margin-right: -8%;
    margin-left: -8%;">
<div class="col-md-12 col-xs-6">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="auto" viewBox="0 0 2386 1162" xml:space="preserve" class="production">
<style>
#items &gt; * {transition: fill 0.2s, fill-opacity 0.2s, stroke 0.2s, stroke-opacity 0.2s;cursor: pointer;}
body {margin:0;padding:0;}
/**/ 
    
#items &gt; #LOTE-32{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-32:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-32.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-33{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-33:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-33.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-34{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-34:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-34.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-35{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-35:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-35.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-36{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-36:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-36.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-37{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-37:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-37.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-38{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-38:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-38.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-39{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-39:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-39.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-40{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-40:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-40.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-41{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-41:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-41.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-42{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-42:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-42.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-43{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-43:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-43.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-44{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-44:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-44.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-45{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-45:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-45.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-46{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-46:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-46.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-47{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-47:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-47.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-48{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-48:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-48.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-49{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-49:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-49.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-50{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-50:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-50.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-51{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-51:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-51.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-52{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-52:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-52.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-53{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-53:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-53.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-54{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-54:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-54.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-55{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-55:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-55.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-56{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-56:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-56.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-57{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-57:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-57.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-58{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-58:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-58.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-59{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-59:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-59.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-60{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-60:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-60.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-61{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-61:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-61.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-62{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-62:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-62.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-63{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-63:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-63.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-64{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-64:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-64.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-65{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-65:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-65.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-66{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-66:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-66.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-67{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-67:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-67.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-88{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-88:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-88.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-89{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-89:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-89.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-90{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-90:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-90.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-91{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-91:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-91.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-92{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-92:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-92.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-93{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-93:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-93.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-94{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-94:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-94.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-95{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-95:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-95.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-96{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-96:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-96.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-97{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-97:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-97.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-98{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-98:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-98.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-99{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-99:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-99.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-100{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-100:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-100.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-101{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-101:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-101.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-102{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-102:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-102.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-103{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-103:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-103.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-104{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-104:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-104.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-105{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-105:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-105.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-106{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-106:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-106.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-107{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-107:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-107.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-108{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-108:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-108.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-109{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-109:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-109.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-110{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-110:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-110.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-111{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-111:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-111.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-112{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-112:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-112.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-113{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-113:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-113.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-114{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-114:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-114.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-115{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-115:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-115.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-116{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-116:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-116.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-117{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-117:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-117.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-118{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-118:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-118.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-119{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-119:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-119.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-120{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-120:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-120.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-121{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-121:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-121.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-122{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-122:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-122.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-123{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-123:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-123.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-124{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-124:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-124.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-125{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-125:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-125.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-126{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-126:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-126.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-127{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-127:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-127.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-128{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-128:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-128.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-129{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-129:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-129.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-130{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-130:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-130.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-131{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-131:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-131.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-132{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-132:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-132.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-133{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-133:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-133.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-134{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-134:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-134.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-138{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-138:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-138.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-139{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-139:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-139.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-140{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-140:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-140.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-141{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-141:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-141.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-142{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-142:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-142.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-143{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-143:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-143.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-144{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-144:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-144.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-145{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-145:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-145.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-146{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-146:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-146.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-147{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-147:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-147.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-148{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-148:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-148.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-149{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-149:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-149.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-150{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-150:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-150.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-151{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-151:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-151.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-152{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-152:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-152.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-153{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-153:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-153.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-154{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-154:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-154.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-155{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-155:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-155.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-156{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-156:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-156.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-157{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-157:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-157.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-158{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-158:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-158.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-159{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-159:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-159.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-163{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-163:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-163.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-164{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-164:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-164.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-165{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-165:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-165.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-166{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-166:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-166.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-167{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-167:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-167.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-168{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-168:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-168.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-169{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-169:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-169.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-170{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-170:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-170.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-171{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-171:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-171.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-172{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-172:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-172.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-173{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-173:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-173.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-174{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-174:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-174.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-175{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-175:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-175.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-176{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-176:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-176.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-177{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-177:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-177.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-178{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-178:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-178.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-179{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-179:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-179.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-180{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-180:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-180.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-181{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-181:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-181.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-182{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-182:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-182.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-183{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-183:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-183.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-184{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-184:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-184.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-185{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-185:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-185.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-186{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-186:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-186.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-187{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-187:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-187.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-188{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-188:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-188.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-189{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-189:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-189.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-190{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-190:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-190.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-191{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-191:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-191.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-192{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-192:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-192.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-193{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-193:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-193.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-194{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-194:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-194.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-195{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-195:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-195.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-196{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-196:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-196.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-197{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-197:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-197.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-198{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-198:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-198.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-199{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-199:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-199.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-200{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-200:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-200.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-201{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-201:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-201.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-202{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-202:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-202.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-203{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-203:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-203.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-204{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-204:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-204.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-205{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-205:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-205.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-206{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-206:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-206.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-207{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-207:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-207.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-208{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-208:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-208.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-209{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-209:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-209.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-210{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-210:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-210.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-211{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-211:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-211.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-212{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-212:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-212.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-213{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-213:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-213.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-214{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-214:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-214.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-215{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-215:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-215.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-216{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-216:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-216.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-217{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-217:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-217.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-218{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-218:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-218.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-219{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-219:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-219.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-220{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-220:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-220.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-221{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-221:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-221.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-222{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-222:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-222.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-223{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-223:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-223.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-292{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-292:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-292.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-293{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-293:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-293.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-294{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-294:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-294.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-295{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-295:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-295.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-296{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-296:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-296.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-297{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-297:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-297.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-298{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-298:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-298.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-302{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-302:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-302.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-303{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-303:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-303.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-304{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-304:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-304.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-305{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-305:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-305.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-306{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-306:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-306.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-307{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-307:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-307.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-308{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-308:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-308.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-309{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-309:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-309.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-310{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-310:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-310.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-311{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-311:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-311.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-312{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-312:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-312.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-313{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-313:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-313.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-314{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-314:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-314.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-315{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-315:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-315.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-316{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-316:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-316.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-317{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-317:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-317.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-321{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-321:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-321.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-322{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-322:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-322.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-323{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-323:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-323.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-324{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-324:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-324.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-325{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-325:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-325.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-326{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-326:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-326.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-327{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-327:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-327.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-328{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-328:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-328.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-329{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-329:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-329.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-330{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-330:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-330.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-331{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-331:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-331.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-332{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-332:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-332.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-333{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-333:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-333.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-334{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-334:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-334.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-335{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-335:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-335.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-336{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-336:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-336.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-337{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-337:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-337.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-338{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-338:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-338.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-342{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-342:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-342.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-343{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-343:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-343.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-344{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-344:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-344.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-345{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-345:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-345.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-346{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-346:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-346.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-347{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-347:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-347.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-348{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-348:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-348.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-349{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-349:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-349.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-350{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-350:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-350.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-351{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-351:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-351.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-352{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-352:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-352.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-353{fill:#ff0000;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-353:hover{fill:#ff0000;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-353.active{fill:#ff0000;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-354{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-354:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-354.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-355{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-355:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-355.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-356{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-356:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-356.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-357{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-357:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-357.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-358{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-358:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-358.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-359{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-359:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-359.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-360{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-360:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-360.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-361{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-361:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-361.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-362{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-362:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-362.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-363{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-363:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-363.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-367{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-367:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-367.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-368{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-368:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-368.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-369{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-369:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-369.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-370{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-370:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-370.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-371{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-371:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-371.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-372{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-372:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-372.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-373{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-373:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-373.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-374{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-374:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-374.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-375{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-375:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-375.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-376{fill:#06d79d;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-376:hover{fill:#f5d416;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-376.active{fill:#06d79d;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-377{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-377:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-377.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

    
#items &gt; #LOTE-378{fill:#ff8e14;fill-opacity:0.53;stroke:none;stroke-opacity:0.50}
#items &gt; #LOTE-378:hover{fill:#ff8e14;fill-opacity:0.65;stroke:none;stroke-opacity:0.5}
#items &gt; #LOTE-378.active{fill:#ff8e14;fill-opacity:0.6;stroke:none;stroke-opacity:0.75}

</style>


<image overflow="visible" width="2386" height="1162" xlink:href="images/MayaKaan.png"></image>
<g id="items" class="">
<polygon id="LOTE-32" onclick="abrir_lote('32','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="32" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 32 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>506.72m2</strong></p>" points="50.78,197.72 115.06,201.29 121.49,73.02 66.28,55.37 59.14,124.11" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-33" onclick="abrir_lote('33','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="33" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 33 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>356.53m2</strong></p>" points="163.59,202.67 167.16,83.94 123.42,73.22 116.28,199.10" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-34" onclick="abrir_lote('34','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="34" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 34 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>350.58m2</strong></p>" points="214.48,202.67 217.16,99.11 168.95,84.83 163.59,201.78" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-35" onclick="abrir_lote('35','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="35" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 35 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>355.32m2</strong></p>" points="272.51,202.67 276.97,114.29 218.94,100.01 214.48,202.67" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-36" onclick="abrir_lote('36','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="36" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 36 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>355.49m2</strong></p>" points="343.93,205.35 348.39,132.14 278.76,116.07 274.29,204.46" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-37"  onclick="abrir_lote('37','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="37" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 37 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>352.58m2</strong></p>" points="432.31,208.03 437.67,149.11 348.39,134.82 343.93,205.35" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-38" onclick="abrir_lote('38','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="38" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 38 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>352.06m2</strong></p>" points="537.66,211.60 541.23,158.93 503.73,162.50 437.67,151.79 433.20,208.03" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-39" onclick="abrir_lote('39','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="39" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 39 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>350.82m2</strong></p>" points="633.18,214.28 639.43,147.32 584.08,156.25 544.80,159.82 540.33,212.49" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-40" onclick="abrir_lote('40','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="40" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 40 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>364.75m2</strong></p>" points="759.64,219.17 812.71,220.66 822.88,105.59 787.91,113.78 762.62,122.70" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-41" onclick="abrir_lote('41','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="41" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 41 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>354.64m2</strong></p>" points="862.31,220.91 871.24,94.43 820.65,107.09 815.44,220.16" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-42" onclick="abrir_lote('42','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="42" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 42 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>355.86m2</strong></p>" points="908.43,223.88 915.87,88.48 871.24,94.43 862.31,222.40" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-43" onclick="abrir_lote('43','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="43" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 43 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>355.74m2</strong></p>" points="951.98,224.37 958.80,85.50 915.40,88.60 909.20,224.99" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-44" onclick="abrir_lote('44','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="44" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 44 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>351.42m2</strong></p>" points="992.27,225.61 999.71,83.64 960.66,84.88 953.84,225.61" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-45" onclick="abrir_lote('45','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="45" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 45 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>353.83m2</strong></p>" points="1034.05,226.81 1041.29,86.29 1021.14,83.19 1000.47,83.71 993.24,226.30" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-46" onclick="abrir_lote('46','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="46" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 46 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>347.77m2</strong></p>" points="1074.87,227.33 1081.58,91.46 1041.80,84.74 1034.05,227.33" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-47" onclick="abrir_lote('47','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="47" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 47 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>354.31m2</strong></p>" points="1118.27,229.40 1122.40,100.24 1081.58,90.42 1074.35,227.85" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-48" onclick="abrir_lote('48','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="48" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 48 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>349.63m2</strong></p>" points="1162.70,230.95 1166.83,108.50 1123.95,100.24 1118.27,230.43" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-49" onclick="abrir_lote('49','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="49" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 49 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>346.88m2</strong></p>" points="1210.86,232.36 1216.89,119.56 1167.81,108.36 1162.21,231.07" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-50"  onclick="abrir_lote('50','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="50" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 50 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>347.17m2</strong></p>" points="1266.83,233.65 1270.27,131.18 1217.32,120.42 1211.29,231.93" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-51"  onclick="abrir_lote('51','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="51" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 51 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>352.4m2</strong></p>" points="1331.40,235.94 1333.99,147.08 1271.79,132.64 1267.35,234.82" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-52" onclick="abrir_lote('52','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="52" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 52 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>302.66m2</strong></p>" points="1399.15,238.16 1402.86,164.11 1335.47,147.82 1332.51,235.57" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-53" onclick="abrir_lote('53','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="53" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 53 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>302.66m2</strong></p>" points="1480.61,239.27 1483.20,183.36 1403.97,163.37 1400.27,238.16" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-54"  onclick="abrir_lote('54','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="54" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 54 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>354.15m2</strong></p>" points="1693.12,242.75 1696.22,170.84 1623.69,183.85 1606.95,183.85 1603.23,242.13" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-55" onclick="abrir_lote('55','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="55" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 55 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>353m2</strong></p>" points="1763.18,245.85 1770.00,156.58 1696.22,170.84 1694.98,243.37" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-56" onclick="abrir_lote('56','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="56" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 56 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>348.49m2</strong></p>" points="1823.71,247.87 1828.02,143.68 1769.47,154.87 1765.59,245.29" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-57" onclick="abrir_lote('57','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="57" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 57 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>356.39m2</strong></p>" points="1876.67,249.73 1882.00,133.26 1829.93,143.80 1824.35,247.34" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-58" onclick="abrir_lote('58','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="58" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 58 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>350.22m2</strong></p>" points="1921.68,249.20 1930.36,124.58 1883.24,132.64 1877.66,249.20" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-59" onclick="abrir_lote('59','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="59" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 59 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>360.95m2</strong></p>" points="1967.65,250.00 1975.92,118.26 1930.45,124.46 1923.22,250.00" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-60" onclick="abrir_lote('60','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="60" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 60 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>344.07m2</strong></p>" points="2008.98,252.58 2015.70,112.57 1975.40,117.74 1968.68,251.55" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-61" onclick="abrir_lote('61','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="61" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 61 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>352.09m2</strong></p>" points="2049.28,253.62 2057.03,111.54 2017.25,113.09 2010.02,253.62" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-62" onclick="abrir_lote('62','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="62" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 62 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>350.57m2</strong></p>" points="2091.64,254.65 2097.33,114.12 2057.55,109.47 2050.83,253.10" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-63" onclick="abrir_lote('63','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="63" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 63 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>359.38m2</strong></p>" points="2134.52,255.68 2140.21,120.84 2097.84,114.12 2090.61,254.13" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-64"  onclick="abrir_lote('64','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="64" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 64 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>354.86m2</strong></p>" points="2178.15,257.82 2185.08,133.06 2140.82,122.40 2131.76,255.15" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-65" onclick="abrir_lote('65','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="65" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 65 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>357.46m2</strong></p>" points="2227.73,258.88 2232.53,146.92 2185.08,132.53 2178.68,257.82" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-66" onclick="abrir_lote('66','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="66" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 66 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>361.26m2</strong></p>" points="2283.18,259.42 2289.04,165.58 2233.59,147.99 2228.26,258.88" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-67"  onclick="abrir_lote('67','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="67" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 67 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>467.58m2</strong></p>" points="2381.28,261.55 2384.48,204.50 2315.70,175.71 2288.51,165.58 2284.78,260.48" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-88"  onclick="abrir_lote('88','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="88" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 88 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.77m2</strong></p>" points="77.40,444.77 89.90,243.91 51.51,242.12 42.58,447.46" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-89" onclick="abrir_lote('89','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="89" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 89 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="111.33,445.67 125.61,245.69 90.79,243.91 79.18,445.67" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-90" onclick="abrir_lote('90','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="90" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 90 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="143.46,449.24 156.86,246.58 123.82,242.12 111.32,446.56" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-91" onclick="abrir_lote('91','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="91" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 91 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="180.07,448.35 193.46,247.48 157.75,246.58 145.25,445.67" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-92" onclick="abrir_lote('92','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="92" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 92 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="213.99,449.24 224.70,249.26 192.56,247.48 180.96,448.35" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-93" onclick="abrir_lote('93','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="93" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 93 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="247.92,450.13 256.84,249.26 226.49,249.26 214.00,450.13" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-94" onclick="abrir_lote('94','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="94" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 94 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="280.95,449.24 292.55,251.05 258.63,250.16 248.81,450.13" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-95" onclick="abrir_lote('95','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="95" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 95 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="314.87,451.02 326.48,250.16 293.44,250.16 281.84,451.02" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-96" onclick="abrir_lote('96','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="96" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 96 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="348.80,453.70 359.51,253.73 328.26,252.83 315.77,452.81" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-97" onclick="abrir_lote('97','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="97" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 97 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="381.83,452.81 395.22,255.51 360.40,253.73 349.69,452.81" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-98" onclick="abrir_lote('98','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="98" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 98 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="417.54,454.60 428.25,253.73 395.22,252.83 381.83,452.81" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-99" onclick="abrir_lote('99','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="99" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 99 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="449.68,454.60 463.96,256.40 429.14,252.83 418.43,452.81" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-100" onclick="abrir_lote('100','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="100" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 100 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="485.32,456.45 496.17,257.02 465.17,257.02 451.74,455.93" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-101" onclick="abrir_lote('101','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="101" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 101 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="517.87,456.45 530.27,258.06 495.65,257.02 485.32,455.93" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-102" onclick="abrir_lote('102','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="102" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 102 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="551.96,458.51 563.33,259.09 530.27,259.09 518.38,458.00" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-103" onclick="abrir_lote('103','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="103" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 103 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="586.58,459.03 596.91,260.64 563.85,259.09 551.96,457.48" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-104" onclick="abrir_lote('104','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="104" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 104 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="620.68,458.00 632.56,261.67 597.43,261.16 587.10,458.00" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-105" onclick="abrir_lote('105','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="105" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 105 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="656.33,460.06 667.18,263.22 632.56,261.16 621.71,459.55" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-106" onclick="abrir_lote('106','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="106" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 106 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="643.04,666.08 654.67,461.58 621.52,459.00 608.60,666.08" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-107" onclick="abrir_lote('107','modal-terms');" data-toggle="modal" data-target="#modal-terms"" data-whatever="107" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 107 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="575.02,663.93 586.21,459.00 620.65,459.00 608.60,664.79" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-108" onclick="abrir_lote('108','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="108" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 108 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="540.14,663.07 552.20,459.00 587.93,459.00 574.16,664.79" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-109"  onclick="abrir_lote('109','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="109" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 109 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="506.98,662.25 518.60,457.75 552.18,458.18 540.13,663.55" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-110" onclick="abrir_lote('110','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="110" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 110 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="474.26,660.96 484.59,456.89 518.60,457.75 507.84,661.82" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-111" onclick="abrir_lote('111','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="111" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 111 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="436.80,658.81 451.01,456.03 483.73,456.89 472.97,662.25" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-112" onclick="abrir_lote('112','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="112" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 112 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="405.37,658.38 417.43,455.17 451.44,454.74 436.37,660.53" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-113" onclick="abrir_lote('113','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="113" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 113 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="369.73,656.21 383.12,454.59 417.34,454.59 405.44,658.44" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-114" onclick="abrir_lote('114','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="114" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 114 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="336.99,656.95 348.90,453.11 383.12,454.59 369.73,656.95" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-115" onclick="abrir_lote('115','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="115" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 115 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="304.26,654.72 316.16,454.59 350.38,455.34 334.76,656.20" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-116" onclick="abrir_lote('116','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="116" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 116 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="268.55,656.21 280.45,453.11 314.67,452.36 304.26,655.46" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-117" onclick="abrir_lote('117','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="117" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 117 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="236.02,653.97 247.18,451.61 280.66,451.61 268.76,653.97" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-118" onclick="abrir_lote('118','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="118" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 118 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="202.54,652.48 212.96,450.12 247.93,452.36 236.02,653.22" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-119" onclick="abrir_lote('119','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="119" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 119 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="168.32,650.25 179.48,449.38 212.22,450.12 201.05,653.97" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-120" onclick="abrir_lote('120','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="120" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 120 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="133.36,650.25 144.52,451.61 179.48,450.12 167.58,653.96" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-121" onclick="abrir_lote('121','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="121" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 121 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="100.62,648.76 111.04,448.64 143.77,450.13 132.61,649.51" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-122" onclick="abrir_lote('122','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="122" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 122 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="65.66,649.50 78.30,447.15 112.52,447.89 100.62,650.99" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-123" onclick="abrir_lote('123','modal-terms');" data-toggle="modal" data-target="#modal-terms"
 data-whatever="123" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 123 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.78m2</strong></p>" points="30.69,646.53 43.34,445.66 76.07,447.89 64.91,648.02" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-124" onclick="abrir_lote('124','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="124" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 124 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>376.06m2</strong></p>" points="727.21,462.47 736.13,262.49 704.89,261.60 695.96,460.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-125" onclick="abrir_lote('125','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="125" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 125 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="759.35,463.36 769.17,264.27 737.03,263.38 727.21,460.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-126" onclick="abrir_lote('126','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="126" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 126 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="793.27,464.25 803.98,265.17 770.06,264.27 761.13,462.47" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-127" onclick="abrir_lote('127','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="127" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 127 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="826.30,464.25 833.44,266.95 805.77,265.17 793.27,465.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-128" onclick="abrir_lote('128','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="128" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 128 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="858.44,466.93 868.26,266.95 837.01,265.17 826.30,465.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-129" onclick="abrir_lote('129','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="129" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 129 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="889.69,468.71 901.29,269.63 869.15,267.85 859.33,466.04" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-130" onclick="abrir_lote('130','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="130" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 130 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="920.93,468.71 935.22,267.85 901.29,269.63 890.58,467.82" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-131" onclick="abrir_lote('131','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="131" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 131 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="953.96,470.50 965.57,267.85 937.00,268.74 921.83,469.61" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-132" onclick="abrir_lote('132','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="132" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 132 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="986.10,469.61 998.60,270.52 968.25,270.52 955.75,470.50" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-133" onclick="abrir_lote('133','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="133" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 133 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1020.03,471.39 1032.53,272.31 1000.39,271.42 988.78,471.39" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-134" onclick="abrir_lote('134','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="134" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 134 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1053.06,473.18 1064.67,274.10 1032.53,270.52 1021.81,468.71" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-138" onclick="abrir_lote('138','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="138" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 138 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1184.29,473.18 1195.01,277.67 1161.98,272.31 1153.05,473.18" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-139" onclick="abrir_lote('139','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="139" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 139 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1215.68,475.94 1228.33,276.56 1196.34,275.82 1185.18,474.46" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-140" onclick="abrir_lote('140','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="140" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 140 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1249.16,475.20 1261.06,279.54 1228.33,277.31 1216.43,475.94" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-141" onclick="abrir_lote('141','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="141" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 141 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1282.64,477.43 1293.80,281.03 1262.55,277.30 1251.39,476.69" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-142" onclick="abrir_lote('142','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="142" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 142 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1316.12,480.41 1326.53,279.54 1294.54,278.05 1281.89,477.43" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-143" onclick="abrir_lote('143','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="143" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 143 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1347.36,480.41 1360.75,278.05 1327.28,278.05 1315.37,478.18" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-144" onclick="abrir_lote('144','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="144" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 144 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1379.35,481.15 1391.26,281.03 1359.27,280.28 1347.36,481.90" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-145" onclick="abrir_lote('145','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="145" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 145 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1413.58,482.64 1423.25,283.26 1391.26,280.28 1380.10,480.41" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-146" onclick="abrir_lote('146','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="146" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 146 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1445.57,484.13 1455.24,282.52 1426.22,283.26 1415.06,481.90" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-147" onclick="abrir_lote('147','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="147" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 147 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1478.30,485.62 1489.46,284.00 1455.98,282.52 1444.82,483.38" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-148" onclick="abrir_lote('148','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="148" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 148 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1511.03,481.90 1522.94,283.26 1490.20,284.00 1479.04,483.38" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-149" onclick="abrir_lote('149','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="149" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 149 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1501.59,689.24 1468.12,688.00 1479.90,486.51 1512.75,487.75" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-150" onclick="abrir_lote('150','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="150" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 150 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1436.50,686.14 1447.66,485.27 1479.28,485.27 1466.26,691.10" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-151" onclick="abrir_lote('151','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="151" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 151 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1400.54,686.76 1413.56,485.27 1445.18,484.03 1435.26,686.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-152" onclick="abrir_lote('152','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="152" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 152 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1370.16,685.52 1381.94,483.41 1413.56,484.03 1401.16,687.38" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-153" onclick="abrir_lote('153','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="153" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 153 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1336.68,684.28 1347.22,482.79 1381.32,482.79 1370.78,685.52" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-154" onclick="abrir_lote('154','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="154" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 154 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1304.44,684.28 1316.84,481.55 1346.60,481.55 1337.30,685.52" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-155" onclick="abrir_lote('155','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="155" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 155 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1272.21,681.18 1282.75,480.93 1316.84,480.93 1303.20,683.66" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-156" onclick="abrir_lote('156','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="156" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 156 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1240.59,680.56 1249.89,479.07 1282.13,479.07 1270.97,682.42" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-157" onclick="abrir_lote('157','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="157" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 157 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1204.01,681.18 1217.03,479.69 1249.89,478.45 1239.97,681.80" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-158" onclick="abrir_lote('158','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="158" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 158 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1174.87,679.94 1185.41,475.97 1215.17,477.83 1205.25,679.32" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-159" onclick="abrir_lote('159','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="159" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 159 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1140.77,678.70 1151.93,475.35 1184.79,475.97 1174.87,679.94" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-163" onclick="abrir_lote('163','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="163" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 163 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1011.28,674.81 1023.18,473.94 1052.19,473.94 1042.52,676.30" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-164" onclick="abrir_lote('164','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="164" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 164 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="978.54,673.32 987.47,471.71 1020.95,473.94 1011.28,674.81" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-165" onclick="abrir_lote('165','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="165" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 165 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="946.55,674.07 956.22,473.94 987.47,474.69 976.31,674.07" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-166" onclick="abrir_lote('166','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="166" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 166 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="914.56,671.09 922.00,470.97 954.74,471.71 945.06,673.32" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-167" onclick="abrir_lote('167','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="167" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 167 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="881.83,670.35 891.50,468.74 922.00,471.71 911.59,671.83" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-168" onclick="abrir_lote('168','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="168" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 168 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="846.86,668.12 859.51,467.99 889.27,470.22 878.11,671.84" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-169" onclick="abrir_lote('169','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="169" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 169 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="814.87,668.12 826.78,467.25 858.77,468.74 847.61,670.35" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-170" onclick="abrir_lote('170','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="170" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 170 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="782.14,667.37 796.27,467.25 826.78,467.25 815.61,668.86" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-171" onclick="abrir_lote('171','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="171" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 171 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="749.40,667.37 758.33,464.27 792.55,465.02 782.14,667.37" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-172" onclick="abrir_lote('172','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="172" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 172 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="716.67,665.14 725.60,463.53 759.08,464.27 749.40,666.63" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-173" onclick="abrir_lote('173','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="173" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 173 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>376.06m2</strong></p>" points="686.17,665.88 698.07,464.27 725.60,464.27 716.67,667.37" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-174" onclick="abrir_lote('174','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="174" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 174 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>376.06m2</strong></p>" points="1583.86,484.73 1594.27,285.34 1561.54,284.60 1551.12,484.73" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-175" onclick="abrir_lote('175','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="175" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 175 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1618.08,487.70 1627.75,287.58 1595.02,285.34 1586.09,486.21" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-176" onclick="abrir_lote('176','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="176" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 176 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1649.32,488.45 1661.23,288.32 1627.75,286.83 1616.59,487.70" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-177" onclick="abrir_lote('177','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="177" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 177 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1684.64,489.59 1694.54,287.68 1661.39,288.54 1650.20,487.87" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-178" onclick="abrir_lote('178','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="178" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 178 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1716.93,490.03 1726.83,289.40 1693.68,288.97 1681.63,489.16" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-179" onclick="abrir_lote('179','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="179" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 179 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1747.93,491.32 1759.98,291.55 1727.69,289.83 1716.93,489.16" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-180" onclick="abrir_lote('180','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="180" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 180 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1779.80,491.99 1791.16,291.02 1759.65,290.50 1748.28,491.47" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-181" onclick="abrir_lote('181','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="181" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 181 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1813.89,492.51 1823.71,291.02 1791.16,291.02 1781.86,490.96" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-182" onclick="abrir_lote('182','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="182" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 182 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1845.93,493.54 1856.26,293.60 1824.23,293.08 1815.44,490.96" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-183" onclick="abrir_lote('183','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="183" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 183 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1878.99,495.09 1889.32,295.15 1856.77,292.05 1845.93,493.02" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-184" onclick="abrir_lote('184','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="184" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 184 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1909.99,495.61 1921.87,294.63 1891.39,294.63 1878.99,493.54" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-185" onclick="abrir_lote('185','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="185" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 185 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1943.86,495.21 1954.19,295.27 1921.13,294.76 1909.76,495.21" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-186" onclick="abrir_lote('186','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="186" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 186 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1976.41,496.25 1988.29,297.34 1954.19,295.27 1943.86,495.73" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-187" onclick="abrir_lote('187','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="187" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 187 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2008.95,497.28 2019.80,297.86 1987.77,295.79 1977.96,497.28" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-188" onclick="abrir_lote('188','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="188" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 188 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2042.02,497.80 2052.35,298.89 2021.35,297.34 2008.95,497.28" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-189" onclick="abrir_lote('189','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="189" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 189 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2073.53,498.31 2084.90,298.89 2052.35,298.89 2042.02,497.28" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-190" onclick="abrir_lote('190','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="190" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 190 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2107.94,501.38 2117.24,300.51 2084.38,298.65 2073.22,500.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-191" onclick="abrir_lote('191','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="191" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 191 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2138.94,501.38 2150.10,302.37 2119.10,300.51 2109.18,500.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-192" onclick="abrir_lote('192','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="192" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 192 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2171.79,502.62 2184.19,301.13 2151.96,301.75 2140.18,502.00" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-193" onclick="abrir_lote('193','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="193" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 193 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2206.51,503.86 2216.43,304.23 2184.19,301.75 2174.27,502.00" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-194" onclick="abrir_lote('194','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="194" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 194 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2236.89,504.48 2249.29,304.23 2217.05,301.75 2206.51,500.76" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-195" onclick="abrir_lote('195','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="195" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 195 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2270.99,504.48 2282.15,305.47 2248.05,305.47 2237.51,501.38" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-196" onclick="abrir_lote('196','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="196" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 196 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2303.23,505.10 2314.39,305.47 2283.39,305.47 2271.61,505.72" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-197" onclick="abrir_lote('197','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="197" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 197 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2334.02,506.49 2345.18,305.62 2312.32,304.38 2303.02,505.25" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-198" onclick="abrir_lote('198','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="198" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 198 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2366.88,506.49 2377.42,306.24 2347.66,306.24 2336.50,507.73" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-199" onclick="abrir_lote('199','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="199" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 199 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2324.67,712.47 2356.19,712.47 2366.52,509.43 2335.52,508.92" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-200" onclick="abrir_lote('200','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="200" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 200 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2292.12,709.37 2302.97,507.37 2335.52,507.88 2324.16,711.44" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-201" onclick="abrir_lote('201','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="201" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 201 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2259.58,708.85 2271.46,506.34 2302.46,507.88 2292.13,709.89" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-202" onclick="abrir_lote('202','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="202" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 202 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2228.06,709.89 2238.39,505.82 2272.49,504.27 2260.09,709.37" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-203" onclick="abrir_lote('203','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="203" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 203 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2194.48,707.82 2205.33,505.30 2238.39,504.27 2228.06,707.82" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-204" onclick="abrir_lote('204','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="204" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 204 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2162.96,706.27 2172.78,501.69 2204.81,503.75 2195.00,708.34" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-205" onclick="abrir_lote('205','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="205" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 205 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2128.35,705.76 2140.23,503.24 2173.81,502.20 2161.93,705.76" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-206" onclick="abrir_lote('206','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="206" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 206 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2097.35,704.72 2107.68,502.72 2140.23,501.69 2128.87,705.24" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-207" onclick="abrir_lote('207','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="207" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 207 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2064.29,704.21 2073.59,500.65 2109.23,502.20 2095.80,705.75 2095.80,703.69" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-208" onclick="abrir_lote('208','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="208" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 208 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2030.19,701.62 2042.07,501.17 2074.62,499.62 2061.70,705.75" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-209" onclick="abrir_lote('209','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="209" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 209 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1997.71,700.88 2010.11,498.78 2040.49,500.02 2029.95,702.12" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-210" onclick="abrir_lote('210','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="210" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 210 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1968.57,700.88 1978.49,497.54 2008.87,498.16 1997.71,700.26" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-211" onclick="abrir_lote('211','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="211" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 211 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1933.24,699.64 1944.39,497.54 1977.87,497.54 1968.57,702.12" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-212" onclick="abrir_lote('212','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="212" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 212 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1901.62,698.40 1910.92,496.30 1946.25,497.54 1933.24,699.64" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-213" onclick="abrir_lote('213','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="213" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 213 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1866.28,698.40 1879.92,496.30 1910.92,496.92 1902.24,699.64" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-214" onclick="abrir_lote('214','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="214" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 214 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1835.90,695.92 1845.82,495.06 1877.44,497.54 1868.14,697.16" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-215" onclick="abrir_lote('215','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="215" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 215 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1804.28,695.92 1813.58,495.06 1844.58,493.20 1835.28,695.92" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-216" onclick="abrir_lote('216','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="216" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 216 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1769.56,693.44 1780.72,493.20 1812.34,493.20 1802.42,696.54" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-217" onclick="abrir_lote('217','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="217" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 217  </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1738.57,692.20 1749.11,490.72 1781.96,492.58 1767.70,693.44" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-218" onclick="abrir_lote('218','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="218" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 218 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1704.47,692.82 1715.01,490.72 1748.49,490.10 1736.71,694.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-219" onclick="abrir_lote('219','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="219" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 219 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1672.85,692.20 1683.39,490.72 1715.63,490.10 1704.47,692.82" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-220" onclick="abrir_lote('220','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="220" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 220 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1638.13,689.72 1650.53,488.86 1682.77,490.10 1670.99,693.44" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-221" onclick="abrir_lote('221','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="221" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 221 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1608.37,689.72 1617.05,487.62 1648.67,488.86 1637.51,690.96" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-222" onclick="abrir_lote('222','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="222" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 222 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1573.04,690.34 1584.81,487.62 1615.81,488.24 1607.13,692.20" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-223" onclick="abrir_lote('223','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="223" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 223 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>376.06m2</strong></p>" points="1542.66,689.10 1553.20,485.14 1585.43,486.38 1571.18,688.48" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-292" onclick="abrir_lote('292','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="292" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 292 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.77m2</strong></p>" points="62.57,690.80 51.85,892.56 17.04,889.88 29.53,691.69" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-293" onclick="abrir_lote('293','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="293" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 293 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="84.89,893.45 98.28,693.47 64.35,693.47 51.85,893.45" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-294" onclick="abrir_lote('294','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="294" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 294 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="117.02,893.45 130.42,695.26 98.28,694.37 84.89,896.13" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-295" onclick="abrir_lote('295','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="295" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 295 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="153.63,897.02 165.23,695.26 130.42,693.47 118.81,894.34" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-296" onclick="abrir_lote('296','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="296" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 296 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="186.66,896.13 197.37,697.05 167.02,695.26 152.73,894.34" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-297" onclick="abrir_lote('297','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="297" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 297 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="220.58,897.91 231.30,697.94 199.16,697.94 187.55,893.45" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-298" onclick="abrir_lote('298','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="298" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 298 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="255.40,896.13 267.01,699.72 233.98,696.15 220.58,898.81" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-302" onclick="abrir_lote('302','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="302" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 302 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="390.21,900.59 403.60,701.51 369.67,701.51 356.28,900.59" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-303" onclick="abrir_lote('303','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="303" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 303 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="424.13,900.59 437.52,705.08 405.38,700.62 391.99,901.48" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-304" onclick="abrir_lote('304','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="304" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 304 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="458.05,904.16 468.77,705.08 439.31,705.08 425.02,903.27" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-305" onclick="abrir_lote('305','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="305" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 305 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="491.98,904.16 503.58,705.97 470.55,704.19 458.94,904.17" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-306" onclick="abrir_lote('306','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="306" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 306 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="524.12,904.16 536.62,707.76 505.37,704.19 491.98,902.38" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-307" onclick="abrir_lote('307','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="307" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 307 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="559.83,906.84 571.43,707.76 538.40,706.87 527.69,904.16" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-308" onclick="abrir_lote('308','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="308" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 308 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="593.75,905.95 605.36,708.65 574.11,709.54 561.61,905.95" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-309" onclick="abrir_lote('309','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="309" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 309 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="631.25,905.95 640.18,711.33 606.25,707.76 593.75,905.95" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-310" onclick="abrir_lote('310','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="310" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 310 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="617.86,1113.96 629.46,911.31 595.54,907.73 582.14,1113.07" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-311" onclick="abrir_lote('311','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="311" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 311 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="549.12,1108.60 560.72,909.52 593.76,908.63 581.26,1113.07" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-312" onclick="abrir_lote('312','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="312" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 312 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="513.41,1108.60 526.80,907.73 559.83,908.63 550.01,1110.39" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-313" onclick="abrir_lote('313','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="313" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 313 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="480.37,1109.50 492.87,904.16 527.69,907.73 514.30,1110.39" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-314" onclick="abrir_lote('314','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="314" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 314 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="447.34,1107.71 459.84,905.95 492.87,905.06 477.70,1108.60" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-315" onclick="abrir_lote('315','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="315" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 315 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="412.52,1105.92 425.92,906.84 458.05,906.84 446.45,1107.71" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-316" onclick="abrir_lote('316','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="316" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 316 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="378.60,1103.25 391.99,903.27 424.13,904.16 412.52,1104.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-317" onclick="abrir_lote('317','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 317 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="342.89,1104.14 358.07,904.16 391.10,905.06 380.39,1104.14" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-321" onclick="abrir_lote('321','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="321" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 321 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="208.98,1100.57 222.37,898.81 252.72,899.70 239.33,1099.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-322" onclick="abrir_lote('322','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="322" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 322 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="175.05,1100.57 187.55,900.59 221.48,900.60 208.98,1099.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-323" onclick="abrir_lote('323','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="323" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 323 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="138.45,1099.68 154.52,897.02 187.55,898.81 175.95,1099.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-324" onclick="abrir_lote('324','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="324" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 324 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="104.53,1095.21 119.70,898.81 152.73,897.02 139.34,1100.57" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-325" onclick="abrir_lote('325','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="325" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 325 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="72.39,1097.00 86.67,896.13 117.02,897.02 106.31,1097.89" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-326" onclick="abrir_lote('326','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="326" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 326 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.79m2</strong></p>" points="39.36,1096.10 52.75,893.45 84.88,894.34 74.17,1097.00" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-327" onclick="abrir_lote('327','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="327" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 327 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>414.78m2</strong></p>" points="7.22,1095.21 17.93,891.67 50.07,893.45 38.46,1097.00" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-328" onclick="abrir_lote('328','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="328" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 328 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>376.06m2</strong></p>" points="1556.50,934.58 1565.43,735.50 1535.97,731.93 1527.93,933.69" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-329" onclick="abrir_lote('329','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="329" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 329 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1587.75,934.58 1599.35,735.50 1565.43,734.61 1556.50,932.80" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-330" onclick="abrir_lote('330','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="330" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 330 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1622.56,935.47 1634.17,737.28 1599.36,735.50 1588.64,932.80" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-331" onclick="abrir_lote('331','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="331" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 331 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1653.81,937.26 1663.63,737.29 1631.49,737.28 1624.35,935.47" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-332"  onclick="abrir_lote('332','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="332" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 332 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1688.63,935.47 1700.23,740.85 1665.42,739.06 1656.49,937.26" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-333" onclick="abrir_lote('333','modal-terms');" data-toggle="modal" data-target="#modal-terms"data-whatever="333" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 333 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1718.09,939.04 1729.69,736.39 1700.23,737.28 1688.63,938.15" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-334" onclick="abrir_lote('334','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="334" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 334 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1752.91,938.15 1760.05,739.96 1730.59,739.07 1721.66,937.26" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-335" onclick="abrir_lote('335','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="335" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 335 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1785.92,940.67 1795.22,740.42 1763.60,739.80 1753.68,940.67" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-336" onclick="abrir_lote('336','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="336" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 336 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1818.16,941.29 1828.08,741.04 1796.46,741.04 1786.54,939.43" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-337" onclick="abrir_lote('337','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="337" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 337 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1852.25,944.39 1860.31,742.90 1828.70,741.66 1817.54,941.91" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-338" onclick="abrir_lote('338','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="338" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 338 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1881.39,943.15 1892.55,743.52 1862.79,742.28 1851.63,941.91" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-342" onclick="abrir_lote('342','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="342" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 342 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2013.36,946.08 2025.76,747.07 1991.66,745.21 1979.26,947.32" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-343" onclick="abrir_lote('343','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="343" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 343 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2046.84,947.32 2054.28,747.07 2024.52,747.07 2013.98,947.94" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-344" onclick="abrir_lote('344','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="344" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 344 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2078.46,949.80 2090.24,749.55 2056.14,747.07 2046.22,947.94" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-345" onclick="abrir_lote('345','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="345" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 345 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2113.18,948.56 2123.09,750.17 2090.24,748.31 2079.70,948.56" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-346" onclick="abrir_lote('346','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="346" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 346 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2144.32,949.97 2155.93,750.89 2120.22,750.89 2112.18,948.18" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-347" onclick="abrir_lote('347','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="347" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 347 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2176.46,950.86 2188.96,752.67 2155.03,750.89 2145.21,949.97" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-348" onclick="abrir_lote('348','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="348" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 348 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2209.49,950.86 2219.31,749.99 2188.07,750.89 2176.46,951.75" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-349" onclick="abrir_lote('349','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="349" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 349 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2242.52,953.54 2254.13,754.46 2219.31,752.67 2211.28,950.86" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-350" onclick="abrir_lote('350','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="350" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 350 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2274.66,954.43 2285.38,753.56 2253.24,754.46 2240.74,954.43" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-351" onclick="abrir_lote('351','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="351" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 351 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2305.91,955.33 2318.41,752.67 2283.59,754.46 2275.56,951.75" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-352" onclick="abrir_lote('352','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="352" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 352 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2340.34,957.10 2352.12,756.23 2319.26,754.99 2305.62,955.24" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-353" onclick="abrir_lote('353','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="353" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 353 </strong><br/>Estatus: <strong style='color:#ff0000;'>VENDIDO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2307.83,956.73 2341.41,956.73 2328.50,1161.31 2298.53,1160.28" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-354" onclick="abrir_lote('354','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="354" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 354 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2274.77,956.21 2306.28,955.18 2297.50,1159.76 2265.99,1161.83" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-355" onclick="abrir_lote('355','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="355" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 355 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2232.92,1158.21 2242.74,954.14 2274.77,956.73 2265.99,1158.73" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-356"  onclick="abrir_lote('356','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="356" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 356 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2199.34,1157.18 2210.19,954.66 2241.70,955.18 2231.37,1159.25" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-357" onclick="abrir_lote('357','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="357" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 357 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2167.31,1154.60 2176.61,953.63 2209.67,953.63 2199.34,1154.60" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-358" onclick="abrir_lote('358','modal-terms');" data-toggle="modal" data-target="#modal-terms"  data-whatever="358" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 358 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2134.76,1155.63 2143.54,951.56 2176.61,950.53 2167.31,1155.11" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-359" onclick="abrir_lote('359','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="359" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 359 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2102.21,1152.01 2112.03,951.56 2144.58,952.08 2132.69,1153.56" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-360" onclick="abrir_lote('360','modal-terms');" data-toggle="modal" data-target="#modal-terms" data-whatever="360" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 360 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2070.18,1152.01 2078.45,949.49 2111.51,952.08 2101.18,1154.60" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-361" onclick="abrir_lote('361','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="361" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 361 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2035.57,1150.98 2045.38,950.01 2078.96,949.49 2068.63,1151.50" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-362" onclick="abrir_lote('362','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="362" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 362 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="2004.05,1148.92 2014.38,947.94 2045.38,949.49 2034.53,1152.53" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-363"  onclick="abrir_lote('363','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="363" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 363 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1971.50,1148.92 1981.32,946.91 2013.35,947.94 2003.02,1149.43" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-367"  onclick="abrir_lote('367','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="367" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 367 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1870.54,1146.92 1877.98,943.82 1851.19,943.07 1838.55,1147.66" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-368"  onclick="abrir_lote('368','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="368" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 368 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1808.79,1143.94 1818.46,944.56 1849.71,942.33 1840.78,1144.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-369" onclick="abrir_lote('369','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="369" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 369 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1774.57,1144.69 1784.98,942.33 1817.72,942.33 1807.30,1144.68" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-370" onclick="abrir_lote('370','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="370" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 370 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1742.58,1142.45 1752.25,939.35 1784.98,942.33 1773.82,1144.69" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-371" onclick="abrir_lote('371','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="371" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 371 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1708.35,1141.71 1718.77,941.58 1752.25,940.84 1744.06,1142.45" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-372" onclick="abrir_lote('372','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="372" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 372 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1677.85,1139.48 1689.01,941.58 1720.26,942.33 1707.61,1143.94" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-373" onclick="abrir_lote('373','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="373" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 373 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1644.37,1139.48 1655.53,940.10 1689.01,941.58 1677.85,1140.97" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-374" onclick="abrir_lote('374','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="374" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 374 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1611.64,1139.48 1621.31,937.87 1654.05,940.10 1644.37,1142.45" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-375" onclick="abrir_lote('375','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="375" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 375 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1579.65,1137.25 1590.07,934.89 1621.31,938.61 1609.41,1138.74" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-376" onclick="abrir_lote('376','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="376" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 376 </strong><br/>Estatus: <strong style='color:#06d79d;'>DISPONIBLE</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>399.12m2</strong></p>" points="1543.94,1136.50 1556.59,937.12 1588.58,937.87 1580.40,1137.99" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-377" onclick="abrir_lote('377','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="377" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 377 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>376.06m2</strong></p>" points="1517.90,1136.50 1526.08,936.38 1555.10,935.63 1546.17,1137.25" transform="translate(0,0) scale(1,1)"></polygon>

<polygon id="LOTE-378" onclick="abrir_lote('378','modal-terms');"  data-toggle="modal" data-target="#modal-terms" data-whatever="378" data-toggle2="tooltip" data-placement="top" title="<p><strong style='color:#fff'>Lote- 378 </strong><br/>Estatus: <strong style='color:#ff8e14;'>APARTADO</strong><br/>Dimensiones:<br/> <strong style='color:#fff;'>357.81m2</strong></p>" points="" transform="translate(0,0) scale(1,1)"></polygon>


</g> </svg>

</div></div>

</div>


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