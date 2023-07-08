@extends('layouts.front')

@section('title', ' GAS')

@section('content')
    {{-- Header --}}
    <section class="h-full w-full border-box transition-all duration-500 linear relative" style="background-color: #fafcff">
        <!-- Navbar -->
        <div class="header-3-3" style="font-family: 'Poppins', sans-serif">
            <header x-data="{ open: false }"
                class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8">
                <div class="flex items-center justify-between">
                    <a href="#">
                        <img src="{{ asset('assets/logo.png') }}" alt="" width="50" />
                    </a>

                    <div class="flex justify-end items-center lg:hidden cursor-pointer">
                        <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                </div>
                <!-- Backdrop -->
                <!-- Backdop -->
                <div :class="{ 'hidden': !open }"
                    class="bg-black fixed hidden w-full h-full top-0 left-0 z-30 bg-opacity-60" @click="open = !open">
                </div>

                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="hidden z-50 fixed left-3 right-3 rounded-md shadow-md flex-col p-8 justify-center navigation items-start lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center lg:flex lg:flex-row lg:relative lg:space-x-7 bg-white">
                    <a href="#">
                        <img class="m-0 lg:hidden mb-3"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png"
                            alt="" />
                    </a>
                    <a href="#"
                        class="text-sm text-gray-800 font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative active">Beranda</a>
                    <a href="#" class="text-sm text-gray-500 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Tentang
                        GAS</a>
                    <a href="#" class="text-sm text-gray-500 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Fitur</a>
                    <a href="#" class="text-sm text-gray-500 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Daftar</a>
                    <a href="#" class="text-sm text-gray-500 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Karir</a>
                    <div class="flex items-center justify-end w-full lg:hidden mt-3">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>

                    <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </nav>

                @if (Route::has('login'))
                    {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                    <div class="hidden items-center justify-end lg:flex">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </header>

            <div class="lg:px-24 md:px-16 sm:px-8 px-8">
                <hr style="border-color: #f3f8ff" />
            </div>

            <!-- Hero -->
            <div>
                <div class="mx-auto flex pt-32 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1 class="text-gray-800 title-font sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold"
                            style="line-height: 1.25">
                            Bergabung<br class="lg:block hidden" /> dengan
                            <span style="color: #FFCA04"> GAS</span>
                        </h1>
                        <p class="text-base text-gray-800 leading-6 tracking-wide mb-12 lg:mb-20">
                            Aplikasi Gas akan membantumu dalam memantau stok
                            <br class="sm:block hidden" />
                            produk tokomu dan menjangkau customer yang lebih luas
                        </p>

                        <div class="flex items-center mx-auto lg:mx-0 justify-center lg:space-x-4 space-x-2">
                            <a href="https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en" target="_blank"
                                class="bg-yellow-400 hover:bg-opacity-50 text-gray-800 inline-flex font-semibold text-base py-4 px-8 rounded-full">
                                Unduh Sekarang
                            </a>

                            <a href="https://www.facebook.com/aplikasigas" target="_blank">
                                <svg height="55"
                                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                    version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g>
                                        <path
                                            d="M512,256c0,-141.385 -114.615,-256 -256,-256c-141.385,0 -256,114.615 -256,256c0,127.777 93.616,233.685 216,252.89l0,-178.89l-65,0l0,-74l65,0l0,-56.4c0,-64.16 38.219,-99.6 96.695,-99.6c28.009,0 57.305,5 57.305,5l0,63l-32.281,0c-31.801,0 -41.719,19.733 -41.719,39.978l0,48.022l71,0l-11.35,74l-59.65,0l0,178.89c122.385,-19.205 216,-125.113 216,-252.89Z"
                                            style="fill:#1877f2;fill-rule:nonzero;" />
                                        <path
                                            d="M355.65,330l11.35,-74l-71,0l0,-48.022c0,-20.245 9.917,-39.978 41.719,-39.978l32.281,0l0,-63c0,0 -29.297,-5 -57.305,-5c-58.476,0 -96.695,35.44 -96.695,99.6l0,56.4l-65,0l0,74l65,0l0,178.89c13.033,2.045 26.392,3.11 40,3.11c13.608,0 26.966,-1.065 40,-3.11l0,-178.89l59.65,0Z"
                                            style="fill:#fff;fill-rule:nonzero;" />
                                    </g>
                                </svg>
                            </a>

                            <a href="https://www.instagram.com/aplikasigas/?hl=id" target="_blank">
                                <svg id="Layer_1" style="enable-background:new 0 0 1000 1000;" version="1.1"
                                    height="55" viewBox="0 0 1000 1000" xml:space="preserve"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <style type="text/css">
                                        .st0 {
                                            fill: url(#SVGID_1_);
                                        }

                                        .st1 {
                                            fill: #FFFFFF;
                                        }
                                    </style>
                                    <linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="146.4465"
                                        x2="853.5535" y1="853.5535" y2="146.4465">
                                        <stop offset="0" style="stop-color:#FFD521" />
                                        <stop offset="5.510481e-02" style="stop-color:#FFD020" />
                                        <stop offset="0.1241" style="stop-color:#FEC01E" />
                                        <stop offset="0.2004" style="stop-color:#FCA71B" />
                                        <stop offset="0.2821" style="stop-color:#FA8316" />
                                        <stop offset="0.3681" style="stop-color:#F85510" />
                                        <stop offset="0.4563" style="stop-color:#F51E09" />
                                        <stop offset="0.5" style="stop-color:#F30005" />
                                        <stop offset="0.5035" style="stop-color:#F20007" />
                                        <stop offset="0.5966" style="stop-color:#E1003B" />
                                        <stop offset="0.6879" style="stop-color:#D30067" />
                                        <stop offset="0.7757" style="stop-color:#C70088" />
                                        <stop offset="0.8589" style="stop-color:#BF00A0" />
                                        <stop offset="0.9357" style="stop-color:#BB00AF" />
                                        <stop offset="1" style="stop-color:#B900B4" />
                                    </linearGradient>
                                    <path class="st0"
                                        d="M500,1000L500,1000C223.9,1000,0,776.1,0,500v0C0,223.9,223.9,0,500,0h0c276.1,0,500,223.9,500,500v0  C1000,776.1,776.1,1000,500,1000z" />
                                    <g>
                                        <path class="st1"
                                            d="M500,220.2c91.1,0,101.9,0.3,137.9,2c33.3,1.5,51.4,7.1,63.4,11.8c15.9,6.2,27.3,13.6,39.2,25.5   c11.9,11.9,19.3,23.3,25.5,39.2c4.7,12,10.2,30.1,11.8,63.4c1.6,36,2,46.8,2,137.9s-0.3,101.9-2,137.9   c-1.5,33.3-7.1,51.4-11.8,63.4c-6.2,15.9-13.6,27.3-25.5,39.2c-11.9,11.9-23.3,19.3-39.2,25.5c-12,4.7-30.1,10.2-63.4,11.8   c-36,1.6-46.8,2-137.9,2s-101.9-0.3-137.9-2c-33.3-1.5-51.4-7.1-63.4-11.8c-15.9-6.2-27.3-13.6-39.2-25.5   c-11.9-11.9-19.3-23.3-25.5-39.2c-4.7-12-10.2-30.1-11.8-63.4c-1.6-36-2-46.8-2-137.9s0.3-101.9,2-137.9   c1.5-33.3,7.1-51.4,11.8-63.4c6.2-15.9,13.6-27.3,25.5-39.2c11.9-11.9,23.3-19.3,39.2-25.5c12-4.7,30.1-10.2,63.4-11.8   C398.1,220.5,408.9,220.2,500,220.2 M500,158.7c-92.7,0-104.3,0.4-140.7,2.1c-36.3,1.7-61.1,7.4-82.9,15.9   C254,185.3,234.9,197,216,216c-19,19-30.6,38-39.4,60.5c-8.4,21.7-14.2,46.5-15.9,82.9c-1.7,36.4-2.1,48-2.1,140.7   c0,92.7,0.4,104.3,2.1,140.7c1.7,36.3,7.4,61.1,15.9,82.9C185.3,746,197,765.1,216,784c19,19,38,30.6,60.5,39.4   c21.7,8.4,46.5,14.2,82.9,15.9c36.4,1.7,48,2.1,140.7,2.1s104.3-0.4,140.7-2.1c36.3-1.7,61.1-7.4,82.9-15.9   C746,814.7,765.1,803,784,784c19-19,30.6-38,39.4-60.5c8.4-21.7,14.2-46.5,15.9-82.9c1.7-36.4,2.1-48,2.1-140.7   s-0.4-104.3-2.1-140.7c-1.7-36.3-7.4-61.1-15.9-82.9C814.7,254,803,234.9,784,216c-19-19-38-30.6-60.5-39.4   c-21.7-8.4-46.5-14.2-82.9-15.9C604.3,159.1,592.7,158.7,500,158.7L500,158.7z" />
                                        <path class="st1"
                                            d="M500,324.7c-96.8,0-175.3,78.5-175.3,175.3S403.2,675.3,500,675.3S675.3,596.8,675.3,500   S596.8,324.7,500,324.7z M500,613.8c-62.8,0-113.8-50.9-113.8-113.8S437.2,386.2,500,386.2c62.8,0,113.8,50.9,113.8,113.8   S562.8,613.8,500,613.8z" />
                                        <circle class="st1" cx="682.2" cy="317.8" r="41" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="absolute bottom-0 lg:block hidden lg:right-36 md:right-16 sm:right-8 right-8"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-2.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Popular Fitur --}}
    <section class="value bg-yellow-500 bg-opacity-5 py-24">
        <div class="max-w-screen-2xl px-4 lg:px-24 mx-auto content" style="font-family: 'Poppins', sans-serif">
            <div class="text-center section-heading mb-20">
                <div class="mb-3 text-4xl font-bold leading-relaxed text-gray-800 lg:text-6xl">Popular Fitur</div>
                <div class="text-lg font-light text-gray-800">Nikmati berbagai fitur menarik yang kami berikan</div>
            </div>

            <div class="grid items-center justify-center h-full md:grid-cols-6">
                {{-- mesin kasir --}}
                <div class="h-full col-span-2 md:col-span-1">
                    <div class="flex flex-col items-center justify-center">
                        <div>
                            <svg height="80" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #414042;
                                        }

                                        .cls-2 {
                                            fill: #231f20;
                                        }

                                        .cls-3 {
                                            fill: #fff200;
                                        }

                                        .cls-4 {
                                            fill: #ffbe00;
                                        }
                                    </style>
                                </defs>
                                <title />
                                <g id="cashier">
                                    <path class="cls-1"
                                        d="M57.81,40.35,56,25.94a.53.53,0,0,1,0-.13V16a4.93,4.93,0,0,0-1-3c.19-.25-1.33,1-2.67,1H33.69a3.7,3.7,0,0,1-3.63-3H13a5,5,0,0,0-5,5v9.82a.53.53,0,0,1,0,.13L6.19,40.35A5,5,0,0,0,3,45V55a5,5,0,0,0,5,5H56a5,5,0,0,0,5-5V45A5,5,0,0,0,57.81,40.35ZM57,55a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V45a1,1,0,0,1,1-1H56a1,1,0,0,1,1,1Z" />
                                    <path class="cls-2"
                                        d="M57.81,40.35,56,25.94a.53.53,0,0,1,0-.13V16a4.93,4.93,0,0,0-1-3c.19-.25-1.33,1-2.67,1H33.69a3.7,3.7,0,0,1-3.63-3h0a5.47,5.47,0,0,1-.1-1V60H56a5,5,0,0,0,5-5V45A5,5,0,0,0,57.81,40.35Z" />
                                    <rect class="cls-3" height="21" rx="3.69" width="58" x="3"
                                        y="40" />
                                    <path class="cls-4"
                                        d="M56,6.69V10a4.84,4.84,0,0,1-.53,2.21A3.68,3.68,0,0,1,52.31,14H33.69a3.7,3.7,0,0,1-3.63-3h0a5.47,5.47,0,0,1-.1-1V6.69A3.69,3.69,0,0,1,33.69,3H52.31A3.69,3.69,0,0,1,56,6.69Z" />
                                    <path class="cls-4" d="M30,10a5.47,5.47,0,0,0,.1,1h0a3.85,3.85,0,0,1-.06-.69Z" />
                                    <path class="cls-4" d="M56,10v.31a3.59,3.59,0,0,1-.53,1.9A4.84,4.84,0,0,0,56,10Z" />
                                    <path class="cls-4"
                                        d="M61,43.69V57.31A3.69,3.69,0,0,1,57.31,61H30V40H57.31A3.69,3.69,0,0,1,61,43.69Z" />
                                    <rect class="cls-4" height="11" rx="2" width="26" x="30"
                                        y="3" />
                                    <path class="cls-1" d="M36,51a2,2,0,0,1-2,2H26a2,2,0,0,1,0-4h8A2,2,0,0,1,36,51Z" />
                                    <path class="cls-2" d="M36,51a2,2,0,0,1-2,2H30V49h4A2,2,0,0,1,36,51Z" />
                                    <path class="cls-4"
                                        d="M46,27a2,2,0,1,1-2,2A2,2,0,0,1,46,27Zm0,6a2,2,0,1,1-2,2A2,2,0,0,1,46,33Zm-7-6a2,2,0,1,1-2,2A2,2,0,0,1,39,27Zm0,6a2,2,0,1,1-2,2A2,2,0,0,1,39,33Zm-7-2a2,2,0,1,1,2-2A2,2,0,0,1,32,31Zm2,4a2,2,0,1,1-2-2A2,2,0,0,1,34,35Z" />
                                    <path class="cls-3" d="M18,19H32a2,2,0,0,1,0,4H18a2,2,0,0,1,0-4Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="mt-6 mb-4 text-base font-bold text-gray-800">Mesin Kasir</div>
                    </div>
                </div>
                {{-- scan barcode --}}
                <div class="h-full col-span-2 md:col-span-1">
                    <div class="flex flex-col items-center justify-center">
                        <div>
                            <svg height="80" enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_1" />
                                <g id="Layer_2">
                                    <g>
                                        <polyline fill="none" points="    2,10 2,6 6,6   " stroke="#000000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="2" />
                                        <polyline fill="none" points="    30,10 30,6 26,6   " stroke="#000000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="2" />
                                        <polyline fill="none" points="    2,22 2,26 6,26   " stroke="#000000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="2" />
                                        <polyline fill="none" points="    30,22 30,26 26,26   " stroke="#000000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="2" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="6" x2="6" y1="9" y2="15" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="11" x2="11" y1="9" y2="15" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="26" x2="26" y1="9" y2="15" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="21" x2="21" y1="9" y2="15" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="16" x2="16" y1="9" y2="15" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="2" x2="30" y1="18" y2="18" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="6" x2="6" y1="21" y2="23" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="11" x2="11" y1="21" y2="22" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="26" x2="26" y1="21" y2="23" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="21" x2="21" y1="21" y2="22" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                            x1="16" x2="16" y1="21" y2="22" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="mt-6 mb-4 text-base font-bold text-gray-800">Scan Barcode</div>
                    </div>
                </div>
                {{-- daftar kurir --}}
                <div class="h-full col-span-2">
                    <div class="flex flex-col items-center justify-center">
                        <div>
                            <svg height="80" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1"
                                viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <style type="text/css">
                                    .st0 {
                                        fill: #F22E24;
                                    }

                                    .st1 {
                                        fill: #F4756E;
                                    }

                                    .st2 {
                                        fill: #731611;
                                    }

                                    .st3 {
                                        fill: #F29F18;
                                    }

                                    .st4 {
                                        fill: #F4BC62;
                                    }

                                    .st5 {
                                        fill: #595959;
                                    }

                                    .st6 {
                                        fill: #734B0B;
                                    }

                                    .st7 {
                                        fill: #FFFFFF;
                                    }

                                    .st8 {
                                        fill: #EBDEE5;
                                    }

                                    .st9 {
                                        fill: #C6BEC3;
                                    }
                                </style>
                                <g id="XMLID_4852_">
                                    <path class="st0"
                                        d="M256,507.1c92.6,0,173.5-50.1,217-124.7c-43.2-75-124.2-125.5-217-125.5S82.2,307.3,39,382.4   C82.5,457,163.4,507.1,256,507.1z"
                                        id="XMLID_3339_" />
                                    <g id="XMLID_3739_">
                                        <path class="st1"
                                            d="M78.5,330.7c-15.3,15.4-28.6,32.7-39.5,51.7c10.9,18.7,24.2,35.9,39.5,51.2V330.7z"
                                            id="XMLID_3746_" />
                                        <path class="st2"
                                            d="M381.5,290.6v136c0,16.7-13.6,30.5-30.3,30.5h-246c42,31.4,94.2,50.1,150.7,50.1    c92.6,0,173.5-50.2,217-124.8C451.1,344.4,419.5,312.6,381.5,290.6z"
                                            id="XMLID_3740_" />
                                    </g>
                                    <polygon class="st3" id="XMLID_3299_"
                                        points="255.9,297.2 255.9,297.2 227.4,268.7 227.4,228.9 284.3,228.9 284.3,268.7  " />
                                    <path class="st3"
                                        d="M324.6,155.1h24.5c13.5,0,24.5-11,24.5-24.5v0c0-13.5-11-24.5-24.5-24.5h-24.5V155.1z"
                                        id="XMLID_3332_" />
                                    <path class="st3"
                                        d="M187.3,155.1h-24.5c-13.5,0-24.5-11-24.5-24.5v0c0-13.5,11-24.5,24.5-24.5h24.5V155.1z"
                                        id="XMLID_3331_" />
                                    <path class="st4"
                                        d="M256,238.8L256,238.8c-44.4,0-80.4-36-80.4-80.4v-55.9c0-44.4,36-80.4,80.4-80.4h0   c44.4,0,80.4,36,80.4,80.4v55.9C336.4,202.8,300.4,238.8,256,238.8z"
                                        id="XMLID_3330_" />
                                    <path class="st3"
                                        d="M255.8,22h0.1c-4.2,0-8.2,0.4-12.2,1c38.6,5.9,68.3,39.3,68.3,79.5v55.9   c0,40.3-29.6,73.7-68.2,79.6c4,0.6,8.1,1,12.2,1h-0.2c44.4,0,80.2-36.2,80.2-80.6v-55.9C336,58.1,300.2,22,255.8,22z"
                                        id="XMLID_3329_" />
                                    <g id="XMLID_3327_">
                                        <g id="XMLID_40_">
                                            <rect class="st5" height="10" id="XMLID_41_" width="25"
                                                x="211" y="115" />
                                        </g>
                                    </g>
                                    <g id="XMLID_3325_">
                                        <g id="XMLID_37_">
                                            <rect class="st5" height="19" id="XMLID_38_" width="10"
                                                x="231" y="135" />
                                        </g>
                                    </g>
                                    <g id="XMLID_3323_">
                                        <g id="XMLID_34_">
                                            <rect class="st5" height="10" id="XMLID_35_" width="25"
                                                x="276" y="115" />
                                        </g>
                                    </g>
                                    <g id="XMLID_3321_">
                                        <g id="XMLID_31_">
                                            <rect class="st5" height="19" id="XMLID_32_" width="10"
                                                x="271" y="135" />
                                        </g>
                                    </g>
                                    <g id="XMLID_3319_">
                                        <path class="st6"
                                            d="M256,196.2c-13.5,0-24.5-11-24.5-24.5h9.8c0,8.1,6.6,14.7,14.7,14.7s14.7-6.6,14.7-14.7h9.8    C280.5,185.2,269.5,196.2,256,196.2z"
                                            id="XMLID_3320_" />
                                    </g>
                                    <rect class="st6" height="9.8" id="XMLID_3318_" width="9.8" x="344.3"
                                        y="125.7" />
                                    <rect class="st6" height="9.8" id="XMLID_3317_" width="9.8" x="157.9"
                                        y="125.7" />
                                    <path class="st5"
                                        d="M193.2,16.7L193.2,16.7l0,71c0,10.2-8.3,18.5-18.5,18.5h-12.4V47.5   C162.4,30.5,176.2,16.7,193.2,16.7z"
                                        id="XMLID_3314_" />
                                    <path class="st5"
                                        d="M318.4,16.7L318.4,16.7l0,71c0,10.2,8.3,18.5,18.5,18.5h12.4V47.5   C349.2,30.5,335.4,16.7,318.4,16.7z"
                                        id="XMLID_3311_" />
                                    <path class="st2"
                                        d="M201.4,4.9h108.8c21.5,0,39,17.5,39,39v44.9H162.4V43.9C162.4,22.4,179.9,4.9,201.4,4.9z"
                                        id="XMLID_3308_" />
                                    <path class="st0"
                                        d="M201.4,4.9h68.4c21.5,0,39,17.5,39,39v44.4H162.4V43.9C162.4,22.4,179.9,4.9,201.4,4.9z"
                                        id="XMLID_3689_" />
                                    <path class="st0"
                                        d="M200.7,50h110.3c21.1,0,38.3,17.1,38.3,38.3v0H162.4v0C162.4,67.1,179.5,50,200.7,50z"
                                        id="XMLID_3305_" />
                                    <path class="st1"
                                        d="M200.7,50h69.9c21.1,0,38.3,17.1,38.3,38.3v0H162.4v0C162.4,67.1,179.5,50,200.7,50z"
                                        id="XMLID_4152_" />
                                    <path class="st7"
                                        d="M256,21.6c-15.7,0-28.4,11.4-28.4,28.4h56.9C284.4,33,271.7,21.6,256,21.6z"
                                        id="XMLID_3304_" />
                                    <path class="st1"
                                        d="M255.9,297.2L234.1,319l-51.2-51.3c14.4-4.4,29-7.5,44.6-9.2v10.2L255.9,297.2L255.9,297.2z"
                                        id="XMLID_3303_" />
                                    <path class="st1"
                                        d="M328.8,267.6l-51.3,51.2L256,297.2l28.5-28.5v-10.2C299.1,260.1,314.5,263.2,328.8,267.6z"
                                        id="XMLID_3302_" />
                                    <path class="st8"
                                        d="M382,455H130v18.5c37,21.4,80.3,33.6,126,33.6s89-12.2,126-33.6V455z"
                                        id="XMLID_361_" />
                                    <rect class="st8" height="52.5" id="XMLID_3295_" width="251.1" x="130.4"
                                        y="402.1" />
                                    <rect class="st8" height="52.5" id="XMLID_3293_" width="251.1" x="130.4"
                                        y="349.7" />
                                    <path class="st7"
                                        d="M130,473.5c10,5.6,20.4,11.5,30.9,14.5h76.3c18.7,0,33.8-14,33.8-33H130V473.5z"
                                        id="XMLID_358_" />
                                    <path class="st7" d="M237.2,436H130.4v-33.8H271v0C271,420.8,255.9,436,237.2,436z"
                                        id="XMLID_3875_" />
                                    <path class="st7"
                                        d="M237.2,383.5H130.4v-33.8H271v0C271,368.4,255.9,383.5,237.2,383.5z"
                                        id="XMLID_3876_" />
                                    <path class="st9"
                                        d="M291.6,349.7h-71.3v0c0,14.5,11.7,26.2,26.2,26.2h18.8C279.9,375.9,291.6,364.2,291.6,349.7   L291.6,349.7z"
                                        id="XMLID_3292_" />
                                    <path class="st9"
                                        d="M291.6,454.6h-71.3v0c0,14.5,11.7,26.2,26.2,26.2h18.8C279.9,480.9,291.6,469.1,291.6,454.6   L291.6,454.6z"
                                        id="XMLID_3296_" />
                                    <path class="st9"
                                        d="M291.6,402.1h-71.3v0c0,14.5,11.7,26.2,26.2,26.2h18.8C279.9,428.4,291.6,416.6,291.6,402.1   L291.6,402.1z"
                                        id="XMLID_3294_" />
                                </g>
                            </svg>
                        </div>
                        <div class="mt-6 mb-4 text-base font-bold text-gray-800">Daftar Kurir</div>
                    </div>
                </div>
                {{-- stock opname --}}
                <div class="h-full col-span-2 md:col-span-1">
                    <div class="flex flex-col items-center justify-center">
                        <div>
                            <svg height="80" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1"
                                viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <style type="text/css">
                                    .st0 {
                                        fill: #75B600;
                                    }

                                    .st1 {
                                        opacity: 0.5;
                                        fill: #FFFFFF;
                                    }

                                    .st2 {
                                        fill: #F99900;
                                    }

                                    .st3 {
                                        fill: #AD5114;
                                    }

                                    .st4 {
                                        fill: #C6750A;
                                    }

                                    .st5 {
                                        fill: #663210;
                                    }

                                    .st6 {
                                        fill: #FBD000;
                                    }

                                    .st7 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <g>
                                    <circle class="st0" cx="64" cy="64" r="64" />
                                    <path class="st1"
                                        d="M20,88c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4c2.2,0,4,1.8,4,4C24,86.2,22.2,88,20,88z M20,81.9   c-1.2,0-2.1,1-2.1,2.1c0,1.2,1,2.1,2.1,2.1c1.2,0,2.1-1,2.1-2.1C22.1,82.8,21.2,81.9,20,81.9z" />
                                    <path class="st1"
                                        d="M106,42c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4c2.2,0,4,1.8,4,4C110,40.2,108.2,42,106,42z M106,35.9   c-1.2,0-2.1,1-2.1,2.1c0,1.2,1,2.1,2.1,2.1c1.2,0,2.1-1,2.1-2.1C108.1,36.8,107.2,35.9,106,35.9z" />
                                    <path class="st1"
                                        d="M115,65.1c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4c2.2,0,4,1.8,4,4C119,63.3,117.2,65.1,115,65.1z M115,58.9   c-1.2,0-2.1,1-2.1,2.1c0,1.2,1,2.1,2.1,2.1c1.2,0,2.1-1,2.1-2.1C117.1,59.9,116.2,58.9,115,58.9z" />
                                    <path class="st1"
                                        d="M113.9,84.5c0-0.4-0.4-0.8-1-0.9l-1.9-0.3c-0.5-0.1-1.1-0.6-1.1-1.1l-0.3-1.9c-0.1-0.5-0.5-1-0.9-1   c-0.4,0-0.8,0.4-0.9,1l-0.3,1.9c-0.1,0.5-0.6,1.1-1.1,1.1l-1.9,0.3c-0.5,0.1-1,0.5-1,0.9s0.4,0.8,1,0.9l1.9,0.3   c0.5,0.1,1.1,0.6,1.1,1.1l0.3,1.9c0.1,0.5,0.5,1,0.9,1c0.4,0,0.8-0.4,0.9-1l0.3-2.1c0.1-0.5,0.6-1,1.1-1.1l1.8-0.1   C113.4,85.2,113.9,84.9,113.9,84.5z" />
                                    <path class="st1"
                                        d="M19.3,62.2c0-0.4-0.4-0.8-1-0.9l-1.9-0.3c-0.5-0.1-1.1-0.6-1.1-1.1L15,58.1c-0.1-0.5-0.5-1-0.9-1   c-0.4,0-0.8,0.4-0.9,1L13,60c-0.1,0.5-0.6,1.1-1.1,1.1L10,61.4c-0.5,0.1-1,0.5-1,0.9c0,0.4,0.4,0.8,1,0.9l1.9,0.3   c0.5,0.1,1.1,0.6,1.1,1.1l0.3,1.9c0.1,0.5,0.5,1,0.9,1c0.4,0,0.8-0.4,0.9-1l0.3-2.1c0.1-0.5,0.6-1,1.1-1.1l1.8-0.1   C18.8,63,19.3,62.6,19.3,62.2z" />
                                    <rect class="st2" height="83" width="36.2" x="37.4" y="20.7" />
                                    <rect class="st2" height="93" width="46.2" x="32.4" y="15.7" />
                                    <polygon class="st3" points="97.4,108.7 78.6,108.7 78.6,16 97.4,15.7  " />
                                    <rect class="st4" height="10" width="36" x="37" y="63" />
                                    <path class="st5"
                                        d="M72.6,43H38.4c-0.6,0-1-0.4-1-1s0.4-1,1-1h34.2c0.6,0,1,0.4,1,1S73.1,43,72.6,43z" />
                                    <path class="st5"
                                        d="M72.6,64H37c-0.6,0-1-0.4-1-1s0.4-1,1-1h35.6c0.6,0,1,0.4,1,1S73.1,64,72.6,64z" />
                                    <path class="st5"
                                        d="M73,105H37c-0.6,0-1-0.4-1-1V22c0-0.6,0.4-1,1-1h36c0.6,0,1,0.4,1,1v82C74,104.6,73.6,105,73,105z M38,103h34   V23H38V103z" />
                                    <path class="st5"
                                        d="M78,110H32c-0.6,0-1-0.4-1-1V16c0-0.6,0.4-1,1-1h46c0.6,0,1,0.4,1,1v93C79,109.6,78.6,110,78,110z M33,108h44   V17H33V108z" />
                                    <path class="st5"
                                        d="M72.6,85H38.4c-0.6,0-1-0.4-1-1s0.4-1,1-1h34.2c0.6,0,1,0.4,1,1S73.1,85,72.6,85z" />
                                    <polygon class="st6" points="64.2,63 28,63 28.6,42 64.2,42  " />
                                    <line class="st7" x1="65.6" x2="73" y1="51" y2="51" />
                                    <path class="st5"
                                        d="M73,52h-7.4c-0.6,0-1-0.4-1-1s0.4-1,1-1H73c0.6,0,1,0.4,1,1S73.6,52,73,52z" />
                                    <polygon class="st3" points="44.4,112.7 37.4,112.7 38,108.7 44.4,108.7  " />
                                    <rect class="st3" height="4" width="7" x="66.6" y="108.7" />
                                    <rect class="st5" height="8.1" width="8" x="65.1" y="42" />
                                    <rect class="st3" height="4" width="7" x="56.6" y="108.7" />
                                    <polygon class="st3" points="94.4,112.7 88,112.7 87.4,108.7 94.4,108.7  " />
                                    <path class="st5"
                                        d="M97,110H78c-0.6,0-1-0.4-1-1V16c0-0.6,0.4-1,1-1h19c0.6,0,1,0.4,1,1v93C98,109.6,97.6,110,97,110z M79,108h17   V17H79V108z" />
                                    <path class="st5"
                                        d="M65,64H28c-0.6,0-1-0.4-1-1V42c0-0.6,0.4-1,1-1h37c0.6,0,1,0.4,1,1v21C66,63.6,65.6,64,65,64z M29,62h35V43H29   V62z" />
                                    <path class="st5"
                                        d="M44,114h-7c-0.6,0-1-0.4-1-1v-4c0-0.6,0.4-1,1-1h7c0.6,0,1,0.4,1,1v4C45,113.6,44.6,114,44,114z M38,112h5v-2   h-5V112z" />
                                    <path class="st5"
                                        d="M74,114h-7c-0.6,0-1-0.4-1-1v-4c0-0.6,0.4-1,1-1h7c0.6,0,1,0.4,1,1v4C75,113.6,74.6,114,74,114z M68,112h5v-2   h-5V112z" />
                                    <path class="st5"
                                        d="M63,114h-7c-0.6,0-1-0.4-1-1v-4c0-0.6,0.4-1,1-1h7c0.6,0,1,0.4,1,1v4C64,113.6,63.6,114,63,114z M57,112h5v-2   h-5V112z" />
                                    <path class="st5"
                                        d="M95,114h-7c-0.6,0-1-0.4-1-1v-4c0-0.6,0.4-1,1-1h7c0.6,0,1,0.4,1,1v4C96,113.6,95.6,114,95,114z M89,112h5v-2   h-5V112z" />
                                    <ellipse class="st5" cx="55.5" cy="26.4" rx="1.5"
                                        ry="1.4" />
                                    <circle class="st5" cx="55.5" cy="68.5" r="1.5" />
                                    <circle class="st5" cx="55.5" cy="88.5" r="1.5" />
                                    <circle class="st5" cx="46.5" cy="46.5" r="1.5" />
                                    <path class="st5"
                                        d="M99,114H28.3c-0.6,0-1-0.4-1-1s0.4-1,1-1H99c0.6,0,1,0.4,1,1S99.6,114,99,114z" />
                                    <path class="st1"
                                        d="M61,60c-0.6,0-1-0.4-1-1V47h-9c-0.6,0-1-0.4-1-1s0.4-1,1-1h10c0.6,0,1,0.4,1,1v13C62,59.6,61.6,60,61,60z" />
                                    <path class="st1"
                                        d="M41.5,47h-9.7c-0.6,0-1-0.4-1-1s0.4-1,1-1h9.7c0.6,0,1,0.4,1,1S42.1,47,41.5,47z" />
                                    <path class="st1"
                                        d="M69,38.4c-0.6,0-1-0.4-1-1V24.8c0-0.6,0.4-1,1-1s1,0.4,1,1v12.6C70,37.9,69.6,38.4,69,38.4z" />
                                    <path class="st1"
                                        d="M69,80.1c-0.6,0-1-0.4-1-1v-3.4c0-0.6,0.4-1,1-1s1,0.4,1,1v3.4C70,79.7,69.6,80.1,69,80.1z" />
                                    <path class="st1"
                                        d="M69,100.5c-0.6,0-1-0.4-1-1v-3.8c0-0.6,0.4-1,1-1s1,0.4,1,1v3.8C70,100.1,69.6,100.5,69,100.5z" />
                                    <path class="st1"
                                        d="M69,93.4c-0.6,0-1-0.4-1-1V87c0-0.6,0.4-1,1-1s1,0.4,1,1v5.4C70,92.9,69.6,93.4,69,93.4z" />
                                    <path class="st1"
                                        d="M72.6,20h-5.1c-0.6,0-1-0.4-1-1s0.4-1,1-1h5.1c0.6,0,1,0.4,1,1S73.1,20,72.6,20z" />
                                    <path class="st1"
                                        d="M63.7,20H37.6c-0.6,0-1-0.4-1-1s0.4-1,1-1h26.1c0.6,0,1,0.4,1,1S64.3,20,63.7,20z" />
                                </g>
                            </svg>
                        </div>
                        <div class="mt-6 mb-4 text-base font-bold text-gray-800">Stock Opname</div>
                    </div>
                </div>
                {{-- print thermal --}}
                <div class="h-full col-span-2 md:col-span-1">
                    <div class="flex flex-col items-center justify-center">
                        <div>
                            <svg height="80" enable-background="new 0 0 91 91" height="91px" id="Layer_1"
                                version="1.1" viewBox="0 0 91 91" width="91px" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M18.79,73.279H4.344V46.186l81.667,0.001v19.427c0,4.217-3.452,7.666-7.671,7.666h-6.801"
                                                    fill="#9ABFDA" />
                                                <path
                                                    d="M78.34,75.792h-6.801c-1.389,0-2.514-1.125-2.514-2.513s1.125-2.513,2.514-2.513h6.801      c2.844,0,5.158-2.312,5.158-5.153V48.699L6.856,48.697v22.069H18.79c1.388,0,2.513,1.125,2.513,2.513s-1.125,2.513-2.513,2.513      H4.344c-1.388,0-2.513-1.125-2.513-2.513V46.186c0-0.667,0.265-1.307,0.736-1.777s1.11-0.736,1.776-0.736l81.667,0.002      c1.388,0,2.513,1.125,2.513,2.513v19.427C88.523,71.226,83.955,75.792,78.34,75.792z"
                                                    fill="#454B53" />
                                            </g>
                                            <g>
                                                <rect fill="#E0F1F8" height="36.893" width="52.773" x="18.793"
                                                    y="9.293" />
                                                <path
                                                    d="M71.566,48.697H18.793c-1.388,0-2.513-1.125-2.513-2.512V9.293c0-1.387,1.125-2.512,2.513-2.512h52.773      c1.388,0,2.513,1.125,2.513,2.512v36.893C74.079,47.572,72.954,48.697,71.566,48.697z M21.306,43.672h47.748V11.807H21.306      V43.672z"
                                                    fill="#454B53" />
                                            </g>
                                            <path
                                                d="M39.59,57.461h-4.964c-1.388,0-2.513-1.125-2.513-2.513s1.125-2.513,2.513-2.513h4.964     c1.388,0,2.513,1.125,2.513,2.513S40.978,57.461,39.59,57.461z"
                                                fill="#454B53" />
                                            <path
                                                d="M55.729,57.461h-4.963c-1.388,0-2.513-1.125-2.513-2.513s1.125-2.513,2.513-2.513h4.963     c1.389,0,2.514,1.125,2.514,2.513S57.117,57.461,55.729,57.461z"
                                                fill="#454B53" />
                                            <g>
                                                <rect fill="#FFFFFF" height="16.456" width="52.773" x="18.793"
                                                    y="63.725" />
                                                <path
                                                    d="M71.566,82.693H18.793c-1.388,0-2.513-1.125-2.513-2.513V63.725c0-1.389,1.125-2.514,2.513-2.514h52.773      c1.388,0,2.513,1.125,2.513,2.514v16.456C74.079,81.568,72.954,82.693,71.566,82.693z M21.306,77.668h47.748V66.236H21.306      V77.668z"
                                                    fill="#454B53" />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="mt-6 mb-1 text-base font-bold text-gray-800">Print Thermal</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Kategori Toko --}}
    <section class="value py-24" style="background-color: #fafcff">
        <div class="max-w-screen-2xl px-4 lg:px-24 mx-auto content" style="font-family: 'Poppins', sans-serif">
            <div class="text-center section-heading mb-20">
                <div class="mb-3 text-4xl font-bold leading-relaxed text-gray-800 lg:text-6xl">Kategori Toko</div>
                <div class="text-lg font-light text-gray-800">Apapun jenis tokomu dapat bergabung bersama GAS</div>
            </div>

            <div class="grid items-center justify-center h-full md:grid-cols-12 gap-4">
                <div class="h-full md:col-span-6 lg:col-span-3">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <img class="rounded-t-lg"
                                src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3270&q=80"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Toko Kelontong
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, placeat!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="h-full md:col-span-6 lg:col-span-3">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <img class="rounded-t-lg"
                                src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3270&q=80"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Toko Kelontong
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, placeat!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="h-full md:col-span-6 lg:col-span-3">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <img class="rounded-t-lg"
                                src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3270&q=80"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Toko Kelontong
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, placeat!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="h-full md:col-span-6 lg:col-span-3">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <img class="rounded-t-lg"
                                src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3270&q=80"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Toko Kelontong
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, placeat!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Fitur Maps --}}
    <section class="value bg-yellow-500 bg-opacity-5 py-24">
        <div class="max-w-screen-2xl px-4 lg:px-24 mx-auto content" style="font-family: 'Poppins', sans-serif">
            <div class="text-center section-heading mb-20">
                <div class="mb-3 text-4xl font-bold leading-relaxed text-black lg:text-6xl">Fitur Maps</div>
                <div class="text-lg font-medium text-gray-400">Aplikasi GAS akan membantumu dalam memantau stok produk
                    tokomu dan menjangkau customer yang lebih luas</div>
            </div>

            <div class="flex items-center justify-center h-full">
                <img class="rounded-3xl w-3/4"
                    src="https://developers.google.com/static/maps/images/landing/hero_directions_api_720.png"
                    alt="" />
            </div>
        </div>
    </section>
    {{-- Daftar Sekarang --}}
    <section class="h-full w-full px-8 py-20 bg-white">
        <div class="flex lg:flex-row flex-col items-center mb-10" style="font-family: 'Poppins', sans-serif">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                <img src="{{ asset('assets/asset2.png') }}" width="500" alt="" />
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                <h2 class="md:text-5xl text-3xl font-semibold mb-4 tracking-tight">
                    Daftarkan Tokomu Segera
                </h2>
                <h2 class="md:text-5xl text-3xl font-semibold mb-10 tracking-tight">
                    dan Download Sekarang!
                </h2>
                <a href=""
                    class="bg-yellow-400 hover:bg-opacity-50 px-10 py-4 text-base text-gray-800 font-semibold rounded-xl cursor-pointer focus:outline-none tracking-wide">
                    Unduh Sekarang
                </a>
            </div>
        </div>
    </section>
    {{-- Tentang Kami --}}
    <section class="h-full w-full border-box bg-white">
        <div class="mb-8" style="font-family: 'Poppins', sans-serif">
            <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
                <!-- Title Text -->
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-4xl font-semibold title-font mb-2.5 text-gray-800">
                        Tentang Kami
                    </h1>
                    <h2
                        class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-gray-800 mb-4">
                        GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas.
                        <br class="lg:block hidden" />
                        Melalui gerakan #AyoBelanjaTokoTetangga
                        <br class="lg:block hidden" />
                        GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.
                    </h2>

                    <div class="flex gap-4 justify-center">
                        <a href="https://www.facebook.com/aplikasigas" target="_blank">
                            <svg height="40"
                                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <path
                                        d="M512,256c0,-141.385 -114.615,-256 -256,-256c-141.385,0 -256,114.615 -256,256c0,127.777 93.616,233.685 216,252.89l0,-178.89l-65,0l0,-74l65,0l0,-56.4c0,-64.16 38.219,-99.6 96.695,-99.6c28.009,0 57.305,5 57.305,5l0,63l-32.281,0c-31.801,0 -41.719,19.733 -41.719,39.978l0,48.022l71,0l-11.35,74l-59.65,0l0,178.89c122.385,-19.205 216,-125.113 216,-252.89Z"
                                        style="fill:#1877f2;fill-rule:nonzero;" />
                                    <path
                                        d="M355.65,330l11.35,-74l-71,0l0,-48.022c0,-20.245 9.917,-39.978 41.719,-39.978l32.281,0l0,-63c0,0 -29.297,-5 -57.305,-5c-58.476,0 -96.695,35.44 -96.695,99.6l0,56.4l-65,0l0,74l65,0l0,178.89c13.033,2.045 26.392,3.11 40,3.11c13.608,0 26.966,-1.065 40,-3.11l0,-178.89l59.65,0Z"
                                        style="fill:#fff;fill-rule:nonzero;" />
                                </g>
                            </svg>
                        </a>

                        <a href="https://www.instagram.com/aplikasigas/?hl=id" target="_blank">
                            <svg id="Layer_1" style="enable-background:new 0 0 1000 1000;" version="1.1"
                                height="40" viewBox="0 0 1000 1000" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <style type="text/css">
                                    .st0 {
                                        fill: url(#SVGID_1_);
                                    }

                                    .st1 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="146.4465"
                                    x2="853.5535" y1="853.5535" y2="146.4465">
                                    <stop offset="0" style="stop-color:#FFD521" />
                                    <stop offset="5.510481e-02" style="stop-color:#FFD020" />
                                    <stop offset="0.1241" style="stop-color:#FEC01E" />
                                    <stop offset="0.2004" style="stop-color:#FCA71B" />
                                    <stop offset="0.2821" style="stop-color:#FA8316" />
                                    <stop offset="0.3681" style="stop-color:#F85510" />
                                    <stop offset="0.4563" style="stop-color:#F51E09" />
                                    <stop offset="0.5" style="stop-color:#F30005" />
                                    <stop offset="0.5035" style="stop-color:#F20007" />
                                    <stop offset="0.5966" style="stop-color:#E1003B" />
                                    <stop offset="0.6879" style="stop-color:#D30067" />
                                    <stop offset="0.7757" style="stop-color:#C70088" />
                                    <stop offset="0.8589" style="stop-color:#BF00A0" />
                                    <stop offset="0.9357" style="stop-color:#BB00AF" />
                                    <stop offset="1" style="stop-color:#B900B4" />
                                </linearGradient>
                                <path class="st0"
                                    d="M500,1000L500,1000C223.9,1000,0,776.1,0,500v0C0,223.9,223.9,0,500,0h0c276.1,0,500,223.9,500,500v0  C1000,776.1,776.1,1000,500,1000z" />
                                <g>
                                    <path class="st1"
                                        d="M500,220.2c91.1,0,101.9,0.3,137.9,2c33.3,1.5,51.4,7.1,63.4,11.8c15.9,6.2,27.3,13.6,39.2,25.5   c11.9,11.9,19.3,23.3,25.5,39.2c4.7,12,10.2,30.1,11.8,63.4c1.6,36,2,46.8,2,137.9s-0.3,101.9-2,137.9   c-1.5,33.3-7.1,51.4-11.8,63.4c-6.2,15.9-13.6,27.3-25.5,39.2c-11.9,11.9-23.3,19.3-39.2,25.5c-12,4.7-30.1,10.2-63.4,11.8   c-36,1.6-46.8,2-137.9,2s-101.9-0.3-137.9-2c-33.3-1.5-51.4-7.1-63.4-11.8c-15.9-6.2-27.3-13.6-39.2-25.5   c-11.9-11.9-19.3-23.3-25.5-39.2c-4.7-12-10.2-30.1-11.8-63.4c-1.6-36-2-46.8-2-137.9s0.3-101.9,2-137.9   c1.5-33.3,7.1-51.4,11.8-63.4c6.2-15.9,13.6-27.3,25.5-39.2c11.9-11.9,23.3-19.3,39.2-25.5c12-4.7,30.1-10.2,63.4-11.8   C398.1,220.5,408.9,220.2,500,220.2 M500,158.7c-92.7,0-104.3,0.4-140.7,2.1c-36.3,1.7-61.1,7.4-82.9,15.9   C254,185.3,234.9,197,216,216c-19,19-30.6,38-39.4,60.5c-8.4,21.7-14.2,46.5-15.9,82.9c-1.7,36.4-2.1,48-2.1,140.7   c0,92.7,0.4,104.3,2.1,140.7c1.7,36.3,7.4,61.1,15.9,82.9C185.3,746,197,765.1,216,784c19,19,38,30.6,60.5,39.4   c21.7,8.4,46.5,14.2,82.9,15.9c36.4,1.7,48,2.1,140.7,2.1s104.3-0.4,140.7-2.1c36.3-1.7,61.1-7.4,82.9-15.9   C746,814.7,765.1,803,784,784c19-19,30.6-38,39.4-60.5c8.4-21.7,14.2-46.5,15.9-82.9c1.7-36.4,2.1-48,2.1-140.7   s-0.4-104.3-2.1-140.7c-1.7-36.3-7.4-61.1-15.9-82.9C814.7,254,803,234.9,784,216c-19-19-38-30.6-60.5-39.4   c-21.7-8.4-46.5-14.2-82.9-15.9C604.3,159.1,592.7,158.7,500,158.7L500,158.7z" />
                                    <path class="st1"
                                        d="M500,324.7c-96.8,0-175.3,78.5-175.3,175.3S403.2,675.3,500,675.3S675.3,596.8,675.3,500   S596.8,324.7,500,324.7z M500,613.8c-62.8,0-113.8-50.9-113.8-113.8S437.2,386.2,500,386.2c62.8,0,113.8,50.9,113.8,113.8   S562.8,613.8,500,613.8z" />
                                    <circle class="st1" cx="682.2" cy="317.8" r="41" />
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>

            <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
                <!-- Title Text -->
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-4xl font-semibold title-font mb-2.5 text-gray-800">
                        Temukan Karir Impianmu
                    </h1>
                    <h2
                        class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-gray-800 mb-4">
                        Mari bergabung bersama kami.
                        <br class="lg:block hidden" />
                        Jadikan bagian dari kami dan kembangkan bakat, ide kreatifmu dalam GAS.
                    </h2>
                </div>

                <div class="grid items-center justify-center h-full md:grid-cols-12 gap-4">
                    <div class="h-full md:col-span-12 lg:col-span-6">
                        <a href="#"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="https://images.unsplash.com/photo-1610276198568-eb6d0ff53e48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3280&q=80"
                                alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Marketing
                                    Comunication</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ayo nikmati beragam fitur yang
                                    dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online
                                    bersama.</p>
                            </div>
                        </a>
                    </div>
                    <div class="h-full md:col-span-12 lg:col-span-6">
                        <a href="#"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="https://images.unsplash.com/photo-1610276198568-eb6d0ff53e48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3280&q=80"
                                alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Marketing
                                    Comunication</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ayo nikmati beragam fitur yang
                                    dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online
                                    bersama.</p>
                            </div>
                        </a>
                    </div>
                    <div class="h-full md:col-span-12 lg:col-span-6">
                        <a href="#"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="https://images.unsplash.com/photo-1610276198568-eb6d0ff53e48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3280&q=80"
                                alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Marketing
                                    Comunication</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ayo nikmati beragam fitur yang
                                    dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online
                                    bersama.</p>
                            </div>
                        </a>
                    </div>
                    <div class="h-full md:col-span-12 lg:col-span-6">
                        <a href="#"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="https://images.unsplash.com/photo-1610276198568-eb6d0ff53e48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3280&q=80"
                                alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Marketing
                                    Comunication</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ayo nikmati beragam fitur yang
                                    dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online
                                    bersama.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('after-style')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-3-3 .btn-no-fill,
        .header-3-3 .text-gray-1 {
            color: #8b9caf;
            transition: 0.3s;
        }

        .header-3-3 .btn-no-fill:hover,
        .header-3-3 .text-black-1 {
            color: #243142;
        }

        .header-3-3 .text-gray-2 {
            color: #aaa6a6;
        }

        .header-3-3 .btn-outline:hover {
            border: 1px solid #6da4f9;
            color: #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .card {
            box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
            transition: 0.4s;
            top: 0px;
            left: 0px;
            position: relative;
        }

        .header-3-3 .card:hover {
            box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
            top: -3px;
            left: -3px;
            position: relative;
            transition: 0.4s;
        }

        .header-3-3 .navigation .active {
            position: relative;
            padding-bottom: 3px;
            padding-top: 3px;
            transition: 0.3s;
        }

        .header-3-3 .navigation .active:before {
            content: "";
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            bottom: 0;
            height: 0px;
            width: 80%;
            /* or 100px */
            border-bottom: 2px solid #4e91f9;
        }

        .header-3-3 .btn-fill {
            border: 1px solid #4e91f9;
            background-color: #4e91f9;
            transition: 0.3s;
        }

        .header-3-3 .btn-fill:hover {
            background-color: #6da4f9;
            border: 1px solid #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .btn-outline {
            border: 1px solid #a6b1be;
            color: #a6b1be;
            transition: 0.3s;
        }

        .header-3-3 .btn-outline:hover div path {
            fill: #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .btn-outline:hover div rect {
            stroke: #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .navigation a:hover {
            color: #243142 !important;
            font-weight: 500;
            transition: 0.2s;
        }

        .header-3-3 #form {
            width: 100%;
        }

        .header-3-3 #form input[type="text"] {
            width: 100%;
            background-color: #eef4fd;
            box-sizing: border-box;
            font-size: 14px;
            padding: 0.375rem 0.5rem;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .header-3-3 .search-icon:hover path {
            fill: #243142;
        }

        @media (max-width: 1023px) {
            .header-3-3 #form input[type="text"] {
                width: 100%;
            }
        }

        @media (min-width: 1024px) {
            .header-3-3 .center-search {
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .header-3-3 #form {
                width: 320px;
            }
        }
    </style>
@endpush
