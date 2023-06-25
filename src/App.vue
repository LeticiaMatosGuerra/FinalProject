<template>
  <div id="app">
    <LoginForm />
    <SignUpForm/>
  </div>
</template>

<script>
import LoginForm from './components/LoginForm.vue';
import SignUpForm from './components/SignUpForm.vue';

export default {
  name: 'App',
  components: {
    LoginForm,
    SignUpForm
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
