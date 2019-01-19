import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import axios from 'axios'
import VueAxios from 'vue-axios'


import Dashboard from './components/auth/Dashboard.vue'
import Home from './components/auth/Home.vue'
import Login from './components/auth/Login.vue'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
            path: '/',
            name: 'home',
            component: Home
    },
  ]
});

export default router
