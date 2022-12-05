@props(['type' => 'phone', 'confirm_text' => "", 'href' => "", "target" => "_self", "id_pai" => "main"])

<a target="{{$target}}" href="{{$href}}">
<img onclick="contact.exibir('{{$id_pai}}', '{{$confirm_text}}')" class="w-7 m-1 cursor-pointer" src="/assets/img/icon_{{$type}}_rounded_white_blue.svg"/>
</a>