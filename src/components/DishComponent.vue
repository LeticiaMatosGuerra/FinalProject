<template>
   <main>
      <figure>
         <img src="../assets/logo.png" alt="dish">
      </figure>
      <section class="dishInfo">
         <h1>Dish Name</h1>
         <ul>
            <li>
               <i class="fa-solid fa-clock"></i>
               <article>
                  <h4>Prep Time</h4>
                  <p># Minutes</p>
               </article>
            </li>
            <li>
               <i class="fa-solid fa-clock"></i>
               <article>
                  <h4>Cook Time</h4>
                  <p># Minutes</p>
               </article>
            </li>
            <li>
               <i class="fa-solid fa-users"></i>
               <article>
                  <p>Serves #</p>
               </article>
            </li>
         </ul>
      </section>
      <section>
         <figure>
            <img src="../assets/logo.png" alt="dish">
         </figure>
         <article>
            <h3>Nutrition Information</h3>
            <ul>
               <li>
                  <p>Lorem ipsum dolor sit amet.</p>
               </li>
               <li>
                  <p>Aliquid animi voluptatem modi error.</p>
               </li>
               <li>
                  <p>Magni blanditiis quae officiis veritatis.</p>
               </li>
            </ul>
         </article>
      </section>
      <section>
         <h3>Ingredients</h3>
         <ul>
            <LiComponent v-for="ingredient of ingredientsList" :key="ingredient" :content="ingredient" />
         </ul>
      </section>
   </main>
</template>

<script>
import LiComponent from './LiComponent.vue'

export default {
   name: 'DishComponent',
   components: {
      LiComponent
   },
   data(){
      return{
         ingredientsStr: "8 small Granny Smith apples, dsafasdfadfa or as needed &#44;  ½ cup unsalted butter &#44; 3 tablespoons all-purpose flour &#44; ½ cup white sugar &#44;  ½ cup packed brown sugar &#44; ¼ cup water&#44; 1 (9 inch) doub",
         ingredientsList: []
      }
   },
   methods:{
      createList(){
         // this.ingredientsStr = this.ingredientsStr.replaceAll("&#44;", "//");
         this.ingredientsList = this.ingredientsStr.split("&#44;");
      }
   },
   created(){
      this.createList();
   }
}
</script>

<style>
   @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");

   
</style>