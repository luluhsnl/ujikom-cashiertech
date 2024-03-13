 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cash-register"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CashierTech</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

  
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- Nav Item - Barang -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset ('barang/index') }}">
            <i class="fas fa-box"></i>
            <span>Produk</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('transaksi') }}">
            <i class="fas fa-dollar-sign"></i>
            <span>Transaksi</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('user') }}">
            <i class="fas fa-address-book"></i>
            <span>User</span></a>
    </li>

 </ul>
        <!-- End of Sidebar -->
