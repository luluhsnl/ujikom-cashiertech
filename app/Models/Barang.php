<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang',
        'harga',
        'stok_barang',
        'foto',
    ];

    public function penjualan() 
	{
		return $this->hasOne('App\Models\Penjualan', 'penjualan_id');
	}
  
}
