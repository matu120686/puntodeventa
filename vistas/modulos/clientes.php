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
              <th>Direccion </th>
              <th>Fecha Nacimiento </th>
              <th>Total Compras </th>
              <th>Ultima Compra </th>              
              <th>Ingreso al Sistema </th>
              <th>Acciones </th>

            </tr>

          </thead>

          <tbody>

          <?php
           $item = null;

           $valor = null;

        

        $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

       foreach ($clientes as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["documento"].'</td>
                  <td>'.$value["email"].'</td>
                  <td>'.$value["telefono"].'</td>
                  <td>'.$value["direccion"].'</td>
                  <td>'.$value["fecha_nacimiento"].'</td>
                  <td>'.$value["compras"].'</td>
                  <td>'.$value["ultima_compra"].'</td>
                  <td>'.$value["fecha"].'</td>' ;    
                                  

          echo '
                  <td>

                  <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>

                      </div>  

                  </td>

                </tr>';
        }


        ?> 

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

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Nombre" required>

                </div>

              </div>

                <!-- ENTRADA PARA EL DOCUMENTO ID -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input type="number" min="0"  class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar Documento" required>

                  </div>
                </div>

                <!-- ENTRADA PARA EL EMAIL -->
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                    <input type="email"  class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" required>
                  </div>
                </div>

                <!-- ENTRADA PARA EL TELEFONO -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                    <input type="text"   class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar Telefono" data-inputmask="'mask':'(999) 999-999999'" data-mask required>
                                                                                                                                                                                            
                  </div>
                </div>

                <!-- ENTRADA PARA LA DIRECCION -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                    <input type="text"  class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar Direccion" required>

                  </div>
                </div>

                <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                    <input type="text"  class="form-control input-lg" name="NuevaFechaNacimiento" placeholder="Ingresar Fecha de Nacimiento" data-inputmask="'alias':'dd/mm/yyyy'" data-mask required>

                  </div>
                </div>


              </div>

            </div>

          </div>

          <!--=====================================
        PIE DEL MODAL
        ======================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Cliente</button>

          </div>

          <?php

          $crearClientes = new ControladorClientes();
          $crearClientes->ctrCrearClientes();

          ?>

        </form>

      </div>

    </div>

  </div>


   <!--=====================================
  MODAL EDITAR CLIENTE
  ======================================-->

  <div id="modalEditarCliente" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form role="form" method="post">

          <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

          <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Cliente</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>

                </div>

              </div>

                <!-- ENTRADA PARA EL DOCUMENTO ID -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input type="number" min="0"  class="form-control input-lg" name="editarDocumentoId" id="editarDocumentoId" required>

                  </div>
                </div>

                <!-- ENTRADA PARA EL EMAIL -->
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                    <input type="email"  class="form-control input-lg" name="editarEmail" id="editarEmail" required>
                  </div>
                </div>

                <!-- ENTRADA PARA EL TELEFONO -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                    <input type="text"   class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-999999'" data-mask required>
                                                                                                                                                                                            
                  </div>
                </div>

                <!-- ENTRADA PARA LA DIRECCION -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                    <input type="text"  class="form-control input-lg" name="ecitarDireccion" id="ecitarDireccion" required>

                  </div>
                </div>

                <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
                <div class="form-group">
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                    <input type="text"  class="form-control input-lg" name="ecitarFechaNacimiento" id="ecitarFechaNacimiento" data-inputmask="'alias':'dd/mm/yyyy'" data-mask required>

                  </div>
                </div>


              </div>

            </div>

          </div>

          <!--=====================================
        PIE DEL MODAL
        ======================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>

          </div>  
          <?php

          echo "holña";
          

          ?>       

        </form>

          

          

      </div>

    </div>

  </div>

  

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->