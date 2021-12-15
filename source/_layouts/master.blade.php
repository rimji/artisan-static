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
            <a href="https://www.rimji.com/"><img src="https://user-images.githubusercontent.com/88181976/146128471-344f506c-b12e-4858-af4a-efda4013daff.png" alt="rimji" width="60" height="35"></a>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
             <small><center>
             <a href="https://www.rimji.com/about/">About</a>&nbsp&nbsp<a href="https://www.rimji.com/contact/">Contact</a> <br><br>
             &copy; 2021 House of Rimji<br>
             <a href="https://www.facebook.com/houseofrimji"><img src="https://user-images.githubusercontent.com/88181976/146122205-1ad12db6-cca7-41b8-a420-99d7f69d762e.png" alt="Facebook" width="27" height="27"></a>
             <a href="https://www.instagram.com/houseofrimji"><img src="https://user-images.githubusercontent.com/88181976/146123677-ffcd5aa5-c7d4-4555-96b7-9f23006b0697.png" alt="Instagram" width="23" height="23"></a>
             <br><a href="https://www.rimji.com/contact"><img src="https://user-images.githubusercontent.com/88181976/146131466-bff50488-7fb8-4940-af79-83ba84a50bf5.png" alt="Contact" width="20" height="20"></a>
        
            </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
