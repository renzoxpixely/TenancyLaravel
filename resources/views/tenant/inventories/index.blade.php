@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')

<style>

  /* modal center */
  .modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

/* Right sidebar modal */
/*******************************
* MODAL AS LEFT/RIGHT SIDEBAR
* Add "left" or "right" in modal parent div, after class="modal".
* Get free snippets on bootpen.com
*******************************/
.modal.left .modal-dialog,
	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 320px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content,
	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}
	
	.modal.left .modal-body,
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

/*Left*/
	.modal.left.fade .modal-dialog{
		left: -320px;
		-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, left 0.3s ease-out;
		        transition: opacity 0.3s linear, left 0.3s ease-out;
	}
	
	.modal.left.fade.in .modal-dialog{
		left: 0;
	}
        
/*Right*/
	.modal.right.fade .modal-dialog {
		right: -320px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}

/* ----- v CAN BE DELETED v ----- */
body {
	background-color: #78909C;
}

.demo {
	padding-top: 60px;
	padding-bottom: 110px;
}

.btn-demo {
	margin: 15px;
	padding: 10px 15px;
	border-radius: 0;
	font-size: 16px;
	background-color: #FFFFFF;
}

.btn-demo:focus {
	outline: 0;
}

.demo-footer {
	position: fixed;
	bottom: 0;
	width: 100%;
	padding: 15px;
	background-color: #212121;
	text-align: center;
}

.demo-footer > a {
	text-decoration: none;
	font-weight: bold;
	font-size: 16px;
	color: #fff;
}
</style>






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">

    @foreach ($branches as $branch)
        <h1>{{ ucfirst($branch->description) }} - Inventario</h1>
    @endforeach  
    <!-- <a class="btn btn-success" href="{{ route('tenant.branches.shoppings.index', $branch->id) }}"> Ingrsardashhs</a> -->
    
    <div class="row">
        <div class="pull-right m-2">
          <!-- <button type="button" class="btn btn-primary btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuevo <span class="caret"></span></button>
   -->
          
         <div class="text-center">

		<!-- <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal">
			Left Sidebar Modal
		</button>  -->

		<button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#myModal2">
			Nuevo
		</button>
	</div>



          <ul class="dropdown-menu">
            <li><a  href="{{ route("tenant.branches.sales.create", $branch_id) }}">Ventas</a></li>
            <li><a href="#">Cotización</a></li>
            <li><a href="#">Guía de Remisión</a></li>
          </ul>
        </div>
      </div>

       
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">



    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="chart-box">
              <h4>Ventas</h4>
              <div id="example_filter" class="dataTables_filter pull-right">

                
        <div class="pull-right mb-2">
            <!-- <a href="{{ route("tenant.branches.sales.create", $branch_id) }}">Nueva Transacción</a> -->
        </div>
                
                
              </div>


           
              <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
            <tr>

                <th class="sortable">Código</th>
                    <th class="sortable">Descripción</th>
                    <th class="sortable">Codigo alternativo</th>
                    <th class="sortable">Codigo de barra</th>
                    <th class="sortable">Precio de venta con IGV</th>
                    <th class="sortable">Precio de compra sin IGV</th>
                    <th class="sortable">Presentación unitaria</th>
                    <th class="sortable">Acciones</th>    
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
                <tr>          {{-- protected $fillable = ['codigo','name','sale_price_igv','type_product','sku','branch_id','quantity', 'alternative_code']; --}}
                  <td class="text-truncate">{{ $product->codigo }}</td>
                  <td class="text-truncate">{{ $product->name }}</td>
                  <td class="text-truncate">{{ $product->alternate_code }}</td>
                  <td class="text-truncate">{{ $product->sku }}</td>
                  <td class="text-truncate">{{ $product->sale_price_igv }}</td>
                  <td class="text-truncate"><span class="lable-tag tag-success">{{ $product->purchase_price_noigv }}</span></td>
                  <td class="text-truncate">{{ $product->unitary_presentation }}</td>
                <!-- <td class="text-truncate">{{ $product->quantity }}</td>                 -->

                <!-- <td class="text-truncate"><i class="fa fa-dashboard"></i></td> -->
                <!-- <td class="text-truncate"> <i class="fas fa-edit"></i></td> -->
                <td class="text-truncate">
                  <!-- <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> -->
                  <!-- <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i> -->

                  <a class=""  aria-label="Delete" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o fa-lg text-success" aria-hidden="true"></i></a>
                  <!-- <a class="btn btn-default"  aria-label="Delete" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o fa-xs" aria-hidden="true"></i></a> -->
                  <!-- <a href="#" class="btn  btn-default btn-lg" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o   fa-xs" aria-hidden="true"></i></a>     -->
                  <!-- <a href="#" class="btn  btn-danger btn-lg" data-toggle="modal" data-target="#basicModal"><i class="fa fa-times-circle   fa-xs" aria-hidden="true"></i></a> -->
                  <!-- <a class="btn btn-danger"  aria-label="Delete" data-toggle="modal" data-target="#basicModal"><i class="fa fa-trash-o fa-xs" aria-hidden="true"></i></a> -->
                  <a class=""   data-toggle="modal" data-target="#basicModal"><i class="fa fa-times-circle fa-lg text-warning" aria-hidden="true"></i></a>               
                </td>
                
                </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th class="sortable">Código</th>
                    <th class="sortable">Descripción</th>
                    <th class="sortable">Codigo de barra</th>
                    <th class="sortable">Precio de venta con IGV</th>
                    <th class="sortable">Precio de compra sin IGV</th>
                    <th class="sortable">Presentación unitaria</th>
                    <th class="sortable">Acciones</th>    
            </tr>
        </tfoot>
    </table>

            </div>
          </div>
        </div>




