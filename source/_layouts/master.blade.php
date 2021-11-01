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
            <strong><a href="https://www.rimji.com/"><img src="https://user-images.githubusercontent.com/88181976/139621169-57664cc7-77c1-4a43-8c5a-3fd553cab9d3.png" alt="Rimji" width="300" height="700"></a></strong><br>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
             <small><center>
             <a href="https://www.rimji.com/about/">About</a> &nbsp &nbsp <a href="https://www.rimji.com/contact/">Contact</a> &nbsp &nbsp <a href="https://www.instagram.com/rimji.official/">Instagram</a><br>
             &copy; 2021
             </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
