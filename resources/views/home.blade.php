@extends('navbar')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Car Choosing Experience</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&family=Big+Shoulders:opsz,wght@10..72,100..900&display=swap"
            rel="stylesheet">

        <style>
            :root {
                --gold: #f5b800;
                --dark: #0d0d0d;
                --white: #ffffff;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Barlow', sans-serif;
                overflow-x: hidden;
            }

            /* ======================================
                       HERO CAROUSEL
                    ====================================== */
            #heroCarousel {
                position: relative;
                background: #000;
            }

            .carousel-item {
                height: 92vh;
                max-height: 650px;
                min-height: 480px;
                position: relative;
                overflow: hidden;
            }

            .carousel-item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
                filter: brightness(0.42);
                display: block;
            }

            /* Subtle left-side dark vignette */
            .carousel-item::after {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(105deg,
                        rgba(0, 0, 0, 0.60) 0%,
                        rgba(0, 0, 0, 0.30) 55%,
                        rgba(0, 0, 0, 0.05) 100%);
                pointer-events: none;
            }

            /* ---- Content Block ---- */
            .hero-content {
                position: absolute;
                /* Matches image: ~18% from left, vertical center */
                font-family: "Big Shoulders", sans-serif;
                top: 50%;
                left: 18%;
                transform: translateY(-52%);
                z-index: 10;
                max-width: 680px;
            }

            @media (max-width: 1200px) {
                .hero-content {
                    left: 14%;
                }
            }

            @media (max-width: 991px) {
                .hero-content {
                    left: 8%;
                    max-width: 75%;
                }
            }

            @media (max-width: 768px) {
                .hero-content {
                    left: 5%;
                    max-width: 88%;
                    transform: translateY(-50%);
                }
            }

            @media (max-width: 480px) {
                .hero-content {
                    left: 4%;
                    max-width: 94%;
                }
            }

            /* "YOUR BEST" */
            .hero-small {
                font-family: 'Barlow Condensed', sans-serif;
                font-size: clamp(1rem, 2vw, 1.25rem);
                font-weight: 700;
                color: var(--white);
                letter-spacing: 3px;
                text-transform: uppercase;
                margin-bottom: 6px;
            }

            /* "CAR CHOOSING" — same line */
            .hero-title-row {
                display: flex;
                flex-wrap: wrap;
                align-items: baseline;
                gap: 0 18px;
                line-height: 1;
                margin-bottom: 0;
            }

            .hero-title-row .t-white {
                font-family: 'Barlow Condensed', sans-serif;
                font-size: clamp(3rem, 8vw, 6rem);
                font-weight: 900;
                color: var(--white);
                text-transform: uppercase;
                line-height: 1;
            }

            .hero-title-row .t-gold {
                font-family: 'Barlow Condensed', sans-serif;
                font-size: clamp(3rem, 8vw, 6rem);
                font-weight: 900;
                color: var(--gold);
                text-transform: uppercase;
                line-height: 1;
            }

            /* "EXPERIENCE" */
            .hero-title-bot {
                font-family: 'Barlow Condensed', sans-serif;
                font-size: clamp(3rem, 8vw, 6rem);
                font-weight: 900;
                color: var(--white);
                text-transform: uppercase;
                line-height: 1;
                display: block;
            }

            /* Buttons */
            .hero-btns {
                display: flex;
                align-items: center;
                gap: 24px;
                margin-top: 36px;
                flex-wrap: wrap;
            }

            .btn-read {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: var(--gold);
                color: #000;
                font-family: 'Barlow', sans-serif;
                font-size: clamp(0.8rem, 1.3vw, 0.9rem);
                font-weight: 700;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                padding: 13px 26px;
                border-radius: 2px;
                border: none;
                text-decoration: none;
                transition: background 0.25s, transform 0.2s;
                white-space: nowrap;
            }

            .btn-read:hover {
                background: #e0a800;
                transform: translateX(4px);
                color: #000;
            }

            .btn-watch {
                display: inline-flex;
                align-items: center;
                gap: 14px;
                color: var(--gold);
                font-family: 'Barlow', sans-serif;
                font-size: clamp(0.8rem, 1.3vw, 0.9rem);
                font-weight: 700;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                text-decoration: none;
                cursor: pointer;
                transition: color 0.3s;
            }

            .btn-watch:hover {
                color: #fff;
            }

            .play-wrap {
                position: relative;
                width: 54px;
                height: 54px;
                flex-shrink: 0;
            }

            /* Outer spinning ring */
            .play-ring {
                position: absolute;
                inset: -5px;
                border-radius: 50%;
                border: 2px solid transparent;
                border-top-color: var(--gold);
                border-right-color: rgba(245, 184, 0, 0.3);
                animation: spin-ring 3s linear infinite;
            }

            @keyframes spin-ring {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            /* Pulse */
            .play-pulse {
                position: absolute;
                inset: -9px;
                border-radius: 50%;
                border: 2px solid rgba(245, 184, 0, 0.35);
                animation: pulse-anim 2.2s ease-out infinite;
            }

            @keyframes pulse-anim {
                0% {
                    transform: scale(1);
                    opacity: 0.8;
                }

                100% {
                    transform: scale(1.5);
                    opacity: 0;
                }
            }

            .play-inner {
                width: 54px;
                height: 54px;
                border-radius: 50%;
                background: rgba(20, 20, 20, 0.75);
                border: 2px solid rgba(255, 255, 255, 0.25);
                backdrop-filter: blur(6px);
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background 0.3s, border-color 0.3s;
            }

            .play-inner svg {
                fill: var(--gold);
                width: 16px;
                height: 16px;
                margin-left: 3px;
            }

            .btn-watch:hover .play-inner {
                background: rgba(245, 184, 0, 0.2);
                border-color: var(--gold);
            }

            /* ======================================
                       CUSTOM DOT-LINE INDICATORS (bottom-left)
                    ====================================== */
            .hero-indicators {
                position: absolute;
                bottom: 28px;
                left: 18%;
                z-index: 20;
                display: flex;
                align-items: center;
                gap: 0;
            }

            @media (max-width: 1200px) {
                .hero-indicators {
                    left: 14%;
                }
            }

            @media (max-width: 991px) {
                .hero-indicators {
                    left: 8%;
                }
            }

            @media (max-width: 768px) {
                .hero-indicators {
                    left: 5%;
                    bottom: 16px;
                }
            }

            @media (max-width: 480px) {
                .hero-indicators {
                    left: 4%;
                }
            }

            .ind-item {
                display: inline-flex;
                align-items: center;
                cursor: pointer;
            }

            .ind-dot {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                border: 2px solid rgba(255, 255, 255, 0.55);
                background: transparent;
                transition: background 0.35s, border-color 0.35s, transform 0.3s;
                flex-shrink: 0;
            }

            .ind-line {
                width: 42px;
                height: 2px;
                background: rgba(255, 255, 255, 0.3);
                transition: background 0.35s;
            }

            @media (max-width: 480px) {
                .ind-line {
                    width: 26px;
                }
            }

            /* Active indicator */
            .ind-item.active .ind-dot {
                background: var(--gold);
                border-color: var(--gold);
                transform: scale(1.3);
                box-shadow: 0 0 10px rgba(245, 184, 0, 0.7);
            }

            .ind-item.active~.ind-item .ind-line {
                background: rgba(255, 255, 255, 0.18);
            }

            /* Filled dots for passed slides */
            .ind-item.passed .ind-dot {
                background: var(--gold);
                border-color: var(--gold);
            }

            .ind-item.passed .ind-line {
                background: var(--gold);
            }

            /* Nav Arrows */
            .carousel-control-prev,
            .carousel-control-next {
                width: 44px;
                height: 44px;
                top: 50%;
                bottom: auto;
                transform: translateY(-50%);
                background: rgba(255, 255, 255, 0.08);
                border: 1px solid rgba(255, 255, 255, 0.28);
                border-radius: 50%;
                opacity: 1;
                transition: background 0.3s, border-color 0.3s;
                z-index: 20;
            }

            .carousel-control-prev {
                left: 12px;
            }

            .carousel-control-next {
                right: 12px;
            }

            .carousel-control-prev:hover,
            .carousel-control-next:hover {
                background: var(--gold);
                border-color: var(--gold);
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                width: 14px;
                height: 14px;
            }

            /* Slide-in animation */
            .carousel-item.active .hero-small {
                animation: fadeUp 0.6s ease both;
            }

            .carousel-item.active .hero-title-row,
            .carousel-item.active .hero-title-bot {
                animation: fadeUp 0.7s 0.1s ease both;
            }

            .carousel-item.active .hero-btns {
                animation: fadeUp 0.7s 0.22s ease both;
            }

            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(28px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* ======================================
                       MARQUEE STRIP
                    ====================================== */
            .marquee-wrap {
                background: var(--gold);
                overflow: hidden;
                padding: 13px 0;
                font-family: "Big Shoulders Inline", sans-serif;

            }

            .marquee-track {
                display: flex;
                width: max-content;
                animation: ticker 28s linear infinite;
            }

            .marquee-wrap:hover .marquee-track {
                animation-play-state: paused;
            }

            .m-item {
                display: inline-flex;
                align-items: center;
                gap: 12px;
                padding: 0 28px;
                font-family: 'Barlow Condensed', sans-serif;
                font-size: clamp(0.85rem, 2vw, 1.15rem);
                font-weight: 800;
                letter-spacing: 2.5px;
                text-transform: uppercase;
                color: var(--dark);
                white-space: nowrap;
                cursor: default;
                transition: color 0.25s;
            }

            .marquee-wrap:hover .m-item:hover {
                color: #fff;
            }

            .m-icon {
                font-size: 1rem;
                opacity: 0.7;
            }

            @keyframes ticker {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            :root {
                --gold: #f5b800;
                --card-bg: #1a1f2e;
                --card-muted: #9ea8b8;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Barlow', sans-serif;
            }

            /* ============ SECTION ============ */
            .services-section {
                position: relative;
                background: #ffffff;
                padding: 90px 0 100px;
                overflow: hidden;
            }

            /* Soft gold glow left + right */
            .services-section::before {
                content: '';
                position: absolute;
                width: 500px;
                height: 500px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(255, 200, 50, 0.22) 0%, transparent 65%);
                top: -80px;
                left: -180px;
                pointer-events: none;
                z-index: 0;
                filter: blur(60px);
            }

            .services-section::after {
                content: '';
                position: absolute;
                width: 500px;
                height: 500px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(255, 200, 50, 0.16) 0%, transparent 65%);
                top: -80px;
                right: -180px;
                pointer-events: none;
                z-index: 0;
                filter: blur(60px);
            }

            .services-section .container {
                position: relative;
                z-index: 1;
            }

            /* ============ HEADER ============ */
            .sec-label {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                font-size: 0.75rem;
                font-weight: 700;
                letter-spacing: 3.5px;
                text-transform: uppercase;
                color: var(--gold);
                margin-bottom: 16px;
            }

            .sec-label .ln {
                display: block;
                width: 32px;
                height: 1.5px;
                background: var(--gold);
                opacity: 0.55;
            }

            .sec-label svg {
                width: 36px;
                height: 20px;
            }

            .sec-title {
                font-family: 'Barlow Condensed', sans-serif;
                font-size: clamp(2rem, 4.5vw, 3.2rem);
                font-weight: 900;
                color: #111827;
                text-transform: uppercase;
                line-height: 1.08;
                letter-spacing: 0.4px;
            }

            /* ============ CARDS ============ */
            .cards-row {
                margin-top: 52px;
            }

            .s-card {
                position: relative;
                background: var(--card-bg);
                border-radius: 7px;
                padding: 32px 26px 34px;
                overflow: hidden;
                height: 100%;
                transition: transform 0.35s, box-shadow 0.35s;
            }

            .s-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 24px 55px rgba(0, 0, 0, 0.32);
            }

            /* Gold accent bottom bar */
            .s-card::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: var(--gold);
                border-radius: 0 0 7px 7px;
                transform: scaleX(0.35);
                transform-origin: left;
                transition: transform 0.38s ease;
            }

            .s-card:hover::after {
                transform: scaleX(1);
            }

            /* Triangle pattern background */
            .card-bg-pattern {
                position: absolute;
                top: 0;
                right: 0;
                width: 160px;
                height: 155px;
                opacity: 1;
                pointer-events: none;
                z-index: 0;
            }

            /* Number badge */
            .card-num {
                position: absolute;
                top: 50%;
                right: 0;
                transform: translateY(-50%);
                width: 42px;
                height: 42px;
                background: #fff;
                border-radius: 4px 0 0 4px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Barlow Condensed', sans-serif;
                font-size: 0.9rem;
                font-weight: 900;
                color: #111;
                z-index: 3;
                letter-spacing: 0.5px;
                box-shadow: -3px 0 10px rgba(0, 0, 0, 0.2);
            }

            /* Icon */
            .card-ico {
                position: relative;
                z-index: 2;
                margin-bottom: 46px;
            }

            .card-ico svg {
                width: 46px;
                height: 46px;
            }

            /* Title & desc */
            .card-ttl {
                position: relative;
                z-index: 2;
                font-family: 'Barlow', sans-serif;
                font-size: 1.02rem;
                font-weight: 700;
                color: var(--gold);
                margin-bottom: 11px;
            }

            .card-dsc {
                position: relative;
                z-index: 2;
                font-size: 0.87rem;
                font-weight: 400;
                color: var(--card-muted);
                line-height: 1.68;
            }

            @media (max-width: 991px) {
                .cards-row .col {
                    margin-bottom: 20px;
                }

                .services-section {
                    padding: 60px 0 70px;
                }
            }
        </style>
    </head>

    <body>

        <!-- ============================
                     CAROUSEL
                ============================ -->
        <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4500">

            <!-- No default BS indicators (we build custom) -->
            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=1600&q=80"
                        alt="Cars lined up" />
                    <div class="hero-content">
                        <p class="hero-small">Your Best</p>
                        <div class="hero-title-row">
                            <span class="t-white">CAR</span>
                            <span class="t-gold">CHOOSING</span>
                        </div>
                        <span class="hero-title-bot">EXPERIENCE</span>
                        <div class="hero-btns">
                            <a href="#" class="btn-read">Read More &rarr;</a>
                            <a href="#" class="btn-watch">
                                <span class="play-wrap">
                                    <span class="play-pulse"></span>
                                    <span class="play-ring"></span>
                                    <span class="play-inner">
                                        <svg viewBox="0 0 24 24">
                                            <polygon points="5,3 19,12 5,21" />
                                        </svg>
                                    </span>
                                </span>
                                Watch Video
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=1600&q=80" alt="Luxury car" />
                    <div class="hero-content">
                        <p class="hero-small">Worldwide</p>
                        <div class="hero-title-row">
                            <span class="t-white">AFFORDABLE</span>
                            <span class="t-gold">RENTAL</span>
                        </div>
                        <span class="hero-title-bot">RATES</span>
                        <div class="hero-btns">
                            <a href="#" class="btn-read">Book Now &rarr;</a>
                            <a href="#" class="btn-watch">
                                <span class="play-wrap">
                                    <span class="play-pulse"></span>
                                    <span class="play-ring"></span>
                                    <span class="play-inner">
                                        <svg viewBox="0 0 24 24">
                                            <polygon points="5,3 19,12 5,21" />
                                        </svg>
                                    </span>
                                </span>
                                Watch Video
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1600&q=80" alt="Sports car" />
                    <div class="hero-content">
                        <p class="hero-small">Discover</p>
                        <div class="hero-title-row">
                            <span class="t-white">PREMIUM</span>
                            <span class="t-gold">FLEET</span>
                        </div>
                        <span class="hero-title-bot">SELECTION</span>
                        <div class="hero-btns">
                            <a href="#" class="btn-read">Explore Now &rarr;</a>
                            <a href="#" class="btn-watch">
                                <span class="play-wrap">
                                    <span class="play-pulse"></span>
                                    <span class="play-ring"></span>
                                    <span class="play-inner">
                                        <svg viewBox="0 0 24 24">
                                            <polygon points="5,3 19,12 5,21" />
                                        </svg>
                                    </span>
                                </span>
                                Watch Video
                            </a>
                        </div>
                    </div>
                </div>

            </div><!-- /carousel-inner -->

            <!-- Custom Dot-Line Indicators -->
            <div class="hero-indicators" id="heroIndicators">
                <div class="ind-item active" onclick="goTo(0)">
                    <span class="ind-dot"></span>
                    <span class="ind-line"></span>
                </div>
                <div class="ind-item" onclick="goTo(1)">
                    <span class="ind-dot"></span>
                    <span class="ind-line"></span>
                </div>
                <div class="ind-item" onclick="goTo(2)">
                    <span class="ind-dot"></span>
                </div>
            </div>

            <!-- Arrows -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </section>

        <!-- ============================
                     MARQUEE STRIP
                ============================ -->
        <div class="marquee-wrap">
            <div class="marquee-track">
                <span class="m-item"><span class="m-icon">🚗</span>WORLDWIDE</span>
                <span class="m-item"><span class="m-icon">🚙</span>AFFORDABLE</span>
                <span class="m-item"><span class="m-icon">🚗</span>PREMIUM</span>
                <span class="m-item"><span class="m-icon">🚙</span>RATES</span>
                <span class="m-item"><span class="m-icon">🚗</span>CAR</span>
                <span class="m-item"><span class="m-icon">🚙</span>RENTAL</span>
                <span class="m-item"><span class="m-icon">🚗</span>LUXURY</span>
                <span class="m-item"><span class="m-icon">🚙</span>FLEET</span>
                <!-- duplicate for seamless loop -->
                <span class="m-item"><span class="m-icon">🚗</span>WORLDWIDE</span>
                <span class="m-item"><span class="m-icon">🚙</span>AFFORDABLE</span>
                <span class="m-item"><span class="m-icon">🚗</span>PREMIUM</span>
                <span class="m-item"><span class="m-icon">🚙</span>RATES</span>
                <span class="m-item"><span class="m-icon">🚗</span>CAR</span>
                <span class="m-item"><span class="m-icon">🚙</span>RENTAL</span>
                <span class="m-item"><span class="m-icon">🚗</span>LUXURY</span>
                <span class="m-item"><span class="m-icon">🚙</span>FLEET</span>
            </div>
        </div>

        <section class="services-section">
            <div class="container">

                <!-- Section Header -->
                <div class="text-center">
                    <div class="sec-label justify-content-center">
                        <span class="ln"></span>
                        <!-- Car icon SVG -->
                        <svg viewBox="0 0 52 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 18 L12 8 L40 8 L45 18" stroke="#f5b800" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M4 18 H48 V21 Q48 23 46 23 H6 Q4 23 4 21 Z" stroke="#f5b800" stroke-width="1.8"
                                fill="none" />
                            <circle cx="13" cy="23" r="3" stroke="#f5b800" stroke-width="1.8" />
                            <circle cx="39" cy="23" r="3" stroke="#f5b800" stroke-width="1.8" />
                            <path d="M15 8 L17 14 L35 14 L37 8" stroke="#f5b800" stroke-width="1.4" fill="none" />
                        </svg>
                        <span>What We're Offering</span>
                        <span class="ln"></span>
                    </div>

                    <h2 class="sec-title">
                        Services We're Providing<br>To Customers
                    </h2>
                </div>

                <!-- Cards -->
                <div class="row cards-row g-4">

                    <!-- Card 1: Corporate car rental -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="s-card">
                            <!-- Tri pattern -->
                            <svg class="card-bg-pattern" viewBox="0 0 160 155" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="160,0 160,155 0,155" fill="rgba(255,255,255,0.03)" />
                                <polygon points="160,0 160,100 60,155 120,0" fill="rgba(255,255,255,0.03)" />
                                <polygon points="100,0 160,50 160,0" fill="rgba(255,255,255,0.04)" />
                                <polygon points="130,0 160,30 160,80 90,155 40,155 130,0" fill="rgba(255,255,255,0.025)" />
                            </svg>
                            <div class="card-num">01</div>
                            <!-- Icon: car/building -->
                            <div class="card-ico">
                                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 32 L13 18 L35 18 L40 32" stroke="#f5b800" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <rect x="6" y="31" width="36" height="8" rx="2" stroke="#f5b800" stroke-width="2" />
                                    <circle cx="15" cy="39" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <circle cx="33" cy="39" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <path d="M16 18 L18 24 L30 24 L32 18" stroke="#f5b800" stroke-width="1.5" fill="none" />
                                    <rect x="20" y="24" width="8" height="7" rx="1" stroke="#f5b800" stroke-width="1.5" />
                                </svg>
                            </div>
                            <div class="card-ttl">Corporate car rental</div>
                            <div class="card-dsc">Open multiply a green form lesser their from in made herb multiply</div>
                        </div>
                    </div>

                    <!-- Card 2: Car rental with driver -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="s-card">
                            <svg class="card-bg-pattern" viewBox="0 0 160 155" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="160,0 160,155 0,155" fill="rgba(255,255,255,0.03)" />
                                <polygon points="160,0 160,100 60,155 120,0" fill="rgba(255,255,255,0.03)" />
                                <polygon points="100,0 160,50 160,0" fill="rgba(255,255,255,0.04)" />
                                <polygon points="130,0 160,30 160,80 90,155 40,155 130,0" fill="rgba(255,255,255,0.025)" />
                            </svg>
                            <div class="card-num">02</div>
                            <!-- Icon: taxi with driver -->
                            <div class="card-ico">
                                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Taxi sign -->
                                    <rect x="18" y="10" width="12" height="5" rx="1.5" stroke="#f5b800"
                                        stroke-width="1.8" />
                                    <!-- Car body -->
                                    <path d="M7 30 L12 19 L36 19 L41 30" stroke="#f5b800" stroke-width="2"
                                        stroke-linecap="round" />
                                    <rect x="5" y="29" width="38" height="8" rx="2" stroke="#f5b800" stroke-width="2" />
                                    <circle cx="14" cy="37" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <circle cx="34" cy="37" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <!-- Windows -->
                                    <path d="M14 19 L16 26 L22 26 L22 19" stroke="#f5b800" stroke-width="1.4" />
                                    <path d="M26 19 L26 26 L32 26 L34 19" stroke="#f5b800" stroke-width="1.4" />
                                </svg>
                            </div>
                            <div class="card-ttl">Car rental with driver</div>
                            <div class="card-dsc">Open multiply a green form lesser their from in made herb multiply</div>
                        </div>
                    </div>

                    <!-- Card 3: Airport transfer -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="s-card">
                            <svg class="card-bg-pattern" viewBox="0 0 160 155" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="160,0 160,155 0,155" fill="rgba(255,255,255,0.03)" />
                                <polygon points="160,0 160,100 60,155 120,0" fill="rgba(255,255,255,0.03)" />
                                <polygon points="100,0 160,50 160,0" fill="rgba(255,255,255,0.04)" />
                                <polygon points="130,0 160,30 160,80 90,155 40,155 130,0" fill="rgba(255,255,255,0.025)" />
                            </svg>
                            <div class="card-num">03</div>
                            <!-- Icon: sports car / fast car -->
                            <div class="card-ico">
                                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Speed lines -->
                                    <path d="M3 22 L10 22" stroke="#f5b800" stroke-width="1.8" stroke-linecap="round"
                                        opacity="0.5" />
                                    <path d="M3 26 L8 26" stroke="#f5b800" stroke-width="1.8" stroke-linecap="round"
                                        opacity="0.35" />
                                    <!-- Low sports car -->
                                    <path d="M10 30 L15 21 L34 21 L42 30" stroke="#f5b800" stroke-width="2"
                                        stroke-linecap="round" />
                                    <path d="M8 30 H44 V33 Q44 35 42 35 H10 Q8 35 8 33 Z" stroke="#f5b800" stroke-width="2"
                                        fill="none" />
                                    <circle cx="15" cy="35" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <circle cx="36" cy="35" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <!-- Windshield -->
                                    <path d="M17 21 L20 27 L30 27 L33 21" stroke="#f5b800" stroke-width="1.4" fill="none" />
                                </svg>
                            </div>
                            <div class="card-ttl">Airport transfer</div>
                            <div class="card-dsc">Open multiply a green form lesser their from in made herb multiply</div>
                        </div>
                    </div>

                    <!-- Card 4: Fleet leasing -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="s-card">
                            <svg class="card-bg-pattern" viewBox="0 0 160 155" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="160,0 160,155 0,155" fill="rgba(255,255,255,0.03)" />
                                <polygon points="160,0 160,100 60,155 120,0" fill="rgba(255,255,255,0.03)" />
                                <polygon points="100,0 160,50 160,0" fill="rgba(255,255,255,0.04)" />
                                <polygon points="130,0 160,30 160,80 90,155 40,155 130,0" fill="rgba(255,255,255,0.025)" />
                            </svg>
                            <div class="card-num">04</div>
                            <!-- Icon: car with shield/check -->
                            <div class="card-ico">
                                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Car -->
                                    <path d="M7 30 L12 20 L34 20 L39 30" stroke="#f5b800" stroke-width="2"
                                        stroke-linecap="round" />
                                    <rect x="5" y="29" width="36" height="8" rx="2" stroke="#f5b800" stroke-width="2" />
                                    <circle cx="14" cy="37" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <circle cx="32" cy="37" r="2.5" stroke="#f5b800" stroke-width="2" />
                                    <!-- Shield with check on top right of car -->
                                    <path d="M35 10 L42 12 L42 18 Q42 22 38.5 24 Q35 22 35 18 Z" stroke="#f5b800"
                                        stroke-width="1.8" fill="rgba(245,184,0,0.1)" />
                                    <path d="M37 17 L38.5 19 L41 15" stroke="#f5b800" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="card-ttl">Fleet leasing</div>
                            <div class="card-dsc">Open multiply a green form lesser their from in made herb multiply</div>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            const carouselEl = document.getElementById('heroCarousel');
            const bsCarousel = new bootstrap.Carousel(carouselEl, { interval: 4500, ride: 'carousel' });
            const indItems = document.querySelectorAll('.ind-item');
            const totalSlides = indItems.length;

            function goTo(index) { bsCarousel.to(index); }

            function updateIndicators(activeIndex) {
                indItems.forEach((el, i) => {
                    el.classList.remove('active', 'passed');
                    if (i === activeIndex) el.classList.add('active');
                    if (i < activeIndex) el.classList.add('passed');
                });
            }

            carouselEl.addEventListener('slid.bs.carousel', e => updateIndicators(e.to));

            // Individual marquee item hover → white
            document.querySelectorAll('.m-item').forEach(item => {
                item.addEventListener('mouseenter', () => { item.style.color = '#fff'; });
                item.addEventListener('mouseleave', () => { item.style.color = ''; });
            });
        </script>
    </body>

    </html>

@endsection