<?php namespace Controladores;

use Modelo\solicitudModelo as Solicitud;
	
class revisionControlador{

	private $solicitud;
	
	public function __construct(){
		$this->solicitud = new Solicitud();
	}

	public function index()	{
		if ($_POST) {
			$this->solicitud->set("idSolicitud",$_POST['numSolcitud']);
			$this->solicitud->set("codAcceso",$_POST['codAcceso']);
			$datos = $this->solicitud->access_by_idSol_codAc();

			if ($datos == 1) {
				$_SESSION['numSolicitud'] = $_POST['numSolcitud'];
				header ("Location: ".URL."Revision/estado");
			} else {
				$datos = "Número de solicitud o código de acceso incorrecto";
				return $datos;
			}
		}	
	}

	public function estado() {
		if (!$_POST) {
			$numSolic = $_SESSION['numSolicitud'];
			$this->solicitud->set("idSolicitud",$numSolic);
			$datos = $this->solicitud->view_by_idSol_codAc();
			return $datos;
		} else {
			
			header ("Location: ".URL."Revision");
		}
		
	}
}