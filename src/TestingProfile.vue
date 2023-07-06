<template>
    <SignUpForm @signup-successful="updateUserData"/>
    <ProfileComponent :userData="userData"/>
</template>

<script>
import ProfileComponent from './components/ProfileComponent.vue';
import SignUpForm from './components/pages/RegisterForm.vue';


export default {
  name: 'TestingProfile',

  components: {
    ProfileComponent,
    SignUpForm
  },

  data() {
    return {
      userData: {}
    };
  },

  methods: {
    updateUserData(data) {
      this.userData = data;
    }
  }
};
</script>

