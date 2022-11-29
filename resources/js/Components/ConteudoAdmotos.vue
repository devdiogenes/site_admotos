<script setup>
</script>
<template>
    <main class="bg-silver w-full">
        <div class="min-h-[300px] flex flex-col justify-center m-4">
            <h2 class="text-xl font-normal">Empresa referência</h2>
            <h1 class="text-blue text-4xl font-medium leading-snug mb-5">Em toda a Bahia</h1>
            <p class="max-w-sm text-sm font-light">Somos uma importadora referência em qualidade e eficiência. Através dos nossos produtos, nossos clientes podem adquirir peças de altíssima qualidade, por um preço acessível.</p>
            <div>
                <img @click="exibe_horario = !exibe_horario" class="w-10 cursor-pointer sm:cursor-default" src="/assets/img/relogio.svg"/>
            </div>
        </div>
    </main>
</template>