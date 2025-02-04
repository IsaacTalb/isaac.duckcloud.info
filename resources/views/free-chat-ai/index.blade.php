<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Free Chat AI | Isaac Talb</title>
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300"> 
    <link rel="stylesheet" href="{{ asset('assets/free-chat-ai/css/bootstrap.min.css')}}">                                  
    <link rel="stylesheet" href="{{ asset('assets/free-chat-ai/css/fontawesome/css/fontawesome-all.min.css')}}">               
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/free-chat-ai/css/slick/slick.css')}}">                       
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/free-chat-ai/css/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/free-chat-ai/css/tooplate-style.css')}}">                               
    
    <style>
        body {
            -webkit-touch-callout: none; /* Disable long press on mobile */
            -webkit-user-select: none; /* Disable text selection */
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Free AI Chat by Isaac Talb</h1>
                            <img src="{{asset('assets/free-chat-ai/img/underline.png')}}" class="img-fluid mb-4">
                            <div style="text-align: justify;">
                                <p style="background-color: #e2dcdc; color: #000000;padding:2rem; font-weight: bold;">I provide the chat AI for totally free. If you exceed the limit, please choose from O-1, O-2, O-3 by default to use it multiple times.</span>        
                            </div>
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="display: flex; align-items: center;">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Welcome</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Welcome to Free Chat AI by Isaac Talb</h2>        
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <p class="mb-3">Thank you for using the Free Chat AI website by Isaac Talb! Here’s a quick guide to help you navigate and make the most of the features:</p>
                                                    <p class="mb-3">Please tell your friends about <a rel="nofollow" href="https://isaac.duckcloud.info/free-chat-ai" target="_parent">Free Chat AI</a>. That will be very helpful for me. Thank you.</p>    
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <p class="mb-3">If you have any kind of question or comment, please feel free to <a rel="nofollow" href="https://isaac.duckcloud.info/contact" target="_parent">reach out to me</a>. You are welcome!</p>
                                                </div>                                        
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Assistant Tools</span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Assistant Tools</h2>        
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p class="mb-3">I provide free, unlimited AI chat tools, also available on Yes Chat AI, with no API fees or hidden charges. 
                                                            If your chat usage exceeds limits 
                                                            and you no longer need it, you can seamlessly switch to O-1, O2, or O3 based on your requirements.</p>
                                                        <p class="mb-3">Let us know if you need assistance by contacting us. 
                                                            You can also support my work by buying me a coffee using your local currency!</p>
                                                        <a href="{{ route('free-chat-ai.index') }}" class="btn tm-btn-gray">Try it now</a>        
                                                    </div>                                                
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                        <img src="{{asset('assets/free-chat-ai/img/tools.jpg')}}" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                       
                    </div>
                    <section style="margin: 3rem;">
                        <section class="flex-container">
                            <div class="flex-item">
                                <p style="height: 60px;">PDF Research Assistant</p>
                                <button onclick="if (!window.open('./free-chat-ai/PDF-Research-Assistant', '_blank').opener) return false;">Create Now!</button>
                            </div>
                            <div class="flex-item">
                                <p style="height: 60px;">Research GPT</p>
                                <button onclick="if (!window.open('./free-chat-ai/Research-GPT', '_blank').opener) return false;">Create Now!</button>
                            </div>
                            <div class="flex-item">
                                <p style="height: 60px;">Storyboard AI Illustrations</p>
                                <button onclick="if (!window.open('./free-chat-ai/Storyboard-AI-Illustrations', '_blank').opener) return false;">Create Now!</button>
                            </div>
                            <div class="flex-item">
                                <p style="height: 60px;">Python Assistant</p>
                                <button onclick="if (!window.open('./free-chat-ai/Python-Assistant', '_blank').opener) return false;">Create Now!</button>
                            </div>
                        </section>
                    </section>
                    
                </div>                
            </div>
            <div class="google-ads" style="text-align: center;">
                <!-- Google Ads Section -->
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3157572406863018"
                    crossorigin="anonymous"></script>
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-format="autorelaxed"
                    data-ad-client="ca-pub-3157572406863018"
                    data-ad-slot="9833994156"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year"></span>. 
                
                Developer: <a rel="nofollow" href="https://isaac.duckcloud.info" class="tm-text-highlight">Isaac Talb</a></p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="{{asset('assets/free-chat-ai/js/jquery-3.2.1.slim.min.js')}}"></script>   
    <script src="{{asset('assets/free-chat-ai/slick/slick.min.js')}}"></script>                  
    <script src="{{asset('assets/free-chat-ai/js/anime.min.js')}}"></script>                     
    <script src="{{asset('assets/free-chat-ai/js/main.js')}}"></script>  

    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

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

</body>
</html>