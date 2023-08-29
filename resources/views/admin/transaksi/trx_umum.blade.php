@extends('admin.layouts.main')
@section('link')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Transaksi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
            <li class="breadcrumb-item active">Transaksi umum</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">

        <!-- /.col-md-6 -->
        <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
            <h5 class="m-0">Nota</h5>
            </div>
            <div class="card-body">
            <h6 class="card-title">Special title treatment</h6>

            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-header">
            <h5 class="m-0">Administrasi</h5>
            </div>
            <div class="card-body">
            <h6 class="card-title"><b>Total Belanja :</b> @rp($total)</h6>
            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
            <h5 class="m-0">Pilih Barang</h5>
            </div>
            <div class="card-body">
            <table id="table_data_barang" class="table table-bordered table-striped">
                <thead>
                <tr style="text-align: center">
                <th>No</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga Umum</th>
                <th data-orderable="false">Jumlah</th>
                <th data-orderable="false">Menu</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach ($data_barang as $data )
                <tr>
                <td><?= $no++ ?></td>
                <td>{{ $data -> nama }}</td>
                <td>{{ $data -> stok }}</td>
                <td>@rp($data -> harga_umum)</td>
                <td width="15%" style="text-align: center">
                    <form method="post" action="/tambah_keranjang">
                        @csrf
                        <input type="hidden" name="id_barang" value="{{ $data->id }}">
                        <input class="form-control" type="number" name="jumlah" min="1" max="{{ $data->qty }}" value="1">
                </td>
                <td width="10%" style="text-align: center">
                        <button class="btn btn-info" type="submit"><i class="fa-solid fa-cart-plus"></i></button>
                    </form>
                </td>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-header">
            <h5 class="m-0">Keranjang</h5>
            </div>
            <div class="card-body">
            <table id="table_keranjang" class="table table-bordered table-striped">
                <thead>
                <tr style="text-align: center">
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>qty</th>
                <th>Subtotal</th>
                <th data-orderable="false">Menu</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach ($keranjang as $data )
                <tr>
                <td><?= $no++ ?></td>
                <td>{{ $data-> nama }}</td>
                <td>@rp($data -> harga)</td>
                <td>{{ $data -> jumlah }}</td>
                <td>@rp($data -> subtotal)</td>

                <td width="10%" style="text-align: center">
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
$(function () {
$("#table_data_barang").DataTable({
    "responsive": true, 
    "lengthChange": true, 
    "autoWidth": true,
});
});
</script>
<script>
$(function () {
$("#table_keranjang").DataTable({
    "responsive": true, 
    "lengthChange": true, 
    "autoWidth": true,
});
});
</script>
@endsection
