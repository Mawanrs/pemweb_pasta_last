<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PASTALIA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/assets/img/PASTALIA.png" rel="icon">
  <link href="frontend/assets/img/PASTALIA.png" rel="PASTALIA">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="">Restaurant PASTALIA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto me-lg-0"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto" href="#portfolio">Menu</a></li>
              {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
              <li class="dropdown"><a href="#"><span>List</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                      <li><a href="#">Blog</a></li>
                      <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-right"></i></a>
                          <ul>
                              <li><a href="#">Makanan Pembuka dan Penutup</a></li>
                              <li><a href="#">Minuman</a></li>
                          </ul>
                      </li>
                      <li><a href="#">Tentang Kami</a></li>
                  </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('login.login') }}" class="get-started-btn scrollto">Login Now!</a>
  </div>
</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        @foreach ($Home as $h)
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>{!! $h->description!!}</h1>
                <h2></h2>
            </div>
        </div>
        @endforeach
        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            @foreach ($Home as $ho)
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="{!! $ho->icon !!}"></i>
                    <h3><a href="{{ route('layouts.booking-form') }}">{!! $ho->layanan !!}</a></h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="frontend/assets/img/PASTALIA.png" class="img-fluid" alt="">
          </div>
          @foreach ($Blog as $b)
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>{{ $b->title }}</h3>
            <p class="fst-italic">{!! $b->detail_content !!}</p>
            <ul>
              <li>{{ $b->description }}</li>
            </ul>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End About Section -->

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        {{-- @foreach ($service as $p) --}}
        <div class="section-title">
          <h2>Our Service</h2>
          <p>Service</p>
        </div>
        {{-- @endforeach --}}
        <div class="row">
          @foreach ($service as $s)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">{!! $s->layanan !!}</a></h4>
              <p>{!! $s->detail_layanan !!}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

    {{-- <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section --> --}}

  <!-- ======= Portfolio section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Menu</h2>
        <p>Menu</p>
      </div>
  
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            @foreach(\App\Models\Product::CATEGORY_SELECT as $key => $value)
              <li data-filter=".filter-{{ strtolower($key) }}">{{ $value }}</li>
            @endforeach
          </ul>
        </div>
      </div>
  
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($product as $p)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($p->category) }}">
              <div class="portfolio-wrap">
                <img src="{{ $p->getFirstMediaUrl('image', 'priview') }}" class="img-fluid" alt="{{ $p->name }}">
                <div class="portfolio-info">
                  <h4>{{ $p->name }}</h4>
                  <p>{{ $p->category }}</p>
                  <div class="portfolio-links">
                    <a href="{{ $p->getFirstMediaUrl('image', 'priview') }}" data-gallery="portfolioGallery" class=".portfolio-lightbox" title="{{ $p->name }}"><i class="bx bx-plus"></i></a>
                    <a href="{{ route('portfolio', ['id' => $p->id]) }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                
                </div>
              </div>
            </div>
          @endforeach
      </div>
  
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.3487881715464!2d5.72862084592532!3d50.89876207189392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0c226a70b3f95%3A0x432879963f00b0ab!2sPletsstraat%2045%2C%206241%20CM%20Bunde%2C%20Belanda!5e0!3m2!1sid!2sid!4v1718124108666!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Pletsstraat 45, 6241 CM Bunde, Belanda</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>example@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 812345</p>
              </div>

            </div>

          </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>PASTALIA<span>&copy;</span></h3>
              <p>
                Pletsstraat 45 <br>
                6241 CM Bunde, Belanda<br><br>
                <strong>Phone:</strong> +62 812345<br>
                <strong>Email:</strong> example@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PASTALIA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">PASTALIA</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="frontend/assets/vendor/aos/aos.js"></script>
  <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>