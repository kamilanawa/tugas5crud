<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\kategori;


class ProdukController extends Controller
{
    //untuk menampilkan data 
    public function index(){

        $data['produks']=produk::with('kategori')->get();
        
        return view ('produk/index',$data);
    }
    //Untuk menghapus data 
    public function destroy($id)
    {
        produk::destroy($id);
        return redirect('/produk');
    }
    // untuk mengirim data
    public function create()
    {
        
        $data['kategori'] = kategori::all();

        return view('produk/add', $data);
    }
    //untuk menyimpan data yang telah di kirim
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_description' => 'required',
            'category_id' => 'required'
        ]);
        //===============

        produk::create([
            'nama_produk' => $validated['product_name'],
             'harga' => $validated['product_price'],
             'deskripsi' => $validated['product_description'],
            'id_kategori' => $validated['category_id']
        ]);

        return redirect('/produk');
    }
}