<!-- modales -->
        <div class="container">
  <h2>Bootstrap 3.3.7 - Modal Demo</h2>

  <div class="row text-center">
      <h3>The Basic Modal</h3>
      <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Click to open Modal</a>
  </div>
  <hr>
  <div class="row text-center">
      <h3>The Large Modal</h3>
      <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Click to open Modal</a>
  </div>
  <hr>
  <div class="row text-center">
      <h3>The Small Modal</h3>
      <a href="#" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#smallModal">Click to open Modal</a>
  </div>

</div>

<div class="modal fade " id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div style="text-align: center;">
          <a href="#" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#basicModal"> <i class="fa fa-exclamation-triangle fa-5x" aria-hidden="true"></i></a>
        </div>
        <br>
        <h4 class="modal-title" id="myModalLabel">¿Seguro deseas eliminar?</h4>
      </div>
      <div class="modal-body">
        <h3>No vas a poder recuperar este producto, y no podras modificar operaciones realizadas con este producto/servicio</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No, cancelars</button>
        <button type="button" class="btn btn-danger">Sí, eliminar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar Producto</h4>
      </div>
      <div class="modal-body">
        <h3>Producto</h3>



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
    </section>
    <!-- content --> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Small Modal</h4>
      </div>
      <div class="modal-body">
        <h3>Modal Body</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


      </section>
      <!-- content -->         


      </section>
      <!-- content --> 




  </div>
  <!-- content-wrapper --> 









	<!-- Modal -->
	<div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Left Sidebar</h4>
				</div>

				<div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <p>hola soy un boton</p>
            </div>
          </div>
					<div class="row">
            <p>hola soy un boton</p>
          </div>
          <div class="row">
            <p>hola soy un boton</p>
          </div>
					</p>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	


	<!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Productos y Servicios</h4>
				</div>

				<div class="modal-body">
        <div class="row">
              <!-- Standard button -->
              <div class="chart-box over-hidden">
                <button data-toggle="modal" data-target="#basicModal" type="button" class="btn btn-primary btn-lg btn-block">Productos</button>
              </div>
          </div>

					<div class="row">
              <!-- Standard button -->
              <div class="chart-box over-hidden">
                <button type="button" class="btn btn-primary btn-lg btn-block">Servicios</button>
              </div>
          </div>
  
          <div class="row">
              <!-- Standard button -->
              <div class="chart-box over-hidden">
                <button type="button" class="btn btn-primary btn-lg btn-block">Promociones</button>
              </div>
          </div>

				
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
	
</div><!-- container -->










@endsection
