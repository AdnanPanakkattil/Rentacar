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
            <section class="relative h-[85vh] min-h-[600px] flex items-center overflow-hidden bg-slate-950">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/60 to-transparent z-10">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent z-10"></div>
                    <div class="w-full h-full bg-cover bg-center opacity-80"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAuOiNPqleOQ64_6u7n93mfI7qzCYTfERu4jnp9LG28Rx_DqpgrJEOGEklsGHd--0ZLvtCTTX_Q9yUWCnb19EV4zJfccgC4tWDePwetTxt9hl2tmyAjmP4k3NuyZplCbWLgnjRXufdXyZOY_QPrpOAExmyEmRMT_1mEjIZDPdLTETm3zBemQQw_lBr23t0X-RQJ5dUrtu-iMmBp9lxmpEnS2yBsRcVIZm_WlVfMt5ZBztkPeiTotnihRMzVAiHj7IcEiz_wGEoWU1Q');">
                    </div>
                </div>
                <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="max-w-2xl">
                        <span
                            class="inline-block px-3 py-1 mb-6 text-xs font-bold tracking-widest text-primary bg-primary/10 border border-primary/20 rounded uppercase">Premium
                            Experience</span>
                        <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                            Drive Your <span class="text-primary italic">Dream</span>.
                        </h1>
                        <p class="text-lg text-slate-300 mb-8 max-w-lg leading-relaxed">
                            Experience the thrill of the open road with our exclusive fleet of luxury vehicles. Unmatched
                            performance, style, and comfort delivered to your doorstep.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <button
                                class="px-8 py-4 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all flex items-center gap-2 group shadow-xl shadow-primary/30">
                                View Fleet
                                <span
                                    class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </button>
                            <button
                                class="px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/20 font-bold rounded-lg hover:bg-white/20 transition-all">
                                How it Works
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative z-30 -mt-16 px-4">
                <div class="max-w-6xl mx-auto">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl shadow-2xl p-6 md:p-8 border border-slate-100 dark:border-slate-800">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">
                            <div class="space-y-2">
                                <label
                                    class="text-xs font-bold uppercase tracking-wider text-slate-500 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">location_on</span> Pick-up Location
                                </label>
                                <input
                                    class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/20"
                                    placeholder="City, Airport, or Address" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-xs font-bold uppercase tracking-wider text-slate-500 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">event</span> Pick-up Date
                                </label>
                                <input
                                    class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/20"
                                    type="date" />
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-xs font-bold uppercase tracking-wider text-slate-500 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">event</span> Return Date
                                </label>
                                <input
                                    class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary/20"
                                    type="date" />
                            </div>
                            <button
                                class="bg-primary text-white h-[46px] rounded-lg font-bold flex items-center justify-center gap-2 hover:bg-primary/90 transition-colors shadow-lg shadow-primary/20">
                                <span class="material-symbols-outlined">search</span> Search Cars
                            </button>
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
           
            
            <section class="py-24 bg-white dark:bg-background-dark/30">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-end mb-12">
                        <div>
                            <h2 class="text-3xl font-extrabold mb-4">Featured <span class="text-primary">Fleet</span></h2>
                            <p class="text-slate-500 max-w-md">Our most popular selections, curated for performance and
                                luxury.</p>
                        </div>
                        <a class="text-primary font-bold flex items-center gap-2 hover:underline" href="#">
                            View all <span class="material-symbols-outlined">chevron_right</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="group bg-background-light dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-56 overflow-hidden">
                                <div
                                    class="absolute top-4 right-4 z-10 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-primary">
                                    LUXURY</div>
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAnAXbkakjcFNP7mqzSyrNz0WF8uy5-aD3gn9Yi-RbfPR5O6RND-v_a_VaHzMEEAipo6vTAwNFyqYm1UIvSDdKf6I7nvFKrOOS1A9G-2fWV3DXUvnplxTjC8ELFMdACA1frb4Zu4y9ruFTOIcFZJ516cAPoGRRdN6U8l-luWTBp9dnFV4f8xbaGGMvARHlKxYiCv_iTRZDnLS0Y3WBwiu1oo1zz35OCfQ9EfsGz3lye7dKu3dP9Wr6pMuDMxGZxnwaQ2Mi7TATiLVw');">
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Ferrari 488 Spider</h3>
                                <div class="flex items-center gap-4 text-xs text-slate-500 mb-6">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">settings</span> Auto</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">oil_barrel</span> Petrol</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">person</span> 2 Seats</span>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-6 border-t border-slate-200 dark:border-slate-800">
                                    <div>
                                        <span class="text-2xl font-extrabold text-primary">$450</span>
                                        <span class="text-xs text-slate-500 font-bold uppercase">/ day</span>
                                    </div>
                                    <button
                                        class="p-2 bg-slate-900 dark:bg-white text-white dark:text-slate-900 rounded-lg hover:bg-primary hover:text-white transition-colors">
                                        <span class="material-symbols-outlined">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group bg-background-light dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-56 overflow-hidden">
                                <div
                                    class="absolute top-4 right-4 z-10 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-primary">
                                    PREMIUM</div>
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDBQl7k6r4Rt21f-eg0sQf_ljMhihkYKM8NVXvi_d5a30NTJGfgEfEgCQSpcHsUgTWi-uOM2Zu7F9bHsv3Qum1ML3IR-Ehzl7tCj98wnjJLqOlb9sH8JPWmnZDjQdy3JDlLiR-X71d5SQq3rAxAunnGQD3I9fjtJUeW-gOpeX-SsdE2vzieFi12oA-Gyuv15YOCPqvtff16blgD6bVsq4URBDKgRnnzCkjzPeVv4iLervgAHtgG5yRtjx9EZBEoBTawgBSbxoj3N6Q');">
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Porsche 911 Carrera</h3>
                                <div class="flex items-center gap-4 text-xs text-slate-500 mb-6">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">settings</span> Auto</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">oil_barrel</span> Petrol</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">person</span> 4 Seats</span>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-6 border-t border-slate-200 dark:border-slate-800">
                                    <div>
                                        <span class="text-2xl font-extrabold text-primary">$320</span>
                                        <span class="text-xs text-slate-500 font-bold uppercase">/ day</span>
                                    </div>
                                    <button
                                        class="p-2 bg-slate-900 dark:bg-white text-white dark:text-slate-900 rounded-lg hover:bg-primary hover:text-white transition-colors">
                                        <span class="material-symbols-outlined">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group bg-background-light dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-56 overflow-hidden">
                                <div
                                    class="absolute top-4 right-4 z-10 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-primary">
                                    ELITE SUV</div>
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDSutaHdHAK3Fa79tBta6Y0-D60iEy5jcSBLWp-zPBOhXm6vl4Rfe4NH3zAZYi1ebzh6CLT5yATOceac8SG_T9sJHIVlRcep_P9v36Cf1ia1My9V9sU2X7FQYGx7FZyCTT52-Mhcv_1oKt4VIwCUeTjQRs7hXcUDMYpy5gfjKgUpwC1HmVUG1-OW7RCd8zeef3bKwynYOX35hlH3REqv264vlu964qC8Gf-flIrwO_XX5PlKWPhHD2TI4gp3rUmEbeKGEpF1lM9mj4');">
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Range Rover Autobiography</h3>
                                <div class="flex items-center gap-4 text-xs text-slate-500 mb-6">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">settings</span> Auto</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">oil_barrel</span> Diesel</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">person</span> 5 Seats</span>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-6 border-t border-slate-200 dark:border-slate-800">
                                    <div>
                                        <span class="text-2xl font-extrabold text-primary">$280</span>
                                        <span class="text-xs text-slate-500 font-bold uppercase">/ day</span>
                                    </div>
                                    <button
                                        class="p-2 bg-slate-900 dark:bg-white text-white dark:text-slate-900 rounded-lg hover:bg-primary hover:text-white transition-colors">
                                        <span class="material-symbols-outlined">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-background-light dark:bg-slate-900/50">
                <div class="max-w-7xl mx-auto px-4 text-center">
                    <h2 class="text-3xl font-extrabold mb-4">How it <span class="text-primary">Works</span></h2>
                    <p class="text-slate-500 mb-16 max-w-lg mx-auto">Rent your luxury vehicle in 3 simple steps.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                        <div class="space-y-4">
                            <div
                                class="w-16 h-16 bg-white dark:bg-slate-800 shadow-xl rounded-2xl flex items-center justify-center mx-auto text-primary">
                                <span class="material-symbols-outlined text-4xl">location_searching</span>
                            </div>
                            <h4 class="text-xl font-bold">Choose Location</h4>
                            <p class="text-slate-500 text-sm">Select your pick-up and drop-off points from our wide network
                                of premium hubs.</p>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="w-16 h-16 bg-white dark:bg-slate-800 shadow-xl rounded-2xl flex items-center justify-center mx-auto text-primary">
                                <span class="material-symbols-outlined text-4xl">calendar_month</span>
                            </div>
                            <h4 class="text-xl font-bold">Pick Your Date</h4>
                            <p class="text-slate-500 text-sm">Select your preferred dates and duration for your luxury
                                journey.</p>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="w-16 h-16 bg-white dark:bg-slate-800 shadow-xl rounded-2xl flex items-center justify-center mx-auto text-primary">
                                <span class="material-symbols-outlined text-4xl">key</span>
                            </div>
                            <h4 class="text-xl font-bold">Book Your Ride</h4>
                            <p class="text-slate-500 text-sm">Confirm your booking with instant approval and hit the road in
                                style.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 px-4">
                <div
                    class="max-w-5xl mx-auto bg-primary rounded-2xl p-8 md:p-16 text-center text-white relative overflow-hidden shadow-2xl shadow-primary/40">
                    <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                    <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-black/10 rounded-full blur-3xl"></div>
                    <h2 class="text-3xl md:text-5xl font-black mb-6">Ready to Experience the Ultimate Drive?</h2>
                    <p class="text-white/80 text-lg mb-10 max-w-2xl mx-auto">Join thousands of happy customers who trust
                        LuxuryDrive for their premium travel needs.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <button
                            class="bg-white text-primary font-extrabold px-10 py-4 rounded-lg hover:bg-slate-50 transition-colors">
                            Get Started Now
                        </button>
                        <button
                            class="bg-transparent border border-white text-white font-extrabold px-10 py-4 rounded-lg hover:bg-white/10 transition-colors">
                            Contact Support
                        </button>
                    </div>
                </div>
            </section>
        </main>
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
                        <p class="text-sm leading-relaxed">Redefining luxury travel. Premium vehicles, world-class service,
                            and unforgettable experiences across 50+ cities.</p>
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

    </body>

    </html>
@endsection