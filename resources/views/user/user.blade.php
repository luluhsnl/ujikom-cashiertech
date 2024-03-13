@extends('layout.base')

@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<a href="{{ asset('barang/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
				<i class="fas fa-plus"></i> Tambah Data</a>
		</div>
		
	</div>
	  

	  

	  <div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data user</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
		  <th>Username</th>
		  <th>Email</th>
		  <th>Role</th>
		  <th>Action</th>
		</tr>
	  <!-- Page Heading -->
	 
	  <?php $no = 1; ?>
  {{-- @foreach($products as $product)
	  <tr>
		  
		  <td>{{ $product->nama_product }}</td>
		  <td>{{ $product->price }}</td>
		  <td>{{ $product->stock }}</td>
		  <td>
			  <a href="{{ asset('product.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
			  <form action="{{ asset('product.destroy', $barang->id) }}" method="POST" style="display:inline">
				  @csrf
				  @method('DELETE')
				  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
			  </form>
		  </td>
	  </tr>
  @endforeach --}}
</tbody>
</table>
</div>

@endsection