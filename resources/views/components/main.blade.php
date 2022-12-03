<main class="bg-silver w-full flex justify-center">
    <div class="w-full md:w-[calc(100%-200px)] max-w-screen-xl flex flex-col lg:flex-row justify-between">
        <div class="min-h-[450px] flex flex-col justify-center m-4">
            <h2 class="text-2xl font-normal">Empresa referência</h2>
            <h1 class="text-blue text-5xl font-medium leading-snug mb-5">Em <strong class="font-medium text-red">toda</strong> a Bahia</h1>
            <p class="max-w-sm text-sm font-light">Somos uma importadora de peças de motos referência em qualidade e eficiência. Através dos nossos produtos, nossos clientes podem adquirir peças de altíssima qualidade, por um preço acessível.</p>
            <x-contact_icons />
        </div>
        <form class="bg-white my-10 mx-4 flex flex-col items-center justify-center text-sm font-medium">
            <h2 class="text-blue text-2xl font-bold mt-10">Contato</h2>
            <div class="sm:m-4">
                <x-input nome="Nome" name="nome"/>
                <x-input nome="Telefone" name="telefone" />
                <x-input nome="Mensagem" name="mensagem" tipo="textarea" />
            </div>
            <div class="bg-blue text-white h-9 flex items-center justify-center px-10 rounded-3xl mb-10 cursor-pointer">
                Enviar
            </div>
        </form>
    </div>
</main>