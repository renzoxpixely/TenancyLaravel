@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Ventas</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">


      <div class="row">
        <div class="col-lg-8">
          <div class="chart-box">
            <h4>Punto de Venta</h4>
            <div class="row">
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Pruductos y Servicios</label>
                  <input class="form-control" id="basicInput" type="text">
                </fieldset>
              </div>
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>Presentación</label>
                  <input class="form-control" id="basicInput" type="text">
                </fieldset>
              </div>
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>Precio</label>
                  <input class="form-control" id="basicInput" type="text">
                </fieldset>
              </div>
              <div class="col-md-2">
                <fieldset class="form-group">
                  <label>Cantidad</label>
                  <input class="form-control" id="basicInput" type="text">
                </fieldset>
              </div>
              <div class="col-md-1">
                <fieldset class="form-group">
                  <label></label>
                  <input class="form-control" id="basicInput" type="text">
                </fieldset>
              </div>
            </div>
            

            <table class="table table-responsive">
              <thead>
                <tr>
                  <th width="5%">Item</th>
                  <th width="35%">Descripción</th>
                  <th width="10%" class="text-right">Cantidad</th>
                  <th width="10%" class="text-right">Precio</th>
                  <th width="10%" class="text-right">Descuento c/u</th>
                  <th width="10%" class="text-right">Total</th>
                  <th width="10%" class="text-right">Opc</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                  <td class="text-right">$15.00/hr</td>
                  <td class="text-right">120</td>
                  <td class="text-right">$ 3500.00</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                  <td class="text-right">$18.00/hr</td>
                  <td class="text-right">100</td>
                  <td class="text-right">$ 3253.00</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                  <td class="text-right">$20.00/hr</td>
                  <td class="text-right">85</td>
                  <td class="text-right">$ 1860.00</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                  <td class="text-right">$15.00/hr</td>
                  <td class="text-right">65</td>
                  <td class="text-right">$ 1285.00</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                  <td class="text-right">$25.00/hr</td>
                  <td class="text-right">150</td>
                  <td class="text-right">$ 4225.00</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2">Sub Total</td>
                  <td class="text-right"><h4>$ 14,123</h4></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2">TAX (12%)</td>
                  <td class="text-right"><h4>$ 1,250</h4></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2">Total</td>
                  <td class="text-right"><h4>$ 15,373</h4></td>
                </tr>
              </tbody>
            </table>
          </div>


          
        </div>

        <div class="col-lg-4">
          <div class="chart-box">
            <div class="btn btn-primary btn-lg btn-block">
            <h4 >Gravado: 0.00</h4>
            <h4 >No Gravado: 0.00</h4>
            <h4 >Send Invoice</h4>
          </div>
            <h3  class="btn btn-primary btn-lg btn-block">Total: 00</h3>
            <div class="table-block">
              
              <div class="table-responsive">
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th width="4%">No.</th>
                      <th width="53%">Item &amp; Description</th>
                      <th width="15%" class="text-right">Rate</th>
                      <th width="14%" class="text-right">Hours</th>
                      <th width="14%" class="text-right">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                      <td class="text-right">$15.00/hr</td>
                      <td class="text-right">120</td>
                      <td class="text-right">$ 3500.00</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                      <td class="text-right">$18.00/hr</td>
                      <td class="text-right">100</td>
                      <td class="text-right">$ 3253.00</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                      <td class="text-right">$20.00/hr</td>
                      <td class="text-right">85</td>
                      <td class="text-right">$ 1860.00</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Nullam sagittis mattis arcu. Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor aliquam.</td>
                      <td class="text-right">$15.00/hr</td>
                      <td class="text-right">65</td>
                      <td class="text-right">$ 1285.00</td>
                    </tr>

                  </tbody>
                </table>
                
                <button type="button" class="btn btn-primary btn-lg btn-block">Send Invoice</button>
              </div>
            </div>
          </div>
        </div>
      </div>
























    </section>
    <!-- content --> 

  </div>
  <!-- content-wrapper --> 

@endsection
