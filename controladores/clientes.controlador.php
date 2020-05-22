<?php

class ControladorClientes
{
    /*=====================
        CREAR CLIENTES
    =======================*/

    public function ctrCrearClientes()
    {

        if (isset($_POST["nuevoCliente"])) {

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
                preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoId"]) &&
                preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST["nuevoEmail"]) &&
                preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) &&
                preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"])
            ) {

                $tabla = "clientes";

                $datos = array(
                    "nombre" => $_POST["nuevoCliente"],
                    "documento" => $_POST["nuevoDocumentoId"],
                    "email" => $_POST["nuevoEmail"],
                    "telefono" => $_POST["nuevoTelefono"],
                    "direccion" => $_POST["nuevaDireccion"],
                    "fecha_nacimiento" => $_POST["NuevaFechaNacimiento"]
                );

                $respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);
                var_dump($respuesta);

                if ($respuesta == "ok") {

                    echo '<script>

						swal({
							  type: "success",
							  title: "El producto ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "clientes";

										}
									})

						</script>';
                }

            } else {
                echo '<script>

                swal({
                      type: "error",
                      title: "¡El Cliente no puede ir vacio o llevar caracteres especiales!",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar"
                      }).then(function(result){
                        if (result.value) {

                        window.location = "clientes";

                        }
                    })

                     </script>';
            }
        }
    }


    public function 






}
