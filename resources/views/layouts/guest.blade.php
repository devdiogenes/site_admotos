@props(['title' => 'AD Motos'])

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <meta name="keywords" content="moto, motos, atacado, peças, ad, admotos, hesla, alseh, bahia, motopeças, motoparts"/>
        <meta name="description" content="Somos uma importadora de peças para motocicletas referência no mercado. Através da nossa empresa, você pode adquirir produtos de altíssima qualidade por um preço acessível."/>
        <link rel="canonical" href="http://admotos.com.br"/>
        
        <title>{{$title}}</title>

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
