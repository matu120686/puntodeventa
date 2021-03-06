<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Crear venta
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear venta</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <!--====================================
              EL FORMULARIO
      =======================================-->

      <div class="col-lg-5 col-xs-12">

        <div class="box box-success">

          <div class="box-header with-border">

            <form role="form" method="post">

              <div class="box-body">              

                  <div class="box">
                      <!--====================================
                              ENTRADA DEL VENDEDOR
                      =======================================-->

                      <div class="form-group">

                        <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                          <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>

                        </div>

                      </div>  

                      <!--====================================
                              ENTRADA DEL VENDEDOR
                      =======================================-->

                      <div class="form-group">

                        <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-key"></i></span>
                          <input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="0000001" readonly>

                        </div>

                      </div> 
                      <!--====================================
                              ENTRADA DEL CLIENTE 
                      =======================================-->

                      <div class="form-group">

                        <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-users"></i></span>

                          <select  class="form-control" id="agregarCliente" name="agregarCliente" placeholder="Agregar Cliente" required>

                          <option value="">Seleccionar Cliente</option>

                          </select>
                          
                          <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" 
                          data-target="#modalAgregarCliente" data-dismiss="modal" >Agregar Cliente</button> </span>

                        </div>

                      </div> 
                      
                      <!--====================================
                              ENTRADA PARA AGREGAR PRODUCTO 
                      =======================================-->

                    <div class = " form-group row nuevoProducto">

                      <!--Descripcion del Producto-->

                        <div class ="col-xs-6" style="padding-right:0px">

                          <div class ="input-group">

                            <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs" > <i class ="fa fa-times"></i></button></span>

                            <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripcion del Producto" required>                  

                          </div>

                        </div>
                        <!--Cantidad de Producto-->

                        <div class ="col-xs-3">

                          <input type="number" class="form-control" id="nuevaCatidadProducto" name="nuevaCatidadProducto" min="1" 
                          placeholder="0"  required>

                        </div>
                        <!--Precio de Producto-->

                        <div class ="col-xs-3" style="padding-right:0px">

                          <div class ="input-group">

                            <span class="input-group-addon"><i class ="ion ion-social-usd"></i></span>                      

                            <input type="number" min="1" class ="form-control" id="nuevoPrecioProducto" name="nuevoPrecioProducto"
                            placeholder="000000" readonly required>                                        

                          </div>

                        </div>
                      </div>

                      
                            <!--====================================
                                BOTON AGREGAR PRODUCTO 
                            =======================================-->

                          <button type="button" class ="btn btn-default hidden-lg"> Agregar Producto</button>

                        <hr>

                        <div class="row">

                          <!--====================================
                                ENTRADA IMPUESTOS Y TOTAL
                            =======================================-->

                          <div class="col-xs-8 pull-right">
                            
                          <table class="table">

                            <thead>

                              <tr>
                                <th>Impuesto</th>
                                <th>Total</th>
                              </tr>

                            </thead>

                            <tbody>

                              <tr>

                                <td style="width: 50%">

                                    <div class ="input-group">                      

                                        <input type="number" class ="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta"
                                        placeholder="0" required>
                                        <span class="input-group-addon"><i class ="fa fa-percent"></i></span>                  

                                    </div>

                                </td>

                                <td style="width: 50%">

                                    <div class ="input-group">

                                        <span class="input-group-addon"><i class ="ion ion-social-usd"></i></span>                
                                        
                                        <input type="number" class ="form-control" min="0" id="nuevoTotalVenta" name="nuevoTotalVenta"
                                        placeholder="0" required>

                                    </div>

                                </td>

                              </tr>

                            </tbody>

                          </table>


                          </div>


                        </div>

                        <hr>

                        <!--====================================
                              ENTRADA METODO DE PAGO 
                          =======================================-->
                          <div class="form-group row">

                            <div class="col-xs-6 " style="padding-right:0px">

                              <div class="input-group">

                                <select class ="form-control" name="nuevoMetodoPago" id="nuevoMetodoPago" required>
                                  <option value="">Seleccione metodo de Pago</option>
                                  <option value="efectivo">Efectivo</option>
                                  <option value="tarjetaCredito">Tarjeta Credito</option>
                                  <option value="tarjetaDebito">Tarjeta Débito</option>
                                </select>

                              </div>

                            </div>

                            <div class="col-xs-6" style="padding-left:0px">

                              <div class="input-group">

                                <input type="text" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Código Transacción">
                                
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                              </div>

                            </div>

                          </div>
                          
                          <br>              
                     </div>

                </div> 
              
                <div class="box-footer">
                                
                  <button type="submit" class="btn btn-primary pull-right " data-dismiss="modal">Guardar Venta</button>

                </div>

            </form>

          </div>

        </div>          
      
      </div>
      <!--====================================
              LA TABLA DE PRODUCTOS
      =======================================-->
      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">

        <div class="box box-warning">

          <div class="box-header with-border">

          </div>

          <div class="box-body">

            <table class="table table-bordered table-striped dt-responsive tablas">

            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Imagen</th>
                <th>Código</th>
                <th>Descripcion</th>                
                <th>Stock</th>
                <th>Acciones</th>
              </tr>

              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
                  <td>00123</td>
                  <td>lorem ipsum dolor sit amet</td>                  
                  <td>20</td>
                  <td>
                    <div class="btn-group">

                      <button type="button" class="btn btn-primary">Agregar</button>

                    </div>
                  </td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>


      </div>    

      

    </div>

   
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->