import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import AdminProduct from './../admin/page/Product'
import TipeProduct from './../admin/page/TipeProduct'
import AdminDashboard from './../admin/page/Dashboard'
import InsertProduct from './../admin/page/InsertProduct'
import EditProduct from './../admin/page/EditProduct'
import KategoriProduct from './../admin/page/KategoriProduct'


const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/admin/dashboard',
      name: 'AdminDashboard',
      component: AdminDashboard,
      meta: {
        requireAuth: true
      }
    },
    {
      path: '/admin/product',
      name: 'AdminProduct',
      component: AdminProduct,
      meta: {
        requireAuth: true
      }
    },
    {
      path: '/admin/AddProduct',
      name: 'InsertProduct',
      component: InsertProduct,
      meta: {
        requireAuth: true
      }
    },
    {
      path: '/admin/EditProduct',
      name: 'EditProduct',
      component: EditProduct,
      meta: {
        requireAuth: true
      }
    },
    {
      path: '/admin/kategori',
      name: 'KategoriProduct',
      component: KategoriProduct,
      meta: {
        requireAuth: true
      }
    },
    {
      path: '/admin/tipe',
      name: 'TipeProduct',
      component: TipeProduct,
      meta: {
        requireAuth: true
      }
    }
  ]
});

export default router
