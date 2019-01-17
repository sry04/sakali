import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Landing from './../user/page/Landing'
import Catalog from './../user/page/Catalog'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Landing',
      component: Landing,
      meta: {
        requireAuth: false
      }
    },
    {
      path: '/Catalog',
      name: 'Catalog',
      component: Catalog,
      meta: {
        requireAuth: false
      }
    },
  ]
});

export default router
