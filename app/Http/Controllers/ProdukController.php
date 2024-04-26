<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index (Request $request) {
        $produk = Produk::all();
        return view ('pages.produk.index',['data' => $produk]);
    }

    public function tambah() {
        return view('pages.produk.add');
    }
    
    public function kirim_tambah(Request $request){
        $validated = $request->validate([
            'nama_produk' => 'required|unique:produks|max:255',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        $p = new Produk();
        $p->create($request->all());
        if ($p->where('nama_produk',$request->input('nama_produk'))->where('harga',$request->input('harga'))->where('stok',$request->input('stok'))->exists()){
            return redirect('dashboard/produk')->with('success', 'Data produk berhasil ditambahkan!');
        }
            return back()->with('failed', 'Data produk gagal ditambahkan!');       
    }

    public function edit($id) {
        $p = Produk::select('*')->where('id', $id)->get();
        return view('pages.produk.edit',['data' =>$p]);
    }

    public function kirim_edit(Request $request) {
        $p = Produk::where('id',$request->id)->update([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=> $request->stok,
        ]);
    
            return redirect('dashboard/produk')->with('success', 'Data produk berhasil diupdate!');
    }

    public function hapus($id) {
        $p = Produk::where('id',$id)->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }
}
