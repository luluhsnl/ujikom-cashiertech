
@extends('layout.base')

@section('content')

   {{-- <div class="container">		  --}}
    @section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
​
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Transaksi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Transaksi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
​
        <section class="content" id="dw">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        
                            @slot('title')
                            
                            @endslot
​
                            <div class="row">
                                <div class="col-md-4">
                                    
                                    <!-- SUBMIT DIJALANKAN KETIKA TOMBOL DITEKAN -->
                                    <form action="#" @submit.prevent="addToCart" method="post">
                                        <div class="form-group">
                                            <label for="">Barang</label>
                                            <select name="barang_id" id="barang_id"
                                                v-model="cart._id"
                                                class="form-control" required width="100%">
                                                <option value="">Pilih</option>
                                               
                                                <option value=""> - </option>
                                              
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Qty</label>
                                            <input type="number" name="qty"
                                                v-model="cart.qty" 
                                                id="qty" value="1" 
                                                min="1" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm"
                                                :disabled="submitCart"
                                                >
                                                <i class="fa fa-shopping-cart"></i> Ke Keranjang
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- MENAMPILKAN DETAIL PRODUCT -->
                                <div class="col-md-5">
                                    <h4>Detail Produk</h4>
                                    <div v-if="product.name">
                                        <table class="table table-stripped">
                                            <tr>
                                                <th>Kode</th>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th width="3%">Produk</th>
                                                <td width="2%">:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Harga</th>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                
                                <!-- MENAMPILKAN IMAGE DARI PRODUCT -->
                                <div class="col-md-3" v-if="product.photo">
                                    <img :src="'/uploads/product/' + product.photo" 
                                        height="150px" 
                                        width="150px" 
                                        :alt="product.name">
                                </div>
                            </div>
                            @slot('footer')
​
                            @endslot
                        
                    </div>
                    
                    <!-- MENAMPILKAN LIST PRODUCT YANG ADA DI KERANJANG -->
                    <div class="col-md-4">
                        
                            @slot('title')
                            Keranjang
                            @endslot
​
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- MENGGUNAKAN LOOPING VUEJS -->
                                    <tr v-for="(row, index) in shoppingCart">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <!-- EVENT ONCLICK UNTUK MENGHAPUS CART -->
                                            <button 
                                                @click.prevent="removeCart(index)"    
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @slot('footer')
                            <div class="card-footer text-muted">
                                <a href="" 
                                    class="btn btn-info btn-sm float-right">
                                    Checkout
                                </a>
                            </div>
                            @endslot
                    
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
​


    
    {{-- </div> --}}

@endsection