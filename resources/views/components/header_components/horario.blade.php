@props(['class' => 'flex', 'id' => '0'])

<div class="items-center {{$class}}" id="horario_{{$id}}">
    <div class="min-h-min h-10 flex items-center">
        <div class="flex flex-col mx-4">
            <span class="text-md font-bold text-blue leading-5"><time>08:00</time> - <time>18:00</time></span>
            <span class="text-sm text-gray">Segunda a Sexta</span>
        </div>
        <div class="bg-gray w-[1px] h-6"></div>
        <div class="flex flex-col mx-4">
            <span class="text-md font-bold text-blue leading-5"><time>08:00</time> - <time>12:00</time></span>
            <span class="text-sm text-gray">Sábado</span>
        </div>
    </div>
</div>