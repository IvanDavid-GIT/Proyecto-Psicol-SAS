import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/estudiantes',
      name: 'estudiantesIndex',
      component: () => import('../views/estudiantes/estudiantesIndex.vue')
    },
    {
      path: '/estudiantes/create',
      name: 'estudiantesCreate',
      component: () => import('../views/estudiantes/estudiantesCreate.vue')
    },
    {
      path: '/estudiantes/:id/Edit',
      name: 'estudiantesEdit',
      component: () => import('../views/estudiantes/estudiantesEdit.vue'),
      props: true,
    },




    {
      path: '/profesores',
      name: 'profesoresIndex',
      component: () => import('../views/profesores/profesoresIndex.vue')
    },
    {
      path: '/profesores/create',
      name: 'profesoresCreate',
      component: () => import('../views/profesores/profesoresCreate.vue')
    },
    {
      path: '/profesores/:id/Edit',
      name: 'profesoresEdit',
      component: () => import('../views/profesores/profesoresEdit.vue'),
      props: true,
    },



    
    {
      path: '/asignaturas',
      name: 'asignaturasIndex',
      component: () => import('../views/asignaturas/asignaturasIndex.vue')
    },
    {
      path: '/asignaturas/create',
      name: 'asignaturasCreate',
      component: () => import('../views/asignaturas/asignaturasCreate.vue')
    },
    {
      path: '/asignaturas/:id/Edit',
      name: 'asignaturasEdit',
      component: () => import('../views/asignaturas/asignaturasEdit.vue'),
      props: true,
    },

  ]
})

export default router
