@extends('layouts.front')

@section('title', 'Isaac | Home Page')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tippy.js@6.3.7/dist/tippy.css" />
    <style>
    
/* Table of Contents for CSS Comments */
/* #1.1 Swiper CSS */
/* #1.2 Swiper CSS End */
/* #1.3 Reach Out Style */
/* #2.1 Hero Section */
/* #2.2 About Section */
/* #2.3 Services Section */
/* #2.4 Portfolio Section */
/* #2.5 Testimonials Section */
/* #2.6 Contact Section */



/* #1.1 Swiper CSS */

        .swiper-container {
            position: relative; /* Ensure swiper container is positioned relative */
        }

        .swiper-button-next, .swiper-button-prev {
            position: absolute; /* Position buttons absolutely within the swiper */
            top: 50%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for perfect centering */
            z-index: 10; /* Ensure buttons appear above the images */
        }

        .next-arrow, .prev-arrow{
            color: white;
        }

        .swiper-button-next {
            right: 10px; /* Place on the right side */
        }

        .swiper-button-prev {
            left: 10px; /* Place on the left side */
        }

        .swiper-pagination {
            position: absolute; /* Ensure pagination is over the images */
            bottom: 10px;
            left: 0;
            right: 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .swiper-button-next, .swiper-button-prev {
                top: 70%; /* Adjust for smaller screens */
            }
        }

/* 1.2 Swiper CSS End */

/* 1.3 Reach Out Style */
       
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

/* 2.1 Hero Section */

    /* Additional Animations */
    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
    .animate-spin-slow {
        animation: spin-slow 10s linear infinite;
    }
    /* Hover Effects */
    .ui-btn:hover {
        transform: scale(1.05);
    }

/* 2.2 About Section */

/* 2.3 Services Section */

/* 2.4 Portfolio Section */

/* 2.5 Testimonials Section */

    

/* #2.6 Contact Section */

    /* Base Animation Style for Form */
    .active-animation {
        border: 2px dashed transparent;
        position: relative;
        animation: border-dance 1.5s infinite linear;
    }

    .active-animation:before,
    .active-animation:after {
        content: "";
        position: absolute;
        z-index: -1;
        width: calc(100% + 10px);
        height: calc(100% + 10px);
        top: -5px;
        left: -5px;
        background-image: 
            linear-gradient(90deg, #ddd 50%, transparent 50%), 
            linear-gradient(90deg, #ddd 50%, transparent 50%), 
            linear-gradient(0deg, #ddd 50%, transparent 50%), 
            linear-gradient(0deg, #ddd 50%, transparent 50%);
        background-repeat: repeat-x, repeat-x, repeat-y, repeat-y;
        background-size: 10px 2px, 10px 2px, 2px 10px, 2px 10px;
        background-position: left top, right bottom, left bottom, right top;
        animation: border-dance 1.5s infinite linear;
    }

    /* Animated Border Effect */
    @keyframes border-dance {
        0% {
            background-position: left top, right bottom, left bottom, right top;
        }
        100% {
            background-position: left 10px top, right 10px bottom, left bottom 10px, right top 10px;
        }
    }

    /* Enhancements for Inputs */
    input, textarea {
        transition: all 0.3s ease;
    }

    input:focus, textarea:focus {
        transform: scale(1.02);
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }

    /* Submit Button Hover Effects */
    button:hover {
        background-position: right center;
    }


    </style>
@endsection

@section('content')
<div class="max-w-7xl mx-auto p-6">

    <!-- Hero Section -->
    <div class="text-center py-16 bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white rounded-lg mb-12 relative overflow-hidden shadow-lg">
    <!-- Gradient overlay for depth -->
        <div class="absolute inset-0 bg-gradient-to-t from-gray-800 via-gray-700 to-transparent opacity-40"></div>
        <!-- Main Content -->
        <div class="relative z-10">
            <h1 class="text-5xl font-extrabold mb-4 animate__animated animate__fadeInUp">
                Transform Your Digital Journey with Isaac!
            </h1>
            <p class="text-lg font-light px-6 mb-6 animate__animated animate__fadeInUp animate__delay-1s">
                "Isaac Talb is a visionary developer, communicator, and tech enthusiast dedicated to empowering individuals and businesses with impactful solutions. Let’s build the future together!"
            </p>
            <div class="flex justify-center mt-4 animate__animated animate__fadeIn animate__delay-2s">
                <a href="{{ route('contact') }}" class="ui-btn bg-gradient-to-r from-blue-500 to-cyan-400 text-white px-6 py-3 rounded-lg shadow-md hover:shadow-lg hover:from-cyan-400 hover:to-blue-500 transition duration-300">
                    <span>Reach Out</span>
                </a>
            </div>
        </div>
        <!-- Decorative Circles -->
        <div class="absolute -bottom-20 -left-10 w-96 h-96 bg-gradient-to-r from-purple-500 to-purple-700 rounded-full opacity-30 animate-spin-slow"></div>
        <div class="absolute -top-20 -right-10 w-96 h-96 bg-gradient-to-r from-blue-500 to-blue-700 rounded-full opacity-30 animate-spin-slow"></div>
    </div>


    <!-- About Me Section -->
    <div class="mb-16" id="about">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Join My Mission</h2>
        <div class="flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-12 px-4">
            <div class="relative w-full md:w-1/2">
                <img src="https://yt3.googleusercontent.com/ytc/AIdro_k-ow8jwj_n13kt9qM7nzlITi1X_rnznyhBhX-H7WBmmY1J=s900-c-k-c0x00ffffff-no-rj" alt="Isaac Talb" class="rounded-lg shadow-lg transform hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-blue-500 opacity-30 rounded-lg"></div>
            </div>
            <div class="w-full md:w-1/2 text-center md:text-left">
                <p class="text-gray-600 text-lg leading-relaxed">
                    Isaac's passion for innovation and communication:
                    <br><br>
                    "With a background in Media and Communication and expertise in Laravel development, I combine creativity and technical skills to craft solutions that matter. My mission is to help individuals and organizations realize their potential through the power of technology and storytelling."
                </p>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="mb-16" id="services">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">What I Do</h2>
        <p class="text-gray-600 text-lg text-center leading-relaxed max-w-3xl mx-auto mb-8">
            My goal is to bridge the gap between technology and human connection, creating meaningful solutions for today’s challenges.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
            <div class="p-6 bg-white shadow-lg rounded-lg text-center hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 animate__animated animate__fadeInUp">
                <div class="mb-4">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                        <i class="fas fa-code"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4">Crafting Scalable Web Solutions</h3>
                <p class="text-gray-600">I specialize in developing robust, secure, and user-friendly web applications using modern frameworks like Laravel. Whether you’re building an e-commerce platform, a content management system, or an API, I’m here to bring your ideas to life.</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-lg text-center hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="mb-4">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4">Empowering Through Media and Communication</h3>
                <p class="text-gray-600">With a focus on transnational audiences, I craft strategies that resonate. From storytelling to leveraging digital platforms, I help you connect with your audience meaningfully.</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-lg text-center hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="mb-4">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4">Exploring Open-Source Possibilities</h3>
                <p class="text-gray-600">I believe in the power of collaboration and open-source technology. By utilizing free, community-driven tools, I ensure accessible and sustainable solutions for your projects.</p>
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div class="mb-16" id="portfolio">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Recent Updates</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($contents as $content)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Section Title -->
                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-gray-700 mb-2">{!! $content->section_title !!}</h3>
                        <p class="text-gray-600 mb-2">{!! Str::limit(strip_tags($content->section_content), 500) !!}</p>
                        <!-- <p><strong>Created At:</strong> {{ $content->created_at->format('M d, Y h:i A') }}</p> -->
                        <!-- <p><strong>Last Updated:</strong> {{ $content->updated_at->format('M d, Y h:i A') }}</p> -->
                        <p><em>Posted : {{ $content->created_at->diffForHumans() }}</em></p>
                    </div>

                    <!-- Images -->
                    @if ($content->images)
                    <div class="swiper-container w-full max-w-800 mx-auto">
                        <div class="swiper-wrapper">
                            @foreach (json_decode($content->images, true) as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $content->section_title }}" class="w-full h-auto rounded-lg">
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <!-- Next Button -->
                        <div class="swiper-button-next  text-black rounded-full p-3 shadow-lg flex items-center justify-center w-12 h-12">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class=" next-arrow w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6" />
                            </svg>
                        </div>

                        <!-- Prev Button -->
                        <div class="swiper-button-prev  text-black rounded-full p-3 shadow-lg flex items-center justify-center w-12 h-12">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="prev-arrow w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6l-6 6 6 6" />
                            </svg>
                        </div>

                    </div>
                    @endif


                    <!-- Video -->

                    @if ($content->video_url)
                        <div class="relative aspect-w-16 aspect-h-9">
                            <iframe 
                                class="absolute inset-0 w-full h-full" 
                                src="{{ $content->video_url }}" 
                                frameborder="0" 
                                allowfullscreen
                            ></iframe>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="mb-16" id="testimonials">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">What Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 bg-gray-50 shadow-lg rounded-lg">
                <p class="text-gray-600 italic">" Isaac’s technical expertise helped us optimize our backend processes and elevate our user experience. A true professional with an innovative touch. "</p>
                <h4 class="text-gray-800 font-bold mt-4">— Emanuel Johnson, Project Manager</h4>
            </div>
            <div class="p-6 bg-gray-50 shadow-lg rounded-lg">
                <p class="text-gray-600 italic">" Isaac's ability to translate complex requirements into simple, effective solutions is remarkable. He’s a valuable asset to any team. "</p>
                <h4 class="text-gray-800 font-bold mt-4">— Emily Roberts, Founder of Thrive Digital</h4>
            </div>
            <div class="p-6 bg-gray-50 shadow-lg rounded-lg">
                <p class="text-gray-600 italic">" Working with Isaac was a game-changer for our startup. His commitment to delivering top-notch work is truly inspiring. "</p>
                <h4 class="text-gray-800 font-bold mt-4">— Mark Allen, CEO at Bright Futures</h4>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="mb-16" id="contact">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Get in Touch</h2>
        <form 
            action="{{ route('contact.store') }}" 
            method="POST" 
            class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6 relative border-2 border-transparent overflow-hidden active-animation">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Let me know your name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Mail</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Your email address">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-bold mb-2">Message / Questions / Feedback</label>
                <textarea 
                    name="message" 
                    id="message" 
                    class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Share your thoughts"></textarea>
            </div>
            <button 
                type="submit" 
                class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-3 rounded shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                Send
            </button>
        </form>
    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
       new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
        });
    });
</script>
@endpush
