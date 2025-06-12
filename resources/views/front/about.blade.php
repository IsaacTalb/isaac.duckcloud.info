@extends('layouts.front')

@section('title', 'About Me')

@section('styles')
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <style>
        /* Modern Background with Floating Elements */
        .hero-background {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
        }

        .hero-background::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
            animation: floatBg 30s ease-in-out infinite;
        }

        @keyframes floatBg {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(-30px, -30px) rotate(120deg); }
            66% { transform: translate(30px, -30px) rotate(240deg); }
        }

        /* Enhanced Terminal */
        .modern-terminal {
            background: rgba(26, 26, 26, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            position: relative;
        }

        .terminal-header {
            background: linear-gradient(135deg, #333 0%, #2a2a2a 100%);
            padding: 12px 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .terminal-controls {
            display: flex;
            gap: 6px;
        }

        .control {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .control:hover {
            transform: scale(1.2);
            box-shadow: 0 0 10px currentColor;
        }

        .control.close {
            background: linear-gradient(135deg, #ff5f57, #ff3b30);
        }

        .control.minimize {
            background: linear-gradient(135deg, #ffbd2e, #ffaa00);
        }

        .control.maximize {
            background: linear-gradient(135deg, #28ca42, #00c853);
        }

        .terminal-title {
            color: #e0e0e0;
            font-size: 14px;
            font-weight: 600;
        }

        .terminal-content {
            padding: 24px;
            min-height: 200px;
        }

        /* Enhanced Typing Animation */
        @keyframes typeAndDelete {
            0%, 10% { width: 0; }
            45%, 55% { width: 8em; }
            90%, 100% { width: 0; }
        }

        @keyframes blinkCursor {
            50% { border-right-color: transparent; }
        }

        .typing-text {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            color: #00ff88;
            border-right: 2px solid #00ff88;
            font-family: 'Courier New', monospace;
            font-weight: 600;
            animation: typeAndDelete 4s steps(12) infinite, blinkCursor 0.8s step-end infinite alternate;
        }

        .terminal-description {
            color: #b0b0b0;
            margin-top: 20px;
            line-height: 1.6;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Modern Button Enhancement */
        .modern-blog-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 700;
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: fadeInUp 1s ease-out 1s both;
        }

        .modern-blog-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .modern-blog-btn:hover::before {
            left: 100%;
        }

        .modern-blog-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }

        /* Content Cards Enhancement */
        .content-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .content-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .content-overlay {
            background: linear-gradient(
                to top,
                rgba(0, 0, 0, 0.8) 0%,
                rgba(0, 0, 0, 0.4) 50%,
                transparent 100%
            );
        }

        .content-info {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Duck Cloud Section */
        .duck-cloud-section {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        }

        .duck-cloud-title {
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
        }

        /* Team Section Enhancement */
        .team-section {
            background: linear-gradient(135deg, #eee2ef 0%, #57e8f563 100%);
            border-radius: 30px;
            padding: 60px 40px;
            margin: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .team-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            animation: teamBg 20s ease-in-out infinite;
        }

        @keyframes teamBg {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(-20px, -20px) rotate(180deg); }
        }

        .team-title {
            color: white;
            font-size: 3rem;
            font-weight: 900;
            text-align: center;
            margin-bottom: 3rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 10;
        }

        .team-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 10;
        }

        .team-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .team-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 20px;
            border: 4px solid #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .team-card:hover .team-avatar {
            transform: scale(1.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .nav-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            z-index: 10;
        }

        .nav-dot:hover, .nav-dot.active {
            background: white;
            transform: scale(1.3);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .duck-cloud-title {
                font-size: 2rem;
            }
            
            .team-title {
                font-size: 2.5rem;
            }
            
            .modern-terminal {
                margin: 20px;
            }
            
            .duck-cloud-section, .team-section {
                padding: 30px 20px;
                margin: 30px 10px;
            }
        }

        /* Scroll Animation */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endsection

@section('content')
<div class="hero-background">
    <div class="max-w-7xl mx-auto p-6 relative z-10">
        <!-- Enhanced Terminal -->
        <div class="modern-terminal mx-auto max-w-4xl mb-16">
            <div class="terminal-header">
                <div class="terminal-title">~/about-isaac-talb</div>
                <div class="terminal-controls">
                    <div class="control close"></div>
                    <div class="control minimize"></div>
                    <div class="control maximize"></div>
                </div>
            </div>
            <div class="terminal-content">
                <div class="text-2xl md:text-3xl lg:text-4xl mb-6">
                    <span class="typing-text">Hello World...</span>
                </div>
                <p class="terminal-description text-lg md:text-xl leading-relaxed">
                    I am <span class="text-cyan-400 font-bold">Isaac Talb</span>, a passionate developer and innovator working on portfolio and eCommerce projects. With a track record of impactful solutions, I aim to shape the future of technology.
                </p>
                <div class="flex justify-center mt-8">
                    <a href="{{ route('blog.index') }}" class="modern-blog-btn">
                        <span>📚 Read my Blogs</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="space-y-16 scroll-reveal">
            @foreach ($contents as $content)
                <div class="content-card">
                    <div class="relative h-96 overflow-hidden">
                        <img src="{{ asset('storage/' . $content->image) }}" 
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-110" 
                             alt="{{ $content->section_title }}">
                        <div class="content-overlay absolute inset-0"></div>
                        <div class="absolute inset-x-0 bottom-0 p-8">
                            <div class="content-info p-6">
                                <p class="text-sm text-cyan-300 mb-2">
                                    Isaac Talb • <time>{{ $content->created_at->format('M d, Y') }}</time>
                                </p>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">
                                    {!! $content->section_title !!}
                                </h3>
                                <div class="text-gray-200 leading-relaxed">
                                    {!! Str::limit($content->section_content, 400) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Duck Cloud Section -->
        <div class="duck-cloud-section scroll-reveal">
            <h2 class="duck-cloud-title">🦆 My Latest Venture: Duck Cloud</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                I recently founded <strong>Duck Cloud</strong>, a platform dedicated to innovative digital solutions. Our core team is a diverse group of talented individuals:
            </p>
            <div class="grid md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white/50 rounded-lg p-4 backdrop-blur-sm">
                    <h4 class="font-bold text-gray-800">🔧 Thern Thy</h4>
                    <p class="text-gray-600">PHP Specialist with expertise in movie website development and server management.</p>
                </div>
                <div class="bg-white/50 rounded-lg p-4 backdrop-blur-sm">
                    <h4 class="font-bold text-gray-800">🎨 Phyo Myint Mo</h4>
                    <p class="text-gray-600">UI/UX Designer who brings intuitive and aesthetic designs to life.</p>
                </div>
                <div class="bg-white/50 rounded-lg p-4 backdrop-blur-sm">
                    <h4 class="font-bold text-gray-800">💻 Harry Hein</h4>
                    <p class="text-gray-600">Frontend Developer with mastery in HTML, CSS, TailwindCSS, and JavaScript.</p>
                </div>
            </div>
            <p class="text-center text-lg">
                🌐 Explore more about us: 
                <a href="https://www.duckcloud.info" class="text-blue-600 hover:text-blue-800 font-bold underline decoration-2 hover:decoration-4 transition-all">
                    www.duckcloud.info
                </a>
            </p>
        </div>

        <!-- Enhanced Team Section -->
        <div class="team-section scroll-reveal">
            <h2 class="team-title">Meet My Dream Team</h2>
            <div id="team-slider" class="relative">
                <div class="overflow-hidden rounded-2xl">
                    <div class="flex transition-transform duration-500 ease-out" id="team-slider-inner">
                        <!-- Team Member Cards -->
                        <div class="min-w-full px-4">
                            <div class="team-card">
                                <img src="{{ asset('assets/img/dc_team/thy.jpg') }}" alt="Thern Thy" class="team-avatar">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Thern Thy</h3>
                                <p class="text-purple-600 font-semibold mb-4">PHP Specialist</p>
                                <p class="text-gray-600 leading-relaxed">Expert in server management and dynamic web solutions with years of experience in the tech industry.</p>
                            </div>
                        </div>
                        <div class="min-w-full px-4">
                            <div class="team-card">
                                <img src="{{ asset('assets/img/dc_team/phyo_myint_mo.jpg') }}" alt="Phyo Myint Mo" class="team-avatar">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Phyo Myint Mo</h3>
                                <p class="text-purple-600 font-semibold mb-4">UI/UX Designer</p>
                                <p class="text-gray-600 leading-relaxed">Crafts intuitive designs that balance functionality and aesthetics for exceptional user experiences.</p>
                            </div>
                        </div>
                        <div class="min-w-full px-4">
                            <div class="team-card">
                                <img src="{{ asset('assets/img/dc_team/hein.jpg') }}" alt="Harry Hein" class="team-avatar">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Harry Hein</h3>
                                <p class="text-purple-600 font-semibold mb-4">Frontend Developer</p>
                                <p class="text-gray-600 leading-relaxed">Specialist in creating responsive and interactive user interfaces using modern frameworks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Dots -->
                <div class="flex justify-center gap-4 mt-8">
                    <button class="nav-dot" data-slide="0"></button>
                    <button class="nav-dot" data-slide="1"></button>
                    <button class="nav-dot" data-slide="2"></button>
                </div>
            </div>
        </div>

        <!-- amp ads -->
        <div class="my-16">
            <amp-auto-ads type="adsense"
                data-ad-client="ca-pub-3157572406863018">
            </amp-auto-ads>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Scroll Reveal Animation
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.scroll-reveal').forEach(el => {
                observer.observe(el);
            });

            // Team Slider
            const sliderInner = document.getElementById('team-slider-inner');
            const dots = document.querySelectorAll('[data-slide]');
            const totalSlides = dots.length;

            let currentSlide = 0;
            let slideDirection = 1;

            function goToSlide(slideIndex) {
                sliderInner.style.transform = `translateX(-${slideIndex * 100}%)`;
                dots.forEach(d => d.classList.remove('active'));
                dots[slideIndex].classList.add('active');
            }

            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    currentSlide = parseInt(dot.getAttribute('data-slide'));
                    slideDirection = 1;
                    goToSlide(currentSlide);
                });
            });

            function autoSlide() {
                currentSlide += slideDirection;

                if (currentSlide === totalSlides) {
                    slideDirection = -1;
                    currentSlide = totalSlides - 2;
                } else if (currentSlide < 0) {
                    slideDirection = 1;
                    currentSlide = 1;
                }

                goToSlide(currentSlide);
            }

            let autoSlideInterval = setInterval(autoSlide, 3000);

            // Pause auto-slide on hover
            const teamSection = document.querySelector('#team-slider');
            teamSection.addEventListener('mouseenter', () => {
                clearInterval(autoSlideInterval);
            });
            
            teamSection.addEventListener('mouseleave', () => {
                autoSlideInterval = setInterval(autoSlide, 3000);
            });

            goToSlide(0);
        });
    </script>
@endpush