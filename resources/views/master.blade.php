<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tailwind-css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google-font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Saira+Semi+Condensed:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    {{-- meterial tailwind cdn --}}
    

</head>

<body class="font-[Roboto]">
    <header class="bg-[#2f466aff]">
        <nav class="flex justify-between items-center w-11/12 py-2 md:py-3 lg:py-4 mx-auto max-w-screen-xl">
            <a href="{{ route('home') }}" class="logo-part">
                <img class="rounded cursor-pointer" src="{{ asset('frontend/asset') }}/images/basic/ovijat-logo.png"
                    alt="">
            </a>
            <div
                class="menu-part md:static absolute md:bg-transparent bg-gray-900 py-5 justify-center text-center md:min-h-fit min-h-[40vh] left-0 top-[-500%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center gap-5 text-white text-base md:text-sm lg:text-lg ">
                    <li><a class="hover:text-gray-400 border-b-2" href="{{ route('home') }}">Flight</a></li>
                    <li><a class="hover:text-gray-500" href="">Hotel</a></li>
                    <li><a class="hover:text-gray-500" href="{{ route('visa') }}">Visa</a></li>
                    <li><a class="hover:text-gray-500" href="{{ route('umrah') }}">Umrah</a></li>
                    <li><a class="hover:text-gray-500" href="">Tours</a></li>
                    <li><a class="hover:text-gray-500" href="">Special Offers</a></li>
                    <li><a class="hover:text-gray-500" href="">Group Flight</a></li>
                    <li><a class="hover:text-gray-500" href="">Blog</a></li>
                    <li><a class="hover:text-gray-500" href="">Account</a></li>
                </ul>
            </div>
            <div class="account-part flex items-center gap-6">
                <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] hidden lg:flex">Account</button>
                <i onclick="onToggleMenu(this)" class="fa-solid fa-bars text-3xl cursor-pointer md:hidden"></i>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-[#2f466a] mt-5">
        <div id="top-footer-area" class="grid grid-cols-2 justify-between gap-3 md:flex md:justify-between  lg:flex lg:gap-9 lg:justify-between mx-auto max-w-screen-md xl:max-w-screen-xl p-4 py-6">
            <div class="footer-coloum text-white">
                <div class="footer-coloum-header">
                    <h3 class="uppercase font-bold text-sm pb-2">About Us</h3>
                </div>
                <div class="footer-coloum-link flex flex-col gap-y-1">
                    <a href="" class="text-xs"><i class="fa-solid fa-location-arrow rotate-45 mr-2"></i>About
                        us</a>
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Career</a>
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Community</a>
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Relationship</a>
                </div>
            </div>
            <div class="footer-coloum text-white">
                <div class="footer-coloum-header">
                    <h3 class="uppercase font-bold text-sm pb-2">Contact Us</h3>
                </div>
                <div class="footer-coloum-link flex flex-col gap-y-1">
                    <a href="" class="text-xs"><i class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Rokeya
                        Mansion,
                        Naya Paltan, Dhaka-1000.</a>
                    <a href="" class="text-xs"><i class="fa-solid fa-location-arrow rotate-45 mr-2"></i>+880 1722
                        157417</a>
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>ovijatfly@gmail.com</a>
                </div>
            </div>
            <div class="footer-coloum text-white">
                <div class="footer-coloum-header">
                    <h3 class="uppercase font-bold text-sm pb-2">Help & Contact</h3>
                </div>
                <div class="footer-coloum-link flex flex-col gap-y-1">
                    <a href="" class="text-xs"><i class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Terms &
                        Conditions</a>
                    <a href="" class="text-xs"><i class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Payment
                        Method</a>
                    <a href="" class="text-xs"><i class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Refund
                        Policy</a>
                    <a href="" class="text-xs"><i class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Privacy
                        Policy</a>
                </div>
            </div>
            <div class="footer-coloum text-white">
                <div class="footer-coloum-header">
                    <h3 class="uppercase font-bold text-sm pb-2">News & Media</h3>
                </div>
                <div class="footer-coloum-link flex flex-col gap-y-1">
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Facebook</a>
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Instagram</a>
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Twitter</a>
                    <a href="" class="text-xs"><i
                            class="fa-solid fa-location-arrow rotate-45 mr-2"></i>Linkedin</a>
                </div>
            </div>
        </div>
        <hr class="top-footer-divider border-2 border-[#ff9900]" />
        <div id="middle-footer-area" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 py-6 gap-2 mx-auto max-w-screen-md xl:max-w-screen-xl">
            <div class="left-area flex flex-col">
                <div class="w-full">
                    <fieldset class="border-t-4 border-slate-300">
                        <legend class="mx-auto px-4 text-white text-lg uppercase font-bold">We Accept</legend>
                    </fieldset>
                </div>
                <img class="w-full" src="{{ asset('frontend/asset') }}/images/basic/left-picture.png" alt="">
            </div>
            <div class="middle-area flex items-center justify-center  space-x-8">
                <div class="w-24 h-24 lg:w-48 lg:h-48 bg-green-400 rounded-full relative flex justify-center items-center">
                    <a href="{{ route('home') }}">
                        <img class="rounded-md w-24 lg:w-40" src="{{ asset('frontend/asset') }}/images/basic/ovijat-logo.png" alt="">
                    </a>
                </div>
             </div>
            {{-- <div class="middle-area w-full  flex flex-col items-center">
                <div class="bg-green-400 rounded-full w-[50%] h-[75%] relative">
                    <img class="w-28 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-lg"
                        src="{{ asset('frontend/asset') }}/images/basic/ovijat-logo.png" alt="">
                </div>
                <div class="bg-blue-700 mt-3">
                    <p class="px-3 py-1 font-bold rounded-lg text-[#facc15]">OvijatFly.com</p>
                </div>
            </div> --}}
            <div class="right-area">
                <div class="w-full">
                    <fieldset class="border-t-4 border-slate-300">
                        <legend class="mx-auto px-4 text-white text-lg uppercase font-bold">Certification</legend>
                    </fieldset>
                </div>
                <img class="w-full" src="{{ asset('frontend/asset') }}/images/basic/right-picture.png"
                    alt="">
            </div>
        </div>
        <hr class="top-footer-divider" />
        <div id="button-footer-area" class="text-white flex text-center justify-between mx-auto max-w-screen-md xl:max-w-screen-xl py-4">
            <div id="copyright-area">
                <p class="text-sm">Copyright&copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> - All rights reserved by OvijatTravels
                </p>
            </div>
            <div id="developer-area">
                <p class="text-sm">Developed by Shahabuddin</p>
            </div>
        </div>
    </footer>
    <script>
        function onToggleMenu(element) {
            const navLink = document.querySelector('.menu-part');
            if (element.classList.contains('fa-bars')) {
                element.classList.remove('fa-bars');
                element.classList.add('fa-xmark');
            } else {
                element.classList.add('fa-bars');
                element.classList.remove('fa-xmark');
            }
            navLink.classList.toggle('top-[6%]');
        }
    </script>
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                1336: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
            },
        });
    </script>

    {{-- umrah deatils tab script start --}}
    <script>
        function onToggleMenu(element) {
            const navLink = document.querySelector('.menu-part');
            if (element.classList.contains('fa-bars')) {
                element.classList.remove('fa-bars');
                element.classList.add('fa-xmark');
            } else {
                element.classList.add('fa-bars');
                element.classList.remove('fa-xmark');
            }
            navLink.classList.toggle('top-[12.5%]');
        }
    </script>
    <script>
        let tabs = document.querySelectorAll(".tab")
        let indicator = document.querySelector(".indicator")
        let panels = document.querySelectorAll(".tab-panel")

        indicator.style.width = tabs[0].getBoundingClientRect().width + 'px'
        indicator.style.left = tabs[0].getBoundingClientRect().left - tabs[0].parentElement.getBoundingClientRect().left + 'px'

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                let tabTarget = tab.getAttribute("aria-controls")

                indicator.style.width = tab.getBoundingClientRect().width + 'px'
                indicator.style.left = tab.getBoundingClientRect().left - tab.parentElement.getBoundingClientRect().left + 'px'


                panels.forEach(panel => {
                    let panelId = panel.getAttribute("id")
                    if (tabTarget === panelId) {
                        panel.classList.remove("invisible", "opacity-0")
                        panel.classList.add("visible", "opacity-100")
                    } else {
                        panel.classList.add("invisible", "opacity-0")
                    }
                })
            })
        })
    </script>
</body>

</html>
