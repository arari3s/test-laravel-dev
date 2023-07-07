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
                        class="text-sm text-black-1 font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative active">Beranda</a>
                    <a href="#" class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Tentang
                        GAS</a>
                    <a href="#" class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Fitur</a>
                    <a href="#" class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Daftar</a>
                    <a href="#" class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Karir</a>
                    <div class="flex items-center justify-end w-full lg:hidden mt-3">
                        <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                            Sign In
                        </button>
                        <button class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
                            Register
                        </button>
                    </div>

                    <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </nav>

                <div class="hidden items-center justify-end lg:flex">
                    <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                        Sign In
                    </button>
                    <button class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                        Register
                    </button>
                </div>
            </header>

            <div class="lg:px-24 md:px-16 sm:px-8 px-8">
                <hr style="border-color: #f3f8ff" />
            </div>

            <!-- Hero -->
            <div>
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1 class="text-black-1 title-font sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold"
                            style="line-height: 1.25">
                            Bergabung<br class="lg:block hidden" /> dengan
                            <span style="color: #FFCA04"> GAS</span>
                        </h1>
                        <p class="text-base text-gray-1 font-light leading-6 tracking-wide mb-12 lg:mb-20">
                            Aplikasi Gas akan membantumu dalam memantau stok
                            <br class="sm:block hidden" />
                            produk tokomu dan menjangkau customer yang lebih luas
                        </p>

                        <div class="flex items-center mx-auto lg:mx-0 justify-center lg:space-x-4 space-x-2">
                            <a href="https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en" target="_blank"
                                class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full focus:outline-none">
                                Unduh Sekarang
                            </a>

                            <a href="https://www.facebook.com/aplikasigas" target="_blank">
                                <?xml version="1.0" ?>
                                <!DOCTYPE svg
                                    PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg
                                    height="55"
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
                                <?xml version="1.0" ?>
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
                        <img class="absolute bottom-0 lg:block hidden lg:right-44 md:right-16 sm:right-8 right-8"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-2.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Popular Fitur --}}
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
