/*=====================================
PIE DEL MODAL
======================================*/

$(".btnEditarCliente").click(function() {
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
        success: function(respuesta) {

            /*$("#editarCliente").val(respuesta["categoria"]);
             $("#idCategoria").val(respuesta["id"]);//*/

            console.log(respuesta);

        }

    })

})