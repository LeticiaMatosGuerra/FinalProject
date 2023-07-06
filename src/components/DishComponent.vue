<template>
   <main v-if="dataIsReturn">
      <figure class="mobile">
         <img :src="recipe.thumbnail_url" :alt="recipe.name">
      </figure>
      <section class="dishInfo">
         <h1>{{recipe.name}}</h1>
         <ul>
            <li>
               <section>
                  <i v-for="index in recipe.scoreInteger" :key="index" class="fa-solid fa-star"></i>
                  <i v-if="recipe.scoreIsFloat" class="fa-solid fa-star-half"></i>
               </section>
               <article>
                  <p>
                     {{recipe.score}}
                  </p>
               </article>
            </li>
            <li>
               <i class="fa-solid fa-clock"></i>
               <article>
                  <h4>Prep Time</h4>
                  <p>{{recipe.prep_time_minutes}} Minutes</p>
               </article>
            </li>
            <li>
               <span></span>
            </li>
            <li>
               <i class="fa-solid fa-clock"></i>
               <article>
                  <h4>Cook Time</h4>
                  <p>{{recipe.cook_time_minutes}} Minutes</p>
               </article>
            </li>
            <li>
               <span></span>
            </li>
            <li>
               <i class="fa-solid fa-users"></i>
               <article>
                  <p>Serves {{recipe.num_servings}}</p>
               </article>
            </li>
         </ul>
      </section>
      <section class="nutrition">
         <figure class="desktop">
            <img :src="recipe.thumbnail_url" :alt="recipe.name">
         </figure>
         <article>
            <h3>Nutrition Information</h3>
            <ul>
               <li v-for="(value, key) in recipe.nutrition" :key="key" >
                  <p>{{key}}</p>
                  <p>{{value}}</p>
               </li>
            </ul>
         </article>
      </section>
      <section class="selection">
         <h3>Ingredients:</h3>
         <ul v-for="section in recipe.sections" :key="section.name">
            <h5 v-if="section.name != null">{{section.name}}</h5>
            <LiComponent v-for="ingredient of section.components" :key="ingredient" :content="ingredient.raw_text" />
         </ul>
      </section>
      <section class="selection">
         <h3>Directions:</h3>
         <ul>
            <LiComponent v-for="direction of recipe.instructions" :key="direction" :content="direction.display_text" />
         </ul>
      </section>
   </main>
   <main v-else>
      <section class="dishInfo">
         <h1>Loading...</h1>
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
   props:{
      recipeId: Number
   },
   data(){
      return{
         recipe: {
            recipeId: Number,
            name: String,
            thumbnail_url: String,
            score: String,
            scoreInteger: Number,
            scoreIsFloat: Boolean,
            prep_time_minutes: Number,
            cook_time_minutes: Number,
            num_servings: Number,
            nutrition: Object,
            sections: Array,
            instructions: Array
         },
         dataIsReturn: false
      }
   },
   methods:{
      async getRecipeInfo(){
         const url = `https://tasty.p.rapidapi.com/recipes/get-more-info?id=${this.recipeId}`;
         const options = {
            method: 'GET',
            headers: {
               'X-RapidAPI-Key': '5797d19803mshd474a7ef8d65541p1b0cacjsn91d219ec7fd1',
               'X-RapidAPI-Host': 'tasty.p.rapidapi.com'
            }
         };

         try {
            const response = await fetch(url, options);
            const result = await response.text();
            const recipeInfo = JSON.parse(result);
            this.convertRecipe(recipeInfo);
            this.dataIsReturn = true;
         } catch (error) {
            console.error(error);
         }
      },
      convertRecipe(recipeInfo){
         this.recipe.recipeId = recipeInfo.id;
         this.recipe.name = recipeInfo.name;
         this.recipe.thumbnail_url = recipeInfo.thumbnail_url;
         this.recipe.score = (recipeInfo.user_ratings.score*5).toFixed(1);
         this.recipe.scoreInteger = Math.floor(this.recipe.score);
         this.recipe.scoreIsFloat = !Number.isInteger(this.recipe.score);
         this.recipe.prep_time_minutes = recipeInfo.prep_time_minutes;
         this.recipe.cook_time_minutes = recipeInfo.cook_time_minutes;
         this.recipe.num_servings = recipeInfo.num_servings;
         this.recipe.sections = recipeInfo.sections;
         this.recipe.instructions = recipeInfo.instructions;
         this.recipe.nutrition = recipeInfo.nutrition;
         delete this.recipe.nutrition.updated_at;
      }
   },
   beforeMount(){
      this.getRecipeInfo();
   }
}
</script>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
   @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");

   @media (min-width: 300px) {
      main{
         display: flex;
         flex-direction: column;
         align-items: center;
         font-family: "Comfortaa",sans-serif;
      }

      .desktop{
         display: none;
      }

      .mobile > img{
         width: 100%;
         max-height: 80vw;
         border-radius: 0px 0px 20px 20px;
      }

      .nutrition > article,
      main > section{
         display: flex;
         flex-direction: column;
         padding-top: 3vh;
         row-gap: 3vh;
      }

      main > section{
         width: 94%;
      }

      main h1{
         font-size: 30px;
      }

      .dishInfo > ul{
         display: flex;
         flex-wrap: wrap;
         row-gap: 2vh;
         justify-content: space-between;
      }

      .dishInfo li{
         display: flex;
         align-items: center;
         column-gap: 2vw;
      }

      .dishInfo li:first-child{
         width: 100%;
         height: 6vh;
      }

      .dishInfo li > span{
         width: 1px;
         height: 100%;
         background-color: grey;
      }

      .dishInfo li > article{
         display: flex;
         flex-direction: column;
         align-items: center;
      }

      .nutrition ul{
         display: flex;
         flex-direction: column;
         row-gap: 2vh;
      }

      .nutrition li{
         display: flex;
         justify-content: space-between;
      }

      .selection > ul{
         display: flex;
         flex-direction: column;
         row-gap: 2vh;
      }
   }

   @media (min-width: 700px) {
      .mobile{
         display: none;
      }

      .desktop{
         display: block;
         width: 60%;
      }

      .desktop > img{
         width: 100%;
         border-radius: 30px;
      }

      .nutrition{
         flex-direction: row;
         justify-content: space-between;
         font-size: 14px;
      }

      .nutrition > article{
         width: 29%;
         height: fit-content;
         padding: 3%;
         background-color: #e2e2e2;
         border-radius: 30px;
      }

      .dishInfo,
      .dishInfo > ul{
         justify-content: flex-start;
         column-gap: 2vw;
         row-gap: 1vh;
      }

      .dishInfo li{
         display: flex;
         align-items: center;
         column-gap: 2vw;
      }

      .dishInfo li:first-child{
         height: 4vh;
      }

      .dishInfo li > span{
         width: 1px;
         height: 100%;
         background-color: grey;
      }

      .dishInfo li > article{
         display: flex;
         flex-direction: column;
         align-items: center;
      }
   }
</style>