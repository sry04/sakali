<template>
  <div>
    <div class="container">
      <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <form v-on:submit.prevent="doLogin()">
          {{error}}
          <div class="form-group">
            <input type="text" class="form-control" v-model="form.payload.username" placeholder="Username..">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" v-model="form.payload.password" placeholder="Password..">
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
import AuthService from './../service/AuthService'
import {setToken} from './../utility/auth'
export default {
  data () {
    return {
      form: {
        payload: {
          username: 'asepmedia',
          password: 'secret'
        }
      },
      error: ''
    }
  },
  methods: {
    async doLogin() {
      this.$store.commit('setLoading', true)
      await AuthService.login(this.form).then(res => {
        setToken(res.token)
        this.$store.commit('setLogin', true)
        this.$router.push({
          name: 'AdminDashboard'
        })
        this.$store.commit('setLoading', false)
      })
    }
  }
}
</script>