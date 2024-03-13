@extends('layout.base')

@section('content')


<div class="row p-2">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">

          <div class=" row mt-1">
            <div class="col-md-4">
              <label for="">Kode produk</label>
            </div>
            <div class="col-md-8">
              <form method="GET">
                <div class="d-flex">
                  <select name="id_barang" class="form-control mr-2" id="">
                    <option value="{{ isset($product) ? $product->nama_product : 'Nama Produk' }}">---</option>
                    {{-- @foreach ($barangs as $barang)
                    <option value="{{ $product->id }}">{{ $product->nama_product }}</option> --}}
                    {{-- @endforeach --}}
                  </select>
                  <button type="submit" class="btn btn-primary">Pilih</button>
                </div>
              </form>
            </div>
          </div>

          <div class=" row mt-1">
            <div class="col-md-4">
              <label for="">Nama Barang</label>
            </div>
            <div class="col-md-8">
              {{-- <input type="text" value="{{ isset($product) ? $product->nama_product : '' }}" disabled class="form-control" name="nama_barang"> --}}
            </div>
          </div>

          <div class=" row mt-1">
            <div class="col-md-4">
              <label for="">Harga Satuan</label>
            </div>
            <div class="col-md-8">
              
              {{-- <input type="text" value="{{ isset($product) ? $product->price : '' }}" disabled class="form-control" name="harga"> --}}
            </div>
          </div>

          <div class="row mt-1">
            <div class="col-md-4">
              <label for="">Jumlah</label>
            </div>
            {{-- <div class="col-md-8">
              <div class="d-flex">
                <input type="number" value="1" class="form-control mr-2" name="qty">
                <a href="?id_barang={{ request('product_id') }}&act=plus&qty={{ $qty }}" class="btn btn-primary mr-2"><i class="fas fa-plus"></i></a>            
                <a href="?id_barang={{ request('product_id') }}&act=min&qty={{ $qty }}" class="btn btn-primary mr-2"><i class="fas fa-minus"></i></a>
              </div>
            </div> --}}
          </div>

          <div class="row mt-1">
            <div class="col-md-4">
              
            </div>
            <div class="col-md-8">
              <h5>Subtotal : Rp. 20.000 </h5>
            </div>
          </div>

          <div class="row mt-1">
            <div class="col-md-4">
              
            </div>
            <div class="col-md-8">
              <a href="{{ route('transaksi') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i>
                Kembali</a>
                <button type="submit" class="btn btn-primary"> Tambah <i class="fas fa-arrow-right"></i></button> 
            </div>
          </div>

        </div>
      </div>
    </div>
    
  {{-- </div> --}}
  
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <table class="table">
          <tr>  
            <th>No</th>
            <th>Nama Barang</th>
            <th>QTY</th>
            <th>#</th>
          </tr>
          <tr>  
            <td>1</td>
            <td>ciblak</td>
            <td>4</td>
            <td>
              <a href=""><i class="fas fa-times"></i></a>
          </tr>
        </table>
        <a href="" class="btn btn-success"><i class="fas fa-check"></i> Selesai </a>
      </div>
    </div>
  </div>
  </div>

<div class="row p-2">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">

        <div class="form-group">
          <label for="">Total Belanja </label>
          <input type="number" name="total" class="form-control" id="">
        </div>

        <div class="form-group">
          <label for="">Dibayarkan </label>
          <input type="number" name="bayar" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary btn-block"> Hitung </button>

        <hr>

        <div class="form-group">
          <label for="">Kembalian </label>
          <input type="number" disabled name="kembalian" class="form-control" id="">
        </div>

        
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
</div>

@endsection