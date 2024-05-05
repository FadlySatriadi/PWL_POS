<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
   public function index() {
        $user = Auth::user();
      
        if ($user) {
            if ($user->level_id == 1) {
                return redirect()->intended('admin');
            } else if ($user->level_id == 2) {
                return redirect()->intended('manager');
            }
        }

        return view('login');
    }


    public function proses_login(Request $request)
    {
        // Mengecek validasi pada input username, length 10 karakter
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        // Auth attempt untuk cek user di database dengan data
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level_id == '1') {
                // Jika level user adalah admin arahkan ke halaman admin
                return redirect()->intended('admin');
            } elseif ($user->level_id == '2') {
                // Jika level user adalah manager arahkan ke halaman manager
                return redirect()->intended('manager');
            } else {
                // Jika level user adalah user biasa arahkan ke halaman home
                return redirect()->intended('/');
            }
        }

        return redirect("login")
        ->withInput()
        ->withErrors(['login_gagal', 'Pastikan kembali username dan password yang dimasuukan sudah benar ']);
    }
    public function register()
    {
        $activeMenu = 'Register';
        $breadcrumb = (object) [
            'title' => 'Register',
            'list'  => ['Register']
        ];


        return view('register', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb]);
    }
    
    public function proses_register(Request $request)
    {
        // Validasi data yang masuk pada saat register
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
    
        // Tambahkan level_id dan enkripsi password sebelum membuat user
        $request->merge([
            'level_id' => '2',
            'password' => Hash::make($request->password)
        ]);
    
        // Buat user baru menggunakan data yang divalidasi dan diproses
        UserModel::create($request->all());
    
        // Redirect ke halaman login setelah proses registrasi berhasil
        return redirect()->route('login');
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        return redirect('login');
    }
}