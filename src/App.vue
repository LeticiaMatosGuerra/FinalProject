<template>
  <img alt="Vue logo" src="./assets/Dish_dig_logo.png">
  <div id="app">
   <!--  <LoginForm /> -->
  <RegisterForm/>  
<!--   <UserPage/> -->
    <router-view/>
  </div>
</template>

<script>
 /* import LoginForm from './components/pages/LoginForm.vue'; */
 import RegisterForm from './components/pages/RegisterForm.vue';
/*  import UserPage from './components/pages/UserPage.vue'; */

export default {
  name: 'App',
  components: {
  /*   LoginForm, */
   RegisterForm
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
