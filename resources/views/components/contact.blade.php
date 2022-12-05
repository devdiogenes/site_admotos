@props(["message_color" => "blue", "id" => "main"])

<div id="contact_icon_message_{{$id}}" class="opacity-0 duration-300 flex items-center min-h-[50px] text-{{$message_color}} text-sm font-normal"></div>
<div class="flex">
    <x-contact_icon id_pai="{{$id}}" href="tel:74988215750" confirm_text="(74) 98821-5750" type="phone"/>
    <x-contact_icon id_pai="{{$id}}" target="_blank" href="https://api.whatsapp.com/send?phone=5574988215750&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" type="whatsapp"/>
    <x-contact_icon id_pai="{{$id}}" href="mailto: comercial@admotos.com.br" confirm_text="comercial@admotos.com.br" type="mail"/>
    <x-contact_icon id_pai="{{$id}}" target="_blank" href="http://instagram.com/admotosoficial" type="instagram"/>
    <x-contact_icon id_pai="{{$id}}" target="_blank" href="http://www.google.com.br/maps/place/AD+Motos+-+Pe%C3%A7as+e+Acess%C3%B3rios/@-11.6072624,-40.1260389,20z/data=!4m5!3m4!1s0x76b57f30d1e5e09:0x7954b3e3722b4217!8m2!3d-11.6070831!4d-40.1259222" type="map"/>
</div>