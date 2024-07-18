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
                            <a class="nav-link " href="/">Home</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/about') }}">About</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li> --}}
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

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(source/images/header2.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>About PASTALIA's</h1>
                        <p>“Semplicità, autenticità, calore e cordialità.”</p>
                        <p><a href="{{ url('/loginuser') }}" class="btn btn-primary">Book Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="heading-wrap  element-animate">
                        <h4 class="sub-heading">The Beginning of PASTALIA</h4>
                        <h2 class="heading">Our Story</h2>
                        <p class="">PASTALIA began with a vision to bring the soulful flavors of Italy to BSD City.
                            Pastalia was born out of a vision to create a place where every meal tells a story of 
                            quality, flavor, and heart. From our carefully curated menu of traditional to our inviting 
                            ambiance, we strive to transport our guests to the heart of Italy with each visit. Whether 
                            you're enjoying an intimate dinner in our cozy indoor dining area, savoring the fresh air 
                            on our outdoor terrace, or indulging in luxury in our VIP room, every visit to Pastalia is 
                            an opportunity to experience the essence of Italy.
                        </p>
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
                    <h4 class="sub-heading">The PASTALIA's rooms</h4>
                    <h2 class="heading">Our Rooms Paradise</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="source/images/indoor.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">First Room</div>
                            <h3 class="mb-3"><a href="#">INDOOR</a></h3>
                            <p class="mb-4">Step into our indoor dining area at Pastalia, where cozy elegance meets 
                                Italian charm. Perfect for intimate gatherings of 2, 3 and 4 guests or family dinners, 
                                our indoor seating offers a warm and inviting atmosphere. Enjoy the rustic décor and 
                                subdued lighting that create a relaxed dining experience, complemented by attentive 
                                service and a menu filled with authentic Italian flavors. Please note, dining time is 
                                limited to 90 minutes with last orders taken 15 minutes before closing.</p>
                            {{-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read Bio</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="source/images/outdoor.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">Second Room</div>
                            <h3 class="mb-3"><a href="#">OUTDOOR</a></h3>
                            <p class="mb-4">Experience the refreshing ambiance of our outdoor patio at Pastalia, ideal 
                                for enjoying the beautiful weather while savoring delicious food. Whether you prefer 
                                dining under the sun or stars, our outdoor seating provides a picturesque setting with 
                                comfortable seating arrangements for 2, 3 and 4 guests or more. It's the perfect spot 
                                for al fresco dining with friends and loved ones, offering a delightful escape from 
                                the hustle and bustle. Please note, dining time is limited to 90 minutes with last 
                                orders taken 15 minutes before closing.</p>
                            {{-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read Bio</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="source/images/vip.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">Third Room</div>
                            <h3 class="mb-3"><a href="#">VIP Room</a></h3>
                            <p class="mb-4">For those seeking exclusivity and privacy, our VIP ROOM at Pastalia offers a 
                                luxurious dining experience. Featuring elegant décor, personalized service, and a serene 
                                atmosphere, our VIP Room is designed to cater to special occasions and private events with 
                                a maximum capacity of up to 10 guests. Whether it's a corporate gathering, a romantic dinner, 
                                or a celebration with family, the VIP Room ensures a memorable dining experience with bespoke 
                                menus and attention to detail. Please note, dining time is limited to 90 minutes with last 
                                orders taken 15 minutes before closing.</p>
                            {{-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read Bio</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="section-cover" data-stellar-background-ratio="0.5"
        style="background-image: url(source/images/about1.jpg);">
        <div class="container">
            <div class="row justify-content-center align-items-center intro">
                <div class="col-md-9 text-center element-animate">
                    <h2>È stato fantastico averti qui. A presto!<h2>
                    {{-- <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem
                        tempore expedita facere facilis, dolores!</p> --}}
                    {{-- <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774"
                            class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
                </div> --}}
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
