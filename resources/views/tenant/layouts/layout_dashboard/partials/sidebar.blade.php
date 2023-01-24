  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar dark-bg">
    <section class="sidebar">
      <div class="user-panel black-bg">
        <div class="pull-left image"> <img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>Florence Douglas</p>
          <a href="#"><i class="fa fa-circle"></i> Online</a> </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header dark-bg">Menu</li>
  <!--      <li class="treeview active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li class="active"><a href="{{ route('tenants.show_tenant') }}"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>  -->
        <li class=""> <a href="{{ route('tenant.branches.dashboard.index', $branch_id) }}"> <i class="fa fa-th"></i> <span>Dashboard</span></a> </li>
        <!-- <a class="btn btn-success" href="{{ route('tenant.branches.shoppings.index', $branch_id) }}"> Ingrsardashhs</a> -->
        <li class="treeview"><a href="#"><i class="fa fa-dashboard"></i> <span>Compras</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-dashboard"></i> <span>Ventas</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li><a href="{{ route('tenant.branches.sales.index', $branch_id) }}"><i class="fa fa-angle-right"></i> Ventas</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-dashboard"></i> <span>Punto de Venta</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-dashboard"></i> <span>Inventario</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li><a href="{{ route('tenant.branches.inventories.index', $branch_id) }}"><i class="fa fa-angle-right"></i> Productos y Servicios</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-dashboard"></i> <span>Finanzas</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-dashboard"></i> <span>Contabilidad</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
      </ul>
      <!-- sidebar-menu -->
    </section>
  </aside>
