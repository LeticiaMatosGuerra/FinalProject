<template>
    <div class="search-bar">
        <form @submit.prevent="searchValue" >
            <input class="search" type="search" placeholder="Search by recipe name" aria-label="Search" v-model="typed">
            <button type="submit" class="searchBtn">
                <span class="fa-solid fa-magnifying-glass"></span>
            </button>
        </form>
    </div>
</template>

<script>

export default ({
   name: "SearchComponent",

   props: {
        recipesList: []
    },
    data() {
        return {
            // bt default 
            typed: '',
            searchResult: [],
        }
    },
    methods:{
        searchRecipe(){
            
            // searchResult is the recipesList filered
            // for each recipe in the recipe list will get the recipe_name and put into lowercase and will do the same with the user typed. Then compare 
            this.searchResult = this.recipesList.filter(
                (recipe) => 
                recipe.recipe_name.toLowerCase().includes(this.typed.toLowerCase()) || recipe.ingredients.toLowerCase().includes(this.typed.toLowerCase()
                ) // case user search a igredient in the searchbar
            );

            // returnList is the name and searchResult is the new array with the comparation done
            this.$emit("returnList", this.searchResult);
            console.log(this.searchResult); // ok
        },
        
        searchValue(){
            let searchValue = "&q=";
            searchValue += this.typed.replace(" ", "%20");
            this.$emit("searchValue", searchValue);
        }
    }
})
</script>

