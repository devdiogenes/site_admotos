<x-guest-layout title="AD Motos - Peças e Acessórios">
    @if(session('form_status'))
        <script>
            alert("{{session('form_status')}}")
        </script>
    @endif
    <x-whatsapp_icon />
    <x-full_picture />
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
<x-scripts />