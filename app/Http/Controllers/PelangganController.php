<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index (Request $request) {
        $p = Pelanggan::all();
        return view('pages.pelanggan.index',['data' => $p]);
    }

    public function tambah() {
        return view('pages.pelanggan.add');
    }

    public function kirim_tambah(Request $request) {
        $validated = $request->validate([
            'nama_pelanggan' => 'required|max:255',
            'nomor_telepon' => 'required|unique:pelanggans|max:15',
            'alamat' => 'required|max:255',
        ]);
        $p = new Pelanggan();
        $p->create($request->all());
        if ($p->where('nama_p12elanggan',$request->input('nama_pelanggan'))->where('nomor_telepon',$request->input('nomor_telepon'))->where('alamat',$request->input('alamat'))->exists()){
            return redirect('dashboard/pelanggan')->with('success', 'Data pelanggan berhasil ditambahkan!');
        }
            return back()->with('failed', 'Data pelanggan gagal ditambahkan!');
    }

    public function edit($id) {
        $p = Pelanggan::select('*')->where('id', $id)->get();
        return view('pages.pelanggan.edit',['data' =>$p]);
    }

    public function kirim_edit(Request $request) {
        $p = Pelanggan::where('id',$request->id)->update([
            'nama_pelanggan'=>$request->nama_pelanggan,
            'nomor_telepon'=>$request->nomor_telepon,
            'alamat'=> $request->alamat,
        ]);
    
            return redirect('dashboard/pelanggan')->with('success', 'Data pelanggan berhasil diupdate!');
    }

    public function hapus($id) {
        $p = Pelanggan::where('id',$id)->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }
}
