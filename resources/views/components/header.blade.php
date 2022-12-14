<header class="w-full" onwheel="">
    <div class="w-full flex flex-col items-center bg-white">
        <div class="bg-white w-full md:w-[calc(100%-200px)] max-w-screen-xl h-24 flex justify-between">
            <img class="w-40 ml-4" src="/assets/img/logo.svg"/>
            <div class="flex mr-4">
                <img onclick="header.exibe_oculta_horario()" class="w-8 cursor-pointer sm:cursor-default" src="/assets/img/relogio.svg"/>
                <x-horario class="hidden sm:flex"/>
            </div>
        </div>
        <x-horario id="1" class="hidden sm:hidden mb-5"/>
        <nav class="transition-all duration-300 bg-blue w-full h-10 flex justify-center items-center text-white text-sm font-medium">
            <ul class="w-full md:w-[calc(100%-200px)] h-full max-w-screen-xl flex justify-center md:justify-start">
                <li id="inicio" onclick="header.destaca_menu('inicio')" class="transition-all duration-500 cursor-pointer bg-matte-blue px-5 h-full flex items-center">
                    INÍCIO
                </li>
                <li id="alseh" onclick="header.destaca_menu('alseh')" class="transition-all duration-500 cursor-pointer px-5 h-full flex items-center">
                    CONHEÇA A ALSEH
                </li>
            </ul>
        </nav>
    <div>
</header>