<?php

class ControladorVentas{

    static public function ctrMostrarVentas ($item,$valor){

        $tabla = "ventas";

		$respuesta = ModeloVentas::MdlMostrarVentas($tabla, $item, $valor);

		return $respuesta;


    }

}

