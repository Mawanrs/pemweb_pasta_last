<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LuxuryController extends Controller
{
    public function index()
    {
        return view('luxury.index');
    }

    public function index1()
    {
        return view('luxury.partials.about');
    }

    public function index2()
    {
        return view('luxury.partials.contact');
    }

    public function index3()
    {
        return view('luxury.partials.booknow');
    }

    public function index4()
    {
        return view('luxury.partials.loginuser');
    }

    public function index5()
    {
        return view('luxury.partials.rooms');
    }

    public function index6()
    {
        return view('luxury.partials.form');
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('luxury.partials.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect setelah registrasi berhasil
        return redirect()->route('luxury.partials.loginuser')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
