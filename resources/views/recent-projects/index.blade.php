@extends('layouts.front')

@section('title', 'Recent Projects')

@section('styles')
<style>
    /* Hero Section Styles */
    .hero-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 80px 0;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="10" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        animation: fadeInUp 1s ease-out;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
        animation: fadeInUp 1s ease-out 0.2s both;
    }

    /* Projects Grid */
    .projects-container {
        padding: 80px 0;
        background: #f8fafc;
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    /* Project Card Styles */
    .project-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        transform: translateY(20px);
        opacity: 0;
        animation: slideInUp 0.8s ease-out forwards;
    }

    .project-card:nth-child(1) { animation-delay: 0.1s; }
    .project-card:nth-child(2) { animation-delay: 0.2s; }
    .project-card:nth-child(3) { animation-delay: 0.3s; }
    .project-card:nth-child(4) { animation-delay: 0.4s; }
    .project-card:nth-child(5) { animation-delay: 0.5s; }

    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .project-icon {
        width: 80px;
        height: 80px;
        margin: 2rem auto 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 2rem;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .duck-cloud { background: linear-gradient(135deg, #4f46e5, #7c3aed); }
    .control-panel { background: linear-gradient(135deg, #059669, #10b981); }
    .local-business { background: linear-gradient(135deg, #dc2626, #f59e0b); }
    .one4one { background: linear-gradient(135deg, #7c2d12, #ea580c); }
    .cwb { background: linear-gradient(135deg, #1e40af, #3b82f6); }

    .project-content {
        padding: 0 2rem 2rem;
        text-align: center;
    }

    .project-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1rem;
    }

    .project-description {
        color: #6b7280;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .project-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .tag {
        background: #e5e7eb;
        color: #374151;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .project-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .project-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
        color: white;
        text-decoration: none;
    }

    .project-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .project-link:hover::before {
        left: 100%;
    }

    /* Stats Section */
    .stats-section {
        background: linear-gradient(135deg, #1f2937, #374151);
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .stat-item {
        padding: 1rem;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        display: block;
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .stat-label {
        font-size: 1rem;
        opacity: 0.8;
        margin-top: 0.5rem;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .floating {
        animation: float 3s ease-in-out infinite;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .projects-grid {
            grid-template-columns: 1fr;
            padding: 0 1rem;
        }
        
        .project-card {
            margin: 0 1rem;
        }
    }

    /* Scroll Animation */
    .scroll-animate {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
    }

    .scroll-animate.animated {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Recent Projects</h1>
        <p class="hero-subtitle">
            Innovative solutions spanning education, business automation, local enterprises, 
            social impact, and community development across Southeast Asia
        </p>
    </div>
</div>

<!-- Projects Section -->
<div class="projects-container">
    <div class="projects-grid">
        <!-- Duck Cloud Info -->
        <div class="project-card">
            <div class="project-icon duck-cloud floating">
                🦆
            </div>
            <div class="project-content">
                <h3 class="project-title">Duck Cloud Info</h3>
                <p class="project-description">
                    A comprehensive tech knowledge platform making software development accessible for everyone. 
                    From solo developers to startup teams, Duck Cloud provides practical tutorials, clear documentation,
                    and reliable references across all areas of development and IT infrastructure.
                </p>
                <div class="project-tags">
                    <span class="tag">Education Platform</span>
                    <span class="tag">Tech Tutorials</span>
                    <span class="tag">Documentation</span>
                    <span class="tag">Learning</span>
                </div>
                <a href="https://duckcloud.info" target="_blank" class="project-link">
                    Explore Platform
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                        <path d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Control Panel -->
        <div class="project-card">
            <div class="project-icon control-panel floating">
                ⚙️
            </div>
            <div class="project-content">
                <h3 class="project-title">Multi-Business Control Panel</h3>
                <p class="project-description">
                    A comprehensive digital business management platform enabling clients to set up websites 
                    across multiple programming languages, configure domains, manage hosting services, 
                    and handle mail services through an intuitive control panel interface.
                </p>
                <div class="project-tags">
                    <span class="tag">Business Automation</span>
                    <span class="tag">Multi-tenant</span>
                    <span class="tag">Domain Management</span>
                    <span class="tag">Hosting Control</span>
                </div>
                <a href="#" class="project-link">
                    View Dashboard (Unavailable)
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                        <path d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 3corseco.com -->
        <div class="project-card">
            <div class="project-icon local-business floating">
                🥜
            </div>
            <div class="project-content">
                <h3 class="project-title">3Corseco - Premium Cashew Nuts</h3>
                <p class="project-description">
                    E-commerce website for Cambodia's finest cashew nuts company based in Kampong Thom. 
                    Showcasing premium quality Cambodian cashew nuts with distribution throughout Phnom Penh, 
                    featuring product catalogs, ordering systems, and business information.
                </p>
                <div class="project-tags">
                    <span class="tag">E-commerce</span>
                    <span class="tag">Local Business</span>
                    <span class="tag">Cambodia</span>
                    <span class="tag">Agriculture</span>
                </div>
                <a href="https://3corseco.com" class="project-link" target="_blank">
                    Visit Website
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                        <path d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- One4One -->
        <div class="project-card">
            <div class="project-icon one4one floating">
                👕
            </div>
            <div class="project-content">
                <h3 class="project-title">One4One - Inclusive Fashion</h3>
                <p class="project-description">
                    A socially conscious clothing brand from Myanmar supporting Persons with Disabilities (PWD) 
                    by providing employment opportunities. Specializing in traditional local attires from 
                    diverse ethnic regions including Chin, Shan, Kachin, and Inle Lake communities.
                </p>
                <div class="project-tags">
                    <span class="tag">Social Impact</span>
                    <span class="tag">Fashion</span>
                    <span class="tag">Myanmar</span>
                    <span class="tag">Inclusive Employment</span>
                </div>
                <a href="https://one4one.vercel.app/" target="_blank" class="project-link">
                    Discover Collection
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                        <path d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Community Work without Borders -->
        <div class="project-card">
            <div class="project-icon cwb floating">
                🌏
            </div>
            <div class="project-content">
                <h3 class="project-title">Community Work without Borders (CWB)</h3>
                <p class="project-description">
                    A regional initiative operating across ASEAN countries including India, Myanmar, Cambodia, 
                    Indonesia, Philippines, and Nepal. CWB empowers young people with entrepreneurial 
                    opportunities, fostering innovation and community development across Southeast Asia.
                </p>
                <div class="project-tags">
                    <span class="tag">Community Development</span>
                    <span class="tag">ASEAN</span>
                    <span class="tag">Youth Empowerment</span>
                    <span class="tag">Entrepreneurship</span>
                </div>
                <a href="https://cwbmm.net/" class="project-link">
                    Join Community
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                        <path d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="stats-section scroll-animate">

<div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number">5</span>
            <div class="stat-label">Major Projects</div>
        </div>
        <div class="stat-item">
            <span class="stat-number">7</span>
            <div class="stat-label">Countries Served</div>
        </div>
        <div class="stat-item">
            <span class="stat-number">1000+</span>
            <div class="stat-label">Lives Impacted</div>
        </div>
        <div class="stat-item">
            <span class="stat-number">3</span>
            <div class="stat-label">Industries</div>
        </div>
    </div>
</div>

<!-- JavaScript for scroll animations -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animation observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, observerOptions);

    // Observe all scroll-animate elements
    document.querySelectorAll('.scroll-animate').forEach(el => {
        observer.observe(el);
    });

    // Add hover effects to project cards
    document.querySelectorAll('.project-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Animate stats numbers
    function animateNumber(element, target) {
        let current = 0;
        const increment = target / 50;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current) + (target >= 1000 ? '+' : '');
        }, 30);
    }

    // Trigger stats animation when visible
    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const numbers = entry.target.querySelectorAll('.stat-number');
                numbers.forEach(num => {
                    const target = parseInt(num.textContent);
                    animateNumber(num, target);
                });
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
});
</script>

<!-- amp ads -->
<amp-auto-ads type="adsense"
    data-ad-client="ca-pub-3157572406863018">
</amp-auto-ads>
<!-- amp ads end -->
@endsection