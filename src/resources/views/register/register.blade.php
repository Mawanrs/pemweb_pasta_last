@extends('partials.mainlogin')

@section('isi_login')
<div class="form-container">
    <div class="srouce"><a title="PASTALIA" href="">PASTALIA</a></div>
    <form action="{{ route('register.register') }}" class="the-form" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" placeholder="Masukkan nama Anda" required value="{{ old('name') }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email Anda" required value="{{ old('email') }}">

        <label for="password">Kata Sandi</label>
        <input type="password" name="password" id="password" placeholder="Masukkan kata sandi Anda" required>

        <label for="password_confirmation">Konfirmasi Kata Sandi</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi kata sandi Anda" required>

        <input type="submit" value="Daftar">
    </form>
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: `
                        <ul style="list-style-type: none; padding: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    `
                });
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'Daftar'
                });
            });
        </script>
    @endif
</div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
