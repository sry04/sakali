<template>
<div class="">
  <section v-for="menu in sidebarMenu.menu" v-bind:key="menu.id" v-if="$route.name == menu.route.name" class="content-header">
  <h1>
    {{menu.title}}
  </h1>
  </section>
 </div>
</template>

<script>

import sidebar from './../../admin/utility/sidebar'
export default {
  data () {
    return {
      sidebarMenu: sidebar
    }
  }
}
</script>

<style lang="css">
</style>
