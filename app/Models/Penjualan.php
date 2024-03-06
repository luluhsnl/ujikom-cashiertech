<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'barang-id',
        'tgl_penjualan',
        'total_harga',
    ];
    public function penjualan() 
	{
    return $this->belongsTo('App\Models\Barang', 'barang_id');

}
}
