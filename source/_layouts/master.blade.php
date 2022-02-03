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
            <a href="https://www.rimji.com/"><img src="https://user-images.githubusercontent.com/88181976/152281749-9744be5a-47ae-446d-81dc-e725db36a1fe.png" alt="RIMJI AYURVEDA" width="100" height="60"></a>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
         <small><center>
             <a href="https://www.facebook.com/rimjibeauty"><u>facebook</u></a>
             &nbsp&nbsp
             <a href="https://www.instagram.com/rimjibeauty"><u>instagram</u></a>
             &nbsp&nbsp
             <a href="https://www.rimji.com/contact/"><u>contact us</u></a>
             <br>
             &copy; RIMJI
        </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
