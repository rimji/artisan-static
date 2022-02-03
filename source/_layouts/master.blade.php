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
            <a href="https://user-images.githubusercontent.com/88181976/152282700-28ad0f10-ec83-4b57-af3b-629305b9324d.png" alt="RIMJI AYURVEDA" width="70" height="35"></a>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
         <small><center>
             <a href="https://www.facebook.com/rimjiayurveda"><u>Facebook</u></a>
             &nbsp&nbsp
             <a href="https://www.instagram.com/rimjiayurveda"><u>Instagram</u></a>
             &nbsp&nbsp
             <a href="https://www.rimji.com/contact/"><u>Contact us</u></a>
             <br>
             &copy; RIMJI AYURVEDA CO.
        </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
