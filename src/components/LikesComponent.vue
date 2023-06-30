<template>
    <ul>
        <li v-for="cardLiked in likedCards" :key="cardLiked.recipeId">
            <CardComponent :dishCard="cardLiked"/>
        </li>
    </ul>
</template>

<script>

export default ({
    name: 'LikesComponent',
    data() {
        return {
        likedCards: [],
        };
    },
  
})
</script>
