@props(['title' => 'AD Motos'])

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="moto, motos, atacado, peças, ad, admotos, hesla, alseh, bahia, motopeças, motoparts"/>
        <meta name="description" content="Somos uma importadora de peças para motocicletas referência no mercado. Através da nossa empresa, você pode adquirir produtos de altíssima qualidade por um preço acessível."/>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        
        <link rel="canonical" href="https://admotos.com.br"/>
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">

        <title>{{$title}}</title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170739082-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-170739082-2');
            gtag('config', 'UA-170739082-3'); 
        </script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="text-black font-ubuntu font-light w-full flex flex-col items-center antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
