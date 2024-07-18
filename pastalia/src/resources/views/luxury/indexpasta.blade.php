<!doctype html>
<html lang="en">

<head>
    <title>LuxuryHotel a Hotel Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="source/css/bootstrap.css">
    <link rel="stylesheet" href="source/css/animate.css">
    <link rel="stylesheet" href="source/css/owl.carousel.min.css">

    <link rel="stylesheet" href="source/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="source/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="source/css/style.css">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">PASTALIA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/rooms') }}">Menu</a>
                        </li>
                        <li class="nav-item cta">
                            <a class="nav-link" href="{{ url('/loginuser') }}"><span>Login
                                    Now</span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(source/images/big_image_1.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">
            @foreach ($Home as $h)
                    <div class="mb-5 element-animate">
                        <h1>{!! $h->description!!}</h1>
                        <p><a href="{{ route('login.login') }}" class="btn btn-primary">Book Now</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- END section -->

    <section class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="heading-wrap text-center element-animate">
                        <h4 class="sub-heading">at PASTALIA</h4>
                        <h2 class="heading">Embrace The Essence of Italy</h2>
                        <p class="mb-5">PASTALIA dedicated to celebrating the essence of Italian cuisine with a focus on pasta artistry
                            Our mission is to deliver authentic flavors and warm hospitality, offering a taste of Italy through meticulously 
                            crafted dishes and a charming, rustic ambiance!</p>
                        <p><a href="/about" class="btn btn-primary btn-sm">More About PASTALIA</a></p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <img src="source/images/f_img_1.png" alt="Image placeholder" class="img-md-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 heading-wrap text-center">
                    <h4 class="sub-heading">The PASTALIA's Rooms</h4>
                    <h2 class="heading">Featured Rooms</h2>
                </div>
            </div>
            
            <div class="row ">
                <div class="col-md-7">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="source/images/vip.jpg" alt="Generic placeholder image" class="img-fluid">
                            <div class="overlap-text">
                                {{-- <span>
                                    Featured Room
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span> --}}
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="mt-0"><a href="/about">VIP Room</a></h3>
                            <ul class="room-specs">
                                <li><span class="ion-ios-people-outline"></span> 10 Guests</li>
                                {{-- <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li> --}}
                            </ul>
                            {{-- <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate
                                fringilla. </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 room-thumbnail-absolute">
                    <a href="/about" class="media d-block room bg first-room"
                        style="background-image: url(source/images/indoor.jpg); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                            {{-- <span>
                                Indoor
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </span> --}}
                            <span class="pricing-from">
                                INDOOR
                            </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                    <a href="/about" class="media d-block room bg second-room"
                        style="background-image: url(source/images/outdoor.jpg); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                            {{-- <span>
                                Outdoor
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </span> --}}
                            <span class="pricing-from">
                                OUTDOOR
                            </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 heading-wrap text-center">
                    <h4 class="sub-heading">HOT MENU</h4>
                    <h2 class="heading">Savoring Our Signature</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="source/images/menu3.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">Spaghetti Pasta</div>
                            <h3 class="mb-3"><a href="#">Spaghetting Bolognese</a></h3>
                            <p class="mb-4">The sauce includes ground meat, tomatoes, onions, carrots, celery, garlic, 
                                and a herbs and spices. It's simmered slowly to develop deep flavors, 
                                then tossed with cooked spaghetti and usually garnished with grated Parmesan cheese.</p>
                            <p><a href="/rooms" class="btn btn-primary btn-outline-primary btn-sm">See Another Menus!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="source/images/menu5.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">Fettuccine Pasta</div>
                            <h3 class="mb-3"><a href="#">Fettuccine Carbonara</a></h3>
                            <p class="mb-4">Its served the sauce consists of fettuccine pasta noodles coated in a creamy sauce made with eggs, 
                                grated Pecorino Romano or Parmesan cheese, pancetta or guanciale, black pepper, and sometimes garlic.</p>
                            <p><a href="/rooms" class="btn btn-primary btn-outline-primary btn-sm">See Another Menus!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="source/images/menu8.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">Penne Pasta</div>
                            <h3 class="mb-3"><a href="#">Penne and cheese</a></h3>
                            <p class="mb-4"> Tossed in a creamy cheese sauce. The sauce is typically 
                                made from a combination of cheeses like Parmesan, mozzarella,
                                and sometimes Gorgonzola or Fontina, melted together with butter and cream or milk.</p>
                            <p><a href="/rooms" class="btn btn-primary btn-outline-primary btn-sm">See Another Menus!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Phone Support</h3>
                    <p>24/7 Call us now.</p>
                    <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>We are socialized. Follow us</p>
                    <p>
                        <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                    <form action="#" class="subscribe">
                        <div class="form-group">
                            <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#f4b214" />
        </svg></div>

    <script src="source/js/jquery-3.2.1.min.js"></script>
    <script src="source/js/jquery-migrate-3.0.0.js"></script>
    <script src="source/js/popper.min.js"></script>
    <script src="source/js/bootstrap.min.js"></script>
    <script src="source/js/owl.carousel.min.js"></script>
    <script src="source/js/jquery.waypoints.min.js"></script>
    <script src="source/js/jquery.stellar.min.js"></script>

    <script src="source/js/jquery.magnific-popup.min.js"></script>
    <script src="source/js/magnific-popup-options.js"></script>

    <script src="source/js/main.js"></script>
</body>

</html>
