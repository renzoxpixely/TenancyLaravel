@extends('tenant.layouts.layout_home.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>Administracion - Inventario</h1>

            <!-- <a class="btn btn-success" href="http://queque.localhost:8001/branches/8/shoppings"> Ingrsardashhs</a> -->

            <div class="row">
                <div class="pull-right m-2">
                    <!-- <button type="button" class="btn btn-primary btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuevo <span class="caret"></span></button>
       -->

                    <div class="text-center">

                        <!-- <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal">
       Left Sidebar Modal
      </button>  -->

                        <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal"
                            data-target="#myModal2">
                            Nuevo
                        </button>
                    </div>

                    <ul class="dropdown-menu">
                        <li><a href="http://queque.localhost:8001/branches/8/sales/create">Ventas</a></li>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-box">
                        <h4>Ventas</h4>
                        <div id="example_filter" class="dataTables_filter pull-right">


                            <div class="pull-right mb-2">
                                <!-- <a href="http://queque.localhost:8001/branches/8/sales/create">Nueva Transacción</a> -->
                            </div>


                        </div>



                        <table id="example" class="table table-striped table-bordered table-responsive"
                            style="width:100%">
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
                                <tr>
                                    <td class="text-truncate">1</td>
                                    <td class="text-truncate">1</td>
                                    <td class="text-truncate">1</td>
                                    <td class="text-truncate">1</td>
                                    <td class="text-truncate">1</td>
                                    <td class="text-truncate"><span class="lable-tag tag-success">1</span></td>
                                    <td class="text-truncate">1</td>
                                    <!-- <td class="text-truncate">1</td>                 -->

                                    <!-- <td class="text-truncate"><i class="fa fa-dashboard"></i></td> -->
                                    <!-- <td class="text-truncate"> <i class="fas fa-edit"></i></td> -->
                                    <td class="text-truncate">
                                        <!-- <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> -->
                                        <!-- <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i> -->

                                        <a class="" aria-label="Delete" data-toggle="modal"
                                            data-target="#editModal"><i class="fa fa-pencil-square-o fa-lg text-success"
                                                aria-hidden="true"></i></a>
                                        <!-- <a class="btn btn-default"  aria-label="Delete" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o fa-xs" aria-hidden="true"></i></a> -->
                                        <!-- <a href="#" class="btn  btn-default btn-lg" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil-square-o   fa-xs" aria-hidden="true"></i></a>     -->
                                        <!-- <a href="#" class="btn  btn-danger btn-lg" data-toggle="modal" data-target="#basicModal"><i class="fa fa-times-circle   fa-xs" aria-hidden="true"></i></a> -->
                                        <!-- <a class="btn btn-danger"  aria-label="Delete" data-toggle="modal" data-target="#basicModal"><i class="fa fa-trash-o fa-xs" aria-hidden="true"></i></a> -->
                                        <a class="" data-toggle="modal" data-target="#deleteModal"><i
                                                class="fa fa-times-circle fa-lg text-warning" aria-hidden="true"></i></a>
                                    </td>

                                </tr>
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
            <div class="modal fade " id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <div style="text-align: center;">
                                <a href="#" class="btn btn-lg btn-danger" data-toggle="modal"
                                    data-target="#basicModal"> <i class="fa fa-exclamation-triangle fa-5x"
                                        aria-hidden="true"></i></a>
                            </div>
                            <br>
                            <h4 class="modal-title" id="myModalLabel">¿Seguro deseas eliminar?</h4>
                        </div>
                        <div class="modal-body">
                            <h3>No vas a poder recuperar este producto, y no podras modificar operaciones realizadas con
                                este producto/servicio</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No, cancelars</button>
                            <button type="button" class="btn btn-danger">Sí, eliminar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal editar producto -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
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
                                                        <input class="form-control" id="disabledInput" disabled=""
                                                            type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <label>Código de Barra / SKU</label>
                                                        <input class="form-control" id="readonlyInput" readonly
                                                            value="You can't update me :P" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <label>Presentación Unitaria</label>
                                                        <input class="form-control" id="placeholderInput"
                                                            placeholder="Enter Email Address" type="email">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <label>Unidades Contenidas (Factor)</label>
                                                        <input class="form-control" id="placeholderInput"
                                                            placeholder="Enter Email Address" type="email">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <label>Marca</label>
                                                        <input id="roundText" class="form-control round"
                                                            placeholder="Rounded Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <label>Linea</label>
                                                        <input id="squareText" class="form-control square"
                                                            placeholder="square Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <label>Categoría</label>
                                                        <input id="squareText" class="form-control square"
                                                            placeholder="square Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <label>Sub-Categoría</label>
                                                        <input id="squareText" class="form-control square"
                                                            placeholder="square Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <label>Costo (Costo sin IGV)</label>
                                                        <input id="squareText" class="form-control square"
                                                            placeholder="square Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <label>Peso (Kg.)</label>
                                                        <input id="squareText" class="form-control square"
                                                            placeholder="square Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <label>% Detracción</label>
                                                        <input id="squareText" class="form-control square"
                                                            placeholder="square Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <label>% ISC</label>
                                                        <input id="squareText" class="form-control square"
                                                            placeholder="square Input" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">No Gravado con
                                                                IGV</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">Producto
                                                                importado</label>
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
                        </div>
                    </div>
                </div>

            </div>



        </section>
        <!-- content -->

    </div>

    <!-- modal agregar producto -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal"
        aria-hidden="true">
        <meta name="csrf-token" content="qLsZXMKFL1l36DMA7YIXuyF6cGrQAgrzLCt3Mzw0" />

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Producto</h4>
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



                                        <!-- Create Article Modal -->
                                        <div class="modal" id="CreateArticleModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Article Create</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="alert alert-danger alert-dismissible fade show"
                                                            role="alert" style="display: none;">
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="alert alert-success alert-dismissible fade show"
                                                            role="alert" style="display: none;">
                                                            <strong>Success!</strong>Article was added successfully.
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="codigo">Title:</label>
                                                            <input type="text" class="form-control" name="codigo"
                                                                id="codigo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Description:</label>
                                                            <textarea class="form-control" name="name" id="name">
                </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alternate_code">alternate_code:</label>
                                                            <input type="text" class="form-control"
                                                                name="alternate_code" id="alternate_code">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sale_price_igv">sale_price_igv:</label>
                                                            <textarea class="form-control" name="sale_price_igv" id="sale_price_igv">
                </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="purchase_price_noigv">purchase_price_noigv:</label>
                                                            <input type="text" class="form-control"
                                                                name="purchase_price_noigv" id="purchase_price_noigv">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sku">sku:</label>
                                                            <textarea class="form-control" name="sku" id="sku">
                </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="unitary_presentation">unitary_presentation:</label>
                                                            <input type="text" class="form-control"
                                                                name="unitary_presentation" id="unitary_presentation">
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
                                                        <button type="button" class="btn btn-success"
                                                            id="SubmitCreateArticleForm">Create</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Close</button>
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
                                                <input class="form-control" id="disabledInput" disabled=""
                                                    type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Código de Barra / SKU</label>
                                                <input class="form-control" id="readonlyInput" readonly
                                                    value="You can't update me :P" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Presentación Unitaria</label>
                                                <input class="form-control" id="placeholderInput"
                                                    placeholder="Enter Email Address" type="email">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Unidades Contenidas (Factor)</label>
                                                <input class="form-control" id="placeholderInput"
                                                    placeholder="Enter Email Address" type="email">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Marca</label>
                                                <input id="roundText" class="form-control round"
                                                    placeholder="Rounded Input" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Linea</label>
                                                <input id="squareText" class="form-control square"
                                                    placeholder="square Input" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Categoría</label>
                                                <input id="squareText" class="form-control square"
                                                    placeholder="square Input" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Sub-Categoría</label>
                                                <input id="squareText" class="form-control square"
                                                    placeholder="square Input" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-3">
                                            <fieldset class="form-group">
                                                <label>Costo (Costo sin IGV)</label>
                                                <input id="squareText" class="form-control square"
                                                    placeholder="square Input" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-3">
                                            <fieldset class="form-group">
                                                <label>Peso (Kg.)</label>
                                                <input id="squareText" class="form-control square"
                                                    placeholder="square Input" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-3">
                                            <fieldset class="form-group">
                                                <label>% Detracción</label>
                                                <input id="squareText" class="form-control square"
                                                    placeholder="square Input" type="text">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-3">
                                            <fieldset class="form-group">
                                                <label>% ISC</label>
                                                <input id="squareText" class="form-control square"
                                                    placeholder="square Input" type="text">
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
                                            Article Listing
                                            <button style="float: right; font-weight: 900;" class="btn btn-info btn-sm"
                                                type="button" data-toggle="modal" data-target="#CreateArticleModal">
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Productos y Servicios</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <!-- Standard button -->
                        <div class="chart-box over-hidden">
                            <button data-dismiss="modal" data-toggle="modal" data-target="#addModal" type="button"
                                class="btn btn-primary btn-lg btn-block">Productos</button>
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



    <!-- Main Footer -->
@endsection
