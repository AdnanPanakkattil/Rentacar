<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoRent – Navbar</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet" />

    <style>
        :root {
            --dark: #1a1e2e;
            --gold: #f5a623;
            --muted: #aab0c0;
            font-family: 'Nunito', sans-serif;
        }
        .top-bar {
            background: var(--dark);
            font-size: .78rem;
            color: var(--muted);
            padding: 7px 0;
        }

        .top-bar a {
            color: var(--muted);
            text-decoration: none;
        }

        .top-bar a:hover,
        .top-bar .bi {
            color: var(--gold);
        }

        .top-bar .bi {
            margin-right: 5px;
            font-size: .85rem;
        }

        .top-bar .sep {
            opacity: .3;
            margin: 0 12px;
        }

        .top-bar .auth a {
            color: #fff;
            font-weight: 600;
        }

        .top-bar .auth span {
            color: var(--muted);
            margin: 0 4px;
        }

        .top-bar .social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 4px;
            color: #fff;
            font-size: .75rem;
            transition: background .2s;
        }

        .top-bar .social a:hover {
            background: var(--gold);
            border-color: var(--gold);
        }

        .main-nav {
            background: #fff;
            box-shadow: 0 2px 16px rgba(0, 0, 0, .08);
            padding: 10px 0;
            position: relative;
            z-index: 999;
        }

        .navbar-nav .nav-link {
            font-weight: 700;
            font-size: .88rem;
            color: var(--dark) !important;
            padding: 6px 12px !important;
            transition: color .2s;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--gold) !important;
        }

        .navbar-nav .nav-link.active {
            border-bottom: 2px solid var(--gold);
        }

        .navbar-nav .dropdown-menu {
            border: none;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
            border-radius: 8px;
            padding: 8px 0;
        }

        .navbar-nav .dropdown-item {
            font-size: .85rem;
            font-weight: 600;
            padding: 7px 18px;
            color: var(--dark);
        }

        .navbar-nav .dropdown-item:hover {
            background: #fff8ee;
            color: var(--gold);
        }

        .phone-cta {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 7px 16px 7px 8px;
            border-radius: 50px;
        }

        .phone-icon-wrap {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .phone-icon-wrap .bi {
            color: #fff;
            font-size: 1rem;
        }

        .phone-cta .label {
            font-size: .68rem;
            color: #888;
        }

        .phone-cta .number {
            font-size: 1rem;
            font-weight: 800;
            color: var(--dark);
        }

        .navbar-toggler {
            border: none;
            padding: 4px 6px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .hamburger-icon {
            width: 28px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .hamburger-icon span {
            display: block;
            height: 3px;
            border-radius: 2px;
            background: var(--gold);
            transition: all 0.3s ease;
        }

        .language-selector {
            background: black;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            width: 110px;
            position: relative;
            cursor: pointer;
            user-select: none;
        }

        .language-slider {
            position: absolute;
            width: 50px;
            height: calc(100% - 10px);
            background: #f5b800;
            border-radius: 25px;
            transition: left 0.3s ease;
            left: 5px;
        }

        .language-option {
            position: relative;
            z-index: 1;
            width: 50px;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            padding: 8px 0;
            transition: color 0.3s ease;
            color: white;
        }

        .language-option.active {
            color: black;
        }

        .mobile-overlay {
            position: fixed;
            inset: 0;
            background: #fff;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            padding: 28px 28px 40px;
            transform: translateX(-100%);
            opacity: 0;
            transition: transform 0.35s cubic-bezier(0.77, 0, 0.18, 1),
                opacity 0.35s ease;
            overflow-y: auto;
        }

        .mobile-overlay.open {
            transform: translateX(0);
            opacity: 1;
        }

        .mobile-overlay-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .mobile-overlay-header .language-selector {
            background: #111;
        }

        .mobile-close-btn {
            width: 42px;
            height: 42px;
            border: none;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0;
        }

        .mobile-close-btn .bi {
            font-size: 1.8rem;
            color: #222;
        }

        .mobile-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            flex: 1;
        }

        .mobile-nav-list li {
            border-bottom: 1px solid #f0f0f0;
            opacity: 0;
            transform: translateX(-24px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .mobile-overlay.open .mobile-nav-list li:nth-child(1) {
            opacity: 1;
            transform: translateX(0);
            transition-delay: .08s;
        }

        .mobile-overlay.open .mobile-nav-list li:nth-child(2) {
            opacity: 1;
            transform: translateX(0);
            transition-delay: .13s;
        }

        .mobile-overlay.open .mobile-nav-list li:nth-child(3) {
            opacity: 1;
            transform: translateX(0);
            transition-delay: .18s;
        }

        .mobile-overlay.open .mobile-nav-list li:nth-child(4) {
            opacity: 1;
            transform: translateX(0);
            transition-delay: .23s;
        }

        .mobile-overlay.open .mobile-nav-list li:nth-child(5) {
            opacity: 1;
            transform: translateX(0);
            transition-delay: .28s;
        }

        .mobile-overlay.open .mobile-nav-list li:nth-child(6) {
            opacity: 1;
            transform: translateX(0);
            transition-delay: .33s;
        }

        .mobile-nav-list li a {
            display: block;
            padding: 18px 0;
            font-size: 1.1rem;
            font-weight: 800;
            color: #1a1e2e;
            text-decoration: none;
            letter-spacing: .02em;
            transition: color .2s;
        }

        .mobile-nav-list li a:hover {
            color: var(--gold);
        }

        .mobile-nav-list li a .num {
            font-size: .78rem;
            font-weight: 700;
            color: #bbb;
            margin-right: 10px;
            letter-spacing: .05em;
        }

        .mobile-social-float {
            position: fixed;
            right: 18px;
            bottom: 80px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 10000;
            opacity: 0;
            transform: translateX(60px);
            transition: opacity 0.4s ease 0.35s, transform 0.4s ease 0.35s;
        }

        .mobile-overlay.open~.mobile-social-float,
        .mobile-social-float.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .mobile-social-float a {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(0, 0, 0, .15);
            transition: transform .2s, box-shadow .2s;
        }

        .mobile-social-float a:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, .22);
        }

        .mobile-social-float a.whatsapp {
            background: #25d366;
        }

        .mobile-social-float a.viber {
            background: #7360f2;
        }

        .mobile-social-float a.instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%);
        }

        .mobile-social-float a .bi {
            color: #fff;
            font-size: 1.3rem;
        }
        .hamburger-icon{
            font-size:40px;
            color: #f5b800;
        }

        @media (max-width: 991.98px) {
            .phone-cta {
                display: none;
            }

            #mainNav {
                display: none !important;
            }

            .navbar-nav .nav-link.active {
                border-bottom: none;
                border-left: 3px solid var(--gold);
                padding-left: 10px !important;
            }
        }

        @media (min-width: 992px) {

            .navbar-toggler {
                display: none;
            }

            .mobile-overlay {
                display: none !important;
            }

            .mobile-social-float {
                display: none !important;
            }

            #mainNav {
                display: flex !important;
            }
        }

        @media (max-width: 575.98px) {
            .top-bar .contact-info {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="top-bar">
        <div class="container-xl">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">

                <!-- Left: contact info -->
                <div class="contact-info d-flex align-items-center flex-wrap gap-1">
                    <a href="tel:+9288006780"><i class="bi bi-telephone-fill"></i>+92 (8800) - 6780</a>
                    <span class="sep">|</span>
                    <a href="mailto:support@gmail.com"><i class="bi bi-envelope-fill"></i>support@gmail.com</a>
                    <span class="sep d-none d-md-inline">|</span>
                    <span class="d-none d-md-flex align-items-center">
                        <i class="bi bi-geo-alt-fill"></i>55 Main Street, 2nd block, Malborne, Australia
                    </span>
                </div>

                <!-- Right: auth + social -->
                <div class="d-flex align-items-center gap-3">
                    <div class="auth">
                        <a href="#">Login</a>
                        <span>or</span>
                        <a href="#">Register</a>
                    </div>
                    <div class="social d-flex gap-1">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg main-nav sticky-top">
        <div class="container-xl">

            <!-- Brand -->
            <a class="navbar-brand me-lg-4" href="#">
                <img src="img/navbar/logo-1.png" alt="GoRent Logo" style="height:40px;" />
            </a>
            <button class="navbar-toggler ms-auto me-2" type="button" id="overlayOpenBtn" aria-label="Open menu">
                <div class="hamburger-icon"><i class="bi bi-filter-right"></i></div>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-1">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('cars') ? 'active' : '' }}"
                            href="{{ route('cars') }}">Cars</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}"
                            href="{{ route('service') }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact Us</a>
                    </li>

                </ul>

                <!-- Right: language + phone CTA -->
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <div class="language-selector" id="langToggle">
                        <div class="language-slider" id="langSlider"></div>
                        <span class="language-option active" id="enOption" data-language="en">EN</span>
                        <span class="language-option" id="arOption" data-language="ar">AR</span>
                    </div>

                    <!-- Phone CTA -->
                    <div class="phone-cta ms-2">
                        <div class="phone-icon-wrap">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <div class="label">Call Anytime</div>
                            <div class="number">+236 (456) 896 22</div>
                        </div>
                    </div>
                </div>

            </div><!-- /collapse -->

        </div>
    </nav>


    <!-- mobile responsive start -->
    <div class="mobile-overlay" id="mobileOverlay" aria-hidden="true">
        <div class="mobile-overlay-header">
            <div class="language-selector" id="overlayLangToggle">
                <div class="language-slider" id="overlayLangSlider"></div>
                <span class="language-option active" data-language="en">EN</span>
                <span class="language-option" data-language="ar">AR</span>
            </div>

            <button class="mobile-close-btn" id="overlayCloseBtn" aria-label="Close menu">
                <i class="bi bi-x"></i>
            </button>
        </div>
        <ul class="mobile-nav-list">
            <li>
                <a href="{{ route('home') }}">
                    <span class="num">01.</span> Home
                </a>
            </li>
            <li>
                <a href="{{ route('service') }}">
                    <span class="num">02.</span> Services
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}">
                    <span class="num">04.</span> About Us
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}">
                    <span class="num">05.</span> Contact Us
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="num">06.</span> Offer
                </a>
            </li>
        </ul>

    </div>
    <!-- mobile responsive start -->


    <!-- Page Content start -->
    <div class="">
        @yield('content')
    </div>
    <!-- Page Content end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // mobile respon sive
        const overlay = document.getElementById('mobileOverlay');
        const openBtn = document.getElementById('overlayOpenBtn');
        const closeBtn = document.getElementById('overlayCloseBtn');
        const socialFloat = document.getElementById('mobileSocialFloat');

        function openOverlay() {
            overlay.classList.add('open');
            overlay.setAttribute('aria-hidden', 'false');
            socialFloat.classList.add('visible');
            document.body.style.overflow = 'hidden';
        }

        function closeOverlay() {
            overlay.classList.remove('open');
            overlay.setAttribute('aria-hidden', 'true');
            socialFloat.classList.remove('visible');
            document.body.style.overflow = '';
        }

        openBtn.addEventListener('click', openOverlay);
        closeBtn.addEventListener('click', closeOverlay);
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeOverlay();
        });
    </script>

</body>

</html>