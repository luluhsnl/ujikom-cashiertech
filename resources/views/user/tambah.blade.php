@extends('layout.base')

@section('content')

<div class="container-fluid">
    <h1>User</h1>
    <div class="card-body">
      <div class="content">
         
            <div class="card-body">

                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Add your form fields for 'foto', 'nama_barang', 'kategori', 'harga', and 'stok' -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control mb-3" autocomplete="off" autofocus required>
                    </div>
                    
                    </div>
                    <div class="form-group">
                        <label for="password">email:</label>
                        <input type="text" name="email" minpassword="0" class="form-control mb-3" autocomplete="off" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="password">role:</label>
                        <input type="text" name="role" minpassword="0" class="form-control mb-3" autocomplete="off" autofocus required>
                    </div>
                    
                   
                    <button type="submit">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection