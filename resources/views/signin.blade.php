@extends('navbar')

@section('content')
   
        <div class="flex h-full">
            <div class="hidden lg:block lg:w-1/2 relative">
                <img alt="Luxury Car Interior" class="absolute inset-0 w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_Tc91R8yGBtRsZvd_fiVGsuWnyER3bde5w7uR_6hlNmAstYxYYjkOM1xsBCkRn4C2Gj8BcA-INOqFQMOpZfuF5fombaRtTn8Odxc8IEv1lsL_bcuX4KaRBBOQTwPG5EumgFz_7tkxhzC8kih6uY0Sz6F0O_8ApqoK8OYWRtik7oG8d56H50vgXPPH54ITN-Q9O4UQQBhZATOxRpk3i0MZtj6M2d_8HpTyma9y_z-bPks4asNO28xdWCNKNiRDi8iE2edZCHYq7Xo" />
                <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
                <div class="absolute bottom-12 left-12 text-white z-10 max-w-md">
                    <h2 class="text-4xl font-extrabold mb-4">The Journey of a Thousand Miles Begins with the Right Drive.
                    </h2>
                    <p class="text-white/80 text-lg">Experience the pinnacle of luxury car rentals across India with our
                        premium fleet.</p>
                </div>
                <div class="absolute top-12 left-12 z-10">
                    <div class="text-3xl font-bold flex items-center text-white">
                        <span class="text-primary text-4xl font-black">India</span><span>Drive</span>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex items-center justify-center p-8 md:p-16 lg:p-24 bg-white overflow-y-auto">
                <div class="w-full max-w-md">
                    <div class="lg:hidden mb-12 flex justify-center">
                        <div class="text-3xl font-bold flex items-center text-charcoal">
                            <span class="text-primary text-4xl font-black">India</span><span>Drive</span>
                        </div>
                    </div>
                    <div class="mb-10 text-center lg:text-left">
                        <h1 class="text-4xl font-bold text-charcoal mb-3">Welcome Back</h1>
                        <p class="text-slate-500">Please enter your details to access your account.</p>
                    </div>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-charcoal mb-2" for="email">Email Address</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none placeholder:text-slate-400"
                                    id="email" name="email" placeholder="name@example.com" type="email" />
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label class="block text-sm font-semibold text-charcoal" for="password">Password</label>
                                <a class="text-sm font-bold text-primary hover:underline" href="#">Forgot Password?</a>
                            </div>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none placeholder:text-slate-400"
                                    id="password" name="password" placeholder="••••••••" type="password" />
                                <button
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-charcoal transition-colors"
                                    type="button">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input class="w-4 h-4 text-primary border-slate-300 rounded focus:ring-primary" id="remember"
                                type="checkbox" />
                            <label class="ml-2 text-sm text-slate-600" for="remember">Remember me for 30 days</label>
                        </div>
                        <button
                            class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98]"
                            type="submit">
                            Login
                        </button>
                    </form>
                    <div class="mt-8 flex items-center gap-4">
                        <div class="flex-1 h-px bg-slate-100"></div>
                        <span class="text-slate-400 text-sm font-medium">Or login with</span>
                        <div class="flex-1 h-px bg-slate-100"></div>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <button
                            class="flex items-center justify-center gap-3 px-4 py-3 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors">
                            <img alt="Google" class="w-5 h-5"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_82IMBpUOo9jOg124Ph-WT8pPvl-EZeHEM_o2VnULRjYm8XAs3QHIjOU1A2W6YTBw_ngFd6dY2mVKmDHeDmnHR37UhEFvZFj0FhHv0K0bNIet348dRChpHrhM45SmPQwD_tEvPccxFFPl1sQPDyalWg0kh9wQors4PoFYmN6Jc4u4er7DjBpmfiXoXdraJLUu-KLsH4Iki2eqkBnN8QS7rkwTBASMKqH4XZqnRENyBX5N8ry8rDx5-UCZwnmvg0L7j5AkhpIcV4c" />
                            <span class="text-sm font-bold text-charcoal">Google</span>
                        </button>
                        <button
                            class="flex items-center justify-center gap-3 px-4 py-3 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors">
                            <img alt="Facebook" class="w-5 h-5"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_tw_FVdiFaI0njXzAjSzZU1tzyPWHH83S3t_dAJ8fks7Z-z8g7L9ZFbmhSLaJA75VlZBwWow7hOjSnf3zpGl9rjbsVU0q8jFLQDygJMyJeiJaTVOKAhAfcbrHGKc7VKOOo2Mz868gdoiBUikSSnOrB2y3_GvBXkJa9GxnGMo3GMdQoRte-GbzfPvQU44fpoMHvYi9NS95PCFKW5DQfnXyXYuHeqiAx_tnCZNXRz24j1F6lH0CgduSJrllRj5k93vWCnuo9a4m6fM" />
                            <span class="text-sm font-bold text-charcoal">Facebook</span>
                        </button>
                    </div>
                    <p class="mt-10 text-center text-slate-500">
                        Don't have an account?
                        <a class="text-primary font-bold hover:underline" href="#">Sign up for free</a>
                    </p>
                </div>
            </div>
        </div>

  
@endsection