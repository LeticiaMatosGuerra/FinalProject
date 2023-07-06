<template>
   <HeaderComponent :user="user"/>
   <DishComponent :recipeId="recipeId" />
   <FooterComponent/>
</template>

<script>
import VueCookies from 'vue-cookies';

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
         user: {},
         recipeId: Number
      }
   },
   created(){
      if(VueCookies.isKey("session")){
         this.user = VueCookies.get("session").user;
      }
      this.recipeId = this.$route.params.recipeId;
   }
}
</script>