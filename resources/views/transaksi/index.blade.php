
@extends('layout.base')

@section('content')


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<a href="{{ asset('transaksi/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
				<i class="fas fa-plus"></i>   Order</a>
		</div>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

	  <div class="card shadow mb-4">
		<div class="card-header py-3">  
			<h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
         
          <th>Barang</th>
          <th>Sub Total</th>
          <th>Total</th>
          <th>Bayar</th>
          <th>Kembalian</th>
        </tr>
      <?php $no = 1; ?>
  @foreach($transaksis as $transaksi)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $transaksi->nama_barang }}</td>
          <td>Rp. {{ number_format($transaksi->sub_total, 0, ',', '.') }}</td>
          <td>Rp. {{ number_format($transaksi->bayar, 0, ',', '.') }}</td>
          <td>Rp. {{ number_format($transaksi->kembalian, 0, ',', '.') }}</td>
          <td> 
              <a href="{{ route('transaksi.edit', $product->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('transaksi.destroy', $product->id) }}" method="POST" style="display:inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
              </form>
          </td>
      </tr>
  @endforeach 
</tbody>
</table>
</div>
        
        </div>

@endsection

