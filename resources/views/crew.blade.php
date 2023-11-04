<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/favicon-32x32.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Bellefair&family=Barlow:wght@400;700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <title>Frontend Mentor | Space tourism website</title>

    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/crew.js') }}" defer></script>
</head>

<body class="crew">
  <a class="skip-to-content" href="#main">Skip to content</a>
  <header class="primary-header flex">
    <div>
      <img src="./assets/shared/logo.svg" alt="space tsourism logo" class="logo">
    </div>
    <button class="mobile-nav-toggle" aria-controls="primary-navigation"><span class="sr-only" aria-expanded="false">Menu</span></button>
    <nav>
        <ul id="primary-navigation" data-visible="false" class="primary-navigation underline-indicators flex">
            <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="{{ route('index') }}"><span aria-hidden="true">00</span>Home</a>
            <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="{{ route('destination.page') }}"><span aria-hidden="true">01</span>Destination</a>
            <li class="active"><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="{{ route('crew.page') }}"><span aria-hidden="true">02</span>Crew</a>
            <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="technology.html"><span aria-hidden="true">03</span>Technology</a>
        </ul>
    </nav>
  </header>
  
  <main id="main" class="grid-container grid-container--crew flow">
    <h1 class="numbered-title"><span aria-hidden="true">02</span> Meet your crew</h1> 

    <picture id="douglas-commander" >
      <source srcset="assets/crew/image-douglas-hurley.webp" type="image/webp">
      <img src="assets/crew/image-douglas-hurley.png" alt="douglas">
    </picture>
    <picture hidden id="mark-specialist">
      <source srcset="assets/crew/image-mark-shuttleworth.webp" type="image/webp">
      <img src="assets/crew/image-mark-shuttleworth.png" alt="mark">
    </picture>
    <picture hidden id="victor-pilot">
      <source srcset="assets/crew/image-victor-glover.webp" type="image/webp">
      <img src="assets/crew/image-victor-glover.png" alt="victor">
    </picture>
    <picture hidden id="anousheh-engineer">
      <source srcset="assets/crew/image-anousheh-ansari.webp" type="image/webp">
      <img src="assets/crew/image-anousheh-ansari.png" alt="anousheh">
    </picture>
    
    
    <article class="crew-info flow" id="the-commander" role="dotPanel" tabindex="0">
      <header class="flow flow--space-small">
        <h2 class= "text-accent fs-500 uppercase ff-serif">Commander</h2>
        <p class= "fs-700 uppercase ff-serif">Douglas Hurley</p>
      </header>
        <p class="text-accent">Douglas Gerald Hurley is an American engineer,former Marine Corps pilot and former NASA astronaut. He launched into space for the third time as commander of Crew Dragon Demo-2.</p>
    </article>
    <article hidden class="crew-info flow" id="the-specialist" role="dotPanel" tabindex="-1">
      <header class="flow flow--space-small">
        <h2 class= "text-accent fs-500 uppercase ff-serif">Mission Specialist</h2>
        <p class= "fs-700 uppercase ff-serif">Mark Shuttleworth</p>
      </header>
        <p class="text-accent">Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Linux-based Ubuntu operating system Shuttleworth became the first South African to travel to space as a space tourist.</p>
    </article>
    <article hidden class="crew-info flow" id="the-pilot" role="dotPanel" tabindex="-1">
      <header class="flow flow--space-small">
        <h2 class= "text-accent fs-500 uppercase ff-serif">Pilot</h2>
        <p class= "fs-700 uppercase ff-serif">Victor Glover</p>
      </header>
        <p class="text-accent">Pilot on the first operational flight of the SpaceX Crew Dragon to the International Space Station. Glover is a commander in the U.S. Navy where he pilots an F/A-18.He was a crew member of Expedition 64, and served as a station systems flight engineer. </p>
    </article>
    <article hidden class="crew-info flow" id="the-engineer" role="dotPanel" tabindex="-1">
      <header class="flow flow--space-small">
        <h2 class= "text-accent fs-500 uppercase ff-serif">Flight Engineer</h2>
        <p class= "fs-700 uppercase ff-serif">Anousheh Ansari</p>
      </header>
        <p class="text-accent">Anousheh Ansari is an Iranian American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to fly to the ISS, and the first Iranian in space. </p>
    </article>

    <div class="dot-indicators flex" role="dotindicators" aria-label="crew member list">
        <button aria-selected="true" aria-controls="the-commander" data-image="douglas-commander" tabindex="0" role="dot"><span class="sr-only">The commander</span></button>
        <button aria-selected="false" aria-controls="the-specialist" data-image="mark-specialist" tabindex="-1" role="dot"><span class="sr-only">The mission specialist</span></button>
        <button aria-selected="false" aria-controls="the-pilot" data-image="victor-pilot" tabindex="-1" role="dot"><span class="sr-only">The pilot</span></button>
        <button aria-selected="false" aria-controls="the-engineer" data-image="anousheh-engineer" tabindex="-1" role="dot"><span class="sr-only">The crew engineer</span></button>
    </div>
    
    
    
  </main>
  
<body>

</body>
</html>