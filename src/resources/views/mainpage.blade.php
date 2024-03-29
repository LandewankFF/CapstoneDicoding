<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dicoding:email" content="landewankfahrezaf@gmail.com">
    <title>Edugot</title>
    <!-- Import icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/headfoot.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />

    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e0c342d7-b9bd-46d7-9456-6b4157370476";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body>
    <a href="#content-edugot" class="skip-link">Skip To Content</a>
    <header>
        <div class="container-head">
            <div class="logo">
                <div>
                    <img src="{{ asset('../assets/image/logos.jpg') }}" alt="logo" class="w-100">
                </div>
                <h3>Edugot</h3>
            </div>
            <div id="iconsearch">
                <i class="fa-solid fa-magnifying-glass" style="color: #f0e7e7;"></i>
            </div>
            <div class="hamburger">
                <i class="fa-solid fa-bars" id="hamburgerIcon" style="color: #f0e7e7;"></i>
            </div>
            <nav class="navMenu">
                <ul>
                    <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}  text-decoration-none">Beranda</a></li>
                    <li><a href="/layanan" class="{{ Request::is('layanan') ? 'active' : '' }} text-decoration-none">Layanan</a></li>
                    <li><a href="/blog" class="{{ Request::is('blog') ? 'active' : '' }} text-decoration-none">Blog</a></li>
                    <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }} text-decoration-none">Tentang kami</a></li>
                    @auth
                        <li><a href="/profile" class="{{ Request::is('profile') ? 'active' : '' }} text-decoration-none">Profile</a></li>
                    @endauth

                    @if (!Auth::user())
                    <li><a href="{{ url('login') }}" id="login" class="text-decoration-none">Masuk</a></li>
                    @else
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <li>
                                <button type="submit" class="btn menu-link btn-logout" id="login">
                                    <i class="menu-icon tf-icons bx bx-log-out"></i>
                                    <div>Logout</div>
                                </button>
                            </li>
                            
                        </form>
                    @endif
                </ul>
            </nav>
            <div class="Authentication">
                @if (!Auth::user())
                    <a href="{{ url('login') }}" id="loginLink" class="text-decoration-none">Masuk</a>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn menu-link btn-logout" id="loginLink">
                            <i class="menu-icon tf-icons bx bx-log-out"></i>
                            <div>Logout</div>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 d-flex flex-column">
                    <a href="">
                        <img src="{{ asset('../assets/image/logos.jpg') }}" alt="logo" class="img-logo">
                    </a>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column">
                    <h2>Informasi</h2>
                    <div class="link-footer">
                        <a href="">
                            <h4>Testimoni</h4>
                        </a>
                    </div>
                    <div class="link-footer">
                        <a href="">
                            <h4>Blog</h4>
                        </a>
                    </div>
                    <div class="link-footer">
                        <a href="">
                            <h4>Metode Pembayaran</h4>
                        </a>
                    </div>
                    <div class="link-footer">
                        <a href="">
                            <h4>Garanssi Pengiriman</h4>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <h4>Pusat Bantuan</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column">
                    <h2>Kontak</h2>
                    <div class="link-footer">
                        <a href="">
                            <h4>Email</h4>
                        </a>
                    </div>
                    <div class="link-footer">
                        <a href="">
                            <h4>Lokasi</h4>
                        </a>
                    </div>
                    <div class="link-footer">
                        <a href="">
                            <h4>FAQ</h4>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-3 d-flex flex-column">
                    <h2>Sosial Media</h2>
                    <div class="link-footer">
                        <h4><span class="mdi mdi-instagram"><a href="" class="mx-1">Instagram</a> </span></h4>
                    </div>
                    <div class="link-footer">
                        <h4><span class="mdi mdi-youtube"><a href="" class="mx-1">Youtube</a></span></h4>
                    </div>
                    <div class="link-footer">
                        <h4><span class="mdi mdi-twitter"><a href="" class="mx-1">Twitter</a></span></h4>
                    </div>
                    <div class="link-footer">
                        <h4><span class="mdi mdi-facebook"><a href="" class="mx-1">Facebook</a></span></h4>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h4>Copyright © 2023 Edugot</h4>
                </div>
                <div class="d-flex">
                    <a href="" class="mx-3">
                        <h4>Keamanan & Privasi</h4>
                    </a>
                    <a href="">
                        <h4>Pusat Bantuan</h4>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('../assets/js/headfoot.js') }}"></script>
    <script src="{{ asset('../assets/js/map.js') }}"></script>
    @yield('script')
</body>

</html>
