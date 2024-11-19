<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Seberapa Rutin Sebuah Motor Harus Diservis ke Bengkel</title>
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
                                        <li class="menu"><a href="/about">Tentang</a>
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
                                        <li class="special-link"><a href="booking">Penjadwalan</a></li>
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
                            <h6 class="section-subtitle ltn__secondary-color">//  Selamat Datang di Artikel Kami</h6>
                            <h1 class="section-title white-color">Artikel Otomotif</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/">Beranda</a></li>
                                <li>Artikel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->    
    <!-- Utilize Cart Menu Start
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Wheel Bearing Retainer</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Brake Conversion Kit</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">OE Replica Wheels</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Shock Mount Insulator</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    Utilize Cart Menu End -->

    <div class="ltn__utilize-overlay"></div>
     <!-- PAGE DETAILS AREA START (blog-details) -->
     <div class="ltn__page-details-area ltn__blog-details-area mb-120">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__blog-details-wrap">
                        <div class="ltn__page-details-inner ltn__blog-details-inner">
                            <div class="ltn__blog-meta">
                               
                            </div>
                            <h2 class="ltn__blog-title">Seberapa Rutin Sebuah Motor Harus Diservis ke Bengkel</h2>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><img src="img/blog/25.jpg" alt="#">Oleh detikOto</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>30 Oktober 2018 
                                    </li>
                                    
                                </ul>
                            </div>
                            <img src="img\blog\25.jpg" alt="Image">
                            <p>Layaknya tubuh manusia, sepeda motor pun perlu dirawat. Sekalipun motor itu baru dibeli dan kondisinya masih mulus bukan berarti kita menyampingkan perawatannya.</p>
                            <p>Salah satu hal penting agar motor dalam kondisi prima adalah melakukan servis secara rutin. Seberapa rutin motor harus rajin diservis ke bengkel?</p>
                            <p>Mengutip Totally Motor, Selasa (30/10/2018), soal servis rutin disesuaikan dengan model motor. Misalnya motor sport dan motor touring memiliki rentang waktu kerutinan servis yang berbeda.</p>
                            <p>Servis motor secara rutin juga tergantung dari bagaimana penggunaannya. Kalau motor sering dikendarai dan jaraknya jauh tentu berpengaruh terhadap performa motor.</p>
                            <p>Sebaiknya jika merasa performa motor kurang oke, bisa langsung membawanya ke bengkel. Atau, kalau ingin lebih teratur bisa menggunakan acuan yang diberikan pabrikan pada buku servis rutin</p>
                            <p>Biasanya apabila motor telah mencapai jarak tertentu maka disarankan untuk melakukan servis ke bengkel.</p>
                            <p>Sebenarnya melakukan perawatan rutin motor tidak harus membawanya ke bengkel. Bisa juga dengan melakukan perawatan sendiri. Contohnya mengecek tekanan ban secara rutin, mengganti oli mesin rutin, hingga mengecek filter bensin sendiri.</p>
                            <p>Dengan rajin melakukan perawatan pada motor dijamin motor umurnya bisa panjang.</p>
                            <p>Jika memang sudah aus dan perlu diganti, sebaiknya segera dilakukan penggantian. Namun, ingat selalu untuk membeli suku cadang tersebut di tempat terpercaya yang bisa memberikan Anda jaminan 100% suku cadang asli dan bergaransi.</p>  
                        <!-- blog-tags-social-media -->
                        <div class="ltn__blog-tags-social-media mt-80 row">
                            <div class="ltn__tagcloud-widget col-lg-8">
                                <h4>Tag terkait</h4>
                                <ul>
                                    <li>
                                        <a href="#">Mesin</a>
                                    </li>
                                    <li>
                                        <a href="#">Performa</a>
                                    </li>
                                    <li>
                                        <a href="#">Rutin</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <hr>
                        <!-- prev-next-btn -->
                        
                        <hr>
                        <!-- related-post -->
                        <div class="related-post-area mb-50">
                            <h4 class="title-2">Post Terkait</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Blog Item -->
                                    <div class="ltn__blog-item ltn__blog-item-6">
                                        <div class="ltn__blog-img">
                                            <a href="blog6"><img src="img\blog\26.jpg" alt="Image"></a>
                                        </div>
                                        <div class="ltn__blog-brief">
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date ltn__secondary-color">
                                                        <i class="far fa-calendar-alt"></i>17 Oktober, 2024
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="ltn__blog-title"><a href="blog6">Apa Tanda Dibutuhkan Servis Besar Motor, dan Bagaimana Prosesnya?</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Blog Item -->
                                    <div class="ltn__blog-item ltn__blog-item-6">
                                        <div class="ltn__blog-img">
                                            <a href="blog7"><img src="img\blog\27.jpg" alt="Image"></a>
                                        </div>
                                        <div class="ltn__blog-brief">
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date ltn__secondary-color">
                                                        <i class="far fa-calendar-alt"></i>20 November, 2023
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="ltn__blog-title"><a href="blog7">Duh Gawat, Ini 6 Hal yang Bikin Motor Gampang Turun Mesin!</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE DETAILS AREA END -->
         <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 pt-80 pb-110 plr--9">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/4.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/6.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/7.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/8.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
  
</body>
</html>
