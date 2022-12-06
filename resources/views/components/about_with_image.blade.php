@props(["titulo" => "", "descricao" => "", "imagem" => "", "img_alt" => ""])

<x-section>
    <div class="flex flex-col-reverse items-center px-5 my-20 lg:flex-row">
        <img class="cursor-zoom-in max-w-md w-full lg:m-7" src="assets/img/{{$imagem}}.jpg" alt="{{$img_alt}}" onclick="full_picture.mostrar('{{$imagem}}')"/>
        <div class="mb-14 lg:mx-7 max-w-full">
            <x-h1>
                {{$titulo}}
            </x-h1>
            <x-bar />
            <x-description>
                {{$slot}}
            </x-description>
        </div>
    </div>
</x-section>