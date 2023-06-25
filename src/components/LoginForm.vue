<template>
  <h1>Welcome to Dig Dash</h1>
  <form class="login-form">
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</template>

<script>
export default {
  name: 'LoginForm'
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
