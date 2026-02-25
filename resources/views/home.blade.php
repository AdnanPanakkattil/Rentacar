@extends('navbar')

@section('content')

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
        overflow-x: hidden;
    }

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
        /* font-family: "Big Shoulders", sans-serif; */
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
        /* font-family: 'Barlow Condensed', sans-serif; */
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
        /* font-family: 'Barlow Condensed', sans-serif; */
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 900;
        color: var(--white);
        text-transform: uppercase;
        line-height: 1;
    }

    .hero-title-row .t-gold {
        /* font-family: 'Barlow Condensed', sans-serif; */
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 900;
        color: var(--gold);
        text-transform: uppercase;
        line-height: 1;
    }

    /* "EXPERIENCE" */
    .hero-title-bot {
        /* font-family: 'Barlow Condensed', sans-serif; */
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
        /* font-family: 'Barlow', sans-serif; */
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
        /* font-family: 'Barlow', sans-serif; */
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
        padding-top: 40px;
        height: 100px;
        /* font-family: "Big Shoulders Inline", sans-serif; */

    }

    .marquee-track {
        display: flex;
        width: max-content;
        font-family: "Bebas Neue", sans-serif;
        font-weight: 400;
        font-style: normal;
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
        /* font-family: 'Barlow Condensed', sans-serif; */
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

    /* 
                body {
                    font-family: 'Barlow', sans-serif;
                } */

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
        /* font-family: 'Barlow Condensed', sans-serif; */
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
        /* font-family: 'Barlow Condensed', sans-serif; */
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
        /* font-family: 'Barlow', sans-serif; */
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


    :root {
        --yellow: #F5A623;
        --yellow-dark: #e09610;
        --dark: #111827;
        --text: #374151;
        --light-bg: #FFFDF5;
    }

    /* ── ABOUT SECTION ──────────────────────────────────────────── */
    .about-section {
        padding: 90px 0;
        overflow: hidden;
        position: relative;
    }

    /* subtle dot-grid decoration */
    .about-section::before {
        content: '';
        position: absolute;
        top: 60px;
        left: 220px;
        width: 140px;
        height: 140px;
        background-image: radial-gradient(circle, #d1d5db 1.5px, transparent 1.5px);
        background-size: 16px 16px;
        opacity: .45;
        pointer-events: none;
    }

    /* ── IMAGE COLLAGE ──────────────────────────────────────────── */
    .collage-wrapper {
        position: relative;
        width: 100%;
        height: 480px;
    }

    .collage-img {
        position: absolute;
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 16px 48px rgba(0, 0, 0, .18);
    }

    /* top-right — lady in car */
    .img-top {
        top: 0;
        right: 0;
        width: 62%;
        height: 55%;
    }

    /* bottom-left — man with phone */
    .img-bottom-left {
        bottom: 0;
        left: 0;
        width: 42%;
        height: 56%;
    }

    /* bottom-right — black Mercedes */
    .img-bottom-right {
        bottom: 0;
        right: 3%;
        width: 50%;
        height: 50%;
    }

    /* yellow experience badge */
    .badge-experience {
        position: absolute;
        top: 28%;
        left: 12%;
        background: var(--yellow);
        color: var(--dark);
        border-radius: 14px;
        padding: 20px 24px;
        text-align: center;
        box-shadow: 0 8px 28px rgba(245, 166, 35, .45);
        z-index: 10;
        line-height: 1.2;
    }

    .badge-experience .num {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 2.8rem;
        font-weight: 800;
        display: block;
    }

    .badge-experience .label {
        font-size: .9rem;
        font-weight: 600;
    }

    /* arrow nav button */
    .collage-nav {
        position: absolute;
        bottom: 26%;
        right: -14px;
        width: 42px;
        height: 42px;
        background: var(--yellow);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.1rem;
        box-shadow: 0 4px 14px rgba(245, 166, 35, .55);
        cursor: pointer;
        z-index: 10;
        transition: background .2s;
    }

    .collage-nav:hover {
        background: var(--yellow-dark);
    }

    /* ── RIGHT CONTENT ──────────────────────────────────────────── */
    .section-label {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: .85rem;
        font-weight: 600;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--text);
        margin-bottom: 14px;
    }

    .section-label .car-icon {
        color: var(--yellow);
        font-size: 1.3rem;
    }

    .section-title {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        color: var(--dark);
        line-height: 1.05;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .section-subtitle {
        color: var(--yellow);
        font-weight: 600;
        font-size: 1.1rem;
        line-height: 1.5;
        margin-bottom: 18px;
    }

    .section-body {
        color: #6b7280;
        font-size: .95rem;
        line-height: 1.75;
        margin-bottom: 32px;
    }

    /* ── SKILL BARS ─────────────────────────────────────────────── */
    .skill-label {
        display: flex;
        justify-content: space-between;
        font-weight: 600;
        font-size: .95rem;
        color: var(--dark);
        margin-bottom: 8px;
    }

    .progress {
        height: 6px;
        border-radius: 99px;
        background: #e5e7eb;
        margin-bottom: 24px;
        overflow: visible;
    }

    .progress-bar {
        background: var(--yellow);
        border-radius: 99px;
        position: relative;
        transition: width 1.2s cubic-bezier(.4, 0, .2, 1);
    }

    /* ── BOTTOM ROW ─────────────────────────────────────────────── */
    .btn-readmore {
        background: var(--yellow);
        color: var(--dark);
        font-weight: 700;
        font-size: .95rem;
        border: none;
        padding: 14px 30px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: background .2s, transform .15s;
        text-decoration: none;
    }

    .btn-readmore:hover {
        background: var(--yellow-dark);
        color: var(--dark);
        transform: translateY(-2px);
    }

    .call-block {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .call-icon {
        width: 50px;
        height: 50px;
        background: transparent;
        border: 2px solid var(--yellow);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--yellow);
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .call-block .call-label {
        font-size: .82rem;
        color: #6b7280;
        margin-bottom: 2px;
    }

    .call-block .call-number {
        font-weight: 700;
        font-size: 1.05rem;
        color: var(--dark);
    }

    /* ── RESPONSIVE ─────────────────────────────────────────────── */
    @media (max-width: 991px) {
        .collage-wrapper {
            height: 360px;
        }

        .about-section {
            padding: 60px 0;
        }
    }

    @media (max-width: 767px) {
        .collage-wrapper {
            height: 300px;
            margin-bottom: 40px;
        }
    }
</style>

<!-- carousel section start -->

<section id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4500">
    <div class="carousel-inner">
        <!-- card 1 -->
        <div class="carousel-item active">
            <img src="./img/homepage/carousel-1.jpg" alt="carousel image">
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
        <!-- card 2 -->
        <div class="carousel-item">
            <img src="./img/homepage/carousel2.jpeg" alt="Luxury car" />
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
        <!-- card 3 -->
        <div class="carousel-item">
            <img src="./img/homepage/carousel3.jpg" alt="Sports car" />
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

    </div>

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
    <!-- left and right arow -->

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</section>
<!-- carousel section end -->

<!-- automatic sliding section start -->
<div class="marquee-wrap">
    <div class="marquee-track">
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>WORLDWIDE</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>AFFORDABLE</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>PREMIUM</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>RATES</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>CAR</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>RENTAL</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>LUXURY</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>FLEET</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>WORLDWIDE</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>AFFORDABLE</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>PREMIUM</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>RATES</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>CAR</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>RENTAL</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>LUXURY</span>
        <span class="m-item"><span class="m-icon"><i class="fas fa-car"></i></span>FLEET</span>
    </div>
</div>
<!-- automatic sliding section end -->

<!-- section 2 start -->

<section class="services-section">
    <div class="container">
        <div class="text-center">
            <div class="sec-label justify-content-center">
                <span class="ln"></span>
                <span>What We're Offering</span>
                <span class="ln"></span>
            </div>
            <h2 class="sec-title">
                Services We're Providing<br>To Customers
            </h2>
        </div>

        <!-- Cards -->
        <div class="row cards-row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="s-card">
                    <svg class="card-bg-pattern" viewBox="0 0 160 155" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="160,0 160,155 0,155" fill="rgba(255,255,255,0.03)" />
                        <polygon points="160,0 160,100 60,155 120,0" fill="rgba(255,255,255,0.03)" />
                        <polygon points="100,0 160,50 160,0" fill="rgba(255,255,255,0.04)" />
                        <polygon points="130,0 160,30 160,80 90,155 40,155 130,0" fill="rgba(255,255,255,0.025)" />
                    </svg>
                    <div class="card-num">01</div>
                    <!-- Icon: car/building -->
                    <div class="card-ico">

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
        </div>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- ─── LEFT: IMAGE COLLAGE ─────────────────────────────── -->
            <div class="col-lg-6">
                <div class="collage-wrapper">

                    <!-- top-right image: lady in luxury car -->
                    <img
                        class="collage-img img-top"
                        src="https://images.unsplash.com/photo-1576134600061-45e2c9c8b2f4?w=600&q=80"
                        alt="Passenger in luxury car" />

                    <!-- bottom-left: man with phone by car -->
                    <img
                        class="collage-img img-bottom-left"
                        src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=400&q=80"
                        alt="Driver with phone" />

                    <!-- bottom-right: black Mercedes -->
                    <img
                        class="collage-img img-bottom-right"
                        src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?w=600&q=80"
                        alt="Black luxury sedan" />

                    <!-- experience badge -->
                    <div class="badge-experience">
                        <span class="num">50+</span>
                        <span class="label">Years of<br>Experience</span>
                    </div>

                    <!-- nav arrow -->
                    <div class="collage-nav">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                </div>
            </div>
            <!-- ─── END LEFT ──────────────────────────────────────────── -->

            <!-- ─── RIGHT: TEXT CONTENT ──────────────────────────────── -->
            <div class="col-lg-6 ps-lg-5">

                <!-- label -->
                <div class="section-label">
                    <i class="bi bi-car-front-fill car-icon"></i>
                    ABOUT GORENT
                </div>

                <!-- heading -->
                <h2 class="section-title">
                    Welcome to Gorent<br>Car Booking Company
                </h2>

                <!-- subtitle -->
                <p class="section-subtitle">
                    Committed to providing our customers with<br>ultimate service.
                </p>

                <!-- body copy -->
                <p class="section-body">
                    Lorem ipsum is simply ipun txns mane so dummy text of free available in
                    market the printing and typesetting industry has been the industry's standard
                    dummy text ever.
                </p>

                <!-- skill bars -->
                <div class="skill-label">
                    <span>Time Awareness</span>
                    <span>90%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%"
                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="skill-label">
                    <span>Driver Experience</span>
                    <span>70%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%"
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <!-- CTA row -->
                <div class="d-flex align-items-center gap-4 flex-wrap mt-4">
                    <a href="#" class="btn-readmore">
                        Read More <i class="bi bi-arrow-right"></i>
                    </a>

                    <div class="call-block">
                        <div class="call-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <div class="call-label">Call to Anytime</div>
                            <div class="call-number">+1 (550) 250 5260</div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ─── END RIGHT ─────────────────────────────────────────── -->

        </div>
    </div>
</section>


<!-- section 2 end -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const carouselEl = document.getElementById('heroCarousel');
    const bsCarousel = new bootstrap.Carousel(carouselEl, {
        interval: 4500,
        ride: 'carousel'
    });
    const indItems = document.querySelectorAll('.ind-item');
    const totalSlides = indItems.length;

    function goTo(index) {
        bsCarousel.to(index);
    }

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
        item.addEventListener('mouseenter', () => {
            item.style.color = '#fff';
        });
        item.addEventListener('mouseleave', () => {
            item.style.color = '';
        });
    });
    const bars = document.querySelectorAll('.progress-bar');
    bars.forEach(bar => {
        const target = bar.style.width;
        bar.style.width = '0';
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    bar.style.width = target;
                    obs.disconnect();
                }
            });
        }, {
            threshold: 0.4
        });
        obs.observe(bar);
    });
</script>
<!-- </body>

    </html> -->

@endsection