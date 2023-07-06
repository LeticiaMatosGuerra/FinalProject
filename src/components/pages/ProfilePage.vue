<template>
   <HeaderComponent :user="user"/>
   <ProfileComponent :userData="user"/>
   <CardGalleryComponent v-if="bookmarkIsReturned" :dishList="apiList"/>
   <FooterComponent/> 
</template>

<script>
import VueCookies from 'vue-cookies';

import HeaderComponent from '../HeaderComponent.vue';
import ProfileComponent from '../ProfileComponent.vue';
import CardGalleryComponent from '../CardGalleryComponent.vue';
import FooterComponent from '../FooterComponent.vue';

export default {
   name: 'ProfilePage',
   components: {
      HeaderComponent,
      ProfileComponent,
      CardGalleryComponent,
      FooterComponent,
   },
   data(){
      return{
         user: {},
         bookmarksList: [],
         apiList:[],
         bookmarkIsReturned: false,

         bookmarkUrl: "http://localhost/06_CMS_Wordpress_Vue_Angular/final_project/FinalProject/api/bookmark.php",
         serverUrl: "http://localhost/06_CMS_Wordpress_Vue_Angular/final_project/FinalProject/api/server.php",
         token: "",
      }
   },
   methods:{
      async getBookmarks() {
         try {
            await fetch(this.bookmarkUrl, {
               method: "POST",
               body: JSON.stringify({
                     userId: this.user.userId,
               })
            }).then((response) => response.json()
            ).then((data) => {
               if (data.success) {
                  this.bookmarksList = data.bookmarksList;
                  console.log(this.bookmarksList);
               }
            });
         } catch (error) {
            console.log(error);
         }
      },

      async getRecipeInfo(recipeId){
         const url = `https://tasty.p.rapidapi.com/recipes/get-more-info?id=${recipeId}`;
         const options = {
            method: 'GET',
            headers: {
               'X-RapidAPI-Key': '5797d19803mshd474a7ef8d65541p1b0cacjsn91d219ec7fd1',
               'X-RapidAPI-Host': 'tasty.p.rapidapi.com'
            }
         };

         let recipeInfo = null;

         try {
            const response = await fetch(url, options);
            const result = await response.text();
            recipeInfo = JSON.parse(result);
            console.log(recipeInfo);
         } catch (error) {
            console.error(error);
         }

         return recipeInfo;
      },
      
   },
   created(){
      if(VueCookies.isKey("session")){
         this.user = VueCookies.get("session").user;
         this.getBookmarks()
      }
   },
}
</script>

<style>
   #app{
      display: flex;
      flex-direction: column;
      row-gap: 4vh;
   }
</style>