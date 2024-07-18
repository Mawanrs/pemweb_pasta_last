<!-- resources/views/login/login.blade.php -->
@extends('partials.mainlogin')

@section('isi_login')
<div class="form-container">
    <div class="brand"><a title="PASTALIA" href="www.PASTALIA.com">PASTALIA</a></div>
    <form action="{{ route('login.loginss') }}" method="POST" class="the-form">
        @csrf <!-- Tambahkan token CSRF untuk keamanan -->
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email Anda" required>

        <label for="password">Kata Sandi</label>
        <input type="password" name="password" id="password" placeholder="Masukkan kata sandi Anda" required>

        <input type="submit" value="Masuk">
    </form>
</div><!-- FORM BODY-->

<div class="form-footer">
    <div>
        <span>Belum punya akun?</span> <a href="{{ route('register.register') }}">Daftar</a>
    </div>
</div><!-- FORM FOOTER -->
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection