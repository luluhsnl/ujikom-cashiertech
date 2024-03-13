
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
			<h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Jenis Barang</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>stok</th>
							<th>Action</th>
							
						</tr>
					</thead>
			
					<tbody>
						<tr>
							<?php $no = 1; ?>
							 @foreach($barangs as $barang)
								<tr>
									
									<td>{{ $barang->jenis_barang }}</td>
									<td>{{ $barang->nama_barang }}</td>
									<td>{{ $barang->harga }}</td>
									<td>{{ $barang->stock }}</td>
									<td>
										<a href="{{ asset('product.edit', $barang->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
										<form action="{{ asset('product.destroy', $barang->id) }}" method="POST" style="display:inline">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')"><i class="fa fa-trash"></i>Hapus</button>
										</form>
									</td>
								</tr>
							@endforeach 
							
					</tr>
@endsection

