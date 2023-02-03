@extends('tenant.layouts.layout_dashboard.layout.base')

@section('css')

<style>

body { padding-right: 0 !important }

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
@endsection

@section('content')


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

                  <a class=""  aria-label="Delete" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o fa-lg text-success" aria-hidden="true"></i></a>
                  <!-- <a class="btn btn-default"  aria-label="Delete" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o fa-xs" aria-hidden="true"></i></a> -->
                  <!-- <a href="#" class="btn  btn-default btn-lg" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o   fa-xs" aria-hidden="true"></i></a>     -->
                  <!-- <a href="#" class="btn  btn-danger btn-lg" data-toggle="modal" data-target="#basicModal"><i class="fa fa-times-circle   fa-xs" aria-hidden="true"></i></a> -->
                  <!-- <a class="btn btn-danger"  aria-label="Delete" data-toggle="modal" data-target="#basicModal"><i class="fa fa-trash-o fa-xs" aria-hidden="true"></i></a> -->
                  <a class=""   data-toggle="modal" data-target="#deleteModal"><i class="fa fa-times-circle fa-lg text-warning" aria-hidden="true"></i></a>               
                </td>
                
                </tr>
        @endforeach
        @foreach ($services as $service)
                <tr>          {{-- protected $fillable = ['code','service_name','cost','debit_credit','Ledger_account','branch_id']; --}}
                  <td class="text-truncate">{{ $service->code }}</td>
                  <td class="text-truncate">{{ $service->service_name }}</td>
                  <td class="text-truncate">{{ $service->cost }}</td>
                  <td class="text-truncate">{{ $service->debit_credit }}</td>
                  <td class="text-truncate">{{ $service->Ledger_account }}</td>
                  <td class="text-truncate"><span class="lable-tag tag-success">{{ "" }}</span></td>
                  <td class="text-truncate">{{ "" }}</td>
                         -->

                <!-- <td class="text-truncate"><i class="fa fa-dashboard"></i></td> -->
                <!-- <td class="text-truncate"> <i class="fas fa-edit"></i></td> -->
                <td class="text-truncate">
                  <!-- <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> -->
                  <!-- <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i> -->

                  <a class=""  aria-label="Delete" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o fa-lg text-success" aria-hidden="true"></i></a>
                  <!-- <a class="btn btn-default"  aria-label="Delete" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o fa-xs" aria-hidden="true"></i></a> -->
                  <!-- <a href="#" class="btn  btn-default btn-lg" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o   fa-xs" aria-hidden="true"></i></a>     -->
                  <!-- <a href="#" class="btn  btn-danger btn-lg" data-toggle="modal" data-target="#basicModal"><i class="fa fa-times-circle   fa-xs" aria-hidden="true"></i></a> -->
                  <!-- <a class="btn btn-danger"  aria-label="Delete" data-toggle="modal" data-target="#basicModal"><i class="fa fa-trash-o fa-xs" aria-hidden="true"></i></a> -->
                  <a class=""   data-toggle="modal" data-target="#deleteModal"><i class="fa fa-times-circle fa-lg text-warning" aria-hidden="true"></i></a>               
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

<!-- modal eliminar producto-->
<div class="modal fade " id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
  @include('tenant.inventories.delete_product_modal')
</div>

<!-- modal editar producto -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  @include('tenant.inventories.edit_product_modal')
</div>

<!-- modal agregar producto -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  @include('tenant.inventories.create_product_modal')
</div>

<!-- modal agregar promocion -->
<div class="modal fade" id="addPromotionModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  @include('tenant.inventories.create_promotion_modal')
</div>

<!-- modal agregar servicio -->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  @include('tenant.inventories.create_service_modal')
</div>

      </section>
      <!-- content -->         
      </section>
      <!-- content --> 
  </div>
  <!-- content-wrapper --> 


	<!-- Modal Sidebar derecha-->
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
                <button data-dismiss="modal" data-toggle="modal" data-target="#addModal" type="button" class="btn btn-primary btn-lg btn-block">Productos</button>
              </div>
          </div>

					<div class="row">
              <!-- Standard button -->
              <div class="chart-box over-hidden">
              <button data-dismiss="modal" data-toggle="modal" data-target="#addServiceModal" type="button" class="btn btn-primary btn-lg btn-block">Servicios</button>
              </div>
          </div>
  
          <div class="row">
              <!-- Standard button -->
              <div class="chart-box over-hidden">
              <button data-dismiss="modal" data-toggle="modal" data-target="#addPromotionModal" type="button" class="btn btn-primary btn-lg btn-block">Promociones</button>
              </div>
          </div>
  
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
	
</div><!-- container -->

@endsection


@section('script')
<script>
$(document).ready(function () {
    $('#example').dataTable( {
  "pageLength": 20
} );
});














<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        var route = "{{ url('branches.inventories') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>


@endsection