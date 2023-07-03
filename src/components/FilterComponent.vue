<template>
  <section class="filter">
    <input type="checkbox" v-for="ingredients in ingredientsList" :key="ingredients.recipeId">{{ ingredients.ingredients }}
  </section>
</template>


<script>

export default ({
   name: "FilterComponent",
   ingredientsList: [],
})
</script>

