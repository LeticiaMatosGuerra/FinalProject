<template>
   <footer>
      <section>
         <a href="./" class="logo">
            <img src="../assets/Dish_dig_logo.png" alt="Dish Dig Logo">
         </a>
         <nav class="footerNav">
            <ul>
               <li>
                  <a href="">Home</a>
               </li>
               <li>
                  <a href="">Profile</a>
               </li>
            </ul>
            <a href="#" class="goTop">
               &#x2191;
            </a>
         </nav>
      </section>
      <p>
         &#xa9; All Rights Reserved 2023
      </p>
   </footer>
</template>

<script>
export default {
   name: 'FooterComponent'
}
</script>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');

   footer{
      font-family: 'Comfortaa', sans-serif;
      display: flex;
      flex-direction: column;
   }

   section{
      display: flex;
      justify-content: space-between;
      align-items: center;
   }
   
   a{
      display: flex;
      text-decoration: none;
      color: black;
   }

   @media (min-width:300px) {
      footer{
         padding: 0px 2%;
      }

      .footerNav > ul{
         display: none;
      }
      
      .logo > img{
         width: 15vh;
         transition: .5s;
      }

      .goTop{
         width: 6vh;
         height: 6vh;
         display: flex;
         justify-content: center;
         align-items: center;
         border-radius: 8px;
         border: 2px solid #316318;
         background-color: #316318;
         font-size: 24px;
         transition: .5s;
      }

      footer > p{
         color: grey;
      }
   }

   @media (min-width: 700px) {
      .logo:hover > img{
         width: 16vh;
      }

      .footerNav{
         display: flex;
         align-items: center;
         column-gap: 6vw;
      }

      .footerNav > ul{
         height: 100%;
         display: flex;
         column-gap: 4vh;
         list-style-type: none;
      }

      .footerNav li{
         height: 100%;
         display: flex;
         align-items: center;
         
      }

      .footerNav li > a{
         font-size: 20px;
         color: black;
         transition: .5s;
      }

      .footerNav li:hover > a{
         color: #316318;
         text-decoration: underline;
      }

      .goTop{
         width: 5vh;
         height: 5vh;
         font-size: 30px;
      }

      .goTop:hover{
         background-color: transparent;
         color: #316318;
         font-size: 36px;
      }

      footer > p{
         font-size: 20px;
      }
   }

   @media (min-width: 1000px) {
      section{
         height: 10vh;
      }

      .logo > img{
         width: 30vh;
      }

      .logo:hover > img{
         width: 31vh;
      }

      .footerNav{
         column-gap: 4vw;
      }

      .footerNav > ul{
         height: 100%;
         display: flex;
         column-gap: 4vh;
      }

      .goTop{
         width: 6vh;
         height: 6vh;
         font-size: 28px;
      }

      .goTop:hover{
         background-color: transparent;
         color: #316318;
         font-size: 34px;
      }

      footer > p{
         font-size: 20px;
      }
   }
</style>