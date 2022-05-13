<?php
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");

readfile("ROESNCO_HojaTrabajo.pdf");
?>