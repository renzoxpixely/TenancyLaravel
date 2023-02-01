
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
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Código del producto</label>
                  <input class="form-control" name="codigo" type="text">
                </fieldset>
              </div>

              













              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Código alternativo</label>
                  <input class="form-control" name="alternate_code" type="text">
                </fieldset>
              </div>
              </div>
              <div class="row">
              <div class="col-md-8">
                <fieldset class="form-group">
                  <label>Nombre del product</label>
                  <input class="form-control" name="name type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Código de Barra / SKU</label>
                  <input class="form-control" name="sku" readonly value="You can't update me :P" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Presentación Unitaria</label>
                  <input class="form-control" name="unitary_presentation" placeholder="Enter Email Address" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Unidades Contenidas (Factor)</label>
                  <input class="form-control" name="factor" placeholder="Enter Email Address" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Marca</label>
                  <input name="brand_id" class="form-control round" placeholder="Rounded Input" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Linea</label>
                  <input name="line" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>
              <!-- <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Categoría</label>
                  <input name="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div> -->
              <!-- <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Sub-Categoría</label>
                  <input name="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>     -->
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Costo (Costo sin IGV)</label>
                  <input name="purchase_price_noigv" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   




              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Costo (Costo sin IGV)</label>
                  <input name="sale_price_igv" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Costo (Costo sin IGV)</label>
                  <input name="quantity" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>  
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Costo (Costo sin IGV)</label>
                  <input name="type_product" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>  




              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>Peso (Kg.)</label>
                  <input name="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>% Detracción</label>
                  <input name="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>% ISC</label>
                  <input name="squareText" class="form-control square" placeholder="square Input" type="text">
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


































    <!-- 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Company Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Company Email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Address:</strong>
                        <input type="text" name="address" class="form-control" placeholder="Company Address">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form> -->

        <!-- codigo: $('#codigo').val(),
                  name: $('#name').val(),
                  alternate_code: $('#alternate_code').val(),
                  sale_price_igv: $('#sale_price_igv').val(),
                  purchase_price_noigv: $('#purchase_price_noigv').val(),
                  sku: $('#sku').val(),
                  unitary_presentation: $('#unitary_presentation').val(),
                  factor: $('#factor').val(),  
                  line: $('#line').val(),                
                  brand_id: $('#brand_id').val(),    
                  quantity: $('#quantity').val(),    
                  type_product: $('#type_product').val(),   -->