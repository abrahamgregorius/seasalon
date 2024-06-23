<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEASalon</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="navbar shadow-md border-b-2 p-4">
        <div class="container flex flex-col sm:items-center sm:flex-row sm:justify-between w-full max-w-[1200px] mx-auto my-0 ">
            <div class="navbar-top flex items-center justify-between">
                <div class="navbar-logo">
                    <a href="/">
                        <img src="{{ asset('favicon.ico') }}" alt="">
                        <h1 class="font-bold text-xl">
                            SEASalon
                        </h1>
                    </a>
                </div>
                <div class="navbar-toggle text-xl sm:hidden">
                    <span id="nav-toggle" class="select-none cursor-pointer">
                        &equiv;
                    </span>
                </div>
            </div>
            <div class="navbar-bottom">
                <div class="navbar-menu hidden sm:flex">
                    <ul class="flex gap-3 flex-col text-center sm:flex-row sm:items-center">
                        @if(!auth()->user())
                        <a class="text-slate-800 hover:text-slate-600 transition" href="/services">
                            <li>Services</li>
                        </a>
                        <a class="text-slate-800 hover:text-slate-600 transition" href="/reviews">
                            <li>Reviews</li>
                        </a>
                        <a class="text-slate-800 hover:text-slate-600 transition" href="/login">
                            <li>Login</li>
                        </a>
                        <a class="px-2 py-1 border-2 text-white bg-red-600 border-red-600 hover:bg-red-700 hover:border-red-700 rounded-lg transition duration-200" href="/reservations">
                            <li>Reservation</li>
                        </a>
                        @else
                        <a class="text-slate-800 hover:text-slate-600 transition" href="/services">
                            <li>Services</li>
                        </a>
                        <a class="text-slate-800 hover:text-slate-600 transition" href="/reviews">
                            <li>Reviews</li>
                        </a>
                        <a class="text-slate-800 hover:text-slate-600 transition" href="/login">
                            <li>Dashboard</li>
                        </a>
                        <a class="px-2 py-1 border-2 text-white bg-red-600 border-red-600 hover:bg-red-700 hover:border-red-700 rounded-lg transition duration-200" href="/reservations">
                            <li>Reservation</li>
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="text-slate-800 hover:text-slate-600 transition" href="/reviews">
                                <li>Logout</li>
                            </button>
                        </form>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        @yield('content')
    </div>
        



    <div class="footer border-t-2 p-8">
        <div class="container flex flex-col sm:flex-row gap-4 sm:items-start sm:justify-between w-full max-w-[1200px] mx-auto my-0">
            <div class="footer-left flex">
                <a href="/">
                    <h1 class="text-2xl font-bold">SEASalon</h1>
                </a>
            </div>
            <div class="footer-right flex flex-col gap-4 sm:gap-12 sm:items-start sm:flex-row">
                <div class="f-menu-1 flex flex-col gap-1"> {{-- Footer Menu 1 --}}
                    <div class="fm1-head">
                        <h3 class="font-bold text-lg">Menu</h3>
                    </div>
                    <div class="fm1-body">
                        <ul class="flex flex-col gap-1">
                            <a class="text-slate-800 hover:text-slate-600 transition" href="/">
                                <li>Home</li>
                            </a>
                            <a class="text-slate-800 hover:text-slate-600 transition" href="/services">
                                <li>Services</li>
                            </a>
                            <a class="text-slate-800 hover:text-slate-600 transition" href="/reservations">
                                <li>Reservations</li>
                            </a>
                            <a class="text-slate-800 hover:text-slate-600 transition" href="/reviews">
                                <li>Reviews</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="f-menu-2">
                    <div class="fm2-head">
                        <h3 class="font-bold text-lg">Social</h3>
                    </div>
                    <div class="fm2-body">
                        <ul class="flex flex-col gap-1">
                            <a class="text-slate-800 hover:text-slate-600 transition" href="#">
                                <li>Facebook</li>
                            </a>
                            <a class="text-slate-800 hover:text-slate-600 transition" href="#">
                                <li>Instagram</li>
                            </a>
                            <a class="text-slate-800 hover:text-slate-600 transition" href="#">
                                <li>Twitter</li>
                            </a>
                            <a class="text-slate-800 hover:text-slate-600 transition" href="#">
                                <li>Maps</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const navToggle = document.getElementById('nav-toggle')
        const navMenu = document.querySelector('.navbar-menu')

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('hidden')
        })
    </script>
</body>
</html>