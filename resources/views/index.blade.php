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
</head> 
<body class="home">
    <a class="skip-to-content" href="#main">Skip to content</a>
    <header class="primary-header flex">
        <div>
            <img src="{{asset('assets/shared/logo.svg')}}" alt="space tourism logo" class="logo">
        </div>
        <button class="mobile-nav-toggle" aria-controls="primary-navigation"><span class="sr-only" aria-expanded="false">Menu</span></button>
        <nav>
            <ul id="primary-navigation" data-visible="false" class="primary-navigation flex underline-indicators">
                <li class="active"><a class="uppercase ff-sans-cond fs-400 text-white letter-spacing-2" href="{{ route('index') }}"><span aria-hidden="true">00</span>Home</a>
                <li><a class="uppercase ff-sans-cond fs-400 text-white letter-spacing-2" href="{{ route('destination.page') }}"><span aria-hidden="true">01</span>Destination</a>
                <li><a class="uppercase ff-sans-cond fs-400 text-white letter-spacing-2" href="{{ route('crew.page') }}"><span aria-hidden="true">02</span>Crew</a>
                <li><a class="uppercase ff-sans-cond fs-400 text-white letter-spacing-2" href="#"><span aria-hidden="true">03</span>Technology</a>
            </ul>
        </nav>
    </header>
    
    <main id="main" class="grid-container grid-container--home">
        <div>
          <h1 class="text-accent fs-500 ff-sans-cond uppercase letter-spacing-1">So, you want to travel to
          <span class="d-block fs-900 ff-serif text-white">Space</span></h1>
          
          <p>Let’s face it; if you want to go to space, you might as well genuinely go to outer space and not hover kind of on the edge of it. Well sit back, and relax because we’ll give you a truly out of this world experience! </p>
        </div>
        <div>
          <a href="#" class="large-button uppercase ff-serif text-dark bg-white">Explore</a>
        </div>
      </main>

</body>
</html>