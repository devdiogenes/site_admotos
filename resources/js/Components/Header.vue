<script setup>
import { ref } from 'vue'
import Horario from './header_components/Horario.vue'

const exibe_horario = ref(false)
function horario(){
    if(exibe_horario.value == false){
        return "hidden"
    } else {
        return "flex"
    }
}

const atual = ref("inicio")
function cor_de_fundo(opcao){
    if(opcao == atual.value){
        return "bg-matte-blue"
    } else {
        return ""
    }
}
</script>
<template>
    <div class="bg-white w-full max-w-screen-xl h-24 flex justify-between">
        <img class="w-40 ml-4 sm:ml-20" src="/assets/img/logo.svg"/>
        <div class="flex mr-4 sm:mr-16">
            <img @click="exibe_horario = !exibe_horario" class="w-10 cursor-pointer sm:cursor-default" src="/assets/img/relogio.svg"/>
            <Horario class="hidden sm:flex"/>
        </div>
    </div>
    <Horario :class="horario()" class="sm:hidden mb-5"/>
    <nav class="bg-blue w-full h-10 flex justify-center items-center text-white text-sm font-medium cursor-pointer">
        <ul class="w-full h-full max-w-screen-xl sm:mx-20 flex justify-center sm:justify-start">
            <li @click="atual = 'inicio'" :class="cor_de_fundo('inicio')" class="px-5 h-full flex items-center">
                INÍCIO
            </li>
            <li @click="atual = 'alseh'" :class="cor_de_fundo('alseh')" class="px-5 h-full flex items-center">
                CONHEÇA A ALSEH
            </li>
        </ul>
    </nav>
</template>