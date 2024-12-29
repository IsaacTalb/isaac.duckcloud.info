@extends('layouts.front')

@section('title', 'About Me')

@section('styles')
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <style>
        /* Mac TerminalTabs */
        @keyframes blinkCursor {
        50% {
            border-right-color: transparent;
        }
        }

        @keyframes typeAndDelete {
        0%,
        10% {
            width: 0;
        }
        45%,
        55% {
            width: 6.2em;
        } /* adjust width based on content */
        90%,
        100% {
            width: 0;
        }
        }

        .terminal-loader {
        border: 0.1em solid #333;
        background-color: #1a1a1a;
        color: #0f0;
        font-family: "Courier New", Courier, monospace;
        font-size: 1em;
        padding: 2em 1em;
        width: 90%;
        max-width: 40em;
        margin: 1em auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        position: relative;
        overflow: hidden;
        box-sizing: border-box;
        }

        .terminal-header {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1.5em;
        background-color: #333;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        padding: 0 0.4em;
        box-sizing: border-box;
        }

        .terminal-controls {
            display: flex;
            gap: 0.4em;
        }

        .control {
            width: 0.6em;
            height: 0.6em;
            border-radius: 50%;
            background-color: #777;
        }

        .control.close {
        background-color: #e33;
        }

        .control.minimize {
        background-color: #ee0;
        }

        .control.maximize {
        background-color: #0b0;
        }

        .terminal-title {
        color: #eee;
        }

        .text {
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        color: #fff;
        border-right: 0.2em solid gray; /* Cursor */
        animation: typeAndDelete 4s steps(11) infinite,
            blinkCursor 0.5s step-end infinite alternate;
        }

        @media (min-width: 768px) { /* Tablet */
            .terminal-loader {
                font-size: 1.1em;
            }
            .text {
                font-size: 1.2rem;
            }
        }

        @media (min-width: 1024px) { /* Laptop */
            .terminal-loader {
                padding: 2.5em 2em;
                font-size: 1.2em;
            }
            .text {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 1280px) { /* Desktop */
            .terminal-loader {
                padding: 3em 2.5em;
            }
            .text {
                font-size: 2rem;
            }
        }


        /* UI button for Read my Stories */
        .ui-btn {
        --btn-default-bg: #ffffff;
        --btn-padding: 15px 20px;
        --btn-hover-bg: rgb(77, 77, 77);
        --btn-transition: .3s;
        --btn-letter-spacing: .1rem;
        --btn-animation-duration: 1.2s;
        --btn-shadow-color: rgba(0, 0, 0, 0.137);
        --btn-shadow: 0 2px 10px 0 var(--btn-shadow-color);
        --hover-btn-color: #2E865F;
        --default-btn-color: #010314;
        --font-size: 16px;
        /* 👆 this field should not be empty */
        --font-weight: 600;
        --font-family: Menlo,Roboto Mono,monospace;
        }

        /* button settings 👆 */

        .ui-btn {
        box-sizing: border-box;
        padding: var(--btn-padding);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--default-btn-color);
        font: var(--font-weight) var(--font-size) var(--font-family);
        background: var(--btn-default-bg);
        cursor: pointer;
        transition: var(--btn-transition);
        overflow: hidden;
        box-shadow: var(--btn-shadow);
        border-radius: 10px;
        border: 2px solid #2A2B3A;
        }

        .ui-btn span {
        letter-spacing: var(--btn-letter-spacing);
        transition: var(--btn-transition);
        box-sizing: border-box;
        position: relative;
        background: inherit;
        }

        .ui-btn span::before {
        box-sizing: border-box;
        position: absolute;
        content: "";
        background: inherit;
        }

        .ui-btn:hover, .ui-btn:focus {
        background: var(--btn-default-bg);
        box-shadow: 0px 0px 10px 0px rgba(119, 68, 255, 0.70);
        border: 2px solid #010314;
        ;
        }

        .ui-btn:hover span, .ui-btn:focus span {
        color: var(--hover-btn-color);
        }

        .ui-btn:hover span::before, .ui-btn:focus span::before {
        animation: chitchat linear both var(--btn-animation-duration);
        }

        @keyframes chitchat {
        0% {
        content: "#";
        }

        5% {
        content: ".";
        }

        10% {
        content: "^{";
        }

        15% {
        content: "-!";
        }

        20% {
        content: "#$_";
        }

        25% {
        content: "№:0";
        }

        30% {
        content: "#{+.";
        }

        35% {
        content: "@}-?";
        }

        40% {
        content: "?{4@%";
        }

        45% {
        content: "=.,^!";
        }

        50% {
        content: "?2@%";
        }

        55% {
        content: "\;1}]";
        }

        60% {
        content: "?{%:%";
        right: 0;
        }

        65% {
        content: "|{f[4";
        right: 0;
        }

        70% {
        content: "{4%0%";
        right: 0;
        }

        75% {
        content: "'1_0<";
        right: 0;
        }

        80% {
        content: "{0%";
        right: 0;
        }

        85% {
        content: "]>'";
        right: 0;
        }

        90% {
        content: "4";
        right: 0;
        }

        95% {
        content: "2";
        right: 0;
        }

        100% {
        content: "";
        right: 0;
        }
        }
    </style>

