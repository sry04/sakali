<template>
  <div>
      <menu-component />
      <router-view></router-view>
  </div>
</template>

<script>
import Menu  from './../../components/user/Menu'

export default {
  components: {
      'menu-component': Menu
  },
}
</script>

<style lang="css">
</style>
