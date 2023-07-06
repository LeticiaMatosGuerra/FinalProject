<template>
   <header>
      <a href="./" class="logo">
         <img src="../assets/Dish_dig_logo.png" alt="Dish Dig Logo">
      </a>
      <a href="./" class="profile">
         <p>Hello, {{user.userName}}</p>
         <img :src="user.avatar" alt="Profile Pic">
      </a>
   </header>
</template>

<script>
export default{
   name: 'HeaderComponent',
   props:{
      user: {},
   }
}
</script>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');

   header{
      font-family: 'Comfortaa', sans-serif;
      display: flex;
      justify-content: space-between;
      align-items: center;
   }
   
   header a{
      display: flex;
      text-decoration: none;
      color: black;
   }

   @media (min-width:300px) {
      header{
         padding: 2vh 3%;
      }
      
      .logo > img{
         width: 15vh;
         transition: .5s;
      }

      .profile{
         justify-content: center;
         align-items: center;
         column-gap: 2vw;
         font-size: 14px;
         font-weight: 700;
      }

      .profile > img{
         width: 6vh;
         height: 6vh;
         border-radius: 50px;
         border: 2px solid #316318;
         background-color: #316318;
      }
   }

   @media (min-width: 700px){
      .logo:hover > img{
         width: 16vh;
      }

      .profile{
         height: 6vh;
         font-size: 22px;
         transition: .5s;
      }

      .profile > img{
         width: 5vh;
         height: 5vh;
         transition: .5s;
      }

      .profile:hover{
         color: #316318;
         font-size: 24px;
      }

      .profile:hover  > img{
         width: 5.5vh;
         height: 5.5vh;
      }
   }

   @media (min-width: 1000px) {
      header{
         height: 10vh;
      }

      .logo > img{
         width: 30vh;
      }

      .logo:hover > img{
         width: 31vh;
      }

      .profile{
         height: 6vh;
      }

      .profile > img{
         width: 6vh;
         height: 6vh;
      }

      .profile:hover  > img{
         width: 6.5vh;
         height: 6.5vh;
      }
   }
</style>