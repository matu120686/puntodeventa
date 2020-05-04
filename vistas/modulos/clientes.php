<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar clientes

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar clientes</li>

    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">

          Agregar Cliente

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Nombre</th>
              <th>Documento </th>
              <th>Email </th>
              <th>Teléfono </th>
              <th>Fecha de Nacimiento </th>
              <th>Total Compras </th>
              <th>Última compra </th>
              <th>Ingreso al Sistema </th>
              <th>Acciones </th>

            </tr>

          </thead>

          <tbody>

            <tr>
              <td> 1 </td>
              <td> Matias Olivera </td>
              <td> 32353151 </td>
              <td> matu120686@gmail.com </td>
              <td> 2645478957 </td>
              <td> 12-06-1986 </td>
              <td> 35000 </td>
              <td> 20-04-2020</td>
              <td> 12-12-1986 </td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>


            </tr>

          </tbody>

        </table>

      </div>

    </div>

  </section>

  <!--=====================================
  MODAL AGREGAR CLIENTE
  ======================================-->

  <div id="modalAgregarCliente" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form role="form" method="post">

          <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

          <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Cliente</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevaCliente" placeholder="Ingresar Nombre" required>

                </div>

                <!-- ENTRADA PARA EL DOCUMENTO ID -->
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>

                  <input type="number" min="0"  class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar Documento" required>

                </div>

                <!-- ENTRADA PARA EL EMAIL -->
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="email"  class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" required>

                </div>

                <!-- ENTRADA PARA EL TELEFONO -->
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                  <input type="text"   class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar Telefono" data-inputmask="'mask':'(999) 999-999999'" data-mask required>
                                                                                                                                                                                           
                </div>

                <!-- ENTRADA PARA EL Direccion -->
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                  <input type="text"  class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar Direccion" required>

                </div>

                <!-- ENTRADA PARA EL Direccion -->
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                  <input type="text"  class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar Direccion" required>

                </div>

              </div>

            </div>

          </div>

          <!--=====================================
        PIE DEL MODAL
        ======================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar categoría</button>

          </div>

          <?php

          $crearCategoria = new ControladorCategorias();
          $crearCategoria->ctrCrearCategoria();

          ?>

        </form>

      </div>

    </div>

  </div>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->