<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('/signup');
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'email' => 'required|email|max: 255|unique:users',
            'password' => 'required|min:8',
        ]);
        $validatedData['nama'] = $request->nama;
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Akun berhasil dibuat, silahkan masuk!');
    }

    public function login(){
        return view('\login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginFail', 'Login gagal!');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
