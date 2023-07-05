<template>
  <!-- <router-view></router-view> -->
  <ProfileComponent :userData="userData"/>
</template>

<script>
import ProfileComponent from './components/ProfileComponent.vue';

export default {
  name: 'App',
  components: {
    ProfileComponent
  }
}
</script>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
