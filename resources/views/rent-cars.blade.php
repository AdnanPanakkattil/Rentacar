@extends('navbar')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>LuxuryDrive | Premium Car Rental</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#f20d0d",
                            "background-light": "#f8f5f5",
                            "background-dark": "#221010",
                        },
                        fontFamily: {
                            "display": ["Plus Jakarta Sans", "sans-serif"]
                        },
                        borderRadius: {
                            "DEFAULT": "0.25rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "full": "9999px"
                        },
                        animation: {
                            'scroll': 'scroll 40s linear infinite',
                        },
                        keyframes: {
                            scroll: {
                                '0%': { transform: 'translateX(0)' },
                                '100%': { transform: 'translateX(-50%)' },
                            }
                        }
                    },
                },
            }
        </script>
        <style type="text/tailwindcss">
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
            .hide-scrollbar::-webkit-scrollbar {
                display: none;
            }
            .hide-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            .carousel-container:hover .animate-scroll {
                animation-play-state: paused;
            }
            .service-card-pattern {
                background-image: radial-gradient(circle at 2px 2px, rgba(242, 13, 13, 0.05) 1px, transparent 0);
                background-size: 24px 24px;
            }
            .stat-card-glow {
                box-shadow: 0 0 20px rgba(242, 13, 13, 0.1);
            }
            .hero-pattern {
                clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
            }
            .outline-text {
                -webkit-text-stroke: 1px rgba(255,255,255,0.2);
                color: transparent;
            }
        </style>
    </head>

    <body
        class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 selection:bg-primary/30">
        <header
            class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center gap-2">
                        <div class="text-primary">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <span
                            class="text-xl font-extrabold tracking-tight text-slate-900 dark:text-white uppercase">LuxuryDrive</span>
                    </div>
                    <nav class="hidden md:flex items-center gap-8">
                        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Home</a>
                        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Fleet</a>
                        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">How it Works</a>
                        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Special Offers</a>
                    </nav>
                    <div class="flex items-center gap-4">
                        <button class="hidden sm:block text-sm font-bold px-4 py-2 hover:text-primary transition-colors">Log
                            In</button>
                        <button
                            class="bg-primary text-white text-sm font-bold px-6 py-2.5 rounded-lg hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <main>
            
            <section class="py-24 bg-white dark:bg-background-dark/30 overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="space-y-8">
                            <div>
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="material-symbols-outlined text-primary">analytics</span>
                                    <span class="text-primary font-bold uppercase tracking-[0.2em] text-xs">Fun Facts</span>
                                </div>
                                <h2
                                    class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white leading-tight mb-6 uppercase">
                                    Experience Freedom On Our <span class="text-primary">Car Booking Service</span>
                                </h2>
                                <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                                    We pride ourselves on delivering a seamless and high-quality experience. Here's a
                                    glimpse of what we've achieved with our commitment to excellence.
                                </p>
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div
                                    class="bg-primary p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white stat-card-glow transform transition hover:scale-105">
                                    <span class="material-symbols-outlined text-4xl mb-4">directions_car</span>
                                    <span class="text-4xl font-black">1,000+</span>
                                    <span class="text-xs font-bold uppercase mt-2 opacity-90">Vehicle Fleet</span>
                                </div>
                                <div
                                    class="bg-slate-900 p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white transform transition hover:scale-105">
                                    <span class="material-symbols-outlined text-4xl mb-4 text-primary">speed</span>
                                    <span class="text-4xl font-black">10M+</span>
                                    <span class="text-xs font-bold uppercase mt-2 opacity-90">Miles Driven</span>
                                </div>
                                <div
                                    class="bg-slate-900 p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white transform transition hover:scale-105">
                                    <span class="material-symbols-outlined text-4xl mb-4 text-primary">local_activity</span>
                                    <span class="text-4xl font-black">15K+</span>
                                    <span class="text-xs font-bold uppercase mt-2 opacity-90">Bookings Reserved</span>
                                </div>
                                <div
                                    class="bg-primary p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white stat-card-glow transform transition hover:scale-105">
                                    <span class="material-symbols-outlined text-4xl mb-4">location_on</span>
                                    <span class="text-4xl font-black">50K+</span>
                                    <span class="text-xs font-bold uppercase mt-2 opacity-90">Pickup &amp; Drop</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="relative w-full aspect-[4/5] md:aspect-square">
                                <img alt="Car View"
                                    class="absolute top-0 right-0 w-4/5 h-4/5 object-cover rounded-3xl shadow-2xl z-0"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQHe0vFBdgEGEIN38AT8zw2A--7bM0UoZQW0F0z9b6jh6Um7Ugxt70DjVMjlS7PzQhwusD08NyiZyq8CX9abK1TGXIErbtdBtEdTqAS-Cn4qJsg--hzBxGmgkIOzwjKNyzb2l-U-MVqnZxU5h59s84plzbiqjkg1mGn6cbFepDKqR1Rz_Fsn6nlaz0vukVLjWMgZRtR535VNuyfSRXJLVzuLcfc1GIJtmSV1tQv1bKGAW_y8kKEGla2ojZJONALnRQV-UYj_cYBa0" />
                                <img alt="Interior View"
                                    class="absolute bottom-0 left-0 w-4/5 h-4/5 object-cover rounded-3xl shadow-2xl z-10 border-8 border-white dark:border-slate-900"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwmOKVsrMXWXOGuMTrRNNb_FcfNgsbI7bE3jI3QpHF-imivooQoJ7BKYcw-fzAiywNFVtSPbXLLwsHuaiRfPXTwa8EOrMZcKd-xRujuLCTV8K_9U70Tc8eCDuQcq9er1oXGxr5rHyvy6P0pD0kDqPXDeOjPa_bcgIEhAwbyoULQ-eXDNFVCUtIdLkGp2WA3htdR6-rrSsX9725mWOH_b3dytZw14wUnna7pgEHxqQEWcQDCshw2N1NyKkW6vj81BusvhpKxtBbpP0" />
                                <div
                                    class="absolute -right-8 top-1/4 w-24 h-48 bg-primary/10 -z-10 grid grid-cols-4 gap-2 p-2">
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-slate-950">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <div class="flex items-center justify-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-primary">directions_car</span>
                            <span class="text-primary font-bold uppercase tracking-[0.2em] text-xs">Popular Car</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-extrabold text-white uppercase leading-tight">
                            Most Popular <span class="text-primary">Car Types</span>
                        </h2>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                        <div
                            class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-primary transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">garage_home</span>
                            <h3 class="text-white font-bold text-lg mb-1">Crossover</h3>
                            <p class="text-slate-500 text-xs font-bold uppercase">5 Cars</p>
                        </div>
                        <div
                            class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-primary transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">airport_shuttle</span>
                            <h3 class="text-white font-bold text-lg mb-1">Pickup</h3>
                            <p class="text-slate-500 text-xs font-bold uppercase">8 Cars</p>
                        </div>
                        <div
                            class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-primary transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">group</span>
                            <h3 class="text-white font-bold text-lg mb-1">Family MPV</h3>
                            <p class="text-slate-500 text-xs font-bold uppercase">6 Cars</p>
                        </div>
                        <div
                            class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-primary transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">local_taxi</span>
                            <h3 class="text-white font-bold text-lg mb-1">SUV</h3>
                            <p class="text-slate-500 text-xs font-bold uppercase">7 Cars</p>
                        </div>
                        <div
                            class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-primary transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">directions_car</span>
                            <h3 class="text-white font-bold text-lg mb-1">Sedan</h3>
                            <p class="text-slate-500 text-xs font-bold uppercase">9 Cars</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark/30">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="relative">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-4">
                                    <img alt="Car 1" class="rounded-2xl w-full h-64 object-cover shadow-lg"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2jfPcjuVjQnql62XXxtenIlKXVRhBolywyrj3Wc9USh-gIXQhvqo1LAT7TtpMPORvpwj0s70uLs7teatjH3TW-EybtedSSY7wVcprEePBnemC72X1_zaba4q6oy1sa2mg2pUDjCqyIMwv5PosYLwGb9JPbMmV_YwwzDCirhA_ZVDf3s8crlkQXRV119wuTHD-ryw5cluzb3F-eLBqTio7qk5_g6IWY5Wg2MUrr38AOOatK4pl9P_aorihWyG4QZpxzjvjzXTedHc" />
                                    <img alt="Lifestyle" class="rounded-2xl w-full h-48 object-cover shadow-lg"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwmOKVsrMXWXOGuMTrRNNb_FcfNgsbI7bE3jI3QpHF-imivooQoJ7BKYcw-fzAiywNFVtSPbXLLwsHuaiRfPXTwa8EOrMZcKd-xRujuLCTV8K_9U70Tc8eCDuQcq9er1oXGxr5rHyvy6P0pD0kDqPXDeOjPa_bcgIEhAwbyoULQ-eXDNFVCUtIdLkGp2WA3htdR6-rrSsX9725mWOH_b3dytZw14wUnna7pgEHxqQEWcQDCshw2N1NyKkW6vj81BusvhpKxtBbpP0" />
                                </div>
                                <div class="pt-8 space-y-4">
                                    <img alt="Car 2" class="rounded-2xl w-full h-80 object-cover shadow-lg"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQHe0vFBdgEGEIN38AT8zw2A--7bM0UoZQW0F0z9b6jh6Um7Ugxt70DjVMjlS7PzQhwusD08NyiZyq8CX9abK1TGXIErbtdBtEdTqAS-Cn4qJsg--hzBxGmgkIOzwjKNyzb2l-U-MVqnZxU5h59s84plzbiqjkg1mGn6cbFepDKqR1Rz_Fsn6nlaz0vukVLjWMgZRtR535VNuyfSRXJLVzuLcfc1GIJtmSV1tQv1bKGAW_y8kKEGla2ojZJONALnRQV-UYj_cYBa0" />
                                </div>
                            </div>
                            <div
                                class="absolute top-4 right-4 md:right-auto md:-left-8 md:top-20 bg-primary text-white p-6 rounded-2xl shadow-2xl flex flex-col items-center justify-center w-32 md:w-40 h-32 md:h-40 text-center">
                                <span class="text-3xl md:text-4xl font-black">50+</span>
                                <span class="text-xs font-bold uppercase leading-tight mt-1">Years of<br />Experience</span>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div>
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="material-symbols-outlined text-primary">directions_car</span>
                                    <span class="text-primary font-bold uppercase tracking-[0.2em] text-xs">About
                                        LuxuryDrive</span>
                                </div>
                                <h2
                                    class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white leading-tight mb-6">
                                    Welcome to <span class="text-primary">LuxuryDrive</span>
                                </h2>
                                <p class="text-primary font-bold text-lg mb-4 italic">
                                    Committed to providing our customers with ultimate service and unmatched performance.
                                </p>
                                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                    With over five decades in the automotive industry, LuxuryDrive has established itself as
                                    a premier destination for those seeking more than just a rental. We offer a curated
                                    collection of the world's finest vehicles, ensuring every mile you drive is a testament
                                    to engineering excellence and sophisticated style.
                                </p>
                            </div>
                            <div class="space-y-6">
                                <div class="space-y-2">
                                    <div class="flex justify-between items-end">
                                        <span class="font-bold text-slate-900 dark:text-white">Time Awareness</span>
                                        <span class="text-sm font-bold text-primary">90%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full w-[90%]"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-end">
                                        <span class="font-bold text-slate-900 dark:text-white">Driver Experience</span>
                                        <span class="text-sm font-bold text-primary">70%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full w-[70%]"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-8 pt-4">
                                <button
                                    class="bg-primary text-white font-bold px-8 py-4 rounded-lg hover:bg-primary/90 transition-all flex items-center gap-2 shadow-lg shadow-primary/20">
                                    Read More
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                        <span class="material-symbols-outlined">call</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-500 font-bold uppercase">Call Anytime</p>
                                        <p class="text-lg font-extrabold text-slate-900 dark:text-white">+1 (550) 250 5260
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark/30">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <div class="flex items-center justify-center gap-2 mb-4">
                            <div class="h-[2px] w-12 bg-primary"></div>
                            <span class="text-primary font-bold uppercase tracking-[0.2em] text-xs">What We're
                                Offering</span>
                            <div class="h-[2px] w-12 bg-primary"></div>
                        </div>
                        <h2
                            class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white uppercase leading-tight">
                            Services We're Providing<br />To <span class="text-primary">Customers</span>
                        </h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-primary shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                01</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-primary mb-8">
                                    <span class="material-symbols-outlined text-5xl">directions_car</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-primary transition-colors">
                                    Corporate Car Rental</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Streamline your business travel with our professional corporate fleet solutions and
                                    dedicated account management.
                                </p>
                                <div class="h-1 w-12 bg-primary group-hover:w-full transition-all duration-500"></div>
                            </div>
                        </div>
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-primary shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                02</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-primary mb-8">
                                    <span class="material-symbols-outlined text-5xl">person_pin_circle</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-primary transition-colors">Car
                                    Rental with Driver</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Sit back and relax while our professional chauffeurs take you to your destination in
                                    ultimate comfort and safety.
                                </p>
                                <div class="h-1 w-12 bg-primary group-hover:w-full transition-all duration-500"></div>
                            </div>
                        </div>
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-primary shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                03</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-primary mb-8">
                                    <span class="material-symbols-outlined text-5xl">flight_takeoff</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-primary transition-colors">
                                    Airport Transfer</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Punctual and reliable airport pickups and drop-offs to ensure you never miss a flight or
                                    wait after landing.
                                </p>
                                <div class="h-1 w-12 bg-primary group-hover:w-full transition-all duration-500"></div>
                            </div>
                        </div>
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-primary shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                04</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-primary mb-8">
                                    <span class="material-symbols-outlined text-5xl">verified_user</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-primary transition-colors">
                                    Fleet Leasing</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Flexible long-term leasing options for businesses and individuals looking for premium
                                    vehicle solutions.
                                </p>
                                <div class="h-1 w-12 bg-primary group-hover:w-full transition-all duration-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="bg-slate-950 text-slate-400 py-16 border-t border-slate-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                        <div class="space-y-6">
                            <div class="flex items-center gap-2 text-white">
                                <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 48 48"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"
                                        fill="currentColor"></path>
                                </svg>
                                <span class="text-xl font-extrabold uppercase tracking-tight">LuxuryDrive</span>
                            </div>
                            <p class="text-sm leading-relaxed">Redefining luxury travel. Premium vehicles, world-class
                                service, and unforgettable experiences across 50+ cities.</p>
                        </div>
                        <div>
                            <h5 class="text-white font-bold mb-6">Quick Links</h5>
                            <ul class="space-y-4 text-sm">
                                <li><a class="hover:text-primary transition-colors" href="#">Browse Fleet</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Booking Guide</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Safety Features</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Affiliate Program</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-white font-bold mb-6">Support</h5>
                            <ul class="space-y-4 text-sm">
                                <li><a class="hover:text-primary transition-colors" href="#">Help Center</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Feedback</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-white font-bold mb-6">Newsletter</h5>
                            <p class="text-sm mb-4">Subscribe for exclusive offers and news.</p>
                            <div class="flex gap-2">
                                <input
                                    class="bg-slate-900 border-slate-800 rounded-lg text-sm flex-1 focus:ring-primary focus:border-primary"
                                    placeholder="Email address" type="email" />
                                <button class="bg-primary text-white p-2 rounded-lg hover:bg-primary/90 transition-colors">
                                    <span class="material-symbols-outlined">send</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-16 pt-8 border-t border-slate-900 flex flex-col md:flex-row justify-between items-center gap-4 text-xs">
                        <p>© 2023 LuxuryDrive Inc. All rights reserved.</p>
                        <div class="flex gap-6">
                            <a class="hover:text-white transition-colors" href="#">Instagram</a>
                            <a class="hover:text-white transition-colors" href="#">Twitter</a>
                            <a class="hover:text-white transition-colors" href="#">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </footer>
        </main>

    </body>

    </html>

@endsection