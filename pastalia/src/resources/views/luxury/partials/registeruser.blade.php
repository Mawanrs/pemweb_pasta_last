<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .brand {
            text-align: center;
            margin-bottom: 1em;
        }

        .brand a {
            font-size: 1.5em;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .the-form {
            display: flex;
            flex-direction: column;
        }

        .the-form label {
            margin: 0.5em 0 0.2em;
            font-weight: bold;
            color: #555;
        }

        .the-form input[type="text"],
        .the-form input[type="email"],
        .the-form input[type="password"] {
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }

        .the-form button {
            padding: 0.5em;
            background: #4facfe;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            text-align: center;
        }

        .the-form button:hover {
            background: #3b82c4;
        }

        .form-footer {
            text-align: center;
            margin-top: 1em;
        }

        .form-footer a {
            color: #4facfe;
            text-decoration: none;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="brand"><a title="PASTALIA" href="">PASTALIA</a></div>
        <form action="{{ route('register') }}" class="the-form" method="POST">
            @csrf
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama Anda" required>
    
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email Anda" required>
    
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" id="password" placeholder="Masukkan kata sandi Anda" required>
    
            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi kata sandi Anda" required>
            
            <a href="{{ route('luxury.partials.loginuser') }}" class="btn-daftar"><button type="button">Daftar</button></a>
        </form>
        <div class="form-footer">
            <a href="{{ route('luxury.partials.loginuser') }}">Sudah punya akun? Masuk</a>
        </div>
    </div><!-- FORM BODY-->
</body>
</html>
