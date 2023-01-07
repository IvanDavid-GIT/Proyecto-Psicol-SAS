<script setup>
import useAsignaturas from '../../composables/asignaturas';
import { onMounted } from 'vue';

const { asignatura, getAsignatura, updateAsignatura, errors } = useAsignaturas();

const props = defineProps({
    id: {
        required: true,
        type: String
    }
});

onMounted(() => getAsignatura(props.id));

</script>

<template>
    <div class="mt-12">
        <form class="max-w-lg mx-auto p-4 bg-white  shadow-lg rounded-lg"
            @submit.prevent="updateAsignatura($route.params.id)">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                    <input type="text" id="nombre" v-model="asignatura.nombre" maxlength="9"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="888888888">
                    <div v-if="errors.nombre">
                        <span class="text-sm text-red-400">{{ errors.nombre[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="nombres" class="block mb-2 text-sm font-medium text-gray-900 ">Nombres</label>
                    <input type="text" id="nombres" v-model="estudiante.nombres"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John Doe">
                    <div v-if="errors.nombres">
                        <span class="text-sm text-red-400">{{ errors.nombres[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 ">Ciudad</label>
                    <input type="text" id="ciudad" v-model="estudiante.ciudad"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Medellín">
                    <div v-if="errors.ciudad">
                        <span class="text-sm text-red-400">{{ errors.ciudad[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 ">Dirección</label>
                    <input type="text" id="direccion" v-model="estudiante.direccion"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cl 8 # 12 - 34">
                    <div v-if="errors.direccion">
                        <span class="text-sm text-red-400">{{ errors.direccion[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 ">Telefono</label>
                    <input type="text" id="telefono" v-model="estudiante.telefono"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="12345678">
                    <div v-if="errors.telefono">
                        <span class="text-sm text-red-400">{{ errors.telefono[0] }}</span>
                    </div>
                </div>
                <div>
                    <label for="semestre" class="block mb-2 text-sm font-medium text-gray-900 ">Semestre</label>
                    <input type="number" id="semestre" v-model="estudiante.semestre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="1">
                    <div v-if="errors.semestre">
                        <span class="text-sm text-red-400">{{ errors.semestre[0] }}</span>
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                <input type="email" id="email" v-model="estudiante.email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="john.doe@company.com">
                <div v-if="errors.email">
                    <span class="text-sm text-red-400">{{ errors.email[0] }}</span>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Actualizar</button>
            </div>

        </form>

    </div>
</template>