@endsection

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <!-- Mac Terminal Tabs -->
    <div class="terminal-loader mx-auto">
        <div class="terminal-header flex justify-between items-center px-4 py-2">
            <div class="terminal-title text-sm text-gray-300">About Me</div>
            <div class="terminal-controls flex space-x-2">
                <div class="control close"></div>
                <div class="control minimize"></div>
                <div class="control maximize"></div>
            </div>
        </div>
        <div class="text text-lg md:text-xl lg:text-2xl xl:text-3xl mt-6">
            Hello ....
        </div>
        <p class="text-para text-base md:text-lg lg:text-xl font-light px-6 mb-6 text-white animate__animated animate__fadeIn animate__delay-1s">
            I am Isaac Talb, a passionate developer and innovator working on portfolio and eCommerce projects. With a track record of impactful solutions, I aim to shape the future of technology.
        </p>
        <div class="flex justify-center mt-6 animate__animated animate__fadeIn animate__delay-2s">
            <a href="{{ route('blog.index') }}" class="ui-btn bg-white text-blue-600 px-6 py-3 text-base md:text-lg underline">
                <span>Read my Blogs</span>
            </a>
        </div>
    </div>


    <!-- Hero Section -->
    <!-- <div class="text-center py-16 bg-gradient-to-r from-teal-500 to-blue-600 text-white rounded-lg mb-12">
        <h1 class="text-5xl font-bold mb-4 animate__animated animate__fadeIn">About Me</h1>
        <p class="text-lg font-light px-6 mb-6 animate__animated animate__fadeIn animate__delay-1s">
            I am Isaac Talb, a passionate developer and innovator working on portfolio and eCommerce projects. With a track record of impactful solutions, I aim to shape the future of technology.
        </p>
    </div> -->

    <!-- About Sections -->
    <div class="space-y-16">
        @foreach ($contents as $content)
            <div class="home-section p-6 bg-white shadow-lg rounded-lg">
                <div class="relative flex flex-col items-stretch bg-white rounded-lg shadow overflow-hidden">
                    <div class="flex-1 overflow-y-auto">
                        <img src="{{ asset('storage/' . $content->image) }}" class="object-cover w-full h-full" alt="{{ $content->section_title }}">
                    </div>
                    <div class="absolute inset-0 z-10 bg-gradient-to-t from-black"></div>
                    <div class="absolute inset-x-0 bottom-0 z-20 p-4 overflow-y-auto">
                        <div class="bg-gray-900/40 rounded-lg p-4">
                            <p class="mb-1 text-xs sm:text-sm md:text-base lg:text-lg text-white text-opacity-80">Isaac Talb • <time>{{ $content->created_at->format('M d, Y') }}</time></p>
                            <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-medium text-white">{!! $content->section_title !!}</h3>
                            <div class="text-white text-base md:text-lg lg:text-xl">
                                {!! Str::limit($content->section_content, 400) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Duck Cloud Section -->
    <div class="space-y-16 mt-16">
        <div class="home-section p-6 bg-white shadow-lg rounded-lg">
            <div class="space-y-4">
                <h2 class="text-4xl font-bold text-gray-800">My Latest Venture: Duck Cloud</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    I recently founded **Duck Cloud**, a platform dedicated to innovative digital solutions. Our core team is a diverse group of talented individuals:
                </p>
                <ul class="list-disc list-inside text-gray-600">
                    <li><strong>Thern Thy</strong>: PHP Specialist with expertise in movie website development and server management.</li>
                    <li><strong>Phyo Myint Mo</strong>: UI/UX Designer who brings intuitive and aesthetic designs to life.</li>
                    <li><strong>Harry Hein</strong>: Frontend Developer with mastery in HTML, CSS, TailwindCSS, and JavaScript.</li>
                </ul>
                <p class="mt-4">
                    Explore more about us on our official site: <a href="https://www.duckcloud.info" class="text-teal-500 hover:underline">www.duckcloud.info</a>.
                </p>
            </div>
        </div>
    </div>

    <!-- amp ads -->
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-3157572406863018">
    </amp-auto-ads>
    <!-- amp ads end -->

    <!-- Team Section -->
    <div class="mt-16">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8 animate__animated animate__fadeIn">Meet My Team</h2>
        <div id="team-slider" class="relative overflow-hidden">
            <div class="flex transition-transform duration-500" id="team-slider-inner">
                <!-- Team Member Cards -->
                <div class="min-w-full p-6 bg-white rounded-lg shadow-lg text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/img/dc_team/thy.jpg') }}" alt="Thern Thy" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-800">Thern Thy</h3>
                    <p class="text-gray-600">PHP Specialist</p>
                    <p class="text-gray-600 mt-4">Expert in server management and dynamic web solutions with years of experience in the tech industry.</p>
                </div>
                <div class="min-w-full p-6 bg-white rounded-lg shadow-lg text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/img/dc_team/phyo_myint_mo.jpg') }}" alt="Phyo Myint Mo" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-800">Phyo Myint Mo</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                    <p class="text-gray-600 mt-4">Crafts intuitive designs that balance functionality and aesthetics for exceptional user experiences.</p>
                </div>
                <div class="min-w-full p-6 bg-white rounded-lg shadow-lg text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/img/dc_team/hein.jpg') }}" alt="Harry Hein" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-800">Harry Hein</h3>
                    <p class="text-gray-600">Frontend Developer</p>
                    <p class="text-gray-600 mt-4">Specialist in creating responsive and interactive user interfaces using modern frameworks.</p>
                </div>
            </div>
            <!-- Navigation Dots -->
            <div class="flex justify-center gap-2 mt-4">
                <button class="w-3 h-3 rounded-full bg-gray-400 hover:bg-teal-500" data-slide="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-400 hover:bg-teal-500" data-slide="1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-400 hover:bg-teal-500" data-slide="2"></button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sliderInner = document.getElementById('team-slider-inner');
            const dots = document.querySelectorAll('[data-slide]');
            const totalSlides = dots.length;

            let currentSlide = 0;
            let slideDirection = 1; // 1 for forward, -1 for backward

            // Function to move to a specific slide
            function goToSlide(slideIndex) {
                sliderInner.style.transform = `translateX(-${slideIndex * 100}%)`;
                dots.forEach(d => d.classList.remove('bg-teal-500'));
                dots[slideIndex].classList.add('bg-teal-500');
            }

            // Event listener for dots
            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    currentSlide = parseInt(dot.getAttribute('data-slide'));
                    slideDirection = 1; // Reset direction to forward on manual change
                    goToSlide(currentSlide);
                });
            });

            // Auto-slide functionality
            function autoSlide() {
                currentSlide += slideDirection;

                if (currentSlide === totalSlides) {
                    slideDirection = -1; // Switch to backward
                    currentSlide = totalSlides - 2; // Step back one slide
                } else if (currentSlide < 0) {
                    slideDirection = 1; // Switch to forward
                    currentSlide = 1; // Step forward one slide
                }

                goToSlide(currentSlide);
            }

            // Initialize auto-slide
            let autoSlideInterval = setInterval(autoSlide, 2000);

            // Default to the first slide
            goToSlide(0);
        });
    </script>
@endpush