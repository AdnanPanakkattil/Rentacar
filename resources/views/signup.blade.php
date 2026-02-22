@extends('navbar')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>IndiaDrive - Sign Up</title>
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
                            primary: "#e11d48",
                            "background-light": "#ffffff",
                            "background-dark": "#111827",
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
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
        </style>
    </head>

    <body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 overflow-hidden">
        <div class="flex min-h-screen">
            <div class="hidden lg:block lg:w-1/2 relative">
                <img alt="Luxury car on an open road" class="absolute inset-0 w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_Tc91R8yGBtRsZvd_fiVGsuWnyER3bde5w7uR_6hlNmAstYxYYjkOM1xsBCkRn4C2Gj8BcA-INOqFQMOpZfuF5fombaRtTn8Odxc8IEv1lsL_bcuX4KaRBBOQTwPG5EumgFz_7tkxhzC8kih6uY0Sz6F0O_8ApqoK8OYWRtik7oG8d56H50vgXPPH54ITN-Q9O4UQQBhZATOxRpk3i0MZtj6M2d_8HpTyma9y_z-bPks4asNO28xdWCNKNiRDi8iE2edZCHYq7Xo" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-12 left-12 text-white">
                    <h2 class="text-4xl font-extrabold mb-4 leading-tight">Embark on Your <br /><span
                            class="text-primary">Next Adventure</span></h2>
                    <p class="text-slate-200 text-lg max-w-md">Join India's most exclusive premium car rental community and
                        access our elite fleet today.</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col p-8 md:p-12 lg:p-20 overflow-y-auto">
                <div class="flex justify-between items-center mb-12">
                    <div class="text-2xl font-bold flex items-center">
                        <span class="text-primary text-3xl font-black">India</span><span>Drive</span>
                    </div>
                    <button class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                        onclick="document.documentElement.classList.toggle('dark')">
                        <i class="material-icons dark:hidden">dark_mode</i>
                        <i class="material-icons hidden dark:block">light_mode</i>
                    </button>
                </div>
                <div class="max-w-md w-full mx-auto flex-1 flex flex-col justify-center">
                    <div class="mb-10">
                        <h1 class="text-3xl font-bold mb-3">Create your account</h1>
                        <p class="text-slate-500 dark:text-slate-400">Experience premium mobility. Sign up in minutes.</p>
                    </div>
                    <form class="space-y-6">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="fullname">Full
                                Name</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">person</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-sm"
                                    id="fullname" placeholder="John Doe" required="" type="text" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="email">Email
                                Address</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">mail</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-sm"
                                    id="email" placeholder="name@company.com" required="" type="email" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="phone">Phone
                                Number</label>
                            <div class="relative flex">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">call</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-sm"
                                    id="phone" placeholder="+91 00000 00000" required="" type="tel" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                for="password">Password</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock</span>
                                <input
                                    class="w-full pl-10 pr-12 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-sm"
                                    id="password" placeholder="Min. 8 characters" required="" type="password" />
                                <button
                                    class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600"
                                    type="button">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <input
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary transition-colors cursor-pointer"
                                id="terms" required="" type="checkbox" />
                            <label class="text-sm text-slate-500 dark:text-slate-400" for="terms">
                                I agree to the <a class="text-primary font-semibold hover:underline" href="#">Terms &amp;
                                    Conditions</a> and <a class="text-primary font-semibold hover:underline"
                                    href="#">Privacy Policy</a> of IndiaDrive.
                            </label>
                        </div>
                        <button
                            class="w-full bg-primary text-white py-4 rounded-xl font-bold text-lg hover:brightness-110 shadow-lg shadow-primary/30 transition-all active:scale-[0.98]"
                            type="submit">
                            Create Account
                        </button>
                    </form>
                    <div class="mt-8 text-center">
                        <p class="text-slate-500 dark:text-slate-400 text-sm">
                            Already have an account? <a class="text-primary font-bold hover:underline" href="#">Login</a>
                        </p>
                    </div>
                </div>
                <div class="mt-auto pt-10 text-center lg:text-left">
                    <p class="text-xs text-slate-400">© 2024 IndiaDrive. Premium Car Rentals. Secure Registration.</p>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection