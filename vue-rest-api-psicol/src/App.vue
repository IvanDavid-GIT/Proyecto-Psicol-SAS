<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>

    <div class="max-w-7xl mx-auto">
      <nav class="p-3">
        <RouterLink class="px-4 py-2 mr-4 bg-gray-600 hover:bg-gray-800 rounded text-white" to="/estudiantes">
          Estudiantes</RouterLink>
          <RouterLink class="px-4 py-2 mr-4 bg-gray-600 hover:bg-gray-800 rounded text-white" to="/profesores">
          Profesores</RouterLink>
          <RouterLink class="px-4 py-2 mr-4 bg-gray-600 hover:bg-gray-800 rounded text-white" to="/asignaturas">
          Asignaturas</RouterLink>
      </nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto min-h-screen">
    <RouterView />
  </main>
</template>