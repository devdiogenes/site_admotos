@props(['nome' => '', 'name' => '', 'tipo' => 'normal'])
@php
    if($tipo == 'normal'){
        $label_style = "flex-row h-12 items-center";
        $input_style = "";
        $tag_input = "input";

    } else {
        $label_style = "flex-col items-start";
        $input_style = "h-20 resize-none border-none focus:ring-0 p-0";
        $tag_input = 'textarea';
    }
@endphp

<label id="label_{{$name}}" class="{{$label_style}} m-3 bg-silver min-[475px]:w-96 rounded-3xl flex cursor-text" for="{{$name}}">
    <div class="pl-5 h-12 flex items-center">{{$nome}}: </div>
    <div class="w-full flex justify-center items-center">
        <{{$tag_input}}
            onfocus="document.getElementById('label_{{$name}}').classList.add('border-[1px]', 'border-gray')"
            onfocusout="document.getElementById('label_{{$name}}').classList.remove('border-[1px]', 'border-gray')"
            class="text-sm w-full mx-5 bg-silver focus:outline-none font-normal {{$input_style}}"
            name="{{$name}}"
            id="{{$name}}"
        ></{{$tag_input}}>
    </div>
</label>