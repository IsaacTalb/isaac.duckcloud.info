<footer class="bg-gray-800 text-gray-300 py-6 transition-all duration-300 ease-in-out transform hover:scale-80 mt-auto">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <!-- Logo & Copyright -->
        <div class="text-center md:text-left mb-4 md:mb-0">
            <a href="/" class="text-white text-xl font-semibold hover:text-gray-400 transition duration-300">Duck Cloud Service</a>
            <p class="text-sm mt-2">&copy; {{ date('Y') }} Duck-Cloud : All rights reserved.</p>
        </div>

        <!-- Social Links -->
        <div class="flex space-x-4">
            <a href="https://x.com/globalduckcloud/" title="Follow Duck Cloud on X" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-200 transition duration-300">
                <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.47.69.89-.54 1.57-1.39 1.89-2.4-.83.5-1.74.87-2.7 1.07a4.48 4.48 0 0 0-7.64 4.09 12.7 12.7 0 0 1-9.23-4.69 4.48 4.48 0 0 0 1.39 5.98 4.45 4.45 0 0 1-2.03-.57v.06a4.48 4.48 0 0 0 3.6 4.39 4.52 4.52 0 0 1-2.02.08 4.49 4.49 0 0 0 4.19 3.12A9 9 0 0 1 1 18.29a12.72 12.72 0 0 0 6.88 2.02c8.26 0 12.78-6.84 12.78-12.78 0-.19 0-.39-.01-.58A9.1 9.1 0 0 0 22.46 6z" />
                </svg>
            </a>
            <a href="https://www.facebook.com/duckcloudglobal/" title="Connect with Duck Cloud on Facebook" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-200 transition duration-300">
                <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M22 12a10 10 0 1 0-11 9.9V15h-2v-3h2v-2.2a3.3 3.3 0 0 1 3.5-3.5h2v3h-2a1 1 0 0 0-1 1v2h3l-1 3h-2v6.9A10 10 0 0 0 22 12z" />
                </svg>
            </a>
            <a href="https://www.duckcloud.info/" title="Duck Cloud Service" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-200 transition duration-300">
                <img class="h-6 w-6" src="{{ asset('assets/img/apple-touch-icon.png') }}" alt="Duck Cloud Service" />
            </a>
        </div>
    </div>
</footer>
