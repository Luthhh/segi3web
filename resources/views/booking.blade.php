<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Penjadwalan - Segitiga Motor</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/logo-5.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent gradient-color-2">
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="/ "><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix get-support-color-white">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Dapatkan Dukungan</h6>
                                    <h4><a href="tel:+62 851-7429-6682">+62 851-7429-6682</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu"><a href="/ ">Beranda</a>
                                        </li>
                                        <li class="menu"><a href="about">Tentang</a>
                                        </li>
                                        <li class="menu"><a href="service">Servis</a>
                                        </li>
                                        <li class="menu"><a href="product">Produk</a>
                                        </li>
                                        <li class="menu"><a href="galeri">Galeri</a>
                                        </li>
                                        <li class="menu"><a href="blog">Artikel</a>
                                        </li>
                                        <li><a href="contact">Kontak</a></li>
                                        <li class="special-link"><a href="/booking">Penjadwalan</a></li>
                                      <!-- Jika pengguna sudah login, tampilkan tombol Logout -->
                                    <li class="special-link">
                                        @if (Auth::check())
                                            <a href="{{ route('logout') }}" class="btn btn" 
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Keluar
                                            </a>
                                            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                                                @csrf
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn">Masuk</a>
                                        @endif
                                    </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle menu-btn-white menu-btn-border--- d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->
    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="/"><img src="img/logo-2.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="/">Beranda</a>
                    </li>
                    <li><a href="about">Tentang</a>
                    </li>
                    <li><a href="service">Servis</a>
                    </li>
                    <li><a href="product">Produk</a>
                    </li>
                    <li><a href="galeri">Galeri</a>
                    </li>
                    <li><a href="blog">Artikel</a>
                    </li>
                    <li><a href="contact">Kontak</a></li>
                  	<li class="special-link">
    <a href="booking" class="fw-bold d-inline-block" style="width: 210px;">Penjadwalan</a>
</li>

                    <!-- Jika pengguna sudah login, tampilkan tombol Logout -->
                    <li class="special-link" >
                         @if (Auth::check())
                            <a href="{{ route('logout') }}" class="btn btn" style="width: 210px;" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                                @csrf
                            </form>
                         @else
                            <a href="{{ route('login') }}" class="btn btn" style="width: 210px;">Masuk</a>
                         @endif
                    </li>

                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <ul>
                        <li><a href="https://www.instagram.com/segitigamotorbgr_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.tiktok.com/@segitigamotor_bengkel?_t=8pvZaNNw0S0&_r=1" title="TikTok"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="mailto:Segitigamotor024@gmail.com" title="Email"><i class="fas fa-envelope"></i></a></li>
                        <li><a href="tel:+6285174296682" title="Telephone"><i class="fas fa-phone"></i></a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="img/IMG_1233.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Selamat Datang di Bengkel Kami</h6>
                            <h1 class="section-title white-color">Jadwal</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/">Beranda</a></li>
                                <li>Penjadwalan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- APPOINTMENT AREA START -->
    <div class="ltn__appointment-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__appointment-inner">
                      @if(session('success'))
                                <div class="alert alert-success mt-4">
                                    <strong>Pemesanan berhasil!</strong> Terima kasih telah melakukan pemesanan.
                                </div>
                            @endif
                    <form action="{{ route('bookings') }}" method="POST">
                        @csrf
                        <h6>Informasi Kendaraan</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom">
                                    <input type="text" name="ltn__name" placeholder="Plat No Motor" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <input type="text" name="ltn__lastname" placeholder="Merk Motor" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <input type="text" name="ltn__email" placeholder="Tipe Motor" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item ">
                                    <input type="text" name="service_type" placeholder="Tipe Servis" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h6>Tanggal</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item ltn__datepicker mb-20">
                                            <input type="date" name="booking_date" class="form-control" placeholder="Tanggal" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-time">
                                            <select name="booking_time" class="nice-select" required>
                                                <option value="">Waktu</option>
                                                <option value="09:00">9:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="phone" placeholder="No Telepon" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6>Catatan</h6>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="ltn__message" placeholder="Enter message"></textarea>
                        </div>
                        <div class="btn-wrapper text-center mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Kirim Sekarang</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- APPOINTMENT AREA END -->

    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        <div class="footer-top-area  section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="img/IMG_1293.jpg">
                            <h6 class="ltn__secondary-color text-uppercase">// jadwal dan waktu</h6>
                            <h4 class="footer-title">Buka di waktu.</h4>
                            <ul>
                                <li>Setiap hari <span>07:00AM - 20:00PM</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Servis.</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service">Servis CVT</a></li>
                                    <li><a href="service">Servis Injeksi</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service">Servsi Carbu</a></li>
                                    <li><a href="service">Servis Throttle Body</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">Umpan berita.</h4>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i ></i> Juni 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog1">4 Bagian Motor yang Harus Dicek Sebelum Dibawa ke Bengkel</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i ></i> Juli 23, 2022</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog2">Tips Perawatan Sepeda Motor yang Wajib Anda Lakukan</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="/"><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6>Hak Cipta & Desain Oleh</h6>
                                    <h4>Segitiga - Motor <span class="current-year"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                              <li><a href="https://tokopedia.link/LmlWuSJPsOb"title="Shop"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="https://www.instagram.com/segitigamotorbgr_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.tiktok.com/@segitigamotor_bengkel?_t=8pvZaNNw0S0&_r=1" title="TikTok"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="mailto:Segitigamotor024@gmail.com" title="Email"><i class="fas fa-envelope"></i></a></li>
                                <li><a href="tel:+6285174296682" title="Telephone"><i class="fas fa-phone"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  <script>
    // Memastikan halaman tidak di-cache di browser saat kembali
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
    </script>
  
</body>
</html>

