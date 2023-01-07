<script setup>
import useProfesores from '../../composables/profesores';
import { onMounted } from 'vue';


const { profesores, getProfesores, destroyProfesor } = useProfesores();
onMounted(() => getProfesores());
</script>

<template>
    <div class="mt-12">
        <div class="flex justify-end m-2 p-2">
            <RouterLink :to="{ name: 'profesoresCreate' }"
                class="px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded">Crear Profesor</RouterLink>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Documento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombres
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telefono
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dirección
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ciudad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="profesor in profesores" :key="profesor.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ profesor.documento }}</td>
                        <td class="px-6 py-4">{{ profesor.nombres }}</td>
                        <td class="px-6 py-4">{{ profesor.telefono }}</td>
                        <td class="px-6 py-4">{{ profesor.email }}</td>
                        <td class="px-6 py-4">{{ profesor.direccion }}</td>
                        <td class="px-6 py-4">{{ profesor.ciudad }}</td>
                        <td class="px-6 py-4 space-y-2.5">
                            <RouterLink :to="{ name: 'profesoresEdit', params: { id: profesor.id } }"
                                class="text-white bg-blue-700 hover:bg-blue-900 rounded px-4 py-2">
                                Editar
                            </RouterLink>
                            <button @click="destroyProfesor(profesor.id)"
                                class="text-white bg-red-500 hover:bg-red-700 rounded px-4 py-2">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>