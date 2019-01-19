import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    login: false,
    loading: false
  },
  mutations: {  
    setLoading (state, n) {
      state.loading = n
    },
    setLogin (state, n) {
      state.login = n
    }
  },  
})

export default store;