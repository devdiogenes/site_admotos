@props(['type' => 'phone', 'confirm_text' => "", 'href' => "", "target" => "_self"])

<a target="{{$target}}" href="{{$href}}">
    <img onclick="exibir_contact_icon_message('{{$confirm_text}}')" class="w-7 m-1 cursor-pointer" src="/assets/img/icon_{{$type}}_rounded_white_blue.svg"/>
</a>