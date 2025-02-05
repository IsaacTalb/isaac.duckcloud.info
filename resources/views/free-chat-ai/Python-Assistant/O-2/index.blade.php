<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Python Assistant | Isaac</title>
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
                <div>
                    <iframe src="https://www.yeschat.ai/i/gpts-9t55kXK6vQP-Python-Developer" width="800" height="500" style="max-width: 100%;"></iframe>
                </div>
                <div style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 2rem;">
                    <button style="margin: 0.5rem; padding: 1rem; border-radius: 0.5rem; background-color:black; border: 1px solid white; color: white; font-weight: bold; cursor: pointer;" onclick="if (!window.open('{{ url('free-chat-ai/PDF-Research-Assistant/O-1') }}', '_blank').opener) return false;">Switch to O-1</button>
                    <button style="margin: 0.5rem; padding: 1rem; border-radius: 0.5rem; background-color:black; border: 1px solid white; color: white; font-weight: bold; cursor: pointer;" onclick="if (!window.open('{{ url('free-chat-ai/PDF-Research-Assistant/O-2') }}', '_blank').opener) return false;">Switch to O-2</button>
                    <button style="margin: 0.5rem; padding: 1rem; border-radius: 0.5rem; background-color:black; border: 1px solid white; color: white; font-weight: bold; cursor: pointer;" onclick="if (!window.open('{{ url('free-chat-ai/PDF-Research-Assistant/O-3') }}', '_blank').opener) return false;">Switch to O-3</button>
                </div>
                <section style="margin: 3rem;">
                    <section class="flex-container">
                        <div class="flex-item">
                            <p style="height: 60px;">PDF Research Assistant</p>
                            <button onclick="if (!window.open('{{ url('free-chat-ai/PDF-Research-Assistant/O-2') }}', '_blank').opener) return false;">Create Now!</button>
                        </div>
                        <div class="flex-item">
                            <p style="height: 60px;">Research GPT</p>
                            <button onclick="if (!window.open('{{ url('free-chat-ai/Research-GPT/O-2') }}', '_blank').opener) return false;">Create Now!</button>
                        </div>
                        <div class="flex-item">
                            <p style="height: 60px;">Storyboard AI Illustrations</p>
                            <button onclick="if (!window.open('{{ url('free-chat-ai/Storyboard-AI-Illustrations/O-2') }}', '_blank').opener) return false;">Create Now!</button>
                        </div>
                        <div class="flex-item">
                            <p style="height: 60px;">Python Assistant</p>
                            <button onclick="if (!window.open('{{ url('free-chat-ai/Python-Assistant/O-2') }}', '_blank').opener) return false;">Create Now!</button>
                        </div>
                    </section>
                </section>               
            </div>
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