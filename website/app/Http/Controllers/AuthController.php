<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function indexRegist() {
        return view('modules.auth.register');
    }

    public function storeRegist(Request $request) {
        $validateData = $request->validate([
            'nama' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'unique:users', 'email:dns'],
            'no_hp' => ['required', 'unique:users', ],
            'password' => ['required', 'min:8']
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi Sukses!');
    }

    public function indexLogin() {
        return view('modules.auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'max:255', 'email:dns'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials) && auth()->user()->id === 1) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        if(Auth::attempt($credentials) && auth()->user()->id !== 1) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('error', 'Email dan Password tidak cocok!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
