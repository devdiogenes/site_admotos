<script>
    function exibe_oculta_horario(){
        horario = document.getElementById("horario_1")
        horario.classList.toggle("flex")
        horario.classList.toggle("hidden")
    }
    var menu_atual = "inicio"
    function destaca_menu(menu){
        document.getElementById(menu_atual).classList.remove("bg-matte-blue")
        document.getElementById(menu).classList.add("bg-matte-blue")
        menu_atual = menu
    }
</script>

<div class="bg-white w-full max-w-screen-xl h-24 flex justify-between">
    <img class="w-40 ml-4 sm:ml-20" src="/assets/img/logo.svg"/>
    <div class="flex mr-4 sm:mr-16">
        <img onclick="exibe_oculta_horario()" class="w-10 cursor-pointer sm:cursor-default" src="/assets/img/relogio.svg"/>
        <x-header_components.horario class="hidden sm:flex"/>
    </div>
</div>
<x-header_components.horario id="1" class="hidden sm:hidden mb-5"/>
<nav class="bg-blue w-full h-10 flex justify-center items-center text-white text-sm font-medium cursor-pointer">
    <ul class="w-full h-full max-w-screen-xl sm:mx-20 flex justify-center sm:justify-start">
        <li id="inicio" onclick="destaca_menu('inicio')" class="bg-matte-blue px-5 h-full flex items-center">
            INÍCIO
        </li>
        <li id="alseh" onclick="destaca_menu('alseh')" class="px-5 h-full flex items-center">
            CONHEÇA A ALSEH
        </li>
    </ul>
</nav>