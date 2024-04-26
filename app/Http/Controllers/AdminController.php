<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(Request $request) {
        $admin = Admin::count();
        $pelanggan = Pelanggan::count();
        $produk = Produk::count();

        return view('pages.dashboard',['admins' => $admin, 'pelanggans' => $pelanggan, 'produks' => $produk]);
    }

    public function login() {
        return view('pages.Auth.sign-in');
    }

    public function proses_login(Request $request) {
        $cek = new Admin();
        $cek = $cek->where('email',$request->input('email'))->where('password',$request->input('password'));

        if($cek->exists()){
            session([
                'email'=>$request->input('email'),
                'password'=>$request->input('password'),
                'akses'=>$request->enum('admin','petugas'),
            ]);
            return redirect('dashboard');
        }

            // cek apakah login valid
        
            return back()->with('failed','Email atau password anda salah');
        

    }
}
