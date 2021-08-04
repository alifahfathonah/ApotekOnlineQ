

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('page/dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Apotek-Q</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('page/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Master
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-clipboard-list "></i>
          <span>Management Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List Data:</h6>
            <a class="collapse-item" href="<?php echo base_url('Admin/Item')?>">Data Items</a>
            <a class="collapse-item" href="<?php echo base_url('Admin/Member')?>">Data Member</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Transaksi Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi" aria-expanded="true" aria-controls="collapseTransaksi">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Management Order</span>
        </a>
        <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List Menu:</h6>
            <a class="collapse-item" href="<?php echo base_url('Admin/Transaksi') ?>">Transaksi</a>
          </div>
        </div>
      </li>
       <!-- Nav Item - Laporan Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="true" aria-controls="collapseLaporan">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List:</h6>
            <a class="collapse-item" href="utilities-color.html">Laporan Perjalan</a>
            <a class="collapse-item" href="utilities-border.html">Laporan Transaksi</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
    </ul>
    <!-- End of Sidebar -->