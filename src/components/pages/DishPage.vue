<template>
   <HeaderComponent :user="user"/>
   <DishComponent :recipeId="recipeId" />
   <FooterComponent/>
</template>

<script>
import HeaderComponent from '../HeaderComponent.vue';
import DishComponent from '../DishComponent.vue';
import FooterComponent from '../FooterComponent.vue';

export default {
   name: 'DishPage',
   components: {
      HeaderComponent,
      DishComponent,
      FooterComponent,
   },
   data(){
      return{
         user: {
            name: "John Smith",
            pic: "https://pbs.twimg.com/media/Dv__zsiWkAYZst_.jpg"
         },
         recipeId: Number
      }
   },
   created(){
      this.recipeId = this.$route.params.recipeId;
   }
}
</script>