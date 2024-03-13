<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{
    // Menampilkan halaman input data barang
    public function index()
    {
       
         $barangs = Barang::all();
         return view('barang/index',['barangs'=> $barangs]);
    }
    public function create()
    {   
        return view('barang.tambah');
    }

    public function edit($id)
    {
        $barangs = Barang::find($id);
        return view('barang/edit', compact('barangs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $barangs = Barang::findOrFail($id);

        // Update the existing data
        $barangs->update([
            'jenis_barang' => $request->jenis_barang,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('barang')->with('success', 'Data barang berhasil diperbarui');
    }

    public function destroy($id)
{
    Barang::findOrFail($id)->delete();

    return redirect()->back()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ->with('success', 'Barang berhasil dihapus');
}
public function show()
    {
        //
    }


    // Menyimpan data barang baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);
        
        Product::create($data);

        return redirect()->back()->with('success', 'Data barang berhasil ditambahkan');
    }
 }