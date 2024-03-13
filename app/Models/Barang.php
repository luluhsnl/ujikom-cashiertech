<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
protected $fillable = [ 'jenis_barang', 'nama_barang', 'harga','stok' ];

// public function transaction()
// {
//     return $this->hasMany(Transaction::class);
// }
//     protected $guarded = ['id'];
}
