<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Agregar Promocion</h4>
      </div>
      <div class="modal-body">
        <h3>Promoción</h3>
      <!-- Main content -->
      <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <!-- <h4>Text Inputs</h4> -->
            <div class="row">
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Código del producto</label>
                  <input class="form-control" id="basicInput" type="text">
                </fieldset>
              </div>



<!-- Create Article Modal -->
<div class="modal" id="CreateArticleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Article Create</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>Success!</strong>Article was added successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <label for="codigo">Title:</label>
                    <input type="text" class="form-control" name="codigo" id="codigo">
                </div>
                <div class="form-group">
                    <label for="name">Description:</label>
                    <textarea class="form-control" name="name" id="name">                        
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="alternate_code">alternate_code:</label>
                    <input type="text" class="form-control" name="alternate_code" id="alternate_code">
                </div>
                <div class="form-group">
                    <label for="sale_price_igv">sale_price_igv:</label>
                    <textarea class="form-control" name="sale_price_igv" id="sale_price_igv">                        
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="purchase_price_noigv">purchase_price_noigv:</label>
                    <input type="text" class="form-control" name="purchase_price_noigv" id="purchase_price_noigv">
                </div>
                <div class="form-group">
                    <label for="sku">sku:</label>
                    <textarea class="form-control" name="sku" id="sku">                        
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="unitary_presentation">unitary_presentation:</label>
                    <input type="text" class="form-control" name="unitary_presentation" id="unitary_presentation">
                </div>
                <div class="form-group">
                    <label for="factor">Description:</label>
                    <textarea class="form-control" name="factor" id="factor">                        
                    </textarea>
                </div>     
                <div class="form-group">
                    <label for="line">line:</label>
                    <textarea class="form-control" name="line" id="line">                        
                    </textarea>
                </div>                     
                <div class="form-group">
                    <label for="brand_id">Description:</label>
                    <textarea class="form-control" name="brand_id" id="brand_id">                        
                    </textarea>
                </div>      
                <div class="form-group">
                    <label for="quantity">Description:</label>
                    <textarea class="form-control" name="quantity" id="quantity">                        
                    </textarea>
                </div>      
                <div class="form-group">
                    <label for="type_product">Description:</label>
                    <textarea class="form-control" name="type_product" id="type_product">                        
                    </textarea>
                </div>                                                                                                 
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitCreateArticleForm">Create</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
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
                  <label>Nombre del product</label>
                  <input class="form-control" id="disabledInput" disabled="" type="text">
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
                  <label>Peso (Kg.)</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   
              <div class="col-md-3">
                <fieldset class="form-group">
                  <label>% Detracción</label>
                  <input id="squareText" class="form-control square" placeholder="square Input" type="text">
                </fieldset>
              </div>   
              <div class="col-md-3">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>












<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        {{ __('Article Listing') }}
                        <button style="float: right; font-weight: 900;" class="btn btn-info btn-sm" type="button"  data-toggle="modal" data-target="#CreateArticleModal">
                            Create Article
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th width="150" class="text-center">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
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
    <!-- content --> 

