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
            <a href="https://www.rimji.com/"><img src="https://user-images.githubusercontent.com/88181976/129444878-06aa2a2a-b03c-4c54-b544-60cefb073e90.png" alt="rimji" width="90" height="45"></a><br>
            </nav>
        </header>

        <article>
            <section>
            <img src="https://user-images.githubusercontent.com/88181976/140884943-211d82ba-6a5f-43ab-b242-1e8259a32373.jpg" alt="rimji" width="100" height="100"></a><br>
           
                @yield('content')
            </section>
        </article>

        <footer>
             <small><center>
             <a href="https://www.rimji.com/about/">About</a> &nbsp &nbsp <a href="https://www.rimji.com/contact/">Contact</a> &nbsp &nbsp <a href="https://www.instagram.com/rimji.india/">Instagram</a>&nbsp &nbsp <a href="https://www.facebook.com/rimji.india/">Facebook</a><br>
             &copy; 2021
             </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
