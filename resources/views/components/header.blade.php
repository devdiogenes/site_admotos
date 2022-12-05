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
<script>
    class HeaderScripts{
        constructor(){
            this.menu_atual = "inicio"
            this.horario = document.getElementById("horario_1")
            this.header = document.querySelector("header")
            this.nav = document.querySelector("nav")
            this.fixa_ao_rolar()
        }
        exibe_oculta_horario(){
            this.horario.classList.toggle("flex")
            this.horario.classList.toggle("hidden")
        }
        destaca_menu(menu){
            document.getElementById(this.menu_atual).classList.remove("bg-matte-blue")
            document.getElementById(menu).classList.add("bg-matte-blue")
            this.menu_atual = menu

        }
        fixa_ao_rolar(){
            window.onscroll = () => {
                if(window.pageYOffset > 100){
                    this.nav.classList.add("fixed", "h-14")
                    this.nav.classList.remove("h-10")
                } else {
                    this.nav.classList.remove("fixed", "h-14")
                    this.nav.classList.add("h-10")
                }
            }
        }
    }
    const header = new HeaderScripts()
</script>