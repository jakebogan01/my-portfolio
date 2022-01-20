<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @routes
        <!--META DATA-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
        <meta http-equiv="Cache-control" content="public">
        <meta http-equiv="Cache-control" content="private">
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Cache-control" content="no-store">
        <meta name="description" content="Personal Portfolio" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="Jake, Bogan, Portfolio, Website, Web Design,Jr Web Developer, Project" />
        <meta name="author" content="Jake Bogan" />
        <link rel="icon" href="/img/images/icon.png">
        <link rel="apple-touch-icon" sizes="150x150" href="/img/images/icon.png" />
        <!--TITLE-->
        <title inertia>{{ config('app.name') }}</title>
        <!--FONTS-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--CSS-->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
        <!--JS-->
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <!--STYLES-->
        <style>
            *, *::before, *::after{
                box-sizing: inherit;
                outline: none;
                box-shadow: none;
                border: 0;
                margin: 0;
                padding: 0;
                scrollbar-width: thin;
                scrollbar-color: #000000 #252238;
            }
            ::-webkit-scrollbar{
                width: 0.3125rem;
                background-color: #252238;
            }
            ::-webkit-scrollbar-thumb{
                background: #000000;
            }
            html, body{
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                user-select: none;
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            body {
                background-color: #242236;
                background-image: url("{{ asset('/img/images/bkg.png') }}");
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-center bg-no-repeat bg-cover text-xl overflow-x-hidden overflow-y-auto">
        <!--SPLASH SCREEN-->
        <div id="loader" class="absolute flex justify-center items-center top-0 left-0 right-0 bottom-0 w-full h-full bg-black text-white z-50" style="background-image: linear-gradient(to bottom left, #A433F6, #63C7F8);">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_076nxked.json" background="transparent" speed="0.8"  style="width: 300px; height: 300px;" loading="eager" loop autoplay></lottie-player>
        </div>
        <!--VUE JS APP-->
        @inertia
        <noscript>
            <strong>
                We're sorry but this site doesn't work properly without JavaScript enabled. Please enable it to continue.
            </strong>
        </noscript>
        <script>
            let loader = document.getElementById('loader');
            let spalshScreenStatus = localStorage.getItem("hasSplashed");

            if(spalshScreenStatus === "true") {
                loader.style.display = "none";
            } else {
                setTimeout(() => {
                    loader.style.display = "none";
                    localStorage.setItem("hasSplashed", "true");
                }, 3000);
            }
        </script>
    </body>
</html>
