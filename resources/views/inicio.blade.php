<x-guest-layout title="AD Motos - Peças e Acessórios">
    <x-header />
    <div class="w-full overflow-hidden">
        <div id="conteudos" class="transition-all duration-500 w-[200vw] flex overflow-hidden flex-nowrap">
            <div id="conteudo_admotos" class="w-screen">
                <x-admotos />
            </div>
            <div id="conteudo_alseh" class="w-screen h-0">
                <x-alseh />
            </div>
        </div>
    </div>
    <x-footer />
</x-guest-layout>
<script>
    class ScriptAlternarConteudo{
        constructor(){
            this.header = document.querySelector("header")
            this.conteudos = document.getElementById("conteudos").classList
            this.admotos = document.getElementById("conteudo_admotos").classList
            this.alseh = document.getElementById("conteudo_alseh").classList
            this.detectar_mudanca()
        }
        alterar_conteudo(conteudo){
            if(conteudo == "alseh"){
                console.log("altura alseh")
                this.conteudos.add("ml-[-100vw]")
                this.admotos.add("h-0")
                this.alseh.remove("h-0")
            } else {
                console.log("altura admotos")
                this.conteudos.remove("ml-[-100vw]")
                this.admotos.remove("h-0")
                this.alseh.add("h-0")
            }
        }
        detectar_mudanca(){
            
            this.header.addEventListener("click", () => {
                this.alterar_conteudo(header.menu_atual)
            })
        }
    }
    new ScriptAlternarConteudo()
</script>