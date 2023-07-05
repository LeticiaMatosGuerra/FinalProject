<template>
    <section class="ProfileWrap">
        <figure class="ProfileInfo">
            <!-- Profile Pic -->
            <img :src="userInfo.image" :alt="userInfo.name">

            <figcaption>
                <!-- Name -->
                <h3>{{ userInfo.name }}</h3>

                <!-- Email -->
                <h4>{{ userInfo.email }}</h4>
            </figcaption>
        </figure>

        <button class="likedBtn">
            Liked Recipes
        </button>
        <LikesComponent/>
    </section>
</template>

<script>

import LikesComponent from "./LikesComponent.vue" 

export default {
  name: 'ProfileComponent',
  components: {
    LikesComponent
  },
  props: {
    userData: {
      type: Object,
      // just for testing 
      default: () => ({
        image: "https://images.pexels.com/photos/14918399/pexels-photo-14918399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
        name: "Letícia",
        email:  "test@gmail.com"
      })
    }
  },
  data() {
    return {
      userInfo: {
        image: this.userData.image ,
        name: this.userData.name ,
        email: this.userData.email
      }
    };
  }
};
</script>

<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Comfortaa', sans-serif;
}

@media (min-width: 300px) {

    .ProfileInfo{
        align-items: center;
        width: 100%;
        justify-content: center;
        padding-bottom: 5vh;
    }

    .ProfileInfo,
    .ProfileInfo figcaption{
        display: flex;
        flex-direction: column;
        row-gap: 3vh;
    }


    .ProfileInfo img {
        width: 20vh;
        height: 20vh;
        border-radius: 50%;
    }

    .likedBtn{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 15vh;
        background-color: #4a7534;
        border-radius: 10px;
        color: whitesmoke;
        font-weight: 600;
        padding: 1vh;
        border: 1px solid transparent;
    }
   
}

@media (min-width: 600px){
    .ProfileWrap {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .ProfileInfo{
        display: flex;
        flex-direction: row;
        column-gap: 5vh;
    }

    .likedBtn{
        width: 20vh;
    }
}
</style>
