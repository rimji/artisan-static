<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav> 
             <a href="https://www.rimji.com/"><img src="https://user-images.githubusercontent.com/88181976/146128471-344f506c-b12e-4858-af4a-efda4013daff.png" alt="Rimji Co." width="80" height="25"></a><b><sup>&reg;</sup></b>   
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
        <small><center>
             <a href="https://www.facebook.com/rimjico">Facebook</a>
             &nbsp
             <a href="https://www.instagram.com/rimjico">Instagram</a>
             &nbsp
             <a href="https://www.rimji.com/contact/">Contact us</a>
             <br>
             &copy; RIMJI Co.
        </center></small> 
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
