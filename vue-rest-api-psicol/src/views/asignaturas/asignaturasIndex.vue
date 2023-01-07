<script setup>
import useAsignaturas from '../../composables/asignaturas';
import { onMounted } from 'vue';


const { asignaturas, getAsignaturas, destroyAsignatura } = useAsignaturas();
onMounted(() => getAsignaturas());
</script>

<template>
    <div class="mt-12">
        <div class="flex justify-end m-2 p-2">
            <RouterLink :to="{ name: 'asignaturasCreate' }"
                class="px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded">Crear Asignatura</RouterLink>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Creditos
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Area
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="asignatura in     asignaturas" :key="asignatura.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ asignatura.nombre }}</td>
                        <td class="px-6 py-4">{{ asignatura.descripcion }}</td>
                        <td class="px-6 py-4">{{ asignatura.creditos }}</td>
                        <td class="px-6 py-4">{{ asignatura.area }}</td>
                        <td class="px-6 py-4">{{ asignatura.tipo }}</td>
                        <td class="px-6 py-4 space-y-2.5">
                            <!-- <RouterLink :to="{ name: 'asignaturasEdit', params: { id: asignatura.id } }"
                                class="text-white bg-blue-700 hover:bg-blue-900 rounded px-4 py-2">
                                Editar
                            </RouterLink>
                            <button @click="destroyAsignatura(asignatura.id)"
                                class="text-white bg-red-500 hover:bg-red-700 rounded px-4 py-2">
                                Eliminar
                            </button> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>