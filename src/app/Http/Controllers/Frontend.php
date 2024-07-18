<?php

namespace App\Http\Controllers;

use Log;
use Carbon\Carbon;
use App\Models\Home;
use App\Models\Menu;
use App\Models\User;
use App\Models\About;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Frontend extends Controller
{
    public function getDb()
    {
        $About = About::all();
        $Home = Home::all();
        $Menu = Menu::all();
        return view('layouts.indexpasta', compact('Home', 'About', 'Menu'));
    }

    public function getPost()
    {
        return view('layouts.booking-form');
    }

    public function post(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'jenis_tempat' => 'required|string|max:255',
            'jenis_tamu' => 'required|string|max:255',
            'jumlah_tamu' => 'required|integer|min:1',
            'start_book' => 'required|date_format:Y-m-d\TH:i',
            'finish_book' => 'required|date_format:Y-m-d\TH:i|after:start_book',
            'category' => 'required|string',
        ]);

        try {
            $startDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start_book'));
            $finishDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('finish_book'));

            // Log data before creating
            Log::info('Data to be saved:', [
                'nama_pemesan' => $request->input('nama_pemesan'),
                'jenis_tempat' => $request->input('jenis_tempat'),
                'jenis_tamu' => $request->input('jenis_tamu'),
                'jumlah_tamu' => $request->input('jumlah_tamu'),
                'start_book' => $startDateTime,
                'finish_book' => $finishDateTime,
                'category' => $request->input('category'),
                'status' => 'Booking',
            ]);

            Booking::create([
                'nama_pemesan' => $request->input('nama_pemesan'),
                'jenis_tempat' => $request->input('jenis_tempat'),
                'jenis_tamu' => $request->input('jenis_tamu'),
                'jumlah_tamu' => $request->input('jumlah_tamu'),
                'start_book' => $startDateTime,
                'finish_book' => $finishDateTime,
                'category' => $request->input('category'),
                'status' => 'Booking',
            ]);

            return redirect()->back()->with('success', 'Booking berhasil disimpan.');
        } catch (\Exception $e) {
            Log::error('Error saving booking: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menyimpan booking: ' . $e->getMessage());
        }
    }

    public function login()
    {
        return view('login.login');
    }

    public function loginn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'email' => 'Email atau kata sandi salah.',
            ]);
        }
    }

    public function register()
    {
        return view('register.register');
    }

    public function registerr(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('/');
    }

    public function product()
    {
        $products = Product::all();
        return view('layouts.rooms', compact('products'));
    }
}
