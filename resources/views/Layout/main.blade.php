<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Lembaga Pengirim Tenaga Magang ke Jepang dibawah naungan AP2LN" />
    <meta name="author"
        content="lpk mitra jaya, magang jepang, tempat kursus bahasa jepang, mitra jaya, magang jepang, magang jepang resmi, kerja di jepang, cara magang di jepang, " />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" />
    <title>
        LPK Mitra Jaya Indonesia | Lembaga Pengirim Tenaga Magang ke Jepang
    </title>


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
    {{--  Loading Start  --}}
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
    {{--  Loading End  --}}

    {{--  Header  --}}
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('home') }}" class="logo">Mitra Jaya<em> Indonesia</em></a>
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
                                <a href="{{ url('login') }}">Login</a>
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

    @yield('content')
    @extends('layout.footer')
