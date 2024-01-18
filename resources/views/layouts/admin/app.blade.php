<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taman Herbal</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"
        integrity="sha512-aNMyYYxdIxIaot0Y1/PLuEu3eipGCmsEUBrUq+7aVyPGMFH8z0eTP0tkqAvv34fzN6z+201d3T8HPb1svWSKHQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    brightness: {
                        40: '.40'
                    }

                }
            }
        }
    </script>

    <style>
        body {
            font-family: "Balsamiq Sans", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .title {
            font-family: "Fredoka", sans-serif !important;
            font-weight: 800 !important;
        }

        .main,
        .header {
            position: relative;
            z-index: 2;
        }

        .lingkaran {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #CDA63C;
            position: absolute;
            z-index: 1;
        }

        .satu {
            inset: 460px 10px;
        }

        .dua {
            inset: 520px 10px;
        }

        .oval {
            position: absolute;
            inset: 50px -65px;
            width: 200px;
            height: 400px;
            border-radius: 50% / 50%;
            z-index: 1;
            background-color: #B9CD3C;
        }

        .loader-overlay {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(255, 255, 255);
            z-index: 1000;
            transition: opacity 0.3s ease;
            pointer-events: none;
            /* Allows interaction with elements behind the loader */
        }

        @layer components {
            .loader {
                --size: 24px;
                --distance: 100px;
                --xturns: 1turn;
                --yturns: 1turn;
                --duration: 9s;
            }

            .loader,
            .loader::before,
            .loader::after {
                content: '';
                position: absolute;
                top: calc(50% - var(--size)*0.5);
                left: calc(50% - var(--size)*0.5);
                width: var(--size);
                height: var(--size);
                border-radius: 50%;
                background: black;
            }

            .loader {
                transform-style: preserve-3d;
                animation: figure-eight var(--duration) linear infinite;
                --xturns-neg: calc(var(--xturns) * -1);
                --yturns-neg: calc(var(--yturns) * -1);
            }

            .loader::before,
            .loader::after {
                animation:
                    figure-eight-invert var(--duration) linear infinite,
                    figure-eight var(--duration) linear infinite;
                animation-composition: add;
            }

            .loader::before {
                animation-delay: 0s, calc(var(--duration) * -0.333333)
            }

            .loader::after {
                animation-delay: 0s, calc(var(--duration) * -0.666666)
            }

            @keyframes figure-eight {
                from {
                    transform:
                        rotateX(var(--xturns)) rotateY(var(--yturns)) translateZ(var(--distance)) rotateY(var(--yturns-neg)) rotateX(var(--xturns-neg))
                }

                to {
                    transform:
                        rotateX(var(--xturns-neg)) rotateY(var(--yturns-neg)) translateZ(var(--distance)) rotateY(var(--yturns)) rotateX(var(--xturns))
                }
            }

            @keyframes figure-eight-invert {
                from {
                    transform:
                        rotateX(var(--xturns-neg)) rotateY(var(--yturns-neg)) translateZ(var(--distance)) rotateY(var(--yturns)) rotateX(var(--xturns))
                }

                to {
                    transform:
                        rotateX(var(--xturns)) rotateY(var(--yturns)) translateZ(var(--distance)) rotateY(var(--yturns-neg)) rotateX(var(--xturns-neg))
                }
            }

            @property --size {
                syntax: "<length>";
                inherits: true;
                initial-value: 0px;
            }

            @property --distance {
                syntax: "<length>";
                inherits: true;
                initial-value: 0px;
            }

            @property --xturns {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --yturns {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --xturns-neg {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --yturns-neg {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --duration {
                syntax: "<time>";
                inherits: true;
                initial-value: 0s;
            }
        }
    </style>
</head>

<body class="relative font-sans">
    <header class="w-full header">
        <nav class="bg-[#3D7C17] py-3 px-8">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <div class="flex items-center">
                    <div class="flex flex-col items-left">
                        <div class="title">
                            <div class="text-lg text-[#fff] leading-6 pl-12 pr-2">Taman Herbal Desa</div>
                            <div class="text-s text-[#fff] leading-6 pl-12 pr-2">Desa Rukti Endah</div>
                        </div>
                    </div>
                </div>
                <button data-collapse-toggle="mobile-menu" type="button"
                    class="lg:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden lg:block w-full md:w-auto" id="mobile-menu">
                    <ul class="flex-col md:flex-row flex md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="/admin/dashboard"
                                class="bg-[#3D7C17] hover:text-[#FFF100] md:bg-transparent {{ Route::currentRouteName() == 'dashboard' ? 'text-white bg-[#3D7C17] text-sm' : 'text-white text-sm' }} rounded lg:bg-transparent  {{ Route::currentRouteName() == 'dashboard' ? 'lg:text-[#FFF100]' : 'lg:text-grey-700' }} block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">Beranda</a>
                        </li>
                        <li>
                            <a href="/admin/tanaman"
                                class="bg-[#3D7C17] hover:text-[#FFF100] md:bg-transparent {{ Route::currentRouteName() == 'tanaman' ? 'text-white bg-[#3D7C17] text-sm' : 'text-white text-sm' }} rounded lg:bg-transparent  {{ Route::currentRouteName() == 'tanaman' ? 'lg:text-[#FFF100]' : 'lg:text-grey-700' }} block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">Tanaman</a>
                        </li>
                        <li>
                            <a href="/admin/pengelolaan"
                                class="bg-[#3D7C17] hover:text-[#FFF100] md:bg-transparent {{ Route::currentRouteName() == 'pengelolaan' ? 'text-white bg-[#3D7C17] text-sm' : 'text-white text-sm' }} rounded lg:bg-transparent  {{ Route::currentRouteName() == 'pengelolaan' ? 'lg:text-[#FFF100]' : 'lg:text-grey-700' }} block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">Pengelolaan</a>
                        </li>
                        <li>
                            <a href="/admin/dokumentasi"
                                class="bg-[#3D7C17] hover:text-[#FFF100] md:bg-transparent {{ Route::currentRouteName() == 'dokumentasi' ? 'text-white bg-[#3D7C17] text-sm' : 'text-white text-sm' }} rounded lg:bg-transparent  {{ Route::currentRouteName() == 'dokumentasi' ? 'lg:text-[#FFF100]' : 'lg:text-grey-700' }} block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">Dokumentasi</a>
                        </li>

                    </ul>

                </div>
                <div class="items-center space-x-4 lg:flex">
                    <a href="/logout"
                        class="bg-[#3D7C17] hover:text-[#FFF100] md:bg-transparent {{ Route::currentRouteName() == 'keluar' ? 'text-white bg-[#3D7C17] text-sm' : 'text-white text-md' }} rounded lg:bg-transparent  {{ Route::currentRouteName() == 'masuk' ? 'lg:text-[#FFF100]' : 'lg:text-grey-700' }} block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none font-bold">Keluar</a>
                </div>
            </div>
        </nav>
    </header>


    <!-- Page Content -->
    <section class="bg-white pb-48">
        <div class="main"> @yield('content')</div>
        <div class="bentuk">
            <div class="oval"></div>
            <div class="lingkaran satu"></div>
            <div class="lingkaran dua"></div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-[#B9CD3C]">
        <div class="container mx-auto flex flex-col md:flex-row px-8 lg:gap-12">
            <div class="w-full md:w-1/3 p-7 flex flex-col">
                <h4 class="text-lg font-bold mb-2 text-[#111]">Kontak Kami</h4>
                <div class="text-s text-[#111] w-76 font-bold pb-4">Rukti Endah, Rukti Endah, Kec. Seputih Raman, Kab. Lampung
                    Tengah Prov. Lampung</div>
                <div class="text-xs text-[#111] font-bold">Phone : 082184937668</div>
                <div class="text-xs text-[#111] font-bold">Email : ruktiendah62@gmail.com</div>
            </div>
        </div>
    </footer>
    {{-- move keatas --}}
    <button id="moveToTopBtn" class="hidden fixed bottom-4 right-4 bg-[#434343] text-white p-2 rounded-full shadow-md">
        <svg class="w-6 h-6" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 17a1 1 0 01-1-1V6.414l-4.293 4.293a1 1 0 01-1.414-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 6.414V16a1 1 0 01-1 1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>

    {{-- loader --}}
    <div id="loader-overlay" class="loader-overlay">
        <div class="loader"></div>
    </div>



    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                document.getElementById("loader-overlay").style.opacity = 0;
                setTimeout(() => {
                    document.getElementById("loader-overlay").style.display = "none";
                }, 50);
            }
        };
    </script>
    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            var moveToTopBtn = document.getElementById("moveToTopBtn");

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                moveToTopBtn.style.display = "block";
            } else {
                moveToTopBtn.style.display = "none";
            }
        }

        document.getElementById("moveToTopBtn").onclick = function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            once: true,
            mirror: false,
        });
    </script>
</body>

</html>
