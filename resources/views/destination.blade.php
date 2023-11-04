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
    <script src="{{ asset('js/destination.js') }}" defer></script>
</head>

<body class="destination">
  <a class="skip-to-content" href="#main">Skip to content</a>
  <header class="primary-header flex">
    <div>
      <img src="./assets/shared/logo.svg" alt="space tsourism logo" class="logo">
    </div>
    <button class="mobile-nav-toggle" aria-controls="primary-navigation"><span class="sr-only" aria-expanded="false">Menu</span></button>
    <nav>
        <ul id="primary-navigation" data-visible="false" class="primary-navigation underline-indicators flex">
            <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="{{ route('index') }}"><span aria-hidden="true">00</span>Home</a>
            <li class="active"><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="{{ route('destination.page') }}"><span aria-hidden="true">01</span>Destination</a>
            <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="{{ route('crew.page') }}"><span aria-hidden="true">02</span>Crew</a>
            <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="technology.html"><span aria-hidden="true">03</span>Technology</a>
        </ul>
    </nav>
  </header>
  
  <main id="main" class="grid-container grid-container--destination flow">
    <h1 class="numbered-title"><span aria-hidden="true">01</span> Pick your destination</h1> 

    {{-- The Moon --}}
    <picture id="moon-img">
      <source srcset="assets/destination/image-moon.webp" type="image/webp">
      <img src="assets/destination/image-moon.png" alt="the moon">
    </picture>
    {{-- The Mars --}}
    <picture hidden id="mars-img">
      <source srcset="assets/destination/image-mars.webp" type="image/webp">
      <img src="assets/destination/image-mars.png" alt="the mars">
    </picture>
  {{-- The Europa --}}
    <picture hidden id="europa-img">
      <source srcset="assets/destination/image-europa.webp" type="image/webp">
      <img src="assets/destination/image-europa.png" alt="the europa">
    </picture>
  {{-- The Titan --}}  
    <picture hidden id="titan-img">
      <source srcset="assets/destination/image-titan.webp" type="image/webp">
      <img src="assets/destination/image-titan.png" alt="the titan">
    </picture>
    

    <div class="tab-list flex underline-indicators" role="tablist" aria-label="destination list">
        <button aria-selected="true" class="uppercase ff-sans-cond text-accent letter-spacing-2" role="tab" aria-controls="moon-tab" tabindex="0" data-image="moon-img">Moon</button>
        <button aria-selected="false" class="uppercase ff-sans-cond text-accent letter-spacing-2" role="tab" aria-controls="mars-tab" tabindex="-1" data-image="mars-img">Mars</button>
        <button aria-selected="false" class="uppercase ff-sans-cond text-accent letter-spacing-2" role="tab" aria-controls="europa-tab" tabindex="-1" data-image="europa-img">Europa</button>
        <button aria-selected="false" class="uppercase ff-sans-cond text-accent letter-spacing-2" role="tab" aria-controls="titan-tab" tabindex="-1" data-image="titan-img">Titan</button>
    </div>
    
    {{-- The Moon Desc--}}
    <article class="destination-info flow" tabindex="0" id="moon-tab" role="tabPanel">
        <h2 class= "fs-800 uppercase ff-serif">Moon</h2>
        <p class="text-accent">See our planet as you’ve never seen it before. A perfect relaxing trip away to help regain perspective and come back refreshed. While you’re there, take in some history by visiting the Luna 2 and Apollo 11 landing sites.</p>
        <div class="destination-meta flex">
            <div>
                <h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
                <p class="ff-serif uppercase">384,400 km</p>
            </div>
            <div>
                <h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
                <p class="ff-serif uppercase">3 days</p>
            </div>
        </div>
    </article>
    {{-- The Mars Desc--}}
    <article hidden class="destination-info flow" tabindex="-1" id="mars-tab" role="tabPanel">
      <h2 class= "fs-800 uppercase ff-serif">Mars</h2>
      <p class="text-accent">Don’t forget to pack your hiking boots. You’ll need them to tackle Olympus Mons, the tallest planetary mountain in our solar system. It’s two and a half times the size of Everest!</p>
      <div class="destination-meta flex">
          <div>
              <h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
              <p class="ff-serif uppercase">225 mil. km</p>
          </div>
          <div>
              <h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
              <p class="ff-serif uppercase">9 months</p>
          </div>
      </div>
  </article>
    {{-- The Europa Desc--}}
    <article hidden class="destination-info flow" tabindex="-1" id="europa-tab" role="tabPanel">
      <h2 class= "fs-800 uppercase ff-serif">Europa</h2>
      <p class="text-accent">The smallest of the four Galilean moons orbiting Jupiter, Europa is a winter lover’s dream. With an icy surface, it’s perfect for a bit of ice skating, curling, hockey, or simple relaxation in your snug wintery cabin.</p>
      <div class="destination-meta flex">
          <div>
              <h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
              <p class="ff-serif uppercase">628 mil. km</p>
          </div>
          <div>
              <h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
              <p class="ff-serif uppercase">3 years</p>
          </div>
      </div>
  </article>
    {{-- The Titan Desc--}}
    <article hidden class="destination-info flow" tabindex="-1" id="titan-tab" role="tabPanel">
      <h2 class= "fs-800 uppercase ff-serif">Titan</h2>
      <p class="text-accent">The only moon known to have a dense atmosphere other than Earth, Titan is a home away from home (just a few hundred degrees colder!). As a bonus, you get striking views of the Rings of Saturn.</p>
      <div class="destination-meta flex">
          <div>
              <h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
              <p class="ff-serif uppercase">1.6 bil. km</p>
          </div>
          <div>
              <h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
              <p class="ff-serif uppercase">7 years</p>
          </div>
      </div>
  </article>
  </main>
  
<body>

    

  
</body>
</html>