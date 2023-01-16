@extends('system.layout.base')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Tables</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-envelope-o"></i> Tables</li>
        <li class="active"><i class="fa fa-table"></i> Data Tables</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <h4>Basic Tables</h4>
            <div id="example_filter" class="dataTables_filter pull-right">
              <input class="form-control" id="placeholderInput" placeholder="Search" type="email">
            </div>
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th class="sortable">SKU</th>
                  <th class="sortable">Invoice#</th>
                  <th class="sortable">Customer Name</th>
                  <th class="sortable">Status</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tr>
                <td class="text-truncate">OV-101777</td>
                <td class="text-truncate"><a href="#">VIO-0035421</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101775</td>
                <td class="text-truncate"><a href="#">VIO-0028954</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                <td class="text-truncate">$ 421.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101687</td>
                <td class="text-truncate"><a href="#">VIO-0025864</a></td>
                <td class="text-truncate">Andrew Florence</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 632.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101657</td>
                <td class="text-truncate"><a href="#">VIO-0085815</a></td>
                <td class="text-truncate">Florence Sr.</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 285.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101625</td>
                <td class="text-truncate"><a href="#">VIO-0053812</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-warning">Overdue</span></td>
                <td class="text-truncate">$ 538.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101777</td>
                <td class="text-truncate"><a href="#">VIO-0035421</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101775</td>
                <td class="text-truncate"><a href="#">VIO-0028954</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                <td class="text-truncate">$ 421.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101687</td>
                <td class="text-truncate"><a href="#">VIO-0025864</a></td>
                <td class="text-truncate">Andrew Florence</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 632.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101657</td>
                <td class="text-truncate"><a href="#">VIO-0085815</a></td>
                <td class="text-truncate">Florence Sr.</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 285.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101625</td>
                <td class="text-truncate"><a href="#">VIO-0053812</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-warning">Overdue</span></td>
                <td class="text-truncate">$ 538.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101777</td>
                <td class="text-truncate"><a href="#">VIO-0035421</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101775</td>
                <td class="text-truncate"><a href="#">VIO-0028954</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                <td class="text-truncate">$ 421.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101687</td>
                <td class="text-truncate"><a href="#">VIO-0025864</a></td>
                <td class="text-truncate">Andrew Florence</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 632.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101657</td>
                <td class="text-truncate"><a href="#">VIO-0085815</a></td>
                <td class="text-truncate">Florence Sr.</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 285.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101625</td>
                <td class="text-truncate"><a href="#">VIO-0053812</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-warning">Overdue</span></td>
                <td class="text-truncate">$ 538.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101777</td>
                <td class="text-truncate"><a href="#">VIO-0035421</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101775</td>
                <td class="text-truncate"><a href="#">VIO-0028954</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                <td class="text-truncate">$ 421.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101687</td>
                <td class="text-truncate"><a href="#">VIO-0025864</a></td>
                <td class="text-truncate">Andrew Florence</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 632.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101657</td>
                <td class="text-truncate"><a href="#">VIO-0085815</a></td>
                <td class="text-truncate">Florence Sr.</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 285.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OV-101625</td>
                <td class="text-truncate"><a href="#">VIO-0053812</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-warning">Overdue</span></td>
                <td class="text-truncate">$ 538.00</td>
              </tr>
            </table>
            <ul class="pagination m-bot-0">
              <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 





























                            <x-guest-layout>

                                    <x-slot name="logo">
                                        <a href="/">
                                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                        </a>
                                    </x-slot>

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />





                            {{-- <td>
                                @foreach ($tenants as $data)
                                    Nombre: <b>{{ $data['name'] }}</b> Correo: {{ $data['email'] }}<br />
                                @endforeach
                                {{$tenants}}
                            </td> --}}

                            <div class="flex flex-col mt-8">
                                <div class="py-2">
                                    <div
                                        class="min-w-full border-b border-gray-200 shadow">
                                        <table class="min-w-full">
                                            <thead>
                                                <tr>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Id
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Nombre
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Email
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Dominio
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Compañia
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Base de datos
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Edit
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Delete
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="bg-white">
                                                @foreach($tenants as $tenant)
                                                <tr>
                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm text-gray-900">
                                                                    {{ $tenant->id }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->name }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->email }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->domain }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->company }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->tenancy_db_name }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <button wire:click="edit({{ $tenant->id }})" class="px-4 py-2 text-white bg-blue-600">
                                                            Edit
                                                        </button>
                                                    </td>

                                                    <td class="px-6 py-4 text-sm text-gray-500 border-b border-gray-200">
                                                        <button wire:click="destroy({{ $tenant->id }})"
                                                            class="px-4 py-2 text-white bg-red-600">
                                                            Delete
                                                        </button>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>




                            </x-guest-layout>


@endsection
