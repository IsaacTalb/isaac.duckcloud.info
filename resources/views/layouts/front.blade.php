<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Isaac Talb')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <!-- Google Ads by Site for isaac.duckcloud.info -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3157572406863018"
     crossorigin="anonymous"></script>
    <!-- Google ads end -->

    <!-- amp ads -->
    <script async custom-element="amp-auto-ads"
            src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
    <!-- amp ads end -->
    @yield('styles')

    <script>
        // Detect right-click event
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault(); // Prevent default behavior
            alert("Right-clicking is disabled on this website.");
        });
        // Detect keyboard shortcut for inspecting elements (Ctrl+Shift+I or F12)
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.shiftKey && e.keyCode === 73)) { // Ctrl+Shift+I
            alert("Inspecting is disabled on this website.");
            return false;
            }
            if (e.keyCode === 123) { // F12
            alert("Inspecting is disabled on this website.");
            return false;
            }
        };

        // Prevent right-click context menu
        document.addEventListener('contextmenu', function(event) {
            // Check if the clicked element is not a button or a link
            if (!event.target.matches('button, a')) {
            event.preventDefault(); // Prevent default behavior
            }
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/678090fcaf5bfec1dbe9895c/1ih73cnkj';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script--> 
</head>
<body class="font-sans antialiased bg-gray-100" style="-webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;">
    <header class="bg-gradient-to-r from-black to-gray-400 text-white p-4">
        <nav class="nav-for-mobile max-w-7xl mx-auto flex justify-between lg:hidden">
            <button id="menu-toggle" class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-600 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0V15z"/></svg>
            </button>
            <a href="{{ route('home') }}" class="mobile-isaac text-xl font-bold">Isaac</a>
        </nav>
        <nav class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-6 lg:text-sm">
            <div class="lg:hidden">
                <a href="{{ route('about') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">About</a>
                <a href="{{ route('blog.index') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Blog</a>
                <a href="{{ route('contact') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Contact</a>
                <a href="{{ route('free-chat-ai.index') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Free AI Tools</a>
                <a href="{{ route('top20.index') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Small Projects</a>
            </div>
        </nav>
        <nav id="menu" class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-6 lg:text-sm ml-4 mr-4">
            <a href="{{ route('home') }}" class="block lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Home</a>
            <div class="flex-1"></div>
            <a href="{{ route('about') }}" class="block lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">About</a>
            <a href="{{ route('blog.index') }}" class="block lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Blog</a>
            <a href="{{ route('contact') }}" class="block lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Contact</a>
            <a href="{{ route('free-chat-ai.index') }}" class="block lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Free AI Tools</a>
            <a href="{{ route('top20.index') }}" class="block lg:inline-block lg:mt-0 hover:bg-gray-700 hover:text-white px-4 py-2 rounded">Top 20 Projects</a>
        </nav>
        <button id="exit-toggle" class="hidden lg:hidden lg:flex lg:items-center lg:w-auto lg:space-x-6 lg:text-sm absolute top-4 right-4">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Exit</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </button>
    </header>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('hidden');
            document.getElementById('exit-toggle').classList.toggle('hidden');
            document.getElementsByClassName('mobile-isaac')[0].classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
            document.querySelector('.nav-for-mobile').style.marginBottom = '1.5rem';
        });
        document.getElementById('exit-toggle').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('hidden');
            document.getElementById('exit-toggle').classList.toggle('hidden');
            document.getElementsByClassName('mobile-isaac')[0].classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
            document.querySelector('.nav-for-mobile').style.marginBottom = 'auto';
        });
    </script>
    <main class="py-6">
        @yield('content')
    </main>
    <footer class="bg-gradient-to-b from-black to-gray-400 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Navigation Links -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center sm:text-center lg:text-center flex flex-col sm:flex-row lg:flex-row items-center sm:items-start lg:items-start">
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 uppercase">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-gray-300 transition-colors">About</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-gray-300 transition-colors">Blogs</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-gray-300 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 uppercase">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="https://isaac-talb.tawk.help/" target="_blank" class="hover:text-gray-300 transition-colors">Help Center</a></li>
                        <li><a href="https://isaac-talb.tawk.help/category/freelancing-services" target="_blank" class="hover:text-gray-300 transition-colors">Freelancing Services</a></li>
                        <li><a href="https://isaac-talb.tawk.help/category/frequently-asked-questions" target="_blank" class="hover:text-gray-300 transition-colors">FAQs</a></li>
                    </ul>
                </div>

                <!-- Contact Me -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 uppercase">Contact Me</h3>
                    <ul class="space-y-2">
                        <li><a href="mailto:isaac@duckcloud.info" target="_blank" class="hover:text-gray-300 transition-colors">Gmail</a></li>
                        <li><a href="https://github.com/IsaacTalb" target="_blank" class="hover:text-gray-300 transition-colors">GitHub</a></li>
                        <li><a href="https://www.linkedin.com/in/isaac-talb/" target="_blank" class="hover:text-gray-300 transition-colors">LinkedIn</a></li>
                    </ul>
                </div>

                <!-- Projects -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 uppercase">Projects</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('top20.index') }}" target="_blank" class="hover:text-gray-300 transition-colors">Top 20 Frontend Projects</a></li>
                        <li><a href="{{ route('top20.todo') }}" target="_blank" class="hover:text-gray-300 transition-colors">To Do List</a></li>
                        <li><a href="{{ route('top20.calculator') }}" target="_blank" class="hover:text-gray-300 transition-colors">Calculator</a></li>
                        <li><a href="{{ route('free-chat-ai.index') }}" target="_blank" class="hover:text-gray-300 transition-colors">Free-Chat-AI</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Icons -->
            <div class="mt-8 flex justify-center space-x-6">
                <a href="mailto:isaac@duckcloud.info" target="_blank" aria-label="Gmail" class="hover:text-gray-300 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 20H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2zM4 6v12h16V6l-8 5-8-5z"></path>
                    </svg>
                </a>
                <a href="https://github.com/IsaacTalb" target="_blank" aria-label="GitHub" target="_blank" class="hover:text-gray-300 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.11.82-.258.82-.577v-2.234c-3.338.725-4.033-1.415-4.033-1.415-.546-1.387-1.333-1.757-1.333-1.757-1.087-.744.083-.729.083-.729 1.205.085 1.838 1.234 1.838 1.234 1.07 1.834 2.807 1.304 3.495.997.107-.775.418-1.304.76-1.604-2.665-.306-5.466-1.333-5.466-5.931 0-1.31.469-2.381 1.235-3.221-.123-.306-.535-1.54.117-3.213 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.398 3.003-.403 1.02.005 2.047.137 3.006.403 2.292-1.552 3.299-1.23 3.299-1.23.653 1.673.241 2.907.118 3.213.768.84 1.235 1.911 1.235 3.221 0 4.61-2.805 5.621-5.475 5.921.429.37.81 1.1.81 2.219v3.293c0 .319.217.688.824.573C20.565 22.092 24 17.593 24 12.297 24 5.67 18.627.297 12 .297z"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/isaac-talb/" target="_blank" aria-label="LinkedIn" target="_blank" class="hover:text-gray-300 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.327-.025-3.038-1.852-3.038-1.854 0-2.137 1.45-2.137 2.947v5.66h-3.554V9h3.413v1.561h.047c.476-.9 1.635-1.852 3.366-1.852 3.599 0 4.265 2.367 4.265 5.455v6.288zM5.337 7.433c-1.145 0-2.073-.928-2.073-2.073s.928-2.073 2.073-2.073c1.144 0 2.073.928 2.073 2.073s-.929 2.073-2.073 2.073zm1.778 13.019H3.558V9h3.557v11.452z"></path>
                    </svg>
                </a>
            </div>

            <!-- Footer Bottom -->
            <div class="mt-8 text-center text-sm border-t border-gray-700 pt-4">
                &copy; {{ date('Y') }} Isaac Talb Portfolio. All Rights Reserved.
            </div>
        </div>
    </footer>

    @stack('scripts')
    
</body>
</html>

