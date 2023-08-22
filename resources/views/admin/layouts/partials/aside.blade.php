<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="/" class="brand-link">
    <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Toko Andreas</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="/dashboard" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-item menu-open">
        <a href="#" class="nav-link 
        {{ Route::is('data toko') ? 'active' : '' }} 
        {{ Route::is('data pegawai') ? 'active' : '' }} 
        {{ Route::is('data supplier') ? 'active' : '' }} 
        {{ Route::is('data barang') ? 'active' : '' }}
        {{ Route::is('data member') ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-database"></i>
            <p>
            Database
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('admin')
                <li class="nav-item">
                    <a href="data_toko" class="nav-link {{ Route::is('data toko') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Toko</p>
                    </a>
                </li>
            @endcan
            @cannot('karyawan')
                <li class="nav-item">
            <a href="data_pegawai" class="nav-link {{ Route::is('data pegawai') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pegawai</p>
            </a>
            </li>
            @endcannot
            <li class="nav-item">
            <a href="data_supplier" class="nav-link {{ Route::is('data supplier') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Supplier</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="data_member" class="nav-link {{ Route::is('data member') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Member</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="data_barang" class="nav-link {{ Route::is('data barang') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Barang</p>
            </a>
            </li>
        </ul>
        </li>

    <li class="nav-item menu-open">
        <a href="#" class="nav-link 
        {{ Route::is('trx umum') ? 'active' : '' }}
        {{ Route::is('trx grosir') ? 'active' : '' }}
        {{ Route::is('trx member') ? 'active' : '' }}
        {{ Route::is('trx logs') ? 'active' : '' }}
        ">
            <i class="nav-icon fa-solid fa-cart-shopping"></i>
            <p>
            Transaksi
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="trx_umum" class="nav-link {{ Route::is('trx umum') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Transaksi Umum</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="trx_grosir" class="nav-link {{ Route::is('trx grosir') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Transaksi Grosir</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="trx_member" class="nav-link {{ Route::is('trx member') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Transaksi Member</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="trx_logs" class="nav-link {{ Route::is('trx logs') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>logs Transaksi</p>
            </a>
            </li>
        </ul>
    </li>
    @cannot('karyawan')
        <li class="nav-item menu-open">
        <a href="#" class="nav-link 
        {{ Route::is('laporan harian') ? 'active' : '' }}
        {{ Route::is('laporan bulanan') ? 'active' : '' }}
        {{ Route::is('laporan tahunan') ? 'active' : '' }}
        ">
            <i class="nav-icon fa-solid fa-flag"></i>
            <p>
            Laporan
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="laporan_harian" class="nav-link {{ Route::is('laporan harian') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Harian</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="laporan_bulanan" class="nav-link {{ Route::is('laporan bulanan') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Bulanan</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="laporan_tahunan" class="nav-link {{ Route::is('laporan tahunan') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Tahunan</p>
            </a>
            </li>
        </ul>
    </li>
    @endcannot
        
    </ul>
    
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>