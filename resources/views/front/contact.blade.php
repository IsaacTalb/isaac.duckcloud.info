@extends('layouts.front')

@section('title', 'Contact Me')

@section('styles')
<style>
/* Modern Glass Morphism Effect */
.glass-container {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
}

/* Gradient Background */
.gradient-bg {
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.05));
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    min-height: 100vh;
    position: relative;
    overflow: hidden;
}

.gradient-bg::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at 25% 25%, rgb(169 199 213 / 96%) 0%, #7874749c 50%), radial-gradient(circle at 75% 75%, rgb(0 122 162 / 99%) 0%, #1b1b1b75 50%);
    animation: float 20s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    50% { transform: translate(-20px, -20px) rotate(180deg); }
}

/* Animated Border Effect */
.animated-border {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
}

.animated-border::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4, #feca57, #ff9ff3);
    background-size: 400% 400%;
    animation: gradientShift 6s ease infinite;
    z-index: -1;
    border-radius: 20px;
}

.animated-border::after {
    content: '';
    position: absolute;
    top: 3px;
    left: 3px;
    right: 3px;
    bottom: 3px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 17px;
    z-index: -1;
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Modern Input Styling */
.modern-input {
    background: rgba(255, 255, 255, 0.9);
    border: 2px solid #67727d4a;
    border-radius: 12px;
    padding: 16px 20px;
    font-size: 16px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    backdrop-filter: blur(10px);
    position: relative;
}

.modern-input:focus {
    background: rgba(255, 255, 255, 1);
    border-color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    outline: none;
}

.modern-input:hover {
    transform: translateY(-1px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Floating Label Effect */
.input-group {
    position: relative;
    margin-bottom: 30px;
}

.floating-label {
    position: absolute;
    top: 16px;
    left: 20px;
    color: #666;
    font-weight: 600;
    transition: all 0.3s ease;
    pointer-events: none;
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.modern-input:focus + .floating-label,
.modern-input:not(:placeholder-shown) + .floating-label {
    top: -10px;
    left: 15px;
    font-size: 12px;
    background: #667eea;
    color: white;
    padding: 4px 8px;
    border-radius: 6px;
    -webkit-text-fill-color: white;
}

/* Modern Button Styling */
.modern-button {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 12px;
    padding: 18px 30px;
    font-size: 18px;
    font-weight: 700;
    color: white;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.modern-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s;
}

.modern-button:hover::before {
    left: 100%;
}

.modern-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
}

.modern-button:active {
    transform: translateY(-1px);
}

/* Title Styling */
.modern-title {
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-size: 3rem;
    font-weight: 900;
    text-align: center;
    margin-bottom: 2rem;
    position: relative;
}

.modern-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 2px;
}

/* Notification Styling */
.modern-notification {
    border-radius: 12px;
    padding: 16px 20px;
    margin-bottom: 30px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    animation: slideIn 0.5s ease-out;
}

@keyframes slideIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.success-notification {
    background: linear-gradient(135deg, rgba(76, 175, 80, 0.1), rgba(76, 175, 80, 0.05));
    color: #2e7d32;
    border-left: 4px solid #4caf50;
}

.error-notification {
    background: linear-gradient(135deg, rgba(244, 67, 54, 0.1), rgba(244, 67, 54, 0.05));
    color: #c62828;
    border-left: 4px solid #f44336;
}

/* Responsive Design */
@media (max-width: 768px) {
    .modern-title {
        font-size: 2rem;
    }
    
    .glass-container {
        margin: 20px;
        padding: 30px 20px;
    }
}

/* Subtle Animations */
.fade-in {
    animation: fadeIn 0.8s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
@endsection

@section('content')
<div class="gradient-bg py-12">
    <div class="max-w-2xl mx-auto p-8 glass-container animated-border fade-in">
        <!-- Page Title -->
        <h1 class="modern-title">Any Inquiries Accepted!</h1>

        <!-- Notification -->
        @if(session('success'))
            <div class="modern-notification success-notification">
                <strong class="font-bold">✓ Success!</strong>
                <span class="block mt-1">{{ session('success') }}</span>
            </div>
        @elseif(session('error'))
            <div class="modern-notification error-notification">
                <strong class="font-bold">✗ Error!</strong>
                <span class="block mt-1">{{ session('error') }}</span>
            </div>
        @endif

        <!-- Contact Form -->
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Name Input -->
            <div class="input-group">
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="w-full modern-input" 
                    placeholder=" "
                    required
                >
                <label for="name" class="floating-label">Name</label>
            </div>

            <!-- Email Input -->
            <div class="input-group">
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full modern-input" 
                    placeholder=" "
                    required
                >
                <label for="email" class="floating-label">Email</label>
            </div>

            <!-- Message Input -->
            <div class="input-group">
                <textarea 
                    name="message" 
                    id="message" 
                    rows="6" 
                    class="w-full modern-input resize-none" 
                    placeholder=" "
                    required
                ></textarea>
                <label for="message" class="floating-label">Message</label>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button 
                    type="submit" 
                    class="w-full modern-button"
                >
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>

<br><hr><br>
<!-- amp ads -->
<amp-auto-ads type="adsense"
    data-ad-client="ca-pub-3157572406863018">
</amp-auto-ads>
<!-- amp ads end -->
@endsection