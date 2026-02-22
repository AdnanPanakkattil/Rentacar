@extends('navbar')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>IndiaDrive - Premium Services</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
            rel="stylesheet" />
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            primary: "#E31E24",
                            charcoal: "#121619",
                            "background-light": "#ffffff",
                            "background-dark": "#121619",
                        },
                        fontFamily: {
                            display: ["Inter", "sans-serif"],
                        },
                        borderRadius: {
                            DEFAULT: "0.5rem",
                        },
                    },
                },
            };
        </script>
        <style type="text/tailwindcss">
            body { font-family: 'Inter', sans-serif; }
                    .hero-overlay {
                        background: linear-gradient(to right, rgba(18, 22, 25, 0.9) 0%, rgba(18, 22, 25, 0.5) 100%);
                    }
                    .material-symbols-outlined {
                        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                    }
                    .step-connector::after {
                        content: '';
                        position: absolute;
                        top: 1.5rem;
                        left: 50%;
                        width: 100%;
                        height: 2px;
                        background: #E31E24;
                        opacity: 0.2;
                        z-index: 0;
                    }
                </style>
    </head>

    <body
        class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-200">
        \
        <main>
            <section class="relative h-[450px] flex items-center overflow-hidden bg-charcoal">
                <img alt="Luxury car on scenic road" class="absolute inset-0 w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_Tc91R8yGBtRsZvd_fiVGsuWnyER3bde5w7uR_6hlNmAstYxYYjkOM1xsBCkRn4C2Gj8BcA-INOqFQMOpZfuF5fombaRtTn8Odxc8IEv1lsL_bcuX4KaRBBOQTwPG5EumgFz_7tkxhzC8kih6uY0Sz6F0O_8ApqoK8OYWRtik7oG8d56H50vgXPPH54ITN-Q9O4UQQBhZATOxRpk3i0MZtj6M2d_8HpTyma9y_z-bPks4asNO28xdWCNKNiRDi8iE2edZCHYq7Xo" />
                <div class="absolute inset-0 hero-overlay"></div>
                <div class="container mx-auto px-6 relative z-10">
                    <div class="max-w-2xl text-white">
                        <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight mb-6">
                            Our <span class="text-primary">Services</span>
                        </h1>
                        <p class="text-slate-300 text-xl mb-10 leading-relaxed font-medium">
                            Flexible, reliable, and affordable car rental solutions tailored for every journey.
                        </p>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-charcoal">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-primary font-black uppercase tracking-[0.2em] text-sm mb-3">Comprehensive Solutions
                        </h2>
                        <h3 class="text-3xl md:text-4xl font-extrabold text-charcoal dark:text-white uppercase">Experience
                            the Best in Rental</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div
                            class="group bg-slate-50 dark:bg-slate-800/40 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 hover:border-primary transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                                <i class="material-icons text-3xl text-primary group-hover:text-white">directions_car</i>
                            </div>
                            <h4 class="text-xl font-bold mb-4 dark:text-white">Self Drive Rentals</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Enjoy the freedom of driving
                                yourself with our wide range of premium vehicles available at your fingertips.</p>
                            <button
                                class="flex items-center gap-2 text-primary font-bold group-hover:gap-3 transition-all">Book
                                Now <i class="material-icons text-sm">arrow_forward</i></button>
                        </div>
                        <div
                            class="group bg-slate-50 dark:bg-slate-800/40 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 hover:border-primary transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                                <i class="material-icons text-3xl text-primary group-hover:text-white">person_pin</i>
                            </div>
                            <h4 class="text-xl font-bold mb-4 dark:text-white">Chauffeur Drive</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Relax and let our
                                professional, uniformed chauffeurs navigate the roads while you travel in comfort.</p>
                            <button
                                class="flex items-center gap-2 text-primary font-bold group-hover:gap-3 transition-all">Book
                                Now <i class="material-icons text-sm">arrow_forward</i></button>
                        </div>
                        <div
                            class="group bg-slate-50 dark:bg-slate-800/40 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 hover:border-primary transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                                <i class="material-icons text-3xl text-primary group-hover:text-white">flight_takeoff</i>
                            </div>
                            <h4 class="text-xl font-bold mb-4 dark:text-white">Airport Transfers</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Timely and reliable pickups
                                and drops at all major airports across the country, guaranteed 24/7.</p>
                            <button
                                class="flex items-center gap-2 text-primary font-bold group-hover:gap-3 transition-all">Book
                                Now <i class="material-icons text-sm">arrow_forward</i></button>
                        </div>
                        <div
                            class="group bg-slate-50 dark:bg-slate-800/40 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 hover:border-primary transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                                <i class="material-icons text-3xl text-primary group-hover:text-white">business</i>
                            </div>
                            <h4 class="text-xl font-bold mb-4 dark:text-white">Corporate Rentals</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Customized mobility solutions
                                for businesses including employee transportation and executive fleet management.</p>
                            <button
                                class="flex items-center gap-2 text-primary font-bold group-hover:gap-3 transition-all">Book
                                Now <i class="material-icons text-sm">arrow_forward</i></button>
                        </div>
                        <div
                            class="group bg-slate-50 dark:bg-slate-800/40 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 hover:border-primary transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                                <i class="material-icons text-3xl text-primary group-hover:text-white">card_giftcard</i>
                            </div>
                            <h4 class="text-xl font-bold mb-4 dark:text-white">Wedding Specials</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Make your special day more
                                memorable with our fleet of luxury vintage and modern high-end cars.</p>
                            <button
                                class="flex items-center gap-2 text-primary font-bold group-hover:gap-3 transition-all">Book
                                Now <i class="material-icons text-sm">arrow_forward</i></button>
                        </div>
                        <div
                            class="group bg-slate-50 dark:bg-slate-800/40 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 hover:border-primary transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                                <i class="material-icons text-3xl text-primary group-hover:text-white">update</i>
                            </div>
                            <h4 class="text-xl font-bold mb-4 dark:text-white">Long-Term Rentals</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Need a car for a month or
                                more? Enjoy specialized low rates on our monthly subscription plans.</p>
                            <button
                                class="flex items-center gap-2 text-primary font-bold group-hover:gap-3 transition-all">Book
                                Now <i class="material-icons text-sm">arrow_forward</i></button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-slate-50 dark:bg-slate-900/30 overflow-hidden">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-20">
                        <h2 class="text-primary font-black uppercase tracking-widest text-sm mb-3">The Process</h2>
                        <h3 class="text-3xl font-extrabold uppercase dark:text-white">How It Works</h3>
                    </div>
                    <div class="flex flex-wrap justify-center gap-12 lg:gap-0 lg:flex-nowrap">
                        <div class="w-full sm:w-1/2 lg:w-1/4 text-center px-4 relative group">
                            <div class="hidden lg:block step-connector"></div>
                            <div
                                class="relative z-10 w-20 h-20 bg-white dark:bg-charcoal text-primary rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl border-4 border-slate-100 dark:border-slate-800 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                <span class="text-2xl font-black">01</span>
                            </div>
                            <h4 class="text-xl font-bold mb-3 dark:text-white">Choose</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Select your service type and preferred
                                rental duration.</p>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/4 text-center px-4 relative group">
                            <div class="hidden lg:block step-connector"></div>
                            <div
                                class="relative z-10 w-20 h-20 bg-white dark:bg-charcoal text-primary rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl border-4 border-slate-100 dark:border-slate-800 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                <span class="text-2xl font-black">02</span>
                            </div>
                            <h4 class="text-xl font-bold mb-3 dark:text-white">Select</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Browse our premium fleet and pick the car
                                that fits your style.</p>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/4 text-center px-4 relative group">
                            <div class="hidden lg:block step-connector"></div>
                            <div
                                class="relative z-10 w-20 h-20 bg-white dark:bg-charcoal text-primary rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl border-4 border-slate-100 dark:border-slate-800 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                <span class="text-2xl font-black">03</span>
                            </div>
                            <h4 class="text-xl font-bold mb-3 dark:text-white">Confirm</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Verify your details and make a secure
                                online payment.</p>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/4 text-center px-4 relative group">
                            <div
                                class="relative z-10 w-20 h-20 bg-white dark:bg-charcoal text-primary rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl border-4 border-slate-100 dark:border-slate-800 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                <span class="text-2xl font-black">04</span>
                            </div>
                            <h4 class="text-xl font-bold mb-3 dark:text-white">Enjoy</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Get your car delivered or pick it up and
                                enjoy the ride!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-charcoal">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-primary font-black uppercase tracking-widest text-sm mb-3">Our Collection</h2>
                        <h3 class="text-3xl font-extrabold uppercase dark:text-white">Vehicle Categories</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="relative h-96 overflow-hidden rounded-3xl group cursor-pointer shadow-lg">
                            <img alt="SUV"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzQvFGMDrn1qDRNHnTs0w0Am15_98-rcQYkEjTbKVrkc5c9gMoKtGJVjMgRYRV9ozI9isjd3L_cfSk98VMPB52S4lpqytV5AMNfUNthVHL0_rpLIEyTL4XZfnFCrAp0eK3fnH72NBF-37k3V8mccxB9qcJcz_tWA4grFQcF8noyuEYN6dNFSHS0fgwrTNI7YCVzTNS83w0plwiH_jz_2NG3qTRvPnnK1Bl2O2LYoZEcNHZsrqXd076gZUUU0bwsKh-SZm8s3AvL_w" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-charcoal via-transparent to-transparent opacity-80">
                            </div>
                            <div class="absolute bottom-8 left-8">
                                <h4 class="text-white text-2xl font-black mb-1">SUV</h4>
                                <p class="text-slate-300 text-sm">Tough &amp; Spacious</p>
                            </div>
                        </div>
                        <div class="relative h-96 overflow-hidden rounded-3xl group cursor-pointer shadow-lg">
                            <img alt="Sedan"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuwpq2aVt5erWcF3-Ol9YijldNpvLdPpsa26D1eucfgspkAkGEKDMbAgR8UMdm6pq0L_pi0f9iAA3M3KBi8AzIEvp1mfFZ8E0OlPVYjKpBSYC2QZn_ShAWiLAqYdMg9nZ9AoTpxGMcAPCOnS6m039L0Gk2h7JFYpAZOaI9b7V4-7oxlHMadhW-LxRDdBXqwxZghzDg30olFgquldKaK3Gsr7mIf2KpeJVNgYzGZm_HNFZX3n4ImA79xjU0PLGrYq9qbweKdJBs5T8" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-charcoal via-transparent to-transparent opacity-80">
                            </div>
                            <div class="absolute bottom-8 left-8">
                                <h4 class="text-white text-2xl font-black mb-1">Sedan</h4>
                                <p class="text-slate-300 text-sm">Comfort &amp; Elegance</p>
                            </div>
                        </div>
                        <div class="relative h-96 overflow-hidden rounded-3xl group cursor-pointer shadow-lg">
                            <img alt="Hatchback"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyuYWruloC87Mv1PXfWwvZDjKvu_-Vf0H4RYJfspYiMcliTaM8u9PFkh9hUgD3gBuHFPpiVmCjUrVBm28IMRFYgqxZGbe3pnP6fX6b0ARSViItLhHCP-ssWBJxmdP5OUR_nizFd9W8regC8pB9GtQjbkJ4XwP582B1_L0ojFXt0Tgbf3DAD_GKFnDlN08pdRqe-HdpUI6Y5ayCJ0j30K_F5c611ATcbfAw21n6sP4ixmJmv9hobXRHzYsw8Wfn1LEu-0yONuPQCm4" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-charcoal via-transparent to-transparent opacity-80">
                            </div>
                            <div class="absolute bottom-8 left-8">
                                <h4 class="text-white text-2xl font-black mb-1">Hatchback</h4>
                                <p class="text-slate-300 text-sm">City &amp; Compact</p>
                            </div>
                        </div>
                        <div class="relative h-96 overflow-hidden rounded-3xl group cursor-pointer shadow-lg">
                            <img alt="Luxury"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_25kZaqN1Xux2W4sQYgAZVH9opt1TwnpYVCf2pL6EZumE9pSmSQtIJCNQYynhpRevs2kNs1ccCurqytIs6k2_mFy4xh7UN6MMy9hdREEUfeT41pqNZME6qTpXkQC_65MOtX3BkPQQsVBvfEWjGVCJEiQqW7Hddukh_nf8YGzmoh1wy6RituYg-NjKWuUK_av2ANdterczPiONiUikX2ZIZp84mzgYSufQGS6-SIC875mVVdKUqSrLnqb_isUBcj35GorT1TJ76i0" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-charcoal via-transparent to-transparent opacity-80">
                            </div>
                            <div class="absolute bottom-8 left-8">
                                <h4 class="text-white text-2xl font-black mb-1">Luxury</h4>
                                <p class="text-slate-300 text-sm">Premium &amp; Elite</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-charcoal text-white">
                <div class="container mx-auto px-6">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                        <div class="flex items-center gap-4">
                            <div class="text-primary"><i class="material-icons text-5xl">sell</i></div>
                            <div>
                                <h5 class="font-bold text-lg leading-tight">Best Price Guaranteed</h5>
                                <p class="text-slate-400 text-sm">No hidden costs</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-primary"><i class="material-icons text-5xl">handyman</i></div>
                            <div>
                                <h5 class="font-bold text-lg leading-tight">Expert Maintenance</h5>
                                <p class="text-slate-400 text-sm">Regularly serviced cars</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-primary"><i class="material-icons text-5xl">calendar_month</i></div>
                            <div>
                                <h5 class="font-bold text-lg leading-tight">Flexible Booking</h5>
                                <p class="text-slate-400 text-sm">Easy date changes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-primary"><i class="material-icons text-5xl">headset_mic</i></div>
                            <div>
                                <h5 class="font-bold text-lg leading-tight">24/7 Support</h5>
                                <p class="text-slate-400 text-sm">Always here to help</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-slate-50 dark:bg-slate-900/30">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-primary font-black uppercase tracking-widest text-sm mb-3">Save More</h2>
                        <h3 class="text-3xl font-extrabold uppercase dark:text-white">Special Rental Plans</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="bg-white dark:bg-charcoal p-10 rounded-3xl border border-slate-100 dark:border-slate-800 shadow-xl relative overflow-hidden group">
                            <div class="absolute -top-1 -right-1">
                                <span
                                    class="bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 text-[10px] font-bold px-4 py-6 rotate-45 block uppercase">Basic</span>
                            </div>
                            <h4 class="text-2xl font-black mb-2 dark:text-white">Daily Plan</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-6 text-sm">Best for quick trips and city
                                errands.</p>
                            <div class="text-4xl font-black text-charcoal dark:text-white mb-6">₹1,499 <span
                                    class="text-sm font-normal text-slate-400">/ day</span></div>
                            <ul class="space-y-4 mb-10 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> 200 KM Included</li>
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> Free Home Pickup</li>
                                <li class="flex items-center gap-2 text-slate-300 dark:text-slate-600"><i
                                        class="material-icons text-lg">cancel</i> Zero Security Deposit</li>
                            </ul>
                            <button
                                class="w-full py-4 rounded-xl border-2 border-slate-900 dark:border-white font-black hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-charcoal transition-all uppercase tracking-widest text-xs">Choose
                                Plan</button>
                        </div>
                        <div
                            class="bg-charcoal p-10 rounded-3xl border-2 border-primary shadow-2xl relative overflow-hidden group scale-105 z-10">
                            <div class="absolute top-4 right-4">
                                <span
                                    class="bg-primary text-white text-[10px] font-black px-3 py-1 rounded-full uppercase">15%
                                    Off</span>
                            </div>
                            <h4 class="text-2xl font-black mb-2 text-white">Weekly Plan</h4>
                            <p class="text-slate-400 mb-6 text-sm">Perfect for vacations and business weeks.</p>
                            <div class="text-4xl font-black text-white mb-6">₹8,999 <span
                                    class="text-sm font-normal text-slate-400">/ week</span></div>
                            <ul class="space-y-4 mb-10 text-sm text-slate-300">
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> 1500 KM Included</li>
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> Full Insurance Cover
                                </li>
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> 24/7 Breakdown
                                    Assistance</li>
                            </ul>
                            <button
                                class="w-full py-4 rounded-xl bg-primary text-white font-black hover:brightness-110 transition-all uppercase tracking-widest text-xs">Choose
                                Plan</button>
                        </div>
                        <div
                            class="bg-white dark:bg-charcoal p-10 rounded-3xl border border-slate-100 dark:border-slate-800 shadow-xl relative overflow-hidden group">
                            <div class="absolute top-4 right-4">
                                <span
                                    class="bg-green-500 text-white text-[10px] font-black px-3 py-1 rounded-full uppercase">30%
                                    Off</span>
                            </div>
                            <h4 class="text-2xl font-black mb-2 dark:text-white">Monthly Plan</h4>
                            <p class="text-slate-500 dark:text-slate-400 mb-6 text-sm">Unbeatable value for long-term needs.
                            </p>
                            <div class="text-4xl font-black text-charcoal dark:text-white mb-6">₹24,999 <span
                                    class="text-sm font-normal text-slate-400">/ month</span></div>
                            <ul class="space-y-4 mb-10 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> Unlimited Kilometers
                                </li>
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> Car Swap Any Time</li>
                                <li class="flex items-center gap-2"><i
                                        class="material-icons text-primary text-lg">check_circle</i> Priority Concierge</li>
                            </ul>
                            <button
                                class="w-full py-4 rounded-xl border-2 border-slate-900 dark:border-white font-black hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-charcoal transition-all uppercase tracking-widest text-xs">Choose
                                Plan</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-primary text-white">
                <div class="container mx-auto px-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-white/20">
                        <div class="px-4">
                            <div class="text-4xl lg:text-5xl font-black mb-1">1,000+</div>
                            <div class="text-white/70 text-xs font-bold uppercase tracking-widest">Premium Cars</div>
                        </div>
                        <div class="px-4">
                            <div class="text-4xl lg:text-5xl font-black mb-1">5,000+</div>
                            <div class="text-white/70 text-xs font-bold uppercase tracking-widest">Happy Customers</div>
                        </div>
                        <div class="px-4">
                            <div class="text-4xl lg:text-5xl font-black mb-1">100+</div>
                            <div class="text-white/70 text-xs font-bold uppercase tracking-widest">Cities Served</div>
                        </div>
                        <div class="px-4">
                            <div class="text-4xl lg:text-5xl font-black mb-1">4.9/5</div>
                            <div class="text-white/70 text-xs font-bold uppercase tracking-widest">Customer Rating</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-charcoal">
                <div class="container mx-auto px-6">
                    <div class="max-w-4xl mx-auto text-center">
                        <i class="material-icons text-6xl text-primary/20 mb-8">format_quote</i>
                        <div class="mb-12">
                            <p
                                class="text-2xl md:text-3xl font-medium italic text-slate-700 dark:text-slate-300 mb-8 leading-relaxed">
                                "The booking process was incredibly smooth, and the car was in pristine condition.
                                IndiaDrive truly understands what premium service means."
                            </p>
                            <div class="flex items-center justify-center gap-4">
                                <div class="w-14 h-14 rounded-full bg-slate-200 overflow-hidden">
                                    <img alt="User" class="w-full h-full object-cover"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFKtGz_QI77kbHNpd9QNIom8nsd0_h9qEuKZildVq2-V15v-tq6DVEdRIFnsXf3s9ZSU7RhOYzt21cX55CuzfrTiY0MWTAsgl9KpztBailI1vp-3xUvQR6VctMpFWCy3dDoAOTV-AZZMYikdS82uUyRROBGVl2eFYwxDzl3EJRcrgmA5A1e0sfmtCTkS1XXYfFMWN6qOFkOGh1R0kr_pdMUihUAgTSkXZp1O_OVTWx_8fsie8QPNDSkDj3y8tgDuzBbtN5apoD2BM" />
                                </div>
                                <div class="text-left">
                                    <h5 class="font-bold text-charcoal dark:text-white">Rahul Sharma</h5>
                                    <p class="text-sm text-slate-500">Business Traveler</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-primary"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200 dark:bg-slate-700"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200 dark:bg-slate-700"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-charcoal relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <img alt="texture" class="w-full h-full object-cover grayscale"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgWEX3TWiSHy75k9zWY8gPK8Ia4jpLTwFmuPAzlneFd_L4N7bDZy-oO-jMsIi3fghLvvYWhMUESNvszxvlCldnK_PHqSseKe7yftmrHD3Jzxakwd4DKvZomdxo-tb_4nEgIdTbzguxhjTM2OagPQKFkxuJZLBaKBS5YOAfNA3AJrgwYNB6U14mfQeOrFVgY28XslO5BghYmTMLn26uTtCR8LsQzJNR3Wg7h70Bbob4NRAq-aTiFJOUth8Zh3Qp3BQXJ_8FEqS3Csc" />
                </div>
                <div class="container mx-auto px-6 relative z-10">
                    <div
                        class="bg-slate-900/80 backdrop-blur-sm p-12 rounded-[2rem] border border-white/5 flex flex-col lg:flex-row items-center justify-between gap-10">
                        <div class="text-center lg:text-left">
                            <h2 class="text-4xl font-extrabold text-white mb-4">Ready to hit the road?</h2>
                            <p class="text-slate-400 text-lg">Book your dream car in under 60 seconds with our seamless
                                platform.</p>
                        </div>
                        <div class="flex gap-4">
                            <a class="bg-primary text-white px-10 py-5 rounded-full font-black uppercase tracking-widest text-sm hover:brightness-110 transition-all shadow-2xl shadow-primary/20"
                                href="#">Start Booking</a>
                            <a class="border border-white/20 text-white px-10 py-5 rounded-full font-black uppercase tracking-widest text-sm hover:bg-white/5 transition-all"
                                href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-charcoal text-slate-300 py-16 border-t border-white/5">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                    <div class="space-y-6">
                        <div class="text-2xl font-bold flex items-center text-white">
                            <span class="text-primary text-3xl font-black">India</span><span>Drive</span>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-400">
                            Your ultimate destination for luxury and reliable car rentals. Providing unmatched experiences
                            since 2010.
                        </p>
                        <div class="flex gap-4">
                            <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors text-white"
                                href="#"><i class="material-icons text-sm">facebook</i></a>
                            <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors text-white"
                                href="#"><i class="material-icons text-sm">camera_alt</i></a>
                            <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors text-white"
                                href="#"><i class="material-icons text-sm">alternate_email</i></a>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-wider">Services</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a class="hover:text-primary transition-colors" href="#">Self Drive</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Chauffeur Driven</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Airport Transfers</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Corporate Rental</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-wider">Support</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a class="hover:text-primary transition-colors" href="#">Help Center</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Safety Information</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Cancellation Policy</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-wider">Newsletter</h4>
                        <p class="text-xs text-slate-500 mb-4">Get the latest deals and offers.</p>
                        <form class="flex gap-2">
                            <input
                                class="w-full bg-slate-800/50 border border-slate-700 rounded-lg px-4 py-2 text-xs focus:ring-1 focus:ring-primary outline-none"
                                placeholder="Email Address" type="email" />
                            <button class="bg-primary p-2 rounded-lg text-white hover:brightness-110 transition-all"><i
                                    class="material-icons text-sm">send</i></button>
                        </form>
                    </div>
                </div>
                <div
                    class="pt-12 border-t border-slate-800 text-center text-[10px] text-slate-500 uppercase tracking-[0.3em]">
                    © 2024 IndiaDrive. Premium Car Rentals.
                </div>
            </div>
        </footer>

    </body>

    </html>
@endsection