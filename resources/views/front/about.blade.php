@extends('layouts.front')

@section('title', 'About Me')

@section('content')
<div class="max-w-7xl mx-auto p-6">

    <!-- Hero Section -->
    <div class="text-center py-16 bg-gradient-to-r from-teal-500 to-blue-600 text-white rounded-lg mb-12">
        <h1 class="text-5xl font-bold mb-4 animate__animated animate__fadeIn">About Me</h1>
        <p class="text-lg font-light px-6 mb-6 animate__animated animate__fadeIn animate__delay-1s">
            I am Isaac Talb, a passionate developer and innovator working on portfolio and eCommerce projects. With a track record of impactful solutions, I aim to shape the future of technology.
        </p>
        <a href="{{ route('blog.index') }}" class="bg-white text-blue-600 px-6 py-3 rounded-full font-medium shadow-lg hover:bg-gray-100 animate__animated animate__fadeIn animate__delay-2s">Read My Story</a>
    </div>

    <!-- About Sections -->
    <div class="space-y-16">
        @foreach ($contents as $content)
            <div class="home-section p-6 bg-white shadow-lg rounded-lg">
                <div class="space-y-4">
                    <!-- Section Title -->
                    <h2 class="text-3xl font-bold text-gray-800">{!! $content->section_title !!}</h2>
                    
                    <!-- Section Content -->
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {!! $content->section_content !!}
                    </p>

                    <!-- Image or Video -->
                    @if ($content->image)
                        <div class="mt-6">
                            <img 
                                src="{{ asset('storage/' . $content->image) }}" 
                                alt="{{ $content->section_title }}" 
                                class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300"
                            >
                        </div>
                    @endif

                    @if ($content->video_url)
                        <div class="mt-6 relative aspect-w-16 aspect-h-9">
                            <iframe 
                                class="absolute inset-0 w-full h-full rounded-lg shadow-md hover:scale-105 transition-transform duration-300" 
                                src="{{ $content->video_url }}" 
                                frameborder="0" 
                                allowfullscreen
                            ></iframe>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>


    <!-- Duck Cloud Section -->
    <div class="space-y-16">
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

    <!-- Team Section -->
    <div class="mt-16">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8 animate__animated animate__fadeIn">Meet My Team</h2>
        <div id="team-slider" class="relative overflow-hidden">
            <div class="flex gap-6 transition-transform duration-500" id="team-slider-inner">
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