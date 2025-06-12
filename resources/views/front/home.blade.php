@extends('layouts.front')

@section('title', 'Isaac | Home Page')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tippy.js@6.3.7/dist/tippy.css" />
    <!-- Google Ads by Site for isaac.duckcloud.info -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3157572406863018"
     crossorigin="anonymous"></script>
    <!-- Google ads end -->

    <!-- amp ads -->
    <script async custom-element="amp-auto-ads"
            src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
    <!-- amp ads end -->
    <style>
    
/* Table of Contents for CSS Comments */
/* #1.1 Swiper CSS */
/* #1.2 Swiper CSS End */
/* #1.3 Enhanced Interactive UI Components */
/* #2.1 Hero Section with 3D Effects */
/* #2.2 About Section with Parallax */
/* #2.3 Services Section with Hover Animations */
/* #2.4 Portfolio Section with Advanced Cards */
/* #2.5 Testimonials Section with Morphing */
/* #2.6 Contact Section with Interactive Form */

/* Global Enhancements */
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    --glass-bg: rgba(255, 255, 255, 0.1);
    --glass-border: rgba(255, 255, 255, 0.3);
}

* {
    scroll-behavior: smooth;
}

body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    background-attachment: fixed;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
}

/* Enhanced Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(0,0,0,0.1);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-gradient);
    border-radius: 10px;
}

/* Particle Background Animation */
.particle-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: -1;
}

.particle {
    position: absolute;
    width: 2px;
    height: 2px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 1; }
    50% { transform: translateY(-20px) rotate(180deg); opacity: 0.5; }
}

/* #1.1 Enhanced Swiper CSS */
.swiper-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.swiper-slide {
    transition: transform 0.3s ease;
}

.swiper-slide:hover {
    transform: scale(1.02);
}

.swiper-button-next, .swiper-button-prev {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background: rgba(0,0,0,0.5);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.swiper-button-next:hover, .swiper-button-prev:hover {
    background: rgba(0,0,0,0.8);
    transform: translateY(-50%) scale(1.1);
}

.next-arrow, .prev-arrow {
    color: white;
    font-size: 18px;
}

.swiper-button-next {
    right: 15px;
}

.swiper-button-prev {
    left: 15px;
}

.swiper-pagination {
    position: absolute;
    bottom: 15px;
    left: 0;
    right: 0;
    text-align: center;
}

.swiper-pagination-bullet {
    background: rgba(255,255,255,0.7);
    transition: all 0.3s ease;
}

.swiper-pagination-bullet-active {
    background: white;
    transform: scale(1.2);
}

/* #1.2 Swiper CSS End */

/* #1.3 Enhanced Interactive UI Components */

/* Glassmorphism Card */
.glass-card {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.glass-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
}

/* Enhanced Button with 3D Effect */
.ui-btn {
    --btn-default-bg: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --btn-padding: 16px 32px;
    --btn-hover-bg: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    --btn-transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    --btn-letter-spacing: 0.1rem;
    --btn-animation-duration: 1.2s;
    --btn-shadow-color: rgba(102, 126, 234, 0.4);
    --btn-shadow: 0 8px 25px var(--btn-shadow-color);
    --hover-btn-color: #ffffff;
    --default-btn-color: #ffffff;
    --font-size: 16px;
    --font-weight: 600;
    --font-family: 'Inter', sans-serif;
}

.ui-btn {
    box-sizing: border-box;
    padding: var(--btn-padding);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--default-btn-color);
    font: var(--font-weight) var(--font-size) var(--font-family);
    background: var(--btn-default-bg);
    cursor: pointer;
    transition: var(--btn-transition);
    overflow: hidden;
    box-shadow: var(--btn-shadow);
    border-radius: 50px;
    border: none;
    position: relative;
    text-decoration: none;
}

.ui-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.ui-btn:hover::before {
    left: 100%;
}

.ui-btn span {
    letter-spacing: var(--btn-letter-spacing);
    transition: var(--btn-transition);
    position: relative;
    z-index: 1;
}

.ui-btn:hover {
    background: var(--btn-hover-bg);
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 15px 35px var(--btn-shadow-color);
}

/* #2.1 Hero Section with 3D Effects */

/* Floating Elements */
.floating-element {
    animation: floating 6s ease-in-out infinite;
}

@keyframes floating {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

/* 3D Text Effect */
.text-3d {
    text-shadow: 
        0 1px 0 #ccc,
        0 2px 0 #c9c9c9,
        0 3px 0 #bbb,
        0 4px 0 #b9b9b9,
        0 5px 0 #aaa,
        0 6px 1px rgba(0,0,0,.1),
        0 0 5px rgba(0,0,0,.1),
        0 1px 3px rgba(0,0,0,.3),
        0 3px 5px rgba(0,0,0,.2),
        0 5px 10px rgba(0,0,0,.25);
}

/* Animated Background Shapes */
.bg-shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.1;
    animation: morph 8s ease-in-out infinite;
}

@keyframes morph {
    0%, 100% { 
        border-radius: 50% 50% 50% 50%;
        transform: rotate(0deg) scale(1);
    }
    25% { 
        border-radius: 60% 40% 30% 70%;
        transform: rotate(90deg) scale(1.1);
    }
    50% { 
        border-radius: 30% 60% 70% 40%;
        transform: rotate(180deg) scale(0.9);
    }
    75% { 
        border-radius: 70% 30% 40% 60%;
        transform: rotate(270deg) scale(1.05);
    }
}

/* #2.2 About Section with Parallax */

.parallax-container {
    perspective: 1000px;
}

.parallax-element {
    transform-style: preserve-3d;
    transition: transform 0.1s ease-out;
}

/* Image Hover Effects */
.image-hover-effect {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
}

.image-hover-effect::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s;
    z-index: 1;
}

.image-hover-effect:hover::before {
    left: 100%;
}

.image-hover-effect img {
    transition: transform 0.5s ease;
}

.image-hover-effect:hover img {
    transform: scale(1.1);
}

/* #2.3 Services Section with Advanced Animations */

.service-card {
    position: relative;
    background: white;
    border-radius: 25px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--primary-gradient);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-card:hover::before {
    transform: scaleX(1);
}

.service-card:hover {
    transform: translateY(-15px) rotateX(5deg);
    box-shadow: 0 25px 50px rgba(0,0,0,0.2);
}

.service-icon {
    background: var(--primary-gradient);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.service-icon::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: var(--secondary-gradient);
    border-radius: 50%;
    transform: scale(0);
    transition: transform 0.3s ease;
}

.service-card:hover .service-icon::before {
    transform: scale(1);
}

.service-icon i {
    font-size: 2rem;
    color: white;
    position: relative;
    z-index: 1;
    transition: transform 0.3s ease;
}

.service-card:hover .service-icon i {
    transform: rotateY(180deg);
}

/* #2.4 Portfolio Section with Advanced Cards */

.portfolio-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.4s ease;
    position: relative;
}

.portfolio-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--primary-gradient);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.portfolio-card:hover::after {
    opacity: 0.1;
}

.portfolio-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

/* Blog Card Enhancements */
.blog-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
}

.blog-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    background: var(--accent-gradient);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.blog-card:hover::before {
    opacity: 0.05;
}

.blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

/* #2.5 Testimonials Section with Morphing */

.testimonial-card {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 25px;
    padding: 2rem;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.testimonial-card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: conic-gradient(from 0deg, transparent, rgba(255,255,255,0.1), transparent);
    animation: rotate 4s linear infinite;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.testimonial-card:hover::before {
    opacity: 1;
}

@keyframes rotate {
    100% { transform: rotate(360deg); }
}

.testimonial-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

/* #2.6 Contact Section with Interactive Form */

.contact-form-container {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 30px;
    padding: 3rem;
    position: relative;
    overflow: hidden;
}

.contact-form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
    animation: shimmer 3s ease-in-out infinite;
    pointer-events: none;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

.form-group {
    position: relative;
    margin-bottom: 2rem;
}

.form-input {
    width: 100%;
    padding: 1rem 1.5rem;
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    color: #333;
    font-size: 1rem;
    transition: all 0.3s ease;
    outline: none;
}

.form-input:focus {
    border-color: #667eea;
    background: rgba(255,255,255,0.2);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.2);
}

.form-label {
    position: absolute;
    top: 1rem;
    left: 1.5rem;
    color: #666;
    font-size: 1rem;
    pointer-events: none;
    transition: all 0.3s ease;
    background: rgba(255,255,255,0.8);
    padding: 0 0.5rem;
    border-radius: 10px;
}

.form-input:focus + .form-label,
.form-input:not(:placeholder-shown) + .form-label {
    top: -0.5rem;
    font-size: 0.8rem;
    color: #667eea;
    transform: scale(0.9);
}

/* Submit Button Enhanced */
.submit-btn {
    background: var(--primary-gradient);
    border: none;
    padding: 1rem 3rem;
    border-radius: 50px;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.submit-btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255,255,255,0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.5s ease;
}

.submit-btn:hover::before {
    width: 300px;
    height: 300px;
}

.submit-btn:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
}

/* Section Animations */
.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Intersection Observer Classes */
.reveal {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* Loading Animation */
.loading-dots {
    display: inline-block;
}

.loading-dots::after {
    content: '...';
    animation: dots 2s linear infinite;
}

@keyframes dots {
    0%, 20% { content: ''; }
    40% { content: '.'; }
    60% { content: '..'; }
    80%, 100% { content: '...'; }
}

/* Mobile Optimizations */
@media (max-width: 768px) {
    .swiper-button-next, .swiper-button-prev {
        top: 50%;
        width: 40px;
        height: 40px;
    }
    
    .service-card {
        padding: 1.5rem;
    }
    
    .contact-form-container {
        padding: 2rem;
    }
    
    .form-input {
        padding: 0.8rem 1rem;
    }
}

/* Dark Mode Support */
@media (prefers-color-scheme: dark) {
    .glass-card {
        background: rgba(0,0,0,0.2);
        border-color: rgba(255,255,255,0.1);
    }
    
    .service-card {
        background: #1a1a1a;
        color: white;
    }
    
    .portfolio-card, .blog-card {
        background: #1a1a1a;
        color: white;
    }
}

    </style>
@endsection

@section('content')
<!-- Particle Background -->
<div class="particle-bg">
    <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="left: 20%; animation-delay: 0.5s;"></div>
    <div class="particle" style="left: 30%; animation-delay: 1s;"></div>
    <div class="particle" style="left: 40%; animation-delay: 1.5s;"></div>
    <div class="particle" style="left: 50%; animation-delay: 2s;"></div>
    <div class="particle" style="left: 60%; animation-delay: 2.5s;"></div>
    <div class="particle" style="left: 70%; animation-delay: 3s;"></div>
    <div class="particle" style="left: 80%; animation-delay: 3.5s;"></div>
    <div class="particle" style="left: 90%; animation-delay: 4s;"></div>
</div>

<div class="max-w-7xl mx-auto p-6">

    <!-- Enhanced Hero Section -->
    <div class="text-center py-20 glass-card text-white mb-16 relative overflow-hidden">
        <!-- Animated Background Shapes -->
        <div class="bg-shape absolute -top-20 -left-10 w-96 h-96 bg-purple-500" style="animation-delay: 0s;"></div>
        <div class="bg-shape absolute -bottom-20 -right-10 w-80 h-80 bg-blue-500" style="animation-delay: 2s;"></div>
        <div class="bg-shape absolute top-1/2 left-1/2 w-60 h-60 bg-cyan-500" style="animation-delay: 4s;"></div>
        
        <!-- Main Content -->
        <div class="relative z-10">
            <h1 class="text-6xl font-extrabold mb-6 text-3d floating-element animate__animated animate__fadeInUp">
                Transform Your Digital Journey with Isaac!
            </h1>
            <p class="text-xl font-light px-8 mb-8 max-w-4xl mx-auto animate__animated animate__fadeInUp animate__delay-1s">
                "Isaac Talb is a visionary developer, communicator, and tech enthusiast dedicated to empowering individuals and businesses with impactful solutions. Let's build the future together!"
            </p>
            <div class="flex justify-center mt-8 animate__animated animate__fadeIn animate__delay-2s">
                <a href="{{ route('contact') }}" class="ui-btn">
                    <span>Reach Out</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Enhanced About Me Section -->
    <div class="mb-20 reveal" id="about">
        <h2 class="text-5xl font-bold text-center text-white mb-12">Join My Mission</h2>
        <div class="flex flex-col lg:flex-row items-center justify-center space-y-8 lg:space-y-0 lg:space-x-16 px-4">
            <div class="relative w-full lg:w-1/2 parallax-container">
                <div class="image-hover-effect parallax-element">
                    <img src="https://yt3.googleusercontent.com/ytc/AIdro_k-ow8jwj_n13kt9qM7nzlITi1X_rnznyhBhX-H7WBmmY1J=s900-c-k-c0x00ffffff-no-rj" alt="Isaac Talb" class="rounded-3xl shadow-2xl w-full">
                </div>
            </div>
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <div class="glass-card p-8 text-white">
                    <p class="text-lg leading-relaxed">
                        Isaac's passion for innovation and communication:
                        <br><br>
                        "With a background in Media and Communication and expertise in Laravel development, I combine creativity and technical skills to craft solutions that matter. My mission is to help individuals and organizations realize their potential through the power of technology and storytelling."
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Services Section -->
    <div class="mb-20 reveal" id="services">
        <h2 class="text-5xl font-bold text-center text-white mb-8">What I Do</h2>
        <p class="text-white text-xl text-center leading-relaxed max-w-4xl mx-auto mb-12 opacity-90">
            My goal is to bridge the gap between technology and human connection, creating meaningful solutions for today's challenges.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-300">Crafting Scalable Web Solutions</h3>
                <p class="text-gray-400 leading-relaxed">I specialize in developing robust, secure, and user-friendly web applications using modern frameworks like Laravel. Whether you're building an e-commerce platform, a content management system, or an API, I'm here to bring your ideas to life.</p>
            </div>
            <div class="service-card" style="animation-delay: 0.2s;">
                <div class="service-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-300">Empowering Through Media and Communication</h3>
                <p class="text-gray-400 leading-relaxed">With a focus on transnational audiences, I craft strategies that resonate. From storytelling to leveraging digital platforms, I help you connect with your audience meaningfully.</p>
            </div>
            <div class="service-card" style="animation-delay: 0.4s;">
                <div class="service-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-300">Exploring Open-Source Possibilities</h3>
                <p class="text-gray-400 leading-relaxed">I believe in the power of collaboration and open-source technology. By utilizing free, community-driven tools, I ensure accessible and sustainable solutions for your projects.</p>
            </div>
        </div>
    </div>

    <!-- Enhanced Portfolio Section -->
    <div class="mb-20 reveal" id="portfolio">
        <h2 class="text-5xl font-bold text-center text-white mb-12">Recent Activities</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($contents as $content)
                <div class="portfolio-card">
                    <!-- Section Title -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-400 mb-3">{!! $content->section_title !!}</h3>
                        <p class="text-gray-300 mb-4 leading-relaxed">{!! Str::limit(strip_tags($content->section_content), 500) !!}</p>
                        <p class="text-sm text-gray-500 italic">Posted: {{ $content->created_at->diffForHumans() }}</p>
                    </div>

                    <!-- Images -->
                    @if ($content->images)
                    <div class="swiper-container w-full mx-auto">
                        <div class="swiper-wrapper">
                            @foreach (json_decode($content->images, true) as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $content->section_title }}" class="w-full h-64 object-cover">
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation buttons -->
                        <div class="swiper-button-next">
                            <i class="fas fa-chevron-right next-arrow"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fas fa-chevron-left prev-arrow"></i>
                        </div>
                    </div>
                    @endif

                    <!-- Video -->
                    @if ($content->video_url)
                        <div class="relative aspect-w-16 aspect-h-9 rounded-b-lg overflow-hidden">
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

    <!-- Enhanced Recent Blog Posts -->
    <div class="mb-20 reveal">
        <h2 class="text-5xl font-bold text-center text-white mb-12">Recent Blogs</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($recentPosts as $post)
            <div class="blog-card">
                <!-- Date-Time Section -->
                <div class="p-6 border-b border-gray-100">
                    <time class="text-gray-500 text-sm font-medium" datetime="{{ $post->created_at }}">
                        <span class="bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent font-bold">{{ $post->created_at->format('Y') }}</span>
                        <span class="mx-2 text-gray-300">|</span>
                        <span>{{ $post->created_at->format('M d') }}</span>
                    </time>
                </div>

                <!-- Content Section -->
                <div class="p-6">
                    <!-- Image Section -->
                    @php
                        $image = isset($post->images) ? json_decode($post->images, true)[0] ?? null : $post->image;
                    @endphp
                    @if ($image)
                    <div class="image-hover-effect mb-4">
                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    @endif

                    <!-- Title -->
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                        <h2 class="text-xl font-bold text-gray-300 hover:text-transparent hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-500 hover:bg-clip-text transition-all duration-300 mb-3">
                            {{ $post->title }}
                        </h2>
                    </a>

                    <!-- Content Excerpt -->
                    <p class="text-gray-300 leading-relaxed">
                        {!! Str::limit(strip_tags($post->content), 100) !!}
                    </p>
                </div>

                <!-- Action Button -->
                <div class="p-6 border-t border-gray-100">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="inline-flex items-center text-blue-600 hover:text-purple-600 font-semibold transition-colors duration-300 group">
                        Read More 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Enhanced Testimonials Section -->
    <div class="mb-20 reveal" id="testimonials">
        <h2 class="text-5xl font-bold text-center text-white mb-12">What Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="testimonial-card">
                <div class="mb-6">
                    <i class="fas fa-quote-left text-3xl text-purple-400 opacity-50"></i>
                </div>
                <p class="text-white italic text-lg leading-relaxed mb-6">Isaac's technical expertise helped us optimize our backend processes and elevate our user experience. A true professional with an innovative touch.</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                        EJ
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Emanuel Johnson</h4>
                        <p class="text-gray-300 text-sm">Project Manager</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card" style="animation-delay: 0.2s;">
                <div class="mb-6">
                    <i class="fas fa-quote-left text-3xl text-purple-400 opacity-50"></i>
                </div>
                <p class="text-white italic text-lg leading-relaxed mb-6">Isaac's ability to translate complex requirements into simple, effective solutions is remarkable. He's a valuable asset to any team.</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                        ER
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Emily Roberts</h4>
                        <p class="text-gray-300 text-sm">Founder of Thrive Digital</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card" style="animation-delay: 0.4s;">
                <div class="mb-6">
                    <i class="fas fa-quote-left text-3xl text-purple-400 opacity-50"></i>
                </div>
                <p class="text-white italic text-lg leading-relaxed mb-6">Working with Isaac was a game-changer for our startup. His commitment to delivering top-notch work is truly inspiring.</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                        MA
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Mark Allen</h4>
                        <p class="text-gray-300 text-sm">CEO at Bright Futures</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Contact Section -->
    <div class="mb-20 reveal" id="contact">
        <h2 class="text-5xl font-bold text-center text-white mb-12">Get in Touch</h2>
        <div class="max-w-4xl mx-auto">
            <!-- Display Success Message -->
            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('contact.store') }}" method="POST" class="contact-form-container">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="form-group">
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="form-input" 
                            placeholder=" "
                            value="{{ old('name') }}"
                            required>
                        <label for="name" class="form-label">Your Name</label>
                    </div>
                    <div class="form-group">
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-input" 
                            placeholder=" "
                            value="{{ old('email') }}"
                            required>
                        <label for="email" class="form-label">Email Address</label>
                    </div>
                </div>
                <div class="form-group mb-8">
                    <textarea 
                        name="message" 
                        id="message" 
                        rows="6"
                        class="form-input resize-none" 
                        placeholder=" "
                        required>{{ old('message') }}</textarea>
                    <label for="message" class="form-label">Your Message</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="submit-btn">
                        <span>Send Message</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Swiper
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
                delay: 4000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
        });

        // Intersection Observer for reveal animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });

        // Parallax effect for about section
        const parallaxContainer = document.querySelector('.parallax-container');
        const parallaxElement = document.querySelector('.parallax-element');

        if (parallaxContainer && parallaxElement) {
            parallaxContainer.addEventListener('mousemove', (e) => {
                const rect = parallaxContainer.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;

                parallaxElement.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            parallaxContainer.addEventListener('mouseleave', () => {
                parallaxElement.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
            });
        }

        // Enhanced form interactions
        const formInputs = document.querySelectorAll('.form-input');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });

            // Add typing animation effect
            input.addEventListener('input', function() {
                this.style.transform = 'scale(1.01)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 100);
            });
        });

        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        const contactForm = document.querySelector('form[action*="contact.store"]');
        if (contactForm) {
            contactForm.addEventListener('submit', function() {
                const submitBtn = this.querySelector('.submit-btn');
                if (submitBtn && this.checkValidity()) {
                    submitBtn.innerHTML = '<span>Sending...</span>';
                    submitBtn.disabled = true;
                }
            });
        }

        // Add particle animation
        function createParticle() {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 6 + 's';
            particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
            document.querySelector('.particle-bg').appendChild(particle);

            setTimeout(() => {
                particle.remove();
            }, 6000);
        }

        // Create particles periodically
        setInterval(createParticle, 1000);

        // Add card tilt effect for service cards
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) rotateX(5deg) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0deg) scale(1)';
            });
        });

        // Add stagger animation delay to service cards
        serviceCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
        });
    });
</script>
@endpush