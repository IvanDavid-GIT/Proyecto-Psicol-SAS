<script setup>
import useEstudiantes from '../../composables/estudiantes';
import { onMounted } from 'vue';


const { estudiantes, getEstudiantes, destroyEstudiante } = useEstudiantes();
onMounted(() => getEstudiantes());
</script>

<template>
    <div class="mt-12">
        <div class="flex justify-end m-2 p-2">
            <RouterLink :to="{ name: 'estudiantesCreate' }"
                class="px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded">Crear Estudiante</RouterLink>
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
                            Semestre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="estudiante in     estudiantes" :key="estudiante.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ estudiante.documento }}</td>
                        <td class="px-6 py-4">{{ estudiante.nombres }}</td>
                        <td class="px-6 py-4">{{ estudiante.telefono }}</td>
                        <td class="px-6 py-4">{{ estudiante.email }}</td>
                        <td class="px-6 py-4">{{ estudiante.direccion }}</td>
                        <td class="px-6 py-4">{{ estudiante.ciudad }}</td>
                        <td class="px-6 py-4">{{ estudiante.semestre }}</td>
                        <td class="px-6 py-4 space-y-2.5">
                            <RouterLink :to="{ name: 'estudiantesEdit', params: { id: estudiante.id } }"
                                class="text-white bg-blue-700 hover:bg-blue-900 rounded px-4 py-2">
                                Editar
                            </RouterLink>
                            <button @click="destroyEstudiante(estudiante.id)"
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