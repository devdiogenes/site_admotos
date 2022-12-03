@props(['icon' => "", 'titulo' => "", 'descricao' => ""])

<div class="max-w-[240px] m-5 flex flex-col items-center"> 
    <img class="w-8" src="/assets/img/pilar_{{$icon}}.svg"/>
    <h1 class="text-2xl text-blue my-4">{{$titulo}}</h1>
    <p class="text-sm">{{$descricao}}</p>
</div>