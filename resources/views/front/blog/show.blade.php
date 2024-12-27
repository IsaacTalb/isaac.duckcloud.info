@extends('layouts.front')

@section('title', $post->title)

@section('content')
<div class="container mx-auto max-w-screen-lg px-4 py-2">
    <!-- Blog Post Title -->
    <h1 class="text-4xl font-bold mb-6">{!! $post->title !!}</h1>

    <!-- Blog Post Author -->
    <span class="text-gray-600 mb-4 bg-yellow-500 p-2">By {{ $post->author }}</span>
    <span class="text-gray-600 mb-4 bg-gray-200 p-2"> -  {{ $post->updated_at->diffForHumans() }}</span>

    <!-- Blog Post Content --> 
    <p class="text-lg text-gray-700 mb-6 mt-2">
        {!! $post->content !!}
    </p> 

    <!-- Image Slider -->
    @if (!empty($post->images) && is_array(json_decode($post->images, true)))
        @php $images = json_decode($post->images, true); @endphp
        <!-- Glide.js Slider -->
        <div class="relative w-full glide-01">
            <!-- Slides -->
            <div class="overflow-hidden" data-glide-el="track">
                <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                    @foreach ($images as $image)
                        <li class="w-full h-96 lg:h-96 xl:h-[550px] md:py-8 md:px-4 lg:py-12 lg:px-8 md:max-w-[450px] lg:max-w-[600px] xl:max-w-[800px] max-w-[100vw] md:max-w-[90vw] lg:max-w-[80vw] xl:max-w-[70vw]">
                            <img 
                                src="{{ asset('storage/' . $image) }}" 
                                class="w-full h-full object-contain object-cover rounded-lg"
                                alt="{{ $image->alt_text ?? 'Image' }}"
                            />
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Controls -->
            @if (!empty($images))
            <!-- <div class="absolute flex items-center justify-between w-full px-4 top-1/2 transform -translate-y-1/2" data-glide-el="controls">
                <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 xl:w-16 xl:h-16 bg-white text-black hover:bg-black hover:stroke-white focus-visible:outline-none hover:transition fade-in fade-out" data-glide-dir="<" aria-label="prev slide">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-5 h-5 xl:w-6 xl:h-6 hover:fill-white hover:stroke-white transition fade-in fade-out">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                </button>
                <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 xl:w-16 xl:h-16 bg-white text-black hover:bg-black hover:stroke-white focus-visible:outline-none hover:transition fade-in fade-out" data-glide-dir=">" aria-label="next slide">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-5 h-5 xl:w-6 xl:h-6 hover:fill-white hover:stroke-white transition fade-in fade-out">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </div> -->
            <div class="flex items-center justify-center mt-2 space-x-2">
                <img
                    class="w-6 h-6"
                    src="{{ asset('assets/img/GIF/swipe-left-right-giphy.webp') }}"
                    alt="" />
                <p class="text-xs text-gray-500">
                    Swipe left to right to view images.
                </p>
            </div>
            @endif
        </div>
    @else
        <p class="text-gray-500">No images available for this post.</p>
    @endif

    <!-- Video -->
    @if ($post->video_url)
        <div class="mb-6 mt-6">
            <iframe 
                src="{{ $post->video_url }}" 
                frameborder="0" 
                allowfullscreen 
                class="w-full h-full rounded-lg shadow-lg"
            ></iframe>
        </div>
    @endif
    <br>
    <!-- Back to Home Button -->
    <a href="{{ route('blog.index') }}" class="inline-block px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
        ← Back to Blog Lists
    </a>

    <br class="border-gray-300 my-8">
    <br> <hr> <br>
    <!-- Google Ads Section -->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3157572406863018"
        crossorigin="anonymous"></script>
    <ins class="adsbygoogle"
        style="display:block; text-align:center;"
        data-ad-layout="in-article"
        data-ad-format="fluid"
        data-ad-client="ca-pub-3157572406863018"
        data-ad-slot="4799081902"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    <!-- Divider -->
    <br class="border-gray-300 my-8">

    <!-- Contact Form -->
    <div class="bg-white shadow-md rounded-lg p-6 mt-12">
        <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-lg font-semibold">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="email" class="block text-lg font-semibold">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="message" class="block text-lg font-semibold">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit" class="w-full px-4 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

<script>
    var glide01 = new Glide('.glide-01', {
        type: 'slider',
        focusAt: 'center',
        perView: 1,
        autoplay: 2000,
        animationDuration: 700,
        gap: 0,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
    });

    glide01.mount();
</script>
@endpush
