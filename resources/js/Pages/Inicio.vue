<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Header.vue'
import ConteudoAdmotos from '@/Components/ConteudoAdmotos.vue'

</script>
<template>
    <Head>
        <title>AD Motos - Peças e Acessórios</title>
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    </Head>
    <div class="font-ubuntu font-light w-full flex flex-col items-center">
        <Header></Header>
        <ConteudoAdmotos>

        </ConteudoAdmotos>
    </div>
</template>