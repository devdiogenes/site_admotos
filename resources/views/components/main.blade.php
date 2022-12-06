@props(["titulo_cima" => "", "titulo_principal" => "", "descricao" => "", "id" => ""])

<main class="bg-silver w-full flex justify-center">
    <div class="w-full md:w-[calc(100%-200px)] max-w-screen-xl flex flex-col lg:flex-row justify-between">
        <div class="min-h-[450px] flex flex-col justify-center m-4">
            <h2 class="text-2xl font-normal">{{$titulo_cima}}</h2>
            <h1 class="text-blue text-5xl font-medium leading-snug mb-5">{{$titulo_principal}}</h1>
            <p class="max-w-sm text-sm font-light">{{$descricao}}</p>
            <x-contact id="contact_{{$id}}" />
        </div>
        <form method="post" action="enviar" class="bg-white my-10 mx-4 flex flex-col items-center justify-center text-sm font-medium">
            @csrf 
            <h2 class="text-blue text-2xl font-bold mt-10">Contato</h2>
            <div class="sm:m-4">
                <x-input nome="Nome" name="nome"/>
                <x-input nome="Telefone" name="telefone" />
                <x-input nome="Mensagem" name="mensagem" tipo="textarea" />
            </div>
            <input type="submit" class="bg-blue text-white h-9 flex items-center justify-center px-10 rounded-3xl mb-10 cursor-pointer" value="Enviar"></input>
        </form>
    </div>
</main>