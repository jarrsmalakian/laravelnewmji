<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <title>
        LPK Mitra Jaya Indonesia | Lembaga Pengirim Tenaga Magang ke Jepang
    </title>

    <!-- Additional CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-training-studio.css') }}" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>
    {{--  Preloader Start  --}}
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    {{--  Preloader End  --}}

    {{--  Header  --}}
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="https://lpkmji.id" class="logo">Mitra Jaya<em> Indonesia</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="{{ url('home') }}"
                                    class="{{ request()->segment('1') == '' || request()->segment('1') == 'home' ? 'active' : '' }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('ap2ln') }}"
                                    clas="{{ request()->segment('2') == 'ap2ln' ? 'active' : '' }}">AP2LN</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('informasi') }}"
                                    clas="{{ request()->segment('3') == 'informasi' ? 'active' : '' }}">informasi</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('karir') }}"
                                    clas="{{ request()->segment('4') == 'karir' ? 'active' : '' }}">karir</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('kontak') }}"
                                    clas="{{ request()->segment('5') == 'kontak' ? 'active' : '' }}">kontak</a>
                            </li>
                            <li class="main-button">
                                <a href="">Login</a>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{--  End Header  --}}

    @yield('content')

    {{--  Footer  --}}
    <footer id="footer">
        <div class="footer-top" style="background-color: rgb(87, 27, 87)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3 style="text-align: left">LPK Mitra Jaya Indonesia</h3>
                            <p style="color: cyan">
                                Jl. Sunan Kalijaga IIIA <br />
                                Jurang Ombo Selatan, Kota Magelang<br /><br />
                                <strong>Phone:</strong> +622933196196<br />
                                <strong>Email:</strong>
                                admin@lpkmji.id<br />
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

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4 style="text-align: left">Useful Links</h4>
                        <ul>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Home</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">AP2LN</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Informasi</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Karir</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 style="text-align: left">Our Services</h4>
                        <ul>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Magang</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">TG</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Tobi</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Pertanian</a>
                            </li>
                            <li style="text-align: left">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Garmen</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>
                            Tamen quem nulla quae legam multos aute sint
                            culpa legam noster magna
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <strong><span>LPK Mitra Jaya Indonesia</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/ -->
                Designed by <a href="https://lpkmji.id">Admin</a>
            </div>
        </div>
    </footer>
    {{--  End Footer  --}}

    {{--  Script  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    {{--  End Script  --}}
</body>

</html>
