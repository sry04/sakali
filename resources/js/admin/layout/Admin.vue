<template>
  <div>
    <div class="vld-parent">
      <loading :active.sync="isLoading"
      :can-cancel="true"
      :on-cancel="onCancel"
      loader="bars"
      :is-full-page="fullPage"></loading>
    </div>
    <div class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
        <header-component/>
        <sidebar-component/>
          <div class="content-wrapper">
            <bread-component />
            <router-view></router-view>
          </div>
         <footer-component />
      </div>
    </div>
  </div>
</template>

<script>
import Loading from 'vue-loading-overlay';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';
import Header  from './../../components/admin/Header'
import Sidebar from './../../components/admin/Sidebar'
import Footer  from './../../components/admin/Footer'
import Bread   from './../../components/admin/Bread'
export default {
  components: {
    'header-component': Header,
    'sidebar-component': Sidebar,
    'footer-component' : Footer,
    'bread-component' : Bread,
    Loading
  },
  data() {
    return {
      isLoading: false,
      fullPage: true
    }
  },
}
</script>

<style lang="css">
</style>
