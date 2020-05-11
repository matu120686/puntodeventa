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

           <div class="box-body">

           <form role="form" method="post">

             <div class="box">
                <!--====================================
                        ENTRADA DEL VENDEDOR
                =======================================-->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user"></i> Vendedor</span>
                    <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>

                  </div>

                </div>  

                <!--====================================
                        ENTRADA DEL VENDEDOR
                =======================================-->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i> Codigo de Venta</span>
                    <input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="0000001" readonly>

                  </div>

                </div> 
                <!--====================================
                        ENTRADA DEL CLIENTE 
                =======================================-->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-users"></i> Agregar Cliente</span>

                    <select  class="form-control" id="agregarCliente" name="agregarCliente" placeholder="Agregar Cliente" required>

                    <option value="">Seleccionar Cliente</option>

                    </select>
                    
                    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" 
                    data-target="#modalAgregarCliente" data-dismiss="modal" >Agregar Cliente</button> </span>

                  </div>

                </div>   



             </div>

           </form>

           </div>

         </div>

      </div>
      
      </div>
      <!--====================================
              LA TABLA DE PRODUCTOS
      =======================================-->
      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
      <div class="box box-warning">

</div>


      </div>    

      

    </div>

   
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->