<<<<<<< HEAD
/*=====================================
EDITAR CLIENTE
======================================*/

$(".btnEditarCliente").click(function() {

=======
/*=============================================
EDITAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEditarCliente", function() {

>>>>>>> 23c86471c9993b44be59b0a3f303e6ef68cbd028
    var idCliente = $(this).attr("idCliente");

    var datos = new FormData();
    datos.append("idCliente", idCliente);

    $.ajax({

        url: "ajax/clientes.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",

<<<<<<< HEAD
        success: function(respuesta) {

            console.log("respuesta", respuesta);

=======
            $("#idCliente").val(respuesta["id"]);
            $("#editarCliente").val(respuesta["nombre"]);
            $("#editarDocumentoId").val(respuesta["documento"]);
            $("#editarEmail").val(respuesta["email"]);
            $("#editarTelefono").val(respuesta["telefono"]);
            $("#editarDireccion").val(respuesta["direccion"]);
            $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
>>>>>>> 23c86471c9993b44be59b0a3f303e6ef68cbd028
        }


    })



})