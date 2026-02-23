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
            --dark-bg: #1a1e2e;
            --gold: #f5a623;
            --gold-dark: #d4891a;
            --white: #ffffff;
            --light-gray: #e5e7ef;
            --text-muted-top: #aab0c0;
        }

        * {
            font-family: 'Nunito', sans-serif;
        }

        /* ── TOP BAR ─────────────────────────────────────────── */
        .top-bar {
            background: var(--dark-bg);
            font-size: 0.78rem;
            color: var(--text-muted-top);
            padding: 7px 0;
        }

        .top-bar a {
            color: var(--text-muted-top);
            text-decoration: none;
            transition: color .2s;
        }

        .top-bar a:hover {
            color: var(--gold);
        }

        .top-bar .bi {
            color: var(--gold);
            margin-right: 5px;
            font-size: 0.85rem;
        }

        .top-bar .sep {
            opacity: .3;
            margin: 0 12px;
        }

        /* auth links */
        .top-bar .auth a {
            color: var(--white);
            font-weight: 600;
        }

        .top-bar .auth span {
            color: var(--text-muted-top);
            margin: 0 4px;
        }

        /* social icons */
        .top-bar .social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 4px;
            color: var(--white);
            font-size: .75rem;
            transition: background .2s, border-color .2s;
        }

        .top-bar .social a:hover {
            background: var(--gold);
            border-color: var(--gold);
            color: #fff;
        }

        /* ── MAIN NAVBAR ─────────────────────────────────────── */
        .main-nav {
            background: var(--white);
            box-shadow: 0 2px 16px rgba(0, 0, 0, .08);
            padding: 10px 0;
        }

        /* Brand / Logo */
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .brand-icon {
            width: 46px;
            height: 46px;
            background: var(--dark-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-icon svg {
            width: 28px;
        }

        .brand-text {
            line-height: 1.1;
        }

        .brand-text .go {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--dark-bg);
        }

        .brand-text .rent {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--gold);
        }

        .brand-sub {
            font-size: 0.62rem;
            color: #888;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        /* Nav links */
        .navbar-nav .nav-link {
            font-weight: 700;
            font-size: .88rem;
            color: var(--dark-bg) !important;
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

        /* Dropdown */
        .navbar-nav .dropdown-menu {
            border: none;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
            border-radius: 8px;
            min-width: 170px;
            padding: 8px 0;
        }

        .navbar-nav .dropdown-item {
            font-size: .85rem;
            font-weight: 600;
            padding: 7px 18px;
            color: var(--dark-bg);
        }

        .navbar-nav .dropdown-item:hover {
            background: #fff8ee;
            color: var(--gold);
        }

        /* Search & Cart icons */
        .nav-icons {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .nav-icons .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.15rem;
            color: var(--dark-bg);
            position: relative;
            transition: color .2s;
        }

        .nav-icons .icon-btn:hover {
            color: var(--gold);
        }

        .cart-badge {
            position: absolute;
            top: -6px;
            right: -7px;
            background: var(--gold);
            color: #fff;
            font-size: 0.58rem;
            font-weight: 800;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Phone CTA */
        .phone-cta {
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 50px;
            padding: 7px 16px 7px 8px;
        }

        .phone-icon-wrap {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .phone-icon-wrap .bi {
            color: #fff;
            font-size: 1rem;
        }

        .phone-cta .label {
            font-size: 0.68rem;
            color: #888;
        }

        .phone-cta .number {
            font-size: 1rem;
            font-weight: 800;
            color: var(--dark-bg);
            line-height: 1.1;
        }

        /* Hamburger color */
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
            transition: all .3s;
        }

        /* ── RESPONSIVE tweaks ───────────────────────────────── */
        @media (max-width: 991.98px) {
            .phone-cta {
                display: none;
            }

            .navbar-collapse {
                padding: 10px 0 6px;
            }

            .navbar-nav .nav-link.active {
                border-bottom: none;
                border-left: 3px solid var(--gold);
                padding-left: 10px !important;
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

    <!-- ══════════════════════════════════════════════════
     TOP BAR
══════════════════════════════════════════════════ -->
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

    <!-- ══════════════════════════════════════════════════
     MAIN NAVBAR
══════════════════════════════════════════════════ -->
    <nav class="navbar navbar-expand-lg main-nav sticky-top">
        <div class="container-xl">

            <!-- Brand -->
            <a class="navbar-brand me-lg-4" href="#">
                <img src="img/navbar/logo-1.png" alt="">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler ms-auto me-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav">
                <div class="hamburger-icon"><span></span><span></span><span></span></div>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="mainNav">

                <!-- Nav Links -->
                <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-1">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('cars') ? 'active' : '' }}"
                            href="{{ route('cars') }}">Cars</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}"
                            href="{{ route('service') }}">Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>

                </ul>
                <!-- Right: icons + phone CTA -->
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">

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

    <div class="">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>