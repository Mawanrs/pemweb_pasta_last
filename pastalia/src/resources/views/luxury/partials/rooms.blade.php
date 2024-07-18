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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="source/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme Style -->
    <link rel="stylesheet" href="source/css/stylemenu.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">PASTALIA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('layouts.index') }}">Home</a>
            </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('About') }}">About</a>
            </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link " href="{{ route('Rooms')}}">Menu</a>
            </li>
               <li class="nav-item cta">
                <a class="nav-link" href="{{ route('bookings.store') }}"><span>Book Now</span></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(source/images/header3.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>PASTALIA's Exquisite Menu</h1>
                        <p>Indulge in the rich flavors of Italy with Pastalia's exquisite menu, 
                          crafted to satisfy every palate. From traditional pasta dishes bursting with homemade sauces.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
          <div class="container">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                  <h1 class="mb-5">MENUS</h1>
              </div>
              <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                  <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                      <li class="nav-item">
                          <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                              {{-- <i class="fa fa-coffee fa-2x text-primary"></i> --}}
                              <div class="ps-3">
                                  {{-- <small class="text-body">Popular</small> --}}
                                  <h6 class="mt-n1 mb-0">Pastas</h6>
                              </div>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                              {{-- <i class="fa fa-hamburger fa-2x text-primary"></i> --}}
                              <div class="ps-3">
                                  {{-- <small class="text-body">Special</small> --}}
                                  <h6 class="mt-n1 mb-0">Drinks</h6>
                              </div>
                          </a>
                      </li>
                  </ul>
                  <div class="tab-content">
                      <div id="tab-1" class="tab-pane fade show p-0 active">
                          <div class="row g-4">
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu1.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Spaghetti Aglio Olio </span>
                                              <a href="/form" class="text-primary">$115</a>
                                          </h5>
                                          <small class="fst-italic">Spaghetti tossed in olive oil, garlic, and chili flakes, garnished with parsley. </small>
                                            <small class="fst-italic">It offers a simple yet flavorful experience with a hint of spice.</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu3.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Spaghetti Bolognese</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Served with meat sauce made from ground beef, tomatoes, onions, and herbs.</small>
                                          <small class="fst-italic">It's a comforting dish that combines savory flavors with tender pasta.</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu5.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Fettuccini Carbonara</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Coated in a creamy sauce made with eggs, Parmesan cheese, pancetta,</small>
                                          <small class="fst-italic">and black pepper. It's known for its creamy texture and indulgent flavor.</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu6.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Fettuccini Salmon Pesto</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Served with a creamy pesto sauce with fresh basil, pine nuts, Parmesan cheese, </small>
                                          <small class="fst-italic">and topped with tender pieces of salmon. It offers a delightful blend of richness.</small>
                                        </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu8.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Penne and cheese</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Mixed with a creamy cheese sauce, Parmesan, and mozzarella. </small>
                                          <small class="fst-italic">It's a comforting and cheesy dish beloved by pasta enthusiasts. </small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu9.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Rasta Pasta</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Made with colorful bell peppers, onions, tomatoes, and jerk seasoning.</small>
                                          <small class="fst-italic">It offers a spicy and zesty Caribbean-inspired twist to traditional pasta dishes.</small>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      {{-- drinks start --}}
                      <div id="tab-2" class="tab-pane fade show p-0">
                          <div class="row g-4">
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/drink1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Kopi</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu-2.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Chicken Burger</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu-3.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Chicken Burger</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu-4.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Chicken Burger</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu-5.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Chicken Burger</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu-6.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Chicken Burger</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu-7.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Chicken Burger</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid rounded" src="source/images/menu-8.jpg" alt="" style="width: 80px;">
                                      <div class="w-100 d-flex flex-column text-start ps-4">
                                          <h5 class="d-flex justify-content-between border-bottom pb-2">
                                              <span>Chicken Burger</span>
                                              <span class="text-primary">$115</span>
                                          </h5>
                                          <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                      </div>
                                  </div>
                              </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Menu End -->
    <footer class="site-footer">
        <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
            <h5 class="text-light fw-normal">Monday - Saturday</h5>
            <p>09AM - 09PM</p>
            <h5 class="text-light fw-normal">Sunday</h5>
            <p>10AM - 08PM</p>
        </div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

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