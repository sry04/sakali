import Vue from 'vue'
import store from '../store/admin.js'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// import AdminProduct from './../admin/page/Product'
// import InsertProduct from './../admin/page/InsertProduct'
// import EditProduct from './../admin/page/EditProduct'
// import KategoriProduct from './../admin/page/KategoriProduct'
// import InsertKategori from './../admin/page/InsertKategori'
// import EditKategori from './../admin/page/EditKategori'

import TipeProduct from './../admin/page/TipeProduct'
import InsertTipe from './../admin/page/InsertTipe'
import EditTipe from './../admin/page/EditTipe'

import AdminDashboard from './../admin/page/Dashboard'
import Logout from './../admin/page/Logout'
import Login from './../admin/page/Login'


import AdminLogin from './../admin/page/Login'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/admin/dashboard',
      name: 'AdminDashboard',
      component: AdminDashboard,
      meta: { requiresAuth: true }
    },
    {
       path: '/admin/',
       redirect: { name: 'login' }
     },
    {
        path: '/admin/logout',
        name: 'logout',
        component: Logout
    },
    {
        path: '/admin/login',
        name: 'login',
        component: Login
    },
    {
      path: '/admin/InsertTipe',
      name: 'InsertTipe',
      component: InsertTipe,
      meta: { requireAuth: true }
    },
    {
      path: '/admin/EditTipe',
      name: 'EditTipe',
      component: EditTipe,
      meta: { requireAuth: true }
    },
    {
      path: '/admin/tipe',
      name: 'TipeProduct',
      component: TipeProduct,
      meta: { requiresAuth: true }
    },
    // {
    //   path: '/admin/product',
    //   name: 'AdminProduct',
    //   component: AdminProduct,
    //   meta: {
    //     requiresAuth: true
    //   }
    // },
    // {
    //   path: '/admin/AddProduct',
    //   name: 'InsertProduct',
    //   component: InsertProduct,
    //   meta: {
    //     requiresAuth: true
    //   }
    // },
    // {
    //   path: '/admin/EditProduct',
    //   name: 'EditProduct',
    //   component: EditProduct,
    //   meta: {
    //     requiresAuth: true
    //   }
    // },
    // {
    //   path: '/admin/kategori',
    //   name: 'KategoriProduct',
    //   component: KategoriProduct,
    //   meta: {
    //     requiresAuth: true
    //   }
    // },
    // {
    //   path: '/admin/Addkategori',
    //   name: 'InsertKategori',
    //   component: InsertKategori,
    //   meta: {
    //     requireAuth: true
    //   }
    // },
    // {
    //   path: '/admin/Editkategori',
    //   name: 'EditKategori',
    //   component: EditKategori,
    //   meta: {
    //     requireAuth: true
    //   }
    // },
    //
    // {
    //   path: '/admin/auth/login',
    //   name: 'AdminLogin',
    //   component: AdminLogin,
    //   meta: {
    //     requiresAuth: false
    //   }
    // },

  ]
});
// router.beforeEach((to, from, next) => {
//   var token = localStorage.getItem('token')
//     if (to.matched.some(record => record.meta.requiresAuth)) {
//       if (!token) {
//         next({
//           path: '/admin/auth/login',
//           query: {
//             redirect: to.fullPath,
//           },
//         });
//       } else {
//         next();
//       }
//     } else {
//       next();
//       if (token) {
//         if(to.name == 'AdminLogin') {
//           next({
//             path: '/admin/dashboard'
//           });
//         } else {
//           next();
//         }
//       } else {
//         next();
//       }
//     }
//   })
router.beforeEach((to, from, next) => {

    // check if the route requires authentication and user is not logged in
    if (to.matched.some(route => route.meta.requiresAuth) && !store.state.isLoggedIn) {
        // redirect to login page
        next({ name: 'login' })
        return
    }

    // if logged in redirect to dashboard
    if(to.path === '/admin/login' && store.state.isLoggedIn) {
        next({ name: 'AdminDashboard' })
        return
    }

    next()
})

export default router
