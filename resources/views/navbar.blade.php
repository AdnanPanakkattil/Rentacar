<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>IndiaDrive - Premium Car Rental Landing Page</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#e11d48", // Changed to Red
                        secondary: "#06b6d4",
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
        .hero-overlay {
            background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-200">
    <div class="border-b border-slate-100 dark:border-slate-800 py-2 hidden md:block">
        <div
            class="container mx-auto px-6 flex justify-between items-center text-xs font-medium text-slate-500 dark:text-slate-400">
            <div class="flex gap-6">
                <span class="flex items-center gap-1"><i class="material-icons text-sm">phone</i> +91 1800 200
                    300</span>
                <span class="flex items-center gap-1"><i class="material-icons text-sm">email</i>
                    support@indiadrive.com</span>
            </div>
            <div class="flex gap-4">
                <a href="#"><i class="material-icons text-sm">facebook</i></a>
                <a href="#"><i class="material-icons text-sm">alternate_email</i></a>
                <a href="#"><i class="material-icons text-sm">camera_alt</i></a>
            </div>
        </div>
    </div>
    <header
        class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-slate-100 dark:border-slate-800">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-12">
                <div class="text-2xl font-bold flex items-center">
                    <span class="text-[#ff2800] text-3xl font-black">India</span><span>Drive</span>
                </div>
                <ul class="hidden lg:flex items-center gap-8 text-sm font-semibold uppercase tracking-wider">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-primary transition-colors">About</a>
                    </li>
                    <li>
                        <a href="{{ route('rent-cars') }}" class="hover:text-primary transition-colors">Cars</a>
                    </li>
                    <li>
                        <a href="{{ route('service') }}" class="hover:text-primary transition-colors">Service</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact</a>
                    </li>
                </ul>

            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                    onclick="document.documentElement.classList.toggle('dark')">
                    <i class="material-icons dark:hidden">dark_mode</i>
                    <i class="material-icons hidden dark:block">light_mode</i>
                </button>
                <a class="hidden md:block text-sm font-bold px-4 py-2 hover:text-primary transition-colors"
                    href="{{ route('signin') }}">Loging</a>
                <a class="hidden md:block text-sm font-bold px-4 py-2 hover:text-primary transition-colors"
                    href="{{ route('signup') }}">Sign up</a>
                <!-- <a class="bg-primary text-white px-6 py-2.5 rounded font-bold text-sm hover:opacity-90 transition-opacity"
                    href="#">Book Now</a> -->
            </div>
        </nav>
    </header>
    <div class="">
        @yield('content')
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>