<?PHP
require('fpdf.php');

class PDF_FORMAT extends FPDF
{
	function encabezado($tipo_evento){
		$this->Image('../../../images/pdf/cabeza.jpg',10,5,177,15,'JPG');
		$this->Image('../../../images/pdf/logoDGEST.jpg',156,22,30,14,'JPG');
		$this->Image('../../../images/pdf/sep.jpg',187,20,20,25,'JPG');
		$this->Image('../../../images/pdf/texto.jpg',166,40,20,5,'JPG');
		$this->SetFont('Arial','B',10);
		$this->MultiCell(90,5,html_entity_decode("Ciencias Basicas"),0,'L');
		$this->SetXY(10,25);
		if($tipo_evento==1){
			$this->MultiCell(90,5,html_entity_decode("Ciencias Basicas"),0,'L');
		}else{
			$this->MultiCell(90,5,html_entity_decode($nombre["Innovacion tecnologica"]),0,'L');
		}

	}
}
?>