<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";
 

class AjaxCliente{

	/*=============================================
	EDITAR CLIENTE
	=============================================*/	

    public $idCliente;    

	public function ajaxEditarCliente(){
        
		$item = "id";
        $valor = $this->idCliente; 
        

		$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

        echo json_encode($respuesta);       


	}

}

/*=============================================
EDITAR CLIENTE
=============================================*/	


if(isset($_POST["idCliente"])){    

	$cliente = new AjaxCliente();
	$cliente ->idCliente = $_POST["idCliente"];
    $cliente -> ajaxEditarCliente();
   

}