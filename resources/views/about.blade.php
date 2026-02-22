@extends('navbar')

@section('content')

        <main>
            <section class="relative h-[450px] flex items-center overflow-hidden bg-slate-900">
                <img alt="High-end car showroom" class="absolute inset-0 w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_Tc91R8yGBtRsZvd_fiVGsuWnyER3bde5w7uR_6hlNmAstYxYYjkOM1xsBCkRn4C2Gj8BcA-INOqFQMOpZfuF5fombaRtTn8Odxc8IEv1lsL_bcuX4KaRBBOQTwPG5EumgFz_7tkxhzC8kih6uY0Sz6F0O_8ApqoK8OYWRtik7oG8d56H50vgXPPH54ITN-Q9O4UQQBhZATOxRpk3i0MZtj6M2d_8HpTyma9y_z-bPks4asNO28xdWCNKNiRDi8iE2edZCHYq7Xo" />
                <div class="absolute inset-0 hero-overlay"></div>
                <div class="container mx-auto px-6 relative z-10 text-center">
                    <h1 class="text-6xl lg:text-7xl font-extrabold text-white mb-4">About Us</h1>
                    <p class="text-primary text-2xl font-medium italic">Driven by trust, powered by comfort</p>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark">
                <div class="container mx-auto px-6">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div class="space-y-6">
                            <h2 class="text-xs font-black uppercase tracking-widest text-primary">Our Story</h2>
                            <h3 class="text-4xl font-bold dark:text-white">Redefining Mobility for Modern India</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                                Founded in 2010, IndiaDrive started with a simple vision: to make premium car rentals
                                accessible, transparent, and absolutely seamless. We understand that a car is more than just
                                a vehicle; it's an experience, a statement, and a trusted companion for your journeys.
                            </p>
                            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                                Today, we stand as one of the most trusted names in the industry, serving thousands of
                                satisfied customers across major Indian metros with a fleet that represents the pinnacle of
                                engineering and comfort.
                            </p>
                        </div>
                        <div class="relative">
                            <div class="aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl">
                                <img alt="Premium car interior" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzQvFGMDrn1qDRNHnTs0w0Am15_98-rcQYkEjTbKVrkc5c9gMoKtGJVjMgRYRV9ozI9isjd3L_cfSk98VMPB52S4lpqytV5AMNfUNthVHL0_rpLIEyTL4XZfnFCrAp0eK3fnH72NBF-37k3V8mccxB9qcJcz_tWA4grFQcF8noyuEYN6dNFSHS0fgwrTNI7YCVzTNS83w0plwiH_jz_2NG3qTRvPnnK1Bl2O2LYoZEcNHZsrqXd076gZUUU0bwsKh-SZm8s3AvL_w" />
                            </div>
                            <div class="absolute -bottom-8 -left-8 bg-primary p-8 rounded-2xl text-white hidden md:block">
                                <div class="text-4xl font-black">14+</div>
                                <div class="text-sm font-bold uppercase tracking-wider">Years of Excellence</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-slate-50 dark:bg-slate-900/50">
                <div class="container mx-auto px-6">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-slate-800 p-12 rounded-3xl border-l-8 border-primary shadow-xl">
                            <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8">
                                <span class="material-symbols-outlined text-4xl text-primary">ads_click</span>
                            </div>
                            <h4 class="text-2xl font-bold mb-4 dark:text-white">Our Mission</h4>
                            <p class="text-slate-600 dark:text-slate-400 text-lg">To provide safe and affordable rides
                                through a curated fleet of premium vehicles, ensuring every customer enjoys the journey as
                                much as the destination.</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-12 rounded-3xl border-l-8 border-primary shadow-xl">
                            <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8">
                                <span class="material-symbols-outlined text-4xl text-primary">visibility</span>
                            </div>
                            <h4 class="text-2xl font-bold mb-4 dark:text-white">Our Vision</h4>
                            <p class="text-slate-600 dark:text-slate-400 text-lg">To become the most trusted rental service
                                in India, known for unmatched quality, innovation, and customer-centric luxury travel
                                solutions.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-xs font-black uppercase tracking-widest text-primary mb-2">Services</h2>
                        <h3 class="text-4xl font-bold dark:text-white uppercase">What We Offer</h3>
                    </div>
                    <div class="grid md:grid-cols-4 gap-8">
                        <div
                            class="group p-8 rounded-2xl border border-slate-100 dark:border-slate-800 hover:border-primary/50 transition-all text-center">
                            <span class="material-symbols-outlined text-5xl text-primary mb-6">directions_car</span>
                            <h5 class="font-bold text-xl mb-3 dark:text-white">Wide Range</h5>
                            <p class="text-slate-500 text-sm">From luxury sedans to powerful SUVs and exotic sports cars.
                            </p>
                        </div>
                        <div
                            class="group p-8 rounded-2xl border border-slate-100 dark:border-slate-800 hover:border-primary/50 transition-all text-center">
                            <span class="material-symbols-outlined text-5xl text-primary mb-6">sell</span>
                            <h5 class="font-bold text-xl mb-3 dark:text-white">Affordable Pricing</h5>
                            <p class="text-slate-500 text-sm">Competitive rates with transparent billing and no hidden
                                costs.</p>
                        </div>
                        <div
                            class="group p-8 rounded-2xl border border-slate-100 dark:border-slate-800 hover:border-primary/50 transition-all text-center">
                            <span class="material-symbols-outlined text-5xl text-primary mb-6">calendar_month</span>
                            <h5 class="font-bold text-xl mb-3 dark:text-white">Easy Booking</h5>
                            <p class="text-slate-500 text-sm">Seamless digital booking process via web or mobile app.</p>
                        </div>
                        <div
                            class="group p-8 rounded-2xl border border-slate-100 dark:border-slate-800 hover:border-primary/50 transition-all text-center">
                            <span class="material-symbols-outlined text-5xl text-primary mb-6">headset_mic</span>
                            <h5 class="font-bold text-xl mb-3 dark:text-white">24/7 Support</h5>
                            <p class="text-slate-500 text-sm">Round-the-clock roadside assistance and customer care.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-slate-50 dark:bg-slate-900/50">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-xs font-black uppercase tracking-widest text-primary mb-2">The Difference</h2>
                        <h3 class="text-4xl font-bold dark:text-white">Why Choose IndiaDrive</h3>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-20 h-20 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center shadow-lg mb-6 text-primary">
                                <i class="material-icons text-4xl">verified</i>
                            </div>
                            <h6 class="font-bold mb-2 dark:text-white">Verified Vehicles</h6>
                            <p class="text-xs text-slate-500 uppercase font-semibold">150+ point check</p>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-20 h-20 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center shadow-lg mb-6 text-primary">
                                <i class="material-icons text-4xl">cleaning_services</i>
                            </div>
                            <h6 class="font-bold mb-2 dark:text-white">Clean Cars</h6>
                            <p class="text-xs text-slate-500 uppercase font-semibold">Deep sanitized</p>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-20 h-20 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center shadow-lg mb-6 text-primary">
                                <i class="material-icons text-4xl">bolt</i>
                            </div>
                            <h6 class="font-bold mb-2 dark:text-white">Fast Booking</h6>
                            <p class="text-xs text-slate-500 uppercase font-semibold">Instant confirmation</p>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-20 h-20 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center shadow-lg mb-6 text-primary">
                                <i class="material-icons text-4xl">support_agent</i>
                            </div>
                            <h6 class="font-bold mb-2 dark:text-white">Customer Support</h6>
                            <p class="text-xs text-slate-500 uppercase font-semibold">Dedicated managers</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-primary text-white">
                <div class="container mx-auto px-6">
                    <div class="grid md:grid-cols-3 gap-12 text-center">
                        <div class="space-y-2">
                            <div class="text-6xl font-black">1000+</div>
                            <div class="text-lg font-bold uppercase tracking-widest text-white/80">Cars</div>
                        </div>
                        <div class="space-y-2">
                            <div class="text-6xl font-black">5000+</div>
                            <div class="text-lg font-bold uppercase tracking-widest text-white/80">Happy Customers</div>
                        </div>
                        <div class="space-y-2">
                            <div class="text-6xl font-black">10+</div>
                            <div class="text-lg font-bold uppercase tracking-widest text-white/80">Cities</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-xs font-black uppercase tracking-widest text-primary mb-2">The Experts</h2>
                        <h3 class="text-4xl font-bold dark:text-white">Our Leadership Team</h3>
                    </div>
                    <div class="grid md:grid-cols-4 gap-12">
                        <div class="text-center group">
                            <div
                                class="w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-slate-100 dark:border-slate-800 group-hover:border-primary transition-all mb-6">
                                <img alt="Team Member" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuwpq2aVt5erWcF3-Ol9YijldNpvLdPpsa26D1eucfgspkAkGEKDMbAgR8UMdm6pq0L_pi0f9iAA3M3KBi8AzIEvp1mfFZ8E0OlPVYjKpBSYC2QZn_ShAWiLAqYdMg9nZ9AoTpxGMcAPCOnS6m039L0Gk2h7JFYpAZOaI9b7V4-7oxlHMadhW-LxRDdBXqwxZghzDg30olFgquldKaK3Gsr7mIf2KpeJVNgYzGZm_HNFZX3n4ImA79xjU0PLGrYq9qbweKdJBs5T8" />
                            </div>
                            <h5 class="text-xl font-bold dark:text-white">Rajesh Khanna</h5>
                            <p class="text-primary font-semibold">CEO &amp; Founder</p>
                        </div>
                        <div class="text-center group">
                            <div
                                class="w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-slate-100 dark:border-slate-800 group-hover:border-primary transition-all mb-6">
                                <img alt="Team Member" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyuYWruloC87Mv1PXfWwvZDjKvu_-Vf0H4RYJfspYiMcliTaM8u9PFkh9hUgD3gBuHFPpiVmCjUrVBm28IMRFYgqxZGbe3pnP6fX6b0ARSViItLhHCP-ssWBJxmdP5OUR_nizFd9W8regC8pB9GtQjbkJ4XwP582B1_L0ojFXt0Tgbf3DAD_GKFnDlN08pdRqe-HdpUI6Y5ayCJ0j30K_F5c611ATcbfAw21n6sP4ixmJmv9hobXRHzYsw8Wfn1LEu-0yONuPQCm4" />
                            </div>
                            <h5 class="text-xl font-bold dark:text-white">Ananya Verma</h5>
                            <p class="text-primary font-semibold">Chief Operations Officer</p>
                        </div>
                        <div class="text-center group">
                            <div
                                class="w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-slate-100 dark:border-slate-800 group-hover:border-primary transition-all mb-6">
                                <img alt="Team Member" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_25kZaqN1Xux2W4sQYgAZVH9opt1TwnpYVCf2pL6EZumE9pSmSQtIJCNQYynhpRevs2kNs1ccCurqytIs6k2_mFy4xh7UN6MMy9hdREEUfeT41pqNZME6qTpXkQC_65MOtX3BkPQQsVBvfEWjGVCJEiQqW7Hddukh_nf8YGzmoh1wy6RituYg-NjKWuUK_av2ANdterczPiONiUikX2ZIZp84mzgYSufQGS6-SIC875mVVdKUqSrLnqb_isUBcj35GorT1TJ76i0" />
                            </div>
                            <h5 class="text-xl font-bold dark:text-white">Vikram Singh</h5>
                            <p class="text-primary font-semibold">Head of Fleet</p>
                        </div>
                        <div class="text-center group">
                            <div
                                class="w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-slate-100 dark:border-slate-800 group-hover:border-primary transition-all mb-6">
                                <img alt="Team Member" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgWEX3TWiSHy75k9zWY8gPK8Ia4jpLTwFmuPAzlneFd_L4N7bDZy-oO-jMsIi3fghLvvYWhMUESNvszxvlCldnK_PHqSseKe7yftmrHD3Jzxakwd4DKvZomdxo-tb_4nEgIdTbzguxhjTM2OagPQKFkxuJZLBaKBS5YOAfNA3AJrgwYNB6U14mfQeOrFVgY28XslO5BghYmTMLn26uTtCR8LsQzJNR3Wg7h70Bbob4NRAq-aTiFJOUth8Zh3Qp3BQXJ_8FEqS3Csc" />
                            </div>
                            <h5 class="text-xl font-bold dark:text-white">Sneha Kapoor</h5>
                            <p class="text-primary font-semibold">Marketing Director</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-slate-900">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-xs font-black uppercase tracking-widest text-primary mb-2">Voices</h2>
                        <h3 class="text-4xl font-bold text-white uppercase">Client Testimonials</h3>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 rounded-2xl shadow-xl relative">
                            <div class="flex text-yellow-400 mb-4">
                                <i class="material-icons">star</i><i class="material-icons">star</i><i
                                    class="material-icons">star</i><i class="material-icons">star</i><i
                                    class="material-icons">star</i>
                            </div>
                            <p class="text-slate-600 italic mb-6">"Incredible service! The Audi A6 I rented was in pristine
                                condition. The pickup process at Delhi airport was seamless. Highly recommended."</p>
                            <div class="font-bold text-slate-900">— Rahul Mehta</div>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-xl relative">
                            <div class="flex text-yellow-400 mb-4">
                                <i class="material-icons">star</i><i class="material-icons">star</i><i
                                    class="material-icons">star</i><i class="material-icons">star</i><i
                                    class="material-icons">star</i>
                            </div>
                            <p class="text-slate-600 italic mb-6">"Rented an SUV for a family trip to Goa. Best rates and
                                best service. The team was very professional and accommodating."</p>
                            <div class="font-bold text-slate-900">— Priya Desai</div>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-xl relative">
                            <div class="flex text-yellow-400 mb-4">
                                <i class="material-icons">star</i><i class="material-icons">star</i><i
                                    class="material-icons">star</i><i class="material-icons">star</i><i
                                    class="material-icons">star_half</i>
                            </div>
                            <p class="text-slate-600 italic mb-6">"I always choose IndiaDrive for my corporate travel in
                                Bangalore. They never disappoint with their punctuality and car quality."</p>
                            <div class="font-bold text-slate-900">— Sameer Joshi</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-xs font-black uppercase tracking-widest text-primary mb-2">Network</h2>
                        <h3 class="text-4xl font-bold dark:text-white">Our Locations</h3>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Mumbai</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Delhi NCR</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Bangalore</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Hyderabad</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Pune</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Chennai</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Kolkata</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Goa</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Jaipur</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:bg-primary/10 transition-colors cursor-pointer">
                            <i class="material-icons text-primary">location_city</i>
                            <span class="font-bold dark:text-white">Chandigarh</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-[#121212] border-y border-white/5">
                <div class="container mx-auto px-6 text-center">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-8">Book your ride today</h2>
                    <div class="flex flex-col md:flex-row justify-center gap-4">
                        <a class="bg-primary text-white px-10 py-4 rounded-full font-bold text-lg hover:brightness-110 transition-all shadow-xl shadow-primary/20"
                            href="#">Explore Cars</a>
                        <a class="bg-white/10 text-white border border-white/20 px-10 py-4 rounded-full font-bold text-lg hover:bg-white/20 transition-all"
                            href="#">Contact Us</a>
                    </div>
                </div>
            </section>
        </main>
       
@endsection