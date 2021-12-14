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
            <a href="https://www.rimji.com/"><img src="https://user-images.githubusercontent.com/88181976/145967222-eec5fca4-add7-47f2-847f-5d2b582a9999.png" alt="rimji" width="80" height="40"></a>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
             <small><center>
             <a href="https://www.rimji.com/about/">About</a> &nbsp &nbsp <br><a href="https://www.rimji.com/contact/">Contact</a> &nbsp &nbsp<br> <a href="https://www.instagram.com/houseofrimji/">Instagram</a>&nbsp &nbsp<br><a href="https://www.facebook.com/houseofrimji/">Facebook</a><br>
             &copy; 2021 House of Rimji
             </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
