<template>
<section>
  <form @submit.prevent="login">
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input v-model.lazy="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input  v-model.lazy="password" type="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</section>
</template>

<script>
import VueCookies from 'vue-cookies'

export default {
  name: 'LoginForm',
  data() {
    return {
      logged: false,
      email: "",
      password: "",
      loginUrl: "http://localhost/06_CMS_Wordpress_Vue_Angular/final_project/FinalProject/api/login.php",
      serverUrl: "http://localhost/06_CMS_Wordpress_Vue_Angular/final_project/FinalProject/api/server.php",
      token: "",
      userLogged: {},
    }
  },
  methods: {
      async login() {
        console.log(this.email);
        console.log(this.password);

          try {
              await fetch(this.loginUrl, {
                  method: "POST",
                  body: JSON.stringify({
                      email: this.email,
                      password: this.password
                  })
              }).then((response) => response.json()
              ).then((data) => {
                  if (data.success) {
                      this.token = data.sessionToken;
                      this.userLogged = data.user; 
                  }
              });
          } catch (error) {
              console.log(error);
          }
          if(this.token){
            VueCookies.set("session", {"token": this.token, "user": this.userLogged}, "60d");
            this.logged = true;
            console.log(VueCookies.get("session"));
            window.location.replace("/")
          }
          
      },
      logout() {
          if (VueCookies.isKey("session")) {
              VueCookies.remove("session");
              this.logged = false;
          }
      }
  },
  created() {
      if(VueCookies.isKey("session")) {
          this.logged = true;
      }
  }
}
</script>

<style>
.login-form {
  max-width: 300px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

.form-label {
  display: block;
  font-weight: bold;
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
  background-color:rgb(63, 126, 63) ;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: rgb(62, 187, 62);
}

/* Responsive Styles */
@media (max-width: 767px) {
  .login-form {
    max-width: 100%;
    padding: 20px;
  }
}

@media (min-width: 768px) {
  .login-form {
    max-width: 400px;
  }
}
</style>
