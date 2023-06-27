<template>
   <header>
      <a href="./" class="logo">
         <img src="../assets/Dish_dig_logo.png" alt="Dish Dig Logo">
      </a>
      <a href="./" class="profile">
         <p>Hello, {{user.name}}</p>
         <img :src="user.pic" alt="Profile Pic">
      </a>
   </header>
</template>