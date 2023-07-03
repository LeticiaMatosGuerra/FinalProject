<template>
   <HeaderComponent :user="user"/>
   <HomeComponent />
   <FooterComponent/>
</template>

<script>
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
         user: {
            name: "John Smith",
            pic: "https://pbs.twimg.com/media/Dv__zsiWkAYZst_.jpg"
         }
      }
   }
}
</script>