<template>
   <HeaderComponent :user="user"/>
   <HomeComponent />
   <FooterComponent/>
</template>

<script>
import VueCookies from 'vue-cookies';

import HeaderComponent from '../HeaderComponent.vue';
import HomeComponent from '../HomeComponent.vue';
import FooterComponent from '../FooterComponent.vue';

export default {
   name: 'DishPage',
   components: {
      HeaderComponent,
      HomeComponent,
      FooterComponent,
   },
   data(){
      return{
         user: {}
      }
   },
   created(){
      if(VueCookies.isKey("session")){
         this.user = VueCookies.get("session").user;
         console.log(this.user);
      }
   }
}
</script>