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
             <a href="https://www.rimji.com/about/">About</a><br><a href="https://www.rimji.com/contact/">Contact</a><br><a href="https://www.instagram.com/houseofrimji/">Instagram</a><br><a href="https://www.facebook.com/houseofrimji/">Facebook</a>
             <a href="https://www.instagram.com/houseofrimji"><img src="https://user-images.githubusercontent.com/88181976/146123332-efb0e056-d101-43b3-96f9-5200229d1880.png" alt="Instagram" width="20" height="20"></a>
             <a href="https://www.facebook.com/houseofrimji"><img src="https://user-images.githubusercontent.com/88181976/146122205-1ad12db6-cca7-41b8-a420-99d7f69d762e.png" alt="Facebook" width="20" height="20"></a>
             <br><br>
             &copy; 2021 House of Rimji
             </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
