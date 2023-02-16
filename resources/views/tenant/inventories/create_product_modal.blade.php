<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar Producto</h4>
      </div>
      <div class="modal-body">

      <form action="{{ route('tenant.branches.inventories.store', $branch_id) }}"  method="POST" enctype="multipart/form-data">
            @csrf


           


            <div class="d-flex justify-content-between">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                <h3>Producto</h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <fieldset class="form-group">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </fieldset>
                </div>
              </div>


<!-- 
  <h3>Producto</h3>
  <div class="d-flex">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div> -->
</div>

</div>

     
      <!-- Main content -->
      <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <!-- <h4>Text Inputs</h4> -->
            <div class="row">
              <div class="col-md-4">
              <fieldset class="form-group">
                <label id="label" class="text-danger">Código del producto <span id="asterisk" class="text-danger">*</span></label>
                <input name='code' class="form-control" id="basicInput" type="text" required >
              </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Código alternativo</label>
                  <input class="form-control" id="helpInputTop" type="text">
                </fieldset>
              </div>
              </div>
              <div class="row">
              <div class="col-md-8">
                <fieldset class="form-group">
                <label id="label" class="text-danger">Nombre del producto <span id="asterisk" class="text-danger">*</span></label>
                  <input name='name' class="form-control" id="basicInput" type="text" required >
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Código de Barra / SKU</label>
                  <input class="form-control" id="readonlyInput" readonly value="You can't update me :P" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Presentación Unitaria</label>
                  <input class="form-control" id="placeholderInput" placeholder="Enter Email Address" type="email">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Unidades Contenidas (Factor)</label>
                  <input class="form-control" id="placeholderInput" placeholder="Enter Email Address" type="email">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Marca</label>
                  <input id="roundText" class="form-control round" placeholder="Rounded Input" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Linea</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Categoría</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Sub-Categoría</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>    
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Costo (Costo sin IGV)</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label id="label" class="text-danger">Precio de Venta (Inc. IGV)<span id="asterisk" class="text-danger">*</span></label>
                  <input name='sell_price' class="form-control" id="basicInput" type="text" required >
                </fieldset>
              </div>   
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>% Detracción</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>% ISC</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>     
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>% ISC</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>                
              <div class="col-md-3">
                <fieldset class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">No Gravado con IGV</label>
                </div>
                </fieldset>
              </div>   
              <div class="col-md-3">
                <fieldset class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">Producto importado</label>
                </div>
                </fieldset>
              </div>     
          </div>
            </div>
          </div>
        </div>

        </div>

    </div>
  </div>    

      </div>
 
  
    </section>




    </form>
    <!-- content --> 
