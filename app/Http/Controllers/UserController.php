<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request) {
        $a = Admin::all();
        return view('pages.admin.index',['data' => $a]);
    }

    public function tambah () {
        return view('pages.admin.add');
    }
    public function kirim_tambah(Request $request) {
        $validated = $request->validate([
            'nama_pelanggan' => 'required|max:255',
            'nomor_telepon' => 'required|unique:pelanggans|max:15',
            'alamat' => 'required|max:255',
        ]);
        $p = new Admin();
        $p->create($request->all());
        if ($p->where('nama_pelanggan',$request->input('nama_pelanggan'))->where('nomor_telepon',$request->input('nomor_telepon'))->where('alamat',$request->input('alamat'))->exists()){
            return redirect('dashboard/pelanggan')->with('success', 'Data pelanggan berhasil ditambahkan!');
        }
            return back()->with('failed', 'Data pelanggan gagal ditambahkan!');
    }

    public function edit($id) {
        $p = Admin::select('*')->where('id', $id)->get();
        return view('pages.admin.edit',['data' =>$p]);
    }

    public function kirim_edit(Request $request) {
        $p = Admin::where('id',$request->id)->update([
            'nama_pelanggan'=>$request->nama_pelanggan,
            'nomor_telepon'=>$request->nomor_telepon,
            'alamat'=> $request->alamat,
        ]);
    
            return redirect('dashboard/admin')->with('success', 'Data admin berhasil diupdate!');
    }

    public function hapus($id) {
        $p = Admin::where('id',$id)->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }
}
