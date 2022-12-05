@props(["titulo" => "", "descricao" => ""])

<x-section class="text-center ">
    <div class="flex flex-col items-center m-10">
        {{$titulo}}
        <x-bar />
        <x-description>
            {{$descricao}}
            
        </x-description>
    </div>
</x-section>