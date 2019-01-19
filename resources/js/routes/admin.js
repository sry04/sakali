import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import AdminProduct from './../admin/page/Product'
import TipeProduct from './../admin/page/TipeProduct'
import InsertTipe from './../admin/page/InsertTipe'
import EditTipe from './../admin/page/EditTipe'
import AdminDashboard from './../admin/page/Dashboard'
import InsertProduct from './../admin/page/InsertProduct'
import EditProduct from './../admin/page/EditProduct'
import KategoriProduct from './../admin/page/KategoriProduct'
import InsertKategori from './../admin/page/InsertKategori'
import EditKategori from './../admin/page/EditKategori'


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
      path: '/admin/Addkategori',
      name: 'InsertKategori',
      component: InsertKategori,
      meta: {
        requireAuth: true
      }
    },
    {
      path: '/admin/Editkategori',
      name: 'EditKategori',
      component: EditKategori,
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
    },
    {
      path: '/admin/InsertTipe',
      name: 'InsertTipe',
      component: InsertTipe,
      meta: {
        requireAuth: true
      }
    },
    {
      path: '/admin/EditTipe',
      name: 'EditTipe',
      component: EditTipe,
      meta: {
        requireAuth: true
      }
    }
  ]
});

export default router
