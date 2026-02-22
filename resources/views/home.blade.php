@extends('navbar')

@section('content')

    <div class="">
        <main>
            <section class="relative h-[650px] flex items-center overflow-hidden bg-slate-900">
                <img alt="Luxury Car Background" class="absolute inset-0 w-full h-full object-cover"
                    src="img/homesection1.jpg" />
                <div class="absolute inset-0 hero-overlay"></div>
                <div class="container mx-auto px-6 relative z-10">
                    <div class="max-w-2xl text-white">
                        <h1 class="text-6xl lg:text-7xl font-extrabold leading-tight mb-6">
                            Find Your <span class="text-[#FF0000]">Perfect</span> Ride
                        </h1>
                        <p class="text-slate-300 text-xl mb-10 leading-relaxed">
                            Experience luxury and comfort with our premium fleet. From executive travel to weekend getaways,
                            IndiaDrive has you covered.
                        </p>
                        <div class="flex gap-4">
                            <a class="bg-[#FF0000] text-white px-10 py-4 rounded-full font-bold text-lg hover:brightness-110 transition-all shadow-xl shadow-[#FF0000]/20"
                                href="#">Book Now</a>
                            <a class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-10 py-4 rounded-full font-bold text-lg hover:bg-white/20 transition-all"
                                href="#">Learn More</a>
                        </div>
                    </div>
                </div>-------------
            </section>
            <section class="container mx-auto px-6 -mt-16 relative z-20">
                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl shadow-2xl p-8 border border-slate-100 dark:border-slate-800">
                    <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6 items-end">
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-slate-400">Pickup Location</label>
                            <div class="relative">
                                <i
                                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-300">location_on</i>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none rounded focus:ring-2 focus:ring-[#FF0000]/50"
                                    placeholder="Mumbai, Delhi..." type="text" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-slate-400">Return Location</label>
                            <div class="relative">
                                <i
                                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-300">location_searching</i>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none rounded focus:ring-2 focus:ring-[#FF0000]/50"
                                    placeholder="Same as pickup..." type="text" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-slate-400">Date</label>
                            <div class="relative">
                                <i
                                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-300">calendar_today</i>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none rounded focus:ring-2 focus:ring-[#FF0000]/50 text-sm"
                                    type="date" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-slate-400">Car Category</label>
                            <select
                                class="w-full py-3 bg-[#FF0000] dark:bg-slate-800 border-none rounded focus:ring-2 focus:ring-[#FF0000]/50 text-sm">
                                <option>Luxury Sedan</option>
                                <option>SUV</option>
                                <option>Sports</option>
                                <option>Electric</option>
                            </select>
                        </div>
                        <button
                            class="bg-[#FF0000] hover:brightness-110 text-white font-bold h-[52px] rounded transition-all shadow-lg shadow-[#FF0000]/30">
                            Search Fleet
                        </button>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark/30">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <div class="flex items-center justify-center gap-2 mb-4">
                            <div class="h-[2px] w-12 bg-[#FF0000]"></div>
                            <span class="text-[#FF0000] font-bold uppercase tracking-[0.2em] text-xs">What We're
                                Offering</span>
                            <div class="h-[2px] w-12 bg-[#FF0000]"></div>
                        </div>
                        <h2
                            class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white uppercase leading-tight">
                            Services We're Providing<br />To <span class="text-[#FF0000]">Customers</span>
                        </h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-[#FF0000] shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                01</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-[#FF0000] mb-8">
                                    <span class="material-symbols-outlined text-5xl">directions_car</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#FF0000] transition-colors">
                                    Corporate Car Rental</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Streamline your business travel with our professional corporate fleet solutions and
                                    dedicated account management.
                                </p>
                                <div class="h-1 w-12 bg-[#FF0000] group-hover:w-full transition-all duration-500"></div>
                            </div>
                        </div>
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-[#FF0000] shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                02</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-[#FF0000] mb-8">
                                    <span class="material-symbols-outlined text-5xl">person_pin_circle</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#FF0000] transition-colors">
                                    Car
                                    Rental with Driver</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Sit back and relax while our professional chauffeurs take you to your destination in
                                    ultimate comfort and safety.
                                </p>
                                <div class="h-1 w-12 bg-[#FF0000] group-hover:w-full transition-all duration-500"></div>
                            </div>
                        </div>
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-[#FF0000] shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                03</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-[#FF0000] mb-8">
                                    <span class="material-symbols-outlined text-5xl">flight_takeoff</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#FF0000] transition-colors">
                                    Airport Transfer</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Punctual and reliable airport pickups and drop-offs to ensure you never miss a flight or
                                    wait after landing.
                                </p>
                                <div class="h-1 w-12 bg-[#FF0000] group-hover:w-full transition-all duration-500"></div>
                            </div>
                        </div>
                        <div
                            class="group relative bg-slate-950 rounded-2xl p-8 pt-12 overflow-hidden border-b-4 border-[#FF0000] shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div
                                class="absolute top-0 right-0 w-16 h-16 bg-white flex items-center justify-center rounded-bl-2xl font-black text-2xl text-slate-900 z-10">
                                04</div>
                            <div class="absolute inset-0 service-card-pattern opacity-20"></div>
                            <div class="relative z-10">
                                <div class="text-[#FF0000] mb-8">
                                    <span class="material-symbols-outlined text-5xl">verified_user</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#FF0000] transition-colors">
                                    Fleet Leasing</h3>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                    Flexible long-term leasing options for businesses and individuals looking for premium
                                    vehicle solutions.
                                </p>
                                <div class="h-1 w-12 bg-[#FF0000] group-hover:w-full transition-all duration-500"></div>
                            </div>
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
                                class="absolute top-4 right-4 md:right-auto md:-left-8 md:top-20 bg-[#FF0000] text-white p-6 rounded-2xl shadow-2xl flex flex-col items-center justify-center w-32 md:w-40 h-32 md:h-40 text-center">
                                <span class="text-3xl md:text-4xl font-black">50+</span>
                                <span class="text-xs font-bold uppercase leading-tight mt-1">Years of<br />Experience</span>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div>
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="material-symbols-outlined text-[#FF0000]">directions_car</span>
                                    <span class="text-[#FF0000] font-bold uppercase tracking-[0.2em] text-xs">About
                                        LuxuryDrive</span>
                                </div>
                                <h2
                                    class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white leading-tight mb-6">
                                    Welcome to <span class="text-[#FF0000]">LuxuryDrive</span>
                                </h2>
                                <p class="text-[#FF0000] font-bold text-lg mb-4 italic">
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
                                        <span class="text-sm font-bold text-[#FF0000]">90%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
                                        <div class="bg-[#FF0000] h-full w-[90%]"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-end">
                                        <span class="font-bold text-slate-900 dark:text-white">Driver Experience</span>
                                        <span class="text-sm font-bold text-[#FF0000]">70%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
                                        <div class="bg-[#FF0000] h-full w-[70%]"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-8 pt-4">
                                <button
                                    class="bg-[#FF0000] text-white font-bold px-8 py-4 rounded-lg hover:bg-[#FF0000]/90 transition-all flex items-center gap-2 shadow-lg shadow-[#FF0000]/20">
                                    Read More
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-[#FF0000]/10 flex items-center justify-center text-[#FF0000]">
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
            <section class="py-12 bg-[#FF0000] dark:bg-background-dark overflow-hidden">
                <div
                    class="max-w-7xl mx-auto  px-4 opacity-30 grayscale hover:grayscale-0 transition-all flex flex-wrap justify-center gap-12 md:gap-24 items-center">
                    <span class="text-2xl font-black italic tracking-tighter">FERRARI</span>
                    <span class="text-2xl font-black italic tracking-tighter">PORSCHE</span>
                    <span class="text-2xl font-black italic tracking-tighter">LAMBORGHINI</span>
                    <span class="text-2xl font-black italic tracking-tighter">MERCEDES</span>
                    <span class="text-2xl font-black italic tracking-tighter">BMW</span>
                </div>
            </section>
            <section class="py-24">
                <div class="container mx-auto px-6">
                    <div class="flex justify-between items-end mb-12">
                        <div>
                            <h2 class="text-xs font-black uppercase tracking-widest text-[#FF0000] mb-2">Our Collection</h2>
                            <h3 class="text-3xl font-bold uppercase">Popular Rental Deals</h3>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                        <div
                            class="bg-white dark:bg-slate-800 rounded-2xl p-4 border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all group">
                            <div class="h-44 mb-6 overflow-hidden rounded-xl">
                                <img alt="Premium Car"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzQvFGMDrn1qDRNHnTs0w0Am15_98-rcQYkEjTbKVrkc5c9gMoKtGJVjMgRYRV9ozI9isjd3L_cfSk98VMPB52S4lpqytV5AMNfUNthVHL0_rpLIEyTL4XZfnFCrAp0eK3fnH72NBF-37k3V8mccxB9qcJcz_tWA4grFQcF8noyuEYN6dNFSHS0fgwrTNI7YCVzTNS83w0plwiH_jz_2NG3qTRvPnnK1Bl2O2LYoZEcNHZsrqXd076gZUUU0bwsKh-SZm8s3AvL_w" />
                            </div>
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-lg">Model Elite X</h4>
                                <div class="flex text-yellow-400">
                                    <i class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star</i>
                                </div>
                            </div>
                            <div class="text-[#FF0000] font-bold text-xl mb-4">₹4,500 <span
                                    class="text-xs text-slate-400 font-normal">/ day</span></div>
                            <div class="grid grid-cols-2 gap-2 mb-6 text-xs text-slate-500">
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">person</i> 5 Seats
                                </div>
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">auto_mode</i> Auto
                                </div>
                            </div>
                            <button
                                class="w-full bg-slate-900 dark:bg-[#FF0000] text-white py-3 rounded-xl font-bold hover:bg-[#FF0000] dark:hover:brightness-110 transition-colors">Rent
                                Now</button>
                        </div>
                        <div
                            class="bg-white dark:bg-slate-800 rounded-2xl p-4 border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all group">
                            <div class="h-44 mb-6 overflow-hidden rounded-xl">
                                <img alt="Premium Car"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuwpq2aVt5erWcF3-Ol9YijldNpvLdPpsa26D1eucfgspkAkGEKDMbAgR8UMdm6pq0L_pi0f9iAA3M3KBi8AzIEvp1mfFZ8E0OlPVYjKpBSYC2QZn_ShAWiLAqYdMg9nZ9AoTpxGMcAPCOnS6m039L0Gk2h7JFYpAZOaI9b7V4-7oxlHMadhW-LxRDdBXqwxZghzDg30olFgquldKaK3Gsr7mIf2KpeJVNgYzGZm_HNFZX3n4ImA79xjU0PLGrYq9qbweKdJBs5T8" />
                            </div>
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-lg">Executive Sedan S</h4>
                                <div class="flex text-yellow-400">
                                    <i class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star_half</i>
                                </div>
                            </div>
                            <div class="text-[#FF0000] font-bold text-xl mb-4">₹5,200 <span
                                    class="text-xs text-slate-400 font-normal">/ day</span></div>
                            <div class="grid grid-cols-2 gap-2 mb-6 text-xs text-slate-500">
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">person</i> 5 Seats
                                </div>
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">auto_mode</i> Auto
                                </div>
                            </div>
                            <button
                                class="w-full bg-slate-900 dark:bg-[#FF0000] text-white py-3 rounded-xl font-bold hover:bg-[#FF0000] dark:hover:brightness-110 transition-colors">Rent
                                Now</button>
                        </div>
                        <div
                            class="bg-white dark:bg-slate-800 rounded-2xl p-4 border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all group">
                            <div class="h-44 mb-6 overflow-hidden rounded-xl">
                                <img alt="Premium Car"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyuYWruloC87Mv1PXfWwvZDjKvu_-Vf0H4RYJfspYiMcliTaM8u9PFkh9hUgD3gBuHFPpiVmCjUrVBm28IMRFYgqxZGbe3pnP6fX6b0ARSViItLhHCP-ssWBJxmdP5OUR_nizFd9W8regC8pB9GtQjbkJ4XwP582B1_L0ojFXt0Tgbf3DAD_GKFnDlN08pdRqe-HdpUI6Y5ayCJ0j30K_F5c611ATcbfAw21n6sP4ixmJmv9hobXRHzYsw8Wfn1LEu-0yONuPQCm4" />
                            </div>
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-lg">Premium Grand M</h4>
                                <div class="flex text-yellow-400">
                                    <i class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star</i>
                                </div>
                            </div>
                            <div class="text-[#FF0000] font-bold text-xl mb-4">₹6,800 <span
                                    class="text-xs text-slate-400 font-normal">/ day</span></div>
                            <div class="grid grid-cols-2 gap-2 mb-6 text-xs text-slate-500">
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">person</i> 5 Seats
                                </div>
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">auto_mode</i> Auto
                                </div>
                            </div>
                            <button
                                class="w-full bg-slate-900 dark:bg-[#FF0000] text-white py-3 rounded-xl font-bold hover:bg-[#FF0000] dark:hover:brightness-110 transition-colors">Rent
                                Now</button>
                        </div>
                        <div
                            class="bg-white dark:bg-slate-800 rounded-2xl p-4 border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all group">
                            <div class="h-44 mb-6 overflow-hidden rounded-xl">
                                <img alt="Premium Car"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_25kZaqN1Xux2W4sQYgAZVH9opt1TwnpYVCf2pL6EZumE9pSmSQtIJCNQYynhpRevs2kNs1ccCurqytIs6k2_mFy4xh7UN6MMy9hdREEUfeT41pqNZME6qTpXkQC_65MOtX3BkPQQsVBvfEWjGVCJEiQqW7Hddukh_nf8YGzmoh1wy6RituYg-NjKWuUK_av2ANdterczPiONiUikX2ZIZp84mzgYSufQGS6-SIC875mVVdKUqSrLnqb_isUBcj35GorT1TJ76i0" />
                            </div>
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-lg">Sport Velocity 9</h4>
                                <div class="flex text-yellow-400">
                                    <i class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star</i><i class="material-icons text-sm">star</i><i
                                        class="material-icons text-sm">star</i>
                                </div>
                            </div>
                            <div class="text-[#FF0000] font-bold text-xl mb-4">₹12,500 <span
                                    class="text-xs text-slate-400 font-normal">/ day</span></div>
                            <div class="grid grid-cols-2 gap-2 mb-6 text-xs text-slate-500">
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">person</i> 2 Seats
                                </div>
                                <div class="flex items-center gap-1"><i class="material-icons text-sm">speed</i> Manual
                                </div>
                            </div>
                            <button
                                class="w-full bg-slate-900 dark:bg-[#FF0000] text-white py-3 rounded-xl font-bold hover:bg-[#FF0000] dark:hover:brightness-110 transition-colors">Rent
                                Now</button>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="px-12 py-4 border-2 border-[#FF0000] text-[#FF0000] font-bold rounded-full hover:bg-[#FF0000] hover:text-white transition-all">View
                            All Fleet</button>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <section class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <span class="material-symbols-outlined text-[#FF0000]">directions_car</span>
                    <span class="text-[#FF0000] font-bold uppercase tracking-[0.2em] text-xs">Popular Car</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-white uppercase leading-tight">
                    Most Popular <span class="text-[#FF0000]">Car Types</span>
                </h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                <div
                    class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-[#FF0000] transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-[#FF0000] text-4xl mb-4 group-hover:scale-110 transition-transform">garage_home</span>
                    <h3 class="text-white font-bold text-lg mb-1">Crossover</h3>
                    <p class="text-slate-500 text-xs font-bold uppercase">5 Cars</p>
                </div>
                <div
                    class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-[#FF0000] transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-[#FF0000] text-4xl mb-4 group-hover:scale-110 transition-transform">airport_shuttle</span>
                    <h3 class="text-white font-bold text-lg mb-1">Pickup</h3>
                    <p class="text-slate-500 text-xs font-bold uppercase">8 Cars</p>
                </div>
                <div
                    class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-[#FF0000] transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-[#FF0000] text-4xl mb-4 group-hover:scale-110 transition-transform">group</span>
                    <h3 class="text-white font-bold text-lg mb-1">Family MPV</h3>
                    <p class="text-slate-500 text-xs font-bold uppercase">6 Cars</p>
                </div>
                <div
                    class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-[#FF0000] transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-[#FF0000] text-4xl mb-4 group-hover:scale-110 transition-transform">local_taxi</span>
                    <h3 class="text-white font-bold text-lg mb-1">SUV</h3>
                    <p class="text-slate-500 text-xs font-bold uppercase">7 Cars</p>
                </div>
                <div
                    class="bg-slate-900/50 border border-slate-800 rounded-2xl p-8 flex flex-col items-center text-center group hover:bg-slate-900 hover:border-[#FF0000] transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-[#FF0000] text-4xl mb-4 group-hover:scale-110 transition-transform">directions_car</span>
                    <h3 class="text-white font-bold text-lg mb-1">Sedan</h3>
                    <p class="text-slate-500 text-xs font-bold uppercase">9 Cars</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-white dark:bg-background-dark/30 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-[#FF0000]">analytics</span>
                            <span class="text-[#FF0000] font-bold uppercase tracking-[0.2em] text-xs">Fun Facts</span>
                        </div>
                        <h2
                            class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white leading-tight mb-6 uppercase">
                            Experience Freedom On Our <span class="text-[#FF0000]">Car Booking Service</span>
                        </h2>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                            We pride ourselves on delivering a seamless and high-quality experience. Here's a
                            glimpse of what we've achieved with our commitment to excellence.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div
                            class="bg-[#FF0000] p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white stat-card-glow transform transition hover:scale-105">
                            <span class="material-symbols-outlined text-4xl mb-4">directions_car</span>
                            <span class="text-4xl font-black">1,000+</span>
                            <span class="text-xs font-bold uppercase mt-2 opacity-90">Vehicle Fleet</span>
                        </div>
                        <div
                            class="bg-slate-900 p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white transform transition hover:scale-105">
                            <span class="material-symbols-outlined text-4xl mb-4 text-[#FF0000]">speed</span>
                            <span class="text-4xl font-black">10M+</span>
                            <span class="text-xs font-bold uppercase mt-2 opacity-90">Miles Driven</span>
                        </div>
                        <div
                            class="bg-slate-900 p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white transform transition hover:scale-105">
                            <span class="material-symbols-outlined text-4xl mb-4 text-[#FF0000]">local_activity</span>
                            <span class="text-4xl font-black">15K+</span>
                            <span class="text-xs font-bold uppercase mt-2 opacity-90">Bookings Reserved</span>
                        </div>
                        <div
                            class="bg-[#FF0000] p-8 rounded-2xl flex flex-col items-center justify-center text-center text-white stat-card-glow transform transition hover:scale-105">
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
                        <div class="absolute -right-8 top-1/4 w-24 h-48 bg-[#FF0000]/10 -z-10 grid grid-cols-4 gap-2 p-2">
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                            <div class="w-2 h-2 rounded-full bg-[#FF0000]/40"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-slate-900 text-slate-300 py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div class="space-y-6">
                    <div class="text-2xl font-bold flex items-center text-white">
                        <span class="text-[#FF0000] text-3xl font-black">India</span><span>Drive</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-400">
                        IndiaDrive is the country's leading premium car rental platform, providing unmatched luxury and
                        reliability since 2010.
                    </p>
                    <div class="flex gap-4">
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-[#FF0000] transition-colors text-white"
                            href="#"><i class="material-icons text-sm">facebook</i></a>
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-[#FF0000] transition-colors text-white"
                            href="#"><i class="material-icons text-sm">camera_alt</i></a>
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-[#FF0000] transition-colors text-white"
                            href="#"><i class="material-icons text-sm">alternate_email</i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-wider">Quick Links</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">Home</a></li>
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">About IndiaDrive</a></li>
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">Our Fleet</a></li>
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">Locations</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-wider">Customer Care</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">Contact Us</a></li>
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">FAQs</a></li>
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">Booking Policy</a></li>
                        <li><a class="hover:text-[#FF0000] transition-colors" href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-wider">Contact Info</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3"><i class="material-icons text-[#FF0000]">location_on</i> 123
                            Business Bay, Mumbai, India</li>
                        <li class="flex items-center gap-3"><i class="material-icons text-[#FF0000]">phone</i>
                            1800-200-300</li>
                        <li class="flex items-center gap-3"><i class="material-icons text-[#FF0000]">email</i>
                            booking@indiadrive.com</li>
                    </ul>
                </div>
            </div>
            <div class="pt-12 border-t border-slate-800 text-center text-xs text-slate-500">
                © 2024 IndiaDrive. Premium Car Rentals. All rights reserved.
            </div>
        </div>
    </footer>

@endsection