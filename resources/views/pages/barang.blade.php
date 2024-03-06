
@extends('layout.base')

@section('content')

   {{-- <div class="container">		  --}}
   
     <!-- DataTales Example -->
 
      <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Dashboard</a></li>
          <li class="breadcrumb-item active">Transaksi</li>
      </ol>
 
     <div class="card shadow mb-4">
      <div class="card-header py-3">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
   
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ asset('pages.show') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Barang</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="image">
                        
                            <!-- error message untuk title -->
                            @error('foto')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="title" value="{{ old('nama_barang') }}" placeholder="Masukkan nama barang">
                        
                            <!-- error message untuk title -->
                            @error('nama_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Harga</label>
                            <input type="text"a class="form-control @error('harga') is-invalid @enderror" name="content" rows="5" placeholder="Masukan harga">{{ old('harga') }}
                        
                            <!-- error message untuk content -->
                            @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Stok Barang</label>
                            <input type="text" class="form-control @error('stok_barang') is-invalid @enderror" name="stok_barang" rows="5" placeholder="Masukkan Konten Blog">{{ old('stok_barang') }}
                        
                            <!-- error message untuk content -->
                            @error('stok_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        
    {{-- </div> --}}

@endsection