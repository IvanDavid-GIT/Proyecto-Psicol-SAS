<script setup>
import { reactive } from 'vue';
import useAsignaturas from '../../composables/asignaturas';

const { storeAsignatura, errors } = useAsignaturas();

const form = reactive({
    nombre: "",
    descripcion: "",
    creditos: "",
    area: "",
    tipo: "",
});



</script>

<template>
    <div class="mt-12">
        <form class="max-w-lg mx-auto p-4 bg-white  shadow-lg rounded-lg" @submit.prevent="storeAsignatura(form)">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                    <input type="text" id="nombre" v-model="form.nombre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Lorem Ipsum">
                    <div v-if="errors.nombre">
                        <span class="text-sm text-red-400">{{ errors.nombre[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="creditos" class="block mb-2 text-sm font-medium text-gray-900 ">Creditos</label>
                    <input type="text" id="creditos" v-model="form.creditos"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="7">
                    <div v-if="errors.creditos">
                        <span class="text-sm text-red-400">{{ errors.creditos[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="area" class="block mb-2 text-sm font-medium text-gray-900 ">Area de conocimiento</label>
                    <input type="text" id="area" v-model="form.area"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Sistemas">
                    <div v-if="errors.area">
                        <span class="text-sm text-red-400">{{ errors.area[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 ">Tipo</label>
                    <select id="tipo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="">Seleccione un tipo</option>
                        <option value="1">Electiva</option>
                        <option value="2">Obligatoria</option>
                    </select>
                    <div v-if="errors.tipo">
                        <span class="text-sm text-red-400">{{ errors.tipo[0] }}</span>
                    </div>
                </div>

            </div>
            <div>
                <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
                <textarea id="descripcion" rows="3"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                     border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Qui deserunt illum id molestiae. Aperiam est tenet..."></textarea>
                <div v-if="errors.descripcion">
                    <span class="text-sm text-red-400">{{ errors.descripcion[0] }}</span>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Guardar</button>
            </div>

        </form>

    </div>
</template>
