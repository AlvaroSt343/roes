<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Control Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <!-- JS -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#usuario").focus();
            });
        </script>
    </head>
    <body style="background: #F2F2F2">
        <div class="container">
            
            <div class="col-lg-12">
                <div class="row">
<br>
<br>
<br>
<br>
            <div class="col-lg-6 col-lg-offset-3">
              <form class="form-horizontal" method="post" action="procesa_login.php">
              <fieldset>

              <legend>Login</legend>
              <?php if (isset($_GET['incorrect']) && $_GET['incorrect'] == 'true'): ?>
                <div class="col-md-12">Usuario y/o contraseña incorrectos  
                </div>  
              <?php endif ?>
              <?php if (isset($_GET['logout']) && !isset($_SESSION['alias'])): ?>
                <div class="col-md-12">Su sesión se ha cerrado correctamente  
                </div>  
              <?php endif ?>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Usuario:</label>  
                <div class="col-md-6">
                <input name="usuario" id="usuario" required type="text" class="form-control input-md">
                <span class="help-block" style="display:none;">El usuario es requerido</span>  
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Contraseña:</label>  
                <div class="col-md-6">
                <input name="password" id="password" required type="password" class="form-control input-md">
                <span class="help-block" style="display:none;">La contraseña es requerida</span>  
                </div>
              </div>



              <!-- Button -->
              <div class="form-group">
                <div class="col-md-12 col-lg-12 col-md-offset-4">
                  <input type="submit" value="Acceder" id="singlebutton" name="singlebutton" class="btn btn-primary">
                </div>
              </div>



              </fieldset>
              </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
