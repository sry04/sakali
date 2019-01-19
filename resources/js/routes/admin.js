import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import AdminProduct from './../admin/page/Product'
import TipeProduct from './../admin/page/TipeProduct'
import AdminDashboard from './../admin/page/Dashboard'
import InsertProduct from './../admin/page/InsertProduct'
import EditProduct from './../admin/page/EditProduct'
import KategoriProduct from './../admin/page/KategoriProduct'

import AdminLogin from './../admin/page/Login'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/admin/dashboard',
      name: 'AdminDashboard',
      component: AdminDashboard,
      meta: {
        requiresAuth: true
      }
    },
    {
      path: '/admin/product',
      name: 'AdminProduct',
      component: AdminProduct,
      meta: {
        requiresAuth: true
      }
    },
    {
      path: '/admin/AddProduct',
      name: 'InsertProduct',
      component: InsertProduct,
      meta: {
        requiresAuth: true
      }
    },
    {
      path: '/admin/EditProduct',
      name: 'EditProduct',
      component: EditProduct,
      meta: {
        requiresAuth: true
      }
    },
    {
      path: '/admin/kategori',
      name: 'KategoriProduct',
      component: KategoriProduct,
      meta: {
        requiresAuth: true
      }
    },
    {
      path: '/admin/tipe',
      name: 'TipeProduct',
      component: TipeProduct,
      meta: {
        requiresAuth: true
      }
    },
    {
      path: '/admin/auth/login',
      name: 'AdminLogin',
      component: AdminLogin,
      meta: {
        requiresAuth: false
      }
    }
  ]
});
router.beforeEach((to, from, next) => {
  var token = localStorage.getItem('token')
    if (to.matched.some(record => record.meta.requiresAuth)) {
      if (!token) {
        next({
          path: '/admin/auth/login',
          query: {
            redirect: to.fullPath,
          },
        });
      } else {
        next();
      }
    } else {
      next(); 
      if (token) {
        if(to.name == 'AdminLogin') {
          next({
            path: '/admin/dashboard'
          });
        } else {
          next();
        }
      } else {
        next();
      }      
    }
  })
export default router
