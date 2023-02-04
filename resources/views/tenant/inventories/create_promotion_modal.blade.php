
<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Agregar Promocion</h4>
      </div>
      <div class="modal-body">
        <h3>Promocion</h3>
      <!-- Main content -->
      <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <!-- <h4>Text Inputs</h4> -->
            <form action="{{ route("tenant.branches.inventories.store", $branch_id) }}" method="POST">
            @csrf

            <div class="row">

              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>Código</label>
                  <input class="form-control" name="codigo" type="text">
                </fieldset>
              </div>

              <div class="col-md-7">
                <fieldset class="form-group">
                  <label>Nombre del Producto</label>
                  <input class="form-control" name="alternate_code" type="text">
                </fieldset>
              </div>
              
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Código de Barra / SKU</label>
                  <input class="form-control" name="alternate_code" type="text">
                </fieldset>
              </div>

              </div>


            <div class="row">
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Productos y Servicios</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>Presentación</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>Precio</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>  
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>Descuento</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-1">
                <fieldset class="form-group">
                  <label>Des.%</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-1">
                <fieldset class="form-group">
                  <label>Cant.</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-1">
                <fieldset class="form-group">
                  <label>Agregar</label>
                    <!-- Contextual button for informational alert messages -->
                    <button class="btn btn-primary icon-button">
  <i class="fa fa-arrow-down fa-sm"></i>
</button>
                </fieldset>
              </div>                                                                                  
            </div>


      <div class="row"> 
      <div class="col-md-12">                   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio de venta</th>
        <th>Descuento</th>
        <th>P. promo</th>                
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>john@example.com</td>        
      </tr>
      <tr>
      <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>john@example.com</td>        
      </tr>    
    </tbody>
  </table>
<div>
</div>

          <div class="row"> 
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Almacén Origen</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Almacén Destino</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Cantidad</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Total Precio</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>   
              

              <form name="autocomplete-textbox" id="autocomplete-textbox" method="post" action="#">
       @csrf
 
        <div class="form-group">
          <label for="exampleInputEmail1">Search Product By Name</label>
          <input type="text" id="search" name="name" class="form-control">
        </div>
 
      </form>
     


          </div>
            </div>
          </div>
        </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>


























      </div>


      </form>

    </div>
  </div>    


























  

      </div>
 
  



      
    </section>
    <!-- content --> 

