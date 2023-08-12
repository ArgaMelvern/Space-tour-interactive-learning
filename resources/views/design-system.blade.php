<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Bellefair&family=Barlow:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <title>Design System</title>
</head>
<body>
    <div class="container flow">
        <h1 class="uppercase">Design system</h1>
        
        <section class="flow" id="colors" style="margin: 4rem 0">
            <h2 class="numbered-title"><span>01</span> colors</h2>
            <div class="flex">
                <div class="flow" style="flex-grow: 1;">  
                    <div class="bg-dark text-white fs-500 ff-serif" style="padding: 3rem 1rem 1rem; border: 1px solid white">
                        #0B0D17
                    </div>
                    <p><span class="text-accent" style="padding-right: 2em;">RGB</span> 11, 13, 23</p>
                    <p><span class="text-accent" style="padding-right: 2em">HSL</span> 230°, 35%, 7%</p>
                </div>
                <div class="flow" style="flex-grow: 1;">
                    <div class="bg-accent text-dark fs-500 ff-serif" style="padding: 3rem 1rem 1rem; border: 1px solid white">
                        #D0D6F9
                    </div>
                    <p><span class="text-accent" style="padding-right: 2em;">RGB</span> 208, 214, 249</p>    
                    <p><span class="text-accent" style="padding-right: 2em">HSL</span> 231°, 77%, 90%</p>
                </div>
                <div class="flow" style="flex-grow: 1;">
                    <div class="bg-white text-dark fs-500 ff-serif" style="padding: 3rem 1rem 1rem; border: 1px solid white">
                        #FFFFFF
                    </div>
                    <p><span class="text-accent" style="padding-right: 2em;">RGB</span> 255, 255, 255</p>
                    <p><span class="text-accent" style="padding-right: 2em">HSL</span> 0°, 0%, 100%</p>
                </div>
            </div>
        </section>
        <section class="flow" id="typography" style="margin: 4rem 0;">
            <h2 class="numbered-title"><span>02 </span>Typography</h2>
            <div class="flex">
                <div class="flow" style="flex-basis: 100%;">
                    <div>
                        <p class="text-accent">Heading 1 - Bellefair Regular - 150px</p>
                        <p class="fs-900 ff-serif uppercase">Earth</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 2 - Bellefair Regular - 100px</p>
                        <p class="fs-800 ff-serif uppercase">Venus</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 3 - Bellefair Regular - 56px</p>
                        <p class="fs-700 ff-serif uppercase">Jupiter & Saturn</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 4 - Bellefair Regular - 32px</p>
                        <p class="fs-600 ff-serif uppercase">Uranus, Neptune, & Pluto</p>
                    </div>
                    <div>
                        <p class="text-accent">Heading 5 - Barlow Condensed Regular - 28px - 4.75 Character Space</p>
                        <p class="text-accent fs-500 ff-sans-cond uppercase letter-spacing-1">So, you want to travel to space</p>
                    </div>
                </div>
                <div class="flow" style="flex-basis: 100%; --flow-space: 4rem">
                    <div>   
                        <p class="text-accent">Subheading 1 - Bellefair Regular - 28px</p>
                        <p class="ff-serif fs-500">384,000 KM</p>
                    </div>
                    <div>   
                        <p class="text-accent">Subheading 2 - Barlow Condensed Regular - 14px - 2.35 Character Space</p>
                        <p class="ff-sans-cond fs-200 uppercase letter-spacing-3">Avg. Distance</p>
                    </div>
                    <div>   
                        <p class="text-accent">Nav Text - Barlow Condensed Regular - 16px - 2.7 Character Space</p>
                        <p class="ff-sans-cond fs-300 uppercase letter-spacing-2">Europa</p>
                    </div>
                    <div>   
                        <p class="text-accent">Body Text</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="flow" id="interactive-elements">
            <h2 class="numbered-title"><span>03</span> interactive elements</h2>
            
            <!-- navigation -->
            <div class="flow">
                <nav>
                    <ul class="primary-navigation flex underline-indicators">
                        <li class="active"><a class="uppercase ff-serif fs-400 text-white letter-spacing-2" href="#"><span>00</span>Active</a>
                        <li><a class="uppercase ff-serif fs-400 text-white letter-spacing-2" href="#"><span>01</span>Hovered</a>
                        <li><a class="uppercase ff-serif fs-400 text-white letter-spacing-2" href="#"><span>02</span>Idle</a>
                    </ul>
                </nav>
            </div>

            <div class="flow"  style="--flow-space: 2rem; text-align: center;">
                <p class="fs-300 text-accent">Different States of Navigation Bar</p>
            </div>

            <div class="flex">
                <div style="margin: 5rem 7rem;">
                    <!-- explore button -->
                    <a href="#" class="large-button uppercase ff-serif text-dark bg-white fs-600">Explore</a>
                    <p class="fs-300 text-accent" style="margin-top: 3rem;">Landing Page Main Button - idle/hover</p>
                </div>
                
                <div class="flow" style="margin: 5rem; padding-left: 13rem; --flow-space: 5rem;">
                    <!-- Tabs -->
                    <div class="tab-list flex underline-indicators" style="justify-content: center">
                        <button aria-selected="true" class="uppercase bg-dark ff-sans-cond text-accent letter-spacing-2">Moon</button>
                        <button aria-selected="false" class="uppercase bg-dark ff-sans-cond text-accent letter-spacing-2">Mars</button>
                        <button aria-selected="false" class="uppercase bg-dark ff-sans-cond text-accent letter-spacing-2">Europa</button>
                    </div>

                    <div class="flow"  style="--flow-space: 1rem; text-align: center;">
                        <p class="fs-300 text-accent">Tab(Active, Hover, & Idle)</p>
                    </div>
                    
                    <!-- Dots -->
                    <div class="dot-indicators flex" style="justify-content: center">
                        <button aria-selected="true"><span class="sr-only">Slide title</span></button>
                        <button aria-selected="false"><span class="sr-only">Slide title</span></button>
                        <button aria-selected="false"><span class="sr-only">Slide title</span></button>
                    </div>

                    <div class="flow"  style="--flow-space: 1rem; text-align: center;">
                        <p class="fs-300 text-accent">Slider 1 States (Active, Hover, & Idle)</p>
                    </div>
                    
                    <!-- Numbers -->
                    <div class="number-indicators" style="justify-items: center">
                        <a href="#" class="active uppercase ff-serif text-white fs-400">1</a>
                        <a href="#" class="uppercase ff-serif text-white fs-400">2</a>
                        <a href="#" class="uppercase ff-serif text-white fs-400">3</a>
                    </div>

                    <div class="flow"  style="--flow-space: 1rem; text-align: center;">
                        <p class="fs-300 text-accent">Slider 2 States (Active, Hover, & Idle)</p>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <script src="{{ URL::asset('js/script.js') }}"> </script>
</body>
</html>