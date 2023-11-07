<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pebo</title>
    <meta content="Pebo" property="og:title"/>
    <meta content="https://assets-global.website-files.com/5c6eb5400253230156de2bd6/5cdc268dd7274d5c05c6009a_Business%20SEO.jpg" property="og:image"/>
    <meta content="Pebo" property="twitter:title"/>
    <meta content="https://assets-global.website-files.com/5c6eb5400253230156de2bd6/5cdc268dd7274d5c05c6009a_Business%20SEO.jpg" property="twitter:image"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])

    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>

    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]
            }
        });
    </script>
    <script type="text/javascript">
        !function(o, c) {
            var n = c.documentElement
                , t = " w-mod-";
            n.className += t + "js",
            ("ontouchstart"in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://assets-global.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="https://assets-global.website-files.com/img/webclip.png" rel="apple-touch-icon"/>

</head>
<body class="body">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script
        src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=632acd1acddd05145e7b99df"
        type="text/javascript"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"
    ></script>

    @vite(['resources/js/app.js'])

</body>
</html>
