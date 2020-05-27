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
<<<<<<< HEAD
echo $_POST["idCliente"];
=======
>>>>>>> 23c86471c9993b44be59b0a3f303e6ef68cbd028

if(isset($_POST["idCliente"])){    

	$cliente = new AjaxCliente();
	$cliente ->idCliente = $_POST["idCliente"];
    $cliente -> ajaxEditarCliente();
   

}