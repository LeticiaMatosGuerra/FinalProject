<template>
  <section v-if="!registered" class="signup-form">
    <form @submit.prevent="signup">
      <div class="form-group">
        <input type="text" v-model.lazy="name" name="userName" id="userName" placeholder="Name" class="form-control">
        <input type="email" v-model.lazy="email" name="email" id="email" placeholder="Email" class="form-control">
        <input type="password" v-model.lazy="password" name="password" id="password" placeholder="Password" class="form-control">
      </div>
      <div class="form-group">
        <label for="userPicture" class="btn-file">
          <i class="fa-solid fa-plus"></i>
          Add Profile image
        </label>
        <!-- could not do with the type="file"-->
        <input type="text" v-model.lazy="image" name="userPicture" id="userPicture"> 
      </div>
      <input type="submit" value="Sign up" class="btn btn-primary btn-lg">
    </form>
  </section>
  <section v-else>
    <h1>Welcome to Dig Dash</h1>
    <p>You have successfully registered!</p>
    <button @click="resetForm" type="button" class="btn btn-primary">Register Again</button>
  </section>
</template>

<script>
import VueCookies from 'vue-cookies'

export default {
  name: 'SignUpForm',
  data() {
    return {
      registered: false,
      name: '',
      email: '',
      password: '',
      image:'',
      registrationUrl: 'http://localhost/src/api/register.php',
      serverUrl: 'http://localhost/src/api/server.php',
      token: ''
    }
  },
  methods: {
    async signup() {
      try {
        await fetch(this.registrationUrl, {
          method: 'POST',
          body: JSON.stringify({
            email: this.email,
            password: this.password
          })
        }).then((response) => response.json()
        ).then((data) => {
          if (data.success) {
            this.token = data.sessionToken; 
            // name we will call to get this object at TestingProfile
            this.$emit('signup-successful', {
              name: this.name,
              email: this.email,
              image: this.image
            });
          }
        });

      } catch (error) {
        console.log(error);
      }
      VueCookies.set('session', this.token, '30d');
      this.registered = true;
      console.log(VueCookies.get('session'));
    },
    resetForm() {
      this.registered = false;
      this.name = '';
      this.email = '';
      this.password = '';
    }
  }
}
</script>

<style scoped>
.signup-form {
  max-width: 300px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn-primary {
  display: block;
  width: 100%;
  padding: 8px;
  background-color: rgb(63, 126, 63);
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: rgb(62, 187, 62);
}

.btn-lg {
  font-size: 18px;
}

@media (max-width: 767px) {
  .signup-form {
    max-width: 100%;
    padding: 20px;
  }
}
</style>
