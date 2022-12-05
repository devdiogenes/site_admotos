<x-main>
    <x-slot name="titulo_cima">
        Deseja qualidade?
    </x-slot>
    <x-slot name="titulo_principal">
        Conheça a <strong class="font-medium text-red">Alseh</strong>
    </x-slot>
    <x-slot name="descricao">
        As melhores peças, com os melhores preços!
    </x-slot>
</x-main>
<x-about_with_image titulo="POR QUE A ALSEH?" imagem="itens_alseh">
    <p>
        As peças da Alseh são fabricadas com foco principal em qualidade. Ao colocar uma peça Alseh na sua moto, você se assegura de que lá estará uma peça com grande durabilidade, por um preço que cabe no seu bolso.   
    </p>
</x-about_with_image>
<x-pilares>
    <x-pilar icon="qualidade">
        <x-slot name="titulo">
            Qualidade
        </x-slot>
        <x-slot name="descricao">
            Esse é o foco da Alseh, pois o cliente merece sempre o melhor!
        </x-slot>
    </x-pilar>
    <x-pilar icon="durabilidade">
        <x-slot name="titulo">
            Durabilidade
        </x-slot>
        <x-slot name="descricao">
            Nossas peças possui alto nível em resistência, pois buscamos sempre as melhores fábricas.
        </x-slot>
    </x-pilar>
    <x-pilar icon="economia">
        <x-slot name="titulo">
            Economia
        </x-slot>
        <x-slot name="descricao">
            Mesmo com tanta qualidade, nossa organização nos permite oferecer os melhores preços para nossos clientes.
        </x-slot>
    </x-pilar>
</x-pilares>
<x-about>
    <x-slot name="titulo">
        <img class="max-w-[200px] w-full" src="assets/img/logo_alseh.svg" />
    </x-slot>
    <x-slot name="descricao">
        <p>
            Importamos e distribuimos peças para motocicletas dentro do estado da Bahia. Através de uma excelente logística e foco em qualidade, realizamos nossas vendas deixando uma grande satisfação em nossos clientes. 
        </p>
    </x-slot>
</x-about>