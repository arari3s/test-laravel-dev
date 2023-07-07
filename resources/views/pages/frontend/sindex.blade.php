<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GetShayna by BuildWith Angga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body>
    <section class="h-full w-full border-box transition-all duration-500 linear relative"
        style="background-color: #fafcff">
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
        <!-- Navbar -->
        <div class="header-3-3" style="font-family: 'Poppins', sans-serif">
            <header x-data="{ open: false }"
                class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8">
                <div class="flex items-center justify-between">
                    <a href="#">
                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png"
                            alt="" />
                    </a>
                    <div class="flex justify-end items-center lg:hidden cursor-pointer">
                        <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                        class="text-sm text-black-1 font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative active">Home</a>
                    <a href="#"
                        class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Feature</a>
                    <a href="#"
                        class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Pricing</a>
                    <a href="#" class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Blog</a>
                    <div class="mx-0 lg:mx-5 my-4 lg:my-0" x-data="{ search: false }">
                        <svg @click="search = !search" class="hidden cursor-pointer search-icon"
                            :class="{ 'flex': !search, 'hidden': search }" width="15" height="15"
                            viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                                fill="#8B9CAF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                                fill="#8B9CAF" />
                        </svg>
                        <form id="form" :class="{ 'flex lg:absolute center-search': search, 'hidden': !search }"
                            class="hidden items-center rounded-full focus:outline-none px-3"
                            style="background-color: #eef4fd">
                            <input type="text" class="rounded-full focus:outline-none" placeholder="Search" />
                            <button type="button">
                                <svg @click="search = !search" style="width: 20px; height: 20px"
                                    class="focus:outline-none cursor-pointer" fill="none" stroke="#243142"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="flex items-center justify-end w-full lg:hidden mt-3">
                        <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                            Sign In
                        </button>
                        <button
                            class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
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
                            The New Way<br class="lg:block hidden" />
                            <span style="color: #4e91f9"> Learn Skills</span> From <br class="lg:block hidden" />
                            Our Best Mentor
                        </h1>
                        <p class="text-base text-gray-1 font-light leading-6 tracking-wide mb-12 lg:mb-20">
                            Hard to find a good mentor according to your wishes?<br class="sm:block hidden" /> Don't
                            worry because we
                            are here to help you
                        </p>
                        <div
                            class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                            <button
                                class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
                                Get Started
                            </button>
                            <button
                                class="btn-outline font-normal text-base py-4 px-6 rounded-full focus:outline-none bg-transparent">
                                <div class="flex items-center">
                                    <svg class="mr-2.5" width="26" height="26" viewBox="0 0 26 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.9295 13L11.6668 10.158V15.842L15.9295 13ZM17.9175 13.2773L10.8515 17.988C10.8013 18.0214 10.743 18.0406 10.6828 18.0434C10.6225 18.0463 10.5627 18.0328 10.5095 18.0044C10.4563 17.9759 10.4119 17.9336 10.3809 17.8818C10.3499 17.8301 10.3335 17.771 10.3335 17.7107V8.28933C10.3335 8.22904 10.3499 8.16988 10.3809 8.11816C10.4119 8.06644 10.4563 8.0241 10.5095 7.99564C10.5627 7.96718 10.6225 7.95367 10.6828 7.95655C10.743 7.95943 10.8013 7.9786 10.8515 8.012L17.9175 12.7227C17.9631 12.7531 18.0006 12.7943 18.0265 12.8427C18.0524 12.8911 18.0659 12.9451 18.0659 13C18.0659 13.0549 18.0524 13.1089 18.0265 13.1573C18.0006 13.2057 17.9631 13.2469 17.9175 13.2773Z"
                                            fill="#A6B1BE" />
                                        <rect x="0.5" y="0.5" width="25" height="25"
                                            rx="12.5" stroke="#A6B1BE" />
                                    </svg>
                                    Watch the video
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="absolute bottom-0 lg:block hidden lg:right-24 md:right-16 sm:right-8 right-8"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-2.png"
                            alt="" />
                        <div class="flex items-end lg:pl-16 pl-0 z-1">
                            <div class="container mx-auto flex flex-wrap items-center">
                                <div
                                    class="card rounded-xl p-5 bg-white flex flex-col md:ml-auto w-full mt-10 md:mt-0 space-y-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-3.png"
                                                alt="" />
                                        </div>
                                        <div class="text-left">
                                            <p class="font-semibold text-base mb-1">Felix Potah</p>
                                            <p class="font-light text-xs text-gray-2">Pro Mentor</p>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 text-left">
                                        <div>
                                            <p class="font-medium text-base mb-0.5" style="color: #1b8171">
                                                64,100
                                            </p>
                                            <p class="font-light text-xs text-gray-2">Followers</p>
                                        </div>
                                        <div>
                                            <p class="font-medium text-base mb-0.5" style="color: #ff7468">
                                                106
                                            </p>
                                            <p class="font-light text-xs text-gray-2">Reviews</p>
                                        </div>
                                    </div>
                                    <button
                                        class="btn-fill font-semibold text-white text-base py-3 px-16 mb-0.5 rounded-xl">
                                        Hire Me
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="value bg-softBlue py-16">
        <style scoped>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

            body {
                font-family: 'Inter', sans-serif;
            }

            :root {
                --black-1: #080e09;
                --black-2: #232323;
                --black-3: #101419;
                --gray-3: #e2e3e5;
                --gray-4: #c9c9c9;
                --gray-5: #adb2b8;
                --gray-6: #9c9c9c;
                --gray-7: #879fb0;
                --blue-primary: #0f52ba;
                --blue-secondary: #478fff;
                --blue-tertiary: #739ad5;
                --softBlue: #F9FCFC;
                --yellow: #ff9900;
            }

            .border-blue-primary {
                border-color: var(--blue-primary);
            }

            .text-blackText-2 {
                color: var(--black-2);
            }

            .text-blue-primary {
                color: var(--blue-primary);
            }

            .text-gray-6 {
                color: var(--gray-6);
            }

            .text-gray-7 {
                color: var(--gray-7);
            }

            .shadow-sblue {
                box-shadow: 0px 24px 32px rgba(15, 82, 186, 0.4);
            }

            .shadow-cardShadow {
                box-shadow: none;
            }

            .cardShadow:hover {
                box-shadow: 12px 24px 80px rgba(15, 82, 186, 0.06);
            }

            .rounded-28 {
                border-radius: 28px;
            }

            .z-forBackground {
                z-index: -99;
            }

            .text-7 {
                font-size: 28px;
            }

            .bg-softBlue {
                background-color: var(--softBlue);
            }

            .icon-placeholder {
                height: 200px;
                width: 274px;
            }

            @media (min-width: 768px) {
                .icon-placeholder {
                    height: 274px;
                    width: 303px;
                }
            }

            @media (min-width: 1024px) {
                .icon-placeholder {
                    width: 250px;
                }
            }
        </style>
        <div class="max-w-screen-2xl px-4 lg:px-24 mx-auto content">
            <div class="text-center section-heading mb-16">
                <div class="mb-3 text-4xl font-bold leading-relaxed text-blackText-2 lg:text-6xl"> Why choose us </div>
                <div class="text-lg font-medium text-gray-7"> House is comitted to helping its clients to reach their
                    goals </div>
            </div>
            <div class="grid justify-center grid-cols-6 gap-10 text-left section-element lg:grid-cols-12 md:gap-2">
                <!-- TAX ADVANTAGE -->
                <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                    <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                        <div
                            class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes-color.svg"
                                alt="house" class="color" width="76" />
                        </div>
                        <div> <img class="non-color" width="76"
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes.svg"
                                alt="house" /> </div>
                        <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> Tax Advantage </div>
                        <div class="text-base font-normal leading-7 text-gray-7"> Tax advantage which applies to
                            certain accounts or investments. </div>
                    </div>
                </div> <!-- PROPERTY INSURANCE -->
                <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                    <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                        <div
                            class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user-color.svg"
                                alt="house" class="color" />
                        </div>
                        <div> <img class="non-color"
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user.svg"
                                alt="house" /> </div>
                        <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> Property Insurance </div>
                        <div class="text-base font-normal leading-7 text-gray-7"> A series of policies that offer
                            either property protection of liability coverage. </div>
                    </div>
                </div> <!-- LOWEST COMMISSION -->
                <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                    <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                        <div
                            class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount-color.svg"
                                alt="house" class="color" />
                        </div>
                        <div> <img class="non-color"
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount.svg"
                                alt="house" /> </div>
                        <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> Lowest Commission </div>
                        <div class="text-base font-normal leading-7 text-gray-7"> No longer have to negotiate
                            commissions and haggle with other agents. </div>
                    </div>
                </div> <!-- HOUSE NOW-->
                <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                    <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                        <div
                            class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar-color.svg"
                                alt="house" class="color" width="62" />
                        </div>
                        <div> <img class="non-color" width="62"
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar.svg"
                                alt="house" /> </div>
                        <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> House Now </div>
                        <div class="text-base font-normal leading-7 text-gray-7"> Easy booking system for a host. Try
                            our innovative model. </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="h-auto bg-white font-poppins">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

            .font-poppins {
                font-family: "Poppins", sans-serif;
            }

            :root {
                --dark-1: #111f37;
                --dark-2: #001d01;
                --nogrey: #627492;
            }

            .text-dark-1 {
                color: var(--dark-1);
            }

            .text-dark-2 {
                color: var(--dark-2);
            }

            .text-nogrey {
                color: var(--nogrey);
            }
        </style>
        <main
            class="          flex flex-col          gap-12          px-4          py-20          mx-auto          max-w-screen-2xl          lg:px-24        ">
            <div class="flex flex-col gap-5">
                <div class="text-lg font-bold text-left text-pink-600 uppercase"> Super Features </div>
                <div
                    class="              text-4xl              md:text-5xl              font-bold              text-dark-1              leading-normal              lg:leading-snug            ">
                    The Reasons Why We <br class="hidden lg:block" /> Might Fit For Your Business </div>
            </div>
            <div class="grid items-center justify-center h-full gap-5 md:grid-cols-12">
                <!-- CARD 1 -->
                <div class="h-full md:col-span-4 lg:col-span-3">
                    <div
                        class="                flex flex-col                items-center                justify-center                pt-12                pb-10                border border-gray-300                px-7                rounded-3xl              ">
                        <div> <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="53" cy="53" r="52.5" stroke="#E5D4FF" />
                                <circle cx="53" cy="53" r="45" fill="#E5D4FF" />
                                <path
                                    d="M53 68C61.2843 68 68 61.2843 68 53C68 44.7157 61.2843 38 53 38C44.7157 38 38 44.7157 38 53C38 61.2843 44.7157 68 53 68Z"
                                    stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M38 53H68" stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M53 38C56.7519 42.1075 58.8841 47.4381 59 53C58.8841 58.5619 56.7519 63.8925 53 68C49.2481 63.8925 47.1159 58.5619 47 53C47.1159 47.4381 49.2481 42.1075 53 38V38Z"
                                    stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg> </div>
                        <div class="mt-10 mb-3 text-lg font-semibold text-dark-1"> Worldwide </div>
                        <p
                            class="                  text-base                  font-medium                  leading-7                  text-center text-gray-500                ">
                            Our company is having a lot of HQ around Asia </p>
                    </div>
                </div> <!-- CARD 2 -->
                <div class="h-full md:col-span-4 lg:col-span-3">
                    <div
                        class="                flex flex-col                items-center                justify-center                pt-12                pb-10                border border-gray-300                px-7                rounded-3xl              ">
                        <div> <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="53" cy="53" r="52.5" stroke="#E5D4FF" />
                                <circle cx="53" cy="53" r="45" fill="#E5D4FF" />
                                <path
                                    d="M65 45.5H41C39.3431 45.5 38 46.8431 38 48.5V63.5C38 65.1569 39.3431 66.5 41 66.5H65C66.6569 66.5 68 65.1569 68 63.5V48.5C68 46.8431 66.6569 45.5 65 45.5Z"
                                    stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M59 66.5V42.5C59 41.7044 58.6839 40.9413 58.1213 40.3787C57.5587 39.8161 56.7956 39.5 56 39.5H50C49.2044 39.5 48.4413 39.8161 47.8787 40.3787C47.3161 40.9413 47 41.7044 47 42.5V66.5"
                                    stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg> </div>
                        <div class="mt-10 mb-3 text-lg font-semibold text-dark-1"> Corporate </div>
                        <p
                            class="                  text-base                  font-medium                  leading-7                  text-center text-gray-500                ">
                            We do business as good as we can for better result </p>
                    </div>
                </div> <!-- CARD 3 -->
                <div class="h-full md:col-span-4 lg:col-span-3">
                    <div
                        class="                flex flex-col                items-center                justify-center                pt-12                pb-10                border border-gray-300                px-7                rounded-3xl              ">
                        <div> <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="53" cy="53" r="52.5" stroke="#E5D4FF" />
                                <circle cx="53" cy="53" r="45" fill="#E5D4FF" />
                                <path d="M68 53H38" stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M43.175 42.665L38 53V62C38 62.7956 38.3161 63.5587 38.8787 64.1213C39.4413 64.6839 40.2044 65 41 65H65C65.7956 65 66.5587 64.6839 67.1213 64.1213C67.6839 63.5587 68 62.7956 68 62V53L62.825 42.665C62.5766 42.1652 62.1938 41.7446 61.7194 41.4504C61.2451 41.1563 60.6981 41.0003 60.14 41H45.86C45.3019 41.0003 44.7549 41.1563 44.2806 41.4504C43.8062 41.7446 43.4234 42.1652 43.175 42.665V42.665Z"
                                    stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M50 59H50.015" stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M44 59H44.015" stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg> </div>
                        <div class="mt-10 mb-3 text-lg font-semibold text-dark-1"> Secure </div>
                        <p
                            class="                  text-base                  font-medium                  leading-7                  text-center text-gray-500                ">
                            Your company’s data would be safer with us </p>
                    </div>
                </div> <!-- CARD 4 -->
                <div class="h-full md:col-span-4 lg:col-span-3">
                    <div
                        class="                flex flex-col                items-center                justify-center                pt-12                pb-10                border border-gray-300                px-7                rounded-3xl              ">
                        <div> <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="53" cy="53" r="52.5" stroke="#E5D4FF" />
                                <circle cx="53" cy="53" r="45" fill="#E5D4FF" />
                                <path d="M65 53V68H41V53" stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M68 45.5H38V53H68V45.5Z" stroke="#7152A0" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M53 68V45.5" stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M53 45.5H59.75C60.7446 45.5 61.6984 45.1049 62.4017 44.4017C63.1049 43.6984 63.5 42.7446 63.5 41.75C63.5 40.7554 63.1049 39.8016 62.4017 39.0983C61.6984 38.3951 60.7446 38 59.75 38C54.5 38 53 45.5 53 45.5Z"
                                    stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M53 45.5H46.25C45.2554 45.5 44.3016 45.1049 43.5983 44.4017C42.8951 43.6984 42.5 42.7446 42.5 41.75C42.5 40.7554 42.8951 39.8016 43.5983 39.0983C44.3016 38.3951 45.2554 38 46.25 38C51.5 38 53 45.5 53 45.5Z"
                                    stroke="#7152A0" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg> </div>
                        <div class="mt-10 mb-3 text-lg font-semibold text-dark-1"> Rewards </div>
                        <p
                            class="                  text-base                  font-medium                  leading-7                  text-center text-gray-500                ">
                            Get the monthly reward for your employees </p>
                    </div>
                </div>
            </div>
            <div
                class="            flex flex-row flex-wrap            items-center            justify-evenly            md:justify-center            gap-14            md:flex-row          ">
                <svg width="126" height="30" viewBox="0 0 126 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M48.8799 21.6855L47.1656 29.6557H43.2227L49.7371 0.770734H54.4079L60.5366 29.6557H56.5508L54.8794 21.6855H48.8799ZM54.4079 18.4712L53.0793 11.5703C52.6936 9.5988 52.3079 7.02874 52.0086 4.97083H51.8364C51.5371 7.07088 51.1071 9.72738 50.7228 11.5703L49.3514 18.4712H54.4079ZM75.587 0V24.2992C75.587 25.8856 75.6727 28.2 75.7577 29.6564H72.2869L72.0298 27.1285H71.9012C71.2155 28.585 69.6297 30 67.5304 30C63.6731 30 61.3159 25.7992 61.3159 19.329C61.3159 11.9574 64.4439 8.48592 67.7447 8.48592C69.4154 8.48592 70.744 9.25808 71.4726 10.8431H71.5583V0H75.587V0ZM71.5576 16.7568C71.5576 16.3718 71.5576 15.9004 71.5148 15.4704C71.3005 13.5853 70.229 11.9567 68.7725 11.9567C66.2432 11.9567 65.3868 15.4704 65.3868 19.3283C65.3868 23.6141 66.5011 26.6135 68.644 26.6135C69.544 26.6135 70.7433 26.1421 71.429 23.657C71.5148 23.3141 71.5576 22.7991 71.5576 22.3291V16.7568V16.7568ZM85.1829 29.9993C81.0264 29.9993 78.0256 26.4421 78.0256 19.2862C78.0256 11.6996 81.5821 8.48521 85.3965 8.48521C89.5109 8.48521 92.4674 12.171 92.4674 19.1997C92.4674 27.4714 88.3959 29.9993 85.2251 29.9993H85.1829ZM85.3108 26.8285C87.7959 26.8285 88.3537 22.4141 88.3537 19.2433C88.3537 16.114 87.7966 11.6574 85.2258 11.6574C82.5679 11.6574 82.0543 16.114 82.0543 19.2433C82.0543 22.7141 82.6543 26.8285 85.2687 26.8285H85.3108ZM94.896 0H98.924V11.1853H99.0097C100.081 9.30022 101.538 8.48521 103.381 8.48521C106.938 8.48521 109.167 12.5139 109.167 18.8997C109.167 26.3563 106.124 29.9993 102.695 29.9993C100.638 29.9993 99.4811 28.8843 98.5804 27.0414H98.4104L98.1954 29.6557H94.7246C94.8103 28.2421 94.896 25.8849 94.896 24.2984V0V0ZM98.924 22.2841C98.924 22.757 98.9668 23.2284 99.0954 23.5706C99.7376 26.0999 100.981 26.6135 101.795 26.6135C104.195 26.6135 105.095 23.4427 105.095 19.1569C105.095 15.1711 104.153 11.9567 101.752 11.9567C100.423 11.9567 99.3518 13.5425 99.0518 15.0425C98.9661 15.4711 98.9233 16.029 98.9233 16.4568V22.2841H98.924V22.2841ZM115.112 20.0562C115.154 25.4135 117.468 26.7414 119.911 26.7414C121.368 26.7414 122.611 26.3992 123.511 25.9699L124.111 28.8843C122.868 29.5271 120.982 29.8707 119.139 29.8707C113.911 29.8707 111.169 25.9278 111.169 19.499C111.169 12.6846 114.296 8.48449 118.625 8.48449C122.954 8.48449 124.968 12.6417 124.968 17.8711C124.968 18.899 124.925 19.5426 124.882 20.0991L115.112 20.0562V20.0562ZM121.154 17.1854C121.197 13.4996 119.911 11.5288 118.326 11.5288C116.225 11.5288 115.282 14.5718 115.154 17.1854H121.154Z"
                        fill="#627492" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.5198 0.848145H32.5536V29.656L20.5198 0.848145ZM12.0424 0.848145H0V29.656L12.0424 0.848145ZM16.2818 11.4648L23.9491 29.656H18.9247L16.6318 23.8623H11.0195L16.2818 11.4648Z"
                        fill="#627492" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M124.627 8.43189C124.747 8.43245 124.867 8.45692 124.978 8.50387C125.089 8.55083 125.19 8.61936 125.275 8.70549C125.359 8.79163 125.426 8.89366 125.471 9.00572C125.516 9.11777 125.538 9.23762 125.537 9.35835C125.537 9.88122 125.133 10.2891 124.622 10.2891C124.116 10.2891 123.704 9.88193 123.704 9.35835C123.703 9.23716 123.726 9.11704 123.772 9.00485C123.818 8.89266 123.886 8.79062 123.971 8.70456C124.056 8.6185 124.158 8.55012 124.269 8.50333C124.381 8.45655 124.501 8.43227 124.622 8.43189H124.627ZM124.622 8.57547C124.215 8.57547 123.881 8.9262 123.881 9.35835C123.881 9.79907 124.215 10.1448 124.627 10.1448C125.038 10.1491 125.367 9.79907 125.367 9.36263C125.367 8.92619 125.038 8.57547 124.627 8.57547H124.622ZM124.449 9.89836H124.285V8.86405C124.372 8.85191 124.454 8.83905 124.578 8.83905C124.734 8.83905 124.837 8.87262 124.899 8.91762C124.961 8.96262 124.994 9.03263 124.994 9.13191C124.994 9.26763 124.903 9.35049 124.792 9.38335V9.39121C124.882 9.40763 124.944 9.49049 124.964 9.64264C124.989 9.80336 125.014 9.86479 125.031 9.89836H124.858C124.833 9.86479 124.809 9.7705 124.788 9.63478C124.763 9.50263 124.697 9.45335 124.565 9.45335H124.45V9.89836H124.449V9.89836ZM124.449 9.32549H124.569C124.704 9.32549 124.821 9.2762 124.821 9.14834C124.821 9.05762 124.754 8.96691 124.569 8.96691C124.516 8.96691 124.478 8.97119 124.449 8.97548V9.32549V9.32549ZM34.1402 0.848145C34.2609 0.8487 34.3803 0.87316 34.4916 0.920119C34.6028 0.967077 34.7036 1.0356 34.7882 1.12174C34.8729 1.20787 34.9396 1.30991 34.9845 1.42197C35.0295 1.53402 35.0518 1.65387 35.0502 1.77459C35.0502 2.29746 34.6466 2.70533 34.1359 2.70533C33.6295 2.70533 33.2173 2.29818 33.2173 1.77459C33.2166 1.65341 33.2399 1.53328 33.2857 1.42109C33.3316 1.30891 33.3991 1.20686 33.4844 1.1208C33.5697 1.03475 33.6712 0.966367 33.783 0.919579C33.8948 0.872792 34.0147 0.848519 34.1359 0.848145H34.1402ZM34.1359 0.991717C33.728 0.991717 33.3944 1.34244 33.3944 1.77459C33.3944 2.21532 33.728 2.56104 34.1402 2.56104C34.5516 2.56532 34.8816 2.21532 34.8816 1.77888C34.8816 1.34244 34.5516 0.991717 34.1402 0.991717H34.1359ZM33.963 2.31461H33.798V1.28029C33.8948 1.26423 33.9928 1.25611 34.0909 1.25601C34.2473 1.25601 34.3502 1.28816 34.4116 1.33387C34.4738 1.37887 34.5066 1.44958 34.5066 1.54816C34.5066 1.68388 34.4159 1.76674 34.3045 1.7996V1.80745C34.3952 1.82388 34.4573 1.90674 34.478 2.0596C34.5023 2.22032 34.5273 2.28175 34.5438 2.31532H34.3709C34.3459 2.28175 34.3209 2.18746 34.3009 2.05174C34.2759 1.9196 34.2102 1.87031 34.078 1.87031H33.963V2.31461V2.31461ZM33.963 1.74174H34.0823C34.218 1.74174 34.3338 1.69245 34.3338 1.56459C34.3338 1.47387 34.268 1.38316 34.0823 1.38316C34.0287 1.38316 33.9916 1.38744 33.963 1.39173V1.74174V1.74174Z"
                        fill="#627492" />
                </svg> <svg width="101" height="30" viewBox="0 0 101 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.4594 0C7.17534 0 0.459473 6.71568 0.459473 14.9997C0.459473 23.2847 7.17534 30 15.4594 30C23.7438 30 30.4593 23.2847 30.4593 14.9997C30.4593 6.71621 23.7441 0.000715925 15.4592 0.000715925L15.4594 0V0ZM22.3383 21.6339C22.0689 22.0758 21.4932 22.2143 21.0527 21.945C17.5303 19.7922 13.0968 19.3059 7.8755 20.4987C7.37236 20.614 6.87083 20.2986 6.7562 19.7956C6.64102 19.2925 6.95501 18.7909 7.45941 18.6763C13.1733 17.37 18.0745 17.9323 22.0282 20.3482C22.4688 20.6187 22.6085 21.1937 22.3381 21.6343L22.3383 21.6339V21.6339ZM24.1742 17.5502C23.835 18.1006 23.1153 18.2733 22.5655 17.9353C18.5345 15.4574 12.3877 14.7396 7.61865 16.1873C7.00015 16.3741 6.34691 16.0255 6.15919 15.4081C5.97291 14.7896 6.32166 14.1376 6.93908 13.9496C12.3866 12.2967 19.1587 13.0973 23.7889 15.9426C24.3388 16.2812 24.5126 17.0012 24.174 17.5504L24.1742 17.5502ZM24.3318 13.2972C19.4967 10.4258 11.5213 10.1617 6.90557 11.5626C6.16438 11.7874 5.38056 11.369 5.15594 10.6278C4.93133 9.88626 5.34939 9.10297 6.09112 8.87764C11.3896 7.26916 20.1978 7.57993 25.7637 10.8841C26.4304 11.2798 26.6491 12.1408 26.2539 12.8066C25.8599 13.4733 24.9965 13.6931 24.332 13.2972H24.3318V13.2972ZM41.2693 13.8475C38.6794 13.2299 38.2183 12.7964 38.2183 11.8856C38.2183 11.0251 39.0285 10.446 40.2332 10.446C41.4011 10.446 42.5591 10.8857 43.7732 11.791C43.8099 11.8184 43.8559 11.8293 43.9012 11.8222C43.9466 11.8154 43.9867 11.7905 44.0132 11.753L45.2778 9.97044C45.3297 9.897 45.3156 9.79581 45.2455 9.73974C43.8006 8.58031 42.1735 8.01662 40.2716 8.01662C37.4752 8.01662 35.5219 9.69477 35.5219 12.0959C35.5219 14.6707 37.2069 15.5824 40.1186 16.2862C42.5969 16.857 43.0152 17.3353 43.0152 18.1902C43.0152 19.1375 42.1694 19.7265 40.8082 19.7265C39.2965 19.7265 38.0634 19.2173 36.684 18.0227C36.6498 17.9932 36.6029 17.9797 36.5596 17.9822C36.5139 17.986 36.4721 18.0071 36.4431 18.0421L35.0252 19.7295C34.9658 19.7996 34.9733 19.9042 35.0421 19.9647C36.647 21.3975 38.6208 22.1543 40.7509 22.1543C43.7642 22.1543 45.7114 20.5078 45.7114 17.9595C45.7168 15.8083 44.429 14.6171 41.2747 13.8498L41.2693 13.8475V13.8475ZM52.5287 11.2932C51.2225 11.2932 50.1512 11.8077 49.2678 12.8618V11.6753C49.2678 11.5816 49.1919 11.5053 49.0984 11.5053H46.7793C46.6856 11.5053 46.6099 11.5816 46.6099 11.6753V24.8588C46.6099 24.9524 46.6856 25.0287 46.7793 25.0287H49.0984C49.1919 25.0287 49.2678 24.9524 49.2678 24.8588V20.6973C50.1514 21.6889 51.2229 22.1734 52.5287 22.1734C54.9555 22.1734 57.4123 20.3052 57.4123 16.734C57.4159 13.1618 54.9584 11.2931 52.5313 11.2931L52.5287 11.2932ZM54.7157 16.734C54.7157 18.5526 53.5955 19.8216 51.9915 19.8216C50.4058 19.8216 49.2096 18.4949 49.2096 16.734C49.2096 14.9732 50.4058 13.6463 51.9915 13.6463C53.5695 13.6461 54.7159 14.9444 54.7159 16.7338L54.7157 16.734V16.734ZM63.7092 11.2932C60.5838 11.2932 58.1352 13.6999 58.1352 16.7728C58.1352 19.8123 60.567 22.1937 63.6709 22.1937C66.8075 22.1937 69.2635 19.7951 69.2635 16.7339C69.2635 13.6834 66.8239 11.2936 63.7091 11.2936L63.7092 11.2932V11.2932ZM63.7092 19.8397C62.0468 19.8397 60.7935 18.504 60.7935 16.7331C60.7935 14.9546 62.0035 13.664 63.6709 13.664C65.3441 13.664 66.6058 14.9997 66.6058 16.7719C66.6058 18.55 65.3878 19.8397 63.7094 19.8397H63.7092V19.8397ZM75.9376 11.5053H73.3857V8.89627C73.3857 8.80277 73.3102 8.72647 73.2165 8.72647H70.8978C70.8039 8.72647 70.7278 8.80277 70.7278 8.89627V11.5053H69.6128C69.5195 11.5053 69.4439 11.5816 69.4439 11.6753V13.6683C69.4439 13.7618 69.5195 13.8383 69.6128 13.8383H70.7278V18.9953C70.7278 21.0794 71.7651 22.136 73.8108 22.136C74.6426 22.136 75.3328 21.9642 75.9831 21.5954C76.036 21.5659 76.0688 21.5089 76.0688 21.4484V19.5504C76.0688 19.4918 76.0383 19.4365 75.9882 19.4059C75.9376 19.3742 75.8748 19.3726 75.823 19.3982C75.3763 19.623 74.9444 19.7267 74.4617 19.7267C73.7177 19.7267 73.3857 19.3889 73.3857 18.6317V13.8392H75.9376C76.0313 13.8392 76.1067 13.7629 76.1067 13.6693V11.6764C76.1103 11.5827 76.0351 11.5064 75.9402 11.5064L75.9376 11.5053V11.5053ZM84.8291 11.5155V11.1951C84.8291 10.2524 85.1906 9.83198 86.0013 9.83198C86.4847 9.83198 86.873 9.92799 87.3079 10.0731C87.3615 10.0899 87.4174 10.0815 87.4609 10.0494C87.5057 10.0174 87.5309 9.96596 87.5309 9.91151V7.95732C87.5309 7.88263 87.4829 7.81654 87.4109 7.7945C86.9515 7.65783 86.3636 7.51758 85.4834 7.51758C83.3415 7.51758 82.2093 8.72377 82.2093 11.0045V11.4953H81.0952C81.0017 11.4953 80.925 11.5716 80.925 11.6651V13.6683C80.925 13.7618 81.0017 13.8383 81.0952 13.8383H82.2093V21.7928C82.2093 21.8865 82.2849 21.9628 82.3784 21.9628H84.6975C84.7911 21.9628 84.8674 21.8865 84.8674 21.7928V13.8389H87.0326L90.3494 21.7914C89.9728 22.627 89.6026 22.7932 89.0971 22.7932C88.6886 22.7932 88.2583 22.6712 87.8184 22.4305C87.777 22.4077 87.7279 22.4039 87.6834 22.4177C87.6391 22.4333 87.6019 22.4663 87.583 22.5093L86.7971 24.2336C86.7596 24.3151 86.7917 24.4108 86.8701 24.4531C87.6907 24.8974 88.4314 25.0871 89.3468 25.0871C91.0592 25.0871 92.0057 24.2895 92.84 22.1437L96.8632 11.7476C96.8834 11.6953 96.8773 11.6362 96.8453 11.5899C96.8134 11.5438 96.762 11.5161 96.7057 11.5161H94.2916C94.2192 11.5161 94.1545 11.5621 94.1309 11.63L91.6578 18.694L88.949 11.6253C88.9243 11.5596 88.8609 11.516 88.7907 11.516H84.8286L84.8291 11.5155V11.5155ZM79.6741 11.5053H77.355C77.2613 11.5053 77.185 11.5816 77.185 11.6753V21.7928C77.185 21.8865 77.2613 21.9628 77.355 21.9628H79.6741C79.7676 21.9628 79.844 21.8865 79.844 21.7928V11.676C79.8441 11.6536 79.8397 11.6315 79.8312 11.6108C79.8226 11.5902 79.8101 11.5714 79.7943 11.5556C79.7785 11.5398 79.7597 11.5273 79.739 11.5188C79.7184 11.5103 79.6962 11.5059 79.6739 11.506L79.6741 11.5053ZM78.5277 6.89857C77.609 6.89857 76.8635 7.64226 76.8635 8.56096C76.8635 9.4802 77.6092 10.2248 78.5277 10.2248C79.4461 10.2248 80.1908 9.4802 80.1908 8.56096C80.1908 7.64244 79.4457 6.89857 78.5286 6.89857H78.5277V6.89857ZM98.8433 14.7583C97.9255 14.7583 97.2114 14.0212 97.2114 13.1261C97.2114 12.2311 97.9348 11.4856 98.8519 11.4856C99.7697 11.4856 100.484 12.2225 100.484 13.1168C100.484 14.0119 99.7602 14.7583 98.8432 14.7583H98.8433V14.7583ZM98.8523 11.6479C98.0163 11.6479 97.3839 12.3124 97.3839 13.1261C97.3839 13.9395 98.0118 14.5951 98.8439 14.5951C99.6796 14.5951 100.313 13.9311 100.313 13.1168C100.313 12.3035 99.6841 11.6479 98.853 11.6479H98.8523V11.6479ZM99.2141 13.2847L99.6757 13.9309H99.2865L98.8709 13.338H98.5136V13.9309H98.1878V12.2178H98.9517C99.3497 12.2178 99.6114 12.4215 99.6114 12.7643C99.6132 13.0452 99.4502 13.2168 99.2156 13.2847H99.2141V13.2847ZM98.9383 12.5118H98.5134V13.0536H98.9383C99.1503 13.0536 99.277 12.9499 99.277 12.7824C99.277 12.6062 99.1498 12.5118 98.9384 12.5118H98.9383V12.5118Z"
                        fill="#627492" />
                </svg> <svg width="93" height="30" viewBox="0 0 93 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.4734 0H12.2907C15.1281 0.0616822 17.9192 1.2028 19.9239 3.2229C19.1837 3.9785 18.4281 4.70327 17.7033 5.45888C16.5776 4.44112 15.2206 3.65467 13.7403 3.3771C11.5505 2.91449 9.19119 3.33084 7.35615 4.57991C5.35147 5.89065 3.99447 8.11121 3.70147 10.486C3.37764 12.8299 4.04073 15.2972 5.56736 17.1168C7.03232 18.8902 9.2683 20.0005 11.5814 20.0776C13.7403 20.2009 15.9917 19.5378 17.5646 18.0266C18.7982 16.9626 19.3688 15.3435 19.5538 13.7706C16.994 13.7706 14.4342 13.786 11.8744 13.7706V10.5939H22.6533C23.2085 14.0019 22.4066 17.8416 19.816 20.278C18.0889 22.0051 15.6987 23.0229 13.2622 23.2234C10.9029 23.4547 8.46643 23.0075 6.36923 21.8664C3.85568 20.5248 1.85101 18.2579 0.864091 15.5902C-0.0611422 13.1383 -0.0765628 10.3626 0.786989 7.89533C1.57344 5.64392 3.08465 3.65467 5.02764 2.26682C6.89353 0.894392 9.16035 0.138785 11.4734 0Z"
                        fill="#627492" />
                    <path
                        d="M73.3101 0.802002H76.6101V22.8226C75.5152 22.8226 74.4049 22.838 73.3101 22.8071C73.3255 15.4824 73.3101 8.14219 73.3101 0.802002V0.802002Z"
                        fill="#627492" />
                    <path
                        d="M29.9937 8.43513C32.0292 8.04962 34.2344 8.48139 35.9152 9.69962C37.4418 10.7791 38.5059 12.4753 38.8297 14.3258C39.246 16.4692 38.7218 18.8132 37.3339 20.5094C35.8381 22.4062 33.3862 23.4239 30.996 23.2697C28.8063 23.1463 26.6783 22.0515 25.383 20.2627C23.918 18.2889 23.5633 15.5749 24.3652 13.2618C25.1671 10.7791 27.4339 8.88233 29.9937 8.43513V8.43513ZM30.4563 11.365C29.6236 11.5809 28.8526 12.059 28.2975 12.7375C26.8017 14.5263 26.8942 17.4407 28.5442 19.1062C29.4848 20.0622 30.9035 20.5094 32.2143 20.2473C33.4325 20.0314 34.4965 19.2141 35.0825 18.1347C36.1003 16.2996 35.8073 13.7706 34.2498 12.3365C33.2475 11.4113 31.7825 11.0258 30.4563 11.365Z"
                        fill="#627492" />
                    <path
                        d="M46.3395 8.43505C48.668 7.98785 51.2123 8.63551 52.9549 10.2701C55.7923 12.8145 56.1007 17.5794 53.6796 20.5093C52.2147 22.3598 49.8399 23.3776 47.496 23.2696C45.26 23.2079 43.0549 22.0977 41.7287 20.2626C40.2329 18.2425 39.9091 15.4668 40.7572 13.1075C41.6053 10.7019 43.8259 8.86682 46.3395 8.43505V8.43505ZM46.8021 11.365C45.9694 11.5808 45.1983 12.0589 44.6432 12.722C43.1628 14.4799 43.2245 17.3481 44.8128 19.029C45.7535 20.0313 47.2184 20.5248 48.5754 20.2472C49.7782 20.0159 50.8577 19.214 51.4437 18.1346C52.446 16.2841 52.153 13.7551 50.5801 12.321C49.5778 11.3958 48.1128 11.0257 46.8021 11.365Z"
                        fill="#627492" />
                    <path
                        d="M60.2023 9.32943C61.9756 8.21915 64.335 7.91074 66.2471 8.86681C66.8485 9.12896 67.342 9.57616 67.82 10.0234C67.8355 9.607 67.82 9.17522 67.8355 8.74345C68.8686 8.75887 69.9018 8.74345 70.9504 8.75887V22.3598C70.935 24.4107 70.4107 26.585 68.9303 28.0808C67.3112 29.7308 64.8284 30.2397 62.5925 29.9005C60.2023 29.5458 58.1205 27.8033 57.1953 25.5981C58.1205 25.1509 59.092 24.7963 60.0481 24.3799C60.5878 25.6444 61.6827 26.7238 63.0551 26.9706C64.4275 27.2173 66.0158 26.878 66.9102 25.7369C67.8663 24.5649 67.8663 22.9612 67.82 21.5271C67.1107 22.221 66.2934 22.8378 65.3065 23.0692C63.163 23.6706 60.8037 22.9304 59.1537 21.4808C57.4883 20.0313 56.5013 17.7953 56.5939 15.5748C56.6401 13.0612 58.0588 10.6402 60.2023 9.32943V9.32943ZM63.3943 11.3033C62.4537 11.4575 61.5747 11.9818 60.9733 12.7065C59.5238 14.4336 59.5238 17.1939 60.9887 18.8902C61.8214 19.8925 63.163 20.4477 64.4584 20.3089C65.6766 20.1855 66.8023 19.4145 67.4037 18.3505C68.4214 16.5463 68.2518 14.0944 66.8794 12.5215C66.0313 11.55 64.6742 11.072 63.3943 11.3033V11.3033Z"
                        fill="#627492" />
                    <path
                        d="M80.5729 10.116C82.4234 8.38888 85.2762 7.8029 87.651 8.71271C89.9024 9.56084 91.3365 11.7043 92.0613 13.9094C88.715 15.2973 85.3842 16.6697 82.0379 18.0576C82.5005 18.9365 83.2099 19.7384 84.1659 20.0622C85.5075 20.5403 87.1113 20.3707 88.237 19.4763C88.6842 19.137 89.0388 18.6898 89.3781 18.258C90.2262 18.8286 91.0743 19.3837 91.9225 19.9543C90.7197 21.7585 88.6996 23.023 86.5253 23.2235C84.1197 23.5164 81.5599 22.5912 80.0024 20.7099C77.4426 17.7492 77.6893 12.7837 80.5729 10.116V10.116ZM82.2229 12.9688C81.6986 13.7244 81.4827 14.6496 81.4982 15.5594C83.7342 14.6342 85.9701 13.709 88.2061 12.7683C87.836 11.9048 86.9416 11.3805 86.0318 11.2417C84.5669 10.9795 83.0402 11.766 82.2229 12.9688V12.9688Z"
                        fill="#627492" />
                </svg> <svg width="156" height="30" viewBox="0 0 156 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.5102 4.72155C10.6942 4.72155 10.1494 5.52058 10.1494 7.30025V10.2421H15.0162L14.5441 15.0363H10.1494V29.5279H4.30191V15.0363H0.379395V10.2785H4.30191V7.4092C4.30191 2.54237 6.26318 0 11.6748 0C12.8007 0 13.9629 0.0726393 15.0888 0.217918V4.72155"
                        fill="#627492" />
                    <path
                        d="M15.4157 19.2856C15.4157 13.9103 17.9581 9.84253 23.3334 9.84253C26.239 9.84253 28.0186 11.3316 28.8903 13.2203V10.2784H34.4835V29.5641H28.854V26.6585C28.0549 28.5108 26.2026 29.9636 23.2971 29.9636C17.9581 29.9636 15.3794 25.9321 15.3794 20.5205L15.4157 19.2856ZM21.2632 20.5931C21.2632 23.4624 22.3164 25.3873 25.0404 25.3873C27.4375 25.3873 28.6361 23.644 28.6361 20.8837V18.9224C28.6361 16.1621 27.4012 14.4188 25.0404 14.4188C22.3164 14.4188 21.2632 16.3074 21.2632 19.213V20.5931V20.5931Z"
                        fill="#627492" />
                    <path
                        d="M46.6142 9.84253C48.866 9.84253 51.0452 10.3147 52.2074 11.15L50.8999 15.2905C49.7013 14.7094 48.3575 14.4188 47.0137 14.4188C43.8539 14.4188 42.4737 16.2348 42.4737 19.3583V20.4842C42.4737 23.6077 43.8539 25.4237 47.0137 25.4237C48.3575 25.4237 49.7013 25.0968 50.8999 24.5157L52.2074 28.6561C51.0452 29.4551 48.9023 29.9636 46.6142 29.9636C39.7498 29.9636 36.6626 26.2953 36.6626 20.3752V19.4672C36.6626 13.5471 39.7498 9.84253 46.6142 9.84253"
                        fill="#627492" />
                    <path
                        d="M52.9702 20.6295V18.9224C52.9702 13.4382 56.0937 9.84253 62.4496 9.84253C68.4424 9.84253 71.0937 13.4745 71.0937 18.8498V21.937H58.8177C58.9266 24.5883 60.1252 25.7505 63.3576 25.7505C65.4642 25.7505 67.5707 25.351 69.5683 24.5883L70.6216 28.5835C69.0961 29.3825 65.9363 29.9999 63.1397 29.9999C55.7305 29.9636 52.9702 26.2953 52.9702 20.6295V20.6295ZM58.8177 18.0871H65.8637V17.6149C65.8637 15.5084 65.0283 13.8377 62.4496 13.8377C59.8346 13.8377 58.8177 15.5084 58.8177 18.0871Z"
                        fill="#627492" />
                    <path
                        d="M92.7399 20.5205C92.7399 25.8958 90.1612 29.9636 84.7859 29.9636C81.8804 29.9636 79.8465 28.5108 79.0474 26.6585V29.5641H73.5269V0.580985L79.3743 0.0725098V12.966C80.2097 11.259 82.0983 9.87881 84.8223 9.87881C90.1613 9.87881 92.7763 13.9103 92.7763 19.3219L92.7399 20.5205ZM86.8925 19.1766C86.8925 16.4527 85.8392 14.4188 83.0426 14.4188C80.6455 14.4188 79.3743 16.1258 79.3743 18.8861V20.92C79.3743 23.6803 80.6818 25.3873 83.0426 25.3873C85.8392 25.3873 86.8925 23.3534 86.8925 20.6294V19.1766Z"
                        fill="#627492" />
                    <path
                        d="M94.665 20.3752V19.3946C94.665 13.8377 97.8248 9.84253 104.253 9.84253C110.682 9.84253 113.842 13.8377 113.842 19.3946V20.3752C113.842 25.9321 110.682 29.9273 104.253 29.9273C97.8248 29.9273 94.665 25.9684 94.665 20.3752V20.3752ZM108.031 18.9951C108.031 16.4527 106.977 14.4188 104.253 14.4188C101.529 14.4188 100.476 16.4527 100.476 18.9951V20.8111C100.476 23.3534 101.529 25.3873 104.253 25.3873C106.977 25.3873 108.031 23.3534 108.031 20.8111V18.9951V18.9951Z"
                        fill="#627492" />
                    <path
                        d="M115.84 20.3752V19.3946C115.84 13.8377 119 9.84253 125.428 9.84253C131.857 9.84253 135.017 13.8377 135.017 19.3946V20.3752C135.017 25.9321 131.857 29.9273 125.428 29.9273C119 29.9273 115.84 25.9684 115.84 20.3752V20.3752ZM129.205 18.9951C129.205 16.4527 128.152 14.4188 125.428 14.4188C122.704 14.4188 121.651 16.4527 121.651 18.9951V20.8111C121.651 23.3534 122.704 25.3873 125.428 25.3873C128.152 25.3873 129.205 23.3534 129.205 20.8111V18.9951V18.9951Z"
                        fill="#627492" />
                    <path
                        d="M143.043 19.4674L148.818 10.2422H154.992L148.963 19.7943L155.246 29.5642H149.036L143.043 20.1211V29.5642H137.232V0.581171L143.043 0.036377"
                        fill="#627492" />
                </svg> <svg width="231" height="30" viewBox="0 0 231 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M196.835 11.9008V30H202.62V17.9339H223.777V30H229.562V11.9008H196.835ZM201.959 6.03306H224.273C227.413 5.45455 229.645 2.64463 230.306 0H195.926C196.587 2.64463 198.901 5.3719 201.959 6.03306ZM179.232 30C182.124 28.7603 183.694 26.6116 184.356 24.1322H158.323V0.0826446H152.455V30H179.232V30ZM109.066 5.95041H129.727C132.868 5.04132 135.43 2.64463 136.091 0.0826446H103.364V17.7686H130.141V23.9669H109.149C105.843 24.876 103.033 27.1074 101.628 30H135.926V11.9008H109.149L109.066 5.95041ZM58.1572 6.03306H80.4713C83.6118 5.45455 85.9258 2.64463 86.5043 0H52.0415C52.7027 2.64463 55.0167 5.3719 58.1572 6.03306ZM58.1572 17.8512H80.4713C83.6118 17.2727 85.9258 14.4628 86.5043 11.8182H52.0415C52.7027 14.4628 55.0167 17.1901 58.1572 17.8512ZM58.1572 30H80.4713C83.6118 29.4215 85.9258 26.6116 86.5043 23.9669H52.0415C52.7027 26.6116 55.0167 29.4215 58.1572 30Z"
                        fill="#627492" />
                    <path
                        d="M0.0576172 0.0826446C0.718774 2.72727 3.03282 5.3719 6.09067 6.03306H15.5122L16.008 6.19835V29.9174H21.8758V6.19835L22.3717 6.03306H31.7932C34.9336 5.20661 37.1651 2.72727 37.8262 0.0826446V0L0.0576172 0.0826446Z"
                        fill="#627492" />
                </svg>
            </div>
        </main>
    </section><!-- START: PRODUCTS -->
    <section class="products bg-black-1">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

            body {
                font-family: 'Poppins', sans-serif;
            }

            :root {
                --white-1: #ffffff;
                --white-2: #eeeeee;
                --white-3: #ecf1f4;
                --black: #000909;
                --dark: #0A0F16;
                --subtleGreen: #90BCB7;
                --darkGreen: #082D28;
                --darkTosca: #569B9B;
                --tosca-1: #00FFD1;
                --tosca-2: #27D7D7;
                --tosca-3: #3FE8FF;
                --deepTosca-1: #016A6A;
                --deepTosca-2: #02A6A6;
                --grey-1: #888888;
                --grey-2: #666666;
            }

            .bg-black-1 {
                background-color: var(--black);
            }

            .bg-dark {
                background-color: var(--dark);
            }

            .text-40 {
                font-size: 40px;
            }

            .text-28 {
                font-size: 28px;
            }

            .text-24 {
                font-size: 24px;
            }

            .text-20 {
                font-size: 20px;
            }

            .text-white-1 {
                color: var(--white-1);
            }

            .text-white-2 {
                color: var(--white-2);
            }

            .text-grey-1 {
                color: var(--grey-1);
            }

            .text-grey-2 {
                color: var(--grey-2);
            }

            .text-darkGreen {
                color: var(--darkGreen);
            }

            .text-subtleGreen {
                color: var(--subtleGreen);
            }

            .bg-white-2 {
                background-color: var(--white-2);
            }

            @media(min-width: 768px) {
                .mt-px442 {
                    margin-top: 442px;
                }
            }

            .leading-px40 {
                line-height: 40px;
            }

            .leading-px36 {
                line-height: 36px;
            }

            .z-min100 {
                z-index: -100;
            }

            .z-min10 {
                z-index: -10;
            }

            .max-w-screen {
                max-width: 1440px;
            }

            .max-w-px400 {
                max-width: 400px;
            }

            .w-px580 {
                width: 580px;
            }

            .h-780 {
                height: 780px;
            }
        </style>
        <!-- RIGHT CIRCLE ORNAMENT -->
        <div class="mx-auto max-w-screen-2xl">
            <div class="flex items-center justify-end"> <svg width="316" height="560" viewBox="0 0 316 560"
                    fill="none" class="absolute" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="280" cy="280" r="279" stroke="url(#paint0_linear_154:119)"
                        stroke-width="2" />
                    <defs>
                        <linearGradient id="paint0_linear_154:119" x1="0" y1="0" x2="560"
                            y2="560" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#36745D" />
                            <stop offset="1" stop-color="#155367" />
                        </linearGradient>
                    </defs>
                </svg> </div>
        </div>
        <main class="relative z-30 px-4 pb-0 mx-auto md:pb-28 our-platform pt-36 max-w-screen-2xl lg:px-24">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
                <div class="md:col-span-10">
                    <h1 class="font-semibold leading-snug text-white-2 md:leading-9 text-40"> Outputs from Our Platform
                    </h1>
                    <p class="text-xl font-normal leading-8 md:leading-9 md:text-2xl text-grey-1 mt-7"> Our platform
                        specialize on helping our clients work process and communication. <br> Below are the products
                        produced using our platform. </p>
                </div>
                <div class="mt-2 md:col-span-3 lg:col-span-2 lg:mt-0">
                    <div class="text-2xl font-semibold text-left bg-transparent text-white-2 lg:text-right"> <a
                            href="#"
                            class="px-0 py-0 transition duration-500 ease-out rounded-lg cursor-pointer lg:hover:bg-darkTosca lg:py-3 lg:px-6">See
                            more</a> </div>
                </div>
            </div>
            <div class="grid grid-flow-col grid-rows-2 gap-4 mt-12 md:gap-10 md:mt-24">
                <div class="row-span-2"> <img
                        src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-1.png"
                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
                <div class="row-span-1"> <img
                        src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-2.png"
                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
                <div class="row-span-1"> <img
                        src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-3.png"
                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
                <div class="row-span-2"> <img
                        src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-4.png"
                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
            </div>
        </main>
    </section>
    <!-- END: PRODUCTS -->
    <section class="h-full w-full px-8 py-20 bg-white">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-3-1 .circle {
                background-color: #ffbf56;
            }

            .content-3-1 .caption {
                color: #565656;
            }

            .content-3-1 .btn-fill {
                background-color: #ff7c57;
                transition: 0.3s;
            }

            .content-3-1 .btn-fill:hover {
                background-color: #ff9779;
                transition: 0.3s;
            }

            .content-3-1 .text-medium-black {
                color: #121212;
            }
        </style>
        <div class="content-3-1 flex lg:flex-row flex-col items-center" style="font-family: 'Poppins', sans-serif">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                <img id="hero"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-1.png"
                    alt="" />
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                <h2 class="md:text-4xl text-3xl font-semibold mb-10 tracking-tight text-medium-black">
                    3 Keys Benefit
                </h2>
                <ul>
                    <li class="mb-8">
                        <h4
                            class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                            <span
                                class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full">1</span>
                            Trusted Mentor
                        </h4>
                        <p class="text-base leading-7 tracking-wide caption">
                            We have provided highly experienced mentors<br class="sm:inline-block hidden" />
                            for several years.
                        </p>
                    </li>
                    <li class="mb-8">
                        <h4
                            class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                            <span
                                class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full">2</span>
                            Access Forever
                        </h4>
                        <p class="text-base leading-7 tracking-wide caption">
                            Are you busy at work so it's hard to consult? don't<br class="sm:inline-block hidden" />
                            worry because you can access anytime.
                        </p>
                    </li>
                    <li class="mb-16">
                        <h4
                            class="font-medium text-2xl mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center text-medium-black">
                            <span
                                class="circle h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 text-white rounded-full">3</span>
                            Halfpenny
                        </h4>
                        <p class="text-base leading-7 tracking-wide caption">
                            We provide economical packages for those of you<br class="sm:inline-block hidden" />
                            who are still in school or workers.
                        </p>
                    </li>
                </ul>
                <button
                    class="btn-fill px-10 py-4 text-base text-white font-semibold rounded-xl cursor-pointer focus:outline-none tracking-wide">
                    Learn More
                </button>
            </div>
        </div>
    </section>
    <section class="h-full w-full border-box bg-white">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-2-2 .btn-outline {
                border: 1px solid #979797;
                color: #979797;
            }

            .content-2-2 .btn-outline:hover {
                border: 1px solid #27c499;
                color: #27c499;
            }

            .content-2-2 .btn-fill {
                background-color: #27c499;
                border: 1px solid #27c499;
            }

            .content-2-2 .card-header {
                background-color: #eef6f4;
                border: 1px solid #27c499;
            }

            .content-2-2 .text-medium-black {
                color: #121212;
            }

            .content-2-2 .text-gray {
                color: #565656;
            }
        </style>
        <div class="content-2-2" style="font-family: 'Poppins', sans-serif">
            <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
                <!-- Title Text -->
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-4xl font-semibold title-font mb-2.5 text-medium-black">
                        3 Keys Benefit
                    </h1>
                    <h2
                        class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-medium-black">
                        You can easily manage your business with a powerful tools
                    </h2>
                </div>

                <!-- 3-Column -->
                <div class="flex lg:flex-row flex-col -m-4">
                    <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
                        <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-4 pb-12 flex-col">
                            <div class="items-center text-center">
                                <div class="inline-flex items-center justify-center rounded-full mb-6">
                                    <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
                                        alt="" />
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
                                    Easy to Operate
                                </h4>
                                <p class="leading-relaxed text-base text-center tracking-wide text-gray">
                                    This can easily help you to <br /> grow up your business fast
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
                        <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-12 flex-col">
                            <div class="items-center text-center">
                                <div class="inline-flex items-center justify-center rounded-full mb-6">
                                    <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png"
                                        alt="" />
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
                                    Real-Time Analytic
                                </h4>
                                <p class="leading-relaxed text-base text-center tracking-wide text-gray">
                                    With real-time analytics, you <br /> can check data in real time
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
                        <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-6 flex-col">
                            <div class="items-center text-center">
                                <div class="inline-flex items-center justify-center rounded-full mb-6">
                                    <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png"
                                        alt="" />
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
                                    Very Full Secured
                                </h4>
                                <p class="leading-relaxed text-base text-center tracking-wide text-gray">
                                    With real-time analytics, we <br /> will guarantee your data
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:px-24 md:px-16 sm:px-8 px-4 pb-20 pt-12 mx-auto">
                <div class="flex lg:flex-row flex-col -m-4">
                    <div class="p-4 w-full">
                        <div
                            class="card-header h-full flex lg:flex-row flex-col p-7 rounded-xl lg:space-x-3.5 md:space-x-3.5 space-x-0">
                            <div class="text-center mx-auto">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                                    alt="" />
                            </div>
                            <div
                                class="flex-grow my-auto lg:text-left lg:w-3/4 w-full lg:text-left text-center lg:my-auto md:my-auto py-6">
                                <h4 class="text-2xl font-semibold mb-2.5">
                                    Fast Business Management in 30 minutes
                                </h4>
                                <p class="text-base font-light tracking-wide w-full text-gray">
                                    Our tools for business analysis helps an organization understand <br
                                        class="lg:block hidden" /> market or business development.
                                </p>
                            </div>
                            <a class="inline-block items-center my-auto text-center">
                                <button
                                    class="btn-fill font-bold text-white text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full rounded-xl mb-4 md:mb-5 lg:mb-5 focus:outline-none hover:shadow-lg">
                                    Buy Now
                                </button>
                                <button
                                    class="btn-outline font-normal text-black text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full px-6 rounded-xl focus:outline-none bg-transparent rounded hover:border-transparent">
                                    Demo Version
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer font-display">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Red+Hat+Display:wght@400;500;600;700&display=swap");

            .font-display {
                font-family: 'Red Hat Display', sans-serif;
            }

            :root {
                --light-1: #FFFFFF;
                --light-2: #F9FAFE;
                --light-3: #FAFAFD;

                --dark-1: #16171C;
                --dark-2: #494C57;
                --dark-3: #171717;
                --dark-4: #202020;
                --dark-5: #151515;
                --dark-6: #0F0F0F;

                --subtleGrey-1: #F8F8FC;
                --subtleGrey-2: #989DB1;
                --subtleGrey-3: #8D8F98;
                --subtleGrey-4: #9A9A9A;
                --subtleGrey-5: #CED2DE;

                --subtleBlue-1: #34B3FF;
                --subtleBlue-2: #518CFF;
                --subtleBlue-3: #4376DB;
                --subtleBlue-4: #CCE3FF;

                --subtleGreen-1: #00B67A;

                --lemonYellow: #F2FF57;
                --deepGrey: #2E2E2E;
                --navy-1: #313E60;
                --navy-2: #1C3055;
            }

            .text-light-1 {
                color: var(--light-1);
            }

            .text-light-2 {
                color: var(--light-2);
            }

            .text-light-3 {
                color: var(--light-3);
            }

            .text-dark-1 {
                color: var(--dark-1);
            }

            .text-dark-2 {
                color: var(--dark-2);
            }

            .text-dark-3 {
                color: var(--dark-3);
            }

            .text-dark-4 {
                color: var(--dark-4);
            }

            .text-dark-5 {
                color: var(--dark-5);
            }

            .text-subtleBlue-1 {
                color: var(--subtleBlue-1);
            }

            .text-subtleBlue-4 {
                color: var(--subtleBlue-4);
            }

            .text-subtleGrey-1 {
                color: var(--ssubtleGrey-1);
            }

            .text-subtleGrey-2 {
                color: var(--subtleGrey-2);
            }

            .text-subtleGrey-3 {
                color: var(--subtleGrey-3);
            }

            .text-subtleGrey-4 {
                color: var(--subtleGrey-4);
            }

            .text-subtleGrey-5 {
                color: var(--subtleGrey-5);
            }

            .bg-light-1 {
                background-color: var(--light-1);
            }

            .bg-light-2 {
                background-color: var(--light-2);
            }

            .bg-light-3 {
                background-color: var(--light-3);
            }

            .bg-subtleGreen {
                background-color: var(--subtleGreen-1);
            }

            .bg-subtleGrey-1 {
                background-color: var(--subtleGrey-1);
            }

            .bg-deepGrey {
                background-color: var(--deepGrey);
            }

            .bg-lemonYellow {
                background-color: var(--lemonYellow);
            }

            .bg-navy-1 {
                background-color: var(--navy-1);
            }

            .w-screen-custom {
                width: 1560px;
            }

            .ring-subtleGrey-3 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgba(141, 143, 152, var(--tw-ring-opacity));
            }

            .text-px20 {
                font-size: 20px;
            }

            .text-px32 {
                font-size: 32px;
            }

            .mb-18 {
                margin-bottom: 72px;
            }

            .ml-18 {
                margin-left: 72px;
            }

            .mt-18 {
                margin-top: 72px;
            }

            .-mt-13 {
                margin-top: -52px;
            }

            .bg-card-professional {
                background: linear-gradient(180deg, #518CFF 0%, #4376DB 100%);
            }
        </style>
        <footer class="bg-navy-1">
            <div class="max-w-screen-2xl px-4 mx-auto py-14 lg:px-24">
                <div class="grid lg:grid-cols-12">
                    <div class="md:col-span-12 lg:col-span-6">
                        <svg width="128" height="26" viewBox="0 0 128 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.708 10.926C19.708 12.2607 19.474 13.5087 19.006 14.67C18.5553 15.814 17.9227 16.802 17.108 17.634C16.3107 18.4487 15.3487 19.0987 14.222 19.584C13.0953 20.052 11.882 20.286 10.582 20.286C9.23 20.286 7.96467 20.0433 6.786 19.558C5.60733 19.0727 4.58467 18.414 3.718 17.582C2.86867 16.7327 2.19267 15.736 1.69 14.592C1.18733 13.448 0.936 12.2173 0.936 10.9C0.936 9.58267 1.17867 8.352 1.664 7.208C2.16667 6.064 2.84267 5.076 3.692 4.244C4.55867 3.39467 5.58133 2.72733 6.76 2.242C7.93867 1.75667 9.19533 1.514 10.53 1.514C12.038 1.514 13.4593 1.81733 14.794 2.424C16.1287 3.03067 17.2293 3.86267 18.096 4.92L15.47 7.338C14.8287 6.57533 14.0833 5.99467 13.234 5.596C12.402 5.18 11.5007 4.972 10.53 4.972C9.71533 4.972 8.95267 5.128 8.242 5.44C7.54867 5.73467 6.942 6.15067 6.422 6.688C5.91933 7.208 5.52067 7.832 5.226 8.56C4.94867 9.27067 4.81 10.0507 4.81 10.9C4.81 11.7493 4.95733 12.538 5.252 13.266C5.54667 13.994 5.954 14.6267 6.474 15.164C6.994 15.684 7.60933 16.1 8.32 16.412C9.048 16.7067 9.81933 16.854 10.634 16.854C11.9167 16.854 13.0173 16.4987 13.936 15.788C14.872 15.0773 15.4527 14.1673 15.678 13.058H10.296V9.782H19.708V10.926ZM24.0746 4.842C23.5199 4.842 23.0432 4.64267 22.6446 4.244C22.2459 3.84533 22.0466 3.36867 22.0466 2.814C22.0466 2.25933 22.2459 1.78267 22.6446 1.384C23.0432 0.985333 23.5199 0.785999 24.0746 0.785999C24.6292 0.785999 25.1059 0.985333 25.5046 1.384C25.9032 1.78267 26.1026 2.25933 26.1026 2.814C26.1026 3.36867 25.9032 3.84533 25.5046 4.244C25.1059 4.64267 24.6292 4.842 24.0746 4.842ZM25.8686 6.454V20H22.3066V6.454H25.8686ZM33.3342 20L27.5102 6.454H31.3842L35.1022 15.476L38.7942 6.454H42.5902L36.7662 20H33.3342ZM54.2663 18.7L47.9743 6.61V20H44.4903V1.8H49.3263L54.3183 11.576L59.3103 1.8H64.1463V20H60.5843V6.636L54.2663 18.7ZM66.82 13.24C66.82 12.252 67.002 11.3333 67.366 10.484C67.7473 9.61733 68.2587 8.872 68.9 8.248C69.5587 7.60667 70.33 7.104 71.214 6.74C72.098 6.376 73.0427 6.194 74.048 6.194C75.0533 6.194 75.998 6.376 76.882 6.74C77.766 7.104 78.5287 7.60667 79.17 8.248C79.8287 8.872 80.34 9.61733 80.704 10.484C81.0853 11.3333 81.276 12.252 81.276 13.24C81.276 14.228 81.0853 15.1553 80.704 16.022C80.34 16.8713 79.8287 17.608 79.17 18.232C78.5287 18.856 77.766 19.35 76.882 19.714C75.998 20.078 75.0533 20.26 74.048 20.26C73.0427 20.26 72.098 20.078 71.214 19.714C70.33 19.35 69.5587 18.856 68.9 18.232C68.2587 17.608 67.7473 16.8713 67.366 16.022C67.002 15.1553 66.82 14.228 66.82 13.24ZM74.048 17.166C75.088 17.166 75.972 16.7847 76.7 16.022C77.428 15.2593 77.792 14.332 77.792 13.24C77.792 12.1307 77.428 11.1947 76.7 10.432C75.972 9.66933 75.088 9.288 74.048 9.288C73.008 9.288 72.124 9.66933 71.396 10.432C70.668 11.1947 70.304 12.1307 70.304 13.24C70.304 14.332 70.668 15.2593 71.396 16.022C72.124 16.7847 73.008 17.166 74.048 17.166ZM83.7255 20V6.454H87.2875V7.52C87.8075 7.08667 88.3795 6.75733 89.0035 6.532C89.6448 6.30667 90.3382 6.194 91.0835 6.194C92.6435 6.194 93.9262 6.69667 94.9315 7.702C95.9368 8.70733 96.4395 9.99867 96.4395 11.576V20H92.8775V12.096C92.8775 11.2467 92.6175 10.562 92.0975 10.042C91.5948 9.522 90.9188 9.262 90.0695 9.262C89.4802 9.262 88.9428 9.38333 88.4575 9.626C87.9895 9.85133 87.5995 10.1807 87.2875 10.614V20H83.7255ZM111.54 18.31C110.708 18.986 109.85 19.48 108.966 19.792C108.099 20.104 107.128 20.26 106.054 20.26C105.031 20.26 104.069 20.078 103.168 19.714C102.284 19.35 101.512 18.856 100.854 18.232C100.212 17.608 99.7009 16.8713 99.3196 16.022C98.9556 15.1553 98.7736 14.228 98.7736 13.24C98.7736 12.2693 98.9469 11.3593 99.2936 10.51C99.6576 9.64333 100.152 8.898 100.776 8.274C101.4 7.63267 102.136 7.13 102.986 6.766C103.852 6.402 104.771 6.22 105.742 6.22C106.695 6.22 107.579 6.41067 108.394 6.792C109.226 7.156 109.936 7.65867 110.526 8.3C111.132 8.94133 111.6 9.71267 111.93 10.614C112.276 11.498 112.45 12.46 112.45 13.5V14.436H102.362C102.604 15.2853 103.072 15.97 103.766 16.49C104.459 17.01 105.274 17.27 106.21 17.27C106.799 17.27 107.354 17.1747 107.874 16.984C108.394 16.7933 108.836 16.5247 109.2 16.178L111.54 18.31ZM105.664 9.158C104.849 9.158 104.147 9.40933 103.558 9.912C102.968 10.3973 102.561 11.056 102.336 11.888H108.966C108.74 11.0907 108.324 10.4407 107.718 9.938C107.128 9.418 106.444 9.158 105.664 9.158ZM118.05 20.624L118.258 20.13L112.98 6.454H116.906L120.26 15.684L124.108 6.454H127.956L121.716 21.066C121.023 22.6953 120.217 23.8567 119.298 24.55C118.379 25.2433 117.183 25.59 115.71 25.59C115.398 25.59 115.095 25.5727 114.8 25.538C114.523 25.5207 114.297 25.486 114.124 25.434V22.366C114.297 22.4007 114.479 22.4267 114.67 22.444C114.861 22.4613 115.095 22.47 115.372 22.47C116.013 22.47 116.551 22.314 116.984 22.002C117.435 21.69 117.79 21.2307 118.05 20.624Z"
                                fill="#FAFAFD" />
                        </svg>

                        <!-- social media icons -->
                        <div class="flex flex-row items-center mt-14">
                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    class="mr-6" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1.719C0 0.7695 0.789 0 1.7625 0H22.2375C23.211 0 24 0.7695 24 1.719V22.281C24 23.2305 23.211 24 22.2375 24H1.7625C0.789 24 0 23.2305 0 22.281V1.719ZM7.4145 20.091V9.2535H3.813V20.091H7.4145ZM5.6145 7.773C6.87 7.773 7.6515 6.942 7.6515 5.901C7.629 4.8375 6.8715 4.029 5.6385 4.029C4.4055 4.029 3.6 4.839 3.6 5.901C3.6 6.942 4.3815 7.773 5.5905 7.773H5.6145ZM12.9765 20.091V14.0385C12.9765 13.7145 13.0005 13.3905 13.0965 13.1595C13.356 12.513 13.9485 11.8425 14.9445 11.8425C16.248 11.8425 16.7685 12.8355 16.7685 14.2935V20.091H20.37V13.875C20.37 10.545 18.594 8.997 16.224 8.997C14.313 8.997 13.4565 10.047 12.9765 10.7865V10.824H12.9525C12.9605 10.8115 12.9685 10.799 12.9765 10.7865V9.2535H9.3765C9.4215 10.2705 9.3765 20.091 9.3765 20.091H12.9765Z"
                                        fill="#FAFAFD" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    class="mr-6" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_431:1901)">
                                        <path
                                            d="M23.9991 12.0733C23.9991 5.40429 18.6261 -0.00170898 11.9991 -0.00170898C5.36909 -0.000208984 -0.00390625 5.40429 -0.00390625 12.0748C-0.00390625 18.1003 4.38509 23.0953 10.1211 24.0013V15.5638H7.07609V12.0748H10.1241V9.41229C10.1241 6.38679 11.9166 4.71579 14.6571 4.71579C15.9711 4.71579 17.3436 4.95129 17.3436 4.95129V7.92129H15.8301C14.3406 7.92129 13.8756 8.85279 13.8756 9.80829V12.0733H17.2026L16.6716 15.5623H13.8741V23.9998C19.6101 23.0938 23.9991 18.0988 23.9991 12.0733Z"
                                            fill="#FAFAFD" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_431:1901">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    class="mr-6" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.539 22.5001C16.596 22.5001 21.5505 14.9956 21.5505 8.49906C21.5505 8.28906 21.5505 8.07606 21.5415 7.86606C22.5061 7.16779 23.3386 6.30329 24 5.31306C23.099 5.71034 22.1441 5.97217 21.1665 6.09006C22.1963 5.47452 22.9676 4.50602 23.337 3.36456C22.3695 3.93775 21.3105 4.34012 20.2065 4.55406C19.4643 3.7636 18.4821 3.23994 17.4121 3.0642C16.3421 2.88846 15.2441 3.07045 14.288 3.58197C13.3319 4.09349 12.5712 4.90601 12.1237 5.89365C11.6761 6.8813 11.5668 7.98896 11.8125 9.04506C9.85461 8.94689 7.93922 8.43826 6.19056 7.55218C4.4419 6.66609 2.89903 5.42233 1.662 3.90156C1.03401 4.98619 0.842361 6.26916 1.12597 7.48996C1.40958 8.71076 2.14718 9.77786 3.189 10.4746C2.40831 10.448 1.64478 10.2384 0.96 9.86256V9.93006C0.961346 11.0663 1.35496 12.1672 2.07431 13.0467C2.79366 13.9262 3.79462 14.5304 4.908 14.7571C4.48539 14.8735 4.04884 14.9315 3.6105 14.9296C3.30148 14.9305 2.99307 14.9019 2.6895 14.8441C3.00418 15.8221 3.61691 16.6773 4.44187 17.2898C5.26683 17.9022 6.2627 18.2413 7.29 18.2596C5.54483 19.6303 3.3891 20.3737 1.17 20.3701C0.778981 20.3717 0.388235 20.3492 0 20.3026C2.25227 21.7385 4.86795 22.5009 7.539 22.5001Z"
                                        fill="#FAFAFD" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    class="mr-6" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.9245 2.163H12.0015C15.2055 2.163 15.585 2.1735 16.8495 2.232C18.0195 2.2845 18.6555 2.481 19.0785 2.6445C19.638 2.862 20.0385 3.123 20.4585 3.543C20.8785 3.963 21.138 4.362 21.3555 4.923C21.5205 5.3445 21.7155 5.9805 21.768 7.1505C21.8265 8.415 21.8385 8.7945 21.8385 11.997C21.8385 15.1995 21.8265 15.5805 21.768 16.845C21.7155 18.015 21.519 18.6495 21.3555 19.0725C21.1631 19.5935 20.856 20.0647 20.457 20.451C20.037 20.871 19.638 21.1305 19.077 21.348C18.657 21.513 18.021 21.708 16.8495 21.762C15.585 21.819 15.2055 21.8325 12.0015 21.8325C8.7975 21.8325 8.4165 21.819 7.152 21.762C5.982 21.708 5.3475 21.513 4.9245 21.348C4.40325 21.1559 3.93169 20.8494 3.5445 20.451C3.14513 20.0641 2.83758 19.5925 2.6445 19.071C2.481 18.6495 2.2845 18.0135 2.232 16.8435C2.175 15.579 2.163 15.1995 2.163 11.994C2.163 8.79 2.175 8.412 2.232 7.1475C2.286 5.9775 2.481 5.3415 2.646 4.9185C2.8635 4.359 3.1245 3.9585 3.5445 3.5385C3.9645 3.1185 4.3635 2.859 4.9245 2.6415C5.3475 2.4765 5.982 2.2815 7.152 2.2275C8.259 2.1765 8.688 2.1615 10.9245 2.16V2.163ZM17.8554 4.26461C18.0301 4.19225 18.2174 4.155 18.4065 4.155C18.7884 4.155 19.1547 4.30671 19.4247 4.57677C19.6948 4.84682 19.8465 5.21309 19.8465 5.595C19.8465 5.97691 19.6948 6.34318 19.4247 6.61323C19.1547 6.88329 18.7884 7.035 18.4065 7.035C18.2174 7.035 18.0301 6.99775 17.8554 6.92539C17.6807 6.85302 17.522 6.74695 17.3883 6.61323C17.2545 6.47952 17.1485 6.32077 17.0761 6.14606C17.0037 5.97135 16.9665 5.7841 16.9665 5.595C16.9665 5.4059 17.0037 5.21864 17.0761 5.04394C17.1485 4.86923 17.2545 4.71048 17.3883 4.57677C17.522 4.44305 17.6807 4.33698 17.8554 4.26461ZM9.61347 6.27921C10.3723 5.97523 11.1841 5.82525 12.0015 5.838C13.6193 5.86324 15.1623 6.52363 16.2975 7.67662C17.4326 8.82962 18.0689 10.3827 18.0689 12.0007C18.0689 13.6188 17.4326 15.1719 16.2975 16.3249C15.1623 17.4779 13.6193 18.1383 12.0015 18.1635C11.1841 18.1763 10.3723 18.0263 9.61347 17.7223C8.85459 17.4183 8.16377 16.9664 7.58123 16.3929C6.99868 15.8193 6.53605 15.1356 6.22026 14.3816C5.90448 13.6276 5.74185 12.8182 5.74185 12.0007C5.74185 11.1833 5.90448 10.3739 6.22026 9.61989C6.53605 8.86585 6.99868 8.18216 7.58123 7.60863C8.16377 7.03511 8.85459 6.58319 9.61347 6.27921Z"
                                        fill="#FAFAFD" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 0C8.7435 0 8.334 0.015 7.0545 0.072C5.775 0.132 4.9035 0.333 4.14 0.63C3.33914 0.931229 2.61374 1.40374 2.0145 2.0145C1.40411 2.61404 0.931661 3.33936 0.63 4.14C0.333 4.902 0.1305 5.775 0.072 7.05C0.015 8.3325 0 8.7405 0 12.0015C0 15.2595 0.015 15.6675 0.072 16.947C0.132 18.225 0.333 19.0965 0.63 19.86C0.9375 20.649 1.347 21.318 2.0145 21.9855C2.6805 22.653 3.3495 23.064 4.1385 23.37C4.9035 23.667 5.7735 23.8695 7.0515 23.928C8.3325 23.985 8.7405 24 12 24C15.2595 24 15.666 23.985 16.947 23.928C18.2235 23.868 19.098 23.667 19.8615 23.37C20.6618 23.0686 21.3867 22.5961 21.9855 21.9855C22.653 21.318 23.0625 20.649 23.37 19.86C23.6655 19.0965 23.868 18.225 23.928 16.947C23.985 15.6675 24 15.2595 24 12C24 8.7405 23.985 8.3325 23.928 7.0515C23.868 5.775 23.6655 4.902 23.37 4.14C23.0684 3.33934 22.5959 2.61401 21.9855 2.0145C21.3864 1.40351 20.661 0.930968 19.86 0.63C19.095 0.333 18.222 0.1305 16.9455 0.072C15.6645 0.015 15.258 0 11.997 0H12ZM10.9245 2.163H12.0015C15.2055 2.163 15.585 2.1735 16.8495 2.232C18.0195 2.2845 18.6555 2.481 19.0785 2.6445C19.638 2.862 20.0385 3.123 20.4585 3.543C20.8785 3.963 21.138 4.362 21.3555 4.923C21.5205 5.3445 21.7155 5.9805 21.768 7.1505C21.8265 8.415 21.8385 8.7945 21.8385 11.997C21.8385 15.1995 21.8265 15.5805 21.768 16.845C21.7155 18.015 21.519 18.6495 21.3555 19.0725C21.1631 19.5935 20.856 20.0647 20.457 20.451C20.037 20.871 19.638 21.1305 19.077 21.348C18.657 21.513 18.021 21.708 16.8495 21.762C15.585 21.819 15.2055 21.8325 12.0015 21.8325C8.7975 21.8325 8.4165 21.819 7.152 21.762C5.982 21.708 5.3475 21.513 4.9245 21.348C4.40325 21.1559 3.93169 20.8494 3.5445 20.451C3.14513 20.0641 2.83758 19.5925 2.6445 19.071C2.481 18.6495 2.2845 18.0135 2.232 16.8435C2.175 15.579 2.163 15.1995 2.163 11.994C2.163 8.79 2.175 8.412 2.232 7.1475C2.286 5.9775 2.481 5.3415 2.646 4.9185C2.8635 4.359 3.1245 3.9585 3.5445 3.5385C3.9645 3.1185 4.3635 2.859 4.9245 2.6415C5.3475 2.4765 5.982 2.2815 7.152 2.2275C8.259 2.1765 8.688 2.1615 10.9245 2.16V2.163Z"
                                        fill="#FAFAFD" />
                                    <path
                                        d="M12.0015 7.9995C13.0625 7.9995 14.08 8.42098 14.8303 9.17122C15.5805 9.92146 16.002 10.939 16.002 12C16.002 13.061 15.5805 14.0785 14.8303 14.8288C14.08 15.579 13.0625 16.0005 12.0015 16.0005C10.9405 16.0005 9.92296 15.579 9.17272 14.8288C8.42248 14.0785 8.001 13.061 8.001 12C8.001 10.939 8.42248 9.92146 9.17272 9.17122C9.92296 8.42098 10.9405 7.9995 12.0015 7.9995Z"
                                        fill="#FAFAFD" />
                                </svg>
                            </a>
                        </div>
                        <p class="mt-5 text-base font-normal text-light-3">
                            2021 &nbsp; All rights reserved.
                        </p>
                    </div>

                    <div class="text-xl md:col-span-4 lg:col-span-2">
                        <div class="mb-4 font-bold text-light-3">
                            Payments
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                Collections
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                Conversions
                            </a>
                        </div>
                    </div>

                    <div class="text-xl md:col-span-4 lg:col-span-2">
                        <div class="mb-4 font-bold text-light-3">
                            Resources
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                Blog
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                FAQ
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                Partnerships
                            </a>
                        </div>
                    </div>

                    <div class="text-xl md:col-span-4 lg:col-span-2">
                        <div class="mb-4 font-bold text-light-3">
                            Our Company
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                About Us
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                Careers
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="" class="font-normal text-light-3">
                                News & Media
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>
