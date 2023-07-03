<template>
  <div v-if="dataIsReturn" class="HomePage">
    <!-- @ the name we gave in emit with the new array -->
    <SearchComponent @searchValue="this.searchVal" @returnList="this.searchRecipe" :recipesList="this.apiList"/>

    <!-- show all the results from the api if the check theres no slot in localResult -->
    
    <CardGalleryComponent :dishList="apiList" v-if="!this.checkSearch()"/> 
    <!-- if theres result show it -->
    <CardGalleryComponent :dishList="this.localResult" v-else/>

    <section class="pageBtn">
      <button @click="pageSelector('prev')">Prev</button>
      <button @click="pageSelector('next')">Next</button>
    </section>
  </div>
  <div><h1>Loading...</h1></div>
</template>


<script>
import CardGalleryComponent from './CardGalleryComponent.vue';
import SearchComponent from './SearchComponent.vue';



export default {
  name: 'HomePage',
  components: {
    CardGalleryComponent,
    SearchComponent,
  },

  data(){
    return {
      apiList:[],
      dishesApi: "http://localhost/FinalProject/api/rest/api/V1/recipeApi.php",
      localResult: [], // we will put the array compared in this one.
      searchValue: "&q=",
      pageNumber: 0,
      dataIsReturn: false
    }
  },

  methods: {
    async getRecipeList() {
      let url = `https://tasty.p.rapidapi.com/recipes/list?from=${this.pageNumber}&size=10`;
      const options = {
        method: 'GET',
        headers: {
          'X-RapidAPI-Key': '5797d19803mshd474a7ef8d65541p1b0cacjsn91d219ec7fd1',
          'X-RapidAPI-Host': 'tasty.p.rapidapi.com'
        }
      };

      if(this.searchValue != "&q="){
        url += this.searchValue;
      }

      try {
        const response = await fetch(url, options);
        const result = await response.text();
        const recipeList = JSON.parse(result);
        this.apiList = recipeList.results;
        console.log(url);
        this.dataIsReturn = true;
      } catch (error) {
        console.error(error);
      }
    },

    // put the event in the localResult array
    searchRecipe(e) {
      this.localResult = e;
    },

    searchVal(e) {
      this.searchValue = e;
      this.pageNumber = 0;
      this.getRecipeList();
    },

    pageSelector(selector){
      if(selector == "prev" && this.pageNumber>0){
        this.pageNumber = this.pageNumber - 8;
        this.getRecipeList();
      }
      else if(selector == "next"){
        this.pageNumber = this.pageNumber + 8;
        this.getRecipeList();
      }
    },

    // check if theres any slots in the array
    checkSearch() {
      if (this.localResult.length > 0) {
        return true;
      } else {
        return false;
      }
    }

  },
    created() {
      // this.getRecipeList();
    }
}
</script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');

body {
  font-family: 'Comfortaa', sans-serif;
}

* {
    margin: 0;
    padding: 0;
}


/* mobile version */
@media (min-width: 300px) {
  
  .HomePage{
    /* width: 90%;
    height: 100%; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .search-bar{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 5vh;
  }

  .search-bar > form{
    display: flex;
    align-items: center;
    column-gap: 2vw;
  }

  .search{
    width: 35vh;
    border-radius: 5px;
    border: 1px solid lightgray;
    padding: 5px;
  }

  .fa-magnifying-glass{
    color: lightgray;
  }

  .search::placeholder{
    text-align: center;
  }

  .search:hover{
    background-color: lightgray;
    border: 1px solid dimgray;
  }

  .searchBtn{
    background-color: transparent;
    border: none;
    font-size: 20px;
    transition: .5s;
  }

  .pageBtn{
    display: flex;
    column-gap: 10vw;
  }

  .pageBtn > button{
    padding: 1vh;
    color: whitesmoke;
    background-color: #316318;
    border: 3px solid #316318;
    border-radius: 10px;
    font-size: 16px;
    transition: .5s;
  }

  .dishGallery ul {
    width: 90%;
    padding-left: 5vh;
    list-style: none;
    display: flex;
    flex-direction: column;
    row-gap: 5vh;
  }

  .cardFigure{
    width: 35vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    box-shadow: 3px -2px 10px 4px gainsboro;

  }

  .cardFigure img{
    position: cover;
    border-radius: 10px;
  }

  .cardFigcaption{
    border: 1px solid ghostwhite;
    padding: 2vh;
    border-radius: 10px;
  }

  .card-info {
    width: 30vh;
    display: flex;
    justify-content: center;
    column-gap: 2vh;
  }

  
}

@media (min-width: 600px){
  .dishGallery{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .dishGallery ul {
    width: 90%; 
    padding-right: 5vh;
    list-style: none;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    column-gap: 10px;
  }

  .search-bar > form{
    column-gap: 1vw;
  }

  .searchBtn:hover{
    cursor: pointer;
    scale: 1.1;
  }

  .pageBtn > button:hover{
    background-color: transparent;
    color: #316318;
    cursor: pointer;
    scale: 1.1;
  }
}


/* figcaption {
  border: 1px solid ghostwhite;
  box-shadow: 2px 2px 2px  gainsboro;
  padding: 2vh;
} */



/* .cardImg {
  display: flex;
  justify-content: center;
  column-gap: 2vh;

}

.dishCard {
  background-size: cover;
  background-position: center;
}

.fa-heart {
  padding: 8px;
  font-size: 22px;
  cursor: pointer;
} */



img {
  width: 100%;
}

.dishGallery {
  display: flex;
  flex-direction: column;
  align-items: center;
  row-gap: 4vh;
}
</style>
