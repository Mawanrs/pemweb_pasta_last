<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="source/css/bootstrap.css">
    <link rel="stylesheet" href="source/css/animate.css">
    <link rel="stylesheet" href="source/css/owl.carousel.min.css">

    <link rel="stylesheet" href="source/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="source/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/css/magnific-popup.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="source/css/style.css">
</head>
<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">LuxuryHotel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/rooms') }}">Menu</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link active" href="contact.html">Contact</a>
                        </li> --}}

                        {{-- <li class="nav-item cta">
                            <a class="nav-link" href="booknow.html"><span>Book Now</span></a>
                        </li> --}}
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <div class="form-container">
        <div class="brand"><a title="PASTALIA" href="https://www.PASTALIA.com">PASTALIA</a></div>
        <form action="{{ route('luxury.partials.loginuser') }}" method="POST" class="the-form">
            @csrf <!-- Tambahkan token CSRF untuk keamanan -->
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email Anda" required>
    
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" id="password" placeholder="Masukkan kata sandi Anda" required>
            
            {{-- <input type="submit" value="Masuk"> --}}
            <a href="{{ route('luxury.partials.booknow') }}" class="btn-daftar"><button type="button">Masuk</button></a>
        </form>
        
        <div class="form-footer">
            <div>
                <span>Belum punya akun?</span> <a href="{{ route('register') }}">Daftar</a>
            </div>
        </div><!-- FORM FOOTER -->
    </div><!-- FORM CONTAINER -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #8e9eab, #eef2f3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    
        .form-container {
            background: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
    
        .the-form input[type="email"], .the-form input[type="password"] {
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }
    
        .btn-daftar {
            text-decoration: none;
            align-items: center;
        }

        .btn-daftar button {
            align-items: center;
            justify-content: center;
            padding: 0.5em;
            background: #8e9eab;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-daftar button:hover {
            background: #7a8b98;
        }
    
        .the-form input[type="submit"]:hover {
            background: #697a8c;
        }
    
        .form-footer {
            text-align: center;
            margin-top: 1em;
        }
    
        .form-footer span {
            color: #555;
        }
    
        .form-footer a {
            color: #8e9eab;
            text-decoration: none;
            font-weight: bold;
        }
    
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</body>
</html>