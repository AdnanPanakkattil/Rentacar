@extends('navbar')

@section('content')

<style>
    :root {
        --gold: #f5b800;
        --dark: #0d0d0d;
        --white: #ffffff;
    }

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

    .hero-content {
        position: absolute;
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

    .hero-small {
        font-size: clamp(1rem, 2vw, 1.25rem);
        font-weight: 700;
        color: var(--white);
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .hero-title-row {
        display: flex;
        flex-wrap: wrap;
        align-items: baseline;
        gap: 0 18px;
        line-height: 1;
        margin-bottom: 0;
    }

    .hero-title-row .t-white {
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 900;
        color: var(--white);
        text-transform: uppercase;
        line-height: 1;
    }

    .hero-title-row .t-gold {
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 900;
        color: var(--gold);
        text-transform: uppercase;
        line-height: 1;
    }

    .hero-title-bot {
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 900;
        color: var(--white);
        text-transform: uppercase;
        line-height: 1;
        display: block;
    }

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

    .ind-item.active .ind-dot {
        background: var(--gold);
        border-color: var(--gold);
        transform: scale(1.3);
        box-shadow: 0 0 10px rgba(245, 184, 0, 0.7);
    }

    .ind-item.active~.ind-item .ind-line {
        background: rgba(255, 255, 255, 0.18);
    }

    .ind-item.passed .ind-dot {
        background: var(--gold);
        border-color: var(--gold);
    }

    .ind-item.passed .ind-line {
        background: var(--gold);
    }

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

    .marquee-wrap {
        background: var(--gold);
        overflow: hidden;
        padding: 13px 0;
        padding-top: 40px;
        height: 100px;
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

    /* automatic sliding section start */
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

    .services-section {
        position: relative;
        background: #ffffff;
        padding: 90px 0 100px;
        overflow: hidden;
    }

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
        font-size: clamp(2rem, 4.5vw, 3.2rem);
        font-weight: 900;
        color: #111827;
        text-transform: uppercase;
        line-height: 1.08;
        letter-spacing: 0.4px;
    }

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
        font-size: 0.9rem;
        font-weight: 900;
        color: #111;
        z-index: 3;
        letter-spacing: 0.5px;
        box-shadow: -3px 0 10px rgba(0, 0, 0, 0.2);
    }

    .card-ico {
        position: relative;
        z-index: 2;
        margin-bottom: 46px;
    }

    .card-ico svg {
        width: 46px;
        height: 46px;
    }

    .card-ttl {
        position: relative;
        z-index: 2;
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

    /* card section end  */


    :root {
        --yellow: #F5A900;
        --dark: #1A1A2E;
        --card-dark: #1C2033;
        --text-muted-custom: #6c757d;
    }

    body {
        font-family: 'Barlow', sans-serif;
        overflow-x: hidden;
    }

    /* ========== SECTION 1: ABOUT ========== */
    #about {
        background: #fffdf5;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    #about::before {
        content: '';
        position: absolute;
        top: -80px;
        right: -80px;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(245, 169, 0, 0.12) 0%, transparent 70%);
        border-radius: 50%;
    }

    #about::after {
        content: '';
        position: absolute;
        bottom: -60px;
        left: -60px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(245, 169, 0, 0.08) 0%, transparent 70%);
        border-radius: 50%;
    }

    /* image collage */
    .about-images {
        position: relative;
        min-height: 440px;
    }

    .about-images .img-main {
        position: absolute;
        top: 0;
        right: 0;
        width: 72%;
        height: 260px;
        object-fit: cover;
        border-radius: 16px;
    }

    .about-images .img-bottom-left {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 52%;
        height: 230px;
        object-fit: cover;
        border-radius: 16px;
    }

    .about-images .img-bottom-right {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 44%;
        height: 200px;
        object-fit: cover;
        border-radius: 16px;
    }

    .exp-badge {
        position: absolute;
        top: 90px;
        left: 0;
        background: var(--yellow);
        border-radius: 14px;
        padding: 20px 24px;
        z-index: 10;
        text-align: center;
        box-shadow: 0 8px 24px rgba(245, 169, 0, 0.35);
    }

    .exp-badge .num {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 2.6rem;
        font-weight: 800;
        color: #fff;
        line-height: 1;
    }

    .exp-badge p {
        font-size: .85rem;
        color: #fff;
        margin: 0;
        font-weight: 600;
    }

    .section-label {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: .8rem;
        font-weight: 700;
        letter-spacing: 2px;
        color: var(--yellow);
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .section-label svg {
        flex-shrink: 0;
    }

    h2.section-title {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        color: var(--dark);
        line-height: 1.1;
        text-transform: uppercase;
    }

    .sub-yellow {
        color: var(--yellow);
        font-weight: 600;
        font-size: 1rem;
    }

    /* progress bars */
    .skill-label {
        display: flex;
        justify-content: space-between;
        font-weight: 600;
        font-size: .9rem;
        margin-bottom: 6px;
    }

    .progress {
        height: 6px;
        border-radius: 10px;
        background: #e8e8e8;
    }

    .progress-bar {
        background: var(--yellow);
        border-radius: 10px;
    }

    .btn-yellow {
        background: var(--yellow);
        color: #fff;
        font-weight: 700;
        font-size: .95rem;
        padding: 14px 28px;
        border: none;
        border-radius: 8px;
        transition: background .2s, transform .15s;
    }

    .btn-yellow:hover {
        background: #d9930a;
        color: #fff;
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
        background: var(--yellow);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .call-block small {
        color: var(--text-muted-custom);
        font-size: .8rem;
    }

    .call-block strong {
        font-size: 1rem;
        font-weight: 700;
        color: var(--dark);
    }

    /* ========== SECTION 2: STEPS ========== */
    #steps {
        background: #fff;
        padding: 80px 0;
    }

    .step-card {
        background: var(--card-dark);
        border-radius: 20px;
        padding: 30px 24px 28px;
        height: 100%;
        position: relative;
        overflow: hidden;
        transition: transform .25s, box-shadow .25s;
    }

    .step-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    }

    .step-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(245, 169, 0, .05) 0%, transparent 60%);
        pointer-events: none;
    }

    .step-icon-row {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
    }

    .step-icon {
        width: 52px;
        height: 52px;
        background: var(--yellow);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .step-icon svg {
        width: 24px;
        height: 24px;
        fill: #fff;
    }

    .step-arrow {
        color: rgba(255, 255, 255, .3);
        font-size: 1.4rem;
    }

    .step-num {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: rgba(255, 255, 255, .12);
        margin-left: auto;
    }

    .step-card h5 {
        color: var(--yellow);
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 10px;
    }

    .step-card p {
        color: rgba(255, 255, 255, .55);
        font-size: .875rem;
        margin: 0;
        line-height: 1.6;
    }

    /* ========== SECTION 3: BOOKING ========== */
    #booking {
        padding: 60px 20px;
        background: #f9f7f2;
    }

    .booking-wrap {
        position: relative;
        background: var(--dark);
        border-radius: 24px;
        overflow: hidden;
        min-height: 380px;
        display: flex;
        align-items: stretch;
    }

    .booking-bg-img {
        position: absolute;
        inset: 0;
        background: url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=1200&q=80') center/cover no-repeat;
        opacity: .45;
    }

    .booking-person {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: flex-end;
        padding: 0 0 0 40px;
        flex: 0 0 auto;
    }

    .booking-person img {
        height: 360px;
        object-fit: cover;
        object-position: top;
        border-radius: 0;
        filter: drop-shadow(0 4px 24px rgba(0, 0, 0, .5));
    }

    .booking-form-wrap {
        position: relative;
        z-index: 2;
        background: #fff;
        border-radius: 16px;
        margin: 24px 24px 24px auto;
        padding: 0;
        flex: 0 0 420px;
        max-width: 420px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, .25);
    }

    .booking-form-header {
        background: var(--yellow);
        padding: 18px 28px;
        text-align: center;
    }

    .booking-form-header h3 {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 1.8rem;
        font-weight: 800;
        color: #fff;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .booking-form-body {
        padding: 24px 28px 28px;
    }

    .form-label-custom {
        font-size: .8rem;
        font-weight: 600;
        color: #888;
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 6px;
    }

    .form-control-custom {
        border: 1.5px solid #e8e8e8;
        border-radius: 50px;
        padding: 10px 18px;
        font-size: .9rem;
        width: 100%;
        outline: none;
        color: #444;
        background: #fff;
        transition: border-color .2s;
        appearance: none;
    }

    .form-control-custom:focus {
        border-color: var(--yellow);
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .form-group-custom {
        margin-bottom: 0;
    }

    @media (max-width: 991px) {
        .about-images {
            min-height: 300px;
        }

        .about-images .img-main {
            width: 75%;
            height: 200px;
        }

        .about-images .img-bottom-left {
            height: 180px;
            width: 50%;
        }

        .about-images .img-bottom-right {
            height: 160px;
            width: 44%;
        }

        .exp-badge {
            top: 60px;
        }

        .booking-person {
            display: none;
        }

        .booking-form-wrap {
            margin: 24px auto;
            flex: 0 0 auto;
            max-width: 100%;
            width: 90%;
        }

        .booking-wrap {
            justify-content: center;
            min-height: auto;
        }
    }

    @media (max-width: 576px) {
        .form-grid {
            grid-template-columns: 1fr;
        }

        .about-images {
            min-height: 260px;
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


<!-- section 2 end -->





<!-- section 3 start -->
<section id="about">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- Left: Image Collage -->
            <div class="col-lg-6 col-md-12">
                <div class="about-images">
                    <!-- Badge -->
                    <div class="exp-badge">
                        <div class="num">50+</div>
                        <p>Years of<br>Experience</p>
                    </div>
                    <!-- Main top-right image -->
                    <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=600&q=80"
                        alt="Passenger in car" class="img-main" />
                    <!-- Bottom-left -->
                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=400&q=80"
                        alt="Car exterior" class="img-bottom-left" />
                    <!-- Bottom-right -->
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=400&q=80"
                        alt="Luxury car" class="img-bottom-right" />
                </div>
            </div>

            <!-- Right: Content -->
            <div class="col-lg-6 col-md-12">
                <div class="section-label">
                    <svg width="36" height="16" viewBox="0 0 36 16" fill="none">
                        <path d="M2 10c2-6 8-8 14-8s12 2 14 8" stroke="#F5A900" stroke-width="2" fill="none" />
                        <circle cx="30" cy="12" r="3" fill="#F5A900" />
                        <circle cx="6" cy="12" r="3" fill="#F5A900" />
                    </svg>
                    ABOUT GORENT
                </div>
                <h2 class="section-title mb-2">Welcome to Gorent<br>Car Booking Company</h2>
                <p class="sub-yellow mb-3">Committed to providing our customers with ultimate service.</p>
                <p class="text-muted mb-4" style="line-height:1.7;">
                    Lorem ipsum is simply ipun txns mane so dummy text of free available in market the printing
                    and typesetting industry has been the industry's standard dummy text ever.
                </p>

                <!-- Progress bars -->
                <div class="mb-3">
                    <div class="skill-label"><span>Time Awareness</span><span>90%</span></div>
                    <div class="progress">
                        <div class="progress-bar" style="width:90%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="skill-label"><span>Driver Experience</span><span>70%</span></div>
                    <div class="progress">
                        <div class="progress-bar" style="width:70%"></div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="d-flex align-items-center flex-wrap gap-3 mt-2">
                    <button class="btn-yellow">Read More &rarr;</button>
                    <div class="call-block">
                        <div class="call-icon">
                            <svg width="22" height="22" fill="white" viewBox="0 0 24 24">
                                <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z" />
                            </svg>
                        </div>
                        <div>
                            <small>Call to Anytime</small><br>
                            <strong>+1 (550) 250 5260</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- section 3 end -->






<!-- section 4 start -->
<section id="steps">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5">
            <div class="section-label justify-content-center">
                <svg width="36" height="16" viewBox="0 0 36 16" fill="none">
                    <path d="M2 10c2-6 8-8 14-8s12 2 14 8" stroke="#F5A900" stroke-width="2" fill="none" />
                    <circle cx="30" cy="12" r="3" fill="#F5A900" />
                    <circle cx="6" cy="12" r="3" fill="#F5A900" />
                </svg>
                STEPS
            </div>
            <h2 class="section-title">Car Rental Process</h2>
        </div>

        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-icon-row">
                        <div class="step-icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m-4 12h8a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2z" />
                            </svg>
                        </div>
                        <span class="step-arrow">&#8594;</span>
                        <span class="step-num">01</span>
                    </div>
                    <h5>Choose A Car</h5>
                    <p>Open multipy a green form lesser their from in made herb multiply</p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-icon-row">
                        <div class="step-icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm9 0a3 3 0 0 0 0-6M23 21v-2a4 4 0 0 0-3-3.87" />
                            </svg>
                        </div>
                        <span class="step-arrow">&#8594;</span>
                        <span class="step-num">02</span>
                    </div>
                    <h5>Come In Contact</h5>
                    <p>Open multipy a green form lesser their from in made herb multiply</p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-icon-row">
                        <div class="step-icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>
                        <span class="step-arrow">&#8594;</span>
                        <span class="step-num">03</span>
                    </div>
                    <h5>Pick-Up Locations</h5>
                    <p>Open multipy a green form lesser their from in made herb multiply</p>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-icon-row">
                        <div class="step-icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 8v4l3 3" />
                            </svg>
                        </div>
                        <span class="step-arrow">&#8594;</span>
                        <span class="step-num">04</span>
                    </div>
                    <h5>Enjoy Driving</h5>
                    <p>Open multipy a green form lesser their from in made herb multiply</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- section 4 end -->


<!-- section 5 start -->
<section id="booking">
    <div class="container">
        <div class="booking-wrap">
            <!-- BG overlay -->
            <div class="booking-bg-img"></div>

            <!-- Person image -->
            <div class="booking-person">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&q=80&fit=crop&crop=face,top"
                    alt="Agent" />
            </div>

            <!-- Form -->
            <div class="booking-form-wrap">
                <div class="booking-form-header">
                    <h3>Book A Car</h3>
                </div>
                <div class="booking-form-body">
                    <div class="form-grid mb-3">
                        <!-- Pickup -->
                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <svg width="14" height="14" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg> Pickup
                            </label>
                            <select class="form-control-custom">
                                <option value="" disabled selected>Enter a Location</option>
                                <option>New York</option>
                                <option>Los Angeles</option>
                                <option>Chicago</option>
                            </select>
                        </div>
                        <!-- Drop off -->
                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <svg width="14" height="14" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg> Drop off
                            </label>
                            <select class="form-control-custom">
                                <option value="" disabled selected>Enter a Location</option>
                                <option>Boston</option>
                                <option>Miami</option>
                                <option>Seattle</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-grid mb-4">
                        <!-- Car type -->
                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <svg width="14" height="14" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="1" y="3" width="15" height="13" rx="2" />
                                    <path d="M16 8h4l3 3v5h-7V8z" />
                                    <circle cx="5.5" cy="18.5" r="2.5" />
                                    <circle cx="18.5" cy="18.5" r="2.5" />
                                </svg> Your car type
                            </label>
                            <select class="form-control-custom">
                                <option value="" disabled selected>Your Car Type</option>
                                <option>Sedan</option>
                                <option>SUV</option>
                                <option>Convertible</option>
                                <option>Luxury</option>
                            </select>
                        </div>
                        <!-- Date -->
                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <svg width="14" height="14" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                    <path d="M16 2v4M8 2v4M3 10h18" />
                                </svg> Date
                            </label>
                            <input type="date" class="form-control-custom" placeholder="mm/dd/yyyy" />
                        </div>
                    </div>
                    <button class="btn-yellow w-100">Book Now &rarr;</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- section 5 end -->















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
    document.querySelectorAll('.m-item').forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.style.color = '#fff';
        });
        item.addEventListener('mouseleave', () => {
            item.style.color = '';
        });
    });
</script>

@endsection