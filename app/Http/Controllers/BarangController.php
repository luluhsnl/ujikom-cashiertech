<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('pages.barang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:png,jpg,jpeg',
            'nama_barang'     => 'required',
            'harga'   => 'required',
            'stok'   => 'required'
        ]);
        $foto = $request->file('image');
        $foto->storeAs('public/blogs', $foto->hashName());
    
        $barangs = Barang::create([
            'image'     => $foto->hashName(),
            'nama_barang'     => $request->nama_barang,
            'harga'   => $request->harga,
            'stok'    => $request->stok
        ]);
    
        if($barangs){
            //redirect dengan pesan sukses
            return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barang.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
