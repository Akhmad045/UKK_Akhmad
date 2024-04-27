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
            'nama' => 'required|max:255',
            'username' => 'required|unique:admins|max:100',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
        $p = new Admin();
        $p->create($request->all());
        if ($p->where('nama',$request->input('nama'))->where('username',$request->input('username'))->where('email',$request->input('email'))->where('password',$request->input('password'))->exists()){
            return redirect('dashboard/petugas')->with('success', 'Data petugas berhasil ditambahkan!');
        }
            return back()->with('failed', 'Data petugas gagal ditambahkan!');
    }

    public function edit($id) {
        $p = Admin::select('*')->where('id', $id)->get();
        return view('pages.admin.edit',['data' =>$p]);
    }

    public function kirim_edit(Request $request) {
        $p = Admin::where('id',$request->id)->update([
            'nama'=>$request->nama,
            'username'=>$request->username,
            'email'=> $request->email,
            'password'=> $request->password,
            'akses'=> $request->akses,
        ]);
    
            return redirect('dashboard/petugas')->with('success', 'Data petugas berhasil diupdate!');
    }

    public function hapus($id) {
        $p = Admin::where('id',$id)->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }
}
